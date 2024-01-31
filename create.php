<?php
 
require('connection.php');

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="cre1.css">
    <title>Login Page</title>
</head>
<body>
   
    <div class="login-container">
        <h2><center>__Create New Account__</center></h2>
        <form method="POST" action="code.php" class="login-form">
            
            <label for="fname">First name:</label>
            <input type="text" name="fname" placeholder="First Name" required><br>

            <label for="lname">Last name:</label>
            <input type="text" name="lname" placeholder="Last Name" required><br>

            <label for="password">Username:</label>
            <input type="text" name="username" placeholder="Username" required><br>

            <label for="username">Email Address:</label>
            <input type="text" name="email" placeholder="Email Address" required><br>

            <label for="password">Password:</label>
            <input type="password" name="password" placeholder="Password" required><br>

            <label for="confirm_password">Confirm Password:</label>
            <input type="password" name="confirm_password" placeholder="Confirm Password" id="confirm_password" required><br>

            <label for="role">Choose the Role:</label>
            <select name="role" id="role">
                <option value="admin">Admin</option>
                <option value="user">User</option>
                <option value="staff">Staff</option>
            </select>
            <br><br>
            <center>
            <button type="submit" name="submit" class="login-button">Sign Up</button><br><br>
            <a href="login.php">Already have an account</a>
            </center>
            <?php
            if(isset($_error))
            {
                foreach($error as $error)
                {
                    echo '<span class="error-msg">'.$error.'</span>';
                };
            };           
            ?>
        </form>
        <center>
        <img src="https://graphicsfamily.com/wp-content/uploads/edd/2020/04/house-apartment-logo-blue-png-transparent.png">
        </center>
    </div>
    
</body>
</html>