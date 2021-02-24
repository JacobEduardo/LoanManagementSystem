<?php
    while ($rows = $query_result->fetch_array()){
        $name = $rows['NAME'];
        $code = $rows['CODE'];
        $loan_status = $rows['LOAN_STATUS'];
    }
?>

<table>
    <tr>
        <th><?php echo $name ?></th>
    </tr>
    <tr>
        <td><?php echo $code ?></td>
    </tr>
    <tr>
        <td colspan="3" style="text-align:right;">
            <?php if($loan_status == 1){ ?>
            <FORM METHOD="POST" ACTION="">
               <input  name="loan" type="submit" value="Devolver"/>
            </FORM>
            <?php } ?>
        </td>
    </tr>
</table>

