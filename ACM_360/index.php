<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Panoramas</title>
    <meta name="robots" content="noindex, nofollow">
    <!-- CSS -->
    <link rel="stylesheet" href="include/css/style.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="include/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="include/font-awesome-4.7.0/css/font-awesome.min.css">
    <!-- script -->
    <script src="include/js/jquery-3.3.1.min.js"></script>
    <script src="include/js/carousel.js"></script>
	<script src="include/js/script.js"></script>
</head>
<body>
    <header>
        <!-- menu -->	
        <nav class="navbar-default navbar-fixed-top" style="background-color: transparent;">
            <div class="container-fluid">
                <div class="container">
					<div class="collapse navbar-collapse">
						<div class="navbar-header">
							<a class="navbar-brand" target='_blank' href="http://arenberg-minecreative.fr">
								<img alt="logo" id="logo" src="include/img/logo.png">
							</a>
						</div>
						<ul class="nav navbar-nav navbar-right">
							<li><a href="https://www.facebook.com/ArenbergCreativeMine.HautsdeFrance/" target=_blank class="fa fa-facebook"></a></li>
							<li><a href="#home" class="fa fa-home"></a></li>
							<li><a href="#visites">Visites Virtuelles</a></li>
							<li><a href="#plan3d">Plans 3D</a></li>
						</ul>
					</div>
                </div>
            </div>
        </nav>
		
		<!-- Menu Responsive -->
		
<nav class="resp navbar-fixed-top"> 
	<span class="ham fa fa-bars fa-3x "></span>
	<ul class="hamenu">	
		<li><a href="#visites">Visites Virtuelles</a></li>
		<li><a href="#plan3d">Plans 3D</a></li>
		<li><a href="http://arenberg-minecreative.fr" target=_blank>Site ACM</a></li>
		<li><a href="https://www.facebook.com/ArenbergCreativeMine.HautsdeFrance/" target=_blank>Facebook</a></li>
	</ul>
</nav>
		<!-- Fin menu Responsive -->
		
    </header>
	


	
	 <!-- CAROUSSEL-->
				<div id="home">
                   <!-- Bootstrap code-->
                   <div id="carousel" class="carousel slide" data-ride="carousel" data-interval="3000">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel" data-slide-to="1"></li>
                            <li data-target="#carousel" data-slide-to="2"></li>
                            <li data-target="#carousel" data-slide-to="3"></li>
							<li data-target="#carousel" data-slide-to="4"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img alt="tournage agatha christie" src="include/img/bandeau/agatha.png">
                                <div class="carousel-caption">
                                </div>
                            </div>
                            <div class="item">
                                <img alt="exterieur" src="include/img/bandeau/Exterieurs-Site-Minier.png">
                                <div class="carousel-caption">
                                </div>
                            </div>
                            <div class="item">
                                <img alt="finorpa" src="include/img/bandeau/finorpa.png">
                                <div class="carousel-caption">
                                </div>
                            </div>
                            <div class="item">
                                <img alt="MIH nuit" src="include/img/bandeau/nuit.png">
                                <div class="carousel-caption">
                                </div>
                            </div>
							<div class="item">
                                <img alt="tournage la vie devant elles" src="include/img/bandeau/tournage-la-vie-devant-elles.png">
                                <div class="carousel-caption">
                                </div>
                            </div>
                        </div>
                    </div><!-- Bootstrap code-->
					<a href='#plan3d' class="fa fleche-5 fa-angle-double-down fa-5x"><span > </span></a>
				</div>
				
	<!-- PARALLAX -->			
	<div class="parallax"> 	</div>

	<div class="parallax1" id="visites">
		
		<!--liste visite -->
		<div class=" list_container">
			<div class="container">
				<h2> Visites Virtuelles 360°</h2>
				<div class="liste">
					<div class="row">
						<div class="col-sm-6 mini">
							<a href="01/leaud.html" target=_blank><img class="min" alt="leaud" src="include/img/min/leaud.jpg">
							<p class="imgtxt"> Le LEAUD </p></a>
						</div>
						<div class="col-sm-6 mini">
							<a href="02/berri.html" target=_blank><img class="min" alt="berri" src="include/img/min/berri.jpg">
							<p class="imgtxt"> L'espace Berri </p></a>
						</div>
						<div class="col-sm-6 mini">
							<a href="03/halledessai.html" target=_blank><img class="min" alt="halle d'essai" src="include/img/min/hessai.jpg">
							<p class="imgtxt"> La halle d'essai </p></a>
						</div>
						<div class="col-sm-6 mini">
							<a href="04/plateautv.html" target=_blank><img class="min" alt="plateau tv" src="include/img/min/plateautv.jpg">
							<p class="imgtxt"> Le plateau TV </p></a>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
	
	<!-- Plan -->
		<div id="plan3d">
			<div class="container">
				<div class="row">
					<div class="plan">
						<div class='col-sm-6 plan1'>
							<a  href='plan01/leaud.html' target=_blank><img class="frame" alt='plan Leaud' src="include/img/plan/leaud.png">
							<span class="fa extend fa-expand fa-2x"></span>
							<p> Le Leaud </p></a>
						</div>
						
						<div class='col-sm-6 plan1'>
							<a href='plan02/berri.html' target=_blank><img class="frame" alt='plan Berri' src="include/img/plan/berri.png">
							<span class="fa extend fa-expand fa-2x"></span>
							<p> L'espace Berri </p></a>
						</div>
						
						<div class='col-sm-6 plan1'>
							<a href='plan03/halledessai.html' target=_blank><img class="frame" alt="plan salle d'essai" src="include/img/plan/essai.png">
							<span class="fa extend fa-expand fa-2x"></span>
							<p> La halle d'essai </p></a>
						</div>
						
						<div class='col-sm-6 plan1'>
							<a href='plan04/plateautv.html' target=_blank><img class="frame" alt='plan plateau TV' src="include/img/plan/plateautv.png">
							<span class="fa extend fa-expand fa-2x"></span>
							<p> Le plateau TV </p></a>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	
    <footer>
        <div class="container">
            <div class="row">
               <div class="col-sm-4 bout col-xs-12">  
					<img src="include/img/icone.png" alt="icone acm">
					<ul> <li class='abouttxt'> <a href="about.html"> A propos </a></li></ul>
            </div> 
            <div class="col-sm-4 col-xs-12">

            </div>
            <div class="col-sm-4 col-xs-12"> 
                <p> Arenberg Creative Mine <br>
                   Rue Michel Rondet <br>
                   59135 WALLERS-ARENBERG 
               </p>
           </div>
       </div>
    </div>
    </footer>

</body>
</html>