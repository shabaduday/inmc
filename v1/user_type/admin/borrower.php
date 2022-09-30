<?php
	session_start();

	if(isset($_SESSION['acc_id'])){
		@include '../../config.php';
		$acc_id = $_SESSION['acc_id'];
		
		$select_borrower = mysqli_query($conn, "SELECT b.acc_id, a.name, a.address, a.contact, b.borrower_prev_bal, b.borrower_penalty, a.email, a.pass, b.borrower_curr_loan 
																			FROM `account` a, `borrower` b 
																			WHERE a.acc_id = b.acc_id") or die('query failed');
	} else {
		header('location:../../login.php');
	}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Borrower</title>
    <link rel="stylesheet" href="../../css/borrower.css">
    <link rel="stylesheet" href="../../css/header.css">
    <link rel="stylesheet" href="../../css/generals.css">
  </head>
  <body>
    <?php @include '../../header.php'; ?>
		<div class="borrower-container">
			<p class="borrower-title">BORROWER</p>
		</div> 
    <table class="table">
			<thead>
				<tr>
					<th>Borrower ID</th>
					<th>Name</th>
					<th>Address</th>
					<th>Contact</th>
					<th>Previous Balance</th>
					<th>Penalty</th>
					<th>Email</th>
					<th>Password</th>
					<th>Current Loan</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			<?php
				while ($fetch_borrower = mysqli_fetch_assoc($select_borrower)) {
					$borrower_id = $fetch_borrower['acc_id'];
					echo "<tr>\n";
					foreach ($fetch_borrower as $item) {
						echo "<td>" . $item . "</td>\n";
					}
					echo "<td>
									<button onclick='editBorrower()'>Edit</a> 
									<button onclick='deleteBorrower()'>Delete</a>
									<script language='javascript'>
										function editBorrower() {
											window.location.href='edit_borrower.php?id=$borrower_id';
										}
										function deleteBorrower() {
											window.location.href='delete_borrower.php?id=$borrower_id';
										}
									</script>";
						echo "</td>";
					echo "</tr>\n";
				}
			?>
			</tbody>
   	</table>
  </body>
</html>