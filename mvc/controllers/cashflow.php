<?php
class CashFlow extends Controller {
    function ViewHistory() {
        $this->view("main", [
            "pages" => "cashflow_list"
        ]);
    }

    function Edit() {
        $this->view("main", [
            "pages" => "cashflow_edit"
        ]);
    }
}
?>