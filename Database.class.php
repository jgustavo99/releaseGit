<?php
class Database
{
	public $conn;
	private $server;
	private $user;
	private $password;
	private $dbname;

	function __construct($server, $user, $password, $dbname)
	{
		$this->server = $server;
		$this->user = $user;
		$this->password = $password;
		$thos->dbname = $dbname;
	}

	public function Conn()
	{
		$this->conn = new mysqli($this->server, $this->user, $this->password, $this->dbname);
		return $this->conn;
	}
}
?>
