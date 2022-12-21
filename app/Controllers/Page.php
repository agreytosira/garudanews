<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Page extends Controller
{
    public function index($p = 'home')
    {
        $file = "page_$p";
        $data['title'] = ucfirst($p);

        if ($file == 'page_home') {
            $db = db_connect();
            $sql = "SELECT * FROM berita";
            $query = $db->query($sql);
            $data['berita'] = $query->getResult();
        }

        echo view('header', $data);
        echo view('navbar');
        echo view($file, $data);
        echo view('footer');
    }

    public function readmore($id = 0)
    {
        $file = "page_readmore";

        $db = db_connect();
        $sql = "SELECT * FROM berita WHERE idberita = $id";
        $query = $db->query($sql);
        $data['berita'] = $query->getRow();

        $data['title'] = $data['berita']->judul . 'GarudaNews';

        echo view('header', $data);
        echo view('navbar');
        echo view($file, $data);
        echo view('footer');
    }

    // Testing Filter Category
    public function category($p = 'semua')
    {
        $file = "category_$p";
        $data['title'] = 'Berita ' . ucfirst($p);
        $category = ucfirst($p);

        if ($file == 'category_' . $p) {
            $db = db_connect();
            $sql = "SELECT * FROM berita WHERE kategori='$category'";
            $query = $db->query($sql);
            $data['berita'] = $query->getResult();
        }

        echo view('header', $data);
        echo view('navbar');
        echo view($file, $data);
        echo view('footer');
    }
}