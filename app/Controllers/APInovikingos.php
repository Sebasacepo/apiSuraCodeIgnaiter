<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class APInovikingos extends ResourceController
{
    protected $modelName = 'App\Models\novikingos';
    protected $format    = 'json';

    public function index()
    {
        return $this->respond($this->model->findAll());
    }
}