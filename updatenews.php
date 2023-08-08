<?php if(!isset($_SESSION)) {session_start();}  ?>
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

        <li><a href="viewblooddonor.php">Blood Donor</a></li>
        <li><a href="deleteuser.php">Remove Blood Donor</a></li>
        <li><a href="viewrequest.php">View Request</a></li>
        <li><a href="logout.php">log Out</a></li>
<li><a href="#">Update News</a></li>
        <li><a href="contactmsg.php">Contact Message</a></li>


</div>
</div>
<?php include('function.php'); ?>
<?php
if(isset($_POST["sbmt"]))
{
	$cn=makeconnection();
	$s="insert into news(title,detail) values('" . $_POST["t1"] . "','" .$_POST["t2"] . "')";
	mysqli_query($cn,$s);
	mysqli_close($cn);
	echo "<script>alert('Record Save');</script>";
}

?>
<div style="height:450px; width:700px; margin:auto; margin-top:10px; margin-bottom:10px; background-color:#f8f1e4; border:2px solid red; box-shadow:4px 1px 20px black;">
       <form method="post" enctype="multipart/form-data">
<table style="margin-left: 70px;" border="0" align="center" width="400" height="300px" class="shaddoww">
<tr><td colspan="2" align="center" class="toptd"><h1 style="font-size:30px;">Add News</h1> </td></tr>
<tr><td colspan="2">&nbsp;</td></tr>

<tr><td class="lefttd">News Title</td><td><input type="text" name="t1" required="required" pattern="[a-zA-Z1 _]{1,100}" title="please enter only character or numbers between 5 to 15 for news title"/></td></tr>
<tr><td class="lefttd">Detail</td><td><textarea name="t2"></textarea></td></tr>


<tr><td>&nbsp;</td><td><input type="submit" value="SAVE" name="sbmt"></td></tr>
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
