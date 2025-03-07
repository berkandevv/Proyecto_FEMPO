<?php

use App\Entity\Product;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\TableNode;
use Faker\Factory;
use Symfony\Component\HttpClient\HttpClient;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    private $httpClient;
    private $responseData;
    private array $createdProducts = [];

    public function __construct()
    {
        $this->httpClient = HttpClient::create();
    }

    /**
     * @BeforeScenario
     */
    public function limpiarBaseDeDatos()
    {
        $this->httpClient->request('POST', 'http://localhost:8000/api/graphql', [
            'headers' => ['Content-Type' => 'application/json'],
            'body' => json_encode([
                'query' => 'mutation { deleteAllProducts { clientMutationId } }'
            ])
        ]);
    }

    /**
     * @Given el backend está corriendo
     */
    public function elBackendEstaCorriendo()
    {
        $response = $this->httpClient->request('GET', 'http://localhost:8000/api');
        if ($response->getStatusCode() !== 200) {
            throw new \Exception("El backend no está disponible");
        }
    }

    /**
     * @When hago una mutación GraphQL para crear un producto con:
     */
    public function hagoUnaMutacionGraphqlParaCrearUnProductoCon(TableNode $table)
    {
        $data = $table->getRowsHash();
        $mutation = json_encode([
            'query' => 'mutation {
                createProduct(input: {
                    _id: "' . $data['id'] . '",
                    name: "' . $data['name'] . '",
                    description: "' . $data['description'] . '",
                    price: ' . $data['price'] . '
                }) {
                    product { id name description price }
                }
            }'
        ]);

        $this->responseData = $this->httpClient->request('POST', 'http://localhost:8000/api/graphql', [
            'headers' => ['Content-Type' => 'application/json'],
            'body' => $mutation
        ])->toArray();

        $this->createdProducts[] = $data['id'];
    }

    /**
     * @Then la respuesta de :operation debe contener en la raiz:
     */
    public function laRespuestaDebeContenerEnLaRaiz(String $operation, TableNode $table)
    {
        try {
            $expectedData = $table->getRowsHash();
            $actualData = $this->responseData['data'][$operation];

            foreach ($expectedData as $key => $value) {
                if ($actualData[$key] != $value) {
                    throw new \Exception("La respuesta no contiene el valor esperado para $key - " . serialize($this->responseData));
                }
            }
        } catch (Exception $e) {
            throw new \Exception("Excepción inesperada al comprobar la respuesta - " . serialize($this->responseData));
        }
    }

    /**
     * @AfterScenario
     */
    public function limpiarProductosCreados()
    {
        foreach ($this->createdProducts as $productId) {
            $this->httpClient->request('POST', 'http://localhost:8000/api/graphql', [
                'headers' => ['Content-Type' => 'application/json'],
                'body' => json_encode([
                    'query' => 'mutation { deleteByIdProduct(input: { _id: "' . $productId . '" }) { clientMutationId } }'
                ])
            ]);
        }
    }
}