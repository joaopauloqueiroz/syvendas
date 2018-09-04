<?php
namespace App\Repositories\Base;

interface InterfaceRepository
{
    public function getAll();
    public function find($id);
    public function create(array $data);
    public function update(int $id, array $data);
    public function delete($id);
}
