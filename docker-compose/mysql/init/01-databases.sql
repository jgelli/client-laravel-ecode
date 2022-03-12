# create databases
CREATE DATABASE IF NOT EXISTS `e_code`;

# create dev user and grant rights
CREATE USER 'dev'@'db' IDENTIFIED BY '123';
GRANT ALL PRIVILEGES ON *.* TO 'dev'@'%';

