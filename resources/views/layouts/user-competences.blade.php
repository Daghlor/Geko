<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('') }}
            </h2>
        </div>
    </x-slot>
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white dark:bg-eval-1 border border-gray-300 dark:border-eval-2">
            <!-- Encabezado de la tabla -->
            <thead class="dark:bg-eval-2">
                <tr>
                    <th class="border-b p-2 text-left dark:text-white">Nombres</th>
                    <th class="border-b p-2 text-left dark:text-white">Identificacion</th>
                    <th class="border-b p-2 text-left dark:text-white">Dependencia</th>
                    <th class="border-b p-2 text-left dark:text-white">Area</th>
                    <th class="border-b p-2 text-left dark:text-white">Cargo</th>
                    <th class="border-b p-2 text-left dark:text-white">Interno/externo</th>
                    <th class="border-b p-2 text-left dark:text-white">Acreditacion</th>
                    <!-- Agrega más encabezados según sea necesario -->
                </tr>
            </thead>
            <!-- Cuerpo de la tabla -->
            <tbody>
                <tr class="dark:bg-eval-0">
                    <td class="border-b p-2 dark:text-white">David Tuta</td>
                    <td class="border-b p-2 dark:text-white">12345</td>
                    <td class="border-b p-2 dark:text-white">Bogota</td>
                    <td class="border-b p-2 dark:text-white">Recursos Humanos</td>
                    <td class="border-b p-2 dark:text-white">Gerente</td>
                    <td class="border-b p-2 dark:text-white"></td>
                    <td class="border-b p-2 dark:text-white">80%</td>

                    <!-- Agrega más datos según sea necesario -->
                </tr>
                <!-- Repite este patrón para más filas -->
            </tbody>
        </table>
    </div>

    <div class="accordion">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button" type="button" aria-expanded="false"
                    aria-controls="accordion-content-1">
                    Título del panel 1
                </button>
            </h2>
            <div id="accordion-content-1" class="accordion-collapse collapse" aria-labelledby="heading-1">
                <div class="accordion-body">
                    Contenido del panel 1
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
