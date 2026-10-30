<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karya TRAC Astra | Hizqia Chandra Wiguno</title>
    <meta name="description" content="Kumpulan karya desain selama magang Marketing Designer di PT Serasi Autoraya (TRAC, Member of Astra), dikelompokkan per jenis media.">
    <link rel="icon" type="image/png" href="{{ asset('images/hizqia_logo_orange.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/custom-designer.css') }}?v=2.13.0">
    <style>
        #tracGrid { column-count: 3; column-gap: 1.5rem; }
        #tracGrid > div { break-inside: avoid; margin-bottom: 1.5rem; }
        @media (max-width: 991px) { #tracGrid { column-count: 2; } }
        @media (max-width: 575px) { #tracGrid { column-count: 1; } }
        .trac-work { background: #FFFDF8; border: 1px solid #D6D0C5; border-radius: var(--radius-md); overflow: hidden; cursor: zoom-in; }
        .trac-work img { width: 100%; height: auto; display: block; background: #F7F4EE; }
        .trac-chip { border: 1px solid #D6D0C5; background: #fff; border-radius: 20px; padding: 6px 14px; font-size: .82rem; }
        .trac-chip.active { background: #171311; color: #fff; border-color: #171311; }
        /* margin/inset eksplisit: reset CSS situs menghilangkan margin:auto bawaan <dialog> */
        #tracLightbox { position: fixed; inset: 0; margin: auto; width: fit-content; height: fit-content; max-width: 94vw; max-height: 94vh; border: 0; padding: 12px; background: #171311; border-radius: 12px; }
        #tracLightbox::backdrop { background: rgba(23, 19, 17, .85); }
        #tracLightbox img { max-width: 100%; max-height: 80vh; border-radius: 8px; display: block; margin: 0 auto; }
    </style>
</head>
<body>
<main class="container py-5" style="max-width: 1100px;">
    <a href="{{ route('portfolio.home') }}#layers" class="btn-text-link d-inline-block mb-4">&larr; Kembali ke Portofolio</a>

    <div class="font-mono small fw-bold text-uppercase mb-2" style="color:#A83C0C; letter-spacing:.08em;">PT Serasi Autoraya (SERA) &bull; Member of Astra &bull; 2025</div>
    <h1 class="display-6 fw-bold mb-2">Karya TRAC Astra</h1>
    <p class="text-muted mb-4" style="max-width: 680px;">Marketing Designer Intern. Seluruh karya mengikuti Brand Guidelines Astra (warna resmi, tipografi, logo clearance), dikelompokkan per jenis media.</p>

    <div class="exp-stat-grid mb-4">
        <div class="exp-stat"><strong>{{ count($works) }}</strong><span>Karya</span></div>
        <div class="exp-stat"><strong>{{ count($groups) }}</strong><span>Kelompok media</span></div>
        <div class="exp-stat"><strong>2</strong><span>Brand Member of Astra (TRAC & IBID)</span></div>
    </div>

    <div class="d-flex flex-wrap gap-2 mb-4" id="tracFilters">
        <button type="button" class="trac-chip active font-mono" data-group="">Semua ({{ count($works) }})</button>
        @foreach($groups as $g)
        <button type="button" class="trac-chip font-mono" data-group="{{ $g }}">{{ $g }} ({{ collect($works)->where('group', $g)->count() }})</button>
        @endforeach
    </div>

    <div id="tracGrid">
        @foreach($works as $w)
        <div data-group="{{ $w['group'] }}">
            <div class="trac-work" data-full="{{ $w['image'] }}" data-title="{{ $w['title'] }}">
                <img src="{{ $w['image'] }}" alt="{{ $w['title'] }}" loading="lazy" decoding="async">
                <div class="p-3">
                    <span class="font-mono small fw-bold text-uppercase" style="color:#A83C0C; font-size:.7rem; letter-spacing:.06em;">{{ $w['group'] }}</span>
                    <h2 class="h6 fw-bold mt-1 mb-1">{{ $w['title'] }}</h2>
                    <p class="text-muted small mb-0">{{ $w['caption'] }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</main>

<dialog id="tracLightbox">
    <img alt="">
    <p class="text-white text-center mt-3 mb-0 small" id="tracLightboxCap"></p>
</dialog>

<script>
    const grid = document.getElementById('tracGrid');
    const box = document.getElementById('tracLightbox');
    document.getElementById('tracFilters').addEventListener('click', e => {
        const b = e.target.closest('.trac-chip');
        if (!b) return;
        document.querySelectorAll('.trac-chip').forEach(c => c.classList.toggle('active', c === b));
        grid.querySelectorAll('[data-group]').forEach(c => c.hidden = b.dataset.group && c.dataset.group !== b.dataset.group);
    });
    grid.addEventListener('click', e => {
        const w = e.target.closest('[data-full]');
        if (!w) return;
        box.querySelector('img').src = w.dataset.full;
        document.getElementById('tracLightboxCap').textContent = w.dataset.title;
        box.showModal();
    });
    box.addEventListener('click', () => box.close());
</script>
</body>
</html>
