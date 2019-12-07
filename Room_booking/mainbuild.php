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
      <a class="navbar-brand" href="#">Classroom</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
	     <span class="navbar-toggler-icon"></span>
		  

	  </button>
</div>
	 <div class="collapse navbar-collapse" id="navbarResponsive">
	    <ul class="navbar-nav ml-auto">
		   <li class="nav-item ac">
		   <a class="nav-link" href="Room.php">Home</a>
		   </li>

		   <li class="nav-item">
		   <a class="nav-link" href="cse.php">CSE Building</a>
		   </li>
		   <a class="nav-link" href="dt5.php">Daffodil Tower </a>
		    <li class="nav-item">
		   </li>
		   <li class="nav-item">
		   <?php 
            if(isset($_SESSION['email'])){
		    echo    '<form action="room_logout.php" method="POST">
				     <button class="nav-link" name="submit">Logout</button>
					 
					 </form></li></ul></div></nav>';
					      }  	 
			     else{
				 echo' <a href="Room.php">';}?>
				 
 <div class="container-fluid">
<div class="row jumbotron">
      <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
	    <p class="lead">By using this link, you can see the Class schedule of Main buiding</p>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
		   <a hrerf="#"<button type="button" class="btn btn-info">
		   Go to</button></a>
            </div>
</div>
 </div>

   
 <table class="table">
  <thead>
    <tr>
      <th scope="col">Classroom no.</th>
	  <th scope="col">Time schedule</th>
      <th scope="col">Available/Block</th>
      <th scope="col">Teacher Initial</th>
	  
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Main-201</th>
	  <td>8:30am-10:00am</td>
      <td>Available</td>
      <td>None</td>
	  
     
    </tr>
    <tr>
      <th scope="row">Main-302</th>
	  <td>11:30am-1:00pm</td>
      <td>Available</td>
      <td>None</td>
      
    </tr>

  </tbody>
</table>
</div>
</div>
<div class="container-fluid padding">
      <div class="row text-center padding">
         <div class="col-lg-6">
            
             <h3 class="display-5">If any room gets free then you can request.</h3>
             <a href="#myModal" data-toggle="modal" data-target="#myModal"><button type="button" class="btn btn-info btn-lg">Request</button>
			 </a>
          </div>
		  <div class="col-lg-6">
            
             <h3 class="display-5">Consult with Admin</h3>
             <a href="#" data-toggle="modal" ><button type="button" class="btn btn-info btn-lg">Contact</button>
			 </a>
          </div>
		  </div>
		  </div>
 <div class="container-fluid padding">
      <div class="row text-center padding">
         <div class="col-12">
            
             <h3 class="display-5">Only Admin can update information</h3>
             <a href="#myModal" data-toggle="modal" data-target="#myAdmin"><button type="button" class="btn btn-info btn-lg">Admin</button>
			 </a>
          </div>
		  </div>
		  </div>
		   <!--form-->

           <div class="modal fade" id="myModal">
		  <div class="modal-dialog text-content" id="myModal">
		    <div class="col-12 main-section">
			 <div class="modal-content">
			 <div class="modal-header">
                       <button type="button" class="close" data-dismiss="modal" aria-hidden="true">Cancel</button>
                                
                            </div>
			   <form class="col-12" action="visitorsmain.php" method="POST">
			    <div class="form-group">
				 <input type="text" class="form-control" name="user" placeholder="Enter your Username">
				 </div>
				<div class="form-group">
				 <input type="text" class="form-control" name="pur" placeholder="Enter purpose">
				 </div>
				 <div class="form-group">
				 <input type="text" class="form-control" name="room" placeholder="Enter Room No.">
				 </div>
				 <div class="form-group">
				 <input type="text" class="form-control" name="con" placeholder="Enter contact no.">
				 </div>
				 <div class="form-group">
				 <input type="text" class="form-control" name="email" placeholder="Enter Email">
				 </div>
				 <div class="form-group">
				 <input type="password" class="form-control" name="pass" placeholder="Enter Password">
				 </div>
	    <div class="container-fluid">
             <div class="row text-center">
                  <div class="col-12">
                    <button type="submit"  name="submit" class="btn btn-primary">Submit</button>
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

<!--Admin form-->
 <div class="modal fade" id="myAdmin">
		  <div class="modal-dialog text-content" id="myModal">
		    <div class="col-12 main-section">
			 <div class="modal-content">
			 <div class="modal-header">
                       <button type="button" class="close" data-dismiss="modal" aria-hidden="true">Cancel</button>
                                
                            </div>
			   <form class="col-12" action="adminmain.php" method="POST">
			    <div class="form-group">
				 <input type="text" class="form-control" name="user" placeholder="Enter Username">
				 </div>
				<div class="form-group">
				 <input type="password" class="form-control" name="pass" placeholder="Enter Password">
				 </div>
	    <div class="container-fluid">
             <div class="row text-center">
                  <div class="col-12">
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
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

</body>
</html>