-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 25, 2018 at 12:07 PM
-- Server version: 5.7.22-0ubuntu0.16.04.1
-- PHP Version: 7.2.4-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Baoonline`
--

-- --------------------------------------------------------

--
-- Table structure for table `bai_dang`
--

CREATE TABLE `bai_dang` (
  `id` int(10) UNSIGNED NOT NULL,
  `danhmuc` varchar(20) NOT NULL,
  `TieuDe` varchar(255) NOT NULL,
  `MoTa` varchar(255) NOT NULL,
  `NoiDung` longtext NOT NULL,
  `Anh` varchar(255) DEFAULT NULL,
  `NguoiDang` varchar(255) NOT NULL,
  `NoiBat` tinyint(1) DEFAULT NULL,
  `LuotXem` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bai_dang`
--

INSERT INTO `bai_dang` (`id`, `danhmuc`, `TieuDe`, `MoTa`, `NoiDung`, `Anh`, `NguoiDang`, `NoiBat`, `LuotXem`, `created_at`, `updated_at`, `slug`) VALUES
(5, 'Xã Hội', 'Phạt tiền trăm triệu 4 công ty dược vi phạm về chất lượng', 'Với sản phẩm thuốc không đạt tiêu chuẩn chất lượng bị phát hiện, 4 công ty này đã bị Bộ Y tế xử phạt với tổng số tiền lớn, hơn 300 triệu đồng.', '<p>Cục Quản l&yacute; Dược (Bộ Y tế), 4 c&ocirc;ng ty bị xử phạt h&agrave;nh ch&iacute;nh v&igrave; c&oacute; sản phẩm kh&ocirc;ng đạt ti&ecirc;u chuẩn chất lượng gồm: C&ocirc;ng ty cổ phần dược phẩm Tipharco, C&ocirc;ng ty cổ phần Dược Trung ương 3, C&ocirc;ng ty cổ phần Dược phẩm Trung ương 2, C&ocirc;ng ty cổ phần BV Pharma.</p>\r\n\r\n<p><strong>C&ocirc;ng ty cổ phần dược phẩm Tipharco</strong>&nbsp;(c&oacute; địa chỉ số 15 Đốc Binh Kiều, phường 2, th&agrave;nh phố Mỹ Tho, tỉnh Tiền Giang) bị phạt số tiền 130 triệu đồng v&igrave; sản xuất thuốc kh&ocirc;ng đạt ti&ecirc;u chuẩn chất lượng, bu&ocirc;n b&aacute;n nguy&ecirc;n liệu l&agrave;m thuốc d&atilde; hết hạn sử dụng.</p>\r\n\r\n<p>Theo đ&oacute;, c&ocirc;ng ty n&agrave;y đ&atilde; sản xuất thuốc vi&ecirc;n n&eacute;n d&agrave;i Prednisolon 5mg, SĐK:VD-13888-11, số l&ocirc; 010317, hạn d&ugrave;ng 4/3/2020 kh&ocirc;ng đạt ti&ecirc;u chuẩn chất lượng mức độ 3 theo quy định của ph&aacute;p luật (thuốc kh&ocirc;ng đạt ti&ecirc;u chuẩn chất lượng trong qu&aacute; tr&igrave;nh lưu th&ocirc;ng). C&ocirc;ng ty tr&ecirc;n cũng bu&ocirc;n b&aacute;n nguy&ecirc;n liệu l&agrave;m thuốc Silymarin, số l&ocirc; 20140912, hạn d&ugrave;ng 11/9/2017 đ&atilde; hết hạn sử dụng.</p>\r\n\r\n<p>Ngo&agrave;i phạt tiền, Cục Quản l&yacute; Dược đ&atilde; c&oacute; h&igrave;nh thức xử phạt bổ sung l&agrave; tước quyền sử dụng giấy chứng nhận đủ điều kiện kinh doanh thuốc đối với phạm vi nhập khẩu nguy&ecirc;n liệu l&agrave;m thuốc trong thời gian 3 th&aacute;ng.</p>\r\n\r\n<p><strong>C&ocirc;ng ty cổ phần Dược Trung ương 3</strong>&nbsp;(c&oacute; địa chỉ số 115 Ng&ocirc; Gia Tự, phường Hải Ch&acirc;u 1, quận Hải Ch&acirc;u, th&agrave;nh phố Đ&agrave; Nẵng) bị phạt tiền 40 triệu đồng v&igrave; sản xuất thuốc kh&ocirc;ng đạt ti&ecirc;u chuẩn chất lượng.</p>\r\n\r\n<p>Theo đ&oacute;, c&ocirc;ng ty đ&atilde; sản xuất thuốc Enalapril 10mg, SĐK:VD-15254-11, số l&ocirc; 03/060818, kh&ocirc;ng đạt y&ecirc;u cầu chất lượng mức độ 3 theo quy định của ph&aacute;p luật.</p>\r\n\r\n<p>Ngo&agrave;i phạt tiền, Cục Quản l&yacute; Dược y&ecirc;u cầu c&ocirc;ng ty cổ phần Dược Trung ương 3 phối hợp với c&aacute;c đơn vị li&ecirc;n quan thực hiện thu hồi v&agrave; hủy to&agrave;n bộ l&ocirc; thuốc kh&ocirc;ng đạt chất lượng theo quy định.</p>\r\n\r\n<p><strong>C&ocirc;ng ty cổ phần Dược phẩm Trung ương 2</strong>&nbsp;(địa chỉ số 9 phố Trần Th&aacute;nh T&ocirc;ng, phường Bạch Đằng, quận Hai B&agrave; Trưng, th&agrave;nh phố H&agrave; Nội) c&oacute; h&agrave;nh vi sản xuất thuốc Seared 4200IU, SĐK: VD-21906-14, số l&ocirc; 00316, ng&agrave;y sản xuất 9/12/2016, hạn d&ugrave;ng 9/6/2018 kh&ocirc;ng đạt y&ecirc;u cầu chất lượng mức độ 2 theo quy định của ph&aacute;p luật. Với vi phạm n&agrave;y, c&ocirc;ng ty bị phạt 70 triệu đồng v&agrave; phải thu hồi v&agrave; ti&ecirc;u hủy sản phẩm.</p>\r\n\r\n<p>Cơ quan quản l&yacute; l&agrave; Cục Quản l&yacute; Dược cũng đ&atilde; c&oacute; h&igrave;nh thức phạt bổ sung l&agrave; tước quyền sử dụng giấy chứng nhận đủ điều kiện kinh doanh thuốc đối với phạm vi sản xuất thuốc Seared 4200IU, SĐK: VD-21906-14 trong thời gian 3 th&aacute;ng.</p>\r\n\r\n<p><strong>C&ocirc;ng ty cổ phần BV Pharma C&ocirc;ng ty cổ phần BV Pharma&nbsp;</strong>(c&oacute; địa chỉ ấp 2, x&atilde; T&acirc;n Thạnh T&acirc;y, huyện Củ Chi, Th&agrave;nh phố Hồ Ch&iacute; Minh) bị phạt tiền 70 triệu đồng do sản xuất thuốc Alphachymotrypsin BVP, SĐK: VD-13220-10, số l&ocirc; 03B17, ng&agrave;y sản xuất 27/2/2017, hạn d&ugrave;ng 27/2/2019 kh&ocirc;ng đạt ti&ecirc;u chuẩn chất lượng mức độ 2 theo quy định của ph&aacute;p luật.</p>\r\n\r\n<p>C&ocirc;ng ty đ&atilde; bị phạt 70 triệu đồng, buộc thu hồi v&agrave; ti&ecirc;u hủy sản phẩm. Bộ Y tế cũng đ&atilde; ra quyết định tước quyền sử dụng giấy chứng nhận đủ điều kiện kinh doanh thuốc đối với phạm vi sản xuất thuốc Alphachymotrypsin BVP, SĐK: VD-13220-10 trong thời gian 3 th&aacute;ng</p>', 'uploads/1523772306_418959_14ef2eab3685217b4451e87c308fca54.jpg', 'Hà Đào', 1, 100, '2018-04-14 23:05:06', '2018-04-16 10:35:42', 'phat-tien-tram-trieu-4-cong-ty-duoc-vi-pham-ve-chat-luong-5ad2fdd2a63ac'),
(6, 'Xã Hội', 'da asu9phafh ahsdasuh as', 'Bộ trưởng Quốc phòng Mỹ được cho là đã hối thúc Tổng thống Donald Trump tìm kiếm sự chấp thuận của Quốc hội trước khi tiến hành không kích Syria hôm 14/4, song ông chủ Lầu Năm Góc đã thất bại.', '<p>eawqv</p>', 'uploads/1523905314_3580170_5e7c980da5d316059adab23859a1d9f9.jpg', 'eAv', 1, 10, '2018-04-16 12:01:54', '2018-04-18 22:30:28', 'da-asu9phafh-ahsdasuh-as-5ad82967ca59a'),
(7, 'Chính Trị', 'Nghi vấn cuộc rượt đuổi giữa tàu ngầm Nga và Anh trước cuộc không kích vào Syria', 'Tàu ngầm tấn công của Nga được cho là đã rượt đuổi một tàu ngầm của Anh ở ngoài khơi Syria ngay trước cuộc không kích của liên quân nhằm vào Syria rạng sáng 14/4, báo Sunday Times cho biết.', '<p>&nbsp;</p>\r\n\r\n<p><em>Sunday Times&nbsp;</em>dẫn nguồn thạo tin n&oacute;i rằng, hai t&agrave;u ngầm lớp Kilo c&oacute; t&ecirc;n gọi &quot;Black Hole&quot; (Hố Đen) của Nga với sự hỗ trợ của hai t&agrave;u khu trục cỡ nhỏ v&agrave; một m&aacute;y bay chống ngầm đ&atilde; rượt đuổi một t&agrave;u ngầm lớp Astute của Anh ngo&agrave;i khơi Syria tuần qua. C&aacute;c t&agrave;u ngầm tấn c&ocirc;ng của Nga được cho l&agrave; đ&atilde; theo d&otilde;i t&agrave;u ngầm của Anh khi t&agrave;u ngầm mang theo t&ecirc;n lửa Tomahawk n&agrave;y di chuyển v&agrave;o tầm c&oacute; thể tấn c&ocirc;ng Syria.</p>\r\n\r\n<p>Bộ Quốc ph&ograve;ng Nga hiện chưa đưa ra b&igrave;nh luận về những th&ocirc;ng tin tr&ecirc;n.</p>\r\n\r\n<p>Theo&nbsp;<em>Sputnik</em>, chiến thuật &quot;m&egrave;o vờn chuột&quot; n&agrave;y tiếp tục k&eacute;o d&agrave;i v&agrave;i ng&agrave;y sau đ&oacute;. Hải qu&acirc;n Mỹ được cho l&agrave; đ&atilde; cử m&aacute;y bay chống ngầm P-8 Poseidon tới khu vực để theo d&otilde;i c&aacute;c t&agrave;u của Nga cũng như để bảo vệ đồng minh Anh.</p>\r\n\r\n<p>Trong khi giới chuy&ecirc;n gia qu&acirc;n sự Anh đ&aacute;nh gi&aacute; t&agrave;u ngầm Kilo của Nga l&agrave; &quot;mối đe dọa đ&aacute;ng kể&quot; th&igrave; năng lực của t&agrave;u ngầm lớp Astute của Anh tương đối hạn chế. T&agrave;u ngầm lớp Astute c&oacute; khả năng mang theo khoảng 20 t&ecirc;n lửa h&agrave;nh tr&igrave;nh Tomahawk.</p>\r\n\r\n<p>C&aacute;c t&agrave;u chiến của Mỹ, Anh, Ph&aacute;p v&agrave; Nga tăng cường hiện diện ở Biển Đỏ v&agrave; Địa Trung Hải trong bối cảnh Tổng thống Mỹ Donald Trump c&aacute;nh b&aacute;o đ&aacute;p trả mạnh mẽ c&aacute;o buộc ch&iacute;nh quyền Syria sử dụng vũ kh&iacute; h&oacute;a học.</p>\r\n\r\n<p>Rạng s&aacute;ng 14/4, c&aacute;c t&agrave;u khu trục, t&agrave;u ngầm, m&aacute;y bay chiến đấu của li&ecirc;n qu&acirc;n Mỹ, Anh, Ph&aacute;p đồng loạt dội 105 t&ecirc;n lửa v&agrave;o Syria.</p>\r\n\r\n<p>T&agrave;u tuần dương USS Monterey đ&atilde; ph&oacute;ng 30 t&ecirc;n lửa h&agrave;nh tr&igrave;nh Tomahawk v&agrave; t&agrave;u khu trục USS Laboon ph&oacute;ng 7 t&ecirc;n lửa loại n&agrave;y từ Biển Đỏ. Trong khi đ&oacute;, t&agrave;u khu trục USS Higgins cũng ph&oacute;ng 23 quả Tomahawk từ ph&iacute;a bắc Vịnh Ba Tư.</p>\r\n\r\n<p>Tại Địa Trung Hải, t&agrave;u ngầm USS John Warner lớp Virginia đ&atilde; ph&oacute;ng 6 t&ecirc;n lửa Tomahawk. Ngo&agrave;i ra, hai m&aacute;y bay n&eacute;m bom B-1B của Mỹ từ căn cứ kh&ocirc;ng qu&acirc;n Al Udeid tại Qatar cũng xuất k&iacute;ch v&agrave; ph&oacute;ng 19 t&ecirc;n lửa AGM-158 JASSM.</p>\r\n\r\n<p>Cuộc kh&ocirc;ng k&iacute;ch của Mỹ c&ograve;n được hỗ trợ bằng c&aacute;c t&ecirc;n lửa h&agrave;nh tr&igrave;nh SCALP-EG ph&oacute;ng từ t&agrave;u hộ tống Ph&aacute;p, trong khi c&aacute;c m&aacute;y bay Typhoon v&agrave; Tornado của Kh&ocirc;ng qu&acirc;n Ho&agrave;ng gia Anh cũng ph&oacute;ng c&aacute;c t&ecirc;n lửa Storm Shadow v&agrave;o c&aacute;c căn cứ được l&ecirc;n kế hoạch từ trước tại Syria.</p>\r\n\r\n<p><img alt=\"\" src=\"/uploads/userfiles/images/tt-im01.jpg\" style=\"height:364px; width:700px\" /></p>', 'uploads/1523883275_6235003_043f0ba40f94ba816a32555a20f2d125.jpg', 'Ha dao', 1, 4, '2018-04-16 05:54:35', '2018-04-16 05:54:35', 'nghi-van-cuoc-ruot-duoi-giua-tau-ngam-nga-va-anh-truoc-cuoc-khong-kich-vao-syria-5ad49c7ae0dde'),
(8, 'Xã Hội', '300 trí thức trẻ diện thu hút nhân tài “bơ vơ” sau 5 năm cống hiến?', 'Được ký hợp đồng vào làm việc tại các cơ quan hành chính nhà nước theo chính sách sử dụng con em Quảng Bình tốt nghiệp đại học; nhưng sau 5 năm cống hiến, 300 trí thức trẻ đang rơi vào cảnh thất nghiệp bởi chính sách này không còn được áp dụng.', '<p><strong>Quyết liệt thu h&uacute;t</strong></p>\r\n\r\n<p>Ch&iacute;nh s&aacute;ch thu h&uacute;t nh&acirc;n t&agrave;i, đưa con em Quảng B&igrave;nh tốt nghiệp c&aacute;c trường đại học ch&iacute;nh quy trong v&agrave; ngo&agrave;i nước về l&agrave;m việc được HĐND tỉnh n&agrave;y ra nghị quyết thực hiện từ năm 2012 (thời hạn 3 năm). Kinh ph&iacute; thực hiện ch&iacute;nh s&aacute;ch được tr&iacute;ch từ dự to&aacute;n ng&acirc;n s&aacute;ch h&agrave;ng năm của tỉnh.</p>\r\n\r\n<p>V&agrave;o thời điểm n&agrave;y, c&oacute; 300 người vừa tốt nghiệp đại học ch&iacute;nh quy được k&yacute; hợp đồng l&agrave;m việc tại c&aacute;c cơ quan h&agrave;nh ch&iacute;nh nh&agrave; nước trong tỉnh Quảng B&igrave;nh. Nghị quyết của HĐND tỉnh n&agrave;y cũng n&ecirc;u r&otilde;, trong thời gian hợp đồng, c&aacute;c lao động phải tiếp tục tự t&igrave;m kiếm vị tr&iacute; c&ocirc;ng việc th&iacute;ch hợp.</p>\r\n\r\n<p><img alt=\"Nghị quyết về chính sách sử dụng con em Quảng Bình tốt nghiệp đại học\" id=\"img_278417\" src=\"https://dantricdn.com/2018/4/18/nghi-quyet-15240574867151367929839.jpg\" /></p>\r\n\r\n<p>Nghị quyết về ch&iacute;nh s&aacute;ch sử dụng con em Quảng B&igrave;nh tốt nghiệp đại học</p>\r\n\r\n<p>Sau khi hết thời hạn 3 năm hợp đồng, để tạo điều kiện cho c&aacute;c lao động, HĐND tỉnh Quảng B&igrave;nh tiếp tục ra nghị quyết gia hạn hợp đồng với c&aacute;c tr&iacute; thức trẻ th&ecirc;m 3 năm nữa. Tuy nhi&ecirc;n đến cuối năm 2017, UBND tỉnh Quảng B&igrave;nh đ&atilde; phải ra th&ocirc;ng b&aacute;o cắt hợp đồng đối với to&agrave;n bộ lao động thuộc ch&iacute;nh s&aacute;ch sử dụng con em địa phương.</p>\r\n\r\n<p>Quyết định n&agrave;y được đưa ra sau khi Tổng Kiểm to&aacute;n Nh&agrave; nước y&ecirc;u cầu tỉnh Quảng B&igrave;nh kh&ocirc;ng được tiếp tục thực hiện ch&iacute;nh s&aacute;ch v&igrave; vi phạm c&aacute;c quy định trong việc sử dụng ng&acirc;n s&aacute;ch.</p>\r\n\r\n<p>&Ocirc;ng Trần Đ&igrave;nh Dinh, Gi&aacute;m đốc Sở Nội vụ tỉnh Quảng B&igrave;nh cũng cho biết, đơn vị n&agrave;y vừa c&oacute; văn bản gửi đến c&aacute;c cơ quan đơn vị, địa phương y&ecirc;u cầu, kể từ ng&agrave;y 1/7, chấm dứt hợp đồng lao động theo ch&iacute;nh s&aacute;ch sử dụng con em tỉnh Quảng B&igrave;nh sau nhiều năm thực hiện.</p>\r\n\r\n<p>&ldquo;Đ&acirc;y l&agrave; một ch&iacute;nh s&aacute;ch &ldquo;nh&acirc;n văn&rdquo;, bởi thời điểm đ&oacute;, nhiều con em tốt nghiệp ra trường chưa c&oacute; việc l&agrave;m n&ecirc;n tỉnh tuyển dụng tạm thời. Cũng l&agrave; để cho c&aacute;c em c&oacute; điều kiện trải nghiệm, l&agrave;m quen với c&aacute;c c&ocirc;ng việc trong c&aacute;c cơ quan h&agrave;nh ch&iacute;nh nh&agrave; nước. C&ograve;n việc n&oacute;i Tổng kiểm to&aacute;n Nh&agrave; nước ph&aacute;t hiện tỉnh vi phạm quy định sử dụng ng&acirc;n s&aacute;ch th&igrave; cũng kh&ocirc;ng đ&uacute;ng. Bởi lẽ, nếu địa phương c&oacute; nguồn th&igrave; địa phương cứ x&acirc;y dựng ch&iacute;nh s&aacute;ch v&agrave; thực hiện v&igrave; kh&ocirc;ng ai bắt buộc&rdquo;, &ocirc;ng Dinh n&oacute;i.</p>\r\n\r\n<p><img alt=\"Nhiều trí thức trẻ thuộc chính sách sử dụng con em Quảng Bình mất việc sau 5 năm cống hiến. (Ảnh minh hoạ)\" id=\"img_278418\" src=\"https://dantricdn.com/2018/4/18/anh-mi-nh-hoa-1524057864078490048879.jpg\" /></p>\r\n\r\n<p>Nhiều tr&iacute; thức trẻ thuộc ch&iacute;nh s&aacute;ch sử dụng con em Quảng B&igrave;nh mất việc sau 5 năm cống hiến. (Ảnh minh hoạ)</p>\r\n\r\n<p><strong>Sau cống hiến l&agrave;&hellip; chơi vơi?!</strong></p>\r\n\r\n<p>Tuy nhi&ecirc;n, đối với c&aacute;c tr&iacute; thức trẻ được k&yacute; hợp đồng theo diện sử dụng con em tỉnh Quảng B&igrave;nh tốt nghiệp đại học, sau 5 năm cống hiến, bỗng nhi&ecirc;n họ buộc phải th&ocirc;i việc khiến nhiều người hụt hẫng.</p>\r\n\r\n<p>Chị Đỗ Thị T., qu&ecirc; tại huyện Quảng Ninh cũng l&agrave; một trong số c&aacute;c tr&iacute; thức trẻ được k&yacute; hợp đồng theo diện sử dụng con em Quảng B&igrave;nh. Chị T. l&agrave;m việc tại một đơn vị thuộc Tỉnh uỷ Quảng B&igrave;nh gần 5 năm qua. Sau khi c&oacute; th&ocirc;ng b&aacute;o về việc bị chấm dứt hợp đồng, chị T. đ&agrave;nh phải g&aacute;c lại mọi bằng cấp m&igrave;nh từng c&oacute; để đi xuất khẩu lao động.</p>\r\n\r\n<p>&ldquo;T&ocirc;i v&agrave; nhiều người kh&aacute;c trong diện thu h&uacute;t nh&acirc;n t&agrave;i của tỉnh đều tốt nghiệp đại học loại Kh&aacute;, Giỏi. Ch&uacute;ng t&ocirc;i về l&agrave;m việc, với mong muốn được cống hiện cho qu&ecirc; hương. Thế nhưng giờ lại phải nghỉ việc, đ&acirc;y thực sự l&agrave; một điều tiếc nuối. Giờ t&ocirc;i đ&agrave;nh phải lựa chon phương &aacute;n đi lao động ở Nhật&rdquo;, chị T. buồn b&atilde;.</p>\r\n\r\n<p>Li&ecirc;n quan đến sự việc n&agrave;y, &ocirc;ng Nguyễn Hữu Ho&agrave;i - Chủ tịch UBND tỉnh Quảng B&igrave;nh - cho biết, Tổng kiểm to&aacute;n Nh&agrave; nước kh&ocirc;ng cho ph&eacute;p tỉnh Quảng B&igrave;nh sử dụng ng&acirc;n s&aacute;ch để chi trả cho ch&iacute;nh s&aacute;ch n&oacute;i tr&ecirc;n n&ecirc;n buộc phải dừng lại.</p>\r\n\r\n<p>Theo &ocirc;ng Ho&agrave;i, khi dừng &aacute;p dụng ch&iacute;nh s&aacute;ch, tỉnh n&agrave;y cũng đ&atilde; chỉ đạo c&aacute;c cơ quan h&agrave;nh ch&iacute;nh nh&agrave; nước thuộc tỉnh, huyện r&agrave; so&aacute;t lại bi&ecirc;n chế c&ograve;n thiếu để b&aacute;o c&aacute;o l&ecirc;n UBND tỉnh tổ chức thi tuyển c&ocirc;ng chức. Trong đ&oacute; sẽ ưu ti&ecirc;n c&aacute;c lao động thuộc ch&iacute;nh s&aacute;ch sử dụng con em Quảng B&igrave;nh. C&ograve;n đối với c&aacute;c trường hợp kh&ocirc;ng thể bố tr&iacute; th&igrave; cũng động vi&ecirc;n để c&aacute;c lao động n&agrave;y t&igrave;m kiếm c&ocirc;ng việc kh&aacute;c.</p>', 'uploads/1524113923_6848099_e0cdfa500c234ee80efad7fb0da744dc.jpg', 'Hà Đào', 1, 0, '2018-04-18 21:58:43', '2018-04-19 03:57:30', '300-tri-thuc-tre-dien-thu-hut-nhan-tai-bo-vo-sau-5-nam-cong-hien-5ad821c4d3902'),
(9, 'Bóng Đá', 'svsa', 'awbn íDV', '<p>RWapnHa)B; HRGGG</p>', 'uploads/1524135495_2885613_bba36dfc273addf403e490d7a6e23920.jpg', 'ỨgVSZ', 0, 0, '2018-04-19 03:58:15', '2018-04-19 06:09:30', 'svsa-5ad8761fb28fa'),
(10, 'Xã Hội', 'RZVB', 'fbzesbzs', '<p>sbwawaznbz</p>', 'uploads/1524135522_2025370_303ea800145466faa40a2368c02abde6.jpg', 'nzboi', 1, 0, '2018-04-19 03:58:42', '2018-04-19 03:58:42', 'rzvb-5ad8764e0400a'),
(11, 'Chính Trị', 'sdvbswba', '0zarg', '<p>hẳz&nbsp;</p>', 'uploads/1524135564_3645433_dee98a99076b00cccb424a36921b011a.jpg', 'sd', 0, 0, '2018-04-19 03:59:24', '2018-04-19 06:09:18', 'sdvbswba-5ad8767a28806'),
(12, 'Thể Thao', 'azgp', 'aprg fi', '<p>fdbzs</p>', 'uploads/1524135607_9210071_01549ce41d04e1580957da4ddfc70292.jpg', 'fsbv', 0, 0, '2018-04-19 04:00:07', '2018-04-19 06:10:05', 'azgp-5ad876a45704f'),
(13, 'Văn Hóa', 'sjdp ov', 'sezpb', '<p>ehbf</p>', 'uploads/1524135635_3077736_ed14f81ffa59aa34f49f4540eb6cfcbf.jpg', 'azer', 0, 0, '2018-04-19 04:00:35', '2018-04-19 04:22:39', 'sjdp-ov-5ad876bec0710');

-- --------------------------------------------------------

--
-- Table structure for table `binh_luan`
--

CREATE TABLE `binh_luan` (
  `id` int(10) UNSIGNED NOT NULL,
  `baidang_id` int(11) NOT NULL,
  `Ten` varchar(255) NOT NULL,
  `BinhLuan` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `danh_muc`
--

CREATE TABLE `danh_muc` (
  `id` int(10) UNSIGNED NOT NULL,
  `TenDanhMuc` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `DanhMucCha` varchar(20) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `danh_muc`
--

INSERT INTO `danh_muc` (`id`, `TenDanhMuc`, `created_at`, `updated_at`, `DanhMucCha`, `slug`) VALUES
(1, 'Xã Hội', NULL, '2018-04-12 11:03:29', '', 'xa-hoi'),
(2, 'Thể Thao', NULL, '2018-04-12 11:03:46', '', 'the-thao'),
(4, 'Chính Trị', '2018-04-11 12:56:07', '2018-04-12 11:03:50', '', 'chinh-tri'),
(5, 'Bóng Đá', '2018-04-11 13:00:51', '2018-04-12 11:05:07', 'Thể Thao', 'bong-da'),
(6, 'Sức Mạnh Số', '2018-04-11 13:03:17', '2018-04-12 10:50:58', 'Xã Hội', 'suc-manh-so'),
(11, 'Văn Hóa', '2018-04-12 10:37:48', '2018-04-12 10:50:36', '', 'van-hoa');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_04_05_162824_create_danh_mucs_table', 1),
(4, '2018_04_05_162920_create_bai_dangs_table', 1),
(5, '2018_04_06_174804_create_binh_luans_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Hà Đào', 'admin@abc.com', '$2y$10$bS10/u2twjODiyb1/OZPuO1qlvDJl10iZoNssldCBLJn/USGiWJrq', 'RfRKBvmmUmh0XO1DUP6VlSPFxwqLoNyL8iZ72bsluGffdbttvBdUbH02vIpw', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bai_dang`
--
ALTER TABLE `bai_dang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `danh_muc`
--
ALTER TABLE `danh_muc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bai_dang`
--
ALTER TABLE `bai_dang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `danh_muc`
--
ALTER TABLE `danh_muc`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
