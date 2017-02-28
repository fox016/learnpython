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

/* Initial challenge set data */
INSERT INTO challenge_sets VALUES ('math', 'Math Challenges', 1, 'Math challenges include problems in algebra, geometry, trigonometry, number theory, sequences, prime numbers, etc. Test your math skills and your coding skills combined!', now(), now());
INSERT INTO challenge_sets VALUES ('puzzle', 'Puzzle Games', 2, 'These puzzle games will test your problem solving skills and will require coding skills like iteration and recursion. Plus, the solutions will help you improve your puzzle game skills!', now(), now());
/* END */

DROP TABLE IF EXISTS challenges;
CREATE TABLE IF NOT EXISTS challenges
(
	id VARCHAR(20),
	name VARCHAR(200) NOT NULL,
	challenge_set VARCHAR(20) NOT NULL,
	position INTEGER NOT NULL,
	difficulty INTEGER DEFAULT 1,
	description TEXT NOT NULL,
	created_date_time DATETIME NOT NULL,
	updated_date_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY(id)
) ENGINE=InnoDB;

/* Initial challenge data */
INSERT INTO challenges VALUES ('fib1', 'Fibonacci Sequence', 'math', 1, 1, 'Write a function named <code>fib</code> that takes <code>n</code>, an integer, as a parameter. Return the nth value of the fibonacci sequence.', now(), now());
INSERT INTO challenges VALUES ('cone_area', 'Surface Area of a Cone', 'math', 2, 1, 'Write a function named <code>cone_area</code> that takes <code>height</code> and <code>radius</code> as parameters. Return the surface area of the cone.', now(), now());
INSERT INTO challenges VALUES ('sudoku', 'Sudoku Solver', 'puzzle', 1, 2, 'TODO', now(), now());
/* END */

DROP TABLE IF EXISTS user_challenges;
CREATE TABLE IF NOT EXISTS user_challenges
(
	user_id VARCHAR(100) NOT NULL,
	challenge_id VARCHAR(20) NOT NULL,
	completed_date_time DATETIME NOT NULL,
	solution TEXT DEFAULT NULL,
	PRIMARY KEY(user_id, challenge_id)
) ENGINE=InnoDB;
