<?php //phpcs:disable Generic.Files.LineLength.TooLong
session_start();
require_once(ROOT_PATH .'Controllers/BlogController.php');
if (empty($_SERVER["HTTP_REFERER"])) {
    header('Location: index.php');
}
$request = new BlogController();
$result = $request->view($_GET['id']);
$arr = $result['blog'];
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
  <main class="login">
    <h2>Post</h2>
    <table width="100%">
        <tr>
          <th><?=$arr['u_name'] ?></th>
          <td><?=$arr['created_at'] ?></td>
        </tr>
        <tr>
          <th>Title</th>
          <td><?=$arr['title'] ?></td>
        </tr>
        <tr>
          <th>Content</th>
          <td><?=$arr['content'] ?></td>
        </tr>
    </table>
  </main>
</body>
</html>
