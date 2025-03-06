<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up - KonKret</title>
    <link href="https://fonts.googleapis.com/css2?family=Pridi:wght@300;400;500&display=swap" rel="stylesheet" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/icon.png" />
    <link rel="stylesheet" href="{{ asset('css/style-sign.css') }}" />
    
</head>
<body>
    <div class="container">
        <div class="left">
            <div class="form-box">
                <a href="{{ url('/') }}">
                    <img src="assets/konkret-logo.png" class="logo" alt="Logo" />
                </a>
                <h2>Create New Account</h2>
                <p>Already have an account? <a href="{{ url('sign-in') }}">Sign In</a></p>
                
                @if(session('success'))
                    <div class="alert-box alert-success" style="display: block;">
                        {{ session('success') }}
                    </div>
                @endif

                @if($errors->any())
                    <div class="alert-box alert-error" style="display: block;">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" id="signupForm" action="{{ route('sign-up.post') }}">
                    @csrf
                    @method('POST')
                    <input type="text" name="full_name" placeholder="Full name" required value="{{ old('full_name') }}">
                    <input type="email" name="email" placeholder="Email address" required value="{{ old('email') }}">
                    <div class="password-wrapper">
                        <input type="password" name="password" id="passwordInput" placeholder="Create password" required>
                        <button type="button" id="togglePassword">
                            <img src="assets/eye-slash.png" alt="Hide Password">
                        </button>
                    </div>
                    <input class="submit" type="submit" value="SUBMIT">
                </form>
            </div>
        </div>
        <div class="right"></div>
    </div>

    <script>
        document.getElementById("togglePassword").addEventListener("click", function () {
            const passwordInput = document.getElementById("passwordInput");
            const type = passwordInput.getAttribute("type") === "password" ? "text" : "password";
            passwordInput.setAttribute("type", type);

            const iconSrc = type === "password" ? "assets/eye-slash.png" : "assets/eye.png";
            this.querySelector("img").setAttribute("src", iconSrc);
        });
    </script>
</body>
</html>