<?php
    session_start();
    include 'db2.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        // Prepare and execute the delete statement
        $stmt = $pdo->prepare("DELETE FROM products WHERE id = ?");
        $result = $stmt->execute([$id]);

        if ($result) {
            $_SESSION['message'] = "User deleted successfully!";
            header("Location: ../product2.php");
        } else {
            $_SESSION['error'] = "Failed to delete user.";
            header("Location: ../product2.php");
    }
        exit;
    }
?>