<?php
    $seeker = $_POST['seeker'];

    require("db.php"); 
    
    if($seeker){
        $query = "SELECT * FROM goods WHERE code LIKE '%$seeker%';";
        $query_result = mysqli_query($conn,$query); 
        $result_rows = mysqli_num_rows($query_result);
        if($result_rows > 0){
            if($result_rows = 1){
                while ($rows = $query_result->fetch_array()){
                    $name = $rows['NAME'];
                    $value = $rows['VALUE'];
                    $loan_status = $rows['LOAN_STATUS'];
                    $description = $rows['DESCRIPTION'];
                    $code = $rows['CODE'];
                    $invertory_status = $rows['INVENTORY_STATUS'];
                    $id_location = $rows['ID_LOCATION'];
                }
            }
            if($result_rows > 1){
                echo 'asd';
            }
        }
    }

?>