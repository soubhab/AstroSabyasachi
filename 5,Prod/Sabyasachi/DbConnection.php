<?php
class DbConnection 
{
  // Methods
  function get_connection() 
  {
	$dbproperties = parse_ini_file("db_properties.ini");
	$dbsql = "mysql:host=".$dbproperties['servername'].";dbname=".$dbproperties['database'].";";
	$dsn_Options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
	
	try { 
	  $Db_Connection = new PDO($dbsql, $dbproperties['dbusername'], $dbproperties['dbpassword'], $dsn_Options);
	  //return "Connected successfully";
	  return $Db_Connection;
	} catch (PDOException $error) {
		  return 'Connection error: ' . $error->getMessage();
	}
  }
}