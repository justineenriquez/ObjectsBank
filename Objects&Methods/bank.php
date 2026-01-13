<!-- 
Name: Enriquez, Justine Paul A.
Date: 01/13/2026
Section: WD-201 
-->

<?php
// Include necessary class files
include "classes/Account.php";
include "classes/Customer.php";

// Include header
include "includes/header.php";

$accounts = [
    new Account("1716-101", "Savings", 25000),
    new Account("1717-102", "Checking", -1000),
    new Account("1718-103", "Emergency Funds", 57240),
    new Account("1719-104", "Credit", -1300)
];

$customer = new Customer("Justine","Enriquez", $accounts);
?>

<main>    
    <section class="account-summary">
        <h2><?php echo $customer->getFullName(); ?></h2>

        <table class="accounts-table">
           <thead>
                <tr>
                    <th>Account Number</th>
                    <th>Account Type</th>
                    <th>Balance</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($customer->accounts as $account): ?>
                <tr>
                    <td><?php echo $account->number; ?></td>
                    <td><?php echo $account->type; ?></td>

                    <?php if ($account->balance >= 0): ?>
                        <td class="credit">
                            ₱<?php echo number_format($account->balance, 2); ?>
                        </td>
                    <?php else: ?>
                        <td class="overdrawn">
                            ₱<?php echo number_format($account->balance, 2); ?>
                        </td>
                    <?php endif; ?>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>
</main>

<?php include "includes/footer.php"; ?>