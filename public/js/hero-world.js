// Navbar muncul setelah hero hampir terlewati.
(function () {
    var h = document.getElementById('hero');
    if (!h) return;
    new IntersectionObserver(function (e) { document.body.classList.toggle('nav-on', e[0].intersectionRatio < 0.35); }, { threshold: [0, 0.35, 1] }).observe(h);
})();
// Parallax hero: layer mengejar posisi scroll (delay halus). Loop berhenti sendiri saat sampai.
(function () {
    var hero = document.getElementById('hero');
    if (!hero || matchMedia('(prefers-reduced-motion: reduce)').matches) return;
    var ls = [].slice.call(hero.querySelectorAll('.hw')), cur = 0, target = 0, run = false, vis = true;
    function tick() {
        cur += (target - cur) * 0.08;
        if (Math.abs(target - cur) < 0.001) { cur = target; run = false; }
        ls.forEach(function (l) { l.style.transform = 'translate3d(0,' + (cur * l.dataset.k).toFixed(1) + 'px,0)'; });
        if (run) requestAnimationFrame(tick);
    }
    function onScroll() {
        if (!vis) return;
        target = Math.min(1, scrollY / hero.offsetHeight);
        if (!run) { run = true; requestAnimationFrame(tick); }
    }
    new IntersectionObserver(function (e) { vis = e[0].isIntersecting; if (vis) onScroll(); }).observe(hero);
    addEventListener('scroll', onScroll, { passive: true });
    onScroll();
})();
