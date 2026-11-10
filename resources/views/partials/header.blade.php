<header class="site-header">
    <div class="wrap navigation">
        <a class="brand" href="{{ url('/') }}" aria-label="Swarajya Construction home">
            <img src="{{ asset('images/swarajya-header-logo.svg') }}" alt="Swarajya Construction Pvt. Ltd. logo" width="96" height="96">
        </a>
        <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="main-nav" aria-label="Open navigation"><span></span><span></span></button>
        <nav id="main-nav" class="main-nav" aria-label="Main navigation">
            <a href="{{ url('/') }}" @if(request()->is('/')) aria-current="page" @endif>Home</a>
            <a href="{{ route('about') }}" @if(request()->is('about')) aria-current="page" @endif>About us</a>
            <a href="{{ url('/') }}#services">Services</a>
            <a href="{{ url('/') }}#capability">Our expertise</a>
            <a href="{{ route('contact') }}" @if(request()->is('contact')) aria-current="page" @endif>Contact</a>
            <a class="button nav-cta" href="{{ route('contact') }}">Let’s build together <span aria-hidden="true">↗</span></a>
        </nav>
    </div>
</header>
