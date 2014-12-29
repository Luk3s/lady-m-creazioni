<?php 

class cMySQL{

var $con = "";
var $query_id = "";
var $db = array("db_user" => "root", "db_pass" => "", "db_host" => "localhost", "db_dbname" => "ladym");

function connect(){
	$this->con = mysql_connect($this->db['db_host'], $this->db['db_user'], $this->db['db_pass']) OR die('Not connected: ' . mysql_error());
	mysql_select_db($this->db['db_dbname'], $this->con) OR die ('Error while connecting to the database: ' . mysql_error());
}

function eseguiQuery($miaQuery){
	$this->query_id = mysql_query($miaQuery, $this->con);
	return $this->query_id; 
}

function fetch($query){
	$query = mysql_fetch_assoc($query);
	return $query;
}

function filterSQLQuery($string) {
	if (get_magic_quotes_gpc())
		$string = stripslashes($string);
	if (!is_numeric($string))
		$string = "'" . mysql_real_escape_string($string) . "'";
	return $string;
}

function num($query){
	$query = mysql_num_rows($query);
	return $query;
}

function checkResult($result,$query){
	if (!$result) {
		$message = 'Invalid query: ' . mysql_error() . "\n";
		$message .= 'Whole query: ' . $query;
		die($message);
	}
}

}

?>