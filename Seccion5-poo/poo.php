<?php
// 1. Clases 2. Palabra this
// Una clase
class Automovil{

	// Son propiedades
	public $marca;
	public $year;
	public $serie;

	// Las funciones se llaman metodos
	public function mostrarInformacion(){
		echo "Hola mundo la marca del carro es $this->marca";
	}

}

// Instancia sencilla asignando propiedades
/*$auto = new Automovil;
$auto->marca = 'BMW';
$auto->year = '2022';
$auto->seire = '55651651C';*/

// Podemos usar las propiedades/metodos de la clase
/*echo $auto->mostrarInformacion();*/

// 3. Metodo constructor
class Persona{

	public $nombre;
	public $edad;
	public $pais;

	function __construct($nombre, $edad, $pais){
		$this->nombre = $nombre;
		$this->edad = $edad;
		$this->pais = $pais;
	}

	public function mostrarInformacion(){
		return 'Nombre:' . $this->nombre . 'Edad:' . $this->edad . 'Pais:' . $this->pais; 
	}

}


// 4 Herencia
class Estudiante extends Persona{

	// Si ponemos esta propiedad, creamos una nueva, si la eliminamos haremos uso de la propiedad de persona
	public $carrera;

	function __construct($nombre, $edad, $pais, $carrera)
	{
		// Pasamos las propiedades a la clase de cual extiende estudiandte
		parent::__construct($nombre, $edad, $pais);
		$this->carrera = $carrera;
	}

}

$alejandro = new Estudiante('Manuel Alejandro', 32, 'Mexico', 'Desarrollador');
$manuel = new Persona('Manuel', 33, 'Mexico');
/*echo $alejandro->carrera;
echo $manuel->nombre;*/

// 5. Scope
// Public
// Pueden ser accedidos desde cualquier parte, ya sea dentro o fuera de nuestra clase.

// Protected
// Pueden ser accedidos desde dentro de la clase y otras clases que heredaron. Pero no fuera de estas.

// Private
// Solo pueden ser accedidos desde dentro de la clase en la que fueron creados.
// Es decir que no podemos acceder a ellos desde otra clase que heredo y tampoco podemos acceder desde fuera de las clases.

class Usuario{

	public $nombre;
	protected $correo;

	function __construct($nombre, $correo)
	{
		$this->nombre = $nombre;
		$this->correo = $correo;
	}

	public function mostrarCorreo(){
		return $this->correo;
	}

}

class Role extends Usuario{
	public function mostrarCorreo(){
		// Si cambiamos esta propiedad a privada desde la clase 
		//usuario y no creamos una nueva en la funcion local, no podemos acceder ni hacer uso de ella
		return 'Este es el correo:' . $this->correo;
	}
}

$usuario = new Usuario('Manuel Alejandro', 'alejandrotsu23@gmail.com');
// No puede acceder desde fuera de la clase
//echo $usuario->correo;

// Desde aqui no puede acceder al correo ya que a pesar de que extiende de la clase usuario, la propiedad es privada
$role = new Role('Manuel', 'alejandrotsu23@gmail.com');
echo $role->mostrarCorreo();

//6. Clases abstractas
// Es una forma de proteger toda la clase, no se puede acceder a una clase a menos que se herede
abstract class User{

	public function saludo()
	{
		return 'Hola';
	}

}

class Student extends User{

}

$user = new Student;
echo $user->saludo();

// 7. Static


