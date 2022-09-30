<?php 
  session_start();
  @include 'config.php';
  $acc_id = $_SESSION['acc_id'];
  $acc_md5 = md5($acc_id);

  function rand_n($length=25) {
    $str = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
    $shuf = substr(str_shuffle($str), 0, $length);
    return $shuf;
  }

  $shuf_logout = rand_n(48);
  unset($_SESSION['acc_id']);
  session_unset();
  session_destroy();
  echo "<script>window.location.href='login.php?logout=$shuf_logout&v_1=$acc_md5';</script>";
  exit();
?>