<?php
    while ($rows = $query_result->fetch_array()){
        $rut = $rows['RUT'];
        $name = $rows['NAME'];
        $status = $rows['STATUS'];

        echo '<table>';
        echo '<tr>';
        echo    '<th>' .$name .'</th>';
        echo '</tr>';
        echo '<tr>';
        echo    '<td>' .$rut .'</td>';
        echo '</tr>';
        echo '</table>';
    }
?>


