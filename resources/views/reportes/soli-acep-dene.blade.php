<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Reporte de Lista de Solicitudes Aceptadas o Denegadas') }}
        </h2>
    </x-slot>
    @livewire('reportes.soli-acep-dene')
</x-app-layout>
