<?php
session_start();

$products = [
    "P001" => ["name" => "Laptop", "price" => 27000],
    "P002" => ["name" => "Smartphone", "price" => 15000],
    "P003" => ["name" => "Tablet", "price" => 12000]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product Catalog</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 30px auto;
        }

        select, input[type="number"], input[type="submit"] {
            padding: 8px;
            margin-right: 8px;
        }
    </style>
</head>
<body>
    <div>
        <h2>Product List</h2>

        <form action="savechart.php" method="post">
            <label for="product_id">Choose a product:</label>
            <select name="product_id" id="product_id">
                <?php foreach ($products as $id => $product): ?>
                    <option value="<?= htmlspecialchars($id) ?>">
                        <?= htmlspecialchars($product["name"]) ?> - NT$<?= number_format($product["price"], 0, ",", ".") ?>
                    </option>
                <?php endforeach; ?>
            </select>

            <label for="qty">Quantity:</label>
            <input type="number" name="qty" id="qty" value="1" min="1">

            <input type="submit" value="Add to Cart">
        </form>

        <p><a href="shoppingcart.php">View Cart</a></p>
    </div>
</body>
</html>
