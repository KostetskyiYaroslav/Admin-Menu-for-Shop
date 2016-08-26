<?php

namespace Backend\My_Abstract;

require_once "../DAO/Entity.php";

use Backend\DAO\Entity;

abstract class Model
{
    protected $Entity;
    protected $table;

    protected function __construct()
    {
        $this->Entity   = Entity::getInstance();
    }

    /**
     * @param $item
     * @return bool|int|string
     * CREATE
     */
    public function create($item)
    {
        if($insertedId = \R::store($item)){
            return $insertedId;
        }
        return false;
    }

    /**
     * @return array
     */
    public function readAll()
    {
        return \R::find($this->table);
    }

    /**
     * @param $field
     * @return array
     */
    public function readBy($field)
    {
        return \R::find($this->table,' '.$field['key'].' = '.$field['value']);
    }

    /**
     * @param $id
     * @param $product
     * @return bool
     * UPDATE
     */
    public function update($id,$product){
        $rProduct = \R::load($this->table, $id);
        if(!empty($product['name'])){
            $rProduct->name         = $product['name'];
        }
        if(!empty($product['price'])){
            $rProduct->price        = $product['price'];
        }
        if(!empty($product['description'])) {
            $rProduct->description  = $product['description'];
        }
        return (\R::store($rProduct)) ? true : false;
    }

    /**
     * @param null $where
     * @return bool
     * DELETE
     */
    public function delete($where = NULL){
        $products =
            ($where == NULL)
                ? \R::getRedBean()->find($this->table)
                :  \R::getRedBean()->find($this->table, $where);
        return (\R::trashAll($products)) ? true : false;
    }
}