<?php
namespace App\Models;
use CodeIgniter\Model;

class BeritaModel extends Model {
    protected $table = 'halaman';

    protected $allowedFields = ['judulhalaman', 'author', 'isihalaman', 'tglposting'];
}
?>