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
        <div class="contacts-page__heading-wrapper">
            <div class="page-heading contacts-page__heading animate-me">
                <h1>Contacts</h1>
            </div>
        </div>
        <div class="contacts__info-blocks">
            <div class="contacts__info-block contacts__info-block_1">
                <div class="contacts__info-block_inner">
                    <h3 class="contacts__info-block-heading">Відділ продажів на об’єкті</h3>
                    <ul class="contacts__info-block-list">
                        <li class="contacts__info-block-item contacts__info-block-item_1">вул. Арсенальна 45</li>
                        <li class="contacts__info-block-item contacts__info-block-item_2"><a href="mailto:Arsenalhouse@com.ua">Arsenalhouse@com.ua</a></li>
                        <li class="contacts__info-block-item contacts__info-block-item_3"><a href="#">(044) 45-45-123</a></li>
                        <li class="contacts__info-block-item contacts__info-block-item_4">
                            <div>
                                Пн.-Пт.:   9:00 - 19:00
                            </div>
                            <div>
                                Сб.-Нд.: 10:00 - 17:00
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="contacts__info-block contacts__info-block_2">
                <div class="contacts__info-block_inner">
                <h3 class="contacts__info-block-heading">Відділ продажів <br/>BUD Development</h3>
                    <ul class="contacts__info-block-list">
                        <li class="contacts__info-block-item contacts__info-block-item_1">вул. Арсенальна 45</li>
                        <li class="contacts__info-block-item contacts__info-block-item_2"><a href="mailto:Arsenalhouse@com.ua">Arsenalhouse@com.ua</a></li>
                        <li class="contacts__info-block-item contacts__info-block-item_3"><a href="#">(044) 45-45-123</a></li>
                        <li class="contacts__info-block-item contacts__info-block-item_4">
                            <div>
                                Пн.-Пт.:   9:00 - 19:00
                            </div>
                            <div>
                                Сб.-Нд.: 10:00 - 17:00
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <a href="#" class="contacts__btn"><span class="contacts__btn-iocn"></span>Зворотній зв’язок</a>
        </div>
        <div class="contacts-page__wrapper js-contacts-page__map">
        </div>
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