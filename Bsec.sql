create database bsec;

create table bus (routno int, source varchar(100), dest varchar(100));
create table pass (pid int, pname varchar(100), dob varchar(100), gender varchar(100));
create table bticket(pid int, routno int, jdate varchar(100), seatno int);

insert into bus (routno, source, dest) values 
(1, 'CTG', 'Dhaka'),
(2, 'Dhaka', 'CTG');

insert into pass (pid, pname, dob, gender) values 
(1, 'Mim', '2005-05-05', 'Female'),
(2, 'HaMim', '2004-05-05', 'Male');

insert into bticket(pid, routno, jdate, seatno) values
(1, 2, '2025-01-02', 11),
(2, 1, '2025-01-03', 12);

select pass.pname from pass inner join bticket on pass.pid=bticket.pid where bticket.jdate>'2025-01-01';

select * from bus order by dest asc; 

select * from bticket;

select pass.pname from pass inner join bticket on pass.pid=bticket.pid where pass.gender = 'Female' and bticket.seatno>10;

select pname from pass where pname like '%im';

select pass.pname, bus.source, bus.dest from pass inner join bticket on pass.pid=bticket.pid inner join bus on bticket.routno=bus.routno; 

select pass.pname, bticket.seatno from pass inner join bticket on pass.pid=bticket.pid where seatno = (select max(seatno) from bticket); 