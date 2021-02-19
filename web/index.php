
<?php include("includes/header.php") ?>

<div>
<form method="post" action="" name="signup-form">
<h1>Ingrese sus credenciales</h1>
    <div class="form-element">
        <label>Username</label> </br>
        <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
    </div>
    <div class="form-element">
        <label>Password</label> </br>
        <input type="password" name="password" required />
    </div>
    <button type="submit" name="register" value="register">Register</button>
</form>
</div>

<?php include("includes/footer.php")  ?>