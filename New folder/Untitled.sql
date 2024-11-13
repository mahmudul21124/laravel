CREATE TABLE `attendance` (
  `aid` int(10) PRIMARY KEY,
  `sid` int(10),
  `date` date
);

CREATE TABLE `attendancereport` (
  `aid` int(20),
  `sid` varchar(50),
  `status` varchar(50),
  PRIMARY KEY (`aid`, `sid`)
);

CREATE TABLE `classroom` (
  `hno` varchar(50) PRIMARY KEY,
  `title` varchar(50),
  `location` varchar(50),
  `capacity` int(3)
);

CREATE TABLE `exam` (
  `id` int(11) PRIMARY KEY,
  `subject` varchar(50),
  `teacher` varchar(50),
  `classroom` varchar(50),
  `date` date,
  `stime` time,
  `etime` time
);

CREATE TABLE `examresult` (
  `exam` int(11),
  `student` varchar(50),
  `marks` int(10),
  `grade` varchar(10),
  PRIMARY KEY (`exam`, `student`)
);

CREATE TABLE `notice` (
  `id` int(11) PRIMARY KEY,
  `notice` varchar(1500),
  `odience` varchar(100),
  `date` datetime
);

CREATE TABLE `parent` (
  `pid` int(11) PRIMARY KEY,
  `fname` varchar(50),
  `lname` varchar(50),
  `contact` varchar(20),
  `job` varchar(50),
  `address` varchar(250),
  `gender` varchar(25),
  `nic` varchar(50),
  `email` varchar(50) UNIQUE
);

CREATE TABLE `payment` (
  `id` int(11) PRIMARY KEY,
  `sid` varchar(30),
  `month` enum,
  `fee` varchar(20),
  `creationDate` timestamp
);

CREATE TABLE `schedule` (
  `id` int(11) PRIMARY KEY,
  `subject` varchar(50),
  `teacher` varchar(50),
  `day` varchar(50),
  `stime` time,
  `class` varchar(50),
  `etime` time
);

CREATE TABLE `student` (
  `sid` varchar(25) PRIMARY KEY,
  `fname` varchar(50),
  `lname` varchar(50),
  `bday` date,
  `address` varchar(250),
  `parent` int(10),
  `gender` varchar(10),
  `classroom` varchar(25),
  `email` varchar(50) UNIQUE
);

CREATE TABLE `subject` (
  `sid` varchar(50) PRIMARY KEY,
  `title` varchar(200),
  `description` varchar(500)
);

CREATE TABLE `teacher` (
  `tid` varchar(50) PRIMARY KEY,
  `fname` varchar(50),
  `lname` varchar(50),
  `address` varchar(50),
  `contact` varchar(50),
  `bday` date,
  `skill` varchar(500),
  `gender` varchar(25),
  `email` varchar(50) UNIQUE
);

CREATE TABLE `user` (
  `role` varchar(50),
  `email` varchar(50) PRIMARY KEY,
  `password` varchar(50)
);

ALTER TABLE `attendance` ADD FOREIGN KEY (`aid`) REFERENCES `attendancereport` (`aid`);

ALTER TABLE `student` ADD FOREIGN KEY (`sid`) REFERENCES `attendancereport` (`sid`);

ALTER TABLE `student` ADD FOREIGN KEY (`sid`) REFERENCES `attendance` (`sid`);

ALTER TABLE `teacher` ADD FOREIGN KEY (`tid`) REFERENCES `schedule` (`teacher`);

ALTER TABLE `subject` ADD FOREIGN KEY (`sid`) REFERENCES `schedule` (`subject`);

ALTER TABLE `teacher` ADD FOREIGN KEY (`tid`) REFERENCES `exam` (`teacher`);

ALTER TABLE `subject` ADD FOREIGN KEY (`sid`) REFERENCES `exam` (`subject`);

ALTER TABLE `classroom` ADD FOREIGN KEY (`hno`) REFERENCES `exam` (`classroom`);

ALTER TABLE `student` ADD FOREIGN KEY (`sid`) REFERENCES `examresult` (`student`);

ALTER TABLE `student` ADD FOREIGN KEY (`sid`) REFERENCES `payment` (`sid`);

ALTER TABLE `student` ADD FOREIGN KEY (`email`) REFERENCES `user` (`email`);

ALTER TABLE `teacher` ADD FOREIGN KEY (`email`) REFERENCES `user` (`email`);

ALTER TABLE `parent` ADD FOREIGN KEY (`email`) REFERENCES `user` (`email`);

ALTER TABLE `parent` ADD FOREIGN KEY (`pid`) REFERENCES `student` (`parent`);

ALTER TABLE `classroom` ADD FOREIGN KEY (`hno`) REFERENCES `student` (`classroom`);
