 <!-- 
Name: Enriquez, Justine Paul A.
Date: 01/13/2026
Section: WD-201 
-->

<?php
class Account {
    
    // fields
    public string $number;
    public string $type;
    public float $balance;

    public function __construct($number, $type, $balance) {
        $this->number = $number; // current account number
        $this->type = $type;
        $this->balance = $balance;
    }

    // function deposit - Added return in order to show the updated balance after deposit
    public function deposit(float $amount): float {
        $this->balance += $amount;
        return $this->balance;
    }

    // function withdraw 
    public function withdraw(float $amount): float
    {
        $this->balance -= $amount;
        return $this->balance;
    }
}

?>
