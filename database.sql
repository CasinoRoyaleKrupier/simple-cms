CREATE DATABASE IF NOT EXISTS simple_cms CHARACTER SET utf8 COLLATE utf8_unicode_ci;

CREATE TABLE administrators (
    id INTEGER PRIMARY KEY NOT NULL,
    username VARCHAR(30) NOT NULL,
    pass VARCHAR(20) NOT NULL,
    mail VARCHAR(30) NOT NULL
) DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ENGINE=InnoDB AUTO_INCREMENT=1;

CREATE TABLE section_01_content (
    id INTEGER PRIMARY KEY NOT NULL,
    title VARCHAR(50),
    content VARCHAR(1024)
) DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ENGINE=InnoDB AUTO_INCREMENT=1;

CREATE TABLE section_02_content (
    id INTEGER PRIMARY KEY NOT NULL,
    title VARCHAR(50),
    content VARCHAR(1024)
) DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ENGINE=InnoDB AUTO_INCREMENT=1;

CREATE TABLE section_03_content (
    id INTEGER PRIMARY KEY NOT NULL,
    title VARCHAR(50),
    content VARCHAR(1024)
) DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ENGINE=InnoDB AUTO_INCREMENT=1;

INSERT INTO administrators VALUES (1, 'admin', 'admin', 'admin@admin.admin');

INSERT INTO section_01_content VALUES (1, 'TestTitle', 'TestContent');
INSERT INTO section_02_content VALUES (1, 'TestTitle', 'TestContent');
INSERT INTO section_03_content VALUES (1, 'TestTitle', 'TestContent');