CREATE TABLE Users(
   Id INT AUTO_INCREMENT,
   nom VARCHAR(50) ,
   prenom VARCHAR(50) ,
   email VARCHAR(100)  NOT NULL,
   password VARCHAR(255)  NOT NULL,
   PRIMARY KEY(Id)
);

CREATE TABLE Priority(
   Id INT AUTO_INCREMENT,
   name VARCHAR(100)  NOT NULL,
   PRIMARY KEY(Id)
);

CREATE TABLE Category(
   Id INT AUTO_INCREMENT,
   name TEXT NOT NULL,
   PRIMARY KEY(Id)
);

CREATE TABLE Task(
   Id INT AUTO_INCREMENT,
   title VARCHAR(255) ,
   description VARCHAR(255)  NOT NULL,
   deadline DATE NOT NULL,
   Id_1 INT NOT NULL,
   Id_2 INT NOT NULL,
   PRIMARY KEY(Id),
   FOREIGN KEY(Id_1) REFERENCES Priority(Id),
   FOREIGN KEY(Id_2) REFERENCES Users(Id)
);

CREATE TABLE relationTaskCategory(
   taskId INT,
   categoryId INT,
   PRIMARY KEY(taskId, categoryId),
   FOREIGN KEY(taskId) REFERENCES Task(Id),
   FOREIGN KEY(categoryId) REFERENCES Category(Id)
);