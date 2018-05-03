<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.min.css">
    <title>Веб-камера</title>
</head>
<body>
    <?php include_once('includes/preloader.php'); ?>
    <?php include_once('includes/menu.php'); ?>
    <?php include_once('includes/header.php'); ?>
    <div class="page">
        <div class="webcam__wrapper">
            <div class="wrapper">
                <div class="page-heading webcam__heading animate-me">
                    <h1>Веб-камера</h1>
                </div>
                <div class="webcam__status">
                    <p>
                        Статус работ: работы по благоустройству фундамента
                    </p>
                    <p>
                        Запланированное время завершения строительства: II квартал 2018 года
                    </p>
                </div>
                <div class="webcam__video">
                    <iframe src="https://macparts.kiev.ua:8402/player.html" name="restreamer-player" width="100%" height="100%" scrolling="no" frameborder="0" webkitallowfullscreen="true" mozallowfullscreen="true" allowfullscreen="true"></iframe>    
                </div>
                </div>
            </div>
        </div>
        <footer class="footer webcam__footer">
            <div class="wrapper footer__wraper">
                <div class="copyright">
                    &#169; Усі права захищено. Арсенал
                </div>
                <div class="smartOrange">
                    <a href="http://smartorange.com.ua/" target="_blank">
                        <img src="img/common/logo-smart-orange.png" alt="Smart Orange Logo">
                    </a>
                </div>
            </div>
        </footer>
    </div>
    <script src="js/common.min.js"></script>
</body>
</html>