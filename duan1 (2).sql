-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 01, 2023 lúc 10:04 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin_cred`
--

CREATE TABLE `admin_cred` (
  `sr_no` int(10) NOT NULL,
  `admin_name` varchar(150) NOT NULL,
  `admin_pass` varchar(100) NOT NULL,
  `role` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `admin_cred`
--

INSERT INTO `admin_cred` (`sr_no`, `admin_name`, `admin_pass`, `role`) VALUES
(2, 'admin', '123', 0),
(3, 'vipadmin', '123', 1),
(7, 'admin1', '123', 0),
(8, 'admin', '123456', 0),
(10, 'vipadmin1', '123', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `room_id` int(10) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `name_user` varchar(100) NOT NULL,
  `address` varchar(250) NOT NULL,
  `phonenum` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `bookings`
--

INSERT INTO `bookings` (`id`, `room_id`, `checkin`, `checkout`, `name_user`, `address`, `phonenum`) VALUES
(2, 1, '2023-11-30', '2023-12-01', '', '', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` int(10) NOT NULL,
  `content` varchar(200) NOT NULL,
  `id_user` int(10) NOT NULL,
  `id_room` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`id`, `content`, `id_user`, `id_room`, `date`) VALUES
(2, 'good job', 34, 1, '2023-11-23'),
(3, 'again', 34, 1, '2023-11-23');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact_details`
--

CREATE TABLE `contact_details` (
  `sr_no` int(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `gmap` varchar(100) NOT NULL,
  `pn1` varchar(30) NOT NULL,
  `pn2` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fb` varchar(100) NOT NULL,
  `insta` varchar(100) NOT NULL,
  `tw` varchar(100) NOT NULL,
  `iframe` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `contact_details`
--

INSERT INTO `contact_details` (`sr_no`, `address`, `gmap`, `pn1`, `pn2`, `email`, `fb`, `insta`, `tw`, `iframe`) VALUES
(1, 'Cao Dang FPT - Ha Noi - VietNam', 'https://maps.app.goo.gl/Ha5HffDs4ax6FtYv9', '0965889075', '0965889012222', 'vietldph420251111@fpt.edu.vn', 'https://www.facebook.com/profile.php?id=100039222436686', 'https://www.instagram.com/ducviet_14/', 'twitter.com/abc', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7447.8124926510545!2d105.749456!3d21.036437!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313455f097562a6f%3A0xc1df36ba25eab7e0!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIEZQVCBQb2x5dGVjaG5pYw!5e0!3m2!1svi!2sus!4v1699333510212!5m2!1svi!2sus');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `facilities`
--

CREATE TABLE `facilities` (
  `id` int(10) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `facilities`
--

INSERT INTO `facilities` (`id`, `icon`, `name`, `description`) VALUES
(1, './upload_admin/IMG_49949.svg', 'wifi ', 'very good'),
(2, './upload_admin/IMG_47816.svg', 'Television', 'perfect'),
(3, './upload_admin/IMG_41622.svg', 'AC', 'good jod'),
(4, './upload_admin/IMG_96423.svg', 'Room heater', 'pro vip'),
(6, './upload_admin/IMG_49949.svg', 'toilet', 'pro vip 100');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `features`
--

CREATE TABLE `features` (
  `id` int(10) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `features`
--

INSERT INTO `features` (`id`, `name`) VALUES
(1, 'room'),
(2, 'bedroom'),
(3, 'kitchen'),
(4, 'balcony');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hotel_logo`
--

CREATE TABLE `hotel_logo` (
  `id` int(10) NOT NULL,
  `name_hotel` varchar(100) NOT NULL,
  `about_us` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hotel_logo`
--

INSERT INTO `hotel_logo` (`id`, `name_hotel`, `about_us`) VALUES
(1, 'Leo                Hotel', 'Discover The Epitome Of Comfort And Luxury At Leo Hotel, Where Every Stay Is An Unforgettable Experience. Nestled In The Heart Of Ha Noi, Leo Hotel Offers A Perfect Blend Of Modern Elegance And Timele');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `rooms`
--

CREATE TABLE `rooms` (
  `id` int(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` double(10,2) NOT NULL,
  `children` int(10) NOT NULL,
  `adult` int(10) NOT NULL,
  `img` varchar(250) NOT NULL,
  `description` varchar(200) NOT NULL,
  `facilities1` varchar(100) NOT NULL,
  `facilities2` varchar(100) NOT NULL,
  `facilities3` varchar(100) NOT NULL,
  `facilities4` varchar(100) NOT NULL,
  `features1` varchar(100) NOT NULL,
  `features2` varchar(100) NOT NULL,
  `features3` varchar(100) NOT NULL,
  `features4` varchar(100) NOT NULL,
  `id_room_type` int(11) NOT NULL,
  `status` tinyint(10) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `rooms`
--

INSERT INTO `rooms` (`id`, `name`, `price`, `children`, `adult`, `img`, `description`, `facilities1`, `facilities2`, `facilities3`, `facilities4`, `features1`, `features2`, `features3`, `features4`, `id_room_type`, `status`) VALUES
(1, 'simple room 1', 100.00, 2, 4, './upload_admin/1.jpg', 'good', 'Wifi ', 'Television ', 'AC ', 'Room Heater', 'Room ', 'Television ', 'AC ', 'Room Heater', 25, 1),
(2, 'double room', 200.00, 3, 3, './upload_admin/IMG_42663.png', 'perfect', 'Wifi ', 'Television ', 'Room Heater', '', 'Room ', 'Television ', '', '', 30, 1),
(3, 'Vip1 room', 300.00, 3, 5, './upload_admin/IMG_39782.png', 'beatifull', 'Wifi ', 'Television ', 'AC ', '', 'Room ', 'Television ', 'AC ', '', 27, 1),
(4, 'Vip2 room', 300.00, 2, 1, './upload_admin/IMG_42663.png', 'good', 'Wifi ', 'Television ', '', '', 'Bedroom ', 'Television ', '', '', 25, 1),
(36, 'Simpe Room 2', 100.00, 2, 3, './upload_admin/IMG_67761.png', 'good job', 'Wifi ', 'Television ', '', '', 'Bedroom ', 'Kitchen ', '', '', 2, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `rooms_type`
--

CREATE TABLE `rooms_type` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `area` varchar(100) NOT NULL,
  `quanlity` int(11) NOT NULL,
  `description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `rooms_type`
--

INSERT INTO `rooms_type` (`id`, `name`, `area`, `quanlity`, `description`) VALUES
(2, 'D101', 'Ha Noi', 55, 'perfect'),
(25, 'VIP101', '350m', 0, 'very good'),
(26, 'S102', '500m', 0, 'perfect good'),
(27, 'S103', 'ha noi', 0, 'vca'),
(28, 'S104', '123', 0, 'abc'),
(29, 'S105', '', 0, ''),
(30, 'VIP102', '', 0, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `room_images`
--

CREATE TABLE `room_images` (
  `sr_no` int(10) NOT NULL,
  `room_id` int(10) NOT NULL,
  `image` int(250) NOT NULL,
  `thumb` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `team_details`
--

CREATE TABLE `team_details` (
  `sr_no` int(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `team_details`
--

INSERT INTO `team_details` (`sr_no`, `name`, `picture`) VALUES
(1, 'viet', 'IMG_17352.jpg'),
(2, 'Leo', ''),
(3, 'Messi', ''),
(4, 'Messi', ''),
(5, 'Messi', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_cred`
--

CREATE TABLE `user_cred` (
  `id` int(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(250) NOT NULL,
  `phonenum` int(20) NOT NULL,
  `dob` date NOT NULL,
  `pincode` int(11) NOT NULL,
  `profile` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `is_verified` int(11) NOT NULL DEFAULT 0,
  `status` int(10) NOT NULL DEFAULT 1,
  `datentime` datetime NOT NULL DEFAULT current_timestamp(),
  `token` varchar(200) DEFAULT NULL,
  `t_expire` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user_cred`
--

INSERT INTO `user_cred` (`id`, `name`, `email`, `address`, `phonenum`, `dob`, `pincode`, `profile`, `password`, `is_verified`, `status`, `datentime`, `token`, `t_expire`) VALUES
(34, 'Lê Việt', 'viet@fpt.edu.vn', 'Hoàng Xá', 965889075, '2023-11-18', 1, 'upload/IMG_41622.svg', '1', 0, 1, '2023-11-16 09:19:09', NULL, NULL),
(36, 'Lê Việt', 'vietldph42025@fpt.edu.vn', 'Hoàng Xá', 1664138990, '2023-11-03', 1, 'upload/IMG_43553.svg', '123', 0, 1, '2023-11-16 09:29:50', NULL, NULL),
(40, 'Lê Việt', 'ewq@gmail.com', 'Hoàng Xá', 965889075, '2023-11-17', 1, '../upload/310077482_508525980797819_1971148573027123338_n.jpg', '1', 0, 1, '2023-11-16 17:19:58', NULL, NULL),
(41, 'Viet Le', 'hienmai156@msgsafe.io0', 'Phương Canh', 2147483647, '2023-11-16', 7000, '../upload/311128412_2384526471715548_1321877951392736408_n.jpg', '1', 0, 1, '2023-11-17 08:53:29', NULL, NULL),
(43, 'Lê Việt', 'vie25@fpt.edu.vn', 'Hoàng Xá', 965889075, '2023-11-19', 1, './upload/310075116_478283987653361_8162012304622490301_n.jpg', '1', 0, 1, '2023-11-24 15:48:30', NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin_cred`
--
ALTER TABLE `admin_cred`
  ADD PRIMARY KEY (`sr_no`);

--
-- Chỉ mục cho bảng `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_fk` (`id_user`),
  ADD KEY `id_room_type` (`id_room`);

--
-- Chỉ mục cho bảng `contact_details`
--
ALTER TABLE `contact_details`
  ADD PRIMARY KEY (`sr_no`);

--
-- Chỉ mục cho bảng `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hotel_logo`
--
ALTER TABLE `hotel_logo`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `room` (`id_room_type`);

--
-- Chỉ mục cho bảng `rooms_type`
--
ALTER TABLE `rooms_type`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `room_images`
--
ALTER TABLE `room_images`
  ADD PRIMARY KEY (`sr_no`),
  ADD KEY `fk_id` (`room_id`);

--
-- Chỉ mục cho bảng `team_details`
--
ALTER TABLE `team_details`
  ADD PRIMARY KEY (`sr_no`);

--
-- Chỉ mục cho bảng `user_cred`
--
ALTER TABLE `user_cred`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin_cred`
--
ALTER TABLE `admin_cred`
  MODIFY `sr_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `contact_details`
--
ALTER TABLE `contact_details`
  MODIFY `sr_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `features`
--
ALTER TABLE `features`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `hotel_logo`
--
ALTER TABLE `hotel_logo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `rooms_type`
--
ALTER TABLE `rooms_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `room_images`
--
ALTER TABLE `room_images`
  MODIFY `sr_no` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `team_details`
--
ALTER TABLE `team_details`
  MODIFY `sr_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `user_cred`
--
ALTER TABLE `user_cred`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `id_fk` FOREIGN KEY (`id_user`) REFERENCES `user_cred` (`id`),
  ADD CONSTRAINT `id_room_type` FOREIGN KEY (`id_room`) REFERENCES `rooms` (`id`);

--
-- Các ràng buộc cho bảng `rooms`
--
ALTER TABLE `rooms`
  ADD CONSTRAINT `room` FOREIGN KEY (`id_room_type`) REFERENCES `rooms_type` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
