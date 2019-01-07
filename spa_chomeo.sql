-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2018 at 01:59 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `spa_chomeo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id_admin` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `name`, `username`, `password`, `level`) VALUES
(3, 'Phạm Hoàng Đức', 'mrcutom98', '123456', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE IF NOT EXISTS `bill` (
`id_bill` int(11) NOT NULL,
  `name_product` varchar(255) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `id_users` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
`id_blog` int(11) NOT NULL,
  `content` mediumtext,
  `url_image` varchar(255) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `id_users` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `title` varchar(255) DEFAULT NULL,
  `content` mediumtext,
  `id_users` int(11) DEFAULT NULL,
`id_contact` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `image_introduction`
--

CREATE TABLE IF NOT EXISTS `image_introduction` (
  `image` varchar(100) DEFAULT NULL,
  `id_image` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image_introduction`
--

INSERT INTO `image_introduction` (`image`, `id_image`) VALUES
('img1.jpg', 1),
('img2.jpg', 1),
('img3.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `image_service`
--

CREATE TABLE IF NOT EXISTS `image_service` (
  `id_service` int(11) DEFAULT NULL,
  `img` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image_service`
--

INSERT INTO `image_service` (`id_service`, `img`) VALUES
(5, 'img1.jpg'),
(5, 'img2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `introduction`
--

CREATE TABLE IF NOT EXISTS `introduction` (
`id` int(11) NOT NULL,
  `title` varchar(300) DEFAULT NULL,
  `content` text
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `introduction`
--

INSERT INTO `introduction` (`id`, `title`, `content`) VALUES
(1, 'Giới thi&ecirc;u chung\r\n', 'Ch&iacute;nh thức th&agrave;nh lập v&agrave; đi v&agrave;o hoạt động từ th&aacute;ng 1 năm 2017, Trung t&acirc;m Chăm s&oacute;c th&uacute; cưng l&agrave; một trung t&acirc;m ngo&agrave;i c&ocirc;ng lập được đ&aacute;nh gi&aacute; cao về cả chất lượng chăm s&oacute;c, tư vấn cũng như gi&uacute;p đỡ kh&aacute;ch h&agrave;ng tận t&igrave;nh, chu đ&aacute;o. Trung t&acirc;m c&oacute; tổng diện t&iacute;ch sử dụng l&agrave; khoảng 5.500m2 với hệ thống sản phẩm chuy&ecirc;n dụng c&ugrave;ng với c&aacute;c dịch vụ ti&ecirc;n tiến thế hệ mới nhất bởi đội ngũ giỏi chuy&ecirc;n m&ocirc;n, gi&agrave;u y đức.\r\n'),
(2, ' Quá trình hình thành', 'Bệnh viện thú y quốc tế được thành lập tại Việt Nam sau quá trình viện trưởng Homma qua Việt Nam thực hiện các chương trình phòng chống dại cho các tỉnh phía bắc tại Việt Nam. Do nhận thấy việc chăm sóc và điều trị cho thú cưng tại các phòng khám thú y Việt Nam hoàn toàn chưa xứng tầm với tấm lòng yêu chó của những người chăm sóc quan tâm tới thú cưng, chúng tôi đã xúc tiến những bước đi đột phá để từng bước hình thành bệnh viện thú y đầu tiên 100% vốn đầu tư của Nhật Bản. Toàn thể bác sĩ của NEW PET HOSPITAL đã được tu nghiệp trong thời gian dài tại hơn 40 bệnh viện và phòng khám lớn nhỏ trực thuộc tập đoàn G & H Japan tại Nhật Bản nhằm mục đích làm quen với các kỹ thuật và máy móc điều trị tiên tiến. Các bác sỹ Nhật Bản đã cung cấp không chỉ những kiến thức về điều trị mà còn những tác phong và nguyên tắc hàng đầu trong khám và chữa bệnh cho thú cưng tại Nhật Bản. Tất cả những yếu tố trên đã làm nên một bệnh viện thú y với phong cách và chuẩn mực mới : NEW PET HOSPITAL');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
`id_news` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` mediumtext,
  `time` datetime DEFAULT NULL,
  `url_image` varchar(255) DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
`id_product` int(11) NOT NULL,
  `name_product` varchar(255) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `note` varchar(1000) DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `register_service`
--

CREATE TABLE IF NOT EXISTS `register_service` (
`id_register_service` int(11) NOT NULL,
  `id_users` int(11) DEFAULT NULL,
  `id_service` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `roles_admin`
--

CREATE TABLE IF NOT EXISTS `roles_admin` (
  `level` int(11) NOT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `permission` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE IF NOT EXISTS `service` (
`id_service` int(11) NOT NULL,
  `name_service` varchar(255) DEFAULT NULL,
  `content` varchar(10000) DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `openning` text
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id_service`, `name_service`, `content`, `id_admin`, `openning`) VALUES
(5, 'Dinh&nbsp;dưỡng c&acirc;n bằng cho th&uacute; cưng\r\n', 'Dinh dưỡng l&agrave; yếu tố quan trong đối với qu&aacute; tr&igrave;nh ph&aacute;t triển của th&uacute; cưng. Chế độ dinh dưỡng sai lầm sẽ dẫn đến những bệnh kh&aacute;c nhau như suy dinh dưỡng, b&eacute;o ph&igrave;. Việc cung cấp kh&ocirc;ng đủ dinh dưỡng cho th&uacute; cưng đặc biệt l&agrave; trong giai đoạn c&ograve;n nhỏ sẽ ảnh hưởng rất nhiều đến việc ph&aacute;t triển hệ cơ xương cũng như việc ph&aacute;t triển t&acirc;m sinh l&yacute;. Ở chiều ngược lại việc cung cấp qu&aacute; nhiều dinh dưỡng lại dẫn tới b&eacute;o ph&igrave; g&acirc;y n&ecirc;n nhiều loại bệnh tim mạch, bệnh ho do ch&egrave;n &eacute;p nội tạng&hellip;Việc n&agrave;y đặc biệt nghi&ecirc;m trọng đối với th&uacute; cưng lớn tuổi.\r\n', 3, 'Một chế độ ăn uống c&acirc;n bằng sẽ đem lại sức khỏe cho b&eacute; cưng của bạn. Tại hệ thống bệnh viện th&uacute; y, ph&ograve;ng kh&aacute;m th&uacute; y New Pet Hospital ch&uacute;ng t&ocirc;i c&oacute; những chế độ dinh dưỡng c&acirc;n bằng ph&ugrave; hợp cho từng độ tuổi , từng giai đoạn ph&aacute;t triển của b&eacute; cưng của bạn.V&agrave; ch&uacute;ng t&ocirc;i tự nhận sứ mệnh tư vấn cho bạn để c&aacute;c b&eacute; cưng c&oacute; được sự ph&aacute;t triển tốt nhất.\r\n'),
(6, 'Bác sĩ thú y tại nhà', 'Việt Nam Pet Hospital – cung cấp dịch vụ bác sĩ thú y tại nhà. Những bác sĩ có trình độ chuyên môn cao của chúng tôi sẽ đến tận nhà bạn để chăm sóc cho vật cưng được tốt nhất.', 3, 'Bạn không có nhiều thời gian để đưa thú cưng của mình đến  phòng khám thú y khi bé yêu của bạn đang bị vấn đề về sức khỏe. Bạn đừng lo lắng về vấn đề này. Chúng tôi sẽ giải. quyết giúp bạn'),
(8, 'Khám và chữa bệnh chó mèo', 'Chó mèo cũng có nhiều loại bệnh chúng thường mắc phải, nhất là những giống ngoại khi về sống tại môi trường Việt Nam với khí hậu khác biệt thường dễ bị mắc bệnh hơn. Vì vậy phòng khám thú y Petcare cung cấp các dịch vụ chăm sóc và khám chữa bệnh cho chó mèo một cách tốt nhất để chúng luôn khỏe mạnh. Với các bác sỹ thú y trình độ cao, nhiều kinh nghiệm và có tình yêu với thú vật bạn có thể tin tưởng chúng tôi. Hãy khám phá các dịch vụ của chúng tôi dưới đây và liên hệ với chúng tôi ngay hôm nay để lên lịch hẹn khám và tư vấn sức khỏe chó chó mèo tại phòng khám thú y Petcare', 3, 'Chó mèo luôn là một người bạn và như một thành viên trong gia đình và khi có các biểu hiện về sức khỏe hay bị ốm thì chúng cần phải được chăm sóc tốt nhất.'),
(29, 'Dịch Vụ Cắt Tỉa L&ocirc;ng Ch&oacute; M&egrave;o\r\n', 'Những ch&uacute; ch&oacute; hoặc m&egrave;o c&oacute; bộ l&ocirc;ng qu&aacute; d&agrave;y v&agrave; d&agrave;i thường l&agrave; điều kiện ph&aacute;t triển cực tốt của c&aacute;c loại k&yacute; sinh tr&ugrave;ng như rận, bọ ch&eacute;t, ve, v.v&hellip;.nếu bạn kh&ocirc;ng cắt tỉa l&ocirc;ng v&agrave; tắm gội thường xuy&ecirc;n cho ch&uacute;ng th&igrave; những con vật n&agrave;y c&oacute; thể l&acirc;y lan sang người bạn hoặc con c&aacute;i của bạn, g&acirc;y ra nhiều bệnh rất nguy hiểm.\r\n\r\nViệc cắt tỉa l&ocirc;ng cho ch&oacute; m&egrave;o đ&ograve;i hỏi phải c&oacute; nhiều thời gian v&agrave; kinh nghiệm th&igrave; mới c&oacute; thể l&agrave;m được. Thời gian để cắt tỉa l&ocirc;ng cho ch&oacute; m&egrave;o khoảng 80 ph&uacute;t &ndash; 180 ph&uacute;t. Việc cắt tỉa l&ocirc;ng đ&uacute;ng c&aacute;ch sẽ gi&uacute;p cho th&uacute; cưng của bạn trở n&ecirc;n gọn g&agrave;ng v&agrave; sạch sẽ hơn v&agrave; gi&uacute;p loại bỏ đi những phần l&ocirc;ng kh&ocirc;ng cần thiết, tế b&agrave;o chết.\r\n\r\nBạn kh&ocirc;ng biết l&agrave;m thế n&agrave;o để th&uacute; nu&ocirc;i của bạn trở n&ecirc;n đẳng cấp hơn c&aacute; t&iacute;nh hơn. Ch&uacute;ng t&ocirc;i sẽ gi&uacute;p bạn l&agrave;m điều đ&oacute;. Với dịch vụ cắt tỉa l&ocirc;ng ch&oacute; m&egrave;o ch&uacute;ng t&ocirc;i gi&uacute;p vật cưng của bạn trở n&ecirc;n ho&agrave;n hảo nhất.\r\n', 3, 'Ch&oacute; m&egrave;o l&agrave; những động vật cực kỳ hiếu động, ch&uacute;ng thường xuy&ecirc;n chạy nhảy ở ngo&agrave;i trời n&ecirc;n bộ l&ocirc;ng của ch&uacute;ng sẽ bị b&aacute;m rất nhiều bụi bẩn, việc cắt tỉa l&ocirc;ng cho ch&uacute;ng l&agrave; điều cần thiết v&agrave; quan trọng, để bảo vệ sức khỏe gia đ&igrave;nh bạn v&agrave; bảo vệ sức khỏe cho th&uacute; cưng của bạn.\r\n'),
(30, 'Dịch Vụ Giữ Th&uacute; Cưng &ndash; Nhận Giữ Vật Nu&ocirc;i\r\n', 'Ch&oacute; m&egrave;o l&agrave; một trong những con vật nu&ocirc;i cực kỳ gần gũi với con người, ch&oacute; m&egrave;o l&agrave; một người bạn cực kỳ xinh xắn v&agrave; trung th&agrave;nh. Ng&agrave;y nay ch&oacute; m&egrave;o được xem như l&agrave; một th&agrave;nh vi&ecirc;n trong gia đ&igrave;nh, việc chăm s&oacute;c v&agrave; chơi đ&ugrave;a c&ugrave;ng ch&uacute;ng l&agrave;m con người cảm thấy thư giản v&agrave; thoải m&aacute;i hơn sau những giờ l&agrave;m việc.</br>\r\n\r\nBạn đang chuẩn bị một chuyến đi c&ocirc;ng t&aacute;c v&agrave;i ng&agrave;y? Hay cả gia đ&igrave;nh bạn chuẩn bị đi du lịch, bạn lo lắng kh&ocirc;ng c&oacute; ai chăm s&oacute;c cho th&uacute; cưng của bạn? Bạn rất muốn dẫn ch&uacute;ng đi theo những điều kiện ra x&ocirc;i kh&ocirc;ng cho ph&eacute;p bạn l&agrave;m điều đ&oacute;. H&atilde;y để dịch vụ giữ th&uacute; cưng của Bệnh Viện Ch&oacute; M&egrave;o Tphcm ch&uacute;ng t&ocirc;i gi&uacute;p bạn.\r\n', 3, 'Với <strong>Dịch Vụ Giữ Th&uacute; Cưng</strong> của ch&uacute;ng t&ocirc;i bạn sẽ y&ecirc;n t&acirc;m về th&uacute; cưng của m&igrave;nh mỗi khi đi xa, du lịch hay c&ocirc;ng t&aacute;c. C&aacute;c kh&aacute;ch sạn th&uacute; cưng của ch&uacute;ng t&ocirc;i sẽ gi&uacute;p b&eacute; y&ecirc;u của bạn tho&aacute;i m&aacute;i giống như ch&iacute;nh ở nh&agrave; m&igrave;nh.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `service_comment`
--

CREATE TABLE IF NOT EXISTS `service_comment` (
`id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_service` int(11) DEFAULT NULL,
  `comment` text,
  `tgian` datetime DEFAULT NULL,
  `rate` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_comment`
--

INSERT INTO `service_comment` (`id`, `id_user`, `id_service`, `comment`, `tgian`, `rate`) VALUES
(20, 1, 5, 'good!', '2018-05-30 15:21:48', 80),
(21, 1, 6, 'bad', '2018-05-30 17:12:45', 20),
(22, 1, 8, 'good', '2018-05-30 15:48:09', 77),
(26, 2, 5, 'okk baby.', '2018-05-31 18:53:46', 40),
(28, 2, 6, 'Dịch vụ rất ok. Các bác sĩ ở trung tâm chăm sóc rất tận tình,, chu đáo. Cám ơn trung tâm rất nhiều!!!', '2018-06-04 14:19:41', 84);

-- --------------------------------------------------------

--
-- Table structure for table `service_user`
--

CREATE TABLE IF NOT EXISTS `service_user` (
  `id_service` int(11) DEFAULT NULL,
  `name_user` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `sdt` varchar(15) DEFAULT NULL,
  `trangthai` int(11) DEFAULT NULL,
`id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_user`
--

INSERT INTO `service_user` (`id_service`, `name_user`, `email`, `sdt`, `trangthai`, `id`) VALUES
(5, 'Phạm Hoàng Đức', 'phamhoangduc1998@gmail.com', '0904613523', 2, 4),
(5, 'Phạm Hoàng Đức', 'phamhoangduc1998@gmail.com', '0904613523', 2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id_users` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `PASSWORD` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `sex` bit(1) DEFAULT NULL,
  `url_image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_users`, `username`, `PASSWORD`, `fullname`, `email`, `phone_number`, `address`, `sex`, `url_image`) VALUES
(1, 'lioneldanh', 'lioneldanh', 'Phạm Công Danh', 'okkemdau@gmail.com', '01659916555', 'Thái Bình', b'1', 'none'),
(2, 'phamhoangduc', 'phamhoangduc', 'Phạm Hoàng Đức', 'phamhoangduc1998@gmail.com', '0904613523', 'Hà Nội', b'1', NULL),
(3, 'abcxyz', 'abcxyz', 'Nguyễn Văn A', 'abcxyz@gmail.com', '0123456789', 'Đà Nẵng', b'1', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id_admin`), ADD KEY `level` (`level`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
 ADD PRIMARY KEY (`id_bill`), ADD KEY `id_users` (`id_users`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
 ADD PRIMARY KEY (`id_blog`), ADD KEY `id_users` (`id_users`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
 ADD PRIMARY KEY (`id_contact`), ADD KEY `id_users` (`id_users`);

--
-- Indexes for table `image_introduction`
--
ALTER TABLE `image_introduction`
 ADD KEY `id_image` (`id_image`);

--
-- Indexes for table `image_service`
--
ALTER TABLE `image_service`
 ADD KEY `id_service` (`id_service`);

--
-- Indexes for table `introduction`
--
ALTER TABLE `introduction`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
 ADD PRIMARY KEY (`id_news`), ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
 ADD PRIMARY KEY (`id_product`), ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `register_service`
--
ALTER TABLE `register_service`
 ADD PRIMARY KEY (`id_register_service`), ADD KEY `id_users` (`id_users`), ADD KEY `id_service` (`id_service`);

--
-- Indexes for table `roles_admin`
--
ALTER TABLE `roles_admin`
 ADD PRIMARY KEY (`level`), ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
 ADD PRIMARY KEY (`id_service`), ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `service_comment`
--
ALTER TABLE `service_comment`
 ADD PRIMARY KEY (`id`), ADD KEY `id_user` (`id_user`), ADD KEY `id_service` (`id_service`);

--
-- Indexes for table `service_user`
--
ALTER TABLE `service_user`
 ADD PRIMARY KEY (`id`), ADD KEY `id_service` (`id_service`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
MODIFY `id_bill` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `introduction`
--
ALTER TABLE `introduction`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `register_service`
--
ALTER TABLE `register_service`
MODIFY `id_register_service` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
MODIFY `id_service` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `service_comment`
--
ALTER TABLE `service_comment`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `service_user`
--
ALTER TABLE `service_user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`level`) REFERENCES `roles_admin` (`level`);

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_users`);

--
-- Constraints for table `blog`
--
ALTER TABLE `blog`
ADD CONSTRAINT `blog_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_users`);

--
-- Constraints for table `contact`
--
ALTER TABLE `contact`
ADD CONSTRAINT `contact_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_users`);

--
-- Constraints for table `image_introduction`
--
ALTER TABLE `image_introduction`
ADD CONSTRAINT `image_introduction_ibfk_1` FOREIGN KEY (`id_image`) REFERENCES `introduction` (`id`);

--
-- Constraints for table `image_service`
--
ALTER TABLE `image_service`
ADD CONSTRAINT `image_service_ibfk_1` FOREIGN KEY (`id_service`) REFERENCES `service` (`id_service`);

--
-- Constraints for table `news`
--
ALTER TABLE `news`
ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);

--
-- Constraints for table `register_service`
--
ALTER TABLE `register_service`
ADD CONSTRAINT `register_service_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_users`),
ADD CONSTRAINT `register_service_ibfk_2` FOREIGN KEY (`id_service`) REFERENCES `service` (`id_service`);

--
-- Constraints for table `roles_admin`
--
ALTER TABLE `roles_admin`
ADD CONSTRAINT `roles_admin_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`),
ADD CONSTRAINT `roles_admin_ibfk_2` FOREIGN KEY (`level`) REFERENCES `admin` (`level`);

--
-- Constraints for table `service`
--
ALTER TABLE `service`
ADD CONSTRAINT `service_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);

--
-- Constraints for table `service_comment`
--
ALTER TABLE `service_comment`
ADD CONSTRAINT `service_comment_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_users`),
ADD CONSTRAINT `service_comment_ibfk_2` FOREIGN KEY (`id_service`) REFERENCES `service` (`id_service`);

--
-- Constraints for table `service_user`
--
ALTER TABLE `service_user`
ADD CONSTRAINT `service_user_ibfk_1` FOREIGN KEY (`id_service`) REFERENCES `service` (`id_service`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
