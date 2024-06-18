-- Create the database
CREATE DATABASE testdb_soap;

-- Use the created database
USE testdb_soap;

-- Create the users table
CREATE TABLE users_soap (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insert sample data
INSERT INTO users (name, email) VALUES ('Ajay', 'ajay@example.com');
INSERT INTO users (name, email) VALUES ('Bobley', 'bobley@example.com');
