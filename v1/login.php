<?php

session_start();
@include 'config.php';
if(isset($_SESSION['acc_id'])){
   $acc_id = $_SESSION['acc_id'];
   $select = mysqli_query($conn, "SELECT * FROM `account` WHERE acc_id = '$acc_id' ") or die('query failed');
   $fetch = mysqli_fetch_assoc($select);
   $user_type = $fetch["user_type"];
   
   if($user_type == 'admin')
      echo "<script>window.location.href='user_type/admin/home.php?id=$acc_id';</script>";
   else
      echo "<script>window.location.href='user_type/user/home.php?id=$acc_id';</script>";
}

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['pass']));
 
   if($email && $pass) {
      $check_email = mysqli_query($conn, "SELECT * FROM `account` WHERE email = '$email' AND pass = '$pass'") or die('query failed');
      $check_email_row = mysqli_num_rows($check_email);
      if($check_email_row > 0){
         $fetch = mysqli_fetch_assoc($check_email);
         $acc_id = $fetch["acc_id"];
         $confirm_pass = $fetch["pass"];
         $user_type = $fetch["user_type"];

         if($pass == $confirm_pass) {
            $_SESSION["acc_id"] = $acc_id;

            if($user_type == 'admin')
               echo "<script>window.location.href='user_type/admin/home.php?id=$acc_id';</script>";
            else
               echo "<script>window.location.href='user_type/user/home.php?id=$acc_id';</script>";
         }
      }
   }else{
     $message[] = 'incorrect email or password!';
   }
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>INMC Log In</title>

   
   <link rel="stylesheet" href="css/login.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post" enctype="multipart/form-data">
      <h3>Log In Now</h3>
      <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      }
      ?>
      <input type="email" name="email" placeholder="Enter Email Address" class="box" required>
      <input type="password" name="pass" placeholder="Enter Password" class="box" required>
      <input type="submit" name="submit" value="Log In" class="btn">
      <p>Don't have an account? <a href="register.php">Register Now!</a></p>
   </form>

</div>

</body>
</html>