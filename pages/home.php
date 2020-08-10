<div class="intro-block">
    <div class="page-inner">
        <div class="intro">
            <div class="intro-text">
                <h1>
                    Рекламно-информационное <br> агентство
                </h1>
                <p>
                    Будем рады, если Вы обратитесь в наше Агентство. Мы готовы<br> предложить Вам передовые решения для продвижения<br> Вашего бизнеса.
                </p>
            </div>
            <div class="intro-inputs">
                <input class="intro-input " type="text" placeholder="Номер телефона">
                <button class="intro-button btn btn-lg btn-danger">
                    Обратный звонок
                </button>
            </div>
        </div>
    </div>
</div>

<div class="page-inner">
    <div class="news-block">
        <div class="news-text">
            <h1>Новости</h1>
        </div>
        <div class="splide__container">
            <div class="splide">
                <div class="splide__track">
                    <ul class="splide__list">
                        <?php foreach ($getNews as $item) { ?>
                            <li class="splide__slide">
                                <div class="splide__slide-item">
                                    <p class="splide__slide-date"><?php echo date('d.m.Y', strtotime($item['created_at'])); ?></p>
                                    <div class="splide__slide-text"><?php echo $item['title']; ?></div>
                                    <button class="btn-slide btn btn-outline-danger">Подробнее</button>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>