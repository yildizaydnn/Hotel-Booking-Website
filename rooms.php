<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TJ Hotel</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f9f9f9;
    }

    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 20px;
      background-color: #fff;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    header h1 {
      font-family: "Georgia", serif;
      margin: 0;
    }

    header nav a {
      margin: 0 15px;
      text-decoration: none;
      color: #333;
    }

    header nav a:hover {
      text-decoration: underline;
    }

    .container {
      display: flex;
      padding: 20px;
    }

    .filters {
      width: 25%;
      background-color: #fff;
      padding: 15px;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      margin-right: 20px;
    }

    .filters h3 {
      margin-bottom: 15px;
      font-size: 18px;
      border-bottom: 1px solid #ddd;
      padding-bottom: 5px;
    }

    .filters label {
      display: block;
      margin: 10px 0 5px;
    }

    .filters input[type="date"] {
      width: 100%;
      padding: 8px;
      margin-bottom: 15px;
      border: 1px solid #ddd;
      border-radius: 4px;
    }

    .filters input[type="checkbox"] {
      margin-right: 8px;
    }

    .rooms {
      width: 75%;
    }

    .room-card {
      display: flex;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      margin-bottom: 20px;
      overflow: hidden;
    }

    .room-card img {
      width: 40%;
      object-fit: cover;
    }

    .room-details {
      padding: 15px;
      width: 60%;
    }

    .room-details h2 {
      margin-top: 0;
      font-size: 20px;
    }

    .room-details p {
      margin: 5px 0;
    }

    .tags {
      display: flex;
      flex-wrap: wrap;
      margin: 10px 0;
    }

    .tags span {
      background-color: #eee;
      padding: 5px 10px;
      border-radius: 4px;
      font-size: 12px;
      margin: 5px;
    }

    .price {
      font-size: 18px;
      font-weight: bold;
      color: #333;
      margin: 15px 0;
    }

    .actions button {
      background-color: #1abc9c;
      color: white;
      border: none;
      padding: 10px 15px;
      border-radius: 4px;
      cursor: pointer;
      font-size: 14px;
      margin-right: 10px;
    }

    .actions button:hover {
      background-color: #16a085;
    }

    .actions button.secondary {
      background-color: #ddd;
      color: #333;
    }

    .actions button.secondary:hover {
      background-color: #ccc;
    }
  </style>
</head>

<body>
  <header>
    <h1>TJ HOTEL</h1>
    <nav>
      <a href="#">Home</a>
      <a href="#">Rooms</a>
      <a href="#">Facilities</a>
      <a href="#">Contact us</a>
      <a href="#">About</a>
    </nav>
    <div>
      <button>Login</button>
      <button>Register</button>
    </div>
  </header>
  <div class="container">
    <aside class="filters">
      <h3>Filters</h3>
      <div>
        <label for="check-in">Check-in</label>
        <input type="date" id="check-in">

        <label for="check-out">Check-out</label>
        <input type="date" id="check-out">
      </div>
      <h3>Facilities</h3>
      <div>
        <label><input type="checkbox"> Facility one</label>
        <label><input type="checkbox"> Facility two</label>
        <label><input type="checkbox"> Facility three</label>
      </div>
      <h3>Guests</h3>
      <div>
        <label><input type="checkbox"> Adults</label>
        <label><input type="checkbox"> Children</label>
      </div>
    </aside>
    <main class="rooms">
      <h2>Our Rooms</h2>
      <div class="room-card">
        <img src="https://via.placeholder.com/400x300" alt="Room Image">
        <div class="room-details">
          <h2>Simple Room Name</h2>
          <p>Features</p>
          <div class="tags">
            <span>2 Rooms</span>
            <span>1 Bathroom</span>
            <span>1 Balcony</span>
            <span>3 Sofa</span>
          </div>
          <p>Facilities</p>
          <div class="tags">
            <span>Wifi</span>
            <span>Television</span>
            <span>AC</span>
            <span>Room heater</span>
          </div>
          <p>Guests</p>
          <div class="tags">
            <span>5 Adults</span>
            <span>4 Children</span>
          </div>
          <div class="price">₹200 per night</div>
          <div class="actions">
            <button>Book Now</button>
            <button class="secondary">More details</button>
          </div>
        </div>
      </div>
    </main>
  </div>
</body>

</html>