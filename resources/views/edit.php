<!DOCTYPE html>
<html>
    <head>
        <title>
            EDIT || Musicero
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<style>
            body{
                background-color: red;
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
                text-align: center;
                padding-top: 50px ;
                padding-bottom: 50px;
                background-color: whitesmoke;
                width: 50%;
                height: 80%;
                margin-left: auto;
                margin-right: auto;
                margin-top: 20px;
                
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
        <img src="logo.png">
        <div class="createuser">
            <button href="site" class="create">Cancel</button> 
            <button href="login" class="out">Logout</button>
            <h2>EDIT</h2>
        </div>
            <div class="forms">
                <?php
                    $id;
                    if (isset($_POST['edit'])) {
                        $idSearch = $_POST['edit_id'];
                        for ($x = 0; $x < count($id); $x++) {
                            if ($id[$x]->id == $idSearch) {
                    ?>
                    <form action="update" method="post">
                        <input type="hidden" name="idSearch" value="<?php echo $id[$x]->id; ?>">
                            <div class="datas">
                                <label>Username</label>
                                <input type="text" name="username" value="<?php echo $username[$x]->username; ?>" class="inp" placeholder="Enter username" required>
                            </div>
                            <div class="datas">
                                <label>Password</label>
                                <input type="text" name="password" value="<?php echo $password[$x]->password; ?>" class="inp" placeholder="Enter password" required>
                            </div>
                            <div class="datas">                 
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