<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hotel XYZ</title>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }

    header {
      background-color: #333;
      color: white;
      text-align: center;
      padding: 1em;
    }

    nav {
      background-color: #444;
      color: white;
      text-align: center;
      padding: 1em;
    }

    section {
      padding: 20px;
      text-align: center; 
    }

    .hotel-card {
      border: 1px solid #ccc;
      border-radius: 5px;
      margin: 10px;
      padding: 15px;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      width: 300px;
      transition: transform 0.3s ease-in-out;
    }

    .hotel-card:hover {
      transform: scale(1.05);
    }

    .hotel-card img {
      max-width: 100%;
      height: auto;
      border-radius: 5px;
    }

    footer {
      background-color: #333;
      color: white;
      text-align: center;
      padding: 1em;
      position: fixed;
      bottom: 0;
      width: 100%;
    }

    /* Styles for the navigation bar */
    nav a {
      text-decoration: none;
      color: white;
      margin: 0 15px;
      transition: color 0.3s ease;
    }

    nav a:hover {
      color: #87CEEB;
    }

    
    .book-now-button {
      background-color: #87CEEB;
      color: white;
      border: none;
      padding: 10px 20px;
      font-size: 16px;
      cursor: pointer;
      border-radius: 5px;
    }

    .book-now-button:hover {
      background-color: #4682B4;
    }
  </style>
</head>
<body>

  
<header>
    <div class="container">
      <h1>Welcome to Hotel XYZ</h1>
      <p>Your Perfect Getaway</p>
    </div>
  </header>

  <nav>
    <a href="#home">Home</a>
    <a href="#rooms">Rooms</a>
    <a href="#facilities">Facilities</a>
    <a href="#contact">Contact</a>
  </nav>

  <section id="hero">
    <div class="container">
      <h2>Experience Luxury Like Never Before</h2>
      <p>Indulge in comfort and sophistication at Hotel XYZ. Book your stay today!</p>
      <button class="book-now-button">Book Now</button>
    </div>
  </section>

  

  <section id="rooms">
    <div class="container">
      <h2>Our Rooms</h2>
    <div class="hotel-card">
      <img src="hotel-room.jpg" alt="Hotel Room">
      <h3>Deluxe Room</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget urna at nulla vestibulum pharetra.</p>
      <p>Price: $150 per night</p>
      <button class="book-now-button">Book Now</button>
    </div>

    <div class="hotel-card">
      <img src="suite-room.jpg" alt="Suite Room">
      <h3>Suite Room</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget urna at nulla vestibulum pharetra.</p>
      <p>Price: $250 per night</p>
      <button class="book-now-button">Book Now</button>
    </div>
  </section>

  <section id="facilities">
    <h2>Our Facilities</h2>
    <p>We offer a range of facilities to make your stay enjoyable.</p>
    <!-- Add more content about facilities here -->
    <div class="facility">
        <img src="pool.jpg" alt="Swimming Pool">
        <h3>Swimming Pool</h3>
        <p>Enjoy our spacious outdoor swimming pool surrounded by lush greenery.</p>
      </div>
  </section>

  <section id="contact">
    <h2>Contact Us</h2>
    <p>Have questions? Reach out to us!</p>
    <!-- Add a contact form or contact information here -->
  </section>

  <footer>
    &copy; 2023 Hotel XYZ. All rights reserved.
  </footer>

</body>
</html>
