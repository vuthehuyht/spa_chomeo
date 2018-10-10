-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 13, 2018 lúc 02:57 PM
-- Phiên bản máy phục vụ: 10.1.26-MariaDB
-- Phiên bản PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `spa_chomeo`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id_admin`, `name`, `username`, `password`, `level`) VALUES
(1, 'Phạm Công Danh', 'admin', '123456', 1),
(3, 'Phạm Hoàng Đức', 'mrcutom98', '123456', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill_product`
--

CREATE TABLE `bill_product` (
  `id_bill_product` int(11) NOT NULL,
  `id_product` int(11) DEFAULT NULL,
  `amount_buy` int(11) NOT NULL,
  `time_bill_product` date NOT NULL,
  `id_users` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `bill_product`
--

INSERT INTO `bill_product` (`id_bill_product`, `id_product`, `amount_buy`, `time_bill_product`, `id_users`) VALUES
(4, 1, 2, '2018-06-12', 1),
(5, 2, 1, '2018-06-12', 1),
(6, 2, 4, '2018-06-13', 1),
(7, 1, 1, '2018-06-13', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blog`
--

CREATE TABLE `blog` (
  `id_blog` int(11) NOT NULL,
  `content` mediumtext,
  `url_image` varchar(255) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `id_users` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `blog`
--

INSERT INTO `blog` (`id_blog`, `content`, `url_image`, `time`, `id_users`) VALUES
(33, 'aaaaaaaaaaaaaa', 'upload/blog/2.png', '2018-05-29 20:35:43', 1),
(34, 'aaaaaaaaaaaaaa', 'upload/blog/2.png', '2018-05-29 20:35:49', 1),
(35, 'Cho Thú cưng đi tắm mát!!!', 'upload/blog/3b220c30a3580cc1155da49adf3e1bd1.jpg', '2018-06-12 19:28:48', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blog_comment`
--

CREATE TABLE `blog_comment` (
  `id_blog_comment` int(11) NOT NULL,
  `COMMENT` longtext,
  `time_comment` date NOT NULL,
  `id_blog` int(11) DEFAULT NULL,
  `id_users` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `blog_comment`
--

INSERT INTO `blog_comment` (`id_blog_comment`, `COMMENT`, `time_comment`, `id_blog`, `id_users`) VALUES
(1, 'like', '0000-00-00', 33, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `class_product`
--

CREATE TABLE `class_product` (
  `id_class_product` int(11) NOT NULL,
  `name_class_product` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `class_product`
--

INSERT INTO `class_product` (`id_class_product`, `name_class_product`) VALUES
(1, 'Thức ăn'),
(2, 'Chuồng, nhà, giường, túi'),
(3, 'Quần áo'),
(4, 'Vòng cổ, dây xích');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `content` text,
  `id_contact` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`name`, `email`, `phone`, `content`, `id_contact`) VALUES
('aaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaa', 'aaaaaaaa', 'aaaaaaaaaaaaaa', 1),
('Phạm Công Danh', 'okkemdau@gmail.com', '01659916555', 'HÚ HÚ', 2),
('Phạm Hoàng Đức', 'yeuemmaithoine@yahoo.com', 'aaaaaaaa', 'aaaaaaaaaaaaaaaa', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `image_introduction`
--

CREATE TABLE `image_introduction` (
  `image` varchar(100) DEFAULT NULL,
  `id_image` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `image_introduction`
--

INSERT INTO `image_introduction` (`image`, `id_image`) VALUES
('img1.jpg', 1),
('img2.jpg', 1),
('img3.jpg', 1),
('img1.jpg', 1),
('img2.jpg', 1),
('img3.jpg', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `image_service`
--

CREATE TABLE `image_service` (
  `id_service` int(11) DEFAULT NULL,
  `img` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `image_service`
--

INSERT INTO `image_service` (`id_service`, `img`) VALUES
(5, 'img1.jpg'),
(5, 'img2.jpg'),
(5, 'img1.jpg'),
(5, 'img2.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `introduction`
--

CREATE TABLE `introduction` (
  `id` int(11) NOT NULL,
  `title` varchar(300) DEFAULT NULL,
  `content` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `introduction`
--

INSERT INTO `introduction` (`id`, `title`, `content`) VALUES
(1, 'Giới thi&ecirc;u chung\r\n', 'Ch&iacute;nh thức th&agrave;nh lập v&agrave; đi v&agrave;o hoạt động từ th&aacute;ng 1 năm 2017, Trung t&acirc;m Chăm s&oacute;c th&uacute; cưng l&agrave; một trung t&acirc;m ngo&agrave;i c&ocirc;ng lập được đ&aacute;nh gi&aacute; cao về cả chất lượng chăm s&oacute;c, tư vấn cũng như gi&uacute;p đỡ kh&aacute;ch h&agrave;ng tận t&igrave;nh, chu đ&aacute;o. Trung t&acirc;m c&oacute; tổng diện t&iacute;ch sử dụng l&agrave; khoảng 5.500m2 với hệ thống sản phẩm chuy&ecirc;n dụng c&ugrave;ng với c&aacute;c dịch vụ ti&ecirc;n tiến thế hệ mới nhất bởi đội ngũ giỏi chuy&ecirc;n m&ocirc;n, gi&agrave;u y đức.\r\n'),
(2, ' Quá trình hình thành', 'Bệnh viện thú y quốc tế được thành lập tại Việt Nam sau quá trình viện trưởng Homma qua Việt Nam thực hiện các chương trình phòng chống dại cho các tỉnh phía bắc tại Việt Nam. Do nhận thấy việc chăm sóc và điều trị cho thú cưng tại các phòng khám thú y Việt Nam hoàn toàn chưa xứng tầm với tấm lòng yêu chó của những người chăm sóc quan tâm tới thú cưng, chúng tôi đã xúc tiến những bước đi đột phá để từng bước hình thành bệnh viện thú y đầu tiên 100% vốn đầu tư của Nhật Bản. Toàn thể bác sĩ của NEW PET HOSPITAL đã được tu nghiệp trong thời gian dài tại hơn 40 bệnh viện và phòng khám lớn nhỏ trực thuộc tập đoàn G & H Japan tại Nhật Bản nhằm mục đích làm quen với các kỹ thuật và máy móc điều trị tiên tiến. Các bác sỹ Nhật Bản đã cung cấp không chỉ những kiến thức về điều trị mà còn những tác phong và nguyên tắc hàng đầu trong khám và chữa bệnh cho thú cưng tại Nhật Bản. Tất cả những yếu tố trên đã làm nên một bệnh viện thú y với phong cách và chuẩn mực mới : NEW PET HOSPITAL');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id_news` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` mediumtext,
  `time_news` datetime DEFAULT NULL,
  `url_image` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `id_admin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id_news`, `title`, `content`, `time_news`, `url_image`, `status`, `id_admin`) VALUES
(4, 'Mua bán thú nuôi giá rẻ', 'Ở Hà Nội có rất nhiều địa điểm bán chó mèo', '2018-05-03 19:35:57', 'upload/news/anh-dai-dien-facebook-cho-meo-de-thuong-35.jpg', 1, 1),
(8, 'Nhận nuôi chó mèo', 'nhận nuôi chó mèo giá cả hợp lý', '2018-05-30 18:54:52', 'upload/news/15-1503748270635.jpg', 1, 1),
(9, 'Bán thú cưng giá rẻ tại Hà Nội', 'chuyên cung cấp các loại thú cưng giá rẻ tại Hà Nội', '2018-05-30 19:04:12', 'upload/news/180818_cho-meo.jpg', 1, 1),
(10, 'Cung cấp các dịch vụ chăm sóc thú nuôi tại Hà Nội', 'Chuyên cung cấp những dihj vu để chăm sóc thú cưng một cách tốt nhất', '2018-05-30 19:06:56', 'upload/news/images.jpg', 1, 1),
(11, 'Chăm sóc thú cưng bằng phương pháp đặc biệt', 'Chăm sóc thú cưng bằng phương pháp đặc biệt', '2018-05-30 19:07:23', 'upload/news/maxresdefault.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `price_service`
--

CREATE TABLE `price_service` (
  `id_service` int(11) DEFAULT NULL,
  `weight` varchar(255) DEFAULT NULL,
  `price` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `price_service`
--

INSERT INTO `price_service` (`id_service`, `weight`, `price`) VALUES
(5, '<5 kg', 300),
(5, '5kg - 10kg', 400),
(5, '10kg - 20kg', 500),
(5, '20kg - 30kg', 600),
(5, '>30kg', 700),
(6, '<5kg', 150),
(6, '5kg - 10kg', 250),
(6, '10kg - 20kg', 300),
(6, '20kg - 30kg', 500),
(6, '>30kg', 800);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `name_product` varchar(255) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `information_product` varchar(10000) NOT NULL,
  `url_image_product` varchar(255) NOT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `id_class_product` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id_product`, `name_product`, `price`, `amount`, `information_product`, `url_image_product`, `id_admin`, `id_class_product`) VALUES
(1, 'Royal Canin', 45000, 100, 'Royal Canin indoor 27 10kg Dành cho mèo trưởng thành trên 12 tháng tuổi.\r\n\r\n', 'upload/product/2140_indoor27.png', 1, 1),
(2, 'ORGO Cat', 50000, 100, 'Orgo cat treats Là loại thức ăn nhẹ bổ sung canxi làm chắc khỏe xương cho chó mèo', 'upload/product/3555_banhthuongorgoDentalbitesfordogs125g.jpg', 1, 1),
(3, 'ROYAL CANIN MINI JUNIOR', 160000, 100, 'Kích thướt chó: loại chó nhỏ con;\r\nTrọng lượng chó lúc trưởng thành: dưới 10kg;\r\nĐộ tuổi: dưới 10 tháng;\r\nKhối lượng: 800g/bịch;', 'upload/product/thumb_15017346684195_royal-canin-mini-junior-dog-food_thucanchomeo.com.vn.jpg', 1, 1),
(4, 'ROYAL CANIN MEDIUM ADULT', 120000, 1000, 'Hạt Royal Canin cho chó lớn ăn, là dạng hạt khô. Mỗi lần cho ăn 1 lượng vừa phải.', 'upload/product/thumb_14990858371773_royal-canin-medium-dog.jpg', 1, 1),
(5, 'Áo nỉ Superman Vàng', 65000, 100, 'Chất liệu áo mềm mại, có thể co dãn tùy ý nên sẽ không để thú cưng bị khó chịu.', 'upload/product/item_s153.jpg', 1, 3),
(6, 'Áo Minion Cho Chó Mèo', 45000, 100, 'Quần Áo cho chó mèo sẽ làm cho thú cưng của bạn thêm phần nổi bật, thu hút sự chú ý bởi vẻ ngoài thật sự xinh xắn và ngộ nghĩnh.', 'upload/product/111111.jpg', 1, 3),
(7, 'Áo Thun Liền Quần Cho Chó Mèo', 50000, 100, 'Áo cho chó mèo sẽ làm cho thú cưng của bạn thêm phần nổi bật, thu hút sự chú ý bởi vẻ ngoài thật sự xinh xắn và ngộ nghĩnh.', 'upload/product/ao9-600x600.jpg', 1, 3),
(8, 'Áo Khủng Long Cho Chó Mèo', 80000, 100, 'Có đủ size cho thú cưng đến 45kg\r\n\r\nSize 1: 80k\r\n\r\nmối size tăng 10k', 'upload/product/ao-khung-long-xanh-cho-cho-meo.jpg', 1, 3),
(9, 'LH - Rọ mõm nhựa 2', 60000, 100, ' Chiếc rọ mõm  sẽ là một phụ kiện không thể thiếu giúp đảm bảo an toàn cho những người xung quanh khi bạn đưa cún yêu đến những nơi công cộng.', 'upload/product/3677_503_2_ro_mom_nhua_cho_cun.jpg', 1, 4),
(10, 'Dây dắt kèm yếm phản quang ', 188000, 100, 'Với thiết kế dày dặn và chắc chắn, chiếc vòng cổ sẽ nằm thật gọn gàng và êm ái trên cổ chú thú cưng của bạn, sẵn sàng cho mọi chuyến đi dạo hoặc chạy bộ đầy hứng khởi phía trước. Ngoài tác dụng giúp bạn giữ chặt và theo sát chú thú cưng của mình,nó còn có màu sắc tươi tắn, thời trang. Bộ vòng cổ và dây dắt  còn là điểm nhấn nổi bật để chú thú cưng của bạn trông thật “sành điệu”.', 'upload/product/3645_12b50360fbdb70b6f47d62a51a0bb336.jpg', 1, 4),
(11, 'Dây xích 0.4*200cm', 250000, 100, 'Dây xích với thiết kế dày dặn và chắc chắn, chiếc vòng cổ này sẽ nằm thật gọn gàng và êm ái trên cổ chú thú cưng của bạn, sẵn sàng cho mọi chuyến đi dạo hoặc chạy bộ đầy hứng khởi phía trước', 'upload/product/1470_0_635175949374280000.jpg', 1, 4),
(12, 'Vòng cổ mạ inox 0.5x70cm', 75000, 100, 'Chiếc vòng cổ xích được thiết kế đẹp mắt, luôn là sự lựa chọn hàng đầu của bạn dành cho những chú chó cỡ trung và lớn.', 'upload/product/3DF46B12.jpg', 1, 4),
(13, 'Lồng Sắt Sơn Tĩnh Điện Cho Chó Mèo 60* 43*52', 255000, 100, 'Lồng sơn cho chó mèo là một loại chuồng cho mèo , chó có cấu trúc chắc chắn thông thoáng phù hợp với mọi loại chó mèo', 'upload/product/295_1_295_chuong_xep_son_tinh_dien-600x525.jpg', 1, 2),
(14, 'Nhà Nhựa Lớn Cho Chó Mèo 78*70*78', 1555000, 20, 'Nhà nhựa cao cấp cho chó mèo, kiểu dáng và màu sắc đẹp, hấp dẫn thú cưng nhà bạn, chất liệu bền, chắc chắn\r\n\r\nTháo rời, lắp ráp được.', 'upload/product/Thumbnail.jpg', 1, 2),
(15, 'Nhà Quả Dưa Hấu Nhỏ Cho Chó Mèo 32*41*26cm', 25000, 20, 'Ngôi nhà dưa hấu cho chó mèo được làm từ chất liệu cotton thông thoáng, dễ vệ sinh và phù hợp với khí hậu nóng ẩm ở Việt Nam.\r\n', 'upload/product/1118_nha_abc_hinh_qua_dua_hau_nho_xanh_32x41x26cm.jpg', 1, 2),
(16, 'Nệm Tròn Đa Năng Cho Chó Mèo', 150000, 100, 'Ngôi nhà được làm từ chất liệu cotton thông thoáng, dễ vệ sinh và phù hợp với khí hậu nóng ẩm ở Việt Nam.', 'upload/product/1505_0_untitled4.jpg', 1, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `register_service`
--

CREATE TABLE `register_service` (
  `id_register_service` int(11) NOT NULL,
  `id_users` int(11) DEFAULT NULL,
  `id_service` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles_admin`
--

CREATE TABLE `roles_admin` (
  `level` int(11) NOT NULL,
  `role` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `roles_admin`
--

INSERT INTO `roles_admin` (`level`, `role`) VALUES
(1, 'manager'),
(2, 'admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `service`
--

CREATE TABLE `service` (
  `id_service` int(11) NOT NULL,
  `name_service` varchar(255) DEFAULT NULL,
  `content` varchar(10000) DEFAULT NULL,
  `url_image` varchar(255) DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `openning` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `service`
--

INSERT INTO `service` (`id_service`, `name_service`, `content`, `url_image`, `id_admin`, `openning`) VALUES
(5, 'Dinh&nbsp;dưỡng c&acirc;n bằng cho th&uacute; cưng\r\n', 'Dinh dưỡng l&agrave; yếu tố quan trong đối với qu&aacute; tr&igrave;nh ph&aacute;t triển của th&uacute; cưng. Chế độ dinh dưỡng sai lầm sẽ dẫn đến những bệnh kh&aacute;c nhau như suy dinh dưỡng, b&eacute;o ph&igrave;. Việc cung cấp kh&ocirc;ng đủ dinh dưỡng cho th&uacute; cưng đặc biệt l&agrave; trong giai đoạn c&ograve;n nhỏ sẽ ảnh hưởng rất nhiều đến việc ph&aacute;t triển hệ cơ xương cũng như việc ph&aacute;t triển t&acirc;m sinh l&yacute;. Ở chiều ngược lại việc cung cấp qu&aacute; nhiều dinh dưỡng lại dẫn tới b&eacute;o ph&igrave; g&acirc;y n&ecirc;n nhiều loại bệnh tim mạch, bệnh ho do ch&egrave;n &eacute;p nội tạng&hellip;Việc n&agrave;y đặc biệt nghi&ecirc;m trọng đối với th&uacute; cưng lớn tuổi.\r\n', NULL, 3, 'Một chế độ ăn uống c&acirc;n bằng sẽ đem lại sức khỏe cho b&eacute; cưng của bạn. Tại hệ thống bệnh viện th&uacute; y, ph&ograve;ng kh&aacute;m th&uacute; y New Pet Hospital ch&uacute;ng t&ocirc;i c&oacute; những chế độ dinh dưỡng c&acirc;n bằng ph&ugrave'),
(6, 'Bác sĩ thú y tại nhà', 'Việt Nam Pet Hospital – cung cấp dịch vụ bác sĩ thú y tại nhà. Những bác sĩ có trình độ chuyên môn cao của chúng tôi sẽ đến tận nhà bạn để chăm sóc cho vật cưng được tốt nhất.', NULL, 3, 'Bạn không có nhiều thời gian để đưa thú cưng của mình đến  phòng khám thú y khi bé yêu của bạn đang bị vấn đề về sức khỏe. Bạn đừng lo lắng về vấn đề này. Chúng tôi sẽ giải. quyết giúp bạn'),
(8, 'Khám và chữa bệnh chó mèo', 'Chó mèo cũng có nhiều loại bệnh chúng thường mắc phải, nhất là những giống ngoại khi về sống tại môi trường Việt Nam với khí hậu khác biệt thường dễ bị mắc bệnh hơn. Vì vậy phòng khám thú y Petcare cung cấp các dịch vụ chăm sóc và khám chữa bệnh cho chó mèo một cách tốt nhất để chúng luôn khỏe mạnh. Với các bác sỹ thú y trình độ cao, nhiều kinh nghiệm và có tình yêu với thú vật bạn có thể tin tưởng chúng tôi. Hãy khám phá các dịch vụ của chúng tôi dưới đây và liên hệ với chúng tôi ngay hôm nay để lên lịch hẹn khám và tư vấn sức khỏe chó chó mèo tại phòng khám thú y Petcare', NULL, 3, 'Chó mèo luôn là một người bạn và như một thành viên trong gia đình và khi có các biểu hiện về sức khỏe hay bị ốm thì chúng cần phải được chăm sóc tốt nhất.'),
(29, 'Dịch Vụ Cắt Tỉa L&ocirc;ng Ch&oacute; M&egrave;o\r\n', 'Những ch&uacute; ch&oacute; hoặc m&egrave;o c&oacute; bộ l&ocirc;ng qu&aacute; d&agrave;y v&agrave; d&agrave;i thường l&agrave; điều kiện ph&aacute;t triển cực tốt của c&aacute;c loại k&yacute; sinh tr&ugrave;ng như rận, bọ ch&eacute;t, ve, v.v&hellip;.nếu bạn kh&ocirc;ng cắt tỉa l&ocirc;ng v&agrave; tắm gội thường xuy&ecirc;n cho ch&uacute;ng th&igrave; những con vật n&agrave;y c&oacute; thể l&acirc;y lan sang người bạn hoặc con c&aacute;i của bạn, g&acirc;y ra nhiều bệnh rất nguy hiểm.\r\n\r\nViệc cắt tỉa l&ocirc;ng cho ch&oacute; m&egrave;o đ&ograve;i hỏi phải c&oacute; nhiều thời gian v&agrave; kinh nghiệm th&igrave; mới c&oacute; thể l&agrave;m được. Thời gian để cắt tỉa l&ocirc;ng cho ch&oacute; m&egrave;o khoảng 80 ph&uacute;t &ndash; 180 ph&uacute;t. Việc cắt tỉa l&ocirc;ng đ&uacute;ng c&aacute;ch sẽ gi&uacute;p cho th&uacute; cưng của bạn trở n&ecirc;n gọn g&agrave;ng v&agrave; sạch sẽ hơn v&agrave; gi&uacute;p loại bỏ đi những phần l&ocirc;ng kh&ocirc;ng cần thiết, tế b&agrave;o chết.\r\n\r\nBạn kh&ocirc;ng biết l&agrave;m thế n&agrave;o để th&uacute; nu&ocirc;i của bạn trở n&ecirc;n đẳng cấp hơn c&aacute; t&iacute;nh hơn. Ch&uacute;ng t&ocirc;i sẽ gi&uacute;p bạn l&agrave;m điều đ&oacute;. Với dịch vụ cắt tỉa l&ocirc;ng ch&oacute; m&egrave;o ch&uacute;ng t&ocirc;i gi&uacute;p vật cưng của bạn trở n&ecirc;n ho&agrave;n hảo nhất.\r\n', NULL, 3, 'Ch&oacute; m&egrave;o l&agrave; những động vật cực kỳ hiếu động, ch&uacute;ng thường xuy&ecirc;n chạy nhảy ở ngo&agrave;i trời n&ecirc;n bộ l&ocirc;ng của ch&uacute;ng sẽ bị b&aacute;m rất nhiều bụi bẩn, việc cắt tỉa l&ocirc;ng cho ch&uacute;ng l&agrave; '),
(30, 'Dịch Vụ Giữ Th&uacute; Cưng &ndash; Nhận Giữ Vật Nu&ocirc;i\r\n', 'Ch&oacute; m&egrave;o l&agrave; một trong những con vật nu&ocirc;i cực kỳ gần gũi với con người, ch&oacute; m&egrave;o l&agrave; một người bạn cực kỳ xinh xắn v&agrave; trung th&agrave;nh. Ng&agrave;y nay ch&oacute; m&egrave;o được xem như l&agrave; một th&agrave;nh vi&ecirc;n trong gia đ&igrave;nh, việc chăm s&oacute;c v&agrave; chơi đ&ugrave;a c&ugrave;ng ch&uacute;ng l&agrave;m con người cảm thấy thư giản v&agrave; thoải m&aacute;i hơn sau những giờ l&agrave;m việc.</br>\r\n\r\nBạn đang chuẩn bị một chuyến đi c&ocirc;ng t&aacute;c v&agrave;i ng&agrave;y? Hay cả gia đ&igrave;nh bạn chuẩn bị đi du lịch, bạn lo lắng kh&ocirc;ng c&oacute; ai chăm s&oacute;c cho th&uacute; cưng của bạn? Bạn rất muốn dẫn ch&uacute;ng đi theo những điều kiện ra x&ocirc;i kh&ocirc;ng cho ph&eacute;p bạn l&agrave;m điều đ&oacute;. H&atilde;y để dịch vụ giữ th&uacute; cưng của Bệnh Viện Ch&oacute; M&egrave;o Tphcm ch&uacute;ng t&ocirc;i gi&uacute;p bạn.\r\n', NULL, 3, 'Với <strong>Dịch Vụ Giữ Th&uacute; Cưng</strong> của ch&uacute;ng t&ocirc;i bạn sẽ y&ecirc;n t&acirc;m về th&uacute; cưng của m&igrave;nh mỗi khi đi xa, du lịch hay c&ocirc;ng t&aacute;c. C&aacute;c kh&aacute;ch sạn th&uacute; cưng của ch&uacute;ng t&ocir');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `service_comment`
--

CREATE TABLE `service_comment` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_service` int(11) DEFAULT NULL,
  `comment` text,
  `tgian` datetime DEFAULT NULL,
  `rate` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `service_comment`
--

INSERT INTO `service_comment` (`id`, `id_user`, `id_service`, `comment`, `tgian`, `rate`) VALUES
(20, 1, 5, 'good', '2018-06-06 20:25:06', 50),
(21, 1, 6, 'bad', '2018-05-30 17:12:45', 20),
(22, 1, 8, 'good', '2018-05-30 15:48:09', 77),
(26, 2, 5, 'okk baby.', '2018-05-31 18:53:46', 40),
(28, 2, 6, 'Dịch vụ rất ok. Các bác sĩ ở trung tâm chăm sóc rất tận tình,, chu đáo. Cám ơn trung tâm rất nhiều!!!', '2018-06-04 14:19:41', 84);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `service_user`
--

CREATE TABLE `service_user` (
  `id_service` int(11) DEFAULT NULL,
  `name_user` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `sdt` varchar(15) DEFAULT NULL,
  `trangthai` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `weight` varchar(255) DEFAULT NULL,
  `price` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `service_user`
--

INSERT INTO `service_user` (`id_service`, `name_user`, `email`, `sdt`, `trangthai`, `id`, `address`, `weight`, `price`) VALUES
(5, 'Phạm Hoàng Đức', 'phamhoangduc1998@gmail.com', '0904613523', 1, 11, 'Hà Nội', '5kg - 10kg', 400),
(5, 'Phạm Hoàng Đức', 'phamhoangduc1998@gmail.com', '0904613523', 2, 12, 'Hà Nội', '20kg - 30kg', 600),
(6, 'Nguyễn Tiến Triển', 'tientrienmu@gmail.com', '0123456789', 1, 13, ' Bến Tre', '20kg - 30kg', 500);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `PASSWORD` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `sex` int(1) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id_users`, `username`, `PASSWORD`, `fullname`, `email`, `phone_number`, `address`, `sex`, `avatar`) VALUES
(1, 'lioneldanh', 'lioneldanh', 'Phạm Công Danh', 'okkemdau@gmail.com', '01659916555', 'Thái Bình', 1, 'none'),
(2, 'lioneldanh1026', 'lioneldanh', 'Phạm Công Danh', 'okkemdau@gmail.com', '01659916555', 'Thái Bình', 1, NULL),
(4, 'lioneldanh2610', 'lioneldanh', 'Phạm Công Danh', 'okkemdau@gmail.com', '01659916555', 'Thái Bình', 1, NULL),
(5, '', '', '', '', '', '', 0, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `level` (`level`);

--
-- Chỉ mục cho bảng `bill_product`
--
ALTER TABLE `bill_product`
  ADD PRIMARY KEY (`id_bill_product`),
  ADD KEY `id_product` (`id_product`),
  ADD KEY `id_users` (`id_users`);

--
-- Chỉ mục cho bảng `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`),
  ADD KEY `id_users` (`id_users`);

--
-- Chỉ mục cho bảng `blog_comment`
--
ALTER TABLE `blog_comment`
  ADD PRIMARY KEY (`id_blog_comment`),
  ADD KEY `id_blog` (`id_blog`),
  ADD KEY `id_users` (`id_users`);

--
-- Chỉ mục cho bảng `class_product`
--
ALTER TABLE `class_product`
  ADD PRIMARY KEY (`id_class_product`);

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Chỉ mục cho bảng `image_introduction`
--
ALTER TABLE `image_introduction`
  ADD KEY `id_image` (`id_image`);

--
-- Chỉ mục cho bảng `image_service`
--
ALTER TABLE `image_service`
  ADD KEY `id_service` (`id_service`);

--
-- Chỉ mục cho bảng `introduction`
--
ALTER TABLE `introduction`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `id_admin` (`id_admin`),
  ADD KEY `id_class_product` (`id_class_product`);

--
-- Chỉ mục cho bảng `register_service`
--
ALTER TABLE `register_service`
  ADD PRIMARY KEY (`id_register_service`),
  ADD KEY `id_users` (`id_users`),
  ADD KEY `id_service` (`id_service`);

--
-- Chỉ mục cho bảng `roles_admin`
--
ALTER TABLE `roles_admin`
  ADD PRIMARY KEY (`level`);

--
-- Chỉ mục cho bảng `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id_service`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Chỉ mục cho bảng `service_comment`
--
ALTER TABLE `service_comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_service` (`id_service`);

--
-- Chỉ mục cho bảng `service_user`
--
ALTER TABLE `service_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_service` (`id_service`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `bill_product`
--
ALTER TABLE `bill_product`
  MODIFY `id_bill_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `blog_comment`
--
ALTER TABLE `blog_comment`
  MODIFY `id_blog_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `introduction`
--
ALTER TABLE `introduction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `register_service`
--
ALTER TABLE `register_service`
  MODIFY `id_register_service` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `service`
--
ALTER TABLE `service`
  MODIFY `id_service` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `service_user`
--
ALTER TABLE `service_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`level`) REFERENCES `roles_admin` (`level`);

--
-- Các ràng buộc cho bảng `bill_product`
--
ALTER TABLE `bill_product`
  ADD CONSTRAINT `bill_product_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`),
  ADD CONSTRAINT `bill_product_ibfk_2` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_users`);

--
-- Các ràng buộc cho bảng `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_users`);

--
-- Các ràng buộc cho bảng `blog_comment`
--
ALTER TABLE `blog_comment`
  ADD CONSTRAINT `blog_comment_ibfk_1` FOREIGN KEY (`id_blog`) REFERENCES `blog` (`id_blog`),
  ADD CONSTRAINT `blog_comment_ibfk_2` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_users`);

--
-- Các ràng buộc cho bảng `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`id_class_product`) REFERENCES `class_product` (`id_class_product`);

--
-- Các ràng buộc cho bảng `register_service`
--
ALTER TABLE `register_service`
  ADD CONSTRAINT `register_service_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_users`),
  ADD CONSTRAINT `register_service_ibfk_2` FOREIGN KEY (`id_service`) REFERENCES `service` (`id_service`);

--
-- Các ràng buộc cho bảng `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `service_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);

--
-- Các ràng buộc cho bảng `service_user`
--
ALTER TABLE `service_user`
  ADD CONSTRAINT `service_user_ibfk_1` FOREIGN KEY (`id_service`) REFERENCES `service` (`id_service`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
