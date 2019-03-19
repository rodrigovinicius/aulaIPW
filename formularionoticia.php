<style>
	.form{
border:1px dashed black
background-color: #e2e2e2;
width: 400px;	
	}
	.campos{
	width: 400px
	height: 35px
		
	}
</style>	
	<div class="form">
	<h1>Cadastro de noticia</h1>
<form action = "controllernoticia.php" method="post"></form>
	<label>titulo: </label>
	<input type="text" name="titulo" class="campos"><br>	
	<label>descrição: </label>
	<textarea name="descricao" rows="8" cols="50"></textarea>
	<label>autor: </label>
	<input type="text" name="autor" class="campos"><br>
	<label>publicado: </label>
	<input type="date" name="publicado em:"><br>
	<label>curso: </label>
	<input type="text" name="curso" class="campos"><br>
	<input type="submit" value="Enviar">
</form>
</div>
	