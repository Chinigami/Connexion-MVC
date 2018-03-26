DROP TABLE IF EXISTS mvc_users;
DROP TABLE IF EXISTS mvc_groups;

CREATE TABLE mvc_users (
    id INT PRIMARY KEY,
    login VARCHAR(20),
    pw VARCHAR(64),
    username VARCHAR(20),
    usergroup VARCHAR(20)
) DEFAULT CHARSET=utf8;

INSERT INTO mvc_users VALUES
(1, 'alex', SHA2('at', 256), 'Alex Terrieur', 1),
(2, 'bea', SHA2('bt', 256), 'Bea Titude', 2),
(3, 'chris', SHA2('ct', 256), 'Chris Tale', 3),
(4, 'dick', SHA2('dt', 256), 'Dick Taphone', 3),
(5, 'eva', SHA2('et', 256), 'Eva Troloin', 3),
(6, 'flo', SHA2('ft', 256), 'Flo Taison', 2),
(7, 'guy', SHA2('gt', 256), 'Guy Tare', 3);

CREATE TABLE mvc_groups (
    id INT PRIMARY KEY,
    shortname VARCHAR(10),
    longname VARCHAR(20)
) DEFAULT CHARSET=utf8;

INSERT INTO mvc_groups VALUES
(1, 'admin', 'administrateur'),
(2, 'resp', 'responsable'),
(3, 'cont', 'contributeur');