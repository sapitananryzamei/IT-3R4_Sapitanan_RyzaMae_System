<!DOCTYPE html>
<html>
    <head>
        <title>
            LOG IN || Musicero
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<style>
            body{
                background-color: red;
                margin:0;
                background-size: 100%;
                background-attachment: fixed;
            }

            h1{
                color: aquamarine;
                text-align: center;
                font-family:  'Lucida Grande';
                font-size: 70px;
                margin-bottom: 0;
            
            }
            .login{
                width: 450px;
                height: 500px;
                background-color: black;
                margin-left: auto;
                margin-right: auto;
                border-radius: 10px;
            }
         

            label{
                color: blanchedalmond;  
            }
            input {
                width: 200px;
                height: 30px;
            }
            input {
                margin-bottom: 20px;
            }
            div.login form{
                margin-top: 50px ;
                margin-left: 80px;
                
            }
            label{
                margin-right: 10px;
                font-size: 20px;
            }
            label.pword{
                margin-right: 19px;
            }
            input.button{
                border-radius: 4px;
                background-color: #f4511e;
                border: none;
                color: blanchedalmond;
                text-align: center;
                font-size: 20px;
                font-family: 'Gill Sans';
                padding: 5px;
                width: 150px;
                transition: all 0.5s;
                cursor: pointer;
                margin-left: 80px;
            }
            input.button span {
                cursor: pointer;
                display: inline-block;
                position: relative;
                transition: 0.5s;
            }
            
            input.button span:after {
                content: '\00bb';
                position: absolute;
                opacity: 0;
                top: 0;
                right: -20px;
                transition: 0.5s;
            }
            
            input.button:hover span {
                padding-right: 15px;
            }
            
            input.button:hover span:after {
                opacity: 1;
                right: 0;
            }

            
        </style>
    </head>
<body>
    
        <div class="container">
            <h1>Musicero</h1>
                <div class="login">
                    
                    <hr>
                    <form action="validate" method="post">
                        <div class="datas">
                            <label>Username</label>
                            <input type="text" name="username" width="190px" class="inp" placeholder="Enter username" required>
                        </div>
                        <div class="datas">
                            <label class="pword">Password</label>
                            <input type="password" name="password" class="inp" placeholder="Enter password" required>
                        </div>
                        <div class="datas">
                            <input type="submit" name="login" class="button" value="Login" name="login">    
                        </div>
                    </form>
                </div>
        </div>  
</body>





</html>