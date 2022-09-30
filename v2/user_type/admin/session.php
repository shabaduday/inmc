<?php  
  session_start();
    
    if(isset($_SESSION['acc_id'])){
        @include '../../config.php';
        $acc_id = $_SESSION['acc_id'];
        $select = mysqli_query($conn, "SELECT * FROM `account` WHERE acc_id = '$acc_id' ") or die('query failed');
        $fetch = mysqli_fetch_assoc($select);
        $name = $fetch['givenname'];
    } else {
        header('location:../../login.php');
    }
?>