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
    <header>
        <nav class="nav-container">
            <div class="wrapper nav">
                <ul class="nav__left">
                    <li class="nav__item">
                        <a href="">
                            <div class="nav__menu-btn">
                                <div class="nav__menu-lines">
                                    <div class="nav__menu-line nav__menu-line_first"></div>
                                    <div class="nav__menu-line nav__menu-line_second"></div>
                                    <div class="nav__menu-line nav__menu-line_third"></div>
                                </div>
                                <div class="nav__menu-text">
                                    Menu
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#">
                            <div class="nav__icon nav__webcam_icon nav__icon_desktop"></div>
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="">
                            <div class="nav__icon nav__mail_icon nav__icon_desktop"></div>
                        </a>
                    </li>
                    <li class="nav__item nav__item_desk"><a href="#">Головна</a></li>
                    <li class="nav__item nav__item_desk"><a href="#">Про комплекс</a></li>
                    <li class="nav__item nav__item_desk"><a href="#">Обрати кваритру</a></li>
                </ul>
                <div class="nav__item nav__logo-container">
                    <a href="#">
                        <div class="nav__logo"></div>
                    </a>
                </div>
                <ul class="nav__right">
                    <li class="nav__item nav__item_desk"><a href="#">Інфраструктура</a></li>
                    <li class="nav__item nav__item_desk"><a href="#">Новини</a></li>
                    <li class="nav__item nav__item_desk"><a href="#">Контакти</a></li>
                    <li class="nav__item">
                        <a href="#">
                            <div class="nav__icon nav__map_icon"></div>
                        </a>
                    </li>
                    <li class="nav__item language-select">
                        <ul>
                            <li><a href="#">UKR</a></li>
                            <li><a href="#">RUS</a></li>
                            <li><a href="#">EN</a></li>
                        </ul>
                        <div class="nav__icon nav__arrow_icon"></div>
                    </li>
                    <li class="nav__item">
                        <a href="#">
                            <div class="nav__icon nav__webcam_icon nav__icon_mobile"></div>
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="">
                            <div class="nav__icon nav__mail_icon nav__icon_mobile"></div>
                        </a>
                    </li>
                    <li class="nav__item nav__callback-btn">
                        <a href="#">Зворотній дзвінок</a>
                    </li>
                    <li class="nav__item nav__callback-btn_mobile">
                        <a href="">
                            <div class="nav__icon nav__phone_icon">
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <section class="hero">
        <div class="hero__image-wrapper">
            <div class="hero__image hero__image-left"></div>
            <div class="hero__image hero__image-right"></div>
        </div>
        <div class="hero__letter-a">
            <img src="img/main/letter_a.svg" alt="Letter A">
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

    <section class="building">
    <canvas class="building__canvas" width="1800" height="872"></canvas>
        <div class="building__inner wrapper">
            <div class="section__text-block_outer bulding__text-block">
                <div class="section__text-block">
                    <div class="section__text-block_inner">
                        <h3 class="section__text-block-heading">The Building</h3>
                        <p class="section__text-block-paragraph">Lorem Ipsum - це текст-"риба", що використовується в друкарстві та дизайні. Lorem Ipsum є, фактично, 
                            стандартною "рибою" аж з XVI сторіччя, коли невідомий друкар...
                        </p>
                        <a href="#" class="section__text-block_btn btn">Детальніше</a>
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

    <section class="apartments">
        <div class="apartments__inner wrapper">
            <div class="section__text-block_outer apartments__text-block">
                <div class="section__text-block">
                    <div class="section__text-block_inner">
                        <h3 class="section__text-block-heading">Apartments</h3>
                        <p class="section__text-block-paragraph">Lorem Ipsum - це текст-"риба", що використовується в друкарстві та дизайні. Lorem Ipsum є, фактично, 
                            стандартною "рибою" аж з XVI сторіччя, коли невідомий друкар...
                        </p>
                        <a href="#" class="section__text-block_btn btn">Детальніше</a>
                    </div>
                </div>
            </div>
            <div class="building__next-view">
                <div class="next-view next-view_brown">
                    <a href="#" data-nextView=".infrastructure">Наступна <span class="next-view__icon next-view__icon_brown"></span>сторiнка</a>
                </div>
            </div>
        </div>
    </section>

    <section class="infrastructure">
        <div class="ba-slider">
            <img src="img/main/infrastructure_paint.jpg" alt="Slider paint image">
            <div class="resize">
                <img src="img/main/infrastructure.jpg" alt="Slider image">
            </div>
            <span class="handle"></span>
        </div>
        <div class="infrastructure__inner wrapper">
            <div class="infrastructure__text-block section__text-block">
                <div class="section__text-block_inner">
                    <h3 class="section__text-block-heading">Infrastructure</h3>
                    <p class="section__text-block-paragraph">Lorem Ipsum - це текст-"риба", що використовується в друкарстві та дизайні. Lorem Ipsum є, фактично, 
                        стандартною "рибою" аж з XVI сторіччя, коли невідомий друкар...
                    </p>
                    <div class="section__text-block_btn-container">
                        <a href="#" class="section__text-block_btn btn">Детальніше</a>
                    </div>
                </div>
            </div>
            <div class="infrastructure__next-view">
                <div class="next-view next-view_black">
                    <a href="#" data-nextView=".quote" >Наступна <span class="next-view__icon next-view__icon_black"></span>сторiнка</a>
                </div>
            </div>
        </div>
    </section>

    <section class="quote">
        <div class="quote__quote-text quote__text hidden__frame">
            <h3 class="quote__text_heading">У тебе є вороги? Добре. Це означає, що в своєму житті ти щось відстоював.</h3>
        </div>
        <div class="quote__author">
            <h4>Сер Уінстон Черчіль</h4>
        </div>
        <div class="quote__next-view">
            <div class="next-view next-view_brown">
                <a href="#" data-nextView=".gallery">Наступна <span class="next-view__icon next-view__icon_brown"></span>сторiнка</a>
            </div>
        </div>
    </section>

    <section class="gallery">
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
        <div class="gallery__text-block section__text-block">
            <div class="section__text-block_inner">
                <h3 class="section__text-block-heading">Location</h3>
                <p class="section__text-block-paragraph">Lorem Ipsum - це текст-"риба", що використовується в друкарстві та дизайні. Lorem Ipsum є, фактично, 
                    стандартною "рибою" аж з XVI сторіччя, коли невідомий друкар...
                </p>
                <a href="#" class="section__text-block_btn btn">Детальніше</a>
            </div>
        </div>
        <div class="gallery__letter">
            <img src="img/main/gallery_letter.svg" alt="Gallery letter">
        </div>
    </section>
    <section class="quote quote2">
        <div class="quote__quote-text quote__text hidden__frame">
            <h3 class="quote__text_heading">У тебе є вороги? Добре. Це означає, що в своєму житті ти щось відстоював.</h3>
        </div>
        <div class="quote__author">
            <h4>Сер Уінстон Черчіль</h4>
        </div>
        <div class="quote__next-view">
            <div class="next-view next-view_brown">
                <a href="#" data-nextView=".news">Наступна <span class="next-view__icon next-view__icon_brown"></span>сторiнка</a>
            </div>
        </div>
    </section>
    <section class="news">
        <h3 class="news_heading">
            News
        </h3>
        <div class="wrapper news__wrapper">

            <div class="news__item news__item_id-1">
                <div class="news__item_inner-border">
                    <div class="news__item_content">
                        <h4 class="news__item_heading">Заголовок для нової новини у три рядки тексту</h4>
                        <p class="news__item_paragraph">Lorem Ipsum - це текст-"риба", що використовується в 
                            друкарстві та дизайні. Lorem Ipsum є, фактично, 
                            стандартною "рибою"...
                        </p>
                        <a href="#" class="section__text-block_btn news__btn btn">Детальніше</a>
                    </div>
                </div>
            </div>

            <div class="news__item news__item_id-2">
                <div class="news__item_inner-border">
                    <div class="news__item_content">
                        <h4 class="news__item_heading">Заголовок для нової новини у три рядки тексту</h4>
                        <p class="news__item_paragraph">Lorem Ipsum - це текст-"риба", що використовується в 
                            друкарстві та дизайні. Lorem Ipsum є, фактично, 
                            стандартною "рибою"...
                        </p>
                        <a href="#" class="section__text-block_btn news__btn btn">Детальніше</a>
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
                    <li><span class="contacts__icon contacts__icon_mail"></span><a href="#">Arsenalhouse@com.ua</a></li>
                    <li><span class="contacts__icon contacts__icon_webcam"></span><a href="#">Веб -камера</a></li>
                    <li><span class="contacts__icon contacts__icon_address"></span><a href="#">вул. Арсенальна 45</a></li>
                    <li><span class="contacts__icon contacts__icon_phone"></span><a href="#">(044) 45-45-123</a></li>

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
    <footer class="footer">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.4/TweenLite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.4/plugins/CSSPlugin.min.js"></script>
    <script src="js/scripts.js"></script>
    <script>

    </script>
    
</body>
</html>