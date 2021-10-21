<?php
//inicio de session
// session_start();

// $cn = mysqli_connect("localhost", "root", "", "san_pedro");

// if (count($_POST) > 0) {
//     //validar email
//     if (!isset($_POST["email"])) die("error1");
//     if (strlen($_POST["email"]) < 1) die("error2");
//     if (strlen($_POST["email"]) > 200) die("error3");
//     $_POST["email"] = substr($_POST["email"], 0, 200);
//     $_POST["email"] = mysqli_escape_string($cn, $_POST["email"]);
//     $email = $_POST["email"];

//     //validar password
//     if (!isset($_POST["passwd"])) die("error4");
//     if (strlen($_POST["passwd"]) < 4) die("error5");
//     if (strlen($_POST["passwd"]) > 40) die("error6");
//     $_POST["passwd"] = mysqli_escape_string($cn, $_POST["passwd"]);
//     $passwd = sha1($_POST["passwd"]); //calculo el sha1 y guardo la variable

//     $res = mysqli_query($cn, "SELECT *
//     FROM administrador
//     WHERE email = '$email' and password = '$passwd' 
//     LIMIT 1");

//     if (mysqli_num_rows($res) == 1) {
//         $_SESSION["logueado"] = true;
//         $fila = mysqli_fetch_assoc($res);
//         $_SESSION["nombre"] = $fila["nombre"];
//         header("Location: home.php");
//         exit;
//     }else {
//         echo "error";
//     }
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../html/css/login.css">

    <title>Panadería San Pedro</title>
</head>

<body>
    <div class="center">
        <h1>Login</h1>
        <form method="post">
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
        </form>
    </div>
</body>

</html>