<header class="topbar">
    <nav class="wrap nav" aria-label="Main navigation">
        <a class="brand" href="/" aria-label="Swarajya Construction home">
            <img class="brand-logo" src="/images/swarajya-full-logo.svg" alt="Swarajya Construction Pvt. Ltd. logo">
        </a>
        <div class="nav-links">
            <a class="{{ request()->is('/') ? 'active' : '' }}" href="/">Home</a>
            <a class="{{ request()->is('about') ? 'active' : '' }}" href="{{ route('about') }}">About Us</a>
            <a href="/#services">Services</a>
            <a href="/#capability">Projects</a>
            <a href="/#process">Process</a>
            <a class="{{ request()->is('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact Us</a>
        </div>
        <a class="contact-pill" href="{{ route('contact') }}">+91 98765 43210</a>
    </nav>
</header>
