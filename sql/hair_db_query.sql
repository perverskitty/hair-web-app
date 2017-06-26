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
    
    