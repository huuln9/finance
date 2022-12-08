<?php
class Stock extends Controller {
    function ViewHistory() {
        $this->view("main", [
            "pages" => "stock_list"
        ]);
    }

    function Edit() {
        $this->view("main", [
            "pages" => "stock_edit"
        ]);
    }
}
?>