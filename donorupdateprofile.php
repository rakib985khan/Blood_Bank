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

  if($_SESSION['donorstatus']=="")
  {
  	header("location:../login.php");
  }
  ?>
  <?php include('function.php'); ?>
  <?php

  	$cn=mysqli_connect("localhost","root","","bloodbankcopy");
  			$s="select * from donarregistration where email='" . $_SESSION["email"] . "'";

  	$q=mysqli_query($cn,$s);
  	$r=mysqli_num_rows($q);

  	$data=mysqli_fetch_array($q);
  	$name=$data[1];
  	$gender=$data[2];
  	$age=$data[3];
  	$mobile=$data[4];
  	$pic=$data[8];
  	//echo $name;
  	mysqli_close($cn);






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
      <ul class="nav" align="center">
        <li><a href="donorprofile.php">Home</a></li>
        <li><a href="#">Update Profile</a></li>
        <li><a href="#">Contact Us</a></li>
          <li><a href="logout.php">log Out</a></li>

</div>
<div>

  <div style="height:400px; width:700px; margin:auto; margin-top:50px; margin-bottom:50px; background-color:#f8f1e4; border:2px solid red; box-shadow:4px 1px 20px black;">
   <form method="post">

      <table cellpadding="0" cellspacing="0" width="600px"  class="tableborder" style="margin:auto">

      <tr>
        <td style="padding-bottom:40px" colspan="2" align="center"><h1 style="font-size:30px;">Update Your Profile</h1>
        </td>
      </tr>

       <tr>
         <td colspan="2">&nbsp;
         </td>
       </tr>
       <table cellpadding="0" cellspacing="0" width="600px"  class="tableborder" style="margin:auto">
      <tr>
        <td  align="right">&nbsp;</td><td><img src="donor_image/<?php echo @$pic; ?>" style="padding-left:40px"  width="200px" height="200px"/>
      <input type="hidden" name="h1" value="<?php {echo @$pic;} ?>" />

      <td style="vertical-align:top" width="450px" height="400px">
                  <table cellpadding="0" cellspacing="0" width="450px">
     <td style="vertical-align:top; padding-left:70px" width="500px">
     <table cellpadding="0" cellspacing="0" width="450px" align="center" >
      <tr>
        <td class="lefttd"  style="vertical-align:middle"> Name </td>
        <td>
          <input type="text" name="t1" value="<?php echo @$name;  ?>"  required="required" pattern="[a-zA-Z _]{5,15}" title="please enter only character  between 5 to 15 for  name" />
        </td>
      </tr>
           <tr>
             <td>&nbsp;
             </td>
             <td>&nbsp;
             </td>
           </tr>
  <tr>
    <td class="lefttd">Gender
    </td>
    <td>
      <input name="r1" type="radio" value="male"  <?php if($gender=="male"){ echo "checked" ;}  ?>>Male<input name="r1" checked="checked" type="radio" value="female" <?php if($gender=="female"){ echo "checked" ;}  ?> />Female</td></tr>
           <tr>
             <td>&nbsp;
             </td>
             <td>
               &nbsp;
             </td>
           </tr>
          <tr>
            <td class="lefttd"  style="vertical-align:middle"> Age
            </td>
            <td>
              <input type="text" name="t2"  required="required" pattern="[0-9]{2,2}" title="please enter only numbers  between 2 to 2 for age" value="<?php echo @$age;?>" /></td></tr>
           <tr>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
           </tr>
            <tr>
              <td class="lefttd"  style="vertical-align:middle"> Mobile No</td><td><input type="text" name="t3" value="<?php echo @$mobile;?>"  pattern="[0-9]{10,12}" title="please enter only numbers between 10 to 12 for mobile no." /></td></tr>
           <tr>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
           </tr>

  		<tr>
        <td>&nbsp;</td>
        <td><input type="submit" value="Update" name="sbmt" style="border:0px; background:linear-gradient(#900,#D50000); width:100px; height:30px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:14px; text-shadow:1px 1px 6px black; "></td></tr>

          <tr>
            <td colspan="2"  align="center">

            </td>
          </tr>

  		</table>
    </table>
  </td>
</tr>
	</table>
</form>
  	</div>



    <?php

  	if(isset($_POST["sbmt"]))
  	{
  		$cn=makeconnection();


  					$s="update donarregistration set name='" .$_POST["t1"]. "' ,gender='" .$_POST["r1"]."' , age='" .$_POST["t2"]. "',mobile='" .$_POST["t3"]. "' where email='" .$_SESSION["email"]. "'";

  $i=mysqli_query($cn,$s);
  	mysqli_close($cn);
  	echo "<script>alert('Record update');</script>";

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
