<?php
    $user = $_POST['user'];
    $password = $_POST['password'];

    require("database/db.php");

    $query = "SELECT * FROM user where nickname='$user' and pass='$password'";
    $query_result = mysqli_query($conn,$query);
    //$result_to_array= mysql_fetch_array ($query_result);
    //$rows = mysqli_num_rows($query_result);

    if($query_result){
        session_start (); 
        while ($rows = $query_result->fetch_array()){
            $_SESSION['nickname'] = $rows['NICKNAME'];
            $_SESSION['name'] = $rows['NAME'];
            $_SESSION['rut'] = $rows['RUT'];
            $_SESSION['last_name'] = $rows['LAST_NAME'];
        }

        header("location:index.php");
    }else{
        header("location:database/db.php");
    }
?>