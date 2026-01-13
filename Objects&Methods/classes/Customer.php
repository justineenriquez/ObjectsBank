<?php
class Customer {
    // fields 
    public string $firstName;
    public string $lastName;

    // $accounts array
    public array $accounts;

    // constructor
    public function __construct($firstName, $lastName, array $accounts = []) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->accounts = $accounts;
    }
    // function  to get the full name 
    public function getFullName(): string {
        return $this->firstName . ' ' . $this->lastName;
    }
}

?>