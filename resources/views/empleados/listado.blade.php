<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de Empleados') }}
        </h2>
    </x-slot>
    @livewire('empleados.listado')
</x-app-layout>