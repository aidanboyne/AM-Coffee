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
    <form class="form" action="orders.php" method="POST">
      <!-- Customer information -->
      <label for="username">Name:</label>
      <input type="text" id="name" name="username">

      <!-- Beverage information -->
      <label for="coffee">Select your coffee:</label>
      <select id="coffee" name="coffee">
        <option value="drip coffee">Drip Coffee</option>
        <option value="pour over">Pour Over</option>
        <option value="aeropress">Aeropress</option>
      </select>

      <!-- Need to fix id and name -->
      <label for="size">Size:</label>
      <select id="size" name="size">
        <option value="12 oz.">Small (12 oz.)</option>
        <option value="20 oz.">Large (20 oz.)</option>
      </select>

      <!-- Need to fix id and name -->
      <div class="row">
        <div class="column">
          <label for="milk">Milk:</label>
          <select id="milk" name="milk">
            <option value="2%">2%</option>
            <option value="Almond">Almond</option>
            <option value="Oat">Oat</option>
          </select>
        </div>
        <div class="column">
          <label for="sweetener">Sweetener:</label>
            <select id="sweetener" name="sweetener">
              <option value="100%">100%</option>
              <option value="50%">50%</option>
              <option value="0%">0%</option>
            </select>
        </div>
      </div>
      <h3></h3>

      <!-- Pickup time -->
      <label for="time">Pickup Time:</label>
      <div class="center">       
        <input type="time" id="ordertime" name="time"
        min="07:00" max="11:00" value="08:00">
        <small>Our hours are 7:00 - 11:00 AM Monday through Friday.</small>
      </div>

      <h3> Please venmo @aidan-boyne! We will only start your order once we recive the venmo. Thanks!</h3>
      <div class = "center">
        <input type="submit" value="Submit">
      </div>
    </form>
    <div id="thankyou-message"></div>
    <div id="info-message"></div>
    <div class="center">
      <h3> Pickup at 700 Levering Courtyard <br> 
        Made with &#10084; by Aidan and Mike <br><br><br>
        Feel free to text at (903)-504-7952 with any special requests or order updates
      </h3>
    </div>
    <script>
      function submitForm() {
        var name = document.getElementById("username").value;
        var coffee = document.getElementById("coffee").value;
        var size = document.getElementById("size").value;
        var milk = document.getElementById("milk").value;
        var sugar = document.getElementById("sweetener").value;
        var message = "Thank you for your order " + name + ". We will notify you when your " + size + " " + coffee + " is ready for pickup &#128516; &#9749;";
        var info = "Milk: " + milk + "\tSugar:" + sugar;  
        document.getElementById("thankyou-message").innerHTML = message;
        document.getElementById("info-message").innerHTML = info;
        return false;
      }
    </script>