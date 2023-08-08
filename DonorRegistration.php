
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
      </ul>
    </div>



    <div style="height:530px; width:700px; margin:auto; margin-top:10px; margin-bottom:10px; background-color:#f8f1e4; border:2px solid red; box-shadow:4px 1px 20px black;">
     <form method="post" enctype="multipart/form-data">
<table cellpadding="0" cellspacing="0" style="margin:auto; width:100%; " >

    <tr><td colspan="2"  align="center"><img src="Images/donor.png" width="300px" height="80px"  /></td></tr>

<tr><td colspan="2">&nbsp;</td></tr>

                <tr><td  style=" padding-left:20px;" ><img src="Images/sidebanner.jpg" width="170px" class="shaddoww"/>&nbsp; </td>
                    <td style="vertical-align:top;padding-top:20px;">
                    <table cellpadding="0" cellspacing="0" style="width:100%; height:400px;">

<tr><td class="lefttd">Donor Name:</td><td><input type="text" name="t1" required="required" pattern="[a-zA-Z _]{4,15}" title="please enter only character  between 4 to 15 for donor name" /></td></tr>

<tr><td class="lefttd">Gender</td><td><input name="r1" type="radio" value="male" checked="checked">Male<input name="r1" type="radio" value="female" >Female</td></tr>

<tr><td class="lefttd">Age</td><td><input type="number" name="t2" required="required" pattern="[0-9]{2,2}" title="please enter only  numbers between 2 to 2 for age" /></td></tr>
<tr><td class="lefttd">Mobile No</td><td><input type="number" name="t3" required="required" pattern="[0-9]{10,11}" title="please enter only numbers between 10 to 11 for mobile no." /></td></tr>
<tr><td class="lefttd"> Blood Group </td><td>
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


  </select>



</td></tr>
<tr><td class="lefttd">E-Mail</td><td><input type="email" name="t5" required="required" /></td></tr>

<tr><td class="lefttd">Password</td><td><input type="password" name="t6" required="required" pattern="[a-zA-Z0-9]{2,10}" title="please enter only character or numbers between 2 to 10 for password" /></td></tr>
<tr><td class="lefttd">Confirm Password</td><td><input type="password" name="t7" required="required" pattern="[a-zA-Z0-9 ]{2,10}" title="please enter only character or numbers between 2 to 10 for password" /></td></tr>

<tr><td class="lefttd">Uplode Pic</td><td><input type="file" name="t8" /></td></tr>
<tr><td>&nbsp;</td><td><input type="submit" value="Resitred" name="sbmt" style="border:0px; background:linear-gradient(#900,#D50000); width:100px; height:30px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:14px; text-shadow:1px 1px 6px black; "></td></tr></table>
</td></tr>
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
            <?php
if(isset($_POST["sbmt"]))
{
$target_dir = "donor_image/";
$target_file = $target_dir . basename($_FILES["t8"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image

    $check = getimagesize($_FILES["t8"]["tmp_name"]);
    if($check !== false) {
      //  echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
//aloow certain file formats
	if($imageFileType != "jpg" && $imageFileType !="png" && $imageFileType !="jpeg" && $imageFileType !="gif"){
		echo "sorry, only jpg, jpeg, Png & gif files are allowed.";
		$uploadok=0;
	}else{
		if(move_uploaded_file($_FILES["t8"]["tmp_name"], $target_file)){
		$cn=$link;
			$s="insert into donarregistration(name,gender,age,mobile,bloodgroup,email,pwd,pic) values('" . $_POST["t1"] ."','" . $_POST["r1"] . "','" . $_POST["t2"] . "','" . $_POST["t3"] . "','" . $_POST["t4"] . "','" . $_POST["t5"] . "','" . $_POST["t6"] .  "','" . basename($_FILES["t8"]["name"])  ."')";

			//$s="INSERT INTO donarregistration(name,gender,age,mobile,b_id,email,pswd,pic) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9])"
	mysqli_query($cn,$s);
	mysqli_close($cn);
	if($s>0)
	{
	echo "<script>alert('Record Save,wait for admin approval');</script>";
	}
	else
	{echo "<script>alert('Record save,wait for admin approval');</script>";
	}
		} else{
			echo "sorry there was an error uploading your file.";
		}

	}
}
?>

          </body>
          </html>
