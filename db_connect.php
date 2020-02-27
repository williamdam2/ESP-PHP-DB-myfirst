
<?php

/**
   *  
   */
  class DB_CONNECT 
  {
  	
  	//constructor
  	function __construct()
  	{
  		# code...
  		$this->connect();
  	}
  	//Destructor
  	function __destruct()
  	{
  		$this->close();
  	}

  	function connect()
  	{
  		//inport config.php
  		$filepath = realpath(dirname(__FILE__));
  		require_one($filepath."/config.php");

  		// connecting database follow the config
  		$con = mysql_connect(DB_SERVER,DB_USER,DB_PASSWORD) or die(mysql_error());

  		// Selecting database
  		$db = mysql_select_db(DB_DATABASE) or die(mysql_error()) or die(mysql_error());
  		// return the connection
  		return $con;

  	}

  	function close()
  	{
  		mysql_close();
  	} 
  	
  }  

  ?>