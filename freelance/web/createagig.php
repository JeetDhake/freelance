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


if (isset($_POST['publish'])) {

    $gig_title = $_POST['gig_title'];
    $category = $_POST['category'];
    $sub_category = $_POST['sub_category'];

    $file_format = $_POST['file_format'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $requirements = $_POST['requirements'];

    $image = $_FILES['image']['name'];
    $tmp_image = $_FILES['image']['tmp_name'];

    if ($gig_title == '' or $category == '' or $sub_category == '' or $file_format == '' or $price == '' or $description == '' or $requirements == '' or $image == '') {
        echo "<script>
                alert('enter all fields mf')
              </script>";
        exit();
    } else {

        move_uploaded_file($tmp_image, "../web/db_image/$image");

        $insert_product = "INSERT INTO `gig` (gig_title,category,sub_category,file_format,price,description,requirements,image,username) VALUES ('$gig_title','$category','$sub_category','$file_format','$price','$description','$requirements','$image','$un')";

        $result_query = mysqli_query($con, $insert_product);
        if ($result_query) {
            echo "<script>
                alert('gig uploaded successfully')
              </script>";
            header("location: seller.php");
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="createagig.css">
    <title>create a gig</title>
</head>

<body>
    <div class="wrapper">
        <div class="title">create a gig</div>

        <div class="form">

            <form action="" method="post" enctype="multipart/form-data">

                <div class="input-field">
                    <label for="">Gig Title</label>
                    <textarea name="gig_title" id="gig_title" cols="30" rows="10" class="textarea" placeholder="Enter Title of Gig"></textarea>
                </div>

                <div class="input-field">
                    <label for="">Category</label>
                    <div class="custom-select">
                        <select name="category">
                            <option value="">Select Category</option>

                            <?php
                            $select_query = "SELECT * FROM `category`";
                            $result_query = mysqli_query($con, $select_query);

                            while ($row = mysqli_fetch_assoc($result_query)) {
                                $category_title = $row['category_title'];
                                $category_id = $row['category_id'];

                                echo "<option value='$category_title'>$category_title</option>";
                            }

                            ?>

                        </select>

                        <select name="sub_category">
                            <option value="">Sub-Category</option>
                            <?php
                            $select_query = "SELECT * FROM `sub_category`";
                            $result_query_one = mysqli_query($con, $select_query);

                            while ($row = mysqli_fetch_assoc($result_query_one)) {
                                $sub_category_title = $row['sub_category_title'];
                                $sub_category_id = $row['sub_category_id'];

                                echo "<option value='$sub_category_title'>$sub_category_title</option>";
                            }

                            ?>
                        </select>
                    </div>
                </div>

                <div class="input-field">
                    <label for="">File Format</label>
                    <input type="text" name="file_format" class="input" placeholder="Project file format">
                </div>
                <div class="input-field">
                    <label for="">Price</label>
                    <input type="text" name="price" class="input" placeholder="In USD (Int)">
                </div>

                <div class="input-field">
                    <label for="">Description</label>
                    <textarea name="description" id="description" cols="30" rows="10" class="textarea" placeholder="Describe your gig briefly"></textarea>
                </div>

                <div class="input-field">
                    <label for="">Requirements</label>
                    <input type="text" name="requirements" class="input" placeholder="File or doc required">
                </div>

                <div class="input-field">
                    <label for="">Upload an image</label>
                    <input type="file" name="image" class="input">
                </div>



                <div class="input-field">
                    <label class="check">
                        <input type="checkbox" required>
                        <span class="checkmark"></span>
                    </label>
                    <p>terms and conditions</p>
                </div>

                <div class="input-field">
                    <input type="submit" name="publish" id="" value="publish" class="btn">
                </div>



            </form>
        </div>
    </div>
</body>

</html>