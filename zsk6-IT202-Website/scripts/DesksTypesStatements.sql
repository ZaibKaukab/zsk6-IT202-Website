-- Zaib Kaukab
-- 2026-02-28
-- IT202-004
-- Phase 2: CRUD Categories and Items
-- zsk6@njit.edu

USE desks;

CREATE TABLE desk_types (
    desk_type_id        INT             NOT NULL    AUTO_INCREMENT,
    desk_type_code      VARCHAR(10)     NOT NULL    UNIQUE,
    desk_type_name      VARCHAR(255)    NOT NULL,
    desk_aisle_number   INT             NOT NULL,
    date_time_created   TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    date_time_updated   TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (desk_type_id)
);

SHOW TABLES;
SHOW CREATE TABLE desk_types;
DESCRIBE desk_types;

INSERT INTO desk_types
(desk_type_id, desk_type_code, desk_type_name, desk_aisle_number)
VALUES
(1, 'STND', 'Standing', 1);

INSERT INTO desk_types
(desk_type_id, desk_type_code, desk_type_name, desk_aisle_number)
VALUES
(2, 'EXEC', 'Executive', 2);

INSERT INTO desk_types
(desk_type_id, desk_type_code, desk_type_name, desk_aisle_number)
VALUES
(3, 'LSHP', 'L-Shaped', 3);

SELECT * FROM desk_types;
