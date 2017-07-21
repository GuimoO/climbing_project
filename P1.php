<?php include 'includes/inclu_head.php'; ?>

	<div class="container-fluid homehead">
		<h1 class="titre">ESCALADE<br>FONTAINEBLEAU</h1>
	</div>

	<nav class="navbar navbar-inverse nanav" data-spy="affix" data-offset-top="0">
	  	<div class="container-fluid divcont">
	    	<div class="navbar-header divnavhead">
		        <button type="button" class="navbar-toggle navtog" data-toggle="collapse" data-target="#myNavbar">
		          <span class="icon-bar"></span>
		          <span class="icon-bar"></span>
		          <span class="icon-bar"></span>                        
		      	</button>
	      		<a class="navbar-brand navbrand" href="#"><i class="fa fa-arrow-circle-up" style="font-size:60px;padding:0"></i></a>
	    	</div>
	    	<div>
	      		<div class="collapse navbar-collapse navcolapse" id="myNavbar">
	        		<ul class="nav navbar-nav">
			          <li class="linav"><a href="#section1" class="secnav">PRESENTATION</a></li>
			          <li class="linav"><a href="#section2" class="secnav">ACTUALITES</a></li>
			          <li class="linav"><a href="#section3" class="secnav">SITES NATURELS</a></li>
			          <li class="linav"><a href="#section4" class="secnav">SALLE KARMA</a></li>
			          <li class="linav"><a href="#section5" class="secnav" style="padding-left: 20px">PHOTOS</a></li>
			          <li class="linav"><a href="#section6" class="secnav">VIDEOS</a></li>
				    </ul>
		      	</div>
		    </div>
	  	</div>
	</nav>
	
	<div id="section1" class="container-fluid contsec1">

		<div class="row rowpresent">

			<div class="col-lg-6 colsec1">
				<img src="assets/img/mapbleau.jpg" alt="Ville de Fontainebleau" class="img-thumbnail imgsec1"/>
			</div>

			<div class=" col-lg-6 txtpresente">
				<p>La commune de Fontainebleau est située au sud-ouest du département de Seine-et-Marne et s’étend sur 17 205h.<br> C’est la plus vaste commune de la région Ile-de-France,<br> et elle est presque entièrement recouverte d’une forêt, lieu de promenade mais son relief très accidenté et ses nombreux rochers en font aussi un lieu très réputé pour la pratique de l’escalade ! Divers endroits de la forêt sont recouverts de quartz à l’état brut !<br>
				Alors n’hésitez plus et découvrez les nombreux sites de « grimp » de Fontainebleau!</p>
			</div>
		</div>
	</div>



	<!-- SECTION 2 HTML================================================-->
	
	<!-- SECTION 3 HTML================================================-->
	<div id="section3" class="container-fluid contsec3">

		<div class="row rowSNE1">

			<div class="col-lg-4 site1">


				<!--glyphicon cliquable qui renvoi un modal d'info-->
          		<button type="button" class="btn btn-info btn-lg btnmod" id="myBtn" data-toggle="modal" data-target="#myModal">3 pignons</button>

          		 <!-- Modal -->
          		<div class="modal" id="myModal" role="dialog">
            		<div class="modal-dialog modal-lg">
              			<div class="modal-content">
                			<div class="modal-header">
                  				<button type="button" class="close" data-dismiss="modal">&times;</button>
                  				<h3 class="modal-title"><span class="bold">Pignon de Vélo</span></h3>
                			</div>
           				 	<div class="modal-body backgmodbody">
                  				<p class="p">
                    			<span class="bold">Meilleures Périodes:</span><br>Avril/Mai/Juin/Septembre<br>
                    			<span class="bold">Orientation: </span>N-NO<br>
			                    <span class="bold">Rocher: </span>calcaire<br>
			                    <span class="bold">Nb de voies: </span>42<br>
			                    <span class="bold">Hauteur: </span>jusqu'à 75m<br>
			                    <span class="bold">Difficulté: </span>du 5c à 7c<br>
			                    <span class="bold">Localisation: </span>Ici et là
			                  	</p>
			                </div>
                  			<div class="modal-footer">
                    			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  			</div>
              			</div>
            		</div>
        		</div>
    		</div>
          

			<div class="col-lg-4 site2">


				<!--glyphicon cliquable qui renvoi un modal d'info-->
          		<button type="button" class="btn btn-info btn-lg btnmod" id="myBtn" data-toggle="modal" data-target="#myModal2">Petit bois</button>

          		 <!-- Modal -->
          		<div class="modal" id="myModal2" role="dialog">
            		<div class="modal-dialog modal-lg">
              			<div class="modal-content">
                			<div class="modal-header">
                  				<button type="button" class="close" data-dismiss="modal">&times;</button>
                  				<h3 class="modal-title"><span class="bold">Pignon de Pin</span></h3>
                			</div>
           				 	<div class="modal-body backgmodbody2">
                  				<p class="p">
                    			<span class="bold">Meilleures Périodes:</span><br>Avril/Juin/Juillet/Septembre<br>
                    			<span class="bold">Orientation: </span>S-SE<br>
			                    <span class="bold">Rocher: </span>brique grise friable<br>
			                    <span class="bold">Nb de voies: </span>22<br>
			                    <span class="bold">Hauteur: </span>jusqu'à 1200m<br>
			                    <span class="bold">Difficulté: </span>hard<br>
			                    <span class="bold">Localisation: </span> Par ci par là
			                  	</p>
			                </div>
                  			<div class="modal-footer">
                    			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  			</div>
              			</div>
            		</div>
        		</div>
    		</div>


			<div class="col-lg-4 site3">


				<!--glyphicon cliquable qui renvoi un modal d'info-->
          		<button type="button" class="btn btn-info btn-lg btnmod" id="myBtn" data-toggle="modal" data-target="#myModal3">Le calvaire</button>

          		 <!-- Modal -->
          		<div class="modal" id="myModal3" role="dialog">
            		<div class="modal-dialog modal-lg">
              			<div class="modal-content">
                			<div class="modal-header">
                  				<button type="button" class="close" data-dismiss="modal">&times;</button>
                  				<h3 class="modal-title"><span class="bold">Pignon sur rue</span></h3>
                			</div>
           				 	<div class="modal-body backgmodbody3">
                  				<p class="p">
                    			<span class="bold">Meilleures Périodes:</span><br>Juin/Septembre/Décembre<br>
                    			<span class="bold">Orientation: </span>N-NS<br>
			                    <span class="bold">Rocher: </span>grès<br>
			                    <span class="bold">Nb de voies: </span>15<br>
			                    <span class="bold">Hauteur: </span>51m<br>
			                    <span class="bold">Difficulté: </span>est dans le nom<br>
			                    <span class="bold">Localisation: </span>un calvaire à trouver!
			                  	</p>
			                </div>
                  			<div class="modal-footer">
                    			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  			</div>
              			</div>
            		</div>
        		</div>
    		</div>
		</div>

		<div class="row rowSNE2">

			<div class="col-lg-4 site4">


				<!--glyphicon cliquable qui renvoi un modal d'info-->
          		<button type="button" class="btn btn-info btn-lg btnmod" id="myBtn" data-toggle="modal" data-target="#myModal4">Rocher brulé</button>

          		 <!-- Modal -->
          		<div class="modal" id="myModal4" role="dialog">
            		<div class="modal-dialog modal-lg">
              			<div class="modal-content">
                			<div class="modal-header">
                  				<button type="button" class="close" data-dismiss="modal">&times;</button>
                  				<h3 class="modal-title"><span class="bold">Pignon de poulet</span></h3>
                			</div>
           				 	<div class="modal-body backgmodbody4">
                  				<p class="p">
                    			<span class="bold">Meilleures Périodes:</span><br>Juin/Septembre/Décembre<br>
                    			<span class="bold">Orientation: </span>full S<br>
			                    <span class="bold">Rocher: </span>calcaire<br>
			                    <span class="bold">Nb de voies: </span>variable<br>
			                    <span class="bold">Hauteur: </span>10m<br>
			                    <span class="bold">Difficulté: </span>0.5a à 6b<br>
			                    <span class="bold">Localisation: </span>tout droit
			                  	</p>
			                </div>
                  			<div class="modal-footer">
                    			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  			</div>
              			</div>
            		</div>
        		</div>
    		</div>
		
			<div class="col-lg-4 site5">


				<!--glyphicon cliquable qui renvoi un modal d'info-->
          		<button type="button" class="btn btn-info btn-lg btnmod" id="myBtn" data-toggle="modal" data-target="#myModal5">Rocher d'Avon</button>

          		 <!-- Modal -->
          		<div class="modal" id="myModal5" role="dialog">
            		<div class="modal-dialog modal-lg">
              			<div class="modal-content">
                			<div class="modal-header">
                  				<button type="button" class="close" data-dismiss="modal">&times;</button>
                  				<h3 class="modal-title"><span class="bold">Pignon des maquisards</span></h3>
                			</div>
           				 	<div class="modal-body backgmodbody5">
                  				<p class="p">
                    			<span class="bold">Meilleures Périodes:</span><br>Juin/Septembre/Décembre<br>
                    			<span class="bold">Orientation: </span>N-NO<br>
			                    <span class="bold">Rocher: </span>calcaire<br>
			                    <span class="bold">Nb de voies: </span>34<br>
			                    <span class="bold">Hauteur: </span>12<br>
			                    <span class="bold">Difficulté: </span>all<br>
			                    <span class="bold">Localisation: </span>Là
			                  	</p>
			                </div>
                  			<div class="modal-footer">
                    			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  			</div>
              			</div>
            		</div>
        		</div>
    		</div>


			<div class="col-lg-4 meteo">
				<script charset='UTF-8' src='http://www.meteofrance.com/mf3-rpc-portlet/rest/vignettepartenaire/771860/type/VILLE_FRANCE/size/PAYSAGE_VIGNETTE' type='text/javascript'></script>
			</div>
		</div>
	</div>

<!--SALLE KARMA===========================================================-->
	<div id="section4" class="container-fluid contsec4">

		<!-- INFORMATIONS-->

   		<!-- Button HTML (to Trigger Modal) -->
    	<div class="row row_dis">
    		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal_droite1" data-title="Feedback">
    			<h1>HORAIRES</h1>
    		</button>
    	</div>
    	<div class="row row_dis">
    		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal_droite2" data-title="Report Error">
    			<h1>Acces a la salle</h1>
			</button>
	    </div>
		<div class="row row_dis">
	    	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal_droite3" data-title="Contact Us">
	    		<h1>CONTACT</h1>
    		</button>
	    </div>
	    <div class="row row_dis">
	    	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal_droite4" data-title="Contact Us">
	    		<h1>TARIFS</h1>
			</button>
    	</div>
    
	    <!-- Modal HTML -->
	    <div id="myModal_droite1" class="modal fade right">
	        <div class="modal-dialog">
	            <div class="modal-content">
	                <div class="modal-header">
	                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	                    <h4 class="modal-title">HORAIRES</h4>
	                </div>
	                <div class="modal-body">
	                   <h1>Horaires d'ouvertures<img alt="" height="250" src="assets/img/grimpe.jpg" style="float: right;" width="350" /></h1>
						<p style="text-align: right;">
							&nbsp;</p>
						<p>
							<strong>Votre salle est ouverte 7j/7 !</strong></p>
						<p style="text-align: right;">
							&nbsp;</p>
						<p>
							Du lundi au vendredi</strong> de <strong>12h à 22h.</strong></p>
						<p style="text-align: right;">
							&nbsp;</p>
						<p>
							Les <strong>week-ends et jours fériés</strong> de<strong> 10h à 20h.</strong></p>
	                </div>
	            </div>
	        </div>
	    </div>
	    <div id="myModal_droite2" class="modal fade right">
	        <div class="modal-dialog">
	            <div class="modal-content">
	                <div class="modal-header">
	                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	                    <h4 class="modal-title">Acces à la salle</h4>
	                </div>
	                <div class="modal-body">
						                    	
						<h2>
							Adresse</h2>
						<p>
							Karma - Salle d'escalade<br />
							Route militaire<br />
							77300 Fontainebleau</p>
						<h2>
							Plan</h2>
						<p style="text-align: center;">
							<iframe frameborder="0" height="450" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5297.937921424157!2d2.724827752348514!3d48.39953922228439!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e5f4fb7b580b89%3A0xeeab496a80c63f42!2sRoute+Militaire%2C+77300+Fontainebleau!5e0!3m2!1sfr!2sfr!4v1407007233363" style="border:0" width="600"></iframe></p>
						<p style="text-align: center;">
							&nbsp;</p>
	                </div>
	            </div>
	        </div>
	    </div>
	    <div id="myModal_droite3" class="modal fade right">
	        <div class="modal-dialog">
	            <div class="modal-content">
	                <div class="modal-header">
	                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	                    <h4 class="modal-title">CONTACT</h4>
	                </div>
	                <div class="modal-body">
	                    <form role="form">
	                        <div class="form-group">
	                            <label for="recipient-name" class="control-label">Email:</label>
	                            <input type="text" class="form-control" id="recipient-name">
	                        </div>
	                        <div class="form-group">
	                            <label for="message-text" class="control-label">Message:</label>
	                            <textarea class="form-control" id="message-text"></textarea>
	                        </div>
	                    </form>
	                </div>
	                <div class="modal-footer">
	                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
	                    <button type="button" class="btn btn-primary">Send</button>
	                </div>
	            </div>
	        </div>
	    </div>
	    <div id="myModal_droite4" class="modal fade right">
	        <div class="modal-dialog">
	            <div class="modal-content">
	                <div class="modal-header">
	                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	                    <h4 class="modal-title">TARIFS</h4>
	                </div>
	                <div class="modal-body">
	                    <h1>Entrées</h1>
						<p>
							L'entrée à la salle Karma peut se faire grâce à plusieurs types de formule (entrée simple, abonnement,...). Deux types de tarifs existent : un tarif licenciés avantageux pour les détenteurs d'une licence FFME en cours de validité et un tarif classique grand public.</p>
						<h2 style="text-align: center;">
							Tarifs Licenciés FFME<br />
							Saison 2016 - 2017</h2>
						<table align="center" border="1" cellpadding="0" cellspacing="0" style="width: 90%;">
							<tbody>
								<tr>
									<td>
										<h3 style="text-align: center;">
											<strong>Licenciés</strong></h3>
									</td>
									<td>
										<h4 style="text-align: center;">
											Tarif Normal</h4>
									</td>
									<td colspan="2">
										<h4 style="text-align: center;">
											Tarif Réduit<sup> (*)</sup><br />
											(-18 ans et étudiants)</h4>
									</td>
									<td>
										<h4 style="text-align: center;">
											Tarif Enfants<br />
											(-12 ans)</h4>
									</td>
								</tr>
								<tr>
									<td>
										<h4 style="text-align: center;">
											Entrée simple</h4>
									</td>
									<td style="text-align: center;">
										12,50 €</td>
									<td colspan="2" style="text-align: center;">
										10,50 €</td>
									<td style="text-align: center;">
										8 €</td>
								</tr>
								<tr>
									<td>
										<h4 style="text-align: center;">
											Carnet 10 entrées<sup> (**)</sup></h4>
									</td>
									<td style="text-align: center;">
										100 €</td>
									<td colspan="2" style="text-align: center;">
										80 €</td>
									<td style="text-align: center;">
										64 €</td>
								</tr>
								<tr>
									<td>
										<h4 style="text-align: center;">
											Abonnement Trimestriel<sup> (**)</sup></h4>
									</td>
									<td style="text-align: center;">
										155 €</td>
									<td colspan="2" style="text-align: center;">
										120 €</td>
									<td style="text-align: center;">
										105 €</td>
								</tr>
								<tr>
									<td>
										<h4 style="text-align: center;">
											Abonnement Annuel<sup> (**)</sup></h4>
									</td>
									<td style="text-align: center;">
										415 €</td>
									<td colspan="2" style="text-align: center;">
										330 €</td>
									<td style="text-align: center;">
										260 €</td>
								</tr>
								<tr>
									<td>
										<h4 style="text-align: center;">
											Abonnement Annuel Couple<sup> (*) (**)</sup><br />
											(marié, pacsé, en concubinage)</h4>
									</td>
									<td colspan="4" rowspan="1" style="text-align: center;">
										725 €</td>
								</tr>
								<tr>
									<td style="text-align: center;">
										<h4 style="text-align: center;">
											Abonnement Annuel Famille<br />
											(1 adulte + 1 enfant)<sup> (*) (**)</sup></h4>
									</td>
									<td colspan="4" rowspan="1" style="text-align: center;">
										620 €</td>
								</tr>
							</tbody>
						</table> 
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
    



<!-- SECTION PHOTO CAROUSSEL====================================================-->
	<div id="section5" class="container-fluid contsec5">

		<div id="my_carousel" class="carousel slide" data-ride="carousel">
			<!-- Bulles -->
			<ol class="carousel-indicators">
			<li data-target="#my_carousel" data-slide-to="0" class="active"></li>
			<li data-target="#my_carousel" data-slide-to="1"></li>
			<li data-target="#my_carousel" data-slide-to="2"></li>
			</ol>
			<!-- Slides -->
			<div class="carousel-inner">
				<!-- Page 1 -->
				<div class="item active">  
					<div class="carousel-page">
						<img src="assets/img/jimmy_web.jpg" class="img-responsive" style="margin:0px auto;" />
					</div> 
					<div class="carousel-caption">JIMMY WEB IN FONT
					</div>
				</div>   
				<!-- Page 2 -->
				<div class="item"> 
					<div class="carousel-page"><img src="assets/img/melissa_Leneve.jpg" class="img-responsive img-rounded" style="margin:0px auto;"/>
					</div> 
					<div class="carousel-caption">MELISSA LENEVE CRUSHING SOME NEW ROCK IN FONT</div>
					</div>  
					<!-- Page 3 -->
					<div class="item">  
						<div class="carousel-page">
							<img src="assets/img/compete.jpg" class="img-responsive img-rounded" style="margin:0px auto;max-height:100%;"/>
						</div>  
					<div class="carousel-caption">THE NEW CONTEST FROM RED BULL</div>
						</div>     
					</div>
					<!-- Contrôles -->
					<a class="left carousel-control" href="#my_carousel" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
					</a>
					<a class="right carousel-control" href="#my_carousel" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
					</a>
			</div>
		</div>


<!--VIDEO YOUTUBE CLIMBING====================================================================-->

<div id="section6" class="container-fluid contsec6">

	<div class="row rowvid1">

		<div class="col-lg-4 video1">
			<iframe width="500" height="290" src="https://www.youtube.com/embed/jNUwiTMmJs8" frameborder="0" allowfullscreen></iframe>
		</div>
      
		<div class="col-lg-4 video2">
			<iframe width="500" height="290" src="https://www.youtube.com/embed/DSrmFTZAxAY" frameborder="0" allowfullscreen></iframe>
		</div>

		<div class="col-lg-4 video3">
			<iframe width="500" height="290" src="https://www.youtube.com/embed/kd9OKA4ABJ0" frameborder="0" allowfullscreen></iframe>
		</div>

	</div>

	<div class="row rowvid2">

		<div class="col-lg-4 video4">
			<iframe width="500" height="290" src="https://www.youtube.com/embed/Fuxi7alqbUI" frameborder="0" allowfullscreen></iframe>
		</div>
	
		<div class="col-lg-4 video5">
			<iframe width="500" height="290" src="https://www.youtube.com/embed/vVTFcv2K22U" frameborder="0" allowfullscreen></iframe>
		</div>

		<div class="col-lg-4 video6">
			<iframe width="500" height="290" src="https://www.youtube.com/embed/_M4YxQ_Xj3I" frameborder="0" allowfullscreen></iframe>
		</div>

	</div>
</div>



<?php include 'includes/inclu_footer.php'; ?>


