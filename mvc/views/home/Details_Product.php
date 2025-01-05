<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi Tiết Sản Phẩm</title>
    <link href="<?php echo BASE_URL . 'public/styles/styleHome.css'; ?>" rel="stylesheet"/>
    <style>

        h1 {
            text-align: center;
            color: #28a745;
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .product-detail {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: space-between;
        }

        .product-image {
            max-width: 350px;
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            margin-bottom: 20px;
        }

        .product-image:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.2);
        }

        .product-info {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .product-title {
            font-size: 2rem;
            color: #343a40;
            margin-bottom: 15px;
        }

        .price {
            font-size: 1.5rem;
            font-weight: bold;
            color: #28a745;
            margin-bottom: 10px;
        }

        .discount-price {
            font-size: 1.3rem;
            color: #dc3545;
            text-decoration: line-through;
            margin-bottom: 5px;
        }

        .rating {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .rating span {
            color: #ffc107;
            margin-right: 5px;
        }

        .description {
            font-size: 1rem;
            color: #555;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .action-buttons {
            display: flex;
            gap: 15px;
            margin-top: auto;
        }

        .action-buttons a {
            text-decoration: none;
            background-color: #007bff;
            color: white;
            padding: 12px 20px;
            border-radius: 8px;
            text-align: center;
            transition: background-color 0.3s;
        }

        .action-buttons a:hover {
            background-color: #0056b3;
        }

        .action-buttons .btn-add-to-cart {
            background-color: #28a745;
            border: 2px solid #28a745;
            color: white;
        }

        .action-buttons .btn-add-to-cart:hover {
            background-color: #218838;
        }

        .back-link {
            text-align: center;
            margin-top: 30px;
        }

        .back-link a {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
            padding: 10px 25px;
            border: 2px solid #007bff;
            border-radius: 8px;
            display: inline-block;
            transition: background-color 0.3s, color 0.3s;
        }

        .back-link a:hover {
            background-color: #007bff;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Chi Tiết Sản Phẩm</h1>
        <form action="Home/getShow" method="get">
            <div class="product-detail">
                <?php if (!empty($data['product'])): ?>
                    <?php
                    $product = $data['product'];
                    $gia_xuat = $product['giaxuat'];
                    $khuyenmai = $product['khuyenmai'];
                    $gia_ban = $gia_xuat - ($gia_xuat * $khuyenmai / 100);
                    $mo_ta = $product['Mota_loaisp'];
                    ?>
                    <div>
                        <img class="product-image" src="<?php echo BASE_URL . 'public/images/' . $product['hinhanh']; ?>" alt="Hình ảnh sản phẩm">
                    </div>
                    <div class="product-info">
                        <h2 class="product-title"><?php echo htmlspecialchars($product['Ten_loaisp'], ENT_QUOTES, 'UTF-8'); ?></h2>

                        <div class="rating">
                            <span>&#9733;&#9733;&#9733;&#9733;&#9733;</span> <!-- Add star ratings here -->
                            <span>(5/5)</span>
                        </div>

                        <?php if ($khuyenmai > 0): ?>
                            <p class="discount-price">Giá gốc: <del><?php echo number_format($gia_xuat, 0, ',', '.'); ?> VND</del></p>
                            <p class="price">Giá sau khuyến mãi: <?php echo number_format($gia_ban, 0, ',', '.'); ?> VND</p>
                            <p><strong>Khuyến mãi:</strong> <?php echo $khuyenmai; ?>%</p>
                        <?php else: ?>
                            <p class="price">Giá bán: <?php echo number_format($gia_xuat, 0, ',', '.'); ?> VND</p>
                        <?php endif; ?>

                        <p><strong>Mô tả sản phẩm:</strong></p>
                        <p class="description"><?php echo nl2br(htmlspecialchars($mo_ta, ENT_QUOTES, 'UTF-8')); ?></p>

                        <div class="action-buttons">
                            <?php if (!empty($product['ma_sp'])): ?>
                                <a class="btn-add-to-cart" href="<?php echo BASE_URL . 'GioHang/add/' . $product['ma_sp']; ?>">+ Thêm vào giỏ hàng</a>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php else: ?>
                    <p>Sản phẩm không tồn tại.</p>
                <?php endif; ?>
            </div>
        </form>

        <div class="back-link">
            <a href="<?php echo BASE_URL . 'Home'; ?>">Quay lại trang chủ</a>
        </div>
    </div>
</body>
</html>
