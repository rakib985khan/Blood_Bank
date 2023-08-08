<?php if(!isset($_SESSION)) { session_start(); } ?>
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




</div>
<div style="height:450px; width:700px; margin:auto; margin-top:10px; margin-bottom:10px; background-color:#f8f1e4; border:2px solid red; box-shadow:4px 1px 20px black;">
     <form method="post" enctype="multipart/form-data">

   <table cellpadding="0" cellspacing="0" width="600px" height="300px" class="tableborder" style="margin:auto; margin-top:100px;" >
     <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
    <tr><td colspan="2" align="center"><h1 style="font-size:30px;">Admin Log In</h1></td></tr>

     <tr><td colspan="2">&nbsp;</td></tr>  <tr><td colspan="2">&nbsp;</td></tr>
                <tr><td align="right"><img src="Images/login1.png" width="200px" height="150px" /></td>
                    <td style="vertical-align:top"><table cellpadding="0" cellspacing="0" height="200px">


<tr><td class="lefttd">User Name</td><td><input type="text" name="t1" /></td></tr>
<tr><td class="lefttd">Password</td><td><input type="password"name="t2" /></td></tr>


<tr><td>&nbsp;</td><td><input type="submit" value="Log In" name="sbmt" style="border:0px; background:linear-gradient(#900,#D50000); width:100px; height:30px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:14px; text-shadow:1px 1px 6px black; "></td></tr>

                        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>

</table>
</td></tr></table>



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
            $_SESSION['loginstatus']="";
            if(isset($_POST["sbmt"]))
            {

            	$cn=makeconnection();

            			$s="select *from admin where username='" . $_POST["t1"] . "' and pwd='" .$_POST["t2"] . "'";

            	$q=mysqli_query($cn,$s);
            	$r=mysqli_num_rows($q);
            	$data=mysqli_fetch_array($q);


            	mysqli_close($cn);
            	if($r>0)
            	{
            		$_SESSION["username"]=$_POST["t1"];
            		$_SESSION["usertype"]=$data[2];
            		$_SESSION['loginstatus']="yes";

            header("location:Admin.php");
            	}
            	else
            	{
            		echo "<script>alert('Invalid User Name Or Password');</script>";
            	}

            		}


            ?>
          </body>
          </html>
