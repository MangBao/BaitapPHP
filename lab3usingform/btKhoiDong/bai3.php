<html>

<head>
    <title>Input/Ouput data</title>
</head>

<body>
    <form action="bai3.php" name="myform" method="post">
        Bình luận của bạn:
        <br>
        <textarea name="comment" rows="3" cols="40"><?php if (isset($_POST['comment'])) echo $_POST['comment']; ?></textarea>
        <br>
        <input type="submit" value="Gửi">
    </form>
    <?php
        if (isset($_POST["comment"]))
            print "Bình luận của bạn: " . $_POST["comment"];
    ?>
</body>

</html>