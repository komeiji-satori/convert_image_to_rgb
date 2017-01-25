<?php
$img = '85f8b05f317ef3ef7a13af48e3269dd5.png';
$info = getimagesize($img);
function get_pixel_rgb($img, $x, $y) {
	$im = imagecreatefrompng($img);
	$rgb = imagecolorat($im, $x, $y);
	$r = ($rgb >> 16) & 0xFF;
	$g = ($rgb >> 8) & 0xFF;
	$b = $rgb & 0xFF;
	$pixel = $r . $g . $b;
	if ($pixel == 255255255) {
		return 1;
	} else {
		return 0;
	}
}
for ($x = 1; $x < $info[0]; $x++) {
	for ($y = 1; $y < $info[1]; $y++) {
		if ($y == $info[0] - 1) {
			echo get_pixel_rgb($img, $y, $x) . "\n";
		} else {
			echo get_pixel_rgb($img, $y, $x);
		}
	}
}
