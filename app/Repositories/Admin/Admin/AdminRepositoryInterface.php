<?php

namespace App\Repositories\Admin\Admin;

interface AdminRepositoryInterface
{
    public function allPagination();

    public function create(array $data);

    public function delete($id);

}
