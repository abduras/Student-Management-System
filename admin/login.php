<?php
  require_once './dbcon.php';
  session_start();

  if(isset($_SESSION['user_login'])){
  header('Location:index.php');
}

  if(isset($_POST['login'])){
    $username=$_POST['username'];
    $password=$_POST['password'];

    $username_check=mysqli_query($link, "SELECT * FROM `users` WHERE `username`='$username'");
    if(mysqli_num_rows($username_check)>0){
      $row=mysqli_fetch_assoc($username_check);

            if($row['password']==md5($password)){
              
              if($row['status']=='active'){

                $_SESSION['user_login']=$username;
                header('Location:index.php');
              }else{
                $status_inactive="Your status is inactive";
              }
            }else{
              $wrong_password="This password is wrong";

            }
            

    }else{
      $username_not_found="This Username not found";
    }
  }
  
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Management System</title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet">
  </head>
  <body>
    <div class="container animated shake">
      <h1 class="text-center">Student Management System</h1>
      <br/>
      <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
          <h2 class="text-center">Admin Login Form</h2>
            <form action="login.php" method="POST">
                <div>
                  <input type="text" placeholder="Username" name="username" required="" class="form-control">
                </div>
                 <div>
                  <input type="password" placeholder="Password" name="password" required="" class="form-control">
                </div>
                <br/>
                <div>
                  <input type="submit" value="Login" name="login" class="btn btn-info pull-right">
                  <a href="../">Back</a>
                </div>
            </form>
        </div>
      </div>
      <br/>
      <?php
          if(isset( $username_not_found)){
            echo '<div class="alert alert-danger col-sm-4 col-sm-offset-4">'. $username_not_found.'</div>';} ?>
       <?php
          if(isset($wrong_password)){
            echo '<div class="alert alert-danger col-sm-4 col-sm-offset-4">'. $wrong_password.'</div>';} ?>
        <?php
          if(isset($status_inactive)){
            echo '<div class="alert alert-danger col-sm-4 col-sm-offset-4">'. $status_inactive.'</div>';} ?>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html> 