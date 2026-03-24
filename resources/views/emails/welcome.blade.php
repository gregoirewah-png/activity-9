<!DOCTYPE html>
<html>
<head>
    <title>Welcome!</title>
</head>
<body>
    <h2>Hello, {{ $user->name }}!</h2>
    <p>Thank you for registering for Activity 9. Your account has been successfully created with the email address: {{ $user->email }}.</p>
    <p>We are glad to have you on board!</p>
</body>
</html>