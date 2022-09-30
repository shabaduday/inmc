<?php 
  @include '../../config.php';

  $loan_types_id = $_POST["loan_types_id"];   /* getting loan_types_id post instead of acc_id */
  mysqli_query($conn, "DELETE FROM loan_types WHERE loan_types_id = '$loan_types_id'");   /* finding loan_types_id to delete the values instead of acc_id */

  echo "<script language='javascript'>alert('You deleted the loan successfully!')</script>";
	echo "<script>window.location.href='loan-type.php';</script>"; 
?>