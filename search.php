<?php 
/**
 * 
 */
class search {
	 private $conn;
	 private $twig;

	 public function __construct($db_conn, $twig){
	 	$this->conn=$db_conn;
	 	$this->twig=$twig;
	 }
	public function indexMethod(){
		echo "this is search\'s index";
	}

	public function getMethod(){
		$name = $_POST['search'];
		$movies=$this->conn->getMovieByName($name);
		
		try{
			echo $this->twig->render(
				'search.html.twig',
				array(
					'name'=>'Moive SCS',
					'movies'=>$movies,
					
					'name'=>  $name
				)
			);
		} catch (Exception $e){
			 echo $e->getMessage();
		}
	}
}


 ?>