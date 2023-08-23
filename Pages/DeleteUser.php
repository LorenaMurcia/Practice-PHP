<html>
    <head>
        <style>
            body {
                background-color: 336b87;                
            }       
            
            .letter{
                color: white;
                font-size: 20px;
                font-style: italic;
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
    <body class="letter">
        <?php
            $DeleteName = $_GET ["User"];
            echo "The user $DeleteName has been successfully removed from the database."; 
            
            //Conexión a base de datos
            require ('Conexion.php');
            $connectDelete = new Conexion();
            $connectDelete->ConexionDB();
            
            //Query de eliminación de usuario
            $query = "DELETE from users WHERE User = '$DeleteName'";
            $delete = $connectDelete->GetData($query);
        ?>
        </br>
        </br>

        <!--Botón de vuelta a la consulta de usuarios-->
        <button onclick="location ='/Pages/ConsultingUser.php'" class="buttonStyle">Accept</button>
    </body>
</html>

         