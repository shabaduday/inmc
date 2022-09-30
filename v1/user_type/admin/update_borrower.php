<?php 
  @include '../../config.php';

  $acc_id = $_POST["acc_id"];
  
  $new_name = $_POST["new_name"];
  $new_address = $_POST["new_address"];
  $new_contact = $_POST["new_contact"];

  mysqli_query($conn, "UPDATE account SET name='$new_name', address='$new_address', contact='$new_contact' WHERE acc_id='$acc_id'");

  echo "<script language='javascript'>alert('You updated the borrower successfully!')</script>";
	echo "<script>window.location.href='borrower.php';</script>"; 
?>