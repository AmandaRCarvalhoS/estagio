<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Criar Ordem de Serviço') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <form>
      <div class="py-11 bg-white">
        <div x-data="
   {
   openTab: 1,
   activeClasses: 'bg-primary text-blue',
   inactiveClasses: 'text-body-color hover:bg-primary hover:text-white',
   }
   " class="w-full mb-14">
          <div class="flex flex-wrap rounded-lg py-3 px-4 border border-[#E4E4E4] ">
            <a href="javascript:void(0)" @click="openTab = 1" :class="openTab === 1 ? activeClasses : inactiveClasses" class="text-sm md:text-base font-medium rounded-md py-3 px-4 lg:px-6 text-body-color hover:bg-primary hover:text-white">
              Cabeçalho
            </a>
            <a href="javascript:void(0)" @click="openTab = 2" :class="openTab === 2 ? activeClasses : inactiveClasses" class="text-sm md:text-base font-medium rounded-md py-3 px-4 lg:px-6 text-body-color hover:bg-primary hover:text-white">
              Análise
            </a>
            <!-- <a href="javascript:void(0)" @click="openTab = 3" :class="openTab === 3 ? activeClasses : inactiveClasses" class="text-sm md:text-base font-medium rounded-md py-3 px-4 lg:px-6 text-body-color hover:bg-primary hover:text-white">
            Componentes
          </a> -->
          </div>
          <div>
            <div x-show="openTab === 1" class="text-body-color text-base leading-relaxed p-6">
              <div class="flex flex-wrap -mx-4">
                <div class="w-full md:w-1/2 lg:w-1/3 px-4">
                  <div class="mb-12">
                    <label for="" class="font-medium text-base text-black block mb-3">
                      Número da Ordem
                    </label>
                    <input type="text" name="ordemId" id="ordemId" autocomplete="ordemId" placeholder='Nº ordem' disabled="" class="w-full border-[1.5px] border-form-stroke rounded-lg 
                                py-3 px-5 font-medium  text-body-color placeholder-body-color 
                                outline-none focus:border-primary active:border-primary transition 
                                disabled:bg-[#F5F7FD] disabled:cursor-default ">
                  </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/3 px-4">
                  <div class="mb-12">
                    <label for="" class="font-medium text-base text-black block mb-3">
                      Cliente
                    </label>
                    <div class="relative">
                      <select name="clienteId" class="w-full border-[1.5px] border-form-stroke rounded-lg 
                                                   py-3 px-5 font-medium text-body-color outline-none focus:border-primary 
                                                   active:border-primary transition disabled:bg-[#F5F7FD] disabled:cursor-default appearance-none ">
                        @foreach($clientes as $cliente)
                        <option value="{{$cliente->id}}">{{$cliente->nome}}</option>
                        @endforeach
                      </select>
                      <span class="absolute right-4 top-1/2 -translate-y-1/2 mt-[-2px] w-[10px] h-[10px] border-r-2 border-b-2 border-body-color rotate-45 ">
                      </span>
                    </div>
                  </div>
                </div>

                <div class="w-full md:w-1/2 lg:w-1/3 px-4">
                  <div class="mb-12">
                    <label for="" class="font-medium text-base text-black block mb-3">
                      Veículo
                    </label>
                    <div class="relative">
                      <select name="veiculoId" class="w-full border-[1.5px] border-form-stroke rounded-lg 
                                                   py-3 px-5 font-medium text-body-color outline-none focus:border-primary 
                                                   active:border-primary transition disabled:bg-[#F5F7FD] disabled:cursor-default appearance-none ">
                        @foreach($veiculos as $veiculo)
                        <option value="{{ $veiculo->id }}">{{ $veiculo->placa }}</option>
                        @endforeach
                      </select>
                      <span class="absolute right-4 top-1/2 -translate-y-1/2 mt-[-2px] w-[10px] h-[10px] border-r-2 border-b-2 border-body-color rotate-45 ">
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div x-show="openTab === 2" class="text-body-color text-base leading-relaxed p-6">

              <div class="flex flex-wrap -mx-4">
                <div class="w-full md:w-1/2 lg:w-1/3 px-4">
                  <div class="mb-12">
                    <label for="" class="font-medium text-base text-black block mb-3">
                      Descreva os detalhes do problema encontrado no veículo:
                    </label>
                    <textarea rows="5" placeholder="Análise" type="text" name="analise" id="analise" autocomplete="analise" class=" w-full
                                        border-[1.5px] border-form-stroke
                                        rounded-lg
                                        py-3
                                        px-5
                                        font-medium
                                        text-body-color
                                        placeholder-body-color
                                        outline-none
                                        focus:border-primary
                                        active:border-primary
                                        transition
                                        disabled:bg-[#F5F7FD] disabled:cursor-default
                                        "></textarea>
                  </div>
                </div>
              </div>



              <div class="flex flex-wrap -mx-4">
                <div class="w-full lg:w-5/12 px-4">
                  <div class="mb-12">
                    <label for="" class="font-medium text-base text-black block mb-3">
                      Arquivo adicional (Análise detalhada, orçamento, etc):
                    </label>
                    <input id="arquivo" name="arquivo" type="file" class="  w-full
                                              border-[1.5px] border-form-stroke
                                              rounded-lg
                                              font-medium
                                              text-body-color
                                              placeholder-body-color
                                              outline-none
                                              focus:border-primary
                                              active:border-primary
                                              transition
                                              disabled:bg-[#F5F7FD] disabled:cursor-default
                                              cursor-pointer
                                              file:bg-[#F5F7FD]
                                              file:border-0
                                              file:border-solid
                                              file:border-r
                                              file:border-collapse
                                              file:border-form-stroke
                                              file:py-3
                                              file:px-5
                                              file:mr-5
                                              file:text-body-color
                                              file:cursor-pointer
                                              file:hover:bg-primary
                                              file:hover:bg-opacity-10
                                              ">
                  </div>
                </div>
              </div>
              </br>
              <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-800 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Emitir</button>
              </div>

            </div>
            <!-- <div x-show="openTab === 3" class="text-body-color text-base leading-relaxed p-6" style="display: none;">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          Officia nisi, doloribus nulla cumque molestias corporis eaque
          harum vero! Quas sit odit optio debitis nulla quisquam,
          dolorum quaerat animi iusto quod. <br>
          <br>
          Lorem ipsum dolor, sit amet consectetur adipisicing elit.
          Suscipit mollitia nam eligendi reprehenderit reiciendis saepe
          laboriosam maiores voluptas. Quo, culpa amet fugiat ipsam sed
          quod hic, veritatis ducimus recusandae repellat quasi eaque,
          suscipit praesentium totam?
        </div>
        <div x-show="openTab === 4" class="text-body-color text-base leading-relaxed p-6" style="display: none;">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          Officia nisi, doloribus nulla cumque molestias corporis eaque
          harum vero! Quas sit odit optio debitis nulla quisquam,
          dolorum quaerat animi iusto quod.
        </div> -->
          </div>
        </div>
      </div>
    </form>
  </div>
  <!-- //Form com foto
    <div>
  <div class="md:grid md:grid-cols-3 md:gap-6">
    <div class="md:col-span-1">
      <div class="px-4 sm:px-0">
        <h3 class="text-lg font-medium leading-6 text-gray-900">Profile</h3>
        <p class="mt-1 text-sm text-gray-600">This information will be displayed publicly so be careful what you share.</p>
      </div>
    </div>
    <div class="mt-5 md:mt-0 md:col-span-2">
      <form action="#" method="POST">
        <div class="shadow sm:rounded-md sm:overflow-hidden">
          <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
            <div class="grid grid-cols-3 gap-6">
              <div class="col-span-3 sm:col-span-2">
                <label for="company-website" class="block text-sm font-medium text-gray-700"> Website </label>
                <div class="mt-1 flex rounded-md shadow-sm">
                  <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm"> http:// </span>
                  <input type="text" name="company-website" id="company-website" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="www.example.com">
                </div>
              </div>
            </div>

            <div>
              <label for="about" class="block text-sm font-medium text-gray-700"> About </label>
              <div class="mt-1">
                <textarea id="about" name="about" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" placeholder="you@example.com"></textarea>
              </div>
              <p class="mt-2 text-sm text-gray-500">Brief description for your profile. URLs are hyperlinked.</p>
            </div>

            <div>
              <label class="block text-sm font-medium text-gray-700"> Photo </label>
              <div class="mt-1 flex items-center">
                <span class="inline-block h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                  <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                  </svg>
                </span>
                <button type="button" class="ml-5 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Change</button>
              </div>
            </div>

            <div>
              <label class="block text-sm font-medium text-gray-700"> Cover photo </label>
              <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                <div class="space-y-1 text-center">
                  <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <div class="flex text-sm text-gray-600">
                    <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                      <span>Upload a file</span>
                      <input id="file-upload" name="file-upload" type="file" class="sr-only">
                    </label>
                    <p class="pl-1">or drag and drop</p>
                  </div>
                  <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                </div>
              </div>
            </div>
          </div>
          <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="hidden sm:block" aria-hidden="true">
  <div class="py-5">
    <div class="border-t border-gray-200"></div>
  </div>
</div> -->

</x-app-layout>