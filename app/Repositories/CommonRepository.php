<?php

namespace App\Repositories;

use App\Consts\AppConsts;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class CommonRepository
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function all()
    {
        return $this->model->all();
    }

    public function allPagination()
    {
        return $this->model->paginate(AppConsts::PAGE_MAX_LIMIT);
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function create(array $data)
    {
        return DB::transaction(function () use ($data) {
            return $this->model->create($data);
        });
    }

    public function delete($id)
    {
        $this->model->find($id)->delete();
    }
}
