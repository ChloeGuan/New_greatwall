<?php


// Command
class ShowProductsAction {

    private $cartManager;
    private $params;


    public function __construct() {
        $this->cartManager = new CartManager();
    }

    public function setParameters($params) {
        $this->params = $params;
    }

    public function startCart() {

/*
        $responseType = $this->params->getValue('responseType');
        $response = $this->productManager->getAllProducts();
        if($responseType === "JSON") {
            Utils::setResponseTypeToJSON();
            return $response;

        } else {
            Utils::setResponseTypeToJSON();
            $html = "";
            foreach($response as $product) {
                $sku = $product['SKU'];
                $itemPrice = $product['item_price'];
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
*/
    }

}

?>
