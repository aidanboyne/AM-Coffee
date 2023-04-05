<?php
  session_name("AM");
  session_start();

  $db = new SQLite3('orders.db');
  $statement = 'CREATE TABLE IF NOT EXISTS orders(username TEXT, coffee TEXT, size TEXT, milk TEXT, sweetener TEXT, appt TEXT)';
  $db->exec($statement);

  $user = $_SESSION['username'];
  $statement = "SELECT username, coffee, size FROM orders WHERE username = '{$user}'";
  $res = $db->query($statement);
  while ($row = $res->fetchArray()){
      if ($row['username'] === $user){
          $coffee = $row['coffee'];
          $size = $row['size'];
          $milk = $row['milk'];
          $sugar = $row['sugar'];
      }
  }

?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      /* Media query for mobile view */
      @media only screen and (max-width: 600px) {
        form {
          width: 100%;
        }
      }
    </style>
    <link rel="stylesheet" href="coffee.css">
  </head>
  <body>
    <h1>Unit 2 Coffee</h1>
    <div class= "thanks">
      <div id="thankyou-message">
          <p>Thank you for your order, <?php echo($user) ?>. We will notify you when your <?php echo($size) ?> <?php echo($coffee) ?> is ready for pickup &#128516; &#9749;</p>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3305.158625793822!2d-118.45243058535249!3d34.06544772448274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2bc8523222e2b%3A0xc07bedf1bfeeb5df!2s700%20Levering%20Ave%2C%20Los%20Angeles%2C%20CA%2090024!5e0!3m2!1sen!2sus!4v1680658558729!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </body>
</html>