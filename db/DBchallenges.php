<?php

require_once(__DIR__ . "/../../util/util-db.php");

class DBchallenges
{
	private $dbh;

	public function __construct()
	{
		$this->dbh = new PDO('mysql:host=localhost;dbname=' . DBNAME, DBUSER, DBPASS);
		$this->dbh->beginTransaction();
	}

	public function commit()
	{
		$this->dbh->commit();
	}

	public function rollback()
	{
		$this->dbh->rollBack();
	}

	public function getChallengeSets()
	{
		$sql = "SELECT * FROM challenge_sets ORDER BY position ASC";
		$stmt = $this->dbh->prepare($sql);
		$success = $stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	public function getChallengeSet($id, $userid)
	{
		$sql = "SELECT * FROM challenge_sets WHERE id=?";
		$stmt = $this->dbh->prepare($sql);
		$succcess = $stmt->execute(array($id));
		$set = $stmt->fetch(PDO::FETCH_ASSOC);

		if($set === FALSE)
			return $set;

		$sql = "SELECT challenges.*, user.*
			FROM challenges
			LEFT JOIN user_challenges AS user ON user.challenge_id=challenges.id AND user.user_id=?
			WHERE challenges.challenge_set=?
			ORDER BY challenges.position ASC";
		$stmt = $this->dbh->prepare($sql);
		$succcess = $stmt->execute(array($userid, $id));
		$set['challenges'] = $stmt->fetchAll(PDO::FETCH_ASSOC);

		return $set;
	}
}
