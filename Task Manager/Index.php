<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task Manager</title>
    <link rel="stylesheet" href="mainIndex.css" >
</head>
<body>
    <h1>Task Manager</h1>
    <form action="index.php" method="post">
    <label>Time:</label>
    <input type="text" name="Time"><br>
    <label>Task:</label>
    <input type="text" name="Task">
    <label>Submit new task</label><br>
    <input type="submit" name="TaskSubmit" value="Submit">
    </form>
    <?php
    $TASK = $_POST["Task"];
    $TIME = $_POST["Time"];
    $TASKSubmit = $_POST["TaskSubmit"];
    ?>
    <!--Idk Javascript, just my best guesses-->
    <script>function New_Div(){
          var newTask = document.createElement('div');
    newTask.className = 'my-div';
    newTask.textContent = '<?=$TASK, " before ", $TIME?>';
newTask.style.backgroundColor = 'antiquewhite';
newTask.style.color = 'black';
    document.body.appendChild(newTask);
    }</script>
    <p>Your Tasks:
    <div id="Manager"><p><?=$TASK, " before ", $TIME?></p></div>
    <button onclick="New_Div()" class="colorcombo1">New Task</button>
</body>
</html>