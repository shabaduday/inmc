<?php

@include '../../config.php';

$acc_id = "";
$acc_id_err = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {
  if(empty($_POST["acc_id"]))
    $acc_id_err = "Borrower ID is required!";
  else
    $acc_id = $_POST["acc_id"];
}

?>

<form method="POST" action="<?php htmlspecialchars("PHP_SELF"); ?>">
    
    Loan Names: <input type="text" name="loan_name" value="<?php echo $acc_id; ?>">
    <input type="submit" value="Add Loan"> &nbsp; <a href="loan-type.php">Cancel</a>
    </form>