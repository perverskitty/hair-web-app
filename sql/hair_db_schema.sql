CREATE DATABASE hair_db;
use hair_db;

-- hairdressers table
CREATE TABLE hairdressers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    tel VARCHAR(255) NOT NULL,
    gender CHAR(1) NOT NULL,
    staff_type INT NOT NULL,
    created_at TIMESTAMP DEFAULT '0000-00-00 00:00:00',
    changed_at TIMESTAMP DEFAULT NOW() ON UPDATE CURRENT_TIMESTAMP
);

-- clients table
CREATE TABLE clients (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    tel VARCHAR(255) NOT NULL,
    gender CHAR(1) NOT NULL,
    hairdresser_id INT,
    created_at TIMESTAMP DEFAULT '0000-00-00 00:00:00',
    changed_at TIMESTAMP DEFAULT NOW() ON UPDATE CURRENT_TIMESTAMP
);

-- services table
CREATE TABLE services (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description VARCHAR(255) NOT NULL,
    duration INT NOT NULL,
    category CHAR(1) NOT NULL,
    price DECIMAL(8,2) NOT NULL,
    created_at TIMESTAMP DEFAULT '0000-00-00 00:00:00',
    changed_at TIMESTAMP DEFAULT NOW() ON UPDATE CURRENT_TIMESTAMP
);

-- appointments table
CREATE TABLE appointments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    appt_date DATE NOT NULL,
    start_time TIME NOT NULL,
    end_time TIME NOT NULL,
    duration INT NOT NULL,
    client_id INT NOT NULL,
    hairdresser_id INT NOT NULL,
    service_id INT NOT NULL,
    created_at TIMESTAMP DEFAULT '0000-00-00 00:00:00',
    changed_at TIMESTAMP DEFAULT NOW() ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY(client_id) REFERENCES clients(id),
    FOREIGN KEY(hairdresser_id) REFERENCES hairdressers(id),
    FOREIGN KEY(service_id) REFERENCES services(id)
);

-- salons table
CREATE TABLE salons (
    id INT AUTO_INCREMENT PRIMARY KEY,
    salon INT NOT NULL,
    day_of_week INT NOT NULL,
    open_time TIME NOT NULL,
    close_time TIME NOT NULL,
    created_at TIMESTAMP DEFAULT '0000-00-00 00:00:00',
    changed_at TIMESTAMP DEFAULT NOW() ON UPDATE CURRENT_TIMESTAMP
);

-- schedules table
CREATE TABLE schedules (
    id INT AUTO_INCREMENT PRIMARY KEY,
    day_of_week INT NOT NULL,
    start_time TIME NOT NULL,
    end_time TIME NOT NULL,
    salon_id INT NOT NULL,
    hairdresser_id INT NOT NULL,
    created_at TIMESTAMP DEFAULT '0000-00-00 00:00:00',
    changed_at TIMESTAMP DEFAULT NOW() ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY(salon_id) REFERENCES salons(id),
    FOREIGN KEY(hairdresser_id) REFERENCES hairdressers(id)
);

