<?php 
require_once("ConexionDB.php");

function ejecutarSql($sql){
	$con=new ConexionDB();
	if($con->estado!=false){
		$con->Ejecuto($sql);				
	}
	$con->Libero();
}
function login(){
	$errorMessage = '';
	
	$userName = $_POST['txtUserName'];
	$password = md5($_POST['txtPassword']);
	
	// validacion de nombre de usuario
	if ($userName == '') {
		$errorMessage = 'Debe ingresar un usuario';
	} else if ($password == '') {
		$errorMessage = 'Debe ingresar una contraseña';
	} else {
		// verifica si coinciden
				
		if ($userName == 'admin' && $password == md5('paisaje.2014')) {
			$_SESSION['admin'] = true;
			header('Location: index.php');
			exit; 
		} else {
			$errorMessage = 'Usuario y contrase&ntilde;a incorrecta';
		}		
	}
	return $errorMessage;
}

function checkUser()
{
	// si la sesion de id no esta seteada va al login
	if (!isset($_SESSION['admin'])) {
		header('Location:'.WEB_ROOT.'admin/login.php');
		exit;
	}
	// the user want to logout
	if (isset($_GET['logout'])) {
		logout();
	}
}
function logout()
{
	if (isset($_SESSION['admin'])) {
		unset($_SESSION['admin']);
		session_unregister('admin');
	}
		
	header('Location:'.WEB_ROOT.'admin/login.php');
	exit;
}

function retornarAbout(){
	$con=new ConexionDB();
	if($con->estado!=false){
		$sql="SELECT about  FROM general";
		$con->Ejecuto($sql);	
		$txt=$con->Dato("about");
		return $txt;
		
	}else{
		return false;
	}
	$con->Libero();
}

function cargarPersonas(){
	$con = new ConexionDB();
	if($con->estado!=false){
	$sql = "SELECT * FROM persona";
	$con->Ejecuto($sql);
		$array=array();
		while($con->Siguiente()){
			array_push($array,array("id"=>$con->Dato("id"),
							"nombre"=>$con->Dato("nombre"),
							"titulo"=>$con->Dato("titulo"),
							"descripcion"=>$con->Dato("descripcion"),
							"foto"=>$con->Dato("foto")));
		}	
		return $array;	
	}
	$con->Libero();
}

function cargarOurWork(){
	$con = new ConexionDB();
	if($con->estado!=false){
	$sql = "SELECT * FROM trabajo";
	$con->Ejecuto($sql);
		$array=array();
		while($con->Siguiente()){
			array_push($array,array("id"=>$con->Dato("id"),
							"imagen"=>$con->Dato("nombre_imagen")));
		}	
		return $array;	
	}
	$con->Libero();
}
function cargarProjects(){
	$con = new ConexionDB();
	if($con->estado!=false){
	$sql = "SELECT * FROM proyecto";
	$con->Ejecuto($sql);
		$array=array();
		while($con->Siguiente()){
			array_push($array,array("id"=>$con->Dato("id"),
							"imagen"=>$con->Dato("nombre_imagen")));
		}	
		return $array;	
	}
	$con->Libero();
}
function cargarPress(){
	$con = new ConexionDB();
	if($con->estado!=false){
	$sql = "SELECT * FROM prensa";
	$con->Ejecuto($sql);
		$array=array();
		while($con->Siguiente()){
			array_push($array,array("id"=>$con->Dato("id"),
							"imagen"=>$con->Dato("nombre_imagen")));
		}	
		return $array;	
	}
	$con->Libero();
}

function devolverImagenProyecto($id){
	$con = new ConexionDB();
 	$sql = "SELECT nombre_imagen 
            FROM proyecto
            WHERE id = $id";
	$con->Ejecuto($sql);
	$img = $con->Dato("nombre_imagen");
	return $img;
	$con->Libero();
}
function devolverImagenUser($id){
	$con = new ConexionDB();
 	$sql = "SELECT foto 
            FROM persona
            WHERE id = $id";
	$con->Ejecuto($sql);
	$img = $con->Dato("foto");
	return $img;
	$con->Libero();
}


function getMember($id){
	$con = new ConexionDB();
	$sql = "SELECT id, nombre, titulo, descripcion, foto
		FROM persona
		WHERE id =".$id;
	$con->Ejecuto($sql);
	$array=array("id"=>$con->Dato("id"),
		"nombre"=>$con->Dato("nombre"),"foto"=>$con->Dato("foto"),"titulo"=>$con->Dato("titulo"),
		"descripcion"=>$con->Dato("descripcion"));
	$con->Libero();
	return $array;
}



function devolverImagenTrabajo($id){
	$con = new ConexionDB();
 	$sql = "SELECT nombre_imagen 
            FROM trabajo
            WHERE id = $id";
	$con->Ejecuto($sql);
	$img = $con->Dato("nombre_imagen");
	return $img;
	$con->Libero();

}

function devolverImagenPrensa($id){
	$con = new ConexionDB();
 	$sql = "SELECT nombre_imagen 
            FROM prensa
            WHERE id = $id";
	$con->Ejecuto($sql);
	$img = $con->Dato("nombre_imagen");
	return $img;
	$con->Libero();

}



?>
