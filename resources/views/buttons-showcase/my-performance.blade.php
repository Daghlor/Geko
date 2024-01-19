<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight dark:text-white">
                {{ __('Mi Desempeño') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-4">
        <!-- Campos arriba -->
        <div class="mb-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-4">
            <!-- Campo 1 -->
            <div>
                <label for="campo1" class="block text-sm font-medium text-gray-700 dark:text-gray-400">Evaluador</label>
                <input type="text" id="campo1" name="campo1"
                    class="mt-1 p-2 border rounded-md w-full dark:bg-eval-0 dark:border-eval-2 dark:text-white">
            </div>

            <!-- Campo 2 -->
            <div>
                <label for="campo2"
                    class="block text-sm font-medium text-gray-700 dark:text-gray-400">Dependencia</label>
                <input type="text" id="campo2" name="campo2"
                    class="mt-1 p-2 border rounded-md w-full dark:bg-eval-0 dark:border-eval-2 dark:text-white">
            </div>

            <!-- Campo 3 -->
            <div>
                <label for="campo3" class="block text-sm font-medium text-gray-700 dark:text-gray-400">Area</label>
                <input type="text" id="campo3" name="campo3"
                    class="mt-1 p-2 border rounded-md w-full dark:bg-eval-0 dark:border-eval-2 dark:text-white">
            </div>

            <!-- Campo 4 -->
            <div>
                <label for="campo4" class="block text-sm font-medium text-gray-700 dark:text-gray-400">Cargo</label>
                <input type="text" id="campo4" name="campo4"
                    class="mt-1 p-2 border rounded-md w-full dark:bg-eval-0 dark:border-eval-2 dark:text-white">
            </div>

            <!-- Campo 5 -->
            <div>
                <label for="campo5" class="block text-sm font-medium text-gray-700 dark:text-gray-400">Nombres</label>
                <input type="text" id="campo5" name="campo5"
                    class="mt-1 p-2 border rounded-md w-full dark:bg-eval-0 dark:border-eval-2 dark:text-white">
            </div>

            <!-- Campo 6 -->
            <div>
                <label for="campo6"
                    class="block text-sm font-medium text-gray-700 dark:text-gray-400">Identificacion</label>
                <input type="text" id="campo6" name="campo6"
                    class="mt-1 p-2 border rounded-md w-full dark:bg-eval-0 dark:border-eval-2 dark:text-white">
            </div>
        </div>

        <!-- Tabla abajo -->
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white dark:bg-eval-1 border border-gray-300 dark:border-eval-2">
                <!-- Encabezado de la tabla -->
                <thead class="dark:bg-eval-2">
                    <tr>
                        <th class="border-b p-2 text-left dark:text-white">ID</th>
                        <th class="border-b p-2 text-left dark:text-white">Evaluador</th>
                        <th class="border-b p-2 text-left dark:text-white">Dependencia</th>
                        <th class="border-b p-2 text-left dark:text-white">Area</th>
                        <th class="border-b p-2 text-left dark:text-white">Cargo</th>
                        <th class="border-b p-2 text-left dark:text-white">Nombres</th>
                        <th class="border-b p-2 text-left dark:text-white">Identificacion</th>
                        <th class="border-b p-2 text-left dark:text-white">Correo Electrónico</th>
                        <th class="border-b p-2 text-left dark:text-white"></th>
                        <!-- Agrega más encabezados según sea necesario -->
                    </tr>
                </thead>
                <!-- Cuerpo de la tabla -->
                <tbody>
                    <tr class="dark:bg-eval-0">
                        <td class="border-b p-2 dark:text-white">Dato 1</td>
                        <td class="border-b p-2 dark:text-white">Dato 2</td>
                        <td class="border-b p-2 dark:text-white">Dato 3</td>
                        <td class="border-b p-2 dark:text-white">Dato 4</td>
                        <td class="border-b p-2 dark:text-white">Dato 5</td>
                        <td class="border-b p-2 dark:text-white">Dato 6</td>
                        <td class="border-b p-2 dark:text-white">Dato 7</td>
                        <td class="border-b p-2 dark:text-white">Dato 8</td>
                        <td class="border-b p-2">
                            <!-- Botón que redirige a otra vista -->
                            <a
                                class="py-1 px-2 text-white bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue active:bg-blue-700">
                                Ir a Otra Vista
                            </a>
                        </td>
                        <!-- Agrega más datos según sea necesario -->
                    </tr>
                    <!-- Repite este patrón para más filas -->
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
