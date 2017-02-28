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

	public function getChallengeSet($id)
	{
		$sql = "SELECT * FROM challenge_sets WHERE id=?";
		$stmt = $this->dbh->prepare($sql);
		$succcess = $stmt->execute(array($id));
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}
}
