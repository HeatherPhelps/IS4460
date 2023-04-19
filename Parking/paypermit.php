<?php
require_once('sessioncheck.php');
?>

<!DOCTYPE html>
<html>
  <head>
    <title>View/Pay Permit</title>
  </head>
  <body>
    <h1>View/Pay Permit</h1>
    <h2>Permit Information:</h2>
    <p>Permit Type: Residential</p>
    <p>Permit Expiration Date: 12/31/2023</p>
    <h2>Payment Information:</h2>
    <form>
      <label for="amount">Amount:</label>
      <input type="number" id="amount" name="amount" value="50">
      <br><br>
      <label for="cardnumber">Card Number:</label>
      <input type="text" id="cardnumber" name="cardnumber">
      <br><br>
      <label for="cardname">Cardholder Name:</label>
      <input type="text" id="cardname" name="cardname">
      <br><br>
      <label for="expirationdate">Expiration Date:</label>
      <input type="text" id="expirationdate" name="expirationdate">
      <br><br>
      <label for="cvv">CVV:</label>
      <input type="text" id="cvv" name="cvv">
      <br><br>
      <input type="submit" value="Submit Payment">
    </form>
  </body>
</html>