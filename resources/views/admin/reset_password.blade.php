<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Code Verification</title>
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
                        <h2>Code Verification</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.reset_password_process') }}" method="POST">
                            @csrf
                            @if (session('success'))
                                <div class="alert alert-success text-center" style="padding: 0.4rem 0.4rem">
                                    {{ session('success') }}
                                </div>
                            @endif
                            @if ($errors->any())
                                <div class="alert alert-danger text-center">
                                    @foreach ($errors->all() as $error)
                                        {{ $error }}<br>
                                    @endforeach
                                </div>
                            @endif
                            <div class="form-group">
                                <div class="d-flex justify-content-between">
                                    <input class="form-control otp-input" name="otp[]" maxlength="1" required>
                                    <input class="form-control otp-input" name="otp[]" maxlength="1" required>
                                    <input class="form-control otp-input" name="otp[]" maxlength="1" required>
                                    <input class="form-control otp-input" name="otp[]" maxlength="1" required>
                                    <input class="form-control otp-input" name="otp[]" maxlength="1" required>
                                    <input class="form-control otp-input" name="otp[]" maxlength="1" required>
                                    <!-- Add more input fields for OTP -->
                                </div>
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary btn-block" type="submit" name="check-reset-otp[]"
                                    value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
