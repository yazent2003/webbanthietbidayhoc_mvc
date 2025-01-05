<style>
.news-detail {
    margin: 20px auto;
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    max-width: 1000px;
    
}

.news-detail h1 {
    margin-bottom: 15px;
    font-size: 2em;
    color: #333;
}

.news-detail .news-date {
    color: #888;
    font-size: 1em;
    margin-bottom: 20px;
}

.news-detail p {
    line-height: 1.6;
    font-size: 1em;
}

.news-detail a {
    color: #007bff;
    text-decoration: none;
    font-weight: bold;
}

.news-detail a:hover {
    text-decoration: underline;
}

</style>

<div class="news-detail">
    <?php if (!empty($data['tintuc'])): ?>
        <?php $tin = $data['tintuc']; ?>
        <h1><?php echo htmlspecialchars($tin['tieude']); ?></h1>
        <p class="news-date">Ngày đăng: <?php echo isset($tin['ngaytao']) ? (new DateTime($tin['ngaytao']))->format('d/m/Y') : ''; ?></p>
        <p><?php echo nl2br(htmlspecialchars($tin['noidung'])); ?></p>
        <a href="<?php echo BASE_URL . 'tintuc'; ?>">Quay lại danh sách tin tức</a>
    <?php else: ?>
        <p>Không tìm thấy tin tức này.</p>
    <?php endif; ?>
</div>
