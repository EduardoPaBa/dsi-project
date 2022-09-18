<div>
    @auth
        <a  href="{{ route('carritodeComprass') }}" >
            <i class="fa-solid fa-cart-shopping"></i>
        </a> {{\Cart::session(Auth::user()->id)->getTotalQuantity()}}
        {{-- {{\Cart::session(Auth::user()->id)->getContent()->count()}} --}}
    @endauth
</div>

