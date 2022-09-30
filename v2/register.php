<?php

include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $address = mysqli_real_escape_string($conn, $_POST['add']);
   $contact = mysqli_real_escape_string($conn, $_POST['cont']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
   $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));
   $image = $_FILES['image']['name'];
   $image_size = $_FILES['image']['size'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_folder = 'uploaded_img/'.$image;

   $select = mysqli_query($conn, "SELECT * FROM `account` WHERE email = '$email' AND pass = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $message[] = 'user already exist'; 
   }else{
      if($pass != $cpass){
         $message[] = 'confirm password not matched!';
      }elseif($image_size > 2000000){
         $message[] = 'image size is too large!';
      }else{
         $insert = mysqli_query($conn, "INSERT INTO `account`(name, address, contact, email, pass, image, user_type)
          VALUES('$name','$address','$contact', '$email', '$pass', '$image','borrower')") or die('query failed');
         mysqli_query($conn, "INSERT INTO `borrower`(acc_id, borrower_prev_bal, borrower_penalty, borrower_curr_loan)
         VALUES(LAST_INSERT_ID(), '0', '0', 'None')") or die('query failed');
         if($insert){
            move_uploaded_file($image_tmp_name, $image_folder);
            $message[] = 'registered successfully!';
            header('location:login.php');
         }else{
            $message[] = 'registeration failed!';
         }
      }
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>INMC Register</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/login.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post" enctype="multipart/form-data">
      <h3>register now</h3>
      <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      }
      ?>
      <label for="name">Please Enter Your Full Name:</label>
      <input type="text" name="name" placeholder="Last Name, First Name Middile Initial." class="box" required>
      <label for="add">Please Enter Your Address:</label>
      <input type="text" name="add" placeholder="Zone/Street Brgy. Municipality/City, Province" class="box" required>
      <label for="cont">Please Enter Your Contact Number:</label>
      <input type="text" name="cont" placeholder="09#########" class="box" required>
      <label for="email">Please Enter Your Email Address:</label>
      <input type="email" name="email" placeholder="example@gmail.com" class="box" required>
      <label for="password">Password:</label>
      <input type="password" name="password" placeholder="Password" class="box" required>
      <label for="cpassword">Confirm Your Password:</label>
      <input type="password" name="cpassword" placeholder="Confirm Password" class="box" required>
      <!--<select name="user_type" class="box" required>
            <option value="borrower">Borrower</option>
                   </select>-->
      <label for="image">Profile Picture:</label>
      <input type="file" name="image" class="box" accept="image/jpg, image/jpeg, image/png">
      
      <input type="submit" name="submit" value="Register Now!" class="btn">
      <p>Already have an account? <a href="login.php">Log In Now!</a></p>
   </form>

</div>

</body>
</html>