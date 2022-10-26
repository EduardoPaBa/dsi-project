<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listado de producto productos mas vendidos') }}
        </h2>
    </x-slot>
    @livewire('producto.productos-mas-vendidos')
</x-app-layout>