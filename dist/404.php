<?php get_header(); ?>
    <body>
    <div class="page-wrapper">
        <div class="not-found">
            <div class="not-found__text">
                <div>
                    <div class="not-found__heading">
                        404
                    </div>
                    <div class="not-found__error">Помилка</div>
                    <div class="not-found__line"></div>
                    <p class="not-found__paragraph">Сторінка не знайдена</p>
                    <div class="not-found__back-to-main not-found__hover">
                        <a href="/">На головну</a>
                    </div>
                </div>
                <div class="not-found__back-btn not-found__hover" onclick="window.history.go(-1);">
                    <span>Назад</span>
                </div>
            </div>
        </div>
    </div>
    </body>
<?php get_footer();?>