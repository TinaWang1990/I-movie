<?php 
/**
 * 
 */
class genre {
	 private $conn;
	 private $twig;

	 public function __construct($db_conn, $twig){
	 	$this->conn=$db_conn;
	 	$this->twig=$twig;
	 }
	public function indexMethod(){
		echo "this is genre\'s index";
	}

	public function getMethod($cid){
		$movies=$this->conn->getMovieByCategoryId($cid);
		$categories=$this->conn->getAllCategories();

		$new_category=array();
		foreach ($categories as $category) {
			$new_category += array(
				$category['id']=>$category['name']
			);
		}
		try{
			echo $this->twig->render(
				'movie.html.twig',
				array(
					'name'=>'Moive SCS',
					'movie'=>$movies,
					'categories'=>$new_category,
					'c_id'=>  $cid
				)
			);
		} catch (Exception $e){
			 echo $e->getMessage();
		}
	}
}


 ?>