<?php

enum ZoomMode {
    case Small;
    case Medium;
    case Big;
}

function rotulo(ZoomMode $zoom): string {
   return match ($zoom) {
         ZoomMode::Small => 'pequeno',
         ZoomMode::Medium => 'medio',
         ZoomMode::Big => 'Grande',
   };
}

echo rotulo(ZoomMode::Small) . "\n";
echo rotulo(ZoomMode::Medium) . "\n";
echo rotulo(ZoomMode::Big) . "\n";
