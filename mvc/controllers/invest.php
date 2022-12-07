<?php
class Invest extends Controller {
    function Show() {
        $this->view("invest", []);
    }
    
    function Recharge() {
        $this->view("invest", [
            "pages" => "recharge"
        ]);
    }


}
?>