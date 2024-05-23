<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="card">
                    <div class="card-header text-center">
                        <h2>Forgot Password</h2>
                        <p>Enter your email address</p>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.send_reset_password_email') }}" method="POST">
                            @csrf
                            @if ($errors->any())
                                <div class="alert alert-danger text-center">
                                    @foreach ($errors->all() as $error)
                                        {{ $error }}<br>
                                    @endforeach
                                </div>
                            @endif
                            <div class="form-group">
                                <input class="form-control" type="email" name="email"
                                    placeholder="Enter email address" required>
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary btn-block" type="submit" name="check-email"
                                    value="Continue">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
