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
            'gpa' => '3.76',
            'status' => 'Lulusan Terbaik / Ready for Hire',
            'photo' => asset('images/hizqia_profile.png'),
            'catchy_summary' => 'I create Visual Identities and Communication pieces with direction, character, and intention behind every detail.',
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
                    'rating' => 8.5,
                    'code' => 'Ps',
                    'icon' => 'fa-solid fa-paintbrush',
                    'color' => '#31A8FF',
                    'category' => 'Graphic Design',
                    'desc' => 'Social Media Design, Photo Retouching, Layouting & Compositing'
                ],
                [
                    'name' => 'Adobe Illustrator',
                    'rating' => 9.2,
                    'code' => 'Ai',
                    'icon' => 'fa-solid fa-pen-nib',
                    'color' => '#FF9A00',
                    'category' => 'Vector & Logo',
                    'desc' => 'Vector Illustration, Brand Identity, Typography & Artboard Layout'
                ],
                [
                    'name' => 'Figma',
                    'rating' => 8.5,
                    'code' => 'Fg',
                    'icon' => 'fa-brands fa-figma',
                    'color' => '#A259FF',
                    'category' => 'UI/UX Design',
                    'desc' => 'High-Fidelity Wireframing, Interactive Prototyping & Design System'
                ],
                [
                    'name' => 'Adobe Premiere Pro',
                    'rating' => 8.0,
                    'code' => 'Pr',
                    'icon' => 'fa-solid fa-film',
                    'color' => '#9999FF',
                    'category' => 'Video Editing',
                    'desc' => 'Timeline Editing, Cinematic Color Grading & Audio Synchronization'
                ],
                [
                    'name' => 'Adobe After Effects',
                    'rating' => 8.0,
                    'code' => 'Ae',
                    'icon' => 'fa-solid fa-wand-magic-sparkles',
                    'color' => '#D291FF',
                    'category' => 'Motion Graphics',
                    'desc' => 'Visual Effects, Keyframe Animation & Kinetic Typography'
                ],
                [
                    'name' => 'Canva',
                    'rating' => 8.7,
                    'code' => 'Cn',
                    'icon' => 'fa-solid fa-file-lines',
                    'color' => '#00B5E2',
                    'category' => 'Graphic Design',
                    'desc' => 'Social Media Design & Layouting'
                ]
            ],
            'web' => [
                [
                    'name' => 'Bootstrap 5',
                    'rating' => 9.0,
                    'code' => 'Bs',
                    'icon' => 'fa-brands fa-bootstrap',
                    'color' => '#7952B3',
                    'category' => 'Frontend',
                    'desc' => 'Responsive Grid System, Custom Utility Classes & UI Styling'
                ],
                [
                    'name' => 'JavaScript',
                    'rating' => 8.5,
                    'code' => 'JS',
                    'icon' => 'fa-brands fa-js',
                    'color' => '#EAB308',
                    'category' => 'Frontend Logic',
                    'desc' => 'DOM Manipulation, Interactive Widgets, Animation & Async APIs'
                ],
                [
                    'name' => 'PHP & Laravel',
                    'rating' => 8.5,
                    'code' => 'LV',
                    'icon' => 'fa-brands fa-laravel',
                    'color' => '#FF2D20',
                    'category' => 'Backend Framework',
                    'desc' => 'MVC Architecture, Blade Engine, Routing & Dynamic Controllers'
                ],
                [
                    'name' => 'HTML5',
                    'rating' => 9.5,
                    'code' => 'HC',
                    'icon' => 'fa-brands fa-html5',
                    'color' => '#0284C7',
                    'category' => 'Web Core',
                    'desc' => 'Semantic Layouts, Flexbox/Grid Math, Custom Animations & CSS Variables'
                ]
            ],
            'soft' => [
                [
                    'name' => 'Creative Problem Solving',
                    'tag' => 'CORE STRENGTH #01',
                    'badge' => '100% Adaptable',
                    'icon' => 'fa-solid fa-brain',
                    'color' => '#8B5CF6',
                    'bg_gradient' => '#FFFFFF',
                    'desc' => 'Mampu mentransformasi brief rumit menjadi solusi visual yang bersih, intuitif, dan berdampak tinggi bagi audiens.'
                ],
                [
                    'name' => 'Team Collaboration & Communication',
                    'tag' => 'CORE STRENGTH #02',
                    'badge' => 'Synergy & Pitching',
                    'icon' => 'fa-solid fa-comments',
                    'color' => '#06B6D4',
                    'bg_gradient' => '#FFFFFF',
                    'desc' => 'Komunikasi efektif dan artikulatif saat berkolaborasi dengan klien, tim developer, maupun tim desain cross-functional.'
                ],
                [
                    'name' => 'Fast Learner & Tech Adaptability',
                    'tag' => 'CORE STRENGTH #03',
                    'badge' => 'Future Ready',
                    'icon' => 'fa-solid fa-bolt',
                    'color' => '#EAB308',
                    'bg_gradient' => '#FFFFFF',
                    'desc' => 'Cepat beradaptasi dan menguasai software grafis baru, AI creative tools, hingga framework web modern tanpa hambatan.'
                ],
                [
                    'name' => 'Time & Deadline Precision',
                    'tag' => 'CORE STRENGTH #04',
                    'badge' => 'On-Time Delivery',
                    'icon' => 'fa-solid fa-stopwatch',
                    'color' => '#10B981',
                    'bg_gradient' => '#FFFFFF',
                    'desc' => 'Manajemen waktu dan alur kerja (workflow) yang disiplin sehingga proyek selesai tepat waktu dengan kualitas maksimal.'
                ],
                [
                    'name' => 'Design Thinking & User Empathy',
                    'tag' => 'CORE STRENGTH #05',
                    'badge' => 'User Centric',
                    'icon' => 'fa-solid fa-lightbulb',
                    'color' => '#F59E0B',
                    'bg_gradient' => '#FFFFFF',
                    'desc' => 'Pendekatan desain berbasis empati pengguna untuk memastikan setiap layout visual tidak hanya estetik tapi juga fungsional.'
                ],
                [
                    'name' => 'Leadership & Project Ownership',
                    'tag' => 'CORE STRENGTH #06',
                    'badge' => 'High Responsibility',
                    'icon' => 'fa-solid fa-users-gear',
                    'color' => '#EC4899',
                    'bg_gradient' => '#FFFFFF',
                    'desc' => 'Tanggung jawab penuh dalam mengawal proyek dari konsep ide mentah, eksekusi visual, hingga final delivery.'
                ]
            ]
        ];

        // 5 Experiences (Magang & Organisasi) with Journey Milestone Data
        $experiences = [
            [
                'id' => 'exp-eguards',
                'layer_num' => '01',
                'title' => 'EGuards Indonesia',
                'role' => 'Marketing Communication Intern',
                'period' => '2023',
                'category' => 'Magang',
                'badge' => 'Magang',
                'type' => 'Internship Program',
                'icon' => 'fa-solid fa-bullhorn',
                'accent' => '#3B82F6',
                'is_active' => false,
                'short_desc' => 'Merancang strategi komunikasi pemasaran, materi promosi visual multi-channel, dan analisis engagement audiens EGuards Indonesia.',
                'details' => [
                    'company' => 'EGuards Indonesia',
                    'workflow' => "1. Menganalisis target audiens & menyusun konsep komunikasi pemasaran digital.\n2. Merancang materi visual promosi dan copywriting kampanye produk.\n3. Memantau engagement audiens dan efektivitas publikasi kampanye marketing.",
                    'tools' => ['Adobe Photoshop', 'Adobe Illustrator', 'Canva', 'Social Media Analytics'],
                    'learnings' => 'Mengasah pemahaman strategi komunikasi pemasaran, penyusunan pesan brand yang persuasif, serta koordinasi campaign promosi terstruktur.',
                    'gallery' => [
                        ['title' => 'Materi Marketing Campaign', 'image' => asset('images/pharos_indonesia.png'), 'caption' => 'Desain Banner & Visual Promosi EGuards Indonesia'],
                        ['title' => 'Social Media Content', 'image' => asset('images/pintarbaca_hero.jpg') . '?v=' . time(), 'caption' => 'Materi Publikasi & Infografis Digital']
                    ]
                ]
            ],
            [
                'id' => 'exp-sera',
                'layer_num' => '02',
                'title' => 'PT Serasi Autoraya (SERA - Member of Astra)',
                'role' => 'Marketing Communication Intern',
                'period' => '2025',
                'category' => 'Magang',
                'badge' => 'Magang Astra Group',
                'type' => 'Magang Astra Group',
                'icon' => 'fa-solid fa-briefcase',
                'accent' => '#0284C7',
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
                            'image' => asset('images/trac_tenda_booth.png'),
                            'caption' => 'Desain spatial 3D mockup booth resmi TRAC untuk event offline & shuttle stop, lengkap dengan spesifikasi teknis 3x3 M.'
                        ],
                        [
                            'title' => 'Standing Banner TRACtoGo Promo',
                            'category' => 'Print Collateral / POSM',
                            'image' => asset('images/trac_standing_banner.png'),
                            'caption' => 'Materi promosi cetak ukuran 60x160 cm (Albatross Dopp) dengan hierarki informasi promo sewa mobil & download app.'
                        ],
                        [
                            'title' => 'Key Visual: Teman di Setiap Kilometer',
                            'category' => 'Creative Photo Manipulation',
                            'image' => asset('images/trac_key_visual_pantai.jpg'),
                            'caption' => 'Digital photo compositing efek 3D pop-out smartphone menghubungkan suasana penat kantor menuju liburan santai di pantai.'
                        ],
                        [
                            'title' => 'Flyer Event: Liburan Banyak Bonusnya',
                            'category' => 'Event Promo & Merchandising',
                            'image' => asset('images/trac_promo_booth.jpg'),
                            'caption' => 'Desain aktivasi booth event dengan showcase merchandise kit resmi (lanyard, fan, tote bag) & voucher rental mobil.'
                        ],
                        [
                            'title' => 'Seasonal Flyer: TRAC Holiday Gift',
                            'category' => 'Corporate Internal Campaign',
                            'image' => asset('images/trac_holiday_gift.jpg'),
                            'caption' => 'Materi promosi libur Natal & Tahun Baru khusus karyawan Astra Group dengan metafora kado pita Menara Astra.'
                        ],
                        [
                            'title' => 'Backdrop Stage: Sales Forum 2025',
                            'category' => 'Spatial & Event Stage',
                            'image' => asset('images/trac_sales_forum_backdrop.jpg'),
                            'caption' => 'Perancangan backdrop panggung modular Sales Forum 2025 di Crowne Plaza Bandung dengan tema retro-futuristic grid & skala teknis 1:10.'
                        ],
                        [
                            'title' => 'Twibbon: Sales Forum 2025',
                            'category' => 'Event Branding & Engagement',
                            'image' => asset('images/trac_sales_forum_twibbon.png'),
                            'caption' => 'Desain photo frame twibbon 1:1 untuk engagement media sosial peserta & karyawan Sales Forum TRAC 2025.'
                        ],
                        [
                            'title' => 'Creative Poster: TRAC Christmas Tree (Red)',
                            'category' => 'Creative Concept / Social Media',
                            'image' => asset('images/trac_christmas_red.jpg'),
                            'caption' => 'Desain poster ucapan Natal minimalis & cerdas: sorot lampu mobil putih membentuk siluet pohon natal berujung bintang.'
                        ],
                        [
                            'title' => 'Creative Poster: IBID Christmas Tree (Green)',
                            'category' => 'Creative Concept / Social Media',
                            'image' => asset('images/ibid_christmas_tree.jpg'),
                            'caption' => 'Visualisasi pohon natal kreatif tersusun dari tumpukan mobil lelang IBID (Member of Astra) bergradasi warna hijau festive.'
                        ]
                    ]
                ]
            ],
            [
                'id' => 'exp-pharos',
                'layer_num' => '03',
                'title' => 'PT Pharos Indonesia',
                'role' => 'Social Media Specialist Intern',
                'period' => '2025',
                'category' => 'Magang',
                'badge' => 'Magang',
                'type' => 'Internship Program',
                'icon' => 'fa-solid fa-hashtag',
                'accent' => '#10B981',
                'is_active' => false,
                'short_desc' => 'Mengelola strategi konten media sosial multi-platform, memproduksi infografis edukasi medis iDokter by Panakea, dan konten kreatif TikTok/Reels Pharos.',
                'details' => [
                    'company' => 'PT Pharos Indonesia',
                    'workflow' => "1. Riset & formulasi konten edukasi kesehatan digital (platform iDokter by Panakea) dengan pendekatan visual yang ramah dan mudah dipahami masyarakat.\n2. Merancang infografis kesehatan bertema edukasi HIV dengan tipografi dinamis, ilustrasi ekspresif, dan hierarki pertanyaan medis (Q&A).\n3. Mengembangkan ide kreatif & memproduksi video pendek TikTok/Reels interaktif (tren Gen-Z, komedi situasi kantor, & motion challenge).\n4. Menyunting visual cover, layout tipografi retro/grid, dan aset stiker digital untuk memaksimalkan rasio klik (CTR) & engagement.",
                    'tools' => ['Adobe Photoshop', 'Adobe Illustrator', 'Adobe Premiere Pro', 'Social Media Strategy', 'TikTok Analytics'],
                    'learnings' => 'Mengasah visual storytelling dalam mentransformasi topik medis yang sensitif menjadi konten edukatif yang inklusif, serta menguasai tren algoritma video pendek (TikTok/Reels) untuk meningkatkan engagement audiens muda.',
                    'gallery' => [
                        [
                            'title' => 'Edukasi: Menghapus Stigma HIV',
                            'category' => 'Health Edu Infographic',
                            'image' => asset('images/pharos_edukasi_stigma_hiv.png'),
                            'caption' => 'Desain konten edukasi digital iDokter by Panakea (Pharos) dengan tipografi ekspresif dan visual emosional untuk mengedukasi masyarakat tentang stigma HIV.'
                        ],
                        [
                            'title' => 'Edukasi: Mengapa Tes HIV Penting?',
                            'category' => 'Medical Q&A Content',
                            'image' => asset('images/pharos_edukasi_tes_hiv.png'),
                            'caption' => 'Infografis Q&A medis bertema pentingnya deteksi dini HIV dengan representasi nakes ramah dan skema warna hijau khas platform kesehatan iDokter.'
                        ],
                        [
                            'title' => 'TikTok Cover: POV Gen-Z Saat Puasa',
                            'category' => 'Short Video / TikTok Content',
                            'image' => asset('images/pharos_tiktok_genz_puasa.png'),
                            'caption' => 'Desain cover & konsep konten video pendek situasi komedi Gen-Z di lingkungan kantor farmasi Pharos dengan bingkai retro grid browser.'
                        ],
                        [
                            'title' => 'TikTok Cover: Butuh Ini Bukan Cinta!',
                            'category' => 'Viral Trend & Entertainment',
                            'image' => asset('images/pharos_tiktok_butuh_ini.png'),
                            'caption' => 'Aset visual cover video pendek dengan gaya stiker kertas sobek (ripped paper) yang ekspresif untuk mendorong interaksi dan retensi audiens TikTok.'
                        ],
                        [
                            'title' => 'TikTok Cover: Velocity Pro Challenge',
                            'category' => 'Trend & Motion Content',
                            'image' => asset('images/pharos_tiktok_velocity_pro.png'),
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
                'accent' => '#8B5CF6',
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
                'role' => 'Ketua Organisasi',
                'period' => '2026 - Saat ini',
                'category' => 'Organisasi',
                'badge' => 'Active Leadership',
                'type' => 'Leadership / Organisasi',
                'icon' => 'fa-solid fa-crown',
                'accent' => '#F97316',
                'is_active' => true,
                'short_desc' => 'Memimpin visi organisasi pemuda, mengarahkan tim lintas divisi, serta menginisiasi program kerja pengembangan kepemudaan.',
                'details' => [
                    'company' => 'DRP Outstanding Teens Community',
                    'workflow' => "1. Menentukan arah visi strategis dan target program kerja organisasi.\n2. Mengkoordinasikan dan membina tim lintas divisi (Acara, Kreatif, Humas, Logistik).\n3. Mengawasi eksekusi acara bulanan pemuda, budgeting, dan evaluasi performa kepengurusan.",
                    'tools' => ['Leadership Management', 'Project Planning', 'Public Speaking', 'Team Coaching'],
                    'learnings' => 'Mengasah kemampuan decision-making strategis, kepemimpinan berbasis empati, manajemen konflik tim, serta komunikasi publik berskala besar.',
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
                'color' => '#DC2626',
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
                'color' => '#2563EB',
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
                'color' => '#7C3AED',
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
                'title' => 'Social Media DRP Outstanding Teens',
                'category' => 'graphic',
                'category_label' => 'Graphic & Social Media Design',
                'action_type' => 'lightbox',
                'modal_target' => '#imageLightboxModal',
                'btn_text' => 'Lihat Feed & Carousel Desain',
                'btn_icon' => 'fa-magnifying-glass-plus',
                'image' => asset('images/drp_social_media_hero.jpg') . '?v=' . time(),
                'badge' => 'Social Media Carousel & Feed',
                'short_desc' => 'Perancangan aset visual feed Instagram, materi carousel edukasi, poster event kepemudaan, dan template story berkarakter dinamis.',
                'full_desc' => 'Desain komunikasi visual media sosial untuk komunitas DRP Outstanding Teens. Menggunakan identitas warna ungu & oranye energik, tipografi modern, serta sistem layout grid multi-slide yang konsisten untuk engagement Gen-Z.',
                'tags' => ['Photoshop', 'Illustrator', 'Social Media Feed', 'Carousel', 'Youth Branding'],
                'accent' => '#8B5CF6'
            ],
            [
                'id' => 'proj-ritistic',
                'title' => 'Ritistic Project - Brand & Vector Art',
                'category' => 'graphic',
                'category_label' => 'Brand Identity & Graphic Art',
                'action_type' => 'lightbox',
                'modal_target' => '#imageLightboxModal',
                'btn_text' => 'Lihat Brand Identity & Art',
                'btn_icon' => 'fa-palette',
                'image' => asset('images/ritistic_project_hero.jpg') . '?v=' . time(),
                'badge' => 'Brand Identity & Vector Art',
                'short_desc' => 'Eksplorasi identitas visual brand kreatif, custom lettering, merchandise tote bag, sticker pack, dan seni ilustrasi vektor.',
                'full_desc' => 'Perancangan visual identity komprehensif untuk Ritistic Project. Mencakup logo lettering custom, palette warna ekspresif (neon teal, coral, & navy), panduan brand guidelines, serta visual merchandise komersial.',
                'tags' => ['Brand Identity', 'Custom Lettering', 'Vector Art', 'Merchandise', 'Illustrator'],
                'accent' => '#EC4899'
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
                'image' => asset('images/eleccion_worship_hero.jpg') . '?v=' . time(),
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
                'accent' => '#3B82F6'
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
                'image' => asset('images/anak_bertanya_hero.jpg') . '?v=' . time(),
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
                'accent' => '#10B981'
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
                'image' => asset('images/pintarbaca_hero.jpg') . '?v=' . time(),
                'badge' => 'Interactive Web EduTech',
                'short_desc' => 'Platform edukasi web interaktif bagi anak-anak untuk belajar mengeja dan membaca suku kata bahasa Indonesia.',
                'full_desc' => 'PintarBaca dirancang khusus untuk mempermudah anak usia dini belajar membaca suku kata. Menggabungkan ilustrasi visual beresolusi tinggi, skema warna ceria, serta widget interaktif pembentuk kata.',
                'tags' => ['PintarBaca', 'EduTech', 'Suku Kata', 'Bootstrap 5', 'JS Interactive'],
                'accent' => '#F59E0B'
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
                'image' => asset('images/erc_sawangan_hero.jpg') . '?v=' . time(),
                'badge' => 'Community Web Platform',
                'short_desc' => 'Portal web informatif untuk komunitas gereja ERC Sawangan dengan fitur jadwal ibadah dan warta digital.',
                'full_desc' => 'Perancangan antarmuka pengguna (UI/UX) untuk platform komunitas ERC Sawangan. Menampilkan jadwal ibadah, portal artikel warta mingguan, dan sistem navigasi yang rapi serta fully responsive.',
                'tags' => ['UI/UX Design', 'Community Portal', 'Figma', 'Bootstrap 5', 'Responsive Web'],
                'accent' => '#0D9488'
            ]
        ];

        return view('portfolio.index', compact('bio', 'skills', 'experiences', 'certificates', 'projects'));
    }
}
