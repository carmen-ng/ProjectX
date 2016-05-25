Create database recruiter2;

CREATE TABLE district (
	districtID INT(11) NOT NULL AUTO_INCREMENT,
	districtName VARCHAR(25) NOT NULL,
	districtCoordinator CHAR(20) NOT NULL,
	PRIMARY KEY(districtID));

CREATE TABLE whyDisqualify (
	whyDisqualifyID INT NOT NULL AUTO_INCREMENT,
	explanation CHAR(100) NOT NULL,
	PRIMARY KEY(whyDisqualifyID));

CREATE TABLE nominator (
	nominatorID INT(11) NOT NULL AUTO_INCREMENT,
	firstName VARCHAR(25) NOT NULL,
	lastName VARCHAR(25) NOT NULL,
	writingNo VARCHAR(8),
	abc BOOLEAN NOT NULL DEFAULT '1',
	PRIMARY KEY(nominatorID));


CREATE TABLE rec

(
	recID int(11) NOT NULL AUTO_INCREMENT,
	firstName varchar(25) NOT NULL,
	middleInitial char(1),
	lastName varchar(25) NOT NULL,
	streetAddress varchar(100) NOT NULL,
    streetAddress2 varchar(50),
	city varchar(50) NOT NULL,
	state varchar(100) NOT NULL,
    zip varchar(12) NOT NULL,
    phone varchar(20) NOT NULL,
    secondPhone varchar(20), 
    email varchar(35) NOT NULL,
    secondEmail VARCHAR(35),
	resume CHAR(15) NOT NULL,
	coverLetter CHAR(10),
	firstLang VARCHAR(15) NOT NULL,
	ged TINYINT(1) NOT NULL DEFAULT '1',
	process VARCHAR(25) NOT NULL,
	districtID INT,
	sourceOfLead CHAR(20) NOT NULL,
	intern TINYINT(1) NOT NULL DEFAULT '1',
	disqualified BOOLEAN NOT NULL DEFAULT '1',
	noNominator BOOLEAN NOT NULL DEFAULT '1',
	whyDisqualifyID INT(11),
	nominatorID INT(11),
	abc BOOLEAN NOT NULL DEFAULT '1',
	positionName VARCHAR(50) NOT NULL,
	resumeFileName VARCHAR(50),
    PRIMARY KEY (recID)
);

CREATE TABLE language
(
    languageID int(3) NOT NULL AUTO_INCREMENT,
    languageName varchar(100) NOT NULL,
    PRIMARY KEY (languageID)
);

CREATE TABLE reclanguage
(
    recID int(6) NOT NULL,
    langID int(3) NOT NULL , 
    proficiency varchar(20) NOT NULL,
    priority int(11),  
    PRIMARY KEY (recID,langID)
);

CREATE TABLE license
(
    licenseID int(11) NOT NULL,
    licenseName varchar(50) NOT NULL,
    PRIMARY KEY(licenseID));

CREATE TABLE recLicense
(
    recID int NOT NULL,
    licenseID int NOT NULL , 
    state varchar(15) NOT NULL,
    PRIMARY KEY (recID,licenseID)
);

CREATE TABLE higherEducation 
(
	heID INT(4) NOT NULL AUTO_INCREMENT ,
	degree VARCHAR(25) NOT NULL ,
	PRIMARY KEY (heID)
);

CREATE TABLE recHE (
	recID INT(6) NOT NULL ,
	heID INT(4) NOT NULL ,
	university VARCHAR(30) NOT NULL,
	gradYear VARCHAR(4) NOT NULL,
	CONSTRAINT pk_recHE PRIMARY KEY (recID,heID));


CREATE TABLE highschool (
	hsID INT(11) NOT NULL AUTO_INCREMENT,
	hsName char(30) NOT NULL,
	PRIMARY KEY(hsID));


CREATE TABLE recHighschool (
	recID INT(11) NOT NULL,
	hsID INT NOT NULL,
	gradYear VARCHAR(4) NOT NULL,
	CONSTRAINT pk_recHs PRIMARY KEY(recID, hsID));

CREATE TABLE recInterview 
(
	recID INT(6) NOT NULL,
	interviewNo INT(1) NOT NULL,
	grade CHAR(3) NOT NULL,
	interviewerName VARCHAR(30),
	interviewDate date NOT NULL,
	interviewTime time NOT NULL,
	CONSTRAINT pk_recInterview PRIMARY KEY (recID,interviewNo)
);

/*CREATE TABLE ProcessLevel 
(
	ProcessLevelID INT(2) NOT NULL AUTO_INCREMENT ,
	LevelName VARCHAR(20) NOT NULL ,
	PRIMARY KEY (ProcessLevelID)
);

*/
CREATE TABLE workExperience 
(
	experienceID INT(3) NOT NULL AUTO_INCREMENT ,
	title VARCHAR(25) NOT NULL ,

	PRIMARY KEY (experienceID)
);

CREATE TABLE recExperience 
(
	recID INT(6) NOT NULL ,
	experienceID INT(4) NOT NULL ,
	priority INT(11) NOT NULL ,
	company VARCHAR(30) NOT NULL , 
	startDate date NOT NULL,
	endDate date NOT NULL,
	CONSTRAINT pk_recExperience PRIMARY KEY (recID,experienceID)
);

CREATE TABLE positions
(
    positionID int(3) NOT NULL, 
    positionName varchar(100) NOT NULL,
    PRIMARY KEY (positionID)
);

CREATE TABLE recPositions
(
    recID int(6) NOT NULL,
    positionID int(3) NOT NULL,
    priority varchar(5) NOT NULL,
    PRIMARY KEY (recID,positionID)
);

ALTER TABLE reclanguage
ADD FOREIGN KEY (recID)
REFERENCES rec(recID);
ALTER TABLE reclanguage
ADD FOREIGN KEY (langID)
REFERENCES language(languageID);


ALTER TABLE recLicense
ADD FOREIGN KEY (recID)
REFERENCES rec(recID);
ALTER TABLE recLicense
ADD FOREIGN KEY (licenseID)
REFERENCES license(licenseID);


ALTER TABLE recPositions
ADD FOREIGN KEY (recID)
REFERENCES rec(recID);
ALTER TABLE recPositions
ADD FOREIGN KEY (positionID)
REFERENCES positions(positionID);


ALTER TABLE recExperience
ADD FOREIGN KEY (recID)
REFERENCES rec(recID);
ALTER TABLE recExperience
ADD FOREIGN KEY (experienceID)
REFERENCES workExperience(experienceID);

ALTER TABLE recInterview
ADD FOREIGN KEY (recID)
REFERENCES rec(recID);


/*ALTER TABLE rec
ADD FOREIGN KEY (processLevelID)
REFERENCES processLevel(processLevelID); */

ALTER TABLE recHE
ADD FOREIGN KEY (recID)
REFERENCES rec(recID);
ALTER TABLE recHE
ADD FOREIGN KEY (heID)
REFERENCES higherEducation(heID);


Alter TABLE rec
ADD FOREIGN KEY(districtID) REFERENCES district(districtID);
Alter TABLE rec
ADD FOREIGN KEY(whyDisqualifyID) REFERENCES whyDisqualify(whyDisqualifyID);
Alter TABLE rec
ADD FOREIGN KEY(nominatorID) REFERENCES nominator(nominatorID);


ALTER TABLE recHighschool
ADD FOREIGN KEY(recID) REFERENCES rec(recID);
ALTER TABLE recHighschool
ADD FOREIGN KEY(hsID) REFERENCES highSchool(hsID);



INSERT INTO `license`(`licenseID`, `licenseName`) VALUES ('1', 'P&C');
INSERT INTO `license`(`licenseID`, `licenseName`) VALUES ('2', 'Series 12');
INSERT INTO `license`(`licenseID`, `licenseName`) VALUES ('3', 'Health');
INSERT INTO `license`(`licenseID`, `licenseName`) VALUES ('4', 'Life');
INSERT INTO `license`(`licenseID`, `licenseName`) VALUES ('5', 'Accident');




