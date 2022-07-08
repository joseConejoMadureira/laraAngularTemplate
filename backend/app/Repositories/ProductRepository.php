<?php

namespace App\Repositorfa;

use Illuminate\Database\Eloquent\Model;

class ProductRepository
{
    public function __construct(Model $model)
    {
        $this->model = $model;
    }
    public function get()
    {

        return $this->model;
    }
}
