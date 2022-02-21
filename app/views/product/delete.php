<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">

    <h4>Видалити продукт з ID <?php echo $_GET['id'] ?></h4>

    <p>Ви впевнені що хочете видалити цей товар?</p>
    <br>
    <input type="submit" name="submit" value="Видалити">
</form>