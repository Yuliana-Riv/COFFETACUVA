<?php 
namespace App\Models;
use CodeIgniter\Model;

class FormularioModel extends Model{
    protected $table = "formularios";
    protected $primaryKey = "id";

    protected $allowedFields = [
        "id",
        "titulo",
        "estado"
    ];
}
?>