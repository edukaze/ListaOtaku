<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                  @foreach($user->animes as $anime)
                <div class="p-6 bg-white border-b border-gray-200">
                   {{ $anime->nome }} ({{ $anime->estudio }} esse são seu animes);
                </div>
                  @endforeach 
            </div>
        </div>
    </div>
</x-app-layout>
