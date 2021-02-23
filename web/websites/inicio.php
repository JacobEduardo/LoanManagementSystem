<h2>Sistema de Prestamos</h2>
<FORM METHOD="POST" ACTION="">
    <input id="seeker"  name="seeker" placeholder="Buscar" class="form-control form-text" type="text" size="20" maxlength="128" />
    <input id="seeker_btn" name="search" type="submit" value="Buscar"/>

    <?php
    require("db.php");    

    if(isset($_POST['search'])){
        $seeker = $_POST['seeker'];

        $query = "SELECT * FROM goods WHERE code LIKE '%$seeker%';";
        $query_result = mysqli_query($conn,$query);  
        $result_rows = mysqli_num_rows($query_result);
        if($result_rows > 0){
            if($result_rows == 1){
                while ($rows = $query_result->fetch_array()){
                    $name = $rows['NAME'];
                    $value = $rows['VALUE'];
                    $loan_status = $rows['LOAN_STATUS'];
                    $description = $rows['DESCRIPTION'];
                    $code = $rows['CODE'];
                    $invertory_status = $rows['INVENTORY_STATUS'];
                    $id_location = $rows['ID_LOCATION'];
                }
                echo '<div>' .$name .'</div>';
            }
            if($result_rows > 1){
                echo 'asd';
            }
        }
    }
    
    ?>

</FORM>