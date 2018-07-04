-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 12 Mei 2018 pada 17.49
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_adopt`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `profil` varchar(100) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `profil`, `nama`, `username`, `password`, `level`) VALUES
(1, 'kucing-project.jpg', 'Yr', 'yr@gmail.com', 'd93591bdf7860e1e4ee2fca799911215', 'admin'),
(2, 'kucing-project.jpg', 'Yr', 'Yr134', '283a85f14ffa6a2336968b38d922b72f', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `adopsi`
--

CREATE TABLE `adopsi` (
  `id` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `aid_user` int(10) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telp` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `aid_hewan` int(10) NOT NULL,
  `image` varchar(50) NOT NULL,
  `jenis_hewan` varchar(20) NOT NULL,
  `ras` varchar(25) NOT NULL,
  `umur` varchar(10) NOT NULL,
  `kelamin` varchar(10) NOT NULL,
  `harga` varchar(10) NOT NULL,
  `kode` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `adopsi`
--

INSERT INTO `adopsi` (`id`, `tanggal`, `aid_user`, `nama_user`, `email`, `telp`, `alamat`, `aid_hewan`, `image`, `jenis_hewan`, `ras`, `umur`, `kelamin`, `harga`, `kode`) VALUES
(4, '2018-02-15', 1, 'Ranti', 'yr134@gmail.com', '098319733', '', 6, '', '3', 'gatau', 'dewasa', 'betina', 'berapa', 'UMrsOFRWLiOY69o'),
(5, '2018-02-15', 1, 'Ranti', 'yr134@gmail.com', '098319733', '', 7, '94123f3632f032fa12afa75c570547f9.jpg', 'Kucing', 'Bulu Tebal', 'bayi', 'jantan', '100000', 'MGZZiDZQcNDrm9v'),
(6, '2018-02-15', 7, 'Ayuu', 'ayu@blah.com', '08103732183', 'Mau tau ? tanya aja', 8, '33d415b08ba39833005fee7ca6eb385a.jpg', 'Kelinci', 'Oryctolagus cuniculus', 'bayi', 'jantan', '25.000', 'cc2STj1tcmqQCos'),
(7, '2018-02-15', 6, 'pipiwww', 'terserah@blah.com', '01939137', 'mau tau ? emang mau ngasi kado ?\r\n', 9, '37fe1d9f6c3dd3c1744cbdd48ba320b9.jpg', 'Kucing', 'Liar', 'dewasa', 'jantan', '100.000', 'ichbSczDNrKW2xw'),
(8, '2018-02-15', 1, 'Ranti', 'yr134@gmail.com', '098319733', '', 10, 'husky.jpg', 'Serigala', 'Salju', 'dewasa', 'jantan', '100.000', '4ko38UQLbJDSh0A'),
(11, '2018-05-11', 9, 'Ranti', 'yr@adop.com', '0826183618', 'Bogor', 12, 'c0b23e4af3e5ea8cfba2bcd21f38715e.jpg', 'Kelinci', 'Oryctolagus cuniculus', 'bayi', 'jantan', '100.000', 'rlld9OAIk9PGXYO');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `cid_user` varchar(10) NOT NULL,
  `cid_hewan` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cart`
--

INSERT INTO `cart` (`id`, `cid_user`, `cid_hewan`) VALUES
(11, '1', 5),
(12, '1', 5),
(13, '1', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hewan`
--

CREATE TABLE `hewan` (
  `id_hewan` int(10) NOT NULL,
  `image` varchar(50) NOT NULL,
  `jenis_hewan` varchar(20) NOT NULL,
  `ras` varchar(25) NOT NULL,
  `umur` enum('bayi','dewasa') NOT NULL,
  `kelamin` enum('jantan','betina') NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hewan`
--

INSERT INTO `hewan` (`id_hewan`, `image`, `jenis_hewan`, `ras`, `umur`, `kelamin`, `deskripsi`, `harga`) VALUES
(1, '220px-Fm_shiba_inu_puppy.jpg', 'Anjing', ' Husky', 'bayi', 'jantan', '<p> 1 . sifat : <br/>\r\n      - Hyperaktif <br/>\r\n      - Pemangsa Kucing<br/>\r\n      - Disiplin<br/>\r\n    2. Cacat tubuh :<br/>\r\n      - Tidak ada </p>', '150.000'),
(2, 'ragdolls.jpg', 'Kucing', 'Ragdoll', 'dewasa', 'betina', '<p> 1 . sifat : <br/>\r\n      - Hyperaktif <br/>\r\n      - Pemangsa Kucing<br/>\r\n      - Disiplin<br/>\r\n    2. Cacat tubuh :<br/>\r\n      - Tidak ada </p>', '100.000'),
(3, '1_7.jpg', 'Kucing', 'Russian Blue', 'dewasa', 'jantan', '<p> 1 . sifat : <br/>\r\n      - Hyperaktif <br/>\r\n      - Pemangsa Kucing<br/>\r\n      - Disiplin<br/>\r\n    2. Cacat tubuh :<br/>\r\n      - Tidak ada </p>', '120.000'),
(4, '1200px-Taka_Shiba.jpg', 'Anjing', 'Shiba Inu', 'dewasa', 'jantan', '<p> 1 . sifat : <br/>\r\n      - Hyperaktif <br/>\r\n      - Pemangsa Kucing<br/>\r\n      - Disiplin<br/>\r\n    2. Cacat tubuh :<br/>\r\n      - Tidak ada </p>', '150.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hewan_jenis`
--

CREATE TABLE `hewan_jenis` (
  `id_jenis` int(10) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `ras` varchar(25) NOT NULL,
  `artikel` text NOT NULL,
  `rawat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hewan_jenis`
--

INSERT INTO `hewan_jenis` (`id_jenis`, `jenis`, `ras`, `artikel`, `rawat`) VALUES
(2, 'Kucing', 'Ragdoll', '<p> Sama halnya dengan kucing persia,kucing ragdoll juga memiliki rambut atau bulu yang lumayan panjang, maka dari itu kebersihan bulunya harus selalu dijaga. Mandikan kucing dengan menggunakan sampo kucing, setelah itu sisir dengan halus bulu kucing agar rapi.<br/>Sama halnya dengan kucing persia,kucing ragdoll juga memiliki rambut atau bulu yang lumayan panjang, maka dari itu kebersihan bulunya harus selalu dijaga. Mandikan kucing dengan menggunakan sampo kucing, setelah itu sisir dengan halus bulu kucing agar rapi.</p>', '<h4> Kebersihan Kandang </h4> <p> kandang kucing harus selalu dibersihkan. Membersihkan kandang kucing bisa menggunakan cairan pembersih yang di jual di toko perlengkapan kucing. Dengan bersihnya kandang memperkecil kucing terjangkit penyakit.</p> <h4> Suhu dan Kelembapan Udara </h4> <p> Kucing ragdoll merupakan salah satu kucing yang sensitive terhadap udara, pastikan udara untuk tempat si kucing tinggal atau bermain dibatas normal yaitu antara 20-24 derajat celcius serta tingkat kelembaban 40%-50%.</p> <h4> Makanan dan Minuman </h4> <p> Bersihkan tempat minum dan makan kucing selalu bersih, usahakan tempat makan dan minum kucing dibersihkan setiap hari. Hal ini untuk menghindari tempat makan atau minum dari bakteri yang bisa menggangu kesehatan kucing. Dan yang harus diperhatikan dalam memberikan air minum ke kucing harus menggunakan air minum yang matang. </p><h4> Kebersihan Tubuh </h4> <p>Sama halnya dengan kucing persia,kucing ragdoll juga memiliki rambut atau bulu yang lumayan panjang, maka dari itu kebersihan bulunya harus selalu dijaga. Mandikan kucing dengan menggunakan sampo kucing, setelah itu sisir dengan halus bulu kucing agar rapi.</p><h4>Vaksin</h4><p>Kucing radgoll harus rutin diberikan vaksin, pemberian vaksin terhadap kucing salah satu kewajiban agar kucing kebal terhadap serangan penyakit.</p>'),
(3, 'Kucing', 'Russian Blue', '<h4> Fisik </h4> <p>Kucing biru rusia memiliki mata berwarna hijau cerah, dua lapisan bulu tebal yang pendek, dan warna bulu abu-abu kebiruan. Bulu pada kucing biru rusia sangat lembut untuk disentuh. Warna biru pada bulunya ini membuat kucing ini terlihat mengkilap. Setiap bercak putih pada bulu atau di atas matanya, akan terlihat tidak bagus jika dalam kontes kucing. </p> <h4> Sifat </h4> <p>Kucing biru rusia adalah kucing yang cerdas, penasaran, dan tenang. Kucing ini dikenal karena keramahannya, tetapi dia adalah kucing yang pemalu dengan orang asing. Kucing biru rusia dapat diajak bermain menjemput, dan sensitif terhadap emosi manusia. Kucing ini lebih menikmati bermain dengan berbagai mainan dan kucing ini adalah kucing yang setia.</p><h4>Pertumbuhan </h4> <p> Kucing biru rusia memiliki harapan hidup rata-rata sekitar 15-20 tahun, beberapa bahkan hidup sampai maksimal 25 tahun, dan memiliki beberapa masalah kesehatan, karena kucing ini cenderung memiliki sedikit atau tidak ada masalah genetik dan tidak rentan terhadap penyakit.[6] Kucing biru rusia adalah kucing berukuran sedang dengan berat rata-rata 3.5-7 kg atau 7.7-15.4 pon ketika telah dewasa. Kucing biru rusia jantan biasanya akan lebih besar dari yang betina. Masa kehamilan kucing biru rusia betina adalah sekitar 65 hari.</p><h4>Termasuk Kucing yang Hypoallergenic </h4> <p> Terkadang ada manusia yang alergi terhadap bulu kucing dikarenakan kucing memiliki protein Fel d 1 (zat alergen) yang terdapat pada kelenjar kulit, air liur, dan air seni. Beberapa ras kucing termasuk russian blue memproduksi zat tersebut lebih sedikit sehingga sangat minim menyebabkan alergi pada manusia (hypoallergenic). Sehingga anda bisa lebih leluasa melakukan kontak langsung atau merawatnya tak perlu khawatir beresiko alergi karena bulu kucing.</p> <h4> Mandiri dan Disiplin</h4><p> Karakter kucing russian blue berbeda dengan kucing lainnya, kucing ini memiliki rutinitas yang disiplin, mereka suka diberi makan, bermain, dan diberi waktu untuk tidur di jam yang sama setiap hari nya. Karena itu, anda harus tepat waktu dalam menjalankan perawatan harian, jangan sampai nafsu makan nya berkurang atau tidak semangat bermain karena anda tidak melakukan rutinitas sesuai jadwal rutin nya.</p>', '<h4> Kesehatan </h4><p>Kucing russian blue termasuk kucing jenis kucing yang paling sehat, tidak rentan terkena penyakit, juga tidak membawa kecacatan dalam gen nya. Meskipun termasuk kucing dengan daya tahan tubuh paling kuat dibandingkan jenis kucing lain, anda tetap harus menjaga kesehatannya yaitu dengan cara memberikan makanan bergizi, kandang yang bersih, dan perawatan rutin. Periksa setiap hari untuk memastikan tubuhnya sehat.</p><h4> Tempat Tinggal </h4> <p> Tempatkan di kandang yang bersih, terlindung dari panas dan hujan. Bersihkan kandang setidaknya sekali sehari untuk mencegah kandang lembab, berbau, atau berdebu. Bersihkan pula pasir di box tempat kotoran nya, ganti setiap hari agar tidak menyebabkan bakteri berkembang. Suhu dan kelembapan berpengaruh pada bulunya, berikan ruangan dengan ventilasi cukup dan terkena cahaya matahari.</p> <h4> Cara Memandikannya </h4> <p> Kucing russian blue boleh dimandikan ketika umurnya lebih dari 3 bulan. Mandikan kucing russian blue anda 1 sd 2 minggu sekali. Kucing ini biasanya mandi dengan cara menjilati tubuhnya, tetapi hal itu tidak cukup untuk mencegahnya dari bakteri, jamur, atau kutu, sebab itu perlu untuk memandikannya dengan cara sebagai berikut : <br/> 1. Siram air hangat merata ke seluruh tubuhnya, lakukan perlahan agar tidak air tidak masuk ke telinga, mata atau hidung. <br/> 2. Beri shampo khusus kucing, pijat lembut agar meresap ke dalam bulunya. <br/> 3.  Bilas sampai bersih dan keringkan dengan handuk kering. <br/>  4. Beri baby oil secukupnya agar tubuhnya hangat dan wangi </p> <h4> Makan dan Minum </h4> <p> Berikan makanan khusus kucing berprotein tinggi yang bisa anda dapatkan di swalayan atau pet shop dengan porsi tepat dan seimbang sesuai umurnya, kucing russian blue dewasa sangat suka makan sehingga rentan kegemukan. Jangan lupa bersihkan tempat makanannya rutin setiap hari dengan air hangat dan sabun agar tidak ada sisa makanan di dalamnya. <br/> Sediakan air minum bersih dari air matang atau air mineral, tepatkan di wadah yang bersih pula, ganti airnya secara rutin agar terhindar dari bakteri dan jentik nyamuk. Tambahkan sedikit sari makanan di dalamnya agar lebih bersemangat meminumnya.</p> <h4> Vaksin </h4> <p> Vaksin penting untuk mencegah kucing russian blue dari berbagai penyakit, walaupun mereka tergolong jenis kucing yang paling sehat, pencegahan tetap harus dilakukan. Vaksin pertama diberikan oleh dokter hewan diberikan ketika kucing russian blue berumur 2 bulan, vaksin kedua 1 bulan setelah vaksin pertama, selanjutnya diberikan setahun sekali. Vitamin juga perlu untuk daya tahan tubuhnya, konsultasikan pada dokter hewan untuk mendapat vitamin terbaik sesuai umur kucing anda.</p>'),
(4, 'Anjing', ' Husky', '<p> Siberian Husky (bahasa Rusia: Ð¡Ð¸Ð±Ð¸Ñ€ÑÐºÐ¸Ð¹ Ñ…Ð°ÑÐºÐ¸, Sibirskiy Haski) termasuk dalam jenis anjing ras berukuran sedang dan berbulu tebal (double coat). Anjing ras ini tidak ganas, bahkan terlalu baik kepada orang asing yang bukan pemiliknya. Ras ini sekilas mirip serigala, mungkin juga diperkirakan terjadi karena hasil persilangan alam.\r\n\r\nAslinya ras ini dikembangkan oleh masyarakat Chukchi di daerah Asia Timur Laut sebagai anjing penarik kereta untuk membawa beban diatas salju. Anjing ini dapat melolong seperti layaknya serigala. Tahun 1909, untuk pertama kalinya anjing jenis ini dibawa ke Alaska untuk bertanding dalam pertandingan jarak jauh seluruh Alaska. Dan disanalah ketahanan tubuh dan kecepatan lari anjing dari Siberia ini mulai dikenal. </p>\r\n<p>     Siberian Husky memiliki sifat yang cukup menyenangkan bagi manusia. Anjing jenis ini merupakan anjing yang tidak bisa diam dan sangat aktif. Watak yang lembut dan bersahabat ini adalah warisan masa lalu, karena masyarakat Chukchi memelihara anjing-anjing ini dengan penuh perhatian dan kasih sayang. Mereka merumahkan anjing-anjing ini dalam perlindungan keluarga dan mendorong anak-anak mereka untuk bermain bersamanya. Sekarang ini, sangat mempesona untuk mengamati bagaimana Siberian Husky dan anak-anak saling memiliki satu sama lain. Siberian Husky sangat waspada, gemar, menyenangkan, aktif dan sangat mudah menyesuaikan diri. Tingkat kecerdasannya telah dibuktikan, tetapi jiwa merdekanya setiap waktu menantang kecerdikan manusia. Kemampuan serba bisanya membuat anjing jenis ini menjadi teman yang sangat menyenangkan bagi manusia.</p><p> Husky adalah anjing pemangsa.[71] Seekor husky bisa menganggap kucing Anda sebagai mangsanya. Apabila Anda memiliki kucing, Anda sebaiknya memelihara anjing yang tidak memiliki insting pemangsa yang tinggi.</p><p> Husky bukanlah anjing penjaga.[72] Sebaliknya, seekor husky bisa jadi akan menyapa orang asing atau penyusup dengan bersemangat. Apabila Anda menginginkan anjing penjaga untuk melindungi rumah, diri Anda, dan keluarga Anda dari bahaya penyusup, cobalah memelihara peranakan anjing lainnya seperti anjing gembala Jerman atau Doberman pinscher.</p><p> Husky dapat bersifat merusak apabila dibiarkan sendirian tanpa ada hal yang bisa membuat mereka sibuk atau terstimulasi secara mental.[73] Berikan husky Anda mainan dalam jumlah banyak apabila Anda sedang tidak di rumah, dan awasi ia secara saksama.</p>', '<h4> Ajak Sosiolisasi </h4> <p>     awa husky yang masih kecil bersosialisasi. Sosialisasi mengajari anak anjing cara berinteraksi yang baik dengan berbagai aspek lingkungannya (orang, anjing lainnya, dsb.) serta akan membantunya tumbuh menjadi anjing dewasa yang percaya diri dan berwatak baik. Beri anak anjing Anda waktu untuk berada di sekitar orang-orang, suara, dan pemandangan yang bervariasi</p> <h4> Ajak ke Kelas Kepatuhan Khusus Husky </h4> <p> anjing yang sangat mandiri dan cerdas. Namun, husky juga bisa bersifat keras kepala dan membuatnya sulit dilatih. Kelas kepatuhan merupakan wahana ideal untuk melatih husky </p> <h4> Latih husky Anda dengan rantai anjing.</h4><p>Apabila Anda membiarkan rantainya terlepas, husky akan kabur untuk berlari atau mengejar sesuatu yang berada sangat jauh.Walaupun husky mungkin mencintai Anda sebagai majikannya, apabila mendapatkan kesempatan, kesukaannya pada berlari dan mengejar (dan mungkin instingnya sebagai pemangsa) akan mengambil alih. Oleh karena itu, melatih husky dengan rantai anjing merupakan hal yang penting untuk dilakukan. </p><h4> Makanan dan Minuman </h4> <p> Pada awalnya, husky dikembangbiakkan untuk bertahan hidup dengan sejumlah kecil makanan. Oleh karena itu, husky tidak perlu mengonsumsi terlalu banyak kalori untuk tetap sehat dan memiliki energi yang dibutuhkan untuk bermain dan beraktivitas. <br/> Beri makan husky Anda antara sekali atau dua kali sehari dan hindari beraktivitas selama sekurang-kurangnya 90 menit setelah makan.<br/> </p>'),
(5, 'Anjing', 'Shiba Inu', '<p> Shiba Inu merupakan salah satu dari 7 jenis anjing ras unggulan (sekarang hanya tinggal 6 jenis) yang ditunjuk sebagai pusaka nasional Jepang (tennen kinen butsu) sejak 16 Desember 1936. Di antara 6 jenis anjing ras unggulan, Shiba Inu merupakan satu-satunya tipe anjing berukuran badan sedang sehingga populer sebagai anjing peliharaan. Menurut data mutakhir Perkumpulan Pelestari Anjing Jepang, dari total 6 jenis anjing ras Jepang yang dipelihara sekitar 80% adalah Shiba Inu. </p> <p> Shiba Inu memiliki bulu berwarna cokelat kemerah-merahan, walaupun ada juga Shiba Inu dengan bulu berwarna hitam, dengan lapisan bulu sebelah dalam berwarna coklat muda hingga abu-abu. Bulu pendek terdiri dari dua lapis, lapis atas yang kasar dan lapis dalam yang tebal dan halus. Lapis dalam rontok dan digantikan bulu baru sebanyak dua hingga tiga kali setahun. Kuping berdiri dan ekor melengkung. </p> <p> Pada umumnya Shiba Inu cocok dijadikan anjing penjaga karena pintar dan berani, bersikap sangat awas, tidak mudah menjadi akrab apalagi jinak terhadap orang tidak dikenal, dan sangat setia terhadap majikan. Shiba Inu sejak zaman dulu digunakan sebagai anjing teman berburu hewan kecil di daerah pegunungan, lembah dan kaki gunung, tapi sekarang hanya sebagai anjing peliharaan.</p> <p> Shiba Inu ukuran kecil disebut Mame Shiba (Shiba kecil). Ukuran tubuh Mame Shiba lebih kecil dibandingkan Shiba Inu biasa. Mame Shiba cocok sebagai anjing peliharaan karena tetap mempertahankan sifat-sifat asli Shiba Inu. Walaupun demikian, Mame Shiba sering bersifat lebih bersahabat terhadap orang yang tidak dikenal. Selain itu, Mame Shiba hanya merupakan sebutan untuk Shiba Inu ukuran kecil dan bukan jenis anjing baru. </p>', '<h4> Nutrisi yang cukup </h4> <p> anak anjing juga perlu mendapatkan nutrisi yang seimbang dari asupan makanan yang ia konsumsi setiap hari. Dikarenakan masih dalam masa pertumbuhan menuju dewasa, anak anjing sangat memerlukan zat-zat gizi untuk mensupport pertumbuhan dan gizinya seperti asupan protein, mineral, lemak  dan vitamin dalam jumlah yang benar. Memberikan makan anak anjing sebaiknya dalam bentuk konsentrat agar mudah dicerna dan baik untuk sistem pencernakannya</p><h4> ajarkan Mengrooming </h4><p> Meng-grooming anakan anjing di usia dini secara tidak langsung akan mengajarkan dia bagaimana cara untuk tenang bahkan ketika ada orang lain yang melintas (selain Anda). Grooming anjing di usia dini akan membuat anjing menjadi jinak hingga ia dewasa..</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pin` varchar(50) NOT NULL,
  `tlp` varchar(50) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `pin`, `tlp`, `alamat`) VALUES
(1, 'Ranti', 'yr134@gmail.com', '02522a2b2726fb0a03bb19f2d8d9524d', '098319733', ''),
(2, 'Ranti', 'yog134@gmail.com', 'd93591bdf7860e1e4ee2fca799911215', '081234561701', ''),
(3, 'arinal', 'arinal@blabala.com', 'd93591bdf7860e1e4ee2fca799911215', '0830319793', 'blabalba'),
(4, 'Ranti', 'yog134@gmail.com', 'd93591bdf7860e1e4ee2fca799911215', '081234561701', ''),
(5, 'Amuriiiiiiii', 'amuri@blah.com', 'd93591bdf7860e1e4ee2fca799911215', '08372819102', 'Bogor'),
(6, 'pipiwww', 'terserah@blah.com', 'd93591bdf7860e1e4ee2fca799911215', '01939137', 'mau tau ? emang mau ngasi kado ?\r\n'),
(7, 'Ayuu', 'ayu@blah.com', 'd93591bdf7860e1e4ee2fca799911215', '08103732183', 'Mau tau ? tanya aja'),
(8, 'babba', 'baba@blah.com', 'd93591bdf7860e1e4ee2fca799911215', '08927931316', 'Bogorgorgor'),
(9, 'Ranti', 'yr@adop.com', '3f94e8774be14358a45e2dda6a60216a', '0826183618', 'Bogor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adopsi`
--
ALTER TABLE `adopsi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hewan`
--
ALTER TABLE `hewan`
  ADD PRIMARY KEY (`id_hewan`);

--
-- Indexes for table `hewan_jenis`
--
ALTER TABLE `hewan_jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `adopsi`
--
ALTER TABLE `adopsi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `hewan`
--
ALTER TABLE `hewan`
  MODIFY `id_hewan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `hewan_jenis`
--
ALTER TABLE `hewan_jenis`
  MODIFY `id_jenis` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
