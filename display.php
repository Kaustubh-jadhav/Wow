<?php
// Get the saved preferences from cookies
$fontStyle = isset($_COOKIE['fontStyle']) ? $_COOKIE['fontStyle'] : 'Arial';
$fontSize = isset($_COOKIE['fontSize']) ? $_COOKIE['fontSize'] : '16px';
$fontColor = isset($_COOKIE['fontColor']) ? $_COOKIE['fontColor'] : '#000000';
$bgColor = isset($_COOKIE['bgColor']) ? $_COOKIE['bgColor'] : '#FFFFFF';

// Display the preferences
echo "
<html>
<head>
<title>Display Preferences</title>
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
<h1>Display Preferences</h1>
<p>Font Style: $fontStyle</p>
<p>Font Size: $fontSize</p>
<p>Font Color: $fontColor</p>
<p>Background Color: $bgColor</p>
<a href='apply_preferences.php'>Apply Preferences</a>
</body>
</html>
";
?>
