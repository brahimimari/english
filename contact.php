<!doctype html>
<html lang="en">
<head>
   
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!--====== Title ======-->
    <title>Fluent English Academy</title>
    
    <!--====== Slick css ======-->
    <link rel="stylesheet" href="css/slick.css">

    <!--====== Animate css ======-->
    <link rel="stylesheet" href="css/animate.css">
    
    <!--====== Nice Select css ======-->
    <link rel="stylesheet" href="css/nice-select.css">
    
    <!--====== Nice Number css ======-->
    <link rel="stylesheet" href="css/jquery.nice-number.min.css">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <!--====== Default css ======-->
    <link rel="stylesheet" href="css/default.css">
    
    <!--====== Style css ======-->
    <link rel="stylesheet" href="css/style.css">
    
    <!--====== Responsive css ======-->
    <link rel="stylesheet" href="css/responsive.css">
  
  
</head>

<body>
   
    <!--====== PRELOADER PART START ======-->
    
    
    <!--====== PRELOADER PART START ======-->
    
   <?php
   
   if (isset($_POST['name'])) {

     // Plusieurs destinataires
     $to  = 'brahim.imari@gmail.com'; // notez la virgule

	 $name = $_POST['name'];
	 $phone = $_POST['phone'];
	 $email = $_POST['email'];
	 $subject = $_POST['subject'];
	 $message = $_POST['message'];
	 
     // Sujet
     $subject = 'Email page contact';

     // message
    $message = "
     <html>
      <head>
       <title>Email page contact</title>
      </head>
      <body>
       <p>Vous avez un nouveau email depuis votre site internet ;</p>
       <table>
        <tr>
         <th>Nom</th>
		 <th>Email</th>
		 <th>telephone</th>
		 <th>sujet</th>
		 <th>Messsage</th>
        </tr>
        <tr>
         <td>$name</td>
         <td>$email</td>
         <td>$phone</td>
         <td>$subject</td>
         <td>$message</td>
		 
        </tr>
        </table>
      </body>
     </html>
     ";

     // Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
     // $headers[] = 'MIME-Version: 1.0';
     // $headers[] = 'Content-type: text/html; charset=iso-8859-1';

     // En-têtes additionnels
     //$headers[] = 'To: Mary <mary@example.com>, Kelly <kelly@example.com>';
     // $headers[] = "From: ".$email;
	
	// $headers = "MIME-Version: 1.0" . "\r\n";
	// $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	// $headers .= 'From: <webmaster@example.com>' . "\r\n";
	// $headers .= 'Cc: myboss@example.com' . "\r\n";

	// $headers = "From: webmaster@example.com" . "\r\n" .
	// "Content-type:text/html;charset=UTF-8" . "\r\n".
	// "CC: somebodyelse@example.com";
	
	$headers = "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=UTF-8\r\n";


     // Envoi
     mail($to, $subject, $message,  $headers);
	 }
?>
   
   
     <?php include('pages/header.php'); ?> 

    <!--====== SEARCH BOX PART START ======-->
    
    <div class="search-box">
        <div class="serach-form">
            <div class="closebtn">
                <span></span>
                <span></span>
            </div>
            <form action="#">
                <input type="text" placeholder="Search by keyword">
                <button><i class="fa fa-search"></i></button>
            </form>
        </div> <!-- serach form -->
    </div>
    
    <!--====== SEARCH BOX PART ENDS ======-->
   
    <!--====== PAGE BANNER PART START ======-->
    
    <section id="page-banner" class="pt-200 pb-200 bg_cover" data-overlay="8" style="background-image: url(images/webimages/contact.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Contact</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact</li>
                            </ol>
                        </nav>
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== PAGE BANNER PART ENDS ======-->
    
    <!--====== CONTACT PART START ======-->
    
    <section id="contact-page" class="pt-50 pb-50 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="contact-from mt-30">
                        <div class="section-title">
                            <h5>Contact</h5>
                         </div> <!-- section title -->
                        <div class="main-form pt-45">
                            <form id="" action="" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <input name="name" type="text" placeholder="Nom Complet" data-error="Champ obligatoire." required="required">
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- singel form -->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <input name="email" type="email" placeholder="Email" data-error="Entrer un email valide." required="required">
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- singel form -->
                                    </div>
									<div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <input name="phone" type="text" placeholder="GSM" data-error="Champ obligatoire." required="required">
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- singel form -->
                                    </div>
									   <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <input name="subject" type="text" placeholder="Sujet" data-error="Champ obligatoire." required="required">
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- singel form --> 
                                    </div>
                                    <div class="col-md-12">
                                        <div class="singel-form form-group">
                                            <textarea name="message" placeholder="Messege" data-error="S'il vous plaît, laissez-nous un message." required="required"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- singel form -->
                                    </div>
                                     <div class="col-md-12">
                                        <div class="singel-form">
 
                                            <input type="submit" value="Envoyer" name="envoyer" class="main-btn" />
                                        </div> <!-- singel form -->
                                    </div> 
                                </div> <!-- row -->
                            </form>
                        </div> <!-- main form -->
                    </div> <!--  contact from -->
                </div>
                <div class="col-lg-5">
                    <div class="contact-address mt-30">
                        <ul>
                            <li>
                                <div class="singel-address">
                                    <div class="icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <div class="cont">
                                        <p>129, ain sbaa Casablanca</p>
                                    </div>
                                </div> <!-- singel address -->
                            </li>
                            <li>
                                <div class="singel-address">
                                    <div class="icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="cont">
                                        <p>0522232425</p>
                                        <p>0678910101</p>
                                    </div>
                                </div> <!-- singel address -->
                            </li>
                            <li>
                                <div class="singel-address">
                                    <div class="icon">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                    <div class="cont">
                                        <p>contact@fluentenglishacademy.ma</p>
                                     </div>
                                </div> <!-- singel address -->
                            </li>
                        </ul>
                    </div> <!-- contact address -->
                    <div class="map mt-10">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d480.56534443048173!2d-7.531952894798219!3d33.61094715834552!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMzPCsDM2JzQwLjAiTiA3wrAzMSc1NC4yIlc!5e1!3m2!1sfr!2sfr!4v1702284692349!5m2!1sfr!2sfr" width="100%" height="250px"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div> <!-- map -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== CONTACT PART ENDS ======-->
   
    <!--====== FOOTER PART START ======-->
  	<?php include('pages/footer.php'); ?> 
  <!--====== FOOTER PART ENDS ======-->
   
    <!--====== BACK TO TOP PART START ======-->
    
    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
    
    <!--====== BACK TO TOP PART ENDS ======-->
    
    
    
    
    
    
    
    <!--====== jquery js ======-->
    <script src="js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="js/bootstrap.min.js"></script>
    
    <!--====== Slick js ======-->
    <script src="js/slick.min.js"></script>
    
    <!--====== Magnific Popup js ======-->
    <script src="js/jquery.magnific-popup.min.js"></script>
    
    <!--====== Counter Up js ======-->
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    
    <!--====== Nice Select js ======-->
    <script src="js/jquery.nice-select.min.js"></script>
    
    <!--====== Nice Number js ======-->
    <script src="js/jquery.nice-number.min.js"></script>
    
    <!--====== Count Down js ======-->
    <script src="js/jquery.countdown.min.js"></script>
    
    <!--====== Validator js ======-->
    <script src="js/validator.min.js"></script>
    
    <!--====== Ajax Contact js ======-->
    <script src="js/ajax-contact.js"></script>
    
    <!--====== Main js ======-->
    <script src="js/main.js"></script>
    
    <!--====== Map js ======-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC3Ip9iVC0nIxC6V14CKLQ1HZNF_65qEQ"></script>
    <script src="js/map-script.js"></script>

</body>
</html>
