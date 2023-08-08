
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
<style>
.accordion {
  background-color: #eee;
  color: black;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.active, .accordion:hover {
  background-color: #DE0D26;
}

.accordion:after {
  content: '\002B';
  color: black;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.active:after {
  content: "\2212";
}

.panel {
  padding: 0 18px;
  background-color: white;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}

.searchTerm {
    width: 100%;
    border: 3px solid black;
    border-right: none;
    padding: 5px;
    height: 35px;
    border-radius: 5px 0 0 5px;
    outline: none;
    color: #9DBFAF;
  }
</style>
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
      <ul class="nav" align="" >
        <li class=""></li>
        <li ><a  href="index.php">Home</a></li>
        <li><a href="DonorRegistration.php">Donor Registration</a></li>
        <li><a href="BloodDonor.php">Blood Donor</a></li>
        <li><a href="RequestforBlood.php">Request for Blood</a></li>
        <li><a href="logIn.php">log In</a></li>
        <li><a href="adminlogin.php">Admin</a></li>
        <li><a href="contactus.php">Contact Us</a></li>

      </ul>
    </div>
      <div class=a_bg>

    <div>

      <div class="h_btm_bg">
        <div class="wrap">
          <div class="h_btm">
            <div class="header-para">
              <div class="">
                <marquee direction="left" scrolldelay="10">
                <h1 align="center" style="font-size:54px">welcome to our saver world</h1>
              </marquee>
              </div>


              <p>Blood is universally recognized as the most precious element that sustains life. It saves innumerable lives across the world in a variety of conditions. The need for blood is great - on any given day, approximately 39,000 units of Red Blood Cells are needed. More than 29 million units of blood components are transfused every year.
                Donate Blood
                Despite the increase in the number of donors, blood remains in short supply during emergencies, mainly attributed to the lack of information and accessibility.

                We positively believe this tool can overcome most of these challenges by effectively connecting the blood donors with the blood recipients.</p>
              </div>

              <div class="clear"></div>
            </div>
          </div>
        </div>
        <div class="s_bg">
          <div class="wrap">
            <div class="main_cont">
              <section class="slider">
                <div id="slider_wrapper">
				 <div class="slider-wrapper theme-bar">
					<div id="slider" class="nivoSlider">
						<img src="images/pic1.png" alt="images" />
						<img src="images/pic2.jpg" alt="" />
						<img src="images/pic3.jpg" alt="" />
            	<img src="images/pic4.jpg" alt="" />
              	<img src="images/pic5.png" alt="" />
					</div>
				 </div>
			</div>
              </section>
              <div class="ribben">
                <div class="l-triangle-top"></div>
                <div class="l-triangle-bottom"></div>
                <div class="rectangle"></div>
                <div class="r-triangle-top"></div>
                <div class="r-triangle-bottom"></div>
                <div class="clear"></div>
              </div>


              <div class="main">
                <div class="content">
                  <h4>Blood bank:</h4>
                  <p>We welcome you to in our WebSite. If you are a donor , We appreciate you <a href="index1.php">signing up</a> online as a Donor. If you need blood we are happy to serve you. This blood donor list is hosted by <a href="index.php">www.lifesaver.com</a> on behalf of "Life Saver Blood Bank"
                    as a public service without any profit motive.This is a free service. While the Organisers have taken all steps to obtain accurate and up-to-date information of potential blood donors,
                    the Organisers and ICM Computers do not guarantee accuracy of the information contained herein or the suitability of the persons listed as any liability for direct or consequential damage to any person using this blood donor list including
                    loss of life or damage due to infection of any nature arising out of blood transfusion from persons whose names have been listed in this website.
                    We request donors to update contact details regularly.</br>
                    Blood banking refers to the process of collecting, separating, and storing blood. The first U.S. blood bank was established in 1936. Today, blood banks collect blood and separate it into its various components so they can be used most effectively according to the needs of the patient. Red blood cells carry oxygen, platelets help the blood clot, and plasma has specific proteins that allow proper regulation of coagulation and healing. Although research has yielded drugs that help people's bone marrow produce new blood cells more rapidly, the body's response time can still take weeks, thus donated blood remains an important and more immediate life-saving resource.

                    Blood is the vital connection to having a healthy body, and according to the American Red Cross, nearly 5 million people receive blood transfusions each year. Thanks to years of research, much progress has been made towards making transfusions safer and more effective.
                  </p>
                  </div>
                  <div style="border-left:1px solid pink; height:600px;" class="sidebar">
                    <h2>Latest News</h2>
                    <div class="blog_posts">


                        <table >

                            <tr>
                              <td>
                                <?php


$cn=mysqli_connect("localhost","root","","bloodbankcopy");
$s="select * from news order by news_id DESC LIMIT 1";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;
while($data=mysqli_fetch_array($result))
{
      echo"<tr><td  style='font-weight:bold; padding-left:50px'>$data[1]</td></tr>";
      echo"<tr><td  style=' padding-left:10px'>$data[2]</td></tr>";
    }
    mysqli_close($cn);
    ?>
                              </td>
                            </tr>

                          </table>



                          <div class="clear"></div>
                        </div>


                      </div>
                      <div class="clear"></div>
                    </div>
                  </div>
                </div>
              </div>

            </div>

            <div class="clear"></div>
             <div id="map"></div>

             <div class="clear"></div>
             <div class="accord">

<h2>Blood Tips</h2>

  <button class="accordion">Beat the Myth</button>
  <div class="panel">
    <p>Donating blood is safe and simple. It takes approximately 10-15 minutes to complete the blood donation process. Any healthy adult between 18 years and 60 years of age can donate blood. This is what you can expect when you are ready to donate blood:

You walk into a reputed and safe blood donation centre or a mobile camp organized by a reputed institution.
A few questions will be asked to determine your health status (general questions on health, donation history etc). Usually you will be asked to fill out a short form.
Then a quick physical check will be done to check temperature, blood pressure, pulse and hemoglobin content in blood to ensure you are a healthy donor.
If found fit to donate, then you will be asked to lie down on a resting chair or a bed. Your arm will be thoroughly cleaned. Then using sterile equipments blood will be collected in a special plastic bag. Approximately 350 ml of blood will be collected in one donation. Those who weigh more than 60 Kg can donate 450 ml of blood.
Then you must rest and relax for a few minutes with a light snack and something refreshing to drink. Some snacks and juice will be provided.
Blood will be separated into components within eight hours of donation
The blood will then be taken to the laboratory for testing.
Once found safe, it will be kept in special storage and released when required.
The blood is now ready to be taken to the hospital, to save lives.</p>
  </div>

  <button class="accordion">Blood Groups</button>
  <div class="panel">
    <p>Blood type is determined by which antibodies and antigens the person's blood produces. An individual has two types of blood groups namely ABO-grouping and Rh-grouping. Rh is called as t
      he Rhesus factor that has come to us from Rhesus monkeys.</br>
      Most humans are in the ABO blood group. The ABO group has four categories namely</br>
      1) A group 2) B group 3) O group and 4) AB group</br>
      In the Rh- group, either the individual is said to be Rh- Negative or Rh- Positive.</br>
      Thus blood group of any human being will mainly fall in any one of the following groups.</br>
A positive or A negative</br>
B positive or B negative</br>
O positive or O negative</br>
AB positive or AB negative.</br>
    </p>
  </div>

  <button class="accordion">Universal Donor And Recipients</button>
  <div class="panel">
    <p>The most common blood type is O, followed by type A.</br></br>

Type O individuals are often called "universal donors" since their blood can
be transfused into persons with any blood type.
Those with type AB blood are called "universal recipients" because they can
 receive blood of any type.</br></br>

However, since approximately twice as many people in the general population have O and A blood types, a blood bank's need for this type of blood increases exponentially.</p>
  </div>

  <button class="accordion">DO donate blood,only if you satisfy all pf the following conditions</button>
  <div class="panel">
    <p>
      <ul  style="list-style-type:square;">
  <li>You are between age group of 18-60 years.</li>
  <li>Your weight is 45 kgs or more.</li>
  <li>Your hemoglobin is 12.5 gm% minimum.</li>
  <li>Your last blood donation was 3 or more months earlier.</li>
  <li>You are healthy and have not suffered from malaria, typhoid or other transmissible disease in the recent past.
</li>
</ul>
    </p>
  </div>

  <button class="accordion">DO NOT donate blood,if you have any of the following conditions</button>
  <div class="panel">
    <p>
      <ul style="list-style-type:circle;">
  <li>Cold / fever in the past 1 week.</li>
  <li>Under treatment with antibiotics or any other medication.</li>
  <li>Cardiac problems, hypertension, epilepsy, diabetes (on insulin therapy), history of cancer, chronic kidney or liver disease, bleeding tendencies, venereal disease etc.</li>
  <li>Major surgery in the last 6 months.</li>
  <li>Vaccination in the last 24 hours.</li>
  <li>Had a miscarriage in the last 6 months or have been pregnant / lactating in the last one year.</li>
  <li>Had fainting attacks during last donation.</li>
  <li>Have regularly received treatment with blood products.</li>
  <li>Shared a needle to inject drugs/ have history of drug addiction.</li>
  <li>Had sexual relations with different partners or with a high risk individual.</li>
  <li>Been tested positive for antibodies to HIV.</li>
</ul>
    </p>
  </div>

  <button class="accordion">A Healthy Donor</button>
  <div class="panel">
    <p>A healthy diet helps ensure a successful blood donation, and also makes you feel better! Check out the following recommended foods to eat prior to your donation.</p>
    <ul style="list-style-type:circle;">
      <li>Low fat foods</li>
      <li>Iron rich foods</li>
    </ul>
  </div>

  <button class="accordion">Blood Bank</button>
  <div class="panel">
    <p>
      A blood bank is a place designed especially for the storage of blood and blood products. Large coolers hold these products at a constant temperature and they are available at a moment's notice.
    </p>
  </div>

  <button class="accordion">About Blood Donation</button>
  <div class="panel">
    <p>
      Donating blood is a life saving measure especially when you have a rare blood type. Blood donation is safe and simple. It takes only about 10 minutes to donate blood - less than the time of an average telephone call. We can save upto 3 to 4 precious lives by donating blood.
    </p>
  </div>

  <button class="accordion">World Blood Donor Day</button>
  <div class="panel">
    <p>
      The day is celebrated to raise awareness globally about the need for regular and voluntary blood donation.
    </p>
  </div>



</div>
           </div>


            <div class="ftr-bg">

              <div class="wrap">

                <div class="footer">


                  <div class="copy">
                    <p class="title">© All Rights Reserved </p>
                  </div>
                  <div class="clear"></div>
                </div>
              </div>
            </div>
            <script src="js/jquery-1.11.0.min.js"></script>
	<script src="js/lightbox.min.js"></script>
<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="js/jquery.flexslider.js" type="text/javascript"></script>

 <script type="text/javascript">
     $(function () {
         SyntaxHighlighter.all();
     });
     $(window).load(function () {
         $('.flexslider').flexslider({
             animation: "slide",
             animationLoop: false,
             itemWidth: 210,
             itemMargin: 5,
             minItems: 2,
             maxItems: 4,
             start: function (slider) {
                 $('body').removeClass('loading');
             }
         });
     });
  </script>
  <script>
      function initMap() {
        var uluru = {lat: 23.2423, lng: 90.4348};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 11,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src=
"https://maps.googleapis.com/maps/api/js?key=
AIzaSyB2bXKNDezDf6YNVc-SauobynNHPo4RJb8&callback=initMap">
    </script>
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
    <script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
}
</script>

          </body>
          </html>
