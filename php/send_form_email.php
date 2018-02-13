<?php
    if (isset($_POST['submit']))
    {
        $to = 'service@sonraisystems.com';
        $from = $_POST['contact_email'];
        $subject = $_POST['subject'];
        $body = $_POST['comments_body'];
        $headers = array (
          'From'=> $from,
          'To' => $to,
          'Subject' => $subject
        );

        $smtp = Mail::factory('smtp', array(
          'host' => 'us2.smtp.mailhostbox.com',
          'port' => '25',
          'auth' => true,
          'username' => 'sonraialert@corporate-data.com',
          'password' => '"@VaNLOf2'
        ));

        // $message .= 'Name: ' . $_POST['first_name'] . " " . $_POST['last_name'] . "\n";
        // $message .= 'Email: ' . $_POST['contact_email'] . "\n";
        // $message .= 'Subject: ' . $_POST['subject_header'] . "\n";
        // $message .= 'Message: '. $_POST['comments_body'];

        $mail = $smtp->send($to, $headers, $body);

        // $success = mail($to, $subject, $message, $headers, '-fAlec.Zorn@sonraisystems.com');
    }
?>

<!DOCTYPE html>
<!--
Template Name: Hoppler
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>ACES | Pages | Installation</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>

<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('images/img/header-img.jpg'); background-position: -100%;"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1><a href="../index.html">ACES</a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li><a href="../index.html">Home</a></li>
          <li><a class="drop" href="#">Services</a>
            <ul>
              <li><a href="../installation.html">Installation</a></li>
              <li><a href="../repair.html">Repair</a></li>
              <li><a href="../prevMaint.html">Preventative Maintenance</a></li>
            </ul>
          </li>
          <li><a class="drop" href="#">Equipment</a>
            <ul>
              <li><a href="../balingWire.html">Baling Wire</a></li>
              <li><a href="../odorGran.html">Odor Granules</a></li>
              <li><a href="../keySwitches.html">Key Switches</a></li>
            </ul>
          </li>
          <li><a href="../about.html">About</a></li>
          <li class="active"><a href="../contact.html">Contact</a></li>
        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </header>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <section id="breadcrumb" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <h6 class="heading">Contact Us</h6>
    <!-- ################################################################################################ -->
  </section>
  <!-- ################################################################################################ -->
</div>
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="sidebar one_quarter first"> 
      <!-- ################################################################################################ -->
      <h6>Quick Links</h6>
      <nav class="sdb_holder">
        <ul>
          <li><a href="../installation.html">Installation</a></li>
          <li><a href="../repair.html">Repair</a></li>
          <li><a href="../prevMaint.html">Preventative Maintenance</a></li>
          <li><a href="../balingWire.html">Baling Wire</a></li>
          <li><a href="../odorGran.html">Odor Granules</a></li>
          <li><a href="../keySwitches.html">Key Switches</a></li>
        </ul>
      </nav>
      <div class="sdb_holder">
        <h6>Contact Us:</h6>
        <address>
        25W102 Ramm Dr.<br>
        Naperville, IL 60564<br>
        <br>
        Tel: (877)705-7667<br>
        Email: <a href="mailto:service@aceseq.com">service@aceseq.com</a>
        </address>
      </div>
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="content three_quarter"> 
      <!-- ################################################################################################ -->
      <?php if (PEAR::isError($mail)) { ?>
        <h1>Oops!</h1>
        <h3>Sorry, there was a problem sending your message, please try again!</h3>
      <?php } else { ?>
        <h1>Thank you!</h1>
        <h3>Your message has been sent, we will get back to you within 1 business day.</h3>
      <?php } ?>

      <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 8
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC-QBPkxO3PftP62Q1Bs0zDdHANhIckztQ&callback=initMap"
    async defer></script>
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>


<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="one_half first">
      <h6 class="heading">About Us</h6>
      <p>We work hard to deliver great customer service and excellent response times!</p>
      <p>Call us today to order your key switches, bale wire, or odor granules.</p>
    </div>
    <div class="one_half">
      <h6 class="heading">Links</h6>
      <nav>
        <ul class="nospace">
          <li><a href="index.html"><i class="fa fa-lg fa-home"></i></a></li>
          <li><a href="installation.html">Services</a></li>
          <li><a href="balingWire.html">Equipment</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
      </nav>
      <ul class="faico clear">
        
      </ul>
    </div>
    
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p style="text-align:center;">Copyright &copy; 2017 - All Rights Reserved - <a href="#">ACES</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>