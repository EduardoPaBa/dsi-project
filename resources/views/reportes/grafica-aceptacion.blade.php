<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Promedio de Aceptación de Productos') }}
        </h2>
    </x-slot>
    @livewire('reportes.grafica-aceptacion')
</x-app-layout>