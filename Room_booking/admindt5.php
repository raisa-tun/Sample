<?php
     session_start();
	 
	   $servername= "localhost";
		$username= "root";
		$password= "1234";
		$dbname = "room_booking";
		
		$conn= mysqli_connect($servername,$username,$password,$dbname);
	   if(isset($_POST['submit'])){
		   
	   
	   $user=  mysqli_real_escape_string($conn,$_POST['user']);
	   $pass =  mysqli_real_escape_string($conn,$_POST['pass']);
	   
	   //error handlers
	   //check for empty field
	   
	   if(empty($user) || empty($pass)){
		   
		   header("Location:dt5.php?signup=empty");
		   exit();
	   }
	    else{
                     $sql = "SELECT *FROM admin WHERE Username='$user';";
                     $result= mysqli_query($conn,$sql);
                     $resultCheck = mysqli_num_rows($result);
                     
                     if($resultCheck <1){
                         header("Location:dt5.php?login=error");
                         exit();
					 }
					 else{
						 if($row=mysqli_fetch_assoc($result)){
							 
								  if( $resultCheck === 1 && $row['Password'] == $pass ) {
                                   
									
								      $_SESSION['user'] = $row['Username'];
								      $_SESSION['pass'] = $row['Password'];
                                     header("Location: dt5.php?successful");
									 exit();
                               } else {
                                 echo "Please insert correct login details";
                                }
		                      }
					 }
		}
	   }
		else{
			   header("Location:dt5.php?login=not matched");
			   exit();
		}
		?>