<?php
class AccFee extends Controller {
    function ViewHistory() {
        $this->view("main", [
            "pages" => "accfee_list"
        ]);
    }

    function Edit() {
        $this->view("main", [
            "pages" => "accfee_edit"
        ]);
    }
}
?>