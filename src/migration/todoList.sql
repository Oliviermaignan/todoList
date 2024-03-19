CREATE TABLE td_users(
   Id INT AUTO_INCREMENT,
   nom VARCHAR(50) ,
   prenom VARCHAR(50) ,
   email VARCHAR(100)  NOT NULL,
   password VARCHAR(255)  NOT NULL,
   PRIMARY KEY(Id)
);

CREATE TABLE td_priority(
   Id INT AUTO_INCREMENT,
   name VARCHAR(100)  NOT NULL,
   PRIMARY KEY(Id)
);

CREATE TABLE td_category(
   Id INT AUTO_INCREMENT,
   name TEXT NOT NULL,
   PRIMARY KEY(Id)
);

CREATE TABLE td_task(
   Id INT AUTO_INCREMENT,
   title VARCHAR(255) ,
   description VARCHAR(255)  NOT NULL,
   deadline DATE NOT NULL,
   priority_Id INT NOT NULL,
   users_Id INT NOT NULL,
   PRIMARY KEY(Id),
   FOREIGN KEY(priority_Id) REFERENCES Priority(Id),
   FOREIGN KEY(users_Id) REFERENCES Users(Id)
);

CREATE TABLE td_relationTaskCategory(
   taskId INT,
   categoryId INT,
   PRIMARY KEY(taskId, categoryId),
   FOREIGN KEY(taskId) REFERENCES Task(Id),
   FOREIGN KEY(categoryId) REFERENCES Category(Id)
);