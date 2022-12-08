<?php
class TransFee extends Controller {
    function ViewHistory() {
        $this->view("main", [
            "pages" => "transfee_list"
        ]);
    }

    function Edit() {
        $this->view("main", [
            "pages" => "transfee_edit"
        ]);
    }
}
?>