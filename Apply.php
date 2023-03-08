<?php
// Get the saved preferences from cookies
$fontStyle = isset($_COOKIE['fontStyle']) ? $_COOKIE['fontStyle'] : 'Arial';
$fontSize = isset($_COOKIE['fontSize']) ? $_COOKIE['fontSize'] : '16px';
$fontColor = isset($_COOKIE['fontColor']) ? $_COOKIE['fontColor'] : '#000000';
$bgColor = isset($_COOKIE['bgColor']) ? $_COOKIE['bgColor'] : '#FFFFFF';

// Display the preferences and apply them to the page
echo "
<html>
<head>
<title>Apply Preferences</title>
<style>
body {
    font-family: $fontStyle;
    font-size: $fontSize;
    color: $fontColor;
    background-color: $bgColor;
}
</style>
</head>
<body>
<h1>Apply Preferences</h1>
<p>Font Style: $fontStyle</p>
<p>Font Size: $fontSize</p>
<p>Font Color: $fontColor</p>
<p>Background Color: $bgColor</p>
<p>This is a sample text to show how the preferences will be applied.</p>
</body>
</html>
";
?>
