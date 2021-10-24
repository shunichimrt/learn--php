<?php
session_start();
require_once(ROOT_PATH .'Controllers/BlogController.php');
if (empty($_SERVER["HTTP_REFERER"])) {
    header('Location: index.php');
}
$blog = $_SESSION['data'];
$request = new BlogController();
$result = $request->editBlog($blog);
if (!$result) {
    header('Location: edit.php');
    return;
}
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
        <div class="menu"><a href="profile.php">Go Profile</a></div>
      </div>
    </div>
  </header>
  <main>
    <h2 class="concept">Edit Complete!!</h2>
  </main>
</body>
</html>
