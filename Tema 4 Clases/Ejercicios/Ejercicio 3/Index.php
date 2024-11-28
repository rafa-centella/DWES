<?php
declare(strict_types= 1);

class Account {
    public int $number;
    protected string $owner;
    public string $type;
    public float $balance;

    public function __construct(int $number, string $owner, string $type, float $balance = 0.00) {
        $this->number = $number;
        $this->owner = $owner;
        $this->type = $type;
        $this->balance = $balance;
    }

    public function deposit (float $amount): float {
        $this->balance += $amount;
        return $this->balance;
    }

    public function withdraw (float $amount): float {
        $this->balance -= $amount;
        return $this->balance;
    }

    public function getBalance (): float {
        return $this->balance;
    }

    public function getowner (): string {
        return $this->owner;
    }

    public function setowner (string $owner): string {
        $this->owner = $owner;
        return $this->owner;
    }

    
}

$account = new Account (20148896, 'Jose Luis', 'Savings', 80.00);
$account2 = new Account (36547865, 'Estefanía', 'Checking', 350.00);

require 'Includes/Header.php';

?>

<h2>Cuentas abiertas</h2>
<table>
    <thead>
        <tr>
            <th></th>
            <th><?= $account->type ?></th>
            <th><?= $account2->type ?></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th>Number</th>
            <td><?= $account->number ?></td>
            <td><?= $account2->number ?></td>
        </tr>
        <tr>
            <th>Name</th>
            <td><?= $account->getowner() ?></td>
            <td><?= $account2->getowner() ?></td>
        </tr>
        <tr>
            <th>Balance</th>
            <td><?= $account->getBalance() ?></td>
            <td><?= $account2->getBalance() ?></td>
        </tr>
    </tbody>
</table>

<p>Deposito en cuenta <?= $account2->type ?></p>
<p>Balance previo: $<?= $account2->getBalance() ?></p>
<p>Balance actual: $<?= $account2->deposit(50.00) ?></p>
<br>
<p>Cambio de nombre títular:</p>
<p>Nombre anterior: <?= $account->getowner() ?></p>
<p>Nombre actual: <?= $account->setowner('Rafael') ?></p>
<?php include 'Includes/Footer.php' ?>
