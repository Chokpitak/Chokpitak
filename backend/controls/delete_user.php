<?php
    session_start();
    include 'db.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        // Prepare and execute the delete statement
        $stmt = $pdo->prepare("DELETE FROM users WHERE id = ?");
        $result = $stmt->execute([$id]);

        if ($result) {
            $_SESSION['message'] = "User deleted successfully!";
            header("Location: ../user2.php");
        } else {
            $_SESSION['error'] = "Failed to delete user.";
            header("Location: ../user2.php");
    }
        exit;
    }
?>