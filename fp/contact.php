<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="robots" content="noindex,nofollow" />
   <link rel="stylesheet" href="css/final.css" />
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <a href="index.html"><img class="logo" src="images/Luke%20Edstrom%20Music.png"  alt="Text that says Luke Edstrom Music with a cartoon guitar" /> </a>
    
   <title>Contact</title>

   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="css/nav.css">
</head>
<body>
    <header>
    <h1><a href="http://web-students.net/site144/web110/fp/index.html">Luke Edstrom Music: WEB110 </a></h1>
    <div id="cssmenu">
      <ul>
         <li><a href="index.html">Home</a></li>
         <li><a href="music.html">Music</a></li>
          <li><a href="about.html"> About</a></li>
          <li><a href="contact.php">Contact</a></li>
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
          <p><small>&copy; 2020 by <a href="contact.php">Contact Quinn Fitzgerald</a>, All Rights Reserved ~<a href="disclaimer.html">Disclaimer</a> ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
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
