<?php
    while ($rows = $query_result->fetch_array()){
        $name = $rows['NAME'];
        $value = $rows['VALUE'];
        $loan_status = $rows['LOAN_STATUS'];
        $description = $rows['DESCRIPTION'];
        $code = $rows['CODE'];
        $invertory_status = $rows['INVENTORY_STATUS'];
        $id_location = $rows['ID_LOCATION'];
    }
?>

<table>
  <tr>
    <th><?php echo $name ?></th>
    <th><?php echo $value ?></th>
    <th><?php echo $loan_status ?></th>
  </tr>
  <tr>
    <td><?php echo $code ?></td>
    <td><?php echo $invertory_status ?></td>
    <td>
    <?php if($loan_status == 1){ ?>
    <button style="float: right; height:30px; width:110px; font-size:16px;" name="button">Devolver</button>
    <?php } ?>
    </td>
</tr>
</table>
