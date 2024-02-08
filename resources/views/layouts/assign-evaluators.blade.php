<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Asignación de colaboradores:') }}
            </h2>
        </div>
    </x-slot>

    <p class="py-4 text-gray-600 dark:text-gray-400">Bienvenido al proceso de Evaluación de Competencias. Para realizar
        este proceso de manera íntegra, por favor, asigna a cada colaborador presente en este listado, el Evaluador
        Interno que realizará su evaluación.
        <br> <br>
        Asegúrate de que los Evaluador Internos que asignes cuenten con los conocimientos técnicos que se evaluarán a
        los colaboradores.
        <br> <br>
        Si tienes alguna pregunta o inquietud, no dudes en comunicarte con el Centro de Excelencia Formación y HRBP.


    </p>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white dark:bg-eval-1 border border-gray-300 dark:border-eval-2">
            <!-- Encabezado de la tabla -->
            <thead class="dark:bg-eval-2">
                <tr>
                    <th class="border-b p-2 text-left dark:text-white">Nombres</th>
                    <th class="border-b p-2 text-left dark:text-white">Identificación</th>
                    <th class="border-b p-2 text-left dark:text-white">Dependencia</th>
                    <th class="border-b p-2 text-left dark:text-white">Área</th>
                    <th class="border-b p-2 text-left dark:text-white">Cargo</th>
                    <th class="border-b p-2 text-left dark:text-white">Interno/externo</th>
                    <th class="border-b p-2 text-left dark:text-white">Evaluador</th>
                    <!-- Agrega más encabezados según sea necesario -->
                </tr>
            </thead>
            <!-- Cuerpo de la tabla -->
            <tbody>
                <tr class="dark:bg-eval-0">
                    <td class="border-b p-2 dark:text-white">David Tuta</td>
                    <td class="border-b p-2 dark:text-white">12345</td>
                    <td class="border-b p-2 dark:text-white">Bogotá</td>
                    <td class="border-b p-2 dark:text-white">Recursos Humanos</td>
                    <td class="border-b p-2 dark:text-white">Gerente</td>
                    <td class="border-b p-2 dark:text-white"></td>
                    <td class="border-b p-2 dark:text-white">
                        <select>
                            <option value="evaluador1">Evaluador 1</option>
                            <option value="evaluador2">Evaluador 2</option>
                            <!-- Agrega más opciones según sea necesario -->
                        </select>
                    </td>
                    <!-- Agrega más datos según sea necesario -->
                </tr>
                <!-- Repite este patrón para más filas -->
            </tbody>
        </table>
    </div>


</x-app-layout>
