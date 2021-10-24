<?php //phpcs:disable Generic.Files.LineLength.TooLong
session_start();
require_once(ROOT_PATH .'Controllers/BlogController.php');
if (empty($_SERVER["HTTP_REFERER"])) {
    header('Location: index.php');
}
$blog = new BlogController();
$town = $blog->town();
foreach ($town as $key) {
    foreach ($key as $towns) {
        $town_arr[] = $towns;
    }
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['town'] = $_POST;
    header('Location:./search_result.php');
    exit();
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
        <div class="menu"><a href="favorite.php">Favorite</a></div>
      </div>
    </div>
  </header>
  <main class="profile">
    <h2>Search</h2><br>
    <form action="" method="POST">
    <table style="width: 300px;">
      <th>Town</th>
      <td>
        <select name="name">
          <?php foreach ($town_arr as $t_arr) :?>
            <option value=<?=$t_arr['name'] ?>><?=$t_arr['name'] ?></option>
          <?php endforeach;?>
        </select>
      </td>
    </table><br>
    <button type="submit" id="search">Search</button>
    <script language="javascript" type="text/javascript">
    var btn = document.getElementById('search');
    btn.addEventListener('click', function(e) {
      const result = window.confirm('Search this town?');
      if(result) {
      } else {
        e.preventDefault();
        alert("Thank you");
      }
    })
    </script>
  </form>
  </main>
</body>
</html>
