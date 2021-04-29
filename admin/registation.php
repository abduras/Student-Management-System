<?php
require_once 'dbcon.php';

  if(isset($_POST['registation'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $c_password=$_POST['c_password'];
    $photo=explode('.',$_FILES['photo']['name']);
    $photo=end($photo);
    $photo_name=$username.'.'.$photo;

    $input_error=array();

    if(empty($name)){
    	$input_error['name']="The Name Field is Required";
    }
     if(empty($email)){
    	$input_error['email']="The Email Field is Required";
    }
     if(empty($username)){
    	$input_error['username']="The Username is Required";
    }
     if(empty($password)){
    	$input_error['password']="The Password is Required";
    }
     if(empty($c_password)){
    	$input_error['c_password']="The C_Password is Required";
    }

    if(count($input_error)==0){
    	$email_check=mysqli_query($link,"SELECT * FROM `users` WHERE `email`='$email';");
    	if(mysqli_num_rows($email_check)==0){

    	$username_check=mysqli_query($link,"SELECT * FROM `users` WHERE `username`='$username';");
    	if(mysqli_num_rows($username_check)==0){

    		if(strlen($username)>2){

    		if(strlen($password)>2){

    			if($password==$c_password){
            $password=md5($password);
    				

    				$query="INSERT INTO `users`(`name`, `email`, `username`, `password`, `photo`, `status`) VALUES('$name','$email','$username','$password','$photo_name','inactive')";
    				$result=mysqli_query($link,$query);

    				move_uploaded_file($_FILES['photo']['tmp_name'],'images/'.$photo_name);
    				header('location:registation.php');


    			}else{
    				$password_not_match="Confirm Password Not Match!";
    			}

    		}else{
    			$password_l="Password More Than 8 Characters";
    		}
    			
    		}else{
    			$username_l="Username More Than 8 Characters";
    		}

    	}else{
    		$username_error="This Username Already Exists";
    	}

    	}else{
    		$email_error="This Email Address Already Exists";
    	}
    }
    

    
    	
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Registation Form</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
      <div class="container">
        <h1>User Registation Form</h1>
        <hr/>
        <div class="row">
          <div class="col-md-12">
             <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">
               <div class="form-group">
                  <label for="name" class="control-label col-sm-1">Name</label>
                  <div class="col-sm-4">
                    <input class="form-control" id="name" type="text" name="name" placeholder="Enter Your Name">
                  </div>

                  <label class="error"><?php if(isset($input_error['name'])){echo $input_error['name'];}?></label>

               </div>
                <div class="form-group">
                  <label for="email" class="control-label col-sm-1">Email</label>
                  <div class="col-sm-4">
                    <input class="form-control" id="email" type="email" name="email" placeholder="Enter Your Email">
                  </div>

				  <label class="error"><?php if(isset($input_error['email'])){echo $input_error['email'];}?></label>
				  <label class="error"><?php if(isset($email_error)){echo $email_error;}?></label>

               </div>
                <div class="form-group">
                  <label for="username" class="control-label col-sm-1">Username</label>
                  <div class="col-sm-4">
                    <input class="form-control" id="username" type="text" name="username" placeholder="Enter Your Username">
                  </div>

				   <label class="error"><?php if(isset($input_error['username'])){echo $input_error['username'];}?></label>
				   <label class="error"><?php if(isset($username_error)){echo $username_error;}?></label>
				   <label class="error"><?php if(isset($username_l)){echo $username_l;}?></label>


               </div>
                <div class="form-group">
                  <label for="password" class="control-label col-sm-1">Password</label>
                  <div class="col-sm-4">
                    <input class="form-control" id="password" type="password" name="password" placeholder="Enter Your Confirm Password">
                  </div>

                  <label class="error"><?php if(isset($input_error['password'])){echo $input_error['password'];}?></label>
                  <label class="error"><?php if(isset($password_l)){echo $password_l;}?></label>

               </div>
                <div class="form-group">
                  <label for="c_password" class="control-label col-sm-1">Confirm Password</label>
                  <div class="col-sm-4">
                    <input class="form-control" id="c_password" type="password" name="c_password" placeholder="Enter Your Confirm Password">
                  </div>

                  <label class="error"><?php if(isset($input_error['c_password'])){echo $input_error['c_password'];}?></label>
                  <label class="error"><?php if(isset($password_not_match)){echo $password_not_match;}?></label>

                  
               </div>
                <div class="form-group">
                  <label for="photo" class="control-label col-sm-1">Photo</label>
                  <div class="col-sm-4">
                    <input id="photo" type="file" name="photo">
                  </div>
               </div>
               <div class="col-sm-4 col-sm-offset-1">
                  <input type="submit" value="Registation" name="registation" class="btn btn-primary">
               </div>
             </form>
          </div>
        </div>
        <br/>
        <p>If you have an account? then please <a href="login.php">Login</a></p>
      </div>
  </body>
</html>