<?php

if(isset($_POST['title'])){
    require '../db_conn.php';

    $title = $_POST['title'];
    $description = $_POST['description'];


    if(empty($title)){

        header("Location: ../link.php?mess=error");
    }else{
        $stmt = $conn->prepare("INSERT INTO todos(title, description) VALUES(?,?)");
        
        $res = $stmt->execute([$title, $description]);


        if($res){
            header("Location: ../link.php?mess=success");
        }else{
            header("Location: ../link.php");
        }
        $conn = null;
        exit();


    }
}else{
    header("Location: ../link.php?mess=error");
}