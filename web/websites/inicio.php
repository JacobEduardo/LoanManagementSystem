<h2>Sistema de Prestamos</h2>
<FORM METHOD="POST" ACTION="">
    <input id="seeker"  name="text_input" placeholder="Buscar" class="form-control form-text" type="text" size="20" maxlength="128" />
    <input id="seeker_btn" name="search" type="submit" value="Buscar"/>

    <?php
        require("database/db.php");  
        require("database/conn_db.php");  

        if(isset($_POST['search'])){
            $text_input = $_POST['text_input'];
            if($text_input != ''){
                html_client($text_input,$conn);
                html_goods($text_input,$conn);
            }
        }

        function html_client($text_input,$conn){
            $query_result = search_in_client($text_input,$conn);  
            $result_rows = mysqli_num_rows($query_result);

            if($result_rows > 0){
                if($result_rows == 1){
                    require("includes/create_client_html.php");
                }
                if($result_rows > 1){
                    require("includes/create_simple_client_html.php");
                }
            }
        }

        function html_goods($text_input,$conn){
            $query_result = search_in_goods($text_input,$conn);  
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