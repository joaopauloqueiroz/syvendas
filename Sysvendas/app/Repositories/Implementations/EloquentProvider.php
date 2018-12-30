<?php

namespace App\Repositories\Implementations;

use App\Repositories\Base\EloquentRepository;
use App\Repositories\Interfaces\ProviderIterface;
use App\Models\Provider;

class EloquentProvider extends EloquentRepository implements ProviderIterface
{
    public function __construct(Provider $provider)
    {
        $this->model = $provider;
    }
}
