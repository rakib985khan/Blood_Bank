<?php if(!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Blood Bank</title>

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link href="css/lightbox.css" rel="stylesheet" />
  <link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all" />
  <link rel="stylesheet" href="themes/default/default.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="themes/light/light.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="themes/dark/dark.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="themes/bar/bar.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />


</head>
<body>
  <?php
  if($_SESSION['loginstatus']=="")
  {
  	header("location:adminlogin.php");
  }
  ?>
  <div class="h_bg">
    <div class="wrap">
      <div class="header">
        <div class="logo">
          <h1><img height="150" width="300" src="Images/1st.jpg" alt=""></a></h1>

        </div>
      </div>
    </div>
    <div class="wrap1">
   <div class="search">
      <input type="text" style="height:36px;" class="searchTerm" placeholder="What are you looking for?">
      <button type="submit" class="searchButton">
        <img src="images/searchlogo.png" alt="">
        <!--call-->
     </button>
     <div class="dropdown">
  <button class="dropbtn"><img src="images/call.png" alt=""></button>

  <div class="dropdown-content">
    <a href="#">01988111111</a>
  </div>
 </div>
<!--mail-->

    <div class="dropdown1">

   <button class="dropbtn1"><img src="images/mailicon.png" alt=""></button>

 <div class="dropdown-content1">
   <a href="#">mariammim0@gmail.com</a>

  </div>
</div>
   </div>
</div>
  </div>
  <div class="nav_bg">
    <div class="wrap">
      <ul style="width:1138px" class="nav" >
        <li><a href="index.php">Page Preview</a></li>

        <li><a href="viewblooddonor.php">Blood Donor</a></li>
        <li><a href="deleteuser.php">Remove Blood Donor</a></li>
        <li><a href="viewrequest.php">View Request</a></li>
        <li><a href="logout.php">log Out</a></li>
<li><a href="updatenews.php">Update News</a></li>
        <li><a href="contactmsg.php">Contact Message</a></li>
        <li><a href="notification.php">Notifications</a></li>


</div>
</div>

<div class="h_btm_bg">
  <div class="wrap">
    <div class="h_btm">
      <div class="header-para">
        <div class="">

          <h1 align="center" style="font-size:54px">Welcome to Admin Panel</h1>

        </div>



        </div>

        <div class="clear"></div>
      </div>
    </div>
  </div>
  <div class="s_bg">
    <div class="wrap">
      <div class="main_cont">
        <section class="slider">
          <div id="slider_wrapper">
   <div class="slider-wrapper theme-bar">
    <div id="slider" class="nivoSlider">
      <img src="images/pic1.png" alt="images" />
      <img src="images/pic2.jpg" alt="" />
      <img src="images/pic3.jpg" alt="" />
        <img src="images/pic4.jpg" alt="" />
          <img src="images/pic5.png" alt="" />
    </div>
   </div>
</div>
        </section>
        <div class="ribben">
          <div class="l-triangle-top"></div>
          <div class="l-triangle-bottom"></div>
          <div class="rectangle"></div>
          <div class="r-triangle-top"></div>
          <div class="r-triangle-bottom"></div>
          <div class="clear"></div>
        </div>
</div>
</div></div>
            <div class="ftr-bg">
              <div class="wrap">
                <div class="footer">
                  <div class="f_nav">

                  </div>
                  <div class="copy">
                    <p class="title">© All Rights Reserved </p>
                  </div>
                  <div class="clear"></div>
                </div>
              </div>
            </div>
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
          <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
          <script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
            <script type="text/javascript">
            $(window).load(function() {
                $('#slider').nivoSlider();
            });
            </script>
          </body>
          </html>
