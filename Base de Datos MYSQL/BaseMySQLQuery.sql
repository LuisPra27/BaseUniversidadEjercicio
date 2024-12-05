CREATE DATABASE `baseuniversidad` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL
);
INSERT INTO usuarios (username, password) VALUES 
('luist', 'luis123'),
('luisp', 'luis123'),
('jamileth123', 'jamileth123'),
('jostinb', 'jostin123'),
('mariab', 'maria123');

select * from usuarios;

CREATE TABLE alumnos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50),
    apellido VARCHAR(50),
    fecha_nacimiento DATE,
    direccion VARCHAR(100),
    nota DECIMAL(5,2)
);

INSERT INTO alumnos (nombre, apellido, fecha_nacimiento, direccion, nota) VALUES
('Juan', 'Pérez', '1999-03-15', 'Calle Falsa 123, Ciudad XYZ', 7.85),
('Ana', 'Gómez', '2000-07-22', 'Avenida Libertad 45, Ciudad ABC', 9.10),
('Carlos', 'López', '1998-11-30', 'Calle Real 78, Ciudad DEF', 6.55),
('Maria', 'Martínez', '2001-02-17', 'Calle Sol 9, Ciudad GHI', 8.75),
('José', 'Sánchez', '1999-05-10', 'Calle Larga 55, Ciudad JKL', 7.20),
('Laura', 'Rodríguez', '2000-08-29', 'Calle del Río 21, Ciudad MNO', 9.30),
('Pedro', 'Hernández', '1998-12-25', 'Calle Azul 99, Ciudad PQR', 6.85),
('Elena', 'García', '2001-03-03', 'Calle Nueva 12, Ciudad STU', 7.95),
('David', 'Díaz', '1999-10-11', 'Avenida Central 11, Ciudad VWX', 8.40),
('Sofia', 'Vázquez', '2000-04-14', 'Calle Mayor 34, Ciudad YZA', 9.50);
select * from alumnos;
