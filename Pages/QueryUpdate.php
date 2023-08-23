<html>
    <head>
        <style>
            body {
                background-color: 336b87;                
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

            .letter{
                color: white;
                font-size: 20px;
            }

        </style>
    </head>
    <body>
        <div class="letter">
            <?php
                $CurrentName = $_POST ["ctuser"];
                $UpdateName = $_POST ["nuser"]; 
                $CurrentPassword = $_POST ["ctpsw"];
                $UpdatePassword = $_POST ["npsw"];    
                    
                //Conexión a base de datos
                require ('Conexion.php');
                $connectUp = new Conexion();
                $connectUp->ConexionDB();
                
                //Query de actualización de usuario
                //Hacer validación de campos vacíos en caso de no colocar usuario                
                $query = "UPDATE users SET User = '$UpdateName' WHERE User = '$CurrentName'";
                $updateN = $connectUp->GetData($query);

                //Query de actualización de contraseña
                //Hacer validación de campos vacíos en caso de no colocar contarseña
                $query = "UPDATE users SET Password = '$UpdatePassword' WHERE Password = '$CurrentPassword'";
                $updateP = $connectUp->GetData($query);

                echo "El usuario $UpdateName ($UpdatePassword) ha sido actualizado correctamente.";
            
            ?>
            </br>
            </br>
        </div>
        <button onclick="location ='/Pages/ConsultingUser.php'" class="buttonStyle">Aceptar</button>
    </body>
</html>
