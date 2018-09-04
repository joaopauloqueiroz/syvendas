<?php
namespace App\Repositories\Base;

use App\Repositories\Base\InterfaceRepository;

class EloquentRepository extends InterfaceRepository
{
    /**
     * Model para ser tratada
     *
     * @var [type]
     */
    protected $model;

    /**
     * Retorna todos os registros
     *
     * @return void
     */
    public function getAll()
    {
        return $this->model->get();
    }

    /**
     * Busca por um id especifico
     *
     * @param [type] $id
     * @return void
     */
    public function find($id)
    {
        $data = $this->model->find($id);
        if (count($data)) {
            return $data;
        } else {
            return false;
        }
    }
    /**
     * Insere um array de registros
     *
     * @param array $data
     * @return void
     */
    public function create(array $data)
    {
        return $this->model->insert($data);
    }
    /**
     * Atualiza um registro
     *
     * @param integer $id
     * @param array $data
     * @return void
     */
    public function update(int $id, array $data)
    {
        $instance = $this->model->find($id);
        if (!$instance) {
            return false;
        } else {
            return $instance->update($data);
        }
    }

    /**
     * Apaga um registro
     *
     * @param integer $id
     * @return void
     */
    public function delete(int $id)
    {
        return $this->model->where('id', $id)->delete();
    }
}
