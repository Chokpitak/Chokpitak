<?php
    include '../backend/controls/fetch_product.php';
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
    <div class="d-flex">
        <?php include '../backend/components/header2.php'; ?>
        <main class="p-4 flex-grow-1">
            <h2>จัดการสินค้า</h2>
                <table class="table table-bordered text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Menu</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Added Date</th>
                            <th>Manage</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row = $stmt -> fetch(PDO::FETCH_ASSOC)) { ?>
                        <tr>
                            <td><?= htmlspecialchars($row['id']); ?></td>
                            <td><?= htmlspecialchars($row['product_name']); ?></td>
                            <td><?= htmlspecialchars($row['description']); ?></td>
                            <td><?= htmlspecialchars($row['price']); ?> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-coin" viewBox="0 0 16 16">
  <path d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.135.982V8.518z"/>
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
  <path d="M8 13.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11m0 .5A6 6 0 1 0 8 2a6 6 0 0 0 0 12"/>
</svg> </td>
                            <td><?= htmlspecialchars($row['created_at']); ?></td>
                            <td class="text-center">
                                <a href="edit_product.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-warning">
                                    <i class="bi bi-pencil-square"><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"></i>
                                </a>
                                <button class="btn btn-sm btn-danger" onclick="confirmDelete(<?= $row['id'] ?>)">
                                    <i class="bi bi-trash"></i>
                                </button>
                                <script>
                                    function confirmDelete(id) {
                                        Swal.fire({
                                            title: 'คุณแน่ใจหรือไม่?',
                                            text: "คุณต้องการลบผู้ใช้งานนี้หรือไม่?",
                                            icon: 'warning',
                                            showCancelButton: true,
                                            confirmButtonText: 'ใช่!',
                                            cancelButtonText: 'ยกเลิก'
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                            window.location.href =`controls/delete_product.php?id=${id}`;
                                            }
                                        });
                                    }
                                </script>
                            </td>
                        </tr>
                    <?php }?>
                    </tbody>
                </table>
        </main>
    </div>
<?php if(isset($_SESSION['success'])) : ?>
<script>
    Swal.fire({
        icon: 'success',
        title: 'สำเร็จ',
        text: '<?= $_SESSION['success']; ?>',
        confirmButtonText: 'ตกลง'
    });
</script>
<?php unset($_SESSION['success']); endif; ?>
<?php if(isset($_SESSION['error'])) : ?>
<script>
    Swal.fire({
        icon: 'error',
        title: 'ผิดพลาด',
        text: '<?= $_SESSION['error']; ?>',
        confirmButtonText: 'ตกลง'
    });
</script>
<?php unset($_SESSION['error']); endif; ?>
</body>
</html>