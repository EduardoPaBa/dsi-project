<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listado Categoria') }}
        </h2>
    </x-slot>
    @livewire('categoria.listado')
</x-app-layout>