<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://fonts.googleapis.com/css?family=Pridi"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ asset('css/style-about.css') }}" />
    <img src="{{ asset('/assets/icon.png') }}" alt="Icon" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <title>About</title>
  </head>
  <body>
  <header class="header">
      <a href="{{ url('/') }}">
        <div class="logo"></div>
      </a>
      <div class="navbar">
        <div class="menu">
          <a href="{{ url('/') }}" >Home</a>
          <a href="{{ url('/about') }}" class="active">About</a>
          <a href="{{ url('/ticket') }}">Ticket</a>
          <a href="{{ url('/faq') }}">FaQ</a>
        </div>
      </div>
      <div class="signup">
        <a href="{{ url('/sign-up') }}"><i class="fa fa-user-circle"></i></a>
      </div>
    </header>
    <div class="about-content" align="center">
      <h1>About Us</h1>
      <p>
        Konkret is a website to provide complete information about the Konkret
        event,
        <br />including event's schedules, event's seatplan and online ticket
        purchases. We also <br />provide news on upcoming artists and exclusive
        content for music fans.
      </p>
    </div>

    <div class="vision-mission-container">
      <div class="vision">
        <h2>Vision</h2>
        <p>
          To be the number one platform <br />for all music event and concert
          <br />needs in Indonesia
        </p>
      </div>
      <div class="mission">
        <h2>Mission</h2>
        <p>
          Making access to information and <br />purchasing concert tickets
          easier and <br />faster for music lovers of various genres
        </p>
      </div>
    </div>

    <div class="why-us" align="center">
      <h1>Why Choose Us?</h1>
      <p>
        Best User Experience <br />Official Ticket Guarantee <br />Music
        Community
      </p>
    </div>

    <div class="terms-conditions" align="center">
      <h1>TERMS & CONDITIONS</h1>
      <p>
        By attending Konkret Festival, you agree to follow to the following
        terms and conditions, which have been established to ensure the safety,
        enjoyment, and smooth operation of the event for all guests.
      </p>
      <h2>General</h2>
      <ul>
        <li>
          This festival is open to attendees of all ages, but parental guidance
          is recommended for minors.
        </li>
        <li>
          Unregistered vendors or sellers are strictly prohibited from
          conducting any business activities within the festival area.
        </li>
        <li>
          Distributing flyers, offering samples, or conducting giveaways without
          prior approval from the organizers is prohibited.
        </li>
        <li>
          Camping or staying overnight in the festival area is strictly
          forbidden under any circumstances.
        </li>
        <li>
          All guests must exchange their e-vouchers for wristbands at designated
          counters before entering the festival area.
        </li>
        <li>
          Wristbands must be worn at all times during the event, and any
          attendee without a valid wristband will be denied entry or removed
          from the venue.
        </li>
        <li>
          Guests must present an original, government-issued ID, such as a
          passport, national ID, or driver’s license, at the entrance.
          Photocopied documents or photographs of IDs will not be accepted.
        </li>
        <li>
          Certain areas within the festival area may be restricted to attendees
          for safety or operational reasons.
        </li>
        <li>
          Guests acting disruptively, behaving inappropriately, or ignoring
          staff instructions will be asked to leave the festival, and no refund
          will be provided.
        </li>
        <li>
          Having illegal substances, weapons, or prohibited items will lead to
          immediate removal from the festival and notification of law
          enforcement.
        </li>
        <li>
          The organizers, promoters, and artists are not responsible for any
          personal losses, damages, or injuries that occur during the event.
        </li>
        <li>
          Attendees are encouraged to secure their personal belongings and avoid
          bringing large bags into the festival area. Lockers will be available
          for convenience.
        </li>
      </ul>
      <h2>Security and Search</h2>
      <ul>
        <li>
          All guests will undergo thorough security checks, which include bag
          searches, pat-downs, and the use of electronic drug detection devices
          upon entering the event. Event organizers have the right to deny entry
          or remove anyone who violates the rules, at their sole discretion.
        </li>
      </ul>
    </div>

    <div class="privacy-policy">
      <h1>PRIVACY POLICY</h1>
      <p>
        Konkret respects your privacy and is committed to protecting your
        personal data. This privacy policy outlines how we collect, use, and
        safeguard your information when you use our website or services. By
        using Konkret, you agree to the terms of this privacy policy.
      </p>

      <h2>Information We Collect</h2>
      <ol>
        <li>
          <strong>Personal Information:</strong> When you register or purchase
          tickets on Konkret, we may collect your name, email address, phone
          number, and payment details.
        </li>
        <li>
          <strong>Non-Personal Information:</strong> We collect non-personal
          data such as browser type, device information, and IP address to
          enhance your browsing experience.
        </li>
        <li>
          <strong>Cookies:</strong> Konkret uses cookies to improve
          functionality and understand user preferences. You can disable cookies
          in your browser settings, though this may affect certain features.
        </li>
      </ol>

      <h2>How We Use Your Information</h2>
      <ul>
        <li>To process transactions and deliver purchased tickets.</li>
        <li>
          To provide updates about events, offers, or changes in terms and
          conditions.
        </li>
        <li>To analyze website performance and improve user experience.</li>
        <li>To comply with legal obligations or resolve disputes.</li>
      </ul>

      <h2>How We Protect Your Data</h2>
      <p>
        We implement strict security measures to safeguard your data, including
        encryption and secure servers. However, while we strive to protect your
        information, no method of electronic transmission or storage is 100%
        secure.
      </p>

      <h2>Sharing Your Information</h2>
      <p>
        Konkret does not sell, trade, or rent your personal information to third
        parties. However, we may share data with trusted partners who assist in
        providing services, such as payment processing or event management,
        under strict confidentiality agreements.
      </p>

      <h2>Your Rights</h2>
      <ul>
        <li>
          You have the right to access the personal data we hold about you.
        </li>
        <li>Request corrections to your information if inaccurate.</li>
        <li>
          Request the deletion of your personal data, subject to legal
          obligations.
        </li>
      </ul>
      <p>
        To exercise these rights, please contact us at
        <a href="mailto:konkret@gmail.com">konkret@gmail.com</a>
      </p>

      <h2>Third-Party Links</h2>
      <p>
        Konkret may contain links to external websites. We are not responsible
        for the privacy practices of these sites and recommend reviewing their
        policies before sharing personal information.
      </p>

      <h2>Updates to This Policy</h2>
      <p>
        Konkret reserves the right to update this privacy policy at any time. We
        encourage users to regularly review this page for the latest
        information. Your continued use of the website after changes are made
        constitutes acceptance of the updated policy.
      </p>

      <h2>Contact Us</h2>
      <p>
        If you have any questions or concerns about this privacy policy, please
        contact us at:<br />
        Email: <a href="mailto:konkret@gmail.com">konkret@gmail.com</a>
      </p>

      <!-- about us -->
      <div class="aboutus-container">
      <div class="about-us">
      <h2 style="margin-top: 0%;">Get To Know Us</h2>
      <p>
        We are a group consist of 5 students dedicated to making it easier for you to
        access information about concerts and purchase tickets. Through this website, 
        we aim to provide a convenient and user-friendly experience for music enthusiasts.
      </br>Team Members : </br>
        Farras Afif (2310512043) ;
        Najwa Khairina Fadhilah (2310512058) ;
        Nadia Fadhilatun Nisa (2310512064) ;
        Dandy Fahlevi Nurhadi Putra (2310512070) ;
        Thara Carissa Kameshwara (2310512072);
      </p>
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
  </body>
</html>
