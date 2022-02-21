<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">

    <h2>Додавання товару</h2>
    <p><input name="sku" type="text" placeholder="sku"></p>
    <p><input name="name" type="text" placeholder="Назва товару"></p>
    <p><input name="price" type="text" placeholder="Ціна/шт"></p>
    <p><input name="qty" type="text" placeholder="Кількість"></p>
    <p><textarea name="description" placeholder="Опис товару"></textarea></p>
    <input name="submit" type="submit" value="Відправити">
</form>