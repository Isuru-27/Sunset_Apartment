<?php
 
require('connection.php');

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resident Page</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #987ec2; 
        margin: 0;
        padding: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }
    
    .form-container {
        background-color:#b4aebe;
        padding: 200px;
        padding-top: 500px;
        border-radius: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        text-align: left;
        width: 615px;
        height: 1200px;
    }
    
    .form {
        display: flex;
        flex-direction: column;
        margin-top: 20px;
        align-self: left;
        width: 400px;
        padding-left: 120px;
    }
    
    label {
        margin-bottom: 8px;
    }
    
    input, textarea {
        padding: 10px;
        border: 1px solid #4e9162;
        border-radius: 4px;
    }
    
    button {
        background-color: #5603f1; 
;
        color: #fff;
        padding: 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        width: 150px;
        height: 45px;
        font-size: 20px;
    }
    
    button:hover {
        background-color: #0c0c0c;
    }
    
    img {
        width: 500px;
        height: 300px;
        margin-right: 10px;
        cursor: pointer;
    }
    

    h2 {
        color: #000000;
        padding-top: 50px;
        font-size: 30px;
    }
    table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
        .table-container {
            margin-top: 30px;
            text-align: center;
            margin-right: 100px;
        }
    
    /* Responsive layout */
    @media (max-width: 600px) {
        .form-container {
            margin: 20px;
        }
    }
    </style>
</head>
<body>
   
    <div class="form-container">
        <h2><center>__Apartment Resident Registration__</center></h2><br>
        <form class="form" method="POST" action="reg.php">
            <label for="fname"><b>First name:</b></label>
            <input type="text" name="fname" placeholder="First Name" required><br>

            <label for="lname"><b>Last name:</b></label>
            <input type="text" name="lname" placeholder="Last Name" required><br>

            <label for="password"><b>Address:</b></label>
            <textarea id="address" name="address" rows="4" placeholder="Address" required></textarea><br>

            <label for="username"><b>Email Address:</b></label>
            <input type="text" name="email" placeholder="Email Address" required><br>

            <label for="phoneNumber"><b>Phone Number:</b></label>
            <input type="tel" id="phoneNumber" name="phoneNumber" placeholder="Phone Number"required><br>

            <label for="whatsappNumber"><b>WhatsApp Number:</b></label>
            <input type="tel" id="whatsappNumber" name="whatsappNumber" placeholder="WhatsApp Number" required><br>

            <label for="category"><b>Select Apartment Category:</b></label>
            <select id="category" name="category" required>
                <option value="Bronze">Bronze</option>
                <option value="Silver">Silver</option>
                <option value="Gold">Gold</option>
            </select><br>
            
            <label for="numberOfMembers"><b>No.of Members:</b></label>
            <input type="text" id="numberOfMembers" name="numberOfMembers" required><br>

            <label for="another"><b>Another Member's Name:</b></label>
            <input type="text" id="another" name="another" placeholder="Member Name" required><br>

            <label for="anopnum"><b>Her/His Phone Number:</b></label>
            <input type="tel" id="anopnum" name="anopnum" placeholder="Phone Number" required><br>
    
            <center>
            <form action="Payment.php">
            <button type="submit" name="submit2" class="login-button">Submit</button>
            </form>
            </center>
        </form>
        <center>
            <img src="https://graphicsfamily.com/wp-content/uploads/edd/2020/04/house-apartment-logo-blue-png-transparent.png">
        </center>
    </div>
    <script>
        var rowCounter = 1;

        function addRow() {
            var table = document.getElementById("familyTable").getElementsByTagName('tbody')[0];
            var newRow = table.insertRow(table.rows.length);

            for (var i = 0; i < 3; i++) {
                var cell = newRow.insertCell(i);
                var inputType = i === 2 ? 'number' : 'text';
                var placeholder = 'Member ' + rowCounter + ' ';

                cell.innerHTML = '<input type="' + inputType + '" name="memberName' + rowCounter + 'field' + (i + 1) + '" placeholder="' + placeholder + '">';
            }

            rowCounter++;
        }
    </script>
</body>
</html>