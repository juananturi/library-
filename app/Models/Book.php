<?php 
namespace App\Models;

use CodeIgniter\Model;

class Book extends Model{
    protected $table      = 'books';
    // Uncomment below if you want add primary key
     protected $primaryKey = 'id';
     protected $allowedFiedls = ['name', 'image']; 
}