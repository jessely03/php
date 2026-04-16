<?php
session_start();

if (!isset($_SESSION["cart"])) {
    $_SESSION["cart"] = [];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shopping Cart</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 900px;
            margin: 30px auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #f5f5f5;
        }

        .total {
            text-align: right;
            font-weight: bold;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div>
        <h2>Your Shopping Cart</h2>

        <table>
            <tr>
                <th>ID</th>
                <th>Product</th>
                <th>Price</th>
                <th>Qty</th>
                <th>Subtotal</th>
                <th>Action</th>
            </tr>

            <?php $total = 0; ?>

            <?php if (!empty($_SESSION["cart"])): ?>
                <?php foreach ($_SESSION["cart"] as $item): ?>
                    <?php
                    $subtotal = $item["price"] * $item["qty"];
                    $total += $subtotal;
                    ?>
                    <tr>
                        <td><?= htmlspecialchars($item["id"]) ?></td>
                        <td><?= htmlspecialchars($item["name"]) ?></td>
                        <td>NT$<?= number_format($item["price"], 0, ",", ".") ?></td>
                        <td><?= $item["qty"] ?></td>
                        <td>NT$<?= number_format($subtotal, 0, ",", ".") ?></td>
                        <td><a href="delete.php?id=<?= urlencode($item["id"]) ?>">Delete</a></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="6">Cart is empty</td>
                </tr>
            <?php endif; ?>
        </table>

        <p class="total">Total: NT$<?= number_format($total, 0, ",", ".") ?></p>
        <p><a href="catalog.php">Back to Catalog</a></p>
    </div>
</body>
</html>
