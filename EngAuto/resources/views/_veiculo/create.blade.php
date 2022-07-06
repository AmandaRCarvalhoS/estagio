    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Cadastrar Veículo') }}
            </h2>
        </x-slot>

        <div class="py-12">

            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="md:grid md:grid-cols-3 md:gap-6">

                    <div class="mt-5 md:mt-0 md:col-span-2">
                        <form action="{{ route('_veiculo.store') }}" method="POST">
                            @csrf

                            <div class="shadow overflow-hidden sm:rounded-md">
                                <div class="px-4 py-5 bg-white sm:p-6">
                                    <div class="grid grid-cols-6 gap-6">
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="placa" class="block text-sm font-medium text-gray-700">Placa</label>
                                            <input type="text" name="placa" id="placa" autocomplete="placa" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        </div>

                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="modelo" class="block text-sm font-medium text-gray-700">Modelo</label>
                                            <input type="text" name="modelo" id="modelo" autocomplete="modelo" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        </div>

                                        <div class="col-span-6 sm:col-span-4">
                                            <label for="marca" class="block text-sm font-medium text-gray-700">Marca</label>
                                            <input type="text" name="marca" id="marca" autocomplete="marca" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        </div>

                                        <div class="col-span-6">
                                            <label for="ano" class="block text-sm font-medium text-gray-700">Ano</label>
                                            <input type="text" name="ano" id="ano" autocomplete="ano" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        </div>

                                        <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                            <label for="cor" class="block text-sm font-medium text-gray-700">Cor</label>
                                            <input type="text" name="cor" id="cor" autocomplete="address-level2" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        </div>

                                        <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                            <label for="descricao" class="block text-sm font-medium text-gray-700">Descrição</label>
                                            <input type="text" name="descricao" id="descricao" autocomplete="address-level1" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        </div>

                                        <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                            <label for="proprietario" class="block text-sm font-medium text-gray-700">Proprietario</label>
                                            <div class="relative">
                                                <select name="proprietario" class="w-full border-[1.5px] border-form-stroke rounded-lg 
                                                   py-3 px-5 font-medium text-body-color outline-none focus:border-primary 
                                                   active:border-primary transition disabled:bg-[#F5F7FD] disabled:cursor-default appearance-none ">
                                                    @foreach($clientes as $cliente)
                                                    <option value="{{$cliente->cpf}}">{{$cliente->nome}}</option>
                                                    @endforeach
                                                </select>
                                                <span class="absolute right-4 top-1/2 -translate-y-1/2 mt-[-2px] w-[10px] h-[10px] border-r-2 border-b-2 border-body-color rotate-45 ">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-4 py-3 bg-gray-100 text-right sm:px-6">
                                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-800 hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Salvar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>