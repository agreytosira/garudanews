<?php
namespace App\Models;

use CodeIgniter\Model;
class Modeladmin extends Model {
    function __construct()
    {
        $this->db = db_connect();
    }

    function tampildata()
    {
        return $this->db->table('berita')->get();
    }

    function simpan($data)
    {
        return $this->db->table('berita')->insert($data);
    }

    function hapusdata($id) {
        return $this->db->table('berita')->delete(['idberita' => $id]); 
    }

    function ambildata($id){
        return $this->db->table('berita')->getWhere(['idberita' => $id]); 
    }

    function editdata($data, $id){
        return $this->db->table('berita')->update($data,['idberita'=>$id]);
    }
}