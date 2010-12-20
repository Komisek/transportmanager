-- phpMyAdmin SQL Dump
-- version 3.3.7deb2build0.10.10.1
-- http://www.phpmyadmin.net
--
-- Počítač: localhost
-- Vygenerováno: Pondělí 20. prosince 2010, 10:50
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

CREATE TABLE IF NOT EXISTS `archived_transportations` (
  `id` int(11) NOT NULL,
  `path_id` int(11) DEFAULT NULL,
  `locomotive_id` int(11) DEFAULT NULL,
  `engine_driver_id` int(11) DEFAULT NULL,
  `start_station_id` int(11) DEFAULT NULL,
  `end_station_id` int(11) DEFAULT NULL,
  `datum_cas` datetime DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Vypisuji data pro tabulku `archived_transportations`
--


-- --------------------------------------------------------

--
-- Struktura tabulky `archived_transportations_cargo_wagons`
--

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

CREATE TABLE IF NOT EXISTS `archived_transportations_employees` (
  `employe_id` int(11) DEFAULT NULL,
  `achived_transportation_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Vypisuji data pro tabulku `archived_transportations_employees`
--


-- --------------------------------------------------------

--
-- Struktura tabulky `archived_transportations_locomotives`
--

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

CREATE TABLE IF NOT EXISTS `cargo_wagons` (
  `id` int(11) NOT NULL,
  `wagon_series_id` int(11) DEFAULT NULL,
  `cislo_him` int(11) DEFAULT NULL,
  `cislo_vozu` int(11) DEFAULT NULL,
  `druh_brzdeni` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `druh_brzdoveho_valce` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dvojkoli_revize` int(11) DEFAULT NULL,
  `dvojkoli_typ` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dvojkoli_velikost` int(11) DEFAULT NULL,
  `dvojkoli_vyrobce` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `oprava_typ` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pruznice` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rada` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rezim_vozu` int(11) DEFAULT NULL,
  `roky_revize_dvojkoli_bez_zvednuti_skrine` int(11) DEFAULT NULL,
  `roky_revize_kotle` int(11) DEFAULT NULL,
  `roky_revize_vozu` int(11) DEFAULT NULL,
  `rozvadec` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rucni_brzda` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rychlost_km` int(11) DEFAULT NULL,
  `vlastni_hmotnost` int(11) DEFAULT NULL,
  `zdrze` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Vypisuji data pro tabulku `cargo_wagons`
--


-- --------------------------------------------------------

--
-- Struktura tabulky `cargo_wagons_trains`
--

CREATE TABLE IF NOT EXISTS `cargo_wagons_trains` (
  `cargo_wagon_id` int(11) DEFAULT NULL,
  `train_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Vypisuji data pro tabulku `cargo_wagons_trains`
--


-- --------------------------------------------------------

--
-- Struktura tabulky `employees`
--

CREATE TABLE IF NOT EXISTS `employees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `surname` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Vypisuji data pro tabulku `employees`
--

INSERT INTO `employees` (`id`, `name`, `surname`, `role_id`) VALUES
(1, 'TestovacÃ­', 'DispeÄer', 1),
(2, 'TestovacÃ­', 'ManaÅ¾er', 2),
(3, 'TestovacÃ­', 'ObchodnÃ­k', 3),
(4, 'SprÃ¡vce', 'IT ', 4),
(5, 'TestovacÃ­', 'Technik', 5),
(6, 'Josef', 'NovÃ¡k', 7);

-- --------------------------------------------------------

--
-- Struktura tabulky `employees_trains`
--

CREATE TABLE IF NOT EXISTS `employees_trains` (
  `employe_id` int(11) DEFAULT NULL,
  `train_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Vypisuji data pro tabulku `employees_trains`
--


-- --------------------------------------------------------

--
-- Struktura tabulky `locomotives`
--

CREATE TABLE IF NOT EXISTS `locomotives` (
  `id` int(11) NOT NULL,
  `brzda_parkovaci_druh` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `brzda_primocara_druh` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `brzda_rucni_druh` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `brzda_tahova_druh` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `brzdici_vaha` int(11) DEFAULT NULL,
  `cislo_prukazu_zpusobnosti` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `delka_pres_narazniky` int(11) DEFAULT NULL,
  `dvojkoli_revize` int(11) DEFAULT NULL,
  `dvojkoli_velikost` int(11) DEFAULT NULL,
  `dvojkoli_vyrobce` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hmotnost` int(11) DEFAULT NULL,
  `inventarni_cislo` int(11) DEFAULT NULL,
  `klimatizace` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `km_revize_celkova` int(11) DEFAULT NULL,
  `km_revize_dvojkoli` int(11) DEFAULT NULL,
  `km_revize_provozni` int(11) DEFAULT NULL,
  `komunikacni_zarizeni` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `maximalni_rychlost` int(11) DEFAULT NULL,
  `motor_typ` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `oprava_napln` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `oprava_probihajici` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `oznaceni` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `provozni_cislo` int(11) DEFAULT NULL,
  `rada` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rok_vyroby` int(11) DEFAULT NULL,
  `rychlomer_cislo` int(11) DEFAULT NULL,
  `rychlomer_typ` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vykon` int(11) DEFAULT NULL,
  `vyrobce` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vyrobni_cislo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Vypisuji data pro tabulku `locomotives`
--


-- --------------------------------------------------------

--
-- Struktura tabulky `locomotives_trains`
--

CREATE TABLE IF NOT EXISTS `locomotives_trains` (
  `train_id` int(11) DEFAULT NULL,
  `locomotive_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Vypisuji data pro tabulku `locomotives_trains`
--


-- --------------------------------------------------------

--
-- Struktura tabulky `near_stations`
--

CREATE TABLE IF NOT EXISTS `near_stations` (
  `id` int(11) NOT NULL,
  `station_id` int(11) DEFAULT NULL,
  `next_station_id` int(11) DEFAULT NULL,
  `vzdalenost` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Vypisuji data pro tabulku `near_stations`
--


-- --------------------------------------------------------

--
-- Struktura tabulky `paths`
--

CREATE TABLE IF NOT EXISTS `paths` (
  `id` int(11) NOT NULL,
  `station_id` int(11) DEFAULT NULL,
  `next_id` int(11) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rght` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Vypisuji data pro tabulku `paths`
--


-- --------------------------------------------------------

--
-- Struktura tabulky `periodicities`
--

CREATE TABLE IF NOT EXISTS `periodicities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Vypisuji data pro tabulku `periodicities`
--

INSERT INTO `periodicities` (`id`, `name`) VALUES
(1, 'DennÄ›'),
(2, 'TÃ½dnÄ›'),
(3, 'MÄ›sÃ­ÄnÄ›'),
(4, 'RoÄnÄ›');

-- --------------------------------------------------------

--
-- Struktura tabulky `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Vypisuji data pro tabulku `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'DispeÄer'),
(2, 'ManaÅ¾er'),
(3, 'ObchodnÃ­k'),
(4, 'SprÃ¡vce IT infrastruktury'),
(5, 'Technik'),
(7, 'StrojvÅ¯dce');

-- --------------------------------------------------------

--
-- Struktura tabulky `routes`
--

CREATE TABLE IF NOT EXISTS `routes` (
  `id` int(11) NOT NULL,
  `start_station_id` int(11) DEFAULT NULL,
  `end_station_id` int(11) DEFAULT NULL,
  `datum_cas` datetime DEFAULT NULL,
  `periodicity_id` int(11) DEFAULT NULL,
  `train_id` int(11) DEFAULT NULL,
  `path_id` int(11) DEFAULT NULL,
  `stav_schvaleni` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Vypisuji data pro tabulku `routes`
--


-- --------------------------------------------------------

--
-- Struktura tabulky `stations`
--

CREATE TABLE IF NOT EXISTS `stations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `okres` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kraj` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cislo` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gps` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=69 ;

--
-- Vypisuji data pro tabulku `stations`
--

INSERT INTO `stations` (`id`, `name`, `okres`, `kraj`, `cislo`, `gps`) VALUES
(1, 'ÄŒeskÃ½ TÄ›Å¡Ã­n', 'KarvinÃ¡', 'MoravskoslezskÃ½', '972754478', '49.743337,18.623044'),
(2, 'BohumÃ­n', 'KarvinÃ¡', 'MoravskoslezskÃ½', '972756483', '49.901037,18.358943'),
(3, 'Ostrava-Svinov', 'Ostrava', 'MoravskoslezskÃ½', '972761288', '49.821068,18.209796'),
(4, 'PÅ™erov', 'PÅ™erov', 'OlomouckÃ½', '972734411', '49.447138,17.445514'),
(5, 'Brno Hl. n.', 'Brno', 'JihomoravskÃ½', '972625244', '49.191268,16.612267'),
(6, 'Olomouc Hl.n.', 'Olomouc', 'OlomouckÃ½', '972742322', '49.592478,17.277846'),
(7, 'Pardubice hl.n.', 'Pardubice', 'PardubickÃ½', '972322942', '50.031984,15.757002'),
(8, 'Praha hl.n', 'Praha', 'HlavnÃ­ mÄ›sto Praha', '972241243', '50.083018,14.435842'),
(9, 'Jihlava', 'Jihlava', 'VysoÄina', '972646401', '49.414512,15.599062'),
(10, 'ÄŒeskÃ© BudÄ›jovice', 'ÄŒeskÃ© BudÄ›jovice', 'JihoÄeskÃ½', '972544686', '48.974365,14.488188'),
(11, 'PlzeÅˆ hl.n.', 'PlzeÅˆ', 'PlzeÅˆskÃ½', '972524232', '49.743327,13.388048'),
(12, 'Karlovy Vary', 'Karlovy Vary', 'KarlovarskÃ½', '972442440', '50.235338,12.866519'),
(13, 'Hradec KrÃ¡lovÃ© hl.n.', 'Hradec KrÃ¡lovÃ©', 'KrÃ¡lovehradeckÃ½', '972342232', '50.214701,15.809745'),
(14, 'Liberec', 'Liberec', 'LibereckÃ½', '972365530', '50.761138,15.04554'),
(15, 'StudÃ©nka', 'NovÃ½ JiÄÃ­n', 'MoravskoslezskÃ½', '972757558', '49.707546,18.069077'),
(16, 'Hranice n. MoravÄ›', 'PÅ™erov', 'OlomouckÃ½', '97273655', '49.56548,17.7427'),
(17, 'ZlÃ­n stÅ™ed', 'ZlÃ­n', 'ZlÃ­nskÃ½', '972725106', '49.226199,17.65864'),
(18, 'ValaÅ¡skÃ© MeziÅ™Ã­ÄÃ­', 'VsetÃ­n', 'ZlÃ­nskÃ½', '972774458', '49.474833,17.961493'),
(19, 'VsetÃ­n', 'VsetÃ­n', 'ZlÃ­nsky', '972775193', '49.335481,17.993942'),
(20, 'ZÃ¡bÅ™eh na MoravÄ›', 'Å umperk', 'OlomouckÃ½', '972743352', '49.824951,16.916842'),
(21, 'ÄŒeskÃ¡ TÅ™ebovÃ¡', 'ÃšstÃ­ nad OrlicÃ­', 'PardubickÃ½', '972325463', '49.897454,16.446437'),
(22, 'ÃšstÃ­ nad OrlicÃ­', 'ÃšstÃ­ nad OrlicÃ­', 'PardubickÃ½', '972324330', '49.971439,16.378019'),
(23, 'Svitavy', 'Svitavy', 'PardubickÃ½', '972326277', '49.75926,16.479508'),
(24, 'Skalice nad Svitavou', 'Blansko', 'JihomoravskÃ½', '972622451', '49.480087,16.609569'),
(25, 'BlaÅ¾ovice', 'Brno-venkov', 'JihomoravskÃ½', '', '49.163884,16.798809'),
(26, 'BÅ™eclav', 'BÅ™eclav', 'JihomoravskÃ½', '972632445', '48.753812,16.892515'),
(27, 'Znojmo', 'Znojmo', 'JihomoravskÃ½', '972634428', '48.853075,16.059018'),
(28, 'OkÅ™iÅ¡ky', 'TÅ™ebÃ­Ä', 'VysoÄina', '', '49.247743,15.770509'),
(29, 'Studenec', 'TÅ™ebÃ­Ä', 'VysoÄina', '', '49.222446,16.06905'),
(30, 'TiÅ¡nov', '', '', '', ''),
(31, 'KÅ™iÅ¾anov', '', '', '', ''),
(32, 'Å½ÄÃ¡r nad SÃ¡zavou', '', '', '', ''),
(33, 'HavlÃ­ÄkÅ¯v Brod', '', '', '', ''),
(34, 'HornÃ­ Cerekev', '', '', '', ''),
(35, 'VeselÃ­ nad LuÅ¾nicÃ­', '', '', '', ''),
(36, 'TÃ¡bor', '', '', '', ''),
(37, 'ProtivÃ­n', '', '', '', ''),
(38, 'RybnÃ­k', '', '', '', ''),
(39, 'Strakonice', '', '', '', ''),
(40, 'BÅ™eznice', '', '', '', ''),
(41, 'BeneÅ¡ov u Prahy', '', '', '', ''),
(42, 'Nepomuk', '', '', '', ''),
(43, 'Klatovy', '', '', '', ''),
(44, 'DomaÅ¾lice', '', '', '', ''),
(45, 'SvojÅ¡Ã­n', '', '', '', ''),
(46, 'Rokycany', '', '', '', ''),
(47, 'Beroun', '', '', '', ''),
(48, 'MariÃ¡nskÃ© LÃ¡znÄ›', '', '', '', ''),
(49, 'Cheb', '', '', '', ''),
(50, 'Chomutov', '', '', '', ''),
(51, 'Most', '', '', '', ''),
(52, 'ÃšstÃ­ nad Labem', '', '', '', ''),
(53, 'DÄ›ÄÃ­n', '', '', '', ''),
(54, 'RakovnÃ­k', '', '', '', ''),
(55, 'Kralupy nad Vltavou', '', '', '', ''),
(56, 'ÄŒeskÃ¡ LÃ­pa', '', '', '', ''),
(57, 'Turnov', '', '', '', ''),
(58, 'MladÃ¡ Boleslav', '', '', '', ''),
(59, 'VÅ¡etaty', '', '', '', ''),
(60, 'Nymburk', '', '', '', ''),
(61, 'JiÄÃ­n', '', '', '', ''),
(62, 'OstromÄ›Å™', '', '', '', ''),
(63, 'JaromÄ›Å™', '', '', '', ''),
(64, 'HanuÅ¡ovice', '', '', '', ''),
(65, 'Mikulovice', '', '', '', ''),
(66, 'Opava-vÃ½chod', '', '', '', ''),
(67, 'Krnov', '', '', '', ''),
(68, 'BruntÃ¡l', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktura tabulky `trains`
--

CREATE TABLE IF NOT EXISTS `trains` (
  `id` int(11) NOT NULL,
  `route_id` int(11) DEFAULT NULL,
  `locomotive_id` int(11) DEFAULT NULL,
  `engine_driver_id` int(11) DEFAULT NULL,
  `stav_rezervace` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Vypisuji data pro tabulku `trains`
--


-- --------------------------------------------------------

--
-- Struktura tabulky `wagon_series`
--

CREATE TABLE IF NOT EXISTS `wagon_series` (
  `id` int(11) NOT NULL,
  `brzdici_vaha` int(11) DEFAULT NULL,
  `cislo` int(11) DEFAULT NULL,
  `delka` int(11) DEFAULT NULL,
  `oznaceni` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pocet_naprav` int(11) DEFAULT NULL,
  `rozvor` int(11) DEFAULT NULL,
  `rucni_brzda` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `unosnost` int(11) DEFAULT NULL,
  `vyska_nad_temenem_kolejnice` int(11) DEFAULT NULL,
  `vzdalenost_os` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Vypisuji data pro tabulku `wagon_series`
--

