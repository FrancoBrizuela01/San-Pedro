<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="login.css">

    <title>Panadería San Pedro</title>
</head>

<body>
    <div class="center">
        <h1>Login</h1>
        <form method="POST">
            <div class="field">
                <input type="text" required name="email">
                <label>Email</label>
                <span></span>
            </div>
            <div class="field">
                <input type="password" required name="passwd">
                <label>Password</label>
                <span></span>
            </div>
            <input type="submit" value="Login" class="btn-login">
            <div class="signup_link">
                Not a member? <a href="signup.php">Sign up</a>
            </div>

        </form>
    </div>
</body>

</html>