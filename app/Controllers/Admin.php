<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Modeladmin;

class Admin extends Controller
{
    public function index()
    {
        $mhs = new Modeladmin();
        $data = [
            'tampildata' => $mhs->tampildata()->getResult()
        ];

        echo View('viewtampiladmin', $data);
    }

    public function formtambah()
    {
        helper('form');
        echo View('viewformtambah');
        echo view('footer');
    }

    public function simpandata()
    {
        $data = [
            'judul' => $this->request->getPost('judul'),
            'isi' => $this->request->getPost('isi'),
            'kategori' => $this->request->getPost('kategori')
        ];

        $mhs = new Modeladmin();

        $simpan = $mhs->simpan($data);

        if ($simpan) {
            return redirect()->to('../admin/');
        }
    }

    public function hapus()
    {
        $uri = service('uri');
        $id = $uri->getSegment('3');

        $mhs = new Modeladmin();

        $mhs->hapusdata($id);

        return redirect()->to('../admin/');
    }

    public function formedit()
    {
        helper('form');
        $uri = service('uri');
        $id = $uri->getSegment('3');

        $mhs = new Modeladmin();

        $ambildata = $mhs->ambildata($id);

        if (count($ambildata->getResult()) > 0) {
            $row = $ambildata->getRow();
            $data = [
                'id' => $id,
                'judul' => $row->judul,
                'isi' => $row->isi,
                'kategori' => $row->kategori,
            ];

            echo View('viewformedit', $data);
        }
    }

    public function updatedata()
    {
        $id = $this->request->getPost('id');
        $data = [
            'judul' => $this->request->getPost('judul'),
            'isi' => $this->request->getPost('isi'),
            'kategori' => $this->request->getPost('kategori'),
        ];

        $mhs = new Modeladmin();

        $simpan = $mhs->editdata($data, $id);

        echo $id;

        if ($simpan) {
            return redirect()->to('/admin/');
        }
    }
}