'use client';  // Esto marca el componente como un Client Component

export default function TestComponent() {
  return (
    <div className="flex justify-center items-center h-screen bg-gray-100">
      <div className="text-center space-y-4">
        <h1 className="text-4xl font-extrabold text-blue-600 animate-pulse">🚀 Bienvenid@ 🚀</h1>
        <p className="text-lg text-gray-700">
          ¡Bienvenido a nuestro increíble proyecto de desarrollo web! Aquí puedes encontrar recursos, tutoriales y mucho más.
        </p>
        <button 
          className="px-6 py-3 bg-blue-500 text-white font-semibold rounded-lg hover:bg-blue-600 transition duration-300"
          onClick={() => alert('¡Gracias por visitar CodeArts!')}>
          Explorar Más
        </button>
      </div>
    </div>
  );
}
