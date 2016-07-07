/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  adrian
 * Created: 2016-07-06
 */

create table newsletter(
    id int not null auto_increment primary key,
    email varchar(255) not null unique key,
    creationDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    index(id),
    index(email),
    index(creationDate)
);

create table contact(
    id int not null auto_increment primary key,
    username varchar(255) not null,
    email varchar(255) not null,
    subject varchar(255) not null,
    message text not null,
    creationDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    index(id),
    index(email),
    index(username),
    index(subject)
);