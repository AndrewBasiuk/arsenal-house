<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.min.css">
    <title>Новости</title>
</head>
<body>
    <?php include_once('includes/preloader.php'); ?>
    <?php include_once('includes/menu.php'); ?>
    <?php include_once('includes/header.php'); ?>
    <div class="page">
        <div class="news__wrapper">
            <div class="wrapper">
                <div class="page-heading news__heading animate-me">
                    <h1>Новости</h1>
                    <a href="#" class="news__subscribe-btn">Підписатися на новини</a>
                </div>
                <div class="news__ist">

                    <div class="news__item news__item_id-1">
                        <div class="news__item_inner-border">
                            <div class="news__item_content">
                                <h4 class="news__item_heading">Заголовок для нової новини у три рядки тексту</h4>
                                <p class="news__item_paragraph">Lorem Ipsum - це текст-"риба", що використовується в друкарстві та дизайні. Lorem Ipsum є, фактично, стандартною "рибою"...</p>
                                <div class="news_more-btn">
                                    <a href="#">Детальніше</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="news__item news__item_id-2">
                        <div class="news__item_inner-border">
                            <div class="news__item_content">
                                <h4 class="news__item_heading">Заголовок для нової новини у три рядки тексту</h4>
                                <p class="news__item_paragraph">Lorem Ipsum - це текст-"риба", що використовується в друкарстві та дизайні. Lorem Ipsum є, фактично, стандартною "рибою"...</p>
                                <div class="news_more-btn">
                                    <a href="#">Детальніше</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <footer class="footer">
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