<?php
     session_start();
	 
	   $servername= "localhost";
		$username= "root";
		$password= "1234";
		$dbname = "room_booking";
		
		$conn= mysqli_connect($servername,$username,$password,$dbname);
	   if(isset($_POST['submit'])){
		   
	   
	   $email=  mysqli_real_escape_string($conn,$_POST['email']);
	   $pass =  mysqli_real_escape_string($conn,$_POST['password']);
	   
	   //error handlers
	   //check for empty field
	   
	   if(empty($email) || empty($pass)){
		   
		   header("Location:Room.php?signup=empty");
		   exit();
	   }
	     else{
                     $sql = "SELECT *FROM signup WHERE Email='$email';";
                     $result= mysqli_query($conn,$sql);
                     $resultCheck = mysqli_num_rows($result);
                     
                     if($resultCheck <1){
                         header("Location:Room.php?login=error");
                         exit();
					 }
					 else{
						 if($row=mysqli_fetch_assoc($result)){
							 
								  if( $resultCheck === 1 && $row['Password'] == $pass ) {
                                   
									
								      $_SESSION['email'] = $row['Email'];
								      $_SESSION['pass'] = $row['Password'];
                                     header("Location: Room.php?successful");
									 exit();
                               } else {
                                 echo "Please insert correct login details";
                                }
		                      }
					 }
		}
	   }
		else{
			   header("Location:Room.php?login=not matched");
			   exit();
		}
		?>
	        