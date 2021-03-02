-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2021 at 03:42 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tsaniajati`
--

-- --------------------------------------------------------

--
-- Table structure for table `beli`
--

CREATE TABLE `beli` (
  `beli_num` int(11) DEFAULT NULL,
  `beli_date` datetime DEFAULT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `beliitems`
--

CREATE TABLE `beliitems` (
  `beli_num` int(11) DEFAULT NULL,
  `prod_name` varchar(120) DEFAULT NULL,
  `prod_id` varchar(30) DEFAULT NULL,
  `quantity` int(11) DEFAULT 0,
  `prod_price` double NOT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Triggers `beliitems`
--
DELIMITER $$
CREATE TRIGGER `beli_barang` AFTER INSERT ON `beliitems` FOR EACH ROW begin
update products set quantity=quantity+new.quantity
where prod_id = new.prod_id;
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `prod_id` int(11) NOT NULL,
  `prod_name` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL DEFAULT 0,
  `price` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cart_beli`
--

CREATE TABLE `cart_beli` (
  `prod_id` int(11) NOT NULL,
  `prod_name` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL DEFAULT 0,
  `price` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- Error reading data for table tsaniajati.cart_beli: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `tsaniajati`.`cart_beli`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'Almari'),
(2, 'Fullset Kursi'),
(3, 'Meja'),
(6, 'Kategori Lainya'),
(7, 'Sofa'),
(9, 'Dipan'),
(10, 'Kursi'),
(12, 'Cermin');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `komen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `nama`, `email`, `telp`, `komen`) VALUES
(5, 'aaa', 'nunoakbar3@gmail.com', '', 'ok'),
(6, 'ok', 'ardian@gmail.com', '', 'ok\r\n'),
(7, 'nuno', 'nuno@gmail.com', '', 'tes');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user_id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `level` int(1) NOT NULL COMMENT '1:admin, 2:customer',
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orderitems`
--

CREATE TABLE `orderitems` (
  `order_num` int(11) DEFAULT NULL,
  `prod_name` varchar(120) DEFAULT NULL,
  `prod_id` varchar(30) DEFAULT NULL,
  `quantity` int(11) DEFAULT 0,
  `prod_price` double NOT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderitems`
--

INSERT INTO `orderitems` (`order_num`, `prod_name`, `prod_id`, `quantity`, `prod_price`, `id_user`) VALUES
(1, 'Set Kursi Teras Zuan Retro', '4', 1, 35000, 2),
(1, 'Almari Jam ', '5', 1, 2300000, 2),
(2, 'Kursi Santai Retro Minimalis', '1', 1, 650000, 2),
(2, 'Kursi Teras Lipat', '4', 1, 1250000, 2),
(3, 'Almari Jam ', '5', 1, 2300000, 2),
(4, 'Sofa Lois 3 Dudukan', '10', 1, 1650000, 2),
(5, 'Sofa Mawar ', '12', 1, 1700000, 2),
(6, 'Sofa Lois 3 Dudukan', '10', 2, 1650000, 2),
(7, 'Figura Aestetik', '20', 1, 450000, 2),
(8, 'Kursi Santai Retro Minimalis', '1', 1, 650000, 2),
(9, 'One Set Makan Minimalis', '33', 1, 3200000, 2),
(9, 'Bufet ', '37', 1, 2300000, 2),
(10, 'Kursi Santai Retro Minimalis', '1', 3, 650000, 2),
(10, 'Kursi Teras Lipat', '4', 1, 1250000, 2),
(11, 'Kursi Santai Retro Minimalis', '1', 1, 650000, 2),
(11, 'Sofa Mawar ', '12', 1, 1700000, 2),
(12, 'Kursi Teras Lipat', '4', 1, 1250000, 2),
(13, 'Kursi Goyang ', '24', 21, 700000, 2),
(14, 'Kursi Sofa Syahrini ', '46', 1, 3300000, 2),
(14, 'Bale Bale Rahwana', '48', 1, 3100000, 2),
(15, 'Sofa Mawar ', '12', 1, 1750000, 2),
(16, 'One Set Makan', '26', 1, 4400000, 2),
(16, 'Kursi Teras Lipat ', '38', 2, 450000, 2);

--
-- Triggers `orderitems`
--
DELIMITER $$
CREATE TRIGGER `jual_barang` AFTER INSERT ON `orderitems` FOR EACH ROW begin
update products set quantity=quantity-new.quantity
where prod_id = new.prod_id;
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_num` int(11) DEFAULT NULL,
  `order_date` datetime DEFAULT current_timestamp(),
  `id_user` int(11) NOT NULL,
  `kurir` varchar(128) NOT NULL,
  `bukti_img` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_num`, `order_date`, `id_user`, `kurir`, `bukti_img`) VALUES
(2, '2021-01-04 13:32:11', 2, '', ''),
(3, '2021-01-04 13:37:31', 2, '', ''),
(4, '2021-01-04 13:47:06', 2, '', ''),
(5, '2021-01-06 13:51:20', 2, '', ''),
(6, '2021-01-06 13:54:59', 2, '', ''),
(7, '2021-01-06 13:57:15', 2, '', ''),
(8, '2021-01-06 14:46:17', 2, 'JNT', 'adm1.png'),
(9, '2021-01-14 07:43:31', 2, 'JNE', 't1.jpg'),
(10, '2021-01-19 15:37:35', 2, 'JNT', 'adm11.png'),
(11, '2021-01-21 03:28:04', 2, 'JNT', 't11.jpg'),
(12, '2021-01-21 04:57:45', 2, 'JNE', 'g5.jpg'),
(13, '2021-01-21 05:01:46', 2, 'JNE', 'kolaborsi.jpg'),
(14, '2021-01-27 05:21:23', 2, 'JNE', 't12.jpg'),
(15, '2021-01-29 03:53:06', 2, 'JNT', 'bukti_tf.jpg'),
(16, '2021-01-29 04:43:39', 2, 'JNT', 'bukti_tf1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `preeorder`
--

CREATE TABLE `preeorder` (
  `order_num` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `prod_name` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL DEFAULT 1,
  `prod_price` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `order_date` datetime NOT NULL,
  `kurir` varchar(50) NOT NULL,
  `bukti_tf` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `preeorder`
--

INSERT INTO `preeorder` (`order_num`, `prod_id`, `prod_name`, `qty`, `prod_price`, `id_user`, `order_date`, `kurir`, `bukti_tf`) VALUES
(5, 2, 'Lemari Pakaian Duco', 1, 3300000, 2, '2021-01-29 04:53:10', 'JNT', 't13.jpg'),
(6, 2, 'Lemari Pakaian Duco', 1, 3300000, 2, '2021-01-29 04:53:10', 'JNT', 't14.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `productnotes`
--

CREATE TABLE `productnotes` (
  `note_id` char(9) DEFAULT NULL,
  `prod_id` varchar(30) DEFAULT NULL,
  `note_date` date DEFAULT NULL,
  `note_text` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `prod_id` int(16) NOT NULL,
  `vend_id` char(11) NOT NULL,
  `prod_name` varchar(32) NOT NULL,
  `prod_price` int(11) NOT NULL,
  `harga_beli` int(11) NOT NULL,
  `prod_desc` text DEFAULT NULL,
  `prod_img` varchar(120) DEFAULT 'default.jpg',
  `prod_img2` varchar(120) DEFAULT 'default.jpg',
  `prod_img3` varchar(120) DEFAULT 'default.jpg',
  `cat_id` int(10) DEFAULT 6,
  `quantity` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prod_id`, `vend_id`, `prod_name`, `prod_price`, `harga_beli`, `prod_desc`, `prod_img`, `prod_img2`, `prod_img3`, `cat_id`, `quantity`) VALUES
(1, 'K001', 'Kursi Santai Retro Minimalis', 650000, 600000, 'bahan kayu mahoni, finishing soft natural. ', 'g50.jpg', 'default.jpg', 'default.jpg', 10, 13),
(2, 'AL01', 'Lemari Pakaian Duco', 3300000, 3000000, 'bahan kayu mahoni, finishing white artic.', 'g41.jpg', 'default.jpg', 'default.jpg', 1, 0),
(4, 'FS01', 'Kursi Teras Lipat', 1100000, 1000000, 'bahan kayu jati, finishing natural. ', 'lipat2.jpg', 'default.jpg', 'default.jpg', 2, 19),
(5, 'AL02', 'Almari Jam ', 2200000, 2000000, 'bahan kayu jati, finishing natural. ', 'g46.jpg', 'default.jpg', 'default.jpg', 1, 11),
(10, 'S001', 'Sofa Lois 3 Dudukan', 1650000, 1500000, 'bahan kayu jati, finishing natural gold, bahan kain jok oskar', 'g3.jpg', 'default.jpg', 'default.jpg', 7, 17),
(12, 'S002', 'Sofa Mawar ', 1750000, 1600000, 'bahan kayu jati, finidhing warna gold,  bahan kain jok oskar', 'g10.jpg', 'default.jpg', 'default.jpg', 7, 15),
(16, 'FS02', 'Kursi Tamu Romawi Royal', 8800000, 8000000, 'bahan kayu jati, finishing natural, kain jok custom. ', 'g20.jpg', 'default.jpg', 'default.jpg', 2, 25),
(19, 'FS03', 'Kursi Tamu Scandinaviani', 8250000, 7500000, 'bahan kayu mahoni, finishing white artic. ', 'g231.jpg', 'default.jpg', 'default.jpg', 2, 14),
(20, 'F001', 'Figura Aestetik', 450000, 400000, 'bahan kayu mahoni, finishing natural. ', 'g31.jpg', 'default.jpg', 'default.jpg', 12, 19),
(23, 'D001', 'Dipan Rahwana', 3300000, 3000000, 'dipan jati ukir rahwana, bahan: kayu jati kering warna finishing: natural melamik ukuran dan harga: no. 1 (180cmX2m): ,- belum ongkir no. 2 (160cmX2m)', '9391.jpg', 'default.jpg', 'default.jpg', 9, 20),
(24, 'K002', 'Kursi Goyang ', 850000, 800000, 'bahan kayu jati, finishing natural .', 'kursi_goyang.png', 'default.jpg', 'default.jpg', 10, 4),
(25, 'M001', 'Meja', 660000, 600000, 'bahan kayu mahoni finishing white artic', 'g5.jpg', 'default.jpg', 'default.jpg', 3, 12),
(26, 'FS04', 'One Set Makan', 4400000, 4000000, 'bahan kayu jati, finishing natural gold, bahan kain jok oskaar. ', 'g24.jpg', 'default.jpg', 'default.jpg', 2, 13),
(27, 'AL03', 'Almari Pintu Sleding', 2640000, 2400000, 'bahan kayu jati, finishing warna natural ', 'g14.jpg', 'default.jpg', 'default.jpg', 1, 15),
(28, 'FS05', 'Kursi Teras Betawi', 2200000, 2000000, 'bahan kayu jati, finishing natural. ', 'betawi1.png', 'default.jpg', 'default.jpg', 2, 13),
(29, 'K003', 'Kursi Teras Rotan', 550000, 500000, 'bahan kayu jati dan rotan, finishing warna natural. ', 'g35.jpg', 'default.jpg', 'default.jpg', 10, 15),
(30, 'F002', 'Meja Rias ', 1200000, 1100000, 'bahan kayu jati, finishing warna natural. ', 'g13.jpg', 'default.jpg', 'default.jpg', 12, 15),
(31, 'FS06', 'Kursi Tamu Bellagio', 7700000, 7000000, 'bahan kayu jati, finishing warna gold, bahan kain jok bludru. ', 'g11.jpg', 'default.jpg', 'default.jpg', 2, 12),
(32, 'D002', 'Dipan Mawar', 3400000, 3100000, 'bahan kayu jati, warna finishing black artic. \r\n', 'g28.jpg', 'default.jpg', 'default.jpg', 9, 12),
(33, 'FS07', 'One Set Makan Minimalis', 3200000, 2900000, 'bahan kayu jati, finishing warna natural.', 'makann.jpg', 'default.jpg', 'default.jpg', 2, 13),
(36, '001', 'Bufet Antik ', 4400000, 4000000, 'bahan kayu mahoni, warna bisa custom.', 'g9.jpg', 'default.jpg', 'default.jpg', 6, 10),
(37, '002', 'Bufet Ukir ', 3300000, 3000000, 'bahan kayu mahoni, finishing white artic. ', 'g26.jpg', 'default.jpg', 'default.jpg', 6, 9),
(38, 'K004', 'Kursi Teras Lipat ', 450000, 400000, 'bahan kayu jati, finishing natural. ', 'lipat1.jpg', 'default.jpg', 'default.jpg', 10, 23),
(39, 'M002', 'Meja Teras Lipat', 500000, 450000, 'bahan kayu jati, finishing natural. ', 'lipat3.jpg', 'default.jpg', 'default.jpg', 3, 25),
(40, 'k005', 'Kursi Teras Betawi ', 500000, 450000, 'bahan kayu jati, finishing natural. ', 'betawi.jpg', 'default.jpg', 'default.jpg', 10, 25),
(41, 'M003', 'Meja Teras Betawi ', 350000, 300000, 'bahan kayu jati, finishing natural. ', 'betawi2.jpg', 'default.jpg', 'default.jpg', 3, 25),
(43, 'K006', 'Kursi Makan Minimalis', 450000, 400000, 'bahan kayu jati, finishing natural. ', 'makan1.jpg', 'default.jpg', 'default.jpg', 10, 23),
(44, 'M004', 'Meja Makan Minimalis ', 650000, 600000, 'bahan kayu jati, finishing natural . ', 'makan2.jpg', 'default.jpg', 'default.jpg', 3, 23),
(46, 'S003', 'Kursi Sofa Syahrini ', 3300000, 300000, 'bahan kayu mahoni, finishing grey artic. ', 'sofa.png', 'default.jpg', 'default.jpg', 7, 11),
(47, 'K007', 'Kursi Malas Jok ', 950000, 850000, 'bahan kayu mahoni, finishing natural. ', 'malasjok.jpg', 'default.jpg', 'default.jpg', 10, 13),
(48, '003', 'Bale Bale Rahwana', 3100000, 2800000, 'bahan kayu jati, finishing natural. ', 'balebale.jpg', 'default.jpg', 'default.jpg', 6, 9),
(60, 'FS03', 'Kursi Teras Bundar', 1250000, 1100000, 'bahan kayu jati finishing natural ', 'g161.jpg', 'default.jpg', 'default.jpg', 2, 12);

--
-- Triggers `products`
--
DELIMITER $$
CREATE TRIGGER `hapus_barang` AFTER DELETE ON `products` FOR EACH ROW BEGIN
INSERT INTO produk_hapus
(
prod_id,
vend_id,
prod_name,
prod_price,
prod_desc,
prod_img,
cat_id,
quantity,
tgl_hapus,
user
)
VALUES
(
OLD.prod_id,
OLD.vend_id,
OLD.prod_name,
OLD.prod_price,
OLD.prod_desc,
OLD.prod_img,
OLD.cat_id,
OLD.quantity,
SYSDATE(),
CURRENT_USER
);
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `produk_hapus`
--

CREATE TABLE `produk_hapus` (
  `prod_id` int(16) NOT NULL,
  `vend_id` char(11) NOT NULL,
  `prod_name` varchar(32) NOT NULL,
  `prod_price` int(11) NOT NULL,
  `prod_desc` text DEFAULT NULL,
  `prod_img` varchar(120) DEFAULT 'default.jpg',
  `cat_id` int(10) NOT NULL,
  `quantity` int(11) NOT NULL,
  `tgl_hapus` datetime DEFAULT NULL,
  `user` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk_hapus`
--

INSERT INTO `produk_hapus` (`prod_id`, `vend_id`, `prod_name`, `prod_price`, `prod_desc`, `prod_img`, `cat_id`, `quantity`, `tgl_hapus`, `user`) VALUES
(14, '', 'okok', 123, '', 'jmbt2.jpg', 7, 12, '2020-05-30 02:01:49', 'root@localhost'),
(13, '', 'asd', 123, '', 'default1.jpg', 6, 12, '2020-05-30 02:01:53', 'root@localhost'),
(11, 'a002', 'ok', 1200, '', 'cafelatte.png', 6, 12, '2020-05-30 02:01:58', 'root@localhost'),
(12, 'asdas', 'asd', 123123, '', 'cafelatte.png', 7, 12, '2020-05-30 02:02:03', 'root@localhost'),
(10, 'A002', 'Produk Berhasil', 10000, 'Produk gagal', 'box-null1.png', 6, 10, '2020-05-30 02:02:08', 'root@localhost'),
(15, '', 'Coffee Latte', 20000, '', '', 7, 20, '2020-05-30 02:23:42', 'root@localhost'),
(16, '', 'Coffee Latte', 20000, '', 'cafelatte.png', 7, 20, '2020-05-30 02:23:42', 'root@localhost'),
(17, '', 'Coffee Latte', 20000, '', 'default2.jpg', 7, 2, '2020-05-30 02:23:42', 'root@localhost'),
(18, '', 'Coffee Latte', 20000, '', '', 6, 20, '2020-05-30 02:54:14', 'root@localhost'),
(19, '', 'Coffee Latte', 20000, '', 'box-null1.png', 6, 2, '2020-05-30 03:17:16', 'root@localhost'),
(20, '', '', 0, NULL, 'cafelatte.png', 6, 0, '2020-05-30 03:17:16', 'root@localhost'),
(21, '', '', 0, '', 'cafelatte.jpg', 6, 0, '2020-05-30 03:32:20', 'root@localhost'),
(1, 'A001', 'Robusta Coloo', 20000, 'Kopi robusta, merupakan keturunan dari beberapa jenis spesies kopi. Mengenai kualitas dari buah kopi, faktanya ini lebih rendah dibandingkan dengan kopi Arabika dan juga Liberika. Kopi jenis ini menguasai sekitar 30% pasar dunia. ', '1.png', 2, 24, '2020-06-01 16:45:19', 'root@localhost'),
(2, 'A001', 'Arabika Colo', 15000, 'Kopi jenis ini tumbuh pada daerah dengan ketinggian 700-1700 mdpl. Suhu yang dimiliki adalah 16-20 °C. Yang perlu diketahui mengenai jenis kopi ini adalah mengenai aspek kepekaan terhadap jenis penyakit karat daun atau lebih dikenal dengan HV atau Hemileia Vastatrix. Ini terutama bila ditanam pada daerah yang memiliki elevasi kurang dari 700 mdpl.', '2.png', 1, 20, '2020-06-01 16:45:19', 'root@localhost'),
(3, 'A001', 'Bergendal', 18000, 'Kopi Bergendal adalah varietas kopi arabika dari kebun petani di Bener Meriah Provinsi Aceh. Bergendal sendiri terkenal setelah dinamai oleh Belanda. Menurut cerita petani sekitar, di tempat inilah Belanda menanam kopi pertama kali di Indonesia.', '3.png', 1, 20, '2020-06-01 16:45:20', 'root@localhost'),
(4, 'A001', 'Robusta Leluhur', 20000, 'Kopi robusta, merupakan keturunan dari beberapa jenis spesies kopi. Mengenai kualitas dari buah kopi, faktanya ini lebih rendah dibandingkan dengan kopi Arabika dan juga Liberika. Kopi jenis ini menguasai sekitar 30% pasar dunia.', '4.png', 2, 21, '2020-06-01 16:45:20', 'root@localhost'),
(5, 'A001', 'Papandayan', 25000, 'Sesuai dengan namanya, kopi ini muncul dari Gunung Papandayan. Kopi asal Garut ini sudah mendunia dengan kopi Arabica dengan Indikasi Geografis (IG) Gunung Papandayan. Kopi yang berasal dari IG Papandayan berada di tiga kecamatan, yaitu Cisurupan, Cikajang dan Pamulihan. Proses pembudidayaannya mengacu pada elevasi pegunungan di atas 1.000 MDPL.', '5.png', 3, 20, '2020-06-01 16:45:20', 'root@localhost'),
(6, 'A001', 'Kepahiang', 18000, 'Kopi baru', '6.png', 3, 20, '2020-06-01 16:45:20', 'root@localhost'),
(7, 'A001', 'Megasari', 30000, 'Kopi baru', '7.png', 6, 19, '2020-06-01 16:45:20', 'root@localhost'),
(8, 'A001', 'Patrol', 25000, 'Kopi baru', '8.png', 6, 14, '2020-06-01 16:45:20', 'root@localhost'),
(9, 'A001', 'Bajawa', 26000, 'Kopi baru', '9.png', 6, 18, '2020-06-01 16:45:20', 'root@localhost'),
(22, '', 'Coffee Latte', 20000, '', 'cafelatte.jpg', 7, 20, '2020-06-01 16:45:20', 'root@localhost'),
(23, '', 'Cappucinno', 15000, '', 'cappucino.jpg', 7, 15, '2020-06-01 16:45:20', 'root@localhost'),
(24, '', 'Espresso Single', 8000, '', 'esspreso.jpg', 7, 8, '2020-06-01 16:45:20', 'root@localhost'),
(25, '', 'Kopi Susu', 13000, '', 'kopisusu.jpg', 7, 12, '2020-06-01 16:45:20', 'root@localhost'),
(26, '', 'Coffee Milo', 15000, '', 'cofeemilo.jpg', 7, 13, '2020-06-01 16:45:20', 'root@localhost'),
(27, '', 'Kopi Hitam', 13000, '', 'kopihitam.jpg', 7, 13, '2020-06-01 16:45:20', 'root@localhost'),
(28, '', 'Dark Choco', 13000, '', 'darkchoco.jpg', 7, 13, '2020-06-01 16:45:20', 'root@localhost'),
(20, '', 'Coba', 20000, '', 'photo-profile.png', 6, 12, '2020-06-22 00:02:37', 'root@localhost'),
(21, '', 'ok', 8000, '', 'IMG_20200529_152411-01.jpeg', 6, 89, '2020-06-22 00:04:09', 'root@localhost'),
(22, '', '', 0, NULL, 'default.jpg', 6, 0, '2020-06-22 00:05:19', 'root@localhost'),
(23, '', '', 0, NULL, 'default.jpg', 6, 0, '2020-06-22 00:19:05', 'root@localhost'),
(9, 'A001', 'Bajawa', 32500, 'Bajawa datang dari kata Bhajawa, yang datang dari dua kata “Bha” serta Jawa”. Bha mempunyai artik “piring”, serta Jawa mempunyai makna “perdamaian”. Bhajawa mempunyai makna sebagai piring perdamaian atau daerah yang mengawali perdamaian untuk mempersatukan keseluruhnya Flores jadi utuh.', '9.png', 1, 16, '2020-12-09 23:13:52', 'root@localhost'),
(21, 'F001', 'Cermin Aestetik', 450000, 'Model cermin unik, cermin hias minimalis, cermin hias unik minimalis, harga cermin hias murah, cermin hias minimalis murah, model cermin untuk ruang tamu, cermin dinding murah, cermin dinding besar, jual cermin dinding ukuran besar, harga cermin rias, kaca hias untuk ruang tamu, kaca rias gantung', 'g33.jpg', 6, 20, '2020-12-09 23:19:30', 'root@localhost'),
(3, 'A001', 'Cermin Aestetik', 450000, 'Model cermin unik, cermin hias minimalis, cermin hias unik minimalis, harga cermin hias murah, cermin hias minimalis murah, model cermin untuk ruang tamu, cermin dinding murah, cermin dinding besar, jual cermin dinding ukuran besar, harga cermin rias, kaca hias untuk ruang tamu, kaca rias gantung', 'g32.jpg', 1, 10, '2020-12-09 23:19:41', 'root@localhost'),
(8, 'A001', 'Kursi Tamu Scandinaviani', 3850000, 'Kursi Sofa Tamu Model Scandinavian merupakan kursi sofa model scandinavian berbentuk sudut leter L dengan rangka kayu jati solid serta busa indoor tebal dan empuk yang nyaman bagi penggunananya serta meja minimalis dengan 3 ruang terbuka.\r\n', 'g23.jpg', 6, 11, '2020-12-09 23:23:27', 'root@localhost'),
(6, 'A001', 'Kursi Makan Minimalis', 2800000, 'Set Kursi Meja Makan Jati Minimalis Modern – Terlihat begitu mewah menawan karena diproduksi dengan mengikuti trend furniture saat ini yaitu furniture bergaya minimalis modern, dengan tambahan ukiran agar terlihat lebih cantik dan mewah.', 'g8.jpg', 2, 20, '2020-12-09 23:23:38', 'root@localhost'),
(15, '', 'Coffee Milk', 23000, '', 'kopisusu.jpg', 7, 23, '2020-12-09 23:23:59', 'root@localhost'),
(13, '', 'Espresso', 10000, '', 'esspreso.jpg', 7, 16, '2020-12-09 23:24:13', 'root@localhost'),
(14, '', 'Kopi Hitam', 15000, '', 'kopihitam.jpg', 7, 15, '2020-12-09 23:24:23', 'root@localhost'),
(7, 'A001', 'Dipan Rahwana', 3300000, 'dipan jati ukir rahwana, bahan: kayu jati kering warna finishing: natural melamik ukuran dan harga: no. 1 (180cmX2m): Rp.2.800.000,- belum ongkir no. 2 (160cmX2m)', '939.jpg', 1, 25, '2020-12-10 08:25:03', 'root@localhost'),
(22, 'F002', 'Cermin Aestetik', 480000, 'Model cermin unik, cermin hias minimalis, cermin hias unik minimalis, harga cermin hias murah, cermin hias minimalis murah, model cermin untuk ruang tamu, cermin dinding murah, cermin dinding besar, jual cermin dinding ukuran besar, harga cermin rias, kaca hias untuk ruang tamu, kaca rias gantung', 'g321.jpg', 6, 20, '2020-12-16 13:03:13', 'root@localhost'),
(11, '', 'Sofa B', 25000, '', 'g2.jpg', 7, 24, '2020-12-16 13:03:51', 'root@localhost'),
(18, '', 'Mineral Water', 5000, '', 'g38.jpg', 8, 0, '2020-12-16 13:14:03', 'root@localhost'),
(17, '', 'Matcha', 20000, '', 'g29.jpg', 8, 19, '2020-12-16 13:14:27', 'root@localhost'),
(34, 'F001', 'Cermin Aestetik', 231, 'ew', 'g81.jpg', 6, 20, '2020-12-16 20:31:07', 'root@localhost'),
(42, '', '', 0, NULL, 'default.jpg', 6, 0, '2020-12-20 17:09:05', 'root@localhost'),
(45, '', '', 0, NULL, 'default.jpg', 6, 0, '2020-12-20 17:12:39', 'root@localhost'),
(54, '', '', 0, NULL, 'default.jpg', 6, 0, '2021-01-13 11:53:05', 'root@localhost'),
(49, '', '', 0, NULL, 'default.jpg', 6, 0, '2021-01-13 11:53:49', 'root@localhost'),
(50, '', '', 0, NULL, 'default.jpg', 6, 0, '2021-01-13 11:53:49', 'root@localhost'),
(51, '', '', 0, NULL, 'default.jpg', 6, 0, '2021-01-13 11:53:49', 'root@localhost'),
(52, '', '', 0, NULL, 'default.jpg', 6, 0, '2021-01-13 11:53:49', 'root@localhost'),
(53, '', '', 0, NULL, 'default.jpg', 6, 0, '2021-01-13 11:53:49', 'root@localhost'),
(55, '', '', 0, NULL, 'default.jpg', 6, 0, '2021-01-27 10:11:35', 'root@localhost'),
(56, '', '', 0, NULL, 'default.jpg', 6, 0, '2021-01-27 10:11:49', 'root@localhost'),
(59, '', '', 0, NULL, 'default.jpg', 6, 0, '2021-01-27 10:12:03', 'root@localhost'),
(57, '', '', 0, NULL, 'default.jpg', 6, 0, '2021-01-27 10:12:21', 'root@localhost'),
(58, '', '', 0, NULL, 'default.jpg', 6, 0, '2021-01-27 10:12:30', 'root@localhost'),
(35, '001', 'Meja Konsul 3 Laci', 750000, 'bahan kayu mahoni, finishing warna white artic. ', 'g52.jpg', 6, 15, '2021-01-27 10:13:34', 'root@localhost');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `j_kel` varchar(11) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `role` varchar(20) NOT NULL,
  `verif_akun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama`, `email`, `alamat`, `j_kel`, `nohp`, `username`, `password`, `role`, `verif_akun`) VALUES
(1, 'Anisya', 'nisaaicak09@gmail.com', 'mayong', 'Perempuan', '089504468800', 'nisaicak', '0192023a7bbd73250516f069df18b500', 'admin', 1),
(2, 'Intan', 'anisyaaliyah@gmail.com', 'Jepara', 'Perempuan', '0887634576347', 'intanaja', '46a7357b0b816cb9dd56d70d2a385cfd', '', 1),
(3, 'wikayah', 'wikayah965@gmail.com', 'ngaliyan semarang barat', 'Perempuan', '081325530969', 'wikayah965@gmail.com', 'c92c81598b6e3f241c5a87b7c3405002', '', 1),
(4, 'wikayah', 'intantasq@gmail.com', 'ngaliyan semarang barat', 'Laki - Laki', '081233445', 'intantasq@gmail.com', 'c92c81598b6e3f241c5a87b7c3405002', '', 0),
(5, 'Noor Faizin', 'faiz.jetak@gmail.com', 'Jetak kedungdowo', 'Laki - Laki', '089504468800', 'faizcihuy', '67f27ddf40a0dd24fe50fbe33c4460bb', '', 1),
(6, 'alisyanida aurora', 'alisyanida@gmail.com', 'jl balaidesa tahunan kecamatan tahunan kabupaten jepara', 'Perempuan', '089778645909', 'roraaja', '2bc1644cb1d445444322f5829c2ad70f', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `vend_id` char(12) DEFAULT NULL,
  `vend_name` varchar(75) DEFAULT NULL,
  `vend_address` varchar(90) DEFAULT NULL,
  `vend_city` varchar(60) DEFAULT NULL,
  `vend_state` varchar(15) DEFAULT NULL,
  `vend_zip` varchar(21) DEFAULT NULL,
  `vend_country` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `preeorder`
--
ALTER TABLE `preeorder`
  ADD PRIMARY KEY (`order_num`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`,`email`,`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `preeorder`
--
ALTER TABLE `preeorder`
  MODIFY `order_num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `prod_id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
