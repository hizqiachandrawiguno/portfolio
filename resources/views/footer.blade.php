<!-- ========================================================================== -->
<!-- INTERACTIVE DESIGNER OUTRO / FOOTER COMPONENT                              -->
<!-- File: resources/views/footer.blade.php                                     -->
<!-- Powered by: Pure HTML5, Scoped Design System CSS & GSAP 3                  -->
<!-- Colors: Warm Cream (#FAF6F0), Charcoal (#2D2D2D), Terracotta (#E26B38)     -->
<!-- ========================================================================== -->

<footer id="contact" class="interactive-outro-container">
    
    <!-- Millimeter Canvas Grid Overlay -->
    <div class="outro-grid-overlay" aria-hidden="true"></div>

    <!-- Analog Vintage Film Grain -->
    <div class="outro-grain-overlay" aria-hidden="true"></div>

    <!-- Architectural Corner HUD Tags -->
    <div class="outro-hud-tag-tl">
        <span class="hud-accent">[+]</span>
        <span>OUTRO CANVAS / 06</span>
    </div>
    <div class="outro-hud-tag-tr">
        <span class="hud-pulse-dot"></span>
        <span>STAGE: READY</span>
    </div>

    <!-- ====================================================================== -->
    <!-- MAIN CENTERED STAGE (CONTAINS ALL KINETIC & POPPING ELEMENTS)          -->
    <!-- ====================================================================== -->
    <div class="outro-main-stage">

        <!-- 1. THE DRAWING BOUNDING BOX -->
        <div id="footerBoundingBox" class="outro-box-selection">
            <!-- 4 Corner Vector Anchor Handles -->
            <div class="box-handle box-handle-tl"></div>
            <div class="box-handle box-handle-tr"></div>
            <div class="box-handle box-handle-bl"></div>
            <div class="box-handle box-handle-br"></div>

            <!-- Coordinate Dimension Label Tooltip -->
            <div id="footerDimensionLabel" class="box-dimension-label">
                SELECTION: 100% × 100%
            </div>
        </div>

        <!-- 2. ANIMATED DRAGGING DESIGNER VECTOR CURSOR -->
        <div id="footerCursor" class="outro-animated-cursor">
            <svg width="34" height="34" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5.5 3.5L19.5 11.5L12.5 13.5L9.5 20.5L5.5 3.5Z" fill="#1E293B" stroke="#FFFFFF" stroke-width="1.6" stroke-linejoin="round"/>
            </svg>
            <!-- Cursor Click Ripple Wave -->
            <div id="footerCursorRipple" class="cursor-ripple-circle"></div>
        </div>


        <!-- ====================================================================== -->
        <!-- 3. POPPING IDENTITY BADGES & TECHNICAL ORNAMENTS                       -->
        <!-- ====================================================================== -->
        
        <!-- Badge 1: Kapsul "Hizqia Chandra" (Top-Left) -->
        <div id="footerBadge1" class="outro-pop-item badge-author-pill">
            <div class="pill-badge pill-badge-ivory">
                <span class="pill-sparkle-icon">✦</span>
                <span>Hizqia Chandra</span>
            </div>
        </div>

        <!-- Badge 2: Kapsul "Web & Multimedia" (Top-Right) -->
        <div id="footerBadge2" class="outro-pop-item badge-role-pill">
            <div class="pill-badge pill-badge-terracotta">
                <span>Web &amp; Multimedia</span>
                <span>🚀</span>
            </div>
        </div>

        <!-- Ornamen Teknis 1: Bracket Kode < / > (Far Right Side) -->
        <div id="footerOrnament1" class="outro-pop-item ornament-code-card">
            <div class="icon-square-card">
                &lt;/&gt;
            </div>
        </div>

        <!-- Ornamen Teknis 2: Kurung Kurawal { } (Far Left Side) -->
        <div id="footerOrnament2" class="outro-pop-item ornament-braces-card">
            <div class="icon-square-card">
                { }
            </div>
        </div>

        <!-- Ornamen Dekoratif 3: Bintang Sparkle ✦ Terracotta (Top Center) -->
        <div id="footerOrnament3" class="outro-pop-item ornament-sparkle-star">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="currentColor">
                <path d="M12 0C12 6.627 6.627 12 0 12C6.627 12 12 17.373 12 24C12 17.373 17.373 12 24 12C17.373 12 12 6.627 12 0Z"/>
            </svg>
        </div>

        <!-- Ornamen Dekoratif 4: Petir / Zigzag ⚡ (Right Edge) -->
        <div id="footerOrnament4" class="outro-pop-item ornament-lightning-circle">
            <div class="mini-circle-badge">
                ⚡
            </div>
        </div>

        <!-- Ornamen Dekoratif 5: Lingkaran Geometris ◉ (Left Edge) -->
        <div id="footerOrnament5" class="outro-pop-item ornament-dashed-ring">
            <div class="dashed-ring-body">
                <span class="dashed-center-dot"></span>
            </div>
        </div>


        <!-- ====================================================================== -->
        <!-- 4. KINETIC BIG REVEAL TYPOGRAPHY: "LET'S CONNECT"                      -->
        <!-- ====================================================================== -->
        <div class="outro-typography-container">
            <h2 class="footer-kinetic-title">
                
                <!-- Word 1: LET'S (Dark Charcoal #2D2D2D) -->
                <span class="word-group word-dark">
                    <span class="footer-char">L</span>
                    <span class="footer-char">E</span>
                    <span class="footer-char">T</span>
                    <span class="footer-char text-terracotta">'</span>
                    <span class="footer-char">S</span>
                </span>

                <!-- Word 2: CONNECT (Terracotta Orange #E26B38) -->
                <span class="word-group word-terracotta">
                    <span class="footer-char">C</span>
                    <span class="footer-char">O</span>
                    <span class="footer-char">N</span>
                    <span class="footer-char">N</span>
                    <span class="footer-char">E</span>
                    <span class="footer-char">C</span>
                    <span class="footer-char">T</span>
                </span>
            </h2>

            <!-- Pitch Subtext with comfortable line-height & width -->
            <p id="footerSubtext" class="outro-pitch-subtext">
                Mari buat karya visual bermakna dan eksplorasi ide digital tanpa batas bersama saya.
            </p>
        </div>


        <!-- ====================================================================== -->
        <!-- 5. CALL TO ACTION & SOCIAL MEDIA PILL BUTTONS                          -->
        <!-- ====================================================================== -->
        <div id="footerCtaWrapper" class="outro-cta-wrapper">
            
            <!-- 1. Main CTA Pill Button (Terracotta Orange) - Send Email -->
            <a href="mailto:{{ $bio['contact']['email'] ?? 'hizqiachandrawiguno@gmail.com' }}" id="footerCtaBtn" class="cta-pill-button cta-btn-primary">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                    <polyline points="22,6 12,13 2,6"></polyline>
                </svg>
                <span>Send Email</span>
            </a>

            <!-- 2. LinkedIn Button -->
            <a href="{{ $bio['contact']['linkedin'] ?? 'https://www.linkedin.com/in/hizqiachandrawiguno/' }}" target="_blank" rel="noopener noreferrer" class="cta-pill-button cta-btn-secondary">
                <i class="fa-brands fa-linkedin text-linkedin"></i>
                <span>LinkedIn</span>
            </a>

            <!-- 3. Instagram Button -->
            <a href="{{ $bio['contact']['instagram'] ?? 'https://instagram.com/HizqiaChandra' }}" target="_blank" rel="noopener noreferrer" class="cta-pill-button cta-btn-secondary">
                <i class="fa-brands fa-instagram text-instagram"></i>
                <span>Instagram</span>
            </a>

            <!-- 4. GitHub Button -->
            <a href="{{ $bio['contact']['github'] ?? 'https://github.com/hizqiachandrawiguno' }}" target="_blank" rel="noopener noreferrer" class="cta-pill-button cta-btn-secondary">
                <i class="fa-brands fa-github text-github"></i>
                <span>GitHub</span>
            </a>

            <!-- 5. Interactive Replay Animation Button -->
            <button type="button" id="footerReplayBtn" onclick="replayFooterAnimation()" class="cta-replay-button" title="Putar Ulang Animasi Outro">
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M21.5 2v6h-6M21.34 15.57a10 10 0 1 1-.57-8.38l5.67-5.67"/>
                </svg>
                <span>Replay Animation</span>
            </button>
        </div>

    </div>

    <!-- Bottom Copyright Note with Generous Breathing Room -->
    <div class="outro-bottom-copyright">
        <p class="mb-0">
            &copy; {{ date('Y') }} <strong>Hizqia Chandra Wiguno</strong> • Crafted with Intention &amp; Precision
        </p>
    </div>

</footer>


<!-- ========================================================================== -->
<!-- COMPLETE SELF-CONTAINED CSS DESIGN SYSTEM (100% INDEPENDENT OF FRAMEWORK)  -->
<!-- ========================================================================== -->
<style>
    /* Main Outer Container */
    .interactive-outro-container {
        position: relative;
        width: 100%;
        min-height: 640px;
        background-color: #FAF6F0;
        border-top: 1px solid #D6D0C5;
        padding: 100px 30px 65px 30px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        user-select: none;
        box-sizing: border-box;
    }

    /* Millimeter Grid Pattern */
    .outro-grid-overlay {
        position: absolute;
        inset: 0;
        pointer-events: none;
        opacity: 0.35;
        background-image: radial-gradient(#2D2D2D 1px, transparent 1px);
        background-size: 24px 24px;
        z-index: 1;
    }

    /* Film Grain */
    .outro-grain-overlay {
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        pointer-events: none;
        z-index: 2;
        opacity: 0.045;
        background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.8' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)'/%3E%3C/svg%3E");
        background-repeat: repeat;
        mix-blend-mode: multiply;
    }

    /* Corner HUD Guides */
    .outro-hud-tag-tl {
        position: absolute;
        top: 28px;
        left: 36px;
        font-family: 'Fira Code', monospace;
        font-size: 11px;
        font-weight: 600;
        color: #8C847B;
        display: flex;
        align-items: center;
        gap: 6px;
        opacity: 0.85;
        pointer-events: none;
        z-index: 3;
    }

    .outro-hud-tag-tr {
        position: absolute;
        top: 28px;
        right: 36px;
        font-family: 'Fira Code', monospace;
        font-size: 11px;
        font-weight: 600;
        color: #8C847B;
        display: flex;
        align-items: center;
        gap: 8px;
        opacity: 0.85;
        pointer-events: none;
        z-index: 3;
    }

    .hud-accent {
        color: #E26B38;
        font-weight: 700;
    }

    .hud-pulse-dot {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background-color: #E26B38;
        animation: hudPulse 2s ease-in-out infinite;
    }

    @keyframes hudPulse {
        0%, 100% { opacity: 1; transform: scale(1); }
        50% { opacity: 0.4; transform: scale(0.85); }
    }

    /* Main Centered Stage with generous spacing */
    .outro-main-stage {
        position: relative;
        width: 100%;
        max-width: 1080px;
        margin: 0 auto;
        padding: 55px 45px 50px 45px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        z-index: 5;
        box-sizing: border-box;
    }

    /* Bounding Box Selection */
    .outro-box-selection {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 20px;
        height: 20px;
        border: 2px dashed rgba(37, 99, 235, 0.75);
        background-color: rgba(37, 99, 235, 0.025);
        border-radius: 24px;
        pointer-events: none;
        opacity: 0;
        z-index: 1;
        box-sizing: border-box;
        transition: border-color 0.4s ease, background-color 0.4s ease;
    }

    .box-handle {
        position: absolute;
        width: 10px;
        height: 10px;
        background-color: #2563EB;
        border: 1.5px solid #FFFFFF;
        border-radius: 2px;
        box-shadow: 0 1px 4px rgba(0, 0, 0, 0.25);
    }

    .box-handle-tl { top: -5px; left: -5px; }
    .box-handle-tr { top: -5px; right: -5px; }
    .box-handle-bl { bottom: -5px; left: -5px; }
    .box-handle-br { bottom: -5px; right: -5px; }

    .box-dimension-label {
        position: absolute;
        top: -26px;
        left: 8px;
        background: #2D2D2D;
        color: #FFFFFF;
        font-family: 'Fira Code', monospace;
        font-size: 10px;
        padding: 2px 7px;
        border-radius: 4px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);
        opacity: 0;
        pointer-events: none;
        white-space: nowrap;
    }

    /* Dragging Vector Cursor */
    .outro-animated-cursor {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        pointer-events: none;
        z-index: 30;
        opacity: 0;
        filter: drop-shadow(0 4px 10px rgba(0, 0, 0, 0.25));
    }

    .cursor-ripple-circle {
        position: absolute;
        top: 2px;
        left: 2px;
        width: 28px;
        height: 28px;
        border-radius: 50%;
        border: 2px solid #2563EB;
        opacity: 0;
        transform: scale(0);
        pointer-events: none;
    }

    /* Popping Badges & Tech Ornaments - Placed cleanly outside main text/buttons */
    .outro-pop-item {
        position: absolute;
        transform-origin: center center;
        will-change: transform, opacity;
        opacity: 0;
        transform: scale(0);
        z-index: 20;
        pointer-events: none;
    }

    /* Top Left Badge */
    .badge-author-pill {
        top: -18px;
        left: 4%;
    }

    /* Top Right Badge (Separated from bottom buttons!) */
    .badge-role-pill {
        top: -18px;
        right: 4%;
    }

    /* Side Right Code Card */
    .ornament-code-card {
        top: 14%;
        right: -24px;
    }

    /* Side Left Braces Card */
    .ornament-braces-card {
        top: 14%;
        left: -24px;
    }

    /* Sparkle Star Centered at Top */
    .ornament-sparkle-star {
        top: -28px;
        left: 50%;
        transform: translateX(-50%) scale(0);
        color: #E26B38;
        filter: drop-shadow(0 2px 6px rgba(226, 107, 56, 0.3));
    }

    /* Lightning Circle on Mid Right */
    .ornament-lightning-circle {
        top: 52%;
        right: -32px;
        transform: translateY(-50%) scale(0);
    }

    /* Dashed Ring on Mid Left */
    .ornament-dashed-ring {
        top: 52%;
        left: -32px;
        transform: translateY(-50%) scale(0);
    }

    /* Badge Components */
    .pill-badge {
        padding: 8px 20px;
        border-radius: 40px;
        font-family: 'Fira Code', monospace;
        font-size: clamp(0.78rem, 1.8vw, 0.9rem);
        font-weight: 700;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        box-shadow: 0 6px 18px rgba(23, 19, 17, 0.08);
        white-space: nowrap;
    }

    .pill-badge-ivory {
        background: #FFFDF8;
        border: 2px solid #E26B38;
        color: #171311;
    }

    .pill-sparkle-icon {
        color: #E26B38;
    }

    .pill-badge-terracotta {
        background: #E26B38;
        color: #FFFDF8;
        border: 2px solid #E26B38;
    }

    .icon-square-card {
        width: 42px;
        height: 42px;
        background: #FFFDF8;
        border: 1px solid #D6D0C5;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: 'Fira Code', monospace;
        font-weight: 800;
        font-size: 1rem;
        color: #E26B38;
        box-shadow: 0 6px 16px rgba(23, 19, 17, 0.06);
        transform: rotate(10deg);
    }

    .ornament-braces-card .icon-square-card {
        transform: rotate(-10deg);
    }

    .mini-circle-badge {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        background: #FAF6F0;
        border: 1.5px solid rgba(226, 107, 56, 0.5);
        color: #E26B38;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 0.95rem;
        box-shadow: 0 4px 12px rgba(23, 19, 17, 0.04);
    }

    .dashed-ring-body {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        border: 2px dashed #E26B38;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .dashed-center-dot {
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: #2D2D2D;
    }

    /* Kinetic Typography with Spacious Breathing Room */
    .outro-typography-container {
        position: relative;
        text-align: center;
        margin: 10px 0 8px 0;
        max-width: 100%;
        z-index: 10;
    }

    .footer-kinetic-title {
        font-family: 'Outfit', 'Plus Jakarta Sans', sans-serif;
        font-size: clamp(2.8rem, 8.5vw, 5.8rem);
        font-weight: 900;
        line-height: 1.02;
        letter-spacing: -0.035em;
        margin: 0;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
        gap: 12px 24px;
    }

    .word-group {
        display: inline-flex;
        align-items: center;
    }

    .word-dark {
        color: #2D2D2D;
    }

    .word-terracotta {
        color: #E26B38;
    }

    .text-terracotta {
        color: #E26B38;
    }

    .footer-char {
        display: inline-block;
        transform-origin: center center;
        will-change: transform, opacity;
        opacity: 0;
        transform: scale(0);
    }

    .outro-pitch-subtext {
        font-family: 'Plus Jakarta Sans', sans-serif;
        color: #57534E;
        font-size: clamp(0.95rem, 1.8vw, 1.08rem);
        font-weight: 500;
        line-height: 1.7;
        max-width: 720px;
        margin: 22px auto 0 auto;
        padding: 0 15px;
        opacity: 0;
        transform: translateY(14px);
    }

    /* Call To Action & Social Media Buttons with Generous Spacing */
    .outro-cta-wrapper {
        position: relative;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
        gap: 14px;
        margin-top: 36px;
        z-index: 25;
        opacity: 0;
        transform: translateY(16px);
    }

    .cta-pill-button {
        display: inline-flex;
        align-items: center;
        gap: 9px;
        font-family: 'Plus Jakarta Sans', sans-serif;
        font-weight: 700;
        font-size: clamp(0.85rem, 1.6vw, 0.95rem);
        padding: 12px 22px;
        border-radius: 9999px;
        text-decoration: none;
        box-sizing: border-box;
        transition: transform 0.28s cubic-bezier(0.34, 1.56, 0.64, 1), box-shadow 0.28s ease, background-color 0.2s ease, border-color 0.2s ease;
    }

    .cta-btn-primary {
        background-color: #E26B38;
        color: #FFFFFF !important;
        box-shadow: 0 8px 24px rgba(226, 107, 56, 0.32);
        border: 1.5px solid #E26B38;
    }

    .cta-btn-primary:hover {
        background-color: #CE5A27;
        border-color: #CE5A27;
        transform: translateY(-2px) scale(1.04);
        box-shadow: 0 12px 30px rgba(226, 107, 56, 0.42);
        color: #FFFFFF !important;
    }

    .cta-btn-primary:active {
        transform: translateY(1px) scale(0.97);
    }

    .cta-btn-secondary {
        background-color: #FFFFFF;
        color: #2D2D2D !important;
        border: 1.5px solid #D6D0C5;
        box-shadow: 0 4px 14px rgba(23, 19, 17, 0.05);
    }

    .cta-btn-secondary:hover {
        background-color: #FFFFFF;
        border-color: #E26B38;
        color: #E26B38 !important;
        transform: translateY(-2px) scale(1.04);
        box-shadow: 0 8px 20px rgba(226, 107, 56, 0.15);
    }

    .cta-btn-secondary .text-linkedin {
        color: #0A66C2;
    }

    .cta-btn-secondary .text-instagram {
        color: #E1306C;
    }

    .cta-btn-secondary .text-github {
        color: #24292F;
    }

    .cta-replay-button {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        background-color: #FFFFFF;
        color: #655F57;
        border: 1px solid #D6D0C5;
        font-family: 'Fira Code', monospace;
        font-size: 11.5px;
        padding: 10px 18px;
        border-radius: 9999px;
        cursor: pointer;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
        transition: all 0.2s ease;
    }

    .cta-replay-button:hover {
        color: #171311;
        border-color: #8C847B;
        background-color: #FAF6F0;
        transform: translateY(-1px);
    }

    /* Bottom Copyright Note */
    .outro-bottom-copyright {
        margin-top: 65px;
        padding-top: 24px;
        border-top: 1px solid #E9E4DB;
        width: 100%;
        text-align: center;
        font-family: 'Fira Code', monospace;
        font-size: 11px;
        color: #8C847B;
        z-index: 3;
    }

    @media (max-width: 992px) {
        .interactive-outro-container {
            padding: 90px 20px 60px 20px;
        }
        .outro-main-stage {
            padding: 45px 20px 35px 20px;
        }
        .badge-author-pill { top: -16px; left: 0; }
        .badge-role-pill { top: -16px; right: 0; }
        .ornament-code-card, .ornament-braces-card { display: none; }
    }

    @media (max-width: 768px) {
        .interactive-outro-container {
            padding: 85px 16px 50px 16px;
        }
        .outro-hud-tag-tl, .outro-hud-tag-tr {
            position: static;
            margin-bottom: 12px;
        }
        .badge-author-pill, .badge-role-pill {
            position: static;
            margin: 6px 0;
        }
        .ornament-lightning-circle, .ornament-dashed-ring, .ornament-sparkle-star {
            display: none;
        }
        .outro-cta-wrapper {
            gap: 10px;
            margin-top: 28px;
        }
        .cta-pill-button {
            padding: 10px 18px;
            font-size: 0.86rem;
        }
    }
</style>


<!-- ========================================================================== -->
<!-- GSAP 3 TIMELINE ANIMATION SCRIPT                                           -->
<!-- ========================================================================== -->
<!-- Ensure GSAP 3 CDN is loaded -->
<script>
    if (typeof gsap === 'undefined') {
        document.write('<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"><\/script>');
    }
</script>

<script>
document.addEventListener('DOMContentLoaded', () => {
    let footerMasterTl = null;
    let hasPlayed = false;

    function initFooterAnimation() {
        const footerSection = document.getElementById('contact');
        const box = document.getElementById('footerBoundingBox');
        const cursor = document.getElementById('footerCursor');
        const ripple = document.getElementById('footerCursorRipple');
        const dimensionLabel = document.getElementById('footerDimensionLabel');
        const chars = document.querySelectorAll('.footer-char');
        const popItems = document.querySelectorAll('.outro-pop-item');
        const subtext = document.getElementById('footerSubtext');
        const ctaWrapper = document.getElementById('footerCtaWrapper');

        if (!footerSection || !box || !cursor) return;

        // Create Master GSAP Timeline
        footerMasterTl = gsap.timeline({
            paused: true,
            onComplete: () => {
                // Continuous Ambient Floating for Badges & Ornaments after entrance
                gsap.to("#footerBadge1", { y: "-=8", rotation: -2, duration: 2.8, repeat: -1, yoyo: true, ease: "sine.inOut" });
                gsap.to("#footerBadge2", { y: "+=7", rotation: 2, duration: 3.2, repeat: -1, yoyo: true, ease: "sine.inOut", delay: 0.3 });
                gsap.to("#footerOrnament1", { y: "-=10", rotation: 18, duration: 3.0, repeat: -1, yoyo: true, ease: "sine.inOut", delay: 0.2 });
                gsap.to("#footerOrnament2", { y: "+=9", rotation: -18, duration: 3.4, repeat: -1, yoyo: true, ease: "sine.inOut", delay: 0.5 });
                gsap.to("#footerOrnament3", { scale: 1.25, rotation: 45, duration: 2.2, repeat: -1, yoyo: true, ease: "sine.inOut" });
                gsap.to("#footerOrnament4", { y: "-=6", duration: 2.5, repeat: -1, yoyo: true, ease: "sine.inOut", delay: 0.4 });
                gsap.to("#footerOrnament5", { rotation: 360, duration: 16, repeat: -1, ease: "linear" });
            }
        });

        // ----------------------------------------------------------------------
        // FASE 1: THE DRAWING PHASE (Cursor moves diagonally & drags Bounding Box)
        // ----------------------------------------------------------------------
        footerMasterTl
            // Set initial state
            .set(box, { 
                width: 0, 
                height: 0, 
                opacity: 0,
                borderColor: "rgba(37, 99, 235, 0.75)",
                backgroundColor: "rgba(37, 99, 235, 0.025)" 
            })
            .set(cursor, { 
                opacity: 0, 
                scale: 0.5, 
                x: -200, 
                y: -100 
            })
            // Cursor Pop-In at top-left start position
            .to(cursor, {
                opacity: 1,
                scale: 1,
                duration: 0.4,
                ease: "back.out(2)"
            })
            // Start Dragging: Show Box & Dimension Label
            .to(box, {
                opacity: 1,
                duration: 0.15
            }, "-=0.1")
            .to(dimensionLabel, {
                opacity: 1,
                duration: 0.2
            }, "-=0.1")
            // Drag movement: Cursor moves from (-200, -100) to (200, 100) while Box expands
            .to(cursor, {
                x: 200,
                y: 100,
                duration: 1.15,
                ease: "power2.inOut"
            })
            .to(box, {
                width: "100%",
                height: "100%",
                duration: 1.15,
                ease: "power2.inOut"
            }, "<")
            // Click Ripple Effect at finish point
            .to(ripple, {
                scale: 2.5,
                opacity: 0.85,
                duration: 0.25,
                ease: "power2.out"
            })
            .to(ripple, {
                opacity: 0,
                duration: 0.2
            })
            // Box flashes highlight color & Cursor disappears
            .to(box, {
                borderColor: "rgba(226, 107, 56, 0.45)",
                backgroundColor: "rgba(226, 107, 56, 0.015)",
                duration: 0.35
            }, "-=0.2")
            .to(dimensionLabel, {
                opacity: 0,
                duration: 0.2
            }, "<")
            .to(cursor, {
                scale: 0,
                opacity: 0,
                duration: 0.25,
                ease: "back.in(2)"
            }, "-=0.25");

        // ----------------------------------------------------------------------
        // FASE 2 & 3: THE BIG REVEAL (Kinetic Letters Pop & Badges Explosion)
        // ----------------------------------------------------------------------
        footerMasterTl
            // Letters spring pop in letter by letter
            .to(chars, {
                opacity: 1,
                scale: 1,
                duration: 0.65,
                stagger: {
                    each: 0.045,
                    from: "start"
                },
                ease: "elastic.out(1.15, 0.4)"
            }, "-=0.1")
            // Surrounding Identity Badges & Technical Ornaments pop out with spring
            .to(popItems, {
                opacity: 1,
                scale: 1,
                duration: 0.55,
                stagger: 0.07,
                ease: "back.out(2.2)"
            }, "-=0.45")
            // Sub-headline text slide in
            .to(subtext, {
                opacity: 1,
                y: 0,
                duration: 0.45,
                ease: "power2.out"
            }, "-=0.35")
            // CTA Button & Replay wrapper appear
            .to(ctaWrapper, {
                opacity: 1,
                y: 0,
                duration: 0.45,
                ease: "back.out(1.7)"
            }, "-=0.25");

        // ----------------------------------------------------------------------
        // INTERSECTION OBSERVER TRIGGER (Auto-plays when scrolled into view)
        // ----------------------------------------------------------------------
        if ('IntersectionObserver' in window) {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting && !hasPlayed) {
                        hasPlayed = true;
                        footerMasterTl.play();
                    }
                });
            }, { threshold: 0.2 });

            observer.observe(footerSection);
        } else {
            footerMasterTl.play();
        }

        // Global Replay Handler function
        window.replayFooterAnimation = function () {
            // Kill any active ambient tweens on badges
            gsap.killTweensOf(["#footerBadge1", "#footerBadge2", "#footerOrnament1", "#footerOrnament2", "#footerOrnament3", "#footerOrnament4", "#footerOrnament5"]);
            footerMasterTl.restart();
        };
    }

    initFooterAnimation();
});
</script>
