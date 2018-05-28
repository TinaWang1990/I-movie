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
	public function getAllCategories(){
	$stmt=$this->getConnInstant()->query('SELECT * FROM categories');
	$categories=$stmt->fetchAll(PDO::FETCH_ASSOC);

	return $categories;
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
	public function getMovieByCategoryId($cid){
		$stmt=$this->getConnInstant()->prepare('SELECT * FROM movies where genre LIKE :cid ORDER BY date DESC');
		$stmt->execute(
			array(
				':cid'=>'%'.$cid.'%'
			)
		);
		$result=$stmt->fetchAll(PDO::FETCH_ASSOC);
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
	public function insertScore($m_id,$score){
		$stmt=$this->getConnInstant()->prepare('INSERT INTO score(m_id, score, date) VALUES (:mid,:score,:date); UPDATE movies SET total_score = total_score+4, total_num = total_num+1 where id=1');

		$result=$stmt->execute(
			array(
				':mid'=>$m_id,
				':date'=>date('Y-m-d h:i:s'),
				':score'=>$score
			)
		);
		
	return $result;
	}
	public function getMovieByName($name){
		$stmt=$this->getConnInstant()->prepare('SELECT * FROM movies where name LIKE :name ORDER BY date DESC');
		$stmt->execute(
			array(
				':name'=>'%'.$name.'%'
			)
		);
		$result=$stmt->fetchAll(PDO::FETCH_ASSOC);
	return $result;
	}

	public function getMovieNow(){
		$time=new Datetime('now', new DateTimeZone('UTC'));
		$time_str=$time->formate('Y-m-d h:i:s');
		$stmt=$this->getConnInstant()->prepare('SELECT * FROM movies where name LIKE :name ORDER BY date DESC');
		$stmt->execute(
			array(
				':name'=>'%'.$name.'%'
			)
		);
		$result=$stmt->fetchAll(PDO::FETCH_ASSOC);
	return $result;
	}
}
 

// $db= new DBConnection();
// var_dump($db->insertTotalScore(4, 5));

 ?>