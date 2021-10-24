<?php //phpcs:disable Generic.Files.LineLength.TooLong
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    if (!$email = filter_input(INPUT_POST, 'email')) {
        $error_message['email'] = 'Please enter your email correctly';
    }

    if (!$password = filter_input(INPUT_POST, 'password')) {
        $error_message['password'] = 'Please enter your password correctly';
    }

    if (empty($error_message)) {
        $_SESSION['data'] = $_POST;
        header('Location:./login_comp.php');
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
      <div class="logo "><a href="index.php"><img src="/img/logo.png" alt="Logo"></a></div>
      <h3><a href="index.php">Town Blog</a></h3>
      <div class="go_nav">
        <div class="menu"><a href="signin.php">SignIn</a></div>
      </div>
    </div>
  </header>
  <main class="login">
    <h2>Login</h2>
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
            <th>Password</th>
            <td>
              <span class="required"><?php echo isset($error_message['password']) ? $error_message['password'] : ''; ?></span><br>
              <input type="password" name="password" id="password">
              <div><a href="password.php">→Change Password</a></div>
            </td>
          </tr>
      </table>
      <button type="submit" id="login">Login</button>
      <script>
      var btn = document.getElementById('login');
      btn.addEventListener('click', function(e) {
        const result = window.confirm('Login to Profile?');
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
