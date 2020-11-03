drop database if exists verkkokauppa;
create database verkkokauppa;
use verkkokauppa;

create table(
    id int primary key auto_increment,
    nimi varchar(50) not NULL unique
);

insert into tuoteryhma (nimi) values ('asusteet');
insert into tuoteryhma (nimi) values ('urheiluvälineet');
insert into tuoteryhma (nimi) values ('puhelimet');