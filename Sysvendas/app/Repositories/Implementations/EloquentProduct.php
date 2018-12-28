<?php
namespace App\Repositories\Implementations;

use App\Repositories\Base\EloquentRepository;
use App\Repositories\Interfaces\SearchProductInterface;
use DB;

class EloquentProduct implements SearchProductInterface
{
    protected $table = 'products';

    public function getBySubject($subject)
    {
        $subject = '%' . $subject . '%';
        return DB::table($this->table)
                   ->select('name', 'code', 'price_vend')
                   ->where('name', 'like', $subject)
                   ->get();
    }
}
