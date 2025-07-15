<?php
    session_start();
    include 'db.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $id = $_POST['id'];
        $first_name = $_POST['first_name'];
        $Last_name = $_POST['last_name'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];

        $stmt = $pdo->prepare("UPDATE users SET first_name = ?, last_name = ?, address = ?, phone = ?, email = ? WHERE id = ?");
        $result = $stmt->execute([$first_name, $Last_name, $address, $phone, $email, $id]);

        if ($result) {
            $_SESSION['message'] = "User updated successfully!";
            header("Location: ../user2.php");
        } else {
            $_SESSION['error'] = "Failed to update user.";
            header("Location: ../edit_user.php?id=" . $id);
        }

        exit;
    }
?>