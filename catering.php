<!DOCTYPE html>
<html>


<head>

	<link rel="icon" href="images/logoflavicon.ico" type="image/ico">

	<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>TISORBET HELADOS NATURALES PARA EVENTOS</title>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="script.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">

</head>

<body>

<div class="container" >

	<?php include '_header.php'; ?>

	<div class="middle" >
		<div class="image-frame-100">
		<img src="images/1-C.jpg" style="object-fit:cover;width:100%;height:500px; border-bottom: 1px solid lightgrey;" alt="Sugared cocktail glass of strawberry dessert with sorbet, served on dark background with fresh mint. With copy space. Top view">
		</div>
		
		<div class="middle-content-text" >
		
			<br>
			<br>
			
			<div id="Cat-menu-top" class="middle-content-titles" > CATERING MENÚ </div>
			
				<div class="middle-content-catering-box" title="Chocolate ice cream" onclick="scroller('Cat-menu-1');" style="background-image:url('images/3--A.jpg');background-position:right;" >
					<div class="middle-content-catering-blue" onclick="scroller('Cat-menu-1');" >
                                       <div class="col">
					EL POSTRE<br>
                                       <i style="font-size:smaller;">La más clásica</i>
                                       </div>
					<br>&nbsp
					</div>
				</div> 
				
				<div class="middle-content-catering-box" title="Green tea matcha ice cream scoop in white bowl on a grey stone background" onclick="scroller('Cat-menu-2');" style="background-image:url('images/4612.jpg');background-position:center;" >
					<div class="middle-content-catering-red" onclick="scroller('Cat-menu-2');" >
                                       <div class="col">
					LA CREACIÓN<br>
                                       <i style="font-size:smaller;">Sorpresa del Chef</i>
                                        </div>
                                       <br>&nbsp
					</div>
				</div>

				<div class="middle-content-catering-box" title="Sugared cocktail glass of strawberry dessert with sorbet, served on dark background with fresh mint. With copy space." onclick="scroller('Cat-menu-3');" style="background-image:url('images/3--C.jpg');background-position:center;" >
					<div class="middle-content-catering-blue" onclick="scroller('Cat-menu-3');" >
                                       <div class="col">
                                        EL CÓCTEL <br>
                                       <i style="font-size:smaller;">La mezcla ideal</i>
                                       </div>
					<br>&nbsp
					</div>
				</div>
				
				<br>
				<br>

				<div id="Cat-menu-1" style="text-align:left" >
				
					<h2 style="border-bottom:1px solid #1C5BA2;" >EL POSTRE, <i style="font-size:smaller;">la más clásica</i></h2>
				
                                       Creaciones con fresa, frambuesa, lychee, mango, plátano, kiwi, piña, pera, etc.
				
				<br>
                               <br>
                                </div>

				<div id="Cat-menu-2" style="text-align:right" >
					<h2 style="border-bottom:1px solid #D32027;" >LA CREACIÓN, <i style="font-size:smaller;">sorpresa del Chef</i></h2>
				Combinaciones de salmón, aguacate, tomate, queso, ajonjolí, chili, alcochofas, etc.<br>
                               <i style="font-size:smaller;">Options: caviar y trufa</i>
				<br><br>
                                </div>

				<div id="Cat-menu-3" style="text-align:left" >
					<h2 style="border-bottom:1px solid #1C5BA2;" >EL CÓCTEL, <i style="font-size:smaller;">la mezcla ideal</i></h2>
				Champagne, vino tino, tequila, mezcal, gin, vodka, etc.<br>
                                Mezclado con frutas dulces.

				   <div style="text-align:right;" onclick="scroller('Cat-menu-top');" >
					&uarr; <span style="font-size:12px;text-decoration:underline;cursor: pointer;" > Ver menú</span>
                                    </div>
				</div>
				
		<br>
		<br>
		<br>

		</div>

		<div class="image-frame-100">
		<img src="images/fraisechoco.jpg" style="object-fit:cover;width:100%;height:500px; border-bottom: 1px solid lightgrey; border-top: 1px solid lightgrey;" alt="Homemade blueberry ice cream scoops with fresh berries and mint leaves in cups over light blue background">
		</div>
		
		<div class="middle-content-text"  >
		
			<br>
			
			<div class="middle-content-titles" >GRAN VARIEDAD DE SABORES</div>
			
			<br>
			
			<p  style="text-align: justify;" >Utilizamos únicamente frutas mexicanas frescas, de temporada, sin saborizantes, colorantes o conservadores. Seleccionamos productos de alta calidad, productos locales y artesanales y/o con productores involucrados en la agricultura biológica.</p>
						
			<p style="text-align: justify;" >Con el concepto fránces y las mejores frutas del país disfruta de la mezcla de sabores en tu boca que nunca olvidarás. Es gracias a la experiencia francesa única de <span style="color:#D32027" ><b>TiSorbet</b></span> que podemos hacer de una fruta fresca un helado naturalmente sabroso.</p>
			
			<br>
			<center>
			<div class="boton-cotiza" onclick="toogleCotizador();" >
			<img class="icon" src="images/cotiza-red1.svg" width="25px" /> COTIZA TU EVENTO
			</div>
			</center>
			<br>
			<br>
			
		</div>
		
		<div class="image-frame-100">
		<img src="images/1--C.jpg" style="object-fit:cover;width:100%;height:500px; alt="Melting blueberry ice-cream scoop over black background, copy space">
		
		<div class="middle-captionbox-left-red" style="top:20px; left:0px; max-width:45%; " >
		Fruto de temporada - producción local artesanal Mexicana- ecológico, sostenible 100% natural - sin aditivo, sin conservador, sin colorante, sin grasa.
		</div>
		
		</div>
		
	</div>
	
	<?php include '_footer.php'; ?>
	
</div>

</body>
</html>

	