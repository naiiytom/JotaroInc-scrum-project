CREATE DATABASE IF NOT EXISTS `db` COLLATE 'utf8mb4_unicode_ci' ;
GRANT ALL ON `db`.* TO 'user'@'%' ; # skip if you do not want
ALTER USER 'root'@'localhost' IDENTIFIED BY 'p@ssw0rd123456'; # for localhost. skip if you do not want
ALTER USER 'root'@'%' IDENTIFIED BY 'p@ssw0rd123456'; # skip if you do not want
ALTER USER 'default'@'%' IDENTIFIED BY 'p@ssw0rd123456'; # skip if you do not want
ALTER USER 'user'@'%' IDENTIFIED BY 'p@ssw0rd123456'; # skip if you do not want

FLUSH PRIVILEGES;