-- phpMyAdmin SQL Dump
-- version 3.3.8.1
-- http://www.phpmyadmin.net
--
-- Počítač: localhost
-- Vygenerováno: Neděle 19. prosince 2010, 17:35
-- Verze MySQL: 5.1.46
-- Verze PHP: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databáze: `transportmanager`
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
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `surname` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Vypisuji data pro tabulku `employees`
--


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
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Vypisuji data pro tabulku `periodicities`
--


-- --------------------------------------------------------

--
-- Struktura tabulky `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Vypisuji data pro tabulku `roles`
--


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
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `okres` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kraj` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cislo` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gps` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Vypisuji data pro tabulku `stations`
--


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

