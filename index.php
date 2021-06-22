<?php
include "config/koneksi.php";
include "library/controller.php";

$go = new controller();


$tabel = 'login';
@$username = $_POST['user'];
@$password = base64_encode($_POST['pass']);
$redirect = 'dashboard.php';


if (isset($_POST['login'])) {
    $go->login($con, $tabel, $username, $password, $redirect);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>
    <form method="post">
        <table align="center">
            <tr>
                <td>username</td>
                <td>:</td>
                <td><input type="text" name="user"></td>
            </tr>
            <tr>
                <td>password</td>
                <td>:</td>
                <td><input type="password" name="pass"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><button type="submit" class="btn btn-primary" name="login" value="masuk">Masuk</button></td>
                
                <!-- <input type="submit" name="login" value="masuk"> -->
            </tr>

        </table>
    </form>
</body>

</html>