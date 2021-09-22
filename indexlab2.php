<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập PHP</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./assets/css/main.css">
</head>
<body>
    <section class="hero --purple-gradient-2">
        <figure class="bg-wrapper">
            <img src="./assets/images/graphic-abstract.jpg"> </figure>
        <div class="wrapper hero__content">
            <div class="row">
                <div class="col-md-7 col-sm-12 col-xs-12">
                    <div class="content">
                        <div class="name">
                            <h1>MANG BẢO</h1>
                        </div> <br>
                        <div id="title">
                            <h3>Lab 2 Basic PHP</h3> <br>
                        </div>

                        <div style="font-weight: 500; font-style: italic; color: #fff;">
                        <?php
                            require_once "./Lab2BasicPHP/bai1.php";
                            require_once "./Lab2BasicPHP/bai2.php";
                            require_once "./Lab2BasicPHP/bai3.php";
                            require_once "./Lab2BasicPHP/bai4.php";
                            require_once "./Lab2BasicPHP/bai5.php";
                        ?>
                        </div>                      
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>