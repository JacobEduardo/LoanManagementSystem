<?php include("includes/header.php"); //desde el head hasta el primer body ?>

<?php
        session_start ();
?>
    
<?php
    if(isset($_SESSION['nickname'])){ 
        include("master.php");
    }else{
        include("includes/login.php");
    }
?>


<?php include("includes/footer.php"); //todo que esta al final de la pagina?>
