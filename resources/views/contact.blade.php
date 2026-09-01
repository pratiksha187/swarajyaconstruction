<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Swarajya Construction Pvt. Ltd. | Site Visit & Estimate</title>
    <meta name="description" content="Contact Swarajya Construction Pvt. Ltd. for residential, commercial, renovation and civil construction work.">
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

        .contact-main {
            padding-top: 112px;
        }

        .hero {
            padding: 42px 0 62px;
            box-shadow: 0 8px 22px rgba(0, 0, 0, 0.09);
        }

        .eyebrow {
            display: inline-flex;
            align-items: center;
            min-height: 28px;
            padding: 0 13px;
            border-radius: 4px;
            background: var(--charcoal);
            color: var(--white);
            font-size: 0.78rem;
            font-weight: 850;
        }

        .hero h1 {
            max-width: 700px;
            margin: 24px 0 18px;
            color: #12171c;
            font-size: clamp(2.25rem, 4vw, 4.8rem);
            font-weight: 900;
            line-height: 0.98;
            letter-spacing: 0;
        }

        .hero p {
            max-width: 760px;
            margin: 0;
            color: #3e464e;
            font-size: clamp(1rem, 1.05vw, 1.2rem);
            font-weight: 600;
            line-height: 1.4;
        }

        .contact-section {
            padding: 54px 0 64px;
            background: #f4f4f4;
        }

        .contact-grid {
            display: grid;
            grid-template-columns: minmax(250px, 320px) minmax(0, 1fr);
            gap: 34px;
            align-items: stretch;
        }

        .reach-card,
        .form-card,
        .office-card {
            border-radius: 10px;
            box-shadow: 0 10px 22px rgba(0, 0, 0, 0.12);
        }

        .reach-card {
            padding: 34px 30px;
            background: var(--charcoal);
            color: var(--white);
        }

        .reach-card h2,
        .form-card h2,
        .office-card h2 {
            margin: 0 0 18px;
            font-size: clamp(1.55rem, 2vw, 2.2rem);
            font-weight: 900;
            line-height: 1;
        }

        .contact-item {
            display: grid;
            grid-template-columns: 34px minmax(0, 1fr);
            gap: 13px;
            align-items: start;
            margin-top: 20px;
        }

        .contact-icon {
            width: 34px;
            height: 34px;
            display: grid;
            place-items: center;
            border-radius: 50%;
            background: var(--maroon);
            color: var(--white);
            font-weight: 900;
        }

        .contact-item strong {
            display: block;
            margin-bottom: 4px;
            color: var(--white);
            font-size: 0.95rem;
            font-weight: 900;
        }

        .contact-item p,
        .contact-item a {
            margin: 0;
            color: rgba(255, 255, 255, 0.82);
            font-size: 0.88rem;
            font-weight: 650;
            line-height: 1.35;
        }

        .socials {
            display: flex;
            gap: 10px;
            margin-top: 28px;
        }

        .socials a {
            width: 30px;
            height: 30px;
            display: grid;
            place-items: center;
            border-radius: 50%;
            background: var(--white);
            color: var(--maroon);
            font-size: 0.78rem;
            font-weight: 900;
        }

        .form-card {
            padding: 34px;
            background: var(--white);
        }

        .form-card h2 {
            margin-bottom: 6px;
            color: #161b20;
        }

        .form-card > p {
            margin: 0 0 24px;
            color: var(--copy);
            font-size: 0.9rem;
            font-weight: 650;
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 16px;
        }

        .field,
        textarea {
            width: 100%;
            border: 1px solid #e1e1e1;
            border-radius: 6px;
            background: #fbfbfb;
            color: var(--ink);
            font: inherit;
            font-size: 0.9rem;
            font-weight: 600;
            outline: none;
        }

        .field {
            min-height: 46px;
            padding: 0 15px;
        }

        textarea {
            min-height: 136px;
            resize: vertical;
            padding: 14px 15px;
        }

        .field:focus,
        textarea:focus {
            border-color: var(--maroon);
            box-shadow: 0 0 0 3px rgba(165, 43, 52, 0.1);
        }

        .full {
            grid-column: 1 / -1;
        }

        .btn-row {
            margin-top: 18px;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 46px;
            padding: 0 24px;
            border: 0;
            border-radius: 6px;
            background: var(--maroon);
            color: var(--white);
            font: inherit;
            font-size: 0.9rem;
            font-weight: 900;
            cursor: pointer;
        }

        .btn:hover {
            background: var(--maroon-dark);
        }

        .office-card {
            margin-top: 54px;
            padding: 30px;
            background: #e9e9e9;
        }

        .office-card h2 {
            margin-bottom: 10px;
            color: var(--maroon);
        }

        .office-card p {
            max-width: 900px;
            margin: 0 0 22px;
            color: var(--copy);
            font-weight: 650;
        }

        .office-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
        }

        .office-actions .btn-dark {
            background: var(--charcoal);
        }

        .footer {
            padding: 44px 0 24px;
            background: #303030;
            color: var(--white);
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 1.6fr repeat(4, 1fr);
            gap: 28px;
            padding-bottom: 34px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.16);
        }

        .footer-logo {
            width: 122px;
            height: 58px;
            object-fit: contain;
            padding: 6px;
            border-radius: 6px;
            background: var(--white);
        }

        .footer h3 {
            margin: 16px 0 12px;
            font-size: 0.98rem;
            font-weight: 900;
            text-transform: uppercase;
        }

        .footer p,
        .footer a {
            color: rgba(255, 255, 255, 0.78);
            font-size: 0.88rem;
            font-weight: 600;
            line-height: 1.45;
        }

        .footer-links {
            display: grid;
            gap: 9px;
        }

        .copyright {
            margin: 22px 0 0;
            text-align: center;
        }

        @media (max-width: 980px) {
            .contact-grid,
            .footer-grid {
                grid-template-columns: 1fr;
            }

            .reach-card {
                order: 2;
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

            .contact-main {
                padding-top: 98px;
            }

            .hero {
                padding: 30px 0 44px;
            }

            .contact-section {
                padding: 34px 0 46px;
            }

            .form-card,
            .reach-card,
            .office-card {
                padding: 24px 20px;
            }

            .form-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    @include('partials.header')

    <main class="contact-main">
        <section class="hero">
            <div class="wrap">
                <span class="eyebrow">Contact Swarajya</span>
                <h1>Let us discuss your construction requirement</h1>
                <p>Connect with Swarajya Construction Pvt. Ltd. for residential, commercial, renovation and civil construction work across Maharashtra.</p>
            </div>
        </section>

        <section class="contact-section">
            <div class="wrap">
                <div class="contact-grid">
                    <aside class="reach-card" aria-label="Contact details">
                        <h2>Reach Us</h2>
                        <div class="contact-item">
                            <span class="contact-icon">A</span>
                            <div>
                                <strong>Address</strong>
                                <p>Khopoli, Maharashtra, India</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <span class="contact-icon">P</span>
                            <div>
                                <strong>Phone</strong>
                                <a href="tel:+919876543210">+91 98765 43210</a>
                            </div>
                        </div>
                        <div class="contact-item">
                            <span class="contact-icon">E</span>
                            <div>
                                <strong>Email</strong>
                                <a href="mailto:info@swarajyaconstruction.com">info@swarajyaconstruction.com</a>
                            </div>
                        </div>
                        <div class="socials" aria-label="Social links">
                            <a href="#" aria-label="Facebook">f</a>
                            <a href="#" aria-label="Instagram">ig</a>
                            <a href="#" aria-label="LinkedIn">in</a>
                            <a href="#" aria-label="WhatsApp">wa</a>
                        </div>
                    </aside>

                    <section class="form-card" aria-labelledby="message-title">
                        <h2 id="message-title">Send a Message</h2>
                        <p>Share a few details and our team will get back to you with the right support.</p>
                        <form action="#" method="post">
                            <div class="form-grid">
                                <input class="field" type="text" name="first_name" placeholder="First Name *" required>
                                <input class="field" type="text" name="last_name" placeholder="Last Name">
                                <input class="field full" type="email" name="email" placeholder="Email *" required>
                                <input class="field full" type="tel" name="mobile" placeholder="Mobile Number *" required>
                                <textarea class="full" name="message" placeholder="Message *" required></textarea>
                            </div>
                            <div class="btn-row">
                                <button class="btn" type="submit">Send Message</button>
                            </div>
                        </form>
                    </section>
                </div>

                <section class="office-card" aria-labelledby="office-title">
                    <h2 id="office-title">Visit Our Office</h2>
                    <p>We are based in Khopoli and work across Maharashtra for residential, commercial, renovation and civil construction requirements.</p>
                    <div class="office-actions">
                        <a class="btn" href="https://www.google.com/maps/search/?api=1&query=Khopoli%2C%20Maharashtra" target="_blank" rel="noopener">Open in Maps</a>
                        <a class="btn btn-dark" href="https://wa.me/919876543210" target="_blank" rel="noopener">WhatsApp Us</a>
                    </div>
                </section>
            </div>
        </section>
    </main>

    @include('partials.footer')
</body>
</html>
