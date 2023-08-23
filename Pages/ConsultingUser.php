<html>
    <head>
        <style>
            body {
                background-color: 336b87;                
            } 

            .Tittle {
                color: #E5ECE8;
                font-size: 27px;
                font-weight: bold;                
            }

            .caja {                
                padding: 10px;
                border-radius: 20px;
                background-color: 336b87;
                margin: 40px;
                margin-inline: 400px;
                text-align: center;
                font-style: italic;
                border: solid #DAB38D 8px;
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

            .Modification {
                border-radius: 15px;
                border-color: #E5ECE8;
                border: solid #E5ECE8 2px;  

            }

            .table {
                font-size: 20px;
                color: white;
                margin: 10px;
                border-collapse: separate;
                border-spacing: 15px;
                text-align: center;
                                
            }
        </style>
    </head>
    <body>
        <div class="caja">
            <div class="Tittle">
                <h3>CONSULT USER</h3>
            </div>       
            <div class="letter">
                <?php
        
                    echo "Welcome, then the list of users registered in the database will be displayed.";

                    //Conexión a base de datos
                    require ('Conexion.php');
                    $connection = new Conexion();
                    $connection->ConexionDB();
                    
                    //Query de consulta de usuarios de la BD
                    $query = "SELECT * FROM users";
                    $consulta = $connection->GetData($query);
                ?> 
            </div>
            <div class="table">
                </br>
                
                <!--Creación de tabla para mostrar array-->
                <table class="Table">  	
                    <thead>
                        <tr>
                            <th>User</th>
                            <th>Password</th>
                            <th>Delete</th>
                            <th>Update</th>				
                        </tr>
                    </thead> 
            
                    <?php foreach ($connection->GetData($query) as $row){  ?> 
                        <tr>
                            <td><?php echo $row['User']?></td>
                            <td><?php echo $row['Password'] ?></td> 
                            <td><button onclick = "location='/Pages/DeleteUser.php?User=<?php echo $row['User']?>'"class="Modification">Delete</button></td>
                            <form action="/Pages/ConsultingUser.php" method = "get"></form>
                            <td><button onclick = "location='/Pages/UpdateUser.php?User=<?php echo $row['User']?>'"class="Modification">Update</button></td>
                            <form action="/Pages/ConsultingUser.php" method = "get"></form>
                        </tr>
                        <?php
                            }
                        ?>
                </table>
            </div>
            </br>
            
            <button onclick="location ='/Login.php'" class="buttonStyle">Home</button> 
        </div>       
    </body>    
</html>




