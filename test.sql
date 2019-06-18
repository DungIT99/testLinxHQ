
CREATE DATABASE test CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE test;
CREATE TABLE account (
  id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  lastName varchar(100) NOT NULL,
  firstName varchar(100) NOT NULL,
  email varchar(100) NOT NULL UNIQUE,
  created timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
);