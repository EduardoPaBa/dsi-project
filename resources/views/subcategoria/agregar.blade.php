<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Agregar SubCategoria') }}
        </h2>
    </x-slot>
    @livewire('subcategoria.agregar')
</x-app-layout>