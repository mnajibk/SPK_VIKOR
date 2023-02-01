<?php

namespace App\Models;

use CodeIgniter\Model;

class PenilaianModel extends Model
{
    protected $table = 'penilaian';
    protected $primaryKey = 'id_penilaian';
    protected $allowedFields = ['id_penilaian','slug', 'kode_penilaian', 'nama_penilaian','kelas', 'nilai_raport', 'nilai_ekstrakulikuler', 'nilai_prestasi', 'nilai_sikap'];


    public function getData($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    public function getAll()
    {
        $builder = $this->db->table('penilaian');
        $builder->join('alternatif','alternatif.id_alternatif = penilaian.id_alternatif');
        $builder->join('kriteria','kriteria.id_kriteria = penilaian.id_kriteria');
        $query = $builder->get();
        return $query->getResult();

    }


}