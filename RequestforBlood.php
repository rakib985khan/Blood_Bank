
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Blood Bank</title>
  <link rel="stylesheet" href="css/style.css">
  <link href="css/lightbox.css" rel="stylesheet" />
  <link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<?php include('function.php'); ?>
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
        <input type="text" class="searchTerm" placeholder="What are you looking for?">
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
      <ul class="nav" align="center">
        <li><a href="index.php">Home</a></li>
        <li><a href="DonorRegistration.php">Donor Registration</a></li>
        <li><a href="BloodDonor.php">Blood Donor</a></li>
        <li><a href="RequestforBlood.php">Request for Blood</a></li>
        <li><a href="logIn.php">log In</a></li>
        <li><a href="Admin.php">Admin</a></li>
        <li><a href="contactus.php">Contact Us</a></li>
      </ul>
    </div>


    <div style="height:530px; width:500px; margin:auto; margin-top:10px; margin-bottom:10px; background-color:#f8f1e4; border:2px solid red; box-shadow:4px 1px 20px black;">
      <form method="post" enctype="multipart/form-data">
        <table cellpadding="0" cellspacing="0" width="500px" height="480px" style="margin:auto" >

          <tr><td colspan="2" align="center"><img src="Images/brequest.png" height="90px" /></td></tr>

          <tr><td>&nbsp;</td><td>&nbsp;</td></tr>



          <tr><td class="lefttd" align="center"> Name:</td><td><input type="text" name="t1" required="required" pattern="[a-zA-Z _]{5,15}" title="please enter only character  between 5 to 15 for donor name" /></td></tr>
          <tr><td>&nbsp;</td></tr>
          <tr><td class="lefttd" align="center">Gender</td><td><input name="r1" type="radio" value="male" checked="checked">Male<input name="r1" type="radio" value="female">Female</td></tr>
          <tr><td>&nbsp;</td></tr>
          <tr><td class="lefttd" align="center">Age</td><td><input type="number" name="t2" required="required" pattern="[0-9]{2,2}" title="please enter only  numbers between 2 to 2 for age" /></td></tr>
          <tr><td>&nbsp;</td></tr>
          <tr><td class="lefttd" align="center">Mobile No</td><td><input type="number" name="t3"  required="required" pattern="[0-9]{10,12}" title="please enter only numbers between 10 to 12 for mobile no." /></td></tr>
          <tr><td>&nbsp;</td></tr>
          <tr><td class="lefttd" align="center">Select Blood Group </td><td>
            <select name="t4" required>
            <option value="">Select</option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>



          </select></td></tr>
          <tr><td>&nbsp;</td></tr>
          <tr><td class="lefttd" align="center">E-Mail</td><td><input type="email" name="t5" required="required" /></td></tr>
          <tr><td>&nbsp;</td></tr>
          <tr><td class="lefttd" align="center">Till Required Date</td><td>
            <select name="month">
              <option value="1">JAN</option>
              <option value="2">FEB</option>
              <option value="1">MARCH</option>
              <option value="1">APRIL</option>
              <option value="1">MAY</option>
              <option value="1">JUNE</option>
              <option value="1">JULY</option>
              <option value="1">AUG</option>
              <option value="1">SEPT</option>
              <option value="1">OCT</option>
              <option value="1">NOV</option>
              <option value="1">DEC</option>
            </select>
            <select name="day">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
              <option value="13">13</option>
              <option value="14">14</option>
              <option value="15">15</option>
              <option value="16">16</option>
              <option value="17">17</option>
              <option value="18">18</option>
              <option value="19">19</option>
              <option value="20">20</option>
              <option value="21">21</option>
              <option value="22">22</option>
              <option value="23">23</option>
              <option value="24">24</option>
              <option value="25">25</option>
              <option value="26">26</option>
              <option value="27">27</option>
              <option value="28">28</option>
              <option value="29">29</option>
              <option value="30">30</option>
              <option value="31">31</option>
            </select>

            <input type="text" name="year" style=" width:50px"  /></td></tr>
            <tr><td>&nbsp;</td></tr>
            <tr><td class="lefttd" align="center">Detail</td><td><textarea name="t7"></textarea></td></tr>
            <tr><td>&nbsp;</td></tr>
            <tr><td>&nbsp;</td><td><input type="submit" value="Submit" name="sbmt" style="border:0px; background:linear-gradient(#900,#D50000); width:100px; height:30px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:14px; text-shadow:1px 1px 6px black; "></td></tr></table>

          </form>
        </div>

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
        <?php
        if(isset($_POST["sbmt"]))
        {


        	$cn=makeconnection();
        		$d=$_POST["year"]."/".$_POST["month"]."/".$_POST["day"];
        			$s="insert into requestes(name,gender,age,mobile,bgroup,email,reqdate,detail) values('" . $_POST["t1"] ."','" . $_POST["r1"] . "','" . $_POST["t2"] . "','" . $_POST["t3"] . "','" . $_POST["t4"] . "','" . $_POST["t5"] . "','" . $d .  "','" .  $_POST["t7"]  ."')";


        	$q=mysqli_query($cn,$s);
        	mysqli_close($cn);
        	if($q>0)
        	{
        	echo "<script>alert('Record Save');</script>";
        	}
        	else
        	{echo "<script>alert('Saving Record Failed');</script>";
        	}

        		}


        ?>
      </body>
      </html>
