<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - Trimax gestión</title>
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
</head>

<body>
    <img src="{{ asset('assets/images/blob.svg') }}" class="blob" />
    <div class="orbit"></div>

    <div class="login">
        <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" />
        <h2>Welcome to Saferly!</h2>
        <h3>Keep your data safe!</h3>

        @if (session('status'))
            <div style="color: green; text-align: center; margin-bottom: 10px;">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}" class="form">
            @csrf

            <div class="textbox">
                <input required type="email" name="email" value="{{ old('email') }}" />
                <label>Email</label>
                @error('email')
                    <small style="color: red;">{{ $message }}</small>
                @enderror
            </div>

            <div class="textbox">
                <input required type="password" name="password" />
                <label>Password</label>
                @error('password')
                    <small style="color: red;">{{ $message }}</small>
                @enderror
            </div>

            <div class="remember">
                <label style="font-size: 14px;">
                    <input type="checkbox" name="remember">
                    Remember me
                </label>
            </div>

            <button type="submit">Login</button>
        </form>

        @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}">Forgot password?</a>
        @endif

        <p class="footer">
            Don't have an account?
            @if (Route::has('register'))
                <a href="{{ route('register') }}">Register!</a>
            @endif
        </p>
    </div>
</body>

</html>
