<?php
    include 'controls/id_product.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin console</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SweetAlert2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<style>
    body {
        font-family: 'Kanit',sans-serif;
    }
</style>
<body>
    <div class="d-flex">
        <?php include '../backend/components/header2.php'; ?>
            <main class="p-4 flex-grow-1">
                <h2>แก้ไขสินค้า</h2>
                <form action="controls/edit_product.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $user['id']?>">
                <div class="mb-3">
                    <label for="">Menu</label>
                    <input type="text" name="product_name" class="form-control" value="<?= htmlspecialchars($user['product_name']); ?>">
                </div>
                <div class="mb-3">
                    <label for="">Description</label>
                    <input type="text" name="description" class="form-control" value="<?= htmlspecialchars($user['description']); ?>">
                </div>
                <div class="mb-3">
                    <label for="">Price</label>
                    <input type="text" name="price" class="form-control" value="<?= htmlspecialchars($user['price']); ?>">
                </div>
                <div class="mb-3">
                    <label for="">Picture</label>
                    <input type="file" name="profile_image" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">บันทึกการแก้ไข</button>
                <button type="reset" class="btn btn-danger">รีเซ็ท</button>
                <a href="product2.php" class="btn btn-dark">ย้อนกลับ</a>
            </form>
            </main>
</body>
</html>
