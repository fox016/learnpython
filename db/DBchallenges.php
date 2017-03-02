<?php

require_once(__DIR__ . "/../../util/util-db.php");
require_once(__DIR__ . "/../../util/util-logging.php");

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

	public function getChallenge($id, $userid)
	{
		$sql = "SELECT challenge.*, user.*, cset.name AS set_name
			FROM challenges AS challenge
			INNER JOIN challenge_sets AS cset ON cset.id=challenge.challenge_set
			LEFT JOIN user_challenges AS user ON user.challenge_id=challenge.id AND user.user_id=?
			WHERE challenge.id=?";
		$stmt = $this->dbh->prepare($sql);
		$succcess = $stmt->execute(array($userid, $id));
		$challenge = $stmt->fetch(PDO::FETCH_ASSOC);
		return $challenge;
	}

	public function getUser($userid)
	{
		$sql = "SELECT * FROM users WHERE user_id=?";
		$stmt = $this->dbh->prepare($sql);
		$succcess = $stmt->execute(array($userid));
		$user = $stmt->fetch(PDO::FETCH_ASSOC);
		return $user;
	}

	public function getForumEntries($challengeId)
	{
		$sql = "SELECT completed_date_time, code FROM user_challenges WHERE challenge_id=? AND code IS NOT NULL ORDER BY completed_date_time DESC";
		$stmt = $this->dbh->prepare($sql);
		$succcess = $stmt->execute(array($challengeId));
		$entries = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $entries;
	}

	public function insertUser($user)
	{
		$oldUser = $this->getUser($user['user_id']);
		$now = date("Y-m-d H:i:s");
		$user['updated_date_time'] = $now;
		if($oldUser === FALSE)
		{
			$user['created_date_time'] = $now;
			$this->performInsert("users", $user);
		}
		else
		{
			$this->performUpdate("users", array("name" => "user_id", "value" => $user['user_id']), $user);
		}
	}

	public function markChallengeComplete($userid, $challengeId)
	{
		$sql = "INSERT INTO user_challenges (user_id, challenge_id, completed_date_time) VALUES (?, ?, now())";
		$stmt = $this->dbh->prepare($sql);
		$success = $stmt->execute(array($userid, $challengeId));
                return $stmt->errorCode();
	}

        private function performInsert($table, $data)
        {
                $columnNameArray = array_keys($data);
                $columnNameStr = join(", ", $columnNameArray);
		$values = str_repeat("?,", count($columnNameArray)-1) .'?';
                $stmt = $this->dbh->prepare("INSERT INTO $table ($columnNameStr) VALUES ($values)");
                $result = $stmt->execute(array_values($data));
                if($result === TRUE)
                        return $this->dbh->lastInsertId();
                else
                        return -1;
        }

        private function performUpdate($table, $idObj, $data)
        {
                $keyValuePairs = "";
                foreach($data as $k=>$v)
                        $keyValuePairs .= "$k=?,";
                $keyValuePairs = rtrim($keyValuePairs, ",");
                $stmt = $this->dbh->prepare("UPDATE $table SET $keyValuePairs WHERE {$idObj['name']}=?");
                $values = array_values($data);
                $values[] = $idObj['value'];
                $result = $stmt->execute($values);
                return $stmt->errorCode();
        }
}
