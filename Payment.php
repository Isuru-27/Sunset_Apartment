<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apartment Management Checkout</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #987ec2;
        }
        form {
            max-width: 600px;
            margin: 0 auto;
        }
        input, select, button {
            margin-bottom: 10px;
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        .card-fields {
            display: none;
        }
        .manager-details {
            display: none;
        }
        button {
            background-color: #5603f1;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #0c0e0c;
        }
        .payment-container {
            max-width: 500px;
            margin: 50px auto;
            background: #b4aebe;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
        img {
           max-width: 100%;
           height: auto;
           margin-top: 20px;
}
        .my{
            max-width: 30%;
            height: auto;
            margin-top: 20px;




        }
    </style>
</head>
<body>
<div class="payment-container">
    <h2><center>__Apartment Management Checkout__</center></h2>
    <form id="checkoutForm">


        <!-- (other fields remain unchanged) -->
        <label for="add"><b>Advance Rs:</b></label>
        <input type="text" id="add" name="adva" required>

        <label for="paymentMethod"><b>Select Payment Method:</b></label>
        <select id="paymentMethod" name="paymentMethod" onchange="togglePaymentFields()" required>
            <option value="Card">Card</option>
            <option value="Cash">Cash</option>
        </select>

        <div class="card-fields">
            <h3>Card Details</h3>
            <div class= "my"> <img src="https://www.pngmart.com/files/7/Payment-Background-PNG.png"></div>
            
            <label for="cname"><b>Name on Card</b></label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe" required>

            <label for="ccnum"><b>Credit card number</b></label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="0000-0000-0000-0000" required>

            <label for="expmonth"><b>Exp Month</b></label>
            <select id="expmonth" name="expmonth" required>
                <option value="01">January</option>
                <option value="02">February</option>
                <option value="03">March</option>
                <option value="04">April</option>
                <option value="05">May</option>
                <option value="06">June</option>
                <option value="07">July</option>
                <option value="08">August</option>
                <option value="09">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
                <!-- Add other months as needed -->
            </select>

            <label for="expyear"><b>Exp Year</b></label>
            <input type="text" id="expyear" name="expyear" placeholder="2023" required>

            <label for="cvv"><b>CVV</b></label>
            <input type="text" id="cvv" name="cvv" placeholder="352" required>
        </div>

        <button type="button" onclick="processPayment()" class="btn">Continue to checkout</button>
    </form>

    <div id="managerDetails" class="manager-details">
        <h3>Manager Details</h3>
        <p><b>Name: Mr.Kasun Perera</b></p>
        <p><b>Contact Me:+94 7622145225</b></p>
    </div>
    <center>
        <img src="https://www.pngmart.com/files/7/Payment-PNG-Transparent-Picture.png">
    </center>
</div>
    <script>
        function togglePaymentFields() {
            var paymentMethod = document.getElementById('paymentMethod').value;
            var cardFields = document.querySelector('.card-fields');
            var managerDetails = document.getElementById('managerDetails');

            if (paymentMethod === 'Card') {
                cardFields.style.display = 'block';
                managerDetails.style.display = 'none';
            } else {
                cardFields.style.display = 'none';
                managerDetails.style.display = 'block';
            }
        }

        function processPayment() {
            var category = document.getElementById('category').value;
            var paymentMethod = document.getElementById('paymentMethod').value;

            if (paymentMethod === 'Card') {
                // You can add your specific card payment logic here
                var cardName = document.getElementById('cname').value;
                var cardNumber = document.getElementById('ccnum').value;
                var expMonth = document.getElementById('expmonth').value;
                var expYear = document.getElementById('expyear').value;
                var cvv = document.getElementById('cvv').value;

                alert('Payment Successfully!');
            } else {
                // Display manager details for cash payment
                togglePaymentFields();  // Hide card fields if visible
                var managerDetails = document.getElementById('managerDetails');
                managerDetails.style.display = 'block';
            }
        }
    </script>

</body>
</html>



