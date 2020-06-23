<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="robots" content="noindex,nofollow" />
   <link rel="stylesheet" href="css/big.css" />
   <meta name="viewport" content="width=device-width, initial-scale=1">
    
   <title>BIG</title>

   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="nav.css">
</head>
<body>
    <header>
    <h1>Luke Edstrom: WEB110 Portal Website</h1>
    <div id="cssmenu">
      <ul>
         <li><a href="../index.html"><i class="fa fa-fw fa-institution"></i> WEB110</a></li>
         <li><a href="index.html"><i class="fa fa-fw fa-home"></i> BIG Website</a></li>
          <li><a href="#"><i class="fa fa-fw fa-bars"></i> Research Topics</a>
            <!--drop down menu for research topic pages-->
            <ul>
                <li><a href="smo.html"> SMO</a></li>
                <li><a href="accessibility.html"> Accessibility</a></li>
                <li><a href="forms.html">Forms</a></li>
            </ul>
          
          </li>
         
         <li><a href="gallery.html"><i class="fa fa-fw fa-camera-retro"></i> Lightbox II Gallery</a></li>
         <li><a href="#"><i class="fa fa-fw fa-bars"></i> Google Tools</a>
            <ul>
               <li><a href="seo.html"><i class="fa fa-fw fa-desktop"></i> SEO</a></li>
               <li><a href="calendar.html"><i class="fa fa-fw fa-calendar"></i> Calendar</a></li>
               <li><a href="map.html"><i class="fa fa-fw fa-map-o"></i> Map</a></li>
            </ul>
         </li>
         <li><a href="contact.php"><i class="fa fa-fw fa-server"></i> Contact Me</a></li>
      </ul>
    </div>
    </header>
 <!-- Start left column -->
    <main class="wrapper">
       
           <h2 class="subheader">Contact Luke</h2>
           <?php
            /*
             * Below are 2 different forms to be re-used       
             * 
             * Only use one at a time, comment out the other!       
             *
             */

            include 'includes/contact_include.php'; #site keys & code here

            $toAddress = "fitzgerald.quinn.2018@gmail.com";  //place your/your client's email address here
            $toName = "Luke Edstrom"; //place your client's name here
            $website = "web110 Contact Form";  //place NAME of your client's website

            //echo loadContact('simple.php');#demonstrates a simple contact form
            echo loadContact('multiple.php');#demonstrates multiple form elements

        ?>     
        <footer>
          <p><small>&copy; 2020 by <a href="contact.php">Contact Luke Edstrom</a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
        </footer>
    </main>
     
  <!-- Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon -->
     
  <script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }   
  </script>

</body>
</html>
