CREATE TABLE `astrosabyasachi`.`tbl_users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `gender` VARCHAR(10) NOT NULL,
  `dob` DATETIME NOT NULL,
  `pob` VARCHAR(100) NOT NULL,
  `email` VARCHAR(75) NOT NULL,
  `password` VARCHAR(100) NOT NULL,
  `secret_question` VARCHAR(200) NOT NULL,
  `secret_answer` VARCHAR(100) NOT NULL,
  `user_type` VARCHAR(1) NOT NULL,
  `COL1` VARCHAR(45) NULL,
  `COL2` VARCHAR(45) NULL,
  `COL3` VARCHAR(45) NULL,
  `COL4` VARCHAR(45) NULL,
  PRIMARY KEY (`id`, `email`));
  
  CREATE TABLE `astrosabyasachi`.`tbl_questionnaire` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `userId` INT NULL,
  `moderatorId` INT NULL,
  `question` VARCHAR(100) NULL,
  `answer` VARCHAR(120) NULL,
  `isAnswered` VARCHAR(3) NULL,
  `questionDateTime` DATETIME NULL,
  `answerDateTime` DATETIME NULL,
  `lastUpdatedDateTime` DATETIME NULL,
  `LastUpdatedBy` INT NULL,
  `DB_COL1` VARCHAR(45) NULL,
  `DB_COL2` VARCHAR(45) NULL,
  `DB_COL3` VARCHAR(45) NULL,
  `DB_COL4` VARCHAR(45) NULL,
  PRIMARY KEY (`id`));