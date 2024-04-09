    <x-button wire:click="showModal" wire:loading.attr="disabled" class="mr-5">
        Adicionar
    </x-button>

    <x-dialog-modal wire:model="showingModal" >
        <x-slot name="title">
            <p class="mt-2 text-sm text-right text-gray-500 dark:text-gray-400">[esc] para sair</p>
            Adicionar item ao Timesheet
        </x-slot>
        <x-slot name="content">
            <form class="mt-4">
                <div class="grid md:grid-cols-2 md:gap-6">
                    <div class="relative z-0 w-full mb-6 group">
                        <label for="projeto" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Projeto</label>
                        <select id="projeto" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option>Selecione</option>
                            <option>111 - Rio Largo SIGET</option>
                            <option>149 - H2M Conciliação</option>
                            <option>243 - Data Engenharia</option>
                        </select>
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <label for="etapa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Etapa</label>
                        <select id="etapa" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option>-</option>
                            <option>Análise de Documentos</option>
                            <option>Geração de XML</option>
                            <option>Envio</option>
                            <option>Correção</option>
                        </select>
                    </div>
                  </div>
                <div class="relative z-0 w-full mb-6 group">
                    <input type="text" name="descricao" id="descricao" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="descricao" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Descrição
                    </label>
                </div>
                <div class="grid md:grid-cols-2 md:gap-6">
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="time" name="inicio" id="inicio" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                        <label for="inicio" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                            Inicio
                        </label>
                        <p id="helper-text-explanation" class="mt-3 text-sm text-gray-500 dark:text-gray-400">
                            Caso seu projeto ou etapa não esteja aparecendo,
                            <a href="#" class="font-medium text-blue-600 hover:underline dark:text-blue-500">
                                por favor clique aqui
                            </a>.
                        </p>
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="time" name="fim" id="fim" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                        <label for="fim" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                            Fim
                        </label>
                    </div>
                  </div>
                <x-slot name="footer">
                    <x-button>Adicionar</x-button>
                </x-slot>

            </form>
        </x-slot>

    </x-dialog-modal>
