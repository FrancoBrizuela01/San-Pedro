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
        <h1>Sign Up</h1>
        <form method="POST">
            <div class="field">
                <input type="text" required>
                <label>Name</label>
                <span></span>
            </div>
            <div class="field">
                <input type="text" required>
                <label>Last name</label>
                <span></span>
            </div>
            <div class="field">
                <input type="text" required>
                <label>Username</label>
                <span></span>
            </div>
            <div class="field">
                <input type="text" required>
                <label>Email</label>
                <span></span>
            </div>
            <div class="field">
                <input type="password" required>
                <label>Password</label>
                <span></span>
            </div>
            <input type="submit" value="Sign up" class="btn-login">
            <div class="signup_link">
                Have an account? <a href="login.php">Log in</a>
            </div>

        </form>
    </div>
</body>

</html>