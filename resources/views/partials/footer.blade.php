<footer class="site-footer">
    <div class="wrap">
        <div class="footer-grid">
            <div class="footer-intro">
                <a class="brand" href="{{ url('/') }}"><img src="{{ asset('images/swarajya-full-logo.svg') }}" alt="" width="52" height="52"><span>SWARAJYA<small>CONSTRUCTION PVT. LTD.</small></span></a>
                <p>Strong foundations.<br>Thoughtful spaces. Lasting relationships.</p>
                <span class="location"><span aria-hidden="true">↗</span> Khopoli, Maharashtra, India</span>
            </div>
            <div><h3>Explore</h3><a href="{{ route('about') }}">Our company</a><a href="{{ url('/') }}#services">What we do</a><a href="{{ url('/') }}#process">Our process</a><a href="{{ route('contact') }}">Get in touch</a></div>
            <div><h3>Our services</h3><a href="{{ url('/') }}#services">Residential construction</a><a href="{{ url('/') }}#services">Commercial projects</a><a href="{{ url('/') }}#services">Renovation &amp; repairs</a><a href="{{ url('/') }}#services">Project supervision</a></div>
            <div class="footer-contact"><h3>Have a project in mind?</h3><a href="mailto:info@swarajyaconstruction.com">info@swarajyaconstruction.com</a><p>Site visits by appointment.<br>Let’s talk about what’s possible.</p><a class="text-link" href="{{ route('contact') }}">Start a conversation <span aria-hidden="true">↗</span></a></div>
        </div>
        <div class="footer-bottom"><span>© {{ date('Y') }} Swarajya Construction Pvt. Ltd.</span><span>Built on trust. Built for tomorrow.</span></div>
    </div>
</footer>
