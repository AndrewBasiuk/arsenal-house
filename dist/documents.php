<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.min.css">
    <title>Документи</title>
</head>
<body>
    <?php include_once('includes/preloader.php'); ?>
    <?php include_once('includes/menu.php'); ?>
    <?php include_once('includes/header.php'); ?>
    <div class="page">
        <div class="documents__wrapper">
            <div class="wrapper">
                <div class="page-heading documents__heading animate-me">
                    <h1>Документи</h1>
                </div>
                <div>
                    <ul class="documents__list js-documents__list">
                        <li class="documents__item">
                            <a href="img/documents/doc_1.jpg" target="_blank">
                                <img src="img/documents/doc_1.jpg" alt="Document">
                            </a>
                        </li>
                        <li class="documents__item">
                            <a href="img/documents/doc_2.jpg" target="_blank">
                                <img src="img/documents/doc_2.jpg" alt="Document">
                            </a>
                        </li>
                        <li class="documents__item">
                            <a href="img/documents/doc_3.jpg" target="_blank">
                                <img src="img/documents/doc_3.jpg" alt="Document">
                            </a>
                        </li>
                        <li class="documents__item">
                            <a href="img/documents/doc_4.jpg" target="_blank">
                                <img src="img/documents/doc_4.jpg" alt="Document">
                            </a>
                        </li>
                        <li class="documents__item">
                            <a href="img/documents/doc_5.jpg" target="_blank">
                                <img src="img/documents/doc_5.jpg" alt="Document">
                            </a>
                        </li>
                    </ul>
                    <p class="documents__paragraph">
                        Проснувшись однажды утром после беспокойного сна, Грегор Замза обнаружил, что он у себя в постели превратился в страшное насекомое. 
                        Лежа на панцирнотвердой спине, он видел, стоило ему приподнять голову, свой коричневый, выпуклый, разделенный дугообразными чешуйками 
                        живот.
                    </p>
                    <a class="documents__btn" href="#">Перейти до вибору квартири</a>
                </div>
            </div>
        </div>
        <footer class="footer documents__footer">
            <div class="wrapper footer__wraper">
                <div class="copyright">
                    &#169; Усі права захищено. Арсенал
                </div>
                <div class="smartOrange">
                    <a href="http://smartorange.com.ua/" target="_blank">
                        <div class="footer__smart-orange-logo"></div>
                    </a>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/common.min.js"></script>
    <script src="js/documents.min.js"></script>
</body>
</html>