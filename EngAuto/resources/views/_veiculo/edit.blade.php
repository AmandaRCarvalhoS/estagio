<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Veiculo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('_veiculo.update', $veiculo) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-white sm:p-6">
                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="placa" class="block text-sm font-medium text-gray-700">Placa</label>
                                        <input type="text" name="placa" id="placa" autocomplete="placa" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{ $veiculo->placa }}">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="modelo" class="block text-sm font-medium text-gray-700">Modelo</label>
                                        <input type="text" name="modelo" id="modelo" autocomplete="modelo" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{ $veiculo->modelo }}">
                                    </div>

                                    <div class="col-span-6 sm:col-span-4">
                                        <label for="marca" class="block text-sm font-medium text-gray-700">Marca</label>
                                        <input type="text" name="marca" id="marca" autocomplete="marca" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{ $veiculo->marca }}">
                                    </div>

                                    <div class="col-span-6">
                                        <label for="ano" class="block text-sm font-medium text-gray-700">Ano</label>
                                        <input type="text" name="ano" id="ano" autocomplete="ano" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{ $veiculo->ano }}">
                                    </div>

                                    <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                        <label for="cor" class="block text-sm font-medium text-gray-700">Cor</label>
                                        <input type="text" name="cor" id="cor" autocomplete="cor" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{ $veiculo->cor }}">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                        <label for="descricao" class="block text-sm font-medium text-gray-700">Descrição</label>
                                        <input type="text" name="descricao" id="descricao" autocomplete="descricao" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{ $veiculo->descricao }}">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                        <label for="proprietario" class="block text-sm font-medium text-gray-700">Proprietario</label>
                                        <input type="text" name="proprietario" id="proprietario" autocomplete="proprietario" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{ $veiculo->proprietario }}">
                                    </div>
                                </div>
                            </div>
                            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                </br>
                                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-800 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">Salvar</button>
                                <button class="inline-flex justify-center py-2 px-4 border border-gray-800 shadow-sm text-sm font-medium rounded-md text-gray bg-gray-700 hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    <a href="{{ route('_veiculo.show', $veiculo) }}">Cancelar</a></button>
                                </br>
                            </div><br />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>