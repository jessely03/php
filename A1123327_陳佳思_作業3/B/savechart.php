<?php
session_start();

$products = [
    "P001" => ["name" => "Laptop", "price" => 27000],
    "P002" => ["name" => "Smartphone", "price" => 15000],
    "P003" => ["name" => "Tablet", "price" => 12000]
];

if (!isset($_SESSION["cart"])) {
    $_SESSION["cart"] = [];
}

if (isset($_POST["product_id"]) && isset($_POST["qty"])) {
    $productId = $_POST["product_id"];
    $qty = (int) $_POST["qty"];

    if (isset($products[$productId]) && $qty > 0) {
        if (isset($_SESSION["cart"][$productId])) {
            $_SESSION["cart"][$productId]["qty"] += $qty;
        } else {
            $_SESSION["cart"][$productId] = [
                "id" => $productId,
                "name" => $products[$productId]["name"],
                "price" => $products[$productId]["price"],
                "qty" => $qty
            ];
        }
    }
}

header("Location: shoppingcart.php");
exit;
?>
