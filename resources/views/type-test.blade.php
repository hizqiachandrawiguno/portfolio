<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Typography Comparison Sandbox — Hizqia Portfolio</title>
    
    <!-- Google Fonts Preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- 4 Selected Font Families from Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400&family=Epilogue:ital,wght@0,600;0,700;0,800;0,900;1,600&family=Fira+Code:wght@400;500;600&family=Fraunces:ital,opsz,wght@0,9..144,600;0,9..144,700;0,9..144,800;0,9..144,900;1,9..144,700&family=Manrope:wght@400;500;600;700&family=Plus+Jakarta+Sans:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Space+Grotesk:wght@500;600;700&family=Space+Mono:ital,wght@0,400;0,700;1,400&family=Syne:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 CSS (Utility & Grid) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome 6 Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <style>
        :root {
            --bg-cream: #FAF6F0;
            --bg-card: #FFFDF8;
            --border-taupe: #E2DDD5;
            --border-darker: #D1C9BE;
            --accent-terracotta: #D85A24;
            --accent-hover: #BF4C1B;
            --text-ink: #171311;
            --text-secondary: #5C564E;
            --text-muted: #827A71;
        }

        body {
            background-color: var(--bg-cream);
            color: var(--text-ink);
            font-family: 'Plus Jakarta Sans', sans-serif;
            min-height: 100vh;
            padding: 30px 0 80px 0;
            background-image: 
                radial-gradient(rgba(23, 19, 17, 0.04) 1px, transparent 1px);
            background-size: 24px 24px;
        }

        .sandbox-header {
            max-width: 960px;
            margin: 0 auto 36px auto;
            border-bottom: 1.5px solid var(--border-taupe);
            padding-bottom: 24px;
        }

        .back-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-family: 'Fira Code', monospace;
            font-size: 0.85rem;
            color: var(--accent-terracotta);
            text-decoration: none;
            padding: 6px 14px;
            background: rgba(216, 90, 36, 0.08);
            border-radius: 9999px;
            border: 1px solid rgba(216, 90, 36, 0.2);
            transition: all 0.2s ease;
        }
        .back-link:hover {
            background: var(--accent-terracotta);
            color: #FFFFFF;
        }

        .type-card {
            background: var(--bg-card);
            border: 1px solid var(--border-taupe);
            border-radius: 18px;
            padding: 32px 28px;
            margin-bottom: 32px;
            box-shadow: 0 4px 18px rgba(23, 19, 17, 0.035);
            transition: border-color 0.25s ease, box-shadow 0.25s ease;
            position: relative;
        }
        .type-card:hover {
            border-color: var(--accent-terracotta);
            box-shadow: 0 10px 30px rgba(216, 90, 36, 0.08);
        }

        .combo-badge {
            font-family: 'Fira Code', monospace;
            font-size: 0.76rem;
            font-weight: 700;
            padding: 5px 12px;
            border-radius: 9999px;
            letter-spacing: 0.04em;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }
        .badge-architectural {
            background: #EBF3F5;
            color: #0E6273;
            border: 1px solid #C4DEE3;
        }
        .badge-uncommon {
            background: #FDF2E9;
            color: #C05621;
            border: 1px solid #FBD38D;
        }
        .badge-poster {
            background: #F3E8FF;
            color: #6B21A8;
            border: 1px solid #E9D5FF;
        }
        .badge-editorial {
            background: #EDF2F7;
            color: #2D3748;
            border: 1px solid #CBD5E0;
        }

        .license-pill {
            font-family: 'Fira Code', monospace;
            font-size: 0.72rem;
            color: #2E7D32;
            background: #E8F5E9;
            border: 1px solid #C8E6C9;
            padding: 3px 10px;
            border-radius: 6px;
            font-weight: 600;
        }

        .kicker-tag {
            font-family: 'Fira Code', monospace;
            font-size: 0.78rem;
            font-weight: 600;
            letter-spacing: 1.2px;
            color: var(--accent-terracotta);
            text-transform: uppercase;
            margin-bottom: 12px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        /* Specific Combinations Font Classes */
        /* COMBO 1: Space Grotesk + Plus Jakarta Sans */
        .combo-1-title {
            font-family: 'Space Grotesk', sans-serif;
            font-weight: 700;
            letter-spacing: -0.03em;
            line-height: 1.15;
            font-size: clamp(2rem, 4.4vw, 3.2rem);
        }
        .combo-1-body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-weight: 500;
            line-height: 1.65;
            font-size: 1.05rem;
            color: var(--text-secondary);
        }

        /* COMBO 2: Fraunces (Optical Serif Display) + Plus Jakarta Sans */
        .combo-2-title {
            font-family: 'Fraunces', serif;
            font-variation-settings: 'opsz' 144, 'SOFT' 20;
            font-weight: 700;
            letter-spacing: -0.025em;
            line-height: 1.12;
            font-size: clamp(2.15rem, 4.8vw, 3.5rem);
        }
        .combo-2-body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-weight: 500;
            line-height: 1.65;
            font-size: 1.05rem;
            color: var(--text-secondary);
        }

        /* COMBO 3: Syne (Avant-Garde Poster) + DM Sans */
        .combo-3-title {
            font-family: 'Syne', sans-serif;
            font-weight: 800;
            letter-spacing: -0.02em;
            line-height: 1.14;
            font-size: clamp(2rem, 4.5vw, 3.35rem);
        }
        .combo-3-body {
            font-family: 'DM Sans', sans-serif;
            font-weight: 400;
            line-height: 1.65;
            font-size: 1.05rem;
            color: var(--text-secondary);
        }

        /* COMBO 4: Epilogue (High-Precision Modernist) + Manrope */
        .combo-4-title {
            font-family: 'Epilogue', sans-serif;
            font-weight: 800;
            letter-spacing: -0.035em;
            line-height: 1.15;
            font-size: clamp(2rem, 4.4vw, 3.25rem);
        }
        .combo-4-body {
            font-family: 'Manrope', sans-serif;
            font-weight: 500;
            line-height: 1.65;
            font-size: 1.05rem;
            color: var(--text-secondary);
        }

        .accent-name {
            color: var(--accent-terracotta);
            display: inline-block;
        }

        .design-analysis-box {
            background: #F7F4EE;
            border: 1px solid var(--border-taupe);
            border-radius: 12px;
            padding: 16px 20px;
            margin-top: 24px;
            font-size: 0.88rem;
        }

        .live-preview-toolbar {
            background: #FFFFFF;
            border: 1px solid var(--border-taupe);
            border-radius: 14px;
            padding: 16px 20px;
            box-shadow: 0 4px 14px rgba(23, 19, 17, 0.04);
            margin-bottom: 28px;
        }

        .btn-view-toggle {
            font-family: 'Fira Code', monospace;
            font-size: 0.78rem;
            padding: 6px 14px;
            border-radius: 8px;
            border: 1px solid var(--border-taupe);
            background: #FFFDF8;
            color: var(--text-secondary);
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s;
        }
        .btn-view-toggle.active,
        .btn-view-toggle:hover {
            background: var(--text-ink);
            color: #FFFFFF;
            border-color: var(--text-ink);
        }
    </style>
</head>
<body>

    <div class="container">
        <!-- Top Navigation & Introduction Header -->
        <header class="sandbox-header">
            <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-3">
                <div>
                    <span class="badge bg-dark text-white font-mono mb-2 px-3 py-1 rounded-pill" style="font-size: 0.72rem;">
                        <i class="fa-solid fa-flask-vial me-1 text-warning"></i> SANDBOX UJI TIPOGRAFI (ISOLATED)
                    </span>
                    <h1 class="h3 fw-bold mb-1 font-heading" style="color: var(--text-ink);">Eksplorasi Skala & Karakter Tipografi</h1>
                    <p class="text-muted small mb-0">Halaman uji khusus untuk memilih visual voice portofolio Hizqia Chandra. Semua font legal dari Google Fonts.</p>
                </div>
                <div>
                    <a href="{{ route('portfolio.home') }}" class="back-link">
                        <i class="fa-solid fa-arrow-left"></i> Kembali ke Portfolio Utama
                    </a>
                </div>
            </div>

            <!-- Interactive Live Tester Bar -->
            <div class="live-preview-toolbar mt-4">
                <div class="row g-3 align-items-center">
                    <div class="col-lg-7">
                        <label for="customHeadlineInput" class="form-label small font-mono fw-bold text-uppercase mb-1" style="font-size: 0.72rem; color: var(--text-muted);">
                            <i class="fa-solid fa-keyboard me-1 text-accent"></i> Uji Teks Headline Sendiri (Real-time Preview):
                        </label>
                        <input type="text" id="customHeadlineInput" class="form-control form-control-sm" value="Halo, Saya Hizqia Chandra Wiguno" placeholder="Ketik headline di sini untuk menguji semua font bersamaan...">
                    </div>
                    <div class="col-lg-5">
                        <label class="form-label small font-mono fw-bold text-uppercase mb-1" style="font-size: 0.72rem; color: var(--text-muted);">
                            <i class="fa-solid fa-text-height me-1 text-accent"></i> Ukuran Skala Headline:
                        </label>
                        <div class="d-flex gap-2">
                            <button type="button" class="btn-view-toggle active flex-fill text-center" onclick="changeScale('100%', this)">100% (Normal)</button>
                            <button type="button" class="btn-view-toggle flex-fill text-center" onclick="changeScale('115%', this)">115% (Editorial Bold)</button>
                            <button type="button" class="btn-view-toggle flex-fill text-center" onclick="changeScale('88%', this)">88% (Compact)</button>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <main id="typeComparisonContainer">

            <!-- ================================================================= -->
            <!-- KOMBINASI 1: NEO-GROTESK STUDIO (ARCHITECTURAL DRAFTSMAN)         -->
            <!-- ================================================================= -->
            <section class="type-card" id="combo1">
                <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mb-3">
                    <div class="d-flex align-items-center gap-2">
                        <span class="combo-badge badge-architectural">
                            <i class="fa-solid fa-compass-drafting"></i> KOMBINASI 1: TECHNICAL STUDIO
                        </span>
                        <strong class="font-mono text-dark" style="font-size: 0.88rem;">Space Grotesk + Plus Jakarta Sans</strong>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <span class="license-pill"><i class="fa-solid fa-check me-1"></i> SIL Open Font License 1.1</span>
                    </div>
                </div>

                <div class="kicker-tag">
                    <i class="fa-solid fa-crop-simple"></i> ARTBOARD 01 &bull; STUDIO WORKSPACE
                </div>

                <!-- Headline Hero -->
                <h2 class="combo-1-title dynamic-headline mb-3">
                    Halo, Saya <span class="accent-name">Hizqia Chandra Wiguno</span>
                </h2>

                <!-- Lead Paragraph Body -->
                <p class="combo-1-body mb-0" style="max-width: 760px;">
                    Saya menciptakan identitas visual yang berkarakter, tata letak tipografi yang presisi, dan pengalaman multimedia yang fungsional untuk brand dan produk digital.
                </p>

                <!-- Design Specs Breakdown -->
                <div class="design-analysis-box">
                    <div class="row g-3">
                        <div class="col-md-4">
                            <strong class="d-block text-dark font-mono small mb-1">
                                <i class="fa-solid fa-pen-ruler text-accent me-1"></i> Anatomi Tipografi:
                            </strong>
                            <p class="mb-0 text-muted small">
                                <em>Space Grotesk</em> terinspirasi dari font monospaced Florian Karsten dengan aksen ink-trap mekanikal tajam di sambungan huruf seperti 'a', 'g', 'r'.
                            </p>
                        </div>
                        <div class="col-md-4">
                            <strong class="d-block text-dark font-mono small mb-1">
                                <i class="fa-solid fa-eye text-accent me-1"></i> Keselarasan Karakter Hizqia:
                            </strong>
                            <p class="mb-0 text-muted small">
                                Selaras 100% dengan konsep <strong>Technical Studio Artboard (Arah 2)</strong>. Terasa seperti studio desainer grafis yang presisi, arsitektural, dan paham grid cetak.
                            </p>
                        </div>
                        <div class="col-md-4">
                            <strong class="d-block text-dark font-mono small mb-1">
                                <i class="fa-solid fa-shield-halved text-accent me-1"></i> Lisensi Google Fonts:
                            </strong>
                            <p class="mb-0 text-muted small">
                                <strong>SIL OFL 1.1</strong> — bebas komersial 100%. Didesain oleh Florian Karsten (Display) & Gumpita Rahayu (Plus Jakarta Sans).
                            </p>
                        </div>
                    </div>
                </div>
            </section>


            <!-- ================================================================= -->
            <!-- KOMBINASI 2: HIGH-CONTRAST EDITORIAL (SANGAT TIDAK UMUM DI TEMPLATE AI) -->
            <!-- ================================================================= -->
            <section class="type-card" id="combo2" style="border-left: 4px solid var(--accent-terracotta);">
                <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mb-3">
                    <div class="d-flex align-items-center gap-2">
                        <span class="combo-badge badge-uncommon">
                            <i class="fa-solid fa-star"></i> KOMBINASI 2: EDITORIAL ATELIER (ANTI-AI LOOK)
                        </span>
                        <strong class="font-mono text-dark" style="font-size: 0.88rem;">Fraunces + Plus Jakarta Sans</strong>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <span class="badge bg-warning text-dark font-mono" style="font-size: 0.7rem;">SANGAT TIDAK UMUM DI AI</span>
                        <span class="license-pill"><i class="fa-solid fa-check me-1"></i> SIL Open Font License 1.1</span>
                    </div>
                </div>

                <div class="kicker-tag">
                    <i class="fa-solid fa-book-open"></i> VOL. 01 &bull; CURATED MONOGRAPH
                </div>

                <!-- Headline Hero -->
                <h2 class="combo-2-title dynamic-headline mb-3">
                    Halo, Saya <span class="accent-name">Hizqia Chandra Wiguno</span>
                </h2>

                <!-- Lead Paragraph Body -->
                <p class="combo-2-body mb-0" style="max-width: 760px;">
                    Saya menciptakan identitas visual yang berkarakter, tata letak tipografi yang presisi, dan pengalaman multimedia yang fungsional untuk brand dan produk digital.
                </p>

                <!-- Design Specs Breakdown -->
                <div class="design-analysis-box">
                    <div class="row g-3">
                        <div class="col-md-4">
                            <strong class="d-block text-dark font-mono small mb-1">
                                <i class="fa-solid fa-pen-ruler text-accent me-1"></i> Anatomi Tipografi:
                            </strong>
                            <p class="mb-0 text-muted small">
                                <em>Fraunces</em> adalah serif modern "wonky/soft" rancangan Undercase Type. Punya kontras tebal-tipis dramatis dan terminal kurva organik yang anggun.
                            </p>
                        </div>
                        <div class="col-md-4">
                            <strong class="d-block text-dark font-mono small mb-1">
                                <i class="fa-solid fa-eye text-accent me-1"></i> Keselarasan Karakter Hizqia:
                            </strong>
                            <p class="mb-0 text-muted small">
                                <strong>Anti-AI paling kuat</strong>. Template AI hampir 99% memakai font sans-serif generik (Inter/Geist/Outfit). Fraunces langsung mengangkat portofolio Anda ke level publikasi majalah desain New York/Eropa.
                            </p>
                        </div>
                        <div class="col-md-4">
                            <strong class="d-block text-dark font-mono small mb-1">
                                <i class="fa-solid fa-shield-halved text-accent me-1"></i> Lisensi Google Fonts:
                            </strong>
                            <p class="mb-0 text-muted small">
                                <strong>SIL OFL 1.1</strong> — bebas komersial 100%. Didesain oleh Phaedra Charles & Flavia Zimbardi (Undercase Type).
                            </p>
                        </div>
                    </div>
                </div>
            </section>


            <!-- ================================================================= -->
            <!-- KOMBINASI 3: AVANT-GARDE POSTER (GRAPHIC ART CENTER VIBE)          -->
            <!-- ================================================================= -->
            <section class="type-card" id="combo3">
                <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mb-3">
                    <div class="d-flex align-items-center gap-2">
                        <span class="combo-badge badge-poster">
                            <i class="fa-solid fa-palette"></i> KOMBINASI 3: POSTER ART DIRECTION
                        </span>
                        <strong class="font-mono text-dark" style="font-size: 0.88rem;">Syne + DM Sans</strong>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <span class="badge bg-purple text-white font-mono" style="background: #6B21A8; font-size: 0.7rem;">EKSPRESIF & BERANI</span>
                        <span class="license-pill"><i class="fa-solid fa-check me-1"></i> SIL Open Font License 1.1</span>
                    </div>
                </div>

                <div class="kicker-tag">
                    <i class="fa-solid fa-shapes"></i> VISUAL GRAPHIC DIRECTION &bull; 2026
                </div>

                <!-- Headline Hero -->
                <h2 class="combo-3-title dynamic-headline mb-3">
                    Halo, Saya <span class="accent-name">Hizqia Chandra Wiguno</span>
                </h2>

                <!-- Lead Paragraph Body -->
                <p class="combo-3-body mb-0" style="max-width: 760px;">
                    Saya menciptakan identitas visual yang berkarakter, tata letak tipografi yang presisi, dan pengalaman multimedia yang fungsional untuk brand dan produk digital.
                </p>

                <!-- Design Specs Breakdown -->
                <div class="design-analysis-box">
                    <div class="row g-3">
                        <div class="col-md-4">
                            <strong class="d-block text-dark font-mono small mb-1">
                                <i class="fa-solid fa-pen-ruler text-accent me-1"></i> Anatomi Tipografi:
                            </strong>
                            <p class="mb-0 text-muted small">
                                <em>Syne</em> dirancang khusus untuk pusat seni visual Synesthésie di Prancis oleh Lucas Descroix. Memiliki perbandingan lebar huruf asimetris yang sangat tegas dan berkarakter poster.
                            </p>
                        </div>
                        <div class="col-md-4">
                            <strong class="d-block text-dark font-mono small mb-1">
                                <i class="fa-solid fa-eye text-accent me-1"></i> Keselarasan Karakter Hizqia:
                            </strong>
                            <p class="mb-0 text-muted small">
                                Cocok bila Anda ingin tampil sebagai <em>Art Director / Creative Lead</em> yang berani bereksperimen dengan bentuk visual, dipadukan dengan kehalusan membaca <em>DM Sans</em>.
                            </p>
                        </div>
                        <div class="col-md-4">
                            <strong class="d-block text-dark font-mono small mb-1">
                                <i class="fa-solid fa-shield-halved text-accent me-1"></i> Lisensi Google Fonts:
                            </strong>
                            <p class="mb-0 text-muted small">
                                <strong>SIL OFL 1.1</strong> — bebas komersial 100%. Didesain oleh Bonjour Monde & Lucas Descroix (Syne), Colophon Foundry (DM Sans).
                            </p>
                        </div>
                    </div>
                </div>
            </section>


            <!-- ================================================================= -->
            <!-- KOMBINASI 4: STRUCTURED MODERNIST (BOLD HIGH-CONTRAST SANS)       -->
            <!-- ================================================================= -->
            <section class="type-card" id="combo4">
                <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mb-3">
                    <div class="d-flex align-items-center gap-2">
                        <span class="combo-badge badge-editorial">
                            <i class="fa-solid fa-layer-group"></i> KOMBINASI 4: STRUCTURED MODERNIST
                        </span>
                        <strong class="font-mono text-dark" style="font-size: 0.88rem;">Epilogue + Manrope</strong>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <span class="license-pill"><i class="fa-solid fa-check me-1"></i> SIL Open Font License 1.1</span>
                    </div>
                </div>

                <div class="kicker-tag">
                    <i class="fa-solid fa-cube"></i> DISIPLIN KERJA &bull; SPEC SHEET
                </div>

                <!-- Headline Hero -->
                <h2 class="combo-4-title dynamic-headline mb-3">
                    Halo, Saya <span class="accent-name">Hizqia Chandra Wiguno</span>
                </h2>

                <!-- Lead Paragraph Body -->
                <p class="combo-4-body mb-0" style="max-width: 760px;">
                    Saya menciptakan identitas visual yang berkarakter, tata letak tipografi yang presisi, dan pengalaman multimedia yang fungsional untuk brand dan produk digital.
                </p>

                <!-- Design Specs Breakdown -->
                <div class="design-analysis-box">
                    <div class="row g-3">
                        <div class="col-md-4">
                            <strong class="d-block text-dark font-mono small mb-1">
                                <i class="fa-solid fa-pen-ruler text-accent me-1"></i> Anatomi Tipografi:
                            </strong>
                            <p class="mb-0 text-muted small">
                                <em>Epilogue</em> adalah sans-serif berbobot solid dengan tracking rapat, proporsi x-height tinggi, dan detail sambungan glyph kontemporer, dipadukan dengan <em>Manrope</em> yang sangat bersih di layar retina.
                            </p>
                        </div>
                        <div class="col-md-4">
                            <strong class="d-block text-dark font-mono small mb-1">
                                <i class="fa-solid fa-eye text-accent me-1"></i> Keselarasan Karakter Hizqia:
                            </strong>
                            <p class="mb-0 text-muted small">
                                Pilihan sans yang jauh lebih berbobot dan terstruktur dibanding Outfit. Memberikan kesan desainer yang disiplin, percaya diri, dan mudah dibaca oleh siapapun.
                            </p>
                        </div>
                        <div class="col-md-4">
                            <strong class="d-block text-dark font-mono small mb-1">
                                <i class="fa-solid fa-shield-halved text-accent me-1"></i> Lisensi Google Fonts:
                            </strong>
                            <p class="mb-0 text-muted small">
                                <strong>SIL OFL 1.1</strong> — bebas komersial 100%. Didesain oleh Tyler Finck / Etcetera Type Co (Epilogue) & Mikhail Sharanda (Manrope).
                            </p>
                        </div>
                    </div>
                </div>
            </section>

        </main>

        <!-- Bottom Action Bar -->
        <footer class="text-center pt-3 pb-5 border-top">
            <p class="text-muted small mb-3 font-mono">
                Pilih kombinasi yang paling pas di mata Anda, lalu sebutkan nomor kombinasinya untuk kita terapkan ke website utama.
            </p>
            <a href="{{ route('portfolio.home') }}" class="btn btn-dark rounded-pill px-4 py-2 font-mono" style="font-size: 0.85rem;">
                <i class="fa-solid fa-arrow-left me-1"></i> Kembali ke Portfolio (/portfolio)
            </a>
        </footer>
    </div>

    <!-- Script for Live Preview Typing & Scaling -->
    <script>
        const input = document.getElementById('customHeadlineInput');
        const headlineElements = document.querySelectorAll('.dynamic-headline');

        if (input) {
            input.addEventListener('input', function() {
                const val = this.value.trim();
                headlineElements.forEach(el => {
                    if (!val) {
                        el.innerHTML = 'Halo, Saya <span class="accent-name">Hizqia Chandra Wiguno</span>';
                    } else if (val.toLowerCase().includes('hizqia')) {
                        // Highlight the name automatically if typed
                        const regex = new RegExp('(Hizqia[^<]*)', 'gi');
                        el.innerHTML = val.replace(regex, '<span class="accent-name">$1</span>');
                    } else {
                        el.textContent = val;
                    }
                });
            });
        }

        function changeScale(scale, btn) {
            document.querySelectorAll('.btn-view-toggle').forEach(b => b.classList.remove('active'));
            if (btn) btn.classList.add('active');

            headlineElements.forEach(el => {
                if (scale === '115%') {
                    el.style.fontSize = 'clamp(2.4rem, 5.2vw, 4rem)';
                } else if (scale === '88%') {
                    el.style.fontSize = 'clamp(1.75rem, 3.8vw, 2.7rem)';
                } else {
                    el.style.fontSize = ''; // revert to CSS default clamp
                }
            });
        }
    </script>
</body>
</html>
