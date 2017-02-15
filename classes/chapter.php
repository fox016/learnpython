<?php

/*
 * Manager class for Chapter struct
 * - Keeps list of chapters (index to chapter)
 * - Keeps id map (id to chapter)
 * Singleton
 */
class ChapterManager
{
	protected $idToChapterMap;
	protected $chapterList;

	// Singleton instance
	protected static $instance = null;

	/*
	 * Public constructor/getter
	 */
	public static function getInstance()
	{
		if(!isset(static::$instance))
			static::$instance = new ChapterManager();
		return static::$instance;
	}

	/*
	 * Private constructor (singleton pattern)
	 */
	protected function __construct()
	{
		$this->idToChapterMap = array();
		$this->chapterList = array();
	}

	/*
	 * Prevent cloning (singleton pattern)
	 */
	protected function __clone()
	{
		throw new Exception("ChapterManager does not support the clone function");
	}

	/*
	 * Add chapter to end of chapter list
	 * @param id - unique identifier for chapter
	 * @param name - chapter name
	 */ 
	public function addChapter($id, $name)
	{
		if(array_key_exists($id, $this->idToChapterMap))
			throw new Exception("Chapter id already exists: $id");

		$chapter = new Chapter(count($this->chapterList), $id, $name);
		$this->chapterList[] = $chapter;
		$this->idToChapterMap[$id] = $chapter;
	}

	/*
	 * Get chapter by unique id
	 * @param id - unique identifier for chapter
	 * @return - chapter struct
	 * @throws - exception if id not recognized
	 */
	public function getChapterById($id)
	{
		if(!array_key_exists($id, $this->idToChapterMap))
			throw new Exception("Invalid chapter id: $id");

		return $this->idToChapterMap[$id];
	}

	/*
	 * Get chapter by index in list
	 * @param index	- list index
	 * @return - NULL if index not recognized, else chapter struct
	 *	Return NULL instead of throwing Exception for prev/next button logic
	 */
	public function getChapterByIndex($index)
	{
		if($index < 0 || $index >= count($this->chapterList))
			return NULL;

		return $this->chapterList[$index];
	}

	/*
	 * Get list of ordered chapter structs
	 */
	public function getChapterList()
	{
		return $this->chapterList;
	}

	/*
	 * @return - true iff chapter list is empty
	 */
	public function isEmpty()
	{
		return empty($this->chapterList);
	}
}

/*
 * Struct containing index, id, and name for chapter
 */
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
