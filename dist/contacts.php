<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.min.css">
    <title>Contacts</title>
</head>
<body>
    <?php include_once('includes/preloader.php'); ?>
    <?php include_once('includes/menu.php'); ?>
    <?php include_once('includes/header.php'); ?>
    <div class="page">
        <div class="contacts-page__wrapper">
            <div class="wrapper">
                <div class="page-heading contacts-page__heading animate-me">
                    <h1>Contacts</h1>
                </div>
            </div>
        </div>
        <div class="contacts-page__map js-contacts-page__map"></div>
        <footer class="footer documents__footer">
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
    <?/* 
    api key: AIzaSyAMNKSlK2f4GzCKxngMafg2SkcA5QeWsgI
    acc: arsenalHouseApiAcc@gmail.com
    pass:  ;,hz4q4F[(f{uE>' */
    ?>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAMNKSlK2f4GzCKxngMafg2SkcA5QeWsgI"></script>
    <script src="js/common.min.js"></script>
    <script src="js/contacts.min.js"></script>
</body>
</html>