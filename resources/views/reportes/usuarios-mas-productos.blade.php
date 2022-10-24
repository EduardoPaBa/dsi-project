<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Reporte de Usuarios con Más Pedidos') }}
        </h2>
    </x-slot>
    @livewire('reportes.usuarios-mas-productos')
</x-app-layout>