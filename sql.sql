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
    index(subject),
    index(creationDate)
);

create table appStatus(
    id int not null auto_increment primary key,
    statusName varchar(255) not null unique key,
    creationDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    updateDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    index(statusName),
    index(creationDate),
    index(updateDate)
);

insert into appStatus(statusName) values('aktywny'), ('nieaktywny'), 
('zablokowany'), ('zamrożony'), ('online'), ('offline');

create table appRole(
    id int not null auto_increment primary key,
    roleName varchar(255) not null unique key,
    statusId int not null,
    creationDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    updateDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    index(roleName),
    index(statusId),
    index(creationDate),
    index(updateDate),
    FOREIGN KEY (statusId) 
        REFERENCES appStatus(id)
        ON DELETE CASCADE ON UPDATE CASCADE
);

insert into appRole(roleName, statusId) 
select 
    'uzytkownik' as roleName, 
    (select id from appStatus where statusName='aktywny');
insert into appRole(roleName, statusId) 
select 
    'klient' as roleName, 
    (select id from appStatus where statusName='aktywny');
insert into appRole(roleName, statusId) 
select 
    'reklamodawca' as roleName, 
    (select id from appStatus where statusName='aktywny');
insert into appRole(roleName, statusId) 
select 
    'autor' as roleName, 
    (select id from appStatus where statusName='aktywny');
insert into appRole(roleName, statusId) 
select 
    'edytor' as roleName, 
    (select id from appStatus where statusName='aktywny');
insert into appRole(roleName, statusId) 
select 
    'moderator' as roleName, 
    (select id from appStatus where statusName='aktywny');
insert into appRole(roleName, statusId) 
select 
    'administrator' as roleName, 
    (select id from appStatus where statusName='aktywny');

create table appUser(
    id int not null auto_increment primary key,
    username varchar(255) not null unique key,
    email varchar(255) not null unique key,
    password varchar(255) not null,
    statusId int not null,
    roleId int not null,
    creationDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    updateDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    index(id),
    index(username),
    index(email),
    index(password),
    index(statusId),
    index(roleId),
    FOREIGN KEY (statusId) 
        REFERENCES appStatus(id)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (roleId) 
        REFERENCES appRole(id)
        ON DELETE CASCADE ON UPDATE CASCADE
);