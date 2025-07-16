<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Wedding &mdash; 100% Free Fully Responsive HTML5 Template by FREEHTML5.co</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Template by FREEHTML5.CO"/>
    <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive"/>
    <meta name="author" content="FREEHTML5.CO"/>
    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content=""/>
    <meta name="twitter:image" content=""/>
    <meta name="twitter:url" content=""/>
    <meta name="twitter:card" content=""/>
    <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet'
          type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">
    <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!-- Theme style  -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!-- jQuery (должен быть до всех плагинов, использующих jQuery) -->
    <script src="js/jquery.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <style>
        body {
            background-color: #rgba(241, 78, 149, 0);;
        }
        .confirm-btn {
            position: relative;
            background: linear-gradient(90deg, #c79e67, #e0b878, #c79e67);
            background-size: 200% 200%;
            color: #fff;
            font-size: 22px;
            font-weight: bold;
            padding: 22px 70px;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            transition: background 0.2s;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
            overflow: hidden;
            z-index: 1;
            animation: gradient-move 2.5s linear infinite;
        }
        @keyframes gradient-move {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }
        .confirm-btn:hover {
            background: linear-gradient(90deg, #b48b54, #e0b878, #b48b54);
            background-size: 200% 200%;
            animation: gradient-move 2.5s linear infinite;
        }
        #guest-count::-webkit-inner-spin-button,
        #guest-count::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
        #guest-count {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: textfield;
            text-align: center;
            padding-left: 0;
            padding-right: 0;
        }
        #opros-form input[type="checkbox"] {
            width: 18px;
            height: 18px;
            transform: scale(1.2);
            margin-right: 10px;
            vertical-align: middle;
        }
    </style>
    <meta name="csrf-param" content="<?= Yii::$app->request->csrfParam ?>">
    <meta name="csrf-token" content="<?= Yii::$app->request->csrfToken ?>">
</head>
<body>
<div id="page">
    <header id="fh5co-header" class="fh5co-cover" role="banner" data-stellar-background-ratio="0.5">
    </header>
    <div style="text-align: center; background-color: #rgba(241, 78, 149, 0);; padding: 100px 0 50px 0;">
        <img src="images/our_day.png" alt="Our Day" style="max-width: 100%; height: auto;">
    </div>
    <p class="welcome-text" style="text-align: center; max-width: 1000px; margin: 0 auto 40px auto; font-size: 30px; color: #6b7a89; background-color: #rgba(241, 78, 149, 0);;">
        Дорогие гости, с особым трепетом и теплом приглашаем Вас на торжественное событие, посвященное нашему
        бракосочетанию!</p>
    <div style="display: flex; justify-content: center; align-items: flex-start; gap: 140px; margin-bottom: 40px; margin-top: 150px; background-color: #rgba(241, 78, 149, 0);;">
        <div style="width: 400px; display: flex; flex-direction: column; align-items: center;">
            <img src="images/glasses.png" alt="glasses"
                 style="width: 250px; height: 250px; margin-bottom: 10px; filter: brightness(0) saturate(100%) invert(62%) sepia(38%) saturate(484%) hue-rotate(7deg) brightness(93%) contrast(90%);">
            <div style="font-weight: bold; font-size: 30px; color: #4d5c4a; margin-bottom: 18px; text-align: center;">
                КОГДА?
            </div>
            <div style="font-size: 30px; color: #222; text-align: center;">06 сентября 2025 года,<br>Суббота</div>
        </div>
        <div style="width: 400px; display: flex; flex-direction: column; align-items: center;">
            <img src="images/Ring.png" alt="ring"
                 style="width: 250px; height: 250px; margin-bottom: 10px; filter: brightness(0) saturate(100%) invert(62%) sepia(38%) saturate(484%) hue-rotate(7deg) brightness(93%) contrast(90%);">
            <div style="font-weight: bold; font-size: 30px; color: #4d5c4a; margin-bottom: 18px; text-align: center;">ВО
                СКОЛЬКО?
            </div>
            <div style="font-size: 30px; color: #222; text-align: center;">Сбор гостей в 16:00<br>Начало в 16:30</div>
        </div>
        <div style="width: 400px; display: flex; flex-direction: column; align-items: center;">
            <img src="images/location.png" alt="location"
                 style="width: 250px; height: 250px; margin-bottom: 10px; filter: brightness(0) saturate(100%) invert(62%) sepia(38%) saturate(484%) hue-rotate(7deg) brightness(93%) contrast(90%);">
            <div style="font-weight: bold; font-size: 30px; color: #4d5c4a; margin-bottom: 18px; text-align: center;">
                ГДЕ?
            </div>
            <div style="font-size: 30px; color: #222; text-align: center;">Банкетный зал "Гламур"<br><a
                    href="https://yandex.ru/maps/45/cheboksary/?ll=47.226509%2C56.133728&mode=whatshere&whatshere%5Bpoint%5D=47.225987%2C56.133780&whatshere%5Bzoom%5D=19.8&z=19.8"
                    target="_blank" style="color: #bfa046; text-decoration: underline;">Смотреть на карте</a></div>
        </div>
    </div>
    <p class="confirm-invite" style="text-align: center; max-width: 1000px; margin: 100px auto 40px auto; font-size: 30px; color: #6b7a89; background-color: #rgba(241, 78, 149, 0);;">
        Пожалуйста, подтвердите Ваше присутствие на нашем празднике до 10 августа 2025 года.</p>
    <div id="confirm-container"
         style="display: flex; justify-content: center; margin-bottom: 60px; flex-direction: column; align-items: center;">
        <button class="confirm-btn">ПОДТВЕРДИТЬ</button>
        <img id="opros-img" src="images/Opros.png" alt="Опрос"
             style="display: none; max-width: 100%; margin-top: 20px;"/>
        <form id="opros-form"
              style="display: none; max-width: 1000px; width: 100%; margin: 0 auto; text-align: left; font-size: 24px; color: #495057;">
            <label style="display:block; margin-bottom: 10px; font-size: 28px;">Ваше Имя и Фамилия</label>
            <input type="text" name="fio"
                   style="width:100%; padding:12px; margin-bottom:30px; border:none; border-bottom:2px solid #bfa046; background:transparent; font-size:24px;">
            <label style="display:block; margin-bottom: 10px; font-size: 26px;">В каком составе вы посетите нашу
                свадьбу?</label>
            <div style="display:flex; align-items:center; gap:15px; margin-bottom:30px;">
                <button type="button" id="minus"
                        style="font-size:32px; width:40px; height:48px; line-height:48px; border:none; background:none; color:#bfa046; padding:0; margin:0; display:flex; align-items:center; justify-content:center;">
                    –
                </button>
                <input type="number" id="guest-count" min="1" max="10" value="1"
                       style="font-size:28px; width:48px; height:48px; text-align:center; border:1px solid #bfa046; border-radius:8px; padding:0; box-sizing:border-box; margin:0; vertical-align:middle; font-family:inherit; font-weight:400; appearance: none; -webkit-appearance: none; -moz-appearance: textfield;">
                <button type="button" id="plus"
                        style="font-size:32px; width:40px; height:48px; line-height:48px; border:none; background:none; color:#bfa046; padding:0; margin:0; display:flex; align-items:center; justify-content:center;">
                    +
                </button>
            </div>
            <label style="display:block; margin-bottom: 5px; font-size: 26px;">Фамилия и имена гостей</label>
            <div style="font-size:20px; color:#888; margin-bottom:10px;">Если Вы будете не один/одна, или заполняете
                форму от лица нескольких гостей, пожалуйста, заполните это поле. Либо пропустите этот вопрос, если в
                Вашем случае он не актуален.
            </div>
            <textarea name="guests"
                      style="width:100%; min-height:50px; padding:12px; border:none; border-bottom:2px solid #bfa046; background:transparent; font-size:22px; margin-bottom:30px;"></textarea>
            <label style="display:block; margin-bottom: 10px; font-size: 26px;">Какой алкоголь Вы предпочитаете?</label>
            <div style="font-size:20px; color:#888; margin-bottom:10px;">Можно выбрать несколько вариантов ответа</div>
            <div style="margin-bottom:30px;">
                <label style="display:block; margin-bottom:12px; font-size:22px;"><input type="checkbox" name="alco[]"
                                                                                         value="Вино белое"> Вино белое</label>
                <label style="display:block; margin-bottom:12px; font-size:22px;"><input type="checkbox" name="alco[]"
                                                                                         value="Вино красное"> Вино
                    красное</label>
                <label style="display:block; margin-bottom:12px; font-size:22px;"><input type="checkbox" name="alco[]"
                                                                                         value="Игристое">
                    Игристое</label>
                <label style="display:block; margin-bottom:12px; font-size:22px;"><input type="checkbox" name="alco[]"
                                                                                         value="Коньяк"> Коньяк</label>
                <label style="display:block; margin-bottom:12px; font-size:22px;"><input type="checkbox" name="alco[]"
                                                                                         value="Водка"> Водка</label>
                <label style="display:block; margin-bottom:12px; font-size:22px;"><input type="checkbox" name="alco[]"
                                                                                         value="Виски"> Виски</label>
                <label style="display:block; margin-bottom:12px; font-size:22px;"><input type="checkbox" name="alco[]"
                                                                                         value="Воздержусь"> Воздержусь</label>
            </div>
            <div style="text-align:center;">
                <button type="submit"
                        style="background: #c79e67; color: #fff; font-size: 26px; font-weight: bold; padding: 20px 70px; border: none; border-radius: 20px; cursor: pointer; margin-top: 20px;">
                    ОТПРАВИТЬ
                </button>
            </div>
        </form>
        <div style="text-align: center; background-color: #rgba(241, 78, 149, 0);; padding: 100px 0 50px 0;">
            <img src="images/times.png" alt="Times" style="max-width: 100%; height: auto;">
        </div>
        <div style="display: flex; justify-content: center; margin: 60px 0;">
            <div style="position: relative; width: 600px; min-height: 200px;">
                <!-- Линия -->
                <div style="position: absolute; left: 50%; top: 0; height: 254px; width: 3px; background: #bfa046;"></div>
                <!-- 15:30 -->
                <div style="position: absolute; left: 50%; top: 0; transform: translate(-50%, 0);">
                    <div style="width: 28px; height: 28px; background: #bfc9d3; border-radius: 50%; position: absolute; left: 50%; top: 0; transform: translate(-50%, 0);"></div>
                </div>
                <div style="position: absolute; left: 40%; top: -40; transform: translate(-100%, 0); text-align: right;">
                    <div style="font-size: 32px; font-weight: bold; color: #bfa046;">16:00</div>
                    <div style="font-size: 22px; color: #222; margin-top: 10px; max-width: 400px;">Сбор гостей</div>
                </div>
                <!-- 16:30 -->
                <div style="position: absolute; left: 50%; top: 120px; transform: translate(-50%, 0);">
                    <div style="width: 28px; height: 28px; background: #bfc9d3; border-radius: 50%; position: absolute; left: 50%; top: 0; transform: translate(-50%, 0);"></div>
                </div>
                <div style="position: absolute; left: 60%; top: 80px; text-align: left;">
                    <div style="font-size: 32px; font-weight: bold; color: #bfa046;">16:30</div>
                    <div style="font-size: 22px; color: #222; margin-top: 10px;">Церемония</div>
                </div>
                <!-- 17:00 -->
                <div style="position: absolute; left: 50%; top: 240px; transform: translate(-50%, 0);">
                    <div style="width: 28px; height: 28px; background: #bfc9d3; border-radius: 50%; position: absolute; left: 50%; top: 0; transform: translate(-50%, 0);"></div>
                </div>
                <div style="position: absolute; left: 40%; top: 200px; transform: translate(-100%, 0); text-align: right;">
                    <div style="font-size: 32px; font-weight: bold; color: #bfa046;">17:00</div>
                    <div style="font-size: 22px; color: #222; margin-top: 10px;">Начало банкета</div>
                </div>
            </div>
        </div>
        <div class="dress-block" style="text-align: center; background-color: #rgba(241, 78, 149, 0);; padding: 100px 0 50px 0;">
            <img src="images/dress.png" alt="Times" style="max-width: 100%; height: auto;">
        </div>
        <p class="dress-support-text" style="text-align: center; max-width: 1000px; margin: 50px auto 40px auto; font-size: 30px; color: #6b7a89; background-color: #rgba(241, 78, 149, 0);;">
            Поддержите нас Вашими улыбками и объятиями, а также красивыми нарядами в палитре торжества:</p>
        <div style="display: flex; justify-content: center; margin-bottom: 60px;">
            <div style="display: grid; grid-template-columns: repeat(6, 80px); grid-gap: 32px 36px;">
                <div style="width: 80px; height: 80px; border-radius: 50%; background: #b69781;"></div>
                <div style="width: 80px; height: 80px; border-radius: 50%; background: #6b7c5b;"></div>
                <div style="width: 80px; height: 80px; border-radius: 50%; background: #d2bda9;"></div>
                <div style="width: 80px; height: 80px; border-radius: 50%; background: #f3dfdd;"></div>
                <div style="width: 80px; height: 80px; border-radius: 50%; background: #a6b6c6;"></div>
                <div style="width: 80px; height: 80px; border-radius: 50%; background: #e5ded3;"></div>
                <div style="width: 80px; height: 80px; border-radius: 50%; background: #cfc7be;"></div>
                <div style="width: 80px; height: 80px; border-radius: 50%; background: #cfd7b7;"></div>
                <div style="width: 80px; height: 80px; border-radius: 50%; background: #e7d6c2;"></div>
                <div style="width: 80px; height: 80px; border-radius: 50%; background: #e2bfae;"></div>
                <div style="width: 80px; height: 80px; border-radius: 50%; background: #d7d8db;"></div>
                <div style="width: 80px; height: 80px; border-radius: 50%; background: #e3e2df;"></div>
            </div>
        </div>
        <p class="final-invite-text" style="text-align: center; max-width: 1000px; margin: 100px auto 40px auto; font-size: 30px; color: #6b7a89; background-color: #rgba(241, 78, 149, 0);;">
            Мы с нетерпением ждём день, когда сможем разделить вместе с Вами радость предстоящего торжества!</p>
        <div id="countdown" style="display: flex; justify-content: center; gap: 80px; margin: 60px 0;">
            <div style="text-align: center;">
                <div id="days" style="font-size: 64px; color: #c79e67; font-family: 'Work Sans', monospace, 'Courier New', Courier; font-weight: 600; width: 80px; display: inline-block; text-align: center;">00</div>
                <div id="days-label" style="font-size: 20px; color: #c79e67;">Дней</div>
            </div>
            <div style="text-align: center;">
                <div id="hours" style="font-size: 64px; color: #c79e67; font-family: 'Work Sans', monospace, 'Courier New', Courier; font-weight: 600; width: 80px; display: inline-block; text-align: center;">00</div>
                <div id="hours-label" style="font-size: 20px; color: #c79e67;">Часов</div>
            </div>
            <div style="text-align: center;">
                <div id="minutes" style="font-size: 64px; color: #c79e67; font-family: 'Work Sans', monospace, 'Courier New', Courier; font-weight: 600; width: 80px; display: inline-block; text-align: center;">00</div>
                <div id="minutes-label" style="font-size: 20px; color: #c79e67;">Минут</div>
            </div>
            <div style="text-align: center;">
                <div id="seconds" style="font-size: 64px; color: #c79e67; font-family: 'Work Sans', monospace, 'Courier New', Courier; font-weight: 600; width: 80px; display: inline-block; text-align: center;">00</div>
                <div id="seconds-label" style="font-size: 20px; color: #c79e67;">Секунд</div>
            </div>
        </div>

        <p class="final-invite-text" style="text-align: center; max-width: 1000px; margin: 100px auto 40px auto; font-size: 30px; color: #6b7a89; background-color: #rgba(241, 78, 149, 0);;">
            Для нас важно, чтобы этот день
            запомнился тёплыми моментами,
            искренними улыбками и душевным
            праздником.
            <br>
            Мы сознательно отказались от
            денежных конкурсов — хотим, чтобы
            ничто не отвлекало нас от радости
            общения с вами!</p>

        <div id="custom-slider" class="slider-container">
            <button id="slider-prev" class="slider-btn">&#60;</button>
            <div class="slider-viewport">
                <div id="slider-track" class="slider-track">
                    <img src="images/1.jpg" class="slider-img" alt="Фото 1">
                    <img src="images/2.jpg" class="slider-img" alt="Фото 2">
                    <img src="images/3.jpg" class="slider-img" alt="Фото 3">
                    <img src="images/4.jpg" class="slider-img" alt="Фото 4">
                    <img src="images/5.jpg" class="slider-img" alt="Фото 5">
                    <img src="images/6.jpg" class="slider-img" alt="Фото 6">
                    <img src="images/7.jpg" class="slider-img" alt="Фото 7">
                </div>
            </div>
            <img class="slider-hover-preview" id="slider-hover-preview" src="" alt="Preview" />
            <button id="slider-next" class="slider-btn">&#62;</button>
        </div>
        <!-- Модальное окно для увеличения фото -->
        <div id="modal" class="modal">
          <span class="modal-close">&times;</span>
          <img class="modal-content" id="modal-img">
        </div>
    </div>
</div>
<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var btn = document.querySelector('.confirm-btn');
        var img = document.getElementById('opros-img');
        var form = document.getElementById('opros-form');
        btn.addEventListener('click', function () {
            btn.style.display = 'none';
            img.style.display = 'block';
            form.style.display = 'block';
        });
        // Логика для инпута количества гостей
        var minus = document.getElementById('minus');
        var plus = document.getElementById('plus');
        var guestInput = document.getElementById('guest-count');
        minus.addEventListener('click', function () {
            var val = parseInt(guestInput.value, 10) || 1;
            if (val > 1) guestInput.value = val - 1;
        });
        plus.addEventListener('click', function () {
            var val = parseInt(guestInput.value, 10) || 1;
            if (val < 10) guestInput.value = val + 1;
        });
        guestInput.addEventListener('input', function () {
            var val = parseInt(guestInput.value, 10) || 1;
            if (val < 1) guestInput.value = 1;
            if (val > 10) guestInput.value = 10;
        });
        // --- AJAX отправка формы ---
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            var formData = new FormData(form);

            // Получаем имя и значение CSRF-токена из мета-тегов
            var csrfParam = document.querySelector('meta[name="csrf-param"]').getAttribute('content');
            var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            formData.append(csrfParam, csrfToken);

            fetch('/', {
                method: 'POST',
                body: formData,
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Спасибо! Ваш ответ сохранён.');
                    form.reset();
                } else {
                    alert('Ошибка: ' + (data.errors ? JSON.stringify(data.errors) : data.message));
                }
            })
            .catch(() => alert('Ошибка при отправке формы.'));
        });

        // --- Hover preview для слайдера ---
        const preview = document.getElementById('slider-hover-preview');
        const sliderImages = document.querySelectorAll('.slider-img');
        sliderImages.forEach(img => {
            img.addEventListener('mouseenter', function() {
                preview.style.display = 'none'; // Скрываем превью
                preview.src = '';
                const tempImg = new Image();
                tempImg.onload = function() {
                    preview.src = tempImg.src;
                    preview.style.display = 'block';
                };
                tempImg.src = img.src;
            });
            img.addEventListener('mouseleave', function() {
                preview.style.display = 'none';
                preview.src = '';
            });
        });
    });
</script>
<!-- jQuery Easing -->
<script src="js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="js/jquery.waypoints.min.js"></script>
<!-- Carousel -->
<script src="js/owl.carousel.min.js"></script>
<!-- countTo -->
<script src="js/jquery.countTo.js"></script>
<!-- Stellar -->
<script src="js/jquery.stellar.min.js"></script>
<!-- Magnific Popup -->
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/magnific-popup-options.js"></script>
<!-- // <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/0.0.1/prism.min.js"></script> -->
<script src="js/simplyCountdown.js"></script>
<!-- Main -->
<script src="js/main.js"></script>
<script>
    var d = new Date(new Date().getTime() + 200 * 120 * 120 * 2000);
    // default example
    simplyCountdown('.simply-countdown-one', {
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate()
    });
    //jQuery example
    $('#simply-countdown-losange').simplyCountdown({
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate(),
        enableUtc: false
    });
</script>
<script>
  function plural(n, forms) {
    n = Math.abs(n) % 100;
    let n1 = n % 10;
    if (n > 10 && n < 20) return forms[2];
    if (n1 > 1 && n1 < 5) return forms[1];
    if (n1 == 1) return forms[0];
    return forms[2];
  }
  // Установите дату события (например, 6 сентября 2025, 16:00)
  const eventDate = new Date('2025-09-06T16:00:00');
  function updateCountdown() {
    const now = new Date();
    const diff = eventDate - now;
    let days = 0, hours = 0, minutes = 0, seconds = 0;
    if (diff > 0) {
      days = Math.floor(diff / (1000 * 60 * 60 * 24));
      hours = Math.floor((diff / (1000 * 60 * 60)) % 24);
      minutes = Math.floor((diff / (1000 * 60)) % 60);
      seconds = Math.floor((diff / 1000) % 60);
    }
    document.getElementById('days').textContent = String(days).padStart(2, '0');
    document.getElementById('hours').textContent = String(hours).padStart(2, '0');
    document.getElementById('minutes').textContent = String(minutes).padStart(2, '0');
    document.getElementById('seconds').textContent = String(seconds).padStart(2, '0');
    document.getElementById('days-label').textContent = plural(days, ['день', 'дня', 'дней']);
    document.getElementById('hours-label').textContent = plural(hours, ['час', 'часа', 'часов']);
    document.getElementById('minutes-label').textContent = plural(minutes, ['минута', 'минуты', 'минут']);
    document.getElementById('seconds-label').textContent = plural(seconds, ['секунда', 'секунды', 'секунд']);
  }
  setInterval(updateCountdown, 1000);
  updateCountdown();
</script>
<script>
document.addEventListener('DOMContentLoaded', function() {
  function toggleUnclip() {
    var ourDay = document.querySelector('div[style*="our_day.png"]');
    var page = document.getElementById('page');
    if (!ourDay || !page) return;
    var rect = ourDay.getBoundingClientRect();
    // Если блок our_day.png виден на экране — убираем обрезку
    if (rect.top < window.innerHeight && rect.bottom > 0) {
      page.classList.add('our-day-unclip');
    } else {
      page.classList.remove('our-day-unclip');
    }
  }
  window.addEventListener('scroll', toggleUnclip);
  window.addEventListener('resize', toggleUnclip);
  toggleUnclip();
});
</script>
</body>
</html>
