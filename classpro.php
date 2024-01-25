<?php
    class Role
    {
        public $role_id;
        public $role_title;
        public $role_description; 

        public function __construct($role_id,$role_title,$role_description)
        {
             $this->role_id = $role_id;
             $this->role_title = $role_title;
             $this->role_description = $role_description;
        }
        public function getid()
        {
            return $this->role_id;
        }
        public function gettitle()
        {
            return $this->role_title;
        }
        public function getdescription()
        {
            return $this->role_description;
        }

    }
$obj = new Role("1","abc","dhfwefowtk");
echo $obj->getid();
echo "</br>";
echo $obj->gettitle();
echo "</br>";
echo $obj->getdescription();
echo "</br>====================================================</br>";

class User extends Role
{   
    public $user_id;
    public $user_name;
    public $user_email;
    public $user_dob;
    public $user_address;

public function __construct($role_id,$role_title,$role_description,$user_id,$user_name,$user_email,$user_dob,$user_address)
        {
             parent::__construct($role_id,$role_title,$role_description);
             $this-> user_id =  $user_id; 
             $this-> user_name = $user_name;
             $this-> user_email = $user_email;
             $this-> user_dob = $user_dob;
             $this-> user_address = $user_address;
        }
        public function getid()
        {
            return $this->user_id;
        }
        public function getname()
        {
            return $this->user_name;
        }
        public function getemail() 
        {
            return $this->user_email;
        }
        public function getdob() 
        {
            return $this->user_dob;
        }
        public function getaddress() 
        {
            return $this->user_address;
        }
    }
$a1 = new User("1","abc","dhfwefowtk","1","twisha","twisha@gmail.com","30","asjgdufheggt");
echo $a1->getid();
echo "</br>";
echo $a1->getname();
echo "</br>";
echo $a1->getemail();
echo "</br>";
echo $a1->getdob();
echo "</br>";
echo $a1->getaddress();
echo "</br>====================================================</br>";

class Permission extends User
{
  
    public $permission_id;
    public $permission_title;
    public $permission_module;
    public $permission_description;

public function __construct($role_id,$role_title,$role_description,$user_id,$user_name,$user_email,$user_dob,$user_address,$permission_id,$permission_title,$permission_module,$permission_description)
        {
             parent::__construct($role_id,$role_title,$role_description,$user_id,$user_name,$user_email,$user_dob,$user_address,$permission_id,$permission_title,$permission_module,$permission_description);
             $this-> permission_id = $permission_id ;
             $this-> permission_title = $permission_title;
             $this-> permission_module = $permission_module ;
             $this-> permission_description = $permission_description;
        }
        public function getid()
        {
            return $this->permission_id;
        }
        public function gettitle()
        {
            return $this->permission_title;
        }
        public function getmodule() 
        {
            return $this->permission_module;
        }
        public function getdescription() 
        {
            return $this->permission_description;
        }
    }
$a2 = new Permission ("1","abc","dhfwefowtk","1","twisha","twisha@gmail.com","30","asjgdufheggt","101","booking","website","dlskjfsogjfrg");
echo $a2->getid();
echo "</br>";
echo $a2->gettitle();
echo "</br>";
echo $a2->getmodule();
echo "</br>";
echo $a2->getdescription();
echo "</br>====================================================</br>";

class Booking extends Permission
{
  
    public $booking_id;
    public $booking_title;
    public $booking_description;
    public $booking_type;    
    public $booking_tickit;
    public $booking_date;    

public function __construct($role_id,$role_title,$role_description,$user_id,$user_name,$user_email,$user_dob,$user_address,$permission_id,$permission_title,$permission_module,$permission_description,$booking_id,$booking_title, $booking_description,$booking_type,$booking_ticket,$booking_date)
        {
             parent::__construct($role_id,$role_title,$role_description,$user_id,$user_name,$user_email,$user_dob,$user_address,$permission_id,$permission_title,$permission_module,$permission_description,$booking_id,$booking_title, $booking_description,$booking_type,$booking_ticket,$booking_date);
             $this-> booking_id = $booking_id ;
             $this-> booking_title = $booking_title;
             $this-> booking_description = $booking_description;
             $this-> booking_type = $booking_type ;
             $this-> booking_ticket = $booking_ticket ;
             $this-> booking_date = $booking_date ;
        }
        public function getid()
        {
            return $this->booking_id;
        }
        public function gettitle()
        {
            return $this->booking_title;
        }
        public function getdescription() 
        {
            return $this->booking_description;
        }
        public function gettype() 
        {
            return $this->booking_type;
        }
        public function getticket() 
        {
            return $this->booking_ticket;
        }
        public function getdate() 
        {
            return $this->booking_date;
        }
    }
$a3 = new Booking ("1","abc","dhfwefowtk","1","twisha","twisha@gmail.com","30","asjgdufheggt","101","booking","website","dlskjfsogjfrg","b-10","booking now","booking time 7 to 10","booking10","ticket","date");
echo $a3->getid();
echo "</br>";
echo $a3->gettitle();
echo "</br>";
echo $a3->getdescription();
echo "</br>";
echo $a3->gettype();
echo "</br>";
echo $a3->getticket();
echo "</br>";
echo $a3->getdate();
echo "</br>====================================================</br>";


?>