<?php 
  session_start();
?>

<html>
<head>
  <?php include '../inc/head.php'; ?>
</head>

<header>
  <?php include '../inc/header.php'; ?>
</header>

<body>
<div class="profile-bar"><?php echo "Welcome, " . $_SESSION["currentUser"]; ?></div>
  <div id="about-content" class="content">
    <?php $pageTitle = "Meet the Team"; ?>
    <h3><?php echo $pageTitle?></h3>
    <br>
    <img id="aboutUsImg" src="/images/aboutBig.jpg" alt="About us image">
    <br>
    <p>
      Crypto Vitals was created by a student for the purpose of both completing the requirements of a senior project to
      get their degree as a softare engineer, but also to turn it into an on going product that could one day be a very
      handy tool to traders and investers in the crypto industry.
    </p>

    <br>

    <p>
      If you would like to donate to the project to help fund further development feel free too. Also if you have any
      suggestions or feedback I am also accepting that to make this the best tool possible.

      I am accepting ETH (or any other ERC20) at my ethereum address:
      <br>
      
      </p>

      <br>

      <div id="address">0x3f4321aF60EeE186E7Fd5877e8F9799eF1635738</div>
      <br>
     <div id="closing">
      Alternatively you can scan and deposit funds using the QR code below.
    </div>
    <span class="qrCode"><img class="qrCode" src="/images/Eth_QR.PNG" alt="Qr code">
    <br>
    <br>

<br>

    <br>
    <br>
  </div>
</body>

<footer>
  <?php 
    include ('../inc/footer.php'); 
   ?>
</footer>

</html>