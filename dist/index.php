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

    <section class="building clearfix animate-me">
        <canvas class="building__canvas" width="2091" height="1013"></canvas>
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
        <div class="apartments__inner">
            <div class="section__box section__box_apartments animate-me">
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
            <div class="resize">
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
                    <a href="#" data-nextView=".quote" >Наступна <span class="next-view__icon next-view__icon_black"></span>сторiнка</a>
                </div>
            </div>
        </div>
    </section>

    <section class="quote animate-me">
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
                <a href="#" data-nextView=".news__main-page">Наступна <span class="next-view__icon next-view__icon_brown"></span>сторiнка</a>
            </div>
        </div>
    </section>

    <section class="news__main-page">
        <h3 class="news_heading">
            News
        </h3>
        <div class="wrapper news__wrapper">

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
                        <p class="news__item_paragraph">Lorem Ipsum - це текст-"риба", що використовується в 
                            друкарстві та дизайні. Lorem Ipsum є, фактично, 
                            стандартною "рибою"...
                        </p>
                        <div class="news_more-btn">
                            <a href="#">Детальніше</a>
                        </div>
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
                    <li><span class="contacts__icon contacts__icon_webcam"></span><a href="webcam.php">Веб -камера</a></li>
                    <li><span class="contacts__icon contacts__icon_address"></span><a href="contacts.php">вул. Арсенальна 45</a></li>
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