/* 
Gropup B
Emily Wojan, Darlene Batts, Rachel White, Zachary Maziarz, Tyler O'Riley

CSD 480
Module 5.1 Assignment
2/5/2024

Database Creation for the Moffat Bay Lodge Capstone Project.
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
    Availability BOOLEAN,
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

-- Creating View for Reservation Lookup
CREATE VIEW ReservationInformation AS
SELECT
	u.First_Name,
	u.Last_Name,
	u.Email,
	rm.Room_Type,
	rs.Date_of_Check_in,
	rs.Date_of_Check_out,
    rs.Total_Guests,
    rs.Special_Requests,
	DATEDIFF(rs.Date_of_Check_out, rs.Date_of_Check_in) AS Nights_Booked,
	rs.Confirmation_Number
FROM Reservations rs
JOIN Users u on u.User_ID = rs.User_ID
JOIN Rooms rm on rm.Room_ID = rs.Room_ID;
