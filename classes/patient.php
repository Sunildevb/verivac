<?php
class User {
    public $fname;
    public $lname;
    public $role;
    public $address;
    public $dob;
    public $doi;
    public $facility;
    public $id;
    public $mname;
    public $registration_no;
    public $sex;

    








    
   



    /**
     * Get the value of fname
     */ 
    public function getFname()
    {
        return $this->fname;
    }

    /**
     * Set the value of fname
     *
     * @return  self
     */ 
    public function setFname($fname)
    {
        $this->fname = $fname;

        return $this;
    }

    /**
     * Get the value of lname
     */ 
    public function getLname()
    {
        return $this->lname;
    }

    /**
     * Set the value of lname
     *
     * @return  self
     */ 
    public function setLname($lname)
    {
        $this->lname = $lname;

        return $this;
    }

    /**
     * Get the value of role
     */ 
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set the value of role
     *
     * @return  self
     */ 
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get the value of address
     */ 
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set the value of address
     *
     * @return  self
     */ 
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get the value of dob
     */ 
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * Set the value of dob
     *
     * @return  self
     */ 
    public function setDob($dob)
    {
        $this->dob = $dob;

        return $this;
    }

    /**
     * Get the value of doi
     */ 
    public function getDoi()
    {
        return $this->doi;
    }

    /**
     * Set the value of doi
     *
     * @return  self
     */ 
    public function setDoi($doi)
    {
        $this->doi = $doi;

        return $this;
    }

    /**
     * Get the value of facility
     */ 
    public function getFacility()
    {
        return $this->facility;
    }

    /**
     * Set the value of facility
     *
     * @return  self
     */ 
    public function setFacility($facility)
    {
        $this->facility = $facility;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of mname
     */ 
    public function getMname()
    {
        return $this->mname;
    }

    /**
     * Set the value of mname
     *
     * @return  self
     */ 
    public function setMname($mname)
    {
        $this->mname = $mname;

        return $this;
    }

    /**
     * Get the value of registration_no
     */ 
    public function getRegistration_no()
    {
        return $this->registration_no;
    }

    /**
     * Set the value of registration_no
     *
     * @return  self
     */ 
    public function setRegistration_no($registration_no)
    {
        $this->registration_no = $registration_no;

        return $this;
    }

    /**
     * Get the value of sex
     */ 
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Set the value of sex
     *
     * @return  self
     */ 
    public function setSex($sex)
    {
        $this->sex = $sex;

        return $this;
    }
}


?>
