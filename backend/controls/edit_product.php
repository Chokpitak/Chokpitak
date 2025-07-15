<?php
    session_start();
    include 'db2.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $id = $_POST['id'];
        $product_name = $_POST['product_name'];
        $description = $_POST['description'];
        $price = $_POST['price'];

        $stmt = $pdo->prepare("UPDATE products SET product_name = ?, description = ?, price = ? WHERE id = ?");
        $result = $stmt->execute([$product_name, $description, $price, $id]);

        if ($result) {
            $_SESSION['message'] = "User updated successfully!";
            header("Location: ../product2.php");
        } else {
            $_SESSION['error'] = "Failed to update user.";
            header("Location: ../edit_product.php?id=" . $id);
        }

        exit;
    }
?>