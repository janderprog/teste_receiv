<?php

// include("../includes/conexao.php");

class DB{

	private $db;
	private $host 		= 'localhost';
	private $user 		= 'root';
	private $pass 		= 102030;
	private $data_base 	= 'receiv';

    public function __construct() {
       $this->db = new mysqli($this->host, $this->user, $this->pass, $this->data_base);

        if(!$this->db) {
            die('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
        }
    }
    
    
    public function __destruct()
    {
        if (mysqli_connect_errno() == 0)
            $this->db->close();
    }

	/**
	*
	* Execute your query
	*
	* @param string $query - your sql query
	* @return the result of the executed query 
	*/
	// }
	function query($query) {

		$result =  $this->db->query($query);
		return $result->fetch_object();

	}

	/*
	 * Num_rows
	 */
	function num_rows($query) {

		$result =  $this->db->query($query);
		return $result->num_rows;

	}

	/**
	* Escape your parameters to prevent SQL Injections! Usage: See documentation (link at the top of the file)
	*
	* @param string $string - your parameter to escape
	* @return the escaped string 
	*/
	function escape($string) {

		return $this->db->escape_string($string);

	}

	/*
	* 	Insert
	*/
	function insert($query){

		$this->db->query($query);
		return $this->db->insert_id;

	}

	/*
	* 	Insert
	*/
	function update($query){

		return $this->db->query($query);

	}

	/*
	* 	Insert
	*/
	function delete($query){

		$this->db->query($query);

	}

}


?>