<?php

$customers = $this->get('customer');
?>
<div class="customer" style="padding-left: 130px">
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Імя</th>
            <th>Прізвище</th>
            <th>Ном.телефону</th>
            <th>Місто</th>
        </tr>
        </thead><?php
        foreach ($customers as $customer) :
            ?>
            <tbody>
            <tr>
                <th><?php echo $customer['customer_id'] ?></th>
                <td><?php echo $customer['last_name'] ?></td>
                <td><?php echo $customer['first_name'] ?></td>
                <td><?php echo $customer['telephone'] ?></td>
                <td><?php echo $customer['city'] ?></td>
            </tr>
            </tbody>
        <?php endforeach; ?>
    </table>
</div>

