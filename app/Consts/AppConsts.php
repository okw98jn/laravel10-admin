<?php
namespace App\Consts;

class AppConsts
{
    public const STATUS_VALID   = 1;
    public const STATUS_INVALID = 0;
    
    public const STATUS_LIST = [
        self::STATUS_VALID   => '有効',
        self::STATUS_INVALID => '無効',
    ];


    public const DATE_FORMAT    = 'Y年n月j日';
    public const PAGE_MAX_LIMIT = 10;
}