<div class="pregunta" id="pregunta_4">
	<h2 style="text-align:center">Tu banco ha perdido tus datos</h2>
	<p style="text-align:justify">
		Has recibido un correo del banco. En él te explican que han perdido tus datos y <strong>no puedes utilizar tu tarjeta</strong> 
		en ningún comercio hasta que rellenes un sencillo formulario.
	</p>
	<center><img src="./img/game/phishing.png" style="border:2px #0B0B3B dashed"/></center>
	<p style="text-align:justify">
		Te presentan un formulario como el de la imagen y procedes a rellenarlo...
	</p>
	<table>
	<tr><td><button type="button" onclick="answer('4', 0)" />
	</td><td>Suelo usar mucho mi tarjeta, así que esto me corre prisa</td></tr>
	<tr><td><button type="button" onclick="answer('4', 50)" />
	</td><td>Llamaré a mi banco. Prefiero arreglarlo por teléfono</td></tr>
	<tr><td><button type="button" onclick="answer('4', 100)" />
	</td><td>Qué bobada, además apenas uso la tarjeta</td></tr>
	</table>
</div>

<div class="error" id="error_4_0">
	<h1>¿Hace cuánto que no usas tu tarjeta?</h1><hr>
	<center><img src="./img/game/phishing2.jpg" style="border: 2px #0B0B3B dashed" /></center><hr>
	<p style="text-align:justify">
	No te preocupes, alguien la usará por ti a partir de ahora. ¡O la usaría si de verdad hubieras rellenado ese formulario!
	</p>
	<p align="justify">
	Esta técnica se conoce como <strong><i>phishing</i></strong> y es utilizada por muchos criminales para robar los datos de 
	tus tarjetas o cuentas bancarias y utilizarlos en su beneficio. Desconfía siempre de cualquier comunicación de este estilo y,
	en última instancia, ponte en contacto con tu banco para confirmar que todo es correcto.
	</p>
	<p align="justify">
	También puedes fijarte en la barra del navegador. Si en ella no encuentras escrito <strong>https://</strong> antes de la dirección
	del banco, seguramente no se trate de una página oficial. Además, como los nombres de los bancos están cogidos (como es obvio) por los 
	propios bancos, las direcciones de estas páginas web falsas suelen contener faltas de ortografía como las de la imagen más arriba.
	</p><hr>
	<center><strong><a href="http://www.pandasecurity.com/spain/homeusers/security-info/cybercrime/phishing/#" target="_blank">Más información</a></strong>
	<hr><button type="button" onclick="next_question('error_4_0')" /></center>
</div>

<div class="error" id="correcto_4">
	<h1>¿Hace cuánto que no usas tu tarjeta?</h1><hr>
	<center><img src="./img/game/phishing2.jpg" style="border: 2px #0B0B3B dashed" /><hr>
	<p style="text-align:justify">
	Al ignorar este correo, has evitado caer en una trampa conocida como <strong><i>phishing</i></strong>. La intención 
	de los criminales que te enviaron ese correo no era otra que la de obtener los datos de tu tarjeta de crédito y utilizarlos en su 
	beneficio.
	</p>
	<p align="justify">
	No obstante, esta técnica tiene muchas formas, y hay que aprender a protegerse de ella. Para ello puedes fijarte en la barra del navegador. Si en ella no encuentras escrito <strong>https://</strong> antes de la dirección
	del banco, seguramente no se trate de una página oficial. Además, como los nombres de los bancos están cogidos (como es obvio) por los 
	propios bancos, las direcciones de estas páginas web falsas suelen contener faltas de ortografía como las de la imagen más arriba.
	</p>
	<hr><center><strong><a href="http://www.pandasecurity.com/spain/homeusers/security-info/cybercrime/phishing/#" target="_blank">Más información</a></strong>
	<hr><img src="./img/game/100.gif" /><br>
	<hr><button type="button" onclick="next_question('correcto_4')" /></center>
</div>

<div class="error" id="error_4_50">
	<h1>¿Hace cuánto que no usas tu tarjeta?</h1><hr>
	<center><img src="./img/game/phishing2.jpg" style="border: 2px #0B0B3B dashed" /><hr>
	<p style="text-align:justify">
	Has hecho bien en consultar con tu banco. Has evitado caer en una trampa conocida como <strong><i>phishing</i></strong>, 
	ya que desde la oficina seguramente te informarán de que tus datos no han sufrido daño alguno y todo está correcto. La intención 
	de los criminales que te enviaron ese correo no era otra que la de obtener los datos de tu tarjeta de crédito y utilizarlos en su 
	beneficio.
	</p>
	<p align="justify">
	No obstante, esta técnica tiene muchas formas, y hay que aprender a protegerse de ella. Para ello puedes fijarte en la barra del navegador. Si en ella no encuentras escrito <strong>https://</strong> antes de la dirección
	del banco, seguramente no se trate de una página oficial. Además, como los nombres de los bancos están cogidos (como es obvio) por los 
	propios bancos, las direcciones de estas páginas web falsas suelen contener faltas de ortografía como las de la imagen más arriba.
	</p>
	<hr><center><strong><a href="http://www.pandasecurity.com/spain/homeusers/security-info/cybercrime/phishing/#" target="_blank">Más información</a></strong>
	<hr><img src="./img/game/50.gif" /><br>
	<hr><button type="button" onclick="next_question('error_4_50')" /></center>
</div>