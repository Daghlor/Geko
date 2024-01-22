<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Mi Ruta') }}
            </h2>
        </div>
    </x-slot>

    <p class="py-4 text-gray-600 dark:text-gray-400">user performance</p>

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


</x-app-layout>
