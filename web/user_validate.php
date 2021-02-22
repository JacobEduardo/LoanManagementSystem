<?php
    $user = $_POST['user'];
    $password = $_POST['password'];

    require("db.php");

    $query = "SELECT * FROM user where nickname='$user' and pass='$password'";
    $query_result = mysqli_query($conn,$query);
    //$result_to_array= mysql_fetch_array ($query_result);
    //$rows = mysqli_num_rows($query_result);

    if($query_result){
        session_start (); 
        while ($rowss = $query_result->fetch_array()){
            $_SESSION['nickname'] = $rowss['NICKNAME'];
            $_SESSION['name'] = $rowss['NAME'];
            $_SESSION['rut'] = $rowss['RUT'];
            $_SESSION['last_name'] = $rowss['LAST_NAME'];
        }

        header("location:index.php");
    }else{
        header("location:db.php");
    }
?>