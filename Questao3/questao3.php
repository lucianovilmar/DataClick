<?php

/**
 * 
 */
class DataConnecti
{
	public $dbconn = null;

	public function getDataBaseConnect()
	{ 
		if (!isset($this->$dbconn)) {
			$this->$dbconn = new DatabaseConnection('localhost','user','password'); 
	    }
	    return $this->$dbconn;
	}
}


class MyUserClass 
{ 

	public function getUserList() 
	{ 
		$dataConnect = new DataConnecti();
		$dbcon =  $dataConnect->getDataBaseConnect();

		return $dbcon->query('select name from user order by name'); 
		
	}
} 