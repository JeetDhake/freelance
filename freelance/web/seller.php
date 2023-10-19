<?php

include('../web/connect.php');
include('../web/common_function.php');
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
  header("location: login.php");
}

$unid =  $_SESSION['username'];
$query = mysqli_query($con, "SELECT * FROM `signin` WHERE username='$unid'");
$row = mysqli_fetch_array($query);
$un = $row['username'];

$squery = mysqli_query($con, "SELECT * FROM `seller` where username='$un'");
$res = mysqli_num_rows($squery);

if ($res > 0) {
  $row1 = mysqli_fetch_assoc($squery);
}




?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="seller.css">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <script src="https://kit.fontawesome.com/b9323f08fd.js" crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>seller</title>
</head>

<body>

  <div class="sidebar close">
    <div class="logo-details">
      <img src="../web/image/logo.png" alt="" class="">
      <span class="logo_name">Lost n found</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="#">
          <i class='bx bx-grid-alt'></i>
          <span class="link_name">Dashboard</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Dashboard</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-collection'></i>
            <span class="link_name">Category</span>
          </a>
          <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Category</a></li>

          <?php
          $select_query = "SELECT * FROM category";
          $result_query = mysqli_query($con, $select_query);

          while ($row = mysqli_fetch_assoc($result_query)) {
            $category_title = $row['category_title'];
            $category_id = $row['category_id'];

            echo "<li><a href=''>$category_title</a></li>";
          }

          ?>

        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-book-alt'></i>
            <span class="link_name">Courses</span>
          </a>
          <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Cources</a></li>
          <li><a href="#">Web Design UI-XI</a></li>
          <li><a href="#">Full-Stack Web Dev </a></li>
          <li><a href="#">Back-end Web Dev</a></li>
          <li><a href="#">Web Development</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-pie-chart-alt-2'></i>
          <span class="link_name">Analytics</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Analytics</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-line-chart'></i>
          <span class="link_name">Chart</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Chart</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-plug'></i>
            <span class="link_name">Plugins</span>
          </a>
          <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Plugins</a></li>
          <li><a href="#">lnf Workspace</a></li>
          <li><a href="#">Online Editior</a></li>
          <li><a href="#">AI tools</a></li>
          <li><a href="#">Community</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-compass'></i>
          <span class="link_name">Explore</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Explore</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-history'></i>
          <span class="link_name">History</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">History</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-cog'></i>
          <span class="link_name">Setting</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Setting</a></li>
        </ul>
      </li>
      <li>
        <div class="profile-details">
          <div class="profile-content">
            <img src="../web/image/profile1.png" alt="profileImg">
          </div>
          <div class="name-job">
            <div class="profile_name"><?php echo $row1['name']; ?></div>
            <div class="job">active</div>
          </div>
          <i class='bx bx-log-out'></i>
        </div>
      </li>
    </ul>
  </div>
  <section class="home-section">

    <nav>
      <div class="nav-left">
        <div class="home-content">
          <i class='bx bx-menu'></i>

        </div>
        <img src="image/logo.png" alt="logo" class="logo">
        <ul>
          <li><i class="fa-solid fa-house" style="color: #0009;"></i></li>
          <li><i class="fa-regular fa-envelope" style="color: #0009;"></i></li>
          <li><i class="fa-solid fa-tv" style="color: #0009;"></i></li>
        </ul>
      </div>
      <div class="nav-right">
        <div class="search-box">
        <i class="fa-solid fa-magnifying-glass" style="color: #0009;"></i>
          <input type="text" placeholder="search">
        </div>
        <div class="nav-user-icon online" onclick="settingmenutoggle()">
          <img src="image/<?php echo $row1['image']; ?>" alt="img">
        </div>
      </div>

      <div class="setting-menu">

        <div id="dark-btn">
          <span></span>
        </div>

        <div class="setting-menu-inner">

          <div class="user-profile">
            <img src="image/<?php echo $row1['image']; ?>" alt="">
            <div>
              <p><?php echo $row1['name']; ?></p>
              <a href="../web/profile.php">see your profile</a>
            </div>
          </div>
          <hr>
          <div class="user-profile">
            <img src="image/about.png" alt="">
            <div>
              <p>give feedback</p>
              <a href="">help us to improve</a>
            </div>
          </div>
          <hr>

          <div class="setting-links">

            <img src="image/about.png" alt="" class="setting-icons">
            <a href="">setting and privacy <img src="" alt=""></a>
          </div>
          <div class="setting-links">

            <img src="image/about.png" alt="" class="setting-icons">
            <a href="../web/payment.php">billing n payment <img src="" alt=""></a>
          </div>
          <div class="setting-links">

            <img src="image/about.png" alt="" class="setting-icons">
            <a href="">display and access <img src="" alt=""></a>
          </div>
          <hr>
          <div class="setting-links">

            <img src="image/about.png" alt="" class="setting-icons">
            <a href="../web/logout.php">log-out <img src="" alt=""></a>
          </div>

        </div>

      </div>

    </nav>

    <div class="container">
      <div class="left-sidebar">
        <div class="imp-links">
          <a href=""><img src="image/about.png" alt="">orders and gigs</a>
          <a href=""><img src="image/about.png" alt="">billing</a>
          <a href=""><img src="image/about.png" alt="">scale business</a>
          <a href=""><img src="image/about.png" alt="">analytics</a>
          <a href=""><img src="image/about.png" alt="">overview</a>
          <a href="">see more</a>
        </div>
        <div class="shortcut-links">
          <p>your shortcuts</p>
          <a href=""><img src="image/design.jpg" alt="">web developers</a>
          <a href=""><img src="image/comp.jpg" alt="">web design course</a>
          <a href=""><img src="image/illus.png" alt="">full stack dev</a>
          <a href=""><img src="image/codeill.jpg" alt="">website expert</a>
        </div>
      </div>

      <div class="main-content">
        <div class="story-gallery">
          <div class="story story1">
            <img src="image/about.png" alt="">
            <p>post</p>
          </div>
          <div class="story story2">
            <img src="image/about.png" alt="">
            <p>post</p>
          </div>
          <div class="story story3">
            <img src="image/about.png" alt="">
            <p>post</p>
          </div>
          <div class="story story4">
            <img src="image/about.png" alt="">
            <p>post</p>
          </div>
          <div class="story story5">
            <img src="image/about.png" alt="">
            <p>post</p>
          </div>

        </div>

        <div class="write-post-container">
          <div class="user-profile">
            <img src="image/<?php echo $row1['image']; ?>" alt="">
            <div>
              <p><?php echo $row1['name']; ?></p>
              <small>public</small>
            </div>
          </div>

          <div class="post-input-container">
            <textarea name="" rows="3" placeholder="enter new gig"></textarea>

            <div class="add-post-links">
              <a href="">
                <img src="image/about.png" alt="">
                starting price
              </a>
              <a href="">
                <img src="image/about.png" alt="">
                edit & preview
              </a>
              <a href="">
                <img src="image/about.png" alt="">
                statistics
              </a>
            </div>
          </div>
        </div>

        <?php

        getgigsell();
        ?>



        <a href="../web/createagig.php" style="text-decoration: none;">
          <button type="button" class="new-gig-btn">create new gig</button>
        </a>




      </div>

      <div class="right-sidebar">
        <div class="sidebar-title">
          <h4>
            Events
          </h4>
          <a href="">See all</a>
        </div>
        <div class="event">
          <div class="left-event">
            <h3>18</h3>
            <span>March</span>

          </div>
          <div class="right-event">
            <h4>work deadline</h4>
            <p>clients name</p>
            <a href="">more info</a>
          </div>

        </div>
        <div class="event">
          <div class="left-event">
            <h3>22</h3>
            <span>june</span>

          </div>
          <div class="right-event">
            <h4>reviews dates</h4>
            <p>client x</p>
            <a href="">more info</a>
          </div>

        </div>
        <div class="sidebar-title">
          <h4>
            Advertisement
          </h4>
          <a href="">close</a>
        </div>
        <img src="image/about.png" alt="" class="sidebar-ads">
        <div class="sidebar-title">
          <h4>
            Conversations
          </h4>
          <a href="">Hide chat</a>
        </div>

        <div class="online-list">
          <div class="online">
            <img src="image/profile4.png" alt="">
          </div>
          <p>Alison Mina</p>
        </div>
        <div class="online-list">
          <div class="online">
            <img src="image/profile2.png" alt="">
          </div>
          <p>jackson astro</p>
        </div>
        <div class="online-list">
          <div class="online">
            <img src="image/profile3.png" alt="">
          </div>
          <p>simona rose</p>
        </div>
      </div>
    </div>
    <div class="footer">copyright2021-lost-mf-found</div>


    <script src="seller.js"></script>
  </section>
  <script>
    let arrow = document.querySelectorAll(".arrow");
    for (var i = 0; i < arrow.length; i++) {
      arrow[i].addEventListener("click", (e) => {
        let arrowParent = e.target.parentElement.parentElement;
        arrowParent.classList.toggle("showMenu");
      });
    }
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".bx-menu");
    console.log(sidebarBtn);
    sidebarBtn.addEventListener("click", () => {
      sidebar.classList.toggle("close");
    });
  </script>



</body>

</html>