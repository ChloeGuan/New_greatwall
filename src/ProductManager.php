<?php

//require_once('DBConnector.php');

//$um = new ProductManager();

// Facade
class ProductManager {

    private $db;

    public function __construct() {
        $this->db = DBConnector::getInstance();
    }

    public function listProducts() {
        $sql = "SELECT name, type, url, total_num, avail_num, SKU, price, description FROM product";
        $rows = $this->db->query($sql);
        return $rows;
    }
        public function insertProducts($sku, $qty) {
        $sql = 'INSERT INTO product (name, type, url, total_num, avail_num, SKU, price, description) VALUES ("$sku","$qty")';
        $rows = $this->db->query($sql);
        return $rows;
    }

    public function findProduct($SKU) {
        $params = array(":sku" => $SKU);
        $sql = "SELECT name, SKU, price, description FROM product WHERE SKU = :sku";

        $rows = $this->db->query($sql, $params);
        if(count($rows) > 0) {
            return $rows[0];
        }

        return null;
    }


}

$productManger = new ProductManager;
$productManger->insertProducts($_POST['sku'],$_POST['qty']);
echo json_encode($productManger);

?>
