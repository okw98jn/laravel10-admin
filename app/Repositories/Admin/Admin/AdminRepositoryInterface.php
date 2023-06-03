<?php

namespace App\Repositories\Admin\Admin;

interface AdminRepositoryInterface
{
    public function searchPagination(array $keywords);

    public function create(array $data);

    public function update($id, array $data);

    public function findOrFail($id);

    public function delete($id);

}
