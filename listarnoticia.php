<?php
	include (""classenoticia.php);
		$listarnoticia = new noticia();
		$valor = listarnoticia->buscarTodos();
print_r($valor);

?>
<table>
	<th>Item</th>
	<th>Título</th>
	<th>Autor</th>
	<th>Ação</th>
	<tr>
			<td></td>
	</tr>
</table>




