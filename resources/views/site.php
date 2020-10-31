<!DOCTYPE html>
<html>
    <head>
        <title>
            Musicero
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
            a.create1{
                background-color: black;
                color: blanchedalmond;
                padding: 2px;
                cursor: pointer;
                margin-left: 8px;
            }
            a.out{
                background-color: black;
                padding: 2px;
                text-decoration: none;
                color: blanchedalmond;
                float: right;
                margin-right: 10px;
                cursor: pointer;
            }
            table.tbl{
                margin-top: 60px;
                background-color: black;
                padding: 10px;    
            }
            table, td {
                border: 1px solid black;
                text-align: center;
            }
            button.edit{
                background-color: black;
                color: blanchedalmond;
            }
            button.delete{
                background-color: black;
                color: blanchedalmond;
            }
            th{
                background-color: black;
                color: blanchedalmond;
                border: 1px solid white;
            }
            td{
                background-color: blanchedalmond;
            }
        </style>
    </head>
<body>
    <div class="header">
        <img src="logo.png">
        <h2>Musicians</h2>
    </div>
    <div class="buttons">
        <form action="create" method="post">
            <div class="Createuser">
                <a class="create1" href="create">Create New User</a> 
                <a href="login" class="out">Logout</a>
            </div>
        </form>
    </div>
    <table class="tbl" id="data" width="100%" cellspacing="0">

        <thead id="thead">
            <tr>
                <th class="top">User_ID</th>
                <th class="top">Username</th>
                <th class="top">Password</th>
                <th class="top">Edit</th>
                <th class="top">Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $id;
            $username;
            $password;
            if (!empty($id)) {
                for ($x = 0; $x < count($id); $x++) {
            ?>
                    <tr>
                        <td class="top"><?php echo $id[$x]->id; ?></td>
                        <td class="top"><?php echo $username[$x]->username; ?></td>
                        <td class="top"><?php echo $password[$x]->password; ?></td>
                        <td class="top">
                            <form action="edit" method="post">
                                <input type="hidden" name="edit_id" value="<?php echo $id[$x]->id; ?>">
                                <button type="submit" class="edit">EDIT</button>
                            </form>
                        </td>
                        <td class="top">
                            <form action="delete" method="post">
                                <input type="hidden" name="delete_id" value="<?php echo $id[$x]->id; ?>">
                                <button type="submit" class="delete">DELETE</button>
                            </form>

                        </td>
                    </tr>
            <?php
                }
            } else {
                echo "No record found.";
            }
            ?>
        </tbody>
    </table>


</body>


</html>