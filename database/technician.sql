CREATE TABLE usersGen (
id SERIAL PRIMARY KEY,  
name VARCHAR NOT NULL CONSTRAINT valid_name CHECK (name NOT LIKE '%[^0-9]%'),
password VARCHAR,
email VARCHAR NOT NULL UNIQUE CONSTRAINT valid_email CHECK ( email LIKE '%_@__%.__%'), 
validated BOOLEAN
);

CREATE TABLE technicians (
id INTEGER PRIMARY KEY REFERENCES usersGen(id)
);

CREATE TABLE medics (
  id INTEGER PRIMARY KEY REFERENCES usersGen(id)
);


CREATE TABLE patients (
  id SERIAL PRIMARY KEY,  
  name VARCHAR NOT NULL CONSTRAINT valid_name CHECK (name NOT LIKE '%[^0-9]%'),  
  birthday DATE,
  cc INTEGER CONSTRAINT valid_cc CHECK (cc >= 10000000 AND cc <= 99999999),
  weight NUMERIC(5,2) CONSTRAINT valid_weight CHECK (weight >= 0),
  height NUMERIC(5,2) CONSTRAINT valid_height CHECK (height >= 0),
  email VARCHAR NULL CONSTRAINT valid_email CHECK ((email LIKE '%_@__%.__%') OR (email IS NULL)),
  medic_id INTEGER REFERENCES medics(id),
  notes TEXT
);


CREATE TABLE operations (
    id SERIAL PRIMARY KEY,
    patient_id INTEGER REFERENCES patients(id),
    medic_id INTEGER REFERENCES medics(id),
    technician_id INTEGER REFERENCES technicians(id),
    date TIMESTAMP WITHOUT TIME ZONE,
    notes TEXT
    );

CREATE TABLE op_data (
  id SERIAL PRIMARY KEY,
  operation INTEGER REFERENCES operations(id),
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


INSERT INTO usersGen VALUES (DEFAULT, 'Pedro Dias', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'hjjsa@hotmail.com',TRUE);
INSERT INTO medics VALUES(1);
INSERT INTO usersGen VALUES (DEFAULT, 'Ana Costa', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'asdasdas@hotmail.com', TRUE);
INSERT INTO medics VALUES(2);
INSERT INTO usersGen VALUES (DEFAULT, 'Pedro Costa', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'asd@kdaslsa.com',TRUE);
INSERT INTO medics VALUES(3);
INSERT INTO usersGen VALUES (DEFAULT, 'Ana Dias', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'aaksasa@gmail.com',TRUE);
INSERT INTO medics VALUES(4);

INSERT INTO usersGen VALUES (DEFAULT, 'Dr. Dias', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'PEDROFILIPE@HOTMAIL.COM',TRUE);
INSERT INTO technicians VALUES(5);
INSERT INTO usersGen VALUES (DEFAULT, 'Dra. Ana', '7c4a8d09ca3762af61e59520943dc26494f8941b','JASAJDA@hotmail.com',TRUE);
INSERT INTO technicians VALUES(6);
INSERT INTO usersGen VALUES (DEFAULT, 'Dra. Ana Chiquitita', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'asdasd@hotmail.com',TRUE);
INSERT INTO technicians VALUES(7);

INSERT INTO patients VALUES (DEFAULT, 'Engenheira Ana', DATE'1920-02-15', 14572710, 82, 170,'PEDROFILIPE@HOTMAIL.COM', 1);
INSERT INTO patients VALUES (DEFAULT, 'Engenheiro Pedro', DATE'1950-02-15', 12542710, 150, 250, 'PEDROFILIPE@HOTMAIL.COM', 1);
INSERT INTO patients VALUES (DEFAULT, 'Ana', DATE'1997-02-15', 12345678, 50, 160, 'PEDROFILIPE@HOTMAIL.COM', 1);
INSERT INTO patients VALUES (DEFAULT, 'Pedro', DATE'2001-02-15', 98745632, 65, 185, 'PEDROFILIPE@HOTMAIL.COM', 1);
INSERT INTO patients VALUES (DEFAULT, 'Filipe', DATE'3652-02-15', 35741598, 87, 168, 'PEDROFILIPE@HOTMAIL.COM', 2);

INSERT INTO operations VALUES (DEFAULT, 1, 1, 5, '2018-11-27 10:30:10');

INSERT INTO op_data VALUES (DEFAULT, 1, TIME'4:05', TIME'4:00', 5, 10, 55.3, 42, 65, 75.8, 5.3 );
INSERT INTO op_data VALUES (DEFAULT, 1, TIME'5:05', TIME'4:00', 5, 10, 55.3, 42, 65, 75.8, 5.3 );
INSERT INTO op_data VALUES (DEFAULT, 1, TIME'6:05', TIME'4:00', 5, 10, 55.3, 42, 65, 75.8, 5.3 );
INSERT INTO op_data VALUES (DEFAULT, 1, TIME'7:05', TIME'4:00', 5, 10, 55.3, 42, 65, 75.8, 5.3 );
INSERT INTO op_data VALUES (DEFAULT, 1, TIME'8:05', TIME'4:00', 5, 10, 55.3, 42, 65, 75.8, 5.3 );
INSERT INTO op_data VALUES (DEFAULT, 1, TIME'9:05', TIME'4:00', 5, 10, 55.3, 42, 65, 75.8, 5.3 );
INSERT INTO op_data VALUES (DEFAULT, 1, TIME'10:05', TIME'4:00', 5, 10, 55.3, 42, 65, 75.8, 5.3 );
