<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Cliente') }}
        </h2>
    </x-slot>

    <div class="py-12" >
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('_cliente.update', $cliente) }}" method="POST">
                    @csrf   
                    @method('PUT')

                        <div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-white sm:p-6">
                                <div class="grid grid-cols-6 gap-6">

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="nome" class="block text-sm font-medium text-gray-700">Nome</label>
                                        <input type="text" name="nome" id="nome" autocomplete="nome" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{ $cliente->nome }}">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="cpf" class="block text-sm font-medium text-gray-700">CPF</label>
                                        <input type="text" name="cpf" id="cpf" autocomplete="cpf" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{ $cliente->cpf }}">
                                    </div>

                                    <div class="col-span-6 sm:col-span-4">
                                        <label for="telefone" class="block text-sm font-medium text-gray-700">Telefone</label>
                                        <input type="text" name="telefone" id="telefone" autocomplete="telefone" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{ $cliente->telefone }}">
                                    </div>


                                    <div class="col-span-6">
                                        <label for="endereco" class="block text-sm font-medium text-gray-700">Endereço</label>
                                        <input type="text" name="endereco" id="endereco" autocomplete="endereco" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{ $cliente->endereco }}">
                                    </div>

                                    <div class="col-span-6">
                                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                        <input type="text" name="email" id="email" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{ $cliente->email }}">
                                    </div>
                                    
                                </div>
                            </div>
                            </br>
                            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-800 
                                hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">Salvar</button>
                                <button class="inline-flex justify-center py-2 px-4 border border-gray-800 shadow-sm text-sm font-medium rounded-md text-gray bg-gray-700 hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    <a href="{{ route('_cliente.show', $cliente) }}">Cancelar</a></button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>