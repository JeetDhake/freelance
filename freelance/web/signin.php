<?php
include('../web/connect.php');

$username = $password = "";
$username_err = $password_err = "";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (empty(trim($_POST["username"]))) {
        $username_err = "username cant be null";
    } else {
        $sql = "SELECT id FROM signin WHERE username = ?";
        $stmt = mysqli_prepare($con, $sql);
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            $param_username = trim($_POST['username']);

            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_store_result($stmt);
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    $username_err = "username already taken";
                } else {
                    $username = trim($_POST['username']);
                }
            } else {
                echo "<script>
                alert('error')
              </script>";
            }
        }
    }
    mysqli_stmt_close($stmt);


    if (empty(trim($_POST['password']))) {
        $password_err = "password cant be null";
    } elseif (strlen(trim($_POST['password'])) < 8) {
        $password_err = "password cant be less than 8";
    } else {
        $password = trim($_POST['password']);
    }

    if (empty($username_err) && empty($password_err)) {
        $sql = "INSERT INTO signin (username, password) VALUES (?,?)";
        $stmt = mysqli_prepare($con, $sql);
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT);

            if (mysqli_stmt_execute($stmt)) {
                header("location: ../web/becomeseller.php");
                session_start();
                        $_SESSION["username"] = $username;
                        $_SESSION["id"] = $id;
                        $_SESSION["loggedin"] = true;
            } else {
                echo "<script>
                alert('error')
              </script>";
            }
        }
        mysqli_stmt_close($stmt);
    }
    mysqli_close($con);
}
?>

<html>
<title>sign in page</title>

<link rel="stylesheet" type="text/css" href="signinpage.css">

<body>

    <div class="signinbox">
        <img src="../web/image/about.png" class="avtar">
        <h1>sign in</h1>
        <form action="" method="post">


            <p>username</p>
            <input type="text" name="username" placeholder="enter username">



            <p>password</p>
            <input type="password" name="password" placeholder="enter password">


            <input type="submit" name="" value="sign in">

            already have account.<a href="../web/login.php">.login here. </a>

        </form>
    </div>


</body>

</html>