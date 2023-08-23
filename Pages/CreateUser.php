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
                $cname = $_POST ["cuser"];
                $cpassword = $_POST ["lpsw"];

                echo "Welcome $cname. ($cpassword) Your user was successfully created.";

                //Conexión a base de datos
                require ('Conexion.php');
                $connect = new Conexion();
                $connect->ConexionDB();
                
                //Query de inserción de usuario y contraseña en la base de datos
                $query = "INSERT INTO users (User, Password)VALUES ('$cname', '$cpassword')";
                $respuesta = $connect->GetData($query);
            ?>
        </div>
    
        </br>

        <!--Botón de acceso a la página de Login-->
        <button onclick="location ='/Login.php'" class="buttonStyle">Login</button>
    </body>
</html>




