<?php //phpcs:disable Generic.Files.LineLength.TooLong
session_start();
require_once(ROOT_PATH .'Controllers/BlogController.php');
$request = new BlogController();
$town = $request->town();
foreach ($town as $key) {
    foreach ($key as $towns) {
        $town_arr[] = $towns;
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    if (!$name = filter_input(INPUT_POST, 'name')) {
        $error_message['name'] = 'Please enter your name correctly';
    }

    if (!$email = filter_input(INPUT_POST, 'email')) {
        $error_message['email'] = 'Please enter your email correctly';
    }

    if (!$password = filter_input(INPUT_POST, 'password')) {
        $error_message['password'] = 'Please enter your password correctly';
    }

    if (empty($error_message)) {
        $_SESSION['data'] = $_POST;
        header('Location:./signin_comp.php');
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
        <div class="menu"><a href="login.php">Login</a></div>
      </div>
    </div>
  </header>
  <main class="login">
    <h2>SignIn</h2>
    <form action="" method="POST">
      <table width="100%">
        <tr>
          <th>Name</th>
          <td>
            <span class="required"><?php echo isset($error_message['name']) ? $error_message['name'] : ''; ?></span><br>
            <input type="text" name="name" id="name">
          </td>
        </tr>
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
          </td>
        </tr>
        <tr>
          <th>Your Town</th>
          <td>
            <br>
            <select name="town_id">
              <?php $i = 1;?>
              <?php foreach ($town_arr as $t_arr) :?>
                <option value=<?php echo $i ?>><?php  echo $t_arr['name'] ?></option>
                    <?php $i++; ?>
              <?php endforeach;?>
            </select>
          </td>
        </tr>
        
        <tr>
          <th>Browsing Rights</th>
          <td>
            <br>
            <select name="role">
              <option value="1">General</option>
              <option value="0">●Admin</option>
            </select>
          </td>
        </tr>

      </table>
      <br>
      <button type="submit" id="signin">SignIn</button>
      <script>
      var btn = document.getElementById('signin');
      btn.addEventListener('click', function(e) {
        const result = window.confirm('SignIn to Profile?');
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
