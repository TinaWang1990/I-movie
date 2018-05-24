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
	
	public function getMovieById($id){
		$stmt=$this->getConnInstant()->prepare('SELECT * FROM movies where id=:id');
		$stmt->execute(
			array(
				':id'=>$id
			)
		);
		$result=$stmt->fetch();
	return $result;
	}
	public function getCommentById($id){
		$stmt=$this->getConnInstant()->prepare('SELECT * FROM comments where m_id=:id ORDER BY date DESC');
		$stmt->execute(
			array(
				':id'=>$id
			)
		);
		$result=$stmt->fetchAll();
	return $result;
	}

	public function insertComment($m_id,$content){
		$stmt=$this->getConnInstant()->prepare('INSERT INTO comments(m_id, date, content) VALUES (:mid,:date, :content)');
		$result=$stmt->execute(
			array(
				':mid'=>$m_id,
				':date'=>date('Y-m-d h:i:s'),
				':content'=>$content
			)
		);
		
	return $result;
	}
}
 

// $db= new DBConnection();
// var_dump($db->insertComment('1', '123'));

 ?>