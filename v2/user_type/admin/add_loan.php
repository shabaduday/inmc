<?php 
	@include '../../config.php';
  
  $acc_id = $loan_name = $interest = $max_amount = $loan_lengths = "";
  $acc_id_err = $loan_name_err = $interest_err = $max_amount_err = $loan_lengths_err = "";

  if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(empty($_POST["acc_id"]))
      $acc_id_err = "Borrower ID is required!";
    else
      $acc_id = $_POST["acc_id"];
    if(empty($_POST["loan_name"]))
      $loan_name_err = "Loan Name is required!";
    else
      $loan_name = $_POST["loan_name"];

    if(empty($_POST["interest"]))
      $interest_err = "Interest is required!";
    else
      $interest = $_POST["interest"];

    if(empty($_POST["max_amount"]))
      $max_amount_err = "Max Amount is required!";
    else
      $max_amount = $_POST["max_amount"];

    if(empty($_POST["max_amount"]))
      $loan_lengths = "Loan Lengths is required!";
    else
      $loan_lengths = $_POST["loan_lengths"];
  }
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Add Loan</title>
		<link rel="stylesheet" href="../../css/header.css">
    <link rel="stylesheet" href="../../css/generals.css">
	</head>
	<body>
		<?php @include '../../header.php'; 
      echo "<h1>Add Loan</h1>";
    ?>
		<form method="POST" action="<?php htmlspecialchars("PHP_SELF"); ?>">

    
    
    
    Borrower Name/ID: <input type="number" name="acc_id" value="<?php echo $acc_id; ?>">
    <br>
    Loan Names: <input type="text" name="loan_name" value="<?php echo $loan_name; ?>">
    <br>
    Interests: <input type="text" name="interest" value="<?php echo $interest; ?>">
    <br>
    Max Amount: <input type="number" name="max_amount" value="<?php echo $max_amount; ?>">
    <br>
    Loan Lengths: <input type="text" name="loan_lengths" value="<?php echo $loan_lengths; ?>">
    <br>
  
    <input type="submit" value="Add Loan"> &nbsp; <a href="loan-type.php">Cancel</a>
    </form>
	</body>
</html>

<?php 

  if($acc_id && $loan_name && $interest && $max_amount && $loan_lengths) {
    $query_add_loan = mysqli_query($conn, "INSERT INTO loan_types(acc_id, loan_name, interest, max_amount, loan_lengths)
                                            VALUES('$acc_id', '$loan_name', '$interest', '$max_amount', '$loan_lengths')");

    echo "<script language='javascript'>alert('You added the loan successfully!')</script>";
    echo "<script>window.location.href='loan-type.php';</script>";
  }

?>