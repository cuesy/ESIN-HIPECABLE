CREATE TABLE technician (
  id SERIAL PRIMARY KEY,
  password VARCHAR,
  name VARCHAR NOT NULL CONSTRAINT valid_name CHECK (name NOT LIKE '%[^0-9]%'),
  email VARCHAR NOT NULL CONSTRAINT valid_email CHECK ( email LIKE '%_@__%.__%') 
);

CREATE TABLE medic (
  id SERIAL PRIMARY KEY,
  password VARCHAR,
  name VARCHAR NOT NULL CONSTRAINT valid_name CHECK (name NOT LIKE '%[^0-9]%'),
  email VARCHAR NOT NULL CONSTRAINT valid_email CHECK ( email LIKE '%_@__%.__%')
);

CREATE TABLE patient (
  id SERIAL PRIMARY KEY,  
  name VARCHAR NOT NULL CONSTRAINT valid_name CHECK (name NOT LIKE '%[^0-9]%'),  
  birthday DATE,
  cc INTEGER CONSTRAINT valid_cc CHECK (cc >= 10000000 AND cc <= 99999999),
  weight NUMERIC(5,2) CONSTRAINT valid_weight CHECK (weight >= 0),
  height NUMERIC(5,2) CONSTRAINT valid_height CHECK (height >= 0)  
);

CREATE TABLE operation (
    id SERIAL PRIMARY KEY,    
    patient INTEGER REFERENCES patient(id),
    medic INTEGER REFERENCES medic(id),
    technician INTEGER REFERENCES technician(id)
);

CREATE TABLE op_data (
  id SERIAL PRIMARY KEY,
  operation INTEGER REFERENCES operation(id),
  perfusion_time TIME,
  citostatic_time TIME,
  inflow NUMERIC(5,2) CONSTRAINT valid_inflow CHECK ( inflow >= 0),
  outflow NUMERIC(5,2) CONSTRAINT valid_outflow CHECK ( outflow >= 0),
  inflow_temp NUMERIC(5,2) CONSTRAINT valid_inflow_temp CHECK ( inflow_temp >= 0),
  pelvic_temp NUMERIC(5,2) CONSTRAINT valid_pelvic_temp CHECK ( pelvic_temp >= 0),
  subdiafragmatic_temp NUMERIC(5,2) CONSTRAINT valid_subdiafragmatic_temp CHECK ( subdiafragmatic_temp >= 0),
  exchanger_temp NUMERIC(5,2) CONSTRAINT valid_exchanger_temp CHECK ( exchanger_temp >= 0),
  citostatic NUMERIC(5,2) CONSTRAINT valid_citostatic CHECK ( citostatic >= 0)  
);


INSERT INTO technician VALUES (DEFAULT, '123456','Pedro Dias', 'hjjsa@hotmail.com');
INSERT INTO technician VALUES (DEFAULT, '123456', 'Ana Costa', 'asdasdas@hotmail.com');
INSERT INTO technician VALUES (DEFAULT, '123456', 'Pedro Costa', 'asd@kdaslsa.com');
INSERT INTO technician VALUES (DEFAULT, '123456', 'Ana Dias', 'aaksasa@gmail.com');

INSERT INTO medic VALUES (DEFAULT, '123456','Dr. Dias', 'PEDROFILIPE@HOTMAIL.COM');
INSERT INTO medic VALUES (DEFAULT, '123456','Dra. Ana', 'JASAJDA@hotmail.com');
INSERT INTO medic VALUES (DEFAULT, '123456','Dra. Ana Chiquitita', 'asdasd@hotmail.com');

INSERT INTO patient VALUES (DEFAULT, 'Engenheira Ana', DATE'1920-02-15', 14572710, 82, 170);
INSERT INTO patient VALUES (DEFAULT, 'Engenheiro Pedro', DATE'1950-02-15', 12542710, 150, 250);
INSERT INTO patient VALUES (DEFAULT, 'Ana', DATE'1997-02-15', 12345678, 50, 160);
INSERT INTO patient VALUES (DEFAULT, 'Pedro', DATE'2001-02-15', 98745632, 65, 185);
INSERT INTO patient VALUES (DEFAULT, 'Filipe', DATE'3652-02-15', 35741598, 87, 168);

INSERT INTO operation VALUES (DEFAULT, 1, 1, 3);

INSERT INTO op_data VALUES (DEFAULT, 1, TIME'4:05', TIME'4:00', 5, 10, 55.3, 42, 65, 75.8, 5.3 );
INSERT INTO op_data VALUES (DEFAULT, 1, TIME'5:05', TIME'4:00', 5, 10, 55.3, 42, 65, 75.8, 5.3 );
INSERT INTO op_data VALUES (DEFAULT, 1, TIME'6:05', TIME'4:00', 5, 10, 55.3, 42, 65, 75.8, 5.3 );
INSERT INTO op_data VALUES (DEFAULT, 1, TIME'7:05', TIME'4:00', 5, 10, 55.3, 42, 65, 75.8, 5.3 );
INSERT INTO op_data VALUES (DEFAULT, 1, TIME'8:05', TIME'4:00', 5, 10, 55.3, 42, 65, 75.8, 5.3 );
INSERT INTO op_data VALUES (DEFAULT, 1, TIME'9:05', TIME'4:00', 5, 10, 55.3, 42, 65, 75.8, 5.3 );
INSERT INTO op_data VALUES (DEFAULT, 1, TIME'10:05', TIME'4:00', 5, 10, 55.3, 42, 65, 75.8, 5.3 );
