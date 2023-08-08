
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
        <li><a href="#">Remove Blood Donor</a></li>
        <li><a href="viewrequest.php">View Request</a></li>
        <li><a href="logout.php">log Out</a></li>
<li><a href="updatenews.php">Update News</a></li>
        <li><a href="contactmsg.php">Contact Message</a></li>


</div>
</div>
<div style="height:300px; width:500px; margin:auto; margin-top:50px; margin-bottom:50px; background-color:#f8f1e4; border:2px solid red; box-shadow:4px 1px 20px black;" class="">
<?php include('config.php'); ?>
<?php include('function.php'); ?>

       <form method="post">
<table border="0" align="center" width="400" height="300px" class="shaddoww">
<tr><td colspan="2" align="center" class="toptd">DELETE USER</td></tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr><td class="lefttd">Select User Name</td><td><select name="s2" required><option value="">Select</option>

<?php
$cn=makeconnection();
$s="select * from donarregistration";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{


			echo "<option value=$data[1]>$data[1]</option>";




	}
	mysqli_close($cn);

?>



</select>



</td></tr>


<tr><td>&nbsp;</td><td><input type="submit" value="DELETE" name="sbmt"></td></tr>
</table>
</form>
       </div>

<?php
if(isset($_POST["sbmt"]))
{
	mysqli_query($link,"delete from donarregistration where name=('$_POST[s2]')");
}

 ?>

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
