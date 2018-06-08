
-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2018 at 12:28 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.2


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";



/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectrpl`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,


  `password` varchar(30) NOT NULL,



  `password` varchar(500) NOT NULL,

  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `email`, `password`, `gender`) VALUES
('Pacar Nanda', 'jihad@yahoo.com', 'jihadnanda123', 'Laki-Laki'),
('Silvia Ananda', 'nanda@yahoo.com', 'a4571059a12a8d6d02193265d157a7', 'Perempuan'),
('Alifah', 'papah@gmail.com', '3fc6f067d0d41f9957a066b3c7dbfde06e3fb82c2e80f4d85dc1ef26e36ad867', 'Perempuan'),
('siti', 'siti@gmail.com', '123456', 'Perempuan'),
('Taufik', 'taufik@gmail.com', '5994471abb01112afcc18159f6cc74', 'Laki-Laki'),
('Tya Shafira', 'tya@gmail.com', 'tya12345', 'Perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `data_meja`
--


INSERT INTO `admin` (`username`, `email`, `password`, `gender`) VALUES
('Pacar Nanda', 'jihad@yahoo.com', 'jihadnanda123', 'Laki-Laki'),
('Silvia Ananda', 'nanda@yahoo.com', 'a4571059a12a8d6d02193265d157a7', 'Perempuan'),
('Alifah', 'papah@gmail.com', '3fc6f067d0d41f9957a066b3c7dbfde06e3fb82c2e80f4d85dc1ef26e36ad867', 'Perempuan'),
('siti', 'siti@gmail.com', '123456', 'Perempuan'),
('Taufik', 'taufik@gmail.com', '5994471abb01112afcc18159f6cc74', 'Laki-Laki'),
('Tya Shafira', 'tya@gmail.com', 'tya12345', 'Perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `data_meja`
--

CREATE TABLE `data_meja` (
  `id_mejapel` int(3) NOT NULL,
  `no_meja` int(2) NOT NULL,


  `jam_datang` datetime DEFAULT NULL

  `status` varchar(10) NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=latin1;

  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_meja`


INSERT INTO `data_meja` (`id_mejapel`, `no_meja`, `status`) VALUES
(1, 1, 'Tidak'),
(2, 2, 'Tidak'),
(3, 3, 'Tidak'),
(4, 4, 'Tidak'),
(5, 5, 'Tidak'),
(6, 6, 'Tidak'),
(7, 7, 'Tidak'),
(8, 8, 'Tidak'),
(9, 9, 'Tidak'),
(10, 10, 'Tidak'),
(11, 11, 'Tidak'),
(12, 12, 'Tidak'),
(13, 13, 'Tidak'),
(14, 14, 'Tidak'),
(15, 15, 'Tidak'),
(16, 16, 'Tidak');



CREATE TABLE `meja_aktif` (
  `id` int(2) NOT NULL,
  `no_meja_aktif` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
-- Dumping data for table `data_meja`
--

INSERT INTO `data_meja` (`id_mejapel`, `no_meja`, `status`) VALUES
(1, 1, 'Tidak'),
(2, 2, 'Tidak'),
(3, 3, 'Tidak'),
(4, 4, 'Tidak'),
(5, 5, 'Tidak'),
(6, 6, 'Tidak'),
(7, 7, 'Tidak'),
(8, 8, 'Tidak'),
(9, 9, 'Tidak'),
(10, 10, 'Tidak'),
(11, 11, 'Tidak'),
(12, 12, 'Tidak'),
(13, 13, 'Tidak'),
(14, 14, 'Tidak'),
(15, 15, 'Tidak'),
(16, 16, 'Tidak');


CREATE TABLE `menu` (
  `id_menu` int(3) NOT NULL,
  `nama_menu` varchar(35) NOT NULL,
  `jenis_menu` int(1) NOT NULL,
  `deskripsi` text,
  `harga_menu` int(11) NOT NULL,
  `gambar` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `menu` (`id_menu`, `nama_menu`, `jenis_menu`, `deskripsi`, `harga_menu`, `gambar`) VALUES
(1, 'Teh Panas', 2, 'Dikonsumsi panas atau dingin, teh pun tetap nikmat. Umumnya, teh panas diminum saat cuaca dingin, sebaliknya, es teh menjadi favorit kala cuaca panas menyengat. \r\nManfaat dari teh panas :\r\nMendinginkan tubuh\r\nMencegah kanker\r\nMemicu air liur\r\nRelaksasi\r\nMencegah Flu', 5000, 'teh.jpg'),
(2, 'Teh Tarek Hijau Panas ', 2, 'Teh hijau merupakan salah satu jenis teh yang paling banyak dikonsumsi setelah teh hitam. Banyak penelitian yang membuktikan bahwa rutin mengkonsumsi teh hijau dapat menurunkan resiko penyakit jantung, menyehatkan psikis karena efek teh sendiri dapat digunakan untuk menenangkan. Selain polifenol, teh hijau juga mengandung flavonoid , fitokimia yang memiliki sifat antikarsinogenik dan antioksidatif.', 6000, 'teh hijau panas.jpg'),
(3, 'Teh Dingin', 2, 'Untuk kandungan yang ada di dalamnya telah ada antioksidan, kefein teh, vitamin A, B kompleks, C, E, polifenol, katekin, flavanol, mocitrat, mangan, zink dan potasium. Tentu dengan kandungan inilah minuman ini dipercaya memiliki banyak manfaat dan khasiat.Manfaat dari es teh :1. Meningkatkan kekebalan tubuh2. Menurunkan kadar kolesterol3. Membuang racun tubuh4. Menjaga kesehatan jantung', 7000, 'teh dingin.jpg'),
(4, 'Teh Tarek Panas', 2, 'Teh terbukti sangat efektif menurunkan berat badan, tapi manfaatnya akan hilang jika sudah dicampur susu dan menjadi teh tarik. Senyawa bermanfaat dalam teh akan diikat oleh protein susu, sehingga tidak mampu menghambat penyerapan lemak.Teh tarik juga berfungsi untuk menyegarkan tubuh', 14000, 'teh tarik panas.jpg'),
(5, 'Espresso Dingin ', 2, 'Espresso adalah salah satu jenis kopi dari beragam jenis kopi di dunia. Semua orang pasti tahu bahwa minum kopi akan memberikan kamu dorongan kafein. Namun, ternyata kopi espresso menawarkan beberapa manfaat lain dari jenis kopi lainnya. Berikut ada lima keuntungan kesehatan jika kamu mengkonsumsi espesso.Khasiat dari espresso adalah Kopi espresso bisa meningkatkan memori jangka panjang, menurunkan berat badan, dan menurunkan resiko penyakit stroke.', 10000, 'susu espresso dingin.jpg '),
(6, 'Nasi Gurih Mata Sapi ', 2, 'Dalam makanan ini mengandung energi, protein, karbohidrat, lemak, kalsium, fosfor, dan zat besi. Selain itu, kandung vitamin A, B1, dan C juga terdapat dalam makanan ini. Semua kandungan-kandungan tersebut sangatlah dibutuhkan untuk menjaga tubuh agar tetap sehat. Dengan citarasanya yang khas makanan yang berasal dari Pulau Sumatera ini sangat digemari oleh semua kalangan. Manfaat nasi gurih dapat mencegah kanker, Mencegah sembelit, Menguatkan jantung, Mengobati disentri', 6000, 'nasi gurih.jpg '),
(7, 'Teh Hijau Hangat', 2, 'Teh hijau juga merupakan pilihan yang sehat karena cara itu diproses . Teh hijau berasal dari daun tanaman Camellia sinensis yang hanya dikukus, sehingga mencegah hilangnya kandungan katekin. Sedangkan teh hitam atau teh oolong dibuat dari daun yang difermentasi, sehingga menyebabkan hilangnya senyawa anti oksidan.  Khasiat Manfaat rutin minum teh Hijau setiap hari :Mengontrol Berat BadanMenyegarkan NafasMengurangi Kolesterol', 7000, 'hijau dingin.jpg'),
(8, 'Lontong Sayur', 2, 'Lontong adalah makanan khas Indonesia yang berkembang di masyarakat Jawa, terbuat dari beras yang dibungkus dalam daun pisang dan dikukus di atas air mendidih selama beberapa jam dan jika air hampir habis dituangkan air lagi demikian berulang sampai beberapa kali.', 15000, 'lontong.jpg'),
(9, 'Martabak 1 Telur ', 2, 'martabak telur adalah makanan camilan atau lauk-pauk yang biasa dikonsumsi oleh masyarakat Indonesia.  Martabak Telur mengandung energi sebesar 200 kilokalori, protein 8,9 gram, karbohidrat 29,5 gram, lemak 5,1 gram, kalsium 0,06 miligram, fosfor 0 miligram, dan zat besi 1,85 miligram.  Selain itu di dalam Martabak Telur juga terkandung vitamin A sebanyak 160 IU, vitamin B1 0 miligram dan vitamin C 0 miligram.  Hasil tersebut didapat dari melakukan penelitian terhadap 100 gram Martabak Telur, dengan jumlah yang dapat dimakan sebanyak 100 %.', 15000, 'martabak.jpg'),
(10, 'Mie Aceh Tumis', 2, 'Mie Aceh adalah salah satu jenis olahan mie yang berasal dari Indonesia, dan biasanya bernuansa kuah pedas. Olahan ini biasanya menggunakan mie kuning tebal, serta bumbu rempah pilihan khas nusantara yang membuat citarasa kuahnya semakin kental. ', 16000, 'mie aceh.jpg '),
(11, 'Teh Hangat', 2, 'Kandungannya meliputi kandungan vitamin C, vitamin A, vitamin E, polifenol, katekin, flavanol dan masih banyak lagi.  Manfaat dan Khasiat Teh Hangat Lainnya : Kaya akan antioksidan Mencegah pertumbuhan kanker Memberikan efek ketenangan Menangkal radikal bebas', 15000, 'teh hangat.jpg'),
(12, 'Kopi Hitam Saring', 2, 'Secangkir kopi biasa diminum ketika kita membutuhkan kafein untuk mengurangi rasa kantuk ataupun sebagai peningkat mood. Konsumsi kopi tanpa gula secara rutin juga bisa menurunkan resiko terkena penyakit akut karena kandungan flavonoidnya yang tinggi. Mengonsumsi kopi hitam juga dapat mengurangi potensi diabetes, dapat melancarkan proses metabolisme sehingga membuat produksi hormon insulin sesuai kebutuhan tubuh. Kopi hitam juga ternyata dapat melindungi pria dari serangan kanker prostat, kanker hati, kanker payudara dan kanker usus besar.', 7000, 'kopi itam saring.jpg'),
(13, 'Kopi Sangger Dingin', 2, 'Sanger diracik menggunakan bahan-bahan berupa kopi, susu, dan gula. Alat yang digunakan juga bukan mesin dengan teknologi canggih, melainkan hanya saringan berbentuk kerucut dan wadah aluminium. Kopi yang digunakan untuk sajian sanger juga menggunakan kopi yang berasal dari Aceh, dua diantaranya yang sering digunakan adalah kopi Robusta Ulee Kareng dan kopi Arabica Gayo.', 11000, 'kopi sanger.jpg'),
(14, 'Teh Hijau Dingin ', 2, 'Teh hijau merupakan salah satu jenis teh yang paling banyak dikonsumsi setelah teh hitam. Banyak penelitian yang membuktikan bahwa rutin mengkonsumsi teh hijau dapat menurunkan resiko penyakit jantung, menyehatkan psikis karena efek teh sendiri dapat digunakan untuk menenangkan. Selain polifenol, teh hijau juga mengandung flavonoid , fitokimia yang memiliki sifat antikarsinogenik dan antioksidatif.', 13000, 'hijau panas.jpg '),
(15, 'Espresso Sanger Dingin', 2, 'Espresso adalah kopi yang diseduh menggunakan mesin khusus bertekanan tinggi yang melarutkan biji kopi giling dengan semburan air panas. Hasilnya adalah minuman kopi hitam panas, pekat, dan kental yang disajikan dalam cangkir mini. Espresso termasuk kopi yang kuat — dalam rasa maupun kandungan kafeinnya. Espresso adalah fondasi utama dari minuman racikan kopi lainnya, termasuk kopi susu dan cappuccino, yang seringnya lebih tinggi kalori karena ditambahkan susu dan gula.', 10000, 'espresso sanger dingin.jpg '),
(16, 'Teh Kocok Telur Susu ', 2, 'Teh telur merupakan jenis minuman yang berkhasiat yang merupakan minuman salah satu khas Provinsi Sumatra Barat.Manfaat dari Teh Kocok Telur : Menambah tenaga, menunda rasa lapar, menjaga kesehatan mata, memenuhi asupan vitamin tubuh, menjaga berat badan.', 15000, 'kopi kocok teur.jpg'),
(17, 'Kopi Kocok Telur', 2, 'Teh telur merupakan jenis minuman yang berkhasiat yang merupakan minuman salah satu khas Provinsi Sumatra Barat.Manfaat dari Teh Kocok TelurMenambah tenagaMenunda rasa laparMenjaga kesehatan mata Memenuhi asupan vitamin tubuhMenjaga berat badan', 15000, 'kopi kocok teur.jpg'),
(18, 'Espresso', 2, 'Espresso adalah salah satu jenis kopi dari beragam jenis kopi di dunia. Semua orang pasti tahu bahwa minum kopi akan memberikan kamu dorongan kafein. Namun, ternyata kopi espresso menawarkan beberapa manfaat lain dari jenis kopi lainnya. Berikut ada lima keuntungan kesehatan jika kamu mengkonsumsi espesso.Khasiat dari espresso adalah Kopi espresso bisa meningkatkan memori jangka panjang, menurunkan berat badan, dan menurunkan resiko penyakit stroke.', 12000, 'espresso.jpg'),
(19, 'Espresso Sanger', 2, 'Espresso adalah salah satu jenis kopi dari beragam jenis kopi di dunia. Semua orang pasti tahu bahwa minum kopi akan memberikan kamu dorongan kafein. Namun, ternyata kopi espresso menawarkan beberapa manfaat lain dari jenis kopi lainnya. Berikut ada lima keuntungan kesehatan jika kamu mengkonsumsi espesso.Khasiat dari espresso adalah Kopi espresso bisa meningkatkan memori jangka panjang, menurunkan berat badan, dan menurunkan resiko penyakit stroke.', 14000, 'espresso sanger.jpg'),
(20, ' Kopi Sangger ', 2, 'Sanger diracik menggunakan bahan-bahan berupa kopi, susu, dan gula. Alat yang digunakan juga bukan mesin dengan teknologi canggih, melainkan hanya saringan berbentuk kerucut dan wadah aluminium. Kopi yang digunakan untuk sajian sanger juga menggunakan kopi yang berasal dari Aceh, dua diantaranya yang sering digunakan adalah kopi Robusta Ulee Kareng dan kopi Arabica Gayo.', 15000, 'sanger dingin.jpg '),
(21, 'Susu Espresso', 2, 'Kopi susu, alias caffè latte, hampir sama dengan segelas cappuccino — terbuat dari espresso dan susu kukus. Yang membedakan keduanya adalah perbandingan porsi susu dalam kopi susu yang lebih banyak dibanding cappuccino. Catherine Collins mengatakan, kopi susu (dan cappuccino) yang diracik dengan susu full-fat adalah sumber baik dari protein dan kalsium, yang penting untuk kesehatan tulang.', 17000, 'susu espresso.jpg'),
(22, 'Kopi Susu Dingin ', 2, 'Kopi susu, alias caffè latte, hampir sama dengan segelas cappuccino — terbuat dari espresso dan susu kukus. Yang membedakan keduanya adalah perbandingan porsi susu dalam kopi susu yang lebih banyak dibanding cappuccino. Catherine Collins mengatakan, kopi susu (dan cappuccino) yang diracik dengan susu full-fat adalah sumber baik dari protein dan kalsium, yang penting untuk kesehatan tulang.', 19000, 'kopi susu dingin.jpg  '),
(23, 'Espresso Capucino', 2, ' Segelas cappuccino dengan foam atau busa. Cappuccino adalah minuman khas Italia yang dibuat dari espresso dan susu,', 14000, 'espresso cappucino.jpg'),
(24, 'Espresso Capucino Dingin', 2, ' Segelas cappuccino dengan foam atau busa. Cappuccino adalah minuman khas Italia yang dibuat dari espresso dan susu,', 15000, 'espresso cappucino dingin.jpg'),
(25, 'Espresso Latte', 2, 'Espresso adalah salah satu jenis kopi dari beragam jenis kopi di dunia. Semua orang pasti tahu bahwa minum kopi akan memberikan kamu dorongan kafein. Namun, ternyata kopi espresso menawarkan beberapa manfaat lain dari jenis kopi lainnya. Berikut ada lima keuntungan kesehatan jika kamu mengkonsumsi espesso.Khasiat dari espresso adalah Kopi espresso bisa meningkatkan memori jangka panjang, menurunkan berat badan, dan menurunkan resiko penyakit stroke.', 14000, 'espresso latte.jpg'),
(26, 'Espresso Latte Dingin', 2, 'Espresso adalah salah satu jenis kopi dari beragam jenis kopi di dunia. Semua orang pasti tahu bahwa minum kopi akan memberikan kamu dorongan kafein. Namun, ternyata kopi espresso menawarkan beberapa manfaat lain dari jenis kopi lainnya. Berikut ada lima keuntungan kesehatan jika kamu mengkonsumsi espesso.Khasiat dari espresso adalah Kopi espresso bisa meningkatkan memori jangka panjang, menurunkan berat badan, dan menurunkan resiko penyakit stroke.', 15000, 'espresso latte.jpg'),
(27, 'Nasi Gurih Dadar', 1, 'Dalam makanan ini mengandung energi, protein, karbohidrat, lemak, kalsium, fosfor, dan zat besi. Selain itu, kandung vitamin A, B1, dan C juga terdapat dalam makanan ini. Semua kandungan-kandungan tersebut sangatlah dibutuhkan untuk menjaga tubuh agar tetap sehat. Dengan citarasanya yang khas makanan yang berasal dari Pulau Sumatera ini sangat digemari oleh semua kalangan. Manfaat nasi gurih dapat mencegah kanker, Mencegah sembelit, Menguatkan jantung, Mengobati disentri', 10000, 'nasi.jpg'),
(28, 'Teh Tarek Dingin ', 1, 'Teh terbukti sangat efektif menurunkan berat badan, tapi manfaatnya akan hilang jika sudah dicampur susu dan menjadi teh tarik. Senyawa bermanfaat dalam teh akan diikat oleh protein susu, sehingga tidak mampu menghambat penyerapan lemak.Teh tarik juga berfungsi untuk menyegarkan tubuh', 10000, 'teh tarik dingin.jpg'),
(29, 'Nasi Gurih Ayam', 1, 'Dalam makanan ini mengandung energi, protein, karbohidrat, lemak, kalsium, fosfor, dan zat besi. Selain itu, kandung vitamin A, B1, dan C juga terdapat dalam makanan ini. Semua kandungan-kandungan tersebut sangatlah dibutuhkan untuk menjaga tubuh agar tetap sehat. Dengan citarasanya yang khas makanan yang berasal dari Pulau Sumatera ini sangat digemari oleh semua kalangan. Manfaat nasi gurih dapat mencegah kanker, Mencegah sembelit, Menguatkan jantung, Mengobati disentri', 13000, 'nasi ayam.jpg'),
(30, 'Teh Hijau Panas', 1, 'Teh hijau merupakan salah satu jenis teh yang paling banyak dikonsumsi setelah teh hitam. Banyak penelitian yang membuktikan bahwa rutin mengkonsumsi teh hijau dapat menurunkan resiko penyakit jantung, menyehatkan psikis karena efek teh sendiri dapat digunakan untuk menenangkan. Selain polifenol, teh hijau juga mengandung flavonoid , fitokimia yang memiliki sifat antikarsinogenik dan antioksidatif.', 10000, 'hijau dingin.jpg'),
(31, 'Lontong Soto', 1, 'Ternyata di Belitung juga punya kuliner soto. Beberapa daerah di Indonesia memang punya soto dengan rasa dan isian yang berbeda. Memang soto ini aslinya kuliner dari negeri Cina. \r\n\r\nMasuk ke Indonesia melalui pedagang-pedagang Cina yang datang ke Indonesia. Dan berakulturasi dengan budaya setempat sehingga menghasilkan kuliner soto yang khas suatu daerah. Begitu juga di Belitung. Kuliner sotonya juga sangat terkenal dengan kelezatannya. ', 10000, 'soto.jpg'),
(32, 'Lontong Pecal', 1, 'Pecel adalah makanan khas Indonesia yang terbuat dari rebusan sayuran berupa bayam, tauge, kacang panjang, kemangi, daun turi, krai (sejenis mentimun) atau sayuran lainnya yang dihidangkan dengan disiram sambal pecel. Konsep hidangan pecel ada kemiripan dengan salad bagi orang Eropa, yakni sayuran segar yang disiram topping mayonaise. Hanya saja untuk pecel toppingnya sambal pecel. Bahan utama dari sambal pecel adalah kacang tanah dan cabe rawit yang dicampur dengan bahan lainnya seperti daun jeruk purut, bawang, asam jawa, merica dan garam. Pecel sering juga dihidangkan dengan rempeyek kacang, rempeyek udang atau lempeng beras. Selain itu pecel juga biasanya disajikan dengan nasi putih yang hangat ditambah daging ayam atau jerohan. Cara penyajian bisa dalam piring atau dalam daun yang dilipat yang disebut pincuk. ', 10000, 'pecal'),
(33, 'Mie Aceh Goreng', 1, 'Mie Aceh adalah salah satu jenis olahan mie yang berasal dari Indonesia, dan biasanya bernuansa kuah pedas. Olahan ini biasanya menggunakan mie kuning tebal, serta bumbu rempah pilihan khas nusantara yang membuat citarasa kuahnya semakin kental. ', 8000, 'mie acehh'),
(34, 'Teh Tarek Hijau Dingin ', 1, 'Teh hijau merupakan salah satu jenis teh yang paling banyak dikonsumsi setelah teh hitam. Banyak penelitian yang membuktikan bahwa rutin mengkonsumsi teh hijau dapat menurunkan resiko penyakit jantung, menyehatkan psikis karena efek teh sendiri dapat digunakan untuk menenangkan. Selain polifenol, teh hijau juga mengandung flavonoid , fitokimia yang memiliki sifat antikarsinogenik dan antioksidatif.', 8000, 'hijau panas.jpg'),
(35, 'Mie Aceh Rebus', 1, 'Mie Aceh adalah salah satu jenis olahan mie yang berasal dari Indonesia, dan biasanya bernuansa kuah pedas. Olahan ini biasanya menggunakan mie kuning tebal, serta bumbu rempah pilihan khas nusantara yang membuat citarasa kuahnya semakin kental. ', 8000, 'rebus.jpg'),
(36, 'Kopi Susu ', 1, 'Kopi susu, alias caffè latte, hampir sama dengan segelas cappuccino — terbuat dari espresso dan susu kukus. Yang membedakan keduanya adalah perbandingan porsi susu dalam kopi susu yang lebih banyak dibanding cappuccino. Catherine Collins mengatakan, kopi susu (dan cappuccino) yang diracik dengan susu full-fat adalah sumber baik dari protein dan kalsium, yang penting untuk kesehatan tulang.', 6000, 'kopi susu.jpg'),
(37, 'Martabak 2 Telur', 1, 'martabak telur adalah makanan camilan atau lauk-pauk yang biasa dikonsumsi oleh masyarakat Indonesia.  Martabak Telur mengandung energi sebesar 200 kilokalori, protein 8,9 gram, karbohidrat 29,5 gram, lemak 5,1 gram, kalsium 0,06 miligram, fosfor 0 miligram, dan zat besi 1,85 miligram.  Selain itu di dalam Martabak Telur juga terkandung vitamin A sebanyak 160 IU, vitamin B1 0 miligram dan vitamin C 0 miligram.  Hasil tersebut didapat dari melakukan penelitian terhadap 100 gram Martabak Telur, dengan jumlah yang dapat dimakan sebanyak 100 %.', 8000, 'martabak.jpg'),
(38, 'Martabak 3 Telur', 1, 'martabak telur adalah makanan camilan atau lauk-pauk yang biasa dikonsumsi oleh masyarakat Indonesia.  Martabak Telur mengandung energi sebesar 200 kilokalori, protein 8,9 gram, karbohidrat 29,5 gram, lemak 5,1 gram, kalsium 0,06 miligram, fosfor 0 miligram, dan zat besi 1,85 miligram.  Selain itu di dalam Martabak Telur juga terkandung vitamin A sebanyak 160 IU, vitamin B1 0 miligram dan vitamin C 0 miligram.  Hasil tersebut didapat dari melakukan penelitian terhadap 100 gram Martabak Telur, dengan jumlah yang dapat dimakan sebanyak 100 %.', 10000, 'martabak.jpg');


--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_mejapel` int(11) NOT NULL,
  `id_pesan` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `jumlah_order` int(2) NOT NULL,
  `jenis_bayar` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id_mejapel`, `id_pesan`, `id_menu`, `jumlah_order`, `jenis_bayar`) VALUES
(13, 9, 0, 17, 'Tunai'),
(7, 47, 6, 1, 'Tunai'),
(7, 48, 8, 1, 'Tunai'),
(7, 49, 3, 2, 'Tunai'),
(4, 84, 6, 5, 'Cash'),
(15, 90, 6, 1, 'Tunai'),
(13, 116, 14, 4, 'Tunai'),
(3, 117, 6, 1, 'Tunai'),
(3, 118, 1, 1, 'Tunai'),
(5, 123, 6, 3, 'Cash');

-- --------------------------------------------------------


CREATE TABLE `rekap_struk` (
  `id_rekap` int(11) NOT NULL,
  `id_mejapel` int(3) NOT NULL,
  `id_menu` int(3) DEFAULT NULL,
  `jmlh_order` int(2) DEFAULT NULL,
  `jenis_bayar` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);


ALTER TABLE `data_meja`
  ADD PRIMARY KEY (`id_mejapel`);

<<<<<<< HEAD
ALTER TABLE `meja_aktif`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

ALTER TABLE `pesanan`
  ADD KEY `fk_id_mejapel` (`id_mejapel`),
  ADD KEY `fk_id_menu` (`id_menu`);
--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

ALTER TABLE `rekap_struk`
  ADD PRIMARY KEY (`id_rekap`);

ALTER TABLE `data_meja`
  MODIFY `id_mejapel` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

ALTER TABLE `meja_aktif`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;



--
-- AUTO_INCREMENT for table `menu`
--

ALTER TABLE `menu`
  MODIFY `id_menu` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

ALTER TABLE `pesanan`
  ADD CONSTRAINT `fk_id_mejapel` FOREIGN KEY (`id_mejapel`) REFERENCES `data_meja` (`id_mejapel`),
  ADD CONSTRAINT `fk_id_menu` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id_menu`);


--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;
--
-- AUTO_INCREMENT for table `rekap_struk`
--

ALTER TABLE `rekap_struk`
  ADD CONSTRAINT `fk_id_mejapela` FOREIGN KEY (`id_mejapel`) REFERENCES `data_meja` (`id_mejapel`),
  ADD CONSTRAINT `fk_id_mejapelb` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id_menu`);
COMMIT;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `admin` (`username`, `email`, `password`, `gender`) VALUES
('bana', 'anana@gmail.com', '12345', 'laki-laki'),
('jiad', 'jiad@gmail.com', 'zxcvbn', 'laki-laki'),
('kaka', 'kaka@gmail.com', '12345', 'laki-laki'),
('lala', 'lala@gmail.com', 'aaaaa', 'perempuan'),
('nina', 'nina@gmail.com', 'nanda123', 'laki-laki'),
('annafa', 'silvia@gmail.com', 'NANDA000', 'perempuan');

CREATE TABLE IF NOT EXISTS `data_meja` (
  `id_mejapel` int(3) NOT NULL AUTO_INCREMENT,
  `no_meja` int(2) NOT NULL,
  `jam_datang` datetime DEFAULT NULL,
  PRIMARY KEY (`id_mejapel`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;


INSERT INTO `data_meja` (`id_mejapel`, `no_meja`, `jam_datang`) VALUES
(1, 1, '0000-00-00 00:00:00'),
(2, 2, '0000-00-00 00:00:00'),
(3, 3, '0000-00-00 00:00:00'),
(4, 4, '0000-00-00 00:00:00'),
(5, 5, '0000-00-00 00:00:00'),
(6, 6, '0000-00-00 00:00:00'),
(7, 7, '0000-00-00 00:00:00'),
(8, 8, '0000-00-00 00:00:00'),
(9, 9, '0000-00-00 00:00:00'),
(10, 10, '0000-00-00 00:00:00'),
(11, 11, '0000-00-00 00:00:00'),
(12, 12, '0000-00-00 00:00:00'),
(13, 13, '0000-00-00 00:00:00'),
(14, 14, '0000-00-00 00:00:00'),
(15, 15, '0000-00-00 00:00:00'),
(16, 16, '0000-00-00 00:00:00');


CREATE TABLE `menu` (
  `id_menu` int(3) NOT NULL,
  `nama_menu` varchar(35) NOT NULL,
  `jenis_menu` int(1) NOT NULL,
  `deskripsi` text,
  `harga_menu` int(11) NOT NULL,
  `gambar` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `menu` (`id_menu`, `nama_menu`, `jenis_menu`, `deskripsi`, `harga_menu`, `gambar`) VALUES
(1, 'Teh Panas', 2, 'Dikonsumsi panas atau dingin, teh pun tetap nikmat. Umumnya, teh panas diminum saat cuaca dingin, sebaliknya, es teh menjadi favorit kala cuaca panas menyengat. \r\nManfaat dari teh panas :\r\nMendinginkan tubuh\r\nMencegah kanker\r\nMemicu air liur\r\nRelaksasi\r\nMencegah Flu', 5000, 'teh.jpg'),
(2, 'Teh Tarek Hijau Panas ', 2, 'Teh hijau merupakan salah satu jenis teh yang paling banyak dikonsumsi setelah teh hitam. Banyak penelitian yang membuktikan bahwa rutin mengkonsumsi teh hijau dapat menurunkan resiko penyakit jantung, menyehatkan psikis karena efek teh sendiri dapat digunakan untuk menenangkan. Selain polifenol, teh hijau juga mengandung flavonoid , fitokimia yang memiliki sifat antikarsinogenik dan antioksidatif.', 6000, 'teh hijau panas.jpg'),
(3, 'Teh Dingin', 2, 'Untuk kandungan yang ada di dalamnya telah ada antioksidan, kefein teh, vitamin A, B kompleks, C, E, polifenol, katekin, flavanol, mocitrat, mangan, zink dan potasium. Tentu dengan kandungan inilah minuman ini dipercaya memiliki banyak manfaat dan khasiat.Manfaat dari es teh :1. Meningkatkan kekebalan tubuh2. Menurunkan kadar kolesterol3. Membuang racun tubuh4. Menjaga kesehatan jantung', 7000, 'teh dingin.jpg'),
(4, 'Teh Tarek Panas', 2, 'Teh terbukti sangat efektif menurunkan berat badan, tapi manfaatnya akan hilang jika sudah dicampur susu dan menjadi teh tarik. Senyawa bermanfaat dalam teh akan diikat oleh protein susu, sehingga tidak mampu menghambat penyerapan lemak.Teh tarik juga berfungsi untuk menyegarkan tubuh', 14000, 'teh tarik panas.jpg'),
(5, 'Espresso Dingin ', 2, 'Espresso adalah salah satu jenis kopi dari beragam jenis kopi di dunia. Semua orang pasti tahu bahwa minum kopi akan memberikan kamu dorongan kafein. Namun, ternyata kopi espresso menawarkan beberapa manfaat lain dari jenis kopi lainnya. Berikut ada lima keuntungan kesehatan jika kamu mengkonsumsi espesso.Khasiat dari espresso adalah Kopi espresso bisa meningkatkan memori jangka panjang, menurunkan berat badan, dan menurunkan resiko penyakit stroke.', 10000, 'susu espresso dingin.jpg '),
(6, 'Nasi Gurih Mata Sapi ', 2, 'Dalam makanan ini mengandung energi, protein, karbohidrat, lemak, kalsium, fosfor, dan zat besi. Selain itu, kandung vitamin A, B1, dan C juga terdapat dalam makanan ini. Semua kandungan-kandungan tersebut sangatlah dibutuhkan untuk menjaga tubuh agar tetap sehat. Dengan citarasanya yang khas makanan yang berasal dari Pulau Sumatera ini sangat digemari oleh semua kalangan. Manfaat nasi gurih dapat mencegah kanker, Mencegah sembelit, Menguatkan jantung, Mengobati disentri', 6000, 'nasi gurih.jpg '),
(7, 'Teh Hijau Hangat', 2, 'Teh hijau juga merupakan pilihan yang sehat karena cara itu diproses . Teh hijau berasal dari daun tanaman Camellia sinensis yang hanya dikukus, sehingga mencegah hilangnya kandungan katekin. Sedangkan teh hitam atau teh oolong dibuat dari daun yang difermentasi, sehingga menyebabkan hilangnya senyawa anti oksidan.  Khasiat Manfaat rutin minum teh Hijau setiap hari :Mengontrol Berat BadanMenyegarkan NafasMengurangi Kolesterol', 7000, 'hijau dingin.jpg'),
(8, 'Lontong Sayur', 2, 'Lontong adalah makanan khas Indonesia yang berkembang di masyarakat Jawa, terbuat dari beras yang dibungkus dalam daun pisang dan dikukus di atas air mendidih selama beberapa jam dan jika air hampir habis dituangkan air lagi demikian berulang sampai beberapa kali.', 15000, 'lontong.jpg'),
(9, 'Martabak 1 Telur ', 2, 'martabak telur adalah makanan camilan atau lauk-pauk yang biasa dikonsumsi oleh masyarakat Indonesia.  Martabak Telur mengandung energi sebesar 200 kilokalori, protein 8,9 gram, karbohidrat 29,5 gram, lemak 5,1 gram, kalsium 0,06 miligram, fosfor 0 miligram, dan zat besi 1,85 miligram.  Selain itu di dalam Martabak Telur juga terkandung vitamin A sebanyak 160 IU, vitamin B1 0 miligram dan vitamin C 0 miligram.  Hasil tersebut didapat dari melakukan penelitian terhadap 100 gram Martabak Telur, dengan jumlah yang dapat dimakan sebanyak 100 %.', 15000, 'martabak.jpg'),
(10, 'Mie Aceh Tumis', 2, 'Mie Aceh adalah salah satu jenis olahan mie yang berasal dari Indonesia, dan biasanya bernuansa kuah pedas. Olahan ini biasanya menggunakan mie kuning tebal, serta bumbu rempah pilihan khas nusantara yang membuat citarasa kuahnya semakin kental. ', 16000, 'mie aceh.jpg '),
(11, 'Teh Hangat', 2, 'Kandungannya meliputi kandungan vitamin C, vitamin A, vitamin E, polifenol, katekin, flavanol dan masih banyak lagi.  Manfaat dan Khasiat Teh Hangat Lainnya : Kaya akan antioksidan Mencegah pertumbuhan kanker Memberikan efek ketenangan Menangkal radikal bebas', 15000, 'teh hangat.jpg'),
(12, 'Kopi Hitam Saring', 2, 'Secangkir kopi biasa diminum ketika kita membutuhkan kafein untuk mengurangi rasa kantuk ataupun sebagai peningkat mood. Konsumsi kopi tanpa gula secara rutin juga bisa menurunkan resiko terkena penyakit akut karena kandungan flavonoidnya yang tinggi. Mengonsumsi kopi hitam juga dapat mengurangi potensi diabetes, dapat melancarkan proses metabolisme sehingga membuat produksi hormon insulin sesuai kebutuhan tubuh. Kopi hitam juga ternyata dapat melindungi pria dari serangan kanker prostat, kanker hati, kanker payudara dan kanker usus besar.', 7000, 'kopi itam saring.jpg'),
(13, 'Kopi Sangger Dingin', 2, 'Sanger diracik menggunakan bahan-bahan berupa kopi, susu, dan gula. Alat yang digunakan juga bukan mesin dengan teknologi canggih, melainkan hanya saringan berbentuk kerucut dan wadah aluminium. Kopi yang digunakan untuk sajian sanger juga menggunakan kopi yang berasal dari Aceh, dua diantaranya yang sering digunakan adalah kopi Robusta Ulee Kareng dan kopi Arabica Gayo.', 11000, 'kopi sanger.jpg'),
(14, 'Teh Hijau Dingin ', 2, 'Teh hijau merupakan salah satu jenis teh yang paling banyak dikonsumsi setelah teh hitam. Banyak penelitian yang membuktikan bahwa rutin mengkonsumsi teh hijau dapat menurunkan resiko penyakit jantung, menyehatkan psikis karena efek teh sendiri dapat digunakan untuk menenangkan. Selain polifenol, teh hijau juga mengandung flavonoid , fitokimia yang memiliki sifat antikarsinogenik dan antioksidatif.', 13000, 'hijau panas.jpg '),
(15, 'Espresso Sanger Dingin', 2, 'Espresso adalah kopi yang diseduh menggunakan mesin khusus bertekanan tinggi yang melarutkan biji kopi giling dengan semburan air panas. Hasilnya adalah minuman kopi hitam panas, pekat, dan kental yang disajikan dalam cangkir mini. Espresso termasuk kopi yang kuat — dalam rasa maupun kandungan kafeinnya. Espresso adalah fondasi utama dari minuman racikan kopi lainnya, termasuk kopi susu dan cappuccino, yang seringnya lebih tinggi kalori karena ditambahkan susu dan gula.', 10000, 'espresso sanger dingin.jpg '),
(16, 'Teh Kocok Telur Susu ', 2, 'Teh telur merupakan jenis minuman yang berkhasiat yang merupakan minuman salah satu khas Provinsi Sumatra Barat.Manfaat dari Teh Kocok Telur : Menambah tenaga, menunda rasa lapar, menjaga kesehatan mata, memenuhi asupan vitamin tubuh, menjaga berat badan.', 15000, 'kopi kocok teur.jpg'),
(17, 'Kopi Kocok Telur', 2, 'Teh telur merupakan jenis minuman yang berkhasiat yang merupakan minuman salah satu khas Provinsi Sumatra Barat.Manfaat dari Teh Kocok TelurMenambah tenagaMenunda rasa laparMenjaga kesehatan mata Memenuhi asupan vitamin tubuhMenjaga berat badan', 15000, 'kopi kocok teur.jpg'),
(18, 'Espresso', 2, 'Espresso adalah salah satu jenis kopi dari beragam jenis kopi di dunia. Semua orang pasti tahu bahwa minum kopi akan memberikan kamu dorongan kafein. Namun, ternyata kopi espresso menawarkan beberapa manfaat lain dari jenis kopi lainnya. Berikut ada lima keuntungan kesehatan jika kamu mengkonsumsi espesso.Khasiat dari espresso adalah Kopi espresso bisa meningkatkan memori jangka panjang, menurunkan berat badan, dan menurunkan resiko penyakit stroke.', 12000, 'espresso.jpg'),
(19, 'Espresso Sanger', 2, 'Espresso adalah salah satu jenis kopi dari beragam jenis kopi di dunia. Semua orang pasti tahu bahwa minum kopi akan memberikan kamu dorongan kafein. Namun, ternyata kopi espresso menawarkan beberapa manfaat lain dari jenis kopi lainnya. Berikut ada lima keuntungan kesehatan jika kamu mengkonsumsi espesso.Khasiat dari espresso adalah Kopi espresso bisa meningkatkan memori jangka panjang, menurunkan berat badan, dan menurunkan resiko penyakit stroke.', 14000, 'espresso sanger.jpg'),
(20, ' Kopi Sangger ', 2, 'Sanger diracik menggunakan bahan-bahan berupa kopi, susu, dan gula. Alat yang digunakan juga bukan mesin dengan teknologi canggih, melainkan hanya saringan berbentuk kerucut dan wadah aluminium. Kopi yang digunakan untuk sajian sanger juga menggunakan kopi yang berasal dari Aceh, dua diantaranya yang sering digunakan adalah kopi Robusta Ulee Kareng dan kopi Arabica Gayo.', 15000, 'sanger dingin.jpg '),
(21, 'Susu Espresso', 2, 'Kopi susu, alias caffè latte, hampir sama dengan segelas cappuccino — terbuat dari espresso dan susu kukus. Yang membedakan keduanya adalah perbandingan porsi susu dalam kopi susu yang lebih banyak dibanding cappuccino. Catherine Collins mengatakan, kopi susu (dan cappuccino) yang diracik dengan susu full-fat adalah sumber baik dari protein dan kalsium, yang penting untuk kesehatan tulang.', 17000, 'susu espresso.jpg'),
(22, 'Kopi Susu Dingin ', 2, 'Kopi susu, alias caffè latte, hampir sama dengan segelas cappuccino — terbuat dari espresso dan susu kukus. Yang membedakan keduanya adalah perbandingan porsi susu dalam kopi susu yang lebih banyak dibanding cappuccino. Catherine Collins mengatakan, kopi susu (dan cappuccino) yang diracik dengan susu full-fat adalah sumber baik dari protein dan kalsium, yang penting untuk kesehatan tulang.', 19000, 'kopi susu dingin.jpg  '),
(23, 'Espresso Capucino', 2, ' Segelas cappuccino dengan foam atau busa. Cappuccino adalah minuman khas Italia yang dibuat dari espresso dan susu,', 14000, 'espresso cappucino.jpg'),
(24, 'Espresso Capucino Dingin', 2, ' Segelas cappuccino dengan foam atau busa. Cappuccino adalah minuman khas Italia yang dibuat dari espresso dan susu,', 15000, 'espresso cappucino dingin.jpg'),
(25, 'Espresso Latte', 2, 'Espresso adalah salah satu jenis kopi dari beragam jenis kopi di dunia. Semua orang pasti tahu bahwa minum kopi akan memberikan kamu dorongan kafein. Namun, ternyata kopi espresso menawarkan beberapa manfaat lain dari jenis kopi lainnya. Berikut ada lima keuntungan kesehatan jika kamu mengkonsumsi espesso.Khasiat dari espresso adalah Kopi espresso bisa meningkatkan memori jangka panjang, menurunkan berat badan, dan menurunkan resiko penyakit stroke.', 14000, 'espresso latte.jpg'),
(26, 'Espresso Latte Dingin', 2, 'Espresso adalah salah satu jenis kopi dari beragam jenis kopi di dunia. Semua orang pasti tahu bahwa minum kopi akan memberikan kamu dorongan kafein. Namun, ternyata kopi espresso menawarkan beberapa manfaat lain dari jenis kopi lainnya. Berikut ada lima keuntungan kesehatan jika kamu mengkonsumsi espesso.Khasiat dari espresso adalah Kopi espresso bisa meningkatkan memori jangka panjang, menurunkan berat badan, dan menurunkan resiko penyakit stroke.', 15000, 'espresso latte.jpg'),
(27, 'Nasi Gurih Dadar', 1, 'Dalam makanan ini mengandung energi, protein, karbohidrat, lemak, kalsium, fosfor, dan zat besi. Selain itu, kandung vitamin A, B1, dan C juga terdapat dalam makanan ini. Semua kandungan-kandungan tersebut sangatlah dibutuhkan untuk menjaga tubuh agar tetap sehat. Dengan citarasanya yang khas makanan yang berasal dari Pulau Sumatera ini sangat digemari oleh semua kalangan. Manfaat nasi gurih dapat mencegah kanker, Mencegah sembelit, Menguatkan jantung, Mengobati disentri', 10000, 'nasi.jpg'),
(28, 'Teh Tarek Dingin ', 1, 'Teh terbukti sangat efektif menurunkan berat badan, tapi manfaatnya akan hilang jika sudah dicampur susu dan menjadi teh tarik. Senyawa bermanfaat dalam teh akan diikat oleh protein susu, sehingga tidak mampu menghambat penyerapan lemak.Teh tarik juga berfungsi untuk menyegarkan tubuh', 10000, 'teh tarik dingin.jpg'),
(29, 'Nasi Gurih Ayam', 1, 'Dalam makanan ini mengandung energi, protein, karbohidrat, lemak, kalsium, fosfor, dan zat besi. Selain itu, kandung vitamin A, B1, dan C juga terdapat dalam makanan ini. Semua kandungan-kandungan tersebut sangatlah dibutuhkan untuk menjaga tubuh agar tetap sehat. Dengan citarasanya yang khas makanan yang berasal dari Pulau Sumatera ini sangat digemari oleh semua kalangan. Manfaat nasi gurih dapat mencegah kanker, Mencegah sembelit, Menguatkan jantung, Mengobati disentri', 13000, 'nasi ayam.jpg'),
(30, 'Teh Hijau Panas', 1, 'Teh hijau merupakan salah satu jenis teh yang paling banyak dikonsumsi setelah teh hitam. Banyak penelitian yang membuktikan bahwa rutin mengkonsumsi teh hijau dapat menurunkan resiko penyakit jantung, menyehatkan psikis karena efek teh sendiri dapat digunakan untuk menenangkan. Selain polifenol, teh hijau juga mengandung flavonoid , fitokimia yang memiliki sifat antikarsinogenik dan antioksidatif.', 10000, 'hijau dingin.jpg'),
(31, 'Lontong Soto', 1, 'Ternyata di Belitung juga punya kuliner soto. Beberapa daerah di Indonesia memang punya soto dengan rasa dan isian yang berbeda. Memang soto ini aslinya kuliner dari negeri Cina. \r\n\r\nMasuk ke Indonesia melalui pedagang-pedagang Cina yang datang ke Indonesia. Dan berakulturasi dengan budaya setempat sehingga menghasilkan kuliner soto yang khas suatu daerah. Begitu juga di Belitung. Kuliner sotonya juga sangat terkenal dengan kelezatannya. ', 10000, 'soto.jpg'),
(32, 'Lontong Pecal', 1, 'Pecel adalah makanan khas Indonesia yang terbuat dari rebusan sayuran berupa bayam, tauge, kacang panjang, kemangi, daun turi, krai (sejenis mentimun) atau sayuran lainnya yang dihidangkan dengan disiram sambal pecel. Konsep hidangan pecel ada kemiripan dengan salad bagi orang Eropa, yakni sayuran segar yang disiram topping mayonaise. Hanya saja untuk pecel toppingnya sambal pecel. Bahan utama dari sambal pecel adalah kacang tanah dan cabe rawit yang dicampur dengan bahan lainnya seperti daun jeruk purut, bawang, asam jawa, merica dan garam. Pecel sering juga dihidangkan dengan rempeyek kacang, rempeyek udang atau lempeng beras. Selain itu pecel juga biasanya disajikan dengan nasi putih yang hangat ditambah daging ayam atau jerohan. Cara penyajian bisa dalam piring atau dalam daun yang dilipat yang disebut pincuk. ', 10000, 'pecal'),
(33, 'Mie Aceh Goreng', 1, 'Mie Aceh adalah salah satu jenis olahan mie yang berasal dari Indonesia, dan biasanya bernuansa kuah pedas. Olahan ini biasanya menggunakan mie kuning tebal, serta bumbu rempah pilihan khas nusantara yang membuat citarasa kuahnya semakin kental. ', 8000, 'mie acehh'),
(34, 'Teh Tarek Hijau Dingin ', 1, 'Teh hijau merupakan salah satu jenis teh yang paling banyak dikonsumsi setelah teh hitam. Banyak penelitian yang membuktikan bahwa rutin mengkonsumsi teh hijau dapat menurunkan resiko penyakit jantung, menyehatkan psikis karena efek teh sendiri dapat digunakan untuk menenangkan. Selain polifenol, teh hijau juga mengandung flavonoid , fitokimia yang memiliki sifat antikarsinogenik dan antioksidatif.', 8000, 'hijau panas.jpg'),
(35, 'Mie Aceh Rebus', 1, 'Mie Aceh adalah salah satu jenis olahan mie yang berasal dari Indonesia, dan biasanya bernuansa kuah pedas. Olahan ini biasanya menggunakan mie kuning tebal, serta bumbu rempah pilihan khas nusantara yang membuat citarasa kuahnya semakin kental. ', 8000, 'rebus.jpg'),
(36, 'Kopi Susu ', 1, 'Kopi susu, alias caffè latte, hampir sama dengan segelas cappuccino — terbuat dari espresso dan susu kukus. Yang membedakan keduanya adalah perbandingan porsi susu dalam kopi susu yang lebih banyak dibanding cappuccino. Catherine Collins mengatakan, kopi susu (dan cappuccino) yang diracik dengan susu full-fat adalah sumber baik dari protein dan kalsium, yang penting untuk kesehatan tulang.', 6000, 'kopi susu.jpg'),
(37, 'Martabak 2 Telur', 1, 'martabak telur adalah makanan camilan atau lauk-pauk yang biasa dikonsumsi oleh masyarakat Indonesia.  Martabak Telur mengandung energi sebesar 200 kilokalori, protein 8,9 gram, karbohidrat 29,5 gram, lemak 5,1 gram, kalsium 0,06 miligram, fosfor 0 miligram, dan zat besi 1,85 miligram.  Selain itu di dalam Martabak Telur juga terkandung vitamin A sebanyak 160 IU, vitamin B1 0 miligram dan vitamin C 0 miligram.  Hasil tersebut didapat dari melakukan penelitian terhadap 100 gram Martabak Telur, dengan jumlah yang dapat dimakan sebanyak 100 %.', 8000, 'martabak.jpg'),
(38, 'Martabak 3 Telur', 1, 'martabak telur adalah makanan camilan atau lauk-pauk yang biasa dikonsumsi oleh masyarakat Indonesia.  Martabak Telur mengandung energi sebesar 200 kilokalori, protein 8,9 gram, karbohidrat 29,5 gram, lemak 5,1 gram, kalsium 0,06 miligram, fosfor 0 miligram, dan zat besi 1,85 miligram.  Selain itu di dalam Martabak Telur juga terkandung vitamin A sebanyak 160 IU, vitamin B1 0 miligram dan vitamin C 0 miligram.  Hasil tersebut didapat dari melakukan penelitian terhadap 100 gram Martabak Telur, dengan jumlah yang dapat dimakan sebanyak 100 %.', 10000, 'martabak.jpg');


CREATE TABLE `pesan` (
  `id_mejapel` int(11) NOT NULL,
  `id_pesan` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `jumlah_order` int(2) NOT NULL,
  `jenis_bayar` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `pesan` (`id_mejapel`, `id_pesan`, `id_menu`, `jumlah_order`, `jenis_bayar`) VALUES
(13, 9, 0, 17, 'Tunai'),
(7, 47, 6, 1, 'Tunai'),
(7, 48, 8, 1, 'Tunai'),
(7, 49, 3, 2, 'Tunai'),
(4, 84, 6, 5, 'Cash'),
(15, 90, 6, 1, 'Tunai'),
(13, 116, 14, 4, 'Tunai'),
(3, 117, 6, 1, 'Tunai'),
(3, 118, 1, 1, 'Tunai'),
(5, 123, 6, 3, 'Cash');



CREATE TABLE `rekap_struk` (
  `id_rekap` int(11) NOT NULL,
  `id_mejapel` int(3) NOT NULL,
  `id_menu` int(3) DEFAULT NULL,
  `jmlh_order` int(2) DEFAULT NULL,
  `jenis_bayar` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `data_meja`
--
ALTER TABLE `data_meja`
  ADD PRIMARY KEY (`id_mejapel`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `rekap_struk`

ALTER TABLE `rekap_struk`
  ADD PRIMARY KEY (`id_rekap`);


--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_meja`
--
ALTER TABLE `data_meja`
  MODIFY `id_mejapel` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;
--
-- AUTO_INCREMENT for table `rekap_struk`
--
ALTER TABLE `rekap_struk`
  MODIFY `id_rekap` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

  MODIFY `id_rekap` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
