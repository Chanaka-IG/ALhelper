
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/signup.css" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" type="text/css">
    <title>AL-Helper</title>
</head>
<body>
    <div class="loginBox">
    <h2>AL-Helper</h2>
    <?php
            if(isset($_POST['signup'])):
                //trying to log without entering data
                if($_POST['username']=='' || $_POST['id']=='' || $_POST['password']=='' || $_POST['password']=='' || $_POST['repassword']=='' || $_POST['tpnumb']==''
                 || $_POST['district']=='' || $_POST['school']=='' || $_POST['stream']=='' || $_POST['email']==''):
        ?>
            <h3><?php echo 'can not be empty spaces!'?></h3>
        <?php
                //incorrect username or password        
                elseif($_POST['password']!=$_POST['repassword']):
        ?>
            <h3><?php echo 'Entered password does not match to re-entered one!'?></h3>
        <?php
                endif;
            endif;
        ?>
        
    <form action="" method="post">
        <div>
            <label for="username"><i class="fa fa-user"></i></label>
            <input type="text" name="username" placeholder="Enter the name">
        </div>
        <div>
            <label for="id"><i class="fa fa-id-card" aria-hidden="true"></i></label>
            <input type="text" name="id" placeholder="Enter the id number">
        </div>
        <div>
            <label for="password"><i class="fa fa-lock"></i></label>
            <input type="text" name="password" placeholder="Enter a password">
        </div>
        <div>
            <label for="repassword"><i class="fa fa-check-square"></i></label>
            <input type="text" name="repassword" placeholder="Reenter the password">
        </div>
        <div>
            <label for="tpnumb"><i class="fa fa-phone"></i></label>
            <input type="text" name="tpnumb" placeholder="Enter the telephone number">
        </div>
        <div>
            <label for="district"><i class="fa fa-map-marker"></i></label>
            <!--<input type="text" name="district" placeholder="Enter the district"> -->
            <select name="district" id="district" required>
                <option value="" disabled selected hidden>Select your district</option>
                <option value="ampara">Ampara</option>
                <option value="anuradhapura">Anuradhapura</option>
                <option value="badulla">Badulla</option>
                <option value="batticaloa">Batticaloa</option>
                <option value="colombo">Colombo</option>
                <option value="galle">Galle</option>
                <option value="gampaha">Gampaha</option>
                <option value="hambanthota">Hambanthota</option>
                <option value="jaffna">Jaffna</option>
                <option value="Kalutara">Kalutara</option>
                <option value="kandy">Kandy</option>
                <option value="kegalle">Kagalle</option>
                <option value="kilinochchi">Kilinochchi</option>
                <option value="kurunagala">Kurunagala</option>
                <option value="mannar">Mannar</option>
                <option value="matale">Matale</option>
                <option value="matara">Matara</option>
                <option value="mullaitivu">Mullaitivu</option>
                <option value="nuwara-eliya">Nuwara Eliya</option>
                <option value="polonnaruwa">Polonnaruwa</option>
                <option value="puttalam">Puttalam</option>
                <option value="rathnapura">Rathnapura</option>
                <option value="trincomalee">Trincomalee</option>
                <option value="vavuniya">Vavuniya</option>
            </select>
        </div>

        
        <div>
            <label for="security"><i class="fa fa-question"></i></label>
            <!--<input type="text" name="district" placeholder="Enter the district"> -->
            <select name="district" id="district" required>
                <option value="" disabled selected hidden>Select a security question</option>
                <option value="q1">Your mother's name</option>
                <option value="q2">Yout father's name</option>
                <option value="q3">Your favourite player</option>
                <option value="q4">Your favourite sport</option>

            </select>
        </div>
        <div>
            <label for="answer"><i class="fa fa-clipboard"></i></label>
            <input type="text" name="answer" placeholder="Enter the answer">
        </div>
        <div>
            <label for="stream"><i class="fa fa-tasks"></i></label>
            <input type="text" name="stream" placeholder="Enter the stream">
        </div>
        <div>
            <label for="Email"><i class="fa fa-envelope-open"></i></label>
            <input type="text" name="email" placeholder="Enter the email">
        </div>
        <div>
            <input type="submit" name="signup" value="signup">
        </div>
    </form>
    </div>
</body>
</html>