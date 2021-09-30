<?php
class User {
    public $fname;
    public $lname;
    public $role;
    

    function set_name($fname,$lname) {

        $this->fname = $fname;
        $this->lname = $lname;
    }

    function set_role ($role) {

        $this->role = $role;

    }


}


?>

