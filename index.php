<?php
include "db.php";
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title> Admin Dashboard </title>
  <link rel="stylesheet" href="css/style.css">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <div class="sidebar">
    <div class="logo-details">
      <span class="logo_name">BridgeIT</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="dashborad.php" class="active">
          <span class="links_name">Dashboard</span>
        </a>
      </li>
      <li>
        <a href="Screenemotions.php">
          <span class="links_name">Screen emotions</span>
        </a>
      </li>
      <li>
        <a href="Successandfailure.php">
          <span class="links_name">Success and failure</span>
        </a>
      </li>
      <li>
        <a href="Numberofmistakes.php">
          <span class="links_name">Number of mistakes </span>
        </a>
      </li>
      <li>
        <a href="failureperscreen.php">
          <span class="links_name">failure per screen </span>
        </a>
      </li>
      <li>
        <a href="Avgperage.php">
          <span class="links_name">Avg per age</span>
        </a>
      </li>
      <li>
        <a href="Avgperprocess.php#">
          <span class="links_name">Avg per process</span>
        </a>
      </li>
      <li>
        <a href="Totaltime.php">
          <span class="links_name">Total time</span>
        </a>
      </li>
      <li>
        <a href="Stayed_abandoned.php">
          <span class="links_name">Stayed/abandoned</span>
        </a>
      </li>
      <li>
        <a href="feeling.php">
          <span class="links_name">Feelings</span>
        </a>
      </li>
      <li class="log_out">
        <a href="#">
          <i class='bx bx-log-out'></i>
          <span class="links_name">Log out</span>
        </a>
      </li>
    </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search'></i>
      </div>
      <div class="profile-details">
        <img src="images/profile.jpg" alt="">
        <span class="admin_name">Daniel</span>
        <i class='bx bx-chevron-down'></i>
      </div>
    </nav>
    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Smartphone</div>
            <div class="number">4076</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Desktop</div>
            <div class="number">3876</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">homepage</div>
            <div class="number">10</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Login</div>
            <div class="number">45</div>
            <div class="indicator">
              <i class='bx bx-down-arrow-alt down'></i>
              <span class="text">Down From Today</span>
            </div>
          </div>
        </div>
      </div>

      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">Analysis</div>
          <div class="sales-details">
            <ul class="details">
              <li class="topic">Age</li>
              <li><a href="#">20-30</a></li>
              <li><a href="#">30-40</a></li>
              <li><a href="#">40-55</a></li>
              <li><a href="#">50-60</a></li>
              <li><a href="#">60-70</a></li>
              <li><a href="#">70-above</a></li>
            </ul>
            <ul class="details">
              <li class="topic">Lifestyle</li>
              <li><a href="#">Urban</a></li>
              <li><a href="#">Suburbian</a></li>
              <li><a href="#">Rural</a></li>
              <li><a href="#">Urban</a></li>
              <li><a href="#">Suburbian</a></li>
              <li><a href="#">Rural</a></li>
            </ul>
            <ul class="details">
              <li class="topic">gender</li>
              <li><a href="#">M/F</a></li>
              <li><a href="#">M/F</a></li>
              <li><a href="#">M/F</a></li>
              <li><a href="#">M/F</a></li>
              <li><a href="#">M/F</a></li>
              <li><a href="#">M/F</a></li>
            </ul>
            <ul class="details">
              <li class="topic">Devices</li>
              <li><a href="#">Smartphone</a></li>
              <li><a href="#">Tablet</a></li>
              <li><a href="#">Laptop</a></li>
              <li><a href="#">Desktop</a></li>
              <li><a href="#">Smartphone</a></li>
              <li><a href="#">Tablet</a></li>
              <li><a href="#">Laptop</a></li>
            </ul>
          </div>
          <div class="button">
            <a href="#">See All</a>
          </div>
        </div>
        <div class="top-sales box">
          <div class="title">Age group-Time</div>
          <ul class="top-sales-details">
            <li>
              <a href="#">
                <img src="images/young.jpg" alt="">
                <span class="product">20-40</span>
              </a>
              <span class="price">3.6250 sec</span>
            </li>
            <li>
              <a href="#">
                <img src="images/40-55.jpg" alt="">
                <span class="product">40-55 </span>
              </a>
              <span class="price">3.8571 sec</span>
            </li>
            <li>
              <a href="#">
                <img src="images/men55.jpg" alt="">
                <span class="product">55-70</span>
              </a>
              <span class="price">6.8333 sec</span>
            </li>
            <li>
              <a href="#">
                <img src="images/oldwoman.jpg" alt="">
                <span class="product">70 - above</span>
              </a>
              <span class="price">12.5000 sec</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <script>
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
    sidebarBtn.onclick = function () {
      sidebar.classList.toggle("active");
      if (sidebar.classList.contains("active")) {
        sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
      } else
        sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
    }
  </script>

</body>

</html>
