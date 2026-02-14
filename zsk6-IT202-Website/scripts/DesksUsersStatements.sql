CREATE TABLE desk_users (
    desks_users_id  INT             NOT NULL    AUTO_INCREMENT,
    email_address   VARCHAR(255)    NOT NULL   UNIQUE,
    password        VARCHAR(64)     NOT NULL,
    pronouns        VARCHAR(60)     NOT NULL,
    first_name      VARCHAR(60)     NOT NULL,
    last_name       VARCHAR(60)     NOT NULL,
    phone_number    VARCHAR(20)     NOT NULL,
    date_time_created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    date_time_updated TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (desks_users_id)
);

INSERT INTO desk_users (email_address, password, pronouns, first_name, last_name, phone_number) VALUES
('ronaldo@desks.com', SHA2('ronaldopassword', 256), 'He/Him', 'Cristiano', 'Ronaldo', '123-456-7890'),
('messi@desks.com', SHA2('messipassword', 256), 'He/Him', 'Lionel', 'Messi', '123-456-7891'),
('neymar@desks.com', SHA2('neymarpassword', 256), 'He/Him', 'Neymar', 'Jr', '123-456-7892');