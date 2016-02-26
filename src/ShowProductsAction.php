<?php


// Command
class ShowProductsAction {

    private $productManager;
    private $params;


    public function __construct() {
        $this->productManager = new productManager();
    }

    public function setParameters($params) {
        $this->params = $params;
    }

    public function getProducts() {

        $responseType = $this->params->getValue('responseType');
        $response = $this->productManager->listProducts();
        if($responseType === "JSON") {
            Utils::setResponseTypeToJSON();
            return $response;

        } else {
            Utils::setResponseTypeToJSON();
            $html = "";
            foreach($response as $product) {
                $name=$product['name'];
                $type=$product['type'];
                $image=$product['url'];
                $sku = $product['SKU'];
                $itemPrice = $product['price'];
                $description = $product['description'];
                $html .= "<tr>
                <td>$description</td>
                <td><input data-sku-qty='$sku' type='number' value='1' min='1' max='10' step='1'/></td>
                <td>$itemPrice</td>
                <td><input data-sku-add='$sku' type='button' value='Add'/></td>
                </tr>";
            }
            return $html;
        }

    }

}

?>
