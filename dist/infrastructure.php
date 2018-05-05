<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.min.css">
    <title>Інфраструктура</title>
</head>
<body>
    <?php include_once('includes/preloader.php'); ?>
    <?php include_once('includes/menu.php'); ?>
    <?php include_once('includes/header.php'); ?>
    <div class="page">
        <div class="infrastructure-page__heading-wrapper">
            <div class="page-heading infrastructure-page__heading animate-me">
                <h1>Інфраструктура</h1>
            </div>
        </div>
        <div class="infrastructure__filter">
            <div class="infrastructure__filter_item">
                <input type="checkbox" name="gift_shop" id="gift_shop" checked>
                <label class="infrastructure__filter_item-icon" for="gift_shop"><span class="infrastructure__filter_icon infrastructure__filter_icon-gift-shop"></span></label>
                <label class="infrastructure__filter_item-text" for="gift_shop">Сувениыне магазины</label>
            </div>
            <div class="infrastructure__filter_item">
                <input type="checkbox" name="sport_complex" id="sport_complex" checked>
                <label class="infrastructure__filter_item-icon" for="sport_complex"><span class="infrastructure__filter_icon infrastructure__filter_icon-sport_complex"></span></label>
                <label class="infrastructure__filter_item-text" for="sport_complex">Сорт комплексы</label>
            </div>
            <div class="infrastructure__filter_item">
                <input type="checkbox" name="higher_education_establishment" id="higher_education_establishment" checked>
                <label class="infrastructure__filter_item-icon" for="higher_education_establishment"><span class="infrastructure__filter_icon infrastructure__filter_icon-higher_education_establishment"></span></label>
                <label class="infrastructure__filter_item-text" for="higher_education_establishment">Высшие учебные заведения</label>
            </div>
            <div class="infrastructure__filter_item">
                <input type="checkbox" name="toy_store" id="toy_store" checked>
                <label class="infrastructure__filter_item-icon" for="toy_store"><span class="infrastructure__filter_icon infrastructure__filter_icon-toy_store"></span></label>
                <label class="infrastructure__filter_item-text" for="toy_store">Детские магазины</label>
            </div>
            <div class="infrastructure__filter_item">
                <input type="checkbox" name="cafe_restaraunts" id="cafe_restaraunts" checked>
                <label class="infrastructure__filter_item-icon" for="cafe_restaraunts"><span class="infrastructure__filter_icon infrastructure__filter_icon-cafe_restaraunts"></span></label>
                <label class="infrastructure__filter_item-text" for="cafe_restaraunts">Кафе, рестораны</label>
            </div>
            <div class="infrastructure__filter_item">
                <input type="checkbox" name="school" id="school" checked>
                <label class="infrastructure__filter_item-icon" for="school"><span class="infrastructure__filter_icon infrastructure__filter_icon-school"></span></label>
                <label class="infrastructure__filter_item-text" for="school">Школы</label>
            </div>
            <div class="infrastructure__filter_item">
                <input type="checkbox" name="dentist" id="dentist" checked>
                <label class="infrastructure__filter_item-icon" for="dentist"><span class="infrastructure__filter_icon infrastructure__filter_icon-dentist"></span></label>
                <label class="infrastructure__filter_item-text" for="dentist">Стоматология</label>
            </div>
            <div class="infrastructure__filter_item">
                <input type="checkbox" name="pharmacy" id="pharmacy" checked>
                <label class="infrastructure__filter_item-icon" for="pharmacy"><span class="infrastructure__filter_icon infrastructure__filter_icon-pharmacy"></span></label>
                <label class="infrastructure__filter_item-text" for="pharmacy">Аптеки</label>
            </div>
            <div class="infrastructure__filter_item">
                <input type="checkbox" name="supermarket" id="supermarket" checked>
                <label class="infrastructure__filter_item-icon" for="supermarket"><span class="infrastructure__filter_icon infrastructure__filter_icon-supermarket"></span></label>
                <label class="infrastructure__filter_item-text" for="supermarket">Супермаркеты</label>
            </div>
            <div class="infrastructure__filter_item">
                <input type="checkbox" name="shopping_mall" id="shopping_mall" checked>
                <label class="infrastructure__filter_item-icon" for="shopping_mall"><span class="infrastructure__filter_icon infrastructure__filter_icon-shopping_mall"></span></label>
                <label class="infrastructure__filter_item-text" for="shopping_mall">Тортговые центры</label>
            </div>
            <div class="infrastructure__filter_item">
                <input type="checkbox" name="bank" id="bank" checked>
                <label class="infrastructure__filter_item-icon" for="bank"><span class="infrastructure__filter_icon infrastructure__filter_icon-bank"></span></label>
                <label class="infrastructure__filter_item-text" for="bank">Банки</label>
            </div>
        </div>
        <div class="infrastructure-page__wrapper js-infrastructure-page__map">
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
    <script src="js/infrastructure.min.js"></script>
</body>
</html>