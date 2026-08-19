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
    if (galleryContainer) {
        galleryContainer.innerHTML = '';
        if (expData.details.gallery && Array.isArray(expData.details.gallery)) {
            expData.details.gallery.forEach(item => {
                const col = document.createElement('div');
                col.className = 'col-12';
                col.innerHTML = `
                    <div class="exp-gallery-item-clean">
                        <img src="${item.image}" alt="${item.title}" class="exp-gallery-img mb-2 border">
                        <small class="fw-bold font-heading d-block text-dark mb-1">${item.title}</small>
                        <small class="text-muted d-block lh-sm" style="font-size: 0.78rem;">${item.caption}</small>
                    </div>
                `;
                galleryContainer.appendChild(col);
            });
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
        document.body.style.overflow = '';
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

document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') {
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
        if (!introOverlay || introOverlay.classList.contains('dismissed')) return;

        // Start background ambient music at 10% volume
        playBgMusic();

        // Morph subtitle text to Journey Entrance indicator
        const subTitle = document.querySelector('.intro-subtitle');
        if (subTitle) {
            subTitle.innerHTML = '<span class="text-accent fw-bold animate__animated animate__pulse animate__infinite"><i class="fa-solid fa-rocket me-1"></i> ENTERING HIZQIA\'S CREATIVE JOURNEY...</span>';
        }

        // Trigger 3D Zoom Tunnel dismissal & land into hero artboard canvas
        introOverlay.classList.add('dismissed');
        document.body.classList.add('journey-entering');
        document.body.style.overflow = '';

        setTimeout(() => {
            introOverlay.style.display = 'none';
        }, 1000);
    };

    if (introOverlay && introTextEl) {
        document.body.style.overflow = 'hidden';
        const welcomeMessage = "Welcome to My Portfolio";
        let textIndex = 0;
        const typingSpeed = 100; // ms per character (smooth & elegant)

        function runIntroTypewriter() {
            if (textIndex < welcomeMessage.length) {
                introTextEl.textContent += welcomeMessage.charAt(textIndex);
                textIndex++;

                // Sync progress bar fill
                if (introProgress) {
                    const percent = Math.round((textIndex / welcomeMessage.length) * 100);
                    introProgress.style.width = percent + '%';
                }

                setTimeout(runIntroTypewriter, typingSpeed);
            } else {
                // Typing finished - complete progress bar & stay for 3 seconds before auto transition
                if (introProgress) introProgress.style.width = '100%';
                setTimeout(() => {
                    dismissStudioIntro();
                }, 3000); // 3 seconds display duration
            }
        }

        setTimeout(runIntroTypewriter, 600);
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
            if (hardView) hardView.classList.remove('d-none');
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
    /* TYPEWRITER ANIMATION FOR NAME HIZQIA CHANDRA WIGUNO                        */
    /* -------------------------------------------------------------------------- */
    const nameEl = document.getElementById('typewriterName');
    if (nameEl) {
        const fullText = "Hizqia Chandra Wiguno";
        let charIndex = 0;
        nameEl.textContent = "";

        function typeChar() {
            if (charIndex < fullText.length) {
                nameEl.textContent += fullText.charAt(charIndex);
                charIndex++;
                setTimeout(typeChar, 80 + Math.random() * 40);
            }
        }

        setTimeout(typeChar, 400);
    }


    /* -------------------------------------------------------------------------- */
    /* DYNAMIC INTERSECTION OBSERVER FOR FADE IN ON SCROLL (PREVENTS POPPING OUT) */
    /* -------------------------------------------------------------------------- */
    const revealElements = document.querySelectorAll('.reveal-on-scroll');
    
    if ('IntersectionObserver' in window) {
        const observerOptions = {
            root: null,
            rootMargin: '0px 0px -20px 0px',
            threshold: 0.05
        };

        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('revealed');
                    revealObserver.unobserve(entry.target);
                }
            });
        }, observerOptions);

        revealElements.forEach(el => revealObserver.observe(el));
    } else {
        revealElements.forEach(el => el.classList.add('revealed'));
    }


    /* -------------------------------------------------------------------------- */
    /* 1. SCROLLSPY NAVBAR & VERTICAL JOURNEY DOT TRACKER                         */
    /* -------------------------------------------------------------------------- */
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.studio-navbar .nav-link-custom');
    const dotLinks = document.querySelectorAll('.journey-dot-pagination .dot-item');

    function updateActiveNavbar() {
        let scrollY = window.pageYOffset;

        sections.forEach(current => {
            const sectionHeight = current.offsetHeight;
            const sectionTop = current.offsetTop - 180;
            const sectionId = current.getAttribute('id');

            if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
                navLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === `#${sectionId}`) {
                        link.classList.add('active');
                    }
                });
                dotLinks.forEach(dot => {
                    dot.classList.remove('active');
                    if (dot.getAttribute('href') === `#${sectionId}`) {
                        dot.classList.add('active');
                    }
                });
            }
        });
    }

    window.addEventListener('scroll', updateActiveNavbar);
    updateActiveNavbar();


    /* -------------------------------------------------------------------------- */
    /* 2. PARALLAX DESIGN SCROLL EFFECTS (DESKTOP ONLY)                           */
    /* -------------------------------------------------------------------------- */
    const avatarArtboard = document.querySelector('.avatar-artboard-wrapper');

    window.addEventListener('scroll', function () {
        let scroll = window.scrollY;

        if (avatarArtboard) {
            if (window.innerWidth > 991) {
                avatarArtboard.style.transform = `translateY(${scroll * 0.04}px)`;
            } else {
                avatarArtboard.style.transform = 'none';
            }
        }
    });

    window.addEventListener('resize', function () {
        if (avatarArtboard && window.innerWidth <= 991) {
            avatarArtboard.style.transform = 'none';
        }
    });

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

});

