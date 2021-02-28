<?php
    while ($rows = $query_result->fetch_array()){
        $name = $rows['NAME'];
        $code = $rows['CODE'];

        echo '<table class="two" style="margin-top: 5px;">';
        echo '<tr >';
        echo    '<th style="padding: 2px">' .$name .'</th>';
        echo '</tr>';
        echo '<tr>';
        echo    '<td style="padding: 2px">' .$code .'</td>';
        echo '</tr>';
        echo '</table>';
    }
?>