<!DOCTYPE html>
<html>
    <head>
        <title>
            EDIT || Musicero
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
                margin-left: 10px;
                cursor: pointer;
                margin-top: 100px;
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
                margin-top: 100px;
                font-size: 20px;
            }
            div.forms{
                text-align: center;
                padding-top: 50px ;
                padding-bottom: 50px;
                background-color: whitesmoke;
                width: 50%;
                height: 100%;
                margin-left: auto;
                margin-right: auto;
                margin-top: 150px;
                
            }
            input{
                background-color: black;
                color: wheat;
                width: 40%;
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
        <div class="Createuser">
            <a href="site" class="create1">Cancel</a> 
            <a href="login" class="out">Logout</a>
            <h2>EDIT</h2>
        </div>
            <div class="forms">
                <?php
                    $id;
                    if (isset($_POST['buttonedit'])) {
                        $idSearch = $_POST['update_id'];
                        for ($x = 0; $x < count($id); $x++) {
                            if ($id[$x]->id == $idSearch) {
                    ?>
                    <form action="update" method="post">
                        <input type="hidden" name="idSearch" value="<?php echo $id[$x]->id; ?>">
                        <div>
                            <label>Username</label>
                            <input type="text" name="username" value="<?php echo $username[$x]->username; ?>" class="inp" placeholder="Enter username" required>
                        </div>
                        <div>
                            <label>Password</label>
                            <input type="text" name="password" value="<?php echo $password[$x]->password; ?>" class="inp" placeholder="Enter password" required>                            </div>
                        <div>                 
                            <input type="submit" name="adds" value="Update">
                        </div>
                    </form>
                            
               <?php
                            }
                        }
                    }
                    ?>
            </div>
    </div>


</body>
</html>