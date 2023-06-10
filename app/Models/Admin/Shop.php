<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Shop extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'code',
        'name',
        'zip',
        'prefectures',
        'city',
        'address',
        'building',
        'email',
        'tel',
        'status',
    ];

    protected $dates = ['deleted_at'];
}
