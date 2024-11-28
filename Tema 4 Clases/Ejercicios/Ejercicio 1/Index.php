<?php
class Customer {
    public string $forename;
    public string $surname;
    public string $email;
    public string $password;    
}

class Account {
    public int $number;
    public string $type;
    public float $balance;
}

$customer = new Customer();
$account = new Account();
$customer->forename = "Pedro";
$customer->surname = "Gomez";
$customer->email = "peter@eg.link";
$account->balance = 1000.00;
?>
<?php require 'Includes/Header.php' ?>
<section>
    <p>Nombre: <?= "$customer->forename  $customer->surname;"?></p>
    <p>Email: <?= $customer->email; ?></p>
    <p>Balance: <?= $account->balance; ?></p>
</section>
<?php include_once 'Includes/Footer.php' ?>