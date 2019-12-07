
<?php
     session_start();
	 ?>
	 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="room.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" crossorigin="anonymous"></script>
 </script>
  </head>
 
  <body>
 <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
  <div class="container-fluid">
  <div class="navbar-header">
      <a class="navbar-brand text-danger" href="#">ClassRoom BooKing</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
	     <span class="navbar-toggler-icon"></span>
		  

	  </button>
</div>
	 <div class="collapse navbar-collapse" id="navbarResponsive">
	    <ul class="navbar-nav ml-auto">
		   <li class="nav-item ac">
		   <a class="nav-link" href="#">Home</a>
		   </li>
		  
		   
		   <li class="nav-item">
		    <?php
         if(isset($_SESSION['email'])){
		    echo    '<form action="room_logout.php" method="POST">
				     <button class="nav-link" name="submit">Logout</button>
					 
					 </form></li></ul></div></nav>';
					      }  	 
			     else{
                     echo'
		   
		   <a class="nav-link" href="#myModal" data-toggle="modal" data-target="#mySign">Signup</a>
		   </li>
		   <li class="nav-item">
		   
		    <a class="nav-link" href="#myModal" data-toggle="modal" data-target="#myModal">Login
			 </a>
		   </li>
		   </ul>
	</div>
 </nav>

 <!--Login-->
   <div class="modal fade" id="myModal">
		  <div class="modal-dialog text-content" id="myModal">
		    <div class="col-12 main-section">
			 <div class="modal-content">
			 <div class="modal-header">
                       <button type="button" class="close" data-dismiss="modal" aria-hidden="true">Cancel</button>
                                
                            </div>
			   <form class="col-12" action="room_login.php" method="POST" >
			   
				 <div class="form-group">
				 <input type="text" class="form-control" name="email" placeholder="Enter Email">
				 </div>
				 <div class="form-group">
				 <input type="password" class="form-control" name="password" placeholder="Enter Password">
				 </div>
	    <div class="container-fluid">
             <div class="row text-center">
                  <div class="col-12">
                    <button type="submit" name="submit" class="btn btn-primary">Login</button>
               </div></div>
			   </div>
         </form>
		 <div class="container-fluid padding">
         <div class="row text-center padding">
             <div class="col-12">
                  <a href="#">Forgot Password</a>
              </div>
			  </div>
</div>
</div><!--End modal content-->
</div>
</div>  
</div>        

<!--Signup-->
         <div class="modal fade" id="mySign">
		  <div class="modal-dialog text-content" id="myModal">
		    <div class="col-12 main-section">
			 <div class="modal-content">
			 <div class="modal-header">
                       <button type="button" class="close" data-dismiss="modal" aria-hidden="true">Cancel</button>
                                
                            </div>
			   <form class="col-12" action="room_signup.php" method="POST">
			   <div class="form-group">
				 <input type="text" class="form-control" name="user" placeholder="Username">
				 </div>
				 <div class="form-group">
				 <input type="text" class="form-control" name="email" placeholder="Enter Email">
				 </div>
				 <div class="form-group">
				 <input type="password" class="form-control" name="pass" placeholder="Enter Password">
				 </div>
             <div class="form-check">
			  <div class="container-fluid">
		
             <div class="row text-center">
                  <div class="col-6">
                  <input type="radio" class="form-check-input" name="check">
                   <label class="form-check-label" for="exampleCheck1">Teacher</label></div>
				   <div class="col-6">
				   <input type="radio" class="form-check-input" name="check">
                   <label class="form-check-label" for="exampleCheck1">Student</label></div>
              </div></div></div>
	    <div class="container-fluid">
		
             <div class="row text-center">
                  <div class="col-12">
                    <button type="submit" name="submit" class="btn btn-primary">Signup</button>
               </div></div>
			   </div>
         </form>
		 <div class="container-fluid padding">
         <div class="row text-center padding">
             <div class="col-12">
                  <a href="#">Forgot Password</a>
              </div>
			  </div>
</div>
</div><!--End modal content-->
</div>
</div>  
				 </div>  ';}?>
				

 <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
             <ul class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ul>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
 <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="cls3.jpg" alt="First slide">
	  <div class="carousel-caption">
	     <h1 class="display-2 text-danger">Search for classroom from CSE buiding</h1>
		 
		
		 </div>
 </div>
  <div class="carousel-item">
      <img class="d-block w-100" src="cls5.jpg" alt="Second slide">
	  <div class="carousel-caption">
	         <h1 class="display-2 text-info">Search for classroom from Daffodil Tower</h1>
		       
		        
		     </div>	
 </div>
    <div class="carousel-item">
         <img class="d-block w-100" src="cls6.jpg" alt="Third slide">
	       <div class="carousel-caption">
	         <h1 class="display-2 text-primary">Search for classroom from Main buiding</h1>
		       <!--<button type="button" class="btn btn-outline-light btn-lg"></button>-->
		         
		     </div>		 
  </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  </div>
</div>
</div>
<!---Jumbotron-->
<div class="container-fluid">
<div class="row jumbotron">
      <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
	    <p class="display-4">Welcome to the website to find out available classrooms...</p>
		</div>
		
</div>
 </div>
	 
<!--welcome Section-->
<div class="container-fluid padding">
<div class="row welcome text-center">
    <div class="col-12">
	     <h1 class="display-4">Find with easy way</h1>
		 
		 <hr class="my-4">
		 </div>
		 
		<div class="col-12">
		   <p class="lead">Links are given below to find out available classrooms.</p>
		   
		</div>
	</div>
	</div>
	
	<!--Three Column Section-->
	  <div class="container-fluid padding">
      <div class="row text-center padding">
         <div class="col-xs-12 col-sm-6 col-md-4">
            
             <h3>CSE Building</h3>
	<?php
         if(!isset($_SESSION['email'])){
			 
		 echo' <a href="#myModal" data-toggle="modal" data-target="#myModal">';}
		   else{
		   echo' <a href="cse.php">';}?>
			   <button type="button" class="btn btn-info btn-lg">View details</button></a>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4">
             
             <h3>Daffodil Tower</h3>
	 <?php
         if(!isset($_SESSION['email'])){
			 
		 echo' <a href="#myModal" data-toggle="modal" data-target="#myModal"> ';}
		  else{
		   echo'
		  <a href="dt5.php">';}?>
		  <button type="button" class="btn btn-info btn-lg">View details</button></a>
          </div>
		  <div class="col-sm-12 col-md-4">
             
             <h3>Main Building</h3>
	 <?php
         if(!isset($_SESSION['email'])){
			 
		 echo' <a href="#myModal" data-toggle="modal" data-target="#myModal"> ';}
		  else{
		   echo'
		  <a href="mainbuild.php">';}?><button type="button" class="btn btn-info btn-lg">View details</button></a>
        </div>
  </div>
		  <hr class="my-4">
		  </div>
	<!--Two column Section-->
    <div class="Container-fluid padding">
    <div class="row text-center padding">
       <div class="col-lg-6">
          <h2 class="display-4">If you wanna check!</h2>
          <p>Click on below "Details" to check out DIU Notice Board.</p>
		  <br>
		  <a href="https://daffodilvarsity.edu.bd/noticeboard" class="btn btn-info">Details</a>
		  </div>
		  <div class="col-lg-6">
		    <img src="cse.jpg" class="img-fluid">
			</div>
		</div>
		</div>
		<hr class="my-4">
	
	<!--Our philosophy-->
	<div class="Container-fluid padding">
    <div class="row text-center padding">
       <div class="col-12">
          <h2 class="display-4">Our Motive</h2></div>
		  <div class="col-12">
          <p class="lead">Several times we need to face many difficulties to manage a classroom for extra classes.Though we managed our classroom, we need to face issues because that classroom has already engaged by others </p>
		  </div><br>
		  
		  </div>
		  <!--<div class="col-lg-6">
		    <img src="cse.jpg" class="img-fluid">
			</div>-->
		</div>
		</div>
		<hr class="my-4">
	<!--Connect-->
	<div class="container-fluid padding">
	<div class="row text-center padding">
	    <div class="col-12">
		    <h2>Connect</h2>
			</div>
		<div class="col-12 social padding">
		    <a href="#"><i class="fab fa-facebook"></i></a>
			<a href="#"><i class="fab fa-twitter"></i></a>
			<a href="#"><i class="fab fa-google-plus-g"></i></a>
			<a href="#"><i class="fab fa-instagram"></i></a>
			<a href="#"><i class="fab fa-youtube"></i></a>
		</div>
		</div>
		</div>
 <!--Footer-->
 <footer>
     <div class="container-fluid padding">
	 <div class="row text-center">
	   <div class="col-md-4">
	     <h5>Classroom</h5>
		 <hr class="light">
		 <p>Join us</p>
		 <p>Feedback</p>
		 </div>
	  <div class="col-md-4">
	    <hr class="light">
		<h5>Our Hours</h5>
	    <hr class="light">
		<p>Saturday-Thursday</p>
		<p>8:30-6:00</p>
		<p>Friday: Closed</p>
	  </div>
	<div class="col-md-4">
	<hr class="light">
	     <h5>Contact Details</h5>
		 <hr class="light">
		 <p>Classroom</p>
		 <p>Daffodil International University</p>
		 <p>www.classroom.com<p>
		 <p>+01631663679</p>
		 
		 
		 </div>
		 <div class="col-md-12">
	       <hr class="light-100">
	     <h5>&copy;classroom.com</h5>
		 
		 
		 
		 </div>
		
	  </div>
	 </div>
	 </div>
	 </footer>
		
	  </body>
	  </html>
	  
	  
	  