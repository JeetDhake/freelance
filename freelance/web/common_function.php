<?php

//include('../web/connect.php');

function getgigbuy()
{

  global $con;
  $select_query = "SELECT * FROM `gig`";
  $result_query = mysqli_query($con, $select_query);


  while ($row = mysqli_fetch_assoc($result_query)) {

    $id = $row['id'];

    $gig_title = $row['gig_title'];
    $category = $row['category'];
    $sub_category = $row['sub_category'];

    $file_format = $row['file_format'];
    $price = $row['price'];
    $description = $row['description'];
    $requirements = $row['requirements'];

    $image = $row['image'];


    echo "
                <div class='col-4'>

                    <a href='productpage.php?id=$id' style='color: #555; text-decoration: none;'>
                    
                    <img src='../web/db_image/$image' alt='$gig_title'>
                    <h4>$gig_title</h4>
                    <div class='discription'>
                        <p>$description</p>
                    </div>
                    <p>$price</p>

                    </a>
                </div>
            ";
  }
}


function getgigsell()
{
  $unid =  $_SESSION['username'];
  global $con;
  $squery = mysqli_query($con, "SELECT * FROM `seller` where username='$unid'");
  $res = mysqli_num_rows($squery);

  if ($res > 0) {
    $row1 = mysqli_fetch_assoc($squery);
  }
  $pimg = $row1['image'];

  $select_query = "SELECT * FROM `gig` WHERE username='$unid'";

  $result_query = mysqli_query($con, $select_query);



  while ($row = mysqli_fetch_assoc($result_query)) {

    $id = $row['id'];
    $name = $row['username'];
    $gig_title = $row['gig_title'];
    $category = $row['category'];
    $sub_category = $row['sub_category'];

    $file_format = $row['file_format'];
    $price = $row['price'];
    $description = $row['description'];
    $requirements = $row['requirements'];

    $image = $row['image'];

    echo "
            <div class='post-container'>

            <div class='post-row'>
                <div class='user-profile'>
                    <img src='image/$pimg' alt=''>
                    <div>
                        <p>$name</p>
                        <span>
                            june 24 2021, 13:40pm
                        </span>
                    </div>
                </div>
                <a href='productpage.php?id=$id'><img src='' alt='edit'></a>
            </div>

            
            <p class='post-text'>$gig_title</p>
            <img src='db_image/$image' alt='' class='post-img'>

            <div class='post-row'>
                <div class='activity-icons'>
                    <div>
                        <img src='image/about.png' alt=''>120
                    </div>
                    <div>
                        <img src='image/about.png' alt=''>200
                    </div>
                    <div>
                        <img src='image/about.png' alt=''>20
                    </div>
                    
                </div>
                <div class='post-profile-icon'>
                    <img src='image/about.png' alt=''>
                </div>
            </div>
        </div>";
  }
}






function viewgig()
{

  global $con;






  if (isset($_GET['id'])) {

    $id = $_GET['id'];




    $select_query = "SELECT * FROM `gig` WHERE id=$id";
    $result_query = mysqli_query($con, $select_query);


    while ($row = mysqli_fetch_assoc($result_query)) {





      $id = $row['id'];

      $gig_title = $row['gig_title'];
      $category = $row['category'];
      $sub_category = $row['sub_category'];

      $file_format = $row['file_format'];
      $price = $row['price'];
      $description = $row['description'];
      $requirements = $row['requirements'];

      $image = $row['image'];
      $nm = $row['username'];

      echo "
                <div class = 'card-wrapper'>
      <div class = 'card'>
        
        <div class = 'product-imgs'>
          <div class = 'img-display'>
            <div class = 'img-showcase'>
              <img src = 'db_image/$image' alt = 'image'>
              <img src = 'db_image/$image' alt = 'image'>
              <img src = 'db_image/$image' alt = 'image'>
              <img src = 'db_image/$image' alt = 'image'>
            </div>
          </div>
          <div class = 'img-select'>
            <div class = 'img-item'>
              <a href = '' data-id = 1'>
                <img src = 'db_image/$image' alt = 'image'>
              </a>
            </div>
            <div class = 'img-item'>
              <a href = '' data-id = '2'>
                <img src = 'db_image/$image' alt = 'image'>
              </a>
            </div>
            <div class = 'img-item'>
              <a href = '' data-id = '3'>
                <img src = 'db_image/$image' alt = 'image'>
              </a>
            </div>
            <div class = 'img-item'>
              <a href = '' data-id = '4'>
                <img src = 'db_image/$image' alt = 'image'>
              </a>
            </div>
          </div>
        </div>
        
        <div class = 'product-content'>
          <h2 class = 'product-title'>$gig_title</h2>
          <a href = '' class = 'product-link'>$nm</a>
          <div class = 'product-rating'>
            <i class = 'fas fa-star'></i>
            <i class = 'fas fa-star'></i>
            <i class = 'fas fa-star'></i>
            <i class = 'fas fa-star'></i>
            <i class = 'fas fa-star-half-alt'></i>
            <span>4.7(21)</span>
          </div>

          <div class = 'product-price'>
            <p class = 'new-price'>file format: <span>$file_format</span></p>
            <p class = 'new-price'>Price: <span>$price</span></p>
          </div>

          <div class = 'product-detail'>
            <h2>about this gig: </h2>
            <p>$description</p>
            
            <ul>
              
              
              <li>Category: <span>$category</span></li>
              <li>Sub Category: <span>$sub_category</span></li>
              <li>Requirments: <span>$$requirements</span></li>
            </ul>

            <p>Contact info:</p>
          </div>";

      $unid =  $nm;
      $query = mysqli_query($con, "SELECT * FROM `signin` WHERE username='$unid'");
      $row = mysqli_fetch_array($query);
      $un = $row['username'];

      $select_query = "SELECT * FROM `seller` WHERE username='$un'";
      $result_query = mysqli_query($con, $select_query);
      while ($row = mysqli_fetch_assoc($result_query)) {

        $email = $row['email'];
        $phone = $row['phone'];



        echo '<div class = "purchase-info">
    <input type = "number" min = "0" value = "1">

    <button type = "button" class = "btn" onclick="location.href=\'mailto:' . $email . '\'">
      E-mail  <i class = "fas fa-envelope"></i>
    </button>

    <button type = "button" class = "btn" onclick="location.href=\'tel:' . $phone . '\'">
      Call <i class = "fas fa-phone"></i>
    </button>
    

    <button type = "button" class = "btn" onclick="location.href=\'../web/profile.php\'">Pay $$$</button>
              
  

  <div class = "social-links">
    <p>Socials: </p>
    <a href = ">
      <i class = "fab fa-facebook-f"></i>
    </a>
    <a href = ">
      <i class = "fab fa-twitter"></i>
    </a>
    <a href = ">
      <i class = "fab fa-instagram"></i>
    </a>
    <a href = ">
      <i class = "fab fa-whatsapp"></i>
    </a>
    <a href = ">
      <i class = "fab fa-pinterest"></i>
    </a>
  </div>
</div>
</div>
</div>
</div>';
      }
    }
  }
}
