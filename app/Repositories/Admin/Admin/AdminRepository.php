<?php

namespace App\Repositories\Admin\Admin;

use App\Repositories\BaseRepository;
use App\Models\Admin\Admin;


class AdminRepository extends BaseRepository implements AdminRepositoryInterface 
{

    public function __construct(Admin $admin)
    {
        parent::__construct($admin);
    }
    
}
