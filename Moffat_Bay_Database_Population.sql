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
VALUES	(101, 'Double Full', FALSE, '120.00'),
		(102, 'Queen', FALSE, '140.00'),
        (103, 'Double Quen', FALSE, '130.00'),
		(104, 'King', TRUE, '150.00'),
        (105, 'Double Full', TRUE, '120.00'),
		(106, 'Queen', TRUE, '140.00'),
		(107, 'Double Queen', TRUE, '130.00'),
        (108, 'King', TRUE, '150.00'),
        (109, 'Double Full', TRUE, '120.00'),
		(110, 'Queen', FALSE, '140.00'),
		(111, 'Double Queen', TRUE, '130.00'),
        (112, 'King', TRUE, '150.00'),
        (113, 'Double Full', TRUE, '120.00'),
        (114, 'Queen', TRUE, '140.00'),
		(115, 'Double Queen', TRUE, '130.00'),
        (116, 'King', TRUE, '150.00'),
		(117, 'Double Full', TRUE, '120.00'),
        (118, 'Queen', TRUE, '140.00'),
		(119, 'Double Queen', TRUE, '130.00'),
        (120, 'King', TRUE, '150.00');

INSERT INTO Reservations (Confirmation_Number, Total_Guests, Date_of_Check_in, Date_of_Check_out, Reservation_Status, Special_Requests, Room_ID, User_ID)
VALUES (12351, 4, '2024-02-21', '2024-02-24', 'Confirmed', '', 101, 0001),
	   (12352, 2, '2024-02-08', '2024-02-09', 'Confirmed', '', 102, 0002),
       (12353, 1, '2024-03-01', '2024-03-05', 'Confirmed', 'Would prefer ADA room, if poossible.', 103, 0003);