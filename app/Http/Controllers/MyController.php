<?php 
namespace App\Http\Controllers;

use App\Prueba;
/**
* 
*/
class MyController extends Controller
{
	
	public function index()
	{
		$modelo = new Prueba();

		$saludo = $modelo -> saludar("Vico");
		return view('prueba.index', ['saludo' =>  $saludo ]);
	}
}

 ?>