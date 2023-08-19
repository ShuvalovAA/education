<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example Form</title>
</head>
<body>
  <form action="" method="post">
    <label for='login'>Add login</label>
    <input type="text" name="login" id="test1">
    <label for='password'>Add password</label>
    <input type="tepasswordxt" name="password" id="test2">
    <input type="submit" value="sigup">
  </form>

  <?php
  if (isset($_POST['login']) && isset($_POST['password'])){
    $login = $_POST['login'];
    $password = $_POST['password'];
    if($login != "" && $password != ""){
      $mysqli = new mysqli("localhost", "root", "", "SDO_2023");

      $user_exists = $mysqli->query("Select * from users where name = '$login'");
      if($user_exists->fetch_assoc()){
        echo "USER already exists!";
      }
      else{
        $insert_sql = "INSERT INTO users (name, password) VALUES ('$login', '$password')";
        $mysqli->query($insert_sql);
        $_SESSION['login'] = $login;
        setcookie( 'login', $login);
      }
      //$result = $mysqli->query("Select * from users");
      // while ($row = $result->fetch_assoc()){
      //   $row_str =$row['name'];
      //   echo $row_str;
      // }

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