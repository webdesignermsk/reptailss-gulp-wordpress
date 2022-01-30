<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width,initial-scale=1" name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <title></title>
    <?php
    wp_head();
    ?>
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Rajdhani:wght@300;400;500;600;700&display=swap"
          rel="stylesheet">
</head>

<body>

<header class="header">
    <div class="header__inner">
        <a class="header__logo logo" href="index.html"><img alt="logo" src="img/logo.svg"></a>
        <div class="header__info-gup header__info">
            <div class="header__info-item-gup header__info-phone">
                <div class="header__info-phone-img">
                    <img alt="" src="img/icons/phone.svg">
                </div>
                <div class="header__info-phone-text">
                    <a href="+48739035904"> +48 (739) 035 904</a>
                </div>
            </div>
            <div class="header__info-item-gup header__info-lang">
                <div class="select__one-type-inner">
                    <select class="select__one-type lang__select lang__select--header" name="lang">
                        <option class="option option__one-type lang__option" selected value="ru">RU
                        </option>
                        <option class="option option__one-type lang__option" value="pl">PL</option>
                        <option class="option option__one-type lang__option" value="en">EN</option>
                    </select>
                </div>

            </div>
            <div class=" header__info-item-gup header__info-burger">

                <div class="burger burger-js"></div>

            </div>
        </div>
    </div>
</header>
