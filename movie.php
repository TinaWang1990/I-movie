<?php 
/**
 * 
 */
class movie {
	 private $conn;
	 private $twig;

	 public function __construct($db_conn, $twig){
	 	$this->conn=$db_conn;
	 	$this->twig=$twig;
	 }
	public function indexMethod(){
		echo "this is movie\'s index";
	}

	public function getMethod($id){
		$movie=$this->conn->getMovieById($id);
		$comments=$this->conn->getCommentById($id);
		try{
			echo $this->twig->render(
				'movie.html.twig',
				array(
					'name'=>'Moive SCS',
					'movie'=>$movie,
					'comments'=>$comments
				)
			);
		} catch (Exception $e){
			 echo $e->getMessage();
		}
	}
}


 ?>