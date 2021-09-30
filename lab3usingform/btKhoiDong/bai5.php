<html>

<body>
    <form action="bai5.php" name="myform" method="post">
        <input type="radio" name="radGT" value="Nam" <?php if (isset($_POST['radGT']) && $_POST['radGT'] == 'Nam') echo 'checked="checked"'; ?> checked /> Nam<br>
        <input type="radio" name="radGT" value="Nữ" <?php if (isset($_POST['radGT']) && $_POST['radGT'] == 'Nữ') echo 'checked="checked"'; ?> />
        N&#7919;<br>

        <input type="submit" value="Gửi">
    </form>

    <?php
    if (isset($_POST['radGT'])) {
        echo "Giới tính : " . $_POST['radGT'];
    }
    ?>
</body>

</html>