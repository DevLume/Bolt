<?php
  session_start();
  if(!($_SESSION['message'] != ''))
    $_SESSION['message'] = '';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./styles/Reset.css">
  <link rel = "stylesheet" type="text/css" href="./styles/style1.css">
  <link rel = "stylesheet" type="text/css" href="./styles/formStyle.css">
  <script type = "text/javascript" src="./scripts/userMan.js"></script>
</head>
<body>
<header>
  <div class="header" id="pageHeader">
    <div>
      <a href="index.php" class="logo"><img class="bolt-logo" src="./pics/bolt-logo.png" alt=""></a>
    </div>
  </div>
</header>
<div class="loginForm">
  <form action="backend\loginCall.php" method="get">
    <div class="formContainer">

      <p class="error"><?php echo $_SESSION['message'];?></p>

      <label for="email"><b>Enter your E-mail</b></label>
      <input id="email" type="text" placeholder="Enter your e-mail" name="email" required>

      <label for="password"><b>Password</b></label>
      <input id="password" type="password" placeholder="Enter Password" name="password" required>

      <button type="submit">Login</button>
    <div class="forgFormContainer">
        <span class="forgPass">Forgot <a href="#"> password? </a></span>
    </div>
    </div>
  </form>
</div>
</body>
</html>