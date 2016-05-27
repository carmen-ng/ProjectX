CREATE TABLE users (
    userID INT(11) NOT NULL AUTO_INCREMENT,
    username VARCHAR(25) NOT NULL,
    passwd VARCHAR(32) NOT NULL,
    PRIMARY KEY (userID),
    UNIQUE (username)
);


CREATE TABLE accessLevel (
    accessLevelID INT NOT NULL AUTO_INCREMENT,
    accessLevelName VARCHAR(25) NOT NULL,
    accessLevelDescription VARCHAR(75),
    PRIMARY KEY (accessLevelID)
);

CREATE TABLE users_x_district (
    users_x_district_ID INT(11) NOT NULL AUTO_INCREMENT,
    userID INT(11),
    districtID INT(11),
    PRIMARY KEY (users_x_district_ID),
    FOREIGN KEY (userID) REFERENCES users(userID),
    FOREIGN KEY (districtID) REFERENCES district(districtID)
);


CREATE TABLE users_x_accessLevel (
    users_x_accessLevel_ID INT(11) NOT NULL AUTO_INCREMENT,
    userID INT(11),
    accessLevelID INT(11),
    PRIMARY KEY (users_x_accessLevel_ID),
    FOREIGN KEY (userID) REFERENCES users(userID),
    FOREIGN KEY (accessLevelID) REFERENCES accessLevel(accessLevelID)
);


INSERT INTO users VALUES (NULL, 'Test_guy', '54de7f606f2523cba8efac173fab42fb7f59d56ceff974c8fdb7342cf2cfe345');

INSERT INTO accessLevel VALUES (NULL, 'Full Access', 'Access to all the content available in the server');
INSERT INTO accessLevel VALUES (NULL, 'District Access', 'Access to the content related to the user\'s district');
INSERT INTO accessLevel VALUES (NULL, 'Limited Supervisor Access', 'Access to the content related to the user\'s supervisor');