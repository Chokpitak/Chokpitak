<?php
    include '../backend/controls/fetch_user.php';
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
            <h2>จัดการผู้ใช้งาน</h2>
            <table class="table table-bordered text-center">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>E-Mail</th>
                        <th>Tel Number</th>
                        <th>Created Date</th>
                        <th>Role</th>
                        <th>Manage</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = $stmt -> fetch(PDO::FETCH_ASSOC)) { ?>
                        <tr>
                            <td class="text-center"><?= htmlspecialchars($row['id']); ?></td>
                            <td><?= htmlspecialchars($row['first_name']) . " " . htmlspecialchars($row['last_name']); ?></td>
                            <td class="text-center"><?=htmlspecialchars($row['email']); ?></td>
                            <td class="text-center"><?=htmlspecialchars($row['phone']); ?></td>
                            <td class="text-center"><?=htmlspecialchars($row['created_at']); ?></td>
                            <td class="text-center"><?=htmlspecialchars($row['role']); ?></td>
                            <td class="text-center">
                                <a href="edit_user.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-warning">
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
                                            window.location.href =`controls/delete_user.php?id=${id}`;
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