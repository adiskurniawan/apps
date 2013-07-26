CREATE TABLE `custom_fields` (
`custom_field_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`custom_field_table` VARCHAR( 35 ) NOT NULL ,
`custom_field_label` VARCHAR( 35 ) NOT NULL ,
`custom_field_column` VARCHAR( 35 ) NOT NULL ,
INDEX ( `custom_field_table` )
) ENGINE = MYISAM ;

CREATE TABLE `client_custom` (
`client_custom_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`client_id` INT NOT NULL ,
INDEX ( `client_id` )
) ENGINE = MYISAM ;

CREATE TABLE `payment_custom` (
`payment_custom_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`payment_id` INT NOT NULL ,
INDEX ( `payment_id` )
) ENGINE = MYISAM ;

CREATE TABLE `user_custom` (
`user_custom_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`user_id` INT NOT NULL ,
INDEX ( `user_id` )
) ENGINE = MYISAM ;

CREATE TABLE `invoice_custom` (
`invoice_custom_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`invoice_id` INT NOT NULL ,
INDEX ( `invoice_id` )
) ENGINE = MYISAM ;

CREATE TABLE `quote_custom` (
`quote_custom_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`quote_id` INT NOT NULL ,
INDEX ( `quote_id` )
) ENGINE = MYISAM ;

DELETE FROM invoice_amounts WHERE invoice_id NOT IN (SELECT invoice_id FROM invoices);