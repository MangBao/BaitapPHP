<html>

<head>
    <title>Input/Ouput data</title>
</head>

<body>
    <form action="bai1.php" name="myform" method="post">
        Tên của bạn: <input type="test" name="Name" size=20 value="<?php if (isset($_POST['Name'])) echo $_POST['Name']; ?>" />
        <br>
        <input type="submit" value="Gửi">
    </form>
    <?php
    if (isset($_POST["Name"]))
        print "Hello " . $_POST["Name"];
    ?>
</body>

</html>