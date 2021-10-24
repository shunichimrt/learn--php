<?php //phpcs:disable Generic.Files.LineLength.TooLong
session_start();
require_once(ROOT_PATH .'Controllers/BlogController.php');
$request = new BlogController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    if (!$email = filter_input(INPUT_POST, 'email')) {
        $error_message['email'] = 'Please enter your email correctly';
    }

    if (!$password = filter_input(INPUT_POST, 'password')) {
        $error_message['password'] = 'Please enter your new password correctly';
    }

    if (empty($error_message)) {
        $_SESSION['data'] = $_POST;
        header('Location:./password_comp.php');
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
        <div class="menu"><a href="login.php">Login</a></div>
      </div>
    </div>
  </header>
  <main class="login">
    <h2>Change Password</h2>
    <form action="" method="POST">
      <table width="100%">
        <tr>
          <th>Email</th>
          <td>
            <span class="required"><?php echo isset($error_message['email']) ? $error_message['email'] : ''; ?></span><br>
            <input type="text" name="email" id="email">
          </td>
        </tr>
        <tr>
          <th>New Password</th>
          <td>
            <span class="required"><?php echo isset($error_message['password']) ? $error_message['password'] : ''; ?></span><br>
            <input type="password" name="password" id="password">
          </td>
        </tr>
      </table>
      <br>
      <button type="submit" id="change">Change Password</button>
      <script>
      var btn = document.getElementById('change');
      btn.addEventListener('click', function(e) {
        const result = window.confirm('Change your password?');
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
