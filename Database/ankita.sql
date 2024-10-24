-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Oct 11, 2024 at 04:41 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ankita`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `id` int(11) NOT NULL,
  `party` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `party_code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`id`, `party`, `logo`, `party_code`) VALUES
(1, 'Bhartiya Janta Party', 'https://1000logos.net/wp-content/uploads/2022/02/BJP-logo.png', 'BJP'),
(2, 'Indian National Congress Party', 'https://clipground.com/images/congress-party-logo-png-13.png', 'INC');

-- --------------------------------------------------------

--
-- Table structure for table `tokens`
--

CREATE TABLE `tokens` (
  `id` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `used` tinyint(1) DEFAULT 0,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tokens`
--

INSERT INTO `tokens` (`id`, `token`, `used`, `user_id`) VALUES
(1, '146625e5975c407db75c', 0, 0),
(2, '58452725228fc364b414', 0, 0),
(3, '5bb33edd81679971a436', 0, 0),
(4, '755167e8d0f56e6487be', 0, 0),
(5, '74030c3ab8cfcc346d6f', 0, 0),
(6, 'a9746992c2ffe85cc47d', 0, 0),
(7, 'caa7af2bdfd0b7b64e65', 0, 0),
(8, 'cc77ee2abd0f61f64786', 0, 0),
(9, 'e5577ba3b98976a5ab38', 0, 0),
(10, 'c471389e365d48d43492', 0, 0),
(11, 'c05fbf9d485f6aad94aa', 0, 0),
(12, '2895a1b46358222b85ef', 0, 0),
(13, '11e440580647887d01cf', 0, 0),
(14, '183ca4e121dd289a9031', 0, 0),
(15, 'a79c92f328c8689f19bc', 0, 0),
(16, 'aaa3e0b98d2de5383a34', 0, 0),
(17, '0313439af3d7d934f43b', 0, 0),
(18, '3adb19ea11b322aa01dc', 0, 0),
(19, 'b53e5a6a5fc98c81b295', 0, 0),
(20, '954d0bef8cfe35e999ae', 0, 0),
(21, '7dfd99ffed18b80b8830', 0, 0),
(22, 'fe2b68e7109162c748c9', 0, 0),
(23, '85fa039d9400e7e30948', 0, 0),
(24, '3f8422df6eff243c9065', 0, 0),
(25, '5bfa701d4c8b5fa9e55a', 0, 0),
(26, 'cf260a0953593f4abd5e', 0, 0),
(27, '73253f01a0e7c8d1e2d1', 0, 0),
(28, 'bdc09614a52fc6cfd784', 0, 0),
(29, '1e832f71dee3d3c81503', 0, 0),
(30, '5c5f39593f7eb398f876', 0, 0),
(31, '240eaaa6634bb7ac5064', 0, 0),
(32, '6056b1955d5631426f9d', 0, 0),
(33, '76aa67712b55f393667b', 0, 0),
(34, '25242bbe19752dea9a10', 0, 0),
(35, '1df935b9ef8c2f04d97e', 0, 0),
(36, '7994bef0e3327184ce03', 0, 0),
(37, 'e4e50d70b67e3a33e62e', 0, 0),
(38, '7aa12f34da3e671caa76', 0, 0),
(39, '52d13b05f951fb334121', 0, 0),
(40, '921d5864d337206c5dc1', 0, 0),
(41, 'fc7a7324b649c9a65901', 0, 0),
(42, 'b65b5f66ac16833bdc90', 0, 0),
(43, '5f19f9039c1814ebe1e6', 0, 0),
(44, 'e0021286155e7a5d0f69', 0, 0),
(45, '3adb06f6bf493e2398d3', 0, 0),
(46, '78314eecc5f39418ff98', 0, 0),
(47, '107af7aa80d94b5d7daa', 0, 0),
(48, '2e4a55112efb0288314b', 0, 0),
(49, 'abe6f1508f2ffba46ee1', 0, 0),
(50, 'fcabbc99c10340484c1a', 0, 0),
(51, 'a96945769ee3dc6d181d', 0, 0),
(52, 'db9082b007ec2ae9100f', 0, 0),
(53, 'fc593c62b686141627af', 0, 0),
(54, '32d5043c8f183eb80ba5', 0, 0),
(55, '2ec87e3f115258783713', 0, 0),
(56, '1c23af904e6b8ba16340', 0, 0),
(57, '690fc298531dcf03a1d9', 0, 0),
(58, 'a849a2783d89ae421d82', 0, 0),
(59, 'fae7f640c197b2cca281', 0, 0),
(60, '5d9ee2ca627efec2ef59', 0, 0),
(61, 'df4d5f30d2b262dfaa34', 0, 0),
(62, 'a256420dcd8a1323cd0b', 0, 0),
(63, '5e78159cc778e841c09f', 0, 0),
(64, 'e507987111d4c8fe6845', 0, 0),
(65, '2db5ee80118689a852e7', 0, 0),
(66, 'b6f83b852289bd9a436d', 0, 0),
(67, '2b845122fbfb20bf1eeb', 0, 0),
(68, 'd041826511afa31b053d', 0, 0),
(69, '9450b2f708d88d73cb05', 0, 0),
(70, '74d4ce359a535cd8d3b3', 0, 0),
(71, '21470e99a43934340e02', 0, 0),
(72, 'd9ae7c7c1ddd2d368d8e', 0, 0),
(73, '774dfb9ecaba79c4ef58', 0, 0),
(74, 'a0b61a3446666919d2c9', 0, 0),
(75, '8f1c47591aa46488d076', 0, 0),
(76, 'aa2f785eaac81d0f22c6', 0, 0),
(77, 'f055b0376eccfe84be9d', 0, 0),
(78, '9cd539108fef1524ea4f', 0, 0),
(79, 'e425cd058768ffbb9875', 0, 0),
(80, 'b09f0c4fbcba3451efd5', 0, 0),
(81, '9903dc7578bb304f5b05', 0, 0),
(82, '7cea35fcc1195a9de2a5', 0, 0),
(83, '34171be619aae96c108a', 0, 0),
(84, 'e41ac6b6d32171883549', 0, 0),
(85, 'b5634709491454050d78', 0, 0),
(86, 'a70c272522081b544a15', 0, 0),
(87, 'c8a4fd73011440046d83', 0, 0),
(88, 'af27abfbf7d92ade2e7b', 0, 0),
(89, '9b4dc46a2da5cd541ae1', 0, 0),
(90, 'd3924fbe054cf537666e', 0, 0),
(91, '14a379381644c00adfd3', 0, 0),
(92, 'feaeee5e93e748e35cb2', 0, 0),
(93, 'd0672c799df3837f2013', 0, 0),
(94, '61591bf130c1d2e36c1c', 0, 0),
(95, '8abd6d250e4fe9beb552', 0, 0),
(96, 'a9484d6bfbc80404f896', 0, 0),
(97, '40df6adad25823ec523f', 0, 0),
(98, 'c3c5ba6d70b010bdff31', 0, 0),
(99, 'c30e66a13ac24188398b', 0, 0),
(100, 'bfadfe0cd8d7c55b3b34', 0, 0),
(101, 'b9f328f910ccb9d5575d', 0, 0),
(102, 'bc3510964cef061228f1', 0, 0),
(103, '0292b67dae0db1bee906', 0, 0),
(104, '9c05995f2f1469adf793', 0, 0),
(105, '9499b6be75b6fa9b8955', 0, 0),
(106, '26e1950922548fbe3587', 0, 0),
(107, 'a807627656d4a571ca8b', 0, 0),
(108, 'b57f5485a05de441b59d', 0, 0),
(109, 'dcbdf860726c96d17593', 0, 0),
(110, '8970c75ff65c3674d9e7', 0, 0),
(111, 'bb2615ef326e57a161e6', 0, 0),
(112, '5f20335a218b14d9d2bd', 0, 0),
(113, '97da5bcaa55d057f4468', 0, 0),
(114, '201fec6c0ad5bb788ee4', 0, 0),
(115, 'ff20eccfeae69ec62c48', 0, 0),
(116, '0d7cec18f79b71a4ada7', 0, 0),
(117, '58a03a1da4f3b681ecad', 0, 0),
(118, 'f17dfeea556b285adf88', 0, 0),
(119, '7d029d0a1d3c790111d1', 0, 0),
(120, '10d18e95bcf9f769b1a5', 0, 0),
(121, '1c9c41670be2f3fe32f8', 0, 0),
(122, 'a5b8b62450dd3cb1ec66', 0, 0),
(123, '7a28fd6d2724ed2a4560', 0, 0),
(124, 'e3fc8478bc025353339d', 0, 0),
(125, 'fa4135f21b5abef97899', 0, 0),
(126, '4743cf9f0defc88e6d8f', 0, 0),
(127, 'e36805ae13b5515229d7', 0, 0),
(128, 'd802207e835c363848bd', 0, 0),
(129, '03247be85a63c8dda4cf', 0, 0),
(130, '964c47a947e69657060f', 0, 0),
(131, '6c8680198be579460000', 0, 0),
(132, '193fecc1eb6e24187582', 0, 0),
(133, '9925e4ceeb9c580c5894', 0, 0),
(134, '9ad6863148cf78c8f911', 0, 0),
(135, '61fe764e42f107171576', 0, 0),
(136, 'a177931cb74423a4ea23', 0, 0),
(137, '1c9caabdd01f4b515f6d', 0, 0),
(138, '28eb84d4c81fc2014b15', 0, 0),
(139, '47c6dbaddd7b9a9ba05f', 0, 0),
(140, '171b4bd572331a9df04a', 0, 0),
(141, '0fbd04ce0fd51cb94918', 0, 0),
(142, 'e65841435ef75ef80e9f', 0, 0),
(143, 'ec35199a9c2de803f240', 0, 0),
(144, '85dff2f9c8e459a2052d', 0, 0),
(145, 'e86f64db977788b4a297', 0, 0),
(146, '4c2e90eb982007166d9f', 0, 0),
(147, '2c0f4059c0556f39e697', 0, 0),
(148, '78182d064a0c0da6f044', 0, 0),
(149, '571719c1169421113948', 0, 0),
(150, '3f94a5d1bc55078677af', 0, 0),
(151, '9f0474cb8e1600cb9254', 0, 0),
(152, '0dbbe9623e8e359ef522', 0, 0),
(153, '065aaa53622c49399fe5', 0, 0),
(154, '4ed7e7143c24adfe60b2', 0, 0),
(155, 'a9bef823eb2ae431f915', 0, 0),
(156, 'ab09ed96a66dadff5b4a', 0, 0),
(157, '678dea66ea5078751303', 0, 0),
(158, '092101a55c3bcd5d6581', 0, 0),
(159, '8b050d8de3241417fe74', 0, 0),
(160, '5111d07509f646fb775c', 0, 0),
(161, 'aa5b3e91d954fe2c1836', 0, 0),
(162, '0041a6f1b1bbc579f7a2', 0, 0),
(163, '906a4efa1b3a47f64b30', 0, 0),
(164, 'e748efba6dccdcd227d4', 0, 0),
(165, 'b1e264d517845c96ea72', 0, 0),
(166, '53a09eeb470280222596', 0, 0),
(167, '8ac1319918717b124cbd', 0, 0),
(168, '53cd46cadb39d419855c', 0, 0),
(169, 'acfcb14056eba132c2a9', 0, 0),
(170, '3631ce4c07e3ae4c8c26', 0, 0),
(171, 'da93ef52fbab22cd84f8', 0, 0),
(172, '270701b989c40da5acd8', 0, 0),
(173, 'daa991a42d63b5ea5744', 0, 0),
(174, '8fa10e3df8ad18ecad05', 0, 0),
(175, '07e80f855a7d011366f9', 0, 0),
(176, '1ef58add8c052bc57727', 0, 0),
(177, '21339eab3ff083d10c8a', 0, 0),
(178, '5718577cfaeea181779f', 0, 0),
(179, '5b0256498fc413f0bd6c', 0, 0),
(180, '9e1c9e90ac7573da0aa1', 0, 0),
(181, '2d815083b2d5b89aa83b', 0, 0),
(182, '2033a65d322f3d064db2', 0, 0),
(183, '4aa67ebd344cdf8f65a4', 0, 0),
(184, 'e82c462419f018136525', 0, 0),
(185, '07584563c066aca34be4', 0, 0),
(186, '3cb71e6f87327b3570e8', 0, 0),
(187, '1ec89bbc5a25bd3f3d40', 0, 0),
(188, '6219eb0133b16a245bca', 0, 0),
(189, 'cd45bf33744670f9928d', 0, 0),
(190, 'd562f58bac5da86f2922', 0, 0),
(191, 'a26f277d92f83f5eeffa', 0, 0),
(192, 'ebc82c43c6a9fcb166a2', 0, 0),
(193, 'f16962b77c2958cb474f', 0, 0),
(194, '33af9a200ed17e9a6dbe', 0, 0),
(195, 'b9067fc4821aab405e94', 0, 0),
(196, '515356bc4d342f77c6ae', 0, 0),
(197, 'e3cffe9604c2597b44c3', 0, 0),
(198, '9dd122353f1e1fb3cbf4', 0, 0),
(199, '00c27f42244727931d57', 0, 0),
(200, 'a2c1eb58a9a0c35fe688', 0, 0),
(201, 'dd0cf2a3ea113d4258cf423fb96a48de', 1, 2147483647),
(202, 'd5680276acdee9e702c2ef8d0e67e3b1', 0, 2147483647),
(203, '7d6df6b678001e1c84e3540c3d51ac2d', 0, 2147483647),
(204, '98a09ecbce6e392bfbaaa130347df290', 1, 2147483647),
(205, '1bad069e3160b44fd5cc5e5d59efbf2a', 1, 2147483647),
(206, '1f6419af9b5f620a5e28934c3a8f932a', 0, 2147483647),
(207, '7ae830f3d655f8bde20ee64c03e8a080', 0, 2147483647),
(208, '67333af42433ddef4f107fcbc74feac8', 0, 2147483647),
(209, '5ccf8a6771a5990557971bd34df917dc', 0, 2147483647),
(210, '9b457f6b9fbe07aa17d160c0b367395f', 0, 2147483647),
(211, 'bd5acc66c4406dfae3b2bfdc0880dc7f', 0, 2147483647),
(212, 'c77aba2caa1e06ce8ebb0256d3bfde6c', 0, 2147483647),
(213, '65244e83246a5d0ae7bcbf26a5dd537f', 0, 2147483647),
(214, 'bf702a5acef26de223f0e5c160bde538', 0, 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Fname` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `password` varchar(255) NOT NULL,
  `ad_vo` varchar(20) NOT NULL,
  `role` varchar(10) DEFAULT 'user',
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Fname`, `date`, `password`, `ad_vo`, `role`, `id`) VALUES
('Ankita Goyal', '2004-06-12', '$2y$10$D7nzaXTtlYG59YX2ljkgp.3Nr/RzL0j1y1SCkZ6LmNl067kc850KS', '919323388342', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `id` int(11) NOT NULL,
  `candidate` varchar(255) NOT NULL,
  `aadhar` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`id`, `candidate`, `aadhar`) VALUES
(26, 'BJP', '892822129712'),
(27, 'INC', '014785236995');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tokens`
--
ALTER TABLE `tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=215;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
