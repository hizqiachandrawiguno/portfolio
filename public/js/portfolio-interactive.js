/* ==========================================================================
   HIZQIA CHANDRA - GRAPHIC DESIGNER WORKSPACE INTERACTIVE JAVASCRIPT
   ========================================================================== */

// PURE VANILLA MODAL FUNCTIONS (100% RELIABLE, ZERO EXTERNAL DEPENDENCIES)
window.openExpModal = function (expId) {
    if (typeof experiencesData === 'undefined') {
        console.error('experiencesData is missing!');
        return;
    }

    const expData = experiencesData.find(item => item.id === expId);
    if (!expData) {
        console.error('Experience data not found for id:', expId);
        return;
    }

    const numEl = document.getElementById('modalExpNumber');
    const titleEl = document.getElementById('modalExpTitle');
    const roleEl = document.getElementById('modalExpRole');
    const periodEl = document.getElementById('modalExpPeriod');
    const companyEl = document.getElementById('modalExpCompany');
    const workflowEl = document.getElementById('modalExpWorkflow');
    const learningsEl = document.getElementById('modalExpLearnings');

    if (numEl) numEl.textContent = `LAYER ${expData.layer_num}`;
    if (titleEl) titleEl.textContent = expData.title;
    if (roleEl) roleEl.textContent = expData.role;
    if (periodEl) periodEl.textContent = expData.period;
    if (companyEl) companyEl.textContent = expData.details.company;
    if (learningsEl) learningsEl.textContent = expData.details.learnings;

    // Format & Populate Workflow Lines as Clean Bullet Items
    const workflowListEl = document.getElementById('modalExpWorkflowList');
    if (workflowListEl && expData.details.workflow) {
        workflowListEl.innerHTML = '';
        const lines = expData.details.workflow.split('\n');
        lines.forEach(line => {
            const cleanLine = line.trim().replace(/^\d+\.\s*/, '');
            if (cleanLine) {
                const li = document.createElement('li');
                li.textContent = cleanLine;
                workflowListEl.appendChild(li);
            }
        });
    }

    // Populate Tools Badges
    const toolsContainer = document.getElementById('modalExpTools');
    if (toolsContainer) {
        toolsContainer.innerHTML = '';
        if (expData.details.tools && Array.isArray(expData.details.tools)) {
            expData.details.tools.forEach(tool => {
                const tag = document.createElement('span');
                tag.className = 'modal-tool-tag';
                tag.innerHTML = `<i class="fa-solid fa-layer-group text-accent me-1"></i> ${tool}`;
                toolsContainer.appendChild(tag);
            });
        }
    }

    // Populate Experience Image Gallery Showcase Cards
    const galleryContainer = document.getElementById('modalExpGallery');
    const galleryCountEl = document.getElementById('modalExpGalleryCount');

    if (galleryContainer) {
        galleryContainer.innerHTML = '';
        if (expData.details.gallery && Array.isArray(expData.details.gallery) && expData.details.gallery.length > 0) {
            if (galleryCountEl) {
                galleryCountEl.textContent = `${expData.details.gallery.length} Karya`;
            }
            expData.details.gallery.forEach((item, index) => {
                const col = document.createElement('div');
                col.className = 'col-sm-6 col-12';
                const categoryBadge = item.category 
                    ? `<span class="badge bg-accent-subtle text-accent font-mono mb-2 d-inline-block text-truncate" style="font-size: 0.65rem; max-width: 100%;"><i class="fa-solid fa-layer-group me-1"></i> ${item.category}</span>` 
                    : '';
                
                const safeTitle = (item.title || '').replace(/'/g, "\\'");
                const safeCaption = (item.caption || '').replace(/'/g, "\\'");
                const safeCategory = (item.category || '').replace(/'/g, "\\'");

                col.innerHTML = `
                    <div class="exp-gallery-item-clean">
                        ${categoryBadge}
                        <div class="exp-gallery-img-wrap" onclick="openImageLightbox('${item.image}', '${safeTitle}', '${safeCaption}', '${safeCategory}')" title="Klik untuk memperbesar gambar">
                            <img src="${item.image}" alt="${item.title}" class="exp-gallery-img" loading="lazy">
                            <div class="exp-gallery-zoom-hint">
                                <i class="fa-solid fa-magnifying-glass-plus me-1"></i> Zoom HD
                            </div>
                        </div>
                        <small class="fw-bold font-heading d-block text-dark mb-1 lh-sm" style="font-size: 0.84rem;">${item.title}</small>
                        <small class="text-muted d-block lh-sm" style="font-size: 0.74rem;">${item.caption}</small>
                    </div>
                `;
                galleryContainer.appendChild(col);
            });
        } else {
            if (galleryCountEl) {
                galleryCountEl.textContent = 'Organisasi';
            }
            const col = document.createElement('div');
            col.className = 'col-12';
            col.innerHTML = `
                <div class="p-4 rounded-4 border bg-white text-center shadow-2xs my-2">
                    <div class="mb-3">
                        <span class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 54px; height: 54px; background: rgba(227, 107, 50, 0.12); color: #E36B32;">
                            <i class="fa-solid fa-users-gear fs-4"></i>
                        </span>
                    </div>
                    <h6 class="fw-bold text-dark mb-2 font-heading">Kepemimpinan & Tata Kelola Organisasi</h6>
                    <p class="text-muted small mb-0 lh-relaxed" style="max-width: 320px; margin: 0 auto; font-size: 0.82rem;">
                        Pengalaman ini berfokus pada manajemen tim, koordinasi lintas divisi, dan advokasi kepemudaan/mahasiswa tanpa aset desain publikasi.
                    </p>
                </div>
            `;
            galleryContainer.appendChild(col);
        }
    }

    const modalOverlay = document.getElementById('experienceDetailModal');
    if (modalOverlay) {
        modalOverlay.classList.add('active');
        document.body.style.overflow = 'hidden';
    }
};

window.closeExpModal = function () {
    const modalOverlay = document.getElementById('experienceDetailModal');
    if (modalOverlay) {
        modalOverlay.classList.remove('active');
        // Only reset overflow if lightbox is not active
        const lightbox = document.getElementById('imageLightboxModal');
        if (!lightbox || !lightbox.classList.contains('active')) {
            document.body.style.overflow = '';
        }
    }
};

// IMAGE LIGHTBOX FULLSCREEN PREVIEW
window.openImageLightbox = function (imgSrc, title, caption, category) {
    const lightboxModal = document.getElementById('imageLightboxModal');
    const lightboxImg = document.getElementById('lightboxImg');
    const lightboxTitle = document.getElementById('lightboxTitle');
    const lightboxCaption = document.getElementById('lightboxCaption');
    const lightboxCategory = document.getElementById('lightboxCategory');

    if (lightboxImg) lightboxImg.src = imgSrc;
    if (lightboxTitle) lightboxTitle.textContent = title || '';
    if (lightboxCaption) lightboxCaption.textContent = caption || '';
    if (lightboxCategory) {
        if (category) {
            lightboxCategory.textContent = category;
            lightboxCategory.style.display = 'inline-block';
        } else {
            lightboxCategory.style.display = 'none';
        }
    }

    if (lightboxModal) {
        lightboxModal.classList.add('active');
        document.body.style.overflow = 'hidden';
    }
};

window.closeImageLightbox = function () {
    const lightboxModal = document.getElementById('imageLightboxModal');
    if (lightboxModal) {
        lightboxModal.classList.remove('active');
        // If experience modal is still open, keep body overflow hidden
        const expModal = document.getElementById('experienceDetailModal');
        if (!expModal || !expModal.classList.contains('active')) {
            document.body.style.overflow = '';
        }
    }
};

window.openProjectModal = function (modalId) {
    const modalOverlay = document.getElementById(modalId);
    if (modalOverlay) {
        modalOverlay.classList.add('active');
        document.body.style.overflow = 'hidden';
    }
};

window.closeProjectModal = function (modalId) {
    const modalOverlay = document.getElementById(modalId);
    if (modalOverlay) {
        modalOverlay.classList.remove('active');
        document.body.style.overflow = '';
    }
};

// STUDIO CINEMA VIDEO PLAYER MODAL FUNCTIONS
function getYoutubeVideoId(url) {
    if (!url) return null;
    const regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=)([^#\&\?]*).*/;
    const match = url.match(regExp);
    return (match && match[2].length === 11) ? match[2] : null;
}

// DIRECT INLINE VIDEO PLAYER (NO POPUP MODAL REQUIRED)
window.playInlineVideo = function (projectId, videoUrl) {
    const poster = document.getElementById('videoPoster-' + projectId);
    const slot = document.getElementById('videoIframeSlot-' + projectId);
    if (!slot) return;

    const ytId = getYoutubeVideoId(videoUrl);
    if (ytId) {
        slot.innerHTML = `<iframe src="https://www.youtube.com/embed/${ytId}?autoplay=1&rel=0&modestbranding=1" 
                                  title="Video Showcase Player" 
                                  frameborder="0" 
                                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                                  allowfullscreen 
                                  class="w-100 h-100"></iframe>`;
        if (poster) poster.classList.add('d-none');
        slot.classList.remove('d-none');
    }
};

window.openVideoModal = function (projectId) {
    if (typeof projectsData === 'undefined') {
        console.error('projectsData is missing!');
        return;
    }

    const project = projectsData.find(item => item.id === projectId || 
        (projectId === 'proj-ellecion' && item.id === 'proj-eleccion') ||
        (projectId === 'proj-eleccion' && item.id === 'proj-ellecion'));
    if (!project) {
        console.error('Project data not found for id:', projectId);
        return;
    }

    const titleEl = document.getElementById('modalVideoTitle');
    const clientEl = document.getElementById('modalVideoClient');
    const badgeEl = document.getElementById('modalVideoBadge');
    const descEl = document.getElementById('modalVideoDesc');
    const ratioEl = document.getElementById('modalVideoRatio');
    const durationEl = document.getElementById('modalVideoDuration');
    const roleEl = document.getElementById('modalVideoRole');
    const toolsEl = document.getElementById('modalVideoTools');
    const workflowListEl = document.getElementById('modalVideoWorkflowList');
    const videoPlayer = document.getElementById('modalVideoPlayer');
    const videoSource = document.getElementById('modalVideoSource');
    const ytIframe = document.getElementById('modalYoutubePlayer');
    const extLink = document.getElementById('modalYoutubeExternalLink');

    if (titleEl) titleEl.textContent = project.title;
    if (clientEl) clientEl.textContent = project.video_client || project.category_label;
    if (badgeEl) badgeEl.innerHTML = `<i class="fa-solid fa-clapperboard me-1"></i> ${project.badge || 'VIDEO SHOWCASE'}`;
    if (descEl) descEl.textContent = project.full_desc || project.short_desc;
    if (ratioEl) ratioEl.textContent = project.video_ratio || '16:9 4K';
    if (durationEl) durationEl.textContent = project.video_duration || '03:00';
    if (roleEl) roleEl.textContent = project.video_role || 'Video Editor';

    // Populate Software & Tools Badges
    if (toolsEl) {
        toolsEl.innerHTML = '';
        if (project.tags && Array.isArray(project.tags)) {
            project.tags.forEach(tag => {
                const span = document.createElement('span');
                span.className = 'badge bg-secondary bg-opacity-30 text-white font-mono px-3 py-1.5 rounded-3 border border-secondary border-opacity-25';
                span.style.fontSize = '0.76rem';
                span.innerHTML = `#${tag}`;
                toolsEl.appendChild(span);
            });
        }
    }

    // Populate Editing Workflow Points
    if (workflowListEl) {
        workflowListEl.innerHTML = '';
        if (project.video_workflow) {
            const lines = project.video_workflow.split('\n');
            lines.forEach(line => {
                const cleanLine = line.trim().replace(/^\d+\.\s*/, '');
                if (cleanLine) {
                    const li = document.createElement('li');
                    li.className = 'd-flex align-items-start gap-2.5';
                    li.innerHTML = `<i class="fa-solid fa-check text-accent mt-1 flex-shrink-0"></i> <span>${cleanLine}</span>`;
                    workflowListEl.appendChild(li);
                }
            });
        }
    }

    // Setup Video Player (YouTube Embed or HTML5 Video)
    const ytId = getYoutubeVideoId(project.video_url || project.video_embed_url);
    if (ytId && ytIframe) {
        if (videoPlayer) {
            videoPlayer.pause();
            videoPlayer.classList.add('d-none');
        }
        ytIframe.classList.remove('d-none');
        ytIframe.src = `https://www.youtube.com/embed/${ytId}?autoplay=1&rel=0&modestbranding=1`;
        if (extLink) {
            extLink.classList.remove('d-none');
            extLink.href = `https://www.youtube.com/watch?v=${ytId}`;
        }
    } else {
        if (ytIframe) {
            ytIframe.src = '';
            ytIframe.classList.add('d-none');
        }
        if (extLink) {
            if (project.video_url) {
                extLink.classList.remove('d-none');
                extLink.href = project.video_url;
            } else {
                extLink.classList.add('d-none');
            }
        }
        if (videoPlayer && videoSource) {
            videoPlayer.classList.remove('d-none');
            videoPlayer.pause();
            if (project.image) {
                videoPlayer.poster = project.image;
            }
            if (project.video_url) {
                videoSource.src = project.video_url;
                videoPlayer.load();
                const playPromise = videoPlayer.play();
                if (playPromise !== undefined) {
                    playPromise.catch(() => {
                        // Browser prevented autoplay
                    });
                }
            }
        }
    }

    const modalOverlay = document.getElementById('videoPlayerModal');
    if (modalOverlay) {
        modalOverlay.classList.add('active');
        document.body.style.overflow = 'hidden';
    }
};

window.closeVideoModal = function () {
    const modalOverlay = document.getElementById('videoPlayerModal');
    const videoPlayer = document.getElementById('modalVideoPlayer');
    const ytIframe = document.getElementById('modalYoutubePlayer');
    if (videoPlayer) {
        videoPlayer.pause();
    }
    if (ytIframe) {
        ytIframe.src = '';
    }
    if (modalOverlay) {
        modalOverlay.classList.remove('active');
        document.body.style.overflow = '';
    }
};

// STUDIO OFFCANVAS SIDEBAR FUNCTIONS
window.openStudioSidebar = function () {
    const sidebar = document.getElementById('studioSidebar');
    const backdrop = document.getElementById('sidebarBackdrop');
    if (sidebar) sidebar.classList.add('active');
    if (backdrop) backdrop.classList.add('active');
    document.body.style.overflow = 'hidden';
};

window.closeStudioSidebar = function () {
    const sidebar = document.getElementById('studioSidebar');
    const backdrop = document.getElementById('sidebarBackdrop');
    if (sidebar) sidebar.classList.remove('active');
    if (backdrop) backdrop.classList.remove('active');
    document.body.style.overflow = '';
};

// CAREER & LEADERSHIP EXPERIENCES CATEGORY FILTER (GLOBAL SCOPE)
window.filterExperiences = function (category, btn) {
    document.querySelectorAll('.exp-filter-btn').forEach(b => b.classList.remove('active'));
    if (btn) btn.classList.add('active');

    const expCards = document.querySelectorAll('.exp-card-col');
    expCards.forEach(card => {
        const itemCat = card.getAttribute('data-exp-category');
        if (category === 'all' || itemCat === category) {
            card.style.display = '';
            card.classList.remove('animate__animated', 'animate__fadeIn');
            void card.offsetWidth; // Trigger reflow
            card.classList.add('animate__animated', 'animate__fadeIn');
        } else {
            card.style.display = 'none';
        }
    });
};

// COMMAND PALETTE (CTRL + K) FUNCTIONS
window.openCommandPalette = function () {
    const backdrop = document.getElementById('cmdPaletteBackdrop');
    const input = document.getElementById('cmdPaletteInput');
    if (backdrop) {
        backdrop.classList.add('active');
        document.body.style.overflow = 'hidden';
        if (input) {
            input.value = '';
            setTimeout(() => input.focus(), 50);
            // Reset filter view
            document.querySelectorAll('#cmdPaletteList .cmd-item').forEach(el => el.style.display = 'flex');
        }
    }
};

window.closeCommandPalette = function () {
    const backdrop = document.getElementById('cmdPaletteBackdrop');
    if (backdrop) {
        backdrop.classList.remove('active');
        document.body.style.overflow = '';
    }
};


document.addEventListener('keydown', function (e) {
    // Open Command Palette with Ctrl + K or Cmd + K
    if ((e.ctrlKey || e.metaKey) && (e.key === 'k' || e.key === 'K')) {
        e.preventDefault();
        const backdrop = document.getElementById('cmdPaletteBackdrop');
        if (backdrop && backdrop.classList.contains('active')) {
            closeCommandPalette();
        } else {
            openCommandPalette();
        }
        return;
    }

    if (e.key === 'Escape') {
        const cmdModal = document.getElementById('cmdPaletteBackdrop');
        if (cmdModal && cmdModal.classList.contains('active')) {
            closeCommandPalette();
            return;
        }
        const videoModal = document.getElementById('videoPlayerModal');
        if (videoModal && videoModal.classList.contains('active')) {
            closeVideoModal();
            return;
        }
        const lightbox = document.getElementById('imageLightboxModal');
        if (lightbox && lightbox.classList.contains('active')) {
            closeImageLightbox();
            return;
        }
        closeExpModal();
        closeStudioSidebar();
    }
});


document.addEventListener('DOMContentLoaded', function () {

    /* -------------------------------------------------------------------------- */
    /* FULLSCREEN WELCOME INTRO TYPEWRITER & TRANSITION SYSTEM                     */
    /* -------------------------------------------------------------------------- */
    const introOverlay = document.getElementById('studioIntroScreen');
    const introTextEl = document.getElementById('introTypewriterText');
    const introProgress = document.getElementById('introProgressBar');

    /* -------------------------------------------------------------------------- */
    /* NO-COPYRIGHT BACKGROUND AUDIO PLAYER (VOLUME LOCKED AT 10%)               */
    /* -------------------------------------------------------------------------- */
    const bgAudio = document.getElementById('bgMusic');
    const audioWidget = document.getElementById('audioControlWidget');
    const audioIcon = document.getElementById('audioIcon');
    const audioStatus = document.getElementById('audioStatusText');

    let isAudioPlaying = false;

    if (bgAudio) {
        bgAudio.volume = 0.10; // Exactly 10% volume as requested
    }

    window.playBgMusic = function () {
        if (!bgAudio || isAudioPlaying) return;
        bgAudio.volume = 0.10;
        bgAudio.play().then(() => {
            isAudioPlaying = true;
            if (audioWidget) audioWidget.classList.add('playing');
            if (audioIcon) audioIcon.className = 'fa-solid fa-volume-high text-accent';
            if (audioStatus) audioStatus.textContent = 'BGM 10%';
            if (window.startWaveformVisualizer) window.startWaveformVisualizer();
        }).catch(err => {
            console.log('Autoplay deferred until user interaction:', err);
        });
    };

    window.toggleBgMusic = function () {
        if (!bgAudio) return;
        if (isAudioPlaying) {
            bgAudio.pause();
            isAudioPlaying = false;
            if (audioWidget) audioWidget.classList.remove('playing');
            if (audioIcon) audioIcon.className = 'fa-solid fa-volume-xmark text-muted';
            if (audioStatus) audioStatus.textContent = 'MUTED';
            if (window.stopWaveformVisualizer) window.stopWaveformVisualizer();
        } else {
            playBgMusic();
        }
    };

    // Auto-start audio on first user gesture
    document.addEventListener('click', function () {
        if (!isAudioPlaying) {
            playBgMusic();
        }
    }, { once: true });

    window.dismissStudioIntro = function () {
        if (!introOverlay) return;
        introOverlay.style.display = 'none';
        document.body.style.overflow = '';
    };

    /* -------------------------------------------------------------------------- */
    /* 1. ANIMATED NUMBER COUNTER (FROM 0 TO TARGET VALUE)                        */
    /* -------------------------------------------------------------------------- */
    function animateNumberCounters(container = document) {
        const counters = container.querySelectorAll('.counter-number:not(.counted)');
        counters.forEach(counter => {
            const target = parseFloat(counter.getAttribute('data-target') || '0');
            const decimals = parseInt(counter.getAttribute('data-decimals') || '1', 10);
            const duration = parseInt(counter.getAttribute('data-duration') || '1400', 10);
            let startTime = null;

            counter.classList.add('counted');

            function step(timestamp) {
                if (!startTime) startTime = timestamp;
                const progress = Math.min((timestamp - startTime) / duration, 1);
                // Ease-out cubic curve: 1 - (1 - t)^3
                const easeOut = 1 - Math.pow(1 - progress, 3);
                const currentVal = (target * easeOut).toFixed(decimals);
                counter.textContent = currentVal;

                if (progress < 1) {
                    requestAnimationFrame(step);
                } else {
                    counter.textContent = target.toFixed(decimals);
                }
            }
            requestAnimationFrame(step);
        });
    }

    // Run initial counters immediately for hero and sidebar badges
    animateNumberCounters(document);

    /* -------------------------------------------------------------------------- */
    /* 2. ANIMATED PROGRESS BARS (EXPAND FROM 0% TO TARGET PERCENTAGE)            */
    /* -------------------------------------------------------------------------- */
    function animateProgressBars(container = document) {
        const progressBars = container.querySelectorAll('.progress-fill');
        progressBars.forEach(bar => {
            const targetWidth = bar.getAttribute('data-progress') || '0';
            // Start at 0%
            bar.style.width = '0%';
            // Trigger animation on next frame
            requestAnimationFrame(() => {
                setTimeout(() => {
                    bar.style.width = targetWidth + '%';
                }, 60);
            });
        });
    }

    /* -------------------------------------------------------------------------- */
    /* DUAL TAB SWITCHER FOR HARD SKILLS VS SOFT SKILLS (BENTO GRID)              */
    /* -------------------------------------------------------------------------- */
    window.switchSkillTab = function (tabName) {
        const hardView = document.getElementById('hardSkillsView');
        const softView = document.getElementById('softSkillsView');
        const tabBtns = document.querySelectorAll('.skill-tab-btn');

        tabBtns.forEach(btn => {
            if (btn.getAttribute('data-tab') === tabName) {
                btn.classList.add('active');
            } else {
                btn.classList.remove('active');
            }
        });

        if (tabName === 'hard-skills') {
            if (hardView) {
                hardView.classList.remove('d-none');
                // Re-trigger counter & progress bar animation when switching back
                hardView.querySelectorAll('.counter-number').forEach(el => el.classList.remove('counted'));
                animateNumberCounters(hardView);
                animateProgressBars(hardView);
            }
            if (softView) softView.classList.add('d-none');
        } else if (tabName === 'soft-skills') {
            if (hardView) hardView.classList.add('d-none');
            if (softView) {
                softView.classList.remove('d-none');
                softView.querySelectorAll('.reveal-on-scroll').forEach(el => el.classList.add('revealed'));
            }
        }
    };

    /* -------------------------------------------------------------------------- */
    /* FORCE PURE LIGHT MODE THEME                                                */
    /* -------------------------------------------------------------------------- */
    localStorage.setItem('studio_theme', 'light');
    document.documentElement.setAttribute('data-theme', 'light');

    const themeBtn = document.getElementById('themeToggleBtn');
    if (themeBtn) {
        themeBtn.innerHTML = '<i class="fa-solid fa-sun text-warning me-1"></i> Light Mode';
    }




    /* -------------------------------------------------------------------------- */
    /* DYNAMIC INTERSECTION OBSERVER FOR FADE IN ON SCROLL & COUNTERS/BARS        */
    /* -------------------------------------------------------------------------- */
    const revealElements = document.querySelectorAll('.reveal-on-scroll');

    if ('IntersectionObserver' in window) {
        const observerOptions = {
            root: null,
            rootMargin: '0px 0px 50px 0px',
            threshold: 0.02
        };

        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('revealed');
                    animateNumberCounters(entry.target);
                    animateProgressBars(entry.target);
                    revealObserver.unobserve(entry.target);
                }
            });
        }, observerOptions);

        revealElements.forEach(el => {
            const rect = el.getBoundingClientRect();
            // If already visible in the initial viewport, reveal immediately
            if (rect.top < window.innerHeight) {
                el.classList.add('revealed');
                animateNumberCounters(el);
                animateProgressBars(el);
            } else {
                revealObserver.observe(el);
            }
        });
    } else {
        revealElements.forEach(el => {
            el.classList.add('revealed');
            animateNumberCounters(el);
            animateProgressBars(el);
        });
    }


    /* -------------------------------------------------------------------------- */
    /* 1. SCROLLSPY NAVBAR, CONTACT SECTION DETECTION & SMOOTH ANCHOR NAV         */
    /* -------------------------------------------------------------------------- */
    const sections = document.querySelectorAll('section[id], footer[id]');
    const navLinks = document.querySelectorAll('.studio-navbar .nav-link-custom');
    const dotLinks = document.querySelectorAll('.journey-dot-pagination .dot-item');
    const sidebarNavItems = document.querySelectorAll('.sidebar-nav-item');

    function setActiveSectionLink(sectionId) {
        if (!sectionId) return;

        navLinks.forEach(link => {
            const href = link.getAttribute('href');
            if (href === `#${sectionId}`) {
                link.classList.add('active');
            } else {
                link.classList.remove('active');
            }
        });

        dotLinks.forEach(dot => {
            const href = dot.getAttribute('href');
            if (href === `#${sectionId}`) {
                dot.classList.add('active');
            } else {
                dot.classList.remove('active');
            }
        });

        sidebarNavItems.forEach(item => {
            const href = item.getAttribute('href');
            if (href === `#${sectionId}`) {
                item.classList.add('active');
            } else {
                item.classList.remove('active');
            }
        });
    }

    function updateActiveNavbar() {
        const scrollY = window.pageYOffset;
        const windowHeight = window.innerHeight;
        const docHeight = document.documentElement.scrollHeight;

        // Reached bottom of page -> immediately activate contact footer
        if (scrollY + windowHeight >= docHeight - 70) {
            setActiveSectionLink('contact');
            return;
        }

        sections.forEach(current => {
            const sectionHeight = current.offsetHeight;
            const sectionTop = current.offsetTop - 140;
            const sectionId = current.getAttribute('id');

            if (scrollY >= sectionTop && scrollY < sectionTop + sectionHeight) {
                setActiveSectionLink(sectionId);
            }
        });
    }

    // Smooth anchor navigation handling with exact sticky navbar offset
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const targetId = this.getAttribute('href');
            if (!targetId || targetId === '#') return;
            const targetEl = document.querySelector(targetId);
            if (targetEl) {
                e.preventDefault();
                const navHeight = 70;
                const targetPos = targetEl.getBoundingClientRect().top + window.pageYOffset - navHeight;
                window.scrollTo({
                    top: Math.max(0, targetPos),
                    behavior: 'smooth'
                });
                setActiveSectionLink(targetId.replace('#', ''));
                if (typeof closeStudioSidebar === 'function') {
                    closeStudioSidebar();
                }
            }
        });
    });

    /* -------------------------------------------------------------------------- */
    /* 2. OPTIMIZED HIGH-PERFORMANCE PARALLAX ENGINE (60/120 FPS NATIVE ON MOBILE) */
    /* -------------------------------------------------------------------------- */
    const avatarArtboard = document.querySelector('.avatar-artboard-wrapper');
    const ambientGlowTop = document.querySelector('.ambient-gradient-glow.glow-top');
    const ambientGlowBottom = document.querySelector('.ambient-gradient-glow.glow-bottom');
    const ambientGrid = document.querySelector('.ambient-subtle-grid');
    const parallaxItems = document.querySelectorAll('[data-parallax]');
    let isScrollTicking = false;

    function applyParallaxEffects() {
        const scrollY = window.pageYOffset;
        const windowHeight = window.innerHeight;

        updateActiveNavbar();

        // On mobile / touch devices: bypass DOM transforms for buttery smooth native inertial scrolling
        const isMobileOrTouch = window.innerWidth < 992 || ('ontouchstart' in window);
        if (isMobileOrTouch) {
            return;
        }

        // Desktop Parallax: Ambient Background Layers
        if (ambientGlowTop) {
            ambientGlowTop.style.transform = `translate3d(0, ${(scrollY * 0.10).toFixed(1)}px, 0)`;
        }
        if (ambientGlowBottom) {
            ambientGlowBottom.style.transform = `translate3d(0, ${(-scrollY * 0.06).toFixed(1)}px, 0)`;
        }
        if (ambientGrid) {
            ambientGrid.style.transform = `translate3d(0, ${(scrollY * 0.03).toFixed(1)}px, 0)`;
        }

        // Parallax: Hero Avatar Artboard
        if (avatarArtboard) {
            avatarArtboard.style.transform = `translate3d(0, ${(scrollY * 0.05).toFixed(1)}px, 0)`;
        }

        // Parallax: Elements with [data-parallax] attribute
        parallaxItems.forEach(el => {
            const speed = parseFloat(el.getAttribute('data-parallax')) || 0.03;
            const rect = el.getBoundingClientRect();
            if (rect.top < windowHeight + 100 && rect.bottom > -100) {
                const distance = (windowHeight / 2) - rect.top;
                const offset = (distance * speed).toFixed(1);
                el.style.transform = `translate3d(0, ${offset}px, 0)`;
            }
        });
    }

    window.addEventListener('scroll', function () {
        if (!isScrollTicking) {
            window.requestAnimationFrame(function () {
                applyParallaxEffects();
                isScrollTicking = false;
            });
            isScrollTicking = true;
        }
    }, { passive: true });

    applyParallaxEffects();

    window.addEventListener('resize', function () {
        if (avatarArtboard && window.innerWidth <= 991) {
            avatarArtboard.style.transform = 'none';
        }
    }, { passive: true });

    /* -------------------------------------------------------------------------- */
    /* 3. PINTARBACA INTERACTIVE SYLLABLE MINI-GAME DEMO                         */
    /* -------------------------------------------------------------------------- */
    let selectedSyllables = [];
    const validWords = {
        'PINTAR': '🎉 SERU! Kamu Pintar Anak Hebat!',
        'BACA': '📚 LUAR BIASA! Ayo Terus Membaca!',
        'BELAJAR': '🌟 MANTAP! Belajar Suku Kata Jadi Mudah!',
        'SUKUKATA': '🧩 HEBAT! Kombinasi Suku Kata Sempurna!'
    };

    const wordDisplay = document.getElementById('pintarBacaDisplay');
    const statusMsg = document.getElementById('pintarBacaStatus');
    const starScore = document.getElementById('pintarBacaScore');
    let currentScore = 0;

    window.clickSyllable = function (btn, syllable) {
        if (selectedSyllables.length >= 4) return;

        selectedSyllables.push(syllable);
        btn.classList.add('selected');
        updatePintarBacaDisplay();
        playSoundEffect(600);
    };

    window.resetSyllableGame = function () {
        selectedSyllables = [];
        document.querySelectorAll('.syllable-btn').forEach(btn => btn.classList.remove('selected'));
        if (wordDisplay) wordDisplay.textContent = '...';
        if (statusMsg) {
            statusMsg.textContent = 'Klik tombol suku kata di atas untuk menyusun kata!';
            statusMsg.className = 'text-muted font-mono';
        }
    };

    function updatePintarBacaDisplay() {
        if (!wordDisplay) return;
        const formedWord = selectedSyllables.join('');
        wordDisplay.textContent = formedWord.toUpperCase();

        if (validWords[formedWord]) {
            statusMsg.textContent = validWords[formedWord];
            statusMsg.className = 'text-accent fw-bold fs-5 animate__animated animate__bounceIn';
            currentScore += 10;
            if (starScore) starScore.textContent = `★ ${currentScore} PTS`;
            playSoundEffect(900);
        } else if (formedWord.length >= 4) {
            statusMsg.textContent = '🤔 Hmmm, coba kombinasi suku kata lain (misal: PIN + TAR)!';
            statusMsg.className = 'text-warning font-mono';
        }
    }

    function playSoundEffect(freq) {
        try {
            const ctx = new (window.AudioContext || window.webkitAudioContext)();
            const osc = ctx.createOscillator();
            const gain = ctx.createGain();
            osc.type = 'sine';
            osc.frequency.value = freq;
            gain.gain.setValueAtTime(0.05, ctx.currentTime);
            gain.gain.exponentialRampToValueAtTime(0.00001, ctx.currentTime + 0.15);
            osc.connect(gain);
            gain.connect(ctx.destination);
            osc.start();
            osc.stop(ctx.currentTime + 0.15);
        } catch (e) {
            // Audio context disabled
        }
    }

    /* -------------------------------------------------------------------------- */
    /* 4. PINTARBACA TAB SWITCHER (SISWA VS GURU)                                 */
    /* -------------------------------------------------------------------------- */
    window.switchPintarBacaTab = function (tab) {
        const viewSiswa = document.getElementById('pbViewSiswa');
        const viewGuru = document.getElementById('pbViewGuru');
        const btnSiswa = document.getElementById('pbTabBtnSiswa');
        const btnGuru = document.getElementById('pbTabBtnGuru');

        if (tab === 'siswa') {
            if (viewSiswa) viewSiswa.style.display = 'block';
            if (viewGuru) viewGuru.style.display = 'none';
            if (btnSiswa) btnSiswa.classList.add('active');
            if (btnGuru) btnGuru.classList.remove('active');
        } else {
            if (viewSiswa) viewSiswa.style.display = 'none';
            if (viewGuru) viewGuru.style.display = 'block';
            if (btnSiswa) btnSiswa.classList.remove('active');
            if (btnGuru) btnGuru.classList.add('active');
        }
    };

    /* -------------------------------------------------------------------------- */
    /* 5. COPY CONTACT EMAIL TO CLIPBOARD HELPER                                  */
    /* -------------------------------------------------------------------------- */
    window.copyContactEmail = function (btn) {
        const email = 'hizqiachandrawiguno@gmail.com';
        if (navigator.clipboard && navigator.clipboard.writeText) {
            navigator.clipboard.writeText(email).then(() => {
                showCopiedFeedback(btn);
            }).catch(() => {
                fallbackCopyText(email, btn);
            });
        } else {
            fallbackCopyText(email, btn);
        }
    };

    function showCopiedFeedback(btn) {
        if (!btn) return;
        const originalHtml = btn.innerHTML;
        btn.innerHTML = '<i class="fa-solid fa-check text-success me-1"></i> Tersalin!';
        btn.classList.add('border-success');
        setTimeout(() => {
            btn.innerHTML = originalHtml;
            btn.classList.remove('border-success');
        }, 2500);
    }

    function fallbackCopyText(text, btn) {
        const textArea = document.createElement("textarea");
        textArea.value = text;
        textArea.style.position = "fixed";
        textArea.style.left = "-999999px";
        document.body.appendChild(textArea);
        textArea.focus();
        textArea.select();
        try {
            document.execCommand('copy');
            showCopiedFeedback(btn);
        } catch (err) {
            console.error('Fallback: Oops, unable to copy', err);
        }
        document.body.removeChild(textArea);
    }

    /* -------------------------------------------------------------------------- */
    /* 6. 3D INTERACTIVE CARD TILT & GLASS SHEEN (GPU-ACCELERATED)               */
    /* -------------------------------------------------------------------------- */
    const projectCards = document.querySelectorAll('.project-card');
    projectCards.forEach(card => {
        card.addEventListener('mousemove', function (e) {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            const centerX = rect.width / 2;
            const centerY = rect.height / 2;
            const rotX = ((centerY - y) / centerY) * 6;
            const rotY = ((x - centerX) / centerX) * 6;
            card.style.transform = `perspective(1000px) rotateX(${rotX.toFixed(2)}deg) rotateY(${rotY.toFixed(2)}deg) translateY(-4px)`;
            card.style.setProperty('--glare-x', `${((x / rect.width) * 100).toFixed(1)}%`);
            card.style.setProperty('--glare-y', `${((y / rect.height) * 100).toFixed(1)}%`);
        });

        card.addEventListener('mouseleave', function () {
            card.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg) translateY(0px)';
        });
    });

    /* -------------------------------------------------------------------------- */
    /* 7. COMMAND PALETTE LIVE FILTER SEARCH                                      */
    /* -------------------------------------------------------------------------- */
    const cmdInput = document.getElementById('cmdPaletteInput');
    if (cmdInput) {
        cmdInput.addEventListener('input', function () {
            const query = cmdInput.value.toLowerCase().trim();
            const items = document.querySelectorAll('#cmdPaletteList .cmd-item');

            items.forEach(item => {
                const text = item.textContent.toLowerCase();
                if (!query || text.includes(query)) {
                    item.style.display = 'flex';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    }

    /* -------------------------------------------------------------------------- */
    /* 8. BEFORE/AFTER RETOUCH SLIDER DRAG INTERACTION (INLINE & MODAL)           */
    /* -------------------------------------------------------------------------- */
    function initSliderInteraction(sliderId, overlayId, handleId) {
        const slider = document.getElementById(sliderId);
        const overlay = document.getElementById(overlayId);
        const handle = document.getElementById(handleId);

        if (!slider || !overlay || !handle) return;

        let isDragging = false;

        function updatePosition(clientX) {
            const rect = slider.getBoundingClientRect();
            let offsetX = clientX - rect.left;
            let percent = (offsetX / rect.width) * 100;
            percent = Math.max(0, Math.min(100, percent));
            overlay.style.width = percent + '%';
            handle.style.left = percent + '%';
        }

        slider.addEventListener('mousedown', function (e) {
            isDragging = true;
            updatePosition(e.clientX);
        });

        window.addEventListener('mouseup', function () {
            isDragging = false;
        });

        window.addEventListener('mousemove', function (e) {
            if (isDragging) {
                updatePosition(e.clientX);
            }
        });

        slider.addEventListener('touchstart', function (e) {
            isDragging = true;
            if (e.touches && e.touches[0]) {
                updatePosition(e.touches[0].clientX);
            }
        }, { passive: true });

        window.addEventListener('touchend', function () {
            isDragging = false;
        });

        window.addEventListener('touchmove', function (e) {
            if (isDragging && e.touches && e.touches[0]) {
                updatePosition(e.touches[0].clientX);
            }
        }, { passive: true });
    }


    /* -------------------------------------------------------------------------- */
    /* 9. REAL-TIME AUDIO WAVEFORM CANVAS VISUALIZER                               */
    /* -------------------------------------------------------------------------- */
    const waveCanvas = document.getElementById('audioWaveCanvas');
    if (waveCanvas) {
        const ctx = waveCanvas.getContext('2d');
        const barCount = 7;
        let heights = new Array(barCount).fill(4);
        let waveRafId = null;

        function renderWaveform() {
            ctx.clearRect(0, 0, waveCanvas.width, waveCanvas.height);
            const barWidth = 4;
            const gap = 5;
            const startX = (waveCanvas.width - (barCount * (barWidth + gap) - gap)) / 2;

            for (let i = 0; i < barCount; i++) {
                let targetHeight = 4;
                if (isAudioPlaying) {
                    targetHeight = 4 + Math.sin(Date.now() * 0.009 + i * 1.3) * 8 + Math.random() * 5;
                }
                heights[i] += (targetHeight - heights[i]) * 0.25;
                const h = Math.max(3, Math.min(22, heights[i]));
                const y = (waveCanvas.height - h) / 2;

                ctx.fillStyle = isAudioPlaying ? '#E36B32' : '#8C847B';
                ctx.beginPath();
                if (ctx.roundRect) {
                    ctx.roundRect(startX + i * (barWidth + gap), y, barWidth, h, 2);
                } else {
                    ctx.rect(startX + i * (barWidth + gap), y, barWidth, h);
                }
                ctx.fill();
            }

            if (isAudioPlaying) {
                waveRafId = requestAnimationFrame(renderWaveform);
            } else {
                waveRafId = null;
            }
        }

        window.startWaveformVisualizer = function () {
            if (!waveRafId) {
                waveRafId = requestAnimationFrame(renderWaveform);
            }
        };

        window.stopWaveformVisualizer = function () {
            if (waveRafId) {
                cancelAnimationFrame(waveRafId);
                waveRafId = null;
            }
            renderWaveform(); // Draw idle frame once
        };

        renderWaveform(); // Initial static frame draw
    }

});

// RITISTIC PROJECT ARTWORK GALLERY SELECTOR
window.selectRitisticArtwork = function (imgUrl, title, desc, category, cardEl) {
    const activeImg = document.getElementById('ritisticActiveImg');
    const activeTitle = document.getElementById('ritisticActiveTitle');
    const activeDesc = document.getElementById('ritisticActiveDesc');
    const activeCategory = document.getElementById('ritisticActiveCategory');

    if (activeImg) {
        activeImg.style.opacity = '0.4';
        activeImg.src = imgUrl;
        activeImg.onload = () => { activeImg.style.opacity = '1'; };
    }
    if (activeTitle) activeTitle.textContent = title;
    if (activeDesc) activeDesc.textContent = desc;
    if (activeCategory) activeCategory.textContent = category;

    document.querySelectorAll('.ritistic-thumb-card').forEach(c => c.classList.remove('active'));
    if (cardEl) cardEl.classList.add('active');
};

window.zoomActiveRitisticImage = function () {
    const activeImg = document.getElementById('ritisticActiveImg');
    const activeTitle = document.getElementById('ritisticActiveTitle');
    const activeDesc = document.getElementById('ritisticActiveDesc');
    const activeCategory = document.getElementById('ritisticActiveCategory');

    if (activeImg && window.openImageLightbox) {
        window.openImageLightbox(
            activeImg.src,
            activeTitle ? activeTitle.textContent : 'Ritistic Project Artwork',
            activeDesc ? activeDesc.textContent : '',
            activeCategory ? activeCategory.textContent : 'Graphic Art'
        );
    }
};

// DRP OUTSTANDING TEENS ARTWORK GALLERY SELECTOR
window.selectDrpArtwork = function (imgUrl, title, desc, category, cardEl) {
    const activeImg = document.getElementById('drpActiveImg');
    const activeTitle = document.getElementById('drpActiveTitle');
    const activeDesc = document.getElementById('drpActiveDesc');
    const activeCategory = document.getElementById('drpActiveCategory');

    if (activeImg) {
        activeImg.style.opacity = '0.4';
        activeImg.src = imgUrl;
        activeImg.onload = () => { activeImg.style.opacity = '1'; };
    }
    if (activeTitle) activeTitle.textContent = title;
    if (activeDesc) activeDesc.textContent = desc;
    if (activeCategory) activeCategory.textContent = category;

    if (cardEl && cardEl.parentElement && cardEl.parentElement.parentElement) {
        cardEl.parentElement.parentElement.querySelectorAll('.ritistic-thumb-card').forEach(c => c.classList.remove('active'));
        cardEl.classList.add('active');
    }
};

window.zoomActiveDrpImage = function () {
    const activeImg = document.getElementById('drpActiveImg');
    const activeTitle = document.getElementById('drpActiveTitle');
    const activeDesc = document.getElementById('drpActiveDesc');
    const activeCategory = document.getElementById('drpActiveCategory');

    if (activeImg && window.openImageLightbox) {
        window.openImageLightbox(
            activeImg.src,
            activeTitle ? activeTitle.textContent : 'DRP Teens Artwork',
            activeDesc ? activeDesc.textContent : '',
            activeCategory ? activeCategory.textContent : 'Social Media Design'
        );
    }
};

