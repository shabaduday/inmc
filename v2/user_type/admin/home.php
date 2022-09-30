<?php
  session_start();
  
  if(isset($_SESSION['acc_id'])){
    @include '../../config.php';
    $acc_id = $_SESSION['acc_id'];
    $select = mysqli_query($conn, "SELECT * FROM `account` WHERE acc_id = '$acc_id' ") or die('query failed');
    $fetch = mysqli_fetch_assoc($select);
    $name = $fetch['givenname'];
    $image = $fetch['image'];
    $user_type = $fetch["user_type"];
  } else {
    header('location:../../login.php');
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Home</title>
    <link rel="stylesheet" href="../../css/home.css">
    <link rel="stylesheet" href="../../css/header.css">
    <link rel="stylesheet" href="../../css/generals.css">
  </head>
  <body>
    <?php @include '../../header.php'; ?> 
    <div class="home-container">
      <div class="total-container">
        <p class="total-title">TOTAL MONEY OF COOPERATIVE</p>
        <p class="total-description">
        You ask me if I love you and I choke on my reply.
        I'd rather hurt you, honestly than mislead you with a lie.
        And who am I to judge you on what you say or do?
        I'm only just beginning to see the real you.
        And sometimes when we touch. The honesty's too much
        and I have to close my eyes and hide. I wanna hold you 'til I die.
        'Til we both break down and cry. I wanna hold you 'til the fear in me subsides.
        You ask me if I love you and I choke on my reply.
        I'd rather hurt you, honestly than mislead you with a lie.
        And who am I to judge you on what you say or do?
        I'm only just beginning to see the real you.
        And sometimes when we touch. The honesty's too much
        and I have to close my eyes and hide. I wanna hold you 'til I die.
        'Til we both break down and cry. I wanna hold you 'til the fear in me subsides.
        </p>
      </div>
      <div class="profile-container">
        <img src="../../images/default-avatar.png">
        <div class=profile-info>
          <p class="profile-name"><?php echo $name; ?></p>
          <a href="" class="btn-update-profile">update profile</a>
          <a href="../../logout.php" class="btn-logout">logout</a>
        </div>
      </div>
    </div>
    <div class="subhome-container">
      <div class="subtotal-container">
        <p class="subtotal-title">TOTAL MONTHLY SHARE</p>
        <p class="subtotal-description">
        You ask me if I love you and I choke on my reply.
        I'd rather hurt you, honestly than mislead you with a lie.
        And who am I to judge you on what you say or do?
        I'm only just beginning to see the real you.
        And sometimes when we touch. The honesty's too much
        and I have to close my eyes and hide. I wanna hold you 'til I die.
        'Til we both break down and cry. I wanna hold you 'til the fear in me subsides.
        You ask me if I love you and I choke on my reply.
        I'd rather hurt you, honestly than mislead you with a lie.
        And who am I to judge you on what you say or do?
        I'm only just beginning to see the real you.
        And sometimes when we touch. The honesty's too much
        and I have to close my eyes and hide. I wanna hold you 'til I die.
        'Til we both break down and cry. I wanna hold you 'til the fear in me subsides.
        </p>
      </div>
      <div class="subtotal-container">
        <p class="subtotal-title">TOTAL ACTOR LOAN</p>
        <p class="subtotal-description">
        You ask me if I love you and I choke on my reply.
        I'd rather hurt you, honestly than mislead you with a lie.
        And who am I to judge you on what you say or do?
        I'm only just beginning to see the real you.
        And sometimes when we touch. The honesty's too much
        and I have to close my eyes and hide. I wanna hold you 'til I die.
        'Til we both break down and cry. I wanna hold you 'til the fear in me subsides.
        You ask me if I love you and I choke on my reply.
        I'd rather hurt you, honestly than mislead you with a lie.
        And who am I to judge you on what you say or do?
        I'm only just beginning to see the real you.
        And sometimes when we touch. The honesty's too much
        and I have to close my eyes and hide. I wanna hold you 'til I die.
        'Til we both break down and cry. I wanna hold you 'til the fear in me subsides.
        </p>
      </div>
      <div class="subtotal-container">
        <p class="subtotal-title">TOTAL BORROWER</p>
        <p class="subtotal-description">
        You ask me if I love you and I choke on my reply.
        I'd rather hurt you, honestly than mislead you with a lie.
        And who am I to judge you on what you say or do?
        I'm only just beginning to see the real you.
        And sometimes when we touch. The honesty's too much
        and I have to close my eyes and hide. I wanna hold you 'til I die.
        'Til we both break down and cry. I wanna hold you 'til the fear in me subsides.
        You ask me if I love you and I choke on my reply.
        I'd rather hurt you, honestly than mislead you with a lie.
        And who am I to judge you on what you say or do?
        I'm only just beginning to see the real you.
        And sometimes when we touch. The honesty's too much
        and I have to close my eyes and hide. I wanna hold you 'til I die.
        'Til we both break down and cry. I wanna hold you 'til the fear in me subsides.
        </p>
      </div>
    </div>
  </body>
</html>