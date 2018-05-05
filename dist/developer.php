<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.min.css">
    <title>Девелопер проекту</title>
</head>
<body>
    <?php include_once('includes/preloader.php'); ?>
    <?php include_once('includes/menu.php'); ?>
    <?php include_once('includes/header.php'); ?>
    <div class="page">
        <div class="developer__wrapper">
            <div class="wrapper">
                <div class="page-heading developer__heading animate-me">
                    <h1>Девелопер проекту</h1>
                </div>
                <div class="developer__description">
                    <div class="developer__description_text">
                        <h4 class="developer__description_heading">КОМПАНІЯ «BUD DEVELOPMENT»</h4>
                        <p class="developer__description_paragraph">
                            Компанія «bUd development» створена командою професіоналів в галузі житлового будівництва. 
                            Головна мета команди - створення особливих проектів, які відповідають сучасним потребам ринку та поєднують 
                            в собі продуману концепцію забудови й інфраструктури. Діяльність компанії «bud development» орієнтована на 
                            пошук та впровадження сучасних та ефективних рішень в сфері нерухомості.
                        </p>
                        <a href="#" target="_blank" class="developer__description_link">Офіційний сайт компанії</a>
                    </div>
                    <div class="developer__description_logos">
                        <ul>
                            <li class="developer__description_logo developer__description_logo-1"><img src="/img/developer/bud.png" alt="Bud"></li>
                            <li class="developer__description_logo developer__description_logo-2"><img src="/img/developer/kc.png" alt="Kc"></li>
                            <li class="developer__description_logo developer__description_logo-3"><img src="/img/developer/kievmiskbud.png" alt="kievmiskbud"></li>
                        </ul>
                    </div>
                </div>
                <div class="page-heading developer__heading animate-me">
                    <h4>Наші проекти</h4>
                </div>
                <div class="developer__gallery-container">
                    <ul class="developer__gallery">
                        <li class="developer__gallery_item">
                            <a href="#"><img src="/img/developer/bristol.png" alt=""></a>
                        </li>
                        <li class="developer__gallery_item">
                            <a href="#"><img src="/img/developer/chikago.png" alt=""></a>
                        </li>
                        <li class="developer__gallery_item">
                            <a href="#"><img src="/img/developer/einstein.png" alt=""></a>
                        </li>
                        <li class="developer__gallery_item">
                            <a href="#"><img src="/img/developer/kandinsky.png" alt=""></a>
                        </li>
                        <li class="developer__gallery_item">
                            <a href="#"><img src="/img/developer/newyork.png" alt=""></a>
                        </li>
                        <li class="developer__gallery_item">
                            <a href="#"><img src="/img/developer/resident.png" alt=""></a>
                        </li>
                        <li class="developer__gallery_item">
                            <a href="#"><img src="/img/developer/kandinsky.png" alt=""></a>
                        </li>
                        <li class="developer__gallery_item">
                            <a href="#"><img src="/img/developer/newyork.png" alt=""></a>
                        </li>
                        <li class="developer__gallery_item">
                            <a href="#"><img src="/img/developer/resident.png" alt=""></a>
                        </li>
                    </ul>
                    <div class="developer__slider-arrow developer__slider-arrow_left">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="33" viewBox="0 0 24 33">
                            <defs>
                                <path id="right" d="M1493.74 3513.05a2.42 2.42 0 0 1 0-3.45l2.9-2.87a2.47 2.47 0 0 1 3.48 0l12.16 12.06c.96.95.96 2.5 0 3.44l-12.16 12.06c-.96.95-2.52.95-3.48 0l-2.9-2.87a2.42 2.42 0 0 1 0-3.44l7.54-7.47z"/>
                                <path id="left" d="M425.26 4067.95c.96.95.96 2.5 0 3.44l-2.9 2.87c-.96.96-2.52.96-3.48 0l-9.23-9.14a2.48 2.48 0 0 1-.04-.04l-2.9-2.87a2.42 2.42 0 0 1 0-3.45l12.17-12.05a2.47 2.47 0 0 1 3.48 0l2.9 2.87c.96.95.96 2.5 0 3.44l-7.53 7.47z"/>
                            </defs>
                            <use transform="translate(-404 -4044)" xlink:href="#left"/>
                        </svg>
                    </div>
                    <div class="developer__slider-arrow developer__slider-arrow_right">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="33" viewBox="0 0 24 33">
                            <use transform="translate(-1491 -3504)" xlink:href="#right"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer developer__footer">
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
    <script src="js/developer.min.js"></script>
</body>
</html>