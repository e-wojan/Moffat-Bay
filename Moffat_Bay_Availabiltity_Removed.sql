/* 
Gropup B
Emily Wojan, Darlene Batts, Rachel White, Zachary Maziarz, Tyler O'Riley

CSD 480
Module 5.1 Assignment
2/5/2024

Database Creation & Population for the Moffat Bay Lodge Capstone Project.
*/

-- Creating the MoffatBay_Lodge database.
CREATE DATABASE MoffatBay_Lodge;

-- Using the newly created MoffatBay_Lodge database.
USE MoffatBay_Lodge;

-- Dropping moffat_user if it exists.
DROP USER IF EXISTS 'moffat_user'@'localhost';

-- Creating moffat_user.
CREATE USER 'moffat_user'@'localhost' IDENTIFIED WITH mysql_native_password BY 'groupb';

-- Grantinh moffat_user all privileges to the MoffatBay_Lodge database.
GRANT ALL PRIVILEGES ON MoffatBay_Lodge.* TO 'moffat_user'@'localhost'; 

-- Creating the Users table.
CREATE TABLE Users (
	User_ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    First_Name VARCHAR(45) NOT NULL,
    Last_Name VARCHAR(45) NOT NULL,
    Phone VARCHAR(45) NOT NULL,
    Email VARCHAR(45) NOT NULL,
    User_Password VARCHAR(4000) NOT NULL,
    Street_Address VARCHAR(45) NOT NULL,
    Street_Address_2 VARCHAR(45) NOT NULL,
    City VARCHAR(45) NOT NULL,
    State VARCHAR(45) NOT NULL,
    Zip VARCHAR(45) NOT NULL,
    Country VARCHAR(45) NOT NULL
    );
    
-- Creating the Rooms table.
CREATE TABLE Rooms (
	Room_ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Room_Type VARCHAR(45) NOT NULL,
    Rate FLOAT
    );
    
-- Creating the Reservations table.
CREATE TABLE Reservations (
	Confirmation_Number INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Total_Guests INT NOT NULL,
    Date_of_Check_in DATE NOT NULL,
	Date_of_Check_out DATE NOT NULl,
    Reservation_Status VARCHAR(45),
    Special_Requests VARCHAR(200),
    Room_ID INT NOT NULL,
    User_ID INT NOT NULL,
    Foreign KEY (Room_ID) REFERENCES Rooms(Room_ID),
    Foreign KEY (User_ID) REFERENCES Users(User_ID)
    );

INSERT INTO Users (User_ID, First_Name, Last_Name, Phone, Email, User_Password, Street_Address, Street_Address_2, City, State, Zip, Country)
VALUES (0001, 'Allison', 'Rico', '281-228-5548', 'a.rico@gmail.com',  '$2y$10$5GM1cELZXSO.AnI/jJwICOcZFxRjKIgqq6R2WaqTHGEqv5jt96p/u', '5241 Rose Wood Ln.', '','Chicago', 'Illinois', 88548, 'USA'),
       (0002, 'Rachel', 'Meyers', '834-445-6584', 'rachel.meyers@yahoo.com', '$2y$10$SQD5vTid1QxvYy6tejBTZ.lzfyPqGxF8DH264BcCSNTHGCD9C8jWa', '81 Clarence Gardens', '', 'London', '', 'NW1 3LL', 'UK'),
	   (0003, 'Henry', 'Smith', '155-456-4562', 'H.Smith1@gmail.com', '$2y$10$Akp9UzM6hnXwIOmN8taJluysvECPUkpXT3zy.tF8IfiPoVPvpwoi.', '2417 Elm Wood Rd.', 'Apt 202', 'El Paso', 'Texas', '85843', 'USA');

INSERT INTO Rooms (Room_ID, Room_Type, Rate)
VALUES	(101, 'Double Full', '120.00'),
		(102, 'Queen', '130.00'),
        (103, 'Double Queen', '140.00'),
		(104, 'King', '130.00'),
        (105, 'Double Full', '120.00'),
		(106, 'Queen', '140.00'),
        (107, 'Double Queen', '120.00'),
		(108, 'King', '130.00'),
        (109, 'Double Full', '120.00'),
		(110, 'Queen', '130.00'),
        (111, 'Double Queen', '140.00'),
		(112, 'King', '130.00'),
        (113, 'Double Full', '120.00'),
		(114, 'Queen', '130.00'),
        (115, 'Double Queen', '140.00'),
		(116, 'King','130.00'),
        (117, 'Double Full', '120.00'),
		(118, 'Queen', '130.00'),
        (119, 'Double Queen', '140.00'),
		(120, 'King', '130.00');

INSERT INTO Reservations (Confirmation_Number, Total_Guests, Date_of_Check_in, Date_of_Check_out, Reservation_Status, Special_Requests, Room_ID, User_ID)
VALUES (12351, 4, '2024-02-21', '2024-02-24', 'Confirmed', '', 101, 0001),
	   (12352, 2, '2024-02-08', '2024-02-09', 'Confirmed', '', 102, 0002),
       (12353, 1, '2024-03-01', '2024-03-05', 'Confirmed', 'Would prefer ADA room, if poossible.', 103, 0003);
