-- hairdressers data
INSERT INTO hairdressers (first_name, last_name, email, password, tel, gender, staff_type) VALUES
('Peter', 'Cheung', 'peter@hair.com', '972c381ebd4e8b516ff86e5611a39bc2', '07540111222', 'm', '1'),
('Ren', 'Calder', 'ren@hair.com', '325bcaa9f87c8bdbe3d4def58dcea1e5', '07540222333', 'f', '1'),
('Lory', 'Gill', 'lory@hair.com', '7f5c8ca6bf713d2a752faf1996a91ea4', '07540333444', 'f', '2'),
('Mike', 'Harley', 'mike@hair.com', '4a33630d7062104e25b61a6c98952d7b', '07540444555', 'm', '2');

-- clients data
INSERT INTO clients (first_name, last_name, email, password, tel, gender, hairdresser_id) VALUES
('Ally', 'Mucha', 'ally@client.com', 'fd7a9a53324485657c2b38312700a146', '07540555666', 'f', '1'),
('Fee', 'Day', 'fee@client.com', 'b1f8b101b74384b3e390bbc2354f2a75', '07540666777', 'f', '2'),
('Sue', 'Ochs', 'sue@client.com', '069a401e74294b06ff6155f867684bd6', '07540777888', 'f', '3');
INSERT INTO clients (first_name, last_name, email, password, tel, gender) VALUES
('Ben', 'Thomas', 'ben@client.com', 'f75f6dc87266af3d05c905487973d222', '07540888999', 'm');

-- services data
INSERT INTO services (title, description, duration, category, price) VALUES
('Haircut and shampoo', 'Ladies haircut, style, shampoo and blow dry.', '60', 'f', '40.00'),
('Haircut and shampoo', 'Mens haircut, style, shampoo and blow dry.', '60', 'm', '30.00'),
('Haircut and shampoo', 'Childrens haircut, style, shampoo and blow dry.', '60', 'c', '20.00'),
('Shampoo and blow dry', 'Shampoo and blow dry only.', '60', 'u', '25.00'),
('Perm', 'Perm including haircut, style, shampoo and blow dry.', '120', 'u', '90.00'),
('Straight perm', 'Straightening perm including haircut, style, shampoo and blow dry.', '180', 'u', '140.00'),
('Colour', 'Colour including haircut, style, shampoo and blow dry.', '120', 'u', '80.00'),
('Highlights quarter-head', 'Highlights quarter-head coverage including haircut, style, shampoo and blow dry.', '120', 'u', '90.00'),
('Highlights half-head', 'Highlights half-head coverage including haircut, style, shampoo and blow dry.', '150', 'u', '110.00'),
('Highlights full-head', 'Highlights full-head coverage including haircut, style, shampoo and blow dry.', '180', 'u', '130.00'),
('Treatment', 'Treatment including haircut, style, shampoo and blow dry.', '90', 'u', '55.00');

-- appointments data
INSERT INTO appointments (appt_date, start_time, end_time, duration, client_id, hairdresser_id, service_id) VALUES
('2017-07-27', '10:00:00', '11:00:00', '60', '1', '1', '1'),
('2017-07-15', '11:00:00', '13:00:00', '120', '2', '1', '5');

-- salons data
INSERT INTO salons (salon, day_of_week, open_time, close_time) VALUES
('1', '1', '10:00:00', '17:00:00'),
('1', '2', '10:00:00', '19:00:00'),
('1', '4', '10:00:00', '19:00:00'),
('1', '5', '10:00:00', '19:00:00'),
('1', '6', '10:00:00', '19:00:00'),
('1', '7', '10:00:00', '19:00:00');

-- schedules data
INSERT INTO schedules (day_of_week, start_time, end_time, salon_id, hairdresser_id) VALUES
('1', '10:00:00', '14:00:00', '1', '1'), ('1', '15:00:00', '17:00:00', '1', '1'),
('2', '10:00:00', '14:00:00', '1', '1'), ('2', '15:00:00', '19:00:00', '1', '1'),
('4', '10:00:00', '14:00:00', '1', '1'), ('4', '15:00:00', '19:00:00', '1', '1'),
('5', '10:00:00', '14:00:00', '1', '1'), ('5', '15:00:00', '19:00:00', '1', '1'),
('6', '10:00:00', '14:00:00', '1', '1'), ('6', '15:00:00', '19:00:00', '1', '1'),
('7', '10:00:00', '14:00:00', '1', '1'), ('7', '15:00:00', '19:00:00', '1', '1'),
('1', '10:00:00', '13:00:00', '1', '1'), ('1', '14:00:00', '17:00:00', '1', '2'),
('2', '10:00:00', '13:00:00', '1', '1'), ('2', '14:00:00', '19:00:00', '1', '2'),
('4', '10:00:00', '13:00:00', '1', '1'), ('4', '14:00:00', '19:00:00', '1', '2'),
('5', '10:00:00', '13:00:00', '1', '1'), ('5', '14:00:00', '19:00:00', '1', '2'),
('6', '10:00:00', '13:00:00', '1', '1'), ('6', '14:00:00', '19:00:00', '1', '2'),
('7', '10:00:00', '13:00:00', '1', '1'), ('7', '14:00:00', '19:00:00', '1', '2'),
('1', '10:00:00', '12:00:00', '1', '1'), ('1', '13:00:00', '17:00:00', '1', '3'),
('2', '10:00:00', '13:00:00', '1', '1'), ('2', '14:00:00', '19:00:00', '1', '3'),
('4', '10:00:00', '13:00:00', '1', '1'), ('4', '14:00:00', '19:00:00', '1', '3'),
('5', '10:00:00', '13:00:00', '1', '1'), ('5', '14:00:00', '19:00:00', '1', '3'),
('6', '10:00:00', '12:00:00', '1', '1'), ('6', '13:00:00', '19:00:00', '1', '3'),
('7', '10:00:00', '12:00:00', '1', '1'), ('7', '13:00:00', '19:00:00', '1', '3'),
('1', '10:00:00', '15:00:00', '1', '1'), ('1', '16:00:00', '17:00:00', '1', '4'),
('2', '10:00:00', '14:00:00', '1', '1'), ('2', '15:00:00', '19:00:00', '1', '4'),
('4', '10:00:00', '14:00:00', '1', '1'), ('4', '15:00:00', '19:00:00', '1', '4'),
('5', '10:00:00', '14:00:00', '1', '1'), ('5', '15:00:00', '19:00:00', '1', '4'),
('6', '10:00:00', '15:00:00', '1', '1'), ('6', '16:00:00', '19:00:00', '1', '4'),
('7', '10:00:00', '15:00:00', '1', '1'), ('7', '16:00:00', '19:00:00', '1', '4');


