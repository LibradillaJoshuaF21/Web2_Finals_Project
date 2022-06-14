create database starbucks;

use starbucks;

create table consumables(
	conID int not null primary key,
    conName varchar(255) not null,
    conType varchar(255) not null
);

create table productlist(
	prodID int not null primary key,
    prodName varchar(255) not null,
    prodBasePrice float not null,
    conID int,
    foreign key (conID) references consumables(conID)
);

select * from consumables;
select * from productlist;

/*Consumables*/
insert into consumables
values("1","Tea","beverage");
insert into consumables
values("2","Frappe","beverage");
insert into consumables
values("3","Coffee","beverage");
insert into consumables
values("4","Salad","food");
insert into consumables
values("5","Wrap","food");
insert into consumables
values("6","Cake","food");

/*Product List*/
insert into productlist
values("1","Black Tea Latte","160","1");
insert into productlist
values("2","Green Tea Latte","175","1");
insert into productlist
values("3","Iced Shaken Black Tea","145","1");
insert into productlist
values("4","Iced Shaken Green Tea","145","1");

insert into productlist
values("5","White Chocolate","180","2");
insert into productlist
values("6","Caramel","175","2");
insert into productlist
values("7","Mocha","175","2");
insert into productlist
values("8","Java Chip","190","2");

insert into productlist
values("9","Hot Brewed Coffee","130","3");
insert into productlist
values("10","Caffe Misto","130","3");
insert into productlist
values("11","Cold Brew","170","3");
insert into productlist
values("12","Vanilla Sweet Cream
Cold Bew","190","3");

insert into productlist
values("13","Roasted Vegtable Frittata","165","4");

insert into productlist
values("14","Bacon, Sausage & Egg Wrap","160","5");
insert into productlist
values("15","Spinach, Feta & Egg White Wrap","165","5");

insert into productlist
values("16","Calamansi Cheesecake","215","6");
insert into productlist
values("17","Cherry Blossom Cake","215","6");