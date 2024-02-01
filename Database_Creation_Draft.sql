/* Emily Wojan
CSD 480

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
    User_Password VARCHAR(45) NOT NULL,
    Preferred_Language VARCHAR(45) NOT NULL,
    Street_Address VARCHAR(45) NOT NULL,
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
    Room_ID INT NOT NULL,
    User_ID INT NOT NULL,
    Foreign KEY (Room_ID) REFERENCES Rooms(Room_ID),
    Foreign KEY (User_ID) REFERENCES Users(User_ID)
    );

INSERT INTO Users (User_ID, First_Name, Last_Name, Phone, Email, User_Password, Preferred_Language, Street_Address, City, State, Zip, Country)
VALUES (0001, 'Allison', 'Rico', '281-228-5548', 'a.rico@gmail.com',  'gh2inszlVSKI!!', 'English', '5241 Rose Wood Ln.', 'Chicago', 'Illinois', 88548, 'USA'),
       (0002, 'Rachel', 'Meyers', '834-445-6584', 'rachel.meyers@yahoo.com', 'asdj!jkloj3392k2kjh', 'English', '81 Clarence Gardens', 'London', 'N/A', 'NW1 3LL', 'UK'),
	   (0003, 'Henry', 'Smith', '155-456-4562', '.Smith1@gmail.com', 'jsm1th123', 'Spanish', '2417 Elm Wood Rd.', 'El Paso', 'Texas', '85843', 'USA');
       
INSERT INTO Rooms (Room_ID, Room_Type, Availability, Rate)
VALUES	(101, 'Double', FALSE, '120.00'),
		(102, 'Queen', FALSE, '130.00'),
        (103, 'King', FALSE, '140.00'),
		(104, 'Queen', TRUE, '130.00'),
        (105, 'Double', TRUE, '120.00'),
		(106, 'King', TRUE, '140.00'),
        (107, 'Double', TRUE, '120.00'),
		(108, 'Queen', TRUE, '130.00');

INSERT INTO Reservations (Confirmation_Number, Total_Guests, Date_of_Check_in, Date_of_Check_out, Reservation_Status, Room_ID, User_ID)
VALUES (12351, 4, '2024-02-21', '2024-02-24', 'Confirmed', 101, 0001),
	   (12352, 2, '2024-02-08', '2024-02-09', 'Confirmed', 102, 0002),
       (12353, 1, '2024-03-01', '2024-03-05', 'Confirmed', 103, 0003);
