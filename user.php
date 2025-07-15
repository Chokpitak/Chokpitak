<?php
    include './controls/fetch_user.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- SweetAlert2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<style>
    body {
        font-family: 'Kanit',sans-serif;
    }
</style>
<body style="background: linear-gradient(to right,rgb(183, 230, 248),rgb(183, 230, 248));">
    <?php include './components/header.php'; ?>
    <section id="fetch_user" class="py-5">
        <div class="container">
            <h2 class="mb-4">แสดงข้อมูลผู้ใช้งาน</h2>
            <?php if($stmt->rowCount() > 0) : ?>
                <div class="container mt-5">
                    <div class="row">
                        <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                            <div class="col-md-4 mb-4">
                                <div class="card">
                                    <div class="card-body" style="background: linear-gradient(to right,rgb(133, 224, 252),rgb(0, 172, 252));">
                                        <h5 class="card-title"><?php echo htmlspecialchars($row['first_name']) . " " . htmlspecialchars($row['last_name']); ?></h5>
                                        <p class="card-text"><strong>อีเมล์:</strong><?php echo htmlspecialchars(($row)['email']); ?></p>
                                        <p class="card-text"><strong>เบอร์โทรศัพท์:</strong><?php echo htmlspecialchars(($row)['phone']); ?></p>
                                        <p class="card-text"><strong>ที่อยู่:</strong><?php echo htmlspecialchars(($row)['address']); ?></p>
                                        <p class="card-text"><strong>วันที่สมัคร:</strong><?php echo htmlspecialchars(($row)['created_at']); ?></p>
                                    </div>
                                </div>
                            </div>

                        <?php } ?>
                    </div>
                </div>
            <?php endif ?>
        </div>
    </section>
    <?php include './components/footer.php'; ?>
</body>
</html>