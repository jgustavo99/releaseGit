<?php
class Database
{
	public $conn;
	private $server;
	private $user;
	private $password;
	private $dbname;
	public $query;

	function __construct($server, $user, $password, $dbname)
	{
		$this->server = $server;
		$this->user = $user;
		$this->password = $password;
		$thos->dbname = $dbname;
	}

	public function conn()
	{
		$this->conn = new mysqli($this->server, $this->user, $this->password, $this->dbname);
		return $this->conn;
	}

	public function setQuery($query)
	{
		$this->query = $query;
	}

	public function getQuery($query)
	{
		return $this->query;
	}
}
?>
