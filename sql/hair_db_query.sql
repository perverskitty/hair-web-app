-- display a client's active appointments
SELECT 
    appt_date AS date, 
    CONCAT(start_time, ' to ', end_time) AS time, 
    CONCAT(clients.first_name, ' ', clients.last_name) AS client, 
    CONCAT(hairdressers.first_name, ' ', hairdressers.last_name) AS hairdresser, 
    title AS 'service required' 
FROM appointments
INNER JOIN clients
ON appointments.client_id = clients.id
INNER JOIN hairdressers
ON appointments.hairdresser_id = hairdressers.id
INNER JOIN services
ON appointments.service_id = services.id
WHERE 
    appointments.client_id = 1 && 
    CONCAT(appt_date, ' ', end_time) >= NOW();
    
   
-- a client can have up to 3 active appointments
SELECT 
    COUNT(*) AS number
FROM appointments
WHERE 
    appointments.client_id = 1 && 
    CONCAT(appt_date, ' ', end_time) >= NOW();


-- an appointment can be up to 12 weeks in advance
-- the calculation uses the date part only
SELECT DATEDIFF('2017-09-17 12:34:01', NOW()) <= 84; 


-- display all clients in the database
SELECT 
    clients.id,
    CONCAT(clients.first_name, ' ', clients.last_name) AS name,
    clients.gender,
    clients.email,
    clients.tel,
    CONCAT(hairdressers.first_name, ' ', hairdressers.last_name) AS hairdresser,
    clients.created_at AS created,
    clients.changed_at AS changed
FROM clients
LEFT JOIN hairdressers
ON clients.hairdresser_id = hairdressers.id;
    

-- display all hairdressers in the database
SELECT 
    id,
    CONCAT(first_name, ' ', last_name) AS name,
    gender,
    email,
    tel,
    staff_type AS position,
    created_at AS created,
    changed_at AS changed
FROM hairdressers;
    

-- display all services in the database
SELECT
    id,
    category,
    title AS service,
    duration,
    price
FROM services;


-- display all appointments in the database that are active and ordered by hairdresser, date and time
SELECT 
    appt_date AS date,
    appointments.start_time AS start,
    appointments.end_time AS end,
    CONCAT(clients.first_name, ' ', clients.last_name) AS client,
    services.title AS service,
    CONCAT(hairdressers.first_name, ' ', hairdressers.last_name) AS hairdresser
FROM appointments
INNER JOIN clients
ON appointments.client_id = clients.id
INNER JOIN services
ON appointments.service_id = services.id
INNER JOIN hairdressers
ON appointments.hairdresser_id = hairdressers.id
WHERE
    CONCAT(appt_date, ' ', appointments.end_time) >= NOW()
ORDER BY
    appointments.hairdresser_id, appt_date, appointments.start_time;
    
    
-- display all schedules ordered by hairdresser, day of the week, and time
SELECT
    CONCAT(hairdressers.first_name, ' ', hairdressers.last_name) AS hairdresser,
    day_of_week AS day,
    CONCAT(schedules.start_time, ' to ', schedules.end_time) AS shift
FROM schedules
INNER JOIN hairdressers
ON schedules.hairdresser_id = hairdressers.id
ORDER BY
    hairdressers.id,
    day_of_week,
    schedules.start_time;


-- add a new client to the database
INSERT INTO clients (
    first_name, 
    last_name,
    email,
    password,
    tel,
    gender,
    hairdresser_id,
    created_at,
    changed_at)
VALUES
    ;
    
    
-- add a new hairdresser to the database
INSERT INTO hairdressers (
    first_name, 
    last_name,
    email,
    password,
    tel,
    gender,
    staff_type,
    created_at,
    changed_at)
VALUES
    ;



-- insert an appointment
INSERT INTO appointments (
    appt_date, 
    start_time,
    end_time,
    duration,
    client_id,
    hairdresser_id,
    service_id,
    created_at,
    changed_at)
VALUES
    ;
    
    
-- Find duration from service table for a given value
SELECT
    duration
FROM services
WHERE id = 2;


-- show all appointments
SELECT 
    appt_date,
    start_time,
    end_time,
    client_id,
    hairdresser_id,
    service_id 
FROM appointments
WHERE 


-- Is salon open for a given date 'YYYY-MM-DD' and time 'HH:MM:SS'
SELECT
    *
FROM salons
WHERE
    DAYOFWEEK('2017-07-23') = day_of_week
AND
    '13:00:00' >= open_time
AND
    '13:00:00' <= close_time;
    

-- Is there enough time to carry out service for a given date/time

SELECT ADDTIME('15:00:00', '02:00:00');


SELECT * FROM schedules
WHERE hairdresser_id = 1 
AND DAYOFWEEK('2017-07-23') = day_of_week
AND '13:00:00' >= start_time
AND ADDTIME('13:00:00', '01:00:00') <= end_time;


-- show all appointments that clash 
SELECT * FROM appointments
WHERE appt_date = '2017-07-27'
AND hairdresser_id = 1
AND '13:00:00' >= start_time
AND ADDTIME('13:00:00', '01:00:00') <= end_time;