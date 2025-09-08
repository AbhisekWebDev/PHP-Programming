<!-- Access Modifiers -->
<!-- Use public, private, and protected to control access to properties and methods. -->

<?php
class BankAccount {
    private $balance = 0;

    public function deposit($amount) {
        $this->balance += $amount;
    }

    public function getBalance() {
        return $this->balance;
    }
}

$acc = new BankAccount();
$acc->deposit(1000);
echo $acc->getBalance(); // Output: 1000
?>
