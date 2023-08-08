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
      <ul style="width:1050px" class="nav" >
        <li><a href="index.php">Page Preview</a></li>

        <li><a href="#">Blood Donor</a></li>
        <li><a href="deleteuser.php">Remove Blood Donor</a></li>
        <li><a href="viewrequest.php">View Request</a></li>
        <li><a href="logout.php">log Out</a></li>
<li><a href="updatenews.php">Update News</a></li>
        <li><a href="contactmsg.php">Contact Message</a></li>


</div>
</div>

<div style="height:auto; width:1000px; margin:auto; margin-top:50px; margin-bottom:50px; background-color:#f8f1e4; border:2px solid red; box-shadow:4px 1px 20px black;">
     <form method="post" enctype="multipart/form-data">
 <table cellpadding="20"  cellspacing="20" width="1000px" height="200px"  style="margin:auto" >

   <tr><td colspan="7" align="center"><h1 style="font-size:30px;">Blood Donors</h1></td></tr>

   <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
 <tr style="background-color:bisque" align="center" class="bold">
             <td class="bold" style="color:red"  >Blood Group</td>
             <td style="padding-left:-20px;">Name</td>
             <td align="center">Gender</td>
             <td align="center">Age</td>
             <td align="center">Email</td>
            <td align="center">Phone No.</td>
              <td align="center">Image</td>

        </tr>




<?php


$cn=mysqli_connect("localhost","root","","bloodbankcopy");
$s="select * from donarregistration where status=1";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
    $pic= $data[8];
				echo "<tr style='border: 1px solid black;'><td  style=' padding-left:50px'>$data[5]</td><td  style=' padding-left:50px'>$data[1]</td><td  style=' padding-left:20px'>$data[2]</td><td  style=' padding-left:30px'>$data[3]</td><td  style=' padding-left:50px'>$data[6]</td><td  style=' padding-left:50px'>$data[4]</td><td  style=' padding-left:50px'><img style='height:100px;width:100px;margin-top:20px;' src='donor_image/$data[pic]'></td></tr>";


      }
			mysqli_close($cn);
			?>


</table>
</form>
        </div>
            <div style="margin-top:100px;" class="ftr-bg">
              <div  class="wrap">
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
