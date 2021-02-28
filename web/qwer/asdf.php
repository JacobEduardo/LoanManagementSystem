    <?php     
        function html_client($text_input,$conn){
            $query_result = search_in_client($text_input,$conn);  
            $result_rows = mysqli_num_rows($query_result);

            createHtml($result_rows,"includes/create_client_html.php","includes/create_simple_client_html.php",$query_result);
        }

        function html_goods($text_input,$conn){
            $query_result = search_in_goods($text_input,$conn);  
            $result_rows = mysqli_num_rows($query_result);

            createHtml($result_rows,"includes/create_goods_html.php","includes/create_simple_goods_html.php",$query_result);
        }

        function createHtml($cant,$string1,$string2,$query_result){
            
            if($cant > 0){
                if($cant == 1){
                    require($string1);
                }
                if($cant > 1){
                    require($string2);
                }
            }
        }
        
    ?>