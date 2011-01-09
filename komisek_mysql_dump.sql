-- phpMyAdmin SQL Dump
-- version 3.3.7deb3build0.10.10.1
-- http://www.phpmyadmin.net
--
-- Počítač: localhost
-- Vygenerováno: Neděle 09. ledna 2011, 22:09
-- Verze MySQL: 5.1.49
-- Verze PHP: 5.3.3-1ubuntu9.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databáze: `TransportManager`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `archived_transportations`
--

DROP TABLE IF EXISTS `archived_transportations`;
CREATE TABLE IF NOT EXISTS `archived_transportations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path_id` int(11) DEFAULT NULL,
  `start_station_id` int(11) DEFAULT NULL,
  `end_station_id` int(11) DEFAULT NULL,
  `datum_cas` datetime DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Vypisuji data pro tabulku `archived_transportations`
--


-- --------------------------------------------------------

--
-- Struktura tabulky `archived_transportations_cargo_wagons`
--

DROP TABLE IF EXISTS `archived_transportations_cargo_wagons`;
CREATE TABLE IF NOT EXISTS `archived_transportations_cargo_wagons` (
  `cargo_wagon_id` int(11) DEFAULT NULL,
  `archived_transportation_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Vypisuji data pro tabulku `archived_transportations_cargo_wagons`
--


-- --------------------------------------------------------

--
-- Struktura tabulky `archived_transportations_employees`
--

DROP TABLE IF EXISTS `archived_transportations_employees`;
CREATE TABLE IF NOT EXISTS `archived_transportations_employees` (
  `employee_id` int(11) DEFAULT NULL,
  `archived_transportation_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Vypisuji data pro tabulku `archived_transportations_employees`
--


-- --------------------------------------------------------

--
-- Struktura tabulky `archived_transportations_locomotives`
--

DROP TABLE IF EXISTS `archived_transportations_locomotives`;
CREATE TABLE IF NOT EXISTS `archived_transportations_locomotives` (
  `archived_transportation_id` int(11) NOT NULL,
  `locomotive_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Vypisuji data pro tabulku `archived_transportations_locomotives`
--


-- --------------------------------------------------------

--
-- Struktura tabulky `cargo_wagons`
--

DROP TABLE IF EXISTS `cargo_wagons`;
CREATE TABLE IF NOT EXISTS `cargo_wagons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `wagon_series_id` int(11) DEFAULT NULL,
  `cislo_vozu` bigint(20) DEFAULT NULL,
  `him` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vlastni_hmotnost` int(11) DEFAULT NULL,
  `rychlost_km` int(11) DEFAULT NULL,
  `revize` date DEFAULT NULL,
  `delka_vozu_dm` float DEFAULT NULL,
  `pocet_naprav` int(11) DEFAULT NULL,
  `popis_vozu` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=153 ;

--
-- Vypisuji data pro tabulku `cargo_wagons`
--

INSERT INTO `cargo_wagons` (`id`, `wagon_series_id`, `cislo_vozu`, `him`, `vlastni_hmotnost`, `rychlost_km`, `revize`, `delka_vozu_dm`, `pocet_naprav`, `popis_vozu`) VALUES
(47, 64, 338078566548, 'VZ45757891', 14042, 90, '2014-03-01', 95.4, 2, 'cisternový vůz'),
(46, 64, 338078566530, 'VZ45757890', 14042, 90, '2014-03-01', 95.4, 2, 'cisternový vůz'),
(45, 64, 338078566472, 'VZ45757889', 14042, 90, '2014-03-01', 95.4, 2, 'cisternový vůz'),
(44, 64, 338078556333, 'VZ45757888', 14042, 90, '2014-03-01', 95.4, 2, 'cisternový vůz'),
(43, 64, 338078555889, 'VZ45757887', 14042, 90, '2014-03-01', 95.4, 2, 'cisternový vůz'),
(42, 64, 338078555863, 'VZ45757886', 14042, 90, '2014-03-01', 95.4, 2, 'cisternový vůz'),
(41, 64, 338078554940, 'VZ45757885', 14042, 90, '2014-03-01', 95.4, 2, 'cisternový vůz'),
(40, 64, 338078553934, 'VZ45757884', 14042, 90, '2014-03-01', 95.4, 2, 'cisternový vůz'),
(39, 64, 338078552035, 'VZ45757883', 14042, 90, '2014-03-01', 95.4, 2, 'cisternový vůz'),
(38, 64, 338078520917, 'VZ45757882', 14042, 90, '2014-03-01', 95.4, 2, 'cisternový vůz'),
(37, 64, 338078413972, 'VZ45757881', 14042, 90, '2014-03-01', 95.4, 2, 'cisternový vůz'),
(36, 64, 338078406802, 'VZ45757880', 14042, 90, '2014-03-01', 95.4, 2, 'cisternový vůz'),
(35, 64, 338078401159, 'VZ45757879', 14042, 90, '2014-03-01', 95.4, 2, 'cisternový vůz'),
(34, 64, 338078401092, 'VZ45757878', 14042, 90, '2014-03-01', 95.4, 2, 'cisternový vůz'),
(33, 64, 335678815034, 'VZ45757877', 14042, 90, '2014-03-01', 95.4, 2, 'cisternový vůz'),
(32, 64, 335479890444, 'VZ45757876', 14042, 90, '2014-03-01', 95.4, 2, 'cisternový vůz'),
(31, 64, 335479890410, 'VZ45757875', 14042, 90, '2014-03-01', 95.4, 2, 'cisternový vůz'),
(30, 64, 335479850455, 'VZ45757874', 14042, 90, '2014-03-01', 95.4, 2, 'cisternový vůz'),
(29, 64, 335479850372, 'VZ45757873', 14042, 90, '2014-03-01', 95.4, 2, 'cisternový vůz'),
(28, 64, 335478672025, 'VZ45757872', 14042, 90, '2014-03-01', 95.4, 2, 'cisternový vůz'),
(27, 64, 335478648009, 'VZ45757871', 14042, 90, '2014-03-01', 95.4, 2, 'cisternový vůz'),
(26, 64, 335478647290, 'VZ45757870', 14042, 90, '2014-03-01', 95.4, 2, 'cisternový vůz'),
(25, 64, 335478640535, 'VZ45757869', 14042, 90, '2014-03-01', 95.4, 2, 'cisternový vůz'),
(24, 64, 335478640337, 'VZ45757868', 14042, 90, '2014-03-01', 95.4, 2, 'cisternový vůz'),
(23, 64, 335478640204, 'VZ45757867', 14042, 90, '2014-03-01', 95.4, 2, 'cisternový vůz'),
(22, 64, 335478640030, 'VZ45757866', 14042, 90, '2014-03-01', 95.4, 2, 'cisternový vůz'),
(21, 64, 335478601503, 'VZ45757865', 14042, 90, '2014-03-01', 95.4, 2, 'cisternový vůz'),
(20, 64, 335478601479, 'VZ45757864', 14042, 90, '2014-03-01', 95.4, 2, 'cisternový vůz'),
(19, 64, 335478601347, 'VZ45757863', 14042, 90, '2014-03-01', 95.4, 2, 'cisternový vůz'),
(18, 64, 335478601305, 'VZ45757862', 14042, 90, '2014-03-01', 95.4, 2, 'cisternový vůz'),
(17, 64, 335478540529, 'VZ45757861', 14042, 90, '2014-03-01', 95.4, 2, 'cisternový vůz'),
(16, 64, 335478540453, 'VZ45757860', 14042, 90, '2014-03-01', 95.4, 2, 'cisternový vůz'),
(15, 64, 335478540321, 'VZ45757859', 14042, 90, '2014-03-01', 95.4, 2, 'cisternový vůz'),
(14, 64, 335478540305, 'VZ45757858', 14042, 90, '2014-03-01', 95.4, 2, 'cisternový vůz'),
(13, 64, 335478540297, 'VZ45757857', 14042, 90, '2014-03-01', 95.4, 2, 'cisternový vůz'),
(12, 64, 335478503004, 'VZ45757856', 14042, 90, '2014-03-01', 95.4, 2, 'cisternový vůz'),
(11, 64, 335478500620, 'VZ45757855', 14042, 90, '2014-03-01', 95.4, 2, 'cisternový vůz'),
(10, 64, 335478490410, 'VZ45757854', 14042, 90, '2014-03-01', 95.4, 2, 'cisternový vůz'),
(9, 64, 335478490352, 'VZ45757853', 14042, 90, '2014-03-01', 95.4, 2, 'cisternový vůz'),
(8, 64, 335478490261, 'VZ45757852', 14042, 90, '2014-03-01', 95.4, 2, 'cisternový vůz'),
(7, 64, 335478490196, 'VZ45757851', 14042, 90, '2014-03-01', 95.4, 2, 'cisternový vůz'),
(6, 64, 335478490162, 'VZ45757850', 14042, 90, '2014-03-01', 95.4, 2, 'cisternový vůz'),
(5, 64, 335478490121, 'VZ45757849', 14042, 90, '2014-03-01', 95.4, 2, 'cisternový vůz'),
(4, 64, 335478490048, 'VZ45757848', 14042, 90, '2014-03-01', 95.4, 2, 'cisternový vůz'),
(3, 64, 335478480387, 'VZ45757847', 14042, 90, '2014-03-01', 95.4, 2, 'cisternový vůz'),
(2, 64, 335478360282, 'VZ45757846', 14042, 90, '2014-03-01', 95.4, 2, 'cisternový vůz'),
(1, 64, 335178651048, 'VZ45757845', 14042, 90, '2014-03-01', 95.4, 2, 'cisternový vůz'),
(48, 64, 338078566613, 'VZ45757892', 14042, 90, '2014-03-01', 95.4, 2, 'cisternový vůz'),
(49, 64, 338078566662, 'VZ45757893', 14042, 90, '2014-03-01', 95.4, 2, 'cisternový vůz'),
(50, 64, 338078723958, 'VZ45757894', 14042, 90, '2014-03-01', 95.4, 2, 'cisternový vůz'),
(51, 64, 338078724477, 'VZ45757895', 14042, 90, '2014-03-01', 95.4, 2, 'cisternový vůz'),
(52, 64, 338078793688, 'VZ45757896', 14042, 90, '2014-03-01', 95.4, 2, 'cisternový vůz'),
(53, 64, 338078794371, 'VZ45757897', 14042, 90, '2014-03-01', 95.4, 2, 'cisternový vůz'),
(54, 64, 338078794595, 'VZ45757898', 14042, 90, '2014-03-01', 95.4, 2, 'cisternový vůz'),
(55, 64, 338078794645, 'VZ45757899', 14042, 90, '2014-03-01', 95.4, 2, 'cisternový vůz'),
(56, 62, 338078807488, 'VZ45757900', 26112, 90, '2014-03-01', 132, 4, 'cisternový vůz'),
(57, 62, 338078807694, 'VZ45757901', 26112, 90, '2014-03-01', 132, 4, 'cisternový vůz'),
(58, 62, 338078807827, 'VZ45757902', 26112, 90, '2014-03-01', 132, 4, 'cisternový vůz'),
(59, 62, 338078807868, 'VZ45757903', 26114, 90, '2014-03-01', 132, 4, 'cisternový vůz'),
(60, 62, 338078820879, 'VZ45757904', 26116, 90, '2014-03-01', 132, 4, 'cisternový vůz'),
(61, 62, 338079123836, 'VZ45757905', 26118, 90, '2014-03-01', 132, 4, 'cisternový vůz'),
(62, 62, 338079174656, 'VZ45757906', 26120, 90, '2014-03-01', 132, 4, 'cisternový vůz'),
(63, 62, 338079563080, 'VZ45757907', 26122, 90, '2014-03-01', 132, 4, 'cisternový vůz'),
(64, 62, 338079567040, 'VZ45757908', 26124, 90, '2014-03-01', 132, 4, 'cisternový vůz'),
(65, 62, 338079664318, 'VZ45757909', 26126, 90, '2014-03-01', 132, 4, 'cisternový vůz'),
(66, 62, 338079666289, 'VZ45757910', 26128, 90, '2014-03-01', 132, 4, 'cisternový vůz'),
(67, 62, 338079676643, 'VZ45757911', 26130, 90, '2014-03-01', 132, 4, 'cisternový vůz'),
(68, 62, 338079683888, 'VZ45757912', 26132, 90, '2014-03-01', 132, 4, 'cisternový vůz'),
(69, 62, 338079684696, 'VZ45757913', 26134, 90, '2014-03-01', 132, 4, 'cisternový vůz'),
(70, 62, 338079684779, 'VZ45757914', 26136, 90, '2014-03-01', 132, 4, 'cisternový vůz'),
(71, 62, 338079685487, 'VZ45757915', 26138, 90, '2014-03-01', 132, 4, 'cisternový vůz'),
(72, 62, 338079685578, 'VZ45757916', 26140, 90, '2014-03-01', 132, 4, 'cisternový vůz'),
(73, 62, 338079685644, 'VZ45757917', 26142, 90, '2014-03-01', 132, 4, 'cisternový vůz'),
(74, 62, 338079751651, 'VZ45757918', 26144, 90, '2014-03-01', 132, 4, 'cisternový vůz'),
(75, 62, 338178361576, 'VZ45757919', 26146, 90, '2014-03-01', 132, 4, 'cisternový vůz'),
(76, 62, 338178361600, 'VZ45757920', 26148, 90, '2014-03-01', 132, 4, 'cisternový vůz'),
(77, 62, 338178365536, 'VZ45757921', 26150, 90, '2014-03-01', 132, 4, 'cisternový vůz'),
(78, 61, 338178369975, 'VZ45757922', 24152, 90, '2014-03-01', 126, 4, 'cisternový vůz'),
(79, 61, 338778521520, 'VZ45757923', 24154, 90, '2014-03-01', 126, 4, 'cisternový vůz'),
(80, 61, 338778538599, 'VZ45757924', 24156, 90, '2014-03-01', 126, 4, 'cisternový vůz'),
(81, 61, 338778803688, 'VZ45757925', 24158, 90, '2014-03-01', 126, 4, 'cisternový vůz'),
(82, 61, 338778808885, 'VZ45757926', 24160, 90, '2014-03-01', 126, 4, 'cisternový vůz'),
(83, 61, 338778820922, 'VZ45757927', 24162, 90, '2014-03-01', 126, 4, 'cisternový vůz'),
(84, 61, 355478555889, 'VZ45757928', 24164, 90, '2014-03-01', 126, 4, 'cisternový vůz'),
(85, 61, 355478566472, 'VZ45757929', 24166, 90, '2014-03-01', 126, 4, 'cisternový vůz'),
(86, 61, 378078383510, 'VZ45757930', 24168, 90, '2014-03-01', 126, 4, 'cisternový vůz'),
(87, 61, 378078383619, 'VZ45757931', 24170, 90, '2014-03-01', 126, 4, 'cisternový vůz'),
(88, 61, 378078383809, 'VZ45757932', 24172, 90, '2014-03-01', 126, 4, 'cisternový vůz'),
(89, 61, 378078483922, 'VZ45757933', 24174, 90, '2014-03-01', 126, 4, 'cisternový vůz'),
(90, 61, 378078677143, 'VZ45757934', 24176, 90, '2014-03-01', 126, 4, 'cisternový vůz'),
(91, 61, 378078677150, 'VZ45757935', 24178, 90, '2014-03-01', 126, 4, 'cisternový vůz'),
(92, 61, 378078677168, 'VZ45757936', 24180, 90, '2014-03-01', 126, 4, 'cisternový vůz'),
(93, 61, 378078760170, 'VZ45757937', 24182, 90, '2014-03-01', 126, 4, 'cisternový vůz'),
(94, 61, 378078760196, 'VZ45757938', 24184, 90, '2014-03-01', 126, 4, 'cisternový vůz'),
(95, 61, 378078760204, 'VZ45757939', 24186, 90, '2014-03-01', 126, 4, 'cisternový vůz'),
(96, 61, 378078760220, 'VZ45757940', 24188, 90, '2014-03-01', 126, 4, 'cisternový vůz'),
(97, 61, 378078760238, 'VZ45757941', 24190, 90, '2014-03-01', 126, 4, 'cisternový vůz'),
(98, 61, 378078760246, 'VZ45757942', 24192, 90, '2014-03-01', 126, 4, 'cisternový vůz'),
(99, 61, 378078760253, 'VZ45757943', 24194, 90, '2014-03-01', 126, 4, 'cisternový vůz'),
(100, 61, 378078760261, 'VZ45757944', 24196, 90, '2014-03-01', 126, 4, 'cisternový vůz'),
(101, 61, 378079669552, 'VZ45757945', 24198, 90, '2014-03-01', 126, 4, 'cisternový vůz'),
(102, 61, 378079748653, 'VZ45757946', 24200, 90, '2014-03-01', 126, 4, 'cisternový vůz'),
(103, 61, 378079780052, 'VZ45757947', 24202, 90, '2014-03-01', 126, 4, 'cisternový vůz'),
(104, 61, 378079780094, 'VZ45757948', 24204, 90, '2014-03-01', 126, 4, 'cisternový vůz'),
(105, 61, 378079780201, 'VZ45757949', 24206, 90, '2014-03-01', 126, 4, 'cisternový vůz'),
(106, 61, 378079780417, 'VZ45757950', 24208, 90, '2014-03-01', 126, 4, 'cisternový vůz'),
(107, 61, 378079890000, 'VZ45757951', 24210, 90, '2014-03-01', 126, 4, 'cisternový vůz'),
(108, 61, 378079890398, 'VZ45757952', 24212, 90, '2014-03-01', 126, 4, 'cisternový vůz'),
(109, 61, 378079891073, 'VZ45757953', 24214, 90, '2014-03-01', 126, 4, 'cisternový vůz'),
(110, 61, 378079891156, 'VZ45757954', 24216, 90, '2014-03-01', 126, 4, 'cisternový vůz'),
(111, 61, 378079891214, 'VZ45757955', 24218, 90, '2014-03-01', 126, 4, 'cisternový vůz'),
(112, 61, 378079891503, 'VZ45757956', 24220, 90, '2014-03-01', 126, 4, 'cisternový vůz'),
(113, 61, 378079891594, 'VZ45757957', 24222, 90, '2014-03-01', 126, 4, 'cisternový vůz'),
(114, 61, 378079891610, 'VZ45757958', 24224, 90, '2014-03-01', 126, 4, 'cisternový vůz'),
(115, 61, 378079891644, 'VZ45757959', 24226, 90, '2014-03-01', 126, 4, 'cisternový vůz'),
(116, 61, 378079891651, 'VZ45757960', 24228, 90, '2014-03-01', 126, 4, 'cisternový vůz'),
(117, 61, 378079891750, 'VZ45757961', 24230, 90, '2014-03-01', 126, 4, 'cisternový vůz'),
(118, 61, 378079891966, 'VZ45757962', 24232, 90, '2014-03-01', 126, 4, 'cisternový vůz'),
(119, 61, 378079891974, 'VZ45757963', 24234, 90, '2014-03-01', 126, 4, 'cisternový vůz'),
(120, 61, 378079891982, 'VZ45757964', 24236, 90, '2014-03-01', 126, 4, 'cisternový vůz'),
(121, 61, 378079891990, 'VZ45757965', 24238, 90, '2014-03-01', 126, 4, 'cisternový vůz'),
(122, 61, 378079892311, 'VZ45757966', 24240, 90, '2014-03-01', 126, 4, 'cisternový vůz'),
(123, 61, 378079892386, 'VZ45757967', 24242, 90, '2014-03-01', 126, 4, 'cisternový vůz'),
(124, 61, 378079892550, 'VZ45757968', 24244, 90, '2014-03-01', 126, 4, 'cisternový vůz'),
(125, 61, 378079892618, 'VZ45757969', 24246, 90, '2014-03-01', 126, 4, 'cisternový vůz'),
(126, 61, 378079892725, 'VZ45757970', 24248, 90, '2014-03-01', 126, 4, 'cisternový vůz'),
(127, 61, 378079892741, 'VZ45757971', 24250, 90, '2014-03-01', 126, 4, 'cisternový vůz'),
(128, 61, 378079892949, 'VZ45757972', 24252, 90, '2014-03-01', 126, 4, 'cisternový vůz'),
(129, 61, 378079892972, 'VZ45757973', 24254, 90, '2014-03-01', 126, 4, 'cisternový vůz'),
(130, 61, 378079892998, 'VZ45757974', 24256, 90, '2014-03-01', 126, 4, 'cisternový vůz'),
(131, 61, 378079893012, 'VZ45757975', 24258, 90, '2014-03-01', 126, 4, 'cisternový vůz'),
(132, 61, 378079893723, 'VZ45757976', 24260, 90, '2014-03-01', 126, 4, 'cisternový vůz'),
(133, 61, 378079920021, 'VZ45757977', 24262, 90, '2014-03-01', 126, 4, 'cisternový vůz'),
(134, 21, 445415380362, 'VZ45757978', 24264, 100, '2014-03-01', 140, 2, 'krytý vůz'),
(135, 21, 445415380366, 'VZ45757979', 24266, 100, '2014-03-01', 140, 2, 'krytý vůz'),
(136, 21, 445415380432, 'VZ45757980', 24268, 100, '2014-03-01', 140, 2, 'krytý vůz'),
(137, 21, 445415380515, 'VZ45757981', 24270, 100, '2014-03-01', 140, 2, 'krytý vůz'),
(138, 21, 445415380812, 'VZ45757982', 24272, 100, '2014-03-01', 140, 2, 'krytý vůz'),
(139, 21, 445415380903, 'VZ45757983', 24274, 100, '2014-03-01', 140, 2, 'krytý vůz'),
(140, 21, 445415380945, 'VZ45757984', 24276, 100, '2014-03-01', 140, 2, 'krytý vůz'),
(141, 21, 445415380960, 'VZ45757985', 24278, 100, '2014-03-01', 140, 2, 'krytý vůz'),
(142, 21, 445415380986, 'VZ45757986', 24280, 100, '2014-03-01', 140, 2, 'krytý vůz'),
(143, 21, 445415381059, 'VZ45757987', 24282, 100, '2014-03-01', 140, 2, 'krytý vůz'),
(144, 21, 445415381064, 'VZ45757988', 24284, 100, '2014-03-01', 140, 2, 'krytý vůz'),
(145, 21, 445415381083, 'VZ45757989', 24286, 100, '2014-03-01', 140, 2, 'krytý vůz'),
(146, 21, 445415381109, 'VZ45757990', 24288, 100, '2014-03-01', 140, 2, 'krytý vůz'),
(147, 55, 565490783638, 'VZ45757991', 47124, 80, '2014-03-01', 246, 6, 'hlubinový vůz'),
(148, 55, 565490783661, 'VZ45757992', 47124, 80, '2014-03-01', 246, 6, 'hlubinový vůz'),
(149, 55, 835493051211, 'VZ45757993', 47124, 80, '2014-03-01', 246, 6, 'hlubinový vůz'),
(150, 55, 845493069577, 'VZ45757996', 47124, 80, '2014-03-01', 246, 6, 'hlubinový vůz'),
(151, 55, 845493069585, 'VZ45757997', 47124, 80, '2014-03-01', 246, 6, 'hlubinový vůz'),
(152, 55, 845493069601, 'VZ45757998', 47124, 80, '2014-03-01', 246, 6, 'hlubinový vůz');

-- --------------------------------------------------------

--
-- Struktura tabulky `cargo_wagons_trains`
--

DROP TABLE IF EXISTS `cargo_wagons_trains`;
CREATE TABLE IF NOT EXISTS `cargo_wagons_trains` (
  `cargo_wagon_id` int(11) DEFAULT NULL,
  `train_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Vypisuji data pro tabulku `cargo_wagons_trains`
--

INSERT INTO `cargo_wagons_trains` (`cargo_wagon_id`, `train_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1);

-- --------------------------------------------------------

--
-- Struktura tabulky `employees`
--

DROP TABLE IF EXISTS `employees`;
CREATE TABLE IF NOT EXISTS `employees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `surname` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `passwd` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Vypisuji data pro tabulku `employees`
--

INSERT INTO `employees` (`id`, `name`, `surname`, `email`, `passwd`, `role_id`) VALUES
(1, 'Honza', 'Sveřepý', 'sverepy@tm.cz', 'sverepy', 4),
(2, 'Tomáš', 'Marný', 'marny@tm.cz', 'marny', 2),
(3, 'Pepa', 'Jožin', 'jozin@tm.cz', 'jozin', 7),
(4, 'Eržin', 'Lamak', 'franta@lamak.cz', '123456', 7),
(5, 'Kentán', 'zMontarži', 'kentan@idiot.com', '987654', 7),
(7, 'Komisek', 'Komiskovic', 'komisek@gmail.com', 'JA79ck13', 1),
(8, 'Bazil', 'King', 'bazil.xxl@gmail.com', 'vojtisek', 1);

-- --------------------------------------------------------

--
-- Struktura tabulky `employees_trains`
--

DROP TABLE IF EXISTS `employees_trains`;
CREATE TABLE IF NOT EXISTS `employees_trains` (
  `employee_id` int(11) DEFAULT NULL,
  `train_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Vypisuji data pro tabulku `employees_trains`
--

INSERT INTO `employees_trains` (`employee_id`, `train_id`) VALUES
(3, 1);

-- --------------------------------------------------------

--
-- Struktura tabulky `locomotives`
--

DROP TABLE IF EXISTS `locomotives`;
CREATE TABLE IF NOT EXISTS `locomotives` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cislo_hv` int(9) NOT NULL,
  `maximalni_rychlost` int(11) DEFAULT NULL,
  `rada` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rozvor_pevny` float DEFAULT NULL,
  `rozvor_celkovy` float DEFAULT NULL,
  `delka_pres_narazniky` float DEFAULT NULL,
  `max_hmotnost_na_napravu` float DEFAULT NULL,
  `hmotnost_ve_sluzbe` float DEFAULT NULL,
  `brzdici_vaha_g` float DEFAULT NULL,
  `brzdici_vaha_p` float DEFAULT NULL,
  `brzdici_vaha_r` float DEFAULT NULL,
  `brzdici_vaha_rucni_brzdy` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Vypisuji data pro tabulku `locomotives`
--

INSERT INTO `locomotives` (`id`, `cislo_hv`, `maximalni_rychlost`, `rada`, `rozvor_pevny`, `rozvor_celkovy`, `delka_pres_narazniky`, `max_hmotnost_na_napravu`, `hmotnost_ve_sluzbe`, `brzdici_vaha_g`, `brzdici_vaha_p`, `brzdici_vaha_r`, `brzdici_vaha_rucni_brzdy`) VALUES
(1, 1301514, 100, '130', 3.2, 11.37, 17.21, 21.2, 84.8, 36, 50, 0, '7+7'),
(2, 1301530, 100, '130', 3.2, 11.37, 17.21, 21.2, 84.8, 36, 50, 0, '7+7'),
(3, 1301688, 100, '130', 3.2, 11.37, 17.21, 21.2, 84.8, 36, 50, 0, '7+7'),
(4, 1301755, 100, '130', 3.2, 11.37, 17.21, 21.2, 84.8, 36, 50, 0, '7+7'),
(5, 1301779, 100, '130', 3.2, 11.37, 17.21, 21.2, 84.8, 36, 50, 0, '7+7'),
(6, 1301878, 100, '130', 3.2, 11.37, 17.21, 21.2, 84.8, 36, 50, 0, '7+7'),
(7, 1310564, 100, '131', 3.2, 11.37, 17.21, 21.2, 84.5, 34, 48, 0, '7'),
(8, 1311117, 100, '131', 3.2, 11.37, 17.21, 21.2, 84.5, 34, 48, 0, '7'),
(9, 1311174, 100, '131', 3.2, 11.37, 17.21, 21.2, 84.5, 34, 48, 0, '7'),
(10, 1631183, 120, '163', 3.2, 11.5, 16.8, 21.4, 84.5, 24, 44, 0, '2+2');

-- --------------------------------------------------------

--
-- Struktura tabulky `locomotives_trains`
--

DROP TABLE IF EXISTS `locomotives_trains`;
CREATE TABLE IF NOT EXISTS `locomotives_trains` (
  `train_id` int(11) DEFAULT NULL,
  `locomotive_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Vypisuji data pro tabulku `locomotives_trains`
--

INSERT INTO `locomotives_trains` (`train_id`, `locomotive_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Struktura tabulky `near_stations`
--

DROP TABLE IF EXISTS `near_stations`;
CREATE TABLE IF NOT EXISTS `near_stations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `station_id` int(11) DEFAULT NULL,
  `next_station_id` int(11) DEFAULT NULL,
  `vzdalenost` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Vypisuji data pro tabulku `near_stations`
--

INSERT INTO `near_stations` (`id`, `station_id`, `next_station_id`, `vzdalenost`) VALUES
(1, 1, 2, 20),
(2, 2, 3, 30);

-- --------------------------------------------------------

--
-- Struktura tabulky `paths`
--

DROP TABLE IF EXISTS `paths`;
CREATE TABLE IF NOT EXISTS `paths` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `station_id` int(11) DEFAULT NULL,
  `next_id` int(11) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rght` int(11) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Vypisuji data pro tabulku `paths`
--

INSERT INTO `paths` (`id`, `station_id`, `next_id`, `lft`, `rght`, `parent_id`) VALUES
(1, 1, 12, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktura tabulky `periodicities`
--

DROP TABLE IF EXISTS `periodicities`;
CREATE TABLE IF NOT EXISTS `periodicities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Vypisuji data pro tabulku `periodicities`
--

INSERT INTO `periodicities` (`id`, `name`) VALUES
(1, 'Denně'),
(2, 'Týdně'),
(3, 'Měsíčně'),
(4, 'Ročně'),
(5, 'Jednou');

-- --------------------------------------------------------

--
-- Struktura tabulky `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Vypisuji data pro tabulku `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'Administrátor'),
(2, 'Manager'),
(3, 'Dispečer'),
(4, 'IT technik'),
(5, 'HR'),
(6, 'Technik'),
(7, 'Strojvůdce');

-- --------------------------------------------------------

--
-- Struktura tabulky `routes`
--

DROP TABLE IF EXISTS `routes`;
CREATE TABLE IF NOT EXISTS `routes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `start_station_id` int(11) DEFAULT NULL,
  `end_station_id` int(11) DEFAULT NULL,
  `datum_cas_odjezdu` datetime DEFAULT NULL,
  `datum_cas_prijezdu` datetime DEFAULT NULL,
  `periodicity_id` int(11) DEFAULT NULL,
  `train_id` int(11) DEFAULT NULL,
  `path_id` int(11) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Vypisuji data pro tabulku `routes`
--

INSERT INTO `routes` (`id`, `start_station_id`, `end_station_id`, `datum_cas_odjezdu`, `datum_cas_prijezdu`, `periodicity_id`, `train_id`, `path_id`, `created`, `modified`) VALUES
(1, 1, 12, '2011-01-09 06:27:00', '2011-01-09 12:00:00', 5, 1, 1, '2010-12-27 18:27:39', '2011-01-09 16:43:50');

-- --------------------------------------------------------

--
-- Struktura tabulky `settings`
--

DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pair` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Vypisuji data pro tabulku `settings`
--

INSERT INTO `settings` (`id`, `key`, `pair`, `description`, `created`, `modified`) VALUES
(1, '__engine_driver_role', '7', 'ID číslo role, která je považována za strojvůdce. Zaměstnanci s touto rolí nemají možnost se přihlásit do systému a budou zobrazování při výběru a přiřazení zdrojů k vlakové soupravě.', '2010-12-20 22:53:48', '2010-12-20 22:54:25');

-- --------------------------------------------------------

--
-- Struktura tabulky `stations`
--

DROP TABLE IF EXISTS `stations`;
CREATE TABLE IF NOT EXISTS `stations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `okres` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kraj` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cislo` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gps` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=28 ;

--
-- Vypisuji data pro tabulku `stations`
--

INSERT INTO `stations` (`id`, `name`, `okres`, `kraj`, `cislo`, `gps`) VALUES
(1, 'Český Těšín', 'Karviná', 'Moravskoslezský', '972754478', '49.743337,18.623044'),
(2, 'Bohumín', 'Karviná', 'Moravskoslezský', '972756483', '49.901037,18.358943'),
(3, 'Ostrava-Svinov', 'Ostrava', 'Moravskoslezský', '972761288', '49.821068,18.209796'),
(4, 'Přerov', 'Přerov', 'Olomoucký', '972734411', '49.447138,17.445514'),
(5, 'Brno Hl. n.', 'Brno', 'Jihomoravský', '972625244', '49.191268,16.612267'),
(6, 'Olomouc Hl.n.', 'Olomouc', 'Olomoucký', '972742322', '49.592478,17.277846'),
(7, 'Pardubice hl.n.', 'Pardubice', 'Pardubický', '972322942', '50.031984,15.757002'),
(8, 'Praha hl.n', 'Praha', 'Hlavní město Praha', '972241243', '50.083018,14.435842'),
(9, 'Jihlava', 'Jihlava', 'Vysočina', '972646401', '49.414512,15.599062'),
(10, 'České Budějovice', 'České Budějovice', 'Jihočeský', '972544686', '48.974365,14.488188'),
(11, 'Plzeň hl.n.', 'Plzeň', 'Plzeňský', '972524232', '49.743327,13.388048'),
(12, 'Karlovy Vary', 'Karlovy Vary', 'Karlovarský', '972442440', '50.235338,12.866519'),
(13, 'Hradec Králové hl.n.', 'Hradec Králové', 'Královehradecký', '972342232', '50.214701,15.809745'),
(14, 'Liberec', 'Liberec', 'Liberecký', '972365530', '50.761138,15.04554'),
(15, 'Studénka', 'Nový Jičín', 'Moravskoslezský', '972757558', '49.707546,18.069077'),
(16, 'Hranice n. Moravě', 'Přerov', 'Olomoucký', '97273655', '49.56548,17.7427'),
(17, 'Zlín střed', 'Zlín', 'Zlínský', '972725106', '49.226199,17.65864'),
(18, 'Valašské Meziříčí', 'Vsetín', 'Zlínský', '972774458', '49.474833,17.961493'),
(19, 'Vsetín', 'Vsetín', 'Zlínský', '972775193', '49.335481,17.993942'),
(20, 'Zábřeh na Moravě', 'Šumperk', 'Olomoucký', '972743352', '49.824951,16.916842'),
(21, 'Česká Třebová', 'Ústí nad Orlicí', 'Pardubický', '972325463', '49.897454,16.446437'),
(22, 'Ústí nad Orlicí', 'Ústí nad Orlicí', 'Pardubický', '972324330', '49.971439,16.378019'),
(23, 'Svitavy', 'Svitavy', 'Pardubický', '972326277', '49.75926,16.479508'),
(24, 'Skalice nad Svitavou', 'Blansko', 'Jihomoravský', '972622451', '49.480087,16.609569'),
(26, 'Břeclav', 'Břeclav', 'Jihomoravský', '972632445', '48.753812,16.892515'),
(27, 'Znojmo', 'Znojmo', 'Jihomoravský', '972634428', '48.853075,16.059018');

-- --------------------------------------------------------

--
-- Struktura tabulky `trains`
--

DROP TABLE IF EXISTS `trains`;
CREATE TABLE IF NOT EXISTS `trains` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `route_id` int(11) DEFAULT NULL,
  `stav_rezervace` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Vypisuji data pro tabulku `trains`
--

INSERT INTO `trains` (`id`, `route_id`, `stav_rezervace`, `created`, `modified`) VALUES
(1, 1, 'Schváleno', '2010-12-27 17:06:25', '2011-01-09 15:37:54');

-- --------------------------------------------------------

--
-- Struktura tabulky `wagon_series`
--

DROP TABLE IF EXISTS `wagon_series`;
CREATE TABLE IF NOT EXISTS `wagon_series` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cislo` int(11) DEFAULT NULL,
  `zakladni_rada` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `oznaceni` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `konstrukcni_skupina` int(11) DEFAULT NULL,
  `delka` int(11) DEFAULT NULL,
  `pocet_naprav` int(11) DEFAULT NULL,
  `rozvor` int(11) DEFAULT NULL,
  `unosnost` float DEFAULT NULL,
  `vyska_nad_temenem_kolejnice` int(11) DEFAULT NULL,
  `vzdalenost_os` int(11) DEFAULT NULL,
  `popis_vozu` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=66 ;

--
-- Vypisuji data pro tabulku `wagon_series`
--

INSERT INTO `wagon_series` (`id`, `cislo`, `zakladni_rada`, `oznaceni`, `konstrukcni_skupina`, `delka`, `pocet_naprav`, `rozvor`, `unosnost`, `vyska_nad_temenem_kolejnice`, `vzdalenost_os`, `popis_vozu`) VALUES
(1, 6, 'E', 'Eanos', NULL, 15740, 4, 1800, 39.5, 3335, 12500, NULL),
(2, 6, 'E', 'Eanos', NULL, 15740, 4, 1800, 37, 3334, 12500, NULL),
(3, 6, 'E', 'Eas', 11, 14040, 4, 2000, 40.5, 3275, 11000, NULL),
(4, 6, 'E', 'Eas', 51, 14040, 4, 1800, 41, 3275, 10800, NULL),
(5, 6, 'E', 'Eas-u', 52, 14040, 4, 1800, 41, 3275, 10800, NULL),
(6, 5, 'E', 'Es', 11, 10000, 2, 6000, 19, 2740, 6000, NULL),
(7, NULL, 'F', 'Faccs', 10, 12740, 4, 2000, 37.5, 4230, 9500, NULL),
(8, NULL, 'F', 'Faccs', 11, 12740, 4, 2000, 38, 4000, 9500, NULL),
(9, NULL, 'F', 'Falls', 11, 13500, 4, 2000, 37, 4000, 9200, NULL),
(10, NULL, 'F', 'Falls', 54, 13524, 4, 1800, 37, 4000, 9000, NULL),
(11, 4, 'G', 'Gags', 51, 16520, 4, 1800, 40.5, 4250, 13280, NULL),
(12, 4, 'G', 'Gas', 51, 16520, 4, 1800, 40.5, 4250, 13280, NULL),
(13, 3, 'G', 'Gbgkks', 12, 14020, 2, 8000, 16.5, 4250, 8000, NULL),
(14, NULL, 'H', 'Habbillnss', 55, 23264, 4, 1800, 34, 4270, 19524, NULL),
(15, NULL, 'H', 'Hadgs', 11, 16520, 4, 2000, 39, 4250, 12500, NULL),
(16, NULL, 'H', 'Hbbillns', 13, 16700, 2, 10000, 14.4, 4287, 10000, NULL),
(17, NULL, 'H', 'Hbbillnss', 13, 16700, 2, 10000, 14, 4287, 10000, NULL),
(18, NULL, 'H', 'Himrrs', NULL, 31000, 4, 9000, 34, 4283, 25500, NULL),
(19, NULL, 'I', 'Ibbhps', 25, 14020, 2, 8000, 15.5, 4255, 8000, NULL),
(20, 1, 'K', 'Kbkks', 10, 16240, 2, 10400, 19, 2830, 10400, NULL),
(21, 1, 'K', 'Kils', 12, 14020, 2, 8000, 17, 4290, 8000, 'krytý vůz'),
(22, 1, 'K', 'Kns', 13, 13860, 2, 9000, 17.5, 2525, 9000, NULL),
(23, 1, 'K', 'Ks', 13, 13860, 2, 9000, 17.5, 2525, 9000, NULL),
(24, NULL, 'L', 'Laails', 12, 28040, 4, 8000, 34, 4290, 22020, NULL),
(25, NULL, 'L', 'Laaps', 12, 28040, 4, 8000, 35, 3905, 22020, NULL),
(26, NULL, 'L', 'Laaps-y', 12, 28040, 4, 8000, 35.5, 3130, 22020, NULL),
(27, 10, 'R', 'Res', 11, 20040, 4, 2000, 38.5, 2680, 16600, NULL),
(28, 10, 'R', 'Res', 51, 19900, 4, 1800, 40, 2535, 16660, NULL),
(29, 10, 'R', 'Res', 54, 20040, 4, 1800, 38, 2550, 16400, NULL),
(30, 10, 'R', 'Res', 67, 19900, 4, 1800, 39, 2535, 16660, NULL),
(31, 10, 'R', 'Rils', 51, 19900, 4, 1800, 39, 4260, 16660, NULL),
(32, 10, 'R', 'Rils-y', 51, 19900, 4, 1800, 38.5, 4260, 16660, NULL),
(33, 10, 'R', 'Rns', NULL, 19900, 4, 1800, 41, 2535, 16660, NULL),
(34, 10, 'R', 'Roos', 54, 20040, 4, 1800, 38.5, 3950, 16400, NULL),
(35, NULL, 'S', 'Sammp', 10, 15240, 6, 3000, 68, 3085, 12400, NULL),
(36, NULL, 'S', 'Scmms', 10, 15240, 4, 2000, 38.5, 3543, 11400, NULL),
(37, NULL, 'S', 'Sggmrss', 55, 29590, 6, 1800, 66.2, NULL, 25950, NULL),
(38, NULL, 'S', 'Sggrss', 55, 26700, 6, 1800, 67.1, NULL, 22960, NULL),
(39, NULL, 'S', 'Sgjs', 69, 21840, 4, 1800, 38.5, 2525, 17600, NULL),
(40, NULL, 'S', 'Sgnss', 55, 19640, 4, 1800, 44, NULL, 16000, NULL),
(41, NULL, 'S', 'Sgs', 11, 20040, 4, 2000, 39, 2680, 16600, NULL),
(42, NULL, 'S', 'Shimmns', NULL, 12040, 4, 1800, 38.8, 4287, 8800, NULL),
(43, NULL, 'S', 'Shimms', NULL, 12060, 4, 1800, 36.6, 4173, 8300, NULL),
(44, NULL, 'S', 'Smmp', 11, 15240, 4, 2000, 44, 3135, 11400, NULL),
(45, NULL, 'S', 'Smmps', 11, 15240, 4, 2000, 39, 3135, 11400, NULL),
(46, NULL, 'S', 'Smmps', 54, 15240, 4, 1800, 40.5, NULL, 11200, NULL),
(47, NULL, 'T', 'Tadgnss', 55, 21640, 4, 1800, 36.7, 4290, 18400, NULL),
(48, NULL, 'T', 'Taes', 10, 16520, 4, 2000, 40.5, 4255, 12500, NULL),
(49, NULL, 'T', 'Talls', 54, 13524, 4, 1800, 35, 4122, 9000, NULL),
(50, NULL, 'T', 'Tams', 52, 14040, 4, 1800, 40, NULL, 10800, NULL),
(51, NULL, 'T', 'Tdgns', 13, 9640, 2, 6000, 17.5, 4245, 6000, NULL),
(52, NULL, 'T', 'Tdns', 13, 9640, 2, 6000, 17.5, 4245, 6000, NULL),
(53, 9, 'U', 'Uaai', 10, 26680, 10, NULL, 97, NULL, 24020, NULL),
(54, 9, 'U', 'Uaai', 11, 27920, 8, 2000, 68.5, NULL, 24280, NULL),
(55, 9, 'U', 'Uaaik', 10, 24600, 6, NULL, 40, NULL, 20080, 'hlubinový vůz'),
(56, 9, 'U', 'Uaaikks', 63, 30680, 8, 1800, 55, NULL, 26940, NULL),
(57, 9, 'U', 'Uaais', 63, 23820, 8, 1800, 64, NULL, NULL, NULL),
(58, 7, 'Z', 'Zacns', 55, 16500, 4, 1800, 39, 4290, 13260, 'cisternový vůz'),
(59, 7, 'Z', 'Zacns', 67, 17000, 4, 1800, 39.5, 4280, 13260, 'cisternový vůz'),
(60, 7, 'Z', 'Zaes', 30, 13240, 4, 2000, 38, 4264, 9200, 'cisternový vůz'),
(61, 7, 'Z', 'Zaes', 51, 12640, 4, 1800, 36.5, 4250, 9400, 'cisternový vůz'),
(62, 7, 'Z', 'Zas', 30, 13240, 4, 2000, 41, 4264, 9200, 'cisternový vůz'),
(63, 7, 'Z', 'Zekks', 29, 9540, 2, 4500, 19.5, 3922, 4500, 'cisternový vůz'),
(64, 7, 'Z', 'Zkks', 29, 9540, 2, 4500, 20, 3922, 4500, 'cisternový vůz');
