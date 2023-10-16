<?php
class Customer{

    private int $id;
    private string $firstName;
    private string $lastName;
    private string $email;

    // Constructor
    public function __construct(int $id, string $firstName, string $lastName, string $email){
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
    }

    //Getter methods
    public function getId(){
        return $this->id;
    }

    public function getFirstName(){
        return $this->firstName;
    }

    public function getLastName(){
        return $this->lastName;
    }

    public function getEmail(){
        return $this->email;
    }

    // Setter methods
    public function setId($id){
        $this->id = $id;
    }

    public function setFirstName($firstName){
        $this->firstName = $firstName;
    }

    public function setLastName($lastName){
        $this->lastName = $lastName;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    // Implement the magic method: __toString()
    public function __toString(){
        $details=
        "</br></br>ID: ".$this->id."</br>".
        "First Name: ".$this->firstName."</br>".
        "Last Name: ".$this->lastName."</br>".
        "Email: ".$this->email;

        return $details;
    }

    // Implement the magic method: __call()
    public function __call($method, $value){
        return "This method doesn't exits.";
    }

    // Implement the magic method: __get()
    public function __get($var_name){
        if(property_exists(__CLASS__, $var_name)){
            return $this->{$var_name};
        }
        return "\nSorry, this property doesn't exist.";
    }

    // Implement the magic method: __set()
    public function __set($var_name, $value){
        if(property_exists(__CLASS__, $var_name)){
            $this->{$var_name} = $value;
        }
        return "\nSorry, this property doesn't exist.";
    }
}

?>
    
