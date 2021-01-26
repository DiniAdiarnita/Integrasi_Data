-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2018 at 09:23 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inta`
--

-- --------------------------------------------------------

--
-- Table structure for table `twitter`
--

CREATE TABLE `twitter` (
  `nama` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `lokasi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `twitter`
--

INSERT INTO `twitter` (`nama`, `status`, `tanggal`, `lokasi`) VALUES
('Melek sadÄ±koÄŸlu', 'RT @ozlemyildiz1881: Serebellumu, beyin sapÄ±, hemisferi, korpus kallozumu, sulkusu, girusuyla nasÄ±', 'Wed Oct 24 18:47:36 +0000 2018', ''),
('JFB Nick', 'apa bedanya soto dengan coto?\n\nkalau soto pake daging sapi kalo coto pake daging capi~', 'Wed Oct 24 18:47:35 +0000 2018', ''),
('Tinggi Sehat Bandung', 'Kalsium #NHCP terbuat dari sumsum tulang sapi segar dengan kandungan kalsium &amp; PENYERAPAN tinggi', 'Wed Oct 24 18:45:31 +0000 2018', 'Bandung-Indonesia'),
('Marta', 'RT @iartesven: Como parte del programa de formaciÃ³n permanente que lleva a cabo el #Iartes, este 23', 'Wed Oct 24 18:44:15 +0000 2018', ''),
('Ä°layda ðŸ’™', 'Gidene kapÄ± sapÄ± yakÄ±ÅŸÄ±r bizde.', 'Wed Oct 24 18:40:47 +0000 2018', 'Ä°stanbul, TÃ¼rkiye'),
('å—é¨“ç”Ÿ@å¡¾æœ€é«˜', 'éŽåŽ»å•ã§ã„ã„ç‚¹ã¨ã‚ŒãŸãƒ¼â™ª', 'Wed Oct 24 18:40:17 +0000 2018', 'æ±äº¬éƒ½'),
('ambumilLaRosaleda', 'RT @iartesven: Como parte del programa de formaciÃ³n permanente que lleva a cabo el #Iartes, este 23', 'Wed Oct 24 18:36:06 +0000 2018', 'Miranda, Venezuela'),
('SAPI', 'RT @iartesven: La especialista Liz SÃ¡nchez Vegas, Coordinadora de Registro de la ProducciÃ³n Intele', 'Wed Oct 24 18:36:03 +0000 2018', 'Centro SimÃ³n BolÃ­var.Venezuela'),
('SAPI', 'RT @iartesven: Como parte del programa de formaciÃ³n permanente que lleva a cabo el #Iartes, este 23', 'Wed Oct 24 18:35:49 +0000 2018', 'Centro SimÃ³n BolÃ­var.Venezuela'),
('Ayulicious Pekanbaru', 'Tidak semua hal bisa dicari dg Google, misalnya sapi saya yang hilang.  AYULICIOUS BANGGA', 'Wed Oct 24 18:33:50 +0000 2018', ''),
('sapana à«', 'RT @akaKNICK: Seeing a therapist: $100/hour \n\nTelling myself it be like that sometimes: free', 'Wed Oct 24 18:32:48 +0000 2018', ''),
('Curhatan Danbo', 'Mau aja di bohongin sama iklan, kalo minum susu sapi itu bisa bikin pinter, emangnya udah pernah lia', 'Wed Oct 24 18:32:44 +0000 2018', 'Jakarta Pusat'),
('BaÑby', 'RT @almacaracas: Venezuela mostrarÃ¡ avances en ciencia y tecnologÃ­a en 2da. EdiciÃ³n de la Fic-Tec', 'Wed Oct 24 18:31:34 +0000 2018', ''),
('å—é¨“ç”Ÿ@å¡¾æœ€é«˜', 'ï½»ï¾ï½¼ï¾žï¾Šï¾!', 'Wed Oct 24 18:30:41 +0000 2018', 'æ±äº¬éƒ½'),
('ãƒ•ã‚©ãƒ­ãƒ¯ãƒ¼ã®æ¥æ™’ã—bot', 'ç—©ã›åå¤å±‹', 'Wed Oct 24 18:29:59 +0000 2018', ''),
('Iqbal Faisal', 'Tidak semua hal bisa dicari dg Google, misalnya sapi saya yang hilang.', 'Wed Oct 24 18:25:24 +0000 2018', 'Indonesia'),
('Jasriyanto Yanto', 'RT @katerinaKwari: Dasar manusia penyebar hoax kok ngak kapok2 ya.otak mrk ini isinya telor kuda apa', 'Wed Oct 24 18:24:33 +0000 2018', 'Kota Surabaya, Jawa Timur');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
