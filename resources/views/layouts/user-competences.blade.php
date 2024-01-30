<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
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

    <div class="mt-4">
        <div id="accordion">
            <div class="card">
                <div class="card-header" id="section1">
                    <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseSection1"
                            aria-expanded="true" aria-controls="collapseSection1">
                            Sección 1
                        </button>
                    </h5>
                </div>

                <div id="collapseSection1" class="collapse show" aria-labelledby="section1" data-parent="#accordion">
                    <div class="card-body">
                        Contenido de la sección 1
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="section2">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSection2"
                            aria-expanded="false" aria-controls="collapseSection2">
                            Sección 2
                        </button>
                    </h5>
                </div>

                <div id="collapseSection2" class="collapse" aria-labelledby="section2" data-parent="#accordion">
                    <div class="card-body">
                        Contenido de la sección 2
                    </div>
                </div>
            </div>

            <!-- Agrega más secciones según sea necesario -->
        </div>
    </div>






</x-app-layout>
