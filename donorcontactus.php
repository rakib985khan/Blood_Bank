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
      <ul class="nav" align="center">
        <li><a href="donorprofile.php">Home</a></li>
        <li><a href="updateprofile.php">Update Profile</a></li>
        <li><a href="#">Contact Us</a></li>
          <li><a href="logout.php">log Out</a></li>

</div>
<div>


  <div style="height:500px; width:551px; margin:auto; margin-top:42px; margin-bottom:10px; background-color:#f8f1e4; border:2px solid red; box-shadow:4px 1px 20px black;">



    <div   class="col span_2_of_3">
       <div class="contact-form" style="padding-left:100px;">
              <img src="images/contact.png" align="center" />

      <table  cellspacing="0" cellpadding="0"  width="500px" height="300px">

  <tr>
    <td class="lefttd"  style="vertical-align:middle"> Name:</td>
    <td><input type="text" name="t1"  required="required" pattern="[a-zA-Z _]{2,15}" title="please enter only character  between 2 to 15 for donor name" /></td>
  </tr>



  <tr>
    <td class="lefttd"  style="vertical-align:middle">E-Mail</td>
    <td><input type="email" name="t2" required="required" /></td>
  </tr>
  <tr>
    <td class="lefttd"  style="vertical-align:middle">Mobile No</td>
    <td><input type="number" name="t3"   pattern="[0-9]{10,12}" title="please enter only numbers between 10 to 12 for mobile no." /></td>
  </tr>

  <tr>
    <td class="lefttd"  style="vertical-align:middle">Description</td>
    <td><textarea name="t4"></textarea></td>
  </tr>

  <tr>
    <!--&nbsp is non-breaking space-->
    <td>&nbsp;</td>
    <td><input type="submit" value="Send Us" name="sbmt"></td>
  </tr>
</table>

  </div>
  </div>
  </form>
          </div>

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
