<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Swarajya Construction Pvt. Ltd. | Civil Construction & Project Execution</title>
    <meta name="description" content="Swarajya Construction Pvt. Ltd. delivers residential, commercial, renovation, and civil construction services with practical planning and dependable site execution.">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700,800" rel="stylesheet">
    <style>
        :root {
            --ink: #20272f;
            --coal: #303030;
            --steel: #4f5963;
            --muted: #647281;
            --line: #c9c9c9;
            --paper: #dedede;
            --white: #ffffff;
            --rust: #a52b34;
            --rust-dark: #7d2028;
            --gold: #e7ad43;
            --green: #a52b34;
        }

        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            color: var(--ink);
            background: var(--paper);
            font-family: "Instrument Sans", system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            line-height: 1.5;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        img {
            display: block;
            max-width: 100%;
        }

        .wrap {
            width: min(1180px, calc(100% - 40px));
            margin: 0 auto;
        }

        .topbar {
            position: fixed;
            z-index: 30;
            top: 0;
            right: 0;
            left: 0;
            padding: 14px 0;
            color: #151515;
            background: rgba(222, 222, 222, 0.94);
            backdrop-filter: blur(12px);
        }

        .nav {
            min-height: 58px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 22px;
            padding: 0 18px;
            border-radius: 8px;
            background: #f5f5f5;
            box-shadow: 0 1px 0 rgba(255, 255, 255, 0.9);
        }

        .brand {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            min-width: 0;
            font-weight: 800;
        }

        .brand-logo {
            width: 96px;
            height: 46px;
            object-fit: contain;
            flex: 0 0 auto;
            padding: 4px;
            border-radius: 6px;
            background: var(--white);
            filter: none;
        }

        .brand-text {
            display: grid;
            gap: 1px;
            line-height: 1.05;
        }

        .brand-text span:first-child {
            font-size: 1rem;
        }

        .brand-text span:last-child {
            color: #666;
            font-size: 0.74rem;
            font-weight: 700;
            text-transform: uppercase;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 24px;
            color: #151515;
            font-size: 0.94rem;
            font-weight: 700;
        }

        .nav-links a:hover {
            color: var(--rust);
        }

        .nav-links a {
            position: relative;
            padding: 8px 0;
        }

        .nav-links a:hover,
        .nav-links .active {
            color: var(--rust);
        }

        .nav-links .active::after {
            content: "";
            position: absolute;
            right: 0;
            bottom: 0;
            left: 0;
            height: 3px;
            border-radius: 99px;
            background: var(--rust);
        }

        .contact-pill {
            display: inline-flex;
            align-items: center;
            min-height: 38px;
            padding: 0 16px;
            border-radius: 8px;
            background: #1e1f20;
            color: var(--white);
            font-weight: 800;
        }

        .button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 48px;
            padding: 0 20px;
            border-radius: 6px;
            border: 1px solid transparent;
            background: var(--rust);
            color: var(--white);
            font-weight: 800;
            box-shadow: 0 14px 36px rgba(0, 0, 0, 0.18);
        }

        .button:hover {
            transform: translateY(-1px);
        }

        .button.secondary {
            color: var(--white);
            background: rgba(255, 255, 255, 0.12);
            border-color: rgba(255, 255, 255, 0.28);
            box-shadow: none;
        }

        .hero {
            min-height: 760px;
            color: var(--white);
            display: grid;
            align-items: end;
            background:
                linear-gradient(90deg, rgba(32, 39, 47, 0.94) 0%, rgba(32, 39, 47, 0.84) 44%, rgba(32, 39, 47, 0.32) 100%),
                linear-gradient(180deg, rgba(32, 39, 47, 0.04), rgba(32, 39, 47, 0.36)),
                url("/images/swarajya-hero.png") center / cover no-repeat;
        }

        .hero-inner {
            padding: 132px 0 44px;
        }

        .hero-grid {
            display: grid;
            grid-template-columns: minmax(0, 680px) minmax(280px, 360px);
            gap: 72px;
            align-items: center;
        }

        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            margin: 0 0 18px;
            color: rgba(255, 255, 255, 0.9);
            font-size: 0.82rem;
            font-weight: 800;
            text-transform: uppercase;
        }

        .eyebrow::before {
            content: "";
            width: 34px;
            height: 3px;
            background: var(--rust);
        }

        h1,
        h2,
        h3,
        p {
            margin-top: 0;
        }

        h1 {
            max-width: 680px;
            margin-bottom: 20px;
            font-size: clamp(3rem, 5.4vw, 5rem);
            line-height: 0.98;
            letter-spacing: 0;
        }

        .hero-copy {
            max-width: 650px;
            margin-bottom: 30px;
            color: rgba(255, 255, 255, 0.82);
            font-size: clamp(1.02rem, 2vw, 1.2rem);
        }

        .hero-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
        }

        .hero-note {
            display: grid;
            gap: 18px;
            padding: 28px;
            border-radius: 8px;
            background: rgba(255, 255, 255, 0.94);
            border: 1px solid rgba(255, 255, 255, 0.45);
            color: var(--ink);
            box-shadow: 0 28px 70px rgba(0, 0, 0, 0.28);
        }

        .hero-note strong {
            color: var(--rust);
            font-size: 0.82rem;
            line-height: 1.2;
            text-transform: uppercase;
        }

        .hero-note span {
            color: var(--ink);
            font-size: 1.55rem;
            font-weight: 800;
            line-height: 1.12;
        }

        .hero-note p {
            margin-bottom: 0;
            color: var(--muted);
        }

        .hero-note-list {
            display: grid;
            gap: 10px;
            padding-top: 12px;
            border-top: 1px solid var(--line);
        }

        .hero-note-list div {
            display: flex;
            gap: 10px;
            align-items: center;
            color: var(--steel);
            font-weight: 700;
            font-size: 0.94rem;
        }

        .hero-note-list div::before {
            content: "";
            width: 9px;
            height: 9px;
            flex: 0 0 auto;
            border-radius: 50%;
            background: var(--rust);
        }

        .trust-strip {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            margin-top: 48px;
            border: 1px solid rgba(255, 255, 255, 0.16);
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(12px);
        }

        .trust-item {
            min-height: 106px;
            padding: 22px;
            border-right: 1px solid rgba(255, 255, 255, 0.16);
        }

        .trust-item:last-child {
            border-right: 0;
        }

        .trust-item strong {
            display: block;
            margin-bottom: 7px;
            color: #f0b6bb;
            font-size: 1.45rem;
        }

        .trust-item span {
            color: rgba(255, 255, 255, 0.78);
            font-size: 0.9rem;
            font-weight: 600;
        }

        section {
            padding: 82px 0;
        }

        .section-head {
            display: grid;
            grid-template-columns: minmax(0, 1.15fr) minmax(260px, 0.85fr);
            gap: 36px;
            align-items: end;
            margin-bottom: 38px;
        }

        .section-head h2 {
            margin-bottom: 0;
            font-size: clamp(2.15rem, 4vw, 3.5rem);
            line-height: 1.04;
            letter-spacing: 0;
        }

        .section-head p {
            margin-bottom: 0;
            color: var(--muted);
        }

        .services {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 16px;
        }

        .service {
            min-height: 250px;
            position: relative;
            overflow: hidden;
            padding: 26px;
            border: 1px solid var(--line);
            border-radius: 8px;
            background: var(--white);
            box-shadow: 0 18px 38px rgba(45, 54, 65, 0.08);
        }

        .service::after {
            content: "";
            position: absolute;
            right: -28px;
            top: -28px;
            width: 84px;
            height: 84px;
            border: 18px solid rgba(165, 43, 52, 0.12);
            transform: rotate(22deg);
        }

        .service-mark {
            width: 48px;
            height: 48px;
            display: grid;
            place-items: center;
            margin-bottom: 24px;
            border-radius: 8px;
            background: #f7e9ea;
            color: var(--green);
            font-weight: 800;
        }

        .service h3 {
            margin-bottom: 12px;
            font-size: 1.18rem;
        }

        .service p,
        .step p {
            margin-bottom: 0;
            color: var(--muted);
        }

        .capability {
            color: var(--white);
            background: var(--coal);
            border-top: 1px solid rgba(255, 255, 255, 0.12);
            border-bottom: 1px solid rgba(255, 255, 255, 0.12);
        }

        .capability .section-head p {
            color: rgba(255, 255, 255, 0.72);
        }

        .capability-grid {
            display: grid;
            grid-template-columns: 1.15fr 0.85fr;
            gap: 18px;
            align-items: stretch;
        }

        .feature-panel {
            min-height: 400px;
            padding: 32px;
            border-radius: 8px;
            background:
                linear-gradient(180deg, rgba(23, 33, 43, 0.1), rgba(23, 33, 43, 0.9)),
                url("/images/swarajya-hero.png") center / cover no-repeat;
            display: grid;
            align-content: end;
            overflow: hidden;
        }

        .feature-panel h3 {
            max-width: 520px;
            margin-bottom: 12px;
            font-size: clamp(1.9rem, 4vw, 3.2rem);
            line-height: 1.05;
        }

        .feature-panel p {
            max-width: 530px;
            margin-bottom: 0;
            color: rgba(255, 255, 255, 0.78);
        }

        .capability-list {
            display: grid;
            gap: 14px;
        }

        .capability-item {
            padding: 24px;
            border-radius: 8px;
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.14);
        }

        .capability-item strong {
            display: block;
            margin-bottom: 8px;
            color: #f0b6bb;
            font-size: 0.86rem;
            text-transform: uppercase;
        }

        .capability-item h3 {
            margin-bottom: 8px;
            font-size: 1.18rem;
        }

        .capability-item p {
            margin-bottom: 0;
            color: rgba(255, 255, 255, 0.7);
        }

        .process-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 20px;
        }

        .step {
            padding-top: 24px;
            border-top: 4px solid var(--rust);
        }

        .step-number {
            display: block;
            margin-bottom: 15px;
            color: var(--rust);
            font-weight: 800;
            text-transform: uppercase;
        }

        .step h3 {
            margin-bottom: 10px;
            font-size: 1.35rem;
        }

        .contact {
            color: var(--white);
            background:
                linear-gradient(90deg, rgba(48, 48, 48, 0.96), rgba(125, 32, 40, 0.92)),
                var(--coal);
        }

        .contact-grid {
            display: grid;
            grid-template-columns: minmax(0, 1fr) minmax(320px, 0.8fr);
            gap: 42px;
            align-items: center;
        }

        .contact h2 {
            max-width: 660px;
            margin-bottom: 16px;
            font-size: clamp(2.25rem, 4.4vw, 4rem);
            line-height: 1.04;
        }

        .contact p {
            max-width: 610px;
            color: rgba(255, 255, 255, 0.76);
        }

        .contact-panel {
            padding: 30px;
            border-radius: 8px;
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.18);
        }

        .contact-row {
            display: grid;
            grid-template-columns: 120px 1fr;
            gap: 18px;
            padding: 18px 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.15);
        }

        .contact-row:first-child {
            padding-top: 0;
        }

        .contact-row:last-child {
            padding-bottom: 0;
            border-bottom: 0;
        }

        .contact-row span {
            color: rgba(255, 255, 255, 0.62);
            font-weight: 700;
        }

        .contact-row strong {
            font-weight: 800;
        }

        .footer {
            padding: 48px 0 28px;
            color: rgba(255, 255, 255, 0.72);
            background: var(--coal);
            font-size: 0.92rem;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 1.4fr repeat(4, 1fr);
            gap: 34px;
            padding-bottom: 34px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.16);
        }

        .footer-logo {
            width: 150px;
            padding: 8px;
            border-radius: 6px;
            background: var(--white);
            margin-bottom: 12px;
        }

        .footer p,
        .footer a {
            color: rgba(255, 255, 255, 0.76);
        }

        .footer h3 {
            margin: 0 0 16px;
            font-size: 1rem;
            text-transform: uppercase;
        }

        .footer-links {
            display: grid;
            gap: 10px;
            font-weight: 650;
        }

        .copyright {
            margin: 28px 0 0;
            text-align: center;
            color: rgba(255, 255, 255, 0.72);
        }

        @media (max-width: 980px) {
            .nav-links {
                display: none;
            }

            .hero-grid,
            .trust-strip,
            .section-head,
            .services,
            .capability-grid,
            .process-grid,
            .contact-grid {
                grid-template-columns: 1fr;
            }

            .hero {
                min-height: auto;
                background-position: 62% center;
            }

            .hero-inner {
                padding: 124px 0 42px;
            }

            .hero-note {
                max-width: 420px;
            }

            .trust-strip {
                margin-top: 36px;
            }

            .trust-item {
                border-right: 0;
                border-bottom: 1px solid rgba(255, 255, 255, 0.16);
            }

            .trust-item:last-child {
                border-bottom: 0;
            }

            .footer-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (max-width: 560px) {
            .wrap {
                width: min(100% - 24px, 1160px);
            }

            .nav {
                min-height: 70px;
            }

            .brand-logo {
                width: 78px;
                height: 46px;
            }

            .brand-text span:first-child {
                max-width: 155px;
                font-size: 0.94rem;
            }

            .brand-text span:last-child {
                display: none;
            }

            .hero-inner {
                padding-top: 104px;
            }

            h1 {
                font-size: 2.55rem;
            }

            section {
                padding: 62px 0;
            }

            .service,
            .feature-panel,
            .capability-item,
            .contact-panel {
                padding: 22px;
            }

            .feature-panel {
                min-height: 360px;
            }

            .contact-pill {
                display: none;
            }

            .contact-row {
                display: block;
            }

            .contact-row strong {
                display: block;
                margin-top: 6px;
            }

            .footer-grid {
                grid-template-columns: 1fr;
                gap: 24px;
            }
        }
    </style>
</head>
<body>
    @include('partials.header')

    <main id="home">
        <section class="hero">
            <div class="wrap hero-inner">
                <div class="hero-grid">
                    <div>
                        <p class="eyebrow">Civil construction with disciplined execution</p>
                        <h1>Strong foundations. Clean handovers. Reliable site work.</h1>
                        <p class="hero-copy">Swarajya Construction Pvt. Ltd. delivers residential, commercial, renovation, and civil work with practical planning, quality material control, and clear communication.</p>
                        <div class="hero-actions">
                            <a class="button" href="#contact">Request Site Visit</a>
                            <a class="button secondary" href="#services">Explore Services</a>
                        </div>
                    </div>
                    <aside class="hero-note" aria-label="Company focus">
                        <strong>Project Discipline</strong>
                        <span>One accountable team from site visit to handover.</span>
                        <p>Built for owners who want clear scope, reliable site coordination, and quality-focused finishing.</p>
                        <div class="hero-note-list">
                            <div>Site visit and measurement</div>
                            <div>Material and labor planning</div>
                            <div>Progress updates and handover</div>
                        </div>
                    </aside>
                </div>

                <div class="trust-strip" aria-label="Swarajya Construction highlights">
                    <div class="trust-item">
                        <strong>01</strong>
                        <span>Site visit and scope clarity before work starts.</span>
                    </div>
                    <div class="trust-item">
                        <strong>02</strong>
                        <span>Practical timeline planning with progress updates.</span>
                    </div>
                    <div class="trust-item">
                        <strong>03</strong>
                        <span>Residential, commercial, renovation, and repair work.</span>
                    </div>
                    <div class="trust-item">
                        <strong>04</strong>
                        <span>Clean execution focused on strength and finish quality.</span>
                    </div>
                </div>
            </div>
        </section>

        <section id="services">
            <div class="wrap">
                <div class="section-head">
                    <h2>Construction services planned for real site conditions.</h2>
                    <p>Every project is scoped with material needs, labor flow, sequencing, and finishing requirements so the work stays practical from day one.</p>
                </div>
                <div class="services">
                    <article class="service">
                        <div class="service-mark">01</div>
                        <h3>Residential Construction</h3>
                        <p>Homes, extensions, structural work, plaster, flooring, and finishing with careful attention to durability and daily use.</p>
                    </article>
                    <article class="service">
                        <div class="service-mark">02</div>
                        <h3>Commercial Projects</h3>
                        <p>Shops, offices, business interiors, repairs, and civil upgrades delivered with timeline and site coordination.</p>
                    </article>
                    <article class="service">
                        <div class="service-mark">03</div>
                        <h3>Renovation and Repair</h3>
                        <p>Waterproofing, crack repair, demolition, masonry, tiling, painting, and property improvement work.</p>
                    </article>
                    <article class="service">
                        <div class="service-mark">04</div>
                        <h3>Project Supervision</h3>
                        <p>Vendor coordination, material checks, progress tracking, and quality-focused site management.</p>
                    </article>
                </div>
            </div>
        </section>

        <section id="capability" class="capability">
            <div class="wrap">
                <div class="section-head">
                    <h2>Built for clients who want clarity at the site.</h2>
                    <p>Construction is smoother when scope, sequence, and responsibility are visible. That is the working style behind every Swarajya project.</p>
                </div>
                <div class="capability-grid">
                    <article class="feature-panel">
                        <h3>Turnkey civil work from groundwork to final finish.</h3>
                        <p>Excavation, RCC, masonry, plaster, waterproofing, flooring, painting, plumbing coordination, electrical coordination, and handover support.</p>
                    </article>
                    <div class="capability-list">
                        <article class="capability-item">
                            <strong>Planning</strong>
                            <h3>Clear scope and estimate</h3>
                            <p>Site requirements are broken into practical work stages before execution begins.</p>
                        </article>
                        <article class="capability-item">
                            <strong>Execution</strong>
                            <h3>Organized site flow</h3>
                            <p>Work is sequenced to reduce delays, rework, material waste, and avoidable confusion.</p>
                        </article>
                        <article class="capability-item">
                            <strong>Quality</strong>
                            <h3>Strength plus finish</h3>
                            <p>Structural work, surface preparation, and finishing details are checked as the site progresses.</p>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <section id="process">
            <div class="wrap">
                <div class="section-head">
                    <h2>A direct process for moving from idea to execution.</h2>
                    <p>Simple steps, clear decisions, and regular updates make the project easier to manage for owners and site teams.</p>
                </div>
                <div class="process-grid">
                    <article class="step">
                        <span class="step-number">Step 01</span>
                        <h3>Site Visit</h3>
                        <p>Review the site, understand the requirement, note constraints, and discuss budget expectations.</p>
                    </article>
                    <article class="step">
                        <span class="step-number">Step 02</span>
                        <h3>Plan and Estimate</h3>
                        <p>Define work scope, materials, labor flow, duration, and priorities before starting execution.</p>
                    </article>
                    <article class="step">
                        <span class="step-number">Step 03</span>
                        <h3>Build and Handover</h3>
                        <p>Coordinate the work, share progress, solve issues early, and hand over the finished space cleanly.</p>
                    </article>
                </div>
            </div>
        </section>

        <section id="contact" class="contact">
            <div class="wrap contact-grid">
                <div>
                    <p class="eyebrow">Start your project</p>
                    <h2>Tell us about your site and timeline.</h2>
                    <p>Share the project type, location, and expected work. Swarajya Construction Pvt. Ltd. can help you understand the next practical step.</p>
                    <a class="button" href="mailto:info@swarajyaconstruction.com?subject=Project%20Enquiry%20for%20Swarajya%20Construction">Send Enquiry</a>
                </div>
                <div class="contact-panel">
                    <div class="contact-row">
                        <span>Company</span>
                        <strong>Swarajya Construction Pvt. Ltd.</strong>
                    </div>
                    <div class="contact-row">
                        <span>Email</span>
                        <strong>info@swarajyaconstruction.com</strong>
                    </div>
                    <div class="contact-row">
                        <span>Work</span>
                        <strong>Residential, commercial, renovation, civil repairs</strong>
                    </div>
                    <div class="contact-row">
                        <span>Visit</span>
                        <strong>Site visits by appointment</strong>
                    </div>
                </div>
            </div>
        </section>
    </main>

    @include('partials.footer')
</body>
</html>
