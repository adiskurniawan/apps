ALTER TABLE `clients` CHANGE `client_date_created` `client_date_created` DATETIME NOT NULL;
ALTER TABLE `clients` CHANGE `client_date_modified` `client_date_modified` DATETIME NOT NULL;
ALTER TABLE `invoices` CHANGE `invoice_date_modified` `invoice_date_modified` DATETIME NOT NULL;
ALTER TABLE `quotes` CHANGE `quote_date_modified` `quote_date_modified` DATETIME NOT NULL;
ALTER TABLE `users` CHANGE `user_date_created` `user_date_created` DATETIME NOT NULL;
ALTER TABLE `users` CHANGE `user_date_modified` `user_date_modified` DATETIME NOT NULL;