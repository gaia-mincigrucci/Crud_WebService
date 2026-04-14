DROP DATABASE IF EXISTS crud_lato_server;
CREATE DATABASE crud_lato_server;
USE crud_lato_server;

CREATE TABLE persona ( id INT PRIMARY KEY AUTO_INCREMENT, nome VARCHAR(30) NOT NULL, cognome VARCHAR(30) NOT NULL, email VARCHAR(50) NOT NULL UNIQUE, data_nascita DATE NOT NULL);

/*
INSERT INTO persona (nome, cognome, email, data_nascita) VALUES 
('Marco', 'Rossi', 'marco.rossi@email.it', '1992-03-15'),
('Sofia', 'Bianchi', 's.bianchi@provider.com', '1988-07-22'),
('Luca', 'Ferrari', 'l.ferrari@servizio.net', '2001-11-05'),
('Giulia', 'Romano', 'giulia.romano85@webmail.it', '1985-12-30'),
('Alessandro', 'Ricci', 'ale.ricci@azienda.org', '1999-01-12');
*/
