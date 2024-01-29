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

    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    Accordion Item #1
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse
                    plugin adds the appropriate classes that we use to style each element. These classes control the
                    overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of
                    this with custom CSS or overriding our default variables. It's also worth noting that just about any
                    HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Accordion Item #2
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the
                    collapse plugin adds the appropriate classes that we use to style each element. These classes
                    control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                    modify any of this with custom CSS or overriding our default variables. It's also worth noting that
                    just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit
                    overflow.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Accordion Item #3
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the
                    collapse plugin adds the appropriate classes that we use to style each element. These classes
                    control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                    modify any of this with custom CSS or overriding our default variables. It's also worth noting that
                    just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit
                    overflow.
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
