<?php 
  @include '../../config.php';

  $borrower_id = $_POST["borrower_id"];
  mysqli_query($conn, "DELETE FROM borrower WHERE borrower_id = '$borrower_id'");

  echo "<script language='javascript'>alert('You deleted the borrower successfully!')</script>";
	echo "<script>window.location.href='borrower.php';</script>"; 
?>