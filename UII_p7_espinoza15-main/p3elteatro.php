<!-- {PHP archivo de encabezado con include} -->
<!-- {header.php esta dentro de la carpeta miplantilla} -->
<?php include('miplantilla/header.php');?> 

	<section class="principal">
		<div class="menuhorizontal">
			<div class="mensaje">
				<h1>Venta de entradas al Teatro usando condicional múltiple con switch</h1>
			</div>

			<div class="articulo">
				<article>
                <img src="lasimagenes/pago.png" alt="" width="400" height="300">
                <br>
                <br>
                <?php
 //Implementación de la función pago
 function determinaPago($categoria='Administrativo'){
 if ($categoria=='Operario')
 return 750;
 elseif ($categoria=='Administrativo')
 return 1750;
 elseif ($categoria=='Jefe')
 return 2750;
 }

 //Invocando la función
 echo 'El pago por defecto es: '. determinaPago();
 echo '<br>El pago del Jefe es: '. determinaPago('Jefe');
?>
    <br><h2>Explicacion del problema para calcular salario</h2> <br>
					<p> los parámetros son valores de entrada a la función; es decir, son valores que son necesarios
para completar la función. En realidad, debemos determinar cuáles son los datos que necesita una
función para realizar una tarea específi ca; ellos serán los parámetros</p>
					<br/>
					<p>
					<br/>
					<p></p>

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