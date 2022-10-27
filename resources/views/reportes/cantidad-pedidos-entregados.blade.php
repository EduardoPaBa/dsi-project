<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Reporte de Cantidad de Pedidos Entregados') }}
        </h2>
    </x-slot>
    @livewire('reportes.cantidad-pedidos-entregados')
</x-app-layout>