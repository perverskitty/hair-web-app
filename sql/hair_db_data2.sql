-- hairdressers data
INSERT INTO hairdressers (first_name, last_name, email, password, tel, gender, staff_type, created_at, changed_at) VALUES
('Peter', 'Cheung', 'peter@hair.com', '972c381ebd4e8b516ff86e5611a39bc2', '07540111222', 'm', '1', null, null),
('Ren', 'Calder', 'ren@hair.com', '325bcaa9f87c8bdbe3d4def58dcea1e5', '07540222333', 'f', '1', null, null),
('Lory', 'Gill', 'lory@hair.com', '7f5c8ca6bf713d2a752faf1996a91ea4', '07540333444', 'f', '2', null, null),
('Mike', 'Harley', 'mike@hair.com', '4a33630d7062104e25b61a6c98952d7b', '07540444555', 'm', '2', null, null),
('Nathan', 'Burton', 'nathan@hair.com', 'f449134ea40280379ca29bf204c31fb7', '07540000999', 'm', '2', null, null);

-- clients data
INSERT INTO clients (first_name, last_name, email, password, tel, gender, hairdresser_id, created_at, changed_at) VALUES
('Ally', 'Mucha', 'ally@client.com', 'fd7a9a53324485657c2b38312700a146', '07540555666', 'f', '1', null, null),
('Fee', 'Day', 'fee@client.com', 'b1f8b101b74384b3e390bbc2354f2a75', '07540666777', 'f', '2', null, null),
('Sue', 'Ochs', 'sue@client.com', '069a401e74294b06ff6155f867684bd6', '07540777888', 'f', '3', null, null),
('Ben', 'Thomas', 'ben@client.com', 'f75f6dc87266af3d05c905487973d222', '07540888999', 'm', DEFAULT, null, null),
('Sammie', 'Smith', 'sammie@client.com', '309721388d5cceba5a16e63710d73269', '07450787878', 'f', '3', null, null),
('Max', 'Steel', 'max@client.com', '5388dc7047651dbac0be5627c80da6c2', '07540090909', 'm', '4', null, null),
('Robyn', 'Carlsson', 'robyn@client.com', 'bda7c772bf40e984bccb3e8d81f5c0dc', '07540668866', 'f', '4', null, null),
('William', 'Goldman', 'william@client.com', '608ab5af9fa8c0ed1211a5159cc72384', '07540345345', 'm', '2', null, null);

-- services data
INSERT INTO services (title, description, duration, category, price, created_at, changed_at) VALUES
('Ladies haircut and shampoo', 'Ladies haircut, style, shampoo and blow dry.', '01:00:00', 'f', '40.00', null, null),
('Mens haircut and shampoo', 'Mens haircut, style, shampoo and blow dry.', '01:00:00', 'm', '30.00', null, null),
('Childrens haircut and shampoo', 'Childrens haircut, style, shampoo and blow dry.', '01:00:00', 'c', '20.00', null, null),
('Shampoo and blow dry', 'Shampoo and blow dry only.', '01:00:00', 'u', '25.00', null, null),
('Perm', 'Perm including haircut, style, shampoo and blow dry.', '02:00:00', 'u', '90.00', null, null),
('Straight perm', 'Straightening perm including haircut, style, shampoo and blow dry.', '03:00:00', 'u', '140.00', null, null),
('Colour', 'Colour including haircut, style, shampoo and blow dry.', '02:00:00', 'u', '80.00', null, null),
('Highlights quarter-head', 'Highlights quarter-head coverage including haircut, style, shampoo and blow dry.', '02:00:00', 'u', '90.00', null, null),
('Highlights half-head', 'Highlights half-head coverage including haircut, style, shampoo and blow dry.', '02:00:00', 'u', '110.00', null, null),
('Highlights full-head', 'Highlights full-head coverage including haircut, style, shampoo and blow dry.', '03:00:00', 'u', '130.00', null, null),
('Treatment', 'Treatment including haircut, style, shampoo and blow dry.', '02:00:00', 'u', '60.00', null, null);

-- appointments data
INSERT INTO appointments (appt_date, start_time, end_time, client_id, hairdresser_id, service_id, created_at, changed_at) VALUES
('2017-07-27', '11:00:00', '14:00:00', '2', '1', '10', null, null),
('2017-07-27', '10:00:00', '11:00:00', '1', '1', '1', null, null);

-- salons data
INSERT INTO salons (salon, day_of_week, open_time, close_time, created_at, changed_at) VALUES
('1', '1', '10:00:00', '17:00:00', null, null),
('1', '2', '10:00:00', '19:00:00', null, null),
('1', '4', '10:00:00', '19:00:00', null, null),
('1', '5', '10:00:00', '19:00:00', null, null),
('1', '6', '10:00:00', '19:00:00', null, null),
('1', '7', '10:00:00', '19:00:00', null, null);

-- schedules data
INSERT INTO schedules (day_of_week, start_time, end_time, salon_id, hairdresser_id, created_at, changed_at) VALUES
('1', '10:00:00', '14:00:00', '1', '1', null, null), ('1', '15:00:00', '17:00:00', '1', '1', null, null),
('2', '10:00:00', '14:00:00', '1', '1', null, null), ('2', '15:00:00', '19:00:00', '1', '1', null, null),
('4', '10:00:00', '14:00:00', '1', '1', null, null), ('4', '15:00:00', '19:00:00', '1', '1', null, null),
('5', '10:00:00', '14:00:00', '1', '1', null, null), ('5', '15:00:00', '19:00:00', '1', '1', null, null),
('6', '10:00:00', '14:00:00', '1', '1', null, null), ('6', '15:00:00', '19:00:00', '1', '1', null, null),
('7', '10:00:00', '14:00:00', '1', '1', null, null), ('7', '15:00:00', '19:00:00', '1', '1', null, null),

('1', '10:00:00', '13:00:00', '1', '2', null, null), ('1', '14:00:00', '17:00:00', '1', '2', null, null),
('2', '10:00:00', '13:00:00', '1', '2', null, null), ('2', '14:00:00', '19:00:00', '1', '2', null, null),
('4', '10:00:00', '13:00:00', '1', '2', null, null), ('4', '14:00:00', '19:00:00', '1', '2', null, null),
('5', '10:00:00', '13:00:00', '1', '2', null, null), ('5', '14:00:00', '19:00:00', '1', '2', null, null),
('6', '10:00:00', '13:00:00', '1', '2', null, null), ('6', '14:00:00', '19:00:00', '1', '2', null, null),
('7', '10:00:00', '13:00:00', '1', '2', null, null), ('7', '14:00:00', '19:00:00', '1', '2', null, null),

('1', '10:00:00', '12:00:00', '1', '3', null, null), ('1', '13:00:00', '17:00:00', '1', '3', null, null),
('2', '10:00:00', '13:00:00', '1', '3', null, null), ('2', '14:00:00', '19:00:00', '1', '3', null, null),
('4', '10:00:00', '13:00:00', '1', '3', null, null), ('4', '14:00:00', '19:00:00', '1', '3', null, null),
('5', '10:00:00', '13:00:00', '1', '3', null, null), ('5', '14:00:00', '19:00:00', '1', '3', null, null),
('6', '10:00:00', '12:00:00', '1', '3', null, null), ('6', '13:00:00', '19:00:00', '1', '3', null, null),
('7', '10:00:00', '12:00:00', '1', '3', null, null), ('7', '13:00:00', '19:00:00', '1', '3', null, null),

('1', '10:00:00', '15:00:00', '1', '4', null, null), ('1', '16:00:00', '17:00:00', '1', '4', null, null),
('2', '10:00:00', '14:00:00', '1', '4', null, null), ('2', '15:00:00', '19:00:00', '1', '4', null, null),
('4', '10:00:00', '14:00:00', '1', '4', null, null), ('4', '15:00:00', '19:00:00', '1', '4', null, null),
('5', '10:00:00', '14:00:00', '1', '4', null, null), ('5', '15:00:00', '19:00:00', '1', '4', null, null),
('6', '10:00:00', '15:00:00', '1', '4', null, null), ('6', '16:00:00', '19:00:00', '1', '4', null, null),
('7', '10:00:00', '15:00:00', '1', '4', null, null), ('7', '16:00:00', '19:00:00', '1', '4', null, null),

('1', '11:00:00', '14:00:00', '1', '5', null, null), ('1', '15:00:00', '17:00:00', '1', '5', null, null),
('2', '11:00:00', '14:00:00', '1', '5', null, null), ('2', '15:00:00', '18:00:00', '1', '5', null, null),
('4', '11:00:00', '14:00:00', '1', '5', null, null), ('4', '15:00:00', '18:00:00', '1', '5', null, null),
('5', '11:00:00', '14:00:00', '1', '5', null, null), ('5', '15:00:00', '18:00:00', '1', '5', null, null),
('6', '11:00:00', '15:00:00', '1', '5', null, null), ('6', '16:00:00', '18:00:00', '1', '5', null, null),
('7', '11:00:00', '15:00:00', '1', '5', null, null), ('7', '16:00:00', '18:00:00', '1', '5', null, null);


