DROP DATABASE demo;

CREATE DATABASE demo;

USE demo;

CREATE TABLE users
(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR (60) NOT NULL,
    email VARCHAR (50) NOT NULL,
    password VARCHAR (35) NOT NULL,
    status TINYINT (1) DEFAULT 1,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP NULL
);


CREATE TABLE departments
(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR (60) NOT NULL,
    code VARCHAR(10) NOT NULL,
    status TINYINT (1) DEFAULT 1,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP NULL
);

ALTER TABLE users ADD address VARCHAR(45) AFTER name;

CREATE TABLE department_users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT NOT NULL,
    department_id INT NOT NULL,
    hire_date DATE NOT NULL
);

ALTER TABLE department_users ADD FOREIGN KEY (user_id) REFERENCES users(id);

ALTER TABLE department_users ADD FOREIGN KEY (department_id) REFERENCES departments(id);


#seeder 
INSERT INTO users (name, address, email, password) VALUES
        (
            'Mario Didas','4025  Railroad Street- BIRMINGHAM','mariodidas@gmail.com','password'
        ),
        (
            'Petey Cruiser','1733  Columbia Road- Philadelphia','peteycruiser@gmail.com','password'
        ),
        (
            'Anna Sthesia','Pittsburgh, Pennsylvania(PA)','annasthesia@gmail.com','password'
        ),
        (
            'Paul Molive','Fordyce, Arkansas(AR)','paulmolive@gmail.com','password'
        );

# department inser

-- INSERT INTO department_users (user_id, department_id, hire_date) VALUES
--             (
--                 '1',
--                 '1',
--                 '2020-5-11'
--             );