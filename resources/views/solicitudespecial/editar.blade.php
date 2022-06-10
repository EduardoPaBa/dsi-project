<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Solicitud Especial') }}
        </h2>
    </x-slot>
    @livewire('solicitudespecial.editar')
</x-app-layout>