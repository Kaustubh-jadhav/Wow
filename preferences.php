<?php
// Set the default preferences
$fontStyle = 'Arial';
$fontSize = '16px';
$fontColor = '#000000';
$bgColor = '#FFFFFF';

// Check if the user has submitted the form
if (isset($_POST['submit'])) {
    // Get the selected preferences from the form
    $fontStyle = $_POST['fontStyle'];
    $fontSize = $_POST['fontSize'];
    $fontColor = $_POST['fontColor'];
    $bgColor = $_POST['bgColor'];
    
    // Set the preferences as cookies
    setcookie('fontStyle', $fontStyle, time() + 3600 * 24 * 365);
    setcookie('fontSize', $fontSize, time() + 3600 * 24 * 365);
    setcookie('fontColor', $fontColor, time() + 3600 * 24 * 365);
    setcookie('bgColor', $bgColor, time() + 3600 * 24 * 365);
}

// Display the form to select preferences
echo "
<html>
<head>
<title>Change Preferences</title>
</head>
<body>
<h1>Change Preferences</h1>
<form method='post' action=''>
    <p>
        <label for='fontStyle'>Font Style:</label>
        <select name='fontStyle' id='fontStyle'>
            <option value='Arial' " . ($fontStyle=='Arial' ? 'selected' : '') . ">Arial</option>
            <option value='Times New Roman' " . ($fontStyle=='Times New Roman' ? 'selected' : '') . ">Times New Roman</option>
            <option value='Verdana' " . ($fontStyle=='Verdana' ? 'selected' : '') . ">Verdana</option>
        </select>
    </p>
    <p>
        <label for='fontSize'>Font Size:</label>
        <select name='fontSize' id='fontSize'>
            <option value='12px' " . ($fontSize=='12px' ? 'selected' : '') . ">12px</option>
            <option value='16px' " . ($fontSize=='16px' ? 'selected' : '') . ">16px</option>
            <option value='20px' " . ($fontSize=='20px' ? 'selected' : '') . ">20px</option>
        </select>
    </p>
    <p>
        <label for='fontColor'>Font Color:</label>
        <input type='color' name='fontColor' id='fontColor' value='$fontColor'>
    </p>
    <p>
        <label for='bgColor'>Background Color:</label>
        <input type='color' name='bgColor' id='bgColor' value='$bgColor'>
    </p>
    <p>
        <input type='submit' name='submit' value='Save Preferences'>
    </p>
</form>
</body>
</html>
";
?>
