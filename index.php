

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <title>I-Movie</title>
    <style type="text/css">
    body{
    	margin: 0;
    	padding: 0;
    }
    .carousel-item{
    	width: 100vw;
    	padding: 0;
    	height: 80vh;
    }
    .carousel-item img{
    	width: 100%;
    	height:100%;
    }
    .H2 {
    	padding: 0;
    	height: 20vh;
    	width: 90vw;
    	position: absolute; 
    	top:58vh; left: 10vw;
    }
    .H2 .row{
    	padding: 0;
    	margin: 0;
    }
    .H2 img{

    	width: 14vw;
    	height: 30vh;
    	
    }
    .H3{
    	position: relative;
    	/*background-image: url(./mountain.jpg);*/
    	background-size: cover;
    	background-position: bottom center;
    	height: 35vh;
    	width: 100vw;
      margin: 0;
    }
    .text{
    	color: #ff6600;
    	line-height: 35vh;
    	text-align: center;
    	font-size: 40px;
    }
    .H3 .container{
    	position: absolute;
    	top:22vh;
    	
    }
    .H3 .row{
    	margin-left: 5vw;
    	font-size: 20px;
      font-weight: bold;
    	width: 100vw;
    	height: 7vh;
    	line-height: 7vh;
    }
    .H3 p{
      margin: 0 5px;
    }
    .H4 .row{
      width: 90vw;
      margin-top: -40px;
      margin-left: 5vw;
    }
   
    .H4 .card{
      text-align: center;
      margin: 0;
      padding: 0;
    }
    .H4 p img{
      width: 17px;
    }
    .H5 .row{
      width: 90vw;
      margin-top: -40px;
      margin-left: 5vw;
    }
   
    .H5 .card{
      text-align: center;
      margin: 0;
      padding: 0;
    }
    .H5 p img{
      width: 17px;
    }
    .H6 .row{
      width: 90vw;
      margin-top: -40px;
      margin-left: 5vw;
    }
   
    .H6 .card{
      text-align: center;
      margin: 0;
      padding: 0;
    }
    .H6 p img{
      width: 17px;
    }
    .H7 {
      background-color: black;
      margin-top: 4vh;
      width: 100vw;
      height: 80vh;
      display: column;

    }
    .H7 .title{
      color: #fe7900;
      font-size: 24px;
      font-weight: bold;
      display: block;
      margin-top: 5vh;
      margin-left: 30vw;
      margin-bottom: 5vh;
      width: 35vw;
      position: relative;
      border-bottom: 3px dashed #fe7900;
      padding-bottom: 5px;
      text-align: center;
    }
    .flow-img{
      display: inline-block;
      width: 100vw;
      height: 40vh;
      overflow: hidden;
      position: relative;
      float: left;

    }
    .H7 img{
      margin: 0;
      height: 40vh;
      width: 15vw;
      text-align:left;
      position: relative;
    }
    .H7 .btn{
      display: flex;
      align-items: center;
      justify-content: center;
      margin: auto;
      width: 100vw;
      height: 20vh;
    }
    .H7 button{
      border-radius:2vw;
      background-color: white;
      width: 10vw;
      height: 6vh;
      justify-content: center;
      margin: 10vw;
      font-weight: bold;
     

    }
    


    	
    </style>
  </head>
  <body>
    <div class="d-flex flex-column">
  		<div class="bg-dark container " style="margin: 0; width: 100vw; height: 7vh">
  			
  			<div class="row bg-dark text-white text-center" style="margin: 0; width: 100vw; height: 7vh; line-height: 7vh" >

  				<div class="col-4 text-center">I-Movie</div>
  				<div class="col-3 mt-2">
  					
  				</div>
  				<div class="col-1">Home</div>
  				<div class="col-1">Movie</div>
  				<div class="col-1">Comment</div>
  				<div class="col-1">Login</div>
  			</div>
  		</div>


  		<div class="H1">
  			<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
 			 <div class="carousel-inner">
   			 <div class="carousel-item active">
      		<img class="d-block w-100 h-30" src="./ready background.jpg" alt="First slide">
    		</div>
    		<div class="carousel-item">
     		 <img class="d-block w-100 h-30" src="./maze runner-back.jpg" alt="Second slide">
    		</div>
    		<div class="carousel-item">
     		<img class="d-block w-100 h-30" src="./rampage-back.jpg" alt="Third slide">
    		</div>
  			</div>
			</div>
			<div class=" " style="position: absolute; top:30vh; left: 25vw;width: 60vw; ">
  					<form class="form-inline">
   					 <input class="form-control mr-sm-2 " type="search" placeholder="Search" aria-label="Search" style="width: 40vw;height: 5vh;">
    				<button class="btn btn-outline-success my-1 my-sm-0 bg-white" type="submit" style="height: 5vh;"><img src="./search.PNG"></button>
 					 </form>
  				</div>
      </div>

<!--   			<div class="H2 container m-0" style="padding:0; " >
  			<div class="row">
  				<div class="col-md-15"><img src="./ready player one poster.jpg" style=""></div>
  				<div class="col-md-15"><img src="./ready player one poster.jpg" style=""></div>
  				<div class="col-md-15"><img src="./ready player one poster.jpg" style=""></div>
  				<div class="col-md-15"><img src="./star wars-poster.jpg" style=""></div>
  				<div class="col-md-15"><img src="./ready player one poster.jpg" style=""></div>
  				
  			</div>
  		</div> -->

  		<div class="H3">
  			<div class="text">CINEMA IN YOUR EYES</div>

  			<div class="container">
  				<div class="row">
  					
  					<p class="now" onclick="now_movie()">NOW PLAYING</p>
            <p> / </p>
  					<p class="open" onclick="open_movie()">OPENING THIE WEEK</p>
            <p> / </p>
            <p class="soon" onclick="soon_movie()">COMING SOON</p>

  				</div>
  			</div>
  		</div>

      <div class="H4">
  		<div class="row ">
  			  <?php
          for ($i=1; $i < 9; $i++) { 
          ?>
            <div class="col-3">
            <div class="card" >
            <img class="card-img-top" src="./star wars-poster.jpg" alt="Card image cap">
             <div class="card-body">
              <h5 class="card-title">Star Wars</h5>
               <p class="card-text"><img src="./clock.png">  02 hours 50 minites</p>
             </div>
            </div>          
          </div>
          <?php          
          }
          ?> 
  		</div>
  		</div>

      <div class="H5">
        <div class="row ">
          <?php
          for ($i=1; $i < 9; $i++) { 
          ?>
            <div class="col-3">
            <div class="card" >
            <img class="card-img-top" src="./star wars-poster.jpg" alt="Card image cap">
             <div class="card-body">
              <h5 class="card-title">Star Wars</h5>
               <p class="card-text"><img src="./clock.png">  02 hours 50 minites</p>
             </div>
            </div>          
          </div>
          <?php          
          }
          ?> 
      </div>
      </div>

      <div class="H6">
        <div class="row ">
          <?php
          for ($i=1; $i < 9; $i++) { 
          ?>
            <div class="col-3">
            <div class="card" >
            <img class="card-img-top" src="./star wars-poster.jpg" alt="Card image cap">
             <div class="card-body">
              <h5 class="card-title">Star Wars</h5>
               <p class="card-text"><img src="./clock.png">  02 hours 50 minites</p>
             </div>
            </div>          
          </div>
          <?php          
          }
          ?> 
      </div>
      </div>
    	
  		<div class="H7">
        <div class="title">TOP MOVIES IN THEATRES</div>
        <div class="flow-img">
          <img src="star wars-poster.jpg">
          <img src="ready player one poster.jpg">
          <img src="star wars-poster.jpg">
          <img src="ready player one poster.jpg">
          <img src="star wars-poster.jpg">
          <img src="ready player one poster.jpg">
          <img src="star wars-poster.jpg">
          <img src="ready player one poster.jpg">
          <img src="star wars-poster.jpg">
          <img src="ready player one poster.jpg">
        </div>
        <div class="btn">
          <button id="P">Previous</button>
          <button id="A">After</button>
        </div>
      

      </div>
  		
	</div>













    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>


<script type="text/javascript">
  $('.H4').show();
  $('.H5').hide();
  $('.H6').hide();
  $('.H3 .now').mouseover(function(){
    $(this).css('color','red');
  });
  $('.H3 .now').mouseleave(function(){
    $(this).css('color','black');
  });
  $('.H3 .open').mouseover(function(){
    $(this).css('color','red');
  });
  $('.H3 .open').mouseleave(function(){
    $(this).css('color','black');
  });
  $('.H3 .soon').mouseover(function(){
    $(this).css('color','red');
  });
  $('.H3 .soon').mouseleave(function(){
    $(this).css('color','black');
  });
  function now_movie(){
  $('.H4').show();
  $('.H5').hide();
  $('.H6').hide();
  $('.H3 .open').css("color","black");
  $('.H3 .soon').css("color","black");
  $('.H3 .now').mouseleave(function(){
    $(this).css('color','red');
  });
  }
   function open_movie(){
  $('.H5').show();
  $('.H4').hide();
  $('.H6').hide();
  $('.H3 .now').css("color","black");
  $('.H3 .soon').css("color","black");
  $('.H3 .open').mouseleave(function(){
    $(this).css('color','red');
  });

  }
   function soon_movie(){
  $('.H6').show();
  $('.H4').hide();
  $('.H5').hide();
  $('.H3 .now').css("color","black");
  $('.H3 .open').css("color","black");
  $('.H3 .soon').mouseleave(function(){
    $(this).css('color','red');
  });
  }
</script>


  </body>
</html>