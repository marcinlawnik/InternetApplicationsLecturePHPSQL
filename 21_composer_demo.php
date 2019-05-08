<?php

require __DIR__.'/vendor/autoload.php';

use BaconQrCode\Renderer\ImageRenderer;
use BaconQrCode\Renderer\Image\SvgImageBackEnd;
use BaconQrCode\Renderer\RendererStyle\RendererStyle;
use BaconQrCode\Writer;

$renderer = new ImageRenderer(
    new RendererStyle(400),
    new SvgImageBackEnd()
);
$writer = new Writer($renderer);
$writer->writeFile('Air jest bardzo fajny!Air jest bardzo fajny!Air jest bardzo fajny!Air jest bardzo fajny!Air jest bardzo fajny!Air jest bardzo fajny!Air jest bardzo fajny!Air jest bardzo fajny!', 'qr.svg');