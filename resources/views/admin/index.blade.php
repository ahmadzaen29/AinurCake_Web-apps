<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AinurCake</title>
    <link rel="shortcut icon" href="{{ asset('uploads/logo.png') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/circular-std/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/fontawesome/css/fontawesome-all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/kon.css') }}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta3/css/all.css"
        integrity="sha384-o5mY6cPYcd6yLlH4PZVgZvHYW1u1jGSwPqJZsbfOpYUuSMyi5q3cfUO5q7wEmE4o" crossorigin="anonymous">
    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background-image: url('{{ asset('uploads/Wall2.jpg') }}');
            background-size: cover;
        }

        .password-container {
            position: relative;
        }

        .toggle-password {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="splash-container">
        <div class="card" style="box-shadow: 0 0 10px rgba(0, 0, 0, 0.8);">
            <div class="card-header text-center">
                <img src="{{ asset('uploads/logo.png') }}" class="img-fluid ml-3" width="200" height="auto"
                    alt="">
                <a href="#">
                    <h2 class="text-primary">Ainur Cake Shop</h2>
                </a>
                <span class="splash-description">Selamat datang di tampilan admin.</span>
            </div>
            <div class="card-body">
                <form id="form" data-parsley-validate="" method="post" action="{{ route('admin.login') }}">
                    @csrf
                    <div class="form-group">
                        <input class="form-control form-control-lg" type="text" name="admin_username"
                            data-parsley-trigger="change" required="" placeholder="Username" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <div class="password-container">
                            <input class="form-control form-control-lg" id="pass1" type="password" required=""
                                placeholder="Password" name="admin_password">
                            <i class="toggle-password fas fa-eye-slash" onclick="togglePasswordVisibility()"></i>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
                </form>
            </div>
            <div class="card-footer  p-0 d-flex align-items-center">
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="{{ route('admin.forgot_password') }}" class="footer-link">Lupa Password</a>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('js/parsley.js') }}"></script>
    <script>
        function togglePasswordVisibility() {
            var passwordInput = document.getElementById("pass1");
            var eyeIcon = document.querySelector(".toggle-password");

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                eyeIcon.classList.remove("fa-eye-slash");
                eyeIcon.classList.add("fa-eye");
            } else {
                passwordInput.type = "password";
                eyeIcon.classList.remove("fa-eye");
                eyeIcon.classList.add("fa-eye-slash");
            }
        }
    </script>
    <script>
        $('#form').parsley();
    </script>
</body>

</html>
