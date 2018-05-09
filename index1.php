<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">



    <title>Hello, world!</title>
    <style type="text/css">
    	.H1{
    		color: white;
    		font-weight: bold;
    	}
    	.H1 .login{
    		margin-right: 10px;
    	}
      .P2{
        background-image: url(./moun.PNG);
        background-size: cover;
        height: 35vh;

      }
    	.search-container {
    		height: 30vh;
        display: table;
        width: 100%
    	}
      .search-content{
        display: table-cell;
        vertical-align: middle;
        text-align: center;
        width: 50vw;
        margin-left: 25vw;
      }
      .form-inline{
        margin-left: 25vw;

      }

    	.H3 .row{
    		margin-left: 3vw;
    		font-size: 1.5rem;
      	font-weight: bold;
      	width: 90vw;
    		height: 7vh;
    		line-height: 7vh;
        color:  #fe7900;
   		 }
    	.H3 p{
			margin: 0 5px;
    	}
    .H4 .row{
      margin: 0;
    }
   	.H4 .card{
      text-align: center;
      margin-top: 2vh;
	}
    .H4 i p{
    	width: 0.1vw;
    }
    .H5 .row{
      margin: 0;
    }
   	.H5 .card{
      text-align: center;
      margin-top: 2vh;
	}
    .H5 i p{
    	width: 0.1vw;
    }
    .H6 .row{
      margin: 0;
    }
   	.H6 .card{
      text-align: center;
      margin-top: 2vh;
	}
    .H6 i p{
    	width: 0.1vw;
    }
    .H7 {
      background-color: black;
      margin-top: 4vh;
      /*height: 80vh;*/
    }
    .H7 .title{
      color: #fe7900;
      font-size: 24px;
      font-weight: bold;
      display: block;
      padding-top: 5vh;
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
    .H7 .row{
      align-items: center;
      width: 90vw;
    }
    .H7 .btn{
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .H7 i{
    	font-size: 24px;
     	color:  #fe7900;
    	justify-content: center
    }
    .H7 p{
      margin-left: 100px;
      margin-right: 100px;
      margin-top: 35px;    	
    }
    .H8 #title{
      color: black;
      font-size: 24px;
      font-weight: bold;
      margin-top: 10vh;
      margin-left: 10vw;
      border-bottom: 5px solid  #fe7900;
    }
    .H8 .row{
      margin: auto;
      padding: 0;
      /*height: 100vh;*/
    }
    .H9 {
      background-image: url(./footer-bg.PNG);
      background-position: center center;
      background-size: cover;
      height: 70vh;
      margin-top: 3vh;
      color: #fe7900;
      position: relative;
    }
    .H9 .row{
      position: absolute;
      margin-top: 25vh;
      width: 80vw;
      margin-left: 10vw;
    }
    .H10{
     background-image: url(./footer-bg.PNG);
     height: 7vh;
     color: grey;
     line-height: 7vh;
     /*text-align: right;*/
     /*vertical-align: center;*/
    }
    .H10 p{
      vertical-align: center;
      margin-right: 2vw;
      padding: 0;
      
    }
    </style>
  </head>
  <body>
    <div class="H1 container-fluid p-0 ">
    	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">  I-Movie</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
       </button>
  <!-- <div style="width: 50vw"></div> -->
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
         <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Movies</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Comments</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Catorgaries
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Love</a>
          <a class="dropdown-item" href="#">Comedy</a>
        </div>
      </li>
     </ul>
     
  </div>
  <div class="login">
        <i class="fas fa-user fa-2x"></i>
      </div>
</nav>
    </div>

    <div class="H2 container-fluid p-0">
    	<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
 			 <div class="carousel-inner">
   			 <div class="carousel-item active">
   			 	<div style="position: relative;">
      			<img class="d-block w-100 h-30" src="./ready background.jpg" alt="First slide">
      			</div>
      			<div>
      				
      			</div>
    		</div>
    		<div class="carousel-item">
    			<div style="position: relative;">
     		 	<img class="d-block w-100 h-30" src="./maze runner-back.jpg" alt="Second slide">
     		 	</div>
      			<div>
      				
      			</div>
    		</div>
    		<div class="carousel-item">
    			<div style="position: relative;">
     			<img class="d-block w-100 h-30" src="./rampage-back.jpg" alt="Third slide">
     			</div>
      			<div>
      				
      			</div>
    		</div>
  			</div>
			</div>			  	
    </div>

    <div class="P2">
    <div class="search-container">
				<div class="search-content">
  				<form class="form-inline">
   					<input class="form-control mr-sm-2 " type="search" placeholder="Search" aria-label="Search" style="width: 40vw;height: 8vh;">
    				<button class="btn btn-outline-success my-1 my-sm-0 bg-white" type="submit" style="height: 8vh;"> <i class="fas fa-search"></i></button>
 				</form>
 			</div>
  	</div>


    <div class="H3 container-fluid p-0">
      <div class="row">
      <p class="now" onclick="now_movie()">NOW PLAYING</p>
        <p> / </p>
      <p class="open" onclick="open_movie()">OPENING THIE WEEK</p>
        <p> / </p>
        <p class="soon" onclick="soon_movie()">COMING SOON</p>
        </div>
    </div>

    </div>

    <div class="H4 container-fluid p-0">
    	<div class="row ">
  			  <?php
          for ($i=1; $i < 9; $i++) { 
          ?>
            <div class="col-3">
            <div class="card" >
            <img class="card-img-top" src="./star wars-poster.jpg" alt="Card image cap">
             <div class="card-body">
              <h5 class="card-title">Star Wars</h5>
               <p class="card-text"><i class="fas fa-clock fa-2x"></i>  02 hours 50 minites</p>
             </div>
            </div>          
          </div>
          <?php          
          }
          ?> 
  		</div>
  	</div>

    <div class="H5 container-fluid p-0">
    	<div class="row ">
  			  <?php
          for ($i=1; $i < 9; $i++) { 
          ?>
            <div class="col-3">
            <div class="card" >
            <img class="card-img-top" src="./star wars-poster.jpg" alt="Card image cap">
             <div class="card-body">
              <h5 class="card-title">Star Wars</h5>
               <p class="card-text"><i class="fas fa-clock fa-2x"></i>  02 hours 50 minites</p>
             </div>
            </div>          
          </div>
          <?php          
          }
          ?> 
  		</div>
  	</div>

    <div class="H6 container-fluid p-0">
    	<div class="row ">
  			  <?php
          for ($i=1; $i < 9; $i++) { 
          ?>
            <div class="col-3">
            <div class="card" >
            <img class="card-img-top" src="./star wars-poster.jpg" alt="Card image cap">
             <div class="card-body">
              <h5 class="card-title">Star Wars</h5>
               <p class="card-text"><i class="fas fa-clock fa-2x"></i>  02 hours 50 minites</p>
             </div>
            </div>          
          </div>
          <?php          
          }
          ?> 
  		</div>
  	</div>
    

    <div class="H7 container-fluid p-0">
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
        <div class="btn container-fluid p-0">
         <p id="P"><i class="fas fa-angle-double-left"></i></p>
          <p id="A"><i class="fas fa-angle-double-right"></i></p>
        </div>
    </div>

    <div class="H8 container-fluid p-0">
      <div id="title" style="display: inline-block;">
      POPULAR COMMENTS
      </div>
    	<div class="row">
       <div class="col-3 pl-5 mt-3" style="margin: auto;">
         <div class="card" style="">
          <img class="card-img-top" src="./passengers-poster.jpg" alt="Card image cap">
          <div class="card-body">
          <h5 class="card-title">Passengers</h5>
            <p class="card-text">Marks</p>
            <a href="#" class="btn btn-primary">Read More</a>
          </div>
        </div>
        <div class="card" style="">
          <img class="card-img-top" src="./headline-poster.jpg" alt="Card image cap">
          <div class="card-body">
          <h5 class="card-title">Card title</h5>
            <p class="card-text">Marks</p>
            <a href="#" class="btn btn-primary">Read More</a>
          </div>
        </div>
       </div>
       <div class="col-5 mt-3">
         <div class="card" style="">
          <img class="card-img-top" src="./ready player one poster.jpg" alt="Card image cap">
          <div class="card-body">
          <h5 class="card-title">Card title</h5>
            <p class="card-text">Marks</p>
            <a href="#" class="btn btn-primary">Read More</a>
          </div>
        </div>
       </div> 
       <div class="col-3 pr-5 mt-3">
         <div class="card" style="">
          <img class="card-img-top" src="./headline-poster.jpg" alt="Card image cap">
          <div class="card-body">
          <h5 class="card-title">Card title</h5>
            <p class="card-text">Marks</p>
            <a href="#" class="btn btn-primary">Read More</a>
          </div>
        </div>
        <div class="card" style="">
          <img class="card-img-top" src="./passengers-poster.jpg" alt="Card image cap">
          <div class="card-body">
          <h5 class="card-title">Card title</h5>
            <p class="card-text">Marks</p>
            <a href="#" class="btn btn-primary">Read More</a>
          </div>
        </div>
       </div>  
      </div>
    </div>

    <div class="H9 container-fluid p-0">
      <div class="row">
        <div class="col-6" style="text-align: center;">
          <h1 style=" font-size: 5vw;">
            I-Movie
          </h1>
          <h4 style=" font-size: 3vw;">
            Cinema In Your Eyes
          </h4>
        </div>

        <div class="col-1"></div>
        <div class="col-5" style="font-size: 2vw">
          <h4 style="text-align: center">Contact Us</h6>
          <p><i class="fas fa-paper-plane"></i> 1390 Prince of Wales Dr Unit 307</p>
          <p><i class="fas fa-envelope"></i> shihuiwang1990@gmail.com</p>
          <p><i class="fas fa-phone"></i> 613-252-8858</p>
        </div>
      </div>
    </div>
    <div class="H10 container-fluid p-0">
      <p><i class="fas fa-copyright">copyright 2018 I-Moive</i></p>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
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
    $(this).css('color',' #fe7900');
  });
  $('.H3 .open').mouseover(function(){
    $(this).css('color','red');
  });
  $('.H3 .open').mouseleave(function(){
    $(this).css('color','#fe7900');
  });
  $('.H3 .soon').mouseover(function(){
    $(this).css('color','red');
  });
  $('.H3 .soon').mouseleave(function(){
    $(this).css('color','#fe7900');
  });
  function now_movie(){
  $('.H4').show();
  $('.H5').hide();
  $('.H6').hide();
  $('.H3 .open').css("color","#fe7900");
  $('.H3 .soon').css("color","#fe7900");
  $('.H3 .now').mouseleave(function(){
    $(this).css('color','red');
  });
  }
   function open_movie(){
  $('.H5').show();
  $('.H4').hide();
  $('.H6').hide();
  $('.H3 .now').css("color","#fe7900");
  $('.H3 .soon').css("color","#fe7900");
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