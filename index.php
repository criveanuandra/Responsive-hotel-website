<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>HOTEL LA SAGRADA FAMILIA BARCELONA</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
  <link rel="icon" href="images/logo.png" type="image/png">
</head>
<body>
</body>
 

  <header class="header" id="header">
    <div class="head-top">
      <div class="site-name">
        <span>La Sagrada Familia Hotel</span>
      </div>
      <div class="site-nav">
        <span id="nav-btn">MENU <i class="fas fa-bars"></i></span>
      </div>
    </div>

    <div class="head-bottom flex">
      <h2>NICE AND COMFORTABLE PLACE TO STAY IN BARCELONA</h2>
      <p>Don't you know to spend your holiday in Barcelona?Choose us for the best experience and best comfort.</p>
      <button type="button" class="head-btn">GET STARTED</button>
    </div>
  </header>
  <div class="sidenav" id="sidenav">
    <span class="cancel-btn" id="cancel-btn">
      <i class="fas fa-times"></i>
    </span>

    <ul class="navbar">
      <li><a href="#header">home</a></li>
      <li><a href="#services">services</a></li>
      <li><a href="#rooms">rooms</a></li>
      <li><a href="#customers">customers</a></li>
    </ul>
    <a href="./sign-up.php">
      <button class="btn sign-up">sign up</button>
    </a>
    <i class="fa fa-spinner fa-spin"></i>
    <button class="btn log-in">log in</button>
    <i class="fa fa-refresh fa-spin"></i>
  </div>
  
  
  <div id="modal"></div>


  
  <section class="services sec-width" id="services">
    <div class="title">
      <h2>services</h2>
    </div>
    <div class="services-container">
    
      <article class="service">
        <div class="service-icon">
          <span>
            <i class="fas fa-utensils"></i>
          </span>
        </div>
        <div class="service-content">
          <h2>Food Service/ Food Runner</h2>
          <p>Choose a range of variety dishes such as mediteraneen food:oysters,shrimps,salmon</p>
          <button type="button" class="btn">Know More</button>
        </div>
      </article>
         <article class="service">
        <div class="service-icon">
          <span>
            <i class="fas fa-swimming-pool"></i>
          </span>
        </div>
        <div class="service-content">
          <h2>Refreshment</h2>
          <p>Find more</p>
          <button type="button" class="btn">Know More</button>
        </div>
      </article>
            <article class="service">
        <div class="service-icon">
          <span>
            <i class="fas fa-broom"></i>
          </span>
        </div>
        <div class="service-content">
          <h2>Housekeeping</h2>
          <p>Everyday we clean our guest's room.</p>
          <button type="button" class="btn">Know More</button>
        </div>
      </article>
      
      <article class="service">
        <div class="service-icon">
          <span>
            <i class="fas fa-door-closed"></i>
          </span>
        </div>
        <div class="service-content">
          <h2>Room Security</h2>
          <p>You have the best room securiy</p>
          <button type="button" class="btn">Know More</button>
        </div>
      </article>
          </div>
  </section>

  <div class="book-form">
    <form class="book-form"></form>
    <div class="form-item">
      <label for="Checkin-date">Checkin-date</label>
      <input type="date" id="Checkin-date">
    </div>


  </div>
  <div class="form-item">
    <label for="checkout-date">Check Out Date: </label>
    <input type="date" id="chekout-date">
  </div>
  <div class="form-item">
    <label for="adult">Adults: </label>
    <input type="number" min="1" value="1" id="adult">
  </div>
  <div class="form-item">
    <label for="children">Children: </label>
    <input type="number" min="1" value="1" id="children">
  </div>
  <div class="form-item">
    <label for="rooms">Rooms: </label>
    <input type="number" min="1" value="1" id="rooms">
  </div>
  <div class="form-item">
    <input type="submit" class="btn" value="Book Now">
  </div>
  </form>
  </div>

  <section class="rooms sec-width" id="rooms">
    <div class="title">
      <h2>rooms</h2>
    </div>
    <div class="rooms-container">
            <article class="room">
        <div class="room-image">
          <img src="images/camera1.jpg" alt="room image">
        </div>
        <div class="room-text">
          <h3>Luxury Rooms</h3>
          <ul>
            <li>
              <i class="fas fa-arrow-alt-circle-right"></i>
              <p>Room with a great view above "La Sagrada Familia"</p>
            </li>
            <li>
              <i class="fas fa-arrow-alt-circle-rigt"></i>
            <p>Choose to drink your morning coffe with a great view</p>         
            </li>
            <li>
              <i class="fas fa-arrow-alt-circle-right"></i>
              And choose luxury.
            </li>
          </ul>
                      <p>Only for </p>
          <p class="rate">
            <span>$150.00 /</span> Per Night
          </p>
          <button type="button" class="btn">book now</button>
        </div>
      </article>
    
      <article class="room">
        <div class="room-image">
          <img src="images/livingroom.jpg" alt="room image">
        </div>
        <div class="room-text">
          <h3>Luxury Apartements</h3>
          <ul>
            <li>
              <i class="fas fa-arrow-alt-circle-right"></i>
              Do you need more space?.
            </li>
            <li>
              <i class="fas fa-arrow-alt-circle-right"></i>
              Choose an apartment.
            </li>
            <li>
              <i class="fas fa-arrow-alt-circle-right"></i>
              Premium design and also comfort.
            </li>
          </ul>
          <p>Only for </p>
          <p class="rate">
            <span>$199.00 /</span> Per Night
          </p>
          <button type="button" class="btn">book now</button>
        </div>
      </article>
            <article class="room">
        <div class="room-image">
          <img src="images/luxbedroom.jpg" alt="room image">
        </div>
        <div class="room-text">
          <h3>Deluxe Penthouse</h3>
          <ul>
            <li>
              <i class="fas fa-arrow-alt-circle-right"></i>
              We have the greatest penthouse at 30 floor.
            </li>
            <li>
              <i class="fas fa-arrow-alt-circle-right"></i>
              Choose to stay in a penthouse during your holiday in Barcelona.
            </li>
            <li>
              <i class="fas fa-arrow-alt-circle-right"></i>
              It's perfect for a family or for a couple .
            </li>
          </ul>
          <p>Only for </p>
          <p class="rate">
            <span>$599.00 /</span> Per Night
          </p>
          <button type="button" class="btn">book now</button>
        </div>
      </article>
    </div>
  </section>
  <section class="customers" id="customers">
    <div class="sec-width">
      <div class="title">
        <h2>customers</h2>
      </div>
      <div class="customers-container">
        
        <div class="customer">
          <div class="rating">
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star"></i></span>
            <span><i class="far fa-star"></i></span>
          </div>
          <h3>We Loved it</h3>
          <p>We have enjoyed our accomodation during our holiday spent in Barcelona</p>
          <img src="images/cus1.jpg" alt="customer image">
          <span>Customer Name, Country</span>
          <span>Dave,UK</span>
        </div>
       
        <div class="customer">
          <div class="rating">
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star"></i></span>
            <span><i class="far fa-star"></i></span>
          </div>
          <h3>Comfortable Living</h3>
          <p>Spacious,luxury room and great view.</p>
          <img src="images/happywoman.jpg" alt="customer image">
          <span>Customer Name, Country</span>
          <span>Jane,USA</span>
        </div>
               <div class="customer">
          <div class="rating">
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star"></i></span>
            <span><i class="far fa-star"></i></span>
          </div>
          <h3>Nice Place</h3>
          <p>Best services,the best food and hotel where I've spent my holiday</p>
          <img src="images/cus3.jpg" alt="customer image">
          <span>Customer Name, Country</span>
          <span>Kevin,Italy.</span>
        </div>
        
      </div>
    </div>
  </section>
  
  <footer class="footer">
    <div class="footer-container">
      <div>
        <h2>About Us </h2>
        <p>Lorem ipsum </p>
        <ul class="social-icons">
          <li class="flex">
            <i class="fa fa-twitter fa-2x"></i>
          </li>
          <li class="flex">
            <i class="fa fa-facebook fa-2x"></i>
          </li>
          <li class="flex">
            <i class="fa fa-instagram fa-2x"></i>
          </li>
        </ul>
      </div>

      <div>
        <h2>Useful Links</h2>
        <a href="#">Blog</a>
        <a href="#">Rooms</a>
        <a href="#">Subscription</a>
        <a href="#">Gift Card</a>
      </div>

      <div>
        <h2>Privacy</h2>
        <a href="#">Career</a>
        <a href="#">About Us</a>
        <a href="#">Contact Us</a>
        <a href="#">Services</a>
      </div>

      <div>
        <h2>Have A Question</h2>
        <div class="contact-item">
          <span>
            <i class="fas fa-map-marker-alt"></i>
          </span>
          <span>
            Eixample,120,Barcelona Spain.
          </span>
        </div>
        <div class="contact-item">
          <span>
            <i class="fas fa-phone-alt"></i>
          </span>
          <span>
            +8447568132
          </span>
        </div>
        <div class="contact-item">
          <span>
            <i class="fas fa-envelope"></i>
          </span>
          <span>
            lasagradafamiliahotel@yahoo.com
          </span>
        </div>
      </div>
    </div>
  </footer>
  

  <script src="index.js"></script>
</body>

</html>






</header>