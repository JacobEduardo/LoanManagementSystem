<?php 
function search_in_goods($seeker,$conn)
{
    $query = "SELECT * FROM goods WHERE code LIKE '%$seeker%';";
    $query_result = mysqli_query($conn,$query);  
    return $query_result;
}

function create_html($argv){

}

?>