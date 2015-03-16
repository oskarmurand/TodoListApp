# Written on 14/03/2015, TodoListApp Database Schema Creation Script

# Create Database and set MySQL to use it
CREATE DATABASE TodoListApp;
USE TodoListApp;

GRANT ALL PRIVILEGES ON TodoListApp.* TO 'tasker'@'localhost' IDENTIFIED BY 'G3tTh1ngsD0ne';
GRANT ALL PRIVILEGES ON TodoListApp.* TO 'tasker'@'%' IDENTIFIED BY 'G3tTh1ngsD0ne';

# Create Users Table
CREATE TABLE users
(
userId MEDIUMINT NOT NULL AUTO_INCREMENT,
givenname VARCHAR(50),
surname VARCHAR(50),
username VARCHAR(50),
email VARCHAR(50),
password VARCHAR(100),
password_temp VARCHAR(100),
resetcode VARCHAR(100),
active BIT,
isdel BIT,
last_login TIMESTAMP,
remember_token VARCHAR(75),
created_at TIMESTAMP,
updated_at TIMESTAMP,
PRIMARY KEY (userId),
);

# Create Tasks Table
CREATE TABLE tasks
(
taskId MEDIUMINT NOT NULL AUTO_INCREMENT,
task VARCHAR(50),
isArchived BIT,
isDone BIT,
created_at TIMESTAMP,
updated_at TIMESTAMP,
PRIMARY KEY (taskId),
);

# Create Admin User
INSERT INTO users(
userId,givenname,surname,username,email,password,password_temp,resetcode,active,isdel,last_login,created_at,updated_at)
VALUES
(NULL,"Admin","istrator","admin","admin@todolistapp.local","password",NULL,NULL,1,0,NULL,NULL,NULL);
