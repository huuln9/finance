<?php
class Invest extends Controller {
    function Show() {
        $this->view("invest", []);
    }
    
    function ViewHistory() {
        $this->view("invest", [
            "pages" => "recharge_list"
        ]);
    }

    function Recharge() {
        $this->view("invest", [
            "pages" => "recharge_add"
        ]);
    }
}
?>