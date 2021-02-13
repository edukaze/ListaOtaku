<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-10" >
        <div class="max-w-1x1 mx-10 sm:px-6 lg:px-8 ">
           
           <div>
            <h1 class="block text-center text-xl pb-4">Sua Lista de Anime</h1>
               @include('layouts/animes')
           </div>
           <div>
               <h1 class="block text-center text-xl pb-4">Seu Gêneros São</h1>
               @include('layouts/generos')
           </div>
    </div>
    
    </div>
</x-app-layout>
