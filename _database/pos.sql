CREATE TABLE app_config (
  `key` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `app_config` (`key`, `value`) VALUES
('address', '123 Nowhere street'),
('company', 'Open Source Point of Sale'),
('default_tax_rate', '8'),
('email', 'admin@pappastech.com'),
('fax', ''),
('phone', '555-555-5555'),
('return_policy', 'Test'),
('timezone', 'America/New_York'),
('website', '');

CREATE TABLE customers (
  person_id int(10) NOT NULL,
  account_number varchar(255) DEFAULT NULL,
  taxable int(1) NOT NULL DEFAULT '1',
  deleted int(1) NOT NULL DEFAULT '0',
  UNIQUE KEY account_number (account_number),
  KEY person_id (person_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE giftcards (
  giftcard_id int(11) NOT NULL AUTO_INCREMENT,
  giftcard_number varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  value double(15,2) NOT NULL,
  deleted int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (giftcard_id),
  UNIQUE KEY giftcard_number (giftcard_number)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=48 ;

CREATE TABLE inventory (
  trans_id int(11) NOT NULL AUTO_INCREMENT,
  trans_items int(11) NOT NULL DEFAULT '0',
  trans_user int(11) NOT NULL DEFAULT '0',
  trans_date timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  trans_comment text NOT NULL,
  trans_inventory int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (trans_id),
  KEY inventory_ibfk_1 (trans_items),
  KEY inventory_ibfk_2 (trans_user)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE items (
  name varchar(255) NOT NULL,
  category varchar(255) NOT NULL,
  supplier_id int(11) DEFAULT NULL,
  item_number varchar(255) DEFAULT NULL,
  description varchar(255) NOT NULL,
  cost_price double(15,2) NOT NULL,
  unit_price double(15,2) NOT NULL,
  quantity double(15,2) NOT NULL DEFAULT '0.00',
  reorder_level double(15,2) NOT NULL DEFAULT '0.00',
  location varchar(255) NOT NULL,
  item_id int(10) NOT NULL AUTO_INCREMENT,
  allow_alt_description tinyint(1) NOT NULL,
  is_serialized tinyint(1) NOT NULL,
  deleted int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (item_id),
  UNIQUE KEY item_number (item_number),
  KEY items_ibfk_1 (supplier_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE items_taxes (
  item_id int(10) NOT NULL,
  name varchar(255) NOT NULL,
  percent double(15,3) NOT NULL,
  PRIMARY KEY (item_id,name,percent)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE item_kits (
  item_kit_id int(11) NOT NULL AUTO_INCREMENT,
  name varchar(255) NOT NULL,
  description varchar(255) NOT NULL,
  PRIMARY KEY (item_kit_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE item_kit_items (
  item_kit_id int(11) NOT NULL,
  item_id int(11) NOT NULL,
  quantity double(15,2) NOT NULL,
  PRIMARY KEY (item_kit_id,item_id,quantity),
  KEY item_kit_items_ibfk_2 (item_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE modules (
  name_lang_key varchar(255) NOT NULL,
  desc_lang_key varchar(255) NOT NULL,
  sort int(10) NOT NULL,
  module_id varchar(255) NOT NULL,
  PRIMARY KEY (module_id),
  UNIQUE KEY desc_lang_key (desc_lang_key),
  UNIQUE KEY name_lang_key (name_lang_key)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO modules (name_lang_key, desc_lang_key, sort, module_id) VALUES
('module_config', 'module_config_desc', 100, 'config'),
('module_customers', 'module_customers_desc', 10, 'customers'),
('module_employees', 'module_employees_desc', 80, 'employees'),
('module_giftcards', 'module_giftcards_desc', 90, 'giftcards'),
('module_items', 'module_items_desc', 20, 'items'),
('module_item_kits', 'module_item_kits_desc', 30, 'item_kits'),
('module_receivings', 'module_receivings_desc', 60, 'receivings'),
('module_reports', 'module_reports_desc', 50, 'reports'),
('module_sales', 'module_sales_desc', 70, 'sales'),
('module_suppliers', 'module_suppliers_desc', 40, 'suppliers');

CREATE TABLE people (
  first_name varchar(255) NOT NULL,
  last_name varchar(255) NOT NULL,
  phone_number varchar(255) NOT NULL,
  email varchar(255) NOT NULL,
  address_1 varchar(255) NOT NULL,
  address_2 varchar(255) NOT NULL,
  city varchar(255) NOT NULL,
  state varchar(255) NOT NULL,
  zip varchar(255) NOT NULL,
  country varchar(255) NOT NULL,
  comments text NOT NULL,
  person_id int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (person_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

INSERT INTO people (first_name, last_name, phone_number, email, address_1, address_2, city, state, zip, country, comments, person_id) VALUES
('John', 'Doe', '555-555-5555', 'admin@pappastech.com', 'Address 1', '', '', '', '', '', '', 1);

CREATE TABLE permissions (
  module_id varchar(255) NOT NULL,
  person_id int(10) NOT NULL,
  PRIMARY KEY (module_id,person_id),
  KEY person_id (person_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO permissions (module_id, person_id) VALUES
('config', 1),
('customers', 1),
('employees', 1),
('giftcards', 1),
('items', 1),
('item_kits', 1),
('receivings', 1),
('reports', 1),
('sales', 1),
('suppliers', 1);

CREATE TABLE receivings (
  receiving_time timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  supplier_id int(10) DEFAULT NULL,
  employee_id int(10) NOT NULL DEFAULT '0',
  comment text NOT NULL,
  receiving_id int(10) NOT NULL AUTO_INCREMENT,
  payment_type varchar(20) DEFAULT NULL,
  PRIMARY KEY (receiving_id),
  KEY supplier_id (supplier_id),
  KEY employee_id (employee_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE receivings_items (
  receiving_id int(10) NOT NULL DEFAULT '0',
  item_id int(10) NOT NULL DEFAULT '0',
  description varchar(30) DEFAULT NULL,
  serialnumber varchar(30) DEFAULT NULL,
  line int(3) NOT NULL,
  quantity_purchased int(10) NOT NULL DEFAULT '0',
  item_cost_price decimal(15,2) NOT NULL,
  item_unit_price double(15,2) NOT NULL,
  discount_percent int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (receiving_id,item_id,line),
  KEY item_id (item_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE sales (
  sale_time timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  customer_id int(10) DEFAULT NULL,
  employee_id int(10) NOT NULL DEFAULT '0',
  comment text NOT NULL,
  sale_id int(10) NOT NULL AUTO_INCREMENT,
  payment_type varchar(512) DEFAULT NULL,
  PRIMARY KEY (sale_id),
  KEY customer_id (customer_id),
  KEY employee_id (employee_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE sales_items (
  sale_id int(10) NOT NULL DEFAULT '0',
  item_id int(10) NOT NULL DEFAULT '0',
  description varchar(30) DEFAULT NULL,
  serialnumber varchar(30) DEFAULT NULL,
  line int(3) NOT NULL DEFAULT '0',
  quantity_purchased double(15,2) NOT NULL DEFAULT '0.00',
  item_cost_price decimal(15,2) NOT NULL,
  item_unit_price double(15,2) NOT NULL,
  discount_percent int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (sale_id,item_id,line),
  KEY item_id (item_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE sales_items_taxes (
  sale_id int(10) NOT NULL,
  item_id int(10) NOT NULL,
  line int(3) NOT NULL DEFAULT '0',
  name varchar(255) NOT NULL,
  percent double(15,3) NOT NULL,
  PRIMARY KEY (sale_id,item_id,line,name,percent),
  KEY item_id (item_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE sales_payments (
  sale_id int(10) NOT NULL,
  payment_type varchar(40) NOT NULL,
  payment_amount decimal(15,2) NOT NULL,
  PRIMARY KEY (sale_id,payment_type)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE sales_suspended (
  sale_time timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  customer_id int(10) DEFAULT NULL,
  employee_id int(10) NOT NULL DEFAULT '0',
  comment text NOT NULL,
  sale_id int(10) NOT NULL AUTO_INCREMENT,
  payment_type varchar(512) DEFAULT NULL,
  PRIMARY KEY (sale_id),
  KEY customer_id (customer_id),
  KEY employee_id (employee_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE sales_suspended_items (
  sale_id int(10) NOT NULL DEFAULT '0',
  item_id int(10) NOT NULL DEFAULT '0',
  description varchar(30) DEFAULT NULL,
  serialnumber varchar(30) DEFAULT NULL,
  line int(3) NOT NULL DEFAULT '0',
  quantity_purchased double(15,2) NOT NULL DEFAULT '0.00',
  item_cost_price decimal(15,2) NOT NULL,
  item_unit_price double(15,2) NOT NULL,
  discount_percent int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (sale_id,item_id,line),
  KEY item_id (item_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE sales_suspended_items_taxes (
  sale_id int(10) NOT NULL,
  item_id int(10) NOT NULL,
  line int(3) NOT NULL DEFAULT '0',
  name varchar(255) NOT NULL,
  percent double(15,3) NOT NULL,
  PRIMARY KEY (sale_id,item_id,line,name,percent),
  KEY item_id (item_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE sales_suspended_payments (
  sale_id int(10) NOT NULL,
  payment_type varchar(40) NOT NULL,
  payment_amount decimal(15,2) NOT NULL,
  PRIMARY KEY (sale_id,payment_type)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE sessions (
  session_id varchar(40) NOT NULL DEFAULT '0',
  ip_address varchar(16) NOT NULL DEFAULT '0',
  user_agent varchar(120) NOT NULL,
  last_activity int(10) unsigned NOT NULL DEFAULT '0',
  user_data text,
  PRIMARY KEY (session_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE suppliers (
  person_id int(10) NOT NULL,
  company_name varchar(255) NOT NULL,
  account_number varchar(255) DEFAULT NULL,
  deleted int(1) NOT NULL DEFAULT '0',
  UNIQUE KEY account_number (account_number),
  KEY person_id (person_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE customers
  ADD CONSTRAINT customers_ibfk_1 FOREIGN KEY (person_id) REFERENCES people (person_id);

ALTER TABLE employees
  ADD CONSTRAINT employees_ibfk_1 FOREIGN KEY (person_id) REFERENCES people (person_id);

ALTER TABLE inventory
  ADD CONSTRAINT inventory_ibfk_1 FOREIGN KEY (trans_items) REFERENCES items (item_id),
  ADD CONSTRAINT inventory_ibfk_2 FOREIGN KEY (trans_user) REFERENCES employees (person_id);

ALTER TABLE items
  ADD CONSTRAINT items_ibfk_1 FOREIGN KEY (supplier_id) REFERENCES suppliers (person_id);

ALTER TABLE items_taxes
  ADD CONSTRAINT items_taxes_ibfk_1 FOREIGN KEY (item_id) REFERENCES items (item_id) ON DELETE CASCADE;

ALTER TABLE item_kit_items
  ADD CONSTRAINT item_kit_items_ibfk_1 FOREIGN KEY (item_kit_id) REFERENCES item_kits (item_kit_id) ON DELETE CASCADE,
  ADD CONSTRAINT item_kit_items_ibfk_2 FOREIGN KEY (item_id) REFERENCES items (item_id)  ON DELETE CASCADE;

ALTER TABLE permissions
  ADD CONSTRAINT permissions_ibfk_1 FOREIGN KEY (person_id) REFERENCES employees (person_id),
  ADD CONSTRAINT permissions_ibfk_2 FOREIGN KEY (module_id) REFERENCES modules (module_id);

ALTER TABLE receivings
  ADD CONSTRAINT receivings_ibfk_1 FOREIGN KEY (employee_id) REFERENCES employees (person_id),
  ADD CONSTRAINT receivings_ibfk_2 FOREIGN KEY (supplier_id) REFERENCES suppliers (person_id);

ALTER TABLE receivings_items
  ADD CONSTRAINT receivings_items_ibfk_1 FOREIGN KEY (item_id) REFERENCES items (item_id),
  ADD CONSTRAINT receivings_items_ibfk_2 FOREIGN KEY (receiving_id) REFERENCES receivings (receiving_id);

ALTER TABLE sales
  ADD CONSTRAINT sales_ibfk_1 FOREIGN KEY (employee_id) REFERENCES employees (person_id),
  ADD CONSTRAINT sales_ibfk_2 FOREIGN KEY (customer_id) REFERENCES customers (person_id);

ALTER TABLE sales_items
  ADD CONSTRAINT sales_items_ibfk_1 FOREIGN KEY (item_id) REFERENCES items (item_id),
  ADD CONSTRAINT sales_items_ibfk_2 FOREIGN KEY (sale_id) REFERENCES sales (sale_id);

ALTER TABLE sales_items_taxes
  ADD CONSTRAINT sales_items_taxes_ibfk_1 FOREIGN KEY (sale_id) REFERENCES sales_items (sale_id),
  ADD CONSTRAINT sales_items_taxes_ibfk_2 FOREIGN KEY (item_id) REFERENCES items (item_id);

ALTER TABLE sales_payments
  ADD CONSTRAINT sales_payments_ibfk_1 FOREIGN KEY (sale_id) REFERENCES sales (sale_id);

ALTER TABLE sales_suspended
  ADD CONSTRAINT sales_suspended_ibfk_1 FOREIGN KEY (employee_id) REFERENCES employees (person_id),
  ADD CONSTRAINT sales_suspended_ibfk_2 FOREIGN KEY (customer_id) REFERENCES customers (person_id);

ALTER TABLE sales_suspended_items
  ADD CONSTRAINT sales_suspended_items_ibfk_1 FOREIGN KEY (item_id) REFERENCES items (item_id),
  ADD CONSTRAINT sales_suspended_items_ibfk_2 FOREIGN KEY (sale_id) REFERENCES sales_suspended (sale_id);

ALTER TABLE sales_suspended_items_taxes
  ADD CONSTRAINT sales_suspended_items_taxes_ibfk_1 FOREIGN KEY (sale_id) REFERENCES sales_suspended_items (sale_id),
  ADD CONSTRAINT sales_suspended_items_taxes_ibfk_2 FOREIGN KEY (item_id) REFERENCES items (item_id);

ALTER TABLE sales_suspended_payments
  ADD CONSTRAINT sales_suspended_payments_ibfk_1 FOREIGN KEY (sale_id) REFERENCES sales_suspended (sale_id);

ALTER TABLE suppliers
  ADD CONSTRAINT suppliers_ibfk_1 FOREIGN KEY (person_id) REFERENCES people (person_id);
