<!DOCTYPE html>
<html lang="id" class="notranslate">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="theme-color" content="#F7F4EE">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta name="google" content="notranslate">
    <title>Hizqia | Portfolio</title>
    <meta name="description" content="Portofolio Satu Halaman Interaktif Hizqia Chandra Wiguno - Lulusan Teknologi Rekayasa Multimedia Polimedia (IPK 3.70). Ahli Graphic Design, UI/UX, Motion Video Editing, Sertifikasi BNSP, Bootstrap, JS, dan Laravel.">
    <meta name="author" content="Hizqia Chandra Wiguno">

    <!-- Priority Resource Hints: DNS-Prefetch & Preconnect -->
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="dns-prefetch" href="//cdnjs.cloudflare.com">
    <link rel="dns-prefetch" href="//cdn.jsdelivr.net">

    <!-- Google Fonts: Outfit, Plus Jakarta Sans, Fira Code -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400&family=Fira+Code:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <!-- Custom Favicon Monogram -->
    <link rel="icon" type="image/png" href="{{ asset('images/hizqia_logo_orange.png') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/hizqia_logo_orange.png') }}">

    <!-- Custom Designer Workspace CSS -->
    <link rel="stylesheet" href="{{ asset('css/custom-designer.css') }}?v={{ time() }}">

    <!-- Inject Experiences & Projects Data Objects early & Global Filter Functions -->
    <script>
        const experiencesData = @json($experiences);
        const projectsData = @json($projects);

        function filterExperiences(category, btn) {
            document.querySelectorAll('.exp-filter-btn').forEach(function(b) { 
                b.classList.remove('active'); 
            });
            if (btn) btn.classList.add('active');

            var expCards = document.querySelectorAll('.exp-card-col');
            expCards.forEach(function(card) {
                var itemCat = card.getAttribute('data-exp-category');
                if (category === 'all' || itemCat === category) {
                    card.style.display = '';
                    card.classList.remove('animate__animated', 'animate__fadeIn');
                    void card.offsetWidth; // Reflow to re-trigger animation
                    card.classList.add('animate__animated', 'animate__fadeIn');
                } else {
                    card.style.display = 'none';
                }
            });
        }

        function filterProjects(category, btn) {
            document.querySelectorAll('.proj-filter-btn').forEach(function(b) { 
                b.classList.remove('active'); 
            });
            if (btn) btn.classList.add('active');

            var projCards = document.querySelectorAll('.proj-card-col');
            projCards.forEach(function(card) {
                var itemCat = card.getAttribute('data-proj-category');
                if (category === 'all' || itemCat === category) {
                    card.style.display = '';
                    card.classList.remove('animate__animated', 'animate__fadeIn');
                    void card.offsetWidth; // Reflow to re-trigger animation
                    card.classList.add('animate__animated', 'animate__fadeIn');
                } else {
                    card.style.display = 'none';
                }
            });
        }
    </script>
<body>

    <!-- Subtle Ambient Background System (Calm, Modern & Non-intrusive) -->
    <div class="subtle-ambient-background" aria-hidden="true">
        <div class="ambient-gradient-glow glow-top"></div>
        <div class="ambient-gradient-glow glow-bottom"></div>
        <div class="ambient-subtle-grid"></div>
        <div class="vintage-grain-overlay"></div>
    </div>

    <!-- ========================================================================== -->
    <!-- STUDIO OFFCANVAS SIDEBAR DRAWER                                            -->
    <!-- ========================================================================== -->
    <div id="sidebarBackdrop" class="sidebar-backdrop" onclick="closeStudioSidebar()"></div>

    <aside id="studioSidebar" class="studio-sidebar-drawer">
        <!-- Sidebar Header -->
        <div class="sidebar-header d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center gap-3">
                <div class="sidebar-logo-badge">
                    <img src="{{ asset('images/hizqia_logo_orange.png') }}" alt="Hizqia Monogram Logo" class="sidebar-logo-img" loading="lazy" decoding="async">
                </div>
                <div>
                    <h5 class="fw-bold mb-0 font-heading text-dark fs-6">Hizqia Portfolio</h5>
                    <small class="text-muted font-mono" style="font-size: 0.75rem;">Graphic Designer</small>
                </div>
            </div>
            <button type="button" class="sidebar-close-btn" onclick="closeStudioSidebar()" aria-label="Close Sidebar">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>

        <!-- User Profile Card inside Sidebar -->
        <div class="sidebar-user-card p-3 my-3 rounded-4 d-flex align-items-center gap-3">
            <img src="{{ $bio['photo'] }}" alt="{{ $bio['name'] }}" class="sidebar-user-avatar" loading="lazy" decoding="async">
            <div>
                <h6 class="fw-bold text-dark mb-0 fs-6">{{ $bio['nickname'] }}</h6>
                <span class="badge bg-accent text-white font-mono" style="font-size: 0.7rem;">IPK <span class="counter-number" data-target="3.76" data-decimals="2">0.00</span> Cum Laude</span>
                <small class="d-block text-muted mt-1" style="font-size: 0.72rem;">{{ $bio['education'] }}</small>
            </div>
        </div>

        <!-- Sidebar Navigation Menu Items -->
        <div class="sidebar-nav-list d-flex flex-column gap-2 my-2">
            <small class="text-muted font-mono fw-bold px-2 text-uppercase mb-1" style="font-size: 0.7rem; letter-spacing: 1px;">Menu Navigasi</small>

            <a href="#hero" class="sidebar-nav-item active" onclick="closeStudioSidebar()">
                <div class="sidebar-nav-icon">
                    <i class="fa-solid fa-paintbrush"></i>
                </div>
                <div class="sidebar-nav-text">
                    <span class="nav-title">Canvas / Biografi</span>
                    <small class="nav-desc">Artboard 01 & Bio Summary</small>
                </div>
                <i class="fa-solid fa-chevron-right nav-arrow"></i>
            </a>

            <a href="#properties" class="sidebar-nav-item" onclick="closeStudioSidebar()">
                <div class="sidebar-nav-icon">
                    <i class="fa-solid fa-sliders"></i>
                </div>
                <div class="sidebar-nav-text">
                    <span class="nav-title">Capabilities</span>
                    <small class="nav-desc">Rating Tools & Tech Stack</small>
                </div>
                <i class="fa-solid fa-chevron-right nav-arrow"></i>
            </a>

            <a href="#layers" class="sidebar-nav-item" onclick="closeStudioSidebar()">
                <div class="sidebar-nav-icon">
                    <i class="fa-solid fa-layer-group"></i>
                </div>
                <div class="sidebar-nav-text">
                    <span class="nav-title">Pengalaman</span>
                    <small class="nav-desc">6 Rekam Jejak & Workflow</small>
                </div>
                <i class="fa-solid fa-chevron-right nav-arrow"></i>
            </a>

            <a href="#certificates" class="sidebar-nav-item" onclick="closeStudioSidebar()">
                <div class="sidebar-nav-icon">
                    <i class="fa-solid fa-award"></i>
                </div>
                <div class="sidebar-nav-text">
                    <span class="nav-title">Sertifikasi</span>
                    <small class="nav-desc">Junior Graphic Designer & Kominfo</small>
                </div>
                <i class="fa-solid fa-chevron-right nav-arrow"></i>
            </a>

            <a href="#assets" class="sidebar-nav-item" onclick="closeStudioSidebar()">
                <div class="sidebar-nav-icon">
                    <i class="fa-solid fa-cubes"></i>
                </div>
                <div class="sidebar-nav-text">
                    <span class="nav-title">Portofolio / Karya</span>
                    <small class="nav-desc">Galeri Karya & Interactive Demo</small>
                </div>
                <i class="fa-solid fa-chevron-right nav-arrow"></i>
            </a>
        </div>

        <!-- Sidebar Footer Action CTA -->
        <div class="sidebar-footer mt-auto pt-3 border-top">
            <a href="#contact" class="btn btn-accent w-100 py-3 rounded-4 fw-bold font-heading d-flex align-items-center justify-content-center gap-2" onclick="closeStudioSidebar()">
                <i class="fa-solid fa-paper-plane"></i> Hubungi / Kontak Hizqia
            </a>
            <div class="text-center mt-3">
                <small class="text-muted font-mono" style="font-size: 0.72rem;">© {{ date('Y') }} Hizqia Chandra Wiguno</small>
            </div>
        </div>
    </aside>

    <!-- ========================================================================== -->
    <!-- FLOATING STUDIO NAVBAR                                                     -->
    <!-- ========================================================================== -->
    <nav class="studio-navbar d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center gap-2">
            <button id="sidebarToggleBtn" class="sidebar-toggle-btn d-lg-none" onclick="openStudioSidebar()" aria-label="Buka Sidebar Navigasi">
                <i class="fa-solid fa-bars-staggered"></i>
            </button>
            <a href="#hero" class="text-decoration-none d-inline-flex align-items-center">
                <img src="{{ asset('images/hizqia_logo_orange.png') }}" alt="Hizqia Monogram Logo" class="nav-logo-icon" loading="eager" fetchpriority="high" decoding="sync">
            </a>
        </div>
        <div class="d-none d-lg-flex align-items-center gap-2">
            <a href="#hero" class="nav-link-custom active"><i class="fa-solid fa-paintbrush me-1"></i> Canvas</a>
            <a href="#properties" class="nav-link-custom"><i class="fa-solid fa-sliders me-1"></i> Properties</a>
            <a href="#layers" class="nav-link-custom"><i class="fa-solid fa-layer-group me-1"></i> Layers</a>
            <a href="#certificates" class="nav-link-custom"><i class="fa-solid fa-award me-1"></i> Sertifikasi</a>
            <a href="#assets" class="nav-link-custom"><i class="fa-solid fa-cubes me-1"></i> Assets</a>
        </div>
        <a href="#contact" class="btn btn-accent btn-sm px-3 py-2 font-mono d-none d-lg-inline-flex align-items-center"><i class="fa-solid fa-paper-plane me-1"></i> Kontak</a>
    </nav>

    <!-- ========================================================================== -->
    <!-- VERTICAL JOURNEY DOT PAGINATION INDICATOR (DESKTOP FULL PAGE NAV)          -->
    <!-- ========================================================================== -->
    <div id="journeyDotNav" class="journey-dot-pagination d-none d-lg-flex flex-column gap-3">
        <a href="#hero" class="dot-item active" title="Artboard 01: Hero Canvas">
            <span class="dot-tooltip font-mono">01. Canvas</span>
            <span class="dot-circle"></span>
        </a>
        <a href="#properties" class="dot-item" title="Artboard 02: Software Skills">
            <span class="dot-tooltip font-mono">02. Properties</span>
            <span class="dot-circle"></span>
        </a>
        <a href="#layers" class="dot-item" title="Artboard 03: Work Experience">
            <span class="dot-tooltip font-mono">03. Layers</span>
            <span class="dot-circle"></span>
        </a>
        <a href="#certificates" class="dot-item" title="Artboard 04: BNSP Certificates">
            <span class="dot-tooltip font-mono">04. Sertifikasi</span>
            <span class="dot-circle"></span>
        </a>
        <a href="#assets" class="dot-item" title="Artboard 05: Assets & Projects">
            <span class="dot-tooltip font-mono">05. Assets</span>
            <span class="dot-circle"></span>
        </a>
        <a href="#contact" class="dot-item" title="Artboard 06: Connect & Collaborate">
            <span class="dot-tooltip font-mono">06. Connect</span>
            <span class="dot-circle"></span>
        </a>
    </div>

    <!-- ========================================================================== -->
    <!-- SECTION 1: HERO / CANVAS AREA                                              -->
    <!-- ========================================================================== -->
    <section id="hero" class="hero-section">
        <div class="container">
            <div class="artboard-canvas grid-overlay reveal-on-scroll" id="artboardCanvasHero">
                
                <!-- Vector Corner Handles -->
                <div class="vector-handle handle-tl"></div>
                <div class="vector-handle handle-tr"></div>
                <div class="vector-handle handle-bl"></div>
                <div class="vector-handle handle-br"></div>

                <!-- Floating Decorative Looping Graphics -->
                <div class="hero-loop-graphic hero-graphic-sparkle-1" title="Creative Sparkle">
                    <svg viewBox="0 0 24 24" width="26" height="26" fill="currentColor">
                        <path d="M12 0C12 6.627 6.627 12 0 12C6.627 12 12 17.373 12 24C12 17.373 17.373 12 24 12C17.373 12 12 6.627 12 0Z"/>
                    </svg>
                </div>
                <div class="hero-loop-graphic hero-graphic-sparkle-2" title="Design Vector">
                    <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor">
                        <path d="M12 0C12 6.627 6.627 12 0 12C6.627 12 12 17.373 12 24C12 17.373 17.373 12 24 12C17.373 12 12 6.627 12 0Z"/>
                    </svg>
                </div>

                <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="artboard-header-tag mb-0">
                        <i class="fa-solid fa-crop-simple"></i> Portfolio
                    </div>
                </div>

                <div class="row align-items-center gy-4 gy-lg-5">
                    <div class="col-lg-7">
                        <h1 class="hero-title mb-3 position-relative">
                            Hi! I'm <br class="d-sm-none">
                            <span class="text-accent position-relative d-inline-block">
                                <span id="typewriterName">Hizqia Chandra Wiguno</span>
                                <svg class="hero-underline-vector" viewBox="0 0 240 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3 9C60 3 180 3 237 9" stroke="currentColor" stroke-width="4" stroke-linecap="round"/>
                                </svg>
                            </span><span class="typewriter-cursor">|</span>
                        </h1>
                        
                        <!-- Catchy Clickbait Bio Summary -->
                        <p class="lead fw-semibold text-dark mb-4 fs-5" style="max-width: 640px; line-height: 1.5;">
                            {{ $bio['catchy_summary'] }}
                        </p>

                        <div class="d-flex flex-wrap gap-2 gap-sm-3 mb-3">
                            <a href="#assets" class="btn btn-accent">
                                <i class="fa-solid fa-eye me-1"></i> Lihat Artboard Proyek
                            </a>
                            <a href="#certificates" class="btn btn-outline-studio">
                                <i class="fa-solid fa-award me-1"></i> Sertifikat BNSP
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-5 text-center">
                        <div class="avatar-artboard-wrapper">
                            <!-- Orbiting Looping Halo Vector Background -->
                            <div class="avatar-orbit-ring avatar-orbit-1"></div>
                            <div class="avatar-orbit-ring avatar-orbit-2"></div>

                            <img src="{{ $bio['photo'] }}" alt="{{ $bio['name'] }}" class="avatar-artboard img-fluid position-relative" style="z-index: 2;" loading="eager" fetchpriority="high" decoding="async">
                            
                            <!-- 2 Floating Studio Badges Around Avatar -->
                            <div class="floating-badge badge-gpa">
                                <i class="fa-solid fa-award text-accent fs-5"></i>
                                <div>
                                    <div class="font-mono text-accent">IPK <span class="counter-number" data-target="3.76" data-decimals="2">0.00</span></div>
                                    <small class="text-muted">Cum Laude</small>
                                </div>
                            </div>

                            <div class="floating-badge badge-major">
                                <i class="fa-solid fa-graduation-cap text-accent fs-5"></i>
                                <div>
                                    <div class="font-mono text-dark">Fresh Graduate</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- ========================================================================== -->
    <!-- SECTION 2: PANEL PROPERTIES (HARD SKILLS & SOFT SKILLS BENTO GRID)          -->
    <!-- ========================================================================== -->
    <section id="properties" class="section-spacing">
        <div class="container">
            
            <div class="section-header text-center max-w-700 mx-auto reveal-on-scroll">
                <div class="section-tag justify-content-center">
                    <i class="fa-solid fa-sliders"></i> Capabilities
                </div>
                <h2 class="display-6 fw-bold">Hard Skill & Soft Skill</h2>
                <p class="text-muted">Kombinasi keahlian teknis (Hard Skills software/coding) dan kemampuan interpersonal (Soft Skills) pendukung kualitas karya.</p>
            </div>

            <!-- Modern Gen-Z Dual Tab Mode Toggle Switcher -->
            <div class="d-flex justify-content-center mb-4 reveal-on-scroll">
                <div class="skill-tab-switcher p-1 rounded-pill bg-light border d-inline-flex gap-1">
                    <button type="button" class="btn btn-sm rounded-pill font-mono px-4 py-2 skill-tab-btn active" data-tab="hard-skills" onclick="switchSkillTab('hard-skills')">
                        <i class="fa-solid fa-bolt me-1 text-accent"></i> Hard Skills
                    </button>
                    <button type="button" class="btn btn-sm rounded-pill font-mono px-4 py-2 skill-tab-btn" data-tab="soft-skills" onclick="switchSkillTab('soft-skills')">
                        <i class="fa-solid fa-brain me-1 text-accent"></i> Soft Skills
                    </button>
                </div>
            </div>

            <!-- HARD SKILLS VIEW (SOFTWARE & WEB STACK) -->
            <div id="hardSkillsView" class="skill-view-tab active">
                <!-- Software Skills Grid -->
                <div class="row g-4 mb-4">
                    @foreach($skills['software'] as $skill)
                    <div class="col-md-6 col-lg-4 skill-card-item reveal-on-scroll" data-category="{{ $skill['category'] }}">
                        <div class="skill-card">
                            <div class="d-flex justify-content-between align-items-start mb-3">
                                <div class="skill-icon-badge" style="background: {{ $skill['color'] }}14; color: {{ $skill['color'] }}; border: 1px solid {{ $skill['color'] }}28;">
                                    <i class="{{ $skill['icon'] }}"></i>
                                </div>
                                <div class="text-end">
                                    <span class="badge bg-light border text-muted font-mono mb-1">{{ $skill['code'] }}</span>
                                    <div class="rating-score text-accent font-mono fw-bold"><span class="counter-number" data-target="{{ $skill['rating'] }}" data-decimals="1">0.0</span> / 10.0</div>
                                </div>
                            </div>
                            <h4 class="h5 fw-bold text-dark mb-1">{{ $skill['name'] }}</h4>
                            <small class="text-accent font-mono d-block mb-2 fw-semibold" style="font-size: 0.82rem;">{{ $skill['category'] }}</small>
                            <p class="text-muted small mb-3">{{ $skill['desc'] }}</p>
                            
                            <!-- Progress Bar with Animation -->
                            <div class="progress-bar-custom">
                                <div class="progress-fill" data-progress="{{ ($skill['rating'] / 10) * 100 }}" style="width: 0%;"></div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- Web Stack Skills Grid -->
                <div class="row g-4">
                    <div class="col-12 text-center mb-2 reveal-on-scroll">
                        <h3 class="h4 fw-bold font-heading text-dark"><i class="fa-solid fa-code text-accent me-2"></i> Web & Development Stack</h3>
                    </div>
                    @foreach($skills['web'] as $web)
                    <div class="col-md-6 col-lg-3 skill-card-item reveal-on-scroll" data-category="Web Stack">
                        <div class="skill-card">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div class="skill-icon-badge" style="background: {{ $web['color'] }}14; color: {{ $web['color'] }}; border: 1px solid {{ $web['color'] }}28; width: 40px; height: 40px; font-size: 1.1rem; margin-bottom: 0;">
                                    <i class="{{ $web['icon'] }}"></i>
                                </div>
                                <span class="rating-score fs-6 text-accent font-mono fw-bold"><span class="counter-number" data-target="{{ $web['rating'] }}" data-decimals="1">0.0</span> / 10</span>
                            </div>
                            <h5 class="fw-bold fs-6 text-dark mb-1">{{ $web['name'] }}</h5>
                            <small class="text-accent font-mono d-block mb-2 fw-semibold" style="font-size: 0.75rem;">{{ $web['category'] }}</small>
                            <p class="text-muted small mb-2">{{ $web['desc'] }}</p>
                            <div class="progress-bar-custom">
                                <div class="progress-fill" data-progress="{{ ($web['rating'] / 10) * 100 }}" style="width: 0%;"></div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- SOFT SKILLS BENTO GRID VIEW (GEN-Z CREATIVE STUDIO STYLE) -->
            <div id="softSkillsView" class="skill-view-tab d-none">
                <div class="row g-4">
                    @foreach($skills['soft'] as $soft)
                    <div class="col-md-6 col-lg-4 reveal-on-scroll">
                        <div class="soft-skill-bento-card">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="soft-tag-pill font-mono" style="color: {{ $soft['color'] }}; background: {{ $soft['color'] }}14; border: 1px solid {{ $soft['color'] }}28;">
                                    {{ $soft['tag'] }}
                                </span>
                                <span class="badge bg-white border text-muted font-mono shadow-2xs" style="font-size: 0.72rem;">
                                    <i class="fa-solid fa-sparkles me-1 text-accent"></i> {{ $soft['badge'] }}
                                </span>
                            </div>
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="soft-icon-box" style="background: {{ $soft['color'] }}14; color: {{ $soft['color'] }}; border: 1px solid {{ $soft['color'] }}28;">
                                    <i class="{{ $soft['icon'] }}"></i>
                                </div>
                                <h4 class="h5 fw-bold text-dark mb-0 lh-sm">{{ $soft['name'] }}</h4>
                            </div>
                            <p class="text-muted small mb-0 lh-relaxed">{{ $soft['desc'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>
    </section>


    <!-- ========================================================================== -->
    <!-- RUNNING TICKER MARQUEE SLIDER (BETWEEN SKILLS & CAREER)                    -->
    <!-- ========================================================================== -->
    <div class="marquee-ticker-banner" aria-label="Creative Roles Marquee Slider">
        <div class="marquee-ticker-body">
            <div class="marquee-ticker-track">
                <!-- Group 1 -->
                <div class="marquee-ticker-group">
                    <div class="marquee-ticker-item">
                        <span class="text-white-word">Motion Designer</span>
                        <svg class="marquee-sparkle-icon" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 0C12 6.627 6.627 12 0 12C6.627 12 12 17.373 12 24C12 17.373 17.373 12 24 12C17.373 12 12 6.627 12 0Z"/>
                        </svg>
                    </div>
                    <div class="marquee-ticker-item">
                        <span class="text-white-word">Creative Multimedia</span>
                        <svg class="marquee-sparkle-icon" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 0C12 6.627 6.627 12 0 12C6.627 12 12 17.373 12 24C12 17.373 17.373 12 24 12C17.373 12 12 6.627 12 0Z"/>
                        </svg>
                    </div>
                    <div class="marquee-ticker-item">
                        <span class="text-white-word">Graphic Designer</span>
                        <svg class="marquee-sparkle-icon" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 0C12 6.627 6.627 12 0 12C6.627 12 12 17.373 12 24C12 17.373 17.373 12 24 12C17.373 12 12 6.627 12 0Z"/>
                        </svg>
                    </div>
                    <div class="marquee-ticker-item">
                        <span class="text-white-word">Graphic Designer</span>
                        <svg class="marquee-sparkle-icon" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 0C12 6.627 6.627 12 0 12C6.627 12 12 17.373 12 24C12 17.373 17.373 12 24 12C17.373 12 12 6.627 12 0Z"/>
                        </svg>
                    </div>
                    <div class="marquee-ticker-item">
                        <span class="text-white-word">UI/UX Designer</span>
                        <svg class="marquee-sparkle-icon" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 0C12 6.627 6.627 12 0 12C6.627 12 12 17.373 12 24C12 17.373 17.373 12 24 12C17.373 12 12 6.627 12 0Z"/>
                        </svg>
                    </div>
                    <div class="marquee-ticker-item">
                        <span class="text-white-word">Graphic Designer</span>
                        <svg class="marquee-sparkle-icon" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 0C12 6.627 6.627 12 0 12C6.627 12 12 17.373 12 24C12 17.373 17.373 12 24 12C17.373 12 12 6.627 12 0Z"/>
                        </svg>
                    </div>
                </div>

                <!-- Group 2 (Duplicate for Seamless Infinite Loop) -->
                <div class="marquee-ticker-group" aria-hidden="true">
                    <div class="marquee-ticker-item">
                        <span class="text-white-word">Motion Designer</span>
                        <svg class="marquee-sparkle-icon" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 0C12 6.627 6.627 12 0 12C6.627 12 12 17.373 12 24C12 17.373 17.373 12 24 12C17.373 12 12 6.627 12 0Z"/>
                        </svg>
                    </div>
                    <div class="marquee-ticker-item">
                        <span class="text-white-word">Creative Multimedia</span>
                        <svg class="marquee-sparkle-icon" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 0C12 6.627 6.627 12 0 12C6.627 12 12 17.373 12 24C12 17.373 17.373 12 24 12C17.373 12 12 6.627 12 0Z"/>
                        </svg>
                    </div>
                    <div class="marquee-ticker-item">
                        <span class="text-white-word">Graphic Designer</span>
                        <svg class="marquee-sparkle-icon" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 0C12 6.627 6.627 12 0 12C6.627 12 12 17.373 12 24C12 17.373 17.373 12 24 12C17.373 12 12 6.627 12 0Z"/>
                        </svg>
                    </div>
                    <div class="marquee-ticker-item">
                        <span class="text-white-word">Graphic Designer</span>
                        <svg class="marquee-sparkle-icon" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 0C12 6.627 6.627 12 0 12C6.627 12 12 17.373 12 24C12 17.373 17.373 12 24 12C17.373 12 12 6.627 12 0Z"/>
                        </svg>
                    </div>
                    <div class="marquee-ticker-item">
                        <span class="text-white-word">UI/UX Designer</span>
                        <svg class="marquee-sparkle-icon" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 0C12 6.627 6.627 12 0 12C6.627 12 12 17.373 12 24C12 17.373 17.373 12 24 12C17.373 12 12 6.627 12 0Z"/>
                        </svg>
                    </div>
                    <div class="marquee-ticker-item">
                        <span class="text-white-word">Graphic Designer</span>
                        <svg class="marquee-sparkle-icon" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 0C12 6.627 6.627 12 0 12C6.627 12 12 17.373 12 24C12 17.373 17.373 12 24 12C17.373 12 12 6.627 12 0Z"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- ========================================================================== -->
    <!-- SECTION 3: CAREER & LEADERSHIP JOURNEY (MAGANG & ORGANISASI)               -->
    <!-- ========================================================================== -->
    <section id="layers" class="section-spacing bg-light">

        <div class="container">
            
            <div class="section-header text-center max-w-700 mx-auto reveal-on-scroll">
                <div class="section-tag justify-content-center">
                    <i class="fa-solid fa-layer-group"></i> CAREER & LEADERSHIP JOURNEY
                </div>
                <h2 class="display-6 fw-bold">Career & Leadership Journey</h2>
                <p class="text-muted">Rekam jejak pengalaman profesional di dunia industri korporat serta dedikasi kepemimpinan dalam organisasi.</p>
            </div>

            <!-- Modern Category Filter Switcher -->
            <div class="d-flex justify-content-center mb-4 reveal-on-scroll">
                <div class="skill-tab-switcher p-1 rounded-pill bg-white border shadow-2xs d-inline-flex gap-1">
                    <button type="button" class="btn btn-sm rounded-pill font-mono px-3 py-2 skill-tab-btn exp-filter-btn active" onclick="filterExperiences('all', this)">
                        <i class="fa-solid fa-bolt me-1 text-accent"></i> All ({{ count($experiences) }})
                    </button>
                    <button type="button" class="btn btn-sm rounded-pill font-mono px-3 py-2 skill-tab-btn exp-filter-btn" onclick="filterExperiences('Magang', this)">
                        <i class="fa-solid fa-briefcase me-1 text-accent"></i> Intern (3)
                    </button>
                    <button type="button" class="btn btn-sm rounded-pill font-mono px-3 py-2 skill-tab-btn exp-filter-btn" onclick="filterExperiences('Organisasi', this)">
                        <i class="fa-solid fa-crown me-1 text-accent"></i> Organization (2)
                    </button>
                </div>
            </div>

            <!-- Card Grid View (3 Columns Desktop / 2 Tablet / 1 Mobile) -->
            <div class="row g-4" id="experiencesGrid">
                @foreach($experiences as $exp)
                <div class="col-md-6 col-lg-4 exp-card-col reveal-on-scroll" data-exp-category="{{ $exp['category'] }}">
                    <div class="exp-card exp-card-minimal" style="--exp-accent: {{ $exp['accent'] }};">
                        <div>
                            <!-- Top: Icon Emblem + Year Badge -->
                            <div class="d-flex justify-content-between align-items-start mb-3">
                                <div class="exp-icon-box" style="background: {{ $exp['accent'] }}15; border-color: {{ $exp['accent'] }}30; color: {{ $exp['accent'] }};">
                                    <i class="{{ $exp['icon'] }}"></i>
                                </div>
                                <div class="d-flex align-items-center gap-1">
                                    @if($exp['is_active'])
                                    <span class="badge bg-success-subtle text-success border border-success-subtle font-mono" style="font-size: 0.72rem; border-radius: 20px;">
                                        <i class="fa-solid fa-circle-dot me-1"></i> Active
                                    </span>
                                    @endif
                                    <span class="badge bg-light border text-muted font-mono" style="font-size: 0.75rem;">
                                        {{ $exp['period'] }}
                                    </span>
                                </div>
                            </div>

                            <!-- Middle: Layer Tag, Company Title & Role -->
                            <div class="mb-3">
                                <div class="d-flex align-items-center gap-2 mb-1">
                                    <span class="layer-tag" style="background: {{ $exp['accent'] }}15; color: {{ $exp['accent'] }};">LAYER {{ $exp['layer_num'] }}</span>
                                    <span class="text-muted font-mono small">{{ $exp['badge'] }}</span>
                                </div>
                                <h4 class="h5 fw-bold text-dark mb-1 lh-sm">{{ $exp['title'] }}</h4>
                                <div class="font-mono small fw-bold" style="color: {{ $exp['accent'] }};">
                                    {{ $exp['role'] }}
                                </div>
                            </div>
                        </div>
                        
                        <!-- Bottom: Clean Action Button -->
                        <button type="button" 
                                class="btn-inspect-exp w-100 mt-auto justify-content-between" 
                                onclick="openExpModal('{{ $exp['id'] }}')">
                            <span>{{ !empty($exp['details']['gallery']) ? 'Lihat Detail & Galeri' : 'Lihat Detail Organisasi' }}</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </section>


    <!-- ========================================================================== -->
    <!-- RUNNING TICKER MARQUEE SLIDER (BETWEEN CAREER & CERTIFICATION)             -->
    <!-- ========================================================================== -->
    <div class="marquee-ticker-banner" aria-label="Creative Roles Marquee Slider">
        <div class="marquee-ticker-body">
            <div class="marquee-ticker-track">
                <!-- Group 1 -->
                <div class="marquee-ticker-group">
                    <div class="marquee-ticker-item">
                        <span class="text-white-word">Motion Designer</span>
                        <svg class="marquee-sparkle-icon" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 0C12 6.627 6.627 12 0 12C6.627 12 12 17.373 12 24C12 17.373 17.373 12 24 12C17.373 12 12 6.627 12 0Z"/>
                        </svg>
                    </div>
                    <div class="marquee-ticker-item">
                        <span class="text-white-word">Creative Multimedia</span>
                        <svg class="marquee-sparkle-icon" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 0C12 6.627 6.627 12 0 12C6.627 12 12 17.373 12 24C12 17.373 17.373 12 24 12C17.373 12 12 6.627 12 0Z"/>
                        </svg>
                    </div>
                    <div class="marquee-ticker-item">
                        <span class="text-white-word">Graphic Designer</span>
                        <svg class="marquee-sparkle-icon" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 0C12 6.627 6.627 12 0 12C6.627 12 12 17.373 12 24C12 17.373 17.373 12 24 12C17.373 12 12 6.627 12 0Z"/>
                        </svg>
                    </div>
                    <div class="marquee-ticker-item">
                        <span class="text-white-word">Graphic Designer</span>
                        <svg class="marquee-sparkle-icon" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 0C12 6.627 6.627 12 0 12C6.627 12 12 17.373 12 24C12 17.373 17.373 12 24 12C17.373 12 12 6.627 12 0Z"/>
                        </svg>
                    </div>
                    <div class="marquee-ticker-item">
                        <span class="text-white-word">UI/UX Designer</span>
                        <svg class="marquee-sparkle-icon" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 0C12 6.627 6.627 12 0 12C6.627 12 12 17.373 12 24C12 17.373 17.373 12 24 12C17.373 12 12 6.627 12 0Z"/>
                        </svg>
                    </div>
                    <div class="marquee-ticker-item">
                        <span class="text-white-word">Graphic Designer</span>
                        <svg class="marquee-sparkle-icon" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 0C12 6.627 6.627 12 0 12C6.627 12 12 17.373 12 24C12 17.373 17.373 12 24 12C17.373 12 12 6.627 12 0Z"/>
                        </svg>
                    </div>
                </div>

                <!-- Group 2 (Duplicate for Seamless Infinite Loop) -->
                <div class="marquee-ticker-group" aria-hidden="true">
                    <div class="marquee-ticker-item">
                        <span class="text-white-word">Motion Designer</span>
                        <svg class="marquee-sparkle-icon" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 0C12 6.627 6.627 12 0 12C6.627 12 12 17.373 12 24C12 17.373 17.373 12 24 12C17.373 12 12 6.627 12 0Z"/>
                        </svg>
                    </div>
                    <div class="marquee-ticker-item">
                        <span class="text-white-word">Creative Multimedia</span>
                        <svg class="marquee-sparkle-icon" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 0C12 6.627 6.627 12 0 12C6.627 12 12 17.373 12 24C12 17.373 17.373 12 24 12C17.373 12 12 6.627 12 0Z"/>
                        </svg>
                    </div>
                    <div class="marquee-ticker-item">
                        <span class="text-white-word">Graphic Designer</span>
                        <svg class="marquee-sparkle-icon" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 0C12 6.627 6.627 12 0 12C6.627 12 12 17.373 12 24C12 17.373 17.373 12 24 12C17.373 12 12 6.627 12 0Z"/>
                        </svg>
                    </div>
                    <div class="marquee-ticker-item">
                        <span class="text-white-word">Graphic Designer</span>
                        <svg class="marquee-sparkle-icon" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 0C12 6.627 6.627 12 0 12C6.627 12 12 17.373 12 24C12 17.373 17.373 12 24 12C17.373 12 12 6.627 12 0Z"/>
                        </svg>
                    </div>
                    <div class="marquee-ticker-item">
                        <span class="text-white-word">UI/UX Designer</span>
                        <svg class="marquee-sparkle-icon" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 0C12 6.627 6.627 12 0 12C6.627 12 12 17.373 12 24C12 17.373 17.373 12 24 12C17.373 12 12 6.627 12 0Z"/>
                        </svg>
                    </div>
                    <div class="marquee-ticker-item">
                        <span class="text-white-word">Graphic Designer</span>
                        <svg class="marquee-sparkle-icon" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 0C12 6.627 6.627 12 0 12C6.627 12 12 17.373 12 24C12 17.373 17.373 12 24 12C17.373 12 12 6.627 12 0Z"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- ========================================================================== -->
    <!-- SECTION 4: SERTIFIKASI PROFESI BNSP & AKREDITASI                          -->
    <!-- ========================================================================== -->
    <section id="certificates" class="section-spacing">
        <div class="container">
            
            <div class="section-header text-center max-w-700 mx-auto reveal-on-scroll">
                <div class="section-tag justify-content-center">
                    <i class="fa-solid fa-award"></i> CERTIFICATION & ACCREDITATION
                </div>
                <h2 class="display-6 fw-bold">Professional Certification & Training</h2>
                <p class="text-muted">Lisensi Kompetensi Profesi Resmi dari Badan Nasional Sertifikasi Profesi (BNSP) Republik Indonesia & Pelatihan Terverifikasi.</p>
            </div>

            <div class="row g-4">
                @foreach($certificates as $cert)
                <div class="col-lg-6 reveal-on-scroll">
                    <div class="cert-showcase-card" style="--cert-accent: {{ $cert['color'] }};">
                        <div class="d-flex flex-column flex-sm-row align-items-start gap-3 mb-3">
                            <!-- Glowing Icon Emblem -->
                            <div class="cert-icon-emblem">
                                <i class="{{ $cert['icon'] }}"></i>
                            </div>
                            
                            <div class="flex-grow-1 w-100">
                                <!-- Header Badge & Date -->
                                <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-2">
                                    <span class="cert-badge-tag font-mono">
                                        <i class="fa-solid fa-shield-halved me-1"></i> {{ $cert['badge'] }}
                                    </span>
                                    <span class="badge bg-light border text-muted font-mono" style="font-size: 0.76rem; padding: 5px 12px; border-radius: 20px;">
                                        <i class="fa-regular fa-calendar me-1"></i> {{ $cert['year'] }}
                                    </span>
                                </div>
                                
                                <!-- Title & Registration Code -->
                                <h3 class="h5 fw-bold text-dark mb-1">{{ $cert['title'] }}</h3>
                                <div class="font-mono text-accent small fw-bold mb-2">
                                    <i class="fa-solid fa-id-card me-1"></i> No. Reg: {{ $cert['reg_num'] }}
                                </div>
                            </div>
                        </div>

                        <!-- Description -->
                        <p class="text-muted small mb-3 lh-relaxed" style="font-size: 0.88rem;">
                            {{ $cert['desc'] }}
                        </p>

                        <!-- Competencies Checklist -->
                        <div class="mb-4 p-3 bg-light rounded-4 border">
                            <small class="text-dark font-mono fw-bold d-block mb-2">
                                <i class="fa-solid fa-check-double text-accent me-1"></i> Unit Kompetensi / Materi Teruji:
                            </small>
                            <div class="cert-competencies-list d-flex flex-column gap-2">
                                @foreach($cert['competencies'] as $comp)
                                <div class="cert-comp-item">
                                    <i class="fa-solid fa-circle-check text-accent flex-shrink-0 mt-1"></i>
                                    <span>{{ preg_replace('/^[M\.\d-]+\s*/', '', $comp) }}</span>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <!-- Footer Issuer & Verification PDF CTA Button -->
                        <div class="d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center gap-3 pt-3 border-top mt-auto">
                            <span class="font-mono small text-muted d-inline-flex align-items-center gap-1" style="font-size: 0.78rem;">
                                <i class="fa-solid fa-building-columns text-accent me-1"></i> {{ $cert['issuer'] }}
                            </span>
                            <a href="{{ $cert['pdf_url'] }}" target="_blank" class="btn btn-sm btn-outline-studio font-mono rounded-pill px-3 px-sm-4 py-2 d-inline-flex align-items-center justify-content-center gap-2 w-100 w-sm-auto text-nowrap">
                                <i class="fa-solid fa-file-pdf text-accent"></i> Lihat Dokumen PDF
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </section>


    <!-- ========================================================================== -->
    <!-- SECTION 5: ASSETS LIBRARY (CREATIVE WORKSPACE & MULTIMEDIA SHOWCASE)       -->
    <!-- ========================================================================== -->
    <section id="assets" class="section-spacing bg-light">
        <div class="container">
            
            <div class="section-header text-center max-w-700 mx-auto reveal-on-scroll">
                <div class="section-tag justify-content-center">
                    <i class="fa-solid fa-cubes"></i> CREATIVE ASSETS & MULTIMEDIA
                </div>
                <h2 class="display-6 fw-bold">Creative Works & Multimedia Showcase</h2>
                <p class="text-muted">Koleksi karya terpadu mencakup Graphic & Social Media Design, Video Editing sinematik teruji, serta platform interaktif UI/UX modern.</p>
            </div>

            <!-- Multi-Category Creative Filter Tabs -->
            <div class="d-flex justify-content-center mb-4 reveal-on-scroll">
                <div class="skill-tab-switcher p-1 rounded-pill bg-white border shadow-2xs d-inline-flex flex-wrap gap-1 justify-content-center">
                    <button type="button" class="btn btn-sm rounded-pill font-mono px-3 py-2 skill-tab-btn proj-filter-btn active" onclick="filterProjects('all', this)">
                        <i class="fa-solid fa-sparkles me-1 text-accent"></i> Semua Karya ({{ count($projects) }})
                    </button>
                    <button type="button" class="btn btn-sm rounded-pill font-mono px-3 py-2 skill-tab-btn proj-filter-btn" onclick="filterProjects('graphic', this)">
                        <i class="fa-solid fa-palette me-1" style="color: #EC4899;"></i> Graphic Design (2)
                    </button>
                    <button type="button" class="btn btn-sm rounded-pill font-mono px-3 py-2 skill-tab-btn proj-filter-btn" onclick="filterProjects('video', this)">
                        <i class="fa-solid fa-clapperboard me-1" style="color: #3B82F6;"></i> Video Editing (2)
                    </button>
                    <button type="button" class="btn btn-sm rounded-pill font-mono px-3 py-2 skill-tab-btn proj-filter-btn" onclick="filterProjects('uiux', this)">
                        <i class="fa-solid fa-laptop-code me-1" style="color: #F59E0B;"></i> UI/UX & Web (2)
                    </button>
                </div>
            </div>

            <div class="row g-4" id="projectsGrid">
                @foreach($projects as $project)
                <div class="col-md-6 col-lg-6 proj-card-col reveal-on-scroll" data-proj-category="{{ $project['category'] }}">
                    <div class="project-card h-100 d-flex flex-column" style="--proj-accent: {{ $project['accent'] }};">
                        <span class="project-badge-tag" style="background: {{ $project['accent'] }} !important; color: #FFFFFF !important;">
                            @if($project['category'] === 'video')
                                <i class="fa-solid fa-play me-1"></i>
                            @elseif($project['category'] === 'graphic')
                                <i class="fa-solid fa-eye me-1"></i>
                            @else
                                <i class="fa-solid fa-code me-1"></i>
                            @endif
                            {{ $project['badge'] }}
                        </span>
                        
                        <!-- Image Wrapper with Click Trigger -->
                        <div class="project-img-wrapper cursor-pointer position-relative" 
                             @if(($project['action_type'] ?? '') === 'video')
                                onclick="openVideoModal('{{ $project['id'] }}')" title="Klik untuk putar video"
                             @elseif(($project['action_type'] ?? '') === 'lightbox')
                                onclick="openImageLightbox('{{ $project['image'] }}', '{{ addslashes($project['title']) }}', '{{ addslashes($project['short_desc']) }}', '{{ addslashes($project['category_label']) }}')" title="Klik untuk perbesar HD"
                             @else
                                onclick="openProjectModal('{{ ltrim($project['modal_target'], '#') }}')" title="Klik untuk demo"
                             @endif>
                            <img src="{{ $project['image'] }}" alt="{{ $project['title'] }}" class="project-img" loading="lazy" decoding="async">
                            
                            @if(($project['action_type'] ?? '') === 'video')
                            <div class="video-play-overlay-hint">
                                <div class="video-play-pulse-btn">
                                    <i class="fa-solid fa-play"></i>
                                </div>
                                <span class="badge bg-dark bg-opacity-75 text-white font-mono px-2 py-1 mt-2" style="font-size: 0.7rem;">
                                    <i class="fa-regular fa-clock me-1"></i> {{ $project['video_duration'] ?? '03:00' }}
                                </span>
                            </div>
                            @endif
                        </div>

                        <div class="p-4 d-flex flex-column justify-content-between flex-grow-1">
                            <div>
                                <span class="font-mono small d-block mb-1 fw-bold" style="color: {{ $project['accent'] }};">
                                    {{ $project['category_label'] }}
                                </span>
                                <h3 class="h5 fw-bold mb-2">{{ $project['title'] }}</h3>
                                <p class="text-muted small mb-3 lh-relaxed">{{ $project['short_desc'] }}</p>
                            </div>

                            <div class="pt-2 mt-auto">
                                <!-- Trigger Buttons according to Action Type -->
                                @if(($project['action_type'] ?? '') === 'video')
                                    <button type="button" class="btn btn-accent btn-sm font-mono mb-3 w-100 justify-content-center" onclick="openVideoModal('{{ $project['id'] }}')" style="background: {{ $project['accent'] }} !important; border-color: {{ $project['accent'] }} !important;">
                                        <i class="fa-solid {{ $project['btn_icon'] }} me-1"></i> {{ $project['btn_text'] }}
                                    </button>
                                @elseif(($project['action_type'] ?? '') === 'lightbox')
                                    <button type="button" class="btn btn-accent btn-sm font-mono mb-3 w-100 justify-content-center" onclick="openImageLightbox('{{ $project['image'] }}', '{{ addslashes($project['title']) }}', '{{ addslashes($project['short_desc']) }}', '{{ addslashes($project['category_label']) }}')" style="background: {{ $project['accent'] }} !important; border-color: {{ $project['accent'] }} !important;">
                                        <i class="fa-solid {{ $project['btn_icon'] }} me-1"></i> {{ $project['btn_text'] }}
                                    </button>
                                @else
                                    <button type="button" class="btn btn-accent btn-sm font-mono mb-3 w-100 justify-content-center" onclick="openProjectModal('{{ ltrim($project['modal_target'], '#') }}')" style="background: {{ $project['accent'] }} !important; border-color: {{ $project['accent'] }} !important;">
                                        <i class="fa-solid {{ $project['btn_icon'] }} me-1"></i> {{ $project['btn_text'] }}
                                    </button>
                                @endif

                                <div class="d-flex flex-wrap gap-1">
                                    @foreach($project['tags'] as $tag)
                                    <span class="badge bg-light border text-muted font-mono" style="font-size: 0.7rem;">#{{ $tag }}</span>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </section>


    <!-- ========================================================================== -->
    <!-- SECTION 6: ARTBOARD 06 - CONNECT & COLLABORATE (INTERACTIVE GSAP OUTRO)    -->
    <!-- ========================================================================== -->
    @include('footer')


    <!-- ========================================================================== -->
    <!-- 1. PINTARBACA INTERACTIVE SYLLABLE GAME DEMO POP-UP MODAL                     -->
    <!-- ========================================================================== -->
    <div class="custom-modal-overlay" id="pintarBacaDemoModal" onclick="if(event.target === this) closeProjectModal('pintarBacaDemoModal')">
        <div class="custom-modal-dialog">
            <div class="modal-header modal-header-studio d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center gap-3">
                    <span class="badge bg-accent text-white font-mono px-3 py-2 rounded-pill" style="color: #FFFFFF !important;">
                        <i class="fa-solid fa-star me-1"></i> DEMO INTERAKTIF
                    </span>
                    <h3 class="h4 fw-bold text-dark mb-0">PintarBaca Suku Kata</h3>
                </div>
                <button type="button" class="btn-close" onclick="closeProjectModal('pintarBacaDemoModal')" aria-label="Close"></button>
            </div>
            <div class="modal-body modal-body-studio">
                <img src="{{ asset('images/pintarbaca_hero.jpg') }}?v={{ time() }}" alt="PintarBaca UI Mockup" class="img-fluid rounded-4 mb-4 border shadow-sm" loading="lazy" decoding="async">
                
                <div class="pintarbaca-game-container">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted font-mono small"><i class="fa-solid fa-gamepad me-1 text-accent"></i> Interactive Syllable Builder</span>
                        <span class="star-badge" id="pintarBacaScore">★ 0 PTS</span>
                    </div>

                    <p class="text-muted mb-4">
                        Klik susunan suku kata di bawah untuk membentuk kata Bahasa Indonesia (Contoh: <strong>PIN</strong> + <strong>TAR</strong> = <strong>PINTAR</strong>)!
                    </p>

                    <!-- Word Display Box -->
                    <div class="display-word-box mb-3" id="pintarBacaDisplay">
                        ...
                    </div>
                    <div class="mb-4 text-center">
                        <span id="pintarBacaStatus" class="text-muted font-mono">Klik tombol suku kata di bawah untuk menyusun kata!</span>
                    </div>

                    <!-- Syllable Buttons Grid -->
                    <div class="d-flex flex-wrap justify-content-center gap-3 mb-4">
                        <button class="syllable-btn" onclick="clickSyllable(this, 'PIN')">PIN</button>
                        <button class="syllable-btn" onclick="clickSyllable(this, 'TAR')">TAR</button>
                        <button class="syllable-btn" onclick="clickSyllable(this, 'BA')">BA</button>
                        <button class="syllable-btn" onclick="clickSyllable(this, 'CA')">CA</button>
                        <button class="syllable-btn" onclick="clickSyllable(this, 'BE')">BE</button>
                        <button class="syllable-btn" onclick="clickSyllable(this, 'LA')">LA</button>
                        <button class="syllable-btn" onclick="clickSyllable(this, 'JAR')">JAR</button>
                        <button class="syllable-btn" onclick="clickSyllable(this, 'SU')">SU</button>
                        <button class="syllable-btn" onclick="clickSyllable(this, 'KU')">KU</button>
                        <button class="syllable-btn" onclick="clickSyllable(this, 'KA')">KA</button>
                        <button class="syllable-btn" onclick="clickSyllable(this, 'TA')">TA</button>
                    </div>

                    <div class="text-center">
                        <button class="btn btn-outline-studio btn-sm font-mono px-4 py-2 rounded-pill" onclick="resetSyllableGame()">
                            <i class="fa-solid fa-rotate-left me-1"></i> Reset Suku Kata
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- ========================================================================== -->
    <!-- 2. ERC SAWANGAN DEMO MODAL                                                 -->
    <!-- ========================================================================== -->
    <div class="custom-modal-overlay" id="ercDemoModal" onclick="if(event.target === this) closeProjectModal('ercDemoModal')">
        <div class="custom-modal-dialog">
            <div class="modal-header modal-header-studio d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center gap-2">
                    <span class="badge bg-accent text-white font-mono px-3 py-2 rounded-pill">
                        <i class="fa-solid fa-globe me-1"></i> DEMO WEB PORTAL
                    </span>
                    <h3 class="h4 fw-bold text-dark mb-0">ERC Sawangan Web Portal</h3>
                </div>
                <button type="button" class="btn-close" onclick="closeProjectModal('ercDemoModal')" aria-label="Close"></button>
            </div>
            <div class="modal-body modal-body-studio">
                <img src="{{ asset('images/erc_sawangan_hero.jpg') }}?v={{ time() }}" alt="ERC Sawangan Preview" class="img-fluid rounded-4 mb-4 border shadow-sm" loading="lazy" decoding="async">
                <h5 class="fw-bold text-dark mb-2">Desain Antarmuka Komunitas & Jadwal Ibadah</h5>
                <p class="text-muted mb-3">Portal web ERC Sawangan dirancang untuk memudahkan jemaat mengakses warta gereja digital, pengumuman kegiatan, dan informasi jadwal ibadah dengan sistem navigasi yang rapi dan hangat.</p>
                <div class="p-3 bg-light rounded-3 border font-mono small mb-4">
                    <strong class="text-accent">Highlight Fitur UI/UX:</strong><br>
                    • Responsive Schedule Cards (Otomatis menyesuaikan layar HP/Tablet)<br>
                    • Portal Artikel & Warta Mingguan Berbasis Grid<br>
                    • Skema Warna Bersih & Modern yang Inklusif
                </div>
                <div class="text-end">
                    <a href="https://erc.ohito7.com/" target="_blank" class="btn btn-accent btn-sm rounded-pill font-mono">
                        <i class="fa-solid fa-arrow-up-right-from-square me-1"></i> Buka Website erc.ohito7.com
                    </a>
                </div>
            </div>
        </div>
    </div>


    <!-- ========================================================================== -->
    <!-- 3. STUDIO CINEMA VIDEO PLAYER MODAL (FOR VIDEO EDITING WORKS)              -->
    <!-- ========================================================================== -->
    <div class="custom-modal-overlay video-cinema-overlay" id="videoPlayerModal" onclick="if(event.target === this) closeVideoModal()">
        <div class="custom-modal-dialog video-cinema-dialog">
            
            <!-- Video Modal Header -->
            <div class="modal-header modal-header-cinema d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center gap-3">
                    <span class="badge bg-primary text-white font-mono px-3 py-2 rounded-pill" id="modalVideoBadge">
                        <i class="fa-solid fa-clapperboard me-1"></i> VIDEO SHOWCASE
                    </span>
                    <div>
                        <h3 class="h5 fw-bold text-white mb-0" id="modalVideoTitle">Video Title</h3>
                        <small class="text-white-50 font-mono" id="modalVideoClient" style="font-size: 0.75rem;">Client / Channel</small>
                    </div>
                </div>
                <button type="button" class="btn-close btn-close-white" onclick="closeVideoModal()" aria-label="Tutup Video"></button>
            </div>

            <div class="modal-body modal-body-cinema p-0">
                <!-- Video Player Container (16:9 Responsive Stage) -->
                <div class="video-stage-container" id="videoStageContainer">
                    <video id="modalVideoPlayer" controls playsinline class="video-element-cinema" poster="">
                        <source id="modalVideoSource" src="" type="video/mp4">
                        Browser Anda tidak mendukung pemutar video HTML5.
                    </video>
                    <iframe id="modalYoutubePlayer" class="video-element-cinema d-none" src="" title="Video Player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>

                <!-- Video Technical Breakdown & Workflow Specs -->
                <div class="p-4 p-md-4 bg-dark text-white border-top border-secondary border-opacity-25">
                    <div class="row g-4">
                        <div class="col-lg-7">
                            <div class="d-flex align-items-center gap-2 mb-2 flex-wrap">
                                <span class="badge bg-secondary bg-opacity-50 text-white font-mono" id="modalVideoRatio">16:9 4K</span>
                                <span class="badge bg-secondary bg-opacity-50 text-white font-mono" id="modalVideoDuration">04:18</span>
                                <span class="badge bg-accent text-white font-mono" id="modalVideoRole">Lead Editor</span>
                            </div>
                            <p class="text-white-50 small mb-3 lh-relaxed" id="modalVideoDesc">
                                Deskripsi video editing...
                            </p>
                            <div class="mb-3" id="modalVideoActions">
                                <a id="modalYoutubeExternalLink" href="#" target="_blank" class="btn btn-sm btn-danger font-mono rounded-pill px-3 py-1.5 d-inline-flex align-items-center gap-2" style="font-size: 0.78rem;">
                                    <i class="fa-brands fa-youtube fs-6"></i> Buka & Tonton di YouTube
                                </a>
                            </div>
                            <div>
                                <small class="text-white-50 font-mono text-uppercase d-block mb-2 fw-bold" style="font-size: 0.72rem; letter-spacing: 1px;">
                                    <i class="fa-solid fa-toolbox text-accent me-1"></i> Software &amp; Tools
                                </small>
                                <div class="d-flex flex-wrap gap-1" id="modalVideoTools">
                                    <!-- Tool badges -->
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-5">
                            <div class="p-3 rounded-4 bg-black bg-opacity-40 border border-secondary border-opacity-25">
                                <small class="text-accent font-mono text-uppercase d-block mb-2 fw-bold" style="font-size: 0.72rem; letter-spacing: 1px;">
                                    <i class="fa-solid fa-sliders me-1"></i> Editing Workflow &amp; Key Focus
                                </small>
                                <ul class="list-unstyled text-white-50 small mb-0 d-flex flex-column gap-2" id="modalVideoWorkflowList" style="font-size: 0.78rem;">
                                    <!-- Workflow points -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>


    <!-- ========================================================================== -->
    <!-- EXPERIENCE DETAIL GLASS POPUP MODAL (WORKFLOW, SOFTWARE, LEARNINGS & GALLERY) -->
    <!-- ========================================================================== -->
    <!-- ========================================================================== -->
    <!-- EXPERIENCE DETAIL SHOWCASE MODAL (ULTRA CLEAN 2-COLUMN DESIGN)             -->
    <!-- ========================================================================== -->
    <div class="custom-modal-overlay" id="experienceDetailModal" onclick="if(event.target === this) closeExpModal()">
        <div class="custom-modal-dialog exp-showcase-dialog">
            
            <!-- Modal Header Banner -->
            <div class="exp-modal-banner p-4 border-bottom d-flex justify-content-between align-items-start">
                <div>
                    <div class="d-flex align-items-center gap-2 mb-2">
                        <span class="layer-tag text-accent" id="modalExpNumber">LAYER 01</span>
                        <span class="badge bg-light border text-muted font-mono" id="modalExpPeriod">2024</span>
                    </div>
                    <h3 class="fw-bold text-dark mb-1 fs-4" id="modalExpTitle">Company Title</h3>
                    <div class="text-accent font-heading fw-bold fs-6 d-flex align-items-center gap-2">
                        <i class="fa-solid fa-briefcase"></i> <span id="modalExpRole">Role</span>
                    </div>
                </div>
                <button type="button" class="btn-close-custom" onclick="closeExpModal()" aria-label="Tutup">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>

            <!-- Modal Body 2-Column Layout -->
            <div class="modal-body p-4 p-md-5">
                <div class="row g-4">
                    
                    <!-- Left Column: Visual Gallery Showcase -->
                    <div class="col-lg-6">
                        <div class="exp-gallery-showcase">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <small class="text-muted font-mono text-uppercase fw-bold" style="font-size: 0.75rem; letter-spacing: 1px;">
                                    <i class="fa-solid fa-images text-accent me-1"></i> Artboard Galeri Karya
                                </small>
                                <span class="badge bg-light border text-muted font-mono" id="modalExpGalleryCount" style="font-size: 0.72rem;">0 Karya</span>
                            </div>
                            <div class="exp-gallery-scroll-container">
                                <div class="row g-3" id="modalExpGallery">
                                    <!-- Dynamic Gallery Showcase Cards (2 Columns) -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column: Workflow, Tools, and Growth -->
                    <div class="col-lg-6 d-flex flex-column gap-4">
                        
                        <!-- Perusahaan / Organisasi Info Card -->
                        <div class="exp-info-card p-3 rounded-4 bg-light border">
                            <small class="text-muted font-mono text-uppercase d-block mb-1" style="font-size: 0.7rem;">Perusahaan / Client</small>
                            <h6 class="fw-bold text-dark mb-0 fs-6" id="modalExpCompany">Company Name</h6>
                        </div>

                        <!-- Workflow & Process Section -->
                        <div>
                            <small class="text-muted font-mono text-uppercase d-block mb-2 fw-bold" style="font-size: 0.75rem; letter-spacing: 1px;">
                                <i class="fa-solid fa-diagram-project text-accent me-1"></i> Alur Pengerjaan &amp; Workflow
                            </small>
                            <ul class="exp-workflow-list list-unstyled mb-0" id="modalExpWorkflowList">
                                <!-- Workflow List Items -->
                            </ul>
                        </div>

                        <!-- Tools & Software Tags -->
                        <div>
                            <small class="text-muted font-mono text-uppercase d-block mb-2 fw-bold" style="font-size: 0.75rem; letter-spacing: 1px;">
                                <i class="fa-solid fa-laptop-code text-accent me-1"></i> Tools &amp; Software
                            </small>
                            <div class="d-flex flex-wrap gap-2" id="modalExpTools">
                                <!-- Tool Badges -->
                            </div>
                        </div>

                        <!-- Key Learnings & Growth Card -->
                        <div class="exp-growth-card p-3 rounded-4">
                            <small class="text-accent font-mono text-uppercase d-block mb-2 fw-bold" style="font-size: 0.75rem; letter-spacing: 1px;">
                                <i class="fa-solid fa-lightbulb me-1"></i> Key Learnings &amp; Impact
                            </small>
                            <p class="text-dark mb-0 small lh-base fw-medium" id="modalExpLearnings">Learnings...</p>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>


    <!-- ========================================================================== -->
    <!-- HIGH-RESOLUTION ARTWORK LIGHTBOX ZOOM MODAL                               -->
    <!-- ========================================================================== -->
    <div class="custom-modal-overlay image-lightbox-overlay" id="imageLightboxModal" onclick="if(event.target === this) closeImageLightbox()">
        <div class="image-lightbox-container">
            <button type="button" class="btn-lightbox-close" onclick="closeImageLightbox()" aria-label="Tutup Fullscreen">
                <i class="fa-solid fa-xmark"></i>
            </button>
            <img id="lightboxImg" src="" alt="High-Res Artwork Preview" class="lightbox-img">
            <div class="lightbox-caption-bar mt-3 p-3 text-center rounded-4 shadow-sm">
                <span class="badge bg-accent text-white font-mono mb-2 px-3 py-1 rounded-pill" id="lightboxCategory" style="font-size: 0.72rem;">Category</span>
                <h5 class="text-white fw-bold mb-1 fs-6 font-heading" id="lightboxTitle">Judul Karya</h5>
                <p class="text-white-50 small mb-0 lh-sm" id="lightboxCaption" style="font-size: 0.8rem;">Deskripsi karya...</p>
            </div>
        </div>
    </div>


    <!-- ========================================================================== -->
    <!-- BACKGROUND NO-COPYRIGHT AMBIENT AUDIO PLAYER                              -->
    <!-- ========================================================================== -->
    <audio id="bgMusic" loop preload="auto">
        <source src="https://cdn.pixabay.com/download/audio/2022/05/27/audio_1808fbf07a.mp3?filename=chill-lofi-110820.mp3" type="audio/mpeg">
        <source src="https://assets.mixkit.co/music/preview/mixkit-tech-house-vibes-130.mp3" type="audio/mpeg">
    </audio>

    <!-- FLOATING AUDIO CONTROLLER WIDGET -->
    <div id="audioControlWidget" class="floating-audio-widget" onclick="toggleBgMusic()" title="Putar / Hentikan Musik Latar (Volume 10%)">
        <div class="audio-equalizer-bars" id="audioEqualizer">
            <span class="bar bar-1"></span>
            <span class="bar bar-2"></span>
            <span class="bar bar-3"></span>
        </div>
        <span id="audioStatusText" class="font-mono text-uppercase">BGM 10%</span>
        <i id="audioIcon" class="fa-solid fa-volume-high text-accent"></i>
    </div>

    <!-- Custom Interactive JS with Cache Buster -->
    <script src="{{ asset('js/portfolio-interactive.js') }}?v={{ time() }}"></script>
</body>
</html>
