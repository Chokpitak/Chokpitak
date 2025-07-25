<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: signin.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information Website</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SweetAlert2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<style>
    body {
        font-family: 'Kanit',sans-serif;
    }
</style>

<body>
    <?php include './components/header.php'; ?>

    <!-- Hero Section -->
    <section class="hero text-white text-center py-5" style="background: linear-gradient(to right,rgb(133, 224, 252),rgb(0, 172, 252)); height: 100vh;">
        <div class="container h-100 d-flex flex-column justify-content-center text-black">
            <h1 class="display-4">ยินดีต้อนรับสู่เว็บไซต์ของเรา</h1>
            <p class="lead">ค้นพบโลกแห่งเทคโนโลยีสารสนเทศ และข่าวสารล่าสุดเกี่ยวกับการพัฒนาเทคโนโลยี</p>
            <a href="#content" class="btn btn-light btn-lg mx-auto">เริ่มต้นตอนนี้</a>
        </div>
    </section>

    <!-- Content Section -->
    <section id="content" class="py-5" style="background: linear-gradient(to right,rgb(183, 230, 248),rgb(183, 230, 248));">
        <div class="container">
            <h2 class="text-center mb-4">เกี่ยวกับเทคโนโลยีสารสนเทศ</h2>
            <p>
                เทคโนโลยีสารสนเทศ (Information Technology หรือ IT) เป็นการใช้เทคโนโลยีในการจัดการกับข้อมูลและสารสนเทศเพื่อสนับสนุนการทำงานทางธุรกิจและองค์กรต่างๆ
                ไม่ว่าจะเป็นการพัฒนาโปรแกรมคอมพิวเตอร์ การจัดการฐานข้อมูล การสื่อสารผ่านเครือข่าย หรือการป้องกันข้อมูลทางไซเบอร์ เทคโนโลยีสารสนเทศมีบทบาทสำคัญในการพัฒนาและขับเคลื่อนองค์กรสู่ความสำเร็จในยุคดิจิทัล.
            </p>
            <p>
                เทคโนโลยีสารสนเทศได้มีการพัฒนาอย่างรวดเร็วในช่วงไม่กี่ปีที่ผ่านมา และสามารถปรับตัวให้เข้ากับความต้องการของธุรกิจและผู้ใช้งานได้อย่างมีประสิทธิภาพ
                เช่น การพัฒนาโปรแกรมหรือแอปพลิเคชันใหม่ๆ ที่ช่วยเพิ่มประสิทธิภาพในการทำงาน เช่น การใช้ระบบคลาวด์ (Cloud Computing) หรือการใช้ Big Data ในการวิเคราะห์ข้อมูลเพื่อสนับสนุนการตัดสินใจ.
            </p>
        </div>
    </section>

    <?php include './components/footer.php'; ?>
    <script>
        <?php if (isset($_GET['success']) && $_GET['success'] == 'true') : ?>
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: 'You have signed in successfully!',
                footer: 'Go Away Teen'
            });
        <?php endif; ?>
    </script>
</body>
</html>