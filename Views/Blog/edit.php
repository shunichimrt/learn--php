<?php //phpcs:disable Generic.Files.LineLength.TooLong
session_start();
require_once(ROOT_PATH .'Controllers/BlogController.php');
if (empty($_SERVER["HTTP_REFERER"])) {
    header('Location: index.php');
}
$request = new BlogController();
$result = $request->view($_GET['id']);
$arr = $result['blog'];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    if (!$title = filter_input(INPUT_POST, 'title')) {
        $error_message['title'] = 'Please enter title correctly';
    }
    if (!$content = filter_input(INPUT_POST, 'content')) {
        $error_message['content'] = 'Please enter content correctly';
    }
    if (empty($error_message)) {
        $_SESSION['data'] = $_POST;
        header('Location:./edit_comp.php');
        exit();
    }
} elseif (!empty($_SESSION['data'])) {
    $_POST = $_SESSION['data'];
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
  <main class="login">
    <h2>Edit Post</h2>
    <form action="" method="POST">
    <table width="100%">
        <tr>
          <th><?=$arr['created_at'] ?></th>
          <input type="hidden" name="id" id="id" value=<?php echo htmlspecialchars($arr['b_id']); ?>>
        </tr>
        <tr>
          <th>Title</th>
          <td>
            <span class="required"><?php echo isset($error_message['title']) ? $error_message['title'] : ''; ?></span><br>
            <div><input type="text" name="title" id="title" value="<?=$arr['title'] ?>"></div>
          </td>
        </tr>
        <tr>
          <th>Content</th>
          <td>
            <span class="required"><?php echo isset($error_message['content']) ? $error_message['content'] : ''; ?></span><br>
            <textarea type="text" name="content" id="content" ><?=$arr['content'] ?></textarea>
          </td>
        </tr>
    </table>
    <button type="submit" id="edit">Edit</button>
    <script>
    var btn = document.getElementById('edit');
    btn.addEventListener('click', function(e) {
      const result = window.confirm('Edit this post?');
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
