<?php if(!isset($_SESSION)) { session_start(); } ?>
<?php
include('adfig.php');
error_reporting(0);
if(isset($_REQUEST['del']))
	{
$delid=intval($_GET['del']);
$sql = "delete from donarregistration  WHERE  donar_id=:delid";
$query = $dbh->prepare($sql);
$query -> bindParam(':delid',$delid, PDO::PARAM_STR);
$query -> execute();

}
if(isset($_REQUEST['eid']))
	{
$eid=intval($_GET['eid']);
$status=1;
$sql = "UPDATE donarregistration SET status=:status WHERE  donar_id=:eid";
$query = $dbh->prepare($sql);
$query -> bindParam(':status',$status, PDO::PARAM_STR);
$query-> bindParam(':eid',$eid, PDO::PARAM_STR);
$query -> execute();


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Blood Bank</title>

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link href="css/lightbox.css" rel="stylesheet" />
  <link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all" />
  <link rel="stylesheet" href="themes/default/default.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="themes/light/light.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="themes/dark/dark.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="themes/bar/bar.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />


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
      <input type="text" style="height:36px;" class="searchTerm" placeholder="What are you looking for?">
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
      <ul style="width:1138px" class="nav" >
        <li><a href="index.php">Page Preview</a></li>

        <li><a href="viewblooddonor.php">Blood Donor</a></li>
        <li><a href="deleteuser.php">Remove Blood Donor</a></li>
        <li><a href="viewrequest.php">View Request</a></li>
        <li><a href="logout.php">log Out</a></li>
<li><a href="updatenews.php">Update News</a></li>
        <li><a href="contactmsg.php">Contact Message</a></li>
        <li><a href="notification.php">Notifications</a></li>


</div>
</div>

<div class="content-wrapper">
      <div class="container-fluid">

        <div class="row">
          <div class="col-md-12">

            <h2 class="page-title">Donor List</h2>


            <div >

              <div>

                <table  style="border:1px solid black"  border=1 cellspacing="0" width="100%">
                  <thead>
                    <tr style="border-bottom:1px solid black; font-weight:bold;">
                    <th>Serial</th>
                      <th>Name</th>
                      <th>Gender</th>
                      <th>Age</th>
                      <th>Mobile</th>
                      <th>bloodgroup</th>
                      <th>Email</th>
                      <th>Approval</th>
                        <th>Delete</th>
                    </tr>
                  </thead>

                  <tbody id="myTable">

                  <?php $sql = "SELECT * from  donarregistration order by donar_id desc";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{				?>
                    <tr style="border-bottom:1px solid black">
                      <td><?php echo htmlentities($cnt);?></td>
                      <td><?php echo htmlentities($result->name);?></td>
                      <td><?php echo htmlentities($result->gender);?></td>
                      <td><?php echo htmlentities($result->age);?></td>
                      <td><?php echo htmlentities($result->mobile);?></td>
                      <td><?php echo htmlentities($result->bloodgroup);?></td>
                      <td><?php echo htmlentities($result->email);?></td>
                      <?php if($result->status==1)
{
?><td style="color:green;font-weight:bold">APPROVED</td>
<?php } else {?>

<td><a style="color:red" href="notification.php?eid=<?php echo $result->donar_id;?>" onclick="return confirm('Do you want to approve');" >Approve</a>
</td>
<?php } ?>
                      <td><a href="notification.php?del=<?php echo $result->donar_id;?>" onclick="return confirm('Do you want to delete');" >Delete</a></td>
                    </tr>
                    <?php $cnt=$cnt+1; }} ?>

                  </tbody>
                </table>



              </div>
            </div>



          </div>
        </div>

      </div>
    </div>


            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
          <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
          <script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
            <script type="text/javascript">
            $(window).load(function() {
                $('#slider').nivoSlider();
            });
            </script>
          </body>
          </html>
