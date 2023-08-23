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

            .image {
                text-align: center;                
            }
        </style>
    </head>
    <body>
        <div class="caja">
            <div class="image">
                <img src="https://th.bing.com/th/id/R.f0a5b699196ea8e4f97b422fa8fac66b?rik=cmrB4CtD4v%2f%2b4w&riu=http%3a%2f%2fgifimage.net%2fwp-content%2fuploads%2f2018%2f04%2flogin-gif-11.gif&ehk=6%2bn%2fh6e2sbsRMAgtLaI9Ldt4qzTg1pNEiL5RJkK0hDM%3d&risl=&pid=ImgRaw&r=0" height="100" width="100"/>
            </div>
            <div class="Tittle">            
                <h3>LOGIN USER </h3> 
            </div>
            <div class="letter">
                ¡Welcome!
            </div>            
            <div class="letter">
                <?php
                $saludo = "Please insert your user and password";
                echo $saludo;
                ?>
            </div>            
            
            </br>
            <form action="/Pages/Home.php" method = "post" >
                <label for="fuser" class="letter">User: </label>
                <input type="text" id="fuser" name="fuser" class="textBox"><br><br>
                <label for="lpassword" class="letter">Password:</label>
                <input type="password" id="lpassword" name="lpassword" class="textBox"><br><br>
                <input type="submit" value="Login" id = "Login" class="buttonStyle">
            </form>       
        
            <button onclick="location ='/Pages/DatosCreate.php'" class="buttonStyle">Create User</button>
            <button onclick="location ='/Pages/ConsultingUser.php'" class="buttonStyle">Read all users</button>
                        
        </div>      
            
        
    </body>       
</html>








