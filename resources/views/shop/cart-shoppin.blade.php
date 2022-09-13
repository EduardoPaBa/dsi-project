<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Carrito de compra') }}
        </h2>
    </x-slot>
    @livewire('shop.cart-shoppin')
</x-app-layout>
