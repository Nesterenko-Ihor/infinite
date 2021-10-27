CREATE TABLE `my_table` (
                            `id` INT(11) NOT NULL AUTO_INCREMENT,
                            `ip` VARCHAR(255),
                            `user_agent` VARCHAR(255),
                            `page_url` VARCHAR(255),
                            `view_count` INT(11) DEFAULT 1,
                            `view_date` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                            UNIQUE KEY `main` (`ip`,`user_agent`,`page_url`),
                            PRIMARY KEY (`id`)
);