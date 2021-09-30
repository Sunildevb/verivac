<?php
class Vaccine {
    public $name;
    public $batch;
    public $country;
    public $manufacturer;
    public $disease;
    public $amount;
    public $date;
        

    function set_name($fname,$lname) {

        $this->fname = $fname;
        $this->lname = $lname;
    }

    function set_role ($role) {

        $this->role = $role;

    }


}


?>
