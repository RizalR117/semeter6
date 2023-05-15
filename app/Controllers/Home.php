<?php

/*namespace App\Controllers;

use App\Models\PortoModel;

class Home extends BaseController
{
    protected $PortoModel;
    public function __construct()
    {
        $this->PortoModel = new PortoModel();
    }
    public function index()
    {
        $Porto = $this->PortoModel->findAll();
        $data = [
            'title' => 'CV | Belajar CI4',
            'page' => 'home',
            'porto' => $Porto
        ];
        return view('templates', $data);
    }
}*/

/*namespace App\Controllers;

use App\Models\PortoModel;

class Home extends BaseController
{
    public function index()
    {
        $model = new PortoModel();
        $data = $model->getData();
        print_r($data);
        return view('home');
    }
}
*/

namespace App\Controllers;

use App\Models\PortoModel;

class Home extends BaseController
{

    public function index()
    {
        $Porto = new PortoModel();
        $data = [
            'title' => 'Portfolio || Rizal Rudiansyah',
            'page'  => 'home',
        ];
        return view('home', $data);
    }
}
