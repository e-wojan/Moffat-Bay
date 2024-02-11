/* 
Gropup B
Emily Wojan, Darlene Batts, Rachel White, Zachary Maziarz, Tyler O'Riley

CSD 480
Module 5.1 Assignment
2/5/2024

Database Population for the Moffat Bay Lodge Capstone Project.
*/

USE MoffatBay_Lodge;

INSERT INTO Users (User_ID, First_Name, Last_Name, Phone, Email, User_Password, Street_Address, Street_Address_2, City, State, Zip, Country)
VALUES (0001, 'Allison', 'Rico', '281-228-5548', 'a.rico@gmail.com',  '$2y$10$5GM1cELZXSO.AnI/jJwICOcZFxRjKIgqq6R2WaqTHGEqv5jt96p/u', '5241 Rose Wood Ln.', '','Chicago', 'Illinois', 88548, 'USA'),
       (0002, 'Rachel', 'Meyers', '834-445-6584', 'rachel.meyers@yahoo.com', '$2y$10$SQD5vTid1QxvYy6tejBTZ.lzfyPqGxF8DH264BcCSNTHGCD9C8jWa', '81 Clarence Gardens', '', 'London', '', 'NW1 3LL', 'UK'),
	   (0003, 'Henry', 'Smith', '155-456-4562', 'H.Smith1@gmail.com', '$2y$10$Akp9UzM6hnXwIOmN8taJluysvECPUkpXT3zy.tF8IfiPoVPvpwoi.', '2417 Elm Wood Rd.', 'Apt 202', 'El Paso', 'Texas', '85843', 'USA');
       
INSERT INTO Rooms (Room_ID, Room_Type, Availability, Rate)
VALUES	(101, 'Double', FALSE, '120.00'),
		(102, 'Queen', FALSE, '130.00'),
        (103, 'King', FALSE, '140.00'),
		(104, 'Queen', TRUE, '130.00'),
        (105, 'Double', TRUE, '120.00'),
		(106, 'King', TRUE, '140.00'),
        (107, 'Double', TRUE, '120.00'),
		(108, 'Queen', TRUE, '130.00');

INSERT INTO Reservations (Confirmation_Number, Total_Guests, Date_of_Check_in, Date_of_Check_out, Reservation_Status, Special_Requests, Room_ID, User_ID)
VALUES (12351, 4, '2024-02-21', '2024-02-24', 'Confirmed', '', 101, 0001),
	   (12352, 2, '2024-02-08', '2024-02-09', 'Confirmed', '', 102, 0002),
       (12353, 1, '2024-03-01', '2024-03-05', 'Confirmed', 'Would prefer ADA room, if poossible.', 103, 0003);