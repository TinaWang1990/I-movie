<?php 
require_once('./vendor/autoload.php');
require_once('./database.php');

// header("Access-Control-Allow-Origin:*");
// header("Content-Type:application/json;charset=UFT-8");

$loader = new Twig_Loader_Filesystem('./templates');
$twig = new Twig_Environment($loader
	// ,
//  array(
//     'cache' => './compilation_cache',
// )
);


$db_conn=new DBConnection();

if(array_key_exists('url', $_GET)){
	$url=$_GET['url']; 
	$param_array=explode('/', $url);
	if(!file_exists($param_array[0].'.php')){
		echo 'Sorry, wrong route';
		exit;
	 }

	require_once($param_array[0].'.php');
	$handle_obj=new $param_array[0]($db_conn, $twig);
	
	if (array_key_exists(1, $param_array)){

		$method=$param_array[1].'Method';
	}else{
		$method='indexMethod';
	}

	if (array_key_exists(2, $param_array)){
		echo $handle_obj->$method($param_array[2]);
	}else{
		echo $handle_obj->$method();
	}
	exit();
}

//main page
$movies=$db_conn->getAllMovies();
$categories=$db_conn->getAllCategories();

$new_category=array();
foreach ($categories as $category) {
	$new_category += array(
		$category['id']=>$category['name']
	);
}

try{
	echo $twig->render('index.html.twig', array(
	'name' => 'Movie SCS',
	'movies'=> $movies,
	'categories'=> $new_category,
	// 'c_id'=>  $cid
)
);	
}catch(Exception $e){
	echo $e->getMessage();
}


?>




