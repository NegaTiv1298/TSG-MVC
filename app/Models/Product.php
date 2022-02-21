<?php

declare(strict_types=1);

namespace Models;

use Core\DB;
use Core\Model;

/**
 * Class Product
 */
class Product extends Model
{
    /**
     * Product constructor.
     */
    function __construct()
    {
        $this->tableName = 'products';
        $this->idColumn = 'id';
    }

    /**
     * Add new product
     * @param array $values
     * @return $this
     */
    public function addItem(array $values)
    {
        $keys = implode(',', array_keys($values));
        $value = implode('\',\'', $values);
        $this->sql = "INSERT INTO products ($keys) VALUES ('$value')";

        $db = new DB();
        $db->query($this->sql);

        return $this;
    }

    /**
     * Edit product
     * @param int $id
     * @param array $values
     * @return array|bool|string
     */
    public function saveItem(int $id, array $values)
    {
        if(!empty($id) && !empty($values)) {
            $sku = $values['sku'];
            $name = $values['name'];
            $price = (float)$values['price'];
            $qty = (float)$values['qty'];
            if (empty($values['description'])) {
                $description = 'Опису покищо немає';
            } else {
                $description = $values['description'];
            }
            $this->sql = "UPDATE products SET sku = '$sku', name = '$name', price = '$price', qty = '$qty', description = '$description' WHERE id = $id";
            $db = new DB();
            return $db->query($this->sql);
        }
    }

    /**
     * Delete product
     * @param int $id
     * @return array|bool
     */
    public function deleteItem(int $id)
    {
        $this->sql = "DELETE FROM products WHERE id = $id";
        $db = new DB();
        return $db->query($this->sql);
    }
}