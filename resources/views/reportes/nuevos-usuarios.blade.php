<x-app-layout>
    <x-slot name="header">
        <br>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Reporte de Nuevos Usuarios') }}
        </h2>
    </x-slot>
    @livewire('reportes.nuevos-usuarios')
</x-app-layout>