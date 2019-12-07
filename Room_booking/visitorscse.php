<?php
     session_start();
	 
	   $servername= "localhost";
		$username= "root";
		$password= "1234";
		$dbname = "room_booking";
		
		$conn= mysqli_connect($servername,$username,$password,$dbname);
	   if(isset($_POST['submit'])){
		
       $user=  mysqli_real_escape_string($conn,$_POST['user']);		
	   $pur=  mysqli_real_escape_string($conn,$_POST['pur']);
	   $room=  mysqli_real_escape_string($conn,$_POST['room']);
	   $con=  mysqli_real_escape_string($conn,$_POST['con']);
	   $email=  mysqli_real_escape_string($conn,$_POST['email']);
	   $pass =  mysqli_real_escape_string($conn,$_POST['pass']);
	   
	   //error handlers
	   //check for empty field
	   
	   if(empty($user) || empty($pur) || empty($room) || empty($con) || empty($email) || empty($pass)){
		   
		   header("Location:cse.php?signup=empty");
		   exit();
	   }
	    else{
		   //check empty characters are valid
		   if(!preg_match("/^[a-zA-Z]*$/",$user)){
			   
		    header("Location:cse.php?signup=invalid");
		    exit();
		   }
		   else{
			   //check if email is valid
                  if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                    header("Location:cse.php?signup=invalid");
		             exit(); 
				  }
                else{
                     $sql = "SELECT *FROM visitor WHERE Email='$email';";
                     $result= mysqli_query($conn,$sql);
                     $resultcheck = mysqli_num_rows($result);
                     
                     if($resultcheck>0){
                         header("Location:cse.php?signup=usertaken");
                         exit();
				
				         }
                     else{
                          //hashing the password
						  //$hashedpass = password_hash($pass,PASSWORD_DEFAULT);
						  
                           $sql = "INSERT INTO visitor VALUES ('$user','$pur','$room','$con','$email','$pass');";
						   mysqli_query($conn,$sql);
						   header("Location:cse.php?signup=successful");
                           exit();
					 }
				 }
				}
	   }
	   }
	   else{
		      header("Location:cse.php?signup");
                         exit();
	   }
	   ?>
	   