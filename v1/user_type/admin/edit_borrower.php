<?php 
	@include '../../config.php';

  $acc_id = $_REQUEST["id"];

	$query_edit_borrower = mysqli_query($conn, "SELECT * FROM account WHERE acc_id ='$acc_id'");
  

	while($row_edit_borrower = mysqli_fetch_assoc($query_edit_borrower)) {
		$db_acc_id = $row_edit_borrower["acc_id"];
    $db_name = $row_edit_borrower["name"];
    $db_address = $row_edit_borrower["address"];
    $db_contact = $row_edit_borrower["contact"];
	}

	echo "<h1>Edit your Borrower</h1>";
	
?>

<!DOCTYPE html>
	<head>
		<title>Edit Borrower</title>
		<link rel="stylesheet" href="../../css/header.css">
    <link rel="stylesheet" href="../../css/generals.css">
	</head>
	<body>
		<?php @include '../../header.php'; ?>
		<form method="POST" action="update_borrower.php">

    <input type="hidden" name="acc_id" value="<?php echo $acc_id; ?>">

    <input type="text" name="new_name" value="<?php echo $db_name; ?>">
    <br>
    <input type="text" name="new_address" value="<?php echo $db_address; ?>">
    <br>
    <input type="text" name="new_contact" value="<?php echo $db_contact; ?>">
    <br>
    
    <input type="submit" value="Update"> &nbsp; <a href="borrower.php">Cancel</a>
    </form>
	</body>
</html>