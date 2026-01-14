create database exam;

create table sharmin(id int, name varchar(100), email varchar(100));
select * from sharmin;

insert into sharmin(id, name, email) values
           (1, "SS", "ss@gmail.com"),
           (2, "SA", "sa@gmail.com"),
           (3, "AA", "aa@gmail.com"),
           (4, "CN", "cn@gmail.com");

insert into sharmin(id, name, email) values
           (0, "NC", "nc@gmail.com");
insert into sharmin(id, name, email) values
           (5, "SS", "ss1@gmail.com");


update sharmin set name = 'SSA', email = 'ssa@gmail.com' where id = 5;

create table employ(name varchar(100),dept varchar(100), salary int);
insert into employ(name, dept, salary) values ('Shuvon', 'SE', 100000), ('Sharmin', 'SQA', 90000), ('Anuska', 'SQA', 80000), ('Chahad', 'SE', 90000), ('Probal', 'SE', 85000);  
select * from employ;

select employ.dept, employ.salary, sharmin.name 
from sharmin inner join employ 
ON sharmin.id=employ.id;


alter table employ add id int;
update employ set id = 5 where name = 'Probal';
select * from employ where salary < (select avg(salary) from employ);

select * from employ;

select max(salary) from employ;
select min(salary) from employ;
select avg(salary) from employ;
select sum(salary) from employ;
select sum(salary), dept from employ group by dept;

delete from sharmin where id = 0;

select id, name as Short_Name, email from sharmin;

select * from sharmin where name LIKE 'A%';

select count(id) from sharmin where name = 'SA';           
           
select * from sharmin order by id desc;
           
select id, email from sharmin where name='SA';

select * from sharmin where id>3 or name IN ('SS', 'SA');

