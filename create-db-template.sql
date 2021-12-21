CREATE DATABASE DBMSTABLES;

    CREATE TABLE admin(
      Name CHAR(15) DEFAULT NULL,
      Admin_id VARCHAR(20) DEFAULT NULL,
      Password VARCHAR(20) DEFAULT NULL
);
INSERT INTO admin (Name,Admin_id,Password) 
VALUES ('Adithya','Adithya1202','Demon@1202') ,
        ('Vallabh','Vallabh69','Hunter'),
        ('Pramodh','Pramodh','Bitcoin');


CREATE TABLE Owner (
      Name CHAR(15) DEFAULT NULL,
      Owner_ID VARCHAR(50) NOT NULL,
      Password VARCHAR(20) DEFAULT NULL,
      Phone_number VARCHAR(20) NOT NULL,
      Email_ID VARCHAR(20) DEFAULT NULL,
      Type_Of_Vehicle VARCHAR(20) DEFAULT NULL,
      Available_vehicle VARCHAR(20) DEFAULT NULL,
      Location VARCHAR(50) DEFAULT NULL
);


INSERT INTO Owner (Name,Owner_ID,Password,Phone_number,Email_ID,Type_Of_Vehicle,Available_vehicle,Location)
VALUES ('Anand','Anand cars limited','SaiRam','9490448444','anandtoursandtravels@gmail.com','cars and bikes','mahindra scorpio,innova,fortunar,swift','Street:  Rst 106, Preet Vihar, Delhi,110092,India'),
        ('Mishra','Mishra tours and travels','Mishra@12','9748251487,8485485744','mishratoursandtravels@gmail.com','cars','jeep compass ,Innova Crysta ,Scorpio ,swift dezire, toyota yaris,tata indica','Street:  Rst 106, Preet Vihar, Delhi,110092,India'),
        ('Mahesh','Mahesh Rentals','Mahesh232','7484168454','maheshrentals@gmail.com','bikes','honda activa,suzuki access,herohonda splendor,honda jupiter,vespa,bajaj pulsar,yamaha fz','Street:  Rst 106, Preet Vihar, Delhi,110092,India'),
 ('Mishra','Mishra tours and travels','Mishra@12','9748251487,8485485744','mishratoursandtravels@gmail.com','cars','jeep compass ,Innova Crysta ,Scorpio ,swift dezire, toyota yaris,tata indica','Street:  Rst 106, Preet Vihar, Delhi,110092,India'),
        ('Mahesh','Mahesh Rentals','Mahesh232','7484168454','maheshrentals@gmail.com','bikes','honda activa,suzuki access,herohonda splendor,honda jupiter,vespa,bajaj pulsar,yamaha fz','Street:  Rst 106, Preet Vihar, Delhi,110092,India');

 

CREATE TABLE Owner_Location(
           Owner_id varchar(50) NOT NULL,
           Zip_code varchar(20) NOT NULL,
           Area_Street varchar(20) NOT NULL,
           City_Town varchar(20) NOT NULL,
           State varchar(20) NOT NULL
);

INSERT INTO Owner_Location (Owner_id,Zip_code,Area_Street,City_Town,State)
VALUES ('Street:  Rst 106','110092','BASHIR BAGH','DELHI','DELHI'),
('Street:  Rst 106','110092','BASHIR BAGH','DELHI','DELHI'),
('Street:  Rst 106','110092','BASHIR BAGH','DELHI','DELHI'),
('Street:  Rst 106','110092','BASHIR BAGH','DELHI','DELHI'),
('Street:  Rst 106','110092','BASHIR BAGH','DELHI','DELHI');

CREATE TABLE Customer (
    Name VARCHAR(20) NOT NULL,
     Customer_Id VARCHAR(20)  NOT NULL,
     Password  VARCHAR(20)  NOT NULL,
     Phone_number VARCHAR(20)   NOT NULL,
     DL_number VARCHAR(20)  NOT NULL,
     Cust_location  VARCHAR(50)  NOT NULL

);

INSERT INTO Customer (Name,Customer_Id,Password,Phone_number,DL_number,Cust_location)
VALUES ('ramesh','ramesh@12','superramesh','7894561239','AP23458923452','BASHIR BAGH DELHI 7481004'),
         ('raKesh','raKesh@12','superraKesh','7894561239','AP23458923452','BASHIR BAGH DELHI 7481004'),
         ('SRIMAN','SRIMAN@12','SRIMAN','7894561239','AP23458923452','BASHIR BAGH DELHI 7481004'),
           ('SRIMAN','SRIMAN@12','SRIMAN','7894561239','AP23458923452','BASHIR BAGH DELHI 7481004');

CREATE TABLE Customer_Location (
           Customer_id VARCHAR(20) NOT NULL,
           Zip_code varchar(20) NOT NULL,
           Area_Street varchar(20) NOT NULL,
           City_Town varchar(20) NOT NULL,
           State VARCHAR(20) NOT NULL

);
        
        
INSERT INTO Customer_Location ( Customer_id,Zip_code,Area_Street,City_Town,State)
VALUES ('ramesh@12','530013','SEETHAMMADHARA','VIZAG','ANDHRA PRADESH'),
('raKesh@12','530013','SEETHAMMADHARA','VIZAG','ANDHRA PRADESH'),
('SRIMAN@12','530013','SEETHAMMADHARA','VIZAG','ANDHRA PRADESH'),
('SRIMAN@12','530013','SEETHAMMADHARA','VIZAG','ANDHRA PRADESH');


CREATE TABLE Car(
        Reg_no varchar(20) NOT NULL,
        Car_model varchar(20) NOT NULL,
        seats varchar(20) NOT NULL,
        Cost_per_day varchar(20) NOT NULL,
        Mileage_in_km FLOAT NOT NULL,
        Transmission varchar(20) NOT NULL,
        Car_location varchar(50) NOT NULL,
        Availability char(5) NOT NULL,
        Late_fee INT NOT NULL,
        Owner_Id VARCHAR(50) not null,
        Customer_Id VARCHAR(20) NOT NULL
);
INSERT INTO Car (Reg_no,Car_model,seats, Cost_per_day, Mileage_in_km,Transmission,Car_location,Availability,Late_fee ,Owner_Id,Customer_Id )
VALUES ('AP123456','inovva crysta 2020','7','919',14.5,'petrol automatic','vizag','yes',500,'Anand cars limited','ramesh@12'),
('AP123456','tata harrier 2019','5','819',12.5,'petrol automatic','vizag','yes',500,'Mishra tours and travels','SRIMAN@12'),
('AP123456','swift dezire','5','799',20,'deisel automatic','vizag','yes',500,'Anand cars limited','ramesh@12'),
('AP123456','maruthi ertiga ','8','919',12.5,'deisel manual','delhi','yes',500,'Anand cars limited','ramesh@12'),
('AP123456','inovva crysta 2019','8','899',11.5,'petrol manual','hyderabad','yes',500,'Anand cars limited','ramesh@12');

CREATE TABLE Car_model(
        Reg_no varchar(20),
        Fuel_type varchar(20),
        Year int(5)
);

INSERT INTO Car_model (Reg_no ,Fuel_type,Year)
VALUES ('AP123456','petrol','2020'),
('AP123456','desiel','2017'),
('AP123456','desiel','2020'),
('AP123456','petrol','2018'),
('AP123456','desiel','2019');

CREATE TABLE Bike (
        Reg_no varchar(20) NOT NULL,
        Bike_model varchar(20) NOT NULL,
        Cost float NOT NULL,
        Mileage FLOAT NOT NULL, 
        Bike_location VARCHAR (50) NOT NULL,
        Availability VARCHAR(5) NOT NULL,
        Late_fee FLOAT NOT NULL,
        Owner_id VARCHAR(50) NOT NULL,
        Cust_Id VARCHAR(20) NOT NULL
);


INSERT INTO Bike ( Reg_no,Bike_model,Cost, Mileage, Bike_location,Availability, Late_fee,Owner_id,Cust_Id )
VALUES ('AP123456','KAWASAKI NINJA',800,17,'SEETHAMMADHARA VIZAG','YES',100,'Mishra tours and travels','SRIMAN'),
('AP123456','HONDA ACTIVA',450,25,'SEETHAMMADHARA VIZAG','NO',100,'Anand cars limited','SRIMAN'),
('AP123456','BAJAJ PULSAR ',600,17,'LB NAGAR HYDERABAD','YES',100,'Mishra tours and travels','raKesh'),
('AP123456','suzuki access 125',450,28,'SEETHAMMADHARA VIZAG','YES',100,'Anand cars limited','SRIMAN'),
('AP123456','yamaha fz',600,20,'bashir bagh delhi','YES',100,'Anand cars limited','SRIMAN');

CREATE TABLE Truck(
    Reg_no varchar(20) NOT NULL,
    Weight_handled  varchar(20) NOT NULL,
    cost FLOAT NOT NULL,
    No_of_tyres int not null,
    location varchar(50) NOT NULL,
    LateFee FLOAT NOT NULL,
    Availability VARCHAR(5) NOT NULL,
    Owner_Id VARCHAR(50) NOT NULL
);


INSERT INTO Truck (Reg_no, Weight_handled,cost, No_of_tyres,location, LateFee,Availability ,  Owner_Id)
values ('AP123456','100 KGS',5000,6,'DWARAKANAGAR VIZAG 530017',500,'YES','TARAK MEHTA LORRY TRANSPORT'),
('AP123456','200 KGS',10000,8,'DWARAKANAGAR VIZAG 530017',500,'YES','TARAK MEHTA LORRY TRANSPORT'),
('AP123456','150 KGS',7500,8,'DWARAKANAGAR VIZAG 530017',500,'YES','TARAK MEHTA LORRY TRANSPORT'),
('AP123456','100 KGS',5000,6,'DWARAKANAGAR VIZAG 530017',500,'YES','TARAK MEHTA LORRY TRANSPORT');

CREATE TABLE Booking (
        Booking_ID varchar(10) not null,
        To_date_time varchar(50) NOT NULL,
        fare  FLOAT NOT NULL,
        Booking_status CHAR(10) DEFAULT NULL,
        Type_of_vehicle VARCHAR(20) NOT NULL,
        Is_driver_required CHAR(5) NOT NULL,
        Customer_Id VARCHAR(20) NOT NULL,
        Reg_no VARCHAR (20) NOT NULL,
        Owner_Id VARCHAR(50) NOT NULL,
        Drop_location VARCHAR(50) NOT NULL,
        Pickup_location VARCHAR(50) NOT NULL
);

INSERT INTO Booking( Booking_ID , To_date_time,fare, Booking_status,Type_of_vehicle,Is_driver_required,Customer_Id,Reg_no,Owner_Id, Drop_location,Pickup_location )
values('AER123123','19-11-2021 TO 22-11-2021',1800,'SUCCESSFUL','CAR','NO','SRIMAN@12','AP123456','Anand cars limited','SEETHAMMADHARA VIZAG','DWARAKA NAGAR VIZAG'),
('AER1237823','25-11-2021 TO 28-11-2021',2800,'SUCCESSFUL','CAR','NO','SRIMAN@12','AP123456','Anand cars limited','SEETHAMMADHARA VIZAG','DWARAKA NAGAR VIZAG');


CREATE TABLE Pickup_Location(
        Booking_Id varchar(20) NOT NULL,
        Zipcode INT NOT NULL,
        Area_Street VARCHAR(20) NOT NULL,
        City_town VARCHAR(20) NOT NULL,
        State VARCHAR(20) NOT NULL
);
INSERT INTO  Pickup_Location (Booking_Id,Zipcode,Area_Street,City_Town,State)
VALUES ('AER123123','530013','SEETHAMMADHARA','VIZAG','ANDHRA PRADESH'),
('AER1237823','530017','Dwaraka nagar','VIZAG','ANDHRA PRADESH'),
('AER123123','530048','madhurawada','VIZAG','ANDHRA PRADESH'),
('AER1237823','530013','SEETHAMMADHARA','VIZAG','ANDHRA PRADESH');
CREATE TABLE Drop_Location(
        Booking_Id varchar(20) NOT NULL,
        Zipcode INT NOT NULL,
        Area_Street VARCHAR(20) NOT NULL,
        City_town VARCHAR(20) NOT NULL,
        State VARCHAR(20) NOT NULL
);

INSERT INTO  Drop_Location (Booking_Id,Zipcode,Area_Street,City_Town,State)
VALUES ('AER123123','530013','SEETHAMMADHARA','VIZAG','ANDHRA PRADESH'),
('AER1237823','530017','Dwaraka nagar','VIZAG','ANDHRA PRADESH'),
('AER123123','530048','madhurawada','VIZAG','ANDHRA PRADESH'),
('AER1237823','530013','SEETHAMMADHARA','VIZAG','ANDHRA PRADESH');

CREATE TABLE Discount (
        Discount_Id varchar(20) NOT NULL,
        Expiry_date VARCHAR(20) NOT NULL,
        Discount_percentage VARCHAR(10) NOT NULL,
        Name_of_coupan VARCHAR(20) NOT NULL
);

INSERT INTO Discount(Discount_Id,Expiry_date, Discount_percentage,Name_of_coupan)
VALUES ('DISC2345','31-12-2021','10 %','FIRST'),
('DISC2346','31-12-2021','15 %','FLAT15'),
('DISC23485','31-12-2021','20 %','FLAT20'),
('DISC23455','31-12-2021','10 %','FIRST5');

CREATE TABLE Payment (
        Invoice_Id varchar(10) NOT NULL,
        Tax varchar(10) NOT NULL,
        Total_late_fee varchar(10) NOT NULL,
        Discount_amount FLOAT NOT NULL,
        Bill_date varchar(10) NOT NULL,
        Amount_payable FLOAT NOT NULL,
        Discount_percentage varchar(10) NOT NULL,
        Booking_amount FLOAT NOT NULL
);

INSERT INTO Payment (  Invoice_Id,Tax,  Total_late_fee,Discount_amount,Bill_date, Amount_payable, Discount_percentage, Booking_amount )
VALUES ('567809','7.5%','1000',350,'20-12-2021',2250,'10%',2250),
('567809','7.5%','1000',350,'20-12-2021',2250,'10%',2250),
('567809','7.5%','1000',350,'20-12-2021',2250,'10%',2250);