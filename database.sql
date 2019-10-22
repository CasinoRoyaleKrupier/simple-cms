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

CREATE TABLE css_styles (
    id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
    style VARCHAR(4096)
) DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ENGINE=InnoDB AUTO_INCREMENT=1;


CREATE TABLE header_content (
    id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
    content VARCHAR(10240)
) DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ENGINE=InnoDB AUTO_INCREMENT=1;

CREATE TABLE section_01_content (
    id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
    title VARCHAR(50),
    content VARCHAR(10240)
) DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ENGINE=InnoDB AUTO_INCREMENT=1;

CREATE TABLE section_02_content (
    id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
    title VARCHAR(50),
    content VARCHAR(10240)
) DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ENGINE=InnoDB AUTO_INCREMENT=1;

CREATE TABLE section_03_content (
    id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
    title VARCHAR(50),
    content VARCHAR(10240)
) DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ENGINE=InnoDB AUTO_INCREMENT=1;

INSERT INTO administrators (username, pass, mail) VALUES ('admin', '$2y$10$uxUYIArCKlSDCp7SsnALsuo2rSXhhFMmaokrZqOrjY8e.FA59B8Xe', 'admin@admin.admin');
INSERT INTO page_title (page_title) VALUES ('simple_cms');

INSERT INTO css_styles (style) VALUES ('/* Empty style */');

INSERT INTO header_content (content) VALUES ('This is header content panel 1');
INSERT INTO header_content (content) VALUES ('This is header content panel 2');
INSERT INTO header_content (content) VALUES ('This is header content panel 3');

INSERT INTO section_01_content (title, content) VALUES ('Title sec 1', 'Content section 1');
INSERT INTO section_02_content (title, content) VALUES ('Title sec 2', 'Content section 2');
INSERT INTO section_03_content (title, content) VALUES ('Title sec 3', 'Content section 3');