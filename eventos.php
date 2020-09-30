<!DOCTYPE html>
<html>


<head>

	<link rel="icon" href="images/logoflavicon.ico" type="image/ico">

	<meta charset="UTF-8">
        <meta name="viewport" content="height=device-height, initial-scale=0.70">

	<title>TISORBET HELADOS NATURALES PARA EVENTOS</title>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="script.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
	
	<script>
	
	var CANTIDAD_TOTAL_IMAGENES = 8;
	
	var DESCRIPCION = new Array(CANTIDAD_TOTAL_IMAGENES);
	
	DESCRIPCION[0] = "Imagen 1";
	DESCRIPCION[1] = "Imagen 2";
	DESCRIPCION[2] = "Imagen 3";
	DESCRIPCION[3] = "Imagen 4";
	DESCRIPCION[4] = "Imagen 5";
	DESCRIPCION[5] = "Imagen 6";
	DESCRIPCION[6] = "Imagen 7";
	DESCRIPCION[7] = "Imagen 8";
	//DESCRIPCION[8] = "Imagen 9";
	//DESCRIPCION[9] = "Imagen 10";
	
	$(document).ready(function(){
	
	var gallery_image = "";
	var color = "";
	
	for (i = 1; i <= CANTIDAD_TOTAL_IMAGENES; i++) {
	
	if (isEven(i)){color="red";}else{color="blue";}
	
	gallery_image = "<div class='middle-content-gallery-box' onclick='showFullscreen("+i+")' style=\"background-image:url('images/gallery/"+i+".jpg');\" > <div class='middle-content-gallery-"+color+"' onclick='showFullscreen("+i+")' > </div></div> &nbsp "
	$('#gallery').append( gallery_image );
	}
	
	});
	
	function isEven(n) {
	   return n % 2 == 0;
	}
	
	function showFullscreen(id){
	    $(".gallery-innerframe-fullscreen").css("background-image", "url('images/gallery/"+id+".jpg')");
		$("#previous").attr("onclick","showPrevious("+id+")");
		$("#next").attr("onclick","showNext("+id+")");
		$(".gallery-outerframe-fullscreen").fadeIn("slow");
	}
	
	function hideFullscreen(){
		$(".gallery-outerframe-fullscreen").fadeOut("slow");
	}

	function showNext(id){
	
		if(id==CANTIDAD_TOTAL_IMAGENES){
		id=0;
		}
		
		id = id+1;
		
		//$(".gallery-innerframe-fullscreen").fadeOut("fast");
		$(".gallery-innerframe-fullscreen").css("background-image", "url('images/gallery/"+id+".jpg')");
		$("#previous").attr("onclick","showPrevious("+ id +")");
		$("#next").attr("onclick","showNext("+ id +")");
		//$(".gallery-innerframe-fullscreen").fadeIn("fast");
		
	}
	
	function showPrevious(id){
	
		if(id==1){
		id=CANTIDAD_TOTAL_IMAGENES+1;
		}
		
		id = id-1;
		
		//$(".gallery-outerframe-fullscreen").fadeOut("fast");
		$(".gallery-innerframe-fullscreen").css("background-image", "url('images/gallery/"+id+".jpg')");
		$("#previous").attr("onclick","showPrevious("+ id +")");
		$("#next").attr("onclick","showNext("+ id +")");
		//$(".gallery-outerframe-fullscreen").fadeIn("fast");

	}
	
	</script>
	

</head>

<body>

<div class="container" >

	<?php include '_header.php'; ?>

	<div class="middle" >
		<div id="gallery" class="image-frame-100" style="padding-top: 4rem; padding-bottom: 4rem;">
		</div>

		<div class="gallery-outerframe-fullscreen"  >
			
			<img id="previous" class="gallery-outerframe-leftArrow" src="images/arrow-left.svg" width="4%" />
			<img id="next" class="gallery-outerframe-rightArrow" src="images/arrow-right.svg" width="4%" />
			
			<div class="gallery-innerframe-fullscreen" onclick="hideFullscreen()" >
			</div>

			<div class="gallery-outerframe-close" onclick="hideFullscreen()" >
			[Cerrar]&nbsp
			</div>
			
			
		</div>
		
	</div>
	
	<?php include '_footer.php'; ?>
	
</div>

</body>
</html>

