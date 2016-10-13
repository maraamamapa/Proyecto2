<?php
//Definimos la Clase ia.
class ia{
public $col;
public $fil;


	//Metodos: GET , haciendo referencia las funciones $col,$fil.
	public function getColumna()
    {
        return $this->columna;
    }
	public function getFila()
    {
        return $this->fila;
    }
	//Metodo: SET establece la funcion de modificar el contenido de las variables $col,$fil
	public function setColumna($col){
		$this->columna=$col;
	}
	public function setFila($fil){
		$this->fila=$fil;
	}
	// Esta nueva funcion, establece el rand, que es la obtencion de un numero aleatorio respetando los limites establecidos
	//En este caso, dicho numero aleatorio se muestra de 0 a 3, sin pasarse de ese limite.
	public function randomPos(){
		$this->columna=rand(0,3);
		$this->fila=rand(0,3);
		}
	}



?>
	