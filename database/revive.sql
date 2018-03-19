-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 19, 2018 at 04:56 PM
-- Server version: 5.6.35
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `revive`
--

-- --------------------------------------------------------

--
-- Table structure for table `acos`
--

CREATE TABLE `acos` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT '',
  `foreign_key` int(10) UNSIGNED DEFAULT NULL,
  `alias` varchar(255) DEFAULT '',
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acos`
--

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(180, NULL, NULL, NULL, 'controllers', 1, 914),
(181, 180, NULL, NULL, 'Pages', 2, 51),
(183, 181, NULL, NULL, 'index', 3, 4),
(184, 181, NULL, NULL, 'getRole', 5, 6),
(185, 181, NULL, NULL, 'countRows', 7, 8),
(186, 180, NULL, NULL, 'Roles', 52, 91),
(187, 186, NULL, NULL, 'admin_index', 53, 54),
(188, 186, NULL, NULL, 'admin_view', 55, 56),
(189, 186, NULL, NULL, 'admin_add', 57, 58),
(190, 186, NULL, NULL, 'admin_edit', 59, 60),
(191, 186, NULL, NULL, 'admin_delete', 61, 62),
(192, 186, NULL, NULL, 'getRole', 63, 64),
(193, 186, NULL, NULL, 'countRows', 65, 66),
(194, 180, NULL, NULL, 'Users', 92, 141),
(195, 194, NULL, NULL, 'isAuthorized', 93, 94),
(196, 194, NULL, NULL, 'admin_index', 95, 96),
(197, 194, NULL, NULL, 'admin_login', 97, 98),
(198, 194, NULL, NULL, 'admin_logout', 99, 100),
(199, 194, NULL, NULL, 'admin_view', 101, 102),
(200, 194, NULL, NULL, 'admin_add', 103, 104),
(201, 194, NULL, NULL, 'admin_edit', 105, 106),
(202, 194, NULL, NULL, 'admin_delete', 107, 108),
(203, 194, NULL, NULL, 'getRole', 109, 110),
(204, 194, NULL, NULL, 'countRows', 111, 112),
(205, 180, NULL, NULL, 'Acl', 142, 281),
(206, 205, NULL, NULL, 'Acl', 143, 176),
(207, 206, NULL, NULL, 'index', 144, 145),
(208, 206, NULL, NULL, 'admin_index', 146, 147),
(209, 206, NULL, NULL, 'getRole', 148, 149),
(210, 206, NULL, NULL, 'countRows', 150, 151),
(211, 205, NULL, NULL, 'Acos', 177, 216),
(212, 211, NULL, NULL, 'admin_index', 178, 179),
(213, 211, NULL, NULL, 'admin_empty_acos', 180, 181),
(214, 211, NULL, NULL, 'admin_build_acl', 182, 183),
(215, 211, NULL, NULL, 'admin_prune_acos', 184, 185),
(216, 211, NULL, NULL, 'admin_synchronize', 186, 187),
(217, 211, NULL, NULL, 'getRole', 188, 189),
(218, 211, NULL, NULL, 'countRows', 190, 191),
(219, 205, NULL, NULL, 'Aros', 217, 280),
(220, 219, NULL, NULL, 'admin_index', 218, 219),
(221, 219, NULL, NULL, 'admin_check', 220, 221),
(222, 219, NULL, NULL, 'admin_users', 222, 223),
(223, 219, NULL, NULL, 'admin_update_user_role', 224, 225),
(224, 219, NULL, NULL, 'admin_ajax_role_permissions', 226, 227),
(225, 219, NULL, NULL, 'admin_role_permissions', 228, 229),
(226, 219, NULL, NULL, 'admin_user_permissions', 230, 231),
(227, 219, NULL, NULL, 'admin_empty_permissions', 232, 233),
(228, 219, NULL, NULL, 'admin_clear_user_specific_permissions', 234, 235),
(229, 219, NULL, NULL, 'admin_grant_all_controllers', 236, 237),
(230, 219, NULL, NULL, 'admin_deny_all_controllers', 238, 239),
(231, 219, NULL, NULL, 'admin_get_role_controller_permission', 240, 241),
(232, 219, NULL, NULL, 'admin_grant_role_permission', 242, 243),
(233, 219, NULL, NULL, 'admin_deny_role_permission', 244, 245),
(234, 219, NULL, NULL, 'admin_get_user_controller_permission', 246, 247),
(235, 219, NULL, NULL, 'admin_grant_user_permission', 248, 249),
(236, 219, NULL, NULL, 'admin_deny_user_permission', 250, 251),
(237, 219, NULL, NULL, 'getRole', 252, 253),
(238, 219, NULL, NULL, 'countRows', 254, 255),
(239, 180, NULL, NULL, 'Galleries', 282, 321),
(240, 239, NULL, NULL, 'admin_index', 283, 284),
(241, 239, NULL, NULL, 'admin_view', 285, 286),
(242, 239, NULL, NULL, 'admin_add', 287, 288),
(243, 239, NULL, NULL, 'admin_edit', 289, 290),
(244, 239, NULL, NULL, 'admin_delete', 291, 292),
(245, 239, NULL, NULL, 'getRole', 293, 294),
(246, 239, NULL, NULL, 'countRows', 295, 296),
(247, 180, NULL, NULL, 'Images', 322, 369),
(248, 247, NULL, NULL, 'getRole', 323, 324),
(249, 247, NULL, NULL, 'countRows', 325, 326),
(250, 247, NULL, NULL, 'admin_add', 327, 328),
(258, 247, NULL, NULL, 'admin_edit', 329, 330),
(259, 247, NULL, NULL, 'admin_ajax_edit', 331, 332),
(260, 247, NULL, NULL, 'admin_delete', 333, 334),
(261, 247, NULL, NULL, 'admin_view', 335, 336),
(262, 180, NULL, NULL, 'PageContents', 370, 419),
(263, 262, NULL, NULL, 'admin_index', 371, 372),
(264, 262, NULL, NULL, 'admin_view', 373, 374),
(265, 262, NULL, NULL, 'admin_add', 375, 376),
(266, 262, NULL, NULL, 'admin_edit', 377, 378),
(267, 262, NULL, NULL, 'admin_delete', 379, 380),
(268, 262, NULL, NULL, 'getRole', 381, 382),
(269, 262, NULL, NULL, 'countRows', 383, 384),
(270, 180, NULL, NULL, 'Banners', 420, 459),
(271, 270, NULL, NULL, 'admin_index', 421, 422),
(272, 270, NULL, NULL, 'admin_view', 423, 424),
(273, 270, NULL, NULL, 'admin_add', 425, 426),
(274, 270, NULL, NULL, 'admin_edit', 427, 428),
(275, 270, NULL, NULL, 'admin_delete', 429, 430),
(276, 270, NULL, NULL, 'getRole', 431, 432),
(277, 270, NULL, NULL, 'countRows', 433, 434),
(278, 270, NULL, NULL, 'getChildren', 435, 436),
(279, 239, NULL, NULL, 'getChildren', 297, 298),
(280, 247, NULL, NULL, 'getChildren', 337, 338),
(281, 262, NULL, NULL, 'getChildren', 385, 386),
(282, 181, NULL, NULL, 'getChildren', 9, 10),
(283, 186, NULL, NULL, 'getChildren', 67, 68),
(284, 194, NULL, NULL, 'getChildren', 113, 114),
(285, 206, NULL, NULL, 'getChildren', 152, 153),
(286, 211, NULL, NULL, 'getChildren', 192, 193),
(287, 219, NULL, NULL, 'getChildren', 256, 257),
(299, 180, NULL, NULL, 'Events', 460, 499),
(300, 299, NULL, NULL, 'admin_index', 461, 462),
(301, 299, NULL, NULL, 'admin_view', 463, 464),
(302, 299, NULL, NULL, 'admin_add', 465, 466),
(303, 299, NULL, NULL, 'admin_edit', 467, 468),
(304, 299, NULL, NULL, 'admin_delete', 469, 470),
(305, 299, NULL, NULL, 'getRole', 471, 472),
(306, 299, NULL, NULL, 'countRows', 473, 474),
(307, 299, NULL, NULL, 'getChildren', 475, 476),
(311, 270, NULL, NULL, 'checkGallery', 437, 438),
(312, 299, NULL, NULL, 'checkGallery', 477, 478),
(313, 239, NULL, NULL, 'checkGallery', 299, 300),
(314, 247, NULL, NULL, 'checkGallery', 339, 340),
(330, 262, NULL, NULL, 'checkGallery', 387, 388),
(337, 181, NULL, NULL, 'checkGallery', 11, 12),
(338, 186, NULL, NULL, 'checkGallery', 69, 70),
(339, 194, NULL, NULL, 'checkGallery', 115, 116),
(340, 206, NULL, NULL, 'checkGallery', 154, 155),
(341, 211, NULL, NULL, 'checkGallery', 194, 195),
(342, 219, NULL, NULL, 'checkGallery', 258, 259),
(343, 270, NULL, NULL, 'getChildrenId', 439, 440),
(344, 180, NULL, NULL, 'Dashboard', 500, 531),
(345, 344, NULL, NULL, 'admin_index', 501, 502),
(346, 344, NULL, NULL, 'getRole', 503, 504),
(347, 344, NULL, NULL, 'countRows', 505, 506),
(348, 344, NULL, NULL, 'getChildren', 507, 508),
(349, 344, NULL, NULL, 'getChildrenId', 509, 510),
(350, 344, NULL, NULL, 'checkGallery', 511, 512),
(351, 299, NULL, NULL, 'getChildrenId', 479, 480),
(352, 239, NULL, NULL, 'getChildrenId', 301, 302),
(353, 247, NULL, NULL, 'getChildrenId', 341, 342),
(355, 262, NULL, NULL, 'getChildrenId', 389, 390),
(356, 181, NULL, NULL, 'getChildrenId', 13, 14),
(357, 186, NULL, NULL, 'getChildrenId', 71, 72),
(358, 194, NULL, NULL, 'getChildrenId', 117, 118),
(359, 206, NULL, NULL, 'getChildrenId', 156, 157),
(360, 211, NULL, NULL, 'getChildrenId', 196, 197),
(361, 219, NULL, NULL, 'getChildrenId', 260, 261),
(399, 270, NULL, NULL, 'getFirstChild', 441, 442),
(400, 270, NULL, NULL, 'checkForGrandChildren', 443, 444),
(401, 344, NULL, NULL, 'getFirstChild', 513, 514),
(402, 344, NULL, NULL, 'checkForGrandChildren', 515, 516),
(403, 299, NULL, NULL, 'getFirstChild', 481, 482),
(404, 299, NULL, NULL, 'checkForGrandChildren', 483, 484),
(405, 239, NULL, NULL, 'getFirstChild', 303, 304),
(406, 239, NULL, NULL, 'checkForGrandChildren', 305, 306),
(407, 247, NULL, NULL, 'getFirstChild', 343, 344),
(408, 247, NULL, NULL, 'checkForGrandChildren', 345, 346),
(413, 262, NULL, NULL, 'getFirstChild', 391, 392),
(414, 262, NULL, NULL, 'checkForGrandChildren', 393, 394),
(427, 181, NULL, NULL, 'getFirstChild', 15, 16),
(428, 181, NULL, NULL, 'checkForGrandChildren', 17, 18),
(429, 186, NULL, NULL, 'getFirstChild', 73, 74),
(430, 186, NULL, NULL, 'checkForGrandChildren', 75, 76),
(444, 194, NULL, NULL, 'getFirstChild', 119, 120),
(445, 194, NULL, NULL, 'checkForGrandChildren', 121, 122),
(446, 206, NULL, NULL, 'getFirstChild', 158, 159),
(447, 206, NULL, NULL, 'checkForGrandChildren', 160, 161),
(448, 211, NULL, NULL, 'getFirstChild', 198, 199),
(449, 211, NULL, NULL, 'checkForGrandChildren', 200, 201),
(450, 219, NULL, NULL, 'getFirstChild', 262, 263),
(451, 219, NULL, NULL, 'checkForGrandChildren', 264, 265),
(470, 247, NULL, NULL, 'admin_set_default', 347, 348),
(474, 270, NULL, NULL, 'getFirstChildImage', 445, 446),
(476, 344, NULL, NULL, 'getFirstChildImage', 517, 518),
(477, 299, NULL, NULL, 'getFirstChildImage', 485, 486),
(492, 239, NULL, NULL, 'getFirstChildImage', 307, 308),
(493, 247, NULL, NULL, 'getFirstChildImage', 349, 350),
(495, 262, NULL, NULL, 'getFirstChildImage', 395, 396),
(505, 181, NULL, NULL, 'getFirstChildImage', 19, 20),
(506, 186, NULL, NULL, 'getFirstChildImage', 77, 78),
(507, 194, NULL, NULL, 'getFirstChildImage', 123, 124),
(508, 206, NULL, NULL, 'getFirstChildImage', 162, 163),
(509, 211, NULL, NULL, 'getFirstChildImage', 202, 203),
(510, 219, NULL, NULL, 'getFirstChildImage', 266, 267),
(511, 270, NULL, NULL, 'getCurrentChild', 447, 448),
(512, 270, NULL, NULL, 'getParent', 449, 450),
(513, 270, NULL, NULL, 'getData', 451, 452),
(517, 344, NULL, NULL, 'getCurrentChild', 519, 520),
(518, 344, NULL, NULL, 'getParent', 521, 522),
(519, 344, NULL, NULL, 'getData', 523, 524),
(520, 299, NULL, NULL, 'getCurrentChild', 487, 488),
(521, 299, NULL, NULL, 'getParent', 489, 490),
(522, 299, NULL, NULL, 'getData', 491, 492),
(526, 239, NULL, NULL, 'getCurrentChild', 309, 310),
(527, 239, NULL, NULL, 'getParent', 311, 312),
(528, 239, NULL, NULL, 'getData', 313, 314),
(529, 247, NULL, NULL, 'getCurrentChild', 351, 352),
(530, 247, NULL, NULL, 'getParent', 353, 354),
(531, 247, NULL, NULL, 'getData', 355, 356),
(535, 262, NULL, NULL, 'getCurrentChild', 397, 398),
(536, 262, NULL, NULL, 'getParent', 399, 400),
(537, 262, NULL, NULL, 'getData', 401, 402),
(540, 181, NULL, NULL, 'getCurrentChild', 21, 22),
(541, 181, NULL, NULL, 'getParent', 23, 24),
(542, 181, NULL, NULL, 'getData', 25, 26),
(543, 186, NULL, NULL, 'getCurrentChild', 79, 80),
(544, 186, NULL, NULL, 'getParent', 81, 82),
(545, 186, NULL, NULL, 'getData', 83, 84),
(546, 194, NULL, NULL, 'getCurrentChild', 125, 126),
(547, 194, NULL, NULL, 'getParent', 127, 128),
(548, 194, NULL, NULL, 'getData', 129, 130),
(549, 206, NULL, NULL, 'getCurrentChild', 164, 165),
(550, 206, NULL, NULL, 'getParent', 166, 167),
(551, 206, NULL, NULL, 'getData', 168, 169),
(552, 211, NULL, NULL, 'getCurrentChild', 204, 205),
(553, 211, NULL, NULL, 'getParent', 206, 207),
(554, 211, NULL, NULL, 'getData', 208, 209),
(555, 219, NULL, NULL, 'getCurrentChild', 268, 269),
(556, 219, NULL, NULL, 'getParent', 270, 271),
(557, 219, NULL, NULL, 'getData', 272, 273),
(569, 270, NULL, NULL, 'getSymbols', 453, 454),
(571, 344, NULL, NULL, 'getSymbols', 525, 526),
(572, 299, NULL, NULL, 'getSymbols', 493, 494),
(574, 239, NULL, NULL, 'getSymbols', 315, 316),
(575, 247, NULL, NULL, 'getSymbols', 357, 358),
(577, 262, NULL, NULL, 'getSymbols', 403, 404),
(579, 181, NULL, NULL, 'getSymbols', 27, 28),
(580, 186, NULL, NULL, 'getSymbols', 85, 86),
(581, 194, NULL, NULL, 'getSymbols', 131, 132),
(582, 206, NULL, NULL, 'getSymbols', 170, 171),
(583, 211, NULL, NULL, 'getSymbols', 210, 211),
(584, 219, NULL, NULL, 'getSymbols', 274, 275),
(719, 180, NULL, NULL, 'Videos', 532, 573),
(720, 719, NULL, NULL, 'admin_index', 533, 534),
(721, 719, NULL, NULL, 'admin_view', 535, 536),
(722, 719, NULL, NULL, 'admin_add', 537, 538),
(723, 719, NULL, NULL, 'admin_edit', 539, 540),
(724, 719, NULL, NULL, 'admin_delete', 541, 542),
(725, 719, NULL, NULL, 'getRole', 543, 544),
(726, 719, NULL, NULL, 'countRows', 545, 546),
(727, 719, NULL, NULL, 'getChildren', 547, 548),
(728, 719, NULL, NULL, 'getSymbols', 549, 550),
(729, 719, NULL, NULL, 'getFirstChild', 551, 552),
(730, 719, NULL, NULL, 'getCurrentChild', 553, 554),
(731, 719, NULL, NULL, 'getParent', 555, 556),
(732, 719, NULL, NULL, 'getFirstChildImage', 557, 558),
(733, 719, NULL, NULL, 'checkForGrandChildren', 559, 560),
(734, 719, NULL, NULL, 'getChildrenId', 561, 562),
(735, 719, NULL, NULL, 'checkGallery', 563, 564),
(736, 719, NULL, NULL, 'getData', 565, 566),
(741, 180, NULL, NULL, 'Sitemap', 574, 607),
(742, 741, NULL, NULL, 'Sitemaps', 575, 606),
(743, 742, NULL, NULL, 'display', 576, 577),
(744, 742, NULL, NULL, 'getRole', 578, 579),
(745, 742, NULL, NULL, 'countRows', 580, 581),
(746, 742, NULL, NULL, 'getChildren', 582, 583),
(747, 742, NULL, NULL, 'getSymbols', 584, 585),
(748, 742, NULL, NULL, 'getFirstChild', 586, 587),
(749, 742, NULL, NULL, 'getCurrentChild', 588, 589),
(750, 742, NULL, NULL, 'getParent', 590, 591),
(751, 742, NULL, NULL, 'getFirstChildImage', 592, 593),
(752, 742, NULL, NULL, 'checkForGrandChildren', 594, 595),
(753, 742, NULL, NULL, 'getChildrenId', 596, 597),
(754, 742, NULL, NULL, 'checkGallery', 598, 599),
(755, 742, NULL, NULL, 'getData', 600, 601),
(874, 262, NULL, NULL, 'admin_set_default', 405, 406),
(884, 181, NULL, NULL, 'process', 29, 30),
(889, 194, NULL, NULL, 'client_login', 133, 134),
(890, 194, NULL, NULL, 'client_logout', 135, 136),
(893, 180, NULL, NULL, 'News', 608, 659),
(894, 893, NULL, NULL, 'admin_index', 609, 610),
(895, 893, NULL, NULL, 'admin_view', 611, 612),
(896, 893, NULL, NULL, 'admin_add', 613, 614),
(897, 893, NULL, NULL, 'admin_edit', 615, 616),
(898, 893, NULL, NULL, 'admin_delete', 617, 618),
(899, 893, NULL, NULL, 'admin_archive_news', 619, 620),
(900, 893, NULL, NULL, 'admin_unarchive_news', 621, 622),
(901, 893, NULL, NULL, 'admin_publish_news', 623, 624),
(902, 893, NULL, NULL, 'admin_unpublish_news', 625, 626),
(903, 893, NULL, NULL, 'admin_enable_comments', 627, 628),
(904, 893, NULL, NULL, 'admin_disable_comments', 629, 630),
(905, 893, NULL, NULL, 'getRole', 631, 632),
(906, 893, NULL, NULL, 'countRows', 633, 634),
(907, 893, NULL, NULL, 'getChildren', 635, 636),
(908, 893, NULL, NULL, 'getSymbols', 637, 638),
(909, 893, NULL, NULL, 'getFirstChild', 639, 640),
(910, 893, NULL, NULL, 'getCurrentChild', 641, 642),
(911, 893, NULL, NULL, 'getParent', 643, 644),
(912, 893, NULL, NULL, 'getFirstChildImage', 645, 646),
(913, 893, NULL, NULL, 'checkForGrandChildren', 647, 648),
(914, 893, NULL, NULL, 'getChildrenId', 649, 650),
(915, 893, NULL, NULL, 'checkGallery', 651, 652),
(916, 893, NULL, NULL, 'getData', 653, 654),
(923, 181, NULL, NULL, 'download', 31, 32),
(931, 181, NULL, NULL, 'newsletter', 33, 34),
(932, 719, NULL, NULL, 'admin_featured', 567, 568),
(933, 270, NULL, NULL, 'getChildrenAsc', 455, 456),
(934, 344, NULL, NULL, 'getChildrenAsc', 527, 528),
(935, 299, NULL, NULL, 'getChildrenAsc', 495, 496),
(936, 239, NULL, NULL, 'getChildrenAsc', 317, 318),
(937, 247, NULL, NULL, 'admin_feature', 359, 360),
(938, 247, NULL, NULL, 'admin_remove_feature', 361, 362),
(939, 247, NULL, NULL, 'getChildrenAsc', 363, 364),
(940, 893, NULL, NULL, 'getChildrenAsc', 655, 656),
(941, 262, NULL, NULL, 'admin_featured', 407, 408),
(942, 262, NULL, NULL, 'admin_featured_clear', 409, 410),
(943, 262, NULL, NULL, 'getChildrenAsc', 411, 412),
(944, 181, NULL, NULL, 'getChildrenAsc', 35, 36),
(945, 186, NULL, NULL, 'getChildrenAsc', 87, 88),
(946, 194, NULL, NULL, 'getChildrenAsc', 137, 138),
(947, 719, NULL, NULL, 'getChildrenAsc', 569, 570),
(948, 206, NULL, NULL, 'getChildrenAsc', 172, 173),
(949, 211, NULL, NULL, 'getChildrenAsc', 212, 213),
(950, 219, NULL, NULL, 'getChildrenAsc', 276, 277),
(951, 742, NULL, NULL, 'getChildrenAsc', 602, 603),
(952, 180, NULL, NULL, 'OrderItems', 660, 689),
(953, 952, NULL, NULL, 'getRole', 661, 662),
(954, 952, NULL, NULL, 'countRows', 663, 664),
(955, 952, NULL, NULL, 'getChildren', 665, 666),
(956, 952, NULL, NULL, 'getChildrenAsc', 667, 668),
(957, 952, NULL, NULL, 'getSymbols', 669, 670),
(958, 952, NULL, NULL, 'getFirstChild', 671, 672),
(959, 952, NULL, NULL, 'getCurrentChild', 673, 674),
(960, 952, NULL, NULL, 'getParent', 675, 676),
(961, 952, NULL, NULL, 'getFirstChildImage', 677, 678),
(962, 952, NULL, NULL, 'checkForGrandChildren', 679, 680),
(963, 952, NULL, NULL, 'getChildrenId', 681, 682),
(964, 952, NULL, NULL, 'checkGallery', 683, 684),
(965, 952, NULL, NULL, 'getData', 685, 686),
(966, 180, NULL, NULL, 'Orders', 690, 727),
(967, 966, NULL, NULL, 'admin_index', 691, 692),
(968, 966, NULL, NULL, 'admin_view', 693, 694),
(969, 966, NULL, NULL, 'admin_edit', 695, 696),
(970, 966, NULL, NULL, 'admin_delete', 697, 698),
(971, 966, NULL, NULL, 'getRole', 699, 700),
(972, 966, NULL, NULL, 'countRows', 701, 702),
(973, 966, NULL, NULL, 'getChildren', 703, 704),
(974, 966, NULL, NULL, 'getChildrenAsc', 705, 706),
(975, 966, NULL, NULL, 'getSymbols', 707, 708),
(976, 966, NULL, NULL, 'getFirstChild', 709, 710),
(977, 966, NULL, NULL, 'getCurrentChild', 711, 712),
(978, 966, NULL, NULL, 'getParent', 713, 714),
(979, 966, NULL, NULL, 'getFirstChildImage', 715, 716),
(980, 966, NULL, NULL, 'checkForGrandChildren', 717, 718),
(981, 966, NULL, NULL, 'getChildrenId', 719, 720),
(982, 966, NULL, NULL, 'checkGallery', 721, 722),
(983, 966, NULL, NULL, 'getData', 723, 724),
(988, 181, NULL, NULL, 'gallery', 37, 38),
(989, 180, NULL, NULL, 'Productmods', 728, 767),
(990, 989, NULL, NULL, 'admin_index', 729, 730),
(991, 989, NULL, NULL, 'admin_view', 731, 732),
(992, 989, NULL, NULL, 'admin_add', 733, 734),
(993, 989, NULL, NULL, 'admin_edit', 735, 736),
(994, 989, NULL, NULL, 'admin_delete', 737, 738),
(995, 989, NULL, NULL, 'getRole', 739, 740),
(996, 989, NULL, NULL, 'countRows', 741, 742),
(997, 989, NULL, NULL, 'getChildren', 743, 744),
(998, 989, NULL, NULL, 'getChildrenAsc', 745, 746),
(999, 989, NULL, NULL, 'getSymbols', 747, 748),
(1000, 989, NULL, NULL, 'getFirstChild', 749, 750),
(1001, 989, NULL, NULL, 'getCurrentChild', 751, 752),
(1002, 989, NULL, NULL, 'getParent', 753, 754),
(1003, 989, NULL, NULL, 'getFirstChildImage', 755, 756),
(1004, 989, NULL, NULL, 'checkForGrandChildren', 757, 758),
(1005, 989, NULL, NULL, 'getChildrenId', 759, 760),
(1006, 989, NULL, NULL, 'checkGallery', 761, 762),
(1007, 989, NULL, NULL, 'getData', 763, 764),
(1008, 180, NULL, NULL, 'Products', 768, 815),
(1016, 1008, NULL, NULL, 'admin_index', 769, 770),
(1017, 1008, NULL, NULL, 'admin_view', 771, 772),
(1018, 1008, NULL, NULL, 'admin_add', 773, 774),
(1019, 1008, NULL, NULL, 'admin_edit', 775, 776),
(1022, 1008, NULL, NULL, 'admin_delete', 777, 778),
(1023, 1008, NULL, NULL, 'getRole', 779, 780),
(1024, 1008, NULL, NULL, 'countRows', 781, 782),
(1025, 1008, NULL, NULL, 'getChildren', 783, 784),
(1026, 1008, NULL, NULL, 'getChildrenAsc', 785, 786),
(1027, 1008, NULL, NULL, 'getSymbols', 787, 788),
(1028, 1008, NULL, NULL, 'getFirstChild', 789, 790),
(1029, 1008, NULL, NULL, 'getCurrentChild', 791, 792),
(1030, 1008, NULL, NULL, 'getParent', 793, 794),
(1031, 1008, NULL, NULL, 'getFirstChildImage', 795, 796),
(1032, 1008, NULL, NULL, 'checkForGrandChildren', 797, 798),
(1033, 1008, NULL, NULL, 'getChildrenId', 799, 800),
(1034, 1008, NULL, NULL, 'checkGallery', 801, 802),
(1035, 1008, NULL, NULL, 'getData', 803, 804),
(1036, 180, NULL, NULL, 'Shop', 816, 869),
(1037, 1036, NULL, NULL, 'clear', 817, 818),
(1038, 1036, NULL, NULL, 'add', 819, 820),
(1039, 1036, NULL, NULL, 'itemupdate', 821, 822),
(1040, 1036, NULL, NULL, 'update', 823, 824),
(1041, 1036, NULL, NULL, 'remove', 825, 826),
(1042, 1036, NULL, NULL, 'cartupdate', 827, 828),
(1043, 1036, NULL, NULL, 'cart', 829, 830),
(1044, 1036, NULL, NULL, 'address', 831, 832),
(1045, 1036, NULL, NULL, 'step1', 833, 834),
(1046, 1036, NULL, NULL, 'step2', 835, 836),
(1047, 1036, NULL, NULL, 'review', 837, 838),
(1048, 1036, NULL, NULL, 'success', 839, 840),
(1049, 1036, NULL, NULL, 'getRole', 841, 842),
(1050, 1036, NULL, NULL, 'countRows', 843, 844),
(1051, 1036, NULL, NULL, 'getChildren', 845, 846),
(1052, 1036, NULL, NULL, 'getChildrenAsc', 847, 848),
(1053, 1036, NULL, NULL, 'getSymbols', 849, 850),
(1054, 1036, NULL, NULL, 'getFirstChild', 851, 852),
(1055, 1036, NULL, NULL, 'getCurrentChild', 853, 854),
(1056, 1036, NULL, NULL, 'getParent', 855, 856),
(1057, 1036, NULL, NULL, 'getFirstChildImage', 857, 858),
(1058, 1036, NULL, NULL, 'checkForGrandChildren', 859, 860),
(1059, 1036, NULL, NULL, 'getChildrenId', 861, 862),
(1060, 1036, NULL, NULL, 'checkGallery', 863, 864),
(1061, 1036, NULL, NULL, 'getData', 865, 866),
(1062, 180, NULL, NULL, 'Categories', 870, 913),
(1063, 1062, NULL, NULL, 'index', 871, 872),
(1064, 1062, NULL, NULL, 'view', 873, 874),
(1065, 1062, NULL, NULL, 'admin_index', 875, 876),
(1066, 1062, NULL, NULL, 'admin_view', 877, 878),
(1067, 1062, NULL, NULL, 'admin_add', 879, 880),
(1068, 1062, NULL, NULL, 'admin_edit', 881, 882),
(1069, 1062, NULL, NULL, 'admin_delete', 883, 884),
(1070, 1062, NULL, NULL, 'getRole', 885, 886),
(1071, 1062, NULL, NULL, 'countRows', 887, 888),
(1072, 1062, NULL, NULL, 'getChildren', 889, 890),
(1073, 1062, NULL, NULL, 'getChildrenAsc', 891, 892),
(1074, 1062, NULL, NULL, 'getSymbols', 893, 894),
(1075, 1062, NULL, NULL, 'getFirstChild', 895, 896),
(1076, 1062, NULL, NULL, 'getCurrentChild', 897, 898),
(1077, 1062, NULL, NULL, 'getParent', 899, 900),
(1078, 1062, NULL, NULL, 'getFirstChildImage', 901, 902),
(1079, 1062, NULL, NULL, 'checkForGrandChildren', 903, 904),
(1080, 1062, NULL, NULL, 'getChildrenId', 905, 906),
(1081, 1062, NULL, NULL, 'checkGallery', 907, 908),
(1082, 1062, NULL, NULL, 'getData', 909, 910),
(1083, 1008, NULL, NULL, 'admin_activate', 805, 806),
(1084, 1008, NULL, NULL, 'admin_deactivate', 807, 808),
(1085, 270, NULL, NULL, 'admin_editable', 457, 458),
(1086, 1062, NULL, NULL, 'admin_editable', 911, 912),
(1087, 344, NULL, NULL, 'admin_editable', 529, 530),
(1088, 299, NULL, NULL, 'admin_editable', 497, 498),
(1089, 239, NULL, NULL, 'admin_editable', 319, 320),
(1090, 247, NULL, NULL, 'admin_editable', 365, 366),
(1091, 893, NULL, NULL, 'admin_editable', 657, 658),
(1092, 952, NULL, NULL, 'admin_editable', 687, 688),
(1093, 966, NULL, NULL, 'admin_editable', 725, 726),
(1094, 262, NULL, NULL, 'admin_editable', 413, 414),
(1095, 181, NULL, NULL, 'admin_editable', 39, 40),
(1096, 989, NULL, NULL, 'admin_editable', 765, 766),
(1097, 1008, NULL, NULL, 'admin_add_image', 809, 810),
(1098, 1008, NULL, NULL, 'admin_edit_image', 811, 812),
(1099, 1008, NULL, NULL, 'admin_editable', 813, 814),
(1100, 186, NULL, NULL, 'admin_editable', 89, 90),
(1101, 1036, NULL, NULL, 'admin_editable', 867, 868),
(1102, 194, NULL, NULL, 'admin_editable', 139, 140),
(1103, 719, NULL, NULL, 'admin_editable', 571, 572),
(1104, 206, NULL, NULL, 'admin_editable', 174, 175),
(1105, 211, NULL, NULL, 'admin_editable', 214, 215),
(1106, 219, NULL, NULL, 'admin_editable', 278, 279),
(1107, 742, NULL, NULL, 'admin_editable', 604, 605),
(1109, 262, NULL, NULL, 'admin_add_album', 415, 416),
(1110, 262, NULL, NULL, 'admin_edit_album', 417, 418),
(1111, 181, NULL, NULL, 'about_us', 41, 42),
(1112, 181, NULL, NULL, 'products_services', 43, 44),
(1116, 247, NULL, NULL, 'admin_delete_selected', 367, 368),
(1117, 181, NULL, NULL, 'contact_us', 45, 46),
(1118, 181, NULL, NULL, 'event_gallery', 47, 48),
(1119, 181, NULL, NULL, 'trending', 49, 50);

-- --------------------------------------------------------

--
-- Table structure for table `aros`
--

CREATE TABLE `aros` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT '',
  `foreign_key` int(10) UNSIGNED DEFAULT NULL,
  `alias` varchar(255) DEFAULT '',
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aros`
--

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, 'Role', 1, '', 1, 10),
(2, 1, 'User', 1, '', 2, 3),
(4, NULL, 'Role', 2, '', 11, 14),
(5, 4, 'User', 3, '', 12, 13),
(6, 1, 'User', 2, '', 4, 5),
(7, 1, 'User', 2, '', 6, 7),
(8, NULL, 'Role', 3, '', 15, 18),
(9, 8, 'User', 2, '', 16, 17),
(10, 1, 'User', 3, '', 8, 9);

-- --------------------------------------------------------

--
-- Table structure for table `aros_acos`
--

CREATE TABLE `aros_acos` (
  `id` int(10) UNSIGNED NOT NULL,
  `aro_id` int(10) UNSIGNED NOT NULL,
  `aco_id` int(10) UNSIGNED NOT NULL,
  `_create` char(2) NOT NULL DEFAULT '0',
  `_read` char(2) NOT NULL DEFAULT '0',
  `_update` char(2) NOT NULL DEFAULT '0',
  `_delete` char(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aros_acos`
--

INSERT INTO `aros_acos` (`id`, `aro_id`, `aco_id`, `_create`, `_read`, `_update`, `_delete`) VALUES
(13, 1, 180, '1', '1', '1', '1'),
(15, 4, 197, '1', '1', '1', '1'),
(16, 4, 198, '1', '1', '1', '1'),
(17, 4, 274, '1', '1', '1', '1'),
(18, 4, 272, '1', '1', '1', '1'),
(19, 4, 271, '1', '1', '1', '1'),
(20, 4, 278, '1', '1', '1', '1'),
(21, 4, 277, '1', '1', '1', '1'),
(22, 4, 276, '1', '1', '1', '1'),
(23, 4, 242, '1', '1', '1', '1'),
(24, 4, 244, '1', '1', '1', '1'),
(25, 4, 243, '1', '1', '1', '1'),
(26, 4, 240, '1', '1', '1', '1'),
(27, 4, 241, '1', '1', '1', '1'),
(28, 4, 246, '1', '1', '1', '1'),
(29, 4, 279, '1', '1', '1', '1'),
(30, 4, 245, '1', '1', '1', '1'),
(31, 4, 250, '1', '1', '1', '1'),
(32, 4, 259, '1', '1', '1', '1'),
(33, 4, 260, '1', '1', '1', '1'),
(34, 4, 258, '1', '1', '1', '1'),
(35, 4, 261, '1', '1', '1', '1'),
(36, 4, 249, '1', '1', '1', '1'),
(37, 4, 280, '1', '1', '1', '1'),
(38, 4, 248, '1', '1', '1', '1'),
(40, 4, 266, '1', '1', '1', '1'),
(41, 4, 263, '1', '1', '1', '1'),
(42, 4, 264, '1', '1', '1', '1'),
(43, 4, 269, '1', '1', '1', '1'),
(44, 4, 281, '1', '1', '1', '1'),
(45, 4, 268, '1', '1', '1', '1'),
(46, 4, 185, '1', '1', '1', '1'),
(48, 4, 282, '1', '1', '1', '1'),
(49, 4, 184, '1', '1', '1', '1'),
(50, 4, 183, '1', '1', '1', '1'),
(51, 4, 187, '1', '1', '1', '1'),
(52, 4, 188, '1', '1', '1', '1'),
(53, 4, 193, '1', '1', '1', '1'),
(54, 4, 283, '1', '1', '1', '1'),
(55, 4, 192, '1', '1', '1', '1'),
(56, 4, 201, '1', '1', '1', '1'),
(57, 4, 196, '1', '1', '1', '1'),
(58, 4, 199, '1', '1', '1', '1'),
(59, 4, 204, '1', '1', '1', '1'),
(60, 4, 284, '1', '1', '1', '1'),
(61, 4, 203, '1', '1', '1', '1'),
(62, 4, 195, '1', '1', '1', '1'),
(63, 4, 209, '1', '1', '1', '1'),
(64, 4, 217, '1', '1', '1', '1'),
(65, 4, 237, '1', '1', '1', '1'),
(66, 4, 222, '1', '1', '1', '1'),
(70, 8, 185, '1', '1', '1', '1'),
(72, 8, 183, '1', '1', '1', '1'),
(74, 8, 884, '1', '1', '1', '1'),
(80, 8, 889, '1', '1', '1', '1'),
(81, 8, 890, '1', '1', '1', '1'),
(82, 8, 579, '1', '1', '1', '1'),
(83, 8, 184, '1', '1', '1', '1'),
(84, 8, 541, '1', '1', '1', '1'),
(85, 8, 505, '1', '1', '1', '1'),
(86, 8, 427, '1', '1', '1', '1'),
(87, 8, 542, '1', '1', '1', '1'),
(88, 8, 540, '1', '1', '1', '1'),
(89, 8, 356, '1', '1', '1', '1'),
(90, 8, 282, '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `category` varchar(11) DEFAULT NULL,
  `banner_image` varchar(160) NOT NULL,
  `title` varchar(140) NOT NULL,
  `description` text NOT NULL,
  `page_meta_description` varchar(150) NOT NULL,
  `page_meta_keywords` mediumtext NOT NULL,
  `url_content` text NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `add_banner` varchar(1) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `active` int(1) DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `lft` int(10) UNSIGNED DEFAULT NULL,
  `rght` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(160) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `event_image` varchar(140) DEFAULT NULL,
  `file` varchar(160) NOT NULL,
  `title` varchar(140) NOT NULL,
  `summary` text NOT NULL,
  `content` longtext NOT NULL,
  `event_date` date DEFAULT NULL,
  `time` time NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(150) NOT NULL,
  `name` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `link_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `img_thumb` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `gallery_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img_file` varchar(255) NOT NULL,
  `img_thumb` varchar(100) NOT NULL,
  `default_img` tinyint(1) NOT NULL DEFAULT '0',
  `feature` varchar(1) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `title` varchar(255) DEFAULT NULL,
  `story` text,
  `summary` text,
  `publish` int(11) NOT NULL DEFAULT '1',
  `archive` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `banner` varchar(255) DEFAULT NULL,
  `image_caption` varchar(255) NOT NULL,
  `file` varchar(160) NOT NULL,
  `image_1` varchar(255) DEFAULT NULL,
  `image_2` varchar(255) DEFAULT NULL,
  `image_3` varchar(255) DEFAULT NULL,
  `image_4` varchar(255) NOT NULL,
  `mp3` varchar(255) NOT NULL,
  `category` varchar(20) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `news_date` date DEFAULT NULL,
  `type` varchar(1) NOT NULL DEFAULT '0',
  `add_news` varchar(1) NOT NULL DEFAULT '0',
  `download_only` varchar(1) NOT NULL DEFAULT '0',
  `media` varchar(1) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `timestamp` varchar(160) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `billing_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `billing_address2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `billing_city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `billing_zip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `billing_state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `billing_country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipping_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipping_address2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipping_city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipping_zip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipping_state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipping_country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `weight` decimal(8,2) UNSIGNED DEFAULT '0.00',
  `size` int(11) DEFAULT NULL,
  `order_item_count` int(11) DEFAULT NULL,
  `subtotal` decimal(8,2) DEFAULT NULL,
  `tax` decimal(8,2) DEFAULT NULL,
  `shipping` decimal(8,2) DEFAULT NULL,
  `total` decimal(8,2) UNSIGNED DEFAULT NULL,
  `order_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `authorization` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `transaction` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ip_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED DEFAULT NULL,
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `weight` decimal(8,2) UNSIGNED DEFAULT '0.00',
  `price` decimal(8,2) UNSIGNED DEFAULT NULL,
  `subtotal` decimal(8,2) UNSIGNED DEFAULT NULL,
  `productmod_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `page_contents`
--

CREATE TABLE `page_contents` (
  `id` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `category` varchar(11) DEFAULT NULL,
  `publish_date` date DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `summary` text NOT NULL,
  `content` longtext NOT NULL,
  `content_1` longtext NOT NULL,
  `url` varchar(200) DEFAULT NULL,
  `icon` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `page_image` varchar(255) NOT NULL,
  `profile_image` varchar(255) NOT NULL,
  `banner` varchar(255) DEFAULT NULL,
  `banner_description` text,
  `file_name` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `file_date` date DEFAULT NULL,
  `file_name_1` varchar(255) DEFAULT NULL,
  `file_1` varchar(255) DEFAULT NULL,
  `file_name_2` varchar(255) DEFAULT NULL,
  `file_2` varchar(255) DEFAULT NULL,
  `file_name_3` varchar(255) DEFAULT NULL,
  `file_3` varchar(255) DEFAULT NULL,
  `file_name_4` varchar(255) DEFAULT NULL,
  `file_4` varchar(255) DEFAULT NULL,
  `mp3` varchar(255) NOT NULL,
  `page_type` varchar(1) NOT NULL DEFAULT '0',
  `page_style` varchar(100) NOT NULL,
  `add_content` varchar(1) NOT NULL DEFAULT '0',
  `sub_menu` varchar(1) NOT NULL DEFAULT '0',
  `action` varchar(20) DEFAULT NULL,
  `video_link` varchar(255) NOT NULL,
  `hide` varchar(1) NOT NULL DEFAULT '0',
  `feature` varchar(1) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page_contents`
--

INSERT INTO `page_contents` (`id`, `slug`, `category`, `publish_date`, `title`, `sub_title`, `summary`, `content`, `content_1`, `url`, `icon`, `logo`, `page_image`, `profile_image`, `banner`, `banner_description`, `file_name`, `file`, `file_date`, `file_name_1`, `file_1`, `file_name_2`, `file_2`, `file_name_3`, `file_3`, `file_name_4`, `file_4`, `mp3`, `page_type`, `page_style`, `add_content`, `sub_menu`, `action`, `video_link`, `hide`, `feature`, `created`, `modified`) VALUES
(1, 'about-us', NULL, NULL, 'About Us', 'About Us', '', '<p>\r\n							Revive Face and Body Spa is a dedicated spa boutique, offering a range of esthetic, therapeutic and enhanced facials and body treatments that will revitalize and re-energize your skin and body. \r\n							<br /><br />\r\n							Our serene location was built to help you relax and revitalise your skin and body. \r\n							<br /><br />\r\n							The Skin Therapists at Revive Face and Body Spa were trained by the International Dermal Institute, and are the most highly trained professionals in the industry.\r\n							<br /><br />\r\n							Our revolutionary approach to skin analysis; (developed by The International Dermal Institute exclusively for Dermalogica) gives our professional skin therapists a comprehensive technique in which we use to analyze every aspect of your skin.\r\n							<br /><br />\r\n							We also strongly believe that skin health is important for the entire body which is why the products we use are designed with the same philosophy that looking good is a product of skin health from head to toe.\r\n					    </p>', '', NULL, '', '', '', '', 'revive2_Dermalogoica_skin_treatment_banner.jpg', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '1', '', '1', '0', NULL, '', '0', '0', '2017-01-26 08:05:04', '2017-01-26 08:05:04'),
(2, 'dermalogica-skin-treatment-facials', NULL, NULL, 'Dermalogica skin treatment (Facials)', 'Dermalogica Skin <br />Treatment', '', '<p>This treatment is unique to each individual client because<br /> \r\nof the use of our professional customization products.</p>', '', NULL, '', '', '', '', 'img_1.jpg', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '1', '', '1', '0', NULL, '', '0', '0', '2017-01-26 08:07:01', '2017-01-26 08:07:01'),
(3, 'dermalogica-microzone-reg-treatments-mini-facials', NULL, NULL, 'Dermalogica MicroZone&reg; Treatments (Mini Facials)', 'Dermalogica MicroZone&reg; Treatments (Mini Facials)', '', '<p>\r\n							Often times, we want a quick, targeted solution to an immediate skin care concern, such as bothersome breakout, tired eyes or dull, lacklustre skin, without surrounding to the full 60 minutes treatment. For this reason, Dermalogica has created MicroZoneâ„¢ treatments: the 20  minutes, high-intensity, accelerated version of the Dermalogica Skin Treatment.\r\n							<br /><br />\r\n							<strong><em>These treatments are NOT intended to replace the full Dermalogica Skin Treatment (which should be administered every 4 to 6 weeks for optional skin health results)</em></strong>\r\n						</p>', '', NULL, '', '', '', '', 'img_22.jpg', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '1', '', '1', '0', NULL, '', '0', '0', '2017-01-26 08:08:15', '2017-01-26 08:08:15'),
(4, 'dermalogica-thermal-body-therapy-treatments', NULL, NULL, 'Dermalogica Thermal body therapy treatments', 'Dermalogica Thermal <br />Body Therapy Treatments', '', '', '', NULL, '', '', '', '', 'img_44.jpg', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '1', '', '1', '0', NULL, '', '0', '0', '2017-01-26 08:09:12', '2017-01-26 08:09:12'),
(5, 'diamond-microdermabrasion', NULL, NULL, 'Diamond Microdermabrasion', 'Diamond <br />Microdermabrasion', '', '', '', NULL, '', '', '', '', 'img_25.jpg', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '1', '', '1', '0', NULL, '', '0', '0', '2017-01-26 08:10:07', '2017-01-26 08:10:07'),
(6, 'body-treatment', NULL, NULL, 'Body Treatment', 'Body Treatment', '', '', '', NULL, '', '', '', '', 'img_26.jpg', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '1', '', '1', '0', NULL, '', '0', '0', '2017-01-26 08:10:47', '2017-01-26 08:10:47'),
(7, 'nails', NULL, NULL, 'Nails', 'Nails', '', '', '', NULL, '', '', '', '', 'img_136.jpg', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '1', '', '1', '0', NULL, '', '0', '0', '2017-01-26 08:11:38', '2017-01-26 08:11:38'),
(8, 'hair-removal', NULL, NULL, 'Hair Removal', 'Hair Removal', '', '', '', NULL, '', '', '', '', 'img_79.jpg', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '1', '', '1', '0', NULL, '', '0', '0', '2017-01-26 08:12:18', '2017-01-26 08:12:18'),
(9, 'eye-treatment', NULL, NULL, 'Eye Treatment', 'Eye Treatment', '', '', '', NULL, '', '', '', '', 'revive2_body_treatment_4.jpg', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '1', '', '1', '0', NULL, '', '0', '0', '2017-01-26 08:13:09', '2017-01-26 08:13:09'),
(10, 'packages', NULL, NULL, 'Packages', 'Spa Packages', '', '', '', NULL, '', '', '', '', 'packages.jpg', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '1', '', '1', '0', NULL, '', '0', '0', '2017-01-26 08:14:36', '2017-01-26 08:14:36'),
(11, 'the-dermalogica-br-skin-treatment', '2', NULL, 'The Dermalogica <br />Skin Treatment', '60 minutes (GHC 300)', '', '<p>\r\n						This treatment is unique to each individual client because of the use of our professional customisation products, including Dermalogicaâ€™s unique Complexes and Botanical Mixers throughout the step-by-step process to provide additional benefits to the clientâ€™s skin.\r\n					</p>', '', NULL, '', '', '', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '0', '', '0', '0', NULL, '', '0', '0', '2017-01-26 09:08:28', '2017-01-26 09:08:28'),
(12, 'age-smart-reg-treatment', '2', NULL, 'AGE Smart&reg; Treatment', '60 minutes (GHC 350)', '', '<p>Are the signs pf ageing becoming more prevalent on your skin? Give it a revitalising power boost with this treatment designed to help firm, smooth, nourish, regenerate and energise! The AGE SmartÂ® treatment helps control the biochemical triggers that lead to skin ageing, and is the perfect complement to your AGE SmartÂ® home care regime.</p>', '', NULL, '', '', '', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '0', '', '0', '0', NULL, '', '0', '0', '2017-01-26 09:08:59', '2017-01-26 09:08:59'),
(13, 'medibac-clearing-reg-treatment', '2', NULL, 'MediBac Clearing&reg; Treatment', '60 minutes (GHC 350)', '', '<p>\r\n						Jump-start acne clearing with this purifying, detoxifying professional treatment that promotes breakout clearing well beyond the treatment.\r\n					</p>', '', NULL, '', '', '', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '0', '', '0', '0', NULL, '', '0', '0', '2017-01-26 09:09:27', '2017-01-26 09:09:27'),
(14, 'ultracalming-treatment', '2', NULL, 'UltraCalmingâ„¢ Treatment', '60 minutes (GHC 350)', '', '<p>Red, itching, burning skin - don\'t conceal it,. Control it! The UltraCalmingâ„¢ Treatment  calms and soothes by targeting the triggers behind the redness, itching, and stinging, while helping to recover skin health for long-term relief from flare-ups.</p>', '', NULL, '', '', '', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '0', '', '0', '0', NULL, '', '0', '0', '2017-01-26 09:09:53', '2017-01-26 09:09:53'),
(15, 'the-biosurface-peel-treatment', '2', NULL, 'The BioSurface Peelâ„¢ Treatment', '30/60 minutes (GHC 300/350)', '', '<p>\r\n						BioSurface Peel is a professional chemical peel designed to resurface the skin with minimal recovery time. Our unique, multi-phase approach works with the skin;s biology to safely slough away dull epidermal layers and accelerate cell renewal without inflammation and prolonged downtime typically associated with chemical peels. Your skin therapist can help design a series of treatments to address your specific needs, whether you\'re looking to address photoaging, fine lines and wrinkles, uneven skin tone or acne breakouts.\r\n					</p>', '', NULL, '', '', '', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '0', '', '0', '0', NULL, '', '0', '0', '2017-01-26 09:10:19', '2017-01-26 09:10:19'),
(16, 'microzone-reg-flash-exfoliation', '3', NULL, 'microZone&reg; Flash Exfoliation', '20 minutes (GHC 200)', '', '<p>Resurface, renew and brighten with this maximum strength exfoliation treatment! Hydroxy acids and Retinol lift away dull dull surface cells while nourishing cocktails of vitamins, peptides and botanical extracts help reverse visible signs of ageing, revealing healthy, glowing skin.</p>', '', NULL, '', '', '', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '0', '', '0', '0', NULL, '', '0', '0', '2017-01-26 09:12:13', '2017-01-26 09:12:13'),
(17, 'microzone-reg-age-repair', '3', NULL, 'microZone&reg; AGE Repair', '20 minutes (GHC 200)', '', '<p>Revitalise and energise while fighting visible signs of ageing with restorative treatment. See immediate results when the skin is intensely exfoliated and treated with Dermalogica AGE SmartÂ® products that pack the skin with nutrients and peptides to fortify, protect and restore skin back to its healthiest state.</p>', '', NULL, '', '', '', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '0', '', '0', '0', NULL, '', '0', '0', '2017-01-26 09:12:37', '2017-01-26 09:12:37'),
(18, 'microzone-reg-moisture-boost', '3', NULL, 'microZone&reg; Moisture Boost', '20 minutes (GHC 200)', '', '<p>Rehydrate and replenish dry, uncomfortably tight, thirsty skin. This deeply penetrating moisture surge treatment lifts dulling skin debris to reveal plump new cells and help soften surface lines. Discover a revived, dewy, fresh face in a snap. This treatment is perfect for tired and travel weary skin!</p>', '', NULL, '', '', '', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '0', '', '0', '0', NULL, '', '0', '0', '2017-01-26 09:13:08', '2017-01-26 09:13:08'),
(19, 'microzone-reg-blackhead-relief', '3', NULL, 'microZone&reg; Blackhead Relief', '20 minutes (GHC 200)', '', '<p>Want that super fast clean skin feeling? This deep cleansing, purifying treatment helps clean away blackheads, stubborn bumps and under surface congestion, banishing any future breakouts while delivering clean, clear, smooth skin.</p>', '', NULL, '', '', '', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '0', '', '0', '0', NULL, '', '0', '0', '2017-01-26 09:13:33', '2017-01-26 09:13:33'),
(20, 'microzone-reg-rapid-spot-clearing', '3', NULL, 'microZone&reg; Rapid Spot Clearing', '20 minutes (GHC 200)', '', '<p>Donâ€™t freakout about that breakout! Speed up repair and clearing of your breakouts with this powerful treatment designed to destroy breakout-causing bacteria, expedite healing and soothe redness and inflammation.</p>', '', NULL, '', '', '', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '0', '', '0', '0', NULL, '', '0', '0', '2017-01-26 09:14:16', '2017-01-26 09:14:16'),
(21, 'microzone-reg-oil-control', '3', NULL, 'microZone&reg; Oil Control', '20 minutes (GHC 200)', '', '<p>Take control of greasy shine and clean away dirt and debris with purifying, texture smoothing treatment. Perfect for priming skin before a special event to help skin stay matte and refreshed all day.</p>', '', NULL, '', '', '', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '0', '', '0', '0', NULL, '', '0', '0', '2017-01-26 09:14:42', '2017-01-26 09:14:42'),
(22, 'microzone-reg-skin-soothing', '3', NULL, 'microZone&reg; Skin Soothing', '20 minutes (GHC 200)', '', '<p>Quickly relive redness, irritation and inflammation with this soothe, cooling treatment for sensitive skin.</p>', '', NULL, '', '', '', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '0', '', '0', '0', NULL, '', '0', '0', '2017-01-26 09:15:10', '2017-01-26 09:15:10'),
(23, 'microzone-reg-men-s-skin-fitness', '3', NULL, 'microZone&reg; Men\'s Skin Fitness', '20 minutes (GHC 200)', '', '<p>Shaving challenges and skin woes getting you down? This rapid treatment cleans deep, repairs and clams while tackling all your shave-related skin issues. Get skin and shaving tips together with great looking skin in just a snap.</p>', '', NULL, '', '', '', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '0', '', '0', '0', NULL, '', '0', '0', '2017-01-26 09:15:35', '2017-01-26 09:15:35'),
(24, 'microzone-reg-eye-firm', '3', NULL, 'microZone&reg; Eye Firm', '20 minutes (GHC 100)', '', '<p>Treat multiply eye are concerns like dark circles, puffiness, wrinkles, loss of volume and firmness with this advanced peptide eye treatment designed to gently exfoliate, rehydrate, smooth lines and boost new collagen while improving overall firmness and tone.</p>', '', NULL, '', '', '', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '0', '', '0', '0', NULL, '', '0', '0', '2017-01-26 09:16:11', '2017-01-26 09:16:11'),
(25, 'microzone-reg-eye-relief', '3', NULL, 'microZone&reg; Eye Relief', '20 minutes (GHC 100)', '', '<p>Wake up tired eyes! This ultra hydrating, relaxing treatment helps minimise sensitivity, reduce puffiness and smooth fine lines while exclusive UltraCalmingâ„¢ Complex helps soothe and strengthen the skin.</p>', '', NULL, '', '', '', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '0', '', '0', '0', NULL, '', '0', '0', '2017-01-26 09:17:30', '2017-01-26 09:17:30'),
(26, 'microzone-reg-lip-renewal', '3', NULL, 'microZone&reg; Lip Renewal', '20 minutes (GHC 100)', '', '<p>\r\n						This supreme lip conditioning treatment smooths away flaky, damaged skin that can result from lip make-up and the environment. By infusing firming peptides and repairing vitamins into the perioral area, it restores the delicate lip tissue back to the optimum health while smoothing fine feather lines and erasing the signs of ageing.\r\n					</p>', '', NULL, '', '', '', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '0', '', '0', '0', NULL, '', '0', '0', '2017-01-26 09:17:55', '2017-01-26 09:17:55'),
(27, 'mineral-salt-scrub-therapy', '4', NULL, 'Mineral Salt Scrub Therapy', '45 minutes (GHC 300)', '', '<p>Completely customised to either energise or reduce stress, this Mineral Salt Scrub Therapy polishes skin to a soft glow while providing critical hydration and nourishment skin needs. Mineral Sea Salts and Seaweed exfoliates while skin-smoothing enzymes help dissolve dead skin cells naturally for a smooth finish. Natural oils and extracts help stimulates the sense while cleansing and conditioning, and the added benefit of warmth helps invigorate the mind and body.</p>', '', NULL, '', '', '', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '0', '', '0', '0', NULL, '', '0', '0', '2017-01-26 09:19:10', '2017-01-26 09:19:10'),
(28, 'body-foliation-therapy', '4', NULL, 'Body Foliation Therapy', '45 minutes (GHC 350)', '', '<p>Give your body a the customised exfoliation it needs coupled with the warming sensation it craves! A gentle Oatmeal and Rice Bran activates to create a gentle yet effective exfoliant that whisks away dead skin cells, brightens skin and helps reduce the appearance of sun spots and hyperpigmentation. Skin is smoother and prepped for maximum absorption of rich, smoothing botanical oils. Youâ€™ll leave this therapy with silky, healthier skin.</p>', '', NULL, '', '', '', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '0', '', '0', '0', NULL, '', '0', '0', '2017-01-26 09:19:35', '2017-01-26 09:19:35'),
(29, 'power-recovery-reg-therapy', '4', NULL, 'Power Recovery &reg; Therapy', '45 minutes (GHC 350)', '', '<p>An intense wrap therapy dedicated to feeding you skin with the nourishment it craves. A unique blend of Wheat Protein and Honey act as maximum hydrators while Wasabi, Ginger and White Tea stimulate blood circulation to promote healthier skin. Customised essential oil blends in a massage medium offer aromatherapeutic benefits, while rich Fukui Nut, Olive and Grape Seed oils smooth and provide antioxidants protection.</p>', '', NULL, '', '', '', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '0', '', '0', '0', NULL, '', '0', '0', '2017-01-26 09:20:02', '2017-01-26 09:20:02'),
(30, 'nourishment-sea-mud-therapy', '4', NULL, 'Nourishment Sea Mud Therapy', '45 minutes (GHC 350)', '', '<p>Stimulate circulation while smoothing skin with this body wrap therapy that promotes skin nourishment. Natural earth clays draws out impurities while Ginger and White Tea stimulates circulation and smooth skin. Customised essential oils provide aromatherapeutic and skin benefits while Caffeine provides all-over toning. Rest in a warming wrap that includes blood circulation all while encouraging absorption of nourishing botanicals.</p>', '', NULL, '', '', '', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '0', '', '0', '0', NULL, '', '0', '0', '2017-01-26 09:20:27', '2017-01-26 09:20:27'),
(31, 'mud-massage-therapy', '4', NULL, 'Mud Massage Therapy', '45/60 minutes (GHC 250/300)', '', '<p>A unique and exotic treatment that combines the detoxifying and cleansing capabilities of earth clays with the intensely moisturising power of natural oils. Olive and Grape sed oils protect smooth and condition while fortifying skin with antioxidants, and a unique blend of Asian herbs stimulate circulation. Your skin is smooth, soothed and protected.</p>', '', NULL, '', '', '', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '0', '', '0', '0', NULL, '', '0', '0', '2017-01-26 09:20:56', '2017-01-26 09:20:56'),
(32, 'deep-thermal-therapy-with-thermal-stamp', '4', NULL, 'Deep Thermal Therapy with Thermal Stamp', '60/90 minutes(GHC 350/400)', '', '<p>Completely customised to either energise or reduce stress, this Mineral Salt Scrub Therapy polishes skin to a soft glow while providing critical hydration and nourishment skin needs. Mineral Sea Salts and Seaweed exfoliates while skin-smoothing enzymes help dissolve dead skin cells naturally for a smooth finish. Natural oils and extracts help stimulates the sense while cleansing and conditioning, and the added benefit of warmth helps invigorate the mind and body.</p>', '', NULL, '', '', '', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '0', '', '0', '0', NULL, '', '0', '0', '2017-01-26 09:21:30', '2017-01-26 09:21:30'),
(33, 'thermal-touch-for-hands-and-arms', '4', NULL, 'Thermal Touch for Hands and Arms', '30 minutes (GHC 150)', '', '<p>Your arms and hands will meet their relief during this Thermal Touch Treatment that includes paraffin, this customised treatment is designed to cleanse, exfoliate, hydrate and condition the hands and arms so they are smoother, brighter, healthier and refreshed.</p>', '', NULL, '', '', '', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '0', '', '0', '0', NULL, '', '0', '0', '2017-01-26 09:21:53', '2017-01-26 09:21:53'),
(34, 'thermal-touch-for-legs-and-feet', '4', NULL, 'Thermal Touch for Legs and Feet', '30 minutes (GHC 150)', '', '<p>Itâ€™s time to give your lower legs the attention they deserve! Cleanse, exfoliate, hydrate and moisturise for healthy and revitalised skin and muscles that are ready to take on the day!</p>', '', NULL, '', '', '', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '0', '', '0', '0', NULL, '', '0', '0', '2017-01-26 09:22:33', '2017-01-26 09:22:33'),
(35, 'diamond-br-microdermabrasion', '5', NULL, 'Diamond <br />Microdermabrasion', '60 minutes (GHC 350)', '', '<p>\r\n						This is a facial procedure that uses a mechanical medium to physically exfoliate the skin, removing the outer layer of dead skin cells. It is a resurfacing technique performed in a series of 4 to 8 treatments for best results. These initial treatments can be done every 7 to 10 days apart and you can continue to receive one treatment on a monthly basis for maintenance. \r\n						<br /><br />\r\n						During the treatment, your skin will first be pre cleansed and then cleansed with an appropriate cleanser for your skin type, followed by the microdermabrasion wand to resurface your skin, then we tone with a calming toner, apply a hydrating or calming complex from Dermalogica, apply a hydrating or calming masque form Dermalogica, followed by a customized treatment serum and moisturizer, completing your treatment with Dermalogicaâ€™s Power Firm eye treatment and Dermalogicaâ€™s Super Sensitive Shield SPF30.\r\n						<br />\r\n						4 Treatments Package - GHC 1,300<br />\r\n						8 Treatments Package - GHC 2,500<br />\r\n						(clients who purchase the 8 treatments package gets 20% off their next 2 follow up appointments) discount is only valid 3 months after the last package appointment.\r\n					</p>', '', NULL, '', '', '', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '0', '', '0', '0', NULL, '', '0', '0', '2017-01-26 09:28:18', '2017-01-26 09:28:18'),
(36, 'body-treatment-2', '6', NULL, 'Body Treatment', '', '', '<ul>\r\n				<li>Body scrub - 150</li>\r\n				<li>Body scrub + Relaxation massage - 250</li>\r\n				<li>Hot stone massage - 150</li>\r\n				<li>Relaxation massage - 120</li>\r\n				<li>Deep tissue - 130</li>\r\n				<li>Foot massage - 50</li>\r\n				<li>Head and neck massage - 50</li>\r\n		    </ul>', '', NULL, '', '', '', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '0', '', '0', '0', NULL, '', '0', '0', '2017-01-26 09:29:16', '2017-01-26 09:29:16'),
(37, 'nails-2', '7', NULL, 'Nails ', '', '', '<ul>\r\n				<li>Manicure - 40</li>\r\n				<li>Pedicure - 60</li>\r\n				<li>Manicure + Pedicure - 75</li>\r\n				<li>Spa Manicure - 60</li>\r\n				<li>Spa Pedicure - 80</li>\r\n				<li>Spa Manicure + Spa Pedicure - 130</li>\r\n				<li>Gentâ€™s Manicure - 40</li>\r\n				<li>Gentâ€™s Pedicure - 70</li>\r\n				<li>Menâ€™s Manicure + Pedicure - 100</li>\r\n				<li>Shellac - 40</li>\r\n				<li>Shellac + Chrome Powder - 70</li>\r\n				<li>French Tips ( Shellac) - 50</li>\r\n				<li>Acrylic + Shellac - 90</li>\r\n				<li>Acrylic + Polish - 60</li>\r\n				<li>Acrylic + Shellac + Chrome Powder - 100</li>\r\n				<li>French manicure (with Acrylic) - 70</li>\r\n				<li>French manicure refill - 50</li>\r\n				<li>Refill + Polish - 40</li>\r\n				<li>Refill + Shellac -  75</li>\r\n				<li>Gel fullset + Polish - 70</li>\r\n				<li>Gel + Shellac - 100</li>\r\n				<li>Gel + Shellac + Chrome Powder - 110</li>\r\n				<li>Gel Refill + Polish - 60</li>\r\n				<li>Gel Refill + Shellac - 85</li>\r\n				<li>Gel Removal - 10</li>\r\n				<li>Soak off (Acrylic) - 20</li>\r\n				<li>Soak off (Shellac) - 10</li>\r\n				<li>Polish change - 20</li>\r\n		    </ul>', '', NULL, '', '', '', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '0', '', '0', '0', NULL, '', '0', '0', '2017-01-26 09:35:15', '2017-01-26 09:35:15'),
(38, 'hair-removal-text', '8', NULL, 'Hair removal text', '', '', '<ul>\r\n				<li>Full legs - 120</li>\r\n				<li>Bikini - 50</li>\r\n				<li>Brazilian - 80 </li>\r\n				<li>Hollywood - 100</li>\r\n				<li>Upper/ Lower legs - 60</li>\r\n				<li>Full arms - 50</li>\r\n				<li>Underams - 40</li>\r\n				<li>Back - 60</li>\r\n				<li>Chest - 60</li>\r\n				<li>Back + Chest - 110</li>\r\n				<li>Brows - 25</li>\r\n				<li>Upper lip - 20</li>\r\n				<li>Chin - 25 to 35</li>\r\n				<li>Cheeks - 40</li>\r\n				<li>Full face 1 (brows + upper lip) - 40</li>\r\n				<li>Full face 2 (brows + upper lip + chin) - 65 to 70</li>\r\n				<li>Full face 3 (brows + upper lip + chin + cheeks) - 95 to 100</li>\r\n		    </ul>', '', NULL, '', '', '', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '0', '', '0', '0', NULL, '', '0', '0', '2017-01-26 09:36:16', '2017-01-26 09:36:16'),
(39, 'eye-treatment-text', '9', NULL, 'Eye treatment text', '', '', '<ul>\r\n				<li>Lash Tint - 30</li>\r\n				<li>Brow Tint - 30</li>\r\n				<li>Lash + Brow Tint - 50</li>\r\n			</ul>', '', NULL, '', '', '', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '0', '', '0', '0', NULL, '', '0', '0', '2017-01-26 09:36:46', '2017-01-26 09:36:46'),
(40, 'the-ultimate-revival', '10', NULL, 'The Ultimate Revival', 'GHC 880 (240mins/4hrs)', '', '<ul>\r\n						<li>Consultation and Expert Face Mapping (Skin Analysis)</li>\r\n						<li>A Prescribed Dermalogica Facial - 350</li>\r\n						<li>Eye Firm OR Eye Relief - 100</li>\r\n						<li>Lip Renewal - 100</li>\r\n						<li>Steam Room - 70</li>\r\n						<li>Deep Thermal Therapy with Thermal Stamp â€“ 400</li>\r\n						<li>Spa Manicure + Spa Pedicure - 130</li>\r\n						<li>Shellac (gel polish) - 40 </li>\r\n					</ul>\r\n					<p><strong><small>Package is worth GHC 1,190</small></strong></p>', '', NULL, '', '', '', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '0', '', '0', '0', NULL, '', '0', '0', '2017-01-26 09:38:39', '2017-01-26 09:38:39'),
(41, 'totally-revived', '10', NULL, 'Totally Revived', 'GHC 600 (150mins/2.5hrs)', '', '<ul>\r\n						<li>Consultation and Expert Face Mapping (Skin Analysis)</li>\r\n						<li>A Prescribed MicroZone Facial â€“ 200</li>\r\n						<li>Steam Room - 70</li>\r\n						<li>A Dermalogica Thermal Body Therapy Treatment - 350\r\n							Choice of (Mineral Salt Scrub Therapy <strong>OR</strong> Body Foliation Therapy <strong>OR</strong> Nourishment Sea Mud Therapy)</li>\r\n						<li>Shower</li>\r\n						<li>Manicure + Pedicure â€“ 100</li>\r\n					</ul>\r\n					<p><strong><small>Package is worth GHC 720</small></strong></p>', '', NULL, '', '', '', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '0', '', '0', '0', NULL, '', '0', '0', '2017-01-26 09:39:05', '2017-01-26 09:39:05'),
(42, 'the-boss-lady-2', '10', NULL, 'The Boss Lady', 'GHC 590 (180mins/3hrs)', '', '<ul>\r\n						<li>Consultation and Expert Face Mapping (Skin Analysis)</li>\r\n						<li>A Prescribed MicroZone Facial - 200</li>\r\n						<li>Steam Room - 70</li>\r\n						<li>Mineral Salt Scrub Therapy - 300</li>\r\n						<li>Shower </li>\r\n						<li>Manicure (plus Shellac) + Pedicure - 130 </li>\r\n					</ul>\r\n					<p><strong><small>Package is worth GHC 700</small></strong></p>', '', NULL, '', '', '', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '0', '', '0', '0', NULL, '', '0', '0', '2017-01-26 09:39:39', '2017-01-26 09:40:13'),
(43, 'the-dapper-man', '10', NULL, 'The Dapper Man', 'GHC 550 (150mins/2.5hrs)', '', '<ul>\r\n						<li>Consultation and Expert Face Mapping (Skin Analysis)</li>\r\n						<li>MicroZone Menâ€™s Skin Fitness - 200</li>\r\n						<li>Steam Room â€“ 70</li>\r\n						<li>Mud Massage Therapy - 300</li>\r\n						<li>Shower </li>\r\n						<li>Gentâ€™s Manicure + Pedicure - 100</li>\r\n					</ul>\r\n					<p><strong><small>Package is worth GHC 670</small></strong></p>', '', NULL, '', '', '', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '0', '', '0', '0', NULL, '', '0', '0', '2017-01-26 09:40:37', '2017-01-26 09:40:37'),
(44, 'the-busy-gentleman', '10', NULL, 'The Busy Gentleman', 'GHC 310 (120mins/2hrs)', '', '<ul>\r\n						<li>Consultation and Expert Face Mapping (Skin Analysis)</li>\r\n						<li>MicroZone Menâ€™s Skin Fitness - 200</li>\r\n						<li>Gentâ€™s Manicure + Pedicure - 100</li>\r\n						<li>Head and Neck Massage â€“ 50</li>\r\n					</ul>\r\n					<p><strong><small>Package is worth GHC 350</small></strong></p>', '', NULL, '', '', '', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '0', '', '0', '0', NULL, '', '0', '0', '2017-01-26 09:41:01', '2017-01-26 09:41:01'),
(45, 'man-on-a-budget', '10', NULL, 'Man On a Budget', 'GHC 520 (150mins/2.5hrs)', '', '<ul>\r\n						<li>Consultation and Expert Face Mapping (Skin Analysis)</li>\r\n						<li>MicroZone Menâ€™s Skin Fitness - 200</li>\r\n						<li>Steam Room - 70</li>\r\n						<li>Mud Massage Therapy - 250</li>\r\n						<li>Shower</li>\r\n						<li>Manicure + Pedicure - 100</li>\r\n					</ul>\r\n					<p><strong><small>Package is worth GHC 620</small></strong></p>', '', NULL, '', '', '', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '0', '', '0', '0', NULL, '', '0', '0', '2017-01-26 09:41:26', '2017-01-26 09:41:26'),
(46, 'woman-on-a-budget', '10', NULL, 'Woman On a Budget', 'GHC 510 (150mins/2.5hrs)', '', '<ul>\r\n						<li>Consultation and Expert Face Mapping (Skin Analysis)</li>\r\n						<li>A Prescribed MicroZone Treatment - 200</li>\r\n						<li>Steam Room â€“ 70</li>\r\n						<li>Mud Massage Therapy - 250</li>\r\n						<li>Manicure + Pedicure - 90</li>\r\n					</ul>\r\n					<p><strong><small>Package is worth GHC 610</small></strong></p>', '', NULL, '', '', '', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '0', '', '0', '0', NULL, '', '0', '0', '2017-01-26 09:41:51', '2017-01-26 09:41:51'),
(47, 'power-couple', '10', NULL, 'Power Couple', 'GHC 1,300 (210mins/3.5hrs)', '', '<ul>\r\n						<li>Consultation and Expert Face Mapping (Skin Analysis)</li>\r\n						<li>A Customized Dermalogica Skin Treatment â€“ 300x2 = 600</li>\r\n						<li>Steam Room â€“ 70x2 = 140</li>\r\n						<li>Deep Thermal Therapy with Thermal Stamp â€“ 350x2 = 700</li>\r\n						<li>Shower</li>\r\n						<li>Manicure + Pedicure = 90x2 = 180</li>\r\n					</ul>\r\n					<p><strong><small>Package is worth GHC 1,800</small></strong></p>', '', NULL, '', '', '', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '0', '', '0', '0', NULL, '', '0', '0', '2017-01-26 09:42:15', '2017-01-26 09:42:15'),
(48, 'vip-couple', '10', NULL, 'VIP Couple', 'GHC 730 (150mins/2.5hrs)', '', '<ul>\r\n						<li>Consultation and Expert Face Mapping (Skin Analysis)</li>\r\n						<li>A Prescribed MicroZone Facial = 200x2 = 400</li>\r\n						<li>Relaxation Massage â€“ 120x2 = 240</li>\r\n						<li>Manicure + Pedicure â€“ 90x2 = 180</li>\r\n					</ul>\r\n					<p><strong><small>Package is worth GHC 820</small></strong></p>', '', NULL, '', '', '', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '0', '', '0', '0', NULL, '', '0', '0', '2017-01-26 09:42:38', '2017-01-26 09:42:38'),
(49, 'wedding-spa-packages', '10', NULL, 'Wedding Spa Packages', '', '', '<table class=\"text-left\">\r\n					  <thead>\r\n					    <tr class=\"sp\">\r\n					      <th width=\"50%\" class=\"text-left\"><h4>BRIDE</h4></th>\r\n						  <th width=\"50%\" class=\"text-left\"></th>\r\n					    </tr>\r\n					    <tr>\r\n					      <th width=\"50%\" class=\"text-left\">SPLURGE - GHC 1,200</th>\r\n						  <th width=\"50%\" class=\"text-left\">SAVE - GHC 540</th>\r\n					    </tr>\r\n					  </thead>\r\n					  <tbody>\r\n					    <tr>\r\n					      <td>\r\n					      	<ul>\r\n								<li>Consultation and Expert Face Mapping (Skin Analysis)</li>\r\n								<li>A Customized Dermalogica Skin Treatment including MicroZone Lip Renewal and a choice of MicroZone Eye firm OR MicroZone Eye Relief = 300+100+100 = 500</li>\r\n								<li>Steam Room - 70</li>\r\n								<li>Body Foliation - 350</li>\r\n								<li>Mud Massage Therapy - 250</li>\r\n								<li>Spa Manicure + Pedicure - 130</li>\r\n								<li>Full Set Acrylic + Shellac - 90</li>\r\n								<li>Full Body Wax (Full legs, Brazilian OR Hollywood, full arms, under arms, brows, upper lip and chin) - 360</li>\r\n								<li>Lash + Brow Tint â€“ 50</li>\r\n					      	</ul>\r\n							<p><strong><small>Package is worth GHC 1,800</small></strong></p>\r\n					      </td>\r\n					      <td>\r\n					      	<ul>\r\n								<li>Consultation and Expert Face Mapping (Skin Analysis)</li>\r\n								<li>A Prescribed MicroZone Treatment - 200</li>\r\n								<li>Steam Room + Body Scrub + Relaxation Massage - 250</li>\r\n								<li>Manicure + Pedicure - 90</li>\r\n								<li>Full Set Acrylic + Shellac - 90</li>\r\n								<li>Full Legs + Bikini + Under Arms Wax - 210</li>\r\n								<li>Brow + Upper Lip Wax - 40</li>\r\n								<li>Lash + Brow Tint â€“ 50</li>\r\n					      	</ul>\r\n							<p><strong><small>Package is worth GHC 930</small></strong></p>\r\n					      </td>\r\n					    </tr>\r\n					  </tbody>\r\n					</table><br />\r\n					<h5><em>(Brides that purchase the Splurge Package can add the Save Package for an additional GHC 850 for the Maid of Honour OR Mother of The Bride)</em></h5><br />\r\n					<table class=\"text-left\">\r\n					  <thead>\r\n					    <tr class=\"sp\">\r\n					      <th width=\"50%\" class=\"text-left\"><h4>GROOM</h4></th>\r\n						  <th width=\"50%\" class=\"text-left\"></th>\r\n					    </tr>\r\n					    <tr>\r\n					      <th width=\"50%\" class=\"text-left\">SPLURGE â€“ GHC 640</th>\r\n						  <th width=\"50%\" class=\"text-left\">SAVE â€“ GHC 290</th>\r\n					    </tr>\r\n					  </thead>\r\n					  <tbody>\r\n					    <tr>\r\n					      <td>\r\n					      	<ul>\r\n								<li>Consultation and Expert Face Mapping (Skin Analysis)</li>\r\n								<li>Dermalogica Skin Treatment - 300</li>\r\n								<li>Steam Room - 70</li>\r\n								<li>Mud Massage Therapy - 300</li>\r\n								<li>Shower</li>\r\n								<li>Gentâ€™s Manicure + Pedicure â€“ 100</li>\r\n					      	</ul>\r\n							<p><strong><small>Package is worth GHC 770</small></strong></p>\r\n					      </td>\r\n					      <td>\r\n					      	<ul>\r\n								<li>Consultation and Expert Face Mapping (Skin Analysis)</li>\r\n								<li>MicroZone Menâ€™s Skin Fitness - 200</li>\r\n								<li>Head + Neck Massage - 50</li>\r\n								<li>Gentâ€™s Manicure + Pedicure â€“ 100</li>\r\n					      	</ul>\r\n							<p><strong><small>Package is worth GHC 350</small></strong></p>\r\n					      </td>\r\n					    </tr>\r\n					  </tbody>\r\n					</table><br />\r\n					<h5><em>(Grooms that purchase the Splurge Package can add the Save Package for an additional GHC 320 for the Best Man or Father of the Groom)</em></h5>', '', NULL, '', '', '', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '0', '', '0', '0', NULL, '', '0', '0', '2017-01-26 09:43:25', '2017-01-26 09:43:25'),
(50, 'download-new-full-menu', NULL, NULL, 'Download New Full Menu', '', '', '', '', NULL, '', '', '', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2', '', '0', '0', NULL, '', '0', '0', '2017-01-26 09:51:05', '2017-01-26 09:51:05'),
(51, 'phone', NULL, NULL, 'Phone', '', '', '+233 (0)30 250 6038 <br />+233 (0)30 397 2370', '', NULL, '', '', '', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '3', '', '0', '0', NULL, '', '0', '0', '2017-01-26 09:51:48', '2017-01-26 09:51:48'),
(52, 'email', NULL, NULL, 'email', '', '', '<a href=\"mailto:info@revivefaceandbodyspa.com\">info@revivefaceandbodyspa.com</a>', '', NULL, '', '', '', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '3', '', '0', '0', NULL, '', '0', '0', '2017-01-26 09:52:30', '2017-01-26 09:52:30'),
(53, 'address', NULL, NULL, 'Address', '', '', '<h6>2761 Pawpaw Street, East legon(Near American House), Accra.</h6>', '', NULL, '', '', '', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '3', '', '0', '0', NULL, '', '0', '0', '2017-01-26 09:52:52', '2017-01-26 09:52:52');

-- --------------------------------------------------------

--
-- Table structure for table `productmods`
--

CREATE TABLE `productmods` (
  `id` int(10) NOT NULL,
  `product_id` int(10) DEFAULT NULL,
  `sku` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `value` char(36) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` decimal(8,2) DEFAULT NULL,
  `weight` decimal(8,2) DEFAULT NULL,
  `active` int(1) DEFAULT NULL,
  `views` int(11) DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) UNSIGNED NOT NULL,
  `category` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `category_id` int(11) UNSIGNED DEFAULT NULL,
  `brand_id` int(11) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `currency` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `product_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` decimal(8,2) DEFAULT NULL,
  `weight` decimal(8,2) DEFAULT NULL,
  `size` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tags` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `views` int(11) DEFAULT '0',
  `active` int(1) DEFAULT NULL,
  `product_status` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created`, `modified`) VALUES
(1, 'Administrator', '2012-07-03 20:15:14', '2012-07-03 20:15:14'),
(2, 'User', '2012-07-11 18:38:46', '2012-07-11 18:38:46'),
(3, 'Clients', '2015-06-17 10:58:29', '2015-06-17 10:58:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(160) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` char(40) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `role_id`, `created`, `modified`) VALUES
(1, 'Administrator', 'admin', '45f54f46144393e5be431a9092857b7f49782128', 1, '2012-07-03 20:20:22', '2015-01-09 03:08:34');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `category` varchar(1) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `text` longtext NOT NULL,
  `video_poster` varchar(255) NOT NULL,
  `video_mp4` varchar(255) NOT NULL,
  `video_webm` varchar(255) NOT NULL,
  `video_ogv` varchar(255) NOT NULL,
  `add_content` varchar(255) NOT NULL,
  `content_type` varchar(1) NOT NULL DEFAULT '0',
  `youtube_link` varchar(200) NOT NULL,
  `youtube` varchar(1) NOT NULL DEFAULT '0',
  `parent` varchar(1) NOT NULL DEFAULT '0',
  `featured` varchar(1) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acos`
--
ALTER TABLE `acos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aros`
--
ALTER TABLE `aros`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aros_acos`
--
ALTER TABLE `aros_acos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_contents`
--
ALTER TABLE `page_contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productmods`
--
ALTER TABLE `productmods`
  ADD PRIMARY KEY (`id`),
  ADD KEY `modified` (`modified`),
  ADD KEY `category_id` (`product_id`),
  ADD KEY `brand_id` (`value`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`),
  ADD KEY `modified` (`modified`),
  ADD KEY `name_slug` (`slug`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `brand_id` (`brand_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acos`
--
ALTER TABLE `acos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1120;
--
-- AUTO_INCREMENT for table `aros`
--
ALTER TABLE `aros`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `aros_acos`
--
ALTER TABLE `aros_acos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `page_contents`
--
ALTER TABLE `page_contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `productmods`
--
ALTER TABLE `productmods`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
