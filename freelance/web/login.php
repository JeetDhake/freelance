<?php

session_start();
if (isset($_SESSION['username'])) {
    header("location: ../web/seller.php");
    exit;
}
include('../web/connect.php');

$username = $password = "";
$err = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (empty(trim($_POST['username'])) || empty(trim($_POST['password']))) {
        $err = "username or password invalid";
    } else {
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
    }
    if (empty($err)) {
        $sql = "SELECT id, username, password FROM signin WHERE username = ?";
        $stmt = mysqli_prepare($con, $sql);
        mysqli_stmt_bind_param($stmt, "s", $param_username);
        $param_username = $username;

        if (mysqli_stmt_execute($stmt)) {
            mysqli_stmt_store_result($stmt);

            if (mysqli_stmt_num_rows($stmt) == 1) {
                mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);

                if (mysqli_stmt_fetch($stmt)) {
                    if (password_verify($password, $hashed_password)) {
                        session_start();
                        $_SESSION["username"] = $username;
                        $_SESSION["id"] = $id;
                        $_SESSION["loggedin"] = true;

                        header("location: ../web/seller.php");
                    }
                }
            }
        }
    }
}
?>


<html>
<title>login page</title>

<link rel="stylesheet" type="text/css" href="loginpage.css">

<body>

    <div class="loginbox">
        <img src="../web/image/about.png" class="avtar">
        <h1>login</h1>
        <form action="" method="post">
            <p>username</p>
            <input type="text" name="username" placeholder="enter username">
            <p>password</p>
            <input type="password" name="password" placeholder="enter password">

            <input type="submit" name="" value="log in">

            new user.<a href="../web/signin.php">.sign up. </a>

        </form>
    </div>




</body>

</html>