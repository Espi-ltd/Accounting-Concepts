<?php
if (isset($_POST["submit"])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $human = intval($_POST['human']);
  $from = 'Demo Contact Form';
  $to = 'grandmaster03@gmail.com';
  $subject = 'Message from Contact Demo ';

  $body = "From: $name\n E-Mail: $email\n Message:\n $message";
  // Check if name has been entered
  if (!$_POST['name']) {
    $errName = 'Please enter your name';
  }

  // Check if email has been entered and is valid
  if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errEmail = 'Please enter a valid email address';
  }

  //Check if message has been entered
  if (!$_POST['message']) {
    $errMessage = 'Please enter your message';
  }
  
  
   if (!$_POST['message']) {
    $errMessage = 'Please enter your message';
  }
//  //Check if simple anti-bot test is correct
//  if ($human !== 5) {
//    $errHuman = 'Your anti-spam is incorrect';
//    && !$errHuman
//    
//  }
// If there are no errors, send the email
  if (!$errName && !$errEmail && !$errMessage) {
    if (mail($to, $subject, $body, $from)) {
      $result = '<div class="alert alert-success">Thank You! We will be in touch.</div>';
    } else {
      $result = '<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
    }
  }
}
?>


<!DOCTYPE html>
<!--
-->
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accounting Concepts Inc.</title>
    <link href="https://fonts.googleapis.com/css?family=Heebo:100,300,400,500,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="style-accounting-concepts.css">
    <script src='https://www.google.com/recaptcha/api.js'></script>

  </head>
  <body>
    <!-- <div id="accountingconceptsinc"><h1 tabindex="1"> Accounting Concepts Inc.</h1> </div> -->

    <div id="info_wrapper">


      <div id="info">
        <h4 id="info-top"><a href="tel:+1-734-981-1746" id="info-phone">734-981-1746</a><span class="black-bullet"> &#9642; </span> 5880 N. Canton Center Rd. STE #485 Canton, MI 48187 <span class="orange-slash">&#92;</span><a href="http://davidewingcpa.com/cpacal" tabindex="7"> ADMIN LOGIN</a> <span class="orange-slash">&#92;</span></h4> <!-- <a href="#" tabindex="8"> CLIENT PORTAL</a> <span class="orange-slash">&#92;</span></h4> -->

        <nav class="navbar navbar-inverse navbar-static-top"  data-spy="affix">


          <div class="container-fluid">
            <img id="logo-768" class="img-fluid" src="images/logo-768.png" alt="accounting concepts logo 768" width="768">

            <!--                        <div class="row">
                                         <div class="col-xs-12 col-s-12 col-md-6">-->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <h4 id="address-1">5880 N. Canton Center Rd. STE #485 Canton, MI 48187 </h4> 
              <div id="call-today-2">
                <h3> <a href="tel:+1-734-981-1746">734-981-1746</a></h3>
              </div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li><a href="index.html">HOME</a></li>
                <li><a href="aboutus.html">ABOUT US</a></li>
                <li><a href="clientservices.html">CLIENT SERVICES</a></li>

                <li><a href="resources.html">RESOURCES</a></li>


                <li><a href="professionalpartners.html">PROFESSIONAL PARTNERS</a></li>
                <li role="separator" class="nav-divider"></li>
                <li><a href="http://davidewingcpa.com/cpacal">ADMIN LOG-IN</a></li>
                <!--                                <li><a href="#">CLIENT PORTAL</a></li>-->

                <li role="separator" class="nav-divider"></li>
                <li><a href="#contactinfo">CONTACT INFO</a></li>
                <li><a href="#message">MESSAGE</a></li>
                <li><a href="#location">LOCATION</a></li>


              </ul>
            </div>


            <!--                        <div>
                                </div>-->
          </div>
        </nav>

      </div>

    </div>
    <!--        <div id="line" class="container-fluid"></div>-->


    <div id="nav_wrapper" class="container-fluid">


      <nav id="nav_1" class="row">
        <img id="logo1" class="logo-small" src="images/ac-logo.gif" alt="accounting concepts logo" width="166" height="124" tabindex="1">

        <ul id="nav-large" class="col-s-12 col-md-12 col-lg-10">
          <li class="active"><a class="main-a" href="index.html" tabindex="2"> HOME </a></li>
          <li><a href="aboutus.html" tabindex="3"> ABOUT US </a></li>
          <li class="dropdown">
            <a href="clientservices.html" tabindex="4">CLIENT SERVICES <b class="caret"></b></a>
            <div class="dropdown-content">
              <a href="clientservices.html#individualservices">INDIVIDUALS</a>
              <a href="clientservices.html#businessservices">BUSINESSES</a>
            </div>
          <li class="dropdown">
            <a href="resources.html" tabindex="5">RESOURCES <b class="caret"></b></a>
            <div class="dropdown-content">
              <a href="resources.html#documents">DOCUMENTS</a>
              <a href="resources.html#onlineinfo">ONLINE TAX &amp; REFUND INFO </a>
            </div>
          </li>
          <li><a href="professionalpartners.html" tabindex="6"> PROFESSIONAL PARTNERS </a></li>

        </ul>
        <div id="call-today">
          <h4>Schedule an Appointment</h4>
          <h4> <a href="tel:+1-734-981-1746">734-981-1746</a></h4>
        </div>


        <img id="logo2" class="logo-small" src="images/ac-logo.gif" alt="accounting concepts logo" width="146" height="104" tabindex="1">

      </nav>

    </div>




    <div id="welcome-content" class="carousel-inner" role="img">
      <figure class="figure">
        <img src="images/welcome-accounting-concepts.png" id="welcome-ac" class="img-fluid" alt="image">
        <!-- <div id="img-inner" >s</div> -->
        <figcaption class="caption">

          <div class="horizontal-short"></div>
          <div class="horizontal-long1"></div>


          <h2 id="welcome-caption"> <span class="orange-welcome" tabindex="9"> Welcome</span> <span class="white-big1">to Accounting Concepts Inc., our firm in Canton has proudly served Southeast Michigan for the past 25 years.</span></h2>
          <div class="horizontal-long2"></div>

        </figcaption>

      </figure>

    </div>
    <!--                        <div class="box"><img src="images/box.jpg" alt="box" height="692"/></div>-->



    <div id="main_wrapper" class="container-fluid">

      <main class="container-fluid">

        <section id="caption2" class="row">

          <div class="col-xs-12 col-s-12 col-md-12">
            <div class="horizontal-short"></div>
            <div class="horizontal-long1"></div>


            <h2> <span class="orange-welcome" tabindex="9"> Welcome to Accounting Concepts Inc.</span></h2> <h2> <span class="white-big1"> Our firm in Canton has proudly served Southeast Michigan for the past 25 years.</span></h2>

            <h2><span class="welcome-xsmall">Welcome to Accounting Concepts Inc., our firm in Canton has proudly served Southeast Michigan for the past 25 years.</span></h2>
            <div class="horizontal-long2"></div>
          </div>

        </section>



        <section id="teasers" class="row">

          <div id="services-teaser" class="col-s-4 col-md-3 col-lg-1">


            <div class="vertical-tall-left-1"></div>
            <div class="vertical-short1"></div>
            <div class="vertical-tall-right-1"></div>
            <div id="services-content">

              <div id="services-icon"><img src="images/services-icon.png" alt="services-icon"/></div>

              <h2 class="sub-head"> Services We Offer </h2>
              <ul class="list-group">
                <li class="list-group-item-warning" tabindex="10"><a href="clientservices.html#individual"><h3>Individual Tax Preparation</h3></a></li>
                <li class="list-group-item-default" tabindex="11"><a href="clientservices.html#individual"><h3>Tax Consulting and Planning</h3></a></li>
                <li class="list-group-item-warning" tabindex="12"><a href="clientservices.html#businessservices"><h3>Management Consulting</h3></a></li>
                <li class="list-group-item-default" tabindex="13"><a href="clientservices.html#businessservices"><h3>Business Start Up Services</h3></a></li>
                <li class="list-group-item-warning" tabindex="14"><a href="clientservices.html#businessservices"><h3>Payroll Services</h3></a></li>

                <li> <a href="clientservices.html" class="cta-button" role="button"> SEE ALL SERVICES</a></li>

              </ul>
            </div>

          </div>

          <div id="resources-teaser" class="col-s-4 col-md-1 col-lg-1">
            <div class="vertical-tall-left-2"></div>
            <div class="vertical-short2"></div>
            <div class="vertical-tall-right-2"></div>

            <div id="resources-content" >
              <div id="resources-icon"><img src="images/resources-icon.png" alt="resources-icon" height="49" width="98"/></div>

              <h2 class="sub-head"> Helpful Resources </h2>
              <ul class="list-group">
                <li id="checklist"><a href="resources.html#documents" tabindex="16"><h3>Tax Preparation Checklist</h3>
                    <div id="checklist-icon"> <img src="images/checklist-icon.png" alt="checklist-icon" height="63" width="61"> </div>
                    <p>This handy checklist will help prepare you for your upcoming appointment.</p>
                  </a>
                </li>
                <li class="horizontal-rule"></li>

                <li id="reading"><a href="resources.html#documents" tabindex="17"><h3 >Recommended Reading</h3>
                    <div id="reading-icon"> <img src="images/reading-icon.png" alt="reading-icon" height="66" width="70"> </div>

                    <p>Improve your financial intelligence with these suggested readings.</p>
                  </a>
                </li>

                <li id="resources-button"> <a href="resources.html" class="cta-button" role="button">SEE MORE RESOURCES</a></li>

              </ul>
            </div>


          </div>

          <div id="staff-teaser" class="col-s-4 col-md-1 col-lg-1">

            <div class="vertical-tall-left-3"></div>
            <div class="vertical-short3"></div>
            <div class="vertical-tall-right-3"></div>
            <div id="staff-content">
              <h2 class="sub-head"> David Ewing CPA </h2>
              <ul class="list-group">
                <li><a href="aboutus.html#staff"> <img id="david-ewing1" src="images/david-ewing-1.jpg" alt="david-ewing-cpa" height="200" width="222"></a>
                </li>
                <li id="staff-button"> <a href="resources.html" class="cta-button" role="button">MEET OUR STAFF</a></li>
              </ul>
            </div>

            <!--                         onclick="$(this).bold();"-->
          </div>
        </section>

        <section id="contact-section" class="row">
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

            <div class="contact-hr1"></div>
            <div class="contact-hr2"></div>

            <h2 id="message" class="sub-head">Send Us a Message</h2>
            <h4>Our staff is here to answer your questions. Use the form below to send us a message and we will respond promptly with assistance.</h4>

            <form class="form-horizontal" role="form" method="post" action="index.php">
              <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
                  <?php echo "<p class='text-danger'>$errName</p>"; ?>
                </div>
              </div>
              <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="email" name="email" placeholder="youremail@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
                  <?php echo "<p class='text-danger'>$errEmail</p>"; ?>
                </div>
              </div>
              <div class="form-group">
                <label for="message" class="col-sm-2 control-label">Message</label>
                <div class="col-sm-10">
                  <textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']); ?></textarea>
                  <?php echo "<p class='text-danger'>$errMessage</p>"; ?>
                </div>
              </div>

              <div class="form-group col-sm-10-offset-2">
                <div class="g-recaptcha" name="human" data-theme="light" data-sitekey="6LfzDgsUAAAAAH9iOC_R_5FXrfyZBaf2WgAby4wJ" tabindex="23"></div>
                <!--                <label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
                                  
                                </div>-->
              
              <?php echo "<p class='text-danger'>$errHuman</p>"; ?>
              </div>

              <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                  <input id="submit" name="submit" type="submit" value="Send" class="btn-primary">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                  <?php echo $result; ?>	
                </div>
              </div>
            </form> 

            <!--                        <form id="contact" action="mailto:grandmaster03@gmail.com" method="post">
                                        <h4>Our staff is here to answer your questions. Use the form below to send us a message and we will respond promptly with assistance.</h4>
                                        <fieldset>
                                            <input class="form-control" placeholder="Full Name" type="text" name="fullname" tabindex="19" required>
                                        </fieldset>
                                        <fieldset>
                                            <input class="form-control" placeholder="Email Address" type="email" name="email"  tabindex="20" required>
                                        </fieldset>
                                        <fieldset>
                                            <input class="form-control" placeholder="Phone Number" type="tel" name="email" tabindex="21" required>
                                        </fieldset>
            
                                        <fieldset>
                                            <textarea class="form-control" placeholder="Type your Message Here...." tabindex="22" required></textarea>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <div class="g-recaptcha" data-theme="light" data-sitekey="6LfzDgsUAAAAAH9iOC_R_5FXrfyZBaf2WgAby4wJ" tabindex="23"></div>
                                        </fieldset>
            
                                        <fieldset>
                                            <button id="contact-submit" class="btn-primary" name="submit" type="submit" value="send email" data-submit="...Sending" tabindex="24">SUBMIT</button>
                                        </fieldset>
            
                                    </form>-->
          </div>

          <div id="map_google" class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="row-fluid">
              <div class="contact-hr3"></div>
              <div class="contact-hr2"></div>

              <h2 id="location" class="sub-head">Location</h2>
              <h4>Our office is conveniently located on Canton Center Road., close to I-275 and US-23. <span> <a target='_blank' href="http://maps.google.com/maps?f=q&amp;hl=en&amp;geocode=&amp;time=&amp;date=&amp;ttype=&amp;q=5880+N+Canton+Center+David+Ewing+CPA&amp;sll=42.351947,-83.444939&amp;sspn=0.126354,0.337486&amp;ie=UTF8&amp;ll=42.359559,-83.471375&amp;spn=0.126346,0.337486&amp;z=12&amp;iwloc=A&amp;om=1&amp;cid=42324291,-83488032,1693978506298596783&amp;source=embed"> View Larger Map.</a></span></h4>
              <iframe src="http://maps.google.com/maps?f=q&amp;hl=en&amp;geocode=&amp;q=5880+N+Canton+Center+Rd&amp;sll=42.314385,-83.562698&amp;sspn=0.237117,0.517044&amp;ie=UTF8&amp;om=1&amp;s=AARTsJqoKZqUnynThiqyBd_HaRFPDEdEIA&amp;ll=42.400643,-83.454208&amp;spn=0.126763,0.22316&amp;z=11&amp;iwloc=addr&amp;output=embed"></iframe>
            </div>
          </div>
        </section>

        <section id="contact-information" class="row">

          <div class="xs-col-12 s-col-12 col-md-12 col-lg-12">

            <div class="contact-hr4"></div>
            <div class="contact-hr2"></div>

            <h2 id="contactinfo" class="sub-head"> Contact Information</h2>

            <div id="contact-information-content" class="container-fluid">
              <div id="address">
                <h4 class="bold">ADDRESS </h4>
                <address class="thin">5880 N. Canton Center Rd. STE #485 Canton, MI 48187
                </address>
              </div>

              <div id="phone"> <h4 class="bold">PHONE </h4>
                <h4 class="thin"><a href="tel:+17349811746">734-981-1746</a></h4>
              </div>

              <div id="fax">
                <h4 class="bold">FAX </h4>
                <h4 class="thin">734-981-2056</h4>
              </div>

              <div id="email">
                <h4 class="bold">EMAIL </h4>
                <h4 class="thin">taxes@davidewingcpa.com</h4>
              </div>

            </div>

          </div>




        </section>

      </main>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
   <script src="assets/vender/intl-tel-input/js/intlTelInput.min.js"></script>
    <script src="assets/js/contact-form.js"></script>
    </div>

    <footer>
      <p>Copyright &copy; 2016 Accounting Concepts Inc. www.davidewingcpa.com <span class="break"> Web Design by EspiDesigns Top Photo courtesy Cindy Ewing</span></p>
    </footer>

  </body>


