<?php

namespace App\Repositories\Admin\Shop;

use App\Repositories\CommonRepository;
use App\Models\Admin\Shop;


class ShopRepository extends CommonRepository implements ShopRepositoryInterface 
{

    public function __construct(Shop $shop)
    {
        parent::__construct($shop);
    }
    
}
