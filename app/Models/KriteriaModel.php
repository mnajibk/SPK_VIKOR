<?php

namespace App\Models;

use CodeIgniter\Model;

class KriteriaModel extends Model
{
    protected $table = 'kriteria';
    protected $primaryKey = 'id_kriteria';
    protected $allowedFields = ['id_kriteria', 'slug', 'kode_kriteria', 'nama_kriteria','bobot'];


    public function getData($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    public function get()
    {
        $builder = $this->db->table('kriteria');
        $query   = $builder->get();
        return $query->getResult();
        
    }
    
    public function bobotc1()
    {
        $builder = $this->db->table('kriteria');
        $builder->select('bobot')->where('nama_kriteria', 'Nilai Raport');
        $query   = $builder->get();
        return $query->getResult();
        
    }

    public function bobotc2()
    {
        $builder = $this->db->table('kriteria');
        $builder->select('bobot')->where('nama_kriteria', 'Nilai Ekstrakulikuler');
        $query   = $builder->get();
        return $query->getResult();
        
    }

    public function bobotc3()
    {
        $builder = $this->db->table('kriteria');
        $builder->select('bobot')->where('nama_kriteria', 'Nilai Prestasi');
        $query   = $builder->get();
        return $query->getResult();
        
    }
    
    public function bobotc4()
    {
        $builder = $this->db->table('kriteria');
        $builder->select('bobot')->where('nama_kriteria', 'Nilai Sikap');
        $query   = $builder->get();
        return $query->getResult();
        
    }
}