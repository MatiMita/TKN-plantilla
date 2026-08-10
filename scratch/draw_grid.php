<?php
$img = imagecreatefromjpeg(__DIR__ . '/../assets/images/organizadas/mapamundial.jpg');
$width = imagesx($img);
$height = imagesy($img);

$red = imagecolorallocate($img, 255, 0, 0);
$blue = imagecolorallocate($img, 0, 0, 255);
$white = imagecolorallocate($img, 255, 255, 255);

// Draw vertical grid lines
for ($x = 10; $x < 100; $x += 10) {
    $px = ($x / 100) * $width;
    imageline($img, $px, 0, $px, $height, $red);
    imagestring($img, 2, $px + 2, 5, "$x%", $white);
}

// Draw horizontal grid lines
for ($y = 10; $y < 100; $y += 10) {
    $py = ($y / 100) * $height;
    imageline($img, 0, $py, $width, $py, $red);
    imagestring($img, 2, 5, $py + 2, "$y%", $white);
}

imagejpeg($img, __DIR__ . '/../map_grid.jpg');
imagedestroy($img);
echo "Grid image created successfully!\n";
?>
