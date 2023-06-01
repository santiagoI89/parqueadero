<?php 
namespace App\Models;

use CodeIgniter\Model;

class M_persona extends Model{
    protected $table      = 'pacientes';
    // Uncomment below if you want add primary key
     protected $primaryKey = 'usuario';

    protected $allowedFields = ['nombre','correo','direccion','telefono','contraseña'];
}