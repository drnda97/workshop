-- create table users(
-- 	id int auto_increment primary key,
-- 	first_name varchar(50),
-- 	last_name varchar(50),
-- 	username varchar(50),
-- 	email varchar(200),
-- 	password varchar(200)
-- );
--
-- create table uploads(
-- 	id int auto_increment primary key,
-- 	file_path varchar(500),
-- 	name varchar(50),
-- 	alt varchar(200),
-- 	user_id int not null
-- );

-- select film_id, title, length from film where RAND() <= 0.01;
-- ./db_images/intel_celeronG3930.jpg

select desc_name.desc_name, desc_value.desc_value
from desc_value
join products
on desc_value.id_product = products.id
join desc_name
on desc_value.id_desc_name = desc_name.id;
