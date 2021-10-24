<?php //phpcs:disable Generic.Files.LineLength.TooLong
session_start();
require_once(ROOT_PATH .'Controllers/BlogController.php');
if (empty($_SERVER["HTTP_REFERER"])) {
    header('Location: index.php');
}
$request = new BlogController();
$result = $request->view($_GET['id']);
$arr = $result['blog'];
$num = count($request->isGood($_SESSION['user']['id'], $arr['b_id']));
if ($num != 0) {
    $exist = "";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Town Blog</title>
<link rel="icon" href="/img/logo.png">
<link rel="stylesheet" href="/css/style.css">
<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>
<body>
  <header>
    <div class="header">
      <div class="logo "><img src="/img/logo.png" alt="Logo"></div>
      <h3><a href="index.php">Town Blog</a></h3>
      <div class="go_nav">
        <div class="menu"><a href="favorite.php">Favorite</a></div>
      </div>
    </div>
  </header>
  <main class="login">
    <h2>Post</h2>
    <table width="100%">
        <tr>
          <th>
            <section class="blog" data-blogid="<?=$arr['b_id'] ?>">
              <div class="btn-good <?php echo isset($exist) ? 'active':'';?>">
                <span>Aw!</span>
                <i class="fa-heart fa-lg px-16 <?php echo isset($exist) ? 'active fas':'far';?>"></i>
              </div>
            </section>
          </th>
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
  <script src="/js/good.js"></script>
</body>
</html>
