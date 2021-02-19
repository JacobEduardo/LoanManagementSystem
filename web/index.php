<?php include("db.php") ?>
<?php include("includes/header.php") ?>

<?php
        session_start ();
?>
    <a href="close_session.php">Cerrar Session </a>
    
<?php
    if(isset($_SESSION['nickname'])){ 
        echo $_SESSION['nickname']; 
    }else{
        include("includes/login.php");
    }
?>


<?php include("includes/footer.php");  ?>