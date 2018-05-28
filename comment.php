<?php 
/**
 * 
 */
class comment {
	 private $conn;
	 private $twig;

	 public function __construct($db_conn, $twig){
	 	$this->conn=$db_conn;
	 	$this->twig=$twig;
	 }
	public function indexMethod(){
		echo "this is comment\'s index";
	}

	public function submitMethod(){
		$m_id=$_POST['mid'];
		$content=$_POST['content'];
		$result=$this->conn->insertComment($m_id,$content);
		header("Access-Control-Allow-Origin:*");
		header("Content-Type:application/json;charset=UTF-8");
		if($result){
			$message=array(
				'code'=>200,
				'message'=>'Add comment successfully'
			);
			echo json_encode($message);
		}else{
			$message=array(
				'code'=>400,
				'message'=>'Add comment failed. Please try again.'
			);
			echo json_encode($message);
		}
	}
	public function scoreMethod(){
		$m_id=$_POST['mid'];
		$score=$_POST['score'];
		$result=$this->conn->insertScore($m_id,$score);

		header("Access-Control-Allow-Origin:*");
		header("Content-Type:application/json;charset=UTF-8");
		if($result){
			$message=array(
				'code'=>200,
				'message'=>'Add Score successfully'
			);
			echo json_encode($message);
		}else{
			$message=array(
				'code'=>400,
				'message'=>'Add Score failed. Please try again.'
			);
			echo json_encode($message);
		}
	}
}



 