<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listado producto') }}
        </h2>
    </x-slot>
    @livewire('producto.listado')
</x-app-layout>