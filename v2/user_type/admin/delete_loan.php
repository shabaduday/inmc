<?php 
	@include '../../config.php';

  $loan_types_id = $_REQUEST["id"];		/* requesting loan_types_id instead of acc_id */

	$query_delete_loan = mysqli_query($conn, "SELECT * FROM loan_types WHERE loan_types_id = '$loan_types_id'");		/* querying loan_types_id instead of acc_id */

	while($row_delete_loan = mysqli_fetch_assoc($query_delete_loan)) {
		$loan_types_id = $row_delete_loan["loan_types_id"];		/* fetching loan_types_id instead of acc_id */
		$db_loan_name = $row_delete_loan["loan_name"];
		$db_interest = $row_delete_loan["interest"];
		$db_max_account = $row_delete_loan["max_amount"];
		$db_loan_lengths = $row_delete_loan["loan_lengths"];
	}

	echo "<h1>Would you like to delete this loan?</h1>";
?>
<!DOCTYPE html>
	<head>
		<title>Delete Loan</title>
		<link rel="stylesheet" href="../../css/header.css">
    <link rel="stylesheet" href="../../css/generals.css">
	</head>
	<body>
		<?php @include '../../header.php'; ?>
		<form method="POST" action="delete_loan_now.php">

			<input type="hidden" name="loan_types_id" value="<?php echo $loan_types_id; ?>">		<!-- inserting loan_types_id to make a request instead of acc_id -->

			<br><br>

			<input type="submit" value="Yes"> &nbsp; <a href="loan-type.php">No</a>
		</form>
	</body>
</html>
