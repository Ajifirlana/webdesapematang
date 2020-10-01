-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 11, 2020 at 03:53 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbdesapematang`
--

-- --------------------------------------------------------

--
-- Table structure for table `aparatur`
--

DROP TABLE IF EXISTS `aparatur`;
CREATE TABLE IF NOT EXISTS `aparatur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `created_at` varchar(100) NOT NULL,
  `updated_at` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aparatur`
--

INSERT INTO `aparatur` (`id`, `nama`, `jabatan`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Amrizal', 'Kepala Desa', '\r\ndownload (1).png', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

DROP TABLE IF EXISTS `berita`;
CREATE TABLE IF NOT EXISTS `berita` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) NOT NULL,
  `isi` varchar(10000) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `created_at` varchar(100) NOT NULL,
  `updated_at` varchar(100) NOT NULL,
  `create_by` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `isi`, `image`, `created_at`, `updated_at`, `create_by`) VALUES
(20, 'Pelatihan Jurnalistik 2020', '30 Oktober 2019 diadakan pelatihan jurnalistik di Gedung LPSE Pemkab Tuban, pelatihan tersebut di ikuti oleh 17 peserta yang merupakan admin website Desa dan juga blogger. Narasumber pelatihan adalah Ibu Nur Hidayah seorang penulis buku yang sudah beberapa kali lintas Negara. Beliau mengajarkan bagaimana cara menulis berita yang benar serta menarik minat pembaca, beliau juga menjelaskan beberapa kesalahan yang sering dilakukan penulis berita. Selain itu jika ingin mendapatkan bimbingan belajar lebih lanjut.', 'sedang_1572408761_WhatsApp Image 2019-10-30 at 10.42.49 AM.jpeg', '2019-11-19 07:56:23', '2020-01-17 05:52:30', ''),
(21, '   Rehab Lapangan Sepak Bola di desa pematang lima suku', 'Rehab Lapangan Sepak Bola & Tempat Wisata, Warga Desa Rambutan Masam, Lapor Inspektorat Batanghari- Sejumlah warga dari Desa Rambutan Masam, Kecamatan Muara Tembesi, Kabupaten Batanghari, Jumat (11/7/2019), mendatangi Kantor Inspektorat Kabupaten Batanghari.Kedatangan mereka tersebut, terkait perihal pembangunan di Desa Rambutan Masam. Seperti rehab lapangan sepak bola yang mengunakan Dana Desa (DD) tahun 2018 dan pembangunan desa wisata yang ada di desa tersebut.Artikel ini telah tayang di Tribunjambi.com dengan judul Rehab Lapangan Sepak Bola & Tempat Wisata, Warga Desa Rambutan Masam, Lapor Inspektorat Batanghari,', 'rehab-lapangan-sepak-bola-tempat-wisata-warga-desa-rambutan-masam-lapor-inspektorat-batanghari.jpg', '2019-11-19 07:59:04', '2020-03-24 07:29:41', ''),
(22, 'Rumah Papan di Pematang Gadung Terbakar', 'Sebuah rumah semi permanen di Desa Pematang Gadung, Kecamatan Mersam, Kabupaten Batanghari, Rabu (21/2) malam, hangus terbakar.\r\nRumah yang diketahui milik Muhammad Saleh (79) itu terbakar, diduga konsleting listrik. Namun, tidak ada korban jiwa dalam musibah itu.\r\nDia mengatakan, tak ada yang tersisa dari kebakaran dari rumah yang dihuni oleh dua orang kepala keluarga itu.\r\n\"Kerugian ditaksir mencapai Rp 80 juta. Emas 4 suku, senilai Rp 20 juta dan surat-surat berharga lainnya ikut hangus,\" jelasnya', '21022019_rumah-terbakar.jpg', '2019-11-19 08:03:59', '2020-03-24 04:40:06', ''),
(23, ' Rapat Penting', ' Rapat Penambahan fasilitas untuk kebutuhan desa pematang lima suku', 'rehab-lapangan-sepak-bola-tempat-wisata-warga-desa-rambutan-masam-lapor-inspektorat-batanghari.jpg', '2019-11-19 10:01:27', '2019-11-28 03:45:31', ''),
(25, 'Sultan Taha di Hulu', 'Belanda tidak berusaha menuntut Sultan Taha. Mereka bahkan sama sekali tidak berusaha masuk atau mencampuri urusan di daerah pedalaman. Mereka sudah puas dapat menguasai daerah pesisir.\r\nDi pedalaman, di dekat muara Soengei Tembesi, Sultan Taha tetap mengejawantahkan kekuasaannya dan para kepala adat setempat hanya mematuhi perintahnya saja, sesuai dengan kebiasaan Melayu.\r\n\r\nHal ini tidak dipahami oleh pegawai-pegawai Belanda yang datang kemudian di Djambi, kecuali bila diasumsikan bahwa selama situasi masih dapat diterima, mereka menganggap tidak perlu mengganggu pemerintah (Hindia-Belanda) dengan keluhan-keluhan (dari lapangan).\r\n\r\nDalam Laporan-laporan Pemerintah (Regeringsverslagen) jarang ada yang menyebut-nyebut nama Sultan Taha. Yang ada adalah tulisan bahwa pada tahun 1860, sultan yang sudah diturunkan dari tahtanya, masih saja berkuasa di pedalaman dan menggunakan pengaruhnya untuk menghalangi transportasi ternak, gading dan komoditi dagang lainnya dari daerah Djambi ke Rawas', 'kj-gambar-20180324_JeHGV4.jpg', '2019-11-19 12:02:34', '2019-11-19 12:02:34', ''),
(26, ' Detik-detik 4 Prajurit TNI Dikeroyok dan Ditodong Senpi Rakitan di Jambi', 'Empat anggota TNI korban pengeroyokan anggota Serikat Mandiri Batanghari (SMB) di bawah pimpinan Muslim, dihadirkan oleh Jaksa Penuntut Umum (JPU) Kejaksaan Tinggi (Kejati) Jambi dalam sidang yang digelar di Pengadilan Negeri (PN) Jambi, Rabu (20/11/2019).\r\n\r\nKeempat prajurit TNI itu adalah Sertu Zendriawan, Kopda Herliansyah, Koptu Zulhijaz, dan Pratu Riski Pratama. Keterangan saksi diambil untuk terdakwa Muslim, Yohanes, Usman, Dani, dan Bagus Eko.\r\n\r\nKepada majelis hakim, saksi Herliansyah mengungkapkan, ia dan tiga anggota TNI lainnya sedang bertugas memantau Kebakaran Hutan dan Lahan (Karhutla) di Kabupaten Tanjung Jabung Barat (Tanjabbar). Namun, mereka justru mengalami tindak kekerasan.\r\n\r\nMenurut Herliansyah, kekerasan terjadi ketika aksi kedua kelompok SMB di Distrik VIII PT WKS. Aksi pertama terjadi sekitar pukul 11.30 WIB, Muslim bersama puluhan anggotanya sempat diredam. Sehingga Muslim dan sebagian anggotanya membubarkan diri dari lokasi.\r\n', 'o_1av9ng9ej2k3s0n12j8qkp1uvka.jpg', '2019-11-27 10:13:49', '2020-01-17 05:57:39', ''),
(34, 'Update Corona 23 Maret: 579 Kasus, 49 Meninggal, 30 Sembuh', 'Jumlah pasien positif terinfeksi Virus Corona (Covid-19) kembali  Korban yang meninggal pun meningkat menjadi 49 orang, dengan jumlah yang sembuh mencapai 30 pasien.\r\n\r\n\"Jumlah kasus bertambah 65 dari data kemarin. Sehingga total kasus hari ini menjadi 579 orang,\" ucap juru bicara pemerintah Achmad Yurianto saat konferensi pers di Jakarta yang disiarkan langsung, Senin (23/3).Jumlah ini meningkat dibandingkan dengan  48 Meninggal, dan 29 Sembuh.', 'corona.jpeg', '2020-03-24 08:21:56', '2020-03-24 08:21:56', ''),
(35, ' Pemkab Batang Hari berikan Bantuan Batang Hari Tunai (BBT) untuk 27.407 KK', 'MUARABULIAN - Bupati Batanghari Ir. Syahirsah SY akan memberikan Bantuan Batanghari Tunai (BBT) kepada 27.407 Kepala Keluarga (KK) yang tersebar di delapan kecamatan.\r\n\r\nBupati Batanghari Ir. H. Syahirsah SY mengatakan, ini dilakukan sebagai bentuk kontribusi pemerintah daerah kepada masyarakat yang terkena dampak ekonomi dengan adanya wabah Covid-19.\r\n\r\nDikatakannya, 27.407 KK yang akan menerima bantuan tersebut di luar dari Bantuan Sosial (Bansos) dari pusat. Bantuan tersebut akan diberikan selama tiga bulan terhitung Maret hingga Mei 2020.\r\n\r\n\"Dinas Sosial telah mendata, didapatlah dengan jumlah sekitar 27 ribu KK. Satu KK menerima 150 ribu per bulan. Ini dimulai dari Maret. Artinya bulan Maret akan direalisasikan 50 persen karena terhitung tanggal 15 Maret,\" kata Syahirsah, Rabu (1/4/2020).\r\n\r\nTotal dana yang disiapkan oleh Pemkab Batanghari untuk BBT tersebut mencapai Rp.7,5 miliar per bulan, yang didapat dari dana perjalanan dinas setiap SKPD dan kepala daerah tahun 2020.\r\n\r\n\"Kita siapkan 7,5 miliar dari anggaran empat item yakni perjalanan dinas, Bintek, ATK, dan cetak,\" jelasnya.\r\n\r\nDikatakannya lagi, kriteria KK yang menerima BBT tersebut yakni buruh tani karet, pedagang asongan, dan UMKM.\r\n\r\n\"Yang jelas buruh tani karet karena pabrik karet sudah tutup semua, kemudian pedagang asongan juga. Nah untuk proses penyalurannya teknisnya pihak Bank Jambi nantinya karena tidak boleh ada keramaian,\" bebernya.\r\n\r\n\"Dan tidak menutup kemungkinan bantuan BBT akan ditambah lagi jika situasi lebih genting,\" pungkasnya.', '1389656448_521777025197999_8726155630185807872_n.jpg', '2020-04-09 07:18:58', '2020-04-09 07:21:54', '');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

DROP TABLE IF EXISTS `galeri`;
CREATE TABLE IF NOT EXISTS `galeri` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `caption` varchar(1000) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `image` varchar(1000) DEFAULT NULL,
  `updated_at` varchar(100) NOT NULL,
  `created_at` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `caption`, `jabatan`, `image`, `updated_at`, `created_at`) VALUES
(3, ' Pelantikan Anggota BPD Desa Pematang Lima Suku 2019-2025', 'Kepala Desa', 'download (1).png', '2019-12-09 08:33:58', '2019-11-27 08:52:40'),
(4, 'Upacara Peringatan Hari Lahir Pancasila Ke 74 Tahun 2019 Kecamatan Muara Tembesi', 'Kepala Dusun', 'download (1).png', '2019-12-09 08:33:38', '2019-12-02 02:32:11'),
(8, ' Kunjungan Bapak Bupati Batanghari di Kecamatan Muara Tembesi', '', 'sedang_1572408761_WhatsApp Image 2019-10-30 at 10.42.49 AM.jpeg', '2020-05-11 02:46:43', '2019-12-09 06:19:58'),
(10, 'Kepala Desa Pematang Lima Suku Resmi Membuka Pelatihan Miniatur APE', '', '20c.jpg', '2020-02-14 03:27:33', '2020-02-14 03:27:33'),
(11, 'Waspada Covid 19', '', 'corona.jpeg', '2020-04-09 04:40:20', '2020-04-09 04:40:20');

-- --------------------------------------------------------

--
-- Table structure for table `halaman`
--

DROP TABLE IF EXISTS `halaman`;
CREATE TABLE IF NOT EXISTS `halaman` (
  `id_halaman` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(250) NOT NULL,
  `isi` text NOT NULL,
  `created_at` datetime NOT NULL,
  `create_by` varchar(60) NOT NULL,
  `updated_at` datetime NOT NULL,
  `update_by` varchar(60) NOT NULL,
  `uuid` varchar(120) NOT NULL,
  PRIMARY KEY (`id_halaman`) USING BTREE,
  KEY `uuid_index` (`uuid`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `halaman`
--

INSERT INTO `halaman` (`id_halaman`, `judul`, `isi`, `created_at`, `create_by`, `updated_at`, `update_by`, `uuid`) VALUES
(6, 'Profil Wilayah Desa', '<p>Data Masih Kosong</p>', '2019-01-28 23:58:36', 'inspektorat', '2019-12-16 09:44:14', 'ngadmin', 'ec32ffb6-9b77-32ff-993b-b4a249598576'),
(7, 'Profil Potensi Desa', '<p><img alt=\"\" height=\"485\" src=\"http://batangharikab.go.id/bat/upload/gambar/\" width=\"809\" /></p>', '2019-01-28 23:59:03', 'inspektorat', '2019-03-12 09:15:35', 'ngadmin', '7da53d67-e6a7-30f1-ae98-b8299a8a3ee4'),
(8, 'Program dan Kegiatan', '<p><img alt=\"\" height=\"485\" src=\"http://batangharikab.go.id/bat/upload/gambar/\" width=\"809\" /></p>', '2019-01-28 23:59:35', 'inspektorat', '2019-03-14 11:34:57', 'administrator', 'b102167d-7759-3813-9418-5d39e3fa714b'),
(17, 'Sejarah Desa', '<p>Sejarah Desa (<strong><em>sedang dipersiapkan datanya oleh operator website desa, segera hubungi operetor website desa jika belum terisi datanya</em></strong>)</p>', '2019-02-28 08:12:20', 'administrator', '2019-12-16 09:41:27', 'ngadmin', '0e0d6a71-7d14-3e01-97ab-6d6e1e4fa8a8'),
(18, 'Kesehatan', '<p>Bidang Kesehatan</p>', '2019-03-01 10:01:51', 'administrator', '2019-03-12 08:23:50', 'ngadmin', 'f0454083-ab3a-3e09-8059-fe060bb5e2bc'),
(19, 'Pendidikan', '<p>Bidang Pendidikan</p>', '2019-03-12 08:24:09', 'ngadmin', '2019-03-12 08:24:40', 'ngadmin', '346b37eb-680e-3af1-8856-45677340f046'),
(20, 'Keagamaan', '<p>Bidang Keagamaan</p>', '2019-03-12 08:25:00', 'ngadmin', '2019-03-12 08:25:00', 'ngadmin', 'e3e4a9f4-3f4f-356c-9728-fae0054cb9f4'),
(23, 'Gallery Video', '<p><iframe frameborder=\"0\" height=\"512\" src=\"https://www.youtube.com/embed/videoseries?list=UUVYfAtl5KGKH8EPwQENU_0g\" width=\"100%\"></iframe></p>', '2019-03-13 22:26:34', 'administrator', '2019-03-14 11:08:02', 'ngadmin', '7ea804f7-7597-34d9-89db-a74d836b69aa'),
(24, 'PENGUMUMAN', '<p>Pengumuman Tentang Desa Pematang Lima Suku</p>', '2019-03-13 22:30:22', 'administrator', '2019-03-13 22:30:22', 'administrator', 'bd38b9aa-ae41-3918-adbe-dc4e488a8ef3'),
(25, 'Artikel', '<p>Artikel Tentang Desa Pematang Lima Suku</p>', '2019-03-13 22:30:39', 'administrator', '2019-03-13 22:30:39', 'administrator', 'a207f5a9-333c-3d90-9f0a-e92eb3bfc9ec'),
(26, 'Berita', '<p>Berita Desa Pematang Lima Suku</p>', '2019-03-13 22:32:22', 'administrator', '2019-03-13 22:32:22', 'administrator', '0d996a4c-f598-3267-889c-cdc6fcd04d5b'),
(27, 'BPD', '<p>ARTIKEL</p>', '2019-12-13 14:43:33', 'ngadmin', '2019-12-13 14:43:33', 'ngadmin', 'f2a78e7d-6614-3c38-9a66-3a450eb6bc9e'),
(28, 'LPMD', '<p>LPMD ISI</p>', '2019-12-13 14:45:49', 'ngadmin', '2019-12-13 14:47:36', 'ngadmin', '0ab2d1c3-faf6-3eac-9f3b-2d4864bd97c1'),
(29, 'PKK', '<p>Struktur Kepengurusan PKK (<strong><em>sedang dipersiapkan datanya oleh operator website desa, segera hubungi operetor website desa jika belum terisi datanya</em></strong>)</p>', '2019-12-13 14:48:40', 'ngadmin', '2019-12-16 10:06:18', 'ngadmin', 'a3d668f9-cc35-3fcc-9fe1-b63b8cf88c25'),
(30, 'KARANG TARUNA', '<p>ISI&nbsp;KARANG TARUNA</p>', '2019-12-13 14:49:55', 'ngadmin', '2019-12-13 14:49:55', 'ngadmin', '4e395391-8afe-34f9-8f0a-c7f2644f39d6'),
(31, 'Kantibmas', '<p>Isi&nbsp;Kantibmas</p>', '2019-12-13 14:54:40', 'ngadmin', '2019-12-13 14:54:40', 'ngadmin', '1719b452-b4bc-33eb-b53d-beaed3011e32'),
(32, 'Pertanian', '<p>isi&nbsp;Pertanian</p>', '2019-12-13 14:55:02', 'ngadmin', '2019-12-13 14:55:02', 'ngadmin', 'e2783ef2-a944-3d51-a74d-dbf6d92f178f'),
(33, 'Pengantar KK', '<p>Pengantar KK</p>', '2019-12-13 14:56:50', 'ngadmin', '2019-12-13 14:56:50', 'ngadmin', '557e5d69-dd73-34d4-92b9-255d7280717e'),
(34, 'Pengantar KTP-EL', '<p>Pengantar KTP-EL</p>', '2019-12-13 14:57:12', 'ngadmin', '2019-12-13 14:57:12', 'ngadmin', 'f98fc09b-72d7-33b3-a231-e4f62329cd71'),
(35, 'Pengantar SKCK', '<p>Pengantar SKCK</p>', '2019-12-13 14:57:33', 'ngadmin', '2019-12-13 14:57:33', 'ngadmin', '71b5e676-a9a3-3f45-aea8-eaede0bf9050'),
(36, 'Pengantar KIA', '<p>Pengantar KIA</p>', '2019-12-13 14:57:53', 'ngadmin', '2019-12-13 14:57:53', 'ngadmin', 'c5d6d200-668b-39d3-89ce-43da4182bc1a'),
(37, 'Pengantar Akta Kelahiran', '<p>Pengantar Akta Kelahiran</p>', '2019-12-13 14:58:21', 'ngadmin', '2019-12-13 14:58:21', 'ngadmin', '724f12ab-2e20-3106-84c3-806052cadcd7'),
(38, 'Pengantar Akta Kematian', '<p>Pengantar Akta Kematian</p>', '2019-12-13 14:58:41', 'ngadmin', '2019-12-13 14:58:41', 'ngadmin', '54d9d367-67f7-35ae-8b41-ea2d7dd860b2'),
(39, 'Pengantar Pindah Masuk Penduduk', '<p>Pengantar Pindah Masuk Penduduk</p>', '2019-12-13 14:59:09', 'ngadmin', '2019-12-13 14:59:09', 'ngadmin', '99443919-75d5-373a-888e-9244f0671a13'),
(40, 'Pengantar SKTM', '<p>Pengantar SKTM</p>', '2019-12-13 14:59:29', 'ngadmin', '2019-12-13 14:59:29', 'ngadmin', '4377bff2-59f0-3e4c-aa9a-ac15a1175efb'),
(41, 'Pengantar Nikah', '<p>Pengantar Nikah</p>', '2019-12-13 14:59:52', 'ngadmin', '2019-12-13 14:59:52', 'ngadmin', '9432fd82-6f28-3294-9e1e-13b1ba2c6f2b'),
(42, 'Tentang Kami', '<p>Tentang Kami</p>', '2019-12-13 15:43:12', 'ngadmin', '2019-12-13 15:43:12', 'ngadmin', '225c54b0-4d8d-3b58-95e8-56b6e9ba43ac'),
(43, 'Visi & Misi', '<p>Visi dan Misi Desa (<strong><em>sedang dipersiapkan datanya oleh operator website desa, segera hubungi operetor website desa jika belum terisi datanya</em></strong>)</p>', '2019-12-16 09:39:53', 'ngadmin', '2019-12-16 09:39:53', 'ngadmin', '370217b6-6d04-32bf-b7c9-0532a30da930'),
(44, 'Struktur Organisasi Desa', '<p><img alt=\"\" src=\"../upload/media/1576465236335567.png\" width=\"850px\" /></p>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<h2><strong>Struktur Organisasi Perangkat Desa</strong></h2>\r\n\r\n<p><strong>(<em>sedang dipersiapkan datanya oleh operator website desa, segera hubungi operetor website desa jika belum terisi datanya</em>)</strong></p>\r\n\r\n<p><strong>Susunan Organisasi Pemerintah Desa (Nama Desa)</strong><br />\r\n<strong>Kecamatan (Nama Kecamatan) Kabupaten Batang Hari</strong></p>\r\n\r\n<p>Kepala Desa: Ganti Nama Kepala Desa<br />\r\nSekretaris Desa:&nbsp;Ganti Nama Sekretaris Desa<br />\r\nKepala Urusan Keuangan : Ganti Nama Kaur Keuangan<br />\r\nKepala Urusan&nbsp;Perencanaan : Ganti Nama Kaur Perencanaan<br />\r\nKepala Urusan&nbsp;Tata Usaha &amp; Umum : Ganti Nama Kaur TU dan Umum<br />\r\nKepala Seksi&nbsp;Pemerintahan : Ganti Nama Kasi Pemerintahan<br />\r\nKepala Seksi&nbsp;Kesejahteraan : Ganti Nama Kasi Kesejahteraan<br />\r\nKepala Seksi&nbsp;Pelayanan : Ganti Nama Kasi Pelayanan<br />\r\nKepala Dusun A : Ganti Nama Kepala Dusun A<br />\r\nKepala Dusun B : Ganti Nama Kepala Dusun B<br />\r\nKepala Dusun C : Ganti Nama Kepala Dusun C</p>', '2019-12-16 09:47:02', 'ngadmin', '2019-12-16 10:04:01', 'ngadmin', '61ac3636-d7b9-32ed-8472-a9dc7a5e69ed');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_induk` int(11) NOT NULL,
  `nama` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `icon` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `id_induk`, `nama`, `icon`, `url`, `created_at`) VALUES
(1, 0, 'Profil', '0', '\r\n', ''),
(2, 0, 'Layanan', '', '', ''),
(3, 3, 'Area', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tree_menu`
--

DROP TABLE IF EXISTS `tree_menu`;
CREATE TABLE IF NOT EXISTS `tree_menu` (
  `id_node` varchar(120) NOT NULL,
  `id_induk` varchar(120) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `tipe` enum('direktori','page','url','root') DEFAULT NULL,
  `id_halaman` int(12) DEFAULT NULL COMMENT 'Id Halaman tbl Halaman',
  `url` varchar(255) DEFAULT NULL,
  `urutan` int(12) DEFAULT NULL,
  PRIMARY KEY (`id_node`) USING BTREE,
  KEY `id_induk` (`id_induk`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tree_menu`
--

INSERT INTO `tree_menu` (`id_node`, `id_induk`, `judul`, `tipe`, `id_halaman`, `url`, `urutan`) VALUES
('154838335427737', 'root', 'Profil', 'direktori', NULL, NULL, NULL),
('1548410038029782', '154838335427737', 'Sejarah Desa', 'page', 17, NULL, NULL),
('1548410070112851', '154838335427737', 'Profil Wilayah Desa', 'page', 6, NULL, NULL),
('1548410081404458', '154838335427737', 'Profil Potensi Desa', 'page', 7, NULL, NULL),
('154841034953392', 'root', 'Lembaga', 'direktori', NULL, NULL, NULL),
('155067435162328', '154838335427737', 'Program dan Kegiatan', 'page', 8, NULL, NULL),
('1576223053154375', '154841034953392', 'BPD', 'page', 27, NULL, NULL),
('1576223191749239', '154841034953392', 'LPMD', 'page', 28, NULL, NULL),
('1576223356050651', '154841034953392', 'PKK', 'page', 29, NULL, NULL),
('1576223414140989', '154841034953392', 'KARANG TARUNA', 'page', 30, NULL, NULL),
('1576223496591637', 'root', 'Data Umum', 'direktori', NULL, NULL, NULL),
('1576223585265732', '1576223496591637', 'Kesehatan', 'page', 18, NULL, NULL),
('1576223605996942', '1576223496591637', 'Pendidikan', 'page', 19, NULL, NULL),
('1576223633622540', '1576223496591637', 'Keagamaan', 'page', 20, NULL, NULL),
('1576223726508896', '1576223496591637', 'Kantibmas', 'page', 31, NULL, NULL),
('1576223736079396', '1576223496591637', 'Pertanian', 'page', 32, NULL, NULL),
('1576223768786271', 'root', 'Pelayanan', 'direktori', NULL, NULL, NULL),
('1576224024349828', '1576223768786271', 'Pengantar KK', 'page', 33, NULL, NULL),
('1576224037230517', '1576223768786271', 'Pengantar KTP-EL', 'page', 34, NULL, NULL),
('1576224057786770', '1576223768786271', 'Pengantar SKCK', 'page', 35, NULL, NULL),
('1576224076970887', '1576223768786271', 'Pengantar KIA', 'page', 36, NULL, NULL),
('1576224095672964', '1576223768786271', 'Pengantar Akta Kelahiran', 'page', 37, NULL, NULL),
('1576224110088716', '1576223768786271', 'Pengantar Akta Kematian', 'page', 38, NULL, NULL),
('1576224122254470', '1576223768786271', 'Pengantar Pindah Masuk Penduduk', 'page', 39, NULL, NULL),
('157622413235253', '1576223768786271', 'Pengantar SKTM', 'page', 40, NULL, NULL),
('1576224148871944', '1576223768786271', 'Pengantar Nikah', 'page', 41, NULL, NULL),
('1576464013748394', '154838335427737', 'Visi & Misi', 'page', 43, NULL, NULL),
('1576464450761129', '154838335427737', 'Struktur Organisasi Desa', 'page', 44, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'amrizal', 'pematang@test.com', '$2y$10$SNneaOELM1vRMj5w9.xptOhH1roXvJWW.nLS9OGdWpsxA4Z1birHG', 'oieVp3girZXGz1AQTa5DQtu4e0UiFqCoeP42e1BtTi6bFb0hfB3li9Jwjryz', '2019-06-18 02:48:14', '2020-04-21 21:07:46');

-- --------------------------------------------------------

--
-- Table structure for table `widget`
--

DROP TABLE IF EXISTS `widget`;
CREATE TABLE IF NOT EXISTS `widget` (
  `id` int(10) NOT NULL,
  `nama_widget` varchar(100) NOT NULL,
  `isi_widget` varchar(10000) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `widget`
--

INSERT INTO `widget` (`id`, `nama_widget`, `isi_widget`, `created_at`, `updated_at`) VALUES
(1, 'Bottom Widget', '<div class=\"heading heading-primary heading-border heading-bottom-border\">\r\n  <h4 class=\"heading-default\">Website <strong>Terkait</strong></h4>sds\r\n</div>\r\n<div class=\"owl-carousel\" id=\"owl1\" owl-theme owl-loaded>\r\n    <div>\r\n    	<a href=\"http://batangharikab.go.id\">aa\r\n    		<img src=\"http://nakertrans.batangharikab.go.id/upload/media/1550672963230995.png\" class=\"img img-thumbnail img-responsive\">\r\n  		</a>\r\n	</div>\r\n  	<div>\r\n    	<a href=\"http://lpse.batangharikab.go.id/\">\r\n    		<img src=\"http://nakertrans.batangharikab.go.id/upload/media/1550732737669249.png\" class=\"img img-thumbnail img-responsive\">\r\n  		</a>\r\n  	</div>\r\n  	<div>\r\n    	<a href=\"https://sirup.lkpp.go.id/sirup/ro/rekap/klpd/D85\">\r\n    		<img src=\"http://nakertrans.batangharikab.go.id/upload/media/1550732197276377.png\" class=\"img img-thumbnail img-responsive\">\r\n  		</a>\r\n  	</div>\r\n  	<div>\r\n    	<a href=\"http://sakip.batangharikab.go.id/portal/home\">\r\n    		<img src=\"http://nakertrans.batangharikab.go.id/upload/media/1550732626310157.png\" class=\"img img-thumbnail img-responsive\">\r\n  		</a>\r\n  	</div>\r\n  	<div>\r\n    	<a href=\"http://ppid.batangharikab.go.id/\">\r\n    		<img src=\"http://nakertrans.batangharikab.go.id/upload/media/1550733638331244.png\" class=\"img img-thumbnail img-responsive\">\r\n  		</a>\r\n  	</div>\r\n  	<div>\r\n    	<a href=\"http://jdih.batangharikab.go.id/home\">\r\n    		<img src=\"http://nakertrans.batangharikab.go.id/upload/media/1550734431166376.png\" class=\"img img-thumbnail img-responsive\">\r\n  		</a>\r\n  	</div>\r\n  	<div>\r\n    	<a href=\"http://kemnaker.go.id/\">\r\n    		<img src=\"http://nakertrans.batangharikab.go.id/upload/media/1550734773522237.png\" class=\"img img-thumbnail img-responsive\">\r\n  		</a>\r\n  	</div>\r\n</div>\r\n<script>\r\n  $(function(){\r\n  	var owl1 = $(\'#owl1\');\r\n    owl1.owlCarousel({\r\n    loop:true,\r\n    margin:20,\r\n    autoplay:true,\r\n    autoplayTimeout:5000,\r\n  	responsiveClass:true,\r\n  	responsive:{\r\n        		0:{\r\n            		items:1,\r\n            		nav:false\r\n        		},\r\n        		600:{\r\n            		items:3,\r\n            		nav:false\r\n        		},\r\n        		1000:{\r\n            	items:5,\r\n           	 		nav:false,\r\n            		loop:false\r\n        		}\r\n    		}\r\n      	});\r\n  	});\r\n \r\n</script>\r\n', NULL, '2019-12-08 23:20:47'),
(2, 'Side Widget', 'Side Widget Test', '2019-12-01 17:00:00', '2020-01-30 00:20:40');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
