-- Zaib Kaukab
-- 2026-02-28
-- IT202-004
-- Phase 2: CRUD Categories and Items
-- zsk6@njit.edu

USE desks;

CREATE TABLE desks (
    desk_id             INT             NOT NULL    AUTO_INCREMENT,
    desk_code           VARCHAR(10)     NOT NULL    UNIQUE,
    desk_name           VARCHAR(255)    NOT NULL,
    desk_description    TEXT            NOT NULL,
    desk_brand          VARCHAR(50)     NOT NULL,
    desk_material       VARCHAR(60)     NOT NULL,
    desk_type_id        INT             DEFAULT 0,
    desk_buy_price      DECIMAL(10,2)   NOT NULL,
    desk_sell_price     DECIMAL(10,2)   NOT NULL,
    date_time_created   TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    date_time_updated   TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (desk_id),
    FOREIGN KEY (desk_type_id)
        REFERENCES desks.desk_types(desk_type_id)
        ON DELETE SET NULL
        ON UPDATE CASCADE
);

SHOW TABLES;
SHOW CREATE TABLE desks;
DESCRIBE desks;

INSERT INTO desks
(desk_id, desk_code, desk_name, desk_description, desk_brand, desk_material,
desk_type_id, desk_buy_price, desk_sell_price)
VALUES
(1, 'UPLV2', 'Uplift V2 Commercial', 'Standing desk with programmable height presets and a bamboo desktop surface. Features a dual motor system for smooth and quiet adjustments.', 'Uplift', 'Bamboo', 1, 499.00, 699.00);

INSERT INTO desks
(desk_id, desk_code, desk_name, desk_description, desk_brand, desk_material,
desk_type_id, desk_buy_price, desk_sell_price)
VALUES
(2, 'FLEXE', 'FlexiSpot E7 Pro', 'Premium standing desk with anti-collision technology and a solid steel frame. Supports up to 355 pounds and adjusts from 22 to 48 inches.', 'FlexiSpot', 'Steel', 1, 479.00, 649.00);

INSERT INTO desks
(desk_id, desk_code, desk_name, desk_description, desk_brand, desk_material,
desk_type_id, desk_buy_price, desk_sell_price)
VALUES
(3, 'VARI', 'Vari Electric', 'Electric standing desk with T-style legs and a laminate finish. Includes a built-in cable management tray and programmable settings.', 'Vari', 'Laminate', 1, 545.00, 750.00);

INSERT INTO desks
(desk_id, desk_code, desk_name, desk_description, desk_brand, desk_material,
desk_type_id, desk_buy_price, desk_sell_price)
VALUES
(4, 'JARV', 'Jarvis Bamboo', 'Eco-friendly standing desk made from sustainably sourced bamboo. Features a single motor lift system with a smooth height range of 25 to 51 inches.', 'Fully', 'Bamboo', 1, 519.00, 729.00);

INSERT INTO desks
(desk_id, desk_code, desk_name, desk_description, desk_brand, desk_material,
desk_type_id, desk_buy_price, desk_sell_price)
VALUES
(5, 'BKANT', 'IKEA BEKANT', 'Sit-stand desk with electric height adjustment and a clean Scandinavian design. Net mesh cable management keeps cords organized underneath.', 'IKEA', 'Particleboard', 1, 349.00, 549.00);

INSERT INTO desks
(desk_id, desk_code, desk_name, desk_description, desk_brand, desk_material,
desk_type_id, desk_buy_price, desk_sell_price)
VALUES
(6, 'BUSH', 'Bush Saratoga', 'Traditional executive desk with elegant detailing and a rich cherry wood finish. Features two file drawers and built-in cable management grommets.', 'Bush Business', 'Cherry Wood', 2, 689.00, 999.00);

INSERT INTO desks
(desk_id, desk_code, desk_name, desk_description, desk_brand, desk_material,
desk_type_id, desk_buy_price, desk_sell_price)
VALUES
(7, 'SADR', 'Sauder Heritage Hill', 'Classic executive desk with a rich stained finish and a large desktop surface. Includes a slide-out keyboard shelf and two storage drawers.', 'Sauder', 'Engineered Wood', 2, 399.00, 599.00);

INSERT INTO desks
(desk_id, desk_code, desk_name, desk_description, desk_brand, desk_material,
desk_type_id, desk_buy_price, desk_sell_price)
VALUES
(8, 'HOOK', 'Hooker Kinsey', 'High-end executive desk with genuine leather inlay crafted from solid hardwood. Dovetail joinery drawers and antique brass hardware complete the luxurious look.', 'Hooker', 'Hardwood', 2, 1200.00, 1799.00);

INSERT INTO desks
(desk_id, desk_code, desk_name, desk_description, desk_brand, desk_material,
desk_type_id, desk_buy_price, desk_sell_price)
VALUES
(9, 'DMIK', 'DMI Keswick', 'Professional executive desk with full pedestal drawers and a traditional crown moulding accent. Built with veneer over solid core construction for lasting durability.', 'DMI Office', 'Veneer', 2, 799.00, 1199.00);

INSERT INTO desks
(desk_id, desk_code, desk_name, desk_description, desk_brand, desk_material,
desk_type_id, desk_buy_price, desk_sell_price)
VALUES
(10, 'MART', 'Martin Beaumont', 'U-shaped executive desk with an optional hutch and solid oak construction. Includes a keyboard tray and central locking system for all drawers.', 'Martin', 'Oak', 2, 899.00, 1349.00);

INSERT INTO desks
(desk_id, desk_code, desk_name, desk_description, desk_brand, desk_material,
desk_type_id, desk_buy_price, desk_sell_price)
VALUES
(11, 'WLKR', 'Walker Edison Soreno', 'Modern L-shaped glass desk with a sliding keyboard tray and tempered safety glass top. Beveled edge design gives it a sleek contemporary look.', 'Walker Edison', 'Glass', 3, 129.00, 219.00);

INSERT INTO desks
(desk_id, desk_code, desk_name, desk_description, desk_brand, desk_material,
desk_type_id, desk_buy_price, desk_sell_price)
VALUES
(12, 'TRBS', 'Tribesigns L-Desk', 'Large L-shaped desk with open shelving and a spacious work surface. Supports up to 400 pounds and includes adjustable leg pads for uneven floors.', 'Tribesigns', 'MDF', 3, 179.00, 289.00);

INSERT INTO desks
(desk_id, desk_code, desk_name, desk_description, desk_brand, desk_material,
desk_type_id, desk_buy_price, desk_sell_price)
VALUES
(13, 'CUBI', 'CubiCubi L-Desk', 'Compact L-shaped desk with a side storage bag and headphone hook. Ideal for small spaces while still providing a generous corner workspace.', 'CubiCubi', 'Steel', 3, 89.00, 159.00);

INSERT INTO desks
(desk_id, desk_code, desk_name, desk_description, desk_brand, desk_material,
desk_type_id, desk_buy_price, desk_sell_price)
VALUES
(14, 'IRON', 'Mr IRONSTONE L-Desk', 'Industrial L-shaped desk with a built-in monitor stand and sturdy metal frame. Features a round corner design for safety and extra legroom.', 'Mr IRONSTONE', 'MDF', 3, 109.00, 199.00);

INSERT INTO desks
(desk_id, desk_code, desk_name, desk_description, desk_brand, desk_material,
desk_type_id, desk_buy_price, desk_sell_price)
VALUES
(15, 'BSTR', 'Bestier L-Desk', 'L-shaped desk with integrated LED lights and built-in power outlets for charging devices. Modern design with a reversible configuration for left or right setup.', 'Bestier', 'Engineered Wood', 3, 159.00, 269.00);

SELECT * FROM desks;
