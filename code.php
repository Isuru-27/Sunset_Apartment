<?php
require('connection.php');

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $role = $_POST['role'];

    // Check if passwords match
    if ($password != $confirm_password) {
        echo "
        <script>
            alert('Passwords do not match.');
            window.location.href='create.php';
        </script>
        ";
        exit; // Stop further execution if passwords don't match
    }

    $user_exist_query = "SELECT * FROM user WHERE username = '$username'";
    $result = mysqli_query($conn, $user_exist_query);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            $result_fetch = mysqli_fetch_assoc($result);
            echo "
            <script>
                alert('$result_fetch[username] - Username already taken');
                window.location.href='create.php';
            </script>
            ";
        } else {
            $query = "INSERT INTO user(username, password, role) VALUES ('$username', '$password', '$role')";
            if ($result = mysqli_query($conn, $query)) {
                echo "
                <script>
                alert('Registration Successful.');
                window.location.href='login.php'; // Redirect to login page
                </script>
                ";
            } else {
                echo "
                <script>
                    alert('Cannot Run Query.');
                    window.location.href='create.php';
                </script>
                ";
            }
        }
    } else {
        echo "
        <script>
        alert('Cannot Run Query.');
        window.location.href='create.php';
        </script>
        ";
    }
}
?>