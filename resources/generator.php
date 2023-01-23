<?php
require_once('phpqrcode.php');

// Get the text and size from the form submission
$text = $_POST['text'];
$size = $_POST['size'];

// Set the filename for the QR code image
$filename = 'qr_code.png';

// Generate the QR code using the text and size provided
QRcode::png($text, $filename, QR_ECLEVEL_L, $size, 2);

// Display the generated QR code image
echo '<img src="' . $filename . '" alt="QR code">';