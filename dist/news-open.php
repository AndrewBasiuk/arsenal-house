<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.min.css">
    <title>Заголовок для нової новини у три рядки тексту</title>
</head>
<body>
    <?php include_once('includes/preloader.php'); ?>
    <?php include_once('includes/menu.php'); ?>
    <?php include_once('includes/header.php'); ?>
    <div class="page">
        <div class="news-open__wrapper">
            <div class="wrapper">
                <div class="page-heading news-open__heading news-open__heading_flex animate-me">
                    <a class="news-open__back-btn" href="news.php">Назад</a>
                    <h1>Заголовок для нової новини у три рядки тексту</h1>
                    <span class="news-open__date">15.03.2018</span>
                </div>
                <div class="news-open__content">
                    <div class="news-open__image">
                        <div class="js-news-open__image">
                            <img src="/img/news-open/1.jpg" alt="News image 1">
                            <img src="/img/news-open/2.jpg" alt="News image 1">
                            <img src="/img/news-open/3.jpg" alt="News image 1">
                            <img src="/img/news-open/4.jpg" alt="News image 1">
                            <img src="/img/news-open/5.jpg" alt="News image 1">
                        </div>
                        <div>
                            <div class="news-open__gallery-thumb-list js-news-open__gallery-thumb-list"></div>
                        </div>
                    </div>
                    <div class="news-open__text">
                        <p>
                            Проснувшись однажды утром после беспокойного сна, Грегор Замза обнаружил, что он у себя в постели превратился в 
                            страшное насекомое. Лежа на панцирнотвердой спине, он видел, стоило ему приподнять голову, свой коричневый, 
                            выпуклый, разделенный дугообразными чешуйками живот, на верхушке которого еле держалось готовое вот-вот окончательно 
                            сползти одеяло. Его многочисленные, убого тонкие по сравнению с остальным телом ножки беспомощно 
                            копошились у него перед глазами.
                        </p>
                        <a href="construction.php" class="news-open__construction-btn">Хід будівництва</a>
                    </div>
                </div>
                <div class="page-heading news-open__heading animate-me">
                    <h4>Заголовок для нової новини у три рядки тексту</h4>
                </div>
                <div class="news-open__more-news">
                    <div class="news__item news__item_id-9">
                        <div class="news__date">15.03.2018</div>
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

                    <div class="news__item news__item_id-10">
                        <div class="news__date">15.03.2018</div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/common.min.js"></script>
    <script src="js/news-open.min.js"></script>
</body>
</html>