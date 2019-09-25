CREATE DATABASE IF NOT EXISTS systeminfo_cms CHARACTER SET utf8 COLLATE utf8_unicode_ci;

CREATE TABLE administrators (
    id INTEGER PRIMARY KEY NOT NULL,
    username VARCHAR(30) NOT NULL,
    pass VARCHAR(20) NOT NULL,
    mail VARCHAR(30) NOT NULL
) DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ENGINE=InnoDB AUTO_INCREMENT=1;

CREATE TABLE about_content (
    id INTEGER PRIMARY KEY NOT NULL,
    title VARCHAR(50),
    content VARCHAR(1024)
) DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ENGINE=InnoDB AUTO_INCREMENT=1;

CREATE TABLE screenshot_content (
    id INTEGER PRIMARY KEY NOT NULL,
    title VARCHAR(50),
    content VARCHAR(1024)
) DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ENGINE=InnoDB AUTO_INCREMENT=1;

CREATE TABLE download_content (
    id INTEGER PRIMARY KEY NOT NULL,
    title VARCHAR(50),
    content VARCHAR(1024)
) DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ENGINE=InnoDB AUTO_INCREMENT=1;

INSERT INTO administrators VALUES (1, 'admin', 'admin', 'admin@admin.admin');

INSERT INTO about_content VALUES (1, 'ABOUT test database TEST', 'TestDatabaseMySql_TestDatabaseMySql_TestDatabaseMySql');
INSERT INTO screenshot_content VALUES (1, 'SCREENSHOT test database TEST', 'TestDatabaseMySql_TestDatabaseMySql_TestDatabaseMySql');
INSERT INTO download_content VALUES (1, 'DOWNLOAD test database TEST', 'TestDatabaseMySql_TestDatabaseMySql_TestDatabaseMySql');