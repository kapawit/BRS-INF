<?php
namespace App\Models;
use CodeIgniter\Model;

class UsersModel extends Model {
    protected $table = 'user';

    protected $allowedFields = ['nim', 'nm_mhs', 'email', 'password'];
}
?>