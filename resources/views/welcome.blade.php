@extends('layouts.site')
@section('content')
<section class="hero">
    <div class="wrap hero-layout">
        <div class="hero-content">
            <p class="eyebrow"><span></span> YOUR VISION. OUR COMMITMENT.</p>
            <h1>Strong foundations.<br>Extraordinary<br><em>possibilities.</em></h1>
            <p class="hero-description">From the first drawing to the final detail, we bring your spaces to life with thoughtful planning and dependable construction.</p>
            <div class="actions"><a class="button" href="{{ route('contact') }}">Discuss your project <span aria-hidden="true">↗</span></a><a class="text-link" href="#services">Explore our services <span aria-hidden="true">↓</span></a></div>
            <div class="hero-footnote"><span class="mini-mark" aria-hidden="true">✓</span><p>Rooted in Maharashtra.<br><strong>Committed to every detail.</strong></p></div>
        </div>
        <div class="hero-visual">
            <img class="hero-image" src="{{ asset('images/swarajya-hero.png') }}" alt="Engineer reviewing plans at a building construction site" fetchpriority="high" width="1717" height="916">
            <div class="image-label"><span class="status-dot"></span> BUILT WITH PURPOSE</div>
            <div class="image-caption"><span>FROM VISION TO REALITY</span><p>Good spaces begin<br>with a solid foundation.</p><a href="#process" aria-label="Explore our construction process">↗</a></div>
            <span class="vertical-label">PLANNING · PRECISION · PROGRESS</span>
        </div>
    </div>
</section>
<div class="principles-bar"><div class="wrap principles"><span><b aria-hidden="true">◇</b> Thoughtful planning</span><span><b aria-hidden="true">⌁</b> Quality workmanship</span><span><b aria-hidden="true">◎</b> Clear communication</span><span><b aria-hidden="true">↗</b> Complete coordination</span></div></div>
<section class="section about-preview">
    <div class="wrap split">
        <div><p class="eyebrow">01 / WHO WE ARE</p><h2>More than construction.<br>A commitment to <em>building well.</em></h2></div>
        <div class="intro-copy"><p>At Swarajya Construction, we believe every space deserves a strong start. We bring practical site knowledge, disciplined execution and care to residential, commercial and renovation projects.</p><p>Based in Khopoli, we work with property owners across Maharashtra to make the construction journey clear, organised and personal.</p><a class="text-link" href="{{ route('about') }}">Get to know Swarajya <span aria-hidden="true">↗</span></a></div>
    </div>
</section>
<section id="services" class="section services-section">
    <div class="wrap">
        <div class="section-heading"><div><p class="eyebrow">02 / WHAT WE DO</p><h2>Your space. Our expertise.</h2></div><p>From new beginnings to better spaces,<br>the right support at every stage.</p></div>
        <div class="service-grid">
            @foreach ([['01', 'Residential', 'construction', 'Homes, extensions and structural work, built around the way you live.', 'M4 11 12 4l8 7M6 10v10h12V10M10 20v-6h4v6'], ['02', 'Commercial', 'projects', 'Offices, shops and business spaces with practical planning and coordinated execution.', 'M5 21V3h14v18M3 21h18M9 7h1m4 0h1M9 11h1m4 0h1M9 15h1m4 0h1'], ['03', 'Renovation', '& repairs', 'Give existing spaces a fresh start, from waterproofing to complete finishing.', 'm14 6 4-3 3 3-3 4M4 20l10-10M3 3l5 5m-5 0 5-5M14 14l7 7'], ['04', 'Project', 'supervision', 'Material checks, vendor coordination and progress tracking for a well-managed site.', 'M8 5H5v16h14V5h-3M9 3h6v4H9zM8 12l2 2 5-5M8 18h8']] as $service)
            <a class="service-card" href="{{ route('contact', ['service' => $service[1].' '.$service[2]]) }}"><div class="service-top"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="{{ $service[4] }}"/></svg><span>{{ $service[0] }}</span></div><h3>{{ $service[1] }}<br>{{ $service[2] }}</h3><p>{{ $service[3] }}</p><span class="card-arrow" aria-hidden="true">↗</span></a>
            @endforeach
        </div>
    </div>
</section>
<section class="section expertise-section" id="capability">
    <div class="wrap expertise-grid"><div class="expertise-photo"><img src="{{ asset('images/swarajya-hero.png') }}" alt="Concrete structure and crane during civil construction" loading="lazy" width="1717" height="916"><span>CIVIL WORK. COMPLETE CARE.</span></div><div class="expertise-copy"><p class="eyebrow">03 / THE SWARAJYA APPROACH</p><h2>Every detail matters.<br>At every <em>stage.</em></h2><p>From groundwork to the finishing touches, we focus on what makes a space strong, functional and ready for everyday life.</p><div class="detail-row"><span>01</span><div><h3>Clarity before construction</h3><p>A defined scope, suitable materials and a practical plan before work begins.</p></div></div><div class="detail-row"><span>02</span><div><h3>Care throughout execution</h3><p>Organised site flow, regular updates and attention to the quality of each stage.</p></div></div><div class="detail-row"><span>03</span><div><h3>A finish you can feel</h3><p>Thoughtful finishing, pending-item reviews and a clean handover.</p></div></div></div></div>
</section>
<section class="section" id="process"><div class="wrap"><div class="section-heading"><div><p class="eyebrow">04 / HOW WE WORK</p><h2>A clear path from idea to reality.</h2></div><a class="text-link" href="{{ route('contact') }}">Let’s take the first step <span aria-hidden="true">↗</span></a></div><div class="process-grid"><article><span class="step-number">01 <span>↗</span></span><h3>Let’s understand your vision.</h3><p>We visit the site, listen to your requirements and discuss your budget, timeline and priorities.</p></article><article><span class="step-number">02 <span>↗</span></span><h3>Make a practical plan.</h3><p>We define the scope, estimate, materials and sequence, so everyone knows what comes next.</p></article><article><span class="step-number">03 <span>✓</span></span><h3>Bring it to life.</h3><p>We coordinate construction, keep you informed and review the final details before handover.</p></article></div></div></section>
@include('partials.project-cta')
@endsection
