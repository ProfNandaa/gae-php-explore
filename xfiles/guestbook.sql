CREATE TABLE entries (
	guestName VARCHAR(255), 
	content VARCHAR(255),
    entryID INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(entryID)
);

INSERT INTO entries (guestName, content) values ("first guest", "hello world!");