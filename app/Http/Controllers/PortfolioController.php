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
            'catchy_summary' => 'Saya Graphic Designer yang merancang key visual, materi booth event, dan media digital agar pesan brand tersampaikan jelas. Terbiasa bekerja mengikuti brand guideline perusahaan maupun kebutuhan event publik, dengan tipografi yang rapi dan kontras warna yang terjaga.',
            'contact' => [
                'email' => 'hizqiachandrawiguno@gmail.com',
                'location' => 'Jakarta / Bogor, Indonesia',
                'instagram' => 'https://instagram.com/HizqiaChandra',
                'linkedin' => 'https://www.linkedin.com/in/hizqiachandrawiguno/',
                'github' => 'https://github.com/hizqiachandrawiguno'
            ]
        ];

        $skills = [
            'output_groups' => [
                [
                    'id' => 'group-graphic',
                    'title' => 'Desain Grafis',
                    'tools' => [
                        ['name' => 'Adobe Photoshop', 'mono' => 'Ps'],
                        ['name' => 'Adobe Illustrator', 'mono' => 'Ai'],
                        ['name' => 'Canva', 'mono' => null],
                    ],
                    'examples' => [
                        ['label' => 'TRAC Astra (Lalala Fest 2025)', 'url' => '#proj-trac-astra'],
                        ['label' => 'DRP Teens', 'url' => '#proj-drp-social'],
                        ['label' => 'Ritistic Project', 'url' => '#proj-ritistic'],
                    ]
                ],
                [
                    'id' => 'group-video',
                    'title' => 'Video & Motion',
                    'tools' => [
                        ['name' => 'Adobe Premiere Pro', 'mono' => 'Pr'],
                        ['name' => 'Adobe After Effects', 'mono' => 'Ae'],
                    ],
                    'examples' => [
                        ['label' => 'Eleccion Worship', 'url' => '#proj-eleccion'],
                        ['label' => 'Anak Bertanya', 'url' => '#proj-anak-bertanya'],
                    ]
                ],
                [
                    'id' => 'group-web',
                    'title' => 'Web & Antarmuka',
                    'tools' => [
                        ['name' => 'Laravel', 'mono' => null],
                        ['name' => 'Bootstrap', 'mono' => null],
                        ['name' => 'Figma', 'mono' => null],
                    ],
                    'examples' => [
                        ['label' => 'PintarBaca', 'url' => '#proj-pintarbaca'],
                        ['label' => 'Portal web komunitas GBI ERC Sawangan', 'url' => '#proj-erc'],
                    ]
                ]
            ],
            'soft' => [
                [
                    'name' => 'Analisis Brief & Palet Warna Brand',
                    'tag' => 'PRINSIP 01',
                    'badge' => 'Eksplorasi Warna',
                    'icon' => 'fa-solid fa-compass-drafting',
                    'color' => '#E36B32',
                    'bg_gradient' => '#FFFFFF',
                    'desc' => 'Memulai proses dari menganalisis kebutuhan brief dan warna resmi brand, seperti memadukan identitas TRAC Astra dengan atmosfer visual Lalala Festival agar pesan promosi tersampaikan dan brand tetap mudah dikenali.'
                ],
                [
                    'name' => 'Tipografi Rapi & Tidak Menumpuk',
                    'tag' => 'PRINSIP 02',
                    'badge' => 'Keterbacaan Teks',
                    'icon' => 'fa-solid fa-handshake-angle',
                    'color' => '#D97706',
                    'bg_gradient' => '#FFFFFF',
                    'desc' => 'Menjaga susunan teks dan hierarki informasi agar tidak menumpuk di bidang desain, sehingga judul promosi langsung terbaca jelas di layar ponsel maupun materi cetak fisik.'
                ],
                [
                    'name' => 'Kontras Warna & Keselarasan Identitas',
                    'tag' => 'PRINSIP 03',
                    'badge' => 'Kejelasan Visual',
                    'icon' => 'fa-solid fa-microscope',
                    'color' => '#C2410C',
                    'bg_gradient' => '#FFFFFF',
                    'desc' => 'Menjaga kontras warna antara teks dan latar belakang serta menghindari kombinasi warna yang bertabrakan, memastikan materi visual mewakili brand dan nyaman dilihat.'
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
                'short_desc' => 'Merancang aset visual branding, materi promosi digital, dan materi kampanye media sosial berstandar Astra.',
                'details' => [
                    'company' => 'PT Serasi Autoraya (SERA - Member of Astra)',
                    'workflow' => "1. Menganalisis brief kebutuhan promosi dan menerapkan dokumen Brand Guidelines Astra (warna resmi brand, tipografi, & logo clearance).\n2. Merancang materi 3D Spatial & POSM Event fisik (Desain Tenda Booth 3x3 M, Standing Banner 60x160 cm, serta Backdrop Stage Sales Forum 2025 skala 1:10).\n3. Mengeksekusi Digital Key Visual (KV) dengan teknik photo compositing bertema liburan (efek 3D pop-out smartphone).\n4. Memproduksi materi promosi aktivasi booth, twibbon interaktif, dan kampanye seasonal kreatif (TRAC & IBID Christmas Trees).",
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
                    'learnings' => 'Mengasah visual storytelling dalam menerjemahkan topik medis yang sensitif menjadi konten edukatif yang mudah dipahami, serta menguasai alur video pendek (TikTok/Reels) untuk audiens muda.',
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
                    'learnings' => 'Mengembangkan kepemimpinan yang suportif dan terbuka bagi seluruh anggota, kemampuan mendengarkan aktif (active listening), serta koordinasi program kesehatan mental mahasiswa.',
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
                'is_featured' => true,
                'title' => 'Sertifikat Kompetensi BNSP - Junior Graphic Designer',
                'issuer' => 'Badan Nasional Sertifikasi Profesi (BNSP) & LSP P3 Teknologi Digital',
                'cert_num' => '62090 2166 3 0099707 2024',
                'reg_num' => 'TIK 1565 22215 2024',
                'year' => '02 Juli 2024 (Berlaku 3 Tahun)',
                'badge' => 'Sertifikasi Profesi BNSP',
                'icon' => 'fa-solid fa-award',
                'color' => '#C24E19',
                'pdf_url' => asset('images/cert_bnsp.pdf'),
                'desc' => 'Sertifikat Kompetensi Profesi Resmi dari Badan Nasional Sertifikasi Profesi (BNSP) Republik Indonesia atas nama Hizqia Chandra Wiguno. Diterbitkan di Yogyakarta oleh Lembaga Sertifikasi Profesi Teknologi Digital.',
                'competencies_sentence' => 'Unit kompetensi teruji mencakup pengaplikasian prinsip dasar desain, penerapan prinsip komunikasi dan design brief, pengoperasian perangkat lunak desain, hingga penciptaan karya desain grafis terstandar nasional.',
                'competencies' => [
                    'Mengaplikasikan Prinsip Dasar Desain',
                    'Menerapkan Prinsip Dasar Komunikasi',
                    'Menerapkan Design Brief',
                    'Mengoperasikan Perangkat Lunak Desain',
                    'Menciptakan Karya Desain'
                ]
            ],
            [
                'id' => 'cert-kominfo-vsga',
                'is_featured' => false,
                'title' => 'Sertifikat Pelatihan Kominfo - Junior Graphic Designer',
                'issuer' => 'BPSDMP Jakarta & Digital Talent Scholarship Kominfo RI',
                'cert_num' => null,
                'reg_num' => null,
                'year' => '04 Juli 2024',
                'badge' => 'Pelatihan Kominfo RI',
                'icon' => 'fa-solid fa-graduation-cap',
                'color' => '#D97706',
                'pdf_url' => asset('images/cert_kominfo.pdf'),
                'desc' => 'Sertifikat Kelulusan Pelatihan Intensif Vocational School Graduate Academy (VSGA) Digital Talent Scholarship Kominfo RI untuk skema Junior Graphic Designer (24 Jam Pelatihan).',
                'competencies_sentence' => 'Pelatihan intensif 24 JP meliputi prinsip desain, komunikasi visual, perancangan brief, dan eksekusi karya desain.',
                'competencies' => []
            ],
            [
                'id' => 'cert-rubrik-ai',
                'is_featured' => false,
                'title' => 'Sertifikat Rubrik Grafis - Mastering Adobe Illustrator',
                'issuer' => 'Rubrik Grafis (Kelas Kreatif Digital)',
                'cert_num' => null,
                'reg_num' => null,
                'year' => '17 Mei 2024',
                'badge' => 'Kelas Online Terverifikasi',
                'icon' => 'fa-solid fa-pen-nib',
                'color' => '#EA580C',
                'pdf_url' => asset('images/cert_rubrik_ai.pdf'),
                'desc' => 'Sertifikat Penguasaan Perangkat Lunak Adobe Illustrator dari Rubrik Grafis: pembuatan aset vektor, manajemen warna, dan tata letak tipografi artboard.',
                'competencies_sentence' => 'Penguasaan pen tool, pathfinder, shape builder, color swatches, dan typography artboard layout.',
                'competencies' => []
            ],
            [
                'id' => 'cert-rubrik-ui',
                'is_featured' => false,
                'title' => 'Sertifikat Rubrik Grafis - UI Design for Landing Page',
                'issuer' => 'Rubrik Grafis (Kelas Kreatif Digital)',
                'cert_num' => null,
                'reg_num' => null,
                'year' => '17 Mei 2024',
                'badge' => 'Kelas Online Terverifikasi',
                'icon' => 'fa-solid fa-laptop-code',
                'color' => '#E36B32',
                'pdf_url' => asset('images/cert_rubrik_ui.pdf'),
                'desc' => 'Sertifikat Perancangan Antarmuka Web Landing Page dari Rubrik Grafis: struktur hierarki visual, komponen modern, dan responsive grid layout.',
                'competencies_sentence' => 'User journey mapping, wireframing, high-fidelity UI layouting, dan responsive grid.',
                'competencies' => []
            ]
        ];

        // 7 Curated Flagship Projects (TRAC Astra as Featured Hero + 6 Supporting Grid Projects)
        $projects = [
            // --- 0. FEATURED FLAGSHIP CASE STUDY (KARYA UTAMA) ---
            [
                'id' => 'proj-trac-astra',
                'title' => 'TRAC Astra (Lalala Festival 2025) - Key Visual & Materi Booth 3x3M',
                'category' => 'graphic',
                'category_label' => 'Key Visual & Materi Booth',
                'action_type' => 'modal',
                'modal_target' => '#tracAstraDemoModal',
                'btn_text' => 'Lihat Galeri Aset & Booth TRAC Astra',
                'btn_icon' => 'fa-images',
                'image' => asset('images/trac_tenda_booth.webp'),
                'is_featured' => true,
                'short_desc' => 'Materi branding event booth TRAC (Astra) untuk Lalala Festival 2025, mencakup tenda booth 3x3 meter, standing banner promosi, meja registrasi & branding, serta hangtag merchandise. Bekerja mengikuti brand guideline resmi TRAC Astra dengan tipografi yang terstruktur.',
                'full_desc' => 'Perancangan materi 3D Spatial & POSM event fisik berskala 3x3 meter serta key visual digital untuk aktivasi brand TRAC (Member of Astra) pada Lalala Festival 2025. Mengintegrasikan brand guidelines resmi TRAC Astra Group (warna identitas brand, logo clearance, dan hierarki informasi promo) dengan palet dinamis festival publik.',
                'tags' => ['Photoshop', 'Illustrator'],
                'accent' => '#E36B32',
                'gallery_items' => [
                    [
                        'id' => 'trac-tenda',
                        'title' => 'Tenda Booth TRAC (3x3 M)',
                        'category' => 'Spatial & Event Booth',
                        'image' => asset('images/trac_tenda_booth.webp'),
                        'desc' => 'Desain spatial 3D mockup booth resmi TRAC untuk aktivasi offline Lalala Festival 2025, lengkap dengan spesifikasi teknis 3x3 M.'
                    ],
                    [
                        'id' => 'trac-standing-banner',
                        'title' => 'Standing Banner TRACtoGo Promo',
                        'category' => 'Print Collateral / POSM',
                        'image' => asset('images/trac_standing_banner.webp'),
                        'desc' => 'Materi promosi cetak ukuran 60x160 cm dengan hierarki informasi promo sewa mobil & download app.'
                    ],
                    [
                        'id' => 'trac-kv-pantai',
                        'title' => 'Key Visual: Teman di Setiap Kilometer',
                        'category' => 'Creative Photo Manipulation',
                        'image' => asset('images/trac_key_visual_pantai.webp'),
                        'desc' => 'Digital photo compositing efek 3D pop-out smartphone menghubungkan suasana penat kantor menuju liburan santai di pantai.'
                    ],
                    [
                        'id' => 'trac-promo-booth',
                        'title' => 'Flyer & Aktivasi Booth Promo',
                        'category' => 'Event Promo & Merchandising',
                        'image' => asset('images/trac_promo_booth.webp'),
                        'desc' => 'Desain materi promosi aktivasi booth dengan showcase merchandise kit dan voucher rental mobil.'
                    ]
                ]
            ],

            // --- 1. GRAPHIC & SOCIAL MEDIA DESIGN ---
            [
                'id' => 'proj-drp-social',
                'title' => 'DRP Outstanding Teens - Social Media & Event Visuals',
                'category' => 'graphic',
                'category_label' => 'Desain Media Sosial & Acara',
                'action_type' => 'modal',
                'modal_target' => '#drpTeensDemoModal',
                'btn_text' => 'Lihat Galeri Feed DRP Teens',
                'btn_icon' => 'fa-images',
                'image' => asset('images/drp_teens_chosen_gen.webp'),
                'short_desc' => 'Identitas visual tahunan 2026 "The Chosen Generation", event flyer "Homecoming Worship Night", dan seri feed mingguan remaja dengan eksplorasi tipografi retro-pop, fluid shapes, dan kolase kertas.',
                'full_desc' => 'Perancangan identitas dan materi publikasi media sosial untuk komunitas remaja DRP Outstanding Teens (DOT Teens). Mengeksplorasi fleksibilitas gaya visual yang dinamis bagi Gen-Z: poster tema tahunan 2026 "The Chosen Generation" dengan tipografi retro-pop & fluid gradient ribbons, flyer event revival "Homecoming Worship Night 2026", serta arsip feed mingguan multi-gaya (pop-comic halftone "Self Improvement", ripped-paper & tape "Dependable", frame polaroid retro "Iman, Pengharapan & Kasih", street-poster grunge "Jeremiah Gen", dan 3D typography "Merry Christmas").',
                'tags' => ['Photoshop', 'Illustrator'],
                'accent' => '#E36B32',
                'gallery_items' => [
                    [
                        'id' => 'the-chosen-generation',
                        'title' => 'The Chosen Generation (Tema Tahunan 2026)',
                        'category' => 'Retro-Pop Typography & Fluid Shapes',
                        'image' => asset('images/drp_teens_chosen_gen.webp'),
                        'desc' => 'Eksplorasi visual tema tahunan 2026 memadukan tipografi sans-serif beraksen cut inline, pita fluida multi-warna gradien, badge tahun 2026, dan elemen retro starburst.'
                    ],
                    [
                        'id' => 'homecoming-worship-night',
                        'title' => 'Disciples Revival Night "Homecoming" 2026',
                        'category' => 'Event Flyer & Speaker Showcase',
                        'image' => asset('images/drp_teens_homecoming.webp'),
                        'desc' => 'Flyer publikasi ibadah kebangunan rohani remaja bersama Kak Gamma di GBI Sawangan, menampilkan warm lighting studio, tipografi brush ekspresif, dan aksen cutout poligon oranye.'
                    ],
                    [
                        'id' => 'flame-cross-mark',
                        'title' => 'Flame & Cross Pixel Art Graphic Mark',
                        'category' => 'Pixel Art & Geometric Brand Asset',
                        'image' => asset('images/drp_teens_flame_cross.webp'),
                        'desc' => 'Elemen grafis pendukung bertema revival berupa kobaran api bergaya pixel art 16-bit berpadu dengan radiant geometric shards dan simbol salib oranye minimalis.'
                    ],
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
                'category_label' => 'Identitas Visual & Desain Grafis',
                'action_type' => 'modal',
                'modal_target' => '#ritisticDemoModal',
                'btn_text' => 'Lihat Galeri Karya Ritistic',
                'btn_icon' => 'fa-images',
                'image' => asset('images/ritistic_sumpah_pemuda.webp'),
                'short_desc' => 'Seri poster peringatan hari besar dan kartu profil anggota dalam palet warm terracotta. Penempatan logo dan tata letak teks dijaga konsisten di setiap desain.',
                'full_desc' => 'Produksi materi desain grafis multi-format untuk Ritistic Project. Proyek ini mencakup perancangan visual commemorative days (Hari Sumpah Pemuda 2024 bergaya retro-modern hand-drawn dan Hari Besar Tahun Baru Islam 1446 H), serta visual profiling anggota/mahasiswa dengan komposisi foto subjek, tipografi bold, dan ornamen buku ilustratif dengan konsistensi penempatan logo Ritistic.',
                'tags' => ['Illustrator', 'Photoshop'],
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

            // --- 1B. TRAVELOKA CAMPAIGN VISUALS (SOCIAL MEDIA - PHOTOSHOP) ---
            [
                'id' => 'proj-traveloka',
                'title' => 'Traveloka Campaign Visuals - Social Media Key Visual',
                'category' => 'graphic',
                'category_label' => 'Social Media & Campaign Design',
                'action_type' => 'modal',
                'modal_target' => '#travelokaDemoModal',
                'btn_text' => 'Lihat Galeri Karya Traveloka',
                'btn_icon' => 'fa-images',
                'image' => asset('images/traveloka_pergi_kapan_saja.jpg'),
                'short_desc' => 'Tiga seri key visual kampanye sosial media Traveloka: photo compositing smartphone 3D pop-out, jendela pesawat menuju Raja Ampat, dan banner rekomendasi wisata akhir tahun. Teknik layer masking, blending mode, dan photo manipulation di Photoshop.',
                'full_desc' => 'Perancangan tiga seri key visual sosial media bertema kampanye perjalanan Traveloka. Setiap desain mengaplikasikan teknik photo compositing realistis, konsistensi palet biru Traveloka, hierarki tipografi bersih, serta integrasi elemen UI mockup smartphone untuk memperkuat pesan brand.',
                'tags' => ['Photoshop'],
                'accent' => '#0064D2',
                'gallery_items' => [
                    [
                        'id' => 'traveloka-pergi-kapan-saja',
                        'title' => 'Key Visual: "Pergi Kapan Saja, Traveloka Aja"',
                        'category' => 'Photo Compositing & App Mockup',
                        'image' => asset('images/traveloka_pergi_kapan_saja.jpg'),
                        'desc' => 'Key visual utama kampanye dengan teknik photo compositing: tangan memegang smartphone yang menampilkan UI Traveloka, dikelilingi pesawat, koper, dan paspor 3D pop-out. Tipografi headline besar berlapis bayangan memperkuat call-to-action download aplikasi.'
                    ],
                    [
                        'id' => 'traveloka-yang-lain-berangkat',
                        'title' => 'Key Visual: "Yang Lain Udah Berangkat, Kamu?"',
                        'category' => 'Conceptual Photo Manipulation',
                        'image' => asset('images/traveloka_yang_lain_berangkat.jpg'),
                        'desc' => 'Konsep visual jendela pesawat sebagai frame untuk destinasi Raja Ampat, Papua. Koper putih dan pesawat berbentuk lengkungan dinamis keluar dari bingkai, menciptakan ilusi kedalaman 3D yang dramatis dengan langit biru cerah khas identitas Traveloka.'
                    ],
                    [
                        'id' => 'traveloka-rekomendasi-wisata',
                        'title' => 'Key Visual: "Rekomendasi Tempat Wisata Akhir Tahun"',
                        'category' => 'Photo Compositing & Lifestyle',
                        'image' => asset('images/traveloka_rekomendasi_wisata.jpg'),
                        'desc' => 'Komposisi lifestyle fotografis: model memegang smartphone Traveloka dengan background split antara interior hotel mewah dan Machu Picchu Peru, dipersatukan oleh search bar rekomendasi wisata. Visual memperkuat pesan "semua perjalananmu dimulai dari satu genggaman".'
                    ]
                ]
            ],

            // --- 2. VIDEO EDITING & MOTION PRODUCTION ---
            [
                'id' => 'proj-eleccion',
                'title' => 'Video Editing: Eleccion Worship - Allah Roh Kudus',
                'category' => 'video',
                'category_label' => 'Editing Video Live Worship',
                'action_type' => 'video',
                'modal_target' => '#videoPlayerModal',
                'btn_text' => 'Tonton Video Eleccion Worship',
                'btn_icon' => 'fa-circle-play',
                'image' => asset('images/eleccion_worship_hero.webp'),
                'short_desc' => 'Editing video live worship multi-kamera di Premiere Pro dan After Effects. Pergantian sudut kamera mengikuti tempo lagu, dengan pencahayaan panggung yang tetap seimbang.',
                'full_desc' => 'Produksi dan penyuntingan video live recording cover lagu "Allah Roh Kudus" oleh Eleccion Worship di Diwangkoro Music Production. Bertanggung jawab sebagai Videographer, Video Editor, dan Thumbnail Designer. Mengintegrasikan sinkronisasi multi-angle camera berdasarkan tempo lagu, penyesuaian mood lighting studio panggung bernuansa warm & cinematic, integrasi subtitle lirik dinamis, serta audio-visual mastering synchronization.',
                'video_url' => 'https://www.youtube.com/watch?v=skzC2-_f090',
                'video_embed_url' => 'https://www.youtube.com/embed/skzC2-_f090',
                'video_ratio' => '16:9 Full HD',
                'video_duration' => '04:39',
                'video_client' => 'Eleccion Worship (@eleccionworship2016)',
                'video_role' => 'Videographer, Video Editor & Thumbnail Designer',
                'video_workflow' => "1. Multicam Sync & Dynamic Angle Switching: Sinkronisasi waveform audio multi-kamera (Wide Stage, Vocalist Close-up, Guitarist, & Drummer).\n2. Cinematic Color Grading & Studio Mood: Pengolahan pencahayaan studio dengan LUT warm amber & deep contrast yang sinematik.\n3. Audio-Visual Mastering Alignment: Sinkronisasi rekaman visual dengan output master audio Diwangkoro Music Production.\n4. Kinetic Lyrics & Cover Thumbnail: Integrasi subtitle lirik terstruktur serta perancangan poster thumbnail YouTube dengan CTR tinggi.",
                'tags' => ['Premiere Pro', 'After Effects'],
                'accent' => '#C2410C'
            ],
            [
                'id' => 'proj-anak-bertanya',
                'title' => 'Video Editing: Anak Bertanya - Eps 1 (GBI ERC Sawangan)',
                'category' => 'video',
                'category_label' => 'Video Edukasi Anak & Motion Graphic',
                'action_type' => 'video',
                'modal_target' => '#videoPlayerModal',
                'btn_text' => 'Tonton Video Anak Bertanya',
                'btn_icon' => 'fa-circle-play',
                'image' => asset('images/anak_bertanya_hero.webp'),
                'short_desc' => 'Video edukasi anak berdurasi 10:49, diedit di Premiere Pro dan After Effects. Teks kinetik dan ilustrasi balon kata membantu anak mengikuti alur tanya-jawab.',
                'full_desc' => 'Penyuntingan program series edukasi rohani anak "Anak Bertanya" Episode 1: "Siapakah Yang Menciptakan Tuhan?" untuk El-Roi Kids Church - GBI ERC Sawangan. Menggabungkan talkshow interaktif host & narasumber dengan motion graphics edukatif, kinetic text, visual bubble penjelas konsep, serta tata suara ceria dengan SFX komikal untuk menjaga retensi penonton anak dan keluarga.',
                'video_url' => 'https://www.youtube.com/watch?v=bF9YZt4dRGY',
                'video_embed_url' => 'https://www.youtube.com/embed/bF9YZt4dRGY',
                'video_ratio' => '16:9 Full HD',
                'video_duration' => '10:49',
                'video_client' => 'El-Roi Kids Church (GBI ERC Sawangan)',
                'video_role' => 'Video Editor & Motion Designer',
                'video_workflow' => "1. Interactive Pacing & Retention Cut: Pacing editing dinamis dan jump-cut removal untuk mempertahankan retensi fokus anak-anak selama 10+ menit.\n2. Kinetic Motion Graphics & Word Bubble: Pembuatan animasi teks, pop-up icon ilustrasi, dan visual balloon penjelas poin-poin penting di After Effects.\n3. Comic Sound FX & BGM Layering: Penataan efek suara kartun lucu (pop, whoosh, ding) sinkron visual serta pemilihan musik latar ceria dan ramah anak.\n4. Visual Polish & Color Vibrance: Color grading terang, kontras seimbang, serta integrasi lower-thirds & branding El-Roi Kids Church yang konsisten.",
                'tags' => ['Premiere Pro', 'After Effects'],
                'accent' => '#D97706'
            ],

            // --- 3. UI/UX & WEB PLATFORMS ---
            [
                'id' => 'proj-pintarbaca',
                'title' => 'Website Media Pembelajaran PintarBaca',
                'category' => 'uiux',
                'category_label' => 'Media Pembelajaran Interaktif',
                'action_type' => 'modal',
                'modal_target' => '#pintarBacaDemoModal',
                'btn_text' => 'Mainkan Demo PintarBaca',
                'btn_icon' => 'fa-gamepad',
                'image' => asset('images/pintarbaca_hero.webp'),
                'short_desc' => 'Media belajar membaca suku kata untuk Tugas Akhir di Polimedia, dibangun dengan Laravel dan Bootstrap. Tombol suku kata dibuat besar dan berkontras tinggi supaya mudah disentuh anak.',
                'full_desc' => 'PintarBaca dirancang khusus untuk mempermudah anak usia dini belajar membaca suku kata. Menggabungkan ilustrasi visual beresolusi tinggi, skema warna ceria, serta widget interaktif pembentuk kata.',
                'tags' => ['Laravel', 'Bootstrap', 'Figma'],
                'accent' => '#EA580C'
            ],
            [
                'id' => 'proj-erc',
                'title' => 'Website ERC Sawangan',
                'category' => 'uiux',
                'category_label' => 'Portal Web Komunitas',
                'action_type' => 'modal',
                'modal_target' => '#ercDemoModal',
                'btn_text' => 'Lihat Demo Portal Web',
                'btn_icon' => 'fa-globe',
                'image' => asset('images/erc_sawangan_hero.webp'),
                'short_desc' => 'Portal web komunitas GBI ERC Sawangan, dibangun dengan Laravel dan Bootstrap. Jadwal ibadah dan warta mingguan disusun dalam kartu responsif agar mudah dibaca dari ponsel oleh jemaat segala usia.',
                'full_desc' => 'Perancangan antarmuka pengguna (UI/UX) untuk platform komunitas ERC Sawangan. Menampilkan jadwal ibadah, portal artikel warta mingguan, dan sistem navigasi yang rapi serta fully responsive.',
                'tags' => ['Laravel', 'Bootstrap', 'Figma'],
                'accent' => '#B45309'
            ]
        ];

        return view('portfolio.index', compact('bio', 'skills', 'experiences', 'certificates', 'projects'));
    }
}
