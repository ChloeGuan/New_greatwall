<?php

/*
require_once('./DBConnector.php');
require_once('./Messages.php');


$pm = new ProductManager();
$data = $pm->getAllProducts();
echo json_encode($data, JSON_FORCE_OBJECT);

var_dump(Messages::getMessages());
*/
// Facade
class ProductManager {

    private $db;

    public function __construct() {
        $this->db = DBConnector::getInstance();
    }

    public function getAllProducts() {
        $sql = "SELECT SKU, item_price, description FROM product";
        $products = $this->db->query($sql);
        return $products;
    }

}

?>
