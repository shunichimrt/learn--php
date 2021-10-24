<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Town Blog</title>
<link rel="icon" href="/img/logo.png">
<link rel="stylesheet" href="/css/style.css">
</head>
<body>
  <header>
    <div class="header">
      <div class="logo "><img src="/img/logo.png" alt="Logo"></div>
      <h3>Town Blog</h3>
      <div class="go_nav">
        <div class="menu"><a href="login.php">Login</a></div>
        <div class="menu"><a href="signin.php">SignIn</a></div>
      </div>
    </div>
  </header>
  <main>
    <h2 class="concept">Show us Your Town<br>Connect to Your Town</h2>
  </main>
</body>
</html>
