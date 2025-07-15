<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignIn</title>
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
<body style="background: linear-gradient(to right,rgb(83, 178, 212),rgb(28, 85, 122));">
    <div class="container d-flex justify-content align-items-center" style="height: 100vh; max-width: 900px">
        <div class="card shadow" style="width: 100;">
            <div class="row g-0">
                <div class="col-md-6">
                    <div class="card-body p-4">

                        <h2 class="text-center">เข้าสู่ระบบ</h2>
                        <form method="POST" action="./controls/signin_users.php">
                            <div class="mb-3">
                                <label for="" class="form-label">อีเมล์</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">รหัสผ่าน</label>
                                <input type="password" name="pass" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-info w-100">เข้าสู่ระบบ</button>
                        </form>
                        <div class="text-center= mt-3">
                            <span>คุณยังไม่มีบัญชี?</span>
                            <a href="signup.php">ลงชื่อเช้าใช้</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 d-none d-md-block display-none">
                    <img src="assets/imgs/Celestial.jpg" alt="" class="img-fluid" style="object-fit: cover; width: 100%; height: 100%;">
                </div>

            </div>
        </div>
    </div>
    <script>
        <?php if (isset($_GET['error']) && $_GET['error'] == 'invalid') : ?>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Invalid email or password',
                footer: 'Please try again.'
            });
        <?php endif; ?>
    </script>
</body>
</html>