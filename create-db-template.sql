CREATE DATABASE DBMSTABLES;
-- ADMIN TABLE
    CREATE TABLE admin(
      Name CHAR(15) DEFAULT NULL,
      Admin_id VARCHAR(255) DEFAULT NULL,
      Password VARCHAR(255) DEFAULT NULL
);
INSERT INTO admin (Name,Admin_id,Password) 
VALUES ('Adithya','Adithya1202','Demon@1202') ,
        ('Vallabh','Vallabh69','Hunter'),
        ('Pramodh','Pramodh','Bitcoin');

--OWNER TABLE 

CREATE TABLE Owner (
      Name CHAR(15) DEFAULT NULL,
      Owner_ID VARCHAR(255) NOT NULL,
      Password VARCHAR(255) DEFAULT NULL,
      Phone_number VARCHAR(255) NOT NULL,
      Email_ID VARCHAR(255) DEFAULT NULL,
      Type_Of_Vehicle VARCHAR(255) DEFAULT NULL,
      Available_vehicle VARCHAR(255) DEFAULT NULL,
      Location VARCHAR(255) DEFAULT NULL
);


INSERT INTO Owner (Name,Owner_ID,Password,Phone_number,Email_ID,Type_Of_Vehicle,Available_vehicle,Location)
VALUES ('Anand','Anand cars limited','SaiRam','9490448444','anandtoursandtravels@gmail.com','cars and bikes','mahindra scorpio,innova,fortunar,swift','Street:  Rst 106, Preet Vihar, Delhi,110092,India'),
        ('Mishra','Mishra tours and travels','Mishra@12','9748251487,8485485744','mishratoursandtravels@gmail.com','cars','jeep compass ,Innova Crysta ,Scorpio ,swift dezire, toyota yaris,tata indica','Street:  Rst 106, Preet Vihar, Delhi,110092,India'),
        ('Mahesh','Mahesh Rentals','Mahesh232','7484168454','maheshrentals@gmail.com','bikes','honda activa,suzuki access,herohonda splendor,honda jupiter,vespa,bajaj pulsar,yamaha fz','Street:  Rst 106, Preet Vihar, Delhi,110092,India'),
 ('Mishra','Mishra tours and travels','Mishra@12','9748251487,8485485744','mishratoursandtravels@gmail.com','cars','jeep compass ,Innova Crysta ,Scorpio ,swift dezire, toyota yaris,tata indica','Street:  Rst 106, Preet Vihar, Delhi,110092,India'),
        ('Mahesh','Mahesh Rentals','Mahesh232','7484168454','maheshrentals@gmail.com','bikes','honda activa,suzuki access,herohonda splendor,honda jupiter,vespa,bajaj pulsar,yamaha fz','Street:  Rst 106, Preet Vihar, Delhi,110092,India');

 
-- OWNER LOCATION TABLE
CREATE TABLE Owner_Location(
           Owner_id varchar(255) NOT NULL,
           Zip_code varchar(255) NOT NULL,
           Area_Street varchar(255) NOT NULL,
           City_Town varchar(255) NOT NULL,
           State varchar(255) NOT NULL
);

INSERT INTO Owner_Location (Owner_id,Zip_code,Area_Street,City_Town,State)
VALUES ('Street:  Rst 106','110092','BASHIR BAGH','DELHI','DELHI'),
('Street:  Rst 106','110092','BASHIR BAGH','DELHI','DELHI'),
('Street:  Rst 106','110092','BASHIR BAGH','DELHI','DELHI'),
('Street:  Rst 106','110092','BASHIR BAGH','DELHI','DELHI'),
('Street:  Rst 106','110092','BASHIR BAGH','DELHI','DELHI');

CREATE TABLE Customer (
    Name VARCHAR(255) NOT NULL,
     Customer_Id VARCHAR(255)  NOT NULL,
     Password  VARCHAR(255)  NOT NULL,
     Phone_number VARCHAR(255)   NOT NULL,
     DL_number VARCHAR(255)  NOT NULL,
     Cust_location  VARCHAR(255)  NOT NULL

);

        
        