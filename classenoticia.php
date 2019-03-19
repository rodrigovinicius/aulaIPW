<?php
class Noticia{
	public $id, $titulo, $descricao, $autor;
	public $datapublicacao, $curso;
	
	public function setTitulo($Titulo){
		$this->Titulo = $Titulo;	
	}
	public function setDescricao($Descricao){
		$this->Descricao = $Descricao;	
	}
	public function setAutor($Autor){
		$this->Autor = $Autor;	
	}
	public function setDatapublicacao($Datapublicacao){
		$this->Datapublicacao = $Datapublicacao;	
	}
	public function setCurso($Curso){
		$this->Curso = $Curso;	
	}
	
	
	
	public function getTitulo(){
		return $this->Titulo;	
	}
	public function getDescricao(){
		return $this->Descricao;	
	}
	public function getAutor(){
		return $this->Autor;	
	}
	public function getDatapublicacao(){
		return $this->Datapublicacao;	
	}
	public function getCurso(){
		return $this->Curso;	
	}
	public function cadastrar($dados){
		list($titulo, $autor, $curso, $datapublicacao, $descricao) = $dados;
		$this->setTitulo($titulo);
		$this->setDescricao($descricao);
		$this->setAutor($autor);
		$this->setDatapublicacao($datapublicacao);
		$this->setCurso($curso);
		
$conectar = new msqli("localhost","root","","basenoticia");		
$sql = "insert into noticia(titulo, descricao, autor, datapublicacao,curso)"
	values (
	'{$this->gettitulo()}'
	'{$this->getdescricao()}'
	'{$this->getautor()}'
	'{$this->getdatapublicacao()}'
	'{$this->getcurso()}'	
	)
	";
$gravar = $conectar->query($sql);
$num = $conectar->affected_rows();
if($num==1) {	
		echo"<fieldset>";
		echo"<h2>salvo com sucesso</h2>";
		echo"<br>Titulo:". $this->getTitulo();
		echo"<br>Descricao:". $this->getDescricao();		
		echo"<br>Autor:". $this->getAutor();
		echo"<br>Publicado em:". $this->getDatapublicacao();
		echo"<br>Curso:". $this->getCurso();
		echo"<br>";
		echo"</fieldset>";
	}else{	
		echo "<fieldset>";	
		echo "erro na gravação de dados";
		echo "</fieldset>";
		}
}
	public function alterar($dados){}	
	public function excluir($id){}	
	public function buscarUm($id){}	
	public function buscarTodos(){
		$conectar = new mysqli  ("localhost""root""noticia")	
	$listar = $conectar->query($sql);
$noticia = array();	
	while($linha = $listar->fetch_array()){
$noticia[] = $linha;	
	}return $noticia
}	
	}
}
?>