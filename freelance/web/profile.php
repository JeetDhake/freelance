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

$squery2 = mysqli_query($con, "SELECT * FROM `payment` where username='$un'");
$res2 = mysqli_num_rows($squery2);

if ($res2 > 0) {
    $row2 = mysqli_fetch_assoc($squery2);
}

$squery = mysqli_query($con, "SELECT * FROM `seller` where username='$un'");
$res = mysqli_num_rows($squery);


if ($res > 0) {
    $row = mysqli_fetch_assoc($squery);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>


    <link rel="stylesheet" href="profile.css">



    <link rel="stylesheet" href="fonts/remixicon.css">
</head>

<body>

    <span class="main_bg"></span>



    <div class="container">


        <header>
            <div class="brandLogo">
                <figure><img src="../web/image/logo.png" alt="logo" width="40px" height="40px"></figure>
                <span>Lost n Found</span>
            </div>
        </header>



        <section class="userProfile card">
            <div class="profile">
                <figure><img src="../web/image/<?php echo $row['image']; ?>" alt="profile" width="250px" height="250px"></figure>
            </div>
        </section>


        <section class="work_skills card">


            <div class="work">
                <h1 class="heading">specializations</h1>
                <div class="primary">
                    <h1><?php echo $row['skills']; ?></h1>
                    <span>Primary</span>
                    <p>170 William Street <br> New York, NY 10038-212-315-51</p>
                </div>

                <div class="secondary">
                    <h1><?php echo $row['specialization']; ?></h1>
                    <span>Secondary</span>
                    <p>S34 E 65th Street <br> New York, NY 10651-78 156-187-60</p>
                </div>
            </div>


            <div class="skills">
                <h1 class="heading">Skills</h1>
                <ul>
                    <li style="--i:0">Back-end</li>

                    <li style="--i:2">UI/UX design</li>
                    <li style="--i:1">front-end</li>
                    <li style="--i:3">Video Editing</li>
                </ul>
            </div>
        </section>



        <section class="userDetails card">
            <div class="userName">

                <h1 class='name'><?php echo $row['name']; ?></h1>



                <div class="map">
                    <i class="ri-map-pin-fill ri"></i>
                    <span>New York, NY</span>
                </div>
                <p><?php echo $row['skills']; ?></p>
            </div>

            <div class="rank">
                <h1 class="heading">Rankings</h1>
                <span>8/10</span>
                <div class="rating">
                    <i class="ri-star-fill rate"></i>
                    <i class="ri-star-fill rate"></i>
                    <i class="ri-star-fill rate"></i>
                    <i class="ri-star-fill rate"></i>
                    <i class="ri-star-fill rate underrate"></i>
                </div>
            </div>

            <div class="btns">
                <ul>
                    <li class="sendMsg">
                        <i class="ri-chat-4-fill ri"></i>
                        <a href="#">Edit</a>
                    </li>

                    <li class="sendMsg active">
                        <i class="ri-check-fill ri"></i>
                        <a href="#">Contacts</a>
                    </li>


                </ul>
            </div>
        </section>



        <section class="timeline_about card">
            <div class="tabs">
                <ul>
                    <li class="timeline">
                        <i class="ri-eye-fill ri"></i>
                        <span>Timeline</span>
                    </li>

                    <li class="about active">
                        <i class="ri-user-3-fill ri"></i>
                        <span>About</span>
                    </li>
                </ul>
            </div>

            <div class="contact_Info">
                <h1 class="heading">Contact Information</h1>
                <ul>




                    <li class="phone">
                        <h1 class="label">Phone:</h1>
                        <span class="info">phone:<?php echo $row['phone']; ?></span>
                    </li>

                    <li class="address">
                        <h1 class="label">Address:</h1>
                        <span class="info">S34 E 65th Street <br> New York, NY 10651-78 156-187-60</span>
                    </li>

                    <li class="email">
                        <h1 class="label">E-mail:</h1>
                        <span class="info">email: <?php echo $row['email']; ?></span>
                    </li>





                    <li class="site">
                        <h1 class="label">payment :</h1>
                        <span class="info">upi: <?php echo $row2['upi']; ?> <br></span>
                        <span class="info">account: <?php echo $row2['accountno']; ?> <br></span>
                        <span class="info">ifsc: <?php echo $row2['ifsc']; ?> <br></span>
                        <span class="info">beneficiary: <?php echo $row2['name']; ?> <br></span>
                    </li>





                </ul>
            </div>

            <div class="basic_info">
                <h1 class="heading">Basic Information</h1>
                <ul>
                    <li class="birthday">
                        <h1 class="label">Birthdate:</h1>
                        <span class="info"><?php echo $row['age']; ?></span>
                    </li>



                </ul>
            </div>
        </section>
    </div>

</body>

</html>