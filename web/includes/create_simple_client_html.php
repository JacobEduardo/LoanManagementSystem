<?php
    while ($rows = $query_result->fetch_array()){
        $rut = $rows['RUT'];
        $name = $rows['NAME'];
        $status = $rows['STATUS'];
        echo '<table class="two" style="margin-top: 5px;">';
        echo '<tr >';
        echo    '<th style="padding: 2px">' .$name .'</th>';
        echo '</tr>';
        echo '<tr>';
        echo    '<td style="padding: 2px">' .$rut .'</td>';
        echo '</tr>';
        echo '</table>';
    }
?>


