CREATE DATABASE pastebin;
USE pastebin;
CREATE TABLE pastes (
    id INT NOT NULL AUTO_INCREMENT,
    content LONGTEXT NOT NULL,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
);