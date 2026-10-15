<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Halaman Tidak Ditemukan | Hizqia Chandra Wiguno Portfolio</title>
    <meta name="robots" content="noindex, follow">

    <!-- Google Fonts: Outfit, Plus Jakarta Sans, Fira Code -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@400;500;600&family=Outfit:wght@600;700;800;900&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- FontAwesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/hizqia_logo_orange.png') }}">

    <style>
        :root {
            --bg-cream: #FAF6F0;
            --color-terracotta: #E26B38;
            --color-terracotta-hover: #CE5A27;
            --color-charcoal: #2D2D2D;
            --color-muted: #6B655F;
            --border-color: #D6D0C5;
            --font-heading: 'Outfit', sans-serif;
            --font-body: 'Plus Jakarta Sans', sans-serif;
            --font-mono: 'Fira Code', monospace;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            background-color: var(--bg-cream);
            color: var(--color-charcoal);
            font-family: var(--font-body);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 24px 16px;
            position: relative;
            overflow-x: hidden;
        }

        /* Millimeter Grid Pattern */
        .grid-overlay {
            position: absolute;
            inset: 0;
            pointer-events: none;
            opacity: 0.35;
            background-image: radial-gradient(var(--color-charcoal) 1px, transparent 1px);
            background-size: 24px 24px;
            z-index: 1;
        }

        /* Ambient Glow */
        .ambient-glow {
            position: absolute;
            border-radius: 50%;
            filter: blur(80px);
            opacity: 0.08;
            pointer-events: none;
            z-index: 1;
        }

        .glow-1 {
            top: 10%;
            right: 15%;
            width: 420px;
            height: 420px;
            background: radial-gradient(circle, var(--color-terracotta) 0%, transparent 70%);
        }

        .glow-2 {
            bottom: 10%;
            left: 15%;
            width: 480px;
            height: 480px;
            background: radial-gradient(circle, #F4A261 0%, transparent 70%);
        }

        /* Main Artboard Container */
        .error-artboard {
            position: relative;
            z-index: 10;
            max-width: 680px;
            width: 100%;
            background: rgba(255, 253, 248, 0.95);
            border: 1.5px solid var(--border-color);
            border-radius: 28px;
            padding: 48px 36px 42px 36px;
            box-shadow: 0 16px 40px rgba(23, 19, 17, 0.06);
            text-align: center;
        }

        /* Vector Corner Handles */
        .box-handle {
            position: absolute;
            width: 12px;
            height: 12px;
            background: var(--color-terracotta);
            border: 2px solid #FFFFFF;
            border-radius: 3px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.15);
        }

        .handle-tl { top: -6px; left: -6px; }
        .handle-tr { top: -6px; right: -6px; }
        .handle-bl { bottom: -6px; left: -6px; }
        .handle-br { bottom: -6px; right: -6px; }

        /* Top Status Tag */
        .status-chip {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: #FFFDF8;
            border: 1px solid var(--border-color);
            padding: 6px 16px;
            border-radius: 9999px;
            font-family: var(--font-mono);
            font-size: 0.78rem;
            font-weight: 700;
            color: var(--color-terracotta);
            margin-bottom: 24px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.03);
        }

        .pulse-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: #F59E0B;
            animation: pulse 1.8s infinite;
        }

        @keyframes pulse {
            0%, 100% { opacity: 1; transform: scale(1); }
            50% { opacity: 0.4; transform: scale(0.85); }
        }

        /* 404 Display Typography */
        .error-code {
            font-family: var(--font-heading);
            font-size: clamp(4.5rem, 16vw, 7.8rem);
            font-weight: 900;
            line-height: 0.95;
            letter-spacing: -0.04em;
            color: var(--color-charcoal);
            margin-bottom: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 4px;
            user-select: none;
        }

        .error-code span.terracotta {
            color: var(--color-terracotta);
            position: relative;
        }

        .error-code span.terracotta::after {
            content: '';
            position: absolute;
            bottom: 4px;
            left: 0;
            width: 100%;
            height: 8px;
            background: rgba(226, 107, 56, 0.2);
            border-radius: 4px;
        }

        /* Error Headline & Pitch */
        .error-title {
            font-family: var(--font-heading);
            font-size: clamp(1.35rem, 3.5vw, 1.85rem);
            font-weight: 800;
            color: var(--color-charcoal);
            margin-bottom: 12px;
            line-height: 1.25;
        }

        .error-desc {
            font-size: clamp(0.92rem, 2vw, 1.02rem);
            color: var(--color-muted);
            line-height: 1.65;
            max-width: 520px;
            margin: 0 auto 32px auto;
        }

        /* Action Buttons */
        .action-group {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            justify-content: center;
            align-items: center;
        }

        .btn-studio {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 13px 26px;
            border-radius: 9999px;
            font-size: 0.92rem;
            font-weight: 700;
            text-decoration: none;
            transition: all 0.24s cubic-bezier(0.34, 1.56, 0.64, 1);
            min-height: 48px;
            cursor: pointer;
            box-sizing: border-box;
        }

        .btn-primary {
            background: var(--color-terracotta);
            color: #FFFFFF !important;
            border: 1.5px solid var(--color-terracotta);
            box-shadow: 0 6px 18px rgba(226, 107, 56, 0.28);
        }

        .btn-primary:hover {
            background: var(--color-terracotta-hover);
            border-color: var(--color-terracotta-hover);
            transform: translateY(-2px) scale(1.03);
            box-shadow: 0 10px 24px rgba(226, 107, 56, 0.36);
        }

        .btn-primary:active {
            transform: scale(0.98);
        }

        .btn-secondary {
            background: #FFFFFF;
            color: var(--color-charcoal) !important;
            border: 1.5px solid var(--border-color);
            box-shadow: 0 3px 10px rgba(0,0,0,0.03);
        }

        .btn-secondary:hover {
            border-color: var(--color-terracotta);
            color: var(--color-terracotta) !important;
            transform: translateY(-2px) scale(1.03);
            box-shadow: 0 6px 16px rgba(226, 107, 56, 0.12);
        }

        .btn-secondary:active {
            transform: scale(0.98);
        }

        /* Footer Note */
        .footer-note {
            margin-top: 32px;
            padding-top: 18px;
            border-top: 1px dashed var(--border-color);
            font-family: var(--font-mono);
            font-size: 0.75rem;
            color: #8C847B;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 16px;
            flex-wrap: wrap;
        }

        .footer-note a {
            color: var(--color-terracotta);
            text-decoration: none;
            font-weight: 600;
        }

        .footer-note a:hover {
            text-decoration: underline;
        }

        @media (max-width: 575.98px) {
            .error-artboard {
                padding: 36px 20px 28px 20px;
                border-radius: 20px;
            }
            .action-group {
                flex-direction: column;
                width: 100%;
            }
            .btn-studio {
                width: 100%;
            }
        }
    </style>
</head>
<body>

    <div class="grid-overlay" aria-hidden="true"></div>
    <div class="ambient-glow glow-1" aria-hidden="true"></div>
    <div class="ambient-glow glow-2" aria-hidden="true"></div>

    <main class="error-artboard">
        <!-- 4 Corner Vector Handles -->
        <div class="box-handle handle-tl"></div>
        <div class="box-handle handle-tr"></div>
        <div class="box-handle handle-bl"></div>
        <div class="box-handle handle-br"></div>

        <!-- Top Status Indicator -->
        <div class="status-chip">
            <span class="pulse-dot"></span>
            <span>CANVAS MISSING &bull; ARTBOARD 404</span>
        </div>

        <!-- Big 404 Typography -->
        <h1 class="error-code">
            <span>4</span>
            <span class="terracotta">0</span>
            <span>4</span>
        </h1>

        <!-- Headings & Explanations -->
        <h2 class="error-title">Halaman Tidak Ditemukan</h2>
        <p class="error-desc">
            Artboard yang Anda tuju tidak tersedia atau telah dipindahkan ke direktori lain. Mari kembali ke galeri karya terpilih.
        </p>

        <!-- Actions -->
        <div class="action-group">
            <a href="{{ url('/') }}" class="btn-studio btn-primary">
                <i class="fa-solid fa-house"></i>
                <span>Kembali ke Beranda</span>
            </a>
            <a href="{{ route('portfolio.home') }}" class="btn-studio btn-secondary">
                <i class="fa-solid fa-cubes"></i>
                <span>Galeri Portofolio</span>
            </a>
        </div>

        <!-- Technical Footer Note -->
        <div class="footer-note">
            <span>STATUS: HTTP 404 NOT FOUND</span>
            <span>&bull;</span>
            <a href="mailto:hizqiachandrawiguno@gmail.com"><i class="fa-regular fa-envelope me-1"></i> Kontak Tim Hizqia</a>
        </div>
    </main>

</body>
</html>
