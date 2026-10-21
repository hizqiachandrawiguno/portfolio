<?php

$dir = 'c:/laragon/www/Portfolio/public/images/';

function drawCardWithShadow($canvas, $imgSrc, $x, $y, $w, $h, $shadowBlur = 12, $shadowAlpha = 115) {
    // Draw smooth multi-layered soft drop shadow
    for ($i = $shadowBlur; $i >= 1; $i -= 2) {
        $alpha = (int)($shadowAlpha + (127 - $shadowAlpha) * (1 - ($i / $shadowBlur)));
        if ($alpha > 127) $alpha = 127;
        $sColor = imagecolorallocatealpha($canvas, 30, 20, 15, $alpha);
        $offsetY = (int)($i * 0.7);
        imagefilledrectangle(
            $canvas,
            $x - $i,
            $y + $offsetY - $i / 2,
            $x + $w + $i,
            $y + $h + $offsetY + $i,
            $sColor
        );
    }

    // Load source image
    $src = imagecreatefromjpeg($imgSrc);
    if (!$src) return;
    $srcW = imagesx($src);
    $srcH = imagesy($src);

    // Resample
    imagecopyresampled($canvas, $src, $x, $y, 0, 0, $w, $h, $srcW, $srcH);
    imagedestroy($src);

    // Crisp fine border
    $borderColor = imagecolorallocatealpha($canvas, 20, 20, 20, 105);
    imagerectangle($canvas, $x, $y, $x + $w, $y + $h, $borderColor);
    
    // Inner white highlight border for tactile feel
    $innerBorder = imagecolorallocatealpha($canvas, 255, 255, 255, 110);
    imagerectangle($canvas, $x + 1, $y + 1, $x + $w - 1, $y + $h - 1, $innerBorder);
}

// -------------------------------------------------------------
// 1. DRP OUTSTANDING TEENS HERO COMPOSITE (1200 x 650)
// -------------------------------------------------------------
$drpCanvas = imagecreatetruecolor(1200, 650);
$bgDrp = imagecolorallocate($drpCanvas, 248, 244, 237); // Warm Studio Cream
imagefilledrectangle($drpCanvas, 0, 0, 1200, 650, $bgDrp);

// Subtle grid pattern
$gridColor = imagecolorallocatealpha($drpCanvas, 160, 150, 140, 118);
for ($x = 0; $x < 1200; $x += 32) {
    imageline($drpCanvas, $x, 0, $x, 650, $gridColor);
}
for ($y = 0; $y < 650; $y += 32) {
    imageline($drpCanvas, 0, $y, 1200, $y, $gridColor);
}

// Order of drawing for proper Z-index layering:
// Back left: Jeremiah Gen (Purple)
drawCardWithShadow($drpCanvas, $dir . 'drp_teens_jeremiah_gen.jpg', 60, 140, 320, 320, 14, 110);

// Back right: Merry Christmas (Navy & Gold)
drawCardWithShadow($drpCanvas, $dir . 'drp_teens_merry_christmas.jpg', 820, 140, 320, 320, 14, 110);

// Mid left: Dependable (Olive green grunge tape)
drawCardWithShadow($drpCanvas, $dir . 'drp_teens_dependable.jpg', 230, 115, 360, 360, 18, 105);

// Mid right: Iman, Pengharapan & Kasih (Polaroid blue)
drawCardWithShadow($drpCanvas, $dir . 'drp_teens_iman_pengharapan_kasih.jpg', 630, 115, 360, 360, 18, 105);

// Front & center focal point: Self Improvement (Ka Kayla - Pop comic yellow)
drawCardWithShadow($drpCanvas, $dir . 'drp_teens_self_improvement.jpg', 420, 85, 400, 400, 24, 100);

// Save DRP
$drpJpg = $dir . 'drp_teens_showcase_hero.jpg';
$drpWebp = $dir . 'drp_teens_showcase_hero.webp';
imagejpeg($drpCanvas, $drpJpg, 92);
imagewebp($drpCanvas, $drpWebp, 90);
imagedestroy($drpCanvas);
echo "Created $drpJpg & $drpWebp\n";


// -------------------------------------------------------------
// 2. RITISTIC HERO COMPOSITE (1200 x 650)
// -------------------------------------------------------------
$ritCanvas = imagecreatetruecolor(1200, 650);
$bgRit = imagecolorallocate($ritCanvas, 249, 245, 239);
imagefilledrectangle($ritCanvas, 0, 0, 1200, 650, $bgRit);

// Grid pattern
for ($x = 0; $x < 1200; $x += 32) {
    imageline($ritCanvas, $x, 0, $x, 650, $gridColor);
}
for ($y = 0; $y < 650; $y += 32) {
    imageline($ritCanvas, 0, $y, 1200, $y, $gridColor);
}

// 4 cards in harmonious cascade
// Outer Left: Hari Sumpah Pemuda 2024
drawCardWithShadow($ritCanvas, $dir . 'ritistic_sumpah_pemuda.jpg', 90, 130, 340, 340, 16, 110);

// Outer Right: Tahun Baru Islam 1446 H
drawCardWithShadow($ritCanvas, $dir . 'ritistic_tahun_baru_islam.jpg', 770, 130, 340, 340, 16, 110);

// Inner Left: Profiling Wida Ria
drawCardWithShadow($ritCanvas, $dir . 'ritistic_profiling_wida.jpg', 290, 100, 380, 380, 20, 105);

// Inner Right: Profiling Sukmawati (overlaps slightly)
drawCardWithShadow($ritCanvas, $dir . 'ritistic_profiling_sukmawati.jpg', 540, 100, 380, 380, 22, 100);

// Save Ritistic
$ritJpg = $dir . 'ritistic_showcase_hero.jpg';
$ritWebp = $dir . 'ritistic_showcase_hero.webp';
imagejpeg($ritCanvas, $ritJpg, 92);
imagewebp($ritCanvas, $ritWebp, 90);
imagedestroy($ritCanvas);
echo "Created $ritJpg & $ritWebp\n";
