<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link
      href="https://fonts.googleapis.com/css?family=Pridi"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ asset('css/style-faq.css') }}" />
    <img src="{{ asset('/assets/icon.png') }}" alt="Icon" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <title>FaQ</title>
  </head>
  <body>
    <header class="header">
      <a href="{{ url('/') }}">
        <div class="logo"></div>
      </a>
      <div class="navbar">
        <div class="menu">
          <a href="{{ url('/') }}">Home</a>
          <a href="{{ url('/about') }}">About</a>
          <a href="{{ url('/ticket') }}">Ticket</a>
          <a href="{{ url('/faq') }}" class="active">FaQ</a>
        </div>
      </div>
      <div class="signup">
        <a href="{{ url('/sign-up') }}"><i class="fa fa-user-circle"></i></a>
      </div>
    </header>
  </body>
  <div class="image-faq">
    <img src="assets/bg_faq.jpg" alt="concert" />
  </div>
  <div class="container">
    <h1><span style="color: #8e05c2">Frequently</span> Asked Questions</h1>
    <div class="faq-list">
      <div class="faq">
        <div class="Questions">
          <p>Can I bring my video camera to the venue?</p>
        </div>
        <div class="Answer">
          <p>
            Professional broadcast video cameras are prohibited. Take pictures
            as much as you want and share them!
          </p>
        </div>
      </div>
      <div class="faq">
        <div class="Questions">
          <p>If I have to exit the venue, can I come back in?</p>
        </div>
        <div class="Answer">
          <p>Once you have entered the venue, you may NOT exit and re-enter.</p>
        </div>
      </div>
      <div class="faq">
        <div class="Questions">
          <p>What if I can't make it to the event?</p>
        </div>
        <div class="Answer">
          <p>
            Tickets are non-refundable and cannot be exchanged for another
            event.
          </p>
        </div>
      </div>
      <div class="faq">
        <div class="Questions">
          <p>Can child attend the concert?</p>
        </div>
        <div class="Answer">
          <p>
            Our shows are recommended for children aged 12+ but younger children
            are permitted at their parents discretion.
          </p>
        </div>
      </div>
    </div>
  </div>
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
</html>
