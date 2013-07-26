ALTER TABLE `users` ADD `user_company` VARCHAR( 100 ) NOT NULL AFTER `user_name`;

ALTER TABLE `invoice_amounts` DROP `invoice_tax_rate`;