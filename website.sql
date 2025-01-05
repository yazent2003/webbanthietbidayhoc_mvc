-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 16, 2024 lúc 03:59 PM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `website`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `adproduct`
--

CREATE TABLE `adproduct` (
  `Ma_loaisp` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ma_sp` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Ten_loaisp` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinhanh` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gianhap` int(11) NOT NULL,
  `giaxuat` int(11) NOT NULL,
  `soluong` int(11) DEFAULT NULL,
  `khuyenmai` int(11) NOT NULL,
  `Mota_loaisp` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `adproduct`
--

INSERT INTO `adproduct` (`Ma_loaisp`, `ma_sp`, `Ten_loaisp`, `hinhanh`, `gianhap`, `giaxuat`, `soluong`, `khuyenmai`, `Mota_loaisp`, `create_date`) VALUES
('M5', 'MDT1', 'Micro cài đầu không dây Soundmax MC-01 dùng cho tr', 'mic3.jpg', 600000, 2000000, 32, 10, '\r\nMicro cài đầu không dây Soundmax MC-01 là lựa chọn lý tưởng cho các giảng viên, hướng dẫn viên, hoặc người thuyết trình. Với thiết kế nhỏ gọn, dễ dàng đeo tai, sản phẩm giúp bạn tự do di chuyển mà không lo về dây dợ, đồng thời mang lại chất lượng âm thanh rõ ràng, ổn định. Micro này được trang bị công nghệ không dây tiên tiến, cho phép kết nối ổn định trong phạm vi rộng, phù hợp sử dụng trong các buổi giảng dạy, hội thảo hay thuyết trình. Soundmax MC-01 mang lại sự tiện lợi và hiệu quả, giúp bạn truyền tải thông điệp một cách rõ ràng và chuyên nghiệp.', '2024-11-11'),
('M5', 'MDT2', 'Máy trợ giảng có dây Esfor ES-330 Hàn Quốc, mic hư', 'mic4.jpg', 1500000, 2500000, 10, 20, 'Máy trợ giảng không dây là công ty chuyên nghiệp, cung cấp đa dạng sản phẩm cho giáo viên. Nếu bạn chỉ cần 1 bộ loa mic trợ giảng phổ thông, hỗ trợ nói nhỏ khuếch đại tiếng nói thành to hơn lên, thì sẽ có nhiều hãng: Unizone, Aporo, Shidu, Takstar, Philips... Nếu bạn yêu cầu cao hơn: Tín hiệu sóng không bị nhiễu, không bị lẫn tiếng với nhau giữa các lớp; Mic trợ giảng phải hút âm sâu, loa trợ giảng phải lọc âm trong, êm, sắc nét hơn, khuếch đại lớn hơn mà vẫn không vỡ tiếng... thì các sản phẩm máy trợ giảng Hàn Quốc ESFOR AEPEL sẽ đáp ứng được các tiêu chí cao này. Nếu bạn tìm kiếm sự tuyệt đối hơn nữa cả về Âm thanh phải xuất sắc, Công nghệ nhiều, Pin cả tuần không phải sạc, Độ bền và tuổi đời sản phẩm hàng chục năm... thì, nếu như các models - bắt đầu từ ES-630 Plus TWS, AEP FC-630, AEP FC-650, AEP FC-830, AEP FC-930 và FANTASTIC X2 của Nhà sản xuất ESFOR - Thương hiệu AEPEL vẫn không làm cho bạn hài lòng, thì chắc chắn sẽ không còn một chiếc máy trợ giảng nào khác có thể đáp ứng được yêu cầu cho bạn.', '2024-11-11'),
('M1', 'Mic1', 'Micro thu âm Shure SM7B - Micro thu âm cho phòng t', 'micthuam.jpg', 10000000, 20000000, 20, 10, 'Nhu cầu ca hát có thể nói đang ngày một tăng cao hơn bao giờ hết, ai cũng đều muốn giọng hát của mình trở nên thật hay và cuốn hút. Đó cũng chính là lý do những sản phẩm micro thu âm liên tục được tung ra thị trường với mẫu mã đa dạng ngày càng nhiều hơn, trong đó sản phẩm micro thu âm Shure SM7B là một sản phẩm cực hot và được rất nhiều người ưa chuộng.\r\n\r\nSản phẩm này trở nên được phổ biến hơn trong hầu hết các phòng thu âm, và các đài phát thanh vì chất lượng và tính năng vượt trội của nó. Đây quả thực là một sự lựa chọn lý tưởng mà chúng ta không nên bỏ qua. Micro thu âm Shure SM7B đang được PUStudio phân phối chính hãng SHURE với mức giá cạnh tranh cùng nhiều ưu đãi hấp dẫn. Liên hệ ngay để nhận tư vấn và trải nghiệm thực tế.\r\nNhu cầu ca hát có thể nói đang ngày một tăng cao hơn bao giờ hết, ai cũng đều muốn giọng hát của mình trở nên thật hay và cuốn hút. Đó cũng chính là lý do những sản phẩm micro thu âm liên tục được tung ra thị trường với mẫu mã đa dạng ngày càng nhiều hơn, trong đó sản phẩm micro thu âm Shure SM7B là một sản phẩm cực hot và được rất nhiều người ưa chuộng.', '2024-11-11'),
('M1', 'Mic2', 'Micro Thu Âm Không Dây Cài Áo K9 Cổng Type-C Khử T', 'micthuam1.jpg', 100000, 170000, 12, 10, 'Micro Không Dây Giảm Tiếng Ồn Cho Ghi Âm Video / Ghi Âm / Dạy Học / Quay Video Điện Thoại Di Động.\r\nĐặc điểm: Độ trễ cực thấp 1,9ms, nhận được 20m không bị cản trở, bạn có thể sử dụng các chương trình phát sóng trực tiếp ngoài trời và quay video ít hơn.\r\nKhông cần ứng dụng, plug and play, kết nối một cú nhấp chuột, dễ sử dụng.\r\nGiảm tiếng ồn thông minh, độ bền lâu 10 giờ, dễ dàng đối phó với tất cả các loại môi trường ồn ào, chụp không lo lắng, đáp ứng nhu cầu của bạn trong một ngày.\r\n360 chụp toàn bộ ảnh, ghi lại từng chi tiết âm thanh.\r\nNhỏ và thiết thực, tương thích với nhiều thiết bị khác nhau, tương thích với điện thoại di động, máy tính bảng, máy ảnh, máy tính xách tay,\r\nKhả năng tương thích: Chân cắm cho Type C\r\nBộ sản phẩm bao gồm: 1 đầu thu, 1 mic cài áo, 1 sách HDSD, 1 cáp sạc\r\nMicro không dây mini là micrô kẹp và di động để mang đi khắp mọi nơi, nhận âm thanh rõ ràng và chất lượng cao, được thiết kế cho Y Live, Live, Tik.Tok creator, influencer,. Ăn các chương trình truyền hình và giáo viên,\r\nChất lượng âm thanh rõ ràng, chip không dây giảm tiếng ồn tích hợp có khả năng chống nhiễu mạnh mẽ và có thể nhận dạng giọng nói loa một cách hiệu quả, vẫn có thể ghi lại âm thanh rõ ràng và giảm tiếng ồn, nó là một đầu ghi video tuyệt vời để quay trực tiếp Phát sóng\r\nTự do quay video hơn cho bạn, tín hiệu ổn định và phản hồi nhanh. Quay Video vẫn được kết nối và không giới hạn khoảng cách 20M\r\nLưu ý: Sản phẩm được giao màu ngẫu nhiên. Nếu muốn chọn màu vui lòng nhắn tin cho shop nếu hết màu Quý khách chọn shop sẽ giao màu ngẫu nhiên. Xin cảm ơn!', '2024-11-11'),
('M4', 'MKD1', 'Mic không dây FM cho máy trợ giảng NS 5293', 'mic.jpg', 100000, 200000, 10, 10, 'Microphone không dây gài tai FM - Dùng cho các máy trợ giảng, Hướng dẫn viên, Nhân viên bán hàng. Chất lượng rất ổn định Pin khi sạc đầy có thể hoạt động cả ngày. Được hỗ trợ sử dụng Micro không giú...', '2024-11-11'),
('M4', 'MKD2', 'Mic Trợ Giảng Không Dây Aporo 2.4G V2 New', 'mic1.jpg', 2000000, 3000000, 10, 10, 'Từ khóa: máy trợ giảng, mic cài áo, mic thu âm, mic trợ giảng, mic trợ giảng giá rẻ, mic trợ giảng hà nội, mic trợ giảng không dây, mic trợ giảng tốt, mua mic trợ giảng', '2024-11-11'),
('M2', 'MTG1', 'Máy trợ giảng Aporo T18 2.4G | Mic ko dây, bluetoo', 'maytrogiang.jpg', 1000000, 1500000, 10, 10, 'Máy trợ giảng Aporo T18 2.4G là thiết bị hỗ trợ giảng dạy hiệu quả với micro không dây công nghệ 2.4G, công suất 30W cho âm thanh mạnh mẽ, rõ ràng. Máy tích hợp Bluetooth giúp kết nối với các thiết bị khác và tính năng ghi âm để lưu lại bài giảng. Thiết kế gọn nhẹ, dễ sử dụng, thời gian sử dụng lâu dài, phù hợp cho mọi không gian giảng dạy và giúp giảng viên tiết kiệm sức lực, cải thiện hiệu quả giảng dạy.', '2024-11-11'),
('M2', 'MTG2', 'Máy Trợ Giảng Không Dây UHF Giảng Dạy, Hội Họp, Hư', 'maytrogiang1.jpg', 1500000, 2500000, 13, 15, '\r\nMáy trợ giảng không dây UHF Takstar E261W là giải pháp lý tưởng cho giảng viên, hội thảo, hướng dẫn viên với chất lượng âm thanh vượt trội. Sản phẩm đi kèm với mic cầm tay tiện dụng, giúp người sử dụng dễ dàng điều chỉnh âm thanh, mang lại hiệu quả giảng dạy hoặc thuyết trình tốt nhất. Với công nghệ UHF, thiết bị cho phép truyền tải tín hiệu âm thanh ổn định, khoảng cách xa, dễ dàng kết nối và sử dụng. Đây là sản phẩm chính hãng, bảo đảm chất lượng, phù hợp cho các môi trường học tập và công việc chuyên nghiệp.', '2024-11-11'),
('M3', 'TN1', 'Tai Nghe Kiểm Âm Tai Nghe Kiểm Âm ISK HP-960B Giá ', 'tainghekiemam.jpg', 400000, 500000, 13, 5, 'Từ khóa: isk hp 960b, mua tai nghe kiểm ẩm, tai nghe kiểm âm, tai nghe kiểm âm chính hãng, tai nghe kiểm âm giá rẻ, tai nghe kiểm âm hà nội, tai nghe kiểm âm isk hp-960b, tai nghe kiểm âm tốt', '2024-11-11'),
('M3', 'TN2', 'Tai nghe kiểm âm studio Behringer BH 770 - Hàng Ch', 'tainghekiemam1.jpg', 600000, 900000, 13, 10, 'BH 770Closed-Back Studio Reference Headphones with Extended Bass ResponseProfessional-grade, closed-back studio Reference headphones53 mm dynamic drivers provide ultra-wide frequency res...\r\n', '2024-11-11');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `adproducttype`
--

CREATE TABLE `adproducttype` (
  `Ma_loaisp` varchar(50) NOT NULL,
  `Ten_loaisp` varchar(50) NOT NULL,
  `Mota_loaisp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `adproducttype`
--

INSERT INTO `adproducttype` (`Ma_loaisp`, `Ten_loaisp`, `Mota_loaisp`) VALUES
('M1', 'Micro thu âm', 'Micro thu âm'),
('M2', 'Máy trợ giảng', 'Máy trợ giảng'),
('M3', 'Tai nghe kiểm âm', 'Tai nghe kiểm âm'),
('M4', 'Mic không dây', 'Mic không dây'),
('M5', 'Micro đeo tai', 'Micro đeo tai');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhgiasanpham`
--

CREATE TABLE `danhgiasanpham` (
  `id` int(11) NOT NULL,
  `mahd` varchar(10) DEFAULT NULL,
  `makh` varchar(10) DEFAULT NULL,
  `tenkhachhang` varchar(100) DEFAULT NULL,
  `danh_gia` text DEFAULT NULL,
  `sao` int(11) DEFAULT NULL,
  `ngay_danh_gia` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danhgiasanpham`
--

INSERT INTO `danhgiasanpham` (`id`, `mahd`, `makh`, `tenkhachhang`, `danh_gia`, `sao`, `ngay_danh_gia`) VALUES
(1, '1', '1', '1', '1', 1, '2024-10-30 09:11:45'),
(2, 'HD20817', NULL, '1', '1', 2, '2024-10-30 09:22:21'),
(3, 'HD20817', NULL, 'a', 'a', 5, '2024-10-30 09:23:48'),
(4, 'HD20817', NULL, 'Ngoc Anh', 'meo dep', 5, '2024-10-30 09:24:07'),
(5, 'HD20817', NULL, '3', '2', 4, '2024-10-30 09:42:19'),
(6, 'HD43506', NULL, '1', '1', 3, '2024-10-30 09:53:47');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhkithanhvien`
--

CREATE TABLE `danhkithanhvien` (
  `FullName` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UserName` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PassWord` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DienThoai` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `GioiTinh` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `QuocTich` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DiaChi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `HinhAnh` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SoThich` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Level` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhkithanhvien`
--

INSERT INTO `danhkithanhvien` (`FullName`, `UserName`, `PassWord`, `Email`, `DienThoai`, `GioiTinh`, `QuocTich`, `DiaChi`, `HinhAnh`, `SoThich`, `Level`) VALUES
('admin', 'admin', '12345', 'admin@gmail.com', '09172684131', 'Nam', 'Việt Nam', 'Hà Nội', 'CEO.jpg', 'Kiếm tiền', 'quantri'),
('ngocanh', 'ngocanh', '12345', 'ngocanh@gmail.com', '09838479532', 'Nam', 'Viet Nam', 'Hà Nội', 'CEO.jpg', 'Động vật', 'nguoidung');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gopy`
--

CREATE TABLE `gopy` (
  `id` int(11) NOT NULL,
  `tenkh` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `ngaygopy` date NOT NULL,
  `noi_dung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `gopy`
--

INSERT INTO `gopy` (`id`, `tenkh`, `email`, `phone`, `ngaygopy`, `noi_dung`) VALUES
(3, 'ngọc anh', 'ngocanh@gmail.com', '09138478', '2024-10-31', 'ok'),
(6, 'Lê Văn Công', 'levancong@gmail.com', '09678214761', '2024-10-31', 'Thiết bị dùng tốt, đáng tiền');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `id` int(11) NOT NULL,
  `tenKM` varchar(255) NOT NULL,
  `moTa` text DEFAULT NULL,
  `giamGia` decimal(5,2) NOT NULL,
  `ngayBD` date NOT NULL,
  `ngayKT` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khuyenmai`
--

INSERT INTO `khuyenmai` (`id`, `tenKM`, `moTa`, `giamGia`, `ngayBD`, `ngayKT`) VALUES
(5, '20/11', 'Khuyến mại ngày 20/11...', '20.00', '2024-11-20', '2024-11-21');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lichsumuahang`
--

CREATE TABLE `lichsumuahang` (
  `mahd` varchar(10) NOT NULL,
  `makh` varchar(10) NOT NULL,
  `tenkh` varchar(50) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `diachilh` varchar(200) NOT NULL,
  `diachigh` varchar(200) NOT NULL,
  `tongtien` int(11) NOT NULL,
  `create_date` date NOT NULL,
  `trangthai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `lichsumuahang`
--

INSERT INTO `lichsumuahang` (`mahd`, `makh`, `tenkh`, `phone`, `diachilh`, `diachigh`, `tongtien`, `create_date`, `trangthai`) VALUES
('HD27231', 'KH40759', '1', '1', '1', '1', 19800000, '2023-10-31', 'Đã thanh toán'),
('HD63208', 'KH67455', '1', '1', '1', '1', 82200000, '2022-10-31', 'Đã thanh toán'),
('HD20817', 'KH81795', '3', '3', '3', '3', 49800000, '2024-10-27', 'Đã thanh toán'),
('HD43506', 'KH89466', '2', '2', '2', '2', 49800000, '2024-10-28', 'Đã thanh toán');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhacungcap`
--

CREATE TABLE `nhacungcap` (
  `MaNCC` int(11) NOT NULL,
  `TenNCC` varchar(255) NOT NULL,
  `DiaChi` varchar(255) DEFAULT NULL,
  `SoDienThoai` varchar(15) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `NguoiLienHe` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nhacungcap`
--

INSERT INTO `nhacungcap` (`MaNCC`, `TenNCC`, `DiaChi`, `SoDienThoai`, `Email`, `NguoiLienHe`) VALUES
(1, '11232536', '1', '1', '1123@gmail.com', '123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `oderdetail`
--

CREATE TABLE `oderdetail` (
  `mahd` varchar(10) NOT NULL,
  `masp` varchar(10) NOT NULL,
  `tensp` varchar(50) NOT NULL,
  `soluong` int(11) NOT NULL,
  `giaxuat` int(11) NOT NULL,
  `khuyenmai` int(3) NOT NULL,
  `hinhanh` varchar(200) NOT NULL,
  `thanhtien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `oderdetail`
--

INSERT INTO `oderdetail` (`mahd`, `masp`, `tensp`, `soluong`, `giaxuat`, `khuyenmai`, `hinhanh`, `thanhtien`) VALUES
('HD57231', 'M02', 'Mèo Anh Lông Dài', 1, 2000000, 10, 'meoanhlongdai.jpg', 1800000),
('HD57231', 'M03', 'Mèo Đen(Mèo Mun)', 1, 30000000, 12, 'meoanhlongngan.jpg', 26400000),
('HD57231', 'M04', 'Mèo Anh Lông Ngắn', 1, 2000000, 10, 'images.png', 1800000),
('HD46567', 'M02', 'Mèo Anh Lông Dài', 1, 2000000, 10, 'meoanhlongdai.jpg', 1800000),
('HD46567', 'M03', 'Mèo Đen(Mèo Mun)', 1, 30000000, 12, 'meoanhlongngan.jpg', 26400000),
('HD46567', 'M04', 'Mèo Anh Lông Ngắn', 1, 2000000, 10, 'images.png', 1800000),
('HD10327', 'M02', 'Mèo Anh Lông Dài', 1, 2000000, 10, 'meoanhlongdai.jpg', 1800000),
('HD10327', 'M03', 'Mèo Đen(Mèo Mun)', 1, 30000000, 12, 'meoanhlongngan.jpg', 26400000),
('HD10327', 'M04', 'Mèo Anh Lông Ngắn', 1, 2000000, 10, 'images.png', 1800000),
('HD14797', 'M02', 'Mèo Anh Lông Dài', 1, 2000000, 10, 'meoanhlongdai.jpg', 1800000),
('HD14797', 'M03', 'Mèo Đen(Mèo Mun)', 4, 30000000, 12, 'meoanhlongngan.jpg', 105600000),
('HD14797', 'M04', 'Mèo Anh Lông Ngắn', 1, 2000000, 10, 'images.png', 1800000),
('HD79030', 'M01', 'Mèo Anh Lông Ngắn', 2, 20000000, 10, 'anh-meo-cute-hinh-cute-meo.jpg', 36000000),
('HD79030', 'M02', 'Mèo Anh Lông Dài', 5, 2000000, 10, 'meoanhlongdai.jpg', 10800000),
('HD79030', 'M03', 'Mèo Đen(Mèo Mun)', 5, 30000000, 12, 'meoanhlongngan.jpg', 132000000),
('HD79030', 'M04', 'Mèo Anh Lông Ngắn', 1, 2000000, 10, 'images.png', 1800000),
('HD51478', 'M04', 'Mèo Anh Lông Ngắn', 1, 2000000, 10, 'images.png', 1800000),
('HD46838', 'M03', 'Mèo Đen(Mèo Mun)', 2, 30000000, 12, 'meoanhlongngan.jpg', 79200000),
('HD46838', 'M04', 'Mèo Anh Lông Ngắn', 1, 2000000, 10, 'images.png', 1800000),
('HD68733', 'M02', 'Mèo Anh Lông Dài', 2, 2000000, 10, 'meoanhlongdai.jpg', 3600000),
('HD68733', 'M03', 'Mèo Đen(Mèo Mun)', 1, 30000000, 12, 'meoanhlongngan.jpg', 26400000),
('HD68733', 'M04', 'Mèo Anh Lông Ngắn', 1, 2000000, 10, 'images.png', 1800000),
('HD68733', 'M01', 'Mèo Anh Lông Ngắn', 1, 20000000, 10, 'anh-meo-cute-hinh-cute-meo.jpg', 18000000),
('HD66588', 'M02', 'Mèo Anh Lông Dài', 2, 2000000, 10, 'meoanhlongdai.jpg', 3600000),
('HD66588', 'M03', 'Mèo Đen(Mèo Mun)', 1, 30000000, 12, 'meoanhlongngan.jpg', 26400000),
('HD66588', 'M04', 'Mèo Anh Lông Ngắn', 1, 2000000, 10, 'images.png', 1800000),
('HD66588', 'M01', 'Mèo Anh Lông Ngắn', 1, 20000000, 10, 'anh-meo-cute-hinh-cute-meo.jpg', 18000000),
('HD26843', 'M02', 'Mèo Anh Lông Dài', 2, 2000000, 10, 'meoanhlongdai.jpg', 3600000),
('HD26843', 'M03', 'Mèo Đen(Mèo Mun)', 1, 30000000, 12, 'meoanhlongngan.jpg', 26400000),
('HD26843', 'M04', 'Mèo Anh Lông Ngắn', 1, 2000000, 10, 'images.png', 1800000),
('HD26843', 'M01', 'Mèo Anh Lông Ngắn', 1, 20000000, 10, 'anh-meo-cute-hinh-cute-meo.jpg', 18000000),
('HD51309', 'M02', 'Mèo Anh Lông Dài', 2, 2000000, 10, 'meoanhlongdai.jpg', 3600000),
('HD51309', 'M03', 'Mèo Đen(Mèo Mun)', 1, 30000000, 12, 'meoanhlongngan.jpg', 26400000),
('HD51309', 'M04', 'Mèo Anh Lông Ngắn', 1, 2000000, 10, 'images.png', 1800000),
('HD51309', 'M01', 'Mèo Anh Lông Ngắn', 1, 20000000, 10, 'anh-meo-cute-hinh-cute-meo.jpg', 18000000),
('HD30176', 'M02', 'Mèo Anh Lông Dài', 2, 2000000, 10, 'meoanhlongdai.jpg', 3600000),
('HD30176', 'M03', 'Mèo Đen(Mèo Mun)', 1, 30000000, 12, 'meoanhlongngan.jpg', 26400000),
('HD30176', 'M04', 'Mèo Anh Lông Ngắn', 1, 2000000, 10, 'images.png', 1800000),
('HD30176', 'M01', 'Mèo Anh Lông Ngắn', 1, 20000000, 10, 'anh-meo-cute-hinh-cute-meo.jpg', 18000000),
('HD43506', 'M02', 'Mèo Anh Lông Dài', 2, 2000000, 10, 'meoanhlongdai.jpg', 3600000),
('HD43506', 'M03', 'Mèo Đen(Mèo Mun)', 1, 30000000, 12, 'meoanhlongngan.jpg', 26400000),
('HD43506', 'M04', 'Mèo Anh Lông Ngắn', 1, 2000000, 10, 'images.png', 1800000),
('HD43506', 'M01', 'Mèo Anh Lông Ngắn', 1, 20000000, 10, 'anh-meo-cute-hinh-cute-meo.jpg', 18000000),
('HD52914', 'M02', 'Mèo Anh Lông Dài', 2, 2000000, 10, 'meoanhlongdai.jpg', 3600000),
('HD52914', 'M03', 'Mèo Đen(Mèo Mun)', 1, 30000000, 12, 'meoanhlongngan.jpg', 26400000),
('HD52914', 'M04', 'Mèo Anh Lông Ngắn', 1, 2000000, 10, 'images.png', 1800000),
('HD52914', 'M01', 'Mèo Anh Lông Ngắn', 1, 20000000, 10, 'anh-meo-cute-hinh-cute-meo.jpg', 18000000),
('HD20817', 'M02', 'Mèo Anh Lông Dài', 2, 2000000, 10, 'meoanhlongdai.jpg', 3600000),
('HD20817', 'M03', 'Mèo Đen(Mèo Mun)', 1, 30000000, 12, 'meoanhlongngan.jpg', 26400000),
('HD20817', 'M04', 'Mèo Anh Lông Ngắn', 1, 2000000, 10, 'images.png', 1800000),
('HD20817', 'M01', 'Mèo Anh Lông Ngắn', 1, 20000000, 10, 'anh-meo-cute-hinh-cute-meo.jpg', 18000000),
('HD41166', 'M03', 'Mèo Đen(Mèo Mun)', 1, 30000000, 12, 'meoanhlongngan.jpg', 26400000),
('HD41166', 'M02', 'Mèo Anh Lông Dài', 1, 2000000, 10, 'meoanhlongdai.jpg', 1800000),
('HD52233', 'M03', 'Mèo Đen(Mèo Mun)', 1, 30000000, 12, 'meoanhlongngan.jpg', 26400000),
('HD63208', 'M01', 'Mèo Anh Lông Ngắn', 3, 20000000, 10, 'anh-meo-cute-hinh-cute-meo.jpg', 54000000),
('HD63208', 'M03', 'Mèo Đen(Mèo Mun)', 1, 30000000, 12, 'meoanhlongngan.jpg', 26400000),
('HD63208', 'M02', 'Mèo Anh Lông Dài', 1, 2000000, 10, 'meoanhlongdai.jpg', 1800000),
('HD27231', 'M01', 'Mèo Anh Lông Ngắn', 1, 20000000, 10, 'anh-meo-cute-hinh-cute-meo.jpg', 18000000),
('HD27231', 'M02', 'Mèo Anh Lông Dài', 1, 2000000, 10, 'meoanhlongdai.jpg', 1800000),
('HD83412', 'M04', 'Mèo Anh Lông Ngắn', 3, 2000000, 10, 'images.png', 5400000),
('HD83412', 'M03', 'Mèo Đen(Mèo Mun)', 2, 30000000, 12, 'meoanhlongngan.jpg', 52800000),
('HD83412', '12', 'Mèo Anh Lông Ngắn', 1, 2, 2, 'meoanhlongngan.jpg', 2),
('HD54656', 'MDT2', 'Máy trợ giảng có dây Esfor ES-330 Hàn Quốc, mic hư', 2, 2500000, 20, 'mic4.jpg', 4000000),
('HD54656', 'MDT1', 'Micro cài đầu không dây Soundmax MC-01 dùng cho tr', 1, 2000000, 10, 'mic3.jpg', 1800000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `mahd` varchar(10) NOT NULL,
  `makh` varchar(10) NOT NULL,
  `tenkh` varchar(50) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `diachilh` varchar(200) NOT NULL,
  `diachigh` varchar(200) NOT NULL,
  `tongtien` int(11) NOT NULL,
  `create_date` date NOT NULL,
  `trangthai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `order`
--

INSERT INTO `order` (`mahd`, `makh`, `tenkh`, `phone`, `diachilh`, `diachigh`, `tongtien`, `create_date`, `trangthai`) VALUES
('HD54656', 'KH74690', '1', '1', '1', '1', 5800000, '2024-11-11', 'Đang chờ xử lý'),
('HD83412', 'KH80098', '1', '1', '1', '1', 58200002, '2024-10-31', 'Đang chờ xử lý');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `adproduct`
--
ALTER TABLE `adproduct`
  ADD PRIMARY KEY (`ma_sp`);

--
-- Chỉ mục cho bảng `adproducttype`
--
ALTER TABLE `adproducttype`
  ADD PRIMARY KEY (`Ma_loaisp`);

--
-- Chỉ mục cho bảng `danhgiasanpham`
--
ALTER TABLE `danhgiasanpham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danhkithanhvien`
--
ALTER TABLE `danhkithanhvien`
  ADD PRIMARY KEY (`UserName`);

--
-- Chỉ mục cho bảng `gopy`
--
ALTER TABLE `gopy`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `lichsumuahang`
--
ALTER TABLE `lichsumuahang`
  ADD PRIMARY KEY (`makh`);

--
-- Chỉ mục cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  ADD PRIMARY KEY (`MaNCC`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`makh`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `danhgiasanpham`
--
ALTER TABLE `danhgiasanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `gopy`
--
ALTER TABLE `gopy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  MODIFY `MaNCC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
