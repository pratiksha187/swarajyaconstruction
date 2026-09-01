<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Swarajya Construction Pvt. Ltd. | Civil Construction Company</title>
    <meta name="description" content="Learn about Swarajya Construction Pvt. Ltd., our vision, mission, approach, leadership and team for residential, commercial and civil construction projects.">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700,800" rel="stylesheet">
    <style>
        :root {
            --ink: #20272f;
            --charcoal: #2f3030;
            --page: #dedede;
            --copy: #4f5963;
            --maroon: #a52b34;
            --maroon-dark: #7d2028;
            --gold: #e7ad43;
            --white: #ffffff;
        }

        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            background: var(--page);
            color: var(--ink);
            font-family: "Instrument Sans", system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            line-height: 1.35;
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
            z-index: 30;
            position: fixed;
            top: 0;
            right: 0;
            left: 0;
            padding: 14px 0;
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
            padding: 4px;
            border-radius: 6px;
            background: var(--white);
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 24px;
            color: #151515;
            font-size: 0.94rem;
            font-weight: 700;
        }

        .nav-links a {
            position: relative;
            padding: 8px 0;
        }

        .nav-links a:hover,
        .nav-links .active {
            color: var(--maroon);
        }

        .nav-links .active::after {
            content: "";
            position: absolute;
            right: 0;
            bottom: 0;
            left: 0;
            height: 3px;
            border-radius: 99px;
            background: var(--maroon);
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

        .about-main {
            padding: 112px 0 0;
            overflow: hidden;
        }

        .section {
            padding: 24px 0 46px;
        }

        .title-pill {
            display: inline-flex;
            align-items: center;
            min-height: 54px;
            padding: 8px 18px 10px;
            border-radius: 8px;
            background: var(--maroon);
            color: var(--white);
            font-size: clamp(1.85rem, 2.35vw, 2.9rem);
            font-weight: 850;
            line-height: 1;
            letter-spacing: 0;
        }

        .copy {
            margin: 24px 0 0;
            color: var(--copy);
            font-size: clamp(1rem, 1.08vw, 1.32rem);
            font-weight: 650;
            line-height: 1.25;
        }

        .copy p {
            margin: 0 0 22px;
        }

        .copy p:last-child {
            margin-bottom: 0;
        }

        .copy strong,
        .pill-copy strong {
            color: #30363c;
            font-weight: 850;
        }

        .intro-grid,
        .split-grid {
            display: grid;
            grid-template-columns: minmax(0, 1.05fr) minmax(360px, 0.95fr);
            gap: 48px;
            align-items: start;
        }

        .photo-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 42px;
            align-items: start;
        }

        .vision-row {
            display: grid;
            grid-template-columns: minmax(0, 0.96fr) minmax(0, 1.04fr);
            gap: 48px;
            align-items: center;
        }

        .site-image {
            width: 100%;
            min-height: 310px;
            border-radius: 10px;
            border-top: 1px solid rgba(255, 255, 255, 0.75);
            border-left: 1px solid rgba(255, 255, 255, 0.75);
            border-right: 8px solid var(--maroon);
            border-bottom: 1px solid rgba(60, 60, 60, 0.22);
            background:
                linear-gradient(180deg, rgba(20, 25, 30, 0.04), rgba(20, 25, 30, 0.18)),
                url("/images/swarajya-hero.png") center / cover no-repeat;
            box-shadow: 0 4px 0 rgba(0, 0, 0, 0.22), 0 12px 26px rgba(0, 0, 0, 0.16);
        }

        .site-image.hero-crop {
            aspect-ratio: 1.92 / 1;
            background-position: 68% 50%;
        }

        .site-image.left-crop {
            aspect-ratio: 1.86 / 1;
            background-position: 44% 52%;
        }

        .site-image.detail-crop {
            min-height: 390px;
            aspect-ratio: 1.28 / 1;
            background-position: 72% 52%;
        }

        .panel {
            padding: 34px 36px;
            border-left: 8px solid var(--maroon);
            border-radius: 10px;
            background: rgba(255, 255, 255, 0.34);
        }

        .panel + .panel {
            margin-top: 0;
        }

        .pill-copy {
            margin-top: 18px;
            color: var(--copy);
            font-size: clamp(1rem, 1vw, 1.22rem);
            font-weight: 650;
            line-height: 1.25;
        }

        .tagline {
            margin: 0;
            padding: 10px 0 54px;
            color: #080808;
            font-size: clamp(1.45rem, 1.85vw, 2.2rem);
            font-weight: 850;
            line-height: 1.1;
        }

        .approach-subtitle {
            margin: 18px 0 44px;
            color: #383838;
            font-size: clamp(1rem, 1.05vw, 1.28rem);
            font-weight: 550;
        }

        .approach-grid {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 88px;
            margin-bottom: 70px;
        }

        .approach-card {
            position: relative;
            min-height: 182px;
            display: flex;
            align-items: end;
            justify-content: center;
            padding: 84px 18px 22px;
            border-radius: 12px;
            border-left: 8px solid var(--maroon);
            background: var(--white);
            color: #333;
            text-align: center;
            box-shadow: 4px 5px 0 rgba(0, 0, 0, 0.22), 0 12px 22px rgba(0, 0, 0, 0.08);
        }

        .approach-number {
            position: absolute;
            top: 0;
            left: 50%;
            width: 128px;
            height: 82px;
            display: grid;
            place-items: center;
            transform: translateX(-50%);
            border-radius: 0 0 12px 12px;
            background: var(--maroon);
            color: var(--white);
            font-size: clamp(2.5rem, 3vw, 3.8rem);
            font-weight: 900;
            line-height: 1;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.35);
        }

        .approach-card p {
            max-width: 250px;
            margin: 0;
            font-size: clamp(0.9rem, 0.9vw, 1.08rem);
            font-weight: 650;
            line-height: 1.12;
        }

        .pillar-title {
            margin-top: 28px;
            color: var(--maroon);
            font-size: clamp(1rem, 1vw, 1.18rem);
            font-weight: 900;
        }

        .pillar-list {
            display: grid;
            gap: 22px;
            margin-top: 24px;
            color: var(--copy);
            font-size: clamp(1rem, 1vw, 1.2rem);
            font-weight: 600;
            line-height: 1.14;
        }

        .pillar-list p {
            margin: 0;
        }

        .pillar-list strong {
            display: block;
            color: #414141;
            font-size: 1.05em;
            font-weight: 900;
        }

        .leader-grid {
            display: grid;
            grid-template-columns: minmax(0, 860px);
            gap: 42px;
            margin: 46px 0 88px;
        }

        .leader-card {
            display: grid;
            grid-template-columns: 290px minmax(0, 1fr);
            align-items: center;
            min-height: 260px;
        }

        .portrait-box {
            position: relative;
            z-index: 2;
            height: 282px;
            display: grid;
            place-items: center;
            border: 8px solid var(--charcoal);
            border-radius: 12px;
            background: #fff;
            overflow: hidden;
            box-shadow: 0 12px 22px rgba(0, 0, 0, 0.16);
        }

        .portrait-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center 18%;
        }

        .leader-info {
            min-height: 206px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            margin-left: -8px;
            padding: 26px 24px 26px 32px;
            border-radius: 0 14px 14px 0;
            background: var(--maroon);
            color: var(--white);
            box-shadow: 0 12px 22px rgba(0, 0, 0, 0.12);
        }

        .leader-info h3 {
            margin: 0 0 10px;
            color: var(--white);
            font-size: clamp(1.8rem, 2vw, 2.6rem);
            font-weight: 900;
            line-height: 1;
        }

        .leader-role {
            margin: 0 0 24px;
            color: var(--white);
            font-size: clamp(0.95rem, 1vw, 1.15rem);
            font-weight: 850;
            line-height: 1.15;
        }

        .leader-info p:last-child {
            margin: 0;
            color: var(--white);
            font-size: clamp(0.86rem, 0.9vw, 1rem);
            font-weight: 700;
            line-height: 1.18;
        }

        .team-grid {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 38px 58px;
            margin-top: 74px;
        }

        .team-card {
            overflow: hidden;
            border-radius: 8px;
            border: 6px solid var(--charcoal);
            background: var(--charcoal);
            color: var(--white);
            text-align: center;
            box-shadow: 0 12px 22px rgba(0, 0, 0, 0.12);
        }

        .team-photo {
            height: 236px;
            display: grid;
            place-items: center;
            background: linear-gradient(145deg, #f8f8f8, #cfcfcf);
        }

        .team-photo span {
            width: 108px;
            height: 108px;
            display: grid;
            place-items: center;
            border-radius: 50%;
            background: var(--white);
            color: var(--maroon);
            font-size: 2rem;
            font-weight: 900;
            box-shadow: 0 8px 18px rgba(0, 0, 0, 0.18);
        }

        .team-card h3 {
            margin: 14px 10px 3px;
            color: var(--white);
            font-size: clamp(1.15rem, 1.25vw, 1.6rem);
            font-weight: 900;
            line-height: 1.05;
        }

        .team-card p {
            min-height: 42px;
            margin: 0 10px 16px;
            color: #dedede;
            font-size: clamp(0.82rem, 0.82vw, 1rem);
            line-height: 1.08;
        }

        .footer {
            margin-top: 34px;
            padding: 48px 0 28px;
            background: #303030;
            color: var(--white);
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

        @media (max-width: 1180px) {
            .intro-grid,
            .photo-grid,
            .split-grid,
            .leader-grid {
                grid-template-columns: 1fr;
            }

            .approach-grid,
            .team-grid,
            .footer-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .vision-row {
                grid-template-columns: 1fr;
                gap: 24px;
            }

            .leader-card {
                max-width: 820px;
            }
        }

        @media (max-width: 760px) {
            .wrap {
                width: min(100% - 24px, 1160px);
            }

            .nav {
                min-height: 70px;
            }

            .nav-links,
            .contact-pill {
                display: none;
            }

            .brand-logo {
                width: 78px;
                height: 46px;
            }

            .about-main {
                padding-top: 98px;
            }

            .section {
                padding-bottom: 38px;
            }

            .title-pill {
                min-height: 44px;
                font-size: 1.7rem;
            }

            .photo-grid,
            .intro-grid,
            .split-grid,
            .vision-row,
            .approach-grid,
            .team-grid,
            .footer-grid {
                grid-template-columns: 1fr;
                gap: 24px;
            }

            .site-image {
                min-height: 230px;
            }

            .tagline {
                padding-bottom: 34px;
            }

            .leader-card {
                grid-template-columns: 1fr;
            }

            .portrait-box {
                height: 236px;
            }

            .portrait-box img {
                object-position: center 16%;
            }

            .leader-info {
                min-height: auto;
                margin: -6px 10px 0;
                padding: 28px 22px 24px;
                border-radius: 0 0 12px 12px;
            }

            .team-grid {
                margin-top: 42px;
            }
        }
    </style>
</head>
<body>
    @include('partials.header')

    <main class="about-main">
        <section class="section">
            <div class="wrap intro-grid">
                <div>
                    <h1 class="title-pill">About Swarajya Construction</h1>
                    <div class="copy">
                        <p><strong>Swarajya Construction Pvt. Ltd.</strong> is a civil construction company focused on residential, commercial, renovation, repair and project supervision work. We help property owners move from idea to execution through a structured, practical and quality-focused process.</p>
                        <p>Our role is to understand site requirements, organise the scope of work, coordinate execution, manage material flow and deliver dependable construction outcomes with clear communication.</p>
                    </div>
                </div>
                <div class="site-image hero-crop" role="img" aria-label="Swarajya construction site execution"></div>
            </div>
        </section>

        <section class="section">
            <div class="wrap photo-grid">
                <div class="vision-row">
                    <div class="site-image left-crop" role="img" aria-label="Construction planning and supervision"></div>
                    <article class="panel">
                        <h2 class="title-pill">Our Vision</h2>
                        <div class="pill-copy">
                            <p>Our vision is to establish <strong>Swarajya Construction Pvt. Ltd.</strong> as a trusted name for civil construction, renovation and project execution. We aim to deliver strong, usable and well-finished spaces for homeowners, businesses and institutions.</p>
                            <p>We aspire to become a dependable partner for <strong>residential construction, commercial projects, repair work, waterproofing, finishing and turnkey civil work</strong> by combining practical planning with disciplined site execution.</p>
                        </div>
                    </article>
                </div>

                <div class="vision-row">
                    <div class="site-image left-crop" role="img" aria-label="Civil construction project coordination"></div>
                    <article class="panel">
                        <h2 class="title-pill">Our Mission</h2>
                        <div class="pill-copy">
                            <p>Our mission is to make construction easier to understand and easier to manage for our clients. We focus on clear scope, material planning, vendor coordination, quality checks and timely progress updates.</p>
                            <p>Through structured site visits, accurate work planning, construction supervision and clean handover, we work to connect <strong>the right process, the right material and the right execution team</strong> for every project.</p>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="wrap">
                <p class="tagline">Strong planning. Reliable execution. Clean handover.</p>
                <h2 class="title-pill">Our Approach</h2>
                <p class="approach-subtitle">Every construction project is handled through a clear and practical process.</p>

                <div class="approach-grid">
                    <article class="approach-card">
                        <span class="approach-number">01</span>
                        <p><strong>Understand</strong> We study the site, requirement, budget, timeline and practical constraints.</p>
                    </article>
                    <article class="approach-card">
                        <span class="approach-number">02</span>
                        <p><strong>Organise</strong> We prepare scope, material needs, labor flow, sequence and execution priorities.</p>
                    </article>
                    <article class="approach-card">
                        <span class="approach-number">03</span>
                        <p><strong>Execute</strong> We coordinate civil work, finishing, repair work and allied site teams.</p>
                    </article>
                    <article class="approach-card">
                        <span class="approach-number">04</span>
                        <p><strong>Handover</strong> We review finishing details, resolve pending items and deliver a clean site.</p>
                    </article>
                </div>

                <div class="split-grid">
                    <div>
                        <h2 class="title-pill">About Swarajya Construction</h2>
                        <div class="copy">
                            <p>Swarajya Construction is defined by practical site knowledge, disciplined coordination and reliable workmanship. We evaluate every construction requirement through location, structure, usability, material selection and long-term maintenance needs.</p>
                        </div>
                        <p class="pillar-title">Key Pillars</p>
                        <div class="pillar-list">
                            <p><strong>Site Knowledge</strong>Understanding actual site conditions before planning work.</p>
                            <p><strong>Quality Materials</strong>Using suitable materials and checking work during execution.</p>
                            <p><strong>Clear Communication</strong>Keeping clients informed through the project journey.</p>
                            <p><strong>Complete Coordination</strong>Supporting every project from site visit to final handover.</p>
                        </div>
                    </div>
                    <div class="site-image detail-crop" role="img" aria-label="Swarajya civil construction handover"></div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="wrap">
                <h2 class="title-pill">Leadership</h2>
                <div class="leader-grid">
                    <article class="leader-card">
                        <div class="portrait-box">
                            <img src="/images/aniket-patil.png" alt="Aniket A. Patil">
                        </div>
                        <div class="leader-info">
                            <h3>Aniket A. Patil</h3>
                            <p class="leader-role">Director &amp; Business<br>Development Head</p>
                            <p>He leads business development, client relationships and project opportunity coordination, bringing a structured, professionally trained and compliance-aware approach to construction advisory.</p>
                        </div>
                    </article>
                </div>

                <h2 class="title-pill">Our Team</h2>
                <div class="team-grid">
                    @foreach ([
                        ['name' => 'Civil Execution Team', 'role' => 'RCC, masonry, plaster and repair work', 'initials' => 'CE'],
                        ['name' => 'Project Coordination', 'role' => 'Planning, scheduling and vendor follow-up', 'initials' => 'PC'],
                        ['name' => 'Finishing Team', 'role' => 'Flooring, painting, waterproofing and details', 'initials' => 'FT'],
                        ['name' => 'Site Supervision', 'role' => 'Quality checks and progress reporting', 'initials' => 'SS'],
                        ['name' => 'Material Support', 'role' => 'Procurement and material coordination', 'initials' => 'MS'],
                        ['name' => 'Client Support', 'role' => 'Site visit, estimate and communication', 'initials' => 'CS'],
                    ] as $member)
                        <article class="team-card">
                            <div class="team-photo"><span>{{ $member['initials'] }}</span></div>
                            <h3>{{ $member['name'] }}</h3>
                            <p>{{ $member['role'] }}</p>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>
    </main>

    @include('partials.footer')
</body>
</html>
