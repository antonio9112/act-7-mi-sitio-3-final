<!-- {PHP archivo de encabezado con include} -->
<!-- {header.php esta dentro de la carpeta miplantilla} -->
<?php include('miplantilla/header.php');?> 

	<section class="principal">
		<div class="menuhorizontal">
			<div class="mensaje">
				<h1>Funciones ltrim, rtrim, chop y trim</h1>
			</div>

			<div class="articulo">
				<article>
                <img src="lasimagenes/ppp.jpg" alt="" width="600" height="300">
                <?php
//Asignación de valores
$cadena1 = 'Fundamentos de Programación con PHP';
$cadena2 = ' Fundamentos de Programación con PHP';
$cadena3 = 'Fundamentos de Programación con PHP ';
$cadena4 = ' Fundamentos de Programación con PHP ';
//Impresión
echo chop($cadena1,'Programación con PHP').'<br>';
echo ltrim($cadena2).'<br>';
echo rtrim($cadena3).'<br>';
echo trim($cadena4).'<br>';
?>
            <br><h2>Explicacion del problema para calcular salario</h2> <br>
					<p></p>
					<br/>
					<p>
					</p>
					<br/>
					<p>ltrim La función ltrim permite eliminar espacios en blanco, tabulaciones o cambios de
línea desde el lado izquierdo de una cadena de caracteres.
rtrim La función rtrim permite eliminar espacios en blanco, tabulaciones o cambios de
línea desde el lado derecho de una cadena de caracteres.
chop
Elimina caracteres desde el lado derecho de una cadena de caracteres, tiene
analogía con rtrim siempre y cuando no se especifique parámetros a la función
chop.
trim La función trim permite eliminar espacios en blanco, tabulaciones o cambios de
línea en ambos lados de una cadena de caracteres</p>

				</article>
			</div>
		<!-- {El archivo siderbar.php dentro de miplantilla} -->
		<?php include('miplantilla/sidebar.php');?> 

		</div>
	</section>
	<!-- {El archivo footer.php dentro de miplantilla} -->
	<?php include('miplantilla/footer.php');?> 
</body>
</html>