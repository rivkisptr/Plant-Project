<?php

namespace App\Models;

use CodeIgniter\Model;

class PlantModel extends Model
{
    protected $table = 'plant_info';
    protected $allowedFields = ['tanaman', 'suhu', 'kelembapan', 'avg-hujan', 'pH', 'img'];

    public function getPlant($tanaman = false)
    {
        if ($tanaman == false) {
            return $this->findAll();
        }
        return $this->where('tanaman', $tanaman)->first();
    }
}
