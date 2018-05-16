<?php 

require_once('./vendor/autoload.php');
require_once('./database.php');

$loader = new Twig_Loader_Filesystem('./templates');
$twig = new Twig_Environment($loader
	// ,
//  array(
//     'cache' => './compilation_cache',
// )
);

$db_conn=new DBConnection();
$movies=$db_conn->getAllMovies();

try{
	echo $twig->render('index.html', array(
	'name' => 'Fabien',
	'movies'=> $movies
)
);	
}catch(Exception $e){
	echo $e->getMessage();
}


 ?>
