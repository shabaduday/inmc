<?php 
  @include '../../config.php';

  $loan_types_id = $_POST["loan_types_id"];   /* get the loan_types_id post instead of acc_id */
  
  $new_loan_name = $_POST["new_loan_name"];
  $new_interest = $_POST["new_interest"];
  $new_max_amount = $_POST["new_max_amount"];
  $new_loan_lengths = $_POST["new_loan_lengths"];

  mysqli_query($conn, "UPDATE loan_types SET loan_name='$new_loan_name', interest='$new_interest', max_amount='$new_max_amount', loan_lengths='$new_loan_lengths' WHERE loan_types_id='$loan_types_id'");   /* finding loan_types_id to update the values instead of acc_id */

  echo "<script language='javascript'>alert('You updated the loan successfully!')</script>";
	echo "<script>window.location.href='loan-type.php';</script>"; 
?>