<!DOCTYPE html>
<html>

<head>
    <title>Reset Password</title>
</head>

<body>
    <h2>Hello,</h2>
    <p>You are receiving this email because we received a password reset request for your account.</p>
    <p>Click the link below to reset your password:</p>
    <a href="{{ url('/admin/reset_password/' . $token) }}">Reset Password</a>
    <p>If you did not request a password reset, no further action is required.</p>
</body>

</html>
