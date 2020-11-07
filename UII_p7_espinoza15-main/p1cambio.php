<!-- {PHP archivo de encabezado con include} -->
<!-- {header.php esta dentro de la carpeta miplantilla} -->
<?php include('miplantilla/header.php');?> 

	<section class="principal">
		<div class="menuhorizontal">
			<div class="mensaje">
				<h1>ARREGLOS MULTIDIMENSIONALES</h1>
			</div>

			<div class="articulo">
				<article>
                    <img src="lasimagenes/regis.png" alt="" width="600" height="300">
                    <br>
                    <br>
                    <?php
 $empleados = array('EMP001'=>array('Nombre'=>'Juan Pérez',
 'Sueldo'=>2000,
 'FechaReg'=>'10/10/2010',
 'Categoría'=>'A'),
 'EMP002'=>array('Nombre'=>'María López',
 'Sueldo'=>1400,
 'FechaReg'=>'10/02/2010',
 'Categoría'=>'B'),
 'EMP003'=>array('Nombre'=>'Carlos Caraza',
 'Sueldo'=>2000,
 'FechaReg'=>'21/12/2011',
 'Categoría'=>'A'),
 'EMP004'=>array('Nombre'=>'Martin Martinez',
 'Sueldo'=>800,
 'FechaReg'=>'12/08/2011',
 'Categoría'=>'D'));
 echo 'LISTADO DE EMPLEADOS<br><br>';
 echo '<table border="1" width="700" cellspacing="0" cellpadding="0">';
 echo '<tr>
 <td width="100"><strong>Codigo</strong></td>
 <td width="200"><strong>Empleado</strong></td>
 <td width="100"><strong>Sueldo</strong></td>
 <td width="100"><strong>Fecha de Registro</strong></td>
 <td width="100"><strong>Categoria</strong></td>
 </tr>';
 while(list($codigo,$datos) = each($empleados)){
 echo '<tr><td>';
 echo $codigo;
 echo '</td>';
 echo '<td>';
 echo $datos['Nombre'];
 echo '</td>';
 echo '<td>';
 echo 'S/. '.number_format($datos['Sueldo'],'2','.','');
 echo '</td>';
 echo '<td>';
 echo $datos['FechaReg'];
 echo '</td>';
 echo '<td>';
 echo $datos['Categoría'];
 echo '</td></tr>';
 }
 echo '</table>';
?>
                <br><h2>Explicacion del problema</h2> <br>
    
               <br>
               Se le llama así cuando un arreglo cuenta con más de un índice, esto ocurre cuando un elemento de un
arreglo unidimensional conti ene muchos valores más, es decir, otro arreglo,Otra forma de implementar.
               <br>
               <br>
               

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