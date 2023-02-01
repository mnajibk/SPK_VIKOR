<?php

namespace App\Models;

use CodeIgniter\Model;

class AlternatifModel extends Model
{
    protected $table = 'alternatif';
    protected $primaryKey = 'id_alternatif';
    protected $allowedFields = ['id', 'slug', 'kode_alternatif', 'nama_alternatif','kelas','nilai_raport','nilai_ekstrakulikuler','nilai_prestasi','nilai_sikap'];


    public function getData($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
    
    public function get()
    {
        $builder = $this->db->table('alternatif');
        $query   = $builder->get();
        return $query->getResult();
        
    }

    public function getMax()
    {
        $builder = $this->db->table('alternatif');
        $builder->selectMax('nilai_raport');
        $builder->selectMax('nilai_ekstrakulikuler');
        $builder->selectMax('nilai_prestasi');
        $builder->selectMax('nilai_sikap');
        $query = $builder->get();
        return $query->getResult();
        
    }
    
    public function getMin()
    {
        $builder = $this->db->table('alternatif');
        $builder->selectMin('nilai_raport');
        $builder->selectMin('nilai_ekstrakulikuler');
        $builder->selectMin('nilai_prestasi');
        $builder->selectMin('nilai_sikap');
        $query = $builder->get();
        return $query->getResult();
        
    }

}