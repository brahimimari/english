 <?php 
  $page = basename($_SERVER['PHP_SELF']); 
 ?>
    <header id="header-part">
       
        <div class="header-top d-none d-md-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <div class="header-contact text-lg-left text-center">
                            <ul>
                                <li><img src="images/all-icon/call.png" alt="icon"><span> 052222222</span></li>
                                <li><img src="images/all-icon/email.png" alt="icon"><span>contact@fluentenglishacademy.ma</span></li>
                                <li><img src="images/all-icon/map.png" alt="icon"><span>127 Maarif, Casablanca</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="header-social text-lg-right text-center">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- header top -->
        
        <div class="navigation navigation-2">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-12 col-md-10 col-sm-9 col-9">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="index.php">
                                <img width="65%" src="images/webimages/logo.png" alt="Logo">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                        <a <?php if( $page == "index.php" ) {?> class="active" <?php  }  ?> href="index.php">Accueil</a>
                                    </li>
									<li class="nav-item">
                                        <a <?php if( $page == "apropos.php" ) {?> class="active" <?php  }  ?> href="apropos.php">Apropos</a>
                                    </li>
                                    <li class="nav-item">
                                        <a <?php if( $page == "methodologie.php" ) {?> class="active" <?php  }  ?> href="methodologie.php">Méthodologie</a>
                                    </li>
                                    <li class="nav-item">
                                        <a <?php if( $page == "anglais-pour-enfants.php" || $page == "anglais-pour-adultes.php" || $page == "anglais-pour-Professionnel.php" ) {?> class="active" <?php  }  ?> href="#">Formation</a>
                                        <ul class="sub-menu">
                                            <li><a href="anglais-pour-enfants.php">Anglais pour enfants</a></li>
                                            <li><a href="anglais-pour-adultes.php">Anglais pour adolescents et adultes</a></li>
                                            <li><a href="anglais-pour-Professionnel.php">Anglais pour professionnels</a></li>
                                        </ul>
                                    </li>
                                     
                                    <!--<li class="nav-item">
                                        <a href="#">Gallerie et Actualité</a>
                                    </li>
                                   -->
								   <li class="nav-item">
                                        <a <?php if( $page == "inscription.php" ) {?> class="active" <?php  }  ?> href="inscription.php">Inscription</a>
                                    </li>
									<li class="nav-item">
                                        <a <?php if( $page == "devenirenseignant.php" ) {?> class="active" <?php  }  ?> href="devenirenseignant.php">Devenir enseignant</a>
                                    </li>
                                    <li class="nav-item">
                                        <a <?php if( $page == "contact.php" ) {?> class="active" <?php  }  ?> href="contact.php">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </nav> <!-- nav -->
                    </div>
                    
                </div> <!-- row -->
            </div> <!-- container -->
        </div>
        
    </header>
   