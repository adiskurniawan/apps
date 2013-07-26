ALTER TABLE `users` ADD `user_psalt` CHAR(22) NOT NULL;

ALTER TABLE `users` CHANGE `user_password` `user_password` VARCHAR(60) NOT NULL;