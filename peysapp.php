<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peys App</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
            background-color: #f8f9fa;
            margin: 0;
        }
        form {
            border: 2px solid #000000;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 20px;
            background-color: #EBEBEBFF;
            text-align: center;
        }
        h1 {
            font-family: Arial, sans-serif;
            color: #333;
        }
        label {
            font-weight: bold;
        }
        .image-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
            border: 3px solid;
        }
        .image-container img {
            object-fit: cover; /* Ensures the image fits without stretching */
        }
        .range-output {
            margin-top: 5px;
            font-size: 1.2em;
        }
        button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 1em;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<?php
// Set default values for the size and border color parameters
$size = isset($_GET['size']) && is_numeric($_GET['size']) ? intval($_GET['size']) : 60; 
$borderColor = isset($_GET['borderColor']) ? $_GET['borderColor'] : '#000000';  

// Set canvas dimensions based on the selected size
$canvasWidth = $size;
$canvasHeight = $size;
?>

<form id="settingsForm" method="get">
    <h1>Peys App</h1>
    
    <!-- Photo Size Selection -->
    <label for="sizeSlider">Select Photo Size:</label>
    <input type="range" id="sizeSlider" name="size" min="40" max="500" value="<?php echo htmlspecialchars($size); ?>" step="10" oninput="this.nextElementSibling.value = this.value">
    <output class="range-output"><?php echo htmlspecialchars($size); ?></output>
    
    <br><br>

    <!-- Border Color Selection -->
    <label for="borderColor">Select Border Color:</label>
    <input type="color" id="borderColor" name="borderColor" value="<?php echo htmlspecialchars($borderColor); ?>">
    
    <br><br>

    <!-- Submit Button -->
    <button type="submit" name="submit">Process</button>

    <br><br>

    <!-- Image Display with Selected Border Color and Size -->
    <div class="image-container" style="border-color: <?php echo htmlspecialchars($borderColor); ?>; width: <?php echo $canvasWidth; ?>px; height: <?php echo $canvasHeight; ?>px;">
        <img src="/assets/image/nruto.jpg" alt="Image for Canvas" width="<?php echo $canvasWidth; ?>" height="<?php echo $canvasHeight; ?>">
    </div>

</form>

</body>
</html>
