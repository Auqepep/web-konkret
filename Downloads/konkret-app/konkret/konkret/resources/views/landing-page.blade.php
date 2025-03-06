<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://fonts.googleapis.com/css?family=Pridi"
      rel="stylesheet"
    />
    <link rel="shortcut icon" type="image/x-icon" href="assets/icon.png" />
    <link rel="stylesheet" href="{{ asset('css/style-home.css') }}" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <title>Konkret</title>
  </head>
  <body>
  <header class="header">
      <a href="{{ url('/') }}">
        <div class="logo"></div>
      </a>
      <div class="navbar">
        <div class="menu">
          <a href="{{ url('/') }}" class="active">Home</a>
          <a href="{{ url('/about') }}">About</a>
          <a href="{{ url('/ticket') }}">Ticket</a>
          <a href="{{ url('/faq') }}">FaQ</a>
        </div>
      </div>
      <div class="signup">
    @auth
        <div class="user-dropdown">
            <span>{{ get::user()->full_name }}</span>
            <div class="dropdown-content">
                <a href="{{ route('logout') }}">Logout</a>
            </div>
        </div>
    @else
        <a href="{{ route('sign-up') }}"><i class="fa fa-user-circle"></i></a>
    @endauth
</div>

    </header>
    <!-- First Section-->
    <main>
      <div class="first-section">
        <h1>GET READY FOR US</h1>
        <img
          class="band-photo"
          src="assets/grouped-outlined.png"
          alt="our-band"
        />
        <svg
          class="first-divider"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 800 60"
        >
          <rect width="100%" height="100%" x="0" y="0" />
          <text y="36">
            January 4th at Gelora Bung Karno Main Stadium - January 4th at
            Gelora Bung Karno Main Stadium - January 4th at Gelora Bung Karno
            Main Stadium - January 4th at Gelora Bung Karno Main Stadium -
            January 4th at Gelora Bung Karno Main Stadium - January 4th at
            Gelora Bung Karno Main Stadium -
          </text>
        </svg>

        <div class="lineup"></div>
        <h1>OUR LINEUP</h1>
      </div>
      <!-- Second Section -->
      <svg
        class="second-section"
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 800 277"
      >
        <rect width="100%" height="100%" x="0" y="40" />
        <image
          href="assets/NIKI_NIKI-Logo-BW-Halftone-3-240813-112410.webp"
          x="30"
          y="55"
          width="200"
          height="200"
          alt="niki"
        />
        <image
          href="assets/reality-logo.png"
          x="295"
          y="50"
          width="200"
          height="200"
          alt="reality-club"
        />
        <image
          href="assets/tulus-logo-color.png"
          x="590"
          y="65"
          width="170"
          height="170"
          alt="tulus"
        />
      </svg>

      <!--Third Section-->
      <div class="countdown">
        <h2>Countdown to KonKret Day!!</h2>
        <div id="timer">
          <div class="time-box">
            <span id="days">00</span>
            <span class="label">DAYS</span>
          </div>
          <div class="separator">:</div>
          <div class="time-box">
            <span id="hours">00</span>
            <span class="label">HOURS</span>
          </div>
          <div class="separator">:</div>
          <div class="time-box">
            <span id="minutes">00</span>
            <span class="label">MINUTES</span>
          </div>
          <div class="separator">:</div>
          <div class="time-box">
            <span id="seconds">00</span>
            <span class="label">SECONDS</span>
          </div>
        </div>
      </div>

      <!--Fourth Section  -->
      <div class="venue">
        <div class="venue-cover"></div>
        <h1>VENUE</h1>
        <div class="map-container">
    <iframe 
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d991.7430632367387!2d106.79962685855886!3d-6.218131534214954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f14d30079f01%3A0x2e74f2341fff266d!2sStadion%20Utama%20Gelora%20Bung%20Karno!5e0!3m2!1sen!2sid!4v1694697051813!5m2!1sen!2sid"
      width="450"
      height="450"
      style="border:0;"
      allowfullscreen=""
      loading="lazy"
      referrerpolicy="no-referrer-when-downgrade">
    </iframe>
  </div>
        <div class="address">
          <p>Stadion Utama Gelora Bung Karno</p>
          <p>Jakarta Pusat, DKI Jakarta</p>
        </div>
      </div>
    

    <script language="JavaScript">
      // Set the date and time of the concert
      const concertDate = new Date("January 4, 2025 16:00:00").getTime();

      // Update the countdown every second
      const countdownFunction = setInterval(function () {
        const now = new Date().getTime();
        const distance = concertDate - now;

        // Time calculations for days, hours, minutes and seconds
        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor(
          (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
        );
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in the elements with id="days", "hours", "minutes", "seconds"
        document.getElementById("days").innerHTML = days;
        document.getElementById("hours").innerHTML = hours;
        document.getElementById("minutes").innerHTML = minutes;
        document.getElementById("seconds").innerHTML = seconds;

        // If the countdown is over, display a message
        if (distance < 0) {
          clearInterval(countdownFunction);
          document.getElementById("timer").innerHTML = "Concert has started!";
        }
      }, 1000);
    </script>
    <!--ticket section-->
    <div class="tickets">
      <h1>TICKET AVAILABLE</h1>
    </div>
    <div class="ticket-container">
    
    <div class="ticket">
      <div class="ticket-title">
        <h2>Cat 1</h2>
      </div>
      <div class="ticket-content">
        <p>GENSALE</p>
        <h1><span style="font-size: medium;">IDR</br></span>2.950K</h1>
        <button><a href="{{url('/ticket')}}">BUY</a></button>
      </div>
    </div>
    <div class="ticket">
      <div class="ticket-title">
        <h2>Cat 2</h2>
      </div>
      <div class="ticket-content">
        <p>GENSALE</p>
        <h1><span style="font-size: medium;">IDR</br></span>2.550K</h1>
        <button><a href="{{url('/ticket')}}">BUY</a></button>
      </div>
    </div>
    <div class="ticket">
      <div class="ticket-title">
        <h2>Cat 3</h2>
      </div>
      <div class="ticket-content">
        <p>GENSALE</p>
        <h1><span style="font-size: medium;">IDR</br></span>1.950K</h1>
        <button><a href="{{url('/ticket')}}">BUY</a></button>
      </div>
    </div>
    </div>
    <div class="ticket-container">
    <div class="ticket">
      <div class="ticket-title">
        <h2>Cat 4</h2>
      </div>
      <div class="ticket-content">
        <p>GENSALE</p>
        <h1><span style="font-size: medium;">IDR</br></span>1.750K</h1>
        <button><a href="{{url('/ticket')}}">BUY</a></button>
      </div>
    </div>
    <div class="ticket">
      <div class="ticket-title">
        <h2>Cat 5</h2>
      </div>
      <div class="ticket-content">
        <p>GENSALE</p>
        <h1><span style="font-size: medium;">IDR</br></span>1.500K</h1>
        <button><a href="{{url('/ticket')}}">BUY</a></button>
      </div>
    </div>
    <div class="ticket">
      <div class="ticket-title">
        <h2>Cat 6</h2>
      </div>
      <div class="ticket-content">
        <p>GENSALE</p>
        <h1><span style="font-size: medium;">IDR</br></span>1.050K</h1>
        <button><a href="{{url('/ticket')}}">BUY</a></button>
      </div>
    </div>
  </div>
  </main>
    <!-- Footer -->
    <footer>
      <div class="footer-content">
        <div class="footer-section">
          <h2>Our Socials</h2>
          <div class="social-buttons">
            <a href="https://www.twitter.com/" target="_blank" class="social-btn" aria-label="Twitter">
              <i class="fa fa-twitter"></i>
            </a>
            <a href="https://www.instagram.com/" target="_blank" class="social-btn" aria-label="Instagram">
              <i class="fa fa-instagram"></i>
            </a>
            <a href="https://www.youtube.com/" target="_blank" class="social-btn" aria-label="YouTube">
              <i class="fa fa-youtube-play"></i>
            </a>
          </div>
        </div>
        <nav class="footer-nav">
          <ul>
            <li><a href="{{ url('/about') }}">TERMS & CONDITIONS</a></li>
            <li><a href="{{ url('/about') }}">PRIVACY POLICY</a></li>
          </ul>
        </nav>
        <p class="copyright">2024© KonKret, inc</p>
      </div>
    </footer>
  </body>
</html>
