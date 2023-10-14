<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JMAR Event Creation</title>
    <link rel="stylesheet" href="./Base.css">
    <link rel="stylesheet" href="./book.css">
	
<style>

.button {
  background-color: darkblue;
  border: none;
  color: white;
  padding: 12px 25px;
  width: 30%
  text-align: center;
  display: inline-block;
  font-size: 16px;
  margin: 4px 5px;
  cursor: pointer;
}
div.elem-group {
  margin: 20px 0;
}

div.elem-group.inlined {
  width: 49%;
  display: inline-block;
  float: left;
  margin-left: 1%;
}

label {
  display: block;
  font-family: 'Nanum Gothic';
  padding-bottom: 10px;
  font-size: 1.25em;
}

input, select, textarea {
  border-radius: 2px;
  border: 2px solid #777;
  box-sizing: border-box;
  font-size: 1.25em;
  font-family: 'Nanum Gothic';
  width: 100%;
  padding: 10px;
}

div.elem-group.inlined input {
  width: 95%;
  display: inline-block;
}
hr {
  border: 1px dotted #ccc;
}

button:hover {
  border: 2px solid black;
}

/* About Part */
.about{
    display: flex;
    height: 750px;
    margin-top: 40px;
}

.about .right {
    margin-left: 20px;
    text-align: center;
    background:linear-gradient(135deg, #13f1fc 0%,#0470dc 100%);
    color: #fff;
}

.about h2{
    font-size: 36px;
    line-height: 100px;
}

.about p{
    font-size: 18px;
}
</style>
</head>
<body>
    <!-- Navigation Part -->
    <div class="header">
        <div class="wrapper">
            <!-- logo -->
            <div class="logo">
                <a href="./index.html">JMAR Event Creation</a>
            </div>
            <!-- Navigation -->
            <div class="nav">
                <ul>
                    <li><a href="./index.html" class="active">Home</a></li>
                    <li><a href="./Authorised Dealer.html">Authorised Dealer</a></li>
                    <li><a href="./Renew & Pay Bill.html">Renew & Pay Bill Services</a></li>
                    <li><a href="./Printing.html">Printing</a></li>
                    <li><a href="./Event.html">Events</a></li>
                    <li><a href="./Gift & Souvenir.html">Gift & Souvenir</a></li>
					<li><a href="./Booking.php">Book</a></li>
                </ul>
            </div>
        </div>
    </div>        

    <!-- Banner Part -->
    <div class="banner">
        <div class="wrapper">
        </div>
    </div>

    <!-- About Part -->
    <div class="about wrapper">
        <div class="left">
            <img src="./Images/About.jpg" alt="">
        </div>
        <div class="right">
          <form action="reservation.php" method="post">
		  <h2>Booking Form</h2>
  <div class="elem-group">
    <label for="name">Your Name</label>
    <input type="text" id="name" name="name" placeholder="John Doe" pattern=[A-Z\sa-z]{3,20} required>
  </div>
  <div class="elem-group">
    <label for="email">Your E-mail</label>
    <input type="email" id="email" name="email" placeholder="john.doe@email.com" required>
  </div>
  <div class="elem-group">
    <label for="phone">Your Phone</label>
    <input type="tel" id="phone" name="phone" placeholder="01234567890" pattern=(\d{3})-?\s?(\d{3})-?\s?(\d{4}) required>
  </div>
  <hr>
  <div class="elem-group inlined">
    <label for="adult">Address 1</label>
    <input type="text" id="adult" name="address1"required>
  </div>
  <div class="elem-group inlined">
      <label for="adult">Address 2</label>
    <input type="text" id="child" name="address2">
  </div>
  <div class="elem-group inlined">
    <label for="date">Check-in Date</label>
    <input type="date" id="date" name="checkin" required>
  </div>
  <div class="elem-group inlined">
    <label for="time">Time</label>
    <input type="time" id="checkout-date" name="time" required>
  </div>
  <div class="elem-group">
    <label for="service">Select Service</label>
    <select id="service" name="service" required>
        <option value="">Choose a service from the List</option>
        <option value="Authorised Dealer">Authorised Dealer</option>
        <option value="Renew">Renew and Pay Bill</option>
        <option value="Priniting">Printing</option>
		<option value="Events">Events</option>
		<option value="Gift">Gift</option>
    </select>
	 <hr>
  <button type="submit" class="button">Book</button>
  </div>
</form>
    </div>
        </div>

</body>
</html>