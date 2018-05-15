<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.min.css">
    <title>Arsenal House</title>
</head>
<body>
    <?php include_once('includes/preloader.php'); ?>
    <?php include_once('includes/menu.php'); ?>
    <?php include_once('includes/header.php'); ?>

    <section class="hero animate-main-page-hero">
        <div class="hero__image-wrapper">
            <div class="hero__image-container">
                <div class="hero__image hero__image-left"></div>
            </div>
            <div class="hero__image-container">
                <div class="hero__image hero__image-right"></div>
            </div>
        </div>
        <div class="hero__letter-a">
        <svg
            xmlns:svg="http://www.w3.org/2000/svg"
            xmlns="http://www.w3.org/2000/svg"
            width="100%"
            height="100%"
            viewBox="0 0 1947.000000 2010.000000"
            preserveAspectRatio="xMidYMid meet">
            <g  class="svg-hero__letter_main-bg"
                transform="matrix(0.1,0,0,-0.10060075,0,2022.0544)">
                <path class="svg-hero__letter-color"
                d="m 7203,20110.615 c -146,-3.007 -193,-6.014 -193,-16.038 0,-13.031 97,-339.805 123,-412.978 l 14,-40.095 709,-6.015 c 665,-6.014 836,-13.03 982,-39.092 49,-9.022 92,-25.06 92,-35.083 0,-13.031 -120,-417.991 -194,-651.544 C 8315,17570.597 5521,9091.5049 4389,5723.5243 3913,4304.161 3832,4070.6076 3620,3493.2395 3191,2326.4748 2915,1676.9357 2702,1329.1115 2484,974.27068 2022,761.76714 1305,686.589 c -88,-10.02375 -160,-18.04276 -160,-19.04513 0,0 -38,-113.2684 -83,-250.5938 C 1017,279.62467 982,165.3539 984,163.34915 1002,145.3064 1248,138.28977 2215,130.27077 3896,116.23752 4852,92.180514 5785,37.049879 6151,16 6190,16 9680,16 c 3471,0 3531,1.002375 3885,21.049879 919,55.130635 1877,80.190011 3545,93.220891 1014,9.02138 1248,15.03563 1267,33.07838 4,4.0095 -152,492.16622 -161,505.19709 0,0 -86,11.02613 -191,22.05226 -555,63.14964 -982,221.52491 -1223,455.0783 -225,217.5154 -582,1024.4275 -1154,2603.1684 -287,793.8811 -1499,4420.4745 -3081,9221.8518 -1366,4145.824 -2012,6134.536 -2107,6488.374 l -29,108.257 32,14.033 c 90,37.088 410,55.131 1018,55.131 256,0 527,3.007 601,6.014 l 136,7.017 50,161.382 c 69,216.513 87,285.677 78,294.698 -7,6.015 -4716,11.027 -5143,5.012 z"
                inkscape:connector-curvature="0" />
                <path class="svg-hero__letter-inside svg-hero__letter-inside_top"
                d="m 9786,18645 c 135,-40 199,-157 498,-908 439,-1103 764,-2036 1581,-4542 669,-2051 919,-2798 1036,-3094 38,-95 69,-177 69,-182 0,-5 -1427,-9 -3290,-9 -1809,0 -3290,3 -3290,6 0,3 36,98 81,212 92,234 488,1416 949,2832 737,2262 1130,3412 1465,4285 321,835 489,1223 574,1326 65,78 207,110 327,74 z"
                inkscape:connector-curvature="0"/>
                <path class="svg-hero__letter-inside svg-hero__letter-inside_bottom"
                d="m 13153,9343 c 3,-10 17,-52 32,-93 14,-41 43,-145 65,-230 64,-255 231,-795 615,-1985 939,-2910 1355,-4363 1476,-5157 17,-112 22,-191 23,-368 l 1,-225 -32,-80 c -121,-298 -290,-418 -683,-486 -212,-36 -530,-59 -1055,-74 -296,-9 -569,-25 -579,-35 -4,-4 -1,-34 9,-67 16,-57 140,-448 151,-478 6,-13 -374,-15 -3496,-15 -2798,0 -3501,3 -3497,13 14,37 138,422 152,475 11,37 14,67 9,72 -11,10 -290,26 -739,40 -742,24 -1049,69 -1270,183 -138,72 -225,177 -302,363 -34,83 -37,97 -41,218 -22,659 330,1975 1503,5616 413,1282 553,1735 625,2018 35,141 76,272 95,303 4,5 1316,9 3469,9 3290,0 3464,-1 3469,-17 z"
                inkscape:connector-curvature="0" />
            </g>
            </svg>

        </div>
        <div class="hero__main-text">
            <p>Будинок для шанувальників розкішного життя</p>
        </div>
        <div class="hero__choose-apartment-btn">
            <a href="#">Обрати апартаменти</a>
        </div>
        <div class="hero__next-view">
            <div class="next-view next-view_brown">
                <a href="#" data-nextView=".building">Наступна <span class="next-view__icon next-view__icon_brown"></span>сторiнка</a>
            </div>
        </div>
    </section>

    <section class="building animate-me">
        <canvas class="building__canvas"></canvas>
        <div class="building__inner wrapper">
            <div class="section__box section__box_buiding">
                <div class="section__box_outer">
                    <div class="section__box_inner">
                        <div class="section__box-text-container">
                            <div>
                                <h4 class="section__box-heading">The Building</h4>
                            </div>
                            <div class="section__box-paragraphs">
                                <p class="section__box-paragraph section__box-paragraph_1">Часи змінюються, але історичний центр поблизу Парламенту та набережної Дніпра залишається найбільш респектабельним місцем для проживання.</p>
                                <p class="section__box-paragraph section__box-paragraph_2">Ласкаво просимо до Arsenal House - ідеальне місце для тих, хто завжди знаходиться в центрі подій, але при цьому цінує тишу та спокій! Горда архітектура фасадів з ювелірною точністю вписана в самобутній район Печерська, де до сих пір зберігся дух старого Києва.</p>
                                <p class="section__box-paragraph section__box-paragraph_3">Арсенал справжніх асоціацій, атмосфера та стан душі</p>
                            </div>
                            <div class="section__box-btn-wrapper">
                                <div class="section__box-btn">
                                    <a href="#">Перейти до Переваг</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="building__next-view">
                <div class="next-view next-view_black">
                    <a href="#" data-nextView=".apartments">Наступна <span class="next-view__icon next-view__icon_black"></span>сторiнка</a>
                </div>
            </div>
        </div>
    </section>

    <section class="apartments animate-me">
        <div class="apartments__overlay"></div>
        <div class="apartments__inner wrapper">
            <div class="section__box section__box_apartments">
                <div class="section__box_outer">
                    <div class="section__box_inner">
                        <div class="section__box-text-container">
                            <div>
                                <h4 class="section__box-heading">Apartments</h4>
                            </div>
                            <div class="section__box-paragraphs">
                                <p class="section__box-paragraph section__box-paragraph_1">Arsenal House - мистецтво неквапливої і вдумливої насолоди життям в оточенні вічної краси.</p>
                                <p class="section__box-paragraph section__box-paragraph_2">Всього 139 квартир. Камерна атмосфера і оточення респектабельного кола сусідів дарують дорогоцінне відчуття приватності та спокою.</p>
                            </div>
                            <div class="section__box-btn-wrapper">
                                <div class="section__box-btn">
                                    <a href="#">Обрати квартиру</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="building__next-view">
                <div class="next-view next-view_brown">
                    <a href="#" data-nextView=".location">Наступна <span class="next-view__icon next-view__icon_brown"></span>сторiнка</a>
                </div>
            </div>
        </div>
    </section>

    <section class="location animate-me">
        <div class="ba-slider">
            <img src="img/main/location_paint.jpg" alt="Slider paint image">
            <!-- <div class="location__image location__image-left"></div> -->
            <div class="resize">
                <!-- <div class="location__image location__image-right"></div> -->
                <img src="img/main/location.jpg" alt="Slider image">
            </div>
            <span class="handle"></span>
        </div>
        <div class="location__inner wrapper">
            <div class="section__box section__box_location">
                <div class="section__box_outer">
                    <div class="section__box_inner">
                        <div class="section__box-text-container">
                            <div>
                                <h4 class="section__box-heading">Locaton</h4>
                            </div>
                            <div class="section__box-paragraphs">
                                <p class="section__box-paragraph section__box-paragraph_1">Локація Arsenal House поєднує дві сторони життя столиці. З одної сторони – історичне минуле України, що знаходить своє відображення в культурних пам’ятках,</p>
                                <p class="section__box-paragraph section__box-paragraph_2">музеях та захоплюючих краєвидах зі схилів Дніпра. А з іншого боку, на Західній стороні вулиці, ритмічно та нестомно вирує серце ділового Печерська та атмосфера мегаполісу.</p>
                            </div>
                            <div class="section__box-btn-wrapper">
                                <div class="section__box-btn">
                                    <a href="#">Подивитись на карті</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="location__next-view">
                <div class="next-view next-view_black">
                    <a href="#" data-nextView=".quote_1" >Наступна <span class="next-view__icon next-view__icon_black"></span>сторiнка</a>
                </div>
            </div>
        </div>
    </section>

    <section class="quote quote_1 animate-me">
        <div class="quote__text">
            <div class="quote__frame_0">
                <div class="quote__frame quote__frame_1"></div>
                <div class="quote__frame quote__frame_2"></div>
                <div class="quote__frame quote__frame_3"></div>
                <h3 class="quote__heading">У тебе є вороги? Добре. Це означає, що в своєму житті ти щось відстоював.</h3>
            </div>
            <div class="quote__author">
                <div>Сер Уінстон Черчіль</div>
            </div>
        </div>
        <div class="quote__next-view">
            <div class="next-view next-view_brown">
                <a href="#" data-nextView=".gallery">Наступна <span class="next-view__icon next-view__icon_brown"></span>сторiнка</a>
            </div>
        </div>
    </section>

    <section class="gallery animate-me">
        <div class="gallery__thumbnails">
                <div class="thumb thumb_1"></div>
                <div class="thumb thumb_2"></div>
                <div class="thumb thumb_3"></div>
                <div class="thumb thumb_4"></div>
                <div class="thumb thumb_5"></div>
                <div class="thumb thumb_6"></div>
                <div class="thumb thumb_7"></div>
                <div class="thumb thumb_8"></div>
        </div>
        <div class="gallery__items">
            <div class="gallery__item gallery__item_1"></div>
            <div class="gallery__item gallery__item_2"></div>
            <div class="gallery__item gallery__item_3"></div>
            <div class="gallery__item gallery__item_4"></div>
            <div class="gallery__item gallery__item_5"></div>
            <div class="gallery__item gallery__item_6"></div>
            <div class="gallery__item gallery__item_7"></div>
            <div class="gallery__item gallery__item_8"></div>
        </div>
        <div class="section__box section__box_gallery">
            <div class="section__box_outer">
                <div class="section__box_inner">
                    <div class="section__box-text-container">
                        <div>
                            <h4 class="section__box-heading">LifeStyle</h4>
                        </div>
                        <div class="section__box-paragraphs">
                            <p class="section__box-paragraph section__box-paragraph_1">У будинку Arsenal House тихо та камерно, але лише декілька хвилин - і Ви в епіцентрі ділового та культурного Києва, з його театрами 
                                і ресторанчиками, модними галереями і бутиками, бізнес - центрами, пабами і кав'ярнями, парками та культурними пам’ятками.</p>
                        </div>
                        <div class="section__box-btn-wrapper">
                            <div class="section__box-btn">
                                <a href="#">Детальніше</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gallery__letter">
            <img src="img/main/gallery_letter.svg" alt="Gallery letter">
        </div>
        <div class="quote__next-view">
            <div class="next-view next-view_black">
                <a href="#" data-nextView=".quote_2">Наступна <span class="next-view__icon next-view__icon_brown"></span>сторiнка</a>
            </div>
        </div>
    </section>

    <section class="quote quote_2 animate-me">
        <div class="quote__text">
            <div class="quote__frame_0">
                <div class="quote__frame quote__frame_1"></div>
                <div class="quote__frame quote__frame_2"></div>
                <div class="quote__frame quote__frame_3"></div>
                <h3 class="quote__heading">У тебе є вороги? Добре. Це означає, що в своєму житті ти щось відстоював.</h3>
            </div>
            <div class="quote__author">
                <div>Сер Уінстон Черчіль</div>
            </div>
        </div>
        <div class="quote__next-view">
            <div class="next-view next-view_brown">
                <a href="#" data-nextView=".contacts">Наступна <span class="next-view__icon next-view__icon_brown"></span>сторiнка</a>
            </div>
        </div>
    </section>

    <section class="news__main-page">
        <h3 class="news_heading">
            News
        </h3>
        <div class="wrapper news__wrapper">

            <div class="news__item news__item_id-1">
                <div class="news__item_image"></div>
                <div class="news__item-border_top-left"></div>
                <div class="news__item-border_bottom-right"></div>
                <div class="news__item_content">
                    <h4 class="news__item_heading">Заголовок для нової новини у три рядки тексту</h4>
                    <p class="news__item_paragraph">
                        Lorem Ipsum - це текст-"риба", що використовується в друкарстві та дизайні. 
                        Lorem Ipsum є, фактично, стандартною "рибою"...</p>
                    <div class="news_more-btn">
                        <a href="#">Детальніше</a>
                    </div>
                </div>
            </div>

            <div class="news__item news__item_id-2">
                <div class="news__item_image"></div>
                <div class="news__item-border_top-left"></div>
                <div class="news__item-border_bottom-right"></div>
                <div class="news__item_content">
                    <h4 class="news__item_heading">Заголовок для нової новини у три рядки тексту</h4>
                    <p class="news__item_paragraph">
                        Lorem Ipsum - це текст-"риба", що використовується в друкарстві та дизайні. 
                        Lorem Ipsum є, фактично, стандартною "рибою"...</p>
                    <div class="news_more-btn">
                        <a href="#">Детальніше</a>
                    </div>
                </div>
            </div>


        </div>
    </section>
    <section class="contacts">
        <div class="contacts__wrapper">
            <h3 class="contacts__heading">
                Contacts
            </h3>
            <div class="contacts__info">
                <ul>
                    <li>
                        <div class="contacts__info_item-container">
                            <span class="contacts__icon contacts__icon_mail"></span>
                            <a href="#">Arsenalhouse@com.ua</a>
                        </div>
                    </li>
                    <li>
                        <div class="contacts__info_item-container">
                            <span class="contacts__icon contacts__icon_webcam"></span>
                            <a href="webcam.php">Веб -камера</a>
                        </div>
                    </li>
                    <li>
                        <div class="contacts__info_item-container">
                            <span class="contacts__icon contacts__icon_address"></span>
                            <a href="contacts.php">вул. Арсенальна 45</a>
                        </div>
                    </li>
                    <li>
                        <div class="contacts__info_item-container">
                            <span class="contacts__icon contacts__icon_phone"></span>
                            <a href="#">(044) 45-45-123</a>
                        </div>
                    </li>
                </ul>
            </div>
            <p class="contacts__paragraph">
                Вже давно відомо, що читабельний зміст буде заважати зосередитись людині, яка оцінює композицію сторінки. Сенс використання 
                Lorem Ipsum полягає в тому, що цей текст має більш-менш нормальне розподілення літер на відміну від, наприклад, "Тут іде текст. 
                Тут іде текст." Це робить текст схожим на оповідний.
            </p>
            <div class="contacts__form_outer">
                <div class="contacts__form_inner">
                    <form action="">
                        <div>
                            <div class="form__inputs form__inputs_top">
                                <div class="input_container input__text">
                                    <input name="name" type="text" class="input" placeholder="Ім'я:*">
                                </div>
                                <div class="input_container input__text" >
                                    <input name="phone" type="text" class="input" placeholder="Телефон:*">
                                </div>
                                <div class="input_container input__text">
                                    <input name="email" type="text" class="input" placeholder="E-mail:">
                                </div>
                            </div>
                            <div class="form__inputs form__inputs_bottom">
                                <div class="input_container input__textarea">
                                    <textarea name="message" class="textarea" placeholder="Повідомлення:"></textarea>
                                </div>
                                <div class="input_container input__submit">
                                    <input type="submit" class="submit" value="Надіслати">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer main-footer">
        <div class="wrapper footer__wraper">
            <div class="copyright">
                &#169; Усі права захищено. Арсенал
            </div>
            <div class="amrtOrange">
                <a href="http://smartorange.com.ua/" target="_blank"><img src="img/common/logo-smart-orange.png" alt="Smart Orange Logo"></a>
            </div>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/common.min.js"></script>
    <script src="js/main.min.js"></script>
    <script>

    </script>
    
</body>
</html>