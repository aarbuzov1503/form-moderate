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

</body>
</html>
