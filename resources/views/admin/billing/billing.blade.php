<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="/billing" method="post" class="my-4">
  <h2>Hotel Billing</h2>
  
  <label for="name">Name:</label>
  <input type="text" id="name" name="name" required>

  <label for="check-in">Check-in Date:</label>
  <input type="date" id="check-in" name="check-in" required>

  <label for="check-out">Check-out Date:</label>
  <input type="date" id="check-out" name="check-out" required>

  <label for="room-type">Room Type:</label>
  <select id="room-type" name="room-type">
    <option value="single">Single</option>
    <option value="double">Double</option>
    <option value="suite">Suite</option>
  </select>

  <label for="num-nights">Number of Nights:</label>
  <input type="number" id="num-nights" name="num-nights" min="1" required>

  <label for="num-guests">Number of Guests:</label>
  <input type="number" id="num-guests" name="num-guests" min="1" required>

  <label for="additional-charges">Additional Charges:</label>
  <input type="text" id="additional-charges" name="additional-charges">

  <label for="total-amount">Total Amount:</label>
  <input type="text" id="total-amount" name="total-amount" readonly>

  <input type="submit" value="Submit">
</form>

</body>
</html>