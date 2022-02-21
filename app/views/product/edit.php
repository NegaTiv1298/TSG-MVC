<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">

    <?php

    $product = $this->get('product');

    ?>

    <h2>Редагування товару з ID <?php echo $product['id']; ?></h2>
    <p><input name="id" hidden value="<?php echo $product['id']; ?>"></p>
    <p><input name="sku" type="text" value="<?php echo $product['sku']; ?>"></p>
    <p><input name="name" type="text" value="<?php echo $product['name']; ?>"></p>
    <p><input name="price" type="text" value="<?php echo $product['price']; ?>"></p>
    <p><input name="qty" type="text" value="<?php echo $product['qty']; ?>"></p>
    <p>Опис: <?php if ($product['description'] !== 'Опису покищо немає') echo $product['description'] ?></p>
    <p><textarea name="description" placeholder="Змінити опис товару"></textarea></p>
    <input name="submit" type="submit" value="Відправити">
</form>

