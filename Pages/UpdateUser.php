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
                padding: 50px;
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

            .textBox{
                border-radius: 10px;
                border-color: white;
                border: white;                
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
        <div class="caja">
            <div class="tittle">
                <h3>UPDATE USER</h3>
            </div>
            
            <div class="letter">
                Please enter the user data to be update
            </div> 

            </br>
            </br>
            <?php
                $NewName = $_GET ["User"];   
            ?>

            <!-- Solicitud de información para actualización-->
            <form action="/Pages/QueryUpdate.php" method = "post" >
                <label for="tuser" class="letter">Current User:</label>
                <input type="text" id="ctuser" name="ctuser" class="textBox"><br><br>
                <label for="nuser" class="letter">New User:</label>
                <input type="text" id="nuser" name="nuser" class="textBox"><br><br>
                <label for="ctpsw" class="letter">Current Password:</label>
                <input type="password" id="ctpsw" name="ctpsw" class="textBox"><br><br>
                <label for="npsw" class="letter">New Password:</label>
                <input type="password" id="npsw" name="npsw" class="textBox"><br><br>
                <input type="submit" value="Update" class="buttonStyle">     
            </form>
            <button onclick="location ='/Pages/ConsultingUser.php'" class="buttonStyle">Back</button>
        </div>
    </body>
</html>
