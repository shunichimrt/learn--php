<?php //phpcs:disable Generic.Files.LineLength.TooLong
session_start();
require_once(ROOT_PATH .'Controllers/BlogController.php');
if (empty($_SERVER["HTTP_REFERER"])) {
    header('Location: index.php');
}
$user = $_SESSION['user'];
$blog = new BlogController();
$login_id = $user['id'];
$params = $blog -> biasIndex($login_id);
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
        <div class="menu"><a href="search.php">Search</a></div>
        <div class="menu"><a href="post.php">NewPost</a></div>
        <div id="logout" class="menu"><a href="logout.php">Logout</a></div>
        <script>
        var btn = document.getElementById('logout');
        btn.addEventListener('click', function(e) {
          const result = window.confirm('Logout from Profile?');
          if(result) {
          } else {
            e.preventDefault();
            alert("Thank you");
          }
        })
        </script>
      </div>
    </div>
  </header>
  <main class="profile">
    <h2>Hello, <?=$user["name"] ?>!!</h2>
    <?php if (!($params == false)) :?>
    <table id ="list">
        <?php foreach ($params['blogs'] as $arr) : ?>
      <tr>
        <td><?php
        $created_at = htmlspecialchars($arr['created_at'], ENT_QUOTES);
        echo $created_at?></td>
        <td><a href="view_prof.php?id=<?php echo $arr['b_id'] ?>"><?php
        $title = htmlspecialchars($arr['title'], ENT_QUOTES);
        echo $title?></a></td>
        <td><a id="edit<?=$arr['b_id'] ?>" href="edit.php?id=<?php echo $arr['b_id'] ?>">EDIT</a></td>
        <script>
        var btn = document.getElementById('edit<?=$arr['b_id'] ?>');
        btn.addEventListener('click', function(e) {
          const result = window.confirm('Edit this post?');
          if(result) {
          } else {
            e.preventDefault();
            alert("Thank you");
          }
        })
        </script>
        <td><a id="delete<?=$arr['b_id'] ?>" href="delete.php?id=<?php echo $arr['b_id'] ?>">DELETE</a></td>
        <script>
        var btn = document.getElementById('delete<?=$arr['b_id'] ?>');
        btn.addEventListener('click', function(e) {
          const result = window.confirm('Delete this post?');
          if(result) {
          } else {
            e.preventDefault();
            alert("Thank you");
          }
        })
        </script>
      </tr>
        <?php endforeach?>
    </table>
    <?php endif; ?>
  </main>
</body>
</html>
