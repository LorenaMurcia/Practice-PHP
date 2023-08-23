<html>
    <head>
        <style>
            body {
                background-color: 336b87;                
            } 

            .letter{
                color: white;
                font-size: 20px;
            }

            .buttonStyle {
                background-color: #E5ECE8;
                color: black;
                font-size: 14px;
                font-style: italic;
                border-radius: 35px; 
                border-color: #E5ECE8;
                padding: 5px;
                margin: 10px;    
                border: solid #E5ECE8 8px;                
            } 
        </style>
    </head>
    <body>
        <div class="letter">
            <?php
                require ('Conexion.php');
                $con = new Conexion();
                $con->ConexionDB(); 
                
                $vuser = $_POST ["fuser"];
                $vpassword = $_POST ["lpassword"];
                
                /*Query de consulta de usuario en la base de datos*/
                $query = "select * from users WHERE User = '$vuser' AND Password = '$vpassword' ";
                $resultado = $con->GetData($query); 

                $cuenta = count($resultado);

                if ($cuenta >=1){
                    echo "Welcome $vuser";
                    }
                    else {
                        echo "Wrong user or password";
                    }
            ?>
        </div>
        </br>
        <!--Botón de vuelta al Login-->
        <button onclick="location ='/Login.php'" class="buttonStyle">Back</button>
    </body>
</html>

    

