SET FOREIGN_KEY_CHECKS=0;



CREATE TABLE achived_transportation_locomotives
(
	achieved_transportations_id INTEGER,
	locomotive_id INTEGER
) 
;


CREATE TABLE archived_transportations
(
	id INTEGER NOT NULL,
	path_id INTEGER,
	locomotive_id INTEGER,
	engine_driver_id INTEGER,
	start_station_id INTEGER,
	end_station_id INTEGER,
	datum_cas DATETIME,
	PRIMARY KEY (id)
) 
;


CREATE TABLE archived_transportations_employes
(
	employe_id INTEGER,
	achived_transportation_id INTEGER
) 
;


CREATE TABLE cargo_wagons
(
	id INTEGER NOT NULL,
	wagon_series_id INTEGER,
	cislo_him INTEGER,
	cislo_vozu INTEGER,
	druh_brzdeni VARCHAR(50),
	druh_brzdoveho_valce VARCHAR(50),
	dvojkoli_revize INTEGER,
	dvojkoli_typ VARCHAR(50),
	dvojkoli_velikost INTEGER,
	dvojkoli_vyrobce VARCHAR(50),
	oprava_typ VARCHAR(50),
	pruznice VARCHAR(50),
	rada VARCHAR(50),
	rezim_vozu INTEGER,
	roky_revize_dvojkoli_bez_zvednuti_skrine INTEGER,
	roky_revize_kotle INTEGER,
	roky_revize_vozu INTEGER,
	rozvadec VARCHAR(50),
	rucni_brzda VARCHAR(50),
	rychlost_km INTEGER,
	vlastni_hmotnost INTEGER,
	zdrze VARCHAR(50),
	PRIMARY KEY (id)
) 
;


CREATE TABLE cargo_wagons_trains
(
	cargo_wagon_id INTEGER,
	train_id INTEGER
) 
;


CREATE TABLE cargo_wagons_transportations_archives
(
	cargo_wagon_id INTEGER,
	archivet_transportation_id INTEGER
) 
;


CREATE TABLE employes
(
	id INTEGER NOT NULL,
	name VARCHAR(50),
	surname VARCHAR(50),
	role_id INTEGER,
	PRIMARY KEY (id)
) 
;


CREATE TABLE employes_trains
(
	employe_id INTEGER,
	train_id INTEGER
) 
;


CREATE TABLE locomotives
(
	id INTEGER NOT NULL,
	brzda_parkovaci_druh VARCHAR(50),
	brzda_primocara_druh VARCHAR(50),
	brzda_rucni_druh VARCHAR(50),
	brzda_tahova_druh VARCHAR(50),
	brzdici_vaha INTEGER,
	cislo_prukazu_zpusobnosti VARCHAR(50),
	delka_pres_narazniky INTEGER,
	dvojkoli_revize INTEGER,
	dvojkoli_velikost INTEGER,
	dvojkoli_vyrobce VARCHAR(50),
	hmotnost INTEGER,
	inventarni_cislo INTEGER,
	klimatizace VARCHAR(50),
	km_revize_celkova INTEGER,
	km_revize_dvojkoli INTEGER,
	km_revize_provozni INTEGER,
	komunikacni_zarizeni VARCHAR(50),
	maximalni_rychlost INTEGER,
	motor_typ VARCHAR(50),
	oprava_napln VARCHAR(50),
	oprava_probihajici VARCHAR(50),
	oznaceni VARCHAR(50),
	provozni_cislo INTEGER,
	rada VARCHAR(50),
	rok_vyroby INTEGER,
	rychlomer_cislo INTEGER,
	rychlomer_typ VARCHAR(50),
	vykon INTEGER,
	vyrobce VARCHAR(50),
	vyrobni_cislo INTEGER,
	PRIMARY KEY (id)
) 
;


CREATE TABLE locomotives_trains
(
	train_id INTEGER,
	locomotive_id INTEGER
) 
;


CREATE TABLE near_stations
(
	id INTEGER NOT NULL,
	station_id INTEGER,
	next_station_id INTEGER,
	vzdalenost INTEGER,
	PRIMARY KEY (id)
) 
;


CREATE TABLE paths
(
	id INTEGER NOT NULL,
	station_id INTEGER,
	next_id INTEGER,
	lft INTEGER,
	rght INTEGER,
	PRIMARY KEY (id)
) 
;


CREATE TABLE periodicities
(
	id INTEGER NOT NULL,
	name VARCHAR(50),
	PRIMARY KEY (id)
) 
;


CREATE TABLE roles
(
	id INTEGER NOT NULL,
	name VARCHAR(50),
	PRIMARY KEY (id)
) 
;


CREATE TABLE routes
(
	id INTEGER NOT NULL,
	start_station_id INTEGER,
	end_station_id INTEGER,
	datum_cas DATETIME,
	periodicity_id INTEGER,
	train_id INTEGER,
	path_id INTEGER,
	stav_schvaleni VARCHAR(50),
	PRIMARY KEY (id)
) 
;


CREATE TABLE stations
(
	id INTEGER NOT NULL,
	name VARCHAR(100),
	okres VARCHAR(100),
	kraj VARCHAR(100),
	cislo VARCHAR(50),
	gps VARCHAR(50),
	PRIMARY KEY (id)
) 
;


CREATE TABLE trains
(
	id INTEGER NOT NULL,
	route_id INTEGER,
	locomotive_id INTEGER,
	engine_driver_id INTEGER,
	stav_rezervace VARCHAR(50),
	PRIMARY KEY (id)
) 
;


CREATE TABLE wagon_series
(
	id INTEGER NOT NULL,
	brzdici_vaha INTEGER,
	cislo INTEGER,
	delka INTEGER,
	oznaceni VARCHAR(50),
	pocet_naprav INTEGER,
	rozvor INTEGER,
	rucni_brzda VARCHAR(50),
	unosnost INTEGER,
	vyska_nad_temenem_kolejnice INTEGER,
	vzdalenost_os INTEGER,
	PRIMARY KEY (id)
) 
;



SET FOREIGN_KEY_CHECKS=1;
