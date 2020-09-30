		<div class="cotizador" >
		
			<center>
			<br>
			<div style="background-color:#040b1a;width:100%;min-height:20px;position:relative;" >
			<center><img class="desktop-only" src="images/logoBlanco.svg" width="200px" /></center>
			<div onclick="toogleCotizador();" style="position:absolute;top:0px;right:5px;color:white;font-size:14px;font-weight:bold;cursor:pointer;" >
			[Cerrar]
			</div>
			</div>
			<br>
			<div style="font-size:20px; font-weight:700;color:black;padding:3px;" > SOLICITUD DE COTIZACIÓN</div>
			</center>
			
			<p style="font-size:14px;max-height: 999999px;" ><i>Actualmente sólo se realiza catering/eventos dentro de la ciudad de Mexico y su área metropolitana. El llenado de esta forma no garantiza la reservación, sin embargo un representante de TI SORBET dará seguimiento a su solicitud dentro de las siguientes 24 horas para confirmar la disponibilidad.</i></p>
			
			<form action="_cotizadorProcess.php" method="post" >
			<label for="name">Nombre</label>
			<input type="text" pattern="^[a-zA-Z áéíóúÁÉÍÓÚñÑ.'-]+$" id="name" name="name" placeholder="" size="30" required > <span style="font-size:11px;" >(Sólo letras A-Z)</span>
			<br>
			<label for="email">E-Mail</label>
			<input type="email" pattern="^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$" id="email" name="email" placeholder="" size="35" required >
			<br>
			<label for="tel">Teléfono/Celular</label>
			<input type="number" maxlength="10" id="tel" name="tel" placeholder="" required ><span style="font-size:11px;" >(10 dígitos)</span>
			<br>
			<label for="date">Fecha del Evento</label>
			<input type="date" id="date" name="date" placeholder="" required >
			<br>
			<label for="tipoEvento">Tipo de Evento</label>
			<select id="tipoEvento" name="tipoEvento" required >
			  <option selected disabled value >---Seleccione---</option>
			  <option value="Boda">Boda</option>
			  <option value="Quince">XV años</option>
			  <option value="Cumple">Cumpleaños</option>
			  <option value="Posada">Posada</option>
			  <option value="Aniversario">Aniversario</option>
			  <option value="Bautizo">Bautizo</option>
			  <option value="PrimeraComunion">Primera Comunión</option>
			  <option value="Corporativo">Evento Corporativo</option>
			  <option value="Otro">Otro</option>
			</select>
			<br>
			<label for="lugarEvento">Lugar del Evento</label>
			<input type="text" pattern="^[a-zA-Z áéíóúÁÉÍÓÚñÑ.'-]+$" id="lugarEvento" name="lugarEvento" placeholder="" required > <span style="font-size:11px;" >(Sólo letras A-Z)</span>
			<br>
			<label for="asistentes">Número de Asistentes</label>
			<input type="number" id="asistentes" name="asistentes" step="1" min="1" placeholder="" required style="width: 70px;" > <span style="font-size:11px;" >(Sólo números)</span>
			<br>
			<center>
			<input style="font-size:16px;font-weight:700;" type="submit" value="Submit" >
			<br>
			<br>
			</center>
			</form>
		</div>