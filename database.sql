CREATE DATABASE IF NOT EXISTS simple_cms CHARACTER SET utf8 COLLATE utf8_unicode_ci;

CREATE TABLE administrators (
    id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
    username VARCHAR(30) NOT NULL,
    pass VARCHAR(255) NOT NULL,
    mail VARCHAR(30) NOT NULL
) DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ENGINE=InnoDB AUTO_INCREMENT=1;

CREATE TABLE page_title (
    id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
    page_title VARCHAR(50)
) DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ENGINE=InnoDB AUTO_INCREMENT=1;


CREATE TABLE welcome_content (
    id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
    content VARCHAR(1024)
) DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ENGINE=InnoDB AUTO_INCREMENT=1;

CREATE TABLE section_01_content (
    id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
    title VARCHAR(50),
    content VARCHAR(1024)
) DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ENGINE=InnoDB AUTO_INCREMENT=1;

CREATE TABLE section_02_content (
    id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
    title VARCHAR(50),
    content VARCHAR(1024)
) DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ENGINE=InnoDB AUTO_INCREMENT=1;

CREATE TABLE section_03_content (
    id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
    title VARCHAR(50),
    content VARCHAR(1024)
) DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ENGINE=InnoDB AUTO_INCREMENT=1;

INSERT INTO administrators (username, pass, mail) VALUES ('admin', 'admin', 'admin@admin.admin');
INSERT INTO page_title (page_title) VALUES ('simple_cms');

INSERT INTO welcome_content (content) VALUES ('This is welcome content');
INSERT INTO section_01_content (title, content) VALUES ('Title sec 1', 'Content section 1');
INSERT INTO section_02_content (title, content) VALUES ('Title sec 2', 'Content section 2');
INSERT INTO section_03_content (title, content) VALUES ('Title sec 3', 'Content section 3');