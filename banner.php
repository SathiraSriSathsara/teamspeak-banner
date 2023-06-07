<?php

// Set the directory where your background images are located
$backgroundDirectory = "images/";

header('Content-Type: image/png');

// Retrieve a list of background images from the directory
$backgroundImages = glob($backgroundDirectory . "*.png");

// Shuffle the background images
shuffle($backgroundImages);

// Select the first image as the background
$selectedBackground = $backgroundImages[0];

// Create the base image with the selected background
$background = imagecreatefrompng($selectedBackground);
$width = imagesx($background);
$height = imagesy($background);

// Create the top image
$topImage = imagecreatefrompng("images/top.png");
$topWidth = imagesx($topImage);
$topHeight = imagesy($topImage);

// Merge the top image onto the background
imagecopy($background, $topImage, ($width - $topWidth) / 2, ($height - $topHeight) / 2, 0, 0, $topWidth, $topHeight);

// Apply text to the image
imagettftext($background, 15, 0, 235, 180, $text_color, $font, $sriLankaTime);

// Set the header type to an image
header('Content-type: image/png');

// Output the image
imagepng($background);

// Clear cache
imagedestroy($background);
imagedestroy($topImage);
?>
