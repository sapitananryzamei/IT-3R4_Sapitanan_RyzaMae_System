<!DOCTYPE html>
<html>
    <head>
        <title>
            CREATE USER || Musicero
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<style>
            body{
                background-color: grey;
                margin:0;
                background-size: 100%;
                background-attachment: scroll;
                background-repeat: no-repeat;
            }
            div.header{
                background-color: black;
                height: 100px;
                margin-bottom: 25px;
                width: 100%;
               
            }
            h2{
                color: aquamarine;
                font-family: Georgia;
                text-align: center;
                font-size: 40px;
                margin-top: 0;
            }
            a.create1{
                background-color: black;
                padding: 2px;
                text-decoration: none;
                color: blanchedalmond;
                float: left;
                margin-left: 15px;
                cursor: pointer;
                margin-top: 20px;
                font-size: 20px;
            }
            a.out{
                background-color: black;
                padding: 2px;
                text-decoration: none;
                color: blanchedalmond;
                float: right;
                margin-right: 10px;
                cursor: pointer;
                margin-top: 20px;
                font-size: 20px;
            }
            div.forms{
                background-color: whitesmoke;
                width: 50%;
                height: 80%;
                margin-left: auto;
                margin-right: auto;
                margin-top: 60px;
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
        <h2>CREATE USER</h2>
        <a href="site" class="create1">Cancel</a> 
        <a href="login" class="out">Logout</a>
    </div>
    <div class=forms>
        <form action="createuser" method="post">
            <div>
            <label>Username</label>
            <input type="text" name="username" class="inp" placeholder="Enter username" required>
        </div>
        <div>
            <label class="pword">Password</label>
            <input type="text" name="password" class="inp" placeholder="Enter password" required>
        </div>
        <div>
            <input type="submit" name="add" value="Create">
        </div>
        </form>
    </div>

</body>
</html>