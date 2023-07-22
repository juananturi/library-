<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Book;
class BookController extends Controller{

    public function index(){
        $book = new Book; 
        $data['footer'] = view('templates/footer');
        $data['header'] = view('templates/header');
        $data['books'] = $book->orderBy('id', 'ASC')->findAll(); 
        return view('books/index', $data);
    }

    public function create(){
        $book = new Book; 
        $data['footer'] = view('templates/footer');
        $data['header'] = view('templates/header');
        return view('books/create', $data); 

    }
}