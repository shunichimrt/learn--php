<?php //phpcs:disable Generic.Files.LineLength.TooLong
session_start();
require_once(ROOT_PATH .'Controllers/BlogController.php');
if (empty($_SERVER["HTTP_REFERER"])) {
    header('Location: index.php');
}
$user = $_SESSION['user'];
$town = $_SESSION['town'];
$request = new BlogController();
$name = $town['name'];
$params = $request ->index($name);
$result = $request -> townId($name);
foreach ($result as $key) {
    foreach ($key as $towns) {
        $town_arr[] = $towns;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Town Blog</title>
<link rel="icon" href="/img/logo.png">
<link rel="stylesheet" href="/css/style.css">
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<script src="/js/style_<?=$town_arr['0'] ?>.js"></script>
</head>
<body>
  <header>
    <div class="header">
      <div class="logo "><img src="/img/logo.png" alt="Logo"></div>
      <h3>Town Blog</h3>
      <div class="go_nav">
        <div class="menu"><a href="profile.php">Go Profile</a></div>
        <div class="menu"><a href="search.php">Search</a></div>
      </div>
    </div>
  </header>
  <main class="profile">
    <h2 id="town_name"><?=$name?></h2>
    <div id="map">
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCKXUyeLT-1vOPMHMWn632JqylFHF1Z4fo&callback=initMap&v=weekly" async></script>
    </div>
    <?php if (!($params == false)) :?>
    <table>
      　<?php foreach ($params["blogs"] as $arr) : ?>
      <tr>
        <td><?php
        $created_at = htmlspecialchars($arr['created_at'], ENT_QUOTES);
        echo $created_at?></td>
        <td><a href="view_search.php?id=<?php echo $arr['b_id'] ?>"><?php
        $title = htmlspecialchars($arr['title'], ENT_QUOTES);
        echo $title?></a></td>
            <?php if ($user['role'] == 0) :?>
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
            <?php endif; ?>
      </tr>
      　<?php endforeach?>
    </table>
    <?php endif; ?>
  </main>
</body>
</html>
