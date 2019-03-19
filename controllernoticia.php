<?php
	include_once("classenoticia.php");
	$objnoticia = new noticia();
//fazer o formulario
//receber os dados do formulario
if(filter_input(INPUT_POST, "titulo") &&
	filter_input(INPUT_POST, "autor") &&
	filter_input(INPUT_POST, "curso") &&
	filter_input(INPUT_POST, "datapublicacao") &&
	filter_input(INPUT_POST, "descricao")
){
	
	$titulo = filter_input(INPUT_POST, "titulo");
	$autor = filter_input(INPUT_POST, "autor");
	$curso = filter_input(INPUT_POST, "curso");
	$datapublicacao = filter_input(INPUT_POST, "datapublicacao");
	$descricao = filter_input(INPUT_POST, "descricao");
	
	
	
	$dados=array($titulo, $autor, $curso, $datapublicacao, $descricao);
	$objnoticia->cadastrar($dados);
}
else{
	echo "Os campos não foram preenchidos!!";
}
?>