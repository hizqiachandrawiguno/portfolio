<!DOCTYPE html>
<html lang="id" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Welcome | Hizqia Chandra Wiguno Portfolio</title>
    <meta name="description" content="Welcome to Hizqia Chandra Wiguno's Creative Portfolio Space. Graphic Designer, UI/UX, and Multimedia Specialist.">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/hizqia_logo_orange.png') }}">

    <!-- Google Fonts: Outfit (Display/Heading), Plus Jakarta Sans (Body), Fira Code (Mono) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@400;500;600&family=Outfit:wght@400;500;600;700;800;900&family=Plus+Jakarta+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400&display=swap" rel="stylesheet">

    <!-- FontAwesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- Tailwind CSS (Play CDN) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        cream: '#FAF6F0',
                        terracotta: {
                            DEFAULT: '#E26B38',
                            hover: '#CE5A27',
                            light: '#F8E9E2',
                            subtle: 'rgba(226, 107, 56, 0.12)',
                            glow: 'rgba(226, 107, 56, 0.35)'
                        },
                        charcoal: {
                            DEFAULT: '#2D2D2D',
                            muted: '#5A5652',
                            dim: '#8E8881'
                        },
                        taupe: '#E5DFD5'
                    },
                    fontFamily: {
                        heading: ['Outfit', 'sans-serif'],
                        body: ['Plus Jakarta Sans', 'sans-serif'],
                        mono: ['Fira Code', 'monospace']
                    }
                }
            }
        }
    </script>

    <!-- Custom CSS Styles -->
    <style>
        :root {
            --bg-cream: #FAF6F0;
            --color-terracotta: #E26B38;
            --color-charcoal: #2D2D2D;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html, body {
            width: 100%;
            height: 100%;
            overflow-x: hidden;
            overflow-y: auto;
            background-color: var(--bg-cream);
            color: var(--color-charcoal);
            font-family: 'Plus Jakarta Sans', sans-serif;
            user-select: none;
            -webkit-font-smoothing: antialiased;
        }

        /* Subtle Millimeter Grid Canvas Background */
        .canvas-grid-bg {
            background-color: #FAF6F0;
            background-image: 
                linear-gradient(to right, rgba(45, 45, 45, 0.032) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(45, 45, 45, 0.032) 1px, transparent 1px),
                linear-gradient(to right, rgba(226, 107, 56, 0.045) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(226, 107, 56, 0.045) 1px, transparent 1px);
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
            width: 350px;
            height: 350px;
            background: radial-gradient(circle, #E26B38 0%, rgba(226, 107, 56, 0) 70%);
        }

        .glow-2 {
            bottom: 5%;
            left: 5%;
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, #F4A261 0%, rgba(244, 162, 97, 0) 70%);
            animation-delay: -9s;
        }

        @media (min-width: 768px) {
            .glow-1 { width: 450px; height: 450px; filter: blur(75px); }
            .glow-2 { width: 500px; height: 500px; filter: blur(75px); }
        }

        @keyframes floatGlow {
            0% { transform: translate3d(0, 0, 0) scale(1); }
            50% { transform: translate3d(25px, -20px, 0) scale(1.06); }
            100% { transform: translate3d(-20px, 15px, 0) scale(0.96); }
        }

        /* Letter Styling */
        .portfolio-title-text {
            font-size: clamp(2.35rem, 11.2vw, 7.8rem);
            line-height: 0.95;
            letter-spacing: -0.025em;
        }

        .letter-char {
            display: inline-block;
            transform-origin: center center;
            will-change: transform, opacity;
        }

        /* CTA Button Styling */
        .cta-btn-expand {
            position: relative;
            background-color: #E26B38;
            color: #FFFFFF;
            transition: transform 0.28s cubic-bezier(0.34, 1.56, 0.64, 1), box-shadow 0.28s ease, background-color 0.2s ease;
            box-shadow: 0 8px 20px -4px rgba(226, 107, 56, 0.35);
        }

        .cta-btn-expand:hover {
            background-color: #CE5A27;
            transform: translateY(-2px) scale(1.02);
            box-shadow: 0 14px 28px -4px rgba(226, 107, 56, 0.45);
        }

        .cta-btn-expand:active {
            transform: translateY(1px) scale(0.98);
        }

        /* Floating Badges subtle backdrop */
        .floating-badge {
            will-change: transform;
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
        }

        /* Optimized Analog Film Grain Texture Overlay (Hardware Accelerated, No Jitter Loop) */
        .vintage-grain-overlay {
            position: fixed;
            inset: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 40;
            opacity: 0.038;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.8' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)'/%3E%3C/svg%3E");
            background-repeat: repeat;
            transform: translateZ(0);
        }
    </style>
</head>
<body class="min-h-screen w-full relative flex items-center justify-center canvas-grid-bg p-4 sm:p-6">

    <!-- Subtle Analog Vintage Film Grain Texture Overlay -->
    <div class="vintage-grain-overlay" aria-hidden="true"></div>

    <!-- Ambient Gradient Background Spheres -->
    <div class="ambient-glow glow-1"></div>
    <div class="ambient-glow glow-2"></div>

    <!-- Architectural Millimeter HUD Corner Markers -->
    <div class="canvas-guides fixed inset-0 pointer-events-none p-3 sm:p-6 md:p-10 flex flex-col justify-between z-10 opacity-70">
        <!-- Top Row -->
        <div class="flex items-center justify-between font-mono text-[10px] sm:text-xs text-charcoal-dim">
            <div class="flex items-center gap-1.5 sm:gap-2">
                <span class="text-terracotta font-semibold">[+]</span>
                <span>POS: 0.00, 0.00</span>
                <span class="hidden sm:inline-block text-taupe">/</span>
                <span class="hidden sm:inline-block">CANVAS: ACTIVE</span>
            </div>
            <div class="flex items-center gap-2 sm:gap-3">
                <span class="hidden sm:inline-block">GRID: 24PX</span>
                <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-ping"></span>
                <span class="font-medium text-charcoal">READY</span>
            </div>
        </div>

        <!-- Bottom Row -->
        <div class="flex items-center justify-between font-mono text-[10px] sm:text-xs text-charcoal-dim">
            <div class="flex items-center gap-1.5 sm:gap-2">
                <i class="fa-solid fa-compass-drafting text-terracotta text-[10px] sm:text-xs"></i>
                <span class="hidden sm:inline-block">HIZQIA CHANDRA WIGUNO</span>
                <span class="sm:hidden">HIZQIA</span>
                <span class="text-taupe">&bull;</span>
            </div>
            <div class="flex items-center gap-1.5 sm:gap-2">
                <span>V2.5</span>
                <span class="text-taupe">/</span>
                <span>2026</span>
            </div>
        </div>
    </div>

    <!-- Main Central Stage -->
    <main class="relative z-20 flex flex-col items-center justify-center text-center w-full max-w-4xl mx-auto py-8 sm:py-12">

        <!-- Top Tag / Pill Indicator -->
        <div class="welcome-tag inline-flex items-center gap-2 px-3.5 py-1 sm:px-4 sm:py-1.5 rounded-full bg-white/90 border border-stone-200/90 shadow-2xs backdrop-blur-md text-[11px] sm:text-xs font-mono text-charcoal mb-4 sm:mb-6 select-none max-w-[92vw]">
            <span class="w-2 h-2 rounded-full bg-terracotta animate-pulse flex-shrink-0"></span>
            <span class="font-medium tracking-wide uppercase truncate">
                <span class="hidden sm:inline">CREATIVE SPACE &bull; </span>HIZQIA CHANDRA WIGUNO
            </span>
        </div>

        <!-- Responsive Badges Group on Mobile (< md) -->
        <div class="mobile-badges-group flex md:hidden items-center justify-center flex-wrap gap-1.5 mb-4 max-w-xs mx-auto">
            <div class="floating-badge badge-m1 px-2.5 py-1 rounded-full bg-white/95 border border-stone-200/90 shadow-2xs text-[11px] font-semibold text-charcoal flex items-center gap-1.5 select-none">
                <span class="w-4 h-4 rounded-full bg-orange-100 text-terracotta flex items-center justify-center text-[9px]">
                    <i class="fa-solid fa-paintbrush"></i>
                </span>
                <span>Graphic Design</span>
            </div>
            <div class="floating-badge badge-m2 px-2.5 py-1 rounded-full bg-white/95 border border-stone-200/90 shadow-2xs text-[11px] font-semibold text-charcoal flex items-center gap-1.5 select-none">
                <span class="w-4 h-4 rounded-full bg-orange-100 text-terracotta flex items-center justify-center text-[9px]">
                    <i class="fa-solid fa-wand-magic-sparkles"></i>
                </span>
                <span>UI/UX & Web</span>
            </div>
            <div class="floating-badge badge-m3 px-2.5 py-1 rounded-full bg-white/95 border border-stone-200/90 shadow-2xs text-[11px] font-semibold text-charcoal flex items-center gap-1.5 select-none">
                <span class="w-4 h-4 rounded-full bg-orange-100 text-terracotta flex items-center justify-center text-[9px]">
                    <i class="fa-solid fa-video"></i>
                </span>
                <span>Motion & Multimedia</span>
            </div>
        </div>

        <!-- Relative Wrapper for PORTFOLIO Display Text & Floating Badges on Desktop (md+) -->
        <div class="relative w-full max-w-full my-1 sm:my-3 flex items-center justify-center">

            <!-- Desktop Floating Badge 1: Graphic Design (Top Left) -->
            <div class="floating-badge badge-d1 hidden md:flex absolute -top-12 -left-8 lg:-left-12 px-3.5 py-1.5 rounded-full bg-white/95 border border-stone-200 shadow-[0_4px_16px_rgba(0,0,0,0.06)] text-xs lg:text-sm font-semibold text-charcoal items-center gap-2 select-none z-30">
                <span class="w-6 h-6 rounded-full bg-orange-100 text-terracotta flex items-center justify-center text-xs">
                    <i class="fa-solid fa-paintbrush"></i>
                </span>
                <span>Graphic Design</span>
            </div>

            <!-- Desktop Floating Badge 2: UI/UX & Web (Top Right) -->
            <div class="floating-badge badge-d2 hidden md:flex absolute -top-12 -right-8 lg:-right-12 px-3.5 py-1.5 rounded-full bg-white/95 border border-stone-200 shadow-[0_4px_16px_rgba(0,0,0,0.06)] text-xs lg:text-sm font-semibold text-charcoal items-center gap-2 select-none z-30">
                <span class="w-6 h-6 rounded-full bg-orange-100 text-terracotta flex items-center justify-center text-xs">
                    <i class="fa-solid fa-wand-magic-sparkles"></i>
                </span>
                <span>UI/UX & Web</span>
            </div>

            <!-- Desktop Floating Badge 3: Motion & Multimedia (Bottom Left/Center) -->
            <div class="floating-badge badge-d3 hidden md:flex absolute -bottom-10 -left-4 lg:-left-8 px-3.5 py-1.5 rounded-full bg-white/95 border border-stone-200 shadow-[0_4px_16px_rgba(0,0,0,0.06)] text-xs lg:text-sm font-semibold text-charcoal items-center gap-2 select-none z-30">
                <span class="w-6 h-6 rounded-full bg-orange-100 text-terracotta flex items-center justify-center text-xs">
                    <i class="fa-solid fa-video"></i>
                </span>
                <span>Motion & Multimedia</span>
            </div>

            <!-- Giant 'PORTFOLIO' Display Typography (Fluid & Proportional on all screens) -->
            <h1 class="portfolio-title-text font-black font-heading select-none flex items-center justify-center gap-[1px] sm:gap-1 max-w-full">
                <span class="letter-char text-charcoal">P</span>
                <span class="letter-char text-charcoal">O</span>
                <span class="letter-char text-charcoal">R</span>
                <span class="letter-char text-charcoal">T</span>
                <span class="letter-char letter-loop-f text-terracotta cursor-pointer">F</span>
                <span class="letter-char text-charcoal">O</span>
                <span class="letter-char text-charcoal">L</span>
                <span class="letter-char text-charcoal">I</span>
                <span class="letter-char letter-loop-o text-terracotta cursor-pointer">O</span>
            </h1>

        </div>

        <!-- Subtitle Description -->
        <p class="welcome-subtitle text-xs sm:text-sm md:text-base text-charcoal-muted max-w-xs sm:max-w-md md:max-w-lg mx-auto mt-4 sm:mt-6 mb-6 sm:mb-8 font-medium leading-relaxed px-3">
            Visual Identity <span class="text-terracotta font-bold">&bull;</span> Interactive Multimedia <span class="text-terracotta font-bold">&bull;</span> Creative Engineering
        </p>

        <!-- Call to Action: Pill-Shaped Expanding Button -->
        <div class="cta-btn-wrapper relative flex items-center justify-center">
            <a 
                id="enterBtn"
                href="{{ route('portfolio.home') }}" 
                onclick="handleEnterClick(event)"
                class="cta-btn-expand inline-flex items-center justify-center rounded-full overflow-hidden font-body font-semibold cursor-pointer select-none"
                style="height: 48px;"
            >
                <!-- Inner Layout: Expanding Pill -->
                <div class="cta-btn-inner flex items-center gap-2.5 sm:gap-3 px-5 sm:px-7 py-2.5 sm:py-3">
                    <span class="cta-btn-text text-xs sm:text-sm md:text-base font-semibold tracking-wide whitespace-nowrap">
                        Lihat Portofolio
                    </span>
                    <span class="cta-btn-icon w-6 h-6 sm:w-7 sm:h-7 rounded-full bg-white/20 flex items-center justify-center text-xs transition-transform duration-300">
                        <i class="fa-solid fa-arrow-right"></i>
                    </span>
                </div>
            </a>
        </div>

        <!-- Keyboard Shortcut Hint -->
        <div class="welcome-hint mt-5 sm:mt-6 font-mono text-[11px] sm:text-xs text-charcoal-dim flex items-center gap-1.5 opacity-80">
            <span>Tekan</span>
            <kbd class="px-1.5 py-0.5 rounded bg-white border border-stone-200 text-charcoal text-[10px] sm:text-[11px] shadow-2xs font-mono font-semibold">Enter ↵</kbd>
            <span>atau tap tombol</span>
        </div>

    </main>

    <!-- GSAP 3 CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>

    <!-- Animation Master Script -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const isMobile = window.innerWidth < 768;
            const distMultiplier = isMobile ? 0.35 : 1.0;

            // Master Timeline
            const masterTl = gsap.timeline({
                defaults: { ease: "power4.out" }
            });

            // Coordinate offsets for asymmetric letter entrance
            const letterOffsets = [
                { x: -140 * distMultiplier, y: -100 * distMultiplier, r: -22, s: 0.3 }, // P
                { x: -70  * distMultiplier, y: 120  * distMultiplier, r: 18,  s: 0.4 }, // O
                { x: -25  * distMultiplier, y: -130 * distMultiplier, r: -15, s: 0.3 }, // R
                { x: 80   * distMultiplier, y: -110 * distMultiplier, r: 20,  s: 0.4 }, // T
                { x: -60  * distMultiplier, y: 140  * distMultiplier, r: -28, s: 0.5 }, // F (Terracotta)
                { x: 100  * distMultiplier, y: 90   * distMultiplier, r: 18,  s: 0.4 }, // O
                { x: 130  * distMultiplier, y: -120 * distMultiplier, r: -18, s: 0.3 }, // L
                { x: -80  * distMultiplier, y: -90  * distMultiplier, r: 14,  s: 0.4 }, // I
                { x: 150  * distMultiplier, y: 100  * distMultiplier, r: 25,  s: 0.5 }  // O (Terracotta)
            ];

            // 1. Initial State Setup
            gsap.set(".canvas-guides", { opacity: 0 });
            gsap.set(".welcome-tag", { opacity: 0, y: -12, scale: 0.92 });
            gsap.set(".floating-badge", { scale: 0, opacity: 0 });
            gsap.set(".welcome-subtitle", { opacity: 0, y: 15 });
            gsap.set(".welcome-hint", { opacity: 0, y: 10 });
            
            // Set initial state for CTA Button: starts as compact circle
            gsap.set(".cta-btn-expand", { 
                scale: 0, 
                opacity: 0,
                width: isMobile ? "48px" : "52px",
                padding: "0"
            });
            gsap.set(".cta-btn-text", { opacity: 0, width: 0, display: "none" });

            // 2. Entrance Choreography
            // A) Canvas guides & ambient markers fade in
            masterTl.to(".canvas-guides", {
                opacity: 0.75,
                duration: 0.7,
                ease: "power2.out"
            });

            // B) Top Tag appears
            masterTl.to(".welcome-tag", {
                opacity: 1,
                y: 0,
                scale: 1,
                duration: 0.5,
                ease: "back.out(1.7)"
            }, "-=0.3");

            // C) Letter-by-letter asymmetric sliding and spring entrance
            masterTl.fromTo(".letter-char",
                (index) => {
                    const offset = letterOffsets[index] || { x: 0, y: 80, r: 0, s: 0.5 };
                    return {
                        x: offset.x,
                        y: offset.y,
                        rotation: offset.r,
                        scale: offset.s,
                        opacity: 0
                    };
                },
                {
                    x: 0,
                    y: 0,
                    rotation: 0,
                    scale: 1,
                    opacity: 1,
                    duration: 1.05,
                    stagger: 0.045,
                    ease: "back.out(1.7)"
                },
                "-=0.25"
            );

            // D) Floating capsule badges pop up with stagger
            masterTl.to(".floating-badge", {
                scale: 1,
                opacity: 1,
                duration: 0.55,
                stagger: 0.1,
                ease: "back.out(2)"
            }, "-=0.45");

            // E) Subtitle appears
            masterTl.to(".welcome-subtitle", {
                opacity: 1,
                y: 0,
                duration: 0.5,
                ease: "power3.out"
            }, "-=0.25");

            // F) CTA Button: Appears as circle -> Expands to full pill shape with text
            masterTl.to(".cta-btn-expand", {
                scale: 1,
                opacity: 1,
                duration: 0.4,
                ease: "back.out(2)"
            }, "-=0.15")
            .to(".cta-btn-expand", {
                width: "auto",
                duration: 0.55,
                ease: "elastic.out(1, 0.8)",
                onStart: () => {
                    gsap.set(".cta-btn-text", { display: "inline-block" });
                }
            })
            .to(".cta-btn-text", {
                opacity: 1,
                width: "auto",
                duration: 0.3,
                ease: "power2.out"
            }, "-=0.35")
            .to(".welcome-hint", {
                opacity: 0.85,
                y: 0,
                duration: 0.45,
                ease: "power2.out"
            }, "-=0.15");

            // 3. Continuous Ambient Floating Movement for Badges
            if (!isMobile) {
                gsap.to(".badge-d1", { y: "-=6", duration: 2.6, repeat: -1, yoyo: true, ease: "sine.inOut" });
                gsap.to(".badge-d2", { y: "+=8", duration: 3.2, repeat: -1, yoyo: true, ease: "sine.inOut", delay: 0.3 });
                gsap.to(".badge-d3", { y: "-=7", duration: 2.9, repeat: -1, yoyo: true, ease: "sine.inOut", delay: 0.6 });
            } else {
                gsap.to(".badge-m1", { y: "-=3", duration: 2.2, repeat: -1, yoyo: true, ease: "sine.inOut" });
                gsap.to(".badge-m2", { y: "+=3", duration: 2.5, repeat: -1, yoyo: true, ease: "sine.inOut", delay: 0.2 });
                gsap.to(".badge-m3", { y: "-=3", duration: 2.4, repeat: -1, yoyo: true, ease: "sine.inOut", delay: 0.4 });
            }

            // 4. Looping Animation for Highlighted Letter 'O' (Continuous Floating + Periodic 360° Flip Jump)
            masterTl.call(() => {
                // A) Continuous subtle organic breathing & hover for letter 'O'
                gsap.to(".letter-loop-o", {
                    y: "-=6",
                    scale: 1.06,
                    duration: 1.8,
                    repeat: -1,
                    yoyo: true,
                    ease: "sine.inOut"
                });

                // B) Playful 360° spring flip jump every 3.2 seconds on letter 'O'
                const oSpinTl = gsap.timeline({ repeat: -1, repeatDelay: 3.2 });
                oSpinTl
                    .to(".letter-loop-o", {
                        y: -22,
                        rotation: 360,
                        scale: 1.22,
                        duration: 0.75,
                        ease: "back.out(2)"
                    })
                    .to(".letter-loop-o", {
                        y: 0,
                        scale: 1,
                        duration: 0.5,
                        ease: "bounce.out"
                    })
                    .set(".letter-loop-o", { rotation: 0 });

                // C) Subtle rhythmic pulse & tilt on letter 'F'
                gsap.to(".letter-loop-f", {
                    rotation: -8,
                    scale: 1.1,
                    y: "-=5",
                    duration: 2.2,
                    repeat: -1,
                    yoyo: true,
                    ease: "sine.inOut"
                });

                // D) Interactive cursor hover on all letters
                document.querySelectorAll('.letter-char').forEach((charEl) => {
                    charEl.addEventListener('mouseenter', () => {
                        gsap.to(charEl, {
                            y: -14,
                            scale: 1.25,
                            rotation: gsap.utils.random(-15, 15),
                            duration: 0.28,
                            ease: "back.out(3)"
                        });
                    });
                    charEl.addEventListener('mouseleave', () => {
                        if (!charEl.classList.contains('letter-loop-o') && !charEl.classList.contains('letter-loop-f')) {
                            gsap.to(charEl, {
                                y: 0,
                                scale: 1,
                                rotation: 0,
                                duration: 0.4,
                                ease: "elastic.out(1, 0.4)"
                            });
                        }
                    });
                });
            });
        });

        // 4. Smooth Exit Animation & Redirect
        let isExiting = false;
        function handleEnterClick(event) {
            if (event) event.preventDefault();
            if (isExiting) return;
            isExiting = true;

            const targetUrl = "{{ route('portfolio.home') }}";

            // Exit Timeline: all elements slide up and fade out
            const exitTl = gsap.timeline({
                onComplete: () => {
                    window.location.href = targetUrl;
                }
            });

            exitTl
                .to(".floating-badge", {
                    scale: 0.6,
                    opacity: 0,
                    y: -25,
                    duration: 0.25,
                    stagger: 0.03,
                    ease: "back.in(1.7)"
                })
                .to(".letter-char", {
                    y: -60,
                    opacity: 0,
                    rotation: (i) => (i % 2 === 0 ? -12 : 12),
                    scale: 0.8,
                    duration: 0.35,
                    stagger: 0.02,
                    ease: "power3.in"
                }, "-=0.15")
                .to([".welcome-tag", ".welcome-subtitle", ".cta-btn-wrapper", ".welcome-hint", ".canvas-guides"], {
                    y: -40,
                    opacity: 0,
                    duration: 0.3,
                    stagger: 0.02,
                    ease: "power2.in"
                }, "-=0.25")
                .to("body", {
                    opacity: 0,
                    duration: 0.2,
                    ease: "power2.inOut"
                }, "-=0.1");
        }

        // 5. Support Keyboard 'Enter' Shortcut to Navigate
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Enter' || e.code === 'Enter' || e.code === 'Space') {
                handleEnterClick(e);
            }
        });
    </script>
</body>
</html>
