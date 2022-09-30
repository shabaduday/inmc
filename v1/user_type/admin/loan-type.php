<?php
  session_start();

	if(isset($_SESSION['acc_id'])){
		@include '../../config.php';
		$acc_id = $_SESSION['acc_id'];

    $select_loan = mysqli_query($conn, "SELECT * FROM loan_types") or die('query failed');
	} else {
		header('location:../../login.php');
	}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Loan Type</title>
    <link rel="stylesheet" href="../../css/loan-type.css">
    <link rel="stylesheet" href="../../css/header.css">
    <link rel="stylesheet" href="../../css/generals.css">
  </head>
  <body>
    <?php @include '../../header.php'; ?> 
    <table class="table">
			<thead>
				<tr>
					<th>Loan Types</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
      <?php 
        while ($fetch_loan = mysqli_fetch_assoc($select_loan)) {
          $loan_types_id = $fetch_loan['loan_types_id'];  /* changed from acc_id to loan_types_id */
          $db_loan_name = $fetch_loan['loan_name'];
          $db_interest = $fetch_loan['interest'];
          $db_max_amount = $fetch_loan['max_amount'];
          $db_loan_lengths = $fetch_loan['loan_lengths'];

          echo "<tr>\n";
          echo "  <td>Loan Name: ".$db_loan_name."</td>\n";
          echo "  <td>\n";
          echo "    <a href='edit_loan.php?id=".$loan_types_id."'>Edit</a> / <a href='delete_loan.php?id=".$loan_types_id."'>Delete</a>\n";  /* calling loan_types_id instead of acc_id */
          echo "  </td>\n";
          echo "</tr>\n";
          echo "<tr>\n";
          echo "  <td>Interests: ".$db_interest."</td>\n";
          echo "</tr>\n";
          echo "<tr>\n";
          echo "  <td>Max Amount: ".$db_max_amount."</td>\n";
          echo "</tr>\n";
          echo "<tr>\n";
          echo "  <td>Loan Lengths: ".$db_loan_lengths."</td>\n";
          echo "</tr>\n";
        }
      ?>
			</tbody>
   	</table>
    <div class=add-loan>
      <a href="add_loan.php" class="btn-add-loan">Add Loan</a>
    </div>
  </body>
</html>