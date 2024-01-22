<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="payment.css">
  <title>Card Payment Form</title>
</head>
<body>
  <div class="card-container">
    <div class="card">
      <div class="card-header">
        <h2>Card Payment</h2>
      </div>
      <div class="card-body">
        <form id="payment-form">
          <label for="card-number">Card Number</label>
          <input type="text" id="card-number" placeholder="Enter your card number" required>
          <label for="expiry-date">Expiry Date</label>
          <input type="text" id="expiry-date" placeholder="MM/YY" required>
          <label for="cvv">CVV</label>
          <input type="text" id="cvv" placeholder="123" required>
          <button type="submit">Pay Now</button>
        </form>
        <div id="success-message" class="hidden">
          Payment successful! Thank you for your purchase Happy Day From a Whole Foods.
        </div>
      </div>
    </div>
  </div>

  <script src="script.js"></script>
</body>
</html>
