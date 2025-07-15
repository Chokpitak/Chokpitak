<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
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
<body style="background: linear-gradient(to right,rgb(235, 193, 146),rgb(224, 139, 10));">
    <div class="container d-flex justify-content align-items-center" style="height: 100vh; max-width: 900px">
        <div class="card shadow" style="width: 100;">
            <div class="row g-0">
                <div class="col-md-6">
                    <div class="card-body p-4">

                        <h2>ลงชื่อเข้าใช้</h2>
                        <form method="POST" action="controls/create_users.php">
                            <div class="mb-3">
                                <label for="firstname" class="">ชื่อจริง</label>
                                <input type="text" name="first_name" class="form-control" required>
                            </div>

                            <div>
                                <label for="lastname">นามสกุล</label>
                                <input type="text" name="last_name" class="form-control" required>
                            </div>

                            <div>
                                <label for="address">ที่อยู่</label>
                                <textarea name="address" id="" class="form-control" required></textarea>
                            </div>

                            <div>
                                <label for="phone">เบอร์โทรศัพท์</label>
                                <input type="text" name="phone" class="form-control" required>
                            </div>

                            <div>
                                <label for="email">อีเมล์</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>

                            <div>
                                <label for="password">รหัสผ่าน</label>
                                <input type="text" name="password" class="form-control" required>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-warning w-100">ลงชื่อเข้าใช้</button>
                        </form>
                        <div class="text-center= mt-3">
                            <span>คุณมีบัญชีแล้ว?</span>
                            <a href="signin.php">เข้าสู่ระบบ</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 d-none d-md-block display-none">
                    <img src="assets/imgs/Shinchan.jpg" alt="" class="img-fluid" style="object-fit: cover; width: 100%; height: 100%;">
                </div>

            </div>
        </div>
    </div>

    </div>
    </body>
</html>