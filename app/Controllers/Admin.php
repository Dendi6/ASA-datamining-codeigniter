<?php

namespace App\Controllers;

use App\Models\ArahAnginModel;
use App\Models\CurahHujanModel;
use App\Models\KecepatanAnginModel;
use Myth\Auth\Models\UserModel;

class Admin extends BaseController
{
    protected $userModel, $curahhujanModel, $arahanginModel, $kecepatanAnginModel;
    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->curahhujanModel = new CurahHujanModel();
        $this->arahanginModel = new ArahAnginModel();
        $this->kecepatanAnginModel = new KecepatanAnginModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Admin Data Mining',
            'user' => $this->userModel->countAllResults()
        ];

        return view('admin/beranda/index', $data);
    }

    //fungsi untuk curahHujan
    public function curahHujan()
    {
        $data = [
            'title' => 'Curah Hujan',
            'curahHujan' => $this->curahhujanModel->descending()
        ];

        return view('admin/curahHujan/index', $data);
    }
    public function saveCurahHujan()
    {
        $this->curahhujanModel->save([
            'tanggal' => $this->request->getVar('tanggal'),
            'curahHujan' =>  $this->request->getVar('curahHujan')
        ]);

        session()->setFlashdata('pesan', 'Data Anda Telah di Tambahkan');

        return redirect()->to('/admin/curahHujan');
    }
    public function hapusCurahHujan($id)
    {
        $this->curahhujanModel->delete($id);

        session()->setFlashdata('delete', 'Data berhasil di hapus');

        return redirect()->to('/admin/curahHujan');
    }
    public function editCurahHujan($id)
    {
        $data = [
            'title' => 'Edit Curah Hujan',
            'curahHujan' => $this->curahhujanModel->find($id)
        ];

        return view('admin/curahHujan/edit', $data);
    }
    public function updateCurahHujan()
    {
        $this->curahhujanModel->save([
            'id' => $this->request->getVar('id'),
            'tanggal' => $this->request->getVar('tanggal'),
            'curahHujan' => $this->request->getVar('curahHujan')
        ]);

        session()->setFlashdata('pesan', 'data berhasil di update');

        return redirect()->to('/admin/curahHujan');
    }
    //akhir fungsi curah hujan

    //fungsi arah angin
    public function arahAngin()
    {
        $data = [
            'title' => 'arah angin',
            'arahAngin' => $this->arahanginModel->descending()
        ];

        return view('admin/arahAngin/index', $data);
    }
    public function saveArahAngin()
    {
        $this->arahanginModel->save([
            'tanggal' => $this->request->getVar('tanggal'),
            'arahAngin' => $this->request->getVar('arahAngin')
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil di Tambahkan');

        return redirect()->to('/admin/arahAngin');
    }
    public function hapusArahAngin($id)
    {
        $this->arahanginModel->delete($id);

        session()->setFlashdata('delete', 'Data berhasil di hapus');

        return redirect()->to('/admin/arahAngin');
    }
    public function editArahAngin($id)
    {
        $data = [
            'title' => 'edit Arah Angin',
            'arahAngin' => $this->arahanginModel->find($id)
        ];

        return view('admin/arahAngin/edit', $data);
    }
    public function updateArahAngin()
    {
        $this->arahanginModel->save([
            'id' => $this->request->getVar('id'),
            'tanggal' => $this->request->getVar('tanggal'),
            'arahAngin' => $this->request->getVar('arahAngin')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil di update');

        return redirect()->to('/admin/arahAngin');
    }
    //akhir fungsi arah angin

    //fungsi kecepatan angin
    public function kecepatanAngin()
    {
        $data = [
            'title' => 'kecepatan angin',
            'kecepatanAngin' => $this->kecepatanAnginModel->descending()
        ];

        return view('admin/kecepatanAngin/index', $data);
    }
    public function saveKecepatanAngin()
    {
        $this->kecepatanAnginModel->save([
            'tanggal' => $this->request->getVar('tanggal'),
            'kecepatanAngin' => $this->request->getVar('kecepatanAngin')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil di tambahkan');

        return redirect()->to('/admin/kecepatanAngin');
    }
    public function hapusKecepatanAngin($id)
    {
        $this->kecepatanAnginModel->delete($id);

        session()->setFlashdata('delete', 'Data berhasil di hapus');

        return redirect()->to('/admin/kecepatanAngin');
    }
    public function editKecepatanAngin($id)
    {
        $data = [
            'title' => 'edit kecepatan angin',
            'kecepatanAngin' => $this->kecepatanAnginModel->find($id)
        ];

        return view('admin/kecepatanAngin/edit', $data);
    }
    public function updateKecepatanAngin()
    {
        $this->kecepatanAnginModel->save([
            'id' => $this->request->getVar('id'),
            'tanggal' => $this->request->getVar('tanggal'),
            'kecepatanAngin' => $this->request->getVar('kecepatanAngin')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil di update');

        return redirect()->to('/admin/kecepatanAngin');
    }
    //akhir fungsi kecepatan angin
}
