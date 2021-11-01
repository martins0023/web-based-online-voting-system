-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2021 at 02:38 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register2`
--

-- --------------------------------------------------------

--
-- Table structure for table `block1`
--

CREATE TABLE `block1` (
  `uniqueid` int(100) NOT NULL,
  `fullname` text NOT NULL,
  `maricno` varchar(100) NOT NULL,
  `email` text NOT NULL,
  `username` varchar(100) NOT NULL,
  `department` text NOT NULL,
  `level` text NOT NULL,
  `password` varchar(100) NOT NULL,
  `school_id` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `block1`
--

INSERT INTO `block1` (`uniqueid`, `fullname`, `maricno`, `email`, `username`, `department`, `level`, `password`, `school_id`) VALUES
(0, 'c7374246e44af4e97d6bf701146ef533', '648abc20062abb20226d4bf3611a8ceb', '1751ec75bdc902ad32dc9bc8bc73967d', '723e1489a45d2cbaefec82eee410abd5', '58c1208cb24fcd88b24129b8a1506d12', '21627b0bc51d0a237d6857e448527931', '723e1489a45d2cbaefec82eee410abd5', ''),
(2147483647, 'Yekini Yusuf', '', 'Yekini@gmail.com', 'Yekini', 'Comp sci', 'LEVEL 2', '3afc9206289e2b355a1b4a73f8fa871b', ''),
(2147483647, 'd707df445a071413d3b92cf79672c112', '', '572625c5aebd01c6fedfbb7f9de46edf', 'f0ea20513fcd64515b91581d117af0a0', '1a63991e674e989e13fd39c46a0a180e', '0e90589a153e380b828beaa5dff272c6', 'a74dcd689627c284eb45efbcd1052633', ''),
(0, 'ddbf3f6260082e1189af2485b4497607', '', '8284b457f5465273ae2beb3ebe6da092', 'e3e88d6104bd19b1288f2db6da5efb49', '1a63991e674e989e13fd39c46a0a180e', '8ff0e48d22a4d5c59bc4f63b9b84da8c', '868adacb695e4b2bc2d8eb674c4ccbf7', ''),
(0, 'b6d8aa327b5725aa6edf9eb89f765ceb', '', '10378cd653c64084591bad69040897d8', '47b3d2d962ff2f2818d6a8a813c667c1', '1a63991e674e989e13fd39c46a0a180e', 'df33a11afc88fc38539099b27ec89ff7', '2fe04e524ba40505a82e03a2819429cc', ''),
(5, 'aa06e1aa35f40731b3455b75f57677f7', '', 'ea14d267a438594414fc0e5e1439cb5b', '45b462e45a4ffc69222c2fbb518cd57b', '1a63991e674e989e13fd39c46a0a180e', '228e9da47384bacde793a2b78d488bb0', '7b3d40a155f96184b0af850821d5435a', ''),
(8, '5b0ab3ed00fc911f8cb99fc319a2f73c', '', 'e4763910e17f267455d708254712bba5', '92b288a6d74dcd5795fd44bee17aa7f4', '284fcfb183d1919532b3c7a6dba33873', '2a632c84ec1fbbfb6c7e19bca371a62d', 'c3c280b6a1bfb4bb11f3ef5d975ff7b9', ''),
(7, '3b45e672b5e42b37d517dbad0f6fef45', '', '823ce4d8ae1f7008c6a02b1546ab5574', 'd96fe37fcfcdf139dfdc30dfba8422d1', 'a912a94d79b5124d876951f96ebb256f', 'e77a5832d153509c33adb9ae3fd9f349', 'd96fe37fcfcdf139dfdc30dfba8422d1', ''),
(0, '3b45e672b5e42b37d517dbad0f6fef45', '', '823ce4d8ae1f7008c6a02b1546ab5574', 'd96fe37fcfcdf139dfdc30dfba8422d1', 'a912a94d79b5124d876951f96ebb256f', '21627b0bc51d0a237d6857e448527931', 'd96fe37fcfcdf139dfdc30dfba8422d1', ''),
(989, '3b45e672b5e42b37d517dbad0f6fef45', '', '823ce4d8ae1f7008c6a02b1546ab5574', 'd96fe37fcfcdf139dfdc30dfba8422d1', 'a912a94d79b5124d876951f96ebb256f', '21627b0bc51d0a237d6857e448527931', 'd96fe37fcfcdf139dfdc30dfba8422d1', ''),
(98, '25262ae2640d247c60c60229e2a8f473', '', '7c93d9e6d03f31ed52977ca929bc674a', 'b79b26f379c5ee153ea2bf6bf4e127dd', '284fcfb183d1919532b3c7a6dba33873', '21627b0bc51d0a237d6857e448527931', 'd96fe37fcfcdf139dfdc30dfba8422d1', ''),
(2147483647, 'bb103e1003a127aeedc1b8531516b84e', '', '6025b24943f30238ba597390a88f43ad', '1face21c390284956bed21c8b257a817', '284fcfb183d1919532b3c7a6dba33873', '21627b0bc51d0a237d6857e448527931', '1face21c390284956bed21c8b257a817', ''),
(51, 'b693d96ea532108b96b0a72f004f6b32', '', '30c8e65cbc128ca5c493933854985ce3', '055d55fe7407c3ac14b7ab74ca1fb239', '58c1208cb24fcd88b24129b8a1506d12', '2a632c84ec1fbbfb6c7e19bca371a62d', 'd6d91c7a09916a27ac39baa5b011d37d', ''),
(0, 'c7374246e44af4e97d6bf701146ef533', '648abc20062abb20226d4bf3611a8ceb', '1751ec75bdc902ad32dc9bc8bc73967d', '723e1489a45d2cbaefec82eee410abd5', '58c1208cb24fcd88b24129b8a1506d12', '21627b0bc51d0a237d6857e448527931', '723e1489a45d2cbaefec82eee410abd5', ''),
(20, '6434cf8d726528f669c77142c4346ef6', '25449aad616b4f71c2b228cb75f514b8', '987e2407b2eb01c978f173247b357a2e', '2794d223f90059c9f705c73a99384085', '80c18801f6ce7e664f788b70032cdcd1', '168030b9e39330f12ddb9ed9b64be56d', '2794d223f90059c9f705c73a99384085', ''),
(97, 'd2b4dd9dc378b113ea791990b7bd06e4', 'd41d8cd98f00b204e9800998ecf8427e', '6e088c3cf35987ad4e3dfc90e7b8dec6', '4d10b48f4d2676565b635f63fab11d6f', 'ac98692096eb7b5b56ad92bb56518045', '23bbb8e71ba6075689613fca246a6d53', '1b3231655cebb7a1f783eddf27d254ca', ''),
(1, '2db262271ede04cecc9b65caa8815171', 'd41d8cd98f00b204e9800998ecf8427e', '8ffe13db387928c1da9d343910bb088a', 'bb9ff84d601c30232e1c7a01dda679a0', '5e855b777d2be2213aef85e198cf2c62', '2a632c84ec1fbbfb6c7e19bca371a62d', '7e138f109addb079ab60c5e5ac86fe35', ''),
(0, '7c9c1e1acf65fd631ba182f83f33e503', 'd41d8cd98f00b204e9800998ecf8427e', '3a514517685abdef55063aee28f217e6', 'c8400628587a094c1e2e979b652d9047', '80c18801f6ce7e664f788b70032cdcd1', '168030b9e39330f12ddb9ed9b64be56d', 'c8400628587a094c1e2e979b652d9047', ''),
(2147483647, 'd10fb4444b3a504f0c724a45a86f69a5', 'd41d8cd98f00b204e9800998ecf8427e', 'feebaeaab5cb61a816c4e4b07cc132fe', '63eb647eaee4bfc6499bef0f9a040e58', '01d1648d75095f10e4b85f6074ed6bf8', 'f9d6782d609f2759f2eb926fa4ec1b53', '63eb647eaee4bfc6499bef0f9a040e58', ''),
(76, '4b7395b27b9651416b5059f2513b2b42', 'd41d8cd98f00b204e9800998ecf8427e', 'd9d0bad368d9ff60ae79a362148070cc', 'ab38729e0c4a2d5201b491f7b1288e02', 'c71563c4ae48cc1bbd2e7913366cdf7e', '2a632c84ec1fbbfb6c7e19bca371a62d', 'ab38729e0c4a2d5201b491f7b1288e02', '');

-- --------------------------------------------------------

--
-- Table structure for table `block2`
--

CREATE TABLE `block2` (
  `uniqueid` bigint(100) NOT NULL,
  `fullname` longtext NOT NULL,
  `maricno` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `department` mediumtext NOT NULL,
  `level` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `block2`
--

INSERT INTO `block2` (`uniqueid`, `fullname`, `maricno`, `email`, `username`, `department`, `level`, `password`) VALUES
(88, 'a9da96a649e466ce3ae568a5a3a06420', '', 'c30b22503f4f645394a3b2937370f38b', 'd981630a2687011d2dd5a93a9a645412', 'b966583b912a614a205885f0e251b232', '8a33c521eb819111c163961965d67f2f', 'a74dcd689627c284eb45efbcd1052633'),
(0, 'e92a6f5eb95a6483ffd03781fb0317b8', '', '3656a1273f14fc580e5e340240e86412', '85f2ff92c56a2b1a299133b4db654276', 'b966583b912a614a205885f0e251b232', 'd5d1160ded30c569552d6189aa768c23', '868adacb695e4b2bc2d8eb674c4ccbf7'),
(0, '34a214b871108b198ff1f76ad6f26823', '', 'd899a48cb9f6b7f958c4651aab737530', 'ff3565b9fc5b07d95ed1f11efa5c4de8', 'b966583b912a614a205885f0e251b232', 'e9326c34f14466a9d9d646a96c174a1f', '2fe04e524ba40505a82e03a2819429cc'),
(0, 'f33865897c27263689d33ecfcf9d9b8a', '', 'b19cdccebf5bd39de90f0e93b1df3043', 'e4d04458e5cd140ea075c1c4a7c6bd7f', 'b966583b912a614a205885f0e251b232', '5f19a2afc128b28eb261e01db2a746a3', '7b3d40a155f96184b0af850821d5435a'),
(3, '43c32b07183d46bd4721f0502db31c43', '', '02635750aea52e42e7d98a77cdab603d', '106b6860c3a3c57d82b46cdf9ec8b80f', 'ba7ba45fe5cfb3770203c19dabbd7024', '292ea7b005085471f5b1542acd7f3d0b', 'c3c280b6a1bfb4bb11f3ef5d975ff7b9'),
(0, '03426ffa57aebd0739ae8a04dd106bbd', '', '8d1b8ba02c77cf876b9fc08c8e4bac97', '4d7784dc0fa5c920f44399311d9ca6d3', 'd717907c60e46a77865e14d4d356eed7', 'edd3f1af7a3a79c61dac2b7d3b9785d7', 'd96fe37fcfcdf139dfdc30dfba8422d1'),
(9, '03426ffa57aebd0739ae8a04dd106bbd', '', '8d1b8ba02c77cf876b9fc08c8e4bac97', '4d7784dc0fa5c920f44399311d9ca6d3', 'd717907c60e46a77865e14d4d356eed7', 'e41248ddce3a7327f09275c50e61aee2', 'd96fe37fcfcdf139dfdc30dfba8422d1'),
(0, '03426ffa57aebd0739ae8a04dd106bbd', '', '8d1b8ba02c77cf876b9fc08c8e4bac97', '4d7784dc0fa5c920f44399311d9ca6d3', 'd717907c60e46a77865e14d4d356eed7', 'e41248ddce3a7327f09275c50e61aee2', 'd96fe37fcfcdf139dfdc30dfba8422d1'),
(0, '2752dbbf6fdf52bbe30fe1d8d968040f', '', 'b1201e5b288b26e58d1aa52f1128bde6', '4797c952911c1a90937e261727cdd9fe', 'ba7ba45fe5cfb3770203c19dabbd7024', 'e41248ddce3a7327f09275c50e61aee2', 'd96fe37fcfcdf139dfdc30dfba8422d1'),
(0, 'a2098b233718a5a4fb53487314059bd0', '', '0ad27985992e316f500ff443a8d99ced', 'f8faf4a02ac339fd044bbea939d83426', 'ba7ba45fe5cfb3770203c19dabbd7024', 'e41248ddce3a7327f09275c50e61aee2', '1face21c390284956bed21c8b257a817'),
(119, 'db686254e2afa378d4a333032ddbe362', '', '7694deb961b3cd089fd22a2cb64682b4', 'eeb0a64c5bce885779227f35b1e67f2d', 'f454b7c1159aac2de4e42ff2d360d1e0', '292ea7b005085471f5b1542acd7f3d0b', 'd6d91c7a09916a27ac39baa5b011d37d'),
(20, '3a916c7fa89cf8642c10e0c1cf70130b', 'b1bf8b1f9a37cb046ac0e8ab3239192d', '81a8aa7463c4509b53234abd6838e973', '05b72ed011c8e481d14fbf369bd6ec69', 'f454b7c1159aac2de4e42ff2d360d1e0', 'e41248ddce3a7327f09275c50e61aee2', '723e1489a45d2cbaefec82eee410abd5'),
(0, 'b592aff85b9e8316e52007c6960dddde', '1ff74a8e63d1580499aa17b33225c7d4', '4e9cedb7deec4708332766586daf0d12', 'd0a29d3812f01152fa82238b28eaff92', 'ff982b82ac864d16c8ea3b80994f8a29', 'a5735e646f5706e4af8080292e9338a9', '2794d223f90059c9f705c73a99384085'),
(0, '3ea610dfd9afc5be93dae1f6065f6f57', '74be16979710d4c4e7c6647856088456', '6fdf7b26ae00e3e063e0d0a58b79dde1', 'a1cf571436baf09d4430331accbdc15b', '08cdce011965f7b7983e3b8ed4353d65', '2a289132b6e35c43c8924d9f3dfd7f78', '1b3231655cebb7a1f783eddf27d254ca'),
(0, 'd458fd15d54b250aeed5ec4f52ecd8ad', '74be16979710d4c4e7c6647856088456', '8f51ba4205afddece300a14ffef15ce7', '0165d14230091e422a69fb265975267f', 'c8b6f138ac867a8f31b37d554fbee32e', '292ea7b005085471f5b1542acd7f3d0b', '7e138f109addb079ab60c5e5ac86fe35'),
(0, 'a7431541b8f70a1e35849660fd6f80d8', '74be16979710d4c4e7c6647856088456', '8f430d6ada4fb093ccb981550c06a7d5', '26d1a6e58de683e0417ccc3eff62b906', 'ff982b82ac864d16c8ea3b80994f8a29', 'a5735e646f5706e4af8080292e9338a9', 'c8400628587a094c1e2e979b652d9047'),
(860, '419cac8a3fae1a85a7e3fe7d6f63b076', '74be16979710d4c4e7c6647856088456', '1e1a1b0510e52825a295def725c77d00', 'fe399a8d60e73b0ab932bac77278571c', '7bc8e69faa9cfeac6848eac840359c0a', 'f60b0d12fdd2f4dc9c4cf4c26f3a5b24', '63eb647eaee4bfc6499bef0f9a040e58'),
(67964, 'ed471e6bd86221ebc5f72fea8a0442e0', '74be16979710d4c4e7c6647856088456', '61b3842904090c6f8b2bd94004492532', '659c0acc412e9605a39b9072f4f932f9', '7608a2a0a6215926e7acbcb72445801e', '292ea7b005085471f5b1542acd7f3d0b', 'ab38729e0c4a2d5201b491f7b1288e02');

-- --------------------------------------------------------

--
-- Table structure for table `block3`
--

CREATE TABLE `block3` (
  `uniqueid` bigint(100) NOT NULL,
  `fullname` longtext NOT NULL,
  `maricno` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `department` mediumtext NOT NULL,
  `level` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `block3`
--

INSERT INTO `block3` (`uniqueid`, `fullname`, `maricno`, `email`, `username`, `department`, `level`, `password`) VALUES
(0, '71a1257de46777ac82b59d70c6a1bdf6', '', 'd7868d31d7251898480e8fae4e85a69b', 'ce43d6babf8d3170de423b6aee4e28ce', '3a3c5f176d875f4fe7c5ced56ac9cf0b', '1103aaa95d77c7eb49b3269eb9c37967', 'a74dcd689627c284eb45efbcd1052633'),
(11, '856d04749085d18a1af505ced570dc58', '', '0b7cd22828fd5995df71ad66ba87273e', '8a36085b00d485c60ef7eb85da53781b', '3a3c5f176d875f4fe7c5ced56ac9cf0b', 'cbf90c40bfa9f16fd908e7e98f19f40e', '868adacb695e4b2bc2d8eb674c4ccbf7'),
(70, '98e0aee217e6b5a27ba0d605d1e1c00d', '', '8e9af778215fd789bf870df0d2c4930f', '7167f6764c799bc8a8b8c609f6cf1a0a', '3a3c5f176d875f4fe7c5ced56ac9cf0b', 'a9e83f20bd0e633124da118ca7752c76', '2fe04e524ba40505a82e03a2819429cc'),
(91, '0ad623dac25fe01b8031e09cd1c27172', '', '09517ad980845023242635f3f4e38083', '498e5d4556268cdca2d4434b1b6e0353', '3a3c5f176d875f4fe7c5ced56ac9cf0b', 'e00d2132fcefa11836bc843b926b7568', '7b3d40a155f96184b0af850821d5435a'),
(23968, 'f8e4db4c8e7b32b27e59c72e32be6817', '', '232d7caffa3d9e27bce9c9157ea4cd49', 'fd224069c623613b9b4047685fee33f3', '904f94fd02230e385338e30499d3371d', '11504c2d3c405b1cf4b6573b1734778c', 'c3c280b6a1bfb4bb11f3ef5d975ff7b9'),
(0, '12cd3b3c50bc09ca5cc177173cefd22c', '', 'dc2f8cb796e567ba2a494b022345a52f', 'f568a928b23b46033a5853dee0a132fc', '746cee5ac749daffc2df8c51434748a4', '1aa0f3bef8e51af66ddab2696761852e', 'd96fe37fcfcdf139dfdc30dfba8422d1'),
(0, '12cd3b3c50bc09ca5cc177173cefd22c', '', 'dc2f8cb796e567ba2a494b022345a52f', 'f568a928b23b46033a5853dee0a132fc', '746cee5ac749daffc2df8c51434748a4', '5c00792b9a49fd2333daa6bc8c492515', 'd96fe37fcfcdf139dfdc30dfba8422d1'),
(0, '12cd3b3c50bc09ca5cc177173cefd22c', '', 'dc2f8cb796e567ba2a494b022345a52f', 'f568a928b23b46033a5853dee0a132fc', '746cee5ac749daffc2df8c51434748a4', '5c00792b9a49fd2333daa6bc8c492515', 'd96fe37fcfcdf139dfdc30dfba8422d1'),
(0, '2cb2201583ee101a17faa151be959e84', '', 'fec25b41595d4a9f1eb320f9737fa213', 'a4dd38374dce609ce0f915d393ec59b1', '904f94fd02230e385338e30499d3371d', '5c00792b9a49fd2333daa6bc8c492515', 'd96fe37fcfcdf139dfdc30dfba8422d1'),
(16, '3c9002c459e92d7e862639f1822f7ab8', '', '6de68f4164c0b6003464b39725013e19', '15570e24806e75e68f659ade147f8472', '904f94fd02230e385338e30499d3371d', '5c00792b9a49fd2333daa6bc8c492515', '1face21c390284956bed21c8b257a817'),
(8, 'bead1c26a82a2343e3b31bfb6d27196f', '', 'd7129dd46bf8389351be81dd53fdcf1a', '1df2bd32245de277c241044cb51e8b39', '4f0ceaa93f74523216c6d2df34c6f035', '11504c2d3c405b1cf4b6573b1734778c', 'd6d91c7a09916a27ac39baa5b011d37d'),
(8, '2290fe045b6caa5ff7b63b92532dd529', '9fc8fea2a14c06d388f08aff64be1148', '413f13e0b59519960d35602a965b8848', '7c2cef45503861dc36be0cca7797e748', '4f0ceaa93f74523216c6d2df34c6f035', '5c00792b9a49fd2333daa6bc8c492515', '723e1489a45d2cbaefec82eee410abd5'),
(0, '516312c2b35128d16ee074010a363212', '170bb5358488afbf8efb31ca82ffd85c', '7a07ef03504d33ee92f420106aba6e38', '63ab2e8e3c3565afc502af21d6846a07', 'ceb2b69cbefbed139a009c3d710da741', '8fd732f62090814658a854cc547232ad', '2794d223f90059c9f705c73a99384085'),
(22519, '5303a8da0aa12c994e671d340d1aa12c', 'acf7ef943fdeb3cbfed8dd0d8f584731', '01c951e2c1551ba3fdafa9d5ca7e21c6', 'e536b7110f26820baf08240d869cb6aa', '7ee811448970c3063dd40119f9e1fe42', 'ed4289e5847508fdfe1faacf0e30cc39', '1b3231655cebb7a1f783eddf27d254ca'),
(48045280000000, 'fdb4b3b9eca9bfbac0ea5bca686daf50', 'acf7ef943fdeb3cbfed8dd0d8f584731', '99c35139209f8e11e462042f529ed721', 'b5307fc8f66b5cde0cc7e8e97e7df871', '7dc30659b9c2c619afce48c7ef21f234', '11504c2d3c405b1cf4b6573b1734778c', '7e138f109addb079ab60c5e5ac86fe35'),
(88708, 'fdb2ff218ed5a1bde6d50f8923564fae', 'acf7ef943fdeb3cbfed8dd0d8f584731', 'fb014fb1e1ba2d0bece5aac912663fa6', '28dd8b7e83cc81d7930fedfbf9e68884', 'ceb2b69cbefbed139a009c3d710da741', '8fd732f62090814658a854cc547232ad', 'c8400628587a094c1e2e979b652d9047'),
(5, '7af806f4406e40d69ea32e1552213ee6', 'acf7ef943fdeb3cbfed8dd0d8f584731', 'f86e66a817c1758c6775be05bba6af14', '39656b5bc19921f92da1e2d28b1a266c', '2f11ea1e293ada4ee34db65bd3f5ce59', 'c8d7d72a2dfe06a36a206443f53f0820', '63eb647eaee4bfc6499bef0f9a040e58'),
(57, '8a283140546f10b7a98f6992fd05ce72', 'acf7ef943fdeb3cbfed8dd0d8f584731', 'e75c42fa28a94504761d78c41d7e0fe9', 'e2cbb7de4861f38ce0fa07cf43b52c2e', '469552c5888f622069949bd6ae30cbc2', '11504c2d3c405b1cf4b6573b1734778c', 'ab38729e0c4a2d5201b491f7b1288e02');

-- --------------------------------------------------------

--
-- Table structure for table `blockvoters`
--

CREATE TABLE `blockvoters` (
  `voters_id` int(100) NOT NULL,
  `uniqueid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blockvoters`
--

INSERT INTO `blockvoters` (`voters_id`, `uniqueid`) VALUES
(1, '121617109965093'),
(2, '541614274259596'),
(3, '501613492944962'),
(4, '271615992044733'),
(5, '341613559002159');

-- --------------------------------------------------------

--
-- Table structure for table `others`
--

CREATE TABLE `others` (
  `ID` int(100) NOT NULL,
  `fullname` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `level` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `problem`
--

CREATE TABLE `problem` (
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `possibleproblem` varchar(100) NOT NULL,
  `department` text NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `signa_ture`
--

CREATE TABLE `signa_ture` (
  `no_signat` int(11) NOT NULL,
  `image_sig` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `no` int(100) NOT NULL,
  `uniqueid` int(100) NOT NULL,
  `fullname` longtext NOT NULL,
  `maricno` varchar(100) NOT NULL,
  `email` text NOT NULL,
  `username` varchar(100) NOT NULL,
  `department` text NOT NULL,
  `level` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `school_id` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`no`, `uniqueid`, `fullname`, `maricno`, `email`, `username`, `department`, `level`, `password`, `school_id`) VALUES
(1, 2147483647, 'Christine Laura', 'ndcom/18/277', 'christine@gmail.com', 'christine', 'Computer Science Department', 'nd2', '723e1489a45d2cbaefec82eee410abd5', 'IMG-20201207-WA0010.jpg'),
(2, 0, 'Rasheed Mufliat', '0', 'rasheedat@gmail.com', 'rasheedat', 'Comp sci', 'ND 2', 'f4ced9fb545269aee9db962a300fa802', ''),
(3, 2147483647, 'Lateef Adeyemo Rasheed', '0', 'lateefade@gmail.com', 'Lateef', 'Comp sci', 'ND2', '5d3298e7717e88caf40a515a52fc970b', ''),
(4, 0, 'Basit Adeyemo', '0', 'bisolaade@gmail.com', 'miracle', 'Animal Prod', 'HND2', 'a0f1c7696491005455a89f9bab38204d', ''),
(5, 8, 'OLadapo Niyi', '0', 'lateefadny@gmail.com', 'kmkfnq', 'Comp sci', 'HND2', '860484196da45d135086775e02178eb6', ''),
(6, 2147483647, 'Saheed Osupa', '0', 'saheed@gmail.com', 'saheed212', 'com', 'nd2', '4d2726f623c300781801cd5a7f41d7dc', ''),
(7, 2147483647, 'Gibola', '0', 'gibola@gmail.com', 'Gibola', 'Animal Health', 'LEVEL 2', '96e4e89d078925aca9303a85270c0331', ''),
(8, 2147483647, 'musa tope', '0', 'musa@gmail.com', 'Musa223', 'Stat', 'Level 2', '00ab9db746dc5e4a9d57b1afd01dff3c', ''),
(9, 2147483647, 'Monsurat Adeyemo', '0', 'monsurat@gmail.com', 'Monsurat', 'SLT', 'LEVEL 2', '4b192ce99f0d8494b42c101e75e285ed', ''),
(10, 2147483647, 'Yekini Yusuf', '0', 'Yekini@gmail.com', 'Yekini', 'Comp sci', 'LEVEL 2', '3afc9206289e2b355a1b4a73f8fa871b', ''),
(11, 2147483647, 'Yekini Yusuf', '0', 'Yekini@gmail.com', 'Yekini', 'Comp sci', 'LEVEL 2', '3afc9206289e2b355a1b4a73f8fa871b', ''),
(12, 2147483647, 'Yekini Yusuf', '0', 'Yekini@gmail.com', 'Yekini', 'Comp sci', 'LEVEL 2', '3afc9206289e2b355a1b4a73f8fa871b', ''),
(13, 2147483647, 'Raji Rastogi', '0', 'rajirasto@gmail.com', 'RAJI123', 'Comp sci', 'level 2', 'a74dcd689627c284eb45efbcd1052633', ''),
(14, 2147483647, 'Sey Makinde', '0', 'seyi@gmail.com', 'seyi0023', 'Comp sci', 'LEVEL 2', '868adacb695e4b2bc2d8eb674c4ccbf7', ''),
(15, 2147483647, 'Basit Adeyemo', '0', 'khyt?@W', 'fdre', 'Comp sci', 'level2', '2fe04e524ba40505a82e03a2819429cc', ''),
(16, 2147483647, 'Alade Esther', '0', 'alade@gmail.com', 'Alade', 'Comp sci', 'Level 2', '7b3d40a155f96184b0af850821d5435a', ''),
(17, 2147483647, 'Oladejo Aduragbemi', '0', 'oladejo@gmail.com', 'Oladejo0023', 'Computer science', 'ND 2', 'c3c280b6a1bfb4bb11f3ef5d975ff7b9', ''),
(18, 2147483647, 'Basit Raheem', '0', 'raheem@gmail.com', 'raheem', 'statistics', 'nd2', 'd96fe37fcfcdf139dfdc30dfba8422d1', 'IMG_20210327_151855.jpg'),
(19, 2147483647, 'Hakeem Roqeeb', '0', 'roqeeb@gmail.com', 'roqeeb', 'Computer science', 'nd2', 'd96fe37fcfcdf139dfdc30dfba8422d1', 'A QUESTIONNAIRE ON MEAL SATISFACTION OF THE FAMILY.docx'),
(20, 2147483647, 'Aishat Abidemi', '0', 'aishat@gmail.com', 'aishat', 'Computer science', 'nd2', '1face21c390284956bed21c8b257a817', 'Auto Metro Train Shuttle between Two Stations copy copy.docx'),
(21, 2147483647, 'Fatimo Raheem', '0', 'raheemfat@gmail.com', 'Fatimo', 'Computer Science Department', 'ND 2', 'd6d91c7a09916a27ac39baa5b011d37d', 'Capture.pdf.PNG'),
(22, 2147483647, 'Christine Laura', 'ndcom/18/277', 'christine@gmail.com', 'christine', 'Computer Science Department', 'nd2', '723e1489a45d2cbaefec82eee410abd5', 'IMG-20201207-WA0010.jpg'),
(23, 2147483647, 'Tayo Rita', 'ndcom/18/299', 'rita@gmail.com', 'rita', 'computer science', 'nd 2', '2794d223f90059c9f705c73a99384085', 'cack.png'),
(24, 2147483647, 'Rasheed Bisi Wale', '', 'superadmin@gmail.com', 'super0023', 'comuter science', 'HND 1', '1b3231655cebb7a1f783eddf27d254ca', '20181028_074845.png'),
(25, 2147483647, 'Alamu Rasheed Dende', '', 'alamu@gmail.com', 'alamu0023', 'VLT', 'ND 2', '7e138f109addb079ab60c5e5ac86fe35', 'Screenshot_2019-02-12-23-23-12.png'),
(26, 2147483647, 'segun damilola', '', 'segun@gmail.com', 'segun', 'computer science', 'nd 2', 'c8400628587a094c1e2e979b652d9047', 'Screenshot_2019-02-16-22-43-15.png'),
(27, 2147483647, 'Bimbo Oxlade', '', 'bimbo@gmail.com', 'bimbo', 'Animal Production', 'HND 2', '63eb647eaee4bfc6499bef0f9a040e58', 'Screenshot_2019-02-10-16-20-44.png'),
(28, 2147483647, 'Xabi Alonso', '', 'xabi@gmail.com', 'xabi', 'SLT', 'ND 2', 'ab38729e0c4a2d5201b491f7b1288e02', 'Screenshot_2019-02-20-23-30-24.png');

-- --------------------------------------------------------

--
-- Table structure for table `vote`
--

CREATE TABLE `vote` (
  `No_of_voters` int(100) NOT NULL,
  `oluwasegun` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vote`
--

INSERT INTO `vote` (`No_of_voters`, `oluwasegun`) VALUES
(1, 'oluwasegun'),
(2, 'oluwasegun'),
(3, 'oluwasegun'),
(4, 'oluwasegun'),
(5, 'oluwasegun'),
(6, 'oluwasegun'),
(7, 'oluwasegun'),
(8, 'oluwasegun'),
(9, 'oluwasegun'),
(10, 'oluwasegun'),
(23, 'oluwasegun'),
(24, 'oluwasegun'),
(25, 'oluwasegun'),
(26, 'oluwasegun'),
(27, 'oluwasegun'),
(28, 'oluwasegun'),
(29, 'oluwasegun'),
(30, 'oluwasegun');

-- --------------------------------------------------------

--
-- Table structure for table `vote1`
--

CREATE TABLE `vote1` (
  `No_of_voters` int(100) NOT NULL,
  `christopher` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vote1`
--

INSERT INTO `vote1` (`No_of_voters`, `christopher`) VALUES
(1, 'christopher'),
(2, 'christopher'),
(3, 'christopher'),
(4, 'christopher'),
(5, 'christopher'),
(6, 'christopher'),
(7, 'christopher'),
(8, 'christopher'),
(9, 'christopher');

-- --------------------------------------------------------

--
-- Table structure for table `vote2`
--

CREATE TABLE `vote2` (
  `No_of_voters` int(100) NOT NULL,
  `williams` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vote2`
--

INSERT INTO `vote2` (`No_of_voters`, `williams`) VALUES
(1, 'williams'),
(2, 'williams');

-- --------------------------------------------------------

--
-- Table structure for table `vote3`
--

CREATE TABLE `vote3` (
  `No_of_voters` int(100) NOT NULL,
  `yusuf` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vote3`
--

INSERT INTO `vote3` (`No_of_voters`, `yusuf`) VALUES
(1, 'yusuf'),
(2, 'yusuf'),
(3, 'yusuf'),
(4, 'yusuf'),
(5, 'yusuf'),
(6, 'yusuf'),
(7, 'yusuf');

-- --------------------------------------------------------

--
-- Table structure for table `votevice`
--

CREATE TABLE `votevice` (
  `No_of_voters` int(100) NOT NULL,
  `samuel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `votevice1`
--

CREATE TABLE `votevice1` (
  `No_of_voters` int(100) NOT NULL,
  `odunifa` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `votevice2`
--

CREATE TABLE `votevice2` (
  `No_of_voters` int(100) NOT NULL,
  `stella` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `votevice2`
--

INSERT INTO `votevice2` (`No_of_voters`, `stella`) VALUES
(1, 'stella'),
(2, 'stella');

-- --------------------------------------------------------

--
-- Table structure for table `votevice3`
--

CREATE TABLE `votevice3` (
  `No_of_people` int(100) NOT NULL,
  `abisoye` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `vote_now`
--

CREATE TABLE `vote_now` (
  `No_of_people` int(100) NOT NULL,
  `Oluwasegun_Rauf` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vote_now`
--

INSERT INTO `vote_now` (`No_of_people`, `Oluwasegun_Rauf`) VALUES
(14, ''),
(15, ''),
(16, ''),
(17, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blockvoters`
--
ALTER TABLE `blockvoters`
  ADD PRIMARY KEY (`voters_id`);

--
-- Indexes for table `others`
--
ALTER TABLE `others`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `signa_ture`
--
ALTER TABLE `signa_ture`
  ADD PRIMARY KEY (`no_signat`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `vote`
--
ALTER TABLE `vote`
  ADD PRIMARY KEY (`No_of_voters`);

--
-- Indexes for table `vote1`
--
ALTER TABLE `vote1`
  ADD PRIMARY KEY (`No_of_voters`);

--
-- Indexes for table `vote2`
--
ALTER TABLE `vote2`
  ADD PRIMARY KEY (`No_of_voters`);

--
-- Indexes for table `vote3`
--
ALTER TABLE `vote3`
  ADD PRIMARY KEY (`No_of_voters`);

--
-- Indexes for table `votevice`
--
ALTER TABLE `votevice`
  ADD PRIMARY KEY (`No_of_voters`);

--
-- Indexes for table `votevice1`
--
ALTER TABLE `votevice1`
  ADD PRIMARY KEY (`No_of_voters`);

--
-- Indexes for table `votevice2`
--
ALTER TABLE `votevice2`
  ADD PRIMARY KEY (`No_of_voters`);

--
-- Indexes for table `votevice3`
--
ALTER TABLE `votevice3`
  ADD PRIMARY KEY (`No_of_people`);

--
-- Indexes for table `vote_now`
--
ALTER TABLE `vote_now`
  ADD PRIMARY KEY (`No_of_people`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blockvoters`
--
ALTER TABLE `blockvoters`
  MODIFY `voters_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `others`
--
ALTER TABLE `others`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `signa_ture`
--
ALTER TABLE `signa_ture`
  MODIFY `no_signat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `vote`
--
ALTER TABLE `vote`
  MODIFY `No_of_voters` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
