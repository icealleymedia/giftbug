<?php
class GiftBug{
	
	
	function __construct(){
		
		$this->dbHost = $dbHost;
		$this->dbName = $dbName;
		$this->dbUser = $dbUser;
		$this->dbPass = $dbPass;
		
		$this->dbConn = 'mysql:host=' . $this->dbHost . ';dbname=' . $this->dbName;
		
		$this->get_settings();
	}
	
	function get_settings(){
		
		$dbh = new PDO($this->dbConn, $this->dbUser, $this->dbPass);
		
	}
	
	function set_settings(){
		
	}
	
	function update_settings(){
		
	}
}
?>