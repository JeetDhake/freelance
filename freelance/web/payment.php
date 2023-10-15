<?php
include('../web/connect.php');

session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("location: login.php");
}

$unid =  $_SESSION['username'];
$query = mysqli_query($con, "SELECT * FROM `signin` WHERE username='$unid'");
$row = mysqli_fetch_array($query);
$un = $row['username'];

if (isset($_POST['submit'])) {

    $upi = $_POST['upi'];
    $accountno = $_POST['accountno'];
    $ifsc = $_POST['ifsc'];
    $name = $_POST['name'];

    if ($upi == '' or $accountno == '' or $ifsc == '' or $name == '') {
        echo "<script>
                alert('enter all fields')
              </script>";
        exit();
    } else {

        $insert_user = "INSERT INTO `payment` (upi,accountno,ifsc,name,username) VALUES ('$upi','$accountno','$ifsc','$name','$un')";

        $result_query = mysqli_query($con, $insert_user);
        if ($result_query) {
            echo "<script>
                alert('you are all set')
              </script>";
        }
    }
}
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>billing n payments</title>
    <link rel="stylesheet" href="payment.css">
    <meta name="viewport" content="width=device-width" , initial-scale="1.0">
</head>

<body>
    <div class="container">
        <div class="title">Billing n Payments</div>
        <form action="" method="POST">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">UPI ID</span>
                    <input type="text" placeholder="xxxxxxxxxx" name="upi" required>
                </div>
                <div class="input-box">
                    <span class="details">Net Banking - IMPS/NEFT</span>
                    <input type="text" placeholder="account number" name="accountno" required>
                </div>
                <div class="input-box">
                    <span class="details">IFSC Code</span>
                    <input type="text" placeholder="****" name="ifsc" required>
                </div>
                <div class="input-box">
                    <span class="details">Beneficiary Name</span>
                    <input type="text" placeholder="recepient/account holder" name="name" required>
                </div>


                <div class="button">
                    <input type="submit" name="submit" value="submit">
                </div>

        </form>

    </div>
</body>

</html>