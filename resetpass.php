
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/resetpass.css" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" type="text/css">
    <title>Reset-password</title>
</head>
<body>
    <div class="loginBox">
    <h2>AL-Helper</h2>
                    
        
    <form action="" method="post">

        <?php
        if(isset($_POST['reset'])):
            //trying to log without entering data
            if($_POST['username']=='' || $_POST['current']=='' || $_POST['newpass']=='' || $_POST['repass']==''):
    ?>
        <h3><?php echo 'Cannot be empty spaces!'?></h3>
    <?php
            //incorrect username or password        
            elseif($_POST['username']!='sandeepa' || $_POST['current']!=1234):
    ?>
        <h3><?php echo 'Username and current password does not match!'?></h3>

    <?php
            //not match new password to reenter password       
            elseif($_POST['newpass']!=$_POST['repass']):
    ?>
        <h3><?php echo 'New password and reset password does not match!'?></h3>
          
    <?php
            endif;
        endif;
    ?>
        <div>
            <label for="username"></label>
            <input type="text" name="username" placeholder="Enter the username">
        </div>
        <div>
            <label for="current password"></label>
            <input type="text" name="current" placeholder="Enter the current password">
        </div>
        <div>
            <label for="new password"></label>
            <input type="text" name="newpass" placeholder="Enter the new password">
        </div>
        <div>
            <label for="reenter password"></label>
            <input type="text" name="repass" placeholder="Reenter the password">
        </div>
       
        <div>
            <input type="submit" name="reset" value="reset">
            <input type="submit" name="clear" value="clear">
        </div>
    </form>
    </div>
</body>
</html>