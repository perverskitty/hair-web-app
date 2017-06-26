-- hairdressers data
INSERT INTO hairdressers (first_name, last_name, email, password, tel, gender, staff_type, created_at, changed_at) VALUES
('Peter', 'Cheung', 'peter@hair.com', '972c381ebd4e8b516ff86e5611a39bc2', '07540111222', 'm', '1', null, null),
('Ren', 'Calder', 'ren@hair.com', '325bcaa9f87c8bdbe3d4def58dcea1e5', '07540222333', 'f', '1', null, null),
('Lory', 'Gill', 'lory@hair.com', '7f5c8ca6bf713d2a752faf1996a91ea4', '07540333444', 'f', '2', null, null),
('Mike', 'Harley', 'mike@hair.com', '4a33630d7062104e25b61a6c98952d7b', '07540444555', 'm', '2', null, null);

-- clients data
INSERT INTO clients (first_name, last_name, email, password, tel, gender, hairdresser_id, created_at, changed_at) VALUES
('Ally', 'Mucha', 'ally@client.com', 'fd7a9a53324485657c2b38312700a146', '07540555666', 'f', '1', null, null),
('Fee', 'Day', 'fee@client.com', 'b1f8b101b74384b3e390bbc2354f2a75', '07540666777', 'f', '2', null, null),
('Sue', 'Ochs', 'sue@client.com', '069a401e74294b06ff6155f867684bd6', '07540777888', 'f', '3', null, null);
INSERT INTO clients (first_name, last_name, email, password, tel, gender, created_at, changed_at) VALUES
('Ben', 'Thomas', 'ben@client.com', 'f75f6dc87266af3d05c905487973d222', '07540888999', 'm', null, null);

-- services data
INSERT INTO services (title, description, duration, category, price, created_at, changed_at) VALUES
('Haircut and shampoo', 'Ladies haircut, style, shampoo and blow dry.', '60', 'f', '40.00', null, null),
('Haircut and shampoo', 'Mens haircut, style, shampoo and blow dry.', '60', 'm', '30.00', null, null),
('Haircut and shampoo', 'Childrens haircut, style, shampoo and blow dry.', '60', 'c', '20.00', null, null),
('Shampoo and blow dry', 'Shampoo and blow dry only.', '60', 'u', '25.00', null, null),
('Perm', 'Perm including haircut, style, shampoo and blow dry.', '120', 'u', '90.00', null, null),
('Straight perm', 'Straightening perm including haircut, style, shampoo and blow dry.', '180', 'u', '140.00', null, null),
('Colour', 'Colour including haircut, style, shampoo and blow dry.', '120', 'u', '80.00', null, null),
('Highlights quarter-head', 'Highlights quarter-head coverage including haircut, style, shampoo and blow dry.', '120', 'u', '90.00', null, null),
('Highlights half-head', 'Highlights half-head coverage including haircut, style, shampoo and blow dry.', '150', 'u', '110.00', null, null),
('Highlights full-head', 'Highlights full-head coverage including haircut, style, shampoo and blow dry.', '180', 'u', '130.00', null, null),
('Treatment', 'Treatment including haircut, style, shampoo and blow dry.', '90', 'u', '55.00', null, null);

-- appointments data
INSERT INTO appointments (appt_date, start_time, end_time, duration, client_id, hairdresser_id, service_id, created_at, changed_at) VALUES
('2017-07-27', '10:00:00', '11:00:00', '60', '1', '1', '1', null, null),
('2017-07-15', '11:00:00', '13:00:00', '120', '2', '1', '5', null, null);
INSERT INTO appointments (appt_date, start_time, end_time, duration, client_id, hairdresser_id, service_id, created_at, changed_at) VALUES
('2017-07-27', '11:00:00', '14:00:00', '180', '3', '1', '10', null, null),
('2017-07-27', '11:00:00', '13:00:00', '120', '4', '3', '5', null, null),
('2017-07-27', '15:00:00', '16:00:00', '60', '2', '4', '1', null, null),
('2017-07-28', '11:00:00', '13:00:00', '120', '1', '1', '5', null, null),

('2017-07-15', '10:00:00', '11:00:00', '60', '4', '1', '2', null, null),
('2017-07-15', '13:00:00', '14:00:00', '60', '3', '1', '1', null, null),
('2017-07-15', '17:00:00', '19:00:00', '120', '1', '1', '7', null, null),
('2017-07-16', '11:00:00', '13:00:00', '120', '3', '1', '8', null, null),

('2017-07-09', '11:00:00', '13:00:00', '120', '2', '1', '5', null, null),
('2017-07-12', '10:00:00', '11:00:00', '60', '1', '1', '1', null, null),
('2017-07-19', '11:00:00', '13:00:00', '120', '2', '1', '5', null, null),
('2017-07-05', '10:00:00', '11:00:00', '60', '1', '1', '1', null, null),
('2017-07-20', '11:00:00', '13:00:00', '120', '2', '1', '5', null, null);


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
('1', '10:00:00', '13:00:00', '1', '1', null, null), ('1', '14:00:00', '17:00:00', '1', '2', null, null),
('2', '10:00:00', '13:00:00', '1', '1', null, null), ('2', '14:00:00', '19:00:00', '1', '2', null, null),
('4', '10:00:00', '13:00:00', '1', '1', null, null), ('4', '14:00:00', '19:00:00', '1', '2', null, null),
('5', '10:00:00', '13:00:00', '1', '1', null, null), ('5', '14:00:00', '19:00:00', '1', '2', null, null),
('6', '10:00:00', '13:00:00', '1', '1', null, null), ('6', '14:00:00', '19:00:00', '1', '2', null, null),
('7', '10:00:00', '13:00:00', '1', '1', null, null), ('7', '14:00:00', '19:00:00', '1', '2', null, null),
('1', '10:00:00', '12:00:00', '1', '1', null, null), ('1', '13:00:00', '17:00:00', '1', '3', null, null),
('2', '10:00:00', '13:00:00', '1', '1', null, null), ('2', '14:00:00', '19:00:00', '1', '3', null, null),
('4', '10:00:00', '13:00:00', '1', '1', null, null), ('4', '14:00:00', '19:00:00', '1', '3', null, null),
('5', '10:00:00', '13:00:00', '1', '1', null, null), ('5', '14:00:00', '19:00:00', '1', '3', null, null),
('6', '10:00:00', '12:00:00', '1', '1', null, null), ('6', '13:00:00', '19:00:00', '1', '3', null, null),
('7', '10:00:00', '12:00:00', '1', '1', null, null), ('7', '13:00:00', '19:00:00', '1', '3', null, null),
('1', '10:00:00', '15:00:00', '1', '1', null, null), ('1', '16:00:00', '17:00:00', '1', '4', null, null),
('2', '10:00:00', '14:00:00', '1', '1', null, null), ('2', '15:00:00', '19:00:00', '1', '4', null, null),
('4', '10:00:00', '14:00:00', '1', '1', null, null), ('4', '15:00:00', '19:00:00', '1', '4', null, null),
('5', '10:00:00', '14:00:00', '1', '1', null, null), ('5', '15:00:00', '19:00:00', '1', '4', null, null),
('6', '10:00:00', '15:00:00', '1', '1', null, null), ('6', '16:00:00', '19:00:00', '1', '4', null, null),
('7', '10:00:00', '15:00:00', '1', '1', null, null), ('7', '16:00:00', '19:00:00', '1', '4', null, null);


