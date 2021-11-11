-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2021 at 05:10 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seiko_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_brand`
--

CREATE TABLE `tb_brand` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_brand`
--

INSERT INTO `tb_brand` (`brand_id`, `brand_name`) VALUES
(1, 'LG'),
(2, 'Panasonic'),
(3, 'Samsung'),
(4, 'Daikin'),
(5, 'Sharp'),
(6, 'Polytron'),
(7, 'AQUA');

-- --------------------------------------------------------

--
-- Table structure for table `tb_keranjang`
--

CREATE TABLE `tb_keranjang` (
  `keranjang_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_keranjang`
--

INSERT INTO `tb_keranjang` (`keranjang_id`, `user_id`, `product_id`) VALUES
(1, 2, 7),
(2, 6, 6);

-- --------------------------------------------------------

--
-- Table structure for table `tb_product`
--

CREATE TABLE `tb_product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_desc` varchar(255) DEFAULT NULL,
  `product_availability` char(1) NOT NULL DEFAULT 'T',
  `product_photo_url` varchar(255) NOT NULL,
  `product_category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_product`
--

INSERT INTO `tb_product` (`product_id`, `product_name`, `product_price`, `product_desc`, `product_availability`, `product_photo_url`, `product_category_id`, `brand_id`) VALUES
(1, 'LG T06EV4', 100000, NULL, 'T', 'LG T06EV4.jpg', 1, 1),
(2, 'Panasonic CS CU-LN5WKJ', 100000, '', '', 'Panasonic CS CU-LN5WKJ.jpg', 1, 2),
(3, 'Daikin Super Mini Split STC15NV', 90000, NULL, 'T', 'Daikin Super Mini Split STC15NV.jpg', 1, 4),
(4, 'Daikin Urusara', 95000, '', '', '', 1, 4),
(5, 'Sharp AH-A5UDL', 110000, NULL, 'T', 'Sharp AH-A5UDL.jpg', 1, 5),
(6, 'LG GN-V222RLT', 120000, NULL, 'T', 'LG GN-V222RLT.jpg', 2, 1),
(7, 'Panasonic Kulkas NR-BB201Q', 125000, NULL, 'T', 'Panasonic Kulkas NR-BB201Q.jpg', 2, 2),
(8, 'Polytron 1 pintu PRA 18 ANR', 120000, 'SPECIFICATION :\r\n1 Door\r\nCapacity Total 180 L\r\nTempered Glass Shelves\r\nFrost\r\nConsumption 90 W', '', '', 2, 6),
(9, 'AQUA QW-881XT', 80000, 'Pekerjaan mencuci adalah salah satu pekerjaan yang cukup menyulitkan dengan menyita waktu dan tenaga, namun kini Anda tak perlu khawatir karena Aqua telah mempersembahkan mesin cuci kualitas tingginya untuk membantu pekerjaan mencuci Anda yaitu Aqua QW 88', 'T', 'AQUA QW-881XT.jpg', 3, 7),
(10, 'LG P9050R', 90000, 'LG P9050R Mesin Cuci merupakan mesin cuci dengan kapasitas 9KG, dilengkapi Roller Jet 3D yang memaksimalkan kinerja mencuci, mengurangi kekusutan pakaian dan halus bersih. Memiliki pulsator utama dan tiga pulsator mini, yang mengoptimalkan kegiatan mencuc', 'T', 'LG P9050R.jpg', 3, 1),
(11, 'Polytron PWM 1369B', 85000, NULL, 'T', 'Polytron PWM 1369B.jpg', 3, 6);

-- --------------------------------------------------------

--
-- Table structure for table `tb_product_category`
--

CREATE TABLE `tb_product_category` (
  `product_category_id` int(11) NOT NULL,
  `product_category_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_product_category`
--

INSERT INTO `tb_product_category` (`product_category_id`, `product_category_name`) VALUES
(1, 'AC'),
(2, 'Refrigerator'),
(3, 'Washing Machine');

-- --------------------------------------------------------

--
-- Table structure for table `tb_role`
--

CREATE TABLE `tb_role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_role`
--

INSERT INTO `tb_role` (`role_id`, `role_name`) VALUES
(1, 'superadmin'),
(2, 'client');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT 2,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `role_id`, `user_name`, `user_email`, `user_password`) VALUES
(1, 1, 'superadmin', 'superadmin@mail.com', 'superadmin'),
(2, 2, 'user', 'user@mail.com', 'user'),
(6, 2, 'akunbiasa', 'akunbiasa@mail.com', 'akunbiasapw');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_brand`
--
ALTER TABLE `tb_brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `tb_keranjang`
--
ALTER TABLE `tb_keranjang`
  ADD PRIMARY KEY (`keranjang_id`),
  ADD KEY `fk_keranjang_user` (`user_id`),
  ADD KEY `fk_keranjang_product` (`product_id`);

--
-- Indexes for table `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `fk_product_brand` (`brand_id`),
  ADD KEY `fk_product_product_category` (`product_category_id`);

--
-- Indexes for table `tb_product_category`
--
ALTER TABLE `tb_product_category`
  ADD PRIMARY KEY (`product_category_id`);

--
-- Indexes for table `tb_role`
--
ALTER TABLE `tb_role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD KEY `fk_user_role` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_brand`
--
ALTER TABLE `tb_brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_keranjang`
--
ALTER TABLE `tb_keranjang`
  MODIFY `keranjang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tb_product_category`
--
ALTER TABLE `tb_product_category`
  MODIFY `product_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_role`
--
ALTER TABLE `tb_role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_keranjang`
--
ALTER TABLE `tb_keranjang`
  ADD CONSTRAINT `fk_keranjang_product` FOREIGN KEY (`product_id`) REFERENCES `tb_product` (`product_id`),
  ADD CONSTRAINT `fk_keranjang_user` FOREIGN KEY (`user_id`) REFERENCES `tb_user` (`user_id`);

--
-- Constraints for table `tb_product`
--
ALTER TABLE `tb_product`
  ADD CONSTRAINT `fk_product_brand` FOREIGN KEY (`brand_id`) REFERENCES `tb_brand` (`brand_id`),
  ADD CONSTRAINT `fk_product_product_category` FOREIGN KEY (`product_category_id`) REFERENCES `tb_product_category` (`product_category_id`);

--
-- Constraints for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD CONSTRAINT `fk_user_role` FOREIGN KEY (`role_id`) REFERENCES `tb_role` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
