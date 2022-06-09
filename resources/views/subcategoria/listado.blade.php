<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listado SubCategoria') }}
        </h2>
    </x-slot>
    @livewire('subcategoria.listado')
</x-app-layout>