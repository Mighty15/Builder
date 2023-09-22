<?php

class procesador
{
	public $nucleos, $velocidad;
}

class phone
{

	public $procesador, $pantalla, $memoria, $resolucion, $camara, $bateria;

	public function __toString()
	{
		$salida = "Procesador: " . $this->procesador->nucleos .
			"" . $this->procesador->velocidad .
			"<br>Pantalla:" . $this->pantalla . "<br>Memoria:" . $this->memoria .
			"<br>Resolucion:" . $this->resolucion . "<br>Bateria:" . $this->bateria . "<br>Camara:" . $this->camara;
		return $salida;
	}

}

abstract class crearphone
{

	public $phone;

	public function crearphone()
	{
		$this->phone = new phone();
	}

	public abstract function buildProcesador();
	public abstract function buildPantalla();
	public abstract function buildMemoria();
	public abstract function buildResolucion();
	public abstract function buildBateria();
	public abstract function buildCamara();
}

class GalaxyM31 extends crearphone
{

	public function buildProcesador()
	{
		$procesador = new procesador();
		$procesador->nucleos = "Octa core";
		$procesador->potencia = "2.3 GHz";
		$this->phone->procesador = $procesador;
	}

	public function buildPantalla()
	{
		$this->phone->pantalla = "6,4 Pulgadas";
	}

	public function buildMemoria()
	{
		$this->phone->memoria = "6 GB";
	}

	public function buildResolucion()
	{
		$this->phone->resolucion = "UHD 4k";
	}

	public function buildBateria()
	{
		$this->phone->bateria = "6000 mAH";
	}

	public function buildCamara()
	{
		$this->phone->camara = "64MP + 8MP + 5MP + 5MP";
	}

}
class GalaxyNote10 extends crearphone
{

	public function buildProcesador()
	{
		$procesador = new procesador();
		$procesador->nucleos = "Octa core";
		$procesador->potencia = "2.7 GHz";
		$this->phone->procesador = $procesador;
	}
	public function buildPantalla()
	{
		$this->phone->pantalla = "6.7 Pulgadas";
	}

	public function buildMemoria()
	{
		$this->phone->memoria ="6 GB";
	}

	public function buildResolucion()
	{
		$this->phone->resolucion = "FHD +";
	}

	public function buildBateria()
	{
		$this->phone->bateria = "4500 mAH";
	}

	public function buildCamara()
	{
		$this->phone->camara = "12MP + 12MP + 12MP ";
	}

}

class PhoneDirector
{

	public $phoneBuilder;


	public function constructPhone()
	{

		$this->phoneBuilder->crearphone();
		$this->phoneBuilder->buildMemoria();
		$this->phoneBuilder->buildResolucion();
		$this->phoneBuilder->buildProcesador();
		$this->phoneBuilder->buildPantalla();
		$this->phoneBuilder->buildBateria();
		$this->phoneBuilder->buildCamara();
	}

	public function getPhone()
	{
		return $this->phoneBuilder->phone;
	}
}

?>