<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid-container">

                <div class="grid-item">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <a href={{ route( '_ordem.create' ) }}>Emitir Ordem
                            <img src="img/icons8-bill-50.png"></a>
                    </div>
                </div>

                <div class="grid-item">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <a href={{ route( '_cliente.index' ) }}>Clientes
                            <img src="img/icons8-administrator-male-50.png"></a>
                    </div>
                </div>

                <div class="grid-item">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <a href={{ route( '_veiculo.index' ) }}>Veículos
                            <img src="img/icons8-sedan-50.png">
                        </a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</x-app-layout>