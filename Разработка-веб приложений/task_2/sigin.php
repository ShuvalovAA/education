<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example Form</title>
</head>
<body>
  <form action="" method="post">
    <label for='login'>Enter login</label>
    <input type="text" name="login" id="test1">
    <label for='password'>Enter password</label>
    <input type="tepasswordxt" name="password" id="test2">
    <input type="submit" value="sigin">
  </form>

  <?php
  if (isset($_POST['login']) && isset($_POST['password'])){
    $login = $_POST['login'];
    $password = $_POST['password'];
    if($login != "" && $password != ""){
      $mysqli = new mysqli("localhost", "root", "", "SDO_2023");

      $user_exists = $mysqli->query("Select * from users where name = '$login' and password = '$password'");
      if(!$user_exists->fetch_assoc()){
        $_SESSION['login'] = '';
        setcookie( 'login', '');
        echo "USER DOESNOTEXISTS OR PASSWORD ERROR!";
      }
      else{
        $_SESSION['login'] = $login;
        setcookie( 'login', $login);
      }
    }
    else{
      header("Location: ".$_SERVER['REQUEST_URI']);
    }
  }
  else{
    $mysqli = new mysqli("localhost", "root", "", "SDO_2023");
    $result = $mysqli->query("Select * from users");
  };

  ?>
    
</body>
</html>