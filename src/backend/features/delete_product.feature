Feature: Eliminar un producto de la API GraphQL

  Scenario: Borrar un producto por su ID
    Given el backend está corriendo
    And hago una mutación GraphQL para crear un producto con:
      | id          | behat-12345             |
      | name        | Producto de prueba      |
      | description | Una descripción genérica |
      | price       | 30.99                   |
    When hago una mutación GraphQL para eliminar el producto con ID "behat-12345"
    Then el producto con ID "behat-12345" ya no debe existir en la API