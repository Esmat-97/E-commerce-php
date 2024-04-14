-- drop table users;
  select * from users;	


 SET SQL_SAFE_UPDATES = 0;

-- drop table products;
select * from products;



drop table messages;
select * from messages;


update users set role='admin' where user_id=1;


CREATE TABLE IF NOT EXISTS users(
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    title  VARCHAR(255),
    lname  VARCHAR(255),
    email VARCHAR(255) unique,
      password   VARCHAR(255),
      role enum ('admin','customer') default 'customer'
   );

CREATE TABLE IF NOT EXISTS products (
    product_id INT AUTO_INCREMENT PRIMARY KEY,
    product_name   VARCHAR(255)   unique,
	price     INT,
     image    VARCHAR(255),
    stock      INT , 
    user_id   int,
     FOREIGN KEY (user_id) REFERENCES users (user_id)
);


CREATE TABLE IF NOT EXISTS messages (
	title  VARCHAR(255),
	email varchar(255),
       message varchar(255) unique
);


 
