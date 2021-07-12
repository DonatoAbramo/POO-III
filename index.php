
<?php



class Persona{


// Atributos...
public $nombre;

public $apellido;

public $dni;

public $altura;

public $peso;


//METODO 1
function yearNacimiento($edad,$añoactual){


    $añonacimiento= $añoactual-$edad;

    return $añonacimiento;

}


//METODO 2
function IMC($peso,$altura){

$imc= $peso/(pow($altura,2));
return $imc

}




//METODO 3
function mayorDeEdad($edad){



if($edad>=18){


    return true;
}else{

    return false;
}



}


}


//Clase heredada:
class Alumno extends Persona{


}



//Objetos

$persona1 = new Persona(); 

$persona2 = new Persona(); 

$alumno = new Alumno();






?>



















