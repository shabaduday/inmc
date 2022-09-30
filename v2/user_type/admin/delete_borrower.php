<?php 
	@include '../../config.php';

  $acc_id = $_REQUEST["id"];

	$query_delete_borrower = mysqli_query($conn, "SELECT * FROM borrower WHERE acc_id = '$acc_id'");

	while($row_delete_borrower = mysqli_fetch_assoc($query_delete_borrower)) {
		$borrower_id = $row_delete_borrower["borrower_id"];
		$db_borrower_acc_id = $row_delete_borrower["acc_id"];
		$db_borrower_prev_bal = $row_delete_borrower["borrower_prev_bal"];
		$db_borrower_penalty = $row_delete_borrower["borrower_penalty"];
		$db_borrower_curr_loan = $row_delete_borrower["borrower_curr_loan"];
	}

	echo "<h1>Would you like to delete this borrower?</h1>";
?>
<!DOCTYPE html>
	<head>
		<title>Delete Borrower</title>
		<link rel="stylesheet" href="../../css/header.css">
    <link rel="stylesheet" href="../../css/generals.css">
	</head>
	<body>
		<?php @include '../../header.php'; ?>
		<form method="POST" action="delete_borrower_now.php">

			<input type="hidden" name="borrower_id" value="<?php echo $borrower_id; ?>">

			<br><br>

			<input type="submit" value="Yes"> &nbsp; <a href="borrower.php">No</a>
		</form>
	</body>
</html>
