<?php
include('method.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post" class="registration">
       <div>
       
        <label for="example" class="registrtaion">Registration</label>
       </div><br>
       <div>
       Firstname:
        <input type="text" name="firstname" id="firstname">
       </div><br>
       <div>
       lastname:
        <input type="text" name="lastname" id="lastname">
       </div><br>
       <div>
        email:
        <input type="email" name="email" id="email">
       </div><br>
       <div>
        password:
        <input type="password" name="password" id="password">
       </div><br>
       <input type="submit" name="submit" value="submit"><br>
       <?php
       if(isset($_POST['submit']))
       {
        $res= registerus($_POST);
        if($res == 1)
        {
            echo "register sucess";

        }
        else{
            echo "not registered";
        }
       }
       ?>
       
</form>
</body>
</html>