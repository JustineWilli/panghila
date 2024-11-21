<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vendo Machine</title>
</head>
<body>
    <h1>Vendo Machine</h1>
    <form method="POST" action="">
        <?php
        // Define products array with product name and price
        $products = [
            "Coke" => 15,
            "Sprite" => 20,
            "Royal" => 20,
            "Pepsi" => 15,
            "Mountain Dew" => 20
        ];

        // Display the product options
        echo "<div><strong>Products:</strong><br>";
        foreach ($products as $product => $price) {
            echo "<input type='checkbox' name='selected_products[]' value='$product'> $product - ₱ $price<br>";
        }
        echo "</div><br>";
        ?>
        
        <!-- Dropdown for size selection -->
        <div>
            <label for="size">Size:</label>
            <select name="size" id="size">
                <option value="Regular">Regular</option>
                <option value="Large">Large</option>
            </select>
        </div><br>

        <!-- Quantity input -->
        <div>
            <label for="quantity">Quantity:</label>
            <input type="number" name="quantity" id="quantity" value="1" min="1">
        </div><br>

        <!-- Checkout button -->
        <button type="submit" name="checkout">Check Out</button>
    </form>

    <?php
    // Check if form is submitted
    if (isset($_POST['checkout'])) {
        $selectedProducts = $_POST['selected_products'] ?? [];
        $size = $_POST['size'];
        $quantity = $_POST['quantity'];

        if (!empty($selectedProducts) && $quantity > 0) {
            echo "<h2>Order Summary</h2>";
            $totalPrice = 0;

            foreach ($selectedProducts as $product) {
                $price = $products[$product];
                $itemTotal = $price * $quantity;
                $totalPrice += $itemTotal;
                echo "$product (₱$price each) x $quantity = ₱$itemTotal<br>";
            }

            echo "<strong>Total Price:</strong> ₱$totalPrice<br>";
            echo "<strong>Size Selected:</strong> $size<br>";
        } else {
            echo "<p>Please select at least one product and a valid quantity.</p>";
        }
    }
    ?>
</body>
</html>
