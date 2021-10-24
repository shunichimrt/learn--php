<?php
session_start();
if (empty($_SERVER["HTTP_REFERER"])) {
    header('Location: index.php');
}
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
      <div class="logo "><a href="index.php"><img src="/img/logo.png" alt="Logo"></a></div>
      <h3><a href="index.php">Town Blog</a></h3>
      <div class="go_nav">
        <div class="menu"><a href="login.php">Login</a></div>
        <div class="menu"><a href="signin.php">SignIn</a></div>
      </div>
    </div>
  </header>
  <main>
    <h2 class="concept">Logout Complete!!</h2>
  </main>
</body>
</html>
