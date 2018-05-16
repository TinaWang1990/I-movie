<?php 

class DBConnection{
	protected $conn;

	public function getConnInstant(){
		if (!isset($this->conn)){
			$this->conn = new PDO('mysql:host=localhost;dbname=movie;charset=utf8mb4','root','root');
		}
		return $this->conn;
	}
	public function getAllMovies(){
	$stmt=$this->getConnInstant()->query('SELECT * FROM movies ORDER BY date DESC');
	$movies=$stmt->fetchAll(PDO::FETCH_ASSOC);

	return $movies;
	}
	
}
 



 ?>