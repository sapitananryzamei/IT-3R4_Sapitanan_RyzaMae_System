<!DOCTYPE html>
<html>
    <head>
        <title>
            CREATE USER || Musicero
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<style>
            body{
                background-image: url('sitebg.jpg');
                margin:0;
                background-size: 100%;
                background-attachment: scroll;
                background-repeat: no-repeat;
            }
            div.header{
                background-color: black;
                height: 100px;
                margin-bottom: 25x;
            }
            h2{
                color: aquamarine;
                font-family: Georgia;
                text-align: center;
                font-size: 40px;
            }
            div.header img{
                margin-top: 4px;
                margin-left: 590px;
                width: 13%; 
                
            }
            button.create{
                background-color: black;
                color: blanchedalmond;
                padding: 2px;
                cursor: pointer;
                margin-left: 8  px;
            }
            button.out{
                background-color: black;
                padding: 2px;
                text-decoration: none;
                color: blanchedalmond;
                float: right;
                margin-right: 10px;
                cursor: pointer;
            }
            div.forms{
                background-color: whitesmoke;
                width: 50%;
                height: 80%;
                margin-left: auto;
                margin-right: auto;
                margin-top: 60px;

            }
            form{
                text-align: center;
                padding-top: 50px ;
                padding-bottom: 50px;
                
            }
            input{
                background-color: black;
                color: wheat;
                width: 20%;
                height: 30px;
                padding: 2px;
                margin: 5px;
                
            }
            label{
                color: black;
                font-size: 30px;
                
            }
            label.pword{
                margin-right: 18px;
            }

        </style>
    </head>
<body>
    <div class="header">
        <img src="logo.png">
        <h2>CREATE USER</h2>
    </div>
    <div class="buttons">
        <div class="createuser">
            <button href="site" class="create">Cancel</button> 
            <button href="login" class="out">Logout</button>
        </div>
        <div class="forms">
            <form action="create-user" method="post">
                <div class="datas">
                    <label>Username</label>
                    <input type="text" name="username" class="inp" placeholder="Enter username" required>
                </div>
                <div class="datas">
                    <label class="pword">Password</label>
                    <input type="text" name="password" class="inp" placeholder="Enter password" required>
                </div>
                <div class="datas">
                    <input type="submit" name="add" class="adds" value="Create">
                    
                </div>
            </form>
        </div>
    </div>


</body>
</html>