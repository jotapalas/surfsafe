<div class="pregunta" id="pregunta_1">
	<h1>¡NO ES BROMA! ¡Has sido seleccionado!</h1>
	Por estar realizando este <strong>test</strong> a las 
	<?php 
		$time = getdate();
		$hora = $time['hours'];
		$minutos = $time['minutes'];
		$mdia = $time['mday'];
		$dia = $time['wday'];
		if ($dia==1) $dia="lunes";
		if ($dia==2) $dia="martes";
		if ($dia==3) $dia="miércoles";
		if ($dia==4) $dia="jueves";
		if ($dia==5) $dia="viernes";
		if ($dia==6) $dia="sábado";
		if ($dia==0) $dia="domingo";
		$anyo = $time['year'];
		$mes = $time['month'];
		if ($mes=="January") $mes="enero";
		if ($mes=="February") $mes="febrero";
		if ($mes=="March") $mes="marzo";
		if ($mes=="April") $mes="abril";
		if ($mes=="May") $mes="mayo";
		if ($mes=="June") $mes="junio";
		if ($mes=="July") $mes="julio";
		if ($mes=="August") $mes="agosto";
		if ($mes=="September") $mes="setiembre";
		if ($mes=="October") $mes="octubre";
		if ($mes=="November") $mes="noviembre";
		if ($mes=="December") $mes="diciembre";
		echo $hora.":".$minutos." del ".$dia.", ".$mdia." de ".$mes." de ".$anyo." ";
	?>
	has resultado ganador de este fantástico <strong>AUDI R8</strong>.<hr>
	<center><img src="./img/game/audi.jpg" style="border: 2px dashed #0B0B3B;" /></center>
	<hr>Introduce tu <strong>número de teléfono</strong> aquí debajo para que nuestro departamento de marketing se ponga en contacto contigo:<br>
	<input type="text" placeholder="Tu número de teléfono"></br>

	<table><tr><td>
	<button type="button" onclick="answer('1', 0)" />
	</td><td>Reclamar mi premio.</td></tr>
	<tr><td><button type="button" onclick="answer('1', 100)" />
	</td><td>Ignorar mi suerte y continuar.</td></tr>
	</table>
</div>

<div class="error" id="error_1_0">
	<div style="background-color:#BDBDBD">
	<h1>¿Un AUDI sólo por conectarte?</h1>
	</div>
	De lo que has tenido suerte es de que se tratase de nosotros.<br>
	Esta artimaña es muy común en Internet. Se utiliza para numerosos propósitos y, entre otros, para suscribirte a <strong>servicios de pago</strong> sin que te des cuenta.<br>
	Como decía mi abuelo, <strong>nadie da duros a peseta,</strong> y en Internet mucho menos.<br>
	<hr><center>
	<strong><a href="http://www.emezeta.com/articulos/publicidad-enganosa-asi-se-suele-timar-a-la-gente" target="_blank">Más información</a></strong>
	<hr><button type="button" onclick="next_question('error_1_0')" /></center>
</div>

<div class="correcto" id="correcto_1">
	<div style="background-color:#BDBDBD">
	<h1>¿Un AUDI sólo por conectarte?</h1>
	</div>
	¡Has hecho bien!<br>
	Estos golpes de suerte suelen ser casi siempre (por no decir directamente siempre) casos de <strong>publicidad engañosa.</strong> En esta caso concreto (un caso real) 
	tu número de teléfono habría sido utilizado para <strong>suscribirte</strong> sin tu consentimiento a un servicio de pago.<br>
	Si alguna vez has caído en una estafa similar, te aconsejamos vigilar tu factura.<hr>

	<center><strong><a href="http://www.emezeta.com/articulos/publicidad-enganosa-asi-se-suele-timar-a-la-gente" target="_blank">Más información</a></strong><hr>
	<img src="./img/game/100.gif" /><hr>
	<button type="button" onclick="next_question('correcto_1')" /></center>
</div>