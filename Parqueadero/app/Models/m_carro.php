<?php 
namespace App\Models;

use CodeIgniter\Model;

class M_persona extends Model{
    protected $table      = 'vehiculos';
    // Uncomment below if you want add primary key
     protected $primaryKey = 'id';

    protected $allowedFields = ['placa','marca','modelo','fecha_ingreso','fecha_salida'];
}