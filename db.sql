-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.11-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.0.0.5919
-- --------------------------------------------------------


CREATE TABLE `tbl_transaksi` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`produk` TEXT(65535) NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
	`tanggal` DATE NULL DEFAULT NULL,
	PRIMARY KEY (`id`) USING BTREE
)
COLLATE='utf8mb4_general_ci'
ENGINE=InnoDB
;
