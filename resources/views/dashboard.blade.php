<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12"  x-data= "{ add_modal: false}">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm-rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
    
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-3 m-0.5 border rounded-lg bg-blue-100 hover:bg-blue-200 cursor-pointer" @click="add_modal = true">
                        Adicionar
                        </div>
                        @foreach(Auth::user()->animes->sortBy('nome') as $anime)
        
                        <div class="p-6 bg-white border-b border-gray-200">
                        Nome: {{ $anime->nome }} Estudio: {{ $anime->estudio }} genero:
                        </div>
                          @endforeach 
                    </div>
             
            </div>
        </div>
    </div>
         <div class="fixed z-10 inset-0 overflow-y-auto" style="display: none;" x-show="add_modal"   >
  <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
    <!--  sobreposição do pano de fundo de acordo com o modal -->

    <div class="fixed inset-0 transition-opacity" aria-hidden="true" @click="add_modal = false">
      <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
    </div>

    <!-- centraliza o conteudo do modal. -->
    <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
    <!--
     painel do modal

      Entering: "ease-out duration-300"
        From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        To: "opacity-100 translate-y-0 sm:scale-100"
      Leaving: "ease-in duration-200"
        From: "opacity-100 translate-y-0 sm:scale-100"
        To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
    -->
    <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full p-3" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
       <div>
           <h1>Adicionando Um Novo Anime</h1>
           <form action="{{route('novo-anime')}}" method="POST">
             @csrf
                  <!-- nome -->
            <div class="mt-4">
                <x-label for="nome" :value="__('Nome')" />

                <x-input id="nome" class="block mt-1 w-full" type="text" name="nome" :value="old('nome')" required />
            </div>
          

              <!-- estudio -->
            <div class="mt-4">
                <x-label for="estudio" :value="__('Estudio')" />

                <x-input id="estudio" class="block mt-1 w-full" type="text" name="estudio" :value="old('estudio')" min="1" />
            </div>
             <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-red-500 hover:text-red-500 cursor-pointer" @click="add_modal = false"   >
                        {{ __('Cancelar') }}
                    </a>
                    <x-button class="ml-4">
                        {{ __('Cadastrar') }}
                    </x-button>
            </div>
           </form>
       </div>
    </div>
  </div>
</div>
    </div>
</x-app-layout>
