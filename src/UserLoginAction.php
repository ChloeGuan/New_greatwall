<?php
class UserLoginAction {

    private $userManager;
    private $params;

    public function __construct() {
        $this->userManager = new UserManager();
    }

    public function setParameters($params) {
        $this->params = $params;
    }

    public function login() {

        if(Session::get('isLoggedIn')) {
            Messages::addMessage("info", "You are already logged in.");
            return;
        } else {
            $response = array();

            // params have to be there
            $user_name = $this->params->getValue('user_name');
            $user_password = $this->params->getValue('password');
            if($user_name != null && $user_password != null) {
                // check if user name and password are correct
                $usr = $this->userManager->findUser($user_name, $user_password);
                if($usr != null) {
                    // log user in
                    Session::set("user_name", $usr['user_name']);
                    Session::set("id", $usr['id']);
                    Session::set("isLoggedIn", true);
                    return $usr;

                } else {
                    Messages::addMessage("info", "No user of that name.");
                    return null;
                }
            } else {
                Messages::addMessage("warning", "'user_name' and/or 'password' parameters missing.");
                return null;
            }
        }

    }


}

?>
