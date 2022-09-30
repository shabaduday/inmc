<?php 
	@include '../../config.php';

  $loan_types_id = $_REQUEST["id"];		/* changed to loan_types_id */

	$query_edit_loan = mysqli_query($conn, "SELECT * FROM loan_types WHERE loan_types_id ='$loan_types_id'");		/* finding loan_types_id instead of acc_id */
  

	while($row_edit_loan = mysqli_fetch_assoc($query_edit_loan)) {
		$loan_types_id = $row_edit_loan["loan_types_id"];		/* fetching loan_types_id instead of acc_id */
		$db_loan_name = $row_edit_loan["loan_name"];
		$db_interest = $row_edit_loan["interest"];
		$db_max_amount = $row_edit_loan["max_amount"];
		$db_loan_lengths = $row_edit_loan["loan_lengths"];
	}

	echo "<h1>Edit Loan</h1>";
	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Edit Loan</title>
		<link rel="stylesheet" href="../../css/header.css">
    <link rel="stylesheet" href="../../css/generals.css">
	</head>
	<body>
		<?php @include '../../header.php'; ?>
		<form method="POST" action="update_loan.php">

    <input type="hidden" name="loan_types_id" value="<?php echo $loan_types_id; ?>">		<!-- inserting loan_types_id to make a request instead of acc_id -->

    <input type="text" name="new_loan_name" value="<?php echo $db_loan_name; ?>">
    <br>
    <input type="text" name="new_interest" value="<?php echo $db_interest; ?>">
    <br>
    <input type="number" name="new_max_amount" value="<?php echo $db_max_amount; ?>">
    <br>
    <input type="text" name="new_loan_lengths" value="<?php echo $db_loan_lengths; ?>">
    <br>
  
    <input type="submit" value="Update"> &nbsp; <a href="loan-type.php">Cancel</a>
    </form>
	</body>
</html>