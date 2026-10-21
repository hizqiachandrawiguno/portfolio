<!-- ========================================================================== -->
<!-- EDITORIAL DESIGN STUDIO OUTRO / CONTACT SECTION                              -->
<!-- File: resources/views/footer.blade.php                                     -->
<!-- Designed with Authentic Typography, Human Voice & Clean Hierarchy          -->
<!-- ========================================================================== -->

<footer id="contact" class="studio-outro-section">
    <!-- Subtle Ambient Canvas Grid -->
    <div class="studio-outro-grid" aria-hidden="true"></div>

    <div class="container position-relative" style="z-index: 2;">
        <div class="studio-outro-card">
            
            <!-- Section Kicker / Tag -->
            <div class="d-inline-flex align-items-center studio-outro-tag mb-4">
                <span>MARI BERKOLABORASI</span>
            </div>

            <!-- Big Confident Typographic Headline -->
            <h2 class="studio-outro-title mb-3">
                Mari Bicara Soal Posisi <br class="d-none d-md-block">
                <span class="text-terracotta position-relative d-inline-block">
                    Graphic Designer
                </span> di Tim Anda.
            </h2>

            <!-- Human Conversational Subtitle -->
            <p class="studio-outro-desc mb-4">
                Tersedia untuk posisi full-time sebagai Graphic Designer atau Marketing Graphic Designer mulai 2 November 2026. Siap membantu tim Anda merancang materi promosi, key visual kampanye, maupun kebutuhan grafis harian yang terstruktur dan sesuai guideline.
            </p>

            <!-- Status Availability Pill -->
            <div class="studio-availability-badge mb-5">
                <span class="pulse-indicator"></span>
                <span>Tersedia Full-Time &bull; Mulai 2 November 2026</span>
            </div>

            <!-- Primary Contact & Channels Grid -->
            <div class="studio-channels-wrapper mb-5">
                
                <!-- Main Email Action Card with Direct Copy Feedback -->
                <div class="studio-email-card">
                    <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-between gap-3">
                        <div class="d-flex align-items-center gap-3">
                            <div class="studio-channel-icon">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div>
                                <small class="text-muted d-block font-mono text-uppercase" style="font-size: 0.72rem; letter-spacing: 0.05em;">Kirim Surel / Email Langsung</small>
                                <a href="mailto:{{ $bio['contact']['email'] ?? 'hizqiachandrawiguno@gmail.com' }}" class="studio-email-link">
                                    {{ $bio['contact']['email'] ?? 'hizqiachandrawiguno@gmail.com' }}
                                </a>
                            </div>
                        </div>

                        <div class="d-flex align-items-center gap-2">
                            <button type="button" class="btn btn-studio-copy" id="copyEmailBtn" onclick="copyContactEmail('{{ $bio['contact']['email'] ?? 'hizqiachandrawiguno@gmail.com' }}')" title="Salin Alamat Email">
                                <i class="fa-regular fa-copy me-1" id="copyEmailIcon"></i>
                                <span id="copyEmailLabel">Salin Email</span>
                            </button>
                            <a href="mailto:{{ $bio['contact']['email'] ?? 'hizqiachandrawiguno@gmail.com' }}" class="btn btn-studio-send">
                                <span>Tulis Pesan</span>
                                <i class="fa-solid fa-arrow-up-right-from-square ms-1" style="font-size: 0.8rem;"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Social Links Grid -->
                <div class="row g-3 mt-1">
                    <div class="col-sm-4">
                        <a href="{{ $bio['contact']['linkedin'] ?? 'https://www.linkedin.com/in/hizqiachandrawiguno/' }}" target="_blank" rel="noopener noreferrer" class="studio-social-card">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center gap-2">
                                    <i class="fa-brands fa-linkedin-in text-linkedin fs-5"></i>
                                    <div>
                                        <div class="fw-bold text-dark font-heading">LinkedIn</div>
                                        <small class="text-muted font-mono" style="font-size: 0.72rem;">/in/hizqiachandrawiguno</small>
                                    </div>
                                </div>
                                <i class="fa-solid fa-arrow-right studio-arrow-hover"></i>
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="{{ $bio['contact']['instagram'] ?? 'https://instagram.com/HizqiaChandra' }}" target="_blank" rel="noopener noreferrer" class="studio-social-card">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center gap-2">
                                    <i class="fa-brands fa-instagram text-instagram fs-5"></i>
                                    <div>
                                        <div class="fw-bold text-dark font-heading">Instagram</div>
                                        <small class="text-muted font-mono" style="font-size: 0.72rem;">@HizqiaChandra</small>
                                    </div>
                                </div>
                                <i class="fa-solid fa-arrow-right studio-arrow-hover"></i>
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="{{ $bio['contact']['github'] ?? 'https://github.com/hizqiachandrawiguno' }}" target="_blank" rel="noopener noreferrer" class="studio-social-card">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center gap-2">
                                    <i class="fa-brands fa-github text-dark fs-5"></i>
                                    <div>
                                        <div class="fw-bold text-dark font-heading">GitHub</div>
                                        <small class="text-muted font-mono" style="font-size: 0.72rem;">/hizqiachandrawiguno</small>
                                    </div>
                                </div>
                                <i class="fa-solid fa-arrow-right studio-arrow-hover"></i>
                            </div>
                        </a>
                    </div>
                </div>

            </div>

        </div>

        <!-- Clean Editorial Colophon / Copyright Bar -->
        <div class="studio-colophon pt-4 mt-2 border-top">
            <div class="row align-items-center gy-2">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0 text-muted small font-mono">
                        &copy; {{ date('Y') }} <strong class="text-dark">Hizqia Chandra Wiguno</strong>. Dibuat dengan presisi tipografi &amp; Laravel.
                    </p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <span class="text-muted small font-mono">
                        <i class="fa-solid fa-location-dot text-terracotta me-1"></i> Berbasis di Jakarta &amp; Bogor, Indonesia
                    </span>
                </div>
            </div>
        </div>

    </div>
</footer>

<style>
    /* ========================================================================== */
    /* STUDIO OUTRO / CONTACT SECTION STYLING                                      */
    /* ========================================================================== */
    .studio-outro-section {
        position: relative;
        background-color: #FAF6F0;
        border-top: 1px solid #E8E2D8;
        padding: 90px 0 45px 0;
        overflow: hidden;
    }

    .studio-outro-grid {
        position: absolute;
        inset: 0;
        pointer-events: none;
        opacity: 0.35;
        background-image: 
            linear-gradient(to right, rgba(45, 45, 45, 0.035) 1px, transparent 1px),
            linear-gradient(to bottom, rgba(45, 45, 45, 0.035) 1px, transparent 1px);
        background-size: 24px 24px;
    }

    .studio-outro-card {
        max-width: 860px;
        margin: 0 auto;
        text-align: center;
    }

    .studio-outro-tag {
        padding: 6px 16px;
        border-radius: 9999px;
        background: #FFFFFF;
        border: 1px solid #E2DDD5;
        font-family: var(--font-mono), 'Space Grotesk', sans-serif;
        font-size: 0.75rem;
        font-weight: 700;
        letter-spacing: 0.08em;
        color: #5A544E;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.03);
    }

    .studio-outro-title {
        font-family: var(--font-heading), 'Space Grotesk', sans-serif;
        font-size: clamp(2rem, 4.2vw, 3.25rem);
        font-weight: 800;
        line-height: 1.18;
        color: #1F1D1B;
        letter-spacing: -0.025em;
    }

    .text-terracotta {
        color: #D85A24;
    }

    .studio-outro-desc {
        max-width: 640px;
        margin-left: auto;
        margin-right: auto;
        font-size: clamp(1rem, 1.4vw, 1.125rem);
        line-height: 1.65;
        color: #55504A;
    }

    .studio-availability-badge {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 8px 20px;
        background: #FFF8F3;
        border: 1px solid #F5D5C4;
        border-radius: 9999px;
        font-family: 'Plus Jakarta Sans', sans-serif;
        font-size: 0.84rem;
        font-weight: 600;
        color: #A83C0C;
        box-shadow: 0 4px 12px rgba(227, 107, 50, 0.08);
    }

    .pulse-indicator {
        width: 9px;
        height: 9px;
        border-radius: 50%;
        background-color: #E36B32;
        position: relative;
    }

    .pulse-indicator::after {
        content: '';
        position: absolute;
        inset: -3px;
        border-radius: 50%;
        background-color: rgba(227, 107, 50, 0.4);
        animation: pulseRing 1.8s cubic-bezier(0.24, 0, 0.38, 1) infinite;
    }

    @keyframes pulseRing {
        0% { transform: scale(0.8); opacity: 0.8; }
        100% { transform: scale(2); opacity: 0; }
    }

    @media (prefers-reduced-motion: reduce) {
        .pulse-indicator::after {
            animation: none !important;
            display: none !important;
        }
    }

    .studio-channels-wrapper {
        text-align: left;
    }

    .studio-email-card {
        background: #FFFFFF;
        border: 1.5px solid #E4DFD6;
        border-radius: 20px;
        padding: 20px 24px;
        box-shadow: 0 8px 24px rgba(36, 34, 32, 0.04);
        transition: border-color 0.25s ease, box-shadow 0.25s ease;
    }

    .studio-email-card:hover {
        border-color: #D85A24;
        box-shadow: 0 12px 32px rgba(216, 90, 36, 0.08);
    }

    .studio-channel-icon {
        width: 48px;
        height: 48px;
        border-radius: 14px;
        background: rgba(216, 90, 36, 0.1);
        color: #D85A24;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.25rem;
        flex-shrink: 0;
    }

    .studio-email-link {
        font-family: 'Fira Code', monospace;
        font-size: clamp(0.95rem, 1.8vw, 1.18rem);
        font-weight: 700;
        color: #1F1D1B;
        text-decoration: none;
        word-break: break-all;
        transition: color 0.2s ease;
    }

    .studio-email-link:hover {
        color: #D85A24;
    }

    .btn-studio-copy {
        background: #FAF6F0;
        border: 1px solid #DED7CB;
        color: #4A4540;
        font-family: 'Plus Jakarta Sans', sans-serif;
        font-weight: 600;
        font-size: 0.85rem;
        padding: 8px 16px;
        border-radius: 10px;
        transition: all 0.2s ease;
    }

    .btn-studio-copy:hover {
        background: #F0EAE0;
        color: #1F1D1B;
    }

    .btn-studio-send {
        background: #D85A24;
        color: #FFFFFF;
        font-family: 'Plus Jakarta Sans', sans-serif;
        font-weight: 700;
        font-size: 0.85rem;
        padding: 8px 18px;
        border-radius: 10px;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        transition: all 0.2s ease;
    }

    .btn-studio-send:hover {
        background: #BF4C1B;
        color: #FFFFFF;
        transform: translateY(-1px);
    }

    .studio-social-card {
        background: #FFFFFF;
        border: 1px solid #E8E2D8;
        border-radius: 16px;
        padding: 16px 20px;
        text-decoration: none;
        display: block;
        transition: all 0.22s ease;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.02);
    }

    .studio-social-card:hover {
        border-color: #D85A24;
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.06);
    }

    .studio-arrow-hover {
        font-size: 0.85rem;
        color: #9C948A;
        transition: transform 0.2s ease, color 0.2s ease;
    }

    .studio-social-card:hover .studio-arrow-hover {
        transform: translateX(4px);
        color: #D85A24;
    }

    .studio-colophon {
        border-color: #E8E2D8 !important;
    }
</style>

<script>
    function copyContactEmail(email) {
        if (!navigator.clipboard) {
            const tempInput = document.createElement('input');
            tempInput.value = email;
            document.body.appendChild(tempInput);
            tempInput.select();
            document.execCommand('copy');
            document.body.removeChild(tempInput);
        } else {
            navigator.clipboard.writeText(email);
        }

        const icon = document.getElementById('copyEmailIcon');
        const label = document.getElementById('copyEmailLabel');
        const btn = document.getElementById('copyEmailBtn');

        if (label && icon) {
            const origLabel = label.textContent;
            label.textContent = 'Tersalin!';
            icon.className = 'fa-solid fa-check text-success me-1';
            btn.classList.add('border-success');

            setTimeout(() => {
                label.textContent = origLabel;
                icon.className = 'fa-regular fa-copy me-1';
                btn.classList.remove('border-success');
            }, 2200);
        }
    }
</script>
