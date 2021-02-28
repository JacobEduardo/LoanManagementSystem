<h2>Sistema de Prestamos</h2>
<FORM METHOD="POST" ACTION="">
    <input id="seeker"  name="text_input" placeholder="Buscar" class="form-control form-text" type="text" size="20" maxlength="128" />
    <input id="seeker_btn" name="search" type="submit" value="Buscar"/>

    <div style="margin-top: 20px;">
        <?php
            require("database/db.php");  
            require("database/conn_db.php"); 
            require("qwer/asdf.php");

            if(isset($_POST['search'])){
                $text_input = $_POST['text_input'];
                if($text_input != ''){
                    html_client($text_input,$conn);
                    html_goods($text_input,$conn);
                }
            }
        ?>
    </div>
</FORM>