<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css?family=Pridi" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/style-ticket.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <title>Ticket Reservation</title>
    <style>
        .notification {
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid transparent;
            border-radius: 4px;
        }
        .notification-success {
            color: #155724;
            background-color: #d4edda;
            border-color: #c3e6cb;
        }
        .notification-error {
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb;
        }
    </style>
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
                <a href="{{ url('/ticket') }}" class="active">Ticket</a>
                <a href="{{ url('/faq') }}">FaQ</a>
            </div>
        </div>
        <div class="signup">
            <a href="{{ url('/sign-up') }}"><i class="fa fa-user-circle"></i></a>
        </div>
    </header>

    <div class="stage"></div>

    <!--Ticket Reservation Form-->
    <div class="form-container">
        <h1>Konkret Tickets <span>Reservation Form</span></h1>

        @if(session('success'))
            <div class="notification notification-success">
                <h2>{{ session('success')['message'] }}</h2>
                <p>Name: {{ session('success')['details']['name'] }}</p>
                <p>Seating: {{ session('success')['details']['seating'] }}</p>
                <p>Number of Tickets: {{ session('success')['details']['tickets'] }}</p>
                <p>Total Price: IDR {{ number_format(session('success')['details']['total_price']) }}</p>
            </div>
        @endif

        @if(session('error'))
            <div class="notification notification-error">
                <h2>Booking Error</h2>
                <p>{{ session('error') }}</p>
            </div>
        @endif

        @if($errors->any())
            <div class="notification notification-error">
                <h2>Booking Failed</h2>
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form id="ticketForm" action="{{ route('ticket.reserve') }}" method="POST">
            @csrf
            <div class="form-section name-section">
                <label for="firstName">Name</label>
                <div class="name-inputs">
                    <input type="text" id="firstName" name="first_name" placeholder="First Name" required value="{{ old('first_name') }}" />
                    <input type="text" id="lastName" name="last_name" placeholder="Last Name" required value="{{ old('last_name') }}" />
                </div>
            </div>

            <div class="form-section email-section">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="example@email.com" required value="{{ old('email') }}" />
            </div>

            <div class="form-section seating-section">
                <label for="seating">Seating Plan</label>
                <select id="seating" name="seating_plan" required>
                    <option value="">Select Seating Category</option>
                    <option value="Cat1" {{ old('seating_plan') == 'Cat1' ? 'selected' : '' }}>Cat 1</option>
                    <option value="Cat2" {{ old('seating_plan') == 'Cat2' ? 'selected' : '' }}>Cat 2</option>
                    <option value="Cat3" {{ old('seating_plan') == 'Cat3' ? 'selected' : '' }}>Cat 3</option>
                    <option value="Cat4" {{ old('seating_plan') == 'Cat4' ? 'selected' : '' }}>Cat 4</option>
                    <option value="Cat5" {{ old('seating_plan') == 'Cat5' ? 'selected' : '' }}>Cat 5</option>
                    <option value="Cat6" {{ old('seating_plan') == 'Cat6' ? 'selected' : '' }}>Cat 6</option>
                </select>
            </div>

            <div class="form-section tickets-section">
                <label for="tickets">Number of Tickets</label>
                <div class="ticket-control">
                    <button type="button" id="decrease">-</button>
                    <input type="number" id="tickets" name="ticket_quantity" value="{{ old('ticket_quantity', 1) }}" min="1" />
                    <button type="button" id="increase">+</button>
                </div>
            </div>

            <button type="submit" class="reserve-button">Reserve Now</button>
        </form>
    </div>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h2>Our Socials</h2>
                <div class="social-buttons">
                    <a href="#" class="social-btn" aria-label="Twitter">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href="#" class="social-btn" aria-label="Instagram">
                        <i class="fa fa-instagram"></i>
                    </a>
                    <a href="#" class="social-btn" aria-label="YouTube">
                        <i class="fa fa-youtube-play"></i>
                    </a>
                </div>
            </div>
            <nav class="footer-nav">
                <ul>
                    <li><a href="#">TERMS & CONDITIONS</a></li>
                    <li><a href="#">PRIVACY POLICY</a></li>
                </ul>
            </nav>
            <p class="copyright">2024© KonKret, inc</p>
        </div>
    </footer>

    <script>
        const decreaseButton = document.getElementById("decrease");
        const increaseButton = document.getElementById("increase");
        const ticketsInput = document.getElementById("tickets");

        decreaseButton.addEventListener("click", () => {
            let currentValue = parseInt(ticketsInput.value);
            if (currentValue > 1) {
                ticketsInput.value = currentValue - 1;
            }
        });

        increaseButton.addEventListener("click", () => {
            let currentValue = parseInt(ticketsInput.value);
            ticketsInput.value = currentValue + 1;
        });
    </script>
</body>
</html>

