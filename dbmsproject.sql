CREATE TABLE Customer (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    customer_name VARCHAR(50) NOT NULL,
    customer_email  VARCHAR(50)  NOT NULL UNIQUE,
    customer_phonenumber VARCHAR(20)   NOT NULL,
    customer_password VARCHAR(255)  NOT NULL
);

CREATE TABLE Owner (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    owner_name VARCHAR(50) NOT NULL,
    owner_email VARCHAR(50) NOT NULL UNIQUE,
    owner_phonenumber VARCHAR(20) NOT NULL,
    owner_password VARCHAR(255) NOT NULL
);

CREATE TABLE Admin (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    admin_name VARCHAR(50) NOT NULL,
    admin_email VARCHAR(50) NOT NULL UNIQUE,
    admin_phonenumber VARCHAR(20) NOT NULL,
    admin_password VARCHAR(255) NOT NULL
);

CREATE TABLE bike (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    bike_name VARCHAR(40) NOT NULL,
    bike_location VARCHAR(20) NOT NULL,
    bike_status VARCHAR(1) NOT NULL,
    bike_price VARCHAR(5) NOT NULL
);

INSERT INTO bike (bike_name, bike_location, bike_status, bike_price)
    VALUES ('Triump_t120', 'bengaluru', 'n', 1140),
    ('Bajaj_ns200', 'bengaluru', 'n', 398),
    ('RE_himalayan', 'bengaluru', 'n', 608),
    ('apache_rr310', 'bengaluru', 'n', 714),
    ('HD_iron_883', 'bengaluru', 'n', 998),
    ('Triump_t120', 'chennai', 'n', 1140),
    ('Bajaj_ns200', 'chennai', 'n', 398),
    ('RE_himalayan', 'chennai', 'n', 608),
    ('apache_rr310', 'chennai', 'n', 714),
    ('HD_iron_883', 'chennai', 'n', 998),
    ('Triump_t120', 'hyderabad', 'n', 1140),
    ('Bajaj_ns200', 'hyderabad', 'n', 398),
    ('RE_himalayan', 'hyderabad', 'n', 608),
    ('apache_rr310', 'hyderabad', 'n', 714),
    ('HD_iron_883', 'hyderabad', 'n', 998),
    ('Triump_t120', 'vijayawada', 'n', 1140),
    ('Bajaj_ns200', 'vijayawada', 'n', 398),
    ('RE_himalayan', 'vijayawada', 'n', 608),
    ('apache_rr310', 'vijayawada', 'n', 714),
    ('HD_iron_883', 'vijayawada', 'n', 998),
    ('Triump_t120', 'vishakapatnam', 'n', 1140),
    ('Bajaj_ns200', 'vishakapatnam', 'n', 398),
    ('RE_himalayan', 'vishakapatnam', 'n', 608),
    ('apache_rr310', 'vishakapatnam', 'n', 714),
    ('HD_iron_883', 'vishakapatnam', 'n', 998)
    ;

CREATE TABLE car (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    car_name VARCHAR(40) NOT NULL,
    car_location VARCHAR(20) NOT NULL,
    car_status VARCHAR(1) NOT NULL,
    car_price VARCHAR(5) NOT NULL
);

INSERT INTO car (car_name, car_location, car_status, car_price)
    VALUES ('kia_seltos', 'bengaluru', 'n', 2400),
    ('honda_civic', 'bengaluru', 'n', 2200),
    ('mg_hector', 'bengaluru', 'n' , 2250),
    ('tata_nexon', 'bengaluru', 'n', 1798),
    ('suzuki_celerio', 'bengaluru', 'n', 998),
    ('suzuki_swift', 'chennai', 'n', 1850),
    ('ford_endeavour', 'chennai', 'n', 3200),
    ('mg_gloster', 'chennai', 'n' , 3749),
    ('honda_city', 'chennai', 'n', 2198),
    ('bmw_x1', 'chennai', 'n', 4099),
    ('volkswagon_beetle', 'hyderabad', 'n', 2598),
    ('benz_gle', 'hyderabad', 'n', 4215),
    ('bmw_m4', 'hyderabad', 'n' , 3749),
    ('bmw_x4', 'hyderabad', 'n', 3999),
    ('mahindra_thar', 'hyderabad', 'n', 1980),
    ('tata_harrier', 'vijayawada', 'n', 2800),
    ('renualt_kwid', 'vijayawada', 'n', 1200),
    ('ford_ecosport', 'vijayawada', 'n' , 2250),
    ('tata_altroz', 'vijayawada', 'n', 1798),
    ('suzuki_celerio', 'vijayawada', 'n', 1098),
    ('mini_cooper', 'vishakapatnam', 'n', 3699),
    ('honda_civic', 'vishakapatnam', 'n', 2200),
    ('jeep_wrangler', 'vishakapatnam', 'n' , 4250),
    ('tata_nexon', 'vishakapatnam', 'n', 1798),
    ('ford_fiesta', 'vishakapatnam', 'n', 1998)
    ;
