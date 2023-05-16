<?php

namespace App\Repositories\Admin\Admin;

interface AdminRepositoryInterface
{
    public function all();

    public function delete($id);
}
