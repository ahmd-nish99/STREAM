<?php
    require'db_conn.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Document</title>
</head>
<body>
<div class="img-banner">
    <img src="img/frame.gif" alt="" id="banner">
</div>

<?php

$todos = $conn->query("SELECT * FROM todos ORDER BY id DESC");

?>
<div class="show-todo-section">
<?php if($todos->rowCount() <= 0){?>
    <div class="iframe-container">
        <iframe
        src="https://www.youtube.com/embed/IfN0v9xvQ_s"
        class="player"
        >
</iframe>
</div>

<?php }?>

<?php $todo = $todos ->fetch(PDO::FETCH_ASSOC)?>
<div class="todo-item">
    <?php if($todo['checked']){ ?>
  
        <div class="iframe-container">
        <iframe
        src="<?php echo  $todo['description'] ?>"
        class="player"
        >
</iframe>
</div>

    <?php }else {?>
    
        <div class="iframe-container">
        <iframe
        src="https://www.youtube.com/embed/IfN0v9xvQ_s"
        class="player"
        >
</iframe>
</div>
    <?php }?>


</div>

</div>
</div>




</a>


    
</body>
</html>

