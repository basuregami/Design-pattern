<?php
namespace App\Database;

class Connection {


	/**
	* Instance of this connection class;
	*
	* @var Database
	*/
	private  static $instance;

	/**
	* Our single database client connection
	*
	* @var Database
	*/
	private  $dbConnection;


	/**
	* sql statement
	*
	* @var query
	*/
	private $sqlStatement;


	/**
	* Disable make object of this class
	*/

	private function __construct() {

		$this->dbConnection = new \Mysqli(
									$GLOBALS['database']['connections']['mysql']['host'],
									$GLOBALS['database']['connections']['mysql']['user'],
									$GLOBALS['database']['connections']['mysql']['password'],
									$GLOBALS['database']['connections']['mysql']['database'],
									$GLOBALS['database']['connections']['mysql']['port'] 


								);
		if($this->dbConnection->connect_error) {
			throw new \Exception("connection to database failed.");	
		}

	}

	/**
	* create or retrieve the instance of our connection class
	*
	* @return Database
	*/
	public static function getInstance()
	{
		if(is_null(static::$instance))
		{
			self::$instance = new self;
		}
		return static::$instance;
	}

	/**
	* create or retrieve the instance of our database client
	*
	* @return Database
	*/
	public function getConnection()
	{
		return $this->dbConnection;
	}

	/**
	* prepare the database for sql statement
	* 
	* @return sql statment
	*/

	public function prepareStatement($query)
	{
		$this->sqlStatement = $this->dbConnection->prepare($query);
		return $this->sqlStatement;

	}

	public function bind(string $type, ...$bindValue)
	{
		print($type);

		print_r($bindValue);
		die;
	}

	/**
	* Execute the sql statement
	*
	* @return bool
	*/
	public function execute()
	{
		return $this->sqlStatement->execute();
	}
	
	/** 
	 * @Author: Basu Regami 
	 * @Date: 2020-05-19 20:32:57 
	 * @Desc:  get result from the sql statement
	 */
	public function getResult()
	{
		return $this->sqlStatement->get_result();
	}
	/**
	* close the sql statement
	*
	* @return bool
	*/
	public function closeStatement()
	{
		return $this->sqlStatement->close();
	}

	/**
	* close the sql statement
	*
	* @return bool
	*/
	public function close()
	{
		return $this->dbConnection->close();
	}


	/**
	* Disable the cloning of this class
	* 
	* @return void
	*/
	public function __clone() 
	{
		throw new \Exception("Cloning of this class is disabled");
	}


	
}