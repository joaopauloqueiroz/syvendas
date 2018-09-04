<?php

namespace App\Repositories\Implementations;

use App\Repositories\Base\EloquentRepository;
use App\Repositories\Interfaces\ClientInterface;
use App\Models\Client;

class EloquentClient extends EloquentRepository implements ClientInterface
{
    public function __construct(Client $client)
    {
        $this->model = $client;
    }
}
