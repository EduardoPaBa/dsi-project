<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Agregar Solicitud') }}
        </h2>
    </x-slot>
    @livewire('solicitud.editar')
</x-app-layout>