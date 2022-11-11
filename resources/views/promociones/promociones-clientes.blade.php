<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Promociones') }}
        </h2>
    </x-slot>
    @livewire('promociones.promociones-clientes')
</x-app-layout>