-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 2018-01-23 01:46:48
-- 服务器版本： 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `czx`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE `admin` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` char(32) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@qq.com'),
(3, 'ldh', '3f5453e192e572cbc2bed32097c7aaaf', 'ldh@qq.com'),
(4, 'kk', 'dc468c70fb574ebd07287b38d0d0676d', 'kk@qq.com');

-- --------------------------------------------------------

--
-- 表的结构 `album`
--

CREATE TABLE `album` (
  `id` int(10) UNSIGNED NOT NULL,
  `pid` int(10) UNSIGNED NOT NULL,
  `albumPath` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `album`
--

INSERT INTO `album` (`id`, `pid`, `albumPath`) VALUES
(1, 1, '474253293a617714f0f976576ecd1809.jpg'),
(2, 1, 'fe8d479c541bd00bdad00f8869c77e3a.jpg'),
(3, 1, 'e8ae0fc5d99eb87afd1d6084fa9bdef3.jpg'),
(4, 1, 'dee5297311df1bcaaf8d832d3c000834.jpg'),
(5, 2, 'b935353ed8eac5da295bee6763c87a8e.jpg'),
(6, 2, '422d7cd7f365d90bd37d40c6af623395.jpg'),
(7, 2, '66414b9272968433755f5f874a8569b9.jpg'),
(8, 2, '696c89a92ec498f327b1d3d22cb386e8.jpg'),
(9, 3, '4ac039f97682f957546b037005c93f83.jpg'),
(10, 3, '98d98b0b6245978338a9ccce574bb65d.jpg'),
(11, 3, 'd08b9f7c7ac339f2c1e3bebcd1d98d4e.jpg'),
(12, 3, '93bb244f54107194fc5080977caf831b.jpg'),
(13, 4, '8e5ffc302960bf90b5aae1236815c0af.jpg'),
(14, 4, '083ec464e3dc88fcf0e922269c7c933b.png'),
(15, 4, 'dd2385f28e843735b859302eb595787d.png'),
(16, 4, '8cc8e6b9a299b183bd1c6b63897df54e.jpg'),
(17, 5, 'd6eddf59addca9b8d4fcb101a90137b5.jpg'),
(18, 5, '02acd65f240e1690afaf27606df1c27a.jpg'),
(19, 5, '5c4a4b001424f40b4af39a4d990fbd59.jpg'),
(20, 5, 'd6c1388108fc8513fadb2192a62e3cc7.jpg'),
(21, 6, '9024a4955a961f3e9b2fbd3c8902e0e5.jpg'),
(22, 6, '4a53227f3e2b26443a4b46e29b3fab90.jpg'),
(23, 6, '0225d060a650e6b24c4c38459b1eb8d5.jpg'),
(24, 6, 'a95916e3f07e42e14f59910f0427a352.jpg'),
(25, 7, '4510b8748027e5b5a1a5315d4665a323.jpg'),
(26, 7, '774441e841d7277059c71aa08c05bcd6.jpg'),
(27, 7, '50f7428ebc4f19d53fd27442b1957781.jpg'),
(28, 8, '1826c7e308a33c6ab8f11e03d8f271ff.jpg'),
(29, 8, 'dca92261144bdaac9c91ac1716a0fc32.jpg'),
(30, 8, 'bb6ae93554edb92535fcdf235351d89b.jpg'),
(31, 8, '65c1bfdb77cca61d7dc2eb1368d4b036.jpg'),
(32, 9, '4c2b913fd1f970ae0e88cfdb5cbe9e33.jpg'),
(33, 9, 'c9d90f321e5949bcbb7e492424f55762.jpg'),
(34, 9, '6b2a4d1d449934ff954519e03545205d.jpg'),
(35, 9, '6e701f9198253871b60c4e48b5c8fd85.jpg'),
(36, 10, '80d6898fa56d03c605d4115d13629516.jpg'),
(37, 10, 'bd892221b5d5d7a0feb9375df533dfc6.jpg'),
(38, 10, '48f12b24daf85a57fc1a1fa489dc6ac2.jpg'),
(39, 10, '0d1365c0d31afa02a26acae88a58969d.jpg'),
(40, 11, 'f7e7f1064d04a25a12f7db3e2e2d0780.jpg'),
(41, 11, '4ba64e5fa43f12e25ad55b4176606ae2.jpg'),
(42, 12, '9fb8d431d29441e285156954574af466.jpg'),
(43, 12, '8a9a1d9927fe59d877314b82f8ebb552.jpg'),
(44, 12, '789b9d6a7723dbda8155a82e92857b10.jpg'),
(45, 13, '8669a6c1f6aad7151ecfbf76ab5ed7ee.jpg'),
(46, 13, '3ed22c60f25daf59a2ccae3060053b8c.jpg'),
(52, 16, '73121b4a60862b1bedb3d70bf7f0b36f.jpg'),
(51, 16, 'f21a0ceacbe44eb7230b452402ba78eb.jpg'),
(53, 16, '81293c4b58ada5a32881aecf55ec5d7f.jpg'),
(54, 16, '5aba19bd67fce802fd604bfc78ddf26d.jpg'),
(55, 17, 'a4520862a3732051221109b24bc8ed50.jpg'),
(56, 17, 'b9b5bad81a021a59087c034ebc1c62f1.jpg'),
(57, 17, '35170eb2ff6de400bd9f413a9dc260f1.jpg'),
(58, 17, 'a6e46ad2365c116db20297a3d1964c7c.jpg'),
(59, 18, '42dc6cb038463a6d682fc36ac06b6d3d.jpg'),
(60, 18, '6a9f0e9807418da4d2e6915d7892038b.jpg'),
(61, 18, '9f541d6a80d6a67aa480aa1eec8827fd.jpg'),
(62, 18, '9cb053121de4e729b7666f9f79558ee6.jpg'),
(63, 19, '29f67a6ca9a4abbd7d23c6e3698820a3.jpg'),
(64, 19, 'da9ed9823c7cdde39a267f661bf3adb5.jpg'),
(65, 19, '332baabe2e73b26c39621d7dee8f11b8.jpg'),
(66, 19, '797828dd199c874ff65aab206e61646f.jpg'),
(67, 20, '9ae1fa3e70ca3fbf78d753ce43dcf941.jpg'),
(68, 20, 'a3a7a20a050a72090f79e57b7c19fc25.jpg'),
(69, 20, '8910e8a47bf0d6d5a44b53ac163f8e6c.jpg'),
(70, 20, '49752101b5fce43480e8d511353f80d4.jpg'),
(71, 21, '6eab0afc1015dff98cfffa3bdd25a30f.jpg'),
(72, 21, '6928664df0eb489dc94e10653e5d1fd6.jpg'),
(73, 21, '78b9995a654debc31c0688530fd010b8.jpg'),
(74, 21, '4b43187daf3db21d0dc366ef2e9204dc.jpg'),
(75, 22, 'f3ee035cd089c3e4337c8ebcb2f0efa0.jpg'),
(76, 22, '2e7ca8a00ffcb7b8a7edf9665d468a73.jpg'),
(77, 22, '35928739c535f7cb538ee8537f241b0c.jpg'),
(78, 22, '0980080511686ec71c6462f94fc20fbb.jpg'),
(79, 23, '8e05eae9f3d8f991c0734fdc239f6a55.jpg'),
(80, 23, '4f318a6c7a970de1ebe19c1750c3a973.jpg'),
(81, 23, 'c5a938499b11a8a9a0ffaa0ef7c2c9c9.jpg'),
(82, 23, 'f4a0a59c49c0bb5cd9b8da6046f8877f.jpg'),
(83, 24, '4f4aeb314098415148d50cf6203ef814.jpg'),
(84, 24, '2a962592e0ea2106922d2058ff3cc38a.jpg'),
(85, 24, 'fbfbd81df8c351e92b3c92414e88b1c5.jpg'),
(86, 24, '317e51b75b5d86898697e2edc9eb7099.jpg'),
(87, 25, '354f7b8b00731f855a995b0e7cd86a89.jpg'),
(88, 25, '560362896b55123759b350e8679b45b9.jpg'),
(89, 25, '31206b6b1fac1fac2e7f32169fa380f2.jpg'),
(90, 25, '440dd99894d3d489be72ecd70b7308dd.jpg'),
(91, 26, '7c949280c56757ac302171c6cf975bcb.jpg'),
(92, 26, 'ec8f511ec4df36d67bbf5d0b8314f5ea.jpg'),
(93, 26, 'b18eb57cb638ef73593f41d2337bd9ad.jpg'),
(94, 26, 'a174849a8d260e2061afb829bd6a00dd.jpg'),
(95, 27, 'ce585946de56e33d56f8e5cc94f0a267.jpg'),
(96, 27, '60a15a10cd5e0895b5a8ec61ce9aaa35.jpg'),
(97, 27, 'd707350866b30e58d4fcdb11b8fe2086.jpg'),
(98, 27, 'c73fa5c44f1dbb0dc5ba29feefa5c762.jpg'),
(99, 28, '394669a5e05108b7630580cf38166d7a.jpg'),
(100, 28, '49080d6a7b972a5ee6ab4ad1d847bb6f.jpg'),
(101, 28, '9f8e5f64a9b0525849f3874e3f16e6ef.jpg'),
(102, 28, 'df1a215fba83b2ba705ac58961eb866e.jpg'),
(103, 29, '95a9b3069e20d62c263a92ee00abe700.jpg'),
(104, 29, 'fba4e2081243c25c8e9964fb6b3132db.jpg'),
(105, 29, '7c25388bcc2e003a07419222e4acbd5a.jpg'),
(106, 29, 'baa4419eb2c6cc148786a601a8425cde.jpg'),
(107, 30, 'e7294ef2182fcbec50b1da5b2b6739be.jpg'),
(108, 30, '1995c76da25d3c4b74ebfc389c2cbba9.jpg'),
(109, 30, '81b5245de41bc6dafee38a9c8c0f2360.jpg'),
(110, 30, 'e8e07c8be91599c02886d38fa91b5d0a.jpg'),
(111, 31, 'ce25798aa4d1d9ef6e4494074b9a63b8.jpg'),
(112, 31, '796a9de79446e1ac8e523ebc69b0608b.jpg'),
(113, 31, '21478b1b9664e833d4de6ecf76326f75.jpg'),
(114, 31, '00744294f24486e530f200fc987d799a.jpg'),
(115, 32, '19d96f6469e94e62e9eedf13053deef9.jpg'),
(116, 32, '01b3f70bccddb82ec057ff690b2976c7.jpg'),
(117, 32, '18b31d0dcdf81e8c8ecad72399cffef5.jpg'),
(118, 32, '22234c71abccce8ca49f9e01d5821ee8.jpg'),
(119, 33, '21a448e0112a7c67d8a020973c7b2109.jpg'),
(120, 33, 'a9e382524bd1724200b075a9d5d775bc.jpg'),
(121, 33, '89e2e7dfc2006660edf47c690ce272b8.jpg'),
(122, 33, '385f50c409a562821250e8cc47848169.jpg'),
(123, 34, '904479a1e0d74326f097a5dcd3a74c5f.jpg'),
(124, 34, '03b6aadee00599b461a8d618337269a2.jpg'),
(125, 34, 'efea27eb358ad9b762323595ca2a6f41.jpg'),
(126, 34, '5a902a76f186b0e298e0d248db3a5063.jpg'),
(127, 35, '1c8027281193a2537a09f8846a5578fb.jpg'),
(128, 35, 'abe08519f4e6ac4456c892009c28e7e9.jpg'),
(129, 35, '6e83c0368b42959c668ed6cc3b1ce427.jpg'),
(130, 35, 'baaa3fe4b116839b10c89046b002db73.jpg'),
(131, 36, '0e8f7b59f76412dcc4afde7622c5585e.jpg'),
(132, 36, 'dab4d796dff9aca750f532550df0074d.jpg'),
(133, 36, '674c29cb879e20be3e0d12accb43a750.jpg'),
(134, 36, '344686f8a6394c81fefacc8cf8935574.jpg'),
(135, 37, '56d1c725f7e537a84caade3c18e6bbb2.jpg'),
(136, 37, '75eca930a0132428babd43e799175ace.jpg'),
(137, 37, 'a284a391bcdb65b47dd78da338416ce4.jpg'),
(138, 37, 'a068a61838068f8cc9f9780003862302.jpg'),
(139, 38, '4cd2d5b7d26464040e40c55790d55289.jpg'),
(140, 38, '775b528966a1ceea8a38f322c5a99afc.jpg'),
(141, 38, '48842a822b90f36566d0b41a20cce074.jpg'),
(142, 38, '3135118eea98261a6772faff9b4a5346.jpg'),
(143, 39, '95ab19aaa12c37af2b650824d94ef279.jpg'),
(144, 39, '0954cacb2ab7d236196bf89de54df0e6.jpg'),
(145, 39, '876f9cfd77dc4d45e7c8cd82c473c0e9.jpg'),
(146, 39, 'e0d9605c804bbfa7dcc9ebf42b1eb6ba.jpg'),
(147, 40, 'fae210716d9846ee157f49e07565b0fc.jpg'),
(148, 40, '69e6963c911de6ef8d75e53428343593.jpg'),
(149, 40, '7a3d6559bf1f45efd739bc4df0fe1244.jpg'),
(150, 40, 'dd5555689d8b012856272411b9b3bca7.jpg'),
(151, 41, '7ad5227362ea4eddd808e09e8530e7f1.jpg'),
(152, 41, '54f2f83c67bab49477fb02e905c2e695.jpg'),
(153, 41, 'ad26f8333efcd85051ae85cffbe51da1.jpg'),
(154, 41, 'c49669a682636451164ba6f66466656d.jpg'),
(155, 42, 'f49b2fe0eb07e35d4724c6a0402e6b5a.jpg'),
(156, 42, 'e7e10ea48f8faa1d776dbbf626c2a782.jpg'),
(157, 42, '94801e3a1ad0711e31b07413e8c4e8cd.jpg'),
(158, 42, '9bc4e17b1a63d0dfa4c233b3214ddea5.jpg'),
(159, 43, 'f7ca21e23eb66916f6d51dc67358f047.jpg'),
(160, 43, 'fa01a224c43b973127f8ec3116db5a91.jpg'),
(161, 43, '7387924b381d821e04ce94be88618f4b.jpg'),
(162, 43, '39e6f76e12126847f88c5405ba8e7f3f.jpg'),
(163, 44, 'ebcf345462f332578af6456b31cd155b.jpg'),
(164, 44, 'c968bd314bbc0a52b95a9178ee4685ec.jpg'),
(165, 44, '2610eb7566a1bd46b7c184de2ff4d1f7.jpg'),
(166, 44, '5fbbd4628f2a4d4f5ebd99c1faf72777.jpg'),
(167, 45, '5aa8eb4253c93bef413cab29c1914176.jpg'),
(168, 45, '705890fe67410b6b9b575eb0b89973e6.jpg'),
(169, 45, '37b4d05b6cc5f2cfce9cd044f650de4b.jpg'),
(170, 45, '365e8947f519f8f5a58635e87ee57ef5.jpg'),
(171, 46, '5a42d1d44e50bd59c737473976de9867.jpg'),
(172, 46, 'a3ef29edbf174e76cf74df7d9a4d8ba1.jpg'),
(173, 46, '79dad1dba3205b1a1789a37ac6f881b9.jpg'),
(174, 46, 'b9b24814bff46bc742414a9ad6e7cb04.jpg'),
(175, 47, '62a5f37944f176cc50cd27b7fd03c26e.jpg'),
(176, 47, '36620cfdc629cab5839b303a3ebf0545.jpg'),
(177, 47, 'ed0a8d28e546a46e11a1e9ba49fbd6bb.jpg'),
(178, 47, '2bdc8cea1a8d4d3595bd3a4efff7e05d.jpg'),
(179, 48, '1fb97fc9ceed4cb953c549830426018c.jpg'),
(180, 48, 'a3e86674de4e56573ed654fd26fa711b.jpg'),
(181, 48, 'd37460aee8e388c03aba9b96968348f0.jpg'),
(182, 48, '3edd21fa37c75ad9a7395d58319f58a0.jpg'),
(183, 49, '2cba3ba73a6bbc8407b58ee513d607a2.jpg'),
(184, 49, '82c257832e2b7c3e62d028f11b9706aa.jpg'),
(185, 49, 'f6b443695bb72b68e6198d3c57b976d5.jpg'),
(186, 49, '562a21d0864f4df66d64245b38f633bc.jpg'),
(187, 50, 'c36441359c810ed91d2f578c4b10ba1b.jpg'),
(188, 50, 'e02c54deda28abe443a14a08eccd2f49.jpg'),
(189, 50, 'e8f241f39e16d25e4b410c44626448dd.jpg'),
(190, 50, '6582ecce79fa60dc193a77e7c7ef9df8.jpg'),
(191, 51, '59bcf902f9734b3a4bdf7a89178c0516.jpg'),
(192, 51, '7624106a56d239c66b4caf0f5bfbaa5d.jpg'),
(193, 51, '35dd79353c44c8574105220ceac252d8.jpg'),
(194, 51, 'd0ba6367fb864f49714ea728ae75cceb.jpg'),
(195, 52, 'da420041d03d6f1d762dd2a59f55157e.jpg'),
(196, 52, '1554b6420fac5cc40db25d0785dc0ebc.jpg'),
(197, 52, '4c2aecd05d349b1e87ec90a66d2b0bd5.jpg'),
(198, 52, 'd9e6896be485fc86c390814e2e0308db.jpg'),
(199, 53, 'f7faeefec2c517c395dd38ecefabcec5.jpg'),
(200, 53, 'af2add1ea914dc84d8c1f8f209e25bd1.jpg'),
(201, 53, '93aaf1d3a09240cd3ed00b052a9fcb10.jpg'),
(202, 53, '042b31d7f66d8bcb85d5916ef5e13c5a.jpg'),
(203, 54, '222d5e73dfb724998f59eb9ec9f97a69.jpg'),
(204, 54, '67d4ec70d7d32e3d4a9278b4e679e322.jpg'),
(205, 54, 'd3e46202f024ab4282d4e09de8b05451.jpg'),
(206, 54, '6d873b2b3653703f1cfc7dc688d9f229.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `cate`
--

CREATE TABLE `cate` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `cName` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `cate`
--

INSERT INTO `cate` (`id`, `cName`) VALUES
(1, '手机通讯'),
(2, '电脑产品'),
(3, '传统家具'),
(4, '精品服装'),
(5, '名牌箱包');

-- --------------------------------------------------------

--
-- 表的结构 `orderbiao`
--

CREATE TABLE `orderbiao` (
  `id` int(10) UNSIGNED NOT NULL,
  `pid` int(10) NOT NULL,
  `pName` varchar(100) NOT NULL,
  `cnum` int(10) UNSIGNED DEFAULT '1',
  `dsum` decimal(10,2) NOT NULL,
  `iPrice` decimal(10,2) NOT NULL,
  `user_id` int(10) NOT NULL,
  `addr` varchar(100) NOT NULL,
  `shname` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `status` varchar(2) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `orderbiao`
--

INSERT INTO `orderbiao` (`id`, `pid`, `pName`, `cnum`, `dsum`, `iPrice`, `user_id`, `addr`, `shname`, `phone`, `status`) VALUES
(29, 4, 'vivo X9 ', 1, '2121.00', '2121.00', 7, '', '', '', '0'),
(28, 19, '联想（ThinkPad）', 1, '7100.00', '7100.00', 7, '反对犯得上发', '2323', '23232323', '0'),
(27, 4, 'vivo X9 ', 1, '2121.00', '2121.00', 7, 'dfdf', '3434', '343', '1'),
(26, 3, 'OPPO R9s ', 1, '16515.00', '16515.00', 3, 'd', 'fd', 'fds', '1');

-- --------------------------------------------------------

--
-- 表的结构 `product`
--

CREATE TABLE `product` (
  `id` int(10) UNSIGNED NOT NULL,
  `pName` varchar(255) NOT NULL,
  `pSn` varchar(50) NOT NULL,
  `pNum` int(10) UNSIGNED DEFAULT '1',
  `mPrice` decimal(10,2) NOT NULL,
  `iPrice` decimal(10,2) NOT NULL,
  `pDesc` text,
  `pubTime` int(10) UNSIGNED NOT NULL,
  `isShow` tinyint(1) DEFAULT '1',
  `isHot` tinyint(1) DEFAULT '0',
  `cId` smallint(5) UNSIGNED NOT NULL,
  `user_id` tinyint(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `product`
--

INSERT INTO `product` (`id`, `pName`, `pSn`, `pNum`, `mPrice`, `iPrice`, `pDesc`, `pubTime`, `isShow`, `isHot`, `cId`, `user_id`) VALUES
(1, ' iPhone 6s', '1101', 0, '3988.00', '3999.00', '北京时间2015年9月10日，美国苹果公司发布了iPhone 6S[1] &nbsp;。iPhone 6s有金色、银色、深空灰色、玫瑰金色。屏幕采用高强度的Ion-X玻璃，处理器采用苹果A9处理器，CPU性能比A8提升70%[2] &nbsp;，图形性能提升90%，后置摄像头1200万像素，前置摄像头500万像素。摄像头对焦更加准确，CMOS 为了降噪采用“深槽隔离”技术，支持4K视频摄录。数据连接方面，支持23个频段的LTE网络和2倍速度的WIFI连接。于2015年9月25日中国大陆与海外同步发售[3] &nbsp;。北京时间2016年9月8日，2016年苹果秋季新品发布会上发布iphone 6S/6splus 32GB版本[4] &nbsp;。iPhone 6s 4588元起售，iPhone 6s Plus 5388元起售。<br />', 1495726479, 1, 0, 1, 1),
(2, 'Apple iPhone7 ', '1102', 1000, '1234.00', '1111.00', 'iPhone 7是Apple（苹果公司）第10代手机，北京时间2016年9月8日凌晨1点在美国旧金山比尔·格雷厄姆市政礼堂2016年苹果秋季新品发布会上发布。拥有金色、银色、玫瑰金色、黑色、亮黑色、红色(特别版，后增加)六种颜色。<br />', 1495727023, 1, 0, 1, 1),
(3, 'OPPO R9s ', '1103', 0, '15651.00', '16515.00', 'OPPO R9s在配置上的提升主要集中在处理器和摄像头，依然采用5.5英寸1080p屏幕（超窄黑边设计，外层覆盖的是大猩猩5代玻璃），4GB RAM+64GB存储的内存组合，处理器是基于14nm工艺的高通骁龙625（主频2GHz），内置3010mAh容量电池，支持VOOC闪充，运行基于Android 6.0的ColorOS 3.0，摄像头为双1600万像素，其中后置为索尼和OPPO定制研发的IMX398传感器。', 1495727798, 1, 0, 1, 1),
(4, 'vivo X9 ', '1104', 0, '5615.00', '2121.00', 'vivo X9主要特点为搭载了两个前置摄像头，一个2000万索尼定制IMX376传感器摄像头，一个800万的专业级[3] &nbsp;虚化摄像头，协同拍照可以拍摄出大光圈效果的人像照片。vivo X9搭载了高通骁龙八核处理器（2.0GHz），采用了5.5寸的1080P屏幕，4G RAM和64G的ROM组合，配备3040mAh的电池，并支持双引擎闪充。<br />', 1495728091, 1, 0, 1, 1),
(5, '华为 Mate 9', '1105', 0, '4412.00', '3800.00', 'Mate系列一直是华为终端产品中主打性能和体验的高端旗舰系列，而作为华为终端本年度压轴旗舰产品的Mate 9，将带给消费者以革命性的安卓智能手机体验。Mate 9采用1080P分辨率的5.9英寸屏幕，全金属机身设计，造型上采用符合人体工学的背面弧度及四周圆角设计，拥有更好的握持感。Mate 9搭载麒麟960处理器，性能全面升级，并且内置了基于Android 7.0的EMUI 5.0定制系统，同时使用了4000mAh更高密度的大容量电池和智电5.0技术，支持SuperCharge快充技术，Mate 9采用1200万像素彩色和2000万像素黑白的第二代徕卡双摄像头组合，首次采用内置于SOC的深度ISP图像处理芯片。华为同时还推出了Mate 9 Porsche Design限量版，该机型外观汲取了保时捷911车型的设计灵感，全对称设计机身、黑色竖向发丝纹理、石墨金属质感均体现出了Mate 9 Porsche Design限量版精致、时尚、华丽的产品气质。', 1495728466, 1, 0, 1, 1),
(6, '华为 P9', '1106', 1000, '2999.00', '3199.00', '外观上，华为P9延续了之前P8系列简约、方正的设计语言，使得华为P9拥有很高的品牌辨识度，看一眼就能知道这是华为的手机。使用了2.5D玻璃设计，同时机身中框也是带有一定的弧度处理，再加上后壳边缘的2.5D效果，整机相比前代在造型上看起来圆润了一些，这些改变使华为P9的握持手感获得了一定程度的提升。采用金属机身，背部注重突出金属的质感，保留了材质特有的细腻与光泽。', 1495728752, 1, 0, 1, 1),
(7, '魅族PRO6 Plus', '1107', 1000, '2999.00', '3099.00', '魅族PRO6 Plus是魅族2016年11月30日发布的一款年度旗舰手机，外观方面，魅族Pro6 Plus采用了成熟的一体金属机身设计，拥有香槟金、深孔灰、月光银3种机身颜色可选，正面配备经典的2.5D弧形玻璃，正面指纹Home键，并融入了心率检测功能。背面方面，魅族Pro6 Plus首次采用了3D曲面金属后壳，依旧配备了弧形天线设计，并且机身侧面的中框采用了Floating Design微弧边框设计，重塑了腰圆线，颜值提升。', 1495729112, 1, 0, 1, 1),
(8, '华为荣耀8', '1108', 1000, '2299.00', '2499.00', '华为荣耀8是2016年7月11日华为荣耀在上海举行的“美得与众不同”新品发布会上推出的全新旗舰手机，拥有双镜头、双2.5D玻璃、双功能指纹等强悍配置；其在外观ID设计上大胆创新，以全新设计理念和制造工艺展现了其时尚与潮流属性。[1]&nbsp;<br />\r\n华为荣耀8高配版的4G+64G全网通版售价2499元，4G+32G全网通版售价2299元，3G+32G全网通版、移动/联通版售价1999元，7月11日起开启预约，于7月19日上午10:08在Vmall华为商城、京东、天猫荣耀官方旗舰店、苏宁易购、唯品会和1号店开售。<br />', 1495729628, 1, 0, 1, 2),
(9, '华 为荣耀V9', '1109', 1000, '2899.00', '3099.00', '华为荣耀V9采用了全金属机身、纳米注塑天线带、双摄像头等设计，背面和上代保持着一定的区隔度。配置方面，该机拥有5.7英寸2K屏，2.4GHz八核处理器（或为麒麟960），6GB+128GB存储，8MP+双12MP摄像头组合，内置3900mAh电池，运行Android 7.0牛轧糖系统，整体较之上代荣耀V8提升明显。', 1495729904, 1, 0, 1, 2),
(10, '华为畅享6', '1110', 1000, '999.00', '1099.00', '<span style=\"color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;background-color:#FFFFFF;\">华为畅享6是华为2016年10月发布的一款智能手机，定位为“千元高能旗舰”，主打续航能力。华为畅享6机身薄至7.9mm，采用4100mAh电池、AMOLED屏幕，3GB+16GB存储组合、八核CPU，并搭载指纹识别和指关节识别技术。</span>', 1495730068, 1, 0, 1, 2),
(11, '小米MIX', '1111', 1000, '3499.00', '3499.00', '小米MIX全面屏概念手机的设计师是当代著名的设计大师、民主设计和极简设计的倡导者菲利普·斯塔克。硬件方面，小米MIX采用6.4英寸屏幕，骁龙821,4+128GB，1600万像素PDAF相机，4400mAh电池，支持QC3.0，支持高精度SAP辅助定位，支持HD高清音质。并且MIX还有尊享版，搭配6+256GB内存，配有专享定制真皮保护套。售价方面，小米MIX售价3499/3999。将“物质越少，人性越多”的设计理念，延续至每个细节。第一次实现了整机无 Logo ，正面无实体按键设计。全新设计的风琴式精美包装，配备了一个专为小米MIX[1] &nbsp;定制手工打造的纯皮保护壳。这一切，都只为让你从打开包装的那一刻起，就能感受到小米MIX那份独具匠心的魅力。[2-3] &nbsp;小米5日在美国CES展会上发布系列新品，其中包括小米Mix手机白色版（皓月白），以及小米电视4新品。', 1495730299, 1, 0, 1, 2),
(12, '小米Note2', '1112', 1000, '2999.00', '3099.00', '小米Note2采用了一块OLED双曲面玻璃屏，7系铝合金边框，屏幕尺寸为5.7英寸，分辨率则达到了1080p级别，采用超窄边框，拥有77.2%屏占比，后盖也回归了玻璃材质，另外还被赋予了曲面属性。颜色方面，小米Note2拥有亮黑色以及冰川银配色。<br />', 1495730479, 1, 0, 1, 2),
(16, 'Apple MacBook', '1201', 1000, '5555.00', '6555.00', '2015年2月WBIN推出一款全新超极本Expect UX2该产品被业内称为国版MacBook Air，其外观采用类似MacBook Air的全金属机身，及高于MacBook Air高清的显示屏及背光键盘，并搭载酷睿i5/i7处理器，最高版本搭载512GB 高速固态硬盘（苹果MacBook Air最高版本只配备256GB固态硬盘）；价格却只有MacBook Air的一半。<br />', 1495905244, 1, 0, 2, 1),
(17, 'Apple MacBook Pro', '1202', 1000, '8155.00', '8220.00', 'Apple发布了使用英特尔酷睿2双核处理器的MacBook Pro笔记本电脑。此代产品使用的处理器为英特尔酷睿双核。搭载Yonah代号的双核心处理器用以接替Banias/Dothan代号的奔腾M处理器。此处理器搭配SSE、SSE2、与SSE3技术，2 MB的二级缓存与虚拟化技术。', 1495905416, 1, 0, 2, 1),
(18, '戴尔DELL灵越燃7', '1203', 1000, '6550.00', '6700.00', '这款戴尔Inspiron灵越14R AMD版本采用了贝壳形圆润边角设计，银色包边更加简洁，LCVM plus（Less Conductive Vacuum Metallization），这种工艺的中文名字是顶盖以及机身掌托拉丝纹理材质工艺，它具有类金属光泽和拉丝效果，同时具有更好的散热性以及低导热性，手指触摸感舒适不容易留下指纹。', 1495905555, 1, 0, 2, 1),
(19, '联想（ThinkPad）', '1204', 1000, '6800.00', '7100.00', 'ThinkPad”这个名称的灵感来自IBM的便笺簿。每一位IBM的雇员或到IBM训练中心受训的人，都会拿到一本便笺簿（“便笺簿”英文为“pad”），上面印着企业的座右铭“THINK”。在一次讨论便携式电脑产品名称的会议上，一名与会者随手将一本这样的便笺簿甩到半空然后落在了会议桌上，另一名与会者受此启发提出可以用“ThinkPad”这个名称。起初IBM高层一度反对使用这个名称，因为以前IBM一直使用数字为标识产品型号。但是“ThinkPad”这个名称受到广大雇员和客户的极大欢迎和喜爱，最终IBM高层妥协同意使用“ThinkPad”作为产品名称。', 1495905744, 1, 0, 2, 1),
(20, '宏碁(acer)暗影骑士', '1205', 1000, '4700.00', '4999.00', 'Predator掠夺者G9的整体外观设计灵感来自星际战舰，锐利的切边设计，酷炫散热孔设计，棱角分明。机身采用深邃酷黑加激情炫红双色搭配，并有红色灯带与Logo背景灯装饰。上盖与C面采取PC+玻璃纤维材质，在保持强韧坚固的同时，具备极佳的抗弯曲性。外覆盖类肤质涂层，表面柔和舒适。', 1495905877, 1, 0, 2, 1),
(21, '华硕顽石四代尊享版', '1206', 1000, '5999.00', '6211.00', '华硕电脑股份有限公司创立于1989年，为全球最大的主板制造商，并跻身全球前三大消费性笔记本电脑品牌。华硕始终对质量与创新全力以赴，不断为消费者及企业用户提供崭新的科技解决方案。', 1495906089, 1, 0, 2, 1),
(22, '华硕顽石四代FL5700U ', '1207', 1000, '6522.00', '6800.00', '2016年更新的顽石系列产品，这款FL5700U仍然保持了极高的性价比，模具也有一定的小改动。15.6英寸屏幕，分辨率1080P。内置i7-7500U低压CPU，是七代酷睿低压里边的旗舰，性能方面不管是CPU还是核芯显卡的性能都有长足的提高。4GB内存，但支持扩展，1TB机械硬盘，还有一块R5 M240独立显卡，聊胜于无。FL5700U使用了完整键盘的设计，包括数字小键盘，娱乐方面则有华硕的SomicMaster系统。这样的搭配，十分适合那些追求CPU性能，但是没有便携需求的人群', 1495906434, 1, 0, 2, 1),
(23, '惠普(HP)暗影精灵II代', '1208', 1000, '4500.00', '4900.00', '它搭载了英特尔Core i5-6300HQ处理器、8GB运行内存以及一块256GB的SSD，对于游戏影响最大的显卡方面，暗影精灵II代采用了AMD Radeon RX 460显卡，这也是首款搭载14nm技术北极星架构RX 460独立显卡的笔记本，小编也是第一次接触到AMD的北极星架构，说实话还是有点期待，到底它在什么水准呢？现在北极星的首演开始了。', 1495906619, 1, 0, 2, 1),
(24, 'Razer 雷蛇 Blade', '1209', 1000, '17000.00', '18600.00', '新款14英寸Razer Blade灵刃是高性能与便携性的出色结合。第七代英特尔&reg; 酷睿™ i7 四核处理器确保了流畅的性能表现。性能强大的 NVIDIA&reg; GeForce&reg; GTX 1060 显卡为你带来更快、更流畅和更细腻的游戏体验。 该产品有全高清和4K超高清两款屏幕配置可供选择。你也可连接虚拟现实头戴式设备，获得更为身临其境的游戏体验。 而 16GB DDR4 双通道内存、最高达1TB的PCIe SSD固态盘以及 Killer Networking 技术，也让你拥有同类产品中出类拔萃的性能体验。 如此强大的性能都融入了厚度仅有1.79cm的超轻超薄铝合金机身中，这使得 Razer Blade灵刃成为了同级别游戏本中的翘楚。', 1495906831, 1, 0, 2, 1),
(25, '联想(Lenovo)小新', '1210', 1000, '4800.00', '4900.00', '大“利”当前联想小新Bigger爆款4999元与前作不同，联想小新Bigger版采用15吋设计，屏幕为FHD高清屏，搭配GT840M显卡并且具有4GB显存，加上8GB内存1TB硬盘，让小新Bigger版.', 1495906954, 1, 0, 2, 1),
(26, '联丰(lianfeng) 电脑椅子', '1301', 1000, '300.00', '400.00', '<span style=\"color:#333333;font-family:tahoma, arial, &quot;font-size:14px;background-color:#FFFFFF;\">装配比较简单，基本安装到位，不存在孔不对位的情况。但是有个遗憾，后背有些低，没有头枕，如果你还是希望靠在椅背上小睡一会就断了这个想法。坐的还比较舒服，腰部支持，背后曲线可以感觉到。这个价格就这样了。</span>', 1495985755, 1, 0, 3, 1),
(27, '伯力斯（BECAUSES）', '1302', 1000, '168.00', '213.00', '舒适PU皮面腰垫，内置密度海绵，着重支撑酸痛部位，有效缓解久坐疲劳。<br />', 1495985888, 1, 0, 3, 1),
(28, '丽巢实木沙发', '1303', 1000, '2600.00', '2700.00', '中式客厅实木布艺沙发转角木沙发组合多功能沙发床带储物抽屉沙发 胡桃色三人位+茶水柜+贵妃位+茶几', 1495986072, 1, 0, 3, 1),
(29, '玛蒂诗家具', '1304', 1000, '2466.00', '2788.00', '美式沙发 实木真皮沙发 客厅家具古典卧室 欧式沙发138 双面雕花123组合', 1495986208, 1, 0, 3, 1),
(30, '海洋卫士电脑桌', '1305', 1000, '355.00', '500.00', '台式笔记本家用简易办公桌写字台简约书桌子 升级版100X50古橡木色', 1495986323, 1, 0, 3, 1),
(31, '沃富森', '1306', 1000, '1233.00', '1333.00', '<span style=\"color:#666666;font-family:Arial, &quot;font-size:16px;font-weight:bold;background-color:#FFFFFF;\">皮床 真皮床 北欧床1.5/1.8米 中式实木床 高箱储物软体皮艺床 850 真皮床(普通款) 1800*2000</span>', 1495986431, 1, 0, 3, 1),
(32, '华纳斯沙发', '1307', 1000, '2300.00', '2400.00', '<span style=\"color:#666666;font-family:Arial, &quot;font-size:16px;font-weight:bold;background-color:#FFFFFF;\">艺沙发简约客厅沙发 米白色(布艺坐包) 带坐包木椅</span>', 1495986558, 1, 0, 3, 1),
(33, '卡菲纳实木床', '1308', 1000, '3200.00', '3433.00', '<span style=\"color:#666666;font-family:Arial, &quot;font-size:16px;font-weight:bold;background-color:#FFFFFF;\">双人床 1.8/1.5米床 中式现代卧室家具 床+床头柜2个 1800*2000</span>', 1495986660, 1, 0, 3, 1),
(34, '蔓斯菲尔', '1309', 1000, '0.00', '0.00', '<span style=\"color:#666666;font-family:Arial, &quot;font-size:16px;font-weight:bold;background-color:#FFFFFF;\">电脑桌 家用台式 办公桌 现代简约 转角 书桌 双人桌子 黄木纹色</span>', 1495986735, 1, 0, 3, 1),
(35, '卡尔秀 ', '1310', 1000, '3250.00', '3400.00', '<span style=\"color:#666666;font-family:Arial, &quot;font-size:16px;font-weight:bold;background-color:#FFFFFF;\">真皮床 榻榻米床双人床 皮艺婚床 软体床可储物大床 803 真皮床(普通款+送1柜) 1800*2000</span>', 1495986823, 1, 0, 3, 1),
(36, '西服套装', '1401', 1000, '321.00', '355.00', '<span style=\"color:#666666;font-family:Arial, &quot;font-size:16px;font-weight:bold;background-color:#FFFFFF;\">男三件套职业正装韩版修身西装新郎伴结婚礼服 黑色(西服+西裤) 175/XL</span>', 1495987003, 1, 0, 4, 1),
(37, 'betu百图', '1402', 1000, '2155.00', '2111.00', '<span style=\"color:#666666;font-family:Arial, &quot;font-size:16px;font-weight:bold;background-color:#FFFFFF;\">翻领气质风衣外套女中长款2017春装新款1701T61 卡其色 M</span>', 1495987104, 1, 0, 4, 1),
(38, '思莱德', '1403', 1000, '124.00', '150.00', '<span style=\"color:#666666;font-family:Arial, &quot;font-size:16px;font-weight:bold;background-color:#FFFFFF;\">SELECTED夏季新款男士休闲时尚男士复古修身牛仔裤C|417232507 牛仔蓝 185/88A/XLR</span>', 1495987215, 1, 0, 4, 1),
(39, '茵曼', '1405', 1000, '134.00', '215.00', '<span style=\"color:#666666;font-family:Arial, &quot;font-size:16px;font-weight:bold;background-color:#FFFFFF;\">2017春装装新款文艺范纯色薄款风衣外套女中长款【1871061081】 浅水蓝 M</span>', 1495987315, 1, 0, 4, 1),
(40, '七匹狼短袖', '1406', 1000, '100.00', '500.00', '<span style=\"color:#666666;font-family:Arial, &quot;font-size:16px;font-weight:bold;background-color:#FFFFFF;\">T恤男2017年夏装新款男装多彩POLO衫男士纯棉翻领t恤衫2057 黑色 175/92A(XL)</span>', 1495987451, 1, 0, 4, 1),
(41, 'FIRS', '1407', 1000, '300.00', '500.00', '<span style=\"color:#666666;font-family:Arial, &quot;font-size:16px;font-weight:bold;background-color:#FFFFFF;\">西服男 2017春季新款商务休闲时尚单西 FXA39307灰色 74*114</span>', 1495987618, 1, 0, 4, 1),
(42, '金蒂情', '1408', 1000, '230.00', '250.00', '<span style=\"color:#666666;font-family:Arial, &quot;font-size:16px;font-weight:bold;background-color:#FFFFFF;\">夏装新款短袖职业装女装套装小西装女酒店前台银行空姐三件套工作服 黑色西装+裙子(送吊带) M(91-100斤以内)</span>', 1495987766, 1, 0, 4, 1),
(43, '花花公子', '1409', 1000, '231.00', '250.00', '<span style=\"color:#666666;font-family:Arial, &quot;font-size:16px;font-weight:bold;background-color:#FFFFFF;\">西服男外套2017新款春装两粒单排扣商务休闲格子修身单件男士西装 1703 XL</span>', 1495987860, 1, 0, 4, 1),
(44, '异姿', '1410', 1000, '251.00', '300.00', '<span style=\"color:#666666;font-family:Arial, &quot;font-size:16px;font-weight:bold;background-color:#FFFFFF;\">2017春夏女装仿真丝连衣裙新款大码宽松印花碎花裙中长 绿色 3XL</span>', 1495988023, 1, 0, 4, 1),
(45, '稻草人（MEXICAN）', '1501', 1000, '388.00', '488.00', '<span style=\"color:#666666;font-family:Arial, &quot;font-size:16px;font-weight:bold;background-color:#FFFFFF;\">潮女包斜挎包欧美时尚牛皮单肩包贝壳包菱格小包MYH70417L-06黑色</span>', 1495988229, 1, 0, 5, 3),
(46, '【一体化铝框】', '1502', 1000, '153.00', '211.00', '<span style=\"color:#666666;font-family:Arial, &quot;font-size:16px;font-weight:bold;background-color:#FFFFFF;\">EAZZ铝框拉杆箱万向轮行李箱 男女士登机箱20/24/28英寸旅行箱 高端 铝框-银色 20英寸-登机箱</span>', 1495988317, 1, 0, 5, 3),
(47, '爱华仕', '1503', 1000, '299.00', '1515.00', '<span style=\"color:#666666;font-family:Arial, \" font-size:16px;font-weight:bold;background-color:#ffffff;\"=\"\">PC拉杆箱6176 时尚万向轮行李箱 飞机轮旅行箱男女出差登机箱 20英寸黑色</span>', 1495988390, 1, 0, 5, 3),
(48, '稻草人', '1504', 1000, '155.00', '666.00', '<span style=\"color:#666666;font-family:Arial, &quot;font-size:16px;font-weight:bold;background-color:#FFFFFF;\">男士包包时尚休闲公文包商务包男手提包头层牛皮斜挎包电脑包50245M-02啡色</span>', 1495988543, 1, 0, 5, 3),
(49, 'DOODOO', '1505', 1000, '600.00', '800.00', '<span style=\"color:#666666;font-family:Arial, &quot;font-size:16px;font-weight:bold;background-color:#FFFFFF;\">女士包包斜挎包女单肩包女日韩简约小方包手提包OL通勤时尚女包 D6082 亚麻蓝</span>', 1495988612, 1, 0, 5, 3),
(50, '汉客', '1506', 1000, '151.00', '355.00', '<span style=\"color:#666666;font-family:Arial, &quot;font-size:16px;font-weight:bold;background-color:#FFFFFF;\">H8730 咖啡色20英寸精品万向轮旅行登机拉杆箱配密码锁</span>', 1495988694, 1, 0, 5, 3),
(51, '金狐狸', '1507', 0, '2515.00', '111.00', '<span style=\"color:#666666;font-family:Arial, &quot;font-size:16px;font-weight:bold;background-color:#FFFFFF;\">新款女包菱格单肩斜挎女士包包女牛皮链条包时尚简约百搭 986001F1A中板黑色</span>', 1495988768, 1, 0, 5, 3),
(52, '高尔夫GOLF ', '1508', 0, '1525.00', '515.00', '<span style=\"color:#666666;font-family:Arial, &quot;font-size:16px;font-weight:bold;background-color:#FFFFFF;\">男士手包柔软头层牛皮信封包手抓包大容量手拿包S582001黑色</span>', 1495988896, 1, 0, 5, 3),
(53, '七匹狼（SEPTWOLVES）', '1509', 151, '151.00', '202.00', '<span style=\"color:#666666;font-family:Arial, &quot;font-size:16px;font-weight:bold;background-color:#FFFFFF;\">男包单肩包男士斜挎包 头层牛皮时尚休闲包1A01026A咖色</span>', 1495988972, 1, 0, 5, 3),
(54, '瑞动', '1510', 151, '562.00', '888.00', '<span style=\"color:#666666;font-family:Arial, &quot;font-size:16px;font-weight:bold;background-color:#FFFFFF;\">铝框PC+ABS旅行行李箱拉杆箱24英寸万向轮MT-5558-02T00黑色</span>', 1495989043, 1, 0, 5, 3);

-- --------------------------------------------------------

--
-- 表的结构 `shopcart`
--

CREATE TABLE `shopcart` (
  `id` int(10) UNSIGNED NOT NULL,
  `pName` varchar(50) NOT NULL,
  `iPrice` decimal(10,2) NOT NULL,
  `cnum` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `shopcart`
--

INSERT INTO `shopcart` (`id`, `pName`, `iPrice`, `cnum`, `user_id`, `p_id`) VALUES
(15, 'Apple MacBook Pro', '8220.00', 1, 0, 17),
(35, 'OPPO R9s ', '16515.00', 2, 3, 3),
(17, 'Apple iPhone7 ', '1111.00', 1, 1, 2),
(18, ' iPhone 6s', '3999.00', 1, 1, 1),
(19, 'OPPO R9s ', '16515.00', 1, 1, 3),
(36, ' iPhone 6s', '3999.00', 6, 7, 1),
(34, 'OPPO R9s ', '16515.00', 1, 3, 3),
(37, 'vivo X9 ', '2121.00', 1, 7, 4),
(38, 'vivo X9 ', '2121.00', 1, 7, 4),
(39, ' iPhone 6s', '3999.00', 1, 0, 1);

-- --------------------------------------------------------

--
-- 表的结构 `shopcomment`
--

CREATE TABLE `shopcomment` (
  `id` int(10) UNSIGNED NOT NULL,
  `pid` int(10) NOT NULL,
  `comment` text NOT NULL,
  `user_id` int(10) NOT NULL,
  `createTime` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `shopcomment`
--

INSERT INTO `shopcomment` (`id`, `pid`, `comment`, `user_id`, `createTime`) VALUES
(11, 4, '健康的是放假咯但是jfk激动撒看飞机喀什就酒店房卡四道口附近卡死的积分', 7, '2017-05-31'),
(10, 3, 'sfafad', 3, '2017-05-31'),
(12, 4, '非常好', 7, '2018-01-23');

-- --------------------------------------------------------

--
-- 表的结构 `store`
--

CREATE TABLE `store` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` char(32) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `store`
--

INSERT INTO `store` (`id`, `username`, `password`, `email`) VALUES
(1, 'czx', '5cf965b033624583dc6f1a49fb6c77aa', 'czx@qq.com'),
(2, 'xiaoxin', '14d5cef31a2fccde671fea8106c27e2e', 'xiaoxin@qq.com'),
(3, 'ldh', '3f5453e192e572cbc2bed32097c7aaaf', 'ldh@qq.com');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` char(32) NOT NULL,
  `sex` enum('男','女','保密') NOT NULL DEFAULT '保密',
  `email` varchar(50) NOT NULL,
  `face` varchar(50) NOT NULL,
  `regTime` int(10) UNSIGNED NOT NULL,
  `activeFlag` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `sex`, `email`, `face`, `regTime`, `activeFlag`) VALUES
(1, 'lhd', '3f5453e192e572cbc2bed32097c7aaaf', '女', 'ldh@qq.com', 'b5a5694d00643fcbc4ba8c1c05198cce.jpg', 1495725643, 0),
(2, 'kk', 'dc468c70fb574ebd07287b38d0d0676d', '男', 'kk@qq.com', '83b4584a1b22eaa05683d97a4a235fda.jpg', 1495818159, 0),
(3, '123', '202cb962ac59075b964b07152d234b70', '女', '1010357@1321.com', '7ace90321b2a9ede62e8577c8e47b084.jpg', 1496148667, 0),
(6, '11', '6512bd43d9caa6e02c990b0a82652dca', '女', '1010357@1321.com', '7f259dee2469101b4c5af552958ce535.png', 1496149126, 0),
(7, 'chen', 'a1a8887793acfc199182a649e905daab', '男', 'chen@qq.com', '98d5e0cad4df164204f4fda487ffe950.jpg', 1496196629, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cate`
--
ALTER TABLE `cate`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cName` (`cName`);

--
-- Indexes for table `orderbiao`
--
ALTER TABLE `orderbiao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pName` (`pName`),
  ADD UNIQUE KEY `pName_2` (`pName`);

--
-- Indexes for table `shopcart`
--
ALTER TABLE `shopcart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shopcomment`
--
ALTER TABLE `shopcomment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `admin`
--
ALTER TABLE `admin`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- 使用表AUTO_INCREMENT `album`
--
ALTER TABLE `album`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=212;
--
-- 使用表AUTO_INCREMENT `cate`
--
ALTER TABLE `cate`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- 使用表AUTO_INCREMENT `orderbiao`
--
ALTER TABLE `orderbiao`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- 使用表AUTO_INCREMENT `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
--
-- 使用表AUTO_INCREMENT `shopcart`
--
ALTER TABLE `shopcart`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- 使用表AUTO_INCREMENT `shopcomment`
--
ALTER TABLE `shopcomment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- 使用表AUTO_INCREMENT `store`
--
ALTER TABLE `store`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
