# Banner
PHP,MySQL

Скрпит banner.php который показывает, столько раз было показано изображения для пользователя.
Данный скрипт можно расширить на нужную Вам информацию.
Пример подключения можно посмотреть в index1.html и index2.html

MySQL таблица со следующими колонок:
- ip_address (айпи адресс)
- user_agent (браузей через который зашли)
- view_date (дата просмотра)
- page_url (с какой страницы просмотрели)
- views_count (кол. раз просмотров)

Установка: 
Замените в db.php <pre>
	$db = mysql_connect("localhost","root","");
	mysql_select_db("test_boston",$db); 
</pre>
на свои данные и создайте в MySQL таблицу со след. структурой 
<pre>
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
</pre>
