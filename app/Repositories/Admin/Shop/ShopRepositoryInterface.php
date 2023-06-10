<?php

namespace App\Repositories\Admin\Shop;

interface ShopRepositoryInterface
{
    public function searchPagination(array $keywords);

    public function all();
    
    public function create(array $data);

    public function update($id, array $data);

    public function findOrFail($id);

    public function delete($id);
}
