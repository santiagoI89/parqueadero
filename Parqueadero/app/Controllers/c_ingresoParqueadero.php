<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\m_persona;
class C_persona extends Controller{
    public function index()
    {

        $per = new m_persona();
        $datos['personas']=$per->findAll();
        return view('welcome_message',$datos);
    }
    public function insertar()
    {
       
        $per = new m_persona();

        $data=[
            'usuario' => $_POST['usuario'],
            'nombre' => $_POST['nombre'],
            'correo' => $_POST['correo'],
            'direccion' => $_POST['direccion'],
            'telefono' => $_POST['telefono'],
            'contraseña' => $_POST['contraseña'],
        ];

        $per->insert($data);
        return view('IniciarSesion');
       
        

        
    }
}
