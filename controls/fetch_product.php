<?php
    include './controls/db2.php';
    session_start();

    $sql = "SELECT `id`, `product_name`, `description`, `price`, `created_at`, `profile_image` FROM `products`";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
?>
