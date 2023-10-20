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

    $name = $_POST['name'];
    $skills = $_POST['skills'];
    $specialization = $_POST['specialization'];

    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $image = $_FILES['image']['name'];
    $tmp_image = $_FILES['image']['tmp_name'];

    if ($name == '' or $skills == '' or $specialization == '' or $age == '' or $email == '' or $phone == '' or $image == '') {
        echo "<script>
                alert('enter all fields mf')
              </script>";
        exit();
    } else {

        move_uploaded_file($tmp_image, "../web/db_image/$image");

        $insert_user = "INSERT INTO `seller` (name,skills,specialization,age,email,phone,image,username) VALUES ('$name','$skills','$specialization','$age','$email','$phone','$image','$un')";

        $result_query = mysqli_query($con, $insert_user);
        if ($result_query) {

            echo "<script>
                alert('user registered successfully')
              </script>";
            header("location: seller.php");
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>become seller</title>
    <link rel="stylesheet" href="becomeseller.css">
    <script src="https://kit.fontawesome.com/b9323f08fd.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width" , initial-scale="1.0">
</head>

<body>
    <div class="container">
        <div class="title">Become seller</div>

        <form action="" method="POST" enctype="multipart/form-data">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">name</span>
                    <input type="text" placeholder="name" name="name" required>
                </div>
                <div class="input-box">
                    <span class="details">skills</span>
                    <input type="text" placeholder="skills" name="skills" required>
                </div>
                <div class="input-box">
                    <span class="details">specialization</span>
                    <input type="text" placeholder="specialization" name="specialization" required>
                </div>
                <div class="input-box">
                    <span class="details">age</span>
                    <input type="date" placeholder="age" name="age" required>
                </div>


                <div class="input-box">
                    <span class="details">email</span>
                    <input type="text" placeholder="email@address" name="email" required>
                </div>
                <div class="input-box">
                    <span class="details">phone no.</span>
                    <input type="text" placeholder="0000000000" name="phone" required>
                </div>


            </div>

            <div class="field img">
                <label for="">Profile Image</label>
                <label for="image" id="drop">
                    <input type="file" name="image" id="image" hidden>

                    <div id="img-view">
                        <i class="fa-solid fa-cloud-arrow-up"></i>
                        <p>Drag and Drop<br>click here to Upload Image</p>
                    </div>
                </label>
            </div>



            <div class="button">
                <input type="submit" name="submit" value="submit">
            </div>
        </form>

    </div>
</body>
<script src="becomeseller.js"></script>

</html>