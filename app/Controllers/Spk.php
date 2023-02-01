<?php

namespace App\Controllers;

use App\Models\AlternatifModel;
use App\Models\KriteriaModel;
use App\Models\PenilaianModel;

class Spk extends BaseController
{
    public function __construct()
    {
        $this->alternatif = new AlternatifModel();
        $this->kriteria = new KriteriaModel();
        $this->penilaian = new PenilaianModel();
    }


    public function index()
    {

    $data = [

        'title' => 'Index',
        'link' => 'active',
        
    ];
     
        return view('/index',$data);
    }

    public function alternatif()
    {

        $data = [
            'title' => 'Alternatif',
            'link' => 'active',
            'alternatif' => $this->alternatif->getData()

        ];

        return view('/alternatif/alternatif',$data);
    }

    public function tambah_alternatif()
    {

        $data = [
            'title' => 'Tambah Alternatif',
            'link' => 'active',
            'validation' => \Config\Services::validation(),
            'alternatif' => $this->alternatif->getData()

        ];

        return view('/alternatif/tambah_alternatif',$data);
    }

    public function save_alternatif()
    {

         //validation Input
         if (!$this->validate([

             'kode_alternatif' => [
                 'rules' => 'required|is_unique[alternatif.kode_alternatif]',
                 'errors' => [
                     'required' => '*Kode Alternatif harus diisi.',
                     'is_unique' => '*Kode Alternatif sudah terdaftar.',
                 ]
             ],
            'nama_alternatif' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '*Nama Siswa harus diisi.'
                ]
            ],
            'kelas' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '*Kelas harus diisi.'
                ]
            ],
            
        ])) {

            return redirect()->to('/tambah_alternatif/')->withInput();
        }
        
        $slug = url_title($this->request->getVar('kode_alternatif'), '-', true);
        $this->alternatif->save([
            'slug'                 => $slug,
            'kode_alternatif'      => $this->request->getVar('kode_alternatif'),
            'nama_alternatif'      => $this->request->getVar('nama_alternatif'),
            'kelas'                => $this->request->getVar('kelas'),
           
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan.');
        return redirect()->to('/alternatif');
    }

    public function edit_alternatif($slug)
    {
        //session();
        $data = [
            'title' => 'Edit alternatif',
            'link' => 'active',
            'validation' => \Config\Services::validation(),
            'alternatif' => $this->alternatif->getData($slug)

        ];

        return view('/alternatif/edit_alternatif', $data);
    }

    public function update_alternatif($id)
    {

       //cek kode
       $kodeLama = $this->alternatif->getData($this->request->getVar('slug'));
       if ($kodeLama['kode_alternatif'] == $this->request->getVar('kode_alternatif')) {
           $rules_kode = 'required';
       } else {
           $rules_kode = 'required|is_unique[alternatif.kode_alternatif]';
       }

         //validation Input
         if (!$this->validate([

            'nama_alternatif' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '*Nama Siswa harus diisi.'
                ]
            ],
            'kode_alternatif' => [
                'rules' => $rules_kode,
                'errors' => [
                    'required' => '*Kode Alternatif harus diisi.',
                    'is_unique' => '*Kode Alternatif sudah terdaftar.',
                ]
            ],
            'kelas' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '*Kelas harus diisi.'
                ]
            ],
            
        ])) {

            return redirect()->to('/edit_alternatif/' . $this->request->getVar('slug'))->withInput();
        }

        $slug = url_title($this->request->getVar('kode_alternatif'), '-', true);
        $this->alternatif->save([
            'id_alternatif'    => $id,
            'slug'             => $slug,
            'kode_alternatif'  => $this->request->getVar('kode_alternatif'),
            'nama_alternatif'  => $this->request->getVar('nama_alternatif'),
            'kelas' => $this->request->getVar('kelas'),

        ]);
        session()->setFlashdata('pesan', 'Data Berhasil Diubah.');
        return redirect()->to('/alternatif');
    }

    public function delete_alternatif($id)
    {

        $this->alternatif->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus!.');
        return redirect()->to('/alternatif');
    }

    public function kriteria()
    {

        $data = [
            'title' => 'Kriteria',
            'link' => 'active',
            'kriteria' => $this->kriteria->getData()

        ];
        
        return view('kriteria/kriteria',$data);
    }
    
    public function ubah_kriteria()
    {

        $data = [
            'title' => 'Kriteria',
            'link' => 'active',
            'kriteria' => $this->kriteria->getData()

        ];
        
        return view('kriteria/ubah_kriteria',$data);
    }
    
    public function tambah_kriteria()
    {
        $data = [
            'title' => 'Tambah Kriteria',
            'link' => 'active',
            'validation' => \Config\Services::validation(),
            'alternatif' => $this->alternatif->getData()

        ];
     
        return view('kriteria/tambah_kriteria',$data);
    }

    public function save_kriteria()
    {

        
        $this->kriteria->save([
            'id_kriteria'  => $this->request->getVar('id_kriteria'),
            'slug'  => $this->request->getVar('slug'),
            'kode_kriteria'  => $this->request->getVar('kode_kriteria'),
            'nama_kriteria'  => $this->request->getVar('nama_kriteria'),
            'bobot'          => $this->request->getVar('bobot'),
           
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan.');
        return redirect()->to('/kriteria');
    }

    public function edit_kriteria($slug)
    {
        //session();
        $data = [
            'title' => 'Edit kriteria',
            'link' => 'active',
            'validation' => \Config\Services::validation(),
            'kriteria' => $this->kriteria->getData($slug)

        ];

        return view('/kriteria/edit_kriteria', $data);
    }

    public function update_kriteria($id)
    {

        //cek kode
       $kodeLama = $this->kriteria->getData($this->request->getVar('slug'));
       if ($kodeLama['kode_kriteria'] == $this->request->getVar('kode_kriteria')) {
           $rules_kode = 'required';
       } else {
           $rules_kode = 'required|is_unique[kriteria.kode_kriteria]';
       }

         //validation Input
         if (!$this->validate([

            'nama_kriteria' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '*Nama Siswa harus diisi.'
                ]
            ],
            'kode_kriteria' => [
                'rules' => $rules_kode,
                'errors' => [
                    'required' => '*Kode Kriteria harus diisi.',
                    'is_unique' => '*Kode Kriteria sudah terdaftar.',
                ]
            ],
            'bobot' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '*Bobot harus diisi.'
                ]
            ],
            
        ])) {

            return redirect()->to('/edit_kriteria/' . $this->request->getVar('slug'))->withInput();
        }
        
        $this->kriteria->save([
            'id_kriteria'    => $id,
            'kode_kriteria'  => $this->request->getVar('kode_kriteria'),
            'nama_kriteria'  => $this->request->getVar('nama_kriteria'),
            'bobot' => $this->request->getVar('bobot'),

        ]);
        session()->setFlashdata('pesan', 'Data Berhasil Diubah.');
        return redirect()->to('/kriteria');
    }

    public function delete_kriteria($id)
    {

        $this->kriteria->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus!.');
        return redirect()->to('/kriteria');
    }

    public function penilaian()
    {

        $data = [
            'title' => 'Penilaian',
            'link' => 'active',
            'alternatif' => $this->alternatif->getData(),
            'kriteria' => $this->kriteria->getData(),
            
        ];
        
        return view('penilaian/penilaian',$data);
    }
    public function input_penilaian($slug)
    {
        
        $data = [
            'title' => 'Penilaian',
            'link' => 'active',
            'validation' => \Config\Services::validation(),
            'alternatif' => $this->alternatif->getData($slug),
            'kriteria' => $this->kriteria->getData(),

        ];
        
        return view('penilaian/input_penilaian',$data);
    }

    public function save_penilaian($id)
    {
     
        $this->alternatif->save([
            'id_alternatif'          => $id,
            'nilai_raport'           => $this->request->getVar('nilai_raport'),
            'nilai_ekstrakulikuler'  => $this->request->getVar('nilai_ekstrakulikuler'),
            'nilai_prestasi'         => $this->request->getVar('nilai_prestasi'),            
            'nilai_sikap'            => $this->request->getVar('nilai_sikap'),            
           
        ]);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan.');
        return redirect()->to('/penilaian');
    }

    public function perhitungan()
    {

        $data = [
            'title' => 'Perhitungan',
            'link' => 'active',
            'alternatif' => $this->alternatif->get(),
            'alternatifx' => $this->alternatif->getData(),
            'max' => $this->alternatif->getMax(),
            'min' => $this->alternatif->getMin(),
            'kriteria' => $this->kriteria->get(),
            'wC1' => $this->kriteria->bobotc1(),
            'wC2' => $this->kriteria->bobotc2(),
            'wC3' => $this->kriteria->bobotc3(),
            'wC4' => $this->kriteria->bobotc4(),
        ];
       
        
        return view('perhitungan',$data);
    }
    
    public function hasil()
    {

        $data = [
            'title' => 'Hasil',
            'link' => 'active',
            'alternatif' => $this->alternatif->get(),
            'alternatifx' => $this->alternatif->getData(),
            'max' => $this->alternatif->getMax(),
            'min' => $this->alternatif->getMin(),
            'kriteria' => $this->kriteria->get(),
            'wC1' => $this->kriteria->bobotc1(),
            'wC2' => $this->kriteria->bobotc2(),
            'wC3' => $this->kriteria->bobotc3(),
            'wC4' => $this->kriteria->bobotc4(),

        ];
        
        return view('hasil',$data);
    }


}