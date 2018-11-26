CREATE TABLE category (
  id SERIAL PRIMARY KEY,
  name VARCHAR NOT NULL
);

CREATE TABLE product (
  id SERIAL PRIMARY KEY,
  name VARCHAR NOT NULL,
  price NUMERIC(5,2) NOT NULL,
  cat_id INTEGER REFERENCES category NOT NULL
);

CREATE TABLE users (
  username VARCHAR PRIMARY KEY,
  password VARCHAR
);

INSERT INTO category VALUES (DEFAULT, 'Fruits');

INSERT INTO product VALUES (DEFAULT, 'Apples', '9.99', 1);
INSERT INTO product VALUES (DEFAULT, 'Oranges', '4.99', 1);
INSERT INTO product VALUES (DEFAULT, 'Pears', '3.99', 1);
INSERT INTO product VALUES (DEFAULT, 'Pineapples', '2.99', 1);
INSERT INTO product VALUES (DEFAULT, 'Bananas', '7.99', 1); 

INSERT INTO category VALUES (DEFAULT, 'Clothes');

INSERT INTO product VALUES (DEFAULT, 'Shirt', '3.99', 2);
INSERT INTO product VALUES (DEFAULT, 'Jeans', '12.99', 2);
INSERT INTO product VALUES (DEFAULT, 'Sweat Shirt', '9.99', 2);
