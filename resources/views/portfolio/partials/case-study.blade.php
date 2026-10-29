{{-- Context -> Problem -> Solution -> Result story for gallery modals. Expects $cs = ['context','problem','solution','result'] --}}
<div class="case-study mb-3">
    @foreach (['context' => 'Konteks', 'problem' => 'Masalah', 'solution' => 'Solusi Saya', 'result' => 'Hasil'] as $key => $label)
        <div class="case-study-step">
            <span class="case-study-label font-mono">{{ $label }}</span>
            <p class="case-study-text mb-0">{{ $cs[$key] }}</p>
        </div>
    @endforeach
</div>
