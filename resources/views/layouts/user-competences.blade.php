<head>

</head>
<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('') }}
            </h2>
        </div>
    </x-slot>
    <div class="overflow-x-auto mb-4">
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
                    <th class="border-b p-2 text-left dark:text-white">Acreditación</th>
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
                    <td class="border-b p-2 dark:text-white">80%</td>

                    <!-- Agrega más datos según sea necesario -->
                </tr>
                <!-- Repite este patrón para más filas -->
            </tbody>
        </table>
    </div>


    <div id="accordion-collapse" data-accordion="collapse">
        <h2 id="accordion-collapse-heading-1">
            <button type="button"
                class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                data-accordion-target="#accordion-collapse-body-1" aria-expanded="true"
                aria-controls="accordion-collapse-body-1">
                <span class="text-black">026 - PLANIFICAR EL ABASTECIMIENTO DE GL Y PRODUCTOS A LA PLANTA</span>
                <div class="flex items-center gap-2">
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                    <span
                        class="bg-blue-200 text-blue-800 text-sm font-medium px-4 py-1 rounded dark:bg-blue-900 dark:text-blue-300">80%</span>
                </div>
            </button>
        </h2>
        <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
            <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                <p class="mb-2 text-black">Descripcion:</p>
                <p class="mb-2 text-gray-500 dark:text-gray-400">Es la capacidad de planificar y controlar la recepción
                    y entrega de GL y/o productos en base a inputs del área comercial u otra, de acuerdo con los
                    procedimientos administrativos que esto conlleva, resguardando el control documental, la seguridad
                    de las personas e instalaciones y velando por el cumplimiento de las normativas.
                </p>
                <div>
                    <table
                        class="min-w-full bg-white border-2 border-gray-300 dark:border-eval-2 dark:bg-eval-1 divide-y divide-gray-300 dark:divide-gray-700">
                        <tbody>
                            <tr>
                                <td class="px-4 py-2 border-2 font-bold">Actividad Clave</td>
                                <td class="px-4 py-2 border-2 font-bold">Criterios de Desempeño</td>
                                <td class="px-4 py-2 border-2 font-bold">Acreditado</td>
                            </tr>

                            <tr>
                                <th rowspan="2" scope="rowgroup" class="px-4 py-2 border-2 font-normal">Programar la
                                    recepción GL</th>
                                <th scope="row" class="px-4 py-2 border-2 font-normal">Planifica la recepción de GL
                                    y/o
                                    productos en
                                    coordinación con
                                    el área de abastecimiento, en base a la evolución de inventarios y entregas </th>
                                <td class="px-4 py-2 border-2">Si</td>
                            </tr>
                            <tr>
                                <th scope="row" class="px-4 py-2 border-2 font-normal">Planifica la recepción de GL
                                    y/o
                                    productos de
                                    manera directa por
                                    gasoducto, camiones cisterna o semirremolque</th>
                                <td class="px-4 py-2 border-2">No</td>
                            </tr>

                            <tr>
                                <th rowspan="3" scope="rowgroup" class="px-4 py-2 border-2 font-normal">Programar la
                                    entrega de GL</th>
                                <th scope="row" class="px-4 py-2 border-2 font-normal">Verifica el inventario de GL
                                    y/o
                                    productos de la
                                    planta de acuerdo
                                    a la programación</th>
                                <td class="px-4 py-2 border-2">Si</td>
                            </tr>
                            <tr>
                                <th scope="row" class="px-4 py-2 border-2 font-normal">Planifica la entrega de GL y/o
                                    productos para
                                    cumplir con el plan
                                    comercial y/o demanda proyectada en forma semanal</th>
                                <td class="px-4 py-2 border-2">Si</td>
                            </tr>
                            <tr>
                                <th scope="row" class="px-4 py-2 border-2 font-normal">Controla los registros de
                                    despacho
                                    de GL de
                                    acuerdo a procedimientos
                                    correspondientes para salida</th>
                                <td class="px-4 py-2 border-2">No</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <br>
                <div>
                    <h2 class="text-lg font-bold mb-2">Alcance y cierre de brechas</h2>
                    <table class="min-w-full bg-white border border-gray-300 dark:border-eval-2 dark:bg-eval-1">
                        <tbody>
                            <tr>
                                <td class="px-4 py-2 border-2 font-bold">Criterios de Desempeño</td>
                                <td class="px-4 py-2 border-2 font-bold">Tipo de solución instruccional</td>
                                <td class="px-4 py-2 border-2 font-bold">Actividad</td>
                                <td class="px-4 py-2 border-2 font-bold">Estado</td>
                                <td class="px-4 py-2 border-2 font-bold">Acreditado</td>
                            </tr>
                            <tr>
                                <th rowspan="2" class="px-4 py-2 border-2 font-normal" scope="rowgroup">
                                    Planifica la recepción de GL y/o productos de manera directa por gasoducto, camiones
                                    cisterna o
                                    semirremolque
                                </th>
                                <th class="px-4 py-2 border-2" scope="row">
                                    <select class="w-full border p-2 font-normal">
                                        <option value="opcion1" class="font-normal">Virtual</option>
                                        <option value="opcion2" class="font-normal">Presencial</option>
                                        <option value="opcion2" class="font-normal">Transferencia la puesto de trabajo
                                        </option>
                                    </select>
                                </th>
                                <td class="px-4 py-2 border-2"><input type="text" placeholder="Ingrese la actividad"
                                        class="w-full border p-2"></td>
                                <td class="px-4 py-2 border-2">
                                    <select class="w-full border p-2">
                                        <option value="opcion1">Hecho</option>
                                        <option value="opcion2">Pendiente</option>
                                    </select>
                                </td>
                                <td class="px-4 py-2 border-2">
                                    <select class="w-full border p-2">
                                        <option value="si">Sí</option>
                                        <option value="no">No</option>
                                    </select>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <button class="mt-4 bg-blue-500 text-white px-4 py-2 rounded">Guardar Cambios</button>
                </div>


            </div>
        </div>
        <h2 id="accordion-collapse-heading-2">
            <button type="button"
                class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                data-accordion-target="#accordion-collapse-body-2" aria-expanded="false"
                aria-controls="accordion-collapse-body-2">
                <span class="text-black">Otra Competencia</span>
                <div class="flex items-center gap-2">
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                    <span
                        class="bg-blue-200 text-blue-800 text-sm font-medium px-4 py-1 rounded dark:bg-blue-900 dark:text-blue-300">0%</span>
                </div>
            </button>
        </h2>
        <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
            <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700">
                <p class="mb-2 text-gray-500 dark:text-gray-400">Contenido de otra competencia</p>

            </div>
        </div>

    </div>






</x-app-layout>
