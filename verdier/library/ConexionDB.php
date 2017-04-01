<?php
  class ConexionDB {
    var $link = false;
    var $estado = false;
    var $sql = '';
    var $result = null;
    var $linea = null;

  //Constructor : Los valores si no se reciben por defecto son :
  //    $server = localhost
  //    $basedatos = test
  //    $user = root
  //    $pass = root
    function ConexionDB($server="localhost",$basedatos="verdier",$user="root",$pass="root") {
      if ($this->link=mysqli_connect("$server","$user","$pass")) {
        if (mysqli_select_db($this->link,"$basedatos")){
          //Marco que me conecté
          $this->estado=true;
    }else {
        //Marco que no me conecté
        $this->estado=false;
      }
      }
      else {
      //Marco que no me conecté
        $this->estado=false;
        }
    }
    
    

  //Tamano : retorna la cantidad de lineas de la consulta
    function Tamano() {
     return mysqli_num_rows($this->result);
  }

  //Siguiente : Obtengo el próximo registro
    function Siguiente () {
      //Si se ejecutó una consulta
      if ($this->result <> null) {
        //Obtengo y retorno la próxima linea
      $this->linea = mysqli_fetch_array($this->result);
    $retorno=$this->linea;
      }
      else {
        $retorno=null;
        }
      return $retorno;
    }

  //Libero : libero los recursos de la consulta y cierro la conexión
    function Libero() {
      if ($this->result <> null) {
        mysqli_free_result($this->result);
        }
      mysqli_close($this->link);
    }

  //Ejecuto : la sql recibida contra la conexión establecida
    function Ejecuto($sql = '') {
      //Guardo la sql recibida
    if ($sql <> '') {
      $this->sql = $sql;
      }
    //Ejecuto la consulta sobre la conexión establecida
      $this->result = mysqli_query($this->link,$this->sql);
      //Si no hay error almaceno el puntero a los registros
      if ($this->result <> null) {
        $retorno=$this->result;
        }
      else {
        $retorno=null;
        }
      return $retorno;
    }

  //Dato : Obtiene la info de un campo en particular
    function Dato($campo = '') {
      //Si hay una consulta que fue ejecutada
      if ($this->result <> null) {
        //Si no tengo un alinea obtenida mediante Siguiente, la obtengo
        if ($this->linea == null) {
          $this->linea = mysqli_fetch_array($this->result);
          }
        $retorno=$this->linea["$campo"];
        }
      else {
        $retorno = "";
        }
      return $retorno;
    }

    //UltimoID : Funcion que retorna el ultimo autogenerado por un INSERT
    function UltimoID() {
    return mysqli_insert_id($this->link);
  }
  }
?>