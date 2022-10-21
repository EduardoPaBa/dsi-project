<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Reporte de Aceptación de Productos') }}
        </h2>
    </x-slot>
    @livewire('reportes.aceptacion-productos')
</x-app-layout>