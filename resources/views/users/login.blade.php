<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('Font-icon/themify-icons/themify-icons.css') }}">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('Font-icon/fontawesome-free-6.1.1-web/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('Font-icon/fontawesome-free-6.1.1-web/js/all.js') }}">
    <script src="https://kit.fontawesome.com/64d58efce2.js"
        crossorigin="anonymous"
    ></script>
    <title>Login&Regestic</title>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <div class="signin-signup">
                <form action="/users" method="POST" enctype="multipart/form" class="sign-up-form">
                    @csrf

                    <h2 class="title">Đăng Kí</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="name" placeholder="Username" value="{{ old('name') }}">
                    </div>
                    @error('name')
                        <p>{{ $message }}</p>
                    @enderror

                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="text" name="email" placeholder="Email" value="{{ old('email') }}">
                    </div>
                @error('email')
                    <p>{{ $message }}</p>
                @enderror


                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="Password">
                    </div>
                    @error('password')
                    <p>{{ $message }}</p>
                    @enderror
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password_confirmation" placeholder="Password Confirm">
                    </div>
                    @error('password_confirmation')
                    <p>{{ $message }}</p>
                    @enderror


                    <input type="submit" value="Sign up" class="btn solid">

                    <p class="social-text">Link to homepage</p>
                    <div class="social-media">
                    <a href="/" class="social-icon">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    </div>
                </form>
                <form action="/login/auth" method="post" enctype="multipart/form" class="sign-in-form">
                    @csrf
                    <h2 class="title">Đăng Nhập</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Email" name="email" value="{{ old('email') }}">
                    </div>
                    @error('email')
                    <p>{{ $message }}</p>

                    @enderror
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" name="password">
                    </div>
                    @error('password')
                    <p>{{ $message }}</p>
                    @enderror
                    <input type="submit" value="Login" class="btn solid">

                    <p class="social-text">Link to homepage</p>
                    <div class="social-media">


                    <a href="/" class="social-icon">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    </div>
                </form>

            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Tạo Tài Khoảng?</h3>
                    <p></p>
                    <button class="btn transparent" id="sign-up-btn">Đăng Kí</button>
                </div>
                <img src="/sign-in-up/img/the_stars.svg" class="image" alt="">
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>Truy Cập Vào Tài Khoảng?</h3>
                    <p></p>
                    <button class="btn transparent" id="sign-in-btn">Đăng Nhập</button>
                </div>
                <img src="/sign-in-up/img/sign-in.svg" class="image" alt="">
            </div>
        </div>

    </div>
    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
