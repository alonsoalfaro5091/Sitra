/* DROP TABLES */

DROP TABLE DELAYS ON DELETE CASCADE;
DROP TABLE STUDENTS ON DELETE CASCADE;
DROP TABLE CLASSES ON DELETE CASCADE;

/* CREATE TABLES */

CREATE TABLE CLASSES (
cla_id int generated always as identity primary key,
cla_year int not null,
cla_group varchar(1) not null
)

CREATE TABLE STUDENTS (
stu_id int generated always as identity primary key,
stu_names varchar(90) not null,
stu_surnames varchar(90) not null,
cla_id int references CLASSES(cla_id)
)

CREATE TABLE DELAYS (
del_id int generated always as identity primary key,
del_date date default current_date,
del_time time default current_time,
stu_id int references STUDENTS(stu_id)
)

/* INSERT INTO CLASSES */

INSERT INTO CLASSES(cla_year, cla_group) VALUES
    (1, 'A'), (1, 'B'), (1, 'C'), (1, 'D'), (1, 'E'), (1, 'F'), 
    (2, 'A'), (2, 'B'), (2, 'C'), (2, 'D'), (2, 'E'), (2, 'F'), 
    (3, 'A'), (3, 'B'), (3, 'C'), (3, 'D'), (3, 'E'), (3, 'F'), (3, 'G'),
    (4, 'A'), (4, 'B'), (4, 'C'), (4, 'D'), (4, 'E'), (4, 'F'), (4, 'G')

INSERT INTO STUDENTS(stu_names, stu_surnames, cla_id) VALUES
	('Juan Paco Pedro', 'De la Mar', 2), ('Esmino', 'Barasi', 2)

INSERT INTO DELAYS(del_date, del_time, stu_id) VALUES
	('2026-10-04', '09:30', 1), ('2026-10-04', '08:02', 2),
	('2026-10-05', '08:30', 1), ('2026-10-05', '08:15', 2)