@php
    // [file, lebar, tinggi] sesuai ukuran file webp di public/assets/img/othman/
    $img = fn (string $file) => asset('assets/img/othman/'.$file.'.webp').'?v=2';
    $slides = [
        ['Cover', 'Slide 1, cover: model memakai Canyon Rayé Short Jacket dengan judul The Canyon Stripe'],
        ['Inspiration', 'Slide 2, inspirasi: tampilan dekat garis bergelombang jaket dengan penjelasan Canyon + Rayé'],
        ['Texture', 'Slide 3, tekstur: tiga foto detail kain jaket dengan keterangan garis, tekstur timbul, dan warna tanah'],
        ['Details', 'Slide 4, detail: jaket tampak depan dengan penunjuk kerah, emblem O, kancing hitam, dan saku samping'],
        ['Style it', 'Slide 5, gaya: dua foto padu padan jaket dengan kemeja garis dan dasi bermotif'],
        ['Get yours', 'Slide 6, ajakan beli: jaket Canyon Rayé dengan tombol website, marketplace, dan toko'],
    ];
@endphp
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trame: Behind the Weft (Proyek Konsep Othman) | Hizqia Chandra Wiguno</title>
    <meta name="description" content="Proyek konsep content series untuk koleksi Trame dari Othman: feed, carousel, reels cover, lookbook, standee, dan banner e-commerce.">
    <link rel="icon" type="image/png" href="{{ asset('images/hizqia_logo_orange.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/custom-designer.css') }}?v=2.35.4">
    <style>
        /* palet proyek, hanya di halaman ini */
        .oth { --oth-ink: #1A1411; --oth-brown: #4A2F1E; --oth-paper: #E4DFD6; --oth-tan: #B07A4E; max-width: 1100px; color: var(--oth-ink); }
        .oth h1, .oth h2 { color: var(--oth-ink); }
        .oth h2 { font-size: clamp(1.3rem, 3vw, 1.75rem); font-weight: 700; margin-bottom: 1rem; }
        .oth section { margin-top: clamp(2.75rem, 7vw, 4.5rem); }
        .oth p { max-width: 62ch; line-height: 1.7; }
        .oth img { max-width: 100%; height: auto; display: block; }
        .oth figure { margin: 0; }
        .oth figcaption { font-size: .88rem; color: #5b4c42; margin-top: .75rem; }
        .oth-kicker { color: var(--oth-brown); letter-spacing: .08em; }
        .oth-info { display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 1px; background: #cfc7ba; border: 1px solid #cfc7ba; border-radius: 16px; overflow: hidden; margin: 0; }
        .oth-info > div { background: var(--oth-paper); padding: 1rem 1.1rem; }
        .oth-info > div:nth-child(n+3) { grid-column: 1 / -1; }
        .oth-info dt { font-size: .74rem; font-weight: 700; color: var(--oth-brown); margin-bottom: .25rem; }
        .oth-info dd { margin: 0; font-weight: 600; font-size: .95rem; }
        @media (min-width: 768px) { .oth-info { grid-template-columns: 1fr 1.2fr .8fr 2fr; } .oth-info > div:nth-child(n+3) { grid-column: auto; } }

        .oth-zoom { display: block; width: 100%; padding: 0; border: 0; background: var(--oth-paper); border-radius: 14px; overflow: hidden; cursor: zoom-in; }
        .oth-zoom img { width: 100%; }
        .oth-zoom:focus-visible, .oth-dot:focus-visible { outline: 3px solid var(--oth-tan); outline-offset: 3px; }

        /* carousel: swipe di HP, grid 3 kolom mulai 768px */
        .oth-slides { display: flex; gap: 12px; overflow-x: auto; scroll-snap-type: x mandatory; scrollbar-width: none; list-style: none; padding: 0; margin: 0; }
        .oth-slides::-webkit-scrollbar { display: none; }
        .oth-slides li { flex: 0 0 86%; scroll-snap-align: center; }
        .oth-dots { display: flex; justify-content: center; margin-top: .5rem; }
        .oth-dot { width: 32px; height: 32px; border: 0; background: transparent; padding: 0; display: grid; place-items: center; }
        .oth-dot::before { content: ""; width: 8px; height: 8px; border-radius: 999px; background: #c3b8a8; transition: width .2s, background .2s; }
        .oth-dot[aria-current="true"]::before { width: 22px; background: var(--oth-brown); }
        @media (min-width: 768px) {
            .oth-slides { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 20px; overflow: visible; }
            .oth-dots { display: none; }
        }

        .oth-feed { max-width: 720px; margin-inline: auto !important; }
        /* batas tinggi 640px diterapkan lewat lebar: tinggi x rasio gambar */
        .oth-split { display: grid; gap: 1.5rem; align-items: center; }
        .oth-reels { width: 100%; max-width: 360px; margin-inline: auto !important; }
        .oth-standee { width: 100%; max-width: 320px; margin-inline: auto !important; }
        .oth-split p { margin: 0; font-size: 1.15rem; font-weight: 600; }
        @media (min-width: 768px) {
            .oth-split { grid-template-columns: minmax(0, 360px) 1fr; gap: 3rem; }
        }

        .oth-end { background: var(--oth-ink); color: var(--oth-paper); border-radius: 18px; padding: clamp(1.5rem, 5vw, 2.5rem); }
        .oth .oth-end h2 { color: var(--oth-paper); }
        .oth-end p { margin: 0; font-size: 1.1rem; }
        .oth-credit { font-size: .8rem; color: #6c757d; margin-top: 1.5rem; }

        /* margin/inset eksplisit: reset CSS situs menghilangkan margin:auto bawaan <dialog> */
        #othLightbox { position: fixed; inset: 0; margin: auto; width: fit-content; height: fit-content; max-width: 94vw; max-height: 94vh; border: 0; padding: 12px; background: #1A1411; border-radius: 12px; }
        #othLightbox::backdrop { background: rgba(26, 20, 17, .88); }
        #othLightbox img { max-width: 100%; max-height: 80vh; width: auto; height: auto; border-radius: 8px; display: block; margin: 0 auto; }
        #othLightbox button { display: block; margin: 10px auto 0; min-height: 44px; padding: 0 22px; border: 1px solid #E4DFD6; border-radius: 999px; background: transparent; color: #E4DFD6; font-weight: 600; }
    </style>
</head>
<body>
<main class="container py-5 oth">
    <a href="{{ route('portfolio.home') }}#proj-othman" class="btn-text-link d-inline-block mb-4">&larr; Kembali ke Portofolio</a>

    <header>
        <div class="font-mono small fw-bold text-uppercase mb-2 oth-kicker">Graphic Design &bull; Social Media Design</div>
        <h1 class="display-6 fw-bold mb-2">Trame: Behind the Weft</h1>
        <p class="mb-4">Proyek konsep &middot; Content series untuk Othman</p>
        <button type="button" class="oth-zoom">
            <img src="{{ $img('01-case-study') }}" width="1600" height="1200" fetchpriority="high" alt="Ringkasan case study Behind the Weft: judul, insight Instagram, peluang, deliverables, palet warna, dan foto model berjaket garis">
        </button>
    </header>

    <section aria-label="Info singkat">
        <dl class="oth-info">
            <div><dt>Role</dt><dd>Graphic Designer (konsep &amp; desain)</dd></div>
            <div><dt>Tipe</dt><dd>Proyek konsep / spec work</dd></div>
            <div><dt>Tahun</dt><dd>2026</dd></div>
            <div><dt>Deliverables</dt><dd>Feed, Carousel, Reels cover, Lookbook, Standee, Banner e-commerce</dd></div>
        </dl>
    </section>

    <section>
        <h2>Latar belakang &amp; insight</h2>
        <p class="mb-0">Feed Instagram Othman sudah konsisten: studio tirai cokelat, wordmark kecil di tengah atas, nama produk serif italic, dan product card berlatar kertas krem. Motif kain adalah bintang utamanya, tapi cerita di balik kain belum dikemas sebagai seri tetap.</p>
    </section>

    <section>
        <h2>Ide</h2>
        <p class="mb-0">&lsquo;Trame&rsquo; berarti benang pakan dalam tenun. Behind the Weft adalah seri konten berulang yang membedah satu produk per episode, mulai dari inspirasi, tekstur, detail, styling, sampai ajakan beli, tanpa keluar dari sistem visual Othman.</p>
    </section>

    <section>
        <h2 class="text-center">Instagram feed</h2>
        <figure class="oth-feed">
            <button type="button" class="oth-zoom">
                <img src="{{ $img('02-feed') }}" width="1600" height="1600" loading="lazy" decoding="async" alt="Mockup grid feed Instagram 3 x 3 berisi konten seri Behind the Weft di antara foto produk dan toko Othman">
            </button>
            <figcaption class="text-center">Seri baru disisipkan ke ritme feed yang sudah ada.</figcaption>
        </figure>
    </section>

    <section>
        <h2>Carousel Episode 01 &mdash; Canyon Rayé Short Jacket</h2>
        <ul class="oth-slides" id="othSlides">
            @foreach($slides as $i => [$label, $alt])
            <li>
                <figure>
                    <button type="button" class="oth-zoom">
                        <img src="{{ $img('03-carousel-'.($i + 1)) }}" width="1440" height="1800" loading="lazy" decoding="async" alt="{{ $alt }}">
                    </button>
                    <figcaption class="font-mono">{{ $label }}</figcaption>
                </figure>
            </li>
            @endforeach
        </ul>
        <div class="oth-dots" id="othDots">
            @foreach($slides as $i => [$label])
            <button type="button" class="oth-dot" aria-label="Lihat slide {{ $i + 1 }}: {{ $label }}" aria-current="{{ $i === 0 ? 'true' : 'false' }}"></button>
            @endforeach
        </div>
    </section>

    <section>
        <h2>Reels cover</h2>
        <div class="oth-split">
            <figure class="oth-reels">
                <button type="button" class="oth-zoom">
                    <img src="{{ $img('04-reels-cover') }}" width="1012" height="1800" loading="lazy" decoding="async" alt="Cover Reels vertikal berjudul How Canyon Rayé is made dengan foto model memakai jaket garis">
                </button>
            </figure>
            <p>Cover Reels Ep. 01: proses pembuatan dalam 30 detik.</p>
        </div>
    </section>

    <section>
        <h2>Lookbook</h2>
        <figure>
            <button type="button" class="oth-zoom">
                <img src="{{ $img('05-lookbook') }}" width="1600" height="1000" loading="lazy" decoding="async" alt="Spread lookbook Look 04: model memakai Taupe Jardin Vest di depan tirai cokelat, disertai dua foto detail">
            </button>
            <figcaption>Lookbook spread, Look 04: Taupe Jardin Vest.</figcaption>
        </figure>
    </section>

    <section>
        <h2>Offline</h2>
        <figure>
            <button type="button" class="oth-zoom">
                <img src="{{ $img('06-standee-mockup') }}" width="1600" height="901" loading="lazy" decoding="async" alt="Mockup standee Feel the weft terpasang pada tiang tripod hitam di depan latar krem">
            </button>
            <figcaption>Standee di toko. QR mengarah ke halaman Behind the Weft, menghubungkan offline ke online.</figcaption>
        </figure>
        <figure class="oth-standee mt-4">
            <button type="button" class="oth-zoom">
                <img src="{{ $img('06-standee') }}" width="900" height="1800" loading="lazy" decoding="async" alt="Desain standee toko bertuliskan Feel the weft dengan foto model dan kode QR">
            </button>
            <figcaption class="text-center">Desain standee (60×120 cm).</figcaption>
        </figure>
    </section>

    <section>
        <h2>E-commerce</h2>
        <figure>
            <button type="button" class="oth-zoom">
                <img src="{{ $img('07-banner') }}" width="1600" height="533" loading="lazy" decoding="async" alt="Banner e-commerce Trame, woven stories dengan foto model, dua produk, dan tombol Shop Now">
            </button>
            <figcaption>Banner website &amp; marketplace.</figcaption>
        </figure>
    </section>

    <section class="oth-end">
        <h2>Penutup</h2>
        <p>Hasil yang diharapkan (hipotesis): konten yang lebih sering disimpan &amp; dibagikan, serta alasan kuat untuk mencoba langsung di toko.</p>
    </section>

    <p class="oth-credit">Proyek konsep tidak resmi untuk lamaran kerja. Foto produk, model, dan toko milik Othman, digunakan hanya sebagai mockup.</p>

    <a href="{{ route('portfolio.home') }}#proj-othman" class="btn-text-link d-inline-block mt-3">&larr; Kembali ke Portofolio</a>
</main>

<dialog id="othLightbox" aria-label="Gambar diperbesar">
    <img src="data:," alt="" width="1" height="1" loading="lazy">
    <button type="button">Tutup</button>
</dialog>

<script>
    (function () {
        var box = document.getElementById('othLightbox');
        var big = box.querySelector('img');
        document.querySelectorAll('.oth-zoom').forEach(function (btn) {
            btn.addEventListener('click', function () {
                var im = btn.querySelector('img');
                big.width = im.getAttribute('width');
                big.height = im.getAttribute('height');
                big.alt = im.alt;
                big.src = im.src;
                box.showModal();
            });
        });
        box.addEventListener('click', function () { box.close(); });

        var track = document.getElementById('othSlides');
        var items = Array.prototype.slice.call(track.children);
        var dots = Array.prototype.slice.call(document.querySelectorAll('.oth-dot'));
        var center = function (el) { return el.offsetLeft - items[0].offsetLeft - (track.clientWidth - el.offsetWidth) / 2; };
        dots.forEach(function (d, i) {
            d.addEventListener('click', function () { track.scrollTo({ left: center(items[i]), behavior: 'smooth' }); });
        });
        track.addEventListener('scroll', function () {
            var max = track.scrollWidth - track.clientWidth, best = 0, gap = Infinity;
            items.forEach(function (el, i) {
                var diff = Math.abs(Math.max(0, Math.min(max, center(el))) - track.scrollLeft);
                if (diff < gap) { gap = diff; best = i; }
            });
            dots.forEach(function (d, i) { d.setAttribute('aria-current', i === best ? 'true' : 'false'); });
        }, { passive: true });
    })();
</script>
</body>
</html>
