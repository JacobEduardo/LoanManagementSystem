<?php
    while ($rows = $query_result->fetch_array()){
        $rut = $rows['RUT'];
        $name = $rows['NAME'];
        $status = $rows['STATUS'];
    }
?>

<table>
    <tr>
        <th><?php echo $name ?></th>
        <th><?php echo "" ?></th>
        <th><?php echo "" ?></th>
    </tr>
    <tr>
        <td><?php echo $rut ?></td>
        <td><?php echo "" ?></td>
        <td><?php echo "" ?></td>
    </tr>
<tr>
    <td colspan="3" style="text-align:right;">
    <?php if($status == 1){ ?>
    <FORM METHOD="POST" ACTION="">
        <input  name="goods" placeholder="Buscar" class="form-control form-text" type="text" size="20" maxlength="150" />
        <input  name="loan" type="submit" value="Prestar"/>
    <?php } 
        require("database/db.php");    

        if(isset($_POST['loan'])){
            $seeker = $_POST['goods'];
    
            $query = "SELECT * FROM goods WHERE code LIKE '%$goods%';";
            $query_result = mysqli_query($conn,$query);  
            $result_rows = mysqli_num_rows($query_result);
    
            if($result_rows > 0){
                if($result_rows == 1){
                    require("includes/create_goods_html.php");
                }
                if($result_rows > 1){
                    
                }
            }
        }
    ?>
    </FORM>
    </td>
</tr>
</table>

