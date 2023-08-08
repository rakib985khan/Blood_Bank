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
<?php include('config.php'); ?>
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

</div>

<div style="height:auto;width:900px; margin:auto; margin-top:50px; margin-bottom:50px; background-color:#f8f1e4; border:2px solid red; box-shadow:4px 1px 20px black;">

     <form method="post" enctype="multipart/form-data">
   <table cellpadding="0" cellspacing="0" width="500px" height="250px" class="tableborder" style="margin:auto; margin-top:100px;" >
         <tr><td colspan="2">&nbsp;</td></tr>
        <tr><td colspan="2" align="center"><img src="Images/search.png" height="80px" /></td></tr>
        <tr><td colspan="2">&nbsp;</td></tr>
        <tr><td class="lefttd" style="padding-left:40px">Select Blood Group </td><td>
          <select name="group" required>
                  <option value="">Select</option>
                  <option value="A+">A+</option>
                    <option value="A-">A-</option>
                      <option value="B+">B+</option>
                        <option value="B-">B-</option>
                          <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                              <option value="O+">O+</option>
                                <option value="O-">O-</option>


          </select>




</td></tr>
  <tr><td colspan="2">&nbsp;
            </td></tr>
        <tr><td colspan="2">&nbsp;</td></tr>
        <tr><td>&nbsp;</td><td>
<tr><td>&nbsp;</td><td><input type="submit" value="Search" name="sbmt" style="border:0px; background:linear-gradient(#900,#D50000); width:100px; height:30px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:14px; text-shadow:1px 1px 6px black; "></td></tr>

                        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                        <tr>
                          <?php
                          if(isset($_POST["sbmt"]))
{
	$res=mysqli_query($link,"select * from donarregistration where bloodgroup=('$_POST[group]') and status=1");
	echo "<table style='margin-left:115px;' border='2'>";echo "<tr>";
	echo "<th style='font-weight:bold;padding-left:10px;'>"; echo "bloodgroup";echo "</th>";
	echo "<th style='font-weight:bold; padding-left:30px;'>"; echo "name";echo "</th>";
	echo "<th style='font-weight:bold; padding-left:50px;'>"; echo "gender";echo "</th>";
	echo "<th style='font-weight:bold; padding-left:40px;'>"; echo "age";echo "</th>";
	echo "<th style='font-weight:bold; padding-left:40px;'>"; echo "mobile";echo "</th>";
  	echo "<th style='font-weight:bold; padding-left:40px;'>"; echo "image";echo "</th>";
	echo "</tr>";
	while($row=mysqli_fetch_array($res))
	{
		echo "<tr style='border:1px solid black;'>";
		echo "<td style='padding-left:10px;padding-bottom:30px;'>"; echo $row[5];echo "</td>";
		echo "<td style='padding-left:30px;'>"; echo $row[1];echo "</td>";
		echo "<td style='padding-left:50px;padding-top:10px;'>";echo $row[2];echo "</td>";
		echo "<td style='padding-left:40px;'>"; echo $row[3];echo "</td>";
		echo "<td style='padding-left:40px;'>"; echo $row[4];echo "</td>";
    	echo "<td style='padding-left:40px;'>";  echo "<img style='height:100px;width:100px;margin-top:20px;' src='donor_image/$row[pic]'>";echo "</td>";
		echo "</tr>";
	}
	echo "</table>";
}
	?>
                        </tr>

</table>




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

          </body>
          </html>
