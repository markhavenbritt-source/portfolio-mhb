<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mark Britt</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&family=Roboto+Mono:wght@400;700&family=Space+Mono:wght@400;700&family=Space+Grotesk:wght@300;400;700;800&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Roboto mono', monospace;
            color: #000;
            background: #f0f0f0;
        }

        /* ── Header ── */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 40px;
            border-bottom: 1px solid #000;
            max-width: 1050px;
        }

        .logo {
            width: 60px;
            height: 60px;
            background: #000;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .logo img {
            width: 40px;
            height: 40px;
            object-fit: contain;
        }

        nav a {
            font-family: 'Space Mono', monospace;
            font-size: 14px;
            text-decoration: none;
            color: #000;
        }

        nav a:hover {
            text-decoration: underline;
        }

        /* ── Hero ── */
        .hero {
            padding: 60px 40px 50px;
        }

        .hero h1 {
            font-family: 'Roboto', sans-serif;
            font-size: 90px;
            font-weight: 900;
            line-height: 1.0;
            margin-bottom: 10px;
            letter-spacing: -0px;
        }

        .hero p {
            font-family: 'Roboto Mono', monospace;
            font-weight: 400;
            font-size: 22pt;
            line-height: 30pt;
        }

        /* ── Client Logos ── */
        .logos {
            padding: 10px 40px;
            border-top: 1px solid #000;
            border-bottom: 1px solid #000;
            display: flex;
            align-items: center;
            gap: 20px;
            flex-wrap: wrap;
            max-width: 1050px;
        }

        .logos img {
            height: 70px;
            width: auto;
            filter: grayscale(100%);
            opacity: 1.00;
        }

        /* ── Portfolio Grid ── */
        .portfolio {
            padding: 48px 40px;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px 25px;
            max-width: 900px;
        }

        .card {
            background: #fff;
            max-width: 280px;
        }

        .card h3,
        .card p {
            padding-left: 10px;
            padding-right: 10px;
        }

        .card p:last-child {
            padding-bottom: 10px;
        }

        .card .color-bar {
            height: 18px;
            width: 100%;
            margin-bottom: 16px;
            background-size: cover;
            background-position: center;
        }

        .card h3 {
            font-family: 'Roboto Bold', sans-serif;
            font-size: 15px;
            font-weight: 700;
            letter-spacing: 0.04em;
            margin-bottom: 14px;
        }

        .card p {
            font-family: 'Roboto Mono', monospace;
            font-size: 11px;
            line-height: 1.7;
            margin-bottom: 8px;
        }

        .card p strong {
            font-weight: 700;
            font-family: 'Roboto Mono', monospace;
        }

        /* ── Footer ── */
        footer {
            background: #111;
            color: #fff;
            padding: 48px 40px;
            margin-top: 20px;
        }

        footer p {
            font-family: 'Roboto Mono', monospace;
            font-size: 14px;
            line-height: 2.2;
        }

        footer a {
            color: #fff;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }

        /* ── Mobile ── */
        @media (max-width: 768px) {

            header,
            .logos {
                max-width: 100%;
                padding-left: 20px;
                padding-right: 20px;
            }

            .hero {
                padding: 40px 20px 30px;
            }

            .hero h1 {
                font-size: 52px;
            }

            .hero p {
                font-size: 15pt;
                line-height: 22pt;
            }

            .logos img {
                height: 16px;
                gap: 12px;
            }

            .portfolio {
                padding: 32px 20px;
            }

            .grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 24px 16px;
                max-width: 100%;
            }

            .card {
                max-width: 100%;
            }

            .card h3 {
                font-size: 13px;
            }

            .card p {
                font-size: 10px;
            }

            footer {
                padding: 32px 20px;
            }
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header>
        <div class="logo">
            <img src="/site-images/SVG/Asset 1.svg" alt="Mark Britt">
        </div>
        <nav>
            <a href="#contact">contact</a>
        </nav>
    </header>

    <!-- Hero -->
    <section class="hero">
        <h1>Mark Britt</h1>
        <p>Design player-coach. Pragmatist.<br>
        Problem-solver. People person. Creative.</p>
    </section>

    <!-- Client Logos -->
    <section class="logos">
        <img src="/site-images/LOGOS_bw_sized/logo_bw_meta.png" alt="Meta">
        <img src="/site-images/LOGOS_bw_sized/logo_bw_pagerduty.png" alt="PagerDuty">
        <img src="/site-images/LOGOS_bw_sized/logo_bw_docusign.png" alt="DocuSign">
        <img src="/site-images/LOGOS_bw_sized/logo_bw_kp.png" alt="Kaiser Permanente">
        <img src="/site-images/LOGOS_bw_sized/logo_bw_xero.png" alt="Xero">
        <img src="/site-images/LOGOS_bw_sized/logo_bw_espn.png" alt="ESPN">
    </section>

    <!-- Portfolio Grid -->
    <section class="portfolio">
        <div class="grid">

            <div class="card">
                <div class="color-bar" style="background-image: url('/site-images/home-images/bar_meta@2x.png');"></div>
                <h3>META + RAY BAN</h3>
                <p><strong>PROBLEM:</strong> Needed lifestyle content that articulated their smart glasses cutting edge features stylishly.</p>
                <p><strong>SOLUTION:</strong> Short films, editorial stills, and motion graphics were developed across a unified visual system bridging both brand identities.</p>
                <p><strong>ROLE:</strong> Design Program Manager</p>
            </div>

            <div class="card">
                <div class="color-bar" style="background-image: url('/site-images/home-images/bar_un_site@2x.png');"></div>
                <h3>UNBABEL SITE</h3>
                <p><strong>PROBLEM:</strong> Needed lifestyle content that articulated their smart glasses cutting edge features stylishly.</p>
                <p><strong>SOLUTION:</strong> Short films, editorial stills, and motion graphics were developed across a unified visual system bridging both brand identities.</p>
                <p><strong>ROLE:</strong> Design Program Manager</p>
            </div>

            <div class="card">
                <div class="color-bar" style="background-image: url('/site-images/home-images/bar_twinstar@2x.png');"></div>
                <h3>TWIN STAR BRANDING</h3>
                <p><strong>PROBLEM:</strong> Needed lifestyle content that articulated their smart glasses cutting edge features stylishly.</p>
                <p><strong>SOLUTION:</strong> Short films, editorial stills, and motion graphics were developed across a unified visual system bridging both brand identities.</p>
                <p><strong>ROLE:</strong> Design Program Manager</p>
            </div>

            <div class="card">
                <div class="color-bar" style="background-image: url('/site-images/home-images/bar_un_events@2x.png');"></div>
                <h3>UNBABEL EVENTS</h3>
                <p><strong>PROBLEM:</strong> Needed lifestyle content that articulated their smart glasses cutting edge features stylishly.</p>
                <p><strong>SOLUTION:</strong> Short films, editorial stills, and motion graphics were developed across a unified visual system bridging both brand identities.</p>
                <p><strong>ROLE:</strong> Design Program Manager</p>
            </div>

            <div class="card">
                <div class="color-bar" style="background-image: url('/site-images/home-images/bar_Pagerduty@2x.png');"></div>
                <h3>PAGERDUTY ADS</h3>
                <p><strong>PROBLEM:</strong> Needed lifestyle content that articulated their smart glasses cutting edge features stylishly.</p>
                <p><strong>SOLUTION:</strong> Short films, editorial stills, and motion graphics were developed across a unified visual system bridging both brand identities.</p>
                <p><strong>ROLE:</strong> Design Program Manager</p>
            </div>

            <div class="card">
                <div class="color-bar" style="background-image: url('/site-images/home-images/bar_Possibility@2x.png');"></div>
                <h3>POSSIBILITY LAB LOGO</h3>
                <p><strong>PROBLEM:</strong> Needed lifestyle content that articulated their smart glasses cutting edge features stylishly.</p>
                <p><strong>SOLUTION:</strong> Short films, editorial stills, and motion graphics were developed across a unified visual system bridging both brand identities.</p>
                <p><strong>ROLE:</strong> Design Program Manager</p>
            </div>

            <div class="card">
                <div class="color-bar" style="background-image: url('/site-images/home-images/bar_un_ebooks@2x.png');"></div>
                <h3>UNBABEL eBOOKS</h3>
                <p><strong>PROBLEM:</strong> Needed lifestyle content that articulated their smart glasses cutting edge features stylishly.</p>
                <p><strong>SOLUTION:</strong> Short films, editorial stills, and motion graphics were developed across a unified visual system bridging both brand identities.</p>
                <p><strong>ROLE:</strong> Design Program Manager</p>
            </div>

            <div class="card">
                <div class="color-bar" style="background-image: url('/site-images/home-images/bar_Dimes@2x.png');"></div>
                <h3>DIMES BRANDING</h3>
                <p><strong>PROBLEM:</strong> Needed lifestyle content that articulated their smart glasses cutting edge features stylishly.</p>
                <p><strong>SOLUTION:</strong> Short films, editorial stills, and motion graphics were developed across a unified visual system bridging both brand identities.</p>
                <p><strong>ROLE:</strong> Design Program Manager</p>
            </div>

            <div class="card">
                <div class="color-bar" style="background-image: url('/site-images/home-images/bar_un_illustrat@2x.png');"></div>
                <h3>UNBABEL ILLUSTRATIONS</h3>
                <p><strong>PROBLEM:</strong> Needed lifestyle content that articulated their smart glasses cutting edge features stylishly.</p>
                <p><strong>SOLUTION:</strong> Short films, editorial stills, and motion graphics were developed across a unified visual system bridging both brand identities.</p>
                <p><strong>ROLE:</strong> Design Program Manager</p>
            </div>

        </div>
    </section>

    <!-- Footer -->
    <footer id="contact">
        <p>
            Based in the SF Bay Area.<br>
            <a href="https://linkedin.com/in/markhavenbritt" target="_blank">On LinkedIn</a><br>
            <a href="mailto:markhavenbritt@gmail.com">Contact</a>
        </p>
    </footer>

</body>
</html>
