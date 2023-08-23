<html>
    <head>
        <style>
            body {
                background-color: 336b87;                
            } 

            .caja {                
                padding: 20px;
                border-radius: 20px;
                background-color: 336b87;
                margin: 40px;
                margin-inline: 400px;
                text-align: center;
                font-style: italic;
                border: solid #DAB38D 8px;
            }

            .Tittle {
                color: #E5ECE8;
                font-size: 27px;
                font-weight: bold;                
            }

            .letter{
                color: white;
                font-size: 20px;
            }

            .textBox {
                border-radius: 10px;
                border-color: white ;
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

            .image {
                text-align: right;
                
            }
        </style>
    </head>
    <body>
        <div class="caja">
            <div class="image">
                <img src="https://o.remove.bg/downloads/aff5a210-37a8-422e-87b3-9aa4fc794622/create_image-removebg-preview.png" height="50" width="50"/>
            </div>  
            <div class="Tittle">
                <h3>CREATE USER</h3>
            </div>
            <div class="letter">
                Please enter the user data to be created
                </br>
                </br>
            </div>

            <!--Inmersión de datos de creación de usuario-->            
            <form action="/Pages/CreateUser.php" method = "post" >
                <label for="cuser" class="letter">User:</label>
                <input type="text" id="cuser" name="cuser" class="textBox"><br><br>
                <label for="lpsw" class="letter">Password:</label>
                <input type="password" id="lpsw" name="lpsw" class="textBox"><br><br>
                <input type="submit" value="Create" class="buttonStyle">
            </form>
            <button onclick="location ='/Login.php'" class="buttonStyle">Home</button>                               
        </div>
    </body>
</html>


