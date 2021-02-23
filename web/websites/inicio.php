<h2>Sistema de Prestamos</h2>
<FORM METHOD="POST" ACTION="">
    <input id="seeker"  name="seeker" placeholder="Buscar" class="form-control form-text" type="text" size="20" maxlength="128" />
    <input id="seeker_btn" name="search" type="submit" value="Buscar"/>

    <?php
    require("db.php");  
    require("consultas.php");  

    if(isset($_POST['search'])){
        $seeker = $_POST['seeker'];

        
        $query_result = search_in_goods($seeker,$conn);  
        $result_rows = mysqli_num_rows($query_result);

        if($result_rows > 0){
            if($result_rows == 1){
                require("includes/create_goods_html.php");
            }
            if($result_rows > 1){
                
            }
        }

        $query = "SELECT * FROM client WHERE rut LIKE '%$seeker%';";
        $query_result = mysqli_query($conn,$query);  
        $result_rows = mysqli_num_rows($query_result);

        if($result_rows > 0){
            if($result_rows == 1){
                require("includes/create_client_html.php");
            }
            if($result_rows > 1){
                
            }
        }
    }
    
    ?>

</FORM>