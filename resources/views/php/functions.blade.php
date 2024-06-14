<?php
use Illuminate\Support\Facades\URL;

function pictureTag($imagePath, $altText)
{
    $webpPath = $imagePath . '.webp';
    $pngPath = $imagePath . '.png';

    return '
        <picture>
            <source srcset="' . URL::asset($webpPath) . '" type="image/webp">
            <source srcset="' . URL::asset($pngPath) . '" type="image/png">
            <img src="' . URL::asset($pngPath) . '" alt="' . $altText . '" loading="lazy">
        </picture>
    ';
}
