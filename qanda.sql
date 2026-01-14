create database discuss;

create table users(
	id bigint auto_increment,
    username varchar(100),
    email varchar(100),
    password varchar(100), 
    address varchar(100)
    );

create table category(
	id bigint auto_increment key,
    name varchar(255)
);

insert into category(id, name) values (null, 'mobile'), (null, 'laptop'), (null, 'food'), (null, 'coding'), (null, 'general');
create table questions(
	id bigint auto_increment key,
    title varchar(100),
    descriptions varchar(255),
    category_id int,
    user_id int
);

create table answers(
	id int auto_increment key,
    answer varchar(255),
    question_id int, 
    user_id int
);
delete from answers where id=1;
select * from category;