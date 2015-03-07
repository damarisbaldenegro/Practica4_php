
		<?php
		
		$c1 = $_POST['Cantidad1'];
		$p1 = $_POST['Producto1'];
		$pu1 = $_POST['PrecioUnit1'];
		
		$c2 = $_POST['Cantidad2'];
		$p2 = $_POST['Producto2'];
		$pu2 = $_POST['PrecioUnit2'];
		
		$c3 = $_POST['Cantidad3'];
		$p3 = $_POST['Producto3'];
		$pu3 = $_POST['PrecioUnit3'];
		
		$resultado = $c1 * $pu1;
		$resultado1 = $c2 * $pu2; 
		$resultado2 = $c3 * $pu3; 
		$Suma = $resultado + $resultado1 + $resultado2;
		$iva = $Suma*.16;
		$total =$iva + $Suma;
		
		echo "<table  BORDER=5 >";
			echo "<tr  BGCOLOR=#6D8FFF>";
                echo "<th>Producto</th>";
                echo "<th>Total</th>";
            echo  "</tr>";
           
            echo "<tr align=center>";
                echo " <td>$p1       </td>";
                echo " <td>$resultado</td>";
            echo "</tr>";
				
			echo "<tr align=center>";
				echo " <td>$p2       </td>";
				echo " <td>$resultado1</td>";
			echo "</tr>";
		
			echo "<tr align=center>";
				echo " <td>$p3       </td>";
				echo " <td>$resultado2</td>";
			echo "</tr>";
			
			echo "<tr align=center>";
				echo " <td>  SUBTOTAL   </td>";
				echo " <td>$Suma</td>";
			echo "</tr>";
		
			echo "<tr align=center>";
				echo " <td>  IVA    </td>";
				echo " <td>$iva</td>";
			echo "</tr>";
		
			echo "<tr align=center>";
				echo " <td>  TOTAL   </td>";
				echo " <td>$total</td>";
			echo "</tr>";
		  
		  
		  
		  

			?>
			
		   
