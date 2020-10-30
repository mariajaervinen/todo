drop database if EXISTS todo;

create database todo;

use todo;

create table task(
    id int primary key auto_increment,
    title varchar(255) not null,
    added timestamp DEFAULT CURRENT_TIMESTAMP,
    description text
)