<?php
    $user = $_POST['user'];
    $password = $_POST['password'];

    include('db.php');

    $query = "SELECT * FROM user where nickname='$user' and pass='$password'";
    $result = mysqli_query($conn,$query);

    $rowss = mysqli_num_rows($result);

    if($rowss){
        session_start ();
        $_SESSION['nickname'] = $user;
        header("location:index.php");
    }else{
        
    }

?>