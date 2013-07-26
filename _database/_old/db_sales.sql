SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

DROP SCHEMA IF EXISTS db_sales;
CREATE SCHEMA db_sales;
USE db_sales;

CREATE TABLE sessions (
  session_id varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  ip_address varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  user_agent varchar(120) COLLATE utf8_unicode_ci DEFAULT NULL,
  last_activity int(11) NOT NULL,
  user_data longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (session_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO sessions (session_id, ip_address, user_agent, last_activity, user_data) VALUES
('7fca71c9861d3eb85dead6f73ab37c7f', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:21.0) Gecko/20100101 Firefox/21.0', 1370594858, 'a:5:{s:9:"user_data";s:0:"";s:4:"name";s:0:"";s:5:"email";s:25:"adi.s.kurniawan@gmail.com";s:2:"id";s:1:"1";s:8:"loggedin";b:1;}');

CREATE TABLE settings (
  setting_id int(11) NOT NULL AUTO_INCREMENT,
  setting_key varchar(50) NOT NULL,
  setting_value longtext NOT NULL,
  PRIMARY KEY (setting_id),
  KEY setting_key (setting_key)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

INSERT INTO settings (setting_id, setting_key, setting_value) VALUES
(1, 'default_language', 'indonesia'),
(2, 'date_format', 'm/d/Y'),
(3, 'currency_symbol', '$'),
(4, 'currency_symbol_placement', 'before'),
(5, 'invoices_due_after', '30'),
(6, 'quotes_expire_after', '15'),
(7, 'default_invoice_group', '1'),
(8, 'default_quote_group', '2'),
(9, 'default_invoice_template', 'default_invoice'),
(10, 'default_quote_template', 'default_quote'),
(11, 'thousands_separator', ','),
(12, 'decimal_point', '.'),
(13, 'cron_key', 'kgldjGXBTDFuym0C'),
(14, 'tax_rate_decimal_places', '2'),
(15, 'site_title', 'Aplikasi Percetakan'),
(16, 'site_quotes', 'Simpel dan Bermanfaat'),
(17, 'site_footer', 'Adi Kurniawan  2013 <br>Aplikasi Percetakan'),
(18, 'key_login', 'AppPercetakan32'),
(19, 'site_theme', 'flat-dot'),
(20, 'site_limit_small', '5'),
(21, 'site_limit_medium', '10');

CREATE TABLE people (
  person_id int(11) NOT NULL AUTO_INCREMENT,
  person_name varchar(100) NOT NULL,
  person_address_1 varchar(100) DEFAULT '',
  person_address_2 varchar(100) DEFAULT '',
  person_city varchar(45) DEFAULT '',
  person_state varchar(35) DEFAULT '',
  person_zip varchar(15) DEFAULT '',
  person_country varchar(35) DEFAULT '',
  person_phone varchar(20) DEFAULT '',
  person_fax varchar(20) DEFAULT '',
  person_mobile varchar(20) DEFAULT '',
  person_email varchar(100) DEFAULT '',
  person_web varchar(100) DEFAULT '',
  person_date_created datetime NOT NULL,
  person_date_modified datetime NOT NULL,
  PRIMARY KEY (person_id)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

INSERT INTO `people` (`person_name`) VALUES
('Adi Kurniawan'),
('Adi S Kurniawan'),
('Adi Setyadi Kurniawan');

CREATE TABLE organizations (
  organization_id int(11) NOT NULL AUTO_INCREMENT,
  organization_name varchar(100) NOT NULL,
  organization_address_1 varchar(100) DEFAULT '',
  organization_address_2 varchar(100) DEFAULT '',
  organization_city varchar(45) DEFAULT '',
  organization_state varchar(35) DEFAULT '',
  organization_zip varchar(15) DEFAULT '',
  organization_country varchar(35) DEFAULT '',
  organization_phone varchar(20) DEFAULT '',
  organization_fax varchar(20) DEFAULT '',
  organization_mobile varchar(20) DEFAULT '',
  organization_email varchar(100) DEFAULT '',
  organization_web varchar(100) DEFAULT '',
  organization_date_created datetime NOT NULL,
  organization_date_modified datetime NOT NULL,
  PRIMARY KEY (organization_id)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

INSERT INTO `organizations` (`organization_name`) VALUES
('XYZ');

CREATE TABLE employees (
  username varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  person_id int(11) NOT NULL,
  deleted int(1) NOT NULL DEFAULT '0',
  UNIQUE KEY username (username),
  KEY person_id (person_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO employees (`username`, `password`, `person_id`, `deleted`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 1, 0);

CREATE TABLE suppliers (
  person_id int(11) NOT NULL,
  company_name varchar(255) NOT NULL,
  account_number varchar(255) DEFAULT NULL,
  deleted int(1) NOT NULL DEFAULT '0',
  UNIQUE KEY account_number (account_number),
  KEY person_id (person_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE supplies (
  supply_id int(5) NOT NULL AUTO_INCREMENT,
  unit_type_id int(10) NOT NULL,
  supply_name varchar(100) NOT NULL,
  stock int(10) NOT NULL,
  PRIMARY KEY (supply_id)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

INSERT INTO supplies (supply_id, unit_type_id, supply_name, stock) VALUES
(1, 1, 'Kertas A4', 821),
(3, 2, 'Kertas Manila', 7),
(4, 2, 'Serbuk Kayu', 4);

CREATE TABLE printing_list (
  printing_list_id int(10) NOT NULL AUTO_INCREMENT,
  order_id varchar(20) NOT NULL,
  printing_type_id int(10) NOT NULL,
  PRIMARY KEY (printing_list_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE printing_types (
  printing_type_id int(5) NOT NULL AUTO_INCREMENT,
  printing_type varchar(100) NOT NULL,
  PRIMARY KEY (printing_type_id)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

INSERT INTO printing_types (printing_type_id, printing_type) VALUES
(2, 'Sablon'),
(3, 'Kartu Nama'),
(4, 'Spanduk'),
(5, 'Baliho');

CREATE TABLE unit_types (
  unit_type_id int(10) NOT NULL AUTO_INCREMENT,
  unit_type varchar(50) NOT NULL,
  PRIMARY KEY (unit_type_id)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

INSERT INTO unit_types (unit_type_id, unit_type) VALUES
(1, 'rim'),
(2, 'lembar');

CREATE TABLE receipts (
  receipt_id varchar(20) NOT NULL,
  note_id varchar(20) NOT NULL,
  payment_date int(30) NOT NULL,
  PRIMARY KEY (receipt_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE customers (
  person_id int(5) NOT NULL AUTO_INCREMENT,
  company_name varchar(20) NOT NULL,
  PRIMARY KEY (person_id)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=34 ;

INSERT INTO customers (person_id, company_name) VALUES
(1, 'Individu'),
(2, 'Perusahaan');

CREATE TABLE payments (
  payment_id varchar(30) NOT NULL,
  order_id varchar(30) NOT NULL,
  payment_date varchar(40) NOT NULL,
  amount int(10) NOT NULL,
  PRIMARY KEY (payment_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO payments (payment_id, order_id, payment_date, amount) VALUES
('PM00000001', 'PS00000001', '24 April 2013', 151500),
('PM00000002', 'PS00000002', '05 April 2013', 50000);

CREATE TABLE orders (
  order_id varchar(20) NOT NULL,
  order_date varchar(30) NOT NULL,
  finish_date varchar(30) NOT NULL,
  person_id int(5) NOT NULL,
  total_price int(20) NOT NULL,
  printing_type varchar(100) NOT NULL,
  payment_status varchar(20) NOT NULL,
  PRIMARY KEY (order_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO orders (order_id, order_date, finish_date, person_id, total_price, printing_type, payment_status) VALUES
('PS00000001', '16 April 2013', '18 April 2013', 31, 150500, '5,', 'Lunas'),
('PS00000002', '01 March 2013', '02 April 2013', 33, 45900, '', 'Belum Bayar'),
('PS00000003', '06 April 2013', '09 April 2013', 33, 20000, '', 'Belum Bayar'),
('PS00000004', '16 April 2013', '20 April 2013', 33, 45900, '4,5,', 'Lunas');

CREATE TABLE orders_detail (
  order_detail_id int(10) NOT NULL AUTO_INCREMENT,
  order_id varchar(30) NOT NULL,
  supply_id int(10) NOT NULL,
  unit int(10) NOT NULL,
  PRIMARY KEY (order_detail_id)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=36 ;

INSERT INTO orders_detail (order_detail_id, order_id, supply_id, unit) VALUES
(7, 'PS00000002', 3, 1),
(8, 'PS00000002', 4, 2),
(16, 'PS00000003', 3, 1),
(29, 'PS00000004', 1, 3),
(31, 'PS00000001', 4, 2),
(32, 'PS00000001', 3, 1),
(33, 'PS00000001', 1, 5),
(34, 'PS00000001', 4, 2),
(35, 'PS00000001', 1, 5);

ALTER TABLE employees
  ADD CONSTRAINT employees_fk_1 FOREIGN KEY (person_id) REFERENCES people (person_id);

ALTER TABLE suppliers
  ADD CONSTRAINT suppliers_fk_1 FOREIGN KEY (person_id) REFERENCES people (person_id);

ALTER TABLE customers
  ADD CONSTRAINT customers_fk_1 FOREIGN KEY (person_id) REFERENCES people (person_id);