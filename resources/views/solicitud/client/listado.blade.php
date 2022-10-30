<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listado Solicitud') }}
        </h2>
    </x-slot>
    @livewire('solicitud.client.listado')
</x-app-layout>
