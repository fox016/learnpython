DROP TABLE IF EXISTS challenge_sets;
CREATE TABLE IF NOT EXISTS challenge_sets
(
	id VARCHAR(20),
	name VARCHAR(200) NOT NULL,
	position INTEGER NOT NULL,
	created_date_time DATETIME NOT NULL,
	updated_date_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY(id)
) ENGINE=InnoDB;

INSERT INTO challenge_sets VALUES ('math', 'Math', 1, now(), now());
INSERT INTO challenge_sets VALUES ('puzzle', 'Puzzle Game', 2, now(), now());
