
<style>
.news-item {
    margin-bottom: 20px;
    padding: 15px;
    background-color: #f9f9f9; /* Thêm màu nền nhẹ để dễ phân biệt */
    border-radius: 5px; /* Thêm góc bo tròn */
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Thêm hiệu ứng bóng đổ */
    text-align: center;
    position: relative; /* Để thêm vạch xanh ở bên dưới */
}

.news-item:not(:last-child) {
    border-bottom: 2px solid #007bff; /* Vạch xanh giữa các tin tức */
}
.news-item {
    margin-bottom: 20px;
    padding: 15px;
    background-color: #f9f9f9; /* Thêm màu nền nhẹ để dễ phân biệt */
    border-radius: 5px; /* Thêm góc bo tròn */
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Thêm hiệu ứng bóng đổ */
    text-align: center;
    position: relative; /* Để thêm vạch xanh ở bên dưới */
}

.news-item:not(:last-child) {
    border-bottom: 2px solid #007bff; /* Vạch xanh giữa các tin tức */
}

.news-item h2 {
    margin: 0 0 10px 0;
    font-size: 1.5em;
    color: #007bff; /* Màu xanh */
}

.news-item a {
    text-decoration: none; /* Bỏ gạch chân của thẻ a */
    color: #333; /* Đổi màu văn bản của liên kết */
    font-weight: bold; /* Thêm độ đậm cho liên kết */
}

.news-item a:hover {
    color: #007bff; /* Thêm màu sắc khi di chuột qua liên kết */
    text-decoration: underline; /* Thêm gạch chân khi di chuột */
}

.news-item .news-date {
    color: #888;
    font-size: 0.9em;
}

.no-news {
    text-align: center;
    color: #555;
    font-style: italic; /* Thêm kiểu chữ nghiêng để nổi bật */
}





</style>


<div class="content">
    <h1>Tin tức phụ kiện giảng dạy</h1>
    <?php if (!empty($data['tintuc'])): ?>
        <?php foreach ($data['tintuc'] as $tin): ?>
            <div class="news-item">
                <h2><a href="<?php echo BASE_URL . 'tintuc/chitiet/' . $tin['id']; ?>"><?php echo htmlspecialchars($tin['tieude']); ?></a></h2>
                <p class="news-date"> Ngày đăng: <?php echo isset($tin['ngaytao']) ? (new DateTime($tin['ngaytao']))->format('d/m/Y') : ''; ?></p>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <div class="no-news">
            <p>Không có tin tức nào</p>
        </div>
    <?php endif; ?>
</div>

