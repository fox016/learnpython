DROP TABLE IF EXISTS challenge_sets;
CREATE TABLE IF NOT EXISTS challenge_sets
(
	id VARCHAR(20),
	name VARCHAR(200) NOT NULL,
	position INTEGER NOT NULL,
	description VARCHAR(4000) NOT NULL,
	created_date_time DATETIME NOT NULL,
	updated_date_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY(id)
) ENGINE=InnoDB;

INSERT INTO challenge_sets VALUES ('math', 'Math Challenges', 1, 'Math challenges include problems in algebra, geometry, trigonometry, number theory, sequences, prime numbers, etc. Test your math skills and your coding skills combined!', now(), now());
INSERT INTO challenge_sets VALUES ('puzzle', 'Puzzle Games', 2, 'These puzzle games will test your problem solving skills and will require coding skills like iteration and recursion. Plus, the solutions will help you improve your puzzle game skills!', now(), now());
