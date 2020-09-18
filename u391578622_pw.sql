-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2020 at 12:18 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u391578622_pw`
--

-- --------------------------------------------------------

--
-- Table structure for table `merkmobil`
--

CREATE TABLE `merkmobil` (
  `id` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `merk` varchar(64) NOT NULL,
  `namapendiri` varchar(128) NOT NULL,
  `tahunberdiri` varchar(64) NOT NULL,
  `negara` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `merkmobil`
--

INSERT INTO `merkmobil` (`id`, `foto`, `merk`, `namapendiri`, `tahunberdiri`, `negara`) VALUES
(1, '5cc2d3ee29ff4.png', 'chevrolet', 'Louis Chevrolet dan GM William C. Durant', '1911', 'Amerika Serikat'),
(2, '5cc3040b55eb5.png', 'datsun', 'Yoshisuke Aikawa', '2013', 'Jepang'),
(3, '5cc814a71586d.png', 'ferrari', 'Enzo Ferrari', '1947', 'Italia'),
(4, '5cc8152ee1585.png', 'honda', 'Soichiro Honda', '1948', 'Jepang'),
(5, '5cc3079cc2de8.png', 'mazda', 'Jujiro Matsuda', '1920', 'Jepang'),
(6, '5cc813813f35b.png', 'mini', 'Alec Issigonis', '1957', 'Inggris'),
(7, '5cc308c6d8fd1.png', 'nissan', 'Kenjiro Den, Rokuro Aoyama, Meitaro Takeuchi, Yoshisuke Aikawa', '1933', 'Jepang'),
(8, '5cc3090163d41.png', 'suzuki', 'Michio Suzuki', '1909', 'Jepang'),
(9, '5cc789d04b3a3.png', 'toyota', 'Kiichiro Toyoda', '1937', 'Jepang'),
(10, '5cc3097984ecf.png', 'vw', 'Deutsche Arbeitsfront', '1937', 'Jerman');

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `idmobil` int(11) NOT NULL,
  `id` int(11) DEFAULT NULL,
  `tipe` varchar(128) DEFAULT NULL,
  `tipemesin` varchar(128) DEFAULT NULL,
  `dayamaksimum` varchar(128) DEFAULT NULL,
  `torsimaksimum` varchar(128) DEFAULT NULL,
  `transmisi` varchar(128) DEFAULT NULL,
  `warna` varchar(128) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `foto1` varchar(255) DEFAULT NULL,
  `foto2` varchar(255) DEFAULT NULL,
  `foto3` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`idmobil`, `id`, `tipe`, `tipemesin`, `dayamaksimum`, `torsimaksimum`, `transmisi`, `warna`, `harga`, `foto1`, `foto2`, `foto3`) VALUES
(1, 1, 'camaro 1LT Coupe', '2.0L Turbo 4-cylinder engine', '275 hp @ 5600 rpm', '295 lb-ft @ 3000-4500 rpm', 'transmission', 'Biru, Merah, Abu, Hitam, Oranye, Hijau', 25000, '5f648303897cf.jpg', '5f6483038a31d.jpg', '5f6483038d5c9.jpg'),
(2, 2, 'Go', 'HR12DE', '68 PS/5000 RPM', '104 Nm/4000 RPM', '5 Speed MT', 'Hitam, Abu abu, Merah, Silver, Putih, Perunggu', 8848, '5cc46b59d892f.jpg', '5cc485a989a88.jpg', '5cc485a98a910.jpg'),
(3, 3, '488 Spider', '90Â° V8, turbo-charged, dry sump, 3.902 cc', '659 HP/8.000 RPM', '760 Nm/3.000 RPM', '7 gears F1 dual clutch transmission', 'Merah, Kuning, Biru, Hitam, Silver', 880156, '5cc46c9ea2b20.jpg', '5cc46c9eac19c.jpg', '5cc46c9ead398.jpg'),
(4, 1, 'Corvette Stingray', 'ALUMINIUM 6.2L V8 ENGINE', '455 hp @6000 rpm', '624 Nm / 460 ft-lb', '7-SPEED', 'Putih, Maroon, Abu, Oranye, Biru, Hitam, Kuning, Merah', 55000, '5f64833418368.jpg', '5f648334192fa.jpg', '5f6483341a06c.jpg'),
(5, 1, 'Corolado', '2.5L DOHC, 4 Cylinder, Fixed Geometry Turbocharger (FGT) with Intercooler', '163 PS/3600 RPM', '380 Nm/2000 RPM', 'Automatis', 'Hitam, Abu abu, Merah, Silver, Putih', 21300, '5ccea231497be.jpg', '5ccea2314ac43.jpg', '5ccea2314c0a8.jpg'),
(6, 2, 'Go Plus', 'HR12DE', '83 PS/6.000 RPM', '104 Nm / 4.000 rpm', 'Manual', 'Hitam, Abu abu, Merah, Silver, Putih, Perunggu', 9533, '5f648367c0b71.jpg', '5f648367c551b.jpg', '5f648367c6077.jpg'),
(7, 4, 'jazz', '5 Speed M/T', '120PS / 6.600rpm', '128 Nm / 2700 rpm', 'Otomatis', 'Merah, Abu abu, Kuning, Oranye, Hitam', 17220, '5f64838e2f69b.jpg', '5f64838e3018a.jpg', '5f64838e30db7.jpg'),
(8, 5, '6', 'with Dual S-VT (Sequential Valve Timing) and ETC (Electronic Throttle Control)', '138PS / 5.700 rpm', '250Nm kgm / 3.250 rpm', 'Otomatis', 'Merah, Abu abu, Silver, Hitam', 37716, '5f6483c8036e0.jpg', '5f6483c804b81.jpg', '5f6483c805877.jpg'),
(9, 2, 'Cross', 'RE-ENGINEERED 3-CYLINDER ENGINE', '68 PS / 5.000 Rpm', '104 Nm / 4.000 Rpm', '5-kecepatan', 'Hitam, Cokelat, Abu abu, Merah, Silver, Putih', 11760, '5f64846606a80.jpg', '5f64846607d32.jpg', '5f648466090bc.jpg'),
(10, 3, 'GTC4Lussi', 'V12 Turbo 6.2 L', '679 HP/8.000 RPM', '697 Nm/5.750 RPM', '4RM', 'Biru, Hitam, Merah, Silver, Putih', 840000, '5f6484d35f340.jpg', '5f6484d35ff28.jpg', '5f6484d3613ea.jpg'),
(11, 4, 'HR-V', '1.5L 4 Silinder Segaris, 16 Katup + DBW', '120PS / 6.600rpm', '145Nm / 4.600rpm', '6', 'Hitam, Biru, Silver', 19565, '5f648537233f8.jpg', '5f64853723ea5.jpg', '5f64853725678.jpg'),
(12, 4, 'Civic-Hatchback', '1.5L 4 Silinder Segaris, VTEC Turbo DOHC, 16 Katup + DBW', '173PS / 5.500rpm', '220Nm / 1.700 - 5.500rpm', 'Manual', 'Hitam, Putih, Merah, Silver', 28245, '5f64856b679ac.jpg', '5f64856b68694.jpg', '5f64856b693d5.jpg'),
(13, 5, '2', 'SKYACTIV-G 1.5L In-line 4 cylinder, DOHC 16 valve with Dual S-VT (Sequential Valve Timing) and ETC (Electronic Throttle Control)', '81 (110) / 6,000', '141 (14.37) / 4,000', 'Otomatis,', 'Merah, putih, Metalic, Biru, Hitam, Abu abu', 18431, '5f6485825a415.jpg', '5f6485825b3eb.jpg', '5f6485825edac.jpg'),
(14, 5, 'Cx-9', 'SKYACTIV-G 2.5T In-line 4 cylinder DOHC 16 valve, Turbocharged', '231ps / 5,000rpm', '420Nm / 2,000rpm', 'Otomatis', 'Hitam Mica, Merah Kristal, Abu abu', 57316, '5f6486007a3a0.jpg', '5f6486007afff.jpg', '5f6486007bb91.jpg'),
(15, 6, 'Clubman', '2.0L empat silinder twinpower turbo,1.998 cc', '194 Ps / 5.000 rpm', '280 Nm / 1.250 rpm', 'otomatis', 'Merah, Abu abu, Biru, Hitam, Putih, Hijau', 57050, '5f64862a55bc2.jpg', '5f64862a568a7.jpg', '5f64862a57a98.jpg'),
(16, 6, 'Convertible', '2.0-liter TwinPower-Turbo', '228 PS', '258 lb-ft', 'Sport', 'Putih, Hitam, Hijau, Biru, Oranye', 56700, '5f6486571857f.jpg', '5f648657191c5.jpg', '5f64865719f15.jpg'),
(17, 6, '3-Door', '1,5L 3-silinder', '136 hp', '220 Nm', 'Otomatis', 'Putih Merica, Silver, Hitam, Hijau, Biru, Oranye', 50400, '5f64867c2022a.jpg', '5f64867c20ebf.jpg', '5f64867c222ce.jpg'),
(18, 7, 'Navara', 'In-line 4-cylinder DOHC 16 Valves VGS Turbo Intercooler', '120 (163)/3600', '403 (41.1)/2000', '6', 'Hitam, Putih, Silver, Oranye', 28910, '5f6486b6d3d5f.jpg', '5f6486b6d48f9.jpg', '5f6486b6d54ea.jpg'),
(19, 7, 'Serena', 'MR20', '147 PS / 5600 rpm', '21 Kgm / 4400 rpm', 'Otomatis', 'Hitam, Putih, Merah, Silver', 31360, '5f6486d41bd55.jpg', '5f6486d41c93a.jpg', '5f6486d41d65c.jpg'),
(20, 7, 'March', 'HR15DE', '102/6000', '10.8/4400', 'Otomatis', 'Pink, Hitam, Putih, Silver, Merah rubi, Biru langit', 13006, '5f6486fd74102.jpg', '5f6486fd74d58.jpg', '5f6486fd7591a.jpg'),
(21, 8, 'Ignis ', 'K12M', '83 PS/6,000 rpm', '113 Nm/4,200 rpm', 'Otomatis', 'Putih, Hitam, Biru, Merah', 10465, '5f64872007601.jpg', '5f6487200818f.jpg', '5f64872009475.jpg'),
(22, 8, 'Ertiga', 'K15B, DOHC, VVT', '104,7/6.000 PS/rpm', '138/4.400 Nm/rpm', 'Manual', 'Abu abu, Silver, Merah', 13510, '5f64878ab7c9c.jpg', '5f64878ab8a62.jpg', '5f64878aba47f.jpg'),
(23, 8, 'Carry-Pickup', 'G15A', '78.8 PS/ 5500 rpm', '78.8 PS/ 5500 rpm', 'Manual', ' Putih, Hitam, Silver', 9100, '5f6487ae0c6be.jpg', '5f6487ae0d2de.jpg', '5f6487ae0df4e.jpg'),
(24, 9, 'Avanza', 'VVT-I, 4 Cylinder In-Line DOHC 16V EFI', '90 hp / 6,000 rpm', '117 Nm / 4,400 rpm', 'Manual', 'Hitam, Perunggu, Merah, Putih, Biru, Silver', 13300, '5f6487d6e712e.jpg', '5f6487d6e7db1.jpg', '5f6487d6e9a72.jpg'),
(25, 9, 'Fortuner', '2TR-FE 4 Silinder Segaris, 4 Katup, DOHC, Dual VVT-i / 2TR FE 4 Cylinders In-Line, 4 Valve, DOHC, Dual VVT-i', '163 PS/3,400 rpm', '24.7 Kgm/4,000 rpm', 'Manual', 'Hitam, Putih, Coklat, Perunggu, Abu abu, SIlver', 33341, '5f6487f288aeb.jpg', '5f6487f289959.jpg', '5f6487f28ddaa.jpg'),
(26, 9, 'Camry', 'Hybrid, In-line 4 Cylinder, 16-Valve, DOHC, VVT-i, 2494cc', '156,6 PS / 5.700 RPM', '20,9 kgm / 4.800 RPM', 'Otomatis', 'Merah, Hitam, Metal', 41650, '5f6488135ccbc.jpg', '5f6488135d8a7.jpg', '5f64881360c70.jpg'),
(27, 10, 'Golf', '1.4 litre TSI BlueMotion Technology', '160 HP/5.800 RPM', '240 Nm/1.500-4.500 RPM', 'Manual,', 'Hitam, Abu abu, Biru', 36680, '5f6488873f331.jpg', '5f648887406f4.jpg', '5f64888741c91.jpg'),
(28, 10, 'Tiguan', '1.4 L TSI 122 PS (90 kW) ', '148 hp', '250 Nm', '6', 'Hitam, Abu abu, Biru', 44100, '5f6488a30168e.jpg', '5f6488a3048ee.jpg', '5f6488a305926.jpg'),
(29, 10, 'Scirocco', '1.4 litre TSI BlueMotion Technology', '158 HP/5.800 RPM', '240 Nm/1.500-4.500 RPM', '7-Speed', 'Hitam, Abu abu, Biru, Putih', 41300, '5f6488c3e13e2.jpg', '5f6488c3e1f99.jpg', '5f6488c3e2be8.jpg'),
(30, 3, '812 SUPERFAST', 'V12 - 65ï¿½ 6.5 L', '788 HP/8.500 RPM', '718 Nm/7.000 RPM', 'Dual-clutch', 'Merah, Hitam, Putih, Kuning, Silver', 840000, '5f6489027cff7.jpg', '5f6489027db95.jpg', '5f6489027ea0c.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(255) NOT NULL,
  `priv` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `nama`, `email`, `username`, `password`, `priv`) VALUES
(13, 'Rizky Ramadhan', 'rramadhan68@gmail.com', 'kyrmdhn_', '$2y$10$EFkvlnHl4.UbQcNmY061n.tDG0RTbHXxZGt4DEAjoYaNEnPwhQ.dO', 1),
(14, 'Ahmad', 'ahmad@gmail.com', 'ahmad123', '$2y$10$Sh9M7CVuQBpAgLPoKJhW2ejQuZb7/fbBw/gowAJSLnABgwQWn7qbG', 0),
(16, 'Avip Syaifulloh', 'syaifulloh.183040024@mail.unpas.ac.id', 'avipsyaifulloh', '$2y$10$OutrkurFxy9De0gf0W2K/e93A7L/ovQRGPO9LZ47p0u0xrRjzLXrm', 0),
(17, 'arjun', 'arjun@gmail.com', 'arjuns', '$2y$10$zau54QLAXWMNba86m7AW8OipNx2u2AKBu2Nct/F8/f7j9snSY0Y0u', 0),
(18, 'Sulthan', 'sulthanahma48@gmail.om', 'sulthanahma', '$2y$10$S9yJEygspX0nuzCjK3rPqunAjwJDVzWFkJbip16azap.q/pKgJwau', 0),
(19, 'ramadhan', 'ramadhan@mail.com', 'ramadhan123', '$2y$10$sFueOOdFoYLXDRI.vInMyuyHIVrsaS9na6Y8jo5b79HfWGR3h2XyK', 1),
(20, 'admin1', 'admin1', 'admin1', '$2y$10$9KEbk0SvEGjA4XSfPrcx9.pxNqUW1g83Xt7Q2KT5bKWcrbNDFmcay', 1),
(21, 'Rizky', 'admin', 'admin', '$2y$10$yfESFBezDah98QbznMntv.IcwSW3/UWCrXkowvzljlLtztnP6dEsq', 0),
(22, 'Rizky', 'rramadhan68@gmail.com', 'kyx', '$2y$10$YaPzvYdEok2iY6cUHAxtnuzFIMJ0p0kyk5D2IN3ReRMq.mMCKtE3e', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `merkmobil`
--
ALTER TABLE `merkmobil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`idmobil`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `merkmobil`
--
ALTER TABLE `merkmobil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `mobil`
--
ALTER TABLE `mobil`
  MODIFY `idmobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mobil`
--
ALTER TABLE `mobil`
  ADD CONSTRAINT `mobil_ibfk_1` FOREIGN KEY (`id`) REFERENCES `merkmobil` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
