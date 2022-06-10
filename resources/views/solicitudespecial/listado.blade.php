<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listado Solicitud Especial') }}
        </h2>
    </x-slot>
    @livewire('solicitudespecial.listado')
</x-app-layout>