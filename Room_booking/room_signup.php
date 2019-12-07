<?php
        
		$servername= "localhost";
		$username= "root";
		$password= "1234";
		$dbname = "room_booking";
		
		$conn= mysqli_connect($servername,$username,$password,$dbname);
	   
	   if(isset($_POST['submit'])){
		   
	   
	   $email =  mysqli_real_escape_string($conn,$_POST['email']);
	   $user =  mysqli_real_escape_string($conn,$_POST['user']);
	   $pass = mysqli_real_escape_string($conn,$_POST['pass']);
	  
	   $check = mysqli_real_escape_string($conn,$_POST['check']);
	  
	   
	   //error handlers
	   //check for empty field
	   
	   if(empty($user) || empty($email)|| empty($pass) || empty($check)){
		   
		   header("Location:Room.php?signup=empty");
		   exit();
	   }
	   else{
		   //check empty characters are valid
		   if(!preg_match("/^[a-zA-Z]*$/",$user)){
			   
		    header("Location:Room.php?signup=invalid");
		    exit();
		   }
		   else{
			   //check if email is valid
                  if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                    header("Location:Room.php?signup=invalid");
		             exit(); 
				  }
                else{
                     $sql = "SELECT *FROM signup WHERE Email='$email';";
                     $result= mysqli_query($conn,$sql);
                     $resultcheck = mysqli_num_rows($result);
                     
                     if($resultcheck>0){
                         header("Location:Room.phpsignup=usertaken");
                         exit();
				
				         }
                     else{
                          //hashing the password
						  //$hashedpass = password_hash($pass,PASSWORD_DEFAULT);
						  
                           $sql = "INSERT INTO signup VALUES ('$user','$email','$pass','$check');";
						   mysqli_query($conn,$sql);
						   header("Location:Room.php?signup=success");
                           exit();
					 }
				 }
				}
	   }
	   }
	   else{
		      header("Location:Room.php?signup");
                         exit();
	   }
	   ?>
	   