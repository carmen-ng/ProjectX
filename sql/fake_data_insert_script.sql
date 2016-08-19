-- SCRIPT TO INSERT FAKE DATA TO THE DATABASE

USE recruiter2;

-- district

INSERT INTO district (`districtName`) VALUES ('First District');
INSERT INTO district (`districtName`) VALUES ('Second District');
INSERT INTO district (`districtName`) VALUES ('Third District');

-- positions

INSERT INTO positions (`positionID`, `positionName`) VALUES (1,'Intern');
INSERT INTO positions (`positionID`, `positionName`) VALUES (2,'Supervisor');

-- accessLevel

INSERT INTO accessLevel VALUES (NULL, 'Full Access', 'Access to all the content available in the server');
INSERT INTO accessLevel VALUES (NULL, 'District Access', 'Access to the content related to the user\'s district');
INSERT INTO accessLevel VALUES (NULL, 'Limited Supervisor Access', 'Access to the content related to the user\'s supervisor');

-- users

INSERT INTO users VALUES (NULL, 'user', '54de7f606f2523cba8efac173fab42fb7f59d56ceff974c8fdb7342cf2cfe345');

-- whyDisquilify

INSERT INTO whyDisqualify (`explanation`) VALUES ('Do not fill requirements');
INSERT INTO whyDisqualify (`explanation`) VALUES ('Is not available');

-- nominator

INSERT INTO nominator( `firstName`, `lastName`, `writingNo`) VALUES ('Russell', 'Stanberry' ,1);
INSERT INTO nominator( `firstName`, `lastName`, `writingNo`) VALUES ('Jackie', 'Cortes' ,2);

-- rec

INSERT INTO rec (`firstName`, `middleInitial`, `lastName`, `streetAddress`, `streetAddress2`, `city`, `state`, `zip`, `phone`, `secondPhone`, `email`, `secondEmail`, `resume`, `coverLetter`, `firstLang`, `ged`, `process`, `districtID`, `sourceOfLeadID`, `intern`, `disqualified`, `whyDisqualifyID`, `nominatorID`, `positionName`, `resumeFileName`) values ('eros', 'F', 'Cole', 'Londonderry', 'Bashford', 'Toledo', 'Ohio', '43699', '1-(419)831-5612', '1-(585)121-4858', 'mcole0@adobe.com', 'mcole0@bbb.org', 'hac', 'in', 'justo', 1, '1st Interview', 1, 'sapien',1, 1, 1, 1, 'Intern', 'resume1.pdf');
INSERT INTO rec (`firstName`, `middleInitial`, `lastName`, `streetAddress`, `streetAddress2`, `city`, `state`, `zip`, `phone`, `secondPhone`, `email`, `secondEmail`, `resume`, `coverLetter`, `firstLang`, `ged`, `process`, `districtID`, `sourceOfLeadID`, `intern`, `disqualified`, `whyDisqualifyID`, `nominatorID`, `positionName`, `resumeFileName`) values ('integer', 'F', 'Powell', 'Dayton', 'Butterfield', 'San Diego', 'California', '92165', '1-(619)815-0859', '1-(562)995-1132', 'rpowell1@ed.gov', 'rpowell1@salon.com', 'eros', 'in', 'lobortis', 2, '1st Interview',1, 'elementum', 1, 1, 1, 1, 'Intern', 'resume2.pdf');
INSERT INTO rec (`firstName`, `middleInitial`, `lastName`, `streetAddress`, `streetAddress2`, `city`, `state`, `zip`, `phone`, `secondPhone`, `email`, `secondEmail`, `resume`, `coverLetter`, `firstLang`, `ged`, `process`, `districtID`, `sourceOfLeadID`, `intern`, `disqualified`, `whyDisqualifyID`, `nominatorID`, `positionName`, `resumeFileName`) values ('erat', 'F', 'Moore', 'Cherokee', 'Charing Cross', 'Fresno', 'California', '93726', '1-(559)338-0502', '1-(408)801-8994', 'smoore2@typepad.com', 'smoore2@artisteer.com', 'luctus', 'aliquam', 'dolor',1, '1st Interview', 1, 'rutrum', 1, 1, 1, 1, 'Intern', 'resume3.pdf');
INSERT INTO rec (`firstName`, `middleInitial`, `lastName`, `streetAddress`, `streetAddress2`, `city`, `state`, `zip`, `phone`, `secondPhone`, `email`, `secondEmail`, `resume`, `coverLetter`, `firstLang`, `ged`, `process`, `districtID`, `sourceOfLeadID`, `intern`, `disqualified`, `whyDisqualifyID`, `nominatorID`, `positionName`, `resumeFileName`) values ('eu', 'F', 'Stephens', 'Kinsman', '8th', 'San Rafael', 'California', '94913', '1-(415)386-0055', '1-(619)835-8038', 'astephens3@mysql.com', 'astephens3@pagesperso-orange.fr', 'amet', 'sed', 'volutpat',1, '1st Interview', 1, 'nullam', 1, 1, 1, 1, 'Intern', 'resume4.pdf');
INSERT INTO rec (`firstName`, `middleInitial`, `lastName`, `streetAddress`, `streetAddress2`, `city`, `state`, `zip`, `phone`, `secondPhone`, `email`, `secondEmail`, `resume`, `coverLetter`, `firstLang`, `ged`, `process`, `districtID`, `sourceOfLeadID`, `intern`, `disqualified`, `whyDisqualifyID`, `nominatorID`, `positionName`, `resumeFileName`) values ('nisi', 'F', 'Gonzalez', 'Blackbird', 'American Ash', 'Sacramento', 'California', '95865', '1-(916)504-4523', '1-(915)907-9365', 'mgonzalez4@ibm.com', 'mgonzalez4@oaic.gov.au', 'sociis', 'diam', 'consequat',1, '2nd Interview', 1, 'nulla', 1, 1, 1, 1, 'Intern', 'resume5.pdf');
INSERT INTO rec (`firstName`, `middleInitial`, `lastName`, `streetAddress`, `streetAddress2`, `city`, `state`, `zip`, `phone`, `secondPhone`, `email`, `secondEmail`, `resume`, `coverLetter`, `firstLang`, `ged`, `process`, `districtID`, `sourceOfLeadID`, `intern`, `disqualified`, `whyDisqualifyID`, `nominatorID`, `positionName`, `resumeFileName`) values ('maecenas', 'F', 'Crawford', 'Corry', 'Steensland', 'Boulder', 'Colorado', '80328', '1-(303)417-0658', '1-(843)295-6487', 'dcrawford5@ow.ly', 'dcrawford5@123-reg.co.uk', 'fermentum', 'quisque', 'feugiat',1, '1st Interview', 1, 'in', 1, 1, 1, 1, 'Intern', 'resume6.pdf');

-- workExperience
INSERT INTO workExperience (`experienceID`,`title`) VALUES (1,'Recruiter Manager');

-- recExperience

INSERT INTO recExperience (`recID`, `experienceID`, `priority`, `company`, `startDate`,`endDate`) VALUES (1, 1, 1, 'Google', '11/1/2015', '8/6/2015');
INSERT INTO recExperience (`recID`, `experienceID`, `priority`, `company`, `startDate`,`endDate`) VALUES (2, 1, 1, 'Google', '11/1/2015', '8/6/2015');
INSERT INTO recExperience (`recID`, `experienceID`, `priority`, `company`, `startDate`,`endDate`) VALUES (3, 1, 1, 'Google', '11/1/2015', '8/6/2015');

-- recPositions

INSERT INTO recPositions (`recID`,`positionID`,`priority`) VALUES (1, 1, 'High');
INSERT INTO recPositions (`recID`,`positionID`,`priority`) VALUES (2, 1, 'Normal');
INSERT INTO recPositions (`recID`,`positionID`,`priority`) VALUES (3, 1, 'Low');


-- users_x_accessLevel

INSERT INTO users_x_accessLevel (`userID`,`accessLevelID`) VALUES (1,2);

-- users_x_district

INSERT INTO users_x_district (`userID`,`districtID`) VALUES (1,1);
INSERT INTO users_x_district (`userID`,`districtID`) VALUES (1,2);
INSERT INTO users_x_district (`userID`,`districtID`) VALUES (1,3);

-- person

INSERT INTO person (`userID`, `firstName`, `lastName`, `gender`, `position`) VALUES (1, 'John', 'Doe', 'M', 'Recruiter Manager');

-- users_x_person

INSERT INTO users_x_person (`personID`, `userID`) VALUES (1,1);



