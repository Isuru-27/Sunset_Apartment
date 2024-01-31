<?php
require('connection.php');

if (isset($_POST['submit2'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $respnum = $_POST['phoneNumber'];
    $reswnum = $_POST['whatsappNumber'];
    $category = $_POST['category'];
    $nummem = $_POST['numberOfMembers'];
    $memname = $_POST['another'];
    $memnum = $_POST['anopnum'];


    $user_exist_query = "SELECT * FROM registration WHERE first_name = '$fname'";
    $result = mysqli_query($conn, $user_exist_query);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            $result_fetch = mysqli_fetch_assoc($result);
            echo "
            <script>
                alert('$result_fetch[first_name] - Username already taken');
                window.location.href='apareg.php';
            </script>
            ";
        } else {
            $query = "INSERT INTO registration(first_name, last_name, Address, email_address, phone_number , whatsapp_number, category, no_of_members, member_name, member_phone_number) VALUES ('$fname','$lname','$address','$email','$respnum','$reswnum','$category','$nummem','$memname','$memnum')";
            if ($result = mysqli_query($conn, $query)) {
                echo "
                <script>
                alert('Registration Successful.');
                window.location.href='Payment.php'; // Redirect to login page
                </script>
                ";
            } else {
                echo "
                <script>
                    alert('Cannot Run Query.');
                    window.location.href='apareg.php';
                </script>
                ";
            }
        }
    } else {
        echo "
        <script>
        alert('Cannot Run Query.');
        window.location.href='apareg.php';
        </script>
        ";
    }
}
?>
