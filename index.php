<!DOCTYPE html>
<html>
<head>
    <title>QR Code Generator</title>
    <link rel="stylesheet" type="text/css" href="resources/styles.css">
</head>
<body>
    <h1>QR Code Generator</h1>
    <form action="resources/generator.php" method="post">
        <label for="text">Text:</label>
        <input type="text" id="text" name="text" required>
        <br>
        <label for="size">Size:</label>
        <input type="number" id="size" name="size" min="1" max="10" value="5" required>
        <br>
        <input type="submit" value="Generate QR Code">
    </form>
    Made with <span class="heart">♥</span> by Ikmal Said
</body>
</html>