<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <title>Hizqia Chandra Wiguno | Creative Portfolio &amp; Graphic Designer</title>
    <meta name="description" content="Selamat datang di Portofolio Resmi Hizqia Chandra Wiguno - Graphic Designer, UI/UX Designer &amp; Multimedia Engineer. Lulusan TRM Polimedia.">
    <meta name="author" content="Hizqia Chandra Wiguno">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://hizqiachandra.site/">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://hizqiachandra.site/">
    <meta property="og:title" content="Hizqia Chandra Wiguno | Creative Portfolio">
    <meta property="og:description" content="Visual Identity, Interactive Multimedia, and Creative Engineering by Hizqia Chandra Wiguno.">
    <meta property="og:image" content="{{ asset('images/hizqia_profile.webp') }}">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/hizqia_logo_orange.png') }}">

    <!-- High-Performance Font Loading: DNS-Prefetch, Preconnect, Async Link with Fallbacks -->
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@500;600&family=Outfit:wght@700;800;900&family=Plus+Jakarta+Sans:wght@500;600;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@500;600&family=Outfit:wght@700;800;900&family=Plus+Jakarta+Sans:wght@500;600;700&display=swap" media="print" onload="this.media='all'">
    <noscript>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@500;600&family=Outfit:wght@700;800;900&family=Plus+Jakarta+Sans:wght@500;600;700&display=swap">
    </noscript>

    <!-- Scoped Standalone Design System CSS (Zero Render-Blocking JS/CSS) -->
    <style>
        :root {
            --bg-cream: #FAF6F0;
            --color-terracotta: #D85A24;
            --color-terracotta-hover: #BF4C1B;
            --color-terracotta-light: #FCEFE9;
            --color-terracotta-subtle: rgba(216, 90, 36, 0.12);
            --color-terracotta-glow: rgba(216, 90, 36, 0.35);
            --color-charcoal: #242220;
            --color-charcoal-muted: #4B4642;
            --color-charcoal-dim: #5A5550;
            --color-taupe: #CFC7BB;
            --font-heading: 'Outfit', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            --font-body: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            --font-mono: 'Fira Code', ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, monospace;
        }

        *, *::before, *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html, body {
            width: 100%;
            min-height: 100%;
            background-color: var(--bg-cream);
            color: var(--color-charcoal);
            font-family: var(--font-body);
            overflow-x: hidden;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        body {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            padding: 1rem;
            user-select: none;
        }

        @media (min-width: 640px) {
            body {
                padding: 1.5rem;
            }
        }

        /* Subtle Millimeter Grid Canvas Background */
        .canvas-grid-bg {
            background-color: #FAF6F0;
            background-image: 
                linear-gradient(to right, rgba(45, 45, 45, 0.035) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(45, 45, 45, 0.035) 1px, transparent 1px),
                linear-gradient(to right, rgba(216, 90, 36, 0.045) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(216, 90, 36, 0.045) 1px, transparent 1px);
            background-size: 20px 20px, 20px 20px, 100px 100px, 100px 100px;
        }

        @media (min-width: 768px) {
            .canvas-grid-bg {
                background-size: 24px 24px, 24px 24px, 120px 120px, 120px 120px;
            }
        }

        /* Ambient Breathing Radial Glow */
        .ambient-glow {
            position: absolute;
            border-radius: 50%;
            filter: blur(60px);
            pointer-events: none;
            opacity: 0.12;
            transform: translate3d(0, 0, 0);
            will-change: transform;
            animation: floatGlow 18s ease-in-out infinite alternate;
        }

        .glow-1 {
            top: 5%;
            right: 10%;
            width: 320px;
            height: 320px;
            background: radial-gradient(circle, #D85A24 0%, rgba(216, 90, 36, 0) 70%);
        }

        .glow-2 {
            bottom: 5%;
            left: 5%;
            width: 360px;
            height: 360px;
            background: radial-gradient(circle, #F4A261 0%, rgba(244, 162, 97, 0) 70%);
            animation-delay: -9s;
        }

        @media (min-width: 768px) {
            .glow-1 { width: 450px; height: 450px; filter: blur(75px); }
            .glow-2 { width: 500px; height: 500px; filter: blur(75px); }
        }

        @keyframes floatGlow {
            0% { transform: translate3d(0, 0, 0) scale(1); }
            50% { transform: translate3d(20px, -15px, 0) scale(1.05); }
            100% { transform: translate3d(-15px, 12px, 0) scale(0.96); }
        }

        /* Analog Film Grain Texture Overlay */
        .vintage-grain-overlay {
            position: fixed;
            inset: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 40;
            opacity: 0.035;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.8' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)'/%3E%3C/svg%3E");
            background-repeat: repeat;
            transform: translateZ(0);
        }

        /* Architectural Millimeter HUD Corner Markers */
        .canvas-guides {
            position: fixed;
            inset: 0;
            pointer-events: none;
            padding: 0.75rem;
            z-index: 10;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            opacity: 0.75;
        }

        @media (min-width: 640px) {
            .canvas-guides {
                padding: 1.5rem;
            }
        }

        @media (min-width: 768px) {
            .canvas-guides {
                padding: 2.5rem;
            }
        }

        .hud-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-family: var(--font-mono);
            font-size: 10px;
            color: var(--color-charcoal-dim);
            font-weight: 500;
        }

        @media (min-width: 640px) {
            .hud-row {
                font-size: 11px;
            }
        }

        .hud-group {
            display: flex;
            align-items: center;
            gap: 0.375rem;
        }

        @media (min-width: 640px) {
            .hud-group {
                gap: 0.5rem;
            }
        }

        .hud-accent {
            color: var(--color-terracotta);
            font-weight: 600;
        }

        .hud-taupe {
            color: var(--color-taupe);
        }

        .hud-badge-ready {
            color: var(--color-charcoal);
            font-weight: 600;
        }

        .status-ping-dot {
            position: relative;
            display: inline-block;
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background-color: #10B981;
        }

        .status-ping-dot::after {
            content: '';
            position: absolute;
            inset: -2px;
            border-radius: 50%;
            background-color: #10B981;
            opacity: 0.75;
            animation: ping 1.5s cubic-bezier(0, 0, 0.2, 1) infinite;
        }

        @keyframes ping {
            75%, 100% {
                transform: scale(2.2);
                opacity: 0;
            }
        }

        /* Central Main Stage */
        .welcome-stage {
            position: relative;
            z-index: 20;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            width: 100%;
            max-width: 56rem;
            margin: 0 auto;
            padding: 2rem 0;
        }

        @media (min-width: 640px) {
            .welcome-stage {
                padding: 3rem 0;
            }
        }

        /* Top Tag Indicator */
        .welcome-tag {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.35rem 0.875rem;
            border-radius: 9999px;
            background: rgba(255, 255, 255, 0.94);
            border: 1px solid rgba(220, 215, 206, 0.95);
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.04);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            font-family: var(--font-mono);
            font-size: 11px;
            color: var(--color-charcoal);
            margin-bottom: 1.25rem;
            max-width: 92vw;
        }

        @media (min-width: 640px) {
            .welcome-tag {
                padding: 0.4rem 1.125rem;
                font-size: 12px;
                margin-bottom: 1.75rem;
            }
        }

        .tag-pulse-dot {
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background-color: var(--color-terracotta);
            flex-shrink: 0;
            animation: pulseDot 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }

        @keyframes pulseDot {
            0%, 100% { opacity: 1; transform: scale(1); }
            50% { opacity: 0.45; transform: scale(0.85); }
        }

        .tag-text {
            font-weight: 600;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        /* Mobile Badges Group (< 768px) */
        .mobile-badges-group {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            gap: 0.375rem;
            margin-bottom: 1rem;
            max-width: 20rem;
            margin-left: auto;
            margin-right: auto;
        }

        @media (min-width: 768px) {
            .mobile-badges-group {
                display: none;
            }
        }

        /* Floating Capsule Badge Styling */
        .floating-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.375rem;
            padding: 0.25rem 0.625rem;
            border-radius: 9999px;
            background: rgba(255, 255, 255, 0.95);
            border: 1px solid rgba(220, 215, 206, 0.9);
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.04);
            font-size: 11px;
            font-weight: 600;
            color: var(--color-charcoal);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            will-change: transform;
        }

        .badge-icon-box {
            width: 1rem;
            height: 1rem;
            border-radius: 50%;
            background: #FEEADB;
            color: var(--color-terracotta);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        /* Desktop Floating Badges (>= 768px) */
        .desktop-badge {
            display: none;
        }

        @media (min-width: 768px) {
            .desktop-badge {
                display: flex;
                position: absolute;
                z-index: 30;
                padding: 0.4rem 0.9rem;
                font-size: 12px;
                gap: 0.5rem;
                box-shadow: 0 4px 16px rgba(0, 0, 0, 0.06);
            }

            .desktop-badge .badge-icon-box {
                width: 1.5rem;
                height: 1.5rem;
            }

            .badge-d1 {
                top: -3rem;
                left: -2rem;
            }

            .badge-d2 {
                top: -3rem;
                right: -2rem;
            }

            .badge-d3 {
                bottom: -2.5rem;
                left: -1rem;
            }
        }

        @media (min-width: 1024px) {
            .desktop-badge {
                font-size: 13px;
                padding: 0.45rem 1rem;
            }

            .badge-d1 { left: -3rem; }
            .badge-d2 { right: -3rem; }
            .badge-d3 { left: -2rem; }
        }

        /* Typography & Giant 'PORTFOLIO' Display */
        .portfolio-title-wrapper {
            position: relative;
            width: 100%;
            max-width: 100%;
            margin: 0.25rem 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        @media (min-width: 640px) {
            .portfolio-title-wrapper {
                margin: 0.75rem 0;
            }
        }

        .portfolio-title-text {
            font-family: var(--font-heading);
            font-size: clamp(2.35rem, 11.2vw, 7.8rem);
            line-height: 0.95;
            font-weight: 900;
            letter-spacing: -0.025em;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 1px;
            user-select: none;
            max-width: 100%;
        }

        @media (min-width: 640px) {
            .portfolio-title-text {
                gap: 3px;
            }
        }

        .letter-char {
            display: inline-block;
            transform-origin: center center;
            will-change: transform;
            color: var(--color-charcoal);
        }

        .letter-highlight {
            color: var(--color-terracotta);
            cursor: pointer;
        }

        /* Subtitle Description */
        .welcome-subtitle {
            font-size: 0.75rem;
            color: var(--color-charcoal-muted);
            max-width: 20rem;
            margin: 1.25rem auto 1.5rem auto;
            font-weight: 500;
            line-height: 1.6;
            padding: 0 0.75rem;
        }

        @media (min-width: 640px) {
            .welcome-subtitle {
                font-size: 0.875rem;
                max-width: 28rem;
                margin: 1.5rem auto 2rem auto;
            }
        }

        @media (min-width: 768px) {
            .welcome-subtitle {
                font-size: 1rem;
                max-width: 34rem;
            }
        }

        .subtitle-dot {
            color: var(--color-terracotta);
            font-weight: 700;
            margin: 0 0.25rem;
        }

        /* CTA Button Styling */
        .cta-btn-wrapper {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .cta-btn-expand {
            position: relative;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 9999px;
            overflow: hidden;
            font-family: var(--font-body);
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
            height: 48px;
            min-height: 48px;
            background-color: var(--color-terracotta);
            color: #FFFFFF;
            box-shadow: 0 8px 20px -4px rgba(216, 90, 36, 0.35);
            transition: transform 0.28s cubic-bezier(0.34, 1.56, 0.64, 1), box-shadow 0.28s ease, background-color 0.2s ease;
            outline: none;
        }

        .cta-btn-expand:hover {
            background-color: var(--color-terracotta-hover);
            transform: translateY(-2px) scale(1.02);
            box-shadow: 0 14px 28px -4px rgba(216, 90, 36, 0.45);
        }

        .cta-btn-expand:focus-visible {
            outline: 2px solid var(--color-terracotta);
            outline-offset: 3px;
        }

        .cta-btn-expand:active {
            transform: translateY(1px) scale(0.98);
        }

        .cta-btn-inner {
            display: flex;
            align-items: center;
            gap: 0.625rem;
            padding: 0.625rem 1.35rem;
        }

        @media (min-width: 640px) {
            .cta-btn-inner {
                gap: 0.75rem;
                padding: 0.75rem 1.85rem;
            }
        }

        .cta-btn-text {
            font-size: 0.8125rem;
            font-weight: 600;
            letter-spacing: 0.02em;
            white-space: nowrap;
        }

        @media (min-width: 640px) {
            .cta-btn-text {
                font-size: 0.9375rem;
            }
        }

        .cta-btn-icon {
            width: 1.5rem;
            height: 1.5rem;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.22);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            transition: transform 0.3s ease;
        }

        @media (min-width: 640px) {
            .cta-btn-icon {
                width: 1.75rem;
                height: 1.75rem;
            }
        }

        .cta-btn-expand:hover .cta-btn-icon {
            transform: translateX(3px);
        }

        /* Keyboard Shortcut Hint */
        .welcome-hint {
            margin-top: 1.25rem;
            font-family: var(--font-mono);
            font-size: 11px;
            color: var(--color-charcoal-dim);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.375rem;
            opacity: 0.85;
        }

        @media (min-width: 640px) {
            .welcome-hint {
                font-size: 12px;
                margin-top: 1.5rem;
            }
        }

        .welcome-kbd {
            display: inline-block;
            padding: 0.125rem 0.375rem;
            border-radius: 4px;
            background: #FFFFFF;
            border: 1px solid #DCD7CE;
            color: var(--color-charcoal);
            font-size: 10px;
            font-family: var(--font-mono);
            font-weight: 600;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
        }

        @media (min-width: 640px) {
            .welcome-kbd {
                font-size: 11px;
            }
        }

        /* Helper Responsive Classes */
        .hide-mobile {
            display: none;
        }

        @media (min-width: 640px) {
            .hide-mobile {
                display: inline;
            }
            .hide-desktop {
                display: none;
            }
        }

        /* Accessibility: Respect Reduced Motion */
        @media (prefers-reduced-motion: reduce) {
            *, *::before, *::after {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.01ms !important;
            }
            .ambient-glow {
                animation: none !important;
            }
        }
    </style>
</head>
<body class="canvas-grid-bg">

    <!-- Analog Vintage Film Grain Texture Overlay -->
    <div class="vintage-grain-overlay" aria-hidden="true"></div>

    <!-- Ambient Gradient Background Spheres -->
    <div class="ambient-glow glow-1" aria-hidden="true"></div>
    <div class="ambient-glow glow-2" aria-hidden="true"></div>

    <!-- Architectural Millimeter HUD Corner Markers -->
    <div class="canvas-guides" aria-hidden="true">
        <!-- Top Row -->
        <div class="hud-row">
            <div class="hud-group">
                <span class="hud-accent">[+]</span>
                <span>POS: 0.00, 0.00</span>
                <span class="hud-taupe hide-mobile">/</span>
                <span class="hide-mobile">CANVAS: ACTIVE</span>
            </div>
            <div class="hud-group">
                <span class="hide-mobile">GRID: 24PX</span>
                <span class="status-ping-dot"></span>
                <span class="hud-badge-ready">READY</span>
            </div>
        </div>

        <!-- Bottom Row -->
        <div class="hud-row">
            <div class="hud-group">
                <!-- Inline Architectural Drafting Compass SVG -->
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" class="hud-accent">
                    <path d="m16.5 3.5 1 1L5.5 16.5l-2.5 1 1-2.5L16.5 3.5z"/>
                    <path d="m15 5 4 4"/>
                    <circle cx="6" cy="18" r="2"/>
                </svg>
                <span class="hide-mobile">HIZQIA CHANDRA WIGUNO</span>
                <span class="hide-desktop">HIZQIA</span>
                <span class="hud-taupe">&bull;</span>
            </div>
            <div class="hud-group">
                <span>V2.5</span>
                <span class="hud-taupe">/</span>
                <span>2026</span>
            </div>
        </div>
    </div>

    <!-- Main Central Stage -->
    <main class="welcome-stage">

        <!-- Top Tag / Pill Indicator -->
        <div class="welcome-tag">
            <span class="tag-pulse-dot" aria-hidden="true"></span>
            <span class="tag-text">
                <span class="hide-mobile">CREATIVE SPACE &bull; </span>HIZQIA CHANDRA WIGUNO
            </span>
        </div>

        <!-- Responsive Badges Group on Mobile (< 768px) -->
        <div class="mobile-badges-group">
            <div class="floating-badge badge-m1">
                <span class="badge-icon-box" aria-hidden="true">
                    <!-- Paintbrush SVG -->
                    <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18.375 2.625a3.875 3.875 0 0 0-5.48 0L3.5 12v5h5l9.375-9.375a3.875 3.875 0 0 0 0-5.48z"/>
                        <path d="M14 7l3 3"/>
                    </svg>
                </span>
                <span>Graphic Design</span>
            </div>
            <div class="floating-badge badge-m2">
                <span class="badge-icon-box" aria-hidden="true">
                    <!-- Wand Magic Sparkles SVG -->
                    <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m15 4-2 4-4 2 4 2 2 4 2-4 4-2-4-2-2-4z"/>
                        <path d="M4 14l-1 2-2 1 2 1 1 2 1-2 2-1-2-1-1-2z"/>
                        <path d="M9 19l-.5 1-1 .5 1 .5.5 1 .5-1 1-.5-1-.5-.5-1z"/>
                    </svg>
                </span>
                <span>UI/UX & Web</span>
            </div>
            <div class="floating-badge badge-m3">
                <span class="badge-icon-box" aria-hidden="true">
                    <!-- Video SVG -->
                    <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                        <polygon points="23 7 16 12 23 17 23 7"/>
                        <rect x="1" y="5" width="15" height="14" rx="2" ry="2"/>
                    </svg>
                </span>
                <span>Motion & Multimedia</span>
            </div>
        </div>

        <!-- Relative Wrapper for PORTFOLIO Display Text & Floating Badges on Desktop (>= 768px) -->
        <div class="portfolio-title-wrapper">

            <!-- Desktop Floating Badge 1: Graphic Design (Top Left) -->
            <div class="floating-badge desktop-badge badge-d1">
                <span class="badge-icon-box" aria-hidden="true">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18.375 2.625a3.875 3.875 0 0 0-5.48 0L3.5 12v5h5l9.375-9.375a3.875 3.875 0 0 0 0-5.48z"/>
                        <path d="M14 7l3 3"/>
                    </svg>
                </span>
                <span>Graphic Design</span>
            </div>

            <!-- Desktop Floating Badge 2: UI/UX & Web (Top Right) -->
            <div class="floating-badge desktop-badge badge-d2">
                <span class="badge-icon-box" aria-hidden="true">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m15 4-2 4-4 2 4 2 2 4 2-4 4-2-4-2-2-4z"/>
                        <path d="M4 14l-1 2-2 1 2 1 1 2 1-2 2-1-2-1-1-2z"/>
                        <path d="M9 19l-.5 1-1 .5 1 .5.5 1 .5-1 1-.5-1-.5-.5-1z"/>
                    </svg>
                </span>
                <span>UI/UX & Web</span>
            </div>

            <!-- Desktop Floating Badge 3: Motion & Multimedia (Bottom Left) -->
            <div class="floating-badge desktop-badge badge-d3">
                <span class="badge-icon-box" aria-hidden="true">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                        <polygon points="23 7 16 12 23 17 23 7"/>
                        <rect x="1" y="5" width="15" height="14" rx="2" ry="2"/>
                    </svg>
                </span>
                <span>Motion & Multimedia</span>
            </div>

            <!-- Giant 'PORTFOLIO' Display Typography (Instant LCP & Semantic Accessibility) -->
            <h1 class="portfolio-title-text" aria-label="PORTFOLIO">
                <span class="letter-char" aria-hidden="true">P</span>
                <span class="letter-char" aria-hidden="true">O</span>
                <span class="letter-char" aria-hidden="true">R</span>
                <span class="letter-char" aria-hidden="true">T</span>
                <span class="letter-char letter-highlight letter-loop-f" aria-hidden="true">F</span>
                <span class="letter-char" aria-hidden="true">O</span>
                <span class="letter-char" aria-hidden="true">L</span>
                <span class="letter-char" aria-hidden="true">I</span>
                <span class="letter-char letter-highlight letter-loop-o" aria-hidden="true">O</span>
            </h1>

        </div>

        <!-- Subtitle Description -->
        <p class="welcome-subtitle">
            Visual Identity <span class="subtitle-dot" aria-hidden="true">&bull;</span> Interactive Multimedia <span class="subtitle-dot" aria-hidden="true">&bull;</span> Creative Engineering
        </p>

        <!-- Call to Action: Pill-Shaped Expanding Button -->
        <div class="cta-btn-wrapper">
            <a 
                id="enterBtn"
                href="{{ route('portfolio.home') }}" 
                onclick="handleEnterClick(event)"
                class="cta-btn-expand"
                aria-label="Lihat Portofolio Lengkap Hizqia Chandra"
            >
                <div class="cta-btn-inner">
                    <span class="cta-btn-text">
                        Lihat Portofolio
                    </span>
                    <span class="cta-btn-icon" aria-hidden="true">
                        <!-- Arrow Right SVG -->
                        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </span>
                </div>
            </a>
        </div>

        <!-- Keyboard Shortcut Hint -->
        <div class="welcome-hint">
            <span>Tekan</span>
            <kbd class="welcome-kbd">Enter ↵</kbd>
            <span>atau tap tombol</span>
        </div>

    </main>

    <!-- GSAP 3: Asynchronously Deferred for Instant FCP & LCP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js" defer></script>

    <!-- Animation Master Script (Optimized for Non-Blocking Initial Paint) -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
            if (prefersReducedMotion) return;

            // Wait until GSAP is ready (loaded via defer)
            const initAnimation = () => {
                if (typeof gsap === 'undefined') {
                    setTimeout(initAnimation, 50);
                    return;
                }

                const isMobile = window.innerWidth < 768;
                const distMultiplier = isMobile ? 0.35 : 1.0;

                // Master Timeline with smooth easing
                const masterTl = gsap.timeline({
                    defaults: { ease: "power4.out" }
                });

                // Coordinate offsets for subtle spring entrance
                const letterOffsets = [
                    { x: -70 * distMultiplier, y: -50 * distMultiplier, r: -12 }, // P
                    { x: -35 * distMultiplier, y: 60 * distMultiplier, r: 10 },   // O
                    { x: -15 * distMultiplier, y: -65 * distMultiplier, r: -8 },  // R
                    { x: 40 * distMultiplier, y: -55 * distMultiplier, r: 12 },   // T
                    { x: -30 * distMultiplier, y: 70 * distMultiplier, r: -14 },  // F (Terracotta)
                    { x: 50 * distMultiplier, y: 45 * distMultiplier, r: 10 },   // O
                    { x: 65 * distMultiplier, y: -60 * distMultiplier, r: -10 },  // L
                    { x: -40 * distMultiplier, y: -45 * distMultiplier, r: 8 },   // I
                    { x: 75 * distMultiplier, y: 50 * distMultiplier, r: 14 }    // O (Terracotta)
                ];

                // 1. Kinetic Entrance: Animate smoothly FROM offset WITHOUT hiding initial paint (Keeps LCP fast!)
                masterTl.from(".canvas-guides", {
                    opacity: 0,
                    duration: 0.6,
                    ease: "power2.out"
                })
                .from(".welcome-tag", {
                    y: -15,
                    scale: 0.94,
                    opacity: 0.2,
                    duration: 0.5,
                    ease: "back.out(1.7)"
                }, "-=0.3")
                .from(".letter-char", {
                    x: (index) => letterOffsets[index] ? letterOffsets[index].x : 0,
                    y: (index) => letterOffsets[index] ? letterOffsets[index].y : 40,
                    rotation: (index) => letterOffsets[index] ? letterOffsets[index].r : 0,
                    scale: 0.85,
                    duration: 0.75,
                    stagger: 0.035,
                    ease: "back.out(1.8)"
                }, "-=0.25")
                .from(".floating-badge", {
                    scale: 0.6,
                    opacity: 0.2,
                    duration: 0.45,
                    stagger: 0.08,
                    ease: "back.out(2)"
                }, "-=0.4")
                .from(".welcome-subtitle", {
                    y: 12,
                    opacity: 0.3,
                    duration: 0.45,
                    ease: "power3.out"
                }, "-=0.25")
                .from(".cta-btn-expand", {
                    scale: 0.9,
                    duration: 0.45,
                    ease: "back.out(2)"
                }, "-=0.2")
                .from(".welcome-hint", {
                    y: 8,
                    opacity: 0.2,
                    duration: 0.4,
                    ease: "power2.out"
                }, "-=0.15");

                // 2. Continuous Ambient Floating Movement for Badges
                if (!isMobile) {
                    gsap.to(".badge-d1", { y: "-=5", duration: 2.6, repeat: -1, yoyo: true, ease: "sine.inOut" });
                    gsap.to(".badge-d2", { y: "+=7", duration: 3.2, repeat: -1, yoyo: true, ease: "sine.inOut", delay: 0.3 });
                    gsap.to(".badge-d3", { y: "-=6", duration: 2.9, repeat: -1, yoyo: true, ease: "sine.inOut", delay: 0.6 });
                } else {
                    gsap.to(".badge-m1", { y: "-=3", duration: 2.2, repeat: -1, yoyo: true, ease: "sine.inOut" });
                    gsap.to(".badge-m2", { y: "+=3", duration: 2.5, repeat: -1, yoyo: true, ease: "sine.inOut", delay: 0.2 });
                    gsap.to(".badge-m3", { y: "-=3", duration: 2.4, repeat: -1, yoyo: true, ease: "sine.inOut", delay: 0.4 });
                }

                // 3. Playful Loop for Highlighted Letters 'O' & 'F'
                masterTl.call(() => {
                    gsap.to(".letter-loop-o", {
                        y: "-=5",
                        scale: 1.05,
                        duration: 1.8,
                        repeat: -1,
                        yoyo: true,
                        ease: "sine.inOut"
                    });

                    // Periodic 360° flip jump on letter 'O'
                    const oSpinTl = gsap.timeline({ repeat: -1, repeatDelay: 3.5 });
                    oSpinTl
                        .to(".letter-loop-o", {
                            y: -18,
                            rotation: 360,
                            scale: 1.18,
                            duration: 0.7,
                            ease: "back.out(2)"
                        })
                        .to(".letter-loop-o", {
                            y: 0,
                            scale: 1,
                            duration: 0.45,
                            ease: "bounce.out"
                        })
                        .set(".letter-loop-o", { rotation: 0 });

                    // Gentle tilt on letter 'F'
                    gsap.to(".letter-loop-f", {
                        rotation: -7,
                        scale: 1.08,
                        y: "-=4",
                        duration: 2.2,
                        repeat: -1,
                        yoyo: true,
                        ease: "sine.inOut"
                    });

                    // Interactive cursor hover on all letters
                    document.querySelectorAll('.letter-char').forEach((charEl) => {
                        charEl.addEventListener('mouseenter', () => {
                            gsap.to(charEl, {
                                y: -12,
                                scale: 1.2,
                                rotation: gsap.utils.random(-12, 12),
                                duration: 0.25,
                                ease: "back.out(3)"
                            });
                        });
                        charEl.addEventListener('mouseleave', () => {
                            if (!charEl.classList.contains('letter-loop-o') && !charEl.classList.contains('letter-loop-f')) {
                                gsap.to(charEl, {
                                    y: 0,
                                    scale: 1,
                                    rotation: 0,
                                    duration: 0.35,
                                    ease: "elastic.out(1, 0.4)"
                                });
                            }
                        });
                    });
                });
            };

            initAnimation();
        });

        // Smooth Exit Animation & Navigation
        let isExiting = false;
        function handleEnterClick(event) {
            if (event) event.preventDefault();
            if (isExiting) return;
            isExiting = true;

            const targetUrl = "{{ route('portfolio.home') }}";

            if (typeof gsap === 'undefined' || window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
                window.location.href = targetUrl;
                return;
            }

            const exitTl = gsap.timeline({
                onComplete: () => {
                    window.location.href = targetUrl;
                }
            });

            exitTl
                .to(".floating-badge", {
                    scale: 0.6,
                    opacity: 0,
                    y: -20,
                    duration: 0.22,
                    stagger: 0.03,
                    ease: "back.in(1.7)"
                })
                .to(".letter-char", {
                    y: -50,
                    opacity: 0,
                    rotation: (i) => (i % 2 === 0 ? -10 : 10),
                    scale: 0.85,
                    duration: 0.3,
                    stagger: 0.02,
                    ease: "power3.in"
                }, "-=0.12")
                .to([".welcome-tag", ".welcome-subtitle", ".cta-btn-wrapper", ".welcome-hint", ".canvas-guides"], {
                    y: -30,
                    opacity: 0,
                    duration: 0.25,
                    stagger: 0.02,
                    ease: "power2.in"
                }, "-=0.2")
                .to("body", {
                    opacity: 0,
                    duration: 0.18,
                    ease: "power2.inOut"
                }, "-=0.08");
        }

        // Support Keyboard 'Enter' and 'Space' Shortcuts
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Enter' || e.code === 'Enter' || e.code === 'Space') {
                if (e.target && (e.target.tagName === 'INPUT' || e.target.tagName === 'TEXTAREA')) return;
                handleEnterClick(e);
            }
        });
    </script>
</body>
</html>
