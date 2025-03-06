<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Sign In - KonKret</title>
        <link
            href="https://fonts.googleapis.com/css2?family=Pridi:wght@300;400;500&display=swap"
            rel="stylesheet"
        />
        <link rel="shortcut icon" type="image/x-icon" href="assets/icon.png" />
        <link rel="stylesheet" href="{{ asset('css/style-sign.css') }}" />
    </head>
    <body>
        <!-- Sign In Page -->
        <div class="container">
            <div class="left">
                <div class="form-box">
                    <a href="{{ url('/') }}">
                        <img
                            src="assets/konkret-logo.png"
                            class="logo"
                            alt="Logo"
                        />
                    </a>
                    <h2>Welcome Back!</h2>
                    <p>
                        Don't have an account?
                        <a href="{{ url('sign-up') }}">Sign Up</a>
                    </p>

                    @if ($errors->any())
                        <div class="alert-box error">
                            @foreach ($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </div>
                    @endif

                    @if(session('success'))
                        <div class="alert-box success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form id="signinForm" action="{{ route('sign-in.post') }}" method="POST">
    @csrf
    
    <!-- Email Input -->
    <div>
        <input 
            type="email" 
            name="email" 
            placeholder="E-mail" 
            required 
            value="{{ old('email') }}"
        />
        
    </div>

    <!-- Password Input -->
    <div class="password-wrapper">
        <input
            type="password"
            id="passwordInput"
            name="password"
            placeholder="Password"
            required
        />
        
        
        <button type="button" id="togglePassword">
            <img
                src="assets/eye-slash.png"
                alt="Hide Password"
            />
        </button>
        </div>
        
            <input class="submit" type="submit" value="SUBMIT">
            @error('password')
            <span class="error-message">{{ $message }}</span>
        @enderror
        @error('email')
            <span class="error-message">{{ $message }}</span>
        @enderror
            </form>
        </div>
    </div>
    <div class="right"></div>
</div>

        <script>
            // Get references to DOM elements
            const togglePassword = document.getElementById('togglePassword');
            const passwordInput = document.getElementById('passwordInput');

            // Toggle password visibility
            togglePassword.addEventListener("click", function () {
                const type =
                    passwordInput.getAttribute("type") === "password"
                        ? "text"
                        : "password";
                passwordInput.setAttribute("type", type);
                const iconSrc =
                    type === "password"
                        ? "assets/eye-slash.png"
                        : "assets/eye.png";
                this.querySelector("img").setAttribute("src", iconSrc);
            });
        </script>
    </body>
</html>