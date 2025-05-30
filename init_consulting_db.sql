CREATE DATABASE IF NOT EXISTS consulting_db;
USE consulting_db;

CREATE TABLE IF NOT EXISTS clients (
    id INT AUTO_INCREMENT PRIMARY KEY,
    company_name VARCHAR(255) NOT NULL,
    industry VARCHAR(255) NOT NULL,
    project VARCHAR(255) NOT NULL,
    location VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    contact VARCHAR(255) NOT NULL
);

-- Optionally, add a sample client
INSERT INTO clients (company_name, industry, project, location, email, contact)
VALUES ('Acme Corp', 'Technology', 'Digital Transformation', 'New York', 'contact@acme.com', '+1-555-1234');
