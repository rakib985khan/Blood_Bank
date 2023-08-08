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
        <li><a href="index.php">Page Preview</a></li>

        <li><a href="BloodDonor.php">Blood Donor</a></li>
        <li><a href="RequestforBlood.php">View Request</a></li>
        <li><a href="logout.php">log Out</a></li>

        <li><a href="contactus.php">Contact Message</a></li>

</div>
<div style=" height:auto">

     <form method="post" enctype="multipart/form-data">
      <table cellpadding="0" cellspacing="0" width="1100px" style="margin:auto">
  <tr>
            <td>



  <table cellpadding="0" cellspacing="0" width="800px" height="100px" style="margin:auto; border:0px" class="tableborder">
        <tr><td  align="center"><img src="Images/results.png" height="80px" style="padding-top:20px" /></td></tr>
        <tr><td >&nbsp;</td></tr>

            <?php
$cn=makeconnection();
$s="select * from donarregistration,bloodgroup where donarregistration.bloodgroup='". $_REQUEST["bg"]."' and donarregistration.bloodgroup=bloodgroup.bg_name";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	$n=0;
	while($data=mysqli_fetch_array($result))
	{
?>
  <tr><td  >

            <table cellpadding="0" cellspacing="0" width="700px" height="150px" style="margin:auto; border:none;" class="tableborder">


                <tr><td width="100px"  align="center" style="vertical-align:middle">

 <a href="donor_image<?php echo $data[8] ?>"data-lightbox="image-1"> <img src="donor_image/<?php echo $data[8] ?>" height="100px" width="100px" style="margin:auto; padding-left:70px; padding-right:50px; float:left" /></a></td>


                    <td width="500px" height="50px" style="vertical-align:top">


                        <table cellpadding="0" width="500px" height="150px" style="border:none">
           <tr><td colspan="2">&nbsp;</td></tr>
                <tr><td><span class="title">Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td><td><?php echo $data[1]; ?></td><td align="left" width="50%"></td></tr>
                 <tr><td><span class="title">Gender</span></td><td><?php echo $data[2]; ?></td></tr>
                  <tr><td style="width:24px"><span class="title">Mobile No:</span></td><td><?php echo $data[4]; ?></td></tr>
                  <tr><td><span class="title">Email</span></td><td><?php echo $data[6]; ?></td></tr>
                   <tr><td><span class="title">Blood Group</span></td><td><?php echo $data[10]; ?></td></tr>

                     <tr><td colspan="2">&nbsp;</td></tr>


                      </table>

                    </td></tr></table></td></tr>

   <?php }
   ?>
           </table></td></tr></table></form>



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
