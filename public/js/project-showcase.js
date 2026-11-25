// Galeri proyek: indeks kiri menyorot proyek aktif, thumbnail mengganti gambar utama.
(function () {
    var root = document.getElementById('projectsShowcase');
    if (!root) return;
    var items = root.querySelectorAll('.pw-item');
    var panels = root.querySelectorAll('.pw-panel');
    var index = root.querySelector('.pw-index');

    function setActive(id) {
        items.forEach(function (it) {
            var on = it.getAttribute('data-pw') === id;
            it.classList.toggle('on', on);
            if (on && index) {
                // geser daftar kiri agar item aktif terlihat (hanya di dalam daftar, tanpa menggulir halaman)
                var vertical = getComputedStyle(index).display !== 'flex';
                if (vertical) {
                    var top = it.offsetTop - index.clientHeight / 2 + it.offsetHeight / 2;
                    index.scrollTo({ top: top, behavior: 'smooth' });
                } else {
                    index.scrollLeft = it.offsetLeft - (index.clientWidth - it.offsetWidth) / 2;
                }
            }
        });
    }

    function show(id, scroll) {
        var t = document.getElementById(id);
        if (!t || !t.classList.contains('pw-panel')) return false;
        panels.forEach(function (p) { p.classList.toggle('on', p === t); });
        setActive(id);
        if (scroll) {
            var top = root.getBoundingClientRect().top;
            if (top < 60 || top > innerHeight * 0.5) window.scrollTo({ top: root.getBoundingClientRect().top + scrollY - 90, behavior: 'smooth' });
        }
        return true;
    }
    root.setAttribute('data-ready', '');
    if (!show(location.hash.slice(1), false) && panels[0]) show(panels[0].id, false);
    window.addEventListener('hashchange', function () { show(location.hash.slice(1), true); });

    root.addEventListener('click', function (e) {
        var it = e.target.closest('.pw-item');
        if (it) { e.preventDefault(); show(it.getAttribute('data-pw'), true); return; }
        var th = e.target.closest('.pw-thumb');
        if (!th) return;
        var panel = th.closest('.pw-panel');
        var main = panel.querySelector('[data-pw-main]');
        if (main) { main.src = th.getAttribute('data-src'); }
        panel.querySelectorAll('.pw-thumb').forEach(function (b) { b.classList.toggle('on', b === th); });
        panel.querySelector('[data-pw-n]').textContent = th.getAttribute('data-n');
        panel.querySelector('[data-pw-cap]').textContent = th.getAttribute('data-cap');
    });

    // HP: studi kasus diringkas, dibuka lewat tombol
    root.querySelectorAll('.pw-info .case-study').forEach(function (cs) {
        var b = document.createElement('button');
        b.type = 'button'; b.className = 'pw-more'; b.textContent = 'Baca studi kasus lengkap';
        b.setAttribute('aria-expanded', 'false');
        b.addEventListener('click', function () {
            var open = cs.parentElement.classList.toggle('open');
            b.setAttribute('aria-expanded', open);
            b.textContent = open ? 'Ringkas studi kasus' : 'Baca studi kasus lengkap';
        });
        cs.after(b);
    });

    root.addEventListener('keydown', function (e) {
        if ((e.key === 'Enter' || e.key === ' ') && e.target.classList.contains('pw-stage-btn')) {
            e.preventDefault(); e.target.click();
        }
    });
})();
