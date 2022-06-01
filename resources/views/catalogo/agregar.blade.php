<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Agregar Catalogo') }}
        </h2>
    </x-slot>
    @livewire('catalogo.agregar')
</x-app-layout>