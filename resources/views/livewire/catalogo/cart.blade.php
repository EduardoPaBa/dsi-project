<div>
    <a  href="{{ route('carritodeComprass') }}" class="btn btn-primary">
        <i class="fa-solid fa-cart-shopping"></i>
    </a>
    {{-- {{\Cart::session(Auth::user()->id)->getContent()->count()}} --}}
    {{\Cart::session(Auth::user()->id)->getTotalQuantity()}}
</div>
