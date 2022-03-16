<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
        }
        .box{
            position: absolute;
            top: 10%; /*posição do login na pagina*/
            left: 65%;
            background-color: gray;
            padding: 15px; /*distancia da borda pra fora*/
            border-radius: 15px; /*arredonda a borda*/
        }
        fieldset{
            border: 3px solid;
        }
        legend{
            border:1px solid;
            padding: 10px;
            text-align: center;
            background-color: white;
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            font-size: 15px;
            width:98%;
            letter-spacing:2px;
            border-radius: 5px;
        }
        #country{
            border-radius: 5px;
            font-size: 15px;

        }
        .labelInput{
            position: absolute;
            top:-17px;
        }
        #enviar{
            background-color: white;
            padding: 10px;
            width:100%;
            border-radius: 10px;
            font-size: 15px;
            cursor:pointer;
        }
        #enviar:hover{
            background-color: beige;

        }
        .signup{  
            position: relative;

        }
        a{
            font-size: 15px;
            text-decoration: none;
            color: white;
        }
        a:hover{
            color:beige
        }
    
    </style>
</head>
<body>
        <div class="box">
            <form action="testLogin.php" method="POST">
                <fieldset>
                    <legend><b>Log In</b></legend>
                    <br>
                    <div class="inputBox">
                        <input type="text" name="name" id="name" class="inputUser" required>
                        <label for="name" class="labelInput"><strong>Name</strong></label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="password" name="password" id="password" class="inputUser" required>
                        <label for="password" class="labelInput"><strong>Password</strong></label>
                    </div>
                    <br>
                    <button type="submit" id=enviar>Log In</button>
                    <div class="sigup">
                        <br><strong>Don't have an account? </strong> <a href="formulario.php">Sign Up</a>
                    </div>
                    
                </fieldset>
            </form>
        </div>
        
    </div>
</body>
</html>