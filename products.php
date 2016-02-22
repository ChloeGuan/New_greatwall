<?php

// load all scripts into memory
require_once('init.php');
loadScripts();


    // Business Delegate

    $data = array();

    if(Utils::isGET()) {

        if(Utils::isAJAX()) {
            $parameters = new Parameters("GET");
            $showProductsAction = new ShowProductsAction();
            $showProductsAction->setParameters($parameters);

            $response = $showProductsAction->getProducts();

            if($response) {

                $data = array("status" => "success", "products" => $response);

            } else {
                // error message
                $data = array("status" => "errors", "msg" => Messages::getMessages());
            }

        } else {

            $data = array("status" => "error", "msg" => "AJAX Required.");

        }


    } else {
        $data = array("status" => "error", "msg" => "Only GET allowed.");
    }


    echo json_encode($data, JSON_FORCE_OBJECT);

?>
