<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>
<body>
    <h1><?= $page_title ?></h1>
    <main><?= $content ?></main>
    <form action="" onsubmit="return false">
    <label for='task'>Enter task</label>
    <input type="text" name="task" id="description">
    <input type="submit" value="add task" id="add_tasks" >
  </form>
  <div id=info></div>
--
<script>
  URL = "http://localhost/task_2/tasks.php";

  form_add_tasks = document.getElementById("add_tasks")
  function AddTask(){
    description = document.getElementById("description").value
    var xhr = new XMLHttpRequest();
    xhr.open("POST", URL, true);
    xhr.setRequestHeader('Content-Type', 'application/json');
    xhr.send(JSON.stringify({"description": description}));
    console.log({"description": description})

    div_info = document.getElementById("info")
    div_info.innerHTML = "!Tasks Has been added!\n"+
    "description: " + description ;
  };
  form_add_tasks.addEventListener('click', AddTask);
</script>
--

  <?php
  if (isset($_POST['task'])){
    $task = $_POST['task'];
    if($task != "" ){
        $mysqli = new mysqli("localhost", "root", "", "SDO_2023");
        $mysqli = new mysqli("localhost", "root", "", "SDO_2023");
        $insert_sql = "INSERT INTO ad (description) VALUES ('$task')";
        $mysqli->query($insert_sql);
        $result = $mysqli->query("Select * from ad");

        while ($row = $result->fetch_assoc()){
            $row_str =$row['id'];
            $row_str =$row['description'];
            echo $row_str;
        }


    }
    else{
      header("Location: ".$_SERVER['REQUEST_URI']);
      while ($row = $result->fetch_assoc()){
        $row_str =$row['id'];
        $row_str =$row['description'];
        echo $row_str;
    }
    }
  }
 ?>
</body>
</html>