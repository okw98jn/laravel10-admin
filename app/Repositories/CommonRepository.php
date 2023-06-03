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

    public function searchPagination(array $keywords)
    {
        $query = $this->model->query();

        foreach ($keywords as $key => $value) {
            if ($value !== null) {
                $query->where($key, 'like', '%' . $value . '%');
            }
        }

        return $query->paginate(AppConsts::PAGE_MAX_LIMIT);
    }

    public function findOrFail($id)
    {
        return $this->model->findOrFail($id);
    }

    public function create(array $data)
    {
        return DB::transaction(function () use ($data) {
            return $this->model->create($data);
        });
    }

    public function update($id, array $data)
    {
        return DB::transaction(function () use ($id, $data) {
            return $this->model->find($id)->update($data);
        });
    }

    public function delete($id)
    {
        $this->model->find($id)->delete();
    }
}
