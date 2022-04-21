<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Merced Hernandez Pawnshop & Jewellery </title>
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <!-- Flaticon CDN Link --> 
    <link href= "https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css" rel="stylesheet"> 
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <body onload="initClock()">
  <div class="sidebar">
    <div class="logo-details">
      <img src="images/icon.png" alt="" width="30" height="30">
      <span class="logo_name">Merced Hernandez</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="index.php" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="#">
             <i class='bx bxs-spreadsheet'></i>
             <span class="links_name">Inventory</span>
          </a>
        </li>
        <li>
          <a href="#">
             <i class='bx bxs-folder-open'></i>
             <span class="links_name">Transaction</span>
          </a>
        </li>
        <li>
          <a href="#">
              <i class='bx bxs-report'></i>
              <span class="links_name">Reports</span>
          </a>
        </li>
        <li>
          <a href="#">
             <i class= "fi fi-rr-receipt"></i>
             <span class="links_name">Invoice</span>
          </a>
        </li>
        <li>
          <a href="customermgmt.php">
              <i class='bx bxs-user-detail'></i>
              <span class="links_name">Customer</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-cog' ></i>
            <span class="links_name">Settings</span>
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
        <i class='bx bx-search' ></i>
      </div>
      <div class="profile-details">
        <img src="images/profile.jpg" alt="">
        <span class="admin_name">Admin</span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>
    <!-- Digital Clock starts--> 
    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
          <div class="datetime">
            <div class="date">
              <span id="dayname">Day</span>,
              <span id="month">Month</span>
              <span id="daynum">00</span>,
              <span id="year">Year</span>
            </div>
            <div class="time">
              <span id="hour">00</span>:
              <span id="minutes">00</span>:
              <span id="seconds">00</span>
              <span id="period">AM</span>
            </div>
          </div>
          </div>
        </div>
        <!-- Digital Clock end--> 

        <script type= "text/javascript">
        function updateClock(){
          var now= new Date();
          var dname= now.getDay(),
              mo = now.getMonth(),
              dnum = now.getDate(),
              yr = now.getFullYear(),
              hou = now.getHours(),
              min = now.getMinutes(),
              sec = now.getSeconds(),
              pe = "AM";

              if(hou == 0){
                hou = 12;
              }
              if(hou > 12){
                hou = hou - 12;
                pe = "PM";
              }

              Number.prototype.pad = function(digits){
                for(var n = this.toString(); n.length < digits; n = 0 + n);
                return n;
              }


          var months = ["January","February","March","April","May","June","July","August","September","October","November","December"];
          var week = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
          var ids = ["dayname","month","daynum","year","hour","minutes","seconds","period"];
          var values = [week[dname], months[mo], dnum.pad(2), yr, hou.pad(2), min.pad(2), sec.pad(2), pe];
          for(var i = 0; i < ids.length; i++)
          document.getElementById(ids[i]).firstChild.nodeValue = values[i];


        }

        function initClock(){
          updateClock();
          window.setInterval("updateClock()", 1);

        }
        </script>

        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Sales</div>
            <div class="number">38,876</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <i class='bx bxs-cart-add cart two' ></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Profit</div>
            
           
          </div>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Return</div>
            <div class="number">11,086</div>
            <div class="indicator">
              <i class='bx bx-down-arrow-alt down'></i>
              <span class="text">Down From Today</span>
            </div>
          </div>
          <i class='bx bxs-cart-download cart four' ></i>
        </div>
      </div>

      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">Recent Sales</div>
          <div class="sales-details">
            <ul class="details">
              <li class="topic">Date</li>
              <li><a href="#">02 Jan 2021</a></li>
              <li><a href="#">02 Jan 2021</a></li>
              <li><a href="#">02 Jan 2021</a></li>
              <li><a href="#">02 Jan 2021</a></li>
              <li><a href="#">02 Jan 2021</a></li>
              <li><a href="#">02 Jan 2021</a></li>
              <li><a href="#">02 Jan 2021</a></li>
            </ul>
            <ul class="details">
            <li class="topic">Customer</li>
            <li><a href="#">Alex Doe</a></li>
            <li><a href="#">David Mart</a></li>
            <li><a href="#">Roe Parter</a></li>
            <li><a href="#">Diana Penty</a></li>
            <li><a href="#">Martin Paw</a></li>
            <li><a href="#">Doe Alex</a></li>
            <li><a href="#">Aiana Lexa</a></li>
            <li><a href="#">Rexel Mags</a></li>
             <li><a href="#">Tiana Loths</a></li>
          </ul>
          <ul class="details">
            <li class="topic">Sales</li>
            <li><a href="#">Delivered</a></li>
            <li><a href="#">Pending</a></li>
            <li><a href="#">Returned</a></li>
            <li><a href="#">Delivered</a></li>
            <li><a href="#">Pending</a></li>
            <li><a href="#">Returned</a></li>
            <li><a href="#">Delivered</a></li>
             <li><a href="#">Pending</a></li>
            <li><a href="#">Delivered</a></li>
          </ul>
          <ul class="details">
            <li class="topic">Total</li>
            <li><a href="#">$204.98</a></li>
            <li><a href="#">$24.55</a></li>
            <li><a href="#">$25.88</a></li>
            <li><a href="#">$170.66</a></li>
            <li><a href="#">$56.56</a></li>
            <li><a href="#">$44.95</a></li>
            <li><a href="#">$67.33</a></li>
             <li><a href="#">$23.53</a></li>
             <li><a href="#">$46.52</a></li>
          </ul>
          </div>
          <div class="button">
            <a href="#">See All</a>
          </div>
        </div>
        </div>
      </div>
    </div>

    <?php 
         require('calendar.php')
    ?> 
  </section>

  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>
</html>
