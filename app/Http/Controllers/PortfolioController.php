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
                    'workflow' => "1. Menganalisis brief kebutuhan promosi dan menerapkan dokumen Brand Guidelines Astra.\n2. Melakukan sketsa konseptual visual layouting & memilih elemen grafis korporat.\n3. Mengeksekusi desain high-resolution multi-platform (Instagram Feed, Story, & Spanduk Digital Internal).",
                    'tools' => ['Adobe Illustrator', 'Adobe Photoshop', 'Figma'],
                    'learnings' => 'Memahami penerapan standar desain korporat skala nasional, pentingnya kedisiplinan brand identity Astra, serta mengasah komunikasi efisien dalam koordinasi lintas tim Marketing Communication.',
                    'gallery' => [
                        ['title' => 'Visual Branding Astra', 'image' => asset('images/pharos_indonesia.png'), 'caption' => 'Artboard Materi Campaign Social Media Korporat Astra'],
                        ['title' => 'Banner & Spanduk Digital', 'image' => asset('images/polimedia_library.png'), 'caption' => 'Spanduk Digital Internal & Feed Instagram Promosi SERA']
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
                'short_desc' => 'Mengelola strategi konten media sosial, produksi grafis feed edukasi kesehatan, dan konten video TikTok untuk brand Pharos.',
                'details' => [
                    'company' => 'PT Pharos Indonesia',
                    'workflow' => "1. Menganalisis tren konten edukasi kesehatan di TikTok & Instagram.\n2. Merancang grafik feed carousel edukatif dan visual promosi produk farmasi.\n3. Menyunting video pendek dengan potongan ritme audio yang dinamis di Premiere Pro.",
                    'tools' => ['Adobe Photoshop', 'Adobe Premiere Pro', 'Adobe Illustrator', 'TikTok Analytics'],
                    'learnings' => 'Mengembangkan keahlian visual storytelling untuk menyampaikan pesan medis secara menarik, menguasai ritme penyuntingan video pendek, serta manajemen waktu tenggat campaign harian.',
                    'gallery' => [
                        ['title' => 'Social Media Campaign Feed', 'image' => asset('images/pharos_indonesia.png'), 'caption' => 'Feed Carousel 10 Slide Infografis Kesehatan Pharos'],
                        ['title' => 'Motion Video TikTok', 'image' => asset('images/pharos_indonesia.png'), 'caption' => 'Thumbnail & Layouting Konten Video Pendek']
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
                    'gallery' => [
                        ['title' => 'Program Konseling Kampus', 'image' => asset('images/polimedia_library.png'), 'caption' => 'Dokumentasi Workshop & Edukasi Mental Health Mahasiswa'],
                        ['title' => 'Branding Organisasi Sebaya', 'image' => asset('images/erc_sawangan_hero.jpg') . '?v=' . time(), 'caption' => 'Aset Visual & Materi Informasi Layanan Konseling']
                    ]
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
                    'gallery' => [
                        ['title' => 'Youth Leadership Event', 'image' => asset('images/dot_platform_hero.png') . '?v=' . time(), 'caption' => 'Dokumentasi Acara & Rapat Kerja Kepengurusan DRP'],
                        ['title' => 'Branding Media Pemuda', 'image' => asset('images/pintarbaca_hero.jpg') . '?v=' . time(), 'caption' => 'Aset Visual & Publikasi Komunitas DRP Outstanding Teens']
                    ]
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

        // 3 Key Projects with Individual Demo Modals Setup
        $projects = [
            [
                'id' => 'proj-pintarbaca',
                'title' => 'Website Media Pembelajaran PintarBaca',
                'category' => 'uiux',
                'category_label' => 'UI/UX & EduTech Platform',
                'modal_target' => '#pintarBacaDemoModal',
                'btn_text' => 'Mainkan Demo PintarBaca',
                'btn_icon' => 'fa-gamepad',
                'image' => asset('images/pintarbaca_hero.jpg') . '?v=' . time(),
                'badge' => 'Interactive Web EduTech',
                'short_desc' => 'Platform edukasi web interaktif bagi anak-anak untuk belajar mengeja dan membaca suku kata bahasa Indonesia.',
                'full_desc' => 'PintarBaca dirancang khusus untuk mempermudah anak usia dini belajar membaca suku kata. Menggabungkan ilustrasi visual beresolusi tinggi, skema warna ceria, serta widget interaktif pembentuk kata.',
                'tags' => ['PintarBaca', 'EduTech', 'Suku Kata', 'Bootstrap 5', 'JS Interactive', 'Canvas Artboard'],
                'accent' => '#F59E0B'
            ],
            [
                'id' => 'proj-erc',
                'title' => 'Website ERC Sawangan',
                'category' => 'uiux',
                'category_label' => 'UI/UX & Community Portal',
                'modal_target' => '#ercDemoModal',
                'btn_text' => 'Lihat Demo Portal Web',
                'btn_icon' => 'fa-globe',
                'image' => asset('images/erc_sawangan_hero.jpg') . '?v=' . time(),
                'badge' => 'Community Web Platform',
                'short_desc' => 'Portal web informatif untuk komunitas gereja ERC Sawangan dengan fitur jadwal ibadah dan warta digital.',
                'full_desc' => 'Perancangan antarmuka pengguna (UI/UX) untuk platform komunitas ERC Sawangan. Menampilkan jadwal ibadah, portal artikel warta mingguan, dan sistem navigasi yang rapi serta fully responsive.',
                'tags' => ['UI/UX Design', 'Community Portal', 'Figma', 'Bootstrap 5', 'Responsive Web'],
                'accent' => '#0D9488'
            ],
            [
                'id' => 'proj-drp',
                'title' => 'Website DRP Outstanding Teens',
                'category' => 'uiux',
                'category_label' => 'UI/UX & Youth Community Web',
                'modal_target' => '#drpDemoModal',
                'btn_text' => 'Lihat Demo Website DRP',
                'btn_icon' => 'fa-users',
                'image' => asset('images/dot_platform_hero.png') . '?v=' . time(),
                'badge' => 'Youth Community Web',
                'short_desc' => 'Platform web komunitas pemuda DRP Outstanding Teens untuk informasi kegiatan, registrasi event, dan media karya.',
                'full_desc' => 'Perancangan antarmuka portal komunitas pemuda DRP Outstanding Teens. Dilengkapi jadwal kegiatan rutin, dokumentasi event pemuda, serta sistem informasi komunitas yang modern dan interaktif.',
                'tags' => ['Youth Web Portal', 'UI/UX Design', 'Figma', 'Community Platform', 'Modern Web'],
                'accent' => '#8B5CF6'
            ]
        ];

        return view('portfolio.index', compact('bio', 'skills', 'experiences', 'certificates', 'projects'));
    }
}
