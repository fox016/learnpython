DROP TABLE IF EXISTS challenge_sets;
CREATE TABLE IF NOT EXISTS challenge_sets
(
	id VARCHAR(20) NOT NULL,
	name VARCHAR(200) NOT NULL,
	position INTEGER NOT NULL,
	description VARCHAR(4000) NOT NULL,
	created_date_time DATETIME NOT NULL,
	updated_date_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY(id)
) ENGINE=InnoDB;

DROP TABLE IF EXISTS challenges;
CREATE TABLE IF NOT EXISTS challenges
(
	id VARCHAR(20) NOT NULL,
	name VARCHAR(200) NOT NULL,
	challenge_set VARCHAR(20) NOT NULL,
	position INTEGER NOT NULL,
	difficulty INTEGER DEFAULT 1,
	description TEXT NOT NULL,
	solution VARCHAR(4000) NOT NULL,
	created_date_time DATETIME NOT NULL,
	updated_date_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY(id)
) ENGINE=InnoDB;

DROP TABLE IF EXISTS user_challenges;
CREATE TABLE IF NOT EXISTS user_challenges
(
	user_id VARCHAR(100) NOT NULL,
	challenge_id VARCHAR(20) NOT NULL,
	completed_date_time DATETIME NOT NULL,
	code TEXT DEFAULT NULL,
	PRIMARY KEY(user_id, challenge_id)
) ENGINE=InnoDB;

/*DROP TABLE IF EXISTS users;*/
CREATE TABLE IF NOT EXISTS users
(
	user_id VARCHAR(100) NOT NULL,
	email VARCHAR(200) DEFAULT NULL,
	full_name VARCHAR(100) DEFAULT NULL,
	first_name VARCHAR(100) DEFAULT NULL,
	last_name VARCHAR(100) DEFAULT NULL,
	locale VARCHAR(10) DEFAULT NULL,
	created_date_time DATETIME NOT NULL,
	updated_date_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY(user_id)
) ENGINE=InnoDB;



/* Initial challenge set data */
INSERT INTO challenge_sets VALUES ('math', 'Math Challenges', 1, 'Math challenges include problems in algebra, geometry, trigonometry, number theory, sequences, prime numbers, etc. Test your math skills and your coding skills combined!', now(), now());
INSERT INTO challenge_sets VALUES ('puzzle', 'Puzzle Games', 2, 'These puzzle games will test your problem solving skills and will require coding skills like iteration and recursion. Plus, the solutions will help you improve your puzzle game skills!', now(), now());

/* Initial challenge data */
INSERT INTO challenges VALUES ('cone_area', 'Surface Area of a Cone', 'math', 1, 1, 'A cone is a geometric shape. The base is a circle, and lines coming from every point on that circle converge at a single point.<p><img src="images/area_cone_pic.png"></p><p>The equation to calculate the surface area of a cone looks like this:</p><p><img src="images/area_cone_eq.png"></p><p>Write a function named <code>cone_area</code> that takes <code>height</code> and <code>radius</code> as parameters. Return the surface area of the cone.</p><p>Question: What is the surface area of a cone with a height of 2938 and radius of 761 (rounded to the nearest 2 decimal places)?</p><p>Hint: Using 3.14 for pi will not be precise enough. Use <code>math.pi</code> from Python&apos;s math module or use at least 10 digits of pi.</p>', '9075192.22', now(), now());
INSERT INTO challenges VALUES ('fib1', 'Fibonacci Sequence', 'math', 2, 1, 'The Fibonacci sequence is a mathematical sequence. It starts with (1, 1, 2, 3, 5, 8, 13, ...). Notice that each value is the sum of the previous two values. Write a function named <code>fib</code> that takes <code>n</code>, an integer, as a parameter. Return the nth value of the fibonacci sequence. The mathematical definition of the sequence is<p>fib(n=0) = 1<br/>fib(n=1) = 1<br/>fib(n>1) = fib(n-1) + fib(n-2)</p><p>Question: What are the <strong>last 50 digits</strong> of <code>fib(20000)</code>?</p><p>Hint: Even though the mathematical definition uses recursion, you may want to consider using iteration to solve this problem.</p>', '18631347739229074282048749390382177080100224710626', now(), now());
INSERT INTO challenges VALUES ('sudoku', 'Sudoku Solver', 'puzzle', 1, 2, 'TODO', 'TODO', now(), now());
