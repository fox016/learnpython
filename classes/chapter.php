<?php

class ChapterManager
{
	protected $idToChapterMap;
	protected $chapterList;

	protected static $instance = null;

	public static function getInstance()
	{
		if(!isset(static::$instance))
			static::$instance = new ChapterManager();
		return static::$instance;
	}

	protected function __construct()
	{
		$this->idToChapterMap = array();
		$this->chapterList = array();
	}

	protected function __clone(){}

	public function addChapter($id, $name)
	{
		if(array_key_exists($id, $this->idToChapterMap))
			throw new Exception("Chapter id already exists: $id");

		$chapter = new Chapter(count($this->chapterList), $id, $name);
		$this->chapterList[] = $chapter;
		$this->idToChapterMap[$id] = $chapter;
	}

	public function getChapterByIndex($index)
	{
		if($index < 0 || $index >= count($this->chapterList))
			throw new Exception("Invalid chapter index: $index");

		return $this->chapterList[$index];
	}

	public function getChapterById($id)
	{
		if(!array_key_exists($id, $this->idToChapterMap))
			throw new Exception("Invalid chapter id: $id");

		return $this->idToChapterMap[$id];
	}

	public function getChapterList()
	{
		return $this->chapterList;
	}

	public function getNextChapter($chapter)
	{
		$index = $chapter->index+1;
		if($index < 0 || $index >= count($this->chapterList))
			return NULL;
		return $this->chapterList[$index];
	}

	public function getPrevChapter($chapter)
	{
		$index = $chapter->index-1;
		if($index < 0 || $index >= count($this->chapterList))
			return NULL;
		return $this->chapterList[$index];
	}

	public function isEmpty()
	{
		return empty($this->chapterList);
	}
}

class Chapter
{
	public $index;
	public $id;
	public $name;

	public function __construct($index, $id, $name)
	{
		$this->index = $index;
		$this->id = $id;
		$this->name = $name;
	}
}
