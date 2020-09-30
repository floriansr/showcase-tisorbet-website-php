	<div class="header" >

		<div id="top-logo-desktop"  class="desktop-only top-logo"  onclick="location.href='./';" />
                   <img  src="images/logoBlanco.svg" width="250px"/>
                </div>

		<div id="top-logo-tablet"  class="tablet-only top-logo"  onclick="location.href='./';" />
                    <img src="images/logoBlanco.svg" width="250px"/>
                </div>

		<div id="top-logo-mobile"  class="mobile-only top-logo"  onclick="location.href='./';" />
		    <img src="images/logoBlanco.svg" width="250px" height="125px"/>
                </div>

		<div id="top-cotiza-desktop" class="desktop-only top-cotiza" onclick="toogleCotizador();" >
			<img class="icon" src="images/cotiza-red1.svg" width="25px" /> COTIZA TU EVENTO
		</div>

                <div id="top-cotiza-tablet" class="tablet-only top-cotiza" " onclick="toogleCotizador();" >
			<img class="icon" src="images/cotiza-red1.svg" width="55px"/>
		</div>

		<div id="top-cotiza-mobile" class="mobile-only top-cotiza" onclick="toogleCotizador();" >
			<img class="icon" src="images/cotiza-red1.svg" width="55px" style="padding: 0px;"/>
		</div>





		
		<div id="top-hamburger-mobile" class="mobile-only top-hamburger" onclick="toogleHamburger();" >
			<img class="icon" src="images/hamburger.svg" width="55px" />
		</div>



                <div id="top-hamburger-tablet" class="tablet-only top-hamburger" onclick="toogleHamburger();" >
			<img class="icon" src="images/hamburger.svg" width="55px" />
		</div>


		
		
		<img class="desktop-only top-arrow" src="images/arrow.gif" width="110px" />




		
		<div class="desktop-only top-contacto" >
			<img class="icon" src="images/wapp.svg" width="25px" onclick="window.location.href = 'tel:55-7222-7457';" />
				<a class="nostyle" href="tel:55-7222-7457" >55-7222-7457</a> &nbsp 
			<img class="icon" src="images/email.svg" width="25px" onclick="window.location.href = 'mailto:contacto@tisorbet.com';" />
				<a class="nostyle" href="mailto:contacto@tisorbet.com">contacto@tisorbet.com</a> &nbsp 
			<br>
			<img class="icon" src="images/facebook.svg" width="35px" onclick="window.open('https://www.facebook.com/TiSorbet');" /> &nbsp 
			<img class="icon" src="images/instagram.svg" width="35px" onclick="window.open('https://www.instagram.com/TiSorbet');" /> &nbsp 
			<!-- <img class="icon" src="images/twitter.svg" width="35px" onclick="window.open('https://www.twitter.com');" /> -->
		</div>


		
		<div class="desktop-only menu-container" style="border-bottom: 1px solid lightgrey;" >
			<div class="menu-btn" onclick="location.href='./';" >INICIO</div>
			<div class="menu-btn" onclick="location.href='catering';" >MENU</div>
			<div class="menu-btn" onclick="location.href='quienes';" >QUIÉNES SOMOS</div>
			<!--<div class="menu-btn" onclick="location.href='eventos';" >BOOK</div> -->
			<div class="menu-btn" onclick="location.href='contacto';" >CONTACTO</div>
		</div>
		
		<div class="small-menu-container" >
			<img class="top-logo-small" src="images/logoSimple.svg" width="150px" style="margin-left:5px;" />	
			<div class="menu-btn" onclick="location.href='./';" >INICIO</div>
			<div class="menu-btn" onclick="location.href='catering';" >MENU</div>
			<div class="menu-btn" onclick="location.href='quienes';" >QUIÉNES SOMOS</div>
			<!-- <div class="menu-btn" onclick="location.href='eventos';" >BOOK</div> -->
			<div class="menu-btn" onclick="location.href='contacto';" >CONTACTO</div>
			<div class="top-cotiza-small" onclick="toogleCotizador();" >
				<img class="icon" src="images/cotiza-red1.svg" width="15px" /> COTIZA TU EVENTO
			</div>
		</div>
		
		<div class="hamburger-menu" >
			<!-- <img src="images/logoSimple.svg" width="150px" style="margin-left:5px;" /> -->
			<div class="hamburger-menu-btn" onclick="location.href='./';" >INICIO</div>
			<div class="hamburger-menu-btn" onclick="location.href='catering';" >MENU</div>
			<div class="hamburger-menu-btn" onclick="location.href='quienes';" >QUIÉNES SOMOS</div>
			<!-- <div class="hamburger-menu-btn" onclick="location.href='eventos';" >BOOK</div> -->
			<div class="hamburger-menu-btn" onclick="location.href='contacto';" >CONTACTO</div>
			<div class="top-cotiza-small" onclick="toogleCotizador();" >
				<img class="icon" src="images/cotiza-red1.svg" width="15px" /> COTIZA TU EVENTO
			</div>
		</div>
		
		<?php include '_cotizador.php'; ?>
		
	</div>
	
