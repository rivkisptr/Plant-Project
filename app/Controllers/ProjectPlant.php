<?php

namespace App\Controllers;
use App\Models\PlantModel;

class ProjectPlant extends BaseController
{
    protected $PlantModel;
    public function __construct()
    {
        $this->PlantModel = new PlantModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Home Page',
        ];
        return view('pages/index', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Us',
        ];
        return view('pages/contact', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Us',
        ];
        return view('pages/about', $data);
    }

    public function samplePost()
    {
        $data = [
            'title' => 'Sample Post',
            'plant' => $this->PlantModel->getPlant()
        ];
        return view('pages/test', $data);
    }
}
