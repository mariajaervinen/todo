<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Guestbook extends Controller{
    public function index(){
        echo view ("frontpage.php");
    }
}