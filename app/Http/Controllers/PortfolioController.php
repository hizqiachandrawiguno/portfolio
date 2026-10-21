<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $bio = [
            'name' => 'Hizqia Chandra Wiguno',
            'nickname' => 'Hizqia',
            'handle' => '@HizqiaChandra',
            'role' => 'Graphic Designer & Multimedia Engineer',
            'education' => 'Politeknik Negeri Media Kreatif Jakarta',
            'major' => 'Teknologi Rekayasa Multimedia (TRM)',
            'gpa' => '3.70',
            'status' => 'Tersedia untuk Pekerjaan & Proyek Kreatif',
            'photo' => asset('images/hizqia_profile.webp'),
            'catchy_summary' => 'Saya menciptakan identitas visual yang berkarakter, tata letak tipografi yang presisi, dan pengalaman multimedia yang fungsional untuk brand dan produk digital.',
            'contact' => [
                'email' => 'hizqiachandrawiguno@gmail.com',
                'location' => 'Jakarta / Bogor, Indonesia',
                'instagram' => 'https://instagram.com/HizqiaChandra',
                'linkedin' => 'https://www.linkedin.com/in/hizqiachandrawiguno/',
                'github' => 'https://github.com/hizqiachandrawiguno'
            ]
        ];

        $skills = [
            'software' => [
                [
                    'name' => 'Adobe Photoshop',
                    'level_badge' => 'Daily Driver',
                    'code' => 'Ps',
                    'icon' => 'fa-solid fa-paintbrush',
                    'color' => '#31A8FF',
                    'category' => 'Graphic Design',
                    'focus' => 'Key Visual & Compositing',
                    'desc' => 'Photo retouching, social media visual systems, poster layouting, dan digital photo compositing berskala cetak & digital.'
                ],
                [
                    'name' => 'Adobe Illustrator',
                    'level_badge' => 'Daily Driver',
                    'code' => 'Ai',
                    'icon' => 'fa-solid fa-pen-nib',
                    'color' => '#FF9A00',
                    'category' => 'Vector & Logo',
                    'focus' => 'Brand Identity & Vector',
                    'desc' => 'Perancangan logo, visual identity guideline, ilustrasi vektor presisi, tipografi kustom, dan materi POSM siap cetak.'
                ],
                [
                    'name' => 'Figma',
                    'level_badge' => 'Advanced Workflow',
                    'code' => 'Fg',
                    'icon' => 'fa-brands fa-figma',
                    'color' => '#A259FF',
                    'category' => 'UI/UX Design',
                    'focus' => 'Interface & Design Systems',
                    'desc' => 'Wireframing, prototyping interaktif, penataan design tokens (warna, grid, spacing), dan handoff rapi untuk developer.'
                ],
                [
                    'name' => 'Adobe Premiere Pro',
                    'level_badge' => 'Production Ready',
                    'code' => 'Pr',
                    'icon' => 'fa-solid fa-film',
                    'color' => '#9999FF',
                    'category' => 'Video Editing',
                    'focus' => 'Audio-Visual Production',
                    'desc' => 'Timeline narrative cutting, pacing ritmis, color grading sinematik, serta sinkronisasi audio untuk video promosi & profil korporat.'
                ],
                [
                    'name' => 'Adobe After Effects',
                    'level_badge' => 'Production Ready',
                    'code' => 'Ae',
                    'icon' => 'fa-solid fa-wand-magic-sparkles',
                    'color' => '#D291FF',
                    'category' => 'Motion Graphics',
                    'focus' => 'Kinetic Motion & VFX',
                    'desc' => 'Tipografi kinetik, animasi logo, visual effect compositing, dan transisi motion dinamis untuk kebutuhan media digital.'
                ],
                [
                    'name' => 'Canva',
                    'level_badge' => 'Rapid Layout',
                    'code' => 'Cn',
                    'icon' => 'fa-solid fa-file-lines',
                    'color' => '#00B5E2',
                    'category' => 'Graphic Design',
                    'focus' => 'Fast Turnaround Design',
                    'desc' => 'Produksi cepat aset promosi harian, template presentasi, dan materi visual kolaboratif untuk kebutuhan tim.'
                ]
            ],
            'web' => [
                [
                    'name' => 'HTML5 & CSS3',
                    'level_badge' => 'Core Foundation',
                    'code' => 'HC',
                    'icon' => 'fa-brands fa-html5',
                    'color' => '#0284C7',
                    'category' => 'Web Core',
                    'focus' => 'Semantic & Precision Grid',
                    'desc' => 'Struktur semantik ramah aksesibilitas, responsive grid & flexbox, animasi CSS fluid, dan custom CSS variable tokens.'
                ],
                [
                    'name' => 'JavaScript (ES6+)',
                    'level_badge' => 'Interactive UI',
                    'code' => 'JS',
                    'icon' => 'fa-brands fa-js',
                    'color' => '#EAB308',
                    'category' => 'Frontend Logic',
                    'focus' => 'DOM & Micro-Interactions',
                    'desc' => 'Manipulasi DOM, kontrol komponen interaktif, penanganan event dinamis, dan integrasi library animasi.'
                ],
                [
                    'name' => 'PHP & Laravel',
                    'level_badge' => 'Backend Framework',
                    'code' => 'LV',
                    'icon' => 'fa-brands fa-laravel',
                    'color' => '#FF2D20',
                    'category' => 'Web Architecture',
                    'focus' => 'Blade Engine & MVC',
                    'desc' => 'Arsitektur MVC, dynamic routing, templating modular Blade, dan manajemen controller data portofolio dinamis.'
                ],
                [
                    'name' => 'Bootstrap 5',
                    'level_badge' => 'CSS Framework',
                    'code' => 'Bs',
                    'icon' => 'fa-brands fa-bootstrap',
                    'color' => '#7952B3',
                    'category' => 'Frontend',
                    'focus' => 'Responsive UI Systems',
                    'desc' => 'Implementasi grid responsif 12 kolom, adaptasi breakpoint mobile-first, dan kustomisasi utility classes terstruktur.'
                ]
            ],
            'soft' => [
                [
                    'name' => 'Desain Berbasis Tujuan & Karakter',
                    'tag' => 'PRINSIP 01',
                    'badge' => 'Fondasi Desain',
                    'icon' => 'fa-solid fa-compass-drafting',
                    'color' => '#E36B32',
                    'bg_gradient' => '#FFFFFF',
                    'desc' => 'Setiap elemen visual—mulai dari grid, hierarki tipografi, hingga pemilihan warna—diciptakan dengan alasan terukur untuk menyampaikan pesan brand, bukan sekadar dekorasi acak.'
                ],
                [
                    'name' => 'Empati Kolaborasi & Sinergi Tim',
                    'tag' => 'PRINSIP 02',
                    'badge' => 'Komunikasi & Eksekusi',
                    'icon' => 'fa-solid fa-handshake-angle',
                    'color' => '#D97706',
                    'bg_gradient' => '#FFFFFF',
                    'desc' => 'Mampu menerjemahkan brief bisnis dan aspirasi klien menjadi arahan visual yang lugas, serta berkolaborasi erat bersama developer dan stakeholder lintas divisi.'
                ],
                [
                    'name' => 'Ketelitian & Standar Kualitas Tinggi',
                    'tag' => 'PRINSIP 03',
                    'badge' => 'Presisi Detail',
                    'icon' => 'fa-solid fa-microscope',
                    'color' => '#C2410C',
                    'bg_gradient' => '#FFFFFF',
                    'desc' => 'Perhatian mendalam pada detail mikro: kejelasan hierarki informasi, keselarasan tipografi, konsistensi design tokens, dan kesiapan file untuk tahap produksi akhir.'
                ]
            ]
        ];

        // 5 Experiences (Magang & Organisasi) with Journey Milestone Data
        $experiences = [
            [
                'id' => 'exp-eguards',
                'layer_num' => '01',
                'title' => 'EGuards Indonesia',
                'role' => 'Graphic Design Intern',
                'period' => '01/2021 - 06/2021',
                'category' => 'Magang',
                'badge' => 'Magang',
                'type' => 'Internship Program',
                'icon' => 'fa-solid fa-palette',
                'accent' => '#EA580C',
                'is_active' => false,
                'short_desc' => 'Memproduksi konten visual untuk platform cetak dan digital, termasuk website, media sosial, dan materi kampanye EGuards Indonesia.',
                'details' => [
                    'company' => 'EGuards Indonesia',
                    'workflow' => "1. Memproduksi visual content untuk media cetak dan platform digital (website, media sosial, serta materi kampanye).\n2. Berkolaborasi dalam penyusunan visual promosi kampanye bersama instansi terkait.\n3. Memperkuat citra dan konsistensi identitas visual brand EGuards di berbagai platform online.",
                    'tools' => ['Adobe Photoshop', 'Adobe Illustrator', 'Canva', 'Digital Media Design'],
                    'learnings' => 'Mengasah keahlian eksekusi desain grafis multi-platform (print & digital), adaptasi visual identity brand, serta alur kerja produksi materi promosi profesional.',
                    'gallery' => [
                        ['title' => 'Materi Marketing Campaign', 'image' => asset('images/pharos_indonesia.webp'), 'caption' => 'Desain Banner & Visual Promosi EGuards Indonesia'],
                        ['title' => 'Social Media Content', 'image' => asset('images/pintarbaca_hero.webp'), 'caption' => 'Materi Publikasi & Infografis Digital']
                    ]
                ]
            ],
            [
                'id' => 'exp-sera',
                'layer_num' => '02',
                'title' => 'PT Serasi Autoraya (SERA - Member of Astra)',
                'role' => 'Marketing Designer Intern',
                'period' => '2025',
                'category' => 'Magang',
                'badge' => 'Magang Astra Group',
                'type' => 'Magang Astra Group',
                'icon' => 'fa-solid fa-briefcase',
                'accent' => '#C2410C',
                'is_active' => false,
                'short_desc' => 'Merancang aset visual branding, materi promosi digital korporat, dan kampanye media sosial berstandar Astra.',
                'details' => [
                    'company' => 'PT Serasi Autoraya (SERA - Member of Astra)',
                    'workflow' => "1. Menganalisis brief kebutuhan promosi dan menerapkan dokumen Brand Guidelines Astra (warna korporat, tipografi, & logo clearance).\n2. Merancang materi 3D Spatial & POSM Event fisik (Desain Tenda Booth 3x3 M, Standing Banner 60x160 cm, serta Backdrop Stage Sales Forum 2025 skala 1:10).\n3. Mengeksekusi Digital Key Visual (KV) dengan teknik photo compositing bertema liburan (efek 3D pop-out smartphone).\n4. Memproduksi materi promosi aktivasi booth, twibbon interaktif, dan kampanye seasonal kreatif (TRAC & IBID Christmas Trees).",
                    'tools' => ['Adobe Photoshop', 'Adobe Illustrator', 'Photo Compositing', '3D Spatial Mockup', 'Figma', 'Print Scale Layout'],
                    'learnings' => 'Menguasai ekosistem desain kampanye 360° (Spatial Event Stage, POSM Cetak, Digital Manipulation, hingga Social Engagement Twibbon) dengan kepatuhan tinggi terhadap Brand Guidelines Astra Group serta koordinasi efektif bersama tim Marketing Communication.',
                    'gallery' => [
                        [
                            'title' => 'Tenda Booth TRAC (3x3 M)',
                            'category' => 'Spatial & Event Booth',
                            'image' => asset('images/trac_tenda_booth.webp'),
                            'caption' => 'Desain spatial 3D mockup booth resmi TRAC untuk event offline & shuttle stop, lengkap dengan spesifikasi teknis 3x3 M.'
                        ],
                        [
                            'title' => 'Standing Banner TRACtoGo Promo',
                            'category' => 'Print Collateral / POSM',
                            'image' => asset('images/trac_standing_banner.webp'),
                            'caption' => 'Materi promosi cetak ukuran 60x160 cm (Albatross Dopp) dengan hierarki informasi promo sewa mobil & download app.'
                        ],
                        [
                            'title' => 'Key Visual: Teman di Setiap Kilometer',
                            'category' => 'Creative Photo Manipulation',
                            'image' => asset('images/trac_key_visual_pantai.webp'),
                            'caption' => 'Digital photo compositing efek 3D pop-out smartphone menghubungkan suasana penat kantor menuju liburan santai di pantai.'
                        ],
                        [
                            'title' => 'Flyer Event: Liburan Banyak Bonusnya',
                            'category' => 'Event Promo & Merchandising',
                            'image' => asset('images/trac_promo_booth.webp'),
                            'caption' => 'Desain aktivasi booth event dengan showcase merchandise kit resmi (lanyard, fan, tote bag) & voucher rental mobil.'
                        ],
                        [
                            'title' => 'Seasonal Flyer: TRAC Holiday Gift',
                            'category' => 'Corporate Internal Campaign',
                            'image' => asset('images/trac_holiday_gift.webp'),
                            'caption' => 'Materi promosi libur Natal & Tahun Baru khusus karyawan Astra Group dengan metafora kado pita Menara Astra.'
                        ],
                        [
                            'title' => 'Backdrop Stage: Sales Forum 2025',
                            'category' => 'Spatial & Event Stage',
                            'image' => asset('images/trac_sales_forum_backdrop.webp'),
                            'caption' => 'Perancangan backdrop panggung modular Sales Forum 2025 di Crowne Plaza Bandung dengan tema retro-futuristic grid & skala teknis 1:10.'
                        ],
                        [
                            'title' => 'Twibbon: Sales Forum 2025',
                            'category' => 'Event Branding & Engagement',
                            'image' => asset('images/trac_sales_forum_twibbon.webp'),
                            'caption' => 'Desain photo frame twibbon 1:1 untuk engagement media sosial peserta & karyawan Sales Forum TRAC 2025.'
                        ],
                        [
                            'title' => 'Creative Poster: TRAC Christmas Tree (Red)',
                            'category' => 'Creative Concept / Social Media',
                            'image' => asset('images/trac_christmas_red.webp'),
                            'caption' => 'Desain poster ucapan Natal minimalis & cerdas: sorot lampu mobil putih membentuk siluet pohon natal berujung bintang.'
                        ],
                        [
                            'title' => 'Creative Poster: IBID Christmas Tree (Green)',
                            'category' => 'Creative Concept / Social Media',
                            'image' => asset('images/ibid_christmas_tree.webp'),
                            'caption' => 'Visualisasi pohon natal kreatif tersusun dari tumpukan mobil lelang IBID (Member of Astra) bergradasi warna hijau festive.'
                        ]
                    ]
                ]
            ],
            [
                'id' => 'exp-pharos',
                'layer_num' => '03',
                'title' => 'PT Pharos Indonesia',
                'role' => 'Digital Marketing Intern & Video Editor',
                'period' => '2025',
                'category' => 'Magang',
                'badge' => 'Magang',
                'type' => 'Internship Program',
                'icon' => 'fa-solid fa-video',
                'accent' => '#D97706',
                'is_active' => false,
                'short_desc' => 'Membangun editorial calendar, memproduksi & mengedit 30+ konten visual/video per bulan, serta mengoptimalkan strategi konten berbasis Google Analytics.',
                'details' => [
                    'company' => 'PT Pharos Indonesia',
                    'workflow' => "1. Riset & formulasi konten edukasi kesehatan digital (platform iDokter by Panakea) dengan pendekatan visual yang ramah dan mudah dipahami masyarakat.\n2. Merancang infografis kesehatan bertema edukasi HIV dengan tipografi dinamis, ilustrasi ekspresif, dan hierarki pertanyaan medis (Q&A).\n3. Mengembangkan ide kreatif & memproduksi video pendek TikTok/Reels interaktif (tren Gen-Z, komedi situasi kantor, & motion challenge).\n4. Menyunting visual cover, layout tipografi retro/grid, dan aset stiker digital untuk memaksimalkan rasio klik (CTR) & engagement.",
                    'tools' => ['Adobe Photoshop', 'Adobe Illustrator', 'Adobe Premiere Pro', 'Social Media Strategy', 'TikTok Analytics'],
                    'learnings' => 'Mengasah visual storytelling dalam mentransformasi topik medis yang sensitif menjadi konten edukatif yang inklusif, serta menguasai tren algoritma video pendek (TikTok/Reels) untuk meningkatkan engagement audiens muda.',
                    'gallery' => [
                        [
                            'title' => 'Edukasi: Menghapus Stigma HIV',
                            'category' => 'Health Edu Infographic',
                            'image' => asset('images/pharos_edukasi_stigma_hiv.webp'),
                            'caption' => 'Desain konten edukasi digital iDokter by Panakea (Pharos) dengan tipografi ekspresif dan visual emosional untuk mengedukasi masyarakat tentang stigma HIV.'
                        ],
                        [
                            'title' => 'Edukasi: Mengapa Tes HIV Penting?',
                            'category' => 'Medical Q&A Content',
                            'image' => asset('images/pharos_edukasi_tes_hiv.webp'),
                            'caption' => 'Infografis Q&A medis bertema pentingnya deteksi dini HIV dengan representasi nakes ramah dan skema warna hijau khas platform kesehatan iDokter.'
                        ],
                        [
                            'title' => 'TikTok Cover: POV Gen-Z Saat Puasa',
                            'category' => 'Short Video / TikTok Content',
                            'image' => asset('images/pharos_tiktok_genz_puasa.webp'),
                            'caption' => 'Desain cover & konsep konten video pendek situasi komedi Gen-Z di lingkungan kantor farmasi Pharos dengan bingkai retro grid browser.'
                        ],
                        [
                            'title' => 'TikTok Cover: Butuh Ini Bukan Cinta!',
                            'category' => 'Viral Trend & Entertainment',
                            'image' => asset('images/pharos_tiktok_butuh_ini.webp'),
                            'caption' => 'Aset visual cover video pendek dengan gaya stiker kertas sobek (ripped paper) yang ekspresif untuk mendorong interaksi dan retensi audiens TikTok.'
                        ],
                        [
                            'title' => 'TikTok Cover: Velocity Pro Challenge',
                            'category' => 'Trend & Motion Content',
                            'image' => asset('images/pharos_tiktok_velocity_pro.webp'),
                            'caption' => 'Desain thumbnail video tren Velocity Pro dengan elemen doodle graffiti, kacamata pixel, dan rantai emas untuk nuansa konten pop-culture yang seru.'
                        ]
                    ]
                ]
            ],
            [
                'id' => 'exp-konselor',
                'layer_num' => '04',
                'title' => 'Konselor Sebaya Politeknik Negeri Media Kreatif Jakarta',
                'role' => 'Ketua Organisasi',
                'period' => '2025 - 2026',
                'category' => 'Organisasi',
                'badge' => 'Ketua Organisasi',
                'type' => 'Leadership / Organisasi Kampus',
                'icon' => 'fa-solid fa-hands-holding-child',
                'accent' => '#E36B32',
                'is_active' => false,
                'short_desc' => 'Memimpin organisasi konseling mahasiswa kampus, memfasilitasi program kesehatan mental, dan koordinasi dengan bagian kemahasiswaan.',
                'details' => [
                    'company' => 'Konselor Sebaya Politeknik Negeri Media Kreatif Jakarta',
                    'workflow' => "1. Mengorganisir program pendampingan konseling sebaya dan workshop kesehatan mental mahasiswa.\n2. Menjalin kemitraan dan koordinasi resmi dengan bagian Kemahasiswaan Polimedia.\n3. Memimpin rapat koordinasi pengurus serta monitoring evaluasi program kerja berkala.",
                    'tools' => ['Organizational Leadership', 'Counseling Ethics', 'Event Management', 'Public Relations'],
                    'learnings' => 'Mengembangkan kepemimpinan yang suportif dan inklusif, kemampuan mendengarkan aktif (active listening), serta advokasi program kesehatan mental mahasiswa.',
                    'gallery' => []
                ]
            ],
            [
                'id' => 'exp-drp',
                'layer_num' => '05',
                'title' => 'DRP Outstanding Teens',
                'role' => 'Wakil Ketua (Vice Chairman)',
                'period' => '07/2020 - Sekarang',
                'category' => 'Organisasi',
                'badge' => 'Wakil Ketua',
                'type' => 'Leadership / Organisasi',
                'icon' => 'fa-solid fa-users',
                'accent' => '#EA580C',
                'is_active' => true,
                'short_desc' => 'Menetapkan visi departemen bersama Head of Department, memimpin perencanaan 15+ event per tahun, mengarahkan 30 panitia, serta membina 30 kader kepemimpinan remaja.',
                'details' => [
                    'company' => 'DRP Outstanding Teens Community',
                    'workflow' => "1. Menetapkan visi strategis dan sasaran target departemen bersama Head of Department.\n2. Memimpin perencanaan dan eksekusi 15+ event per tahun, termasuk annual retreat untuk 300 peserta.\n3. Mendelegasikan dan mengoordinasikan tanggung jawab kepada 30 anggota panitia agar seluruh program berjalan lancar.\n4. Membimbing serta mementori 30 anggota remaja melalui program kepemimpinan untuk mencetak calon-calon pemimpin baru.",
                    'tools' => ['Leadership Management', 'Event Planning', 'Team Mentoring', 'Public Speaking'],
                    'learnings' => 'Mengasah kepemimpinan strategis, manajemen acara skala besar (300 peserta), pembinaan talenta kepemimpinan, serta koordinasi tim cross-functional secara berkelanjutan.',
                    'gallery' => []
                ]
            ]
        ];

        // Official BNSP & Verification Certificates Section Data
        $certificates = [
            [
                'id' => 'cert-bnsp-official',
                'title' => 'Sertifikat Kompetensi BNSP - Junior Graphic Designer',
                'issuer' => 'Badan Nasional Sertifikasi Profesi (BNSP) & LSP P3 Teknologi Digital',
                'cert_num' => '62090 2166 3 0099707 2024',
                'reg_num' => 'TIK 1565 22215 2024',
                'year' => '02 Juli 2024 (Berlaku 3 Tahun)',
                'badge' => 'Sertifikasi Profesi BNSP',
                'icon' => 'fa-solid fa-award',
                'color' => '#C2410C',
                'pdf_url' => asset('images/cert_bnsp.pdf'),
                'desc' => 'Sertifikat Kompetensi Profesi Resmi dari Badan Nasional Sertifikasi Profesi (BNSP) Republik Indonesia atas nama Hizqia Chandra Wiguno. Diterbitkan di Yogyakarta oleh Lembaga Sertifikasi Profesi Teknologi Digital.',
                'competencies' => [
                    'A. Mengaplikasikan Prinsip Dasar Desain',
                    'B. Menerapkan Prinsip Dasar Komunikasi',
                    'C. Menerapkan Design Brief',
                    'D. Mengoperasikan Perangkat Lunak Desain',
                    'E. Menciptakan Karya Desain'
                ]
            ],
            [
                'id' => 'cert-kominfo-vsga',
                'title' => 'Sertifikat Pelatihan Kominfo - Junior Graphic Designer',
                'issuer' => 'BPSDMP Jakarta & Digital Talent Scholarship Kominfo RI',
                'cert_num' => '19381291150-89/VSGA/BLSDM.Kominfo/2024',
                'reg_num' => 'VSGA Digitalent 2024',
                'year' => '04 Juli 2024 (24 Jam Pelatihan)',
                'badge' => 'Kominfo RI Scholarship',
                'icon' => 'fa-solid fa-graduation-cap',
                'color' => '#D97706',
                'pdf_url' => asset('images/cert_kominfo.pdf'),
                'desc' => 'Sertifikat Kelulusan Pelatihan Intensif Vocational School Graduate Academy (VSGA) Digital Talent Scholarship Kominfo RI untuk skema Junior Graphic Designer.',
                'competencies' => [
                    'A. Mengaplikasikan Prinsip Dasar Desain (4 JP)',
                    'B. Menerapkan Prinsip Dasar Komunikasi (4 JP)',
                    'C. Menerapkan Design Brief (4 JP)',
                    'D. Mengoperasikan Perangkat Lunak Desain (4 JP)',
                    'E. Menciptakan Karya Desain (8 JP)'
                ]
            ],
            [
                'id' => 'cert-rubrik-ai',
                'title' => 'Sertifikat Rubrik Grafis - Mastering Adobe Illustrator',
                'issuer' => 'Rubrik Grafis (Digital Creative Online Class)',
                'cert_num' => 'RG-AI-2024-0517',
                'reg_num' => 'Digital Creative Class',
                'year' => '17 Mei 2024',
                'badge' => 'Mastery Certification',
                'icon' => 'fa-solid fa-pen-nib',
                'color' => '#EA580C',
                'pdf_url' => asset('images/cert_rubrik_ai.pdf'),
                'desc' => 'Sertifikat Kelulusan Kelas Online Mastering Adobe Illustrator dari Rubrik Grafis. Memverifikasi penguasaan perangkat lunak vektor, pembuatan ilustrasi presisi, dan branding identity visual.',
                'competencies' => [
                    'A. Penguasaan Pen Tool, Pathfinder, & Shape Builder',
                    'B. Teknik Gradients, Color Swatches, & Appearance Styles',
                    'C. Desain Logo Vektor & Typography Artboard Layout'
                ]
            ],
            [
                'id' => 'cert-rubrik-ui',
                'title' => 'Sertifikat Rubrik Grafis - UI Design for Landing Page',
                'issuer' => 'Rubrik Grafis (Digital Creative Online Class)',
                'cert_num' => 'RG-UI-2024-0517',
                'reg_num' => 'Digital Creative Class',
                'year' => '17 Mei 2024',
                'badge' => 'UI/UX Specialization',
                'icon' => 'fa-solid fa-laptop-code',
                'color' => '#E36B32',
                'pdf_url' => asset('images/cert_rubrik_ui.pdf'),
                'desc' => 'Sertifikat Spesialisasi UI Design for Landing Page dari Rubrik Grafis. Memverifikasi kemampuan merancang tata letak web landing page yang modern, komunikatif, dan conversion-focused.',
                'competencies' => [
                    'A. User Journey Mapping & Wireframing Landing Page',
                    'B. High-Fidelity Component UI Layouting di Figma',
                    'C. Penerapan Responsive Grid System & Micro-Interactions'
                ]
            ]
        ];

        // 6 Flagship Projects categorized into Graphic Design, Video Editing & Web UI/UX
        $projects = [
            // --- 1. GRAPHIC & SOCIAL MEDIA DESIGN ---
            [
                'id' => 'proj-drp-social',
                'title' => 'DRP Outstanding Teens - Social Media & Event Visuals',
                'category' => 'graphic',
                'category_label' => 'Social Media & Community Branding',
                'action_type' => 'modal',
                'modal_target' => '#drpTeensDemoModal',
                'btn_text' => 'Lihat Galeri Feed DRP Teens',
                'btn_icon' => 'fa-images',
                'image' => asset('images/drp_teens_showcase_hero.webp') . '?v=2.2',
                'badge' => 'Social Media & Event Branding',
                'short_desc' => 'Perancangan materi visual feed Instagram DRP Outstanding Teens: poster kebaktian remaja, kartu tema khotbah, dan ucapan hari raya dengan beragam eksplorasi visual.',
                'full_desc' => 'Perancangan identitas dan materi publikasi media sosial untuk komunitas remaja DRP Outstanding Teens (DOT Teens). Mengeksplorasi fleksibilitas gaya visual yang dinamis dan relevan bagi audiens Gen-Z: mulai dari pendekatan pop-comic halftone pada tema "Self Improvement", tata letak editorial ripped-paper & tape pada tema "Dependable", frame polaroid retro pada "Iman, Pengharapan dan Kasih", street-poster grunge pada "Jeremiah Gen vs Everybody", hingga perayaan natal elegan bertema "Merry Christmas & Happy New Year".',
                'tags' => ['Social Media Feed', 'Photoshop', 'Illustrator', 'Youth Branding', 'Event Poster', 'Typography'],
                'accent' => '#E36B32',
                'gallery_items' => [
                    [
                        'id' => 'self-improvement',
                        'title' => 'Self Improvement - Ka Kayla (8 Okt 2023)',
                        'category' => 'Pop-Art & Comic Grid Layout',
                        'image' => asset('images/drp_teens_self_improvement.webp'),
                        'desc' => 'Desain feed bernuansa komik dengan panel multi-frame, speech bubble, garis sunburst dinamis, serta tipografi judul 3D pop warna kuning cerah.'
                    ],
                    [
                        'id' => 'dependable',
                        'title' => 'Dependable - Ka Jonas (6 Ags 2023)',
                        'category' => 'Grunge Editorial & Tape Collage',
                        'image' => asset('images/drp_teens_dependable.webp'),
                        'desc' => 'Eksplorasi gaya ripped-paper dengan aksen lakban hitam, palet warna olive green maskulin, tipografi bold berlapis, dan kolase foto dokumentasi ibadah.'
                    ],
                    [
                        'id' => 'iman-pengharapan-kasih',
                        'title' => 'Iman, Pengharapan & Kasih - Ka Jonas (11 Jun 2023)',
                        'category' => 'Polaroid Frame & Paper Texture',
                        'image' => asset('images/drp_teens_iman_pengharapan_kasih.webp'),
                        'desc' => 'Komposisi bertingkat frame polaroid putih dengan bayangan realistis, tipografi handwriting doodle, latar biru bersih, dan kutipan ayat Mazmur 127:4.'
                    ],
                    [
                        'id' => 'jeremiah-gen',
                        'title' => 'Jeremiah Gen vs Everybody - Ka Kezia (7 Mei 2023)',
                        'category' => 'Street-Poster & Halftone Texture',
                        'image' => asset('images/drp_teens_jeremiah_gen.webp'),
                        'desc' => 'Desain poster sesi QnA remaja dengan palet kontras ungu dan kuning neon, efek robekan kertas grunge, dan tekstur halftone pada latar belakang jemaat.'
                    ],
                    [
                        'id' => 'merry-christmas',
                        'title' => 'Merry Christmas & Happy New Year',
                        'category' => 'Festive 3D Typography & Winter Art',
                        'image' => asset('images/drp_teens_merry_christmas.webp'),
                        'desc' => 'Visual ucapan Natal dan Tahun Baru bernuansa midnight blue elegan, tipografi 3D mewah dengan aksen emas, bintang bersinar, dan ilustrasi pohon cemara bersalju.'
                    ]
                ]
            ],
            [
                'id' => 'proj-ritistic',
                'title' => 'Ritistic Project - Visual Communication & Social Media Branding',
                'category' => 'graphic',
                'category_label' => 'Social Media Branding & Graphic Art',
                'action_type' => 'modal',
                'modal_target' => '#ritisticDemoModal',
                'btn_text' => 'Lihat Galeri Karya Ritistic',
                'btn_icon' => 'fa-images',
                'image' => asset('images/ritistic_showcase_hero.webp') . '?v=2.2',
                'badge' => 'Social Media & Graphic Art',
                'short_desc' => 'Perancangan materi komunikasi visual Ritistic Project: poster peringatan hari nasional & keagamaan, serta kartu visual profiling mahasiswa bernuansa warm terracotta.',
                'full_desc' => 'Produksi materi desain grafis multi-format untuk Ritistic Project. Proyek ini mencakup perancangan visual commemorative days (Hari Sumpah Pemuda 2024 bergaya retro-modern hand-drawn dan Hari Besar Tahun Baru Islam 1446 H), serta visual profiling anggota/mahasiswa dengan komposisi foto subjek, tipografi bold, dan ornamen buku ilustratif dengan konsistensi penempatan logo Ritistic.',
                'tags' => ['Social Media Design', 'Illustrator', 'Photoshop', 'Typography', 'Commemorative Art', 'Profiling Card'],
                'accent' => '#EA580C',
                'gallery_items' => [
                    [
                        'id' => 'sumpah-pemuda',
                        'title' => 'Hari Sumpah Pemuda 2024',
                        'category' => 'Commemorative Social Media Poster',
                        'image' => asset('images/ritistic_sumpah_pemuda.webp'),
                        'desc' => 'Desain feed Instagram dengan pendekatan ilustrasi garis hand-drawn, ornamen bendera merah putih bertekstur halftone, frame tepi organik, serta tipografi retro-modern.'
                    ],
                    [
                        'id' => 'tahun-baru-islam',
                        'title' => 'Tahun Baru Islam 1446 H / 2024',
                        'category' => 'Holiday Commemorative Visual',
                        'image' => asset('images/ritistic_tahun_baru_islam.webp'),
                        'desc' => 'Visual peringatan Tahun Baru Islam dengan perpaduan siluet arsitektur masjid berwarna emas hangat, elemen bedug dan ketupat, serta border ornamen geometris Islam simetris.'
                    ],
                    [
                        'id' => 'profiling-wida',
                        'title' => 'Visual Profiling: Nur Fitria (Wida)',
                        'category' => 'Member Profile Card Layout',
                        'image' => asset('images/ritistic_profiling_wida.webp'),
                        'desc' => 'Kartu profil mahasiswa Polimedia dengan teknik photo cutting jas almamater ungu, kontras tipografi nama bold warna oranye hangat, script handwriting accents, dan doodle background edukatif.'
                    ],
                    [
                        'id' => 'profiling-sukmawati',
                        'title' => 'Visual Profiling: Sukmawati (Ira)',
                        'category' => 'Member Profile Card Layout',
                        'image' => asset('images/ritistic_profiling_sukmawati.webp'),
                        'desc' => 'Sistem tata letak visual profil anggota Ritistic Project dengan konsistensi grid tipografi nama vertikal, ilustrasi buku di bagian bawah, serta penempatan handle media sosial di sudut kanan atas.'
                    ]
                ]
            ],

            // --- 2. VIDEO EDITING & MOTION PRODUCTION ---
            [
                'id' => 'proj-eleccion',
                'title' => 'Video Editing: Eleccion Worship - Allah Roh Kudus',
                'category' => 'video',
                'category_label' => 'Live Music Production & Multicam Editing',
                'action_type' => 'video',
                'modal_target' => '#videoPlayerModal',
                'btn_text' => 'Tonton Video Eleccion Worship',
                'btn_icon' => 'fa-circle-play',
                'image' => asset('images/eleccion_worship_hero.webp'),
                'badge' => 'Live Studio Worship 4K',
                'short_desc' => 'Penyuntingan video live recording performa musik "Allah Roh Kudus" oleh Eleccion Worship dengan sinkronisasi multicam 4K, cinematic color grading, dan audio mastering sync.',
                'full_desc' => 'Produksi dan penyuntingan video live recording cover lagu "Allah Roh Kudus" oleh Eleccion Worship di Diwangkoro Music Production. Bertanggung jawab sebagai Videographer, Video Editor, dan Thumbnail Designer. Mengintegrasikan sinkronisasi multi-angle camera secara presisi, penyesuaian mood lighting studio panggung bernuansa warm & cinematic, integrasi subtitle lirik dinamis, serta audio-visual mastering synchronization.',
                'video_url' => 'https://www.youtube.com/watch?v=skzC2-_f090',
                'video_embed_url' => 'https://www.youtube.com/embed/skzC2-_f090',
                'video_ratio' => '16:9 Full HD',
                'video_duration' => '04:39',
                'video_client' => 'Eleccion Worship (@eleccionworship2016)',
                'video_role' => 'Videographer, Video Editor & Thumbnail Designer',
                'video_workflow' => "1. Multicam Sync & Dynamic Angle Switching: Sinkronisasi waveform audio multi-kamera (Wide Stage, Vocalist Close-up, Guitarist, & Drummer).\n2. Cinematic Color Grading & Studio Mood: Pengolahan pencahayaan studio dengan LUT warm amber & deep contrast yang sinematik.\n3. Audio-Visual Mastering Alignment: Sinkronisasi presisi antara rekaman visual dengan output master audio Diwangkoro Music Production.\n4. Kinetic Lyrics & Cover Thumbnail: Integrasi subtitle lirik terstruktur serta perancangan poster thumbnail YouTube dengan CTR tinggi.",
                'tags' => ['Premiere Pro', 'Multicam Editing', 'Color Grading', 'Live Worship', 'Audio Sync', 'Videography', 'Thumbnail Design'],
                'accent' => '#C2410C'
            ],
            [
                'id' => 'proj-anak-bertanya',
                'title' => 'Video Editing: Anak Bertanya - Eps 1 (GBI ERC Sawangan)',
                'category' => 'video',
                'category_label' => 'Kids Educational Talkshow & Motion Graphics',
                'action_type' => 'video',
                'modal_target' => '#videoPlayerModal',
                'btn_text' => 'Tonton Video Anak Bertanya',
                'btn_icon' => 'fa-circle-play',
                'image' => asset('images/anak_bertanya_hero.webp'),
                'badge' => 'Kids Series & Motion Typography',
                'short_desc' => 'Penyuntingan video series edukasi rohani anak "Anak Bertanya" (Eps 1) dengan motion graphics interaktif, pop-up text ilustratif, animasi dinamis, dan sound FX ceria.',
                'full_desc' => 'Penyuntingan program series edukasi rohani anak "Anak Bertanya" Episode 1: "Siapakah Yang Menciptakan Tuhan?" untuk El-Roi Kids Church - GBI ERC Sawangan. Menggabungkan talkshow interaktif host & narasumber dengan motion graphics edukatif, kinetic text, visual bubble penjelas konsep, serta tata suara ceria dengan SFX komikal untuk menjaga retensi penonton anak dan keluarga.',
                'video_url' => 'https://www.youtube.com/watch?v=bF9YZt4dRGY',
                'video_embed_url' => 'https://www.youtube.com/embed/bF9YZt4dRGY',
                'video_ratio' => '16:9 Full HD',
                'video_duration' => '10:49',
                'video_client' => 'El-Roi Kids Church (GBI ERC Sawangan)',
                'video_role' => 'Video Editor & Motion Designer',
                'video_workflow' => "1. Interactive Pacing & Retention Cut: Pacing editing dinamis dan jump-cut removal untuk mempertahankan retensi fokus anak-anak selama 10+ menit.\n2. Kinetic Motion Graphics & Word Bubble: Pembuatan animasi teks, pop-up icon ilustrasi, dan visual balloon penjelas poin-poin penting di After Effects.\n3. Comic Sound FX & BGM Layering: Penataan efek suara kartun lucu (pop, whoosh, ding) sinkron visual serta pemilihan musik latar ceria dan ramah anak.\n4. Visual Polish & Color Vibrance: Color grading terang, kontras seimbang, serta integrasi lower-thirds & branding El-Roi Kids Church yang konsisten.",
                'tags' => ['After Effects', 'Premiere Pro', 'Motion Graphics', 'Kinetic Typography', 'Kids Edu Series', 'Sound Design'],
                'accent' => '#D97706'
            ],

            // --- 3. UI/UX & WEB PLATFORMS ---
            [
                'id' => 'proj-pintarbaca',
                'title' => 'Website Media Pembelajaran PintarBaca',
                'category' => 'uiux',
                'category_label' => 'UI/UX & EduTech Platform',
                'action_type' => 'modal',
                'modal_target' => '#pintarBacaDemoModal',
                'btn_text' => 'Mainkan Demo PintarBaca',
                'btn_icon' => 'fa-gamepad',
                'image' => asset('images/pintarbaca_hero.webp'),
                'badge' => 'Interactive Web EduTech',
                'short_desc' => 'Platform edukasi web interaktif bagi anak-anak untuk belajar mengeja dan membaca suku kata bahasa Indonesia.',
                'full_desc' => 'PintarBaca dirancang khusus untuk mempermudah anak usia dini belajar membaca suku kata. Menggabungkan ilustrasi visual beresolusi tinggi, skema warna ceria, serta widget interaktif pembentuk kata.',
                'tags' => ['PintarBaca', 'EduTech', 'Suku Kata', 'Bootstrap 5', 'JS Interactive'],
                'accent' => '#EA580C'
            ],
            [
                'id' => 'proj-erc',
                'title' => 'Website ERC Sawangan',
                'category' => 'uiux',
                'category_label' => 'UI/UX & Community Portal',
                'action_type' => 'modal',
                'modal_target' => '#ercDemoModal',
                'btn_text' => 'Lihat Demo Portal Web',
                'btn_icon' => 'fa-globe',
                'image' => asset('images/erc_sawangan_hero.webp'),
                'badge' => 'Community Web Platform',
                'short_desc' => 'Portal web informatif untuk komunitas gereja ERC Sawangan dengan fitur jadwal ibadah dan warta digital.',
                'full_desc' => 'Perancangan antarmuka pengguna (UI/UX) untuk platform komunitas ERC Sawangan. Menampilkan jadwal ibadah, portal artikel warta mingguan, dan sistem navigasi yang rapi serta fully responsive.',
                'tags' => ['UI/UX Design', 'Community Portal', 'Figma', 'Bootstrap 5', 'Responsive Web'],
                'accent' => '#B45309'
            ]
        ];

        return view('portfolio.index', compact('bio', 'skills', 'experiences', 'certificates', 'projects'));
    }
}
