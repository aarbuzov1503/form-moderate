<!DOCTYPE html>
<html lang="ru">
<head>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-cache">
        <meta name="description" content="Модерация">
        <meta property="og:title" content="Модерация">
         <link rel="stylesheet" href="https://alex-verstak.ru/project/moderate/normalize.css">
        <link rel="stylesheet" href="https://alex-verstak.ru/project/moderate/style.css">
        <link rel="stylesheet" href="https://alex-verstak.ru/project/moderate/media-v1.css">
          <link rel="shortcut icon" href="https://alex-verstak.ru/img/ico.svg" type="image/x-icon"/>
          <script defer src="https://alex-verstak.ru/project/moderate/app.js"> </script>
    <title>Форма сбора данных</title>
    <style>
        label {
            display: block;
            margin-bottom: 5px;
        }
    </style>
     <script>
function validateForm() {
var description = document.getElementById("description").value;

var stop =[" лотерея ", " предлагаем ", " ждем ", " будем рады ", " приглашаем ", " цель ", " задача ", " мы ", " наш " , " целях "];
var word1 = ["нашем"];
var word2 = ["нам"];
var word3 = ["мы"];
var word4 = ["предлагаем"];
var word5 = ["наши"];
var word6 = ["нашего"];
var word7 = ["наших"];
var word8 = ["приглашаем"];
var word9 = ["лотерея"];
var word10 = ["ждем"];
var word11  = ["ждём"];
var word12 = ["будем рады"];
var word13 = ["цель"];
var word14 = ["задача"];
var word15 = ["Нашем"];
var word16 = ["Нам"];
var word17 = ["Мы"];
var word18 = ["Предлагаем"];
var word19 = ["Наши"];
var word20 = ["Нашего"];
var word21 = ["Наших"];
var word22 = ["Приглашаем"];
var word23 = ["Лотерея"];
var word24 = ["Ждем"];
var word25 = ["Ждём"];
var word26 = ["Будем рады"];
var word27 = ["Цель"];
var word28 = ["Задача"];
var word29 = ["Целях"];
var word30 = ["целях"];

if (
  description.indexOf(word1[0]) !== -1 ||
  description.indexOf(word2[0]) !== -1 ||
  description.indexOf(word3[0]) !== -1 ||
  description.indexOf(word4[0]) !== -1 ||
  description.indexOf(word5[0]) !== -1 ||
  description.indexOf(word6[0]) !== -1 ||
  description.indexOf(word7[0]) !== -1 ||
  description.indexOf(word8[0]) !== -1 ||
  description.indexOf(word9[0]) !== -1 ||
  description.indexOf(word10[0]) !== -1 ||
  description.indexOf(word11[0]) !== -1 ||
  description.indexOf(word12[0]) !== -1 ||
  description.indexOf(word13[0]) !== -1 ||
  description.indexOf(word14[0]) !== -1 ||
  description.indexOf(word15[0]) !== -1 ||
  description.indexOf(word16[0]) !== -1 ||
  description.indexOf(word17[0]) !== -1 ||
  description.indexOf(word18[0]) !== -1 ||
  description.indexOf(word19[0]) !== -1 ||
  description.indexOf(word20[0]) !== -1 ||
  description.indexOf(word21[0]) !== -1 ||
  description.indexOf(word22[0]) !== -1 ||
  description.indexOf(word23[0]) !== -1 ||
  description.indexOf(word24[0]) !== -1 ||
  description.indexOf(word25[0]) !== -1 ||
  description.indexOf(word26[0]) !== -1 ||
  description.indexOf(word27[0]) !== -1 ||
  description.indexOf(word28[0]) !== -1 ||
  description.indexOf(word29[0]) !== -1 ||
  description.indexOf(word30[0]) !== -1
) {
  // Код, который будет выполняться, если хотя бы одно значение найдено в строке
  alert("Измените описание! Обнаружено использование стоп-слов из списка " + stop);
  console.log ("Измените описание! Обнаружено использование стоп-слов из списка " + stop);
  return false;
}
 
  return true; // Разрешаем отправку формы
}

    </script>
</head>
<body class="section-body">
  <header class="header wow slideInDown" data-wow-duration="2s" data-wow-delay="2s">
            <div class="container container-header">
                <button type="submit" class="burger" aria-label="Открыть меню">
                    <span class="burger__line" aria-hidden="true"></span>
                    <span class="burger__line" aria-hidden="true"></span>
                    <span class="burger__line" aria-hidden="true"></span>
                </button>
                <div class="header__logo-wrap">
                    <div class="header__logo">
                        <a href="https://alex-verstak.ru/"> 
                            <img class="header__img header__logo" src="https://alex-verstak.ru/img/logo-w.svg" alt="Логотип"></a>
                    </div>
                </div>
                <div class="desktop-menu-nav">
                    <nav class="header__nav nav">
                        <ul class="header__list list-reset">
                            <li class="header__item"> 
                                <a class="header__link" href="https://alex-verstak.ru/">Основной сайт</a></li>
                            <li class="header__item"> 
                                <a class="header__link" href="">Статус модерации</a></li>
                            <li class="header__item"> 
                                <a class="header__link" href="https://t.me/a_arbuzov1503">Телеграмм</a></li>
                            <li class="header__item"> 
                                <a class="header__link" href="mailto:alexandr.arbuzov1503@mail.ru">Почта</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
    <section class="form"> 
<div class="container"> 
        <h1 class="main-header reset-heading center">Форма сбора данных</h1>
        <p>Платформа распознает такие ошибки, как использование заглавных букв в тексте (Caps Lock), опечатки, грамматические ошибки, использование стоп-слов («лотерея», «предлагаем», «ждем», «будем рады», «приглашаем», «цель», «целях», «задача», «мы», «наш») </p>
        <p> Рекомендации: В поле описание пишется анонс события, то что получит посетитель или то что узнает на вашем мероприятии. </p>
        <a class="mb-30" href="https://www.culture.ru/afisha/moskva/pushkinskaya-karta/spektakli" target="blank"><h2 class="mb-30 center" style="font-size:19px;">Примеры для спектаклей </h2></a>
        <a class="mb-30" href="https://www.culture.ru/afisha/moskva/pushkinskaya-karta/vistavki" target="blank"><h2 class="mb-30 center" style="font-size:19px;">Примеры для выставки </h2></a>
        <a class="mb-30" href="https://www.culture.ru/afisha/moskva/pushkinskaya-karta/kontserti" target="blank"><h2 class="mb-30 center" style="font-size:19px;">Примеры для концертов </h2></a>
        <a class="mb-30" href="https://www.culture.ru/afisha/moskva/pushkinskaya-karta/obuchenie" target="blank"><h2 class="mb-30 center" style="font-size:19px;">Примеры для мастер-классов и лекций </h2></a>
   <div class="flex">  <form class="form__text" method="post" action="https://alex-verstak.ru/project/moderate/process.php" onsubmit="return validateForm()" enctype="multipart/form-data">
        <label for="name">Название:</label>
        <input class="form-info" type="text" name="name" required placeholder="Концет ‹ У бабушки›">

        <label for="description">Описание:</label>
        <textarea class="form-message" id="description" name="description" minlength="500"  maxlength="700" required placeholder="Минимальная длина текста 500 символов, максимальная 700"></textarea>
<p class="descr-reset mb-30"> Рекомендации: В поле описание пишется текст без официального рассказа, напишите что посетитель узнает и получит. </p>
        <label for="price">Стоимость:</label>
        <input class="form-info  input-box" type="text" name="price" required placeholder="Например: 1 билет 350">
        <p class="descr-reset mb-30"> Рекомендации: Стоимость билета указывается цифрами 100, 350 или 700</p>
        <label for="date_range">Диапазон дат: Каждую пятницу до 30.09.2024 или отдельные дни</label>
        <input  class="form-info input-box"type="text" name="date_range" required placeholder="30.09.2024-30.09.2024">
<p class="descr-reset mb-30"> Рекомендации: В поле диапозон дат пишется отрезок времени, в течении которого будет проходить ваше мероприятие. Если это выставка, то указывается начальная дата и завершающая или если выставка проходит только по одному дню недели, то укажите "По средам до 30.09.2025". Для концертов и спектаклей, указываются дни, в которые они будут проходить. </p>
          <label for="date_time">Время Например: 16:00 или 16:00 и 17:00</label>
        <input  class="form-info  input-box" type="text" name="date_time" required placeholder="16:00">
<p class="descr-reset mb-30"> Рекомендации: В поле Время пишется время, в которое должны прийти посетители </p>
        <label for="fullname">ФИО: Кто будет получать перечисление за проведение</label>
        <input class="form-info  input-box" type="text" name="fullname" required placeholder="Иванов Иван Иванович">
<!-- <div class="file-input"> --><p class="descr-reset mb-30"> Рекомендации: В этом месте надо указать,того ,кто получит денежные средства за проведение.  </p>
        <label class="upload-button" for="image1">Загрузите Афишу Формат- телефона</label>
        <input class="upload" type="file" name="image1" required>
        <p class="descr-reset mb-30"> Рекомендации: Загрузите афишу, для установки в систему билетного оператора.</p>
        <!-- <div class="selected-file"></div> -->
<!-- </div> -->
<!-- <div class="file-input"> -->
        <label class="upload-button" for="image2">Загрузите Карточку мероприятия Формат- планшета</label>
        <input class="upload" type="file" name="image2" required>
        <p class="descr-reset mb-30"> Рекомендации: Загрузите фотографию похожую на ваше мероприятие,чтобы посетитель смог понять что будет происходить. Это обязательная фотография, требуется порталом Культура.рф</p>
        <!-- <div class="selected-file"></div> -->
<!-- </div> -->
        <input class="btn" type="submit" value="Отправить">
    </form> </div>
   </div> 
    </section>
     <footer id="contacts" class="footer">
            <div class="container container-footer">
                <div class="footer__nav">
                    <div class="footer__img-wrap">
                        <a class="footer__logo">
                            <img class="header__img header__logo" src="https://alex-verstak.ru/img/logo-w.svg" alt="Логотип"></a>
                    </div>

                    <ul class="footer__list list-reset">
                        <li class="footer__list-item"><a aria-label="Перейти в телеграмм" class="footer__item"  href="https://t.me/a_arbuzov1503" target="blank">Telegram</a></li>
                        <li class="footer__list-item"><a aria-label="Перейти в телеграмм канал" class="footer__item" href="https://t.me/IT_skillless" target="blank">Обучающий канал</a></li>
                        <li class="footer__list-item"><a aria-label="Githab" class="footer__item"  href="https://github.com/aarbuzov1503" target="blank">Githab</a></li>
                        <li class="footer__list-item"><a aria-label="Skillbox скидка 50%"  class="footer__item"  href="https://go.redav.online/bef771b99a05d191?erid=LdtCKL1wM" target="blank">Skillbox скидка 50%</a></li>
                        <li class="footer__list-item"><a aria-label="Бонус за приобретение хостинга" class="footer__item" href="https://timeweb.com/ru/services/hosting?utm_source=cl92747&utm_medium=timeweb&utm_campaign=timeweb-bring-a-friend" target="blank">Бонус за приобретение хостинга</a></li>
                        <li class="footer__list-item"> <a class="footer__item" href="https://craftum.com/id249199/verstak" target="blank">Конструктор  сайтов</a> </li>
                    </ul>

                    <ul class="footer__contacts">
                        <li class="footer__contacts-item"><a aria-label="Вконтакте" class="footer__social-link" href="https://vk.com/a_arbuzov1503" target="blank"><svg class="footer__social-icon" width="60" height="60" viewBox="0 0 60 60"  fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path class="footer__social-ico" d="M30 0C13.432 0 0 13.4314 0 30C0 46.5686 13.432 60 30 60C46.568 60 60 46.5686 60 30C60 13.4314 46.568 0 30 0ZM45.2176 33.2446C46.6159 34.6103 48.0951 35.8957 49.3504 37.4026C49.9065 38.0692 50.4307 38.7585 50.8297 39.5337C51.3993 40.6392 50.8849 41.8515 49.8954 41.9171L43.7494 41.9159C42.162 42.0473 40.8988 41.4071 39.8339 40.3218C38.9837 39.457 38.195 38.5332 37.3762 37.6389C37.0416 37.2718 36.6893 36.9262 36.2695 36.6543C35.4316 36.1093 34.7036 36.2762 34.2236 37.1515C33.7344 38.0421 33.6227 39.0292 33.5761 40.0205C33.5092 41.4697 33.0721 41.8484 31.618 41.9165C28.5109 42.062 25.5628 41.5906 22.8227 40.0241C20.4055 38.6425 18.5346 36.6924 16.9043 34.4845C13.7297 30.1805 11.2984 25.4566 9.11386 20.597C8.6222 19.5026 8.98189 18.917 10.1893 18.8943C12.1952 18.8557 14.2011 18.8606 16.2071 18.8925C17.0234 18.9054 17.5636 19.3725 17.8772 20.1428C18.9612 22.8098 20.2901 25.3473 21.9554 27.7007C22.3992 28.3274 22.8522 28.9522 23.4973 29.3948C24.2093 29.8834 24.7519 29.7219 25.0877 28.9271C25.3025 28.4219 25.3952 27.8817 25.4418 27.3404C25.6014 25.486 25.6205 23.6323 25.3442 21.7854C25.1724 20.6296 24.5224 19.8832 23.3702 19.6647C22.7834 19.5536 22.8694 19.3363 23.1548 19.0011C23.6501 18.4217 24.1142 18.0632 25.0416 18.0632L31.9857 18.062C33.0801 18.2768 33.3256 18.7679 33.4742 19.8703L33.4803 27.5871C33.4674 28.0137 33.6945 29.2782 34.4606 29.5574C35.0744 29.76 35.4795 29.2677 35.8465 28.8792C37.5118 27.112 38.6983 25.0263 39.7608 22.8675C40.2298 21.9155 40.6343 20.9303 41.0271 19.9433C41.3193 19.2135 41.7735 18.8544 42.5972 18.8667L49.2841 18.8747C49.4811 18.8747 49.6812 18.8765 49.8764 18.9103C51.0034 19.103 51.3121 19.5879 50.9635 20.6873C50.4147 22.4145 49.3485 23.8533 48.3063 25.2958C47.1892 26.8401 45.9977 28.3304 44.8917 29.8815C43.8752 31.2994 43.9556 32.0133 45.2176 33.2446Z"  fill="#666666" />
                                </svg>
                            </a></li>
                    </ul>

                </div>
                </div>

                <div id="cookie_notification">
                    <p>На сайте происходит сбор и обработка обезличенных данных
                        о посетителях (в т.ч. файлов «cookie») с помощью
                        сервисов интернет-статистики (Яндекс Метрика и Google
                        Аналитика и других). Продолжая
                        работу с сайтом, Вы разрешаете использование
                        cookie-файлов. Вы всегда можете отключить файлы cookie в
                        настройках Вашего браузера. <a class="footer__item"
                            href="https://ya.ru"> Вы можете покинуть сайт</a>
                    </p>
                    <button class="btn-notification cookie_accept">Принять</button>
                </div>
            </footer>

</body>
</html>