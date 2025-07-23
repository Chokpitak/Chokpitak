<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

<body style="background: linear-gradient(to right,rgb(183, 230, 248),rgb(183, 230, 248));">
    <?php include './controls/fetch_product.php'; ?>
    <section id="fecth_user" class="py-5">
        <div class="container">
            <h2 class="mb-4 d-flex justifly-item-center justify-content-center align-items-center">แสดงสินค้า</h2>
            <?php if ($stmt->rowCount() > 0) : ?>
                <div class="container mt-5">
                    <div class="row">
                        <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                            <div class="col-md-4 mb-4">
                                <div class="card">
                                    <div class="card-body" style="background: linear-gradient(to right,rgb(133, 224, 252),rgb(0, 172, 252)); height: 100vh;">
                                    <img src="/IT_Website/assets/imgs/<?= htmlspecialchars($row['profile_image']); ?>" 
                                        alt="<?= htmlspecialchars($row['product_name']); ?>" 
                                        class="rounded-5 mb-3"
                                        style="width: 100%; max-height: 200px; object-fit: cover;">    
                                    <h5 class="card-title"><?= htmlspecialchars($row['product_name']); ?></h5>
                                        <p class="card-text"><strong>รายละเอียด:</strong> <?= htmlspecialchars($row['description']); ?></p>
                                        <p class="card-text"><strong>ราคา:</strong> <?= number_format($row['price'], 2); ?></p>
                                        <p class="card-text mt-auto"><strong>วันที่เพิ่มสินค้า:</strong> <?= htmlspecialchars($row['created_at']); ?></p>
                                        <button class="btn btn-primary " id="add-to-cart"
                                            data-id="<?= htmlspecialchars($row['id']); ?>"
                                            data-name="<?= htmlspecialchars($row['product_name']); ?>"
                                            data-price="<?= htmlspecialchars($row['price']); ?>"
                                            data-image="<?= htmlspecialchars($row['profile_image']); ?>">
                                            เพิ่มสินค้า</button>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>

            <?php endif ?>
        </div>
    </section>
</body>

</html>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const addToCartButtons = document.querySelectorAll('#add-to-cart');

        addToCartButtons.forEach(button => {
            button.addEventListener('click', function() {
                const productId = this.getAttribute('data-id');
                const productName = this.getAttribute('data-name');
                const productPrice = this.getAttribute('data-price');
                const productImage = this.getAttribute('data-image');
                fetch('./controls/addToCart.php', {
                    method: 'POST',
                    body: new URLSearchParams({
                        productId: productId,
                        productName: productName,
                        productPrice: productPrice,
                        productImage: productImage
                    })
                })
                .then(response => response.text())
                .then(data => {
                    Swal.fire({
                        title: 'Success',
                        text: 'Add to cart success',
                        icon: 'success',
                        confirmButtonText: 'Yes',
                    })
                })
            })
        })
    })
</script>