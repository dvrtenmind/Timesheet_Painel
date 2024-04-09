<div class="relative mb-5 overflow-x-auto">
    <div class="grid md:grid-cols-2 md:gap-6">
        <div class="relative z-0 w-full mt-5 mb-6 group">
            <div class="relative mt-1">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input type="text" id="table-search" class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for items">
            </div>
        </div>
        <div class="relative z-0 flex justify-end w-full mt-5 mb-6 group">
            <livewire:new-report />
            <livewire:button-download />
        </div>
    </div>
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Numero
                </th>
                <th scope="col" class="px-6 py-3">
                    Projeto
                </th>
                <th scope="col" class="px-6 py-3">
                    Etapa
                </th>
                <th scope="col" class="px-6 py-3">
                    Descrição
                </th>
                <th scope="col" class="px-6 py-3">
                    Início
                </th>
                <th scope="col" class="px-6 py-3">
                    Fim
                </th>
                <th scope="col" class="px-6 py-3">
                    Total
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    243
                </th>
                <td class="px-6 py-4">
                    DATA ENGENHARIA
                </td>
                <td class="px-6 py-4">
                    CORREÇÃO
                </td>
                <td class="px-6 py-4">
                    IDENTIFICANDO EQUIPAMENTOS, TRANSMISSORAS E GRUPOS DENTRO DOS EMPREENDIMENTOS TRAZIDOS DO PAINEL DO SIGET
                </td>
                <td class="px-6 py-4">
                    08:40
                </td>
                <td class="px-6 py-4">
                    12:10
                </td>
                <td class="px-6 py-4">
                    03:30
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    -
                </th>
                <td class="px-6 py-4">
                    ALMOÇO
                </td>
                <td class="px-6 py-4">
                    -
                </td>
                <td class="px-6 py-4">
                    HORÁRIO DE ALMOÇO
                </td>
                <td class="px-6 py-4">
                    12:10
                </td>
                <td class="px-6 py-4">
                    13:10
                </td>
                <td class="px-6 py-4">
                    01:00
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700" >
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    111
                </th>
                <td class="px-6 py-4">
                    SIGET RIO LARGO
                </td>
                <td class="px-6 py-4">
                    GERAÇÃO REF 07/23
                </td>
                <td class="px-6 py-4">
                    GERAÇÃO E ENVIO DO XML COM DADOS DO SIGET
                </td>
                <td class="px-6 py-4">
                    13:10
                </td>
                <td class="px-6 py-4">
                    13:50
                </td>
                <td class="px-6 py-4">
                    00:40
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    149
                </th>
                <td class="px-6 py-4">
                    H2M CONCILIAÇÃO
                </td>
                <td class="px-6 py-4">
                    UPLOAD DE FOTOS
                </td>
                <td class="px-6 py-4">
                    REALIZANDO UPLOAD DAS IMAGENS DA ULTIMA VIAGEM A SE SÃO JOSÉ E ANGRA DOS REIS
                </td>
                <td class="px-6 py-4">
                    13:50
                </td>
                <td class="px-6 py-4">
                    15:00
                </td>
                <td class="px-6 py-4">
                    01:10
                </td>
            </tr>
        </tbody>
    </table>
</div>
