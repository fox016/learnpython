/* DROP TABLE IF EXISTS challenge_sets;*/
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

/* DROP TABLE IF EXISTS challenges;*/
CREATE TABLE IF NOT EXISTS challenges
(
	id VARCHAR(20) NOT NULL,
	name VARCHAR(200) NOT NULL,
	challenge_set VARCHAR(20) NOT NULL,
	position INTEGER NOT NULL,
	difficulty INTEGER DEFAULT 1,
	description TEXT NOT NULL,
	created_date_time DATETIME NOT NULL,
	updated_date_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY(id)
) ENGINE=InnoDB;

/* DROP TABLE IF EXISTS user_challenges;*/
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

CREATE TABLE IF NOT EXISTS code_submissions
(
	submission_id INTEGER(10) NOT NULL AUTO_INCREMENT,
	user_id VARCHAR(100) NOT NULL,
	challenge_id VARCHAR(20) NOT NULL,
	code TEXT NOT NULL,
	created_date_time DATETIME NOT NULL,
	PRIMARY KEY (submission_id)
) ENGINE=InnoDB;
