<head>
    <link rel="stylesheet" href="./assets/style.css">
    <title>Andrey's album!</title>
    <meta charset="utf-8">
</head>

<header class="header">
    <div class="container">
        <div class="header_inner">
            <div class="header_logo">Мой альбом</div>
            <nav class="one">
                <ul class="topmenu">
                    <li><a href="index.php">Главная</a></li>
                    <li><a href="https://github.com/dyushes?tab=repositories">Проекты</a></li>
                    <li><a href="#">Альбом<i class="fa fa-angle-down"></i></a>
                        <ul class="submenu">
                            <li><a href="chelyabinsk.php">Челябинск</a></li>
                            <li><a href="spb.php">Петербург</a></li>
                            <li><a href="moskow.php">Москва</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>

<body>
<div class="intro">
    <table>
        <tbody>
        <tr valign="top">
            <td>
                <img src=<?php include_once 'func.php'; echo get_path('spb1')?> width="300">
            </td>
            <td class="indent_table_chel"></td>
            <td class="table_about">
                <h1 align="center">Санкт-Петербург</h1>
                <p class="p_indent">Санкт-Петербург – русский портовый город на побережье Балтийского моря,
                    который в течение двух веков служил столицей Российской империи. Он был основан в 1703
                    году Петром I, которому воздвигнут знаменитый памятник "Медный всадник".
                </p>
            </td>
        </tr>

        <tr valign="top">
            <td>
                <img src=<?php include_once 'func.php'; echo get_path('spb2')?> width="300">
            </td>
            <td class="indent_table_chel"></td>
            <td class="table_about">
                <h1 align="center">Искаиевский сабор</h1>
                <p class="p_indent">Исаа́киевский собо́р — крупнейший православный храм Санкт-Петербурга.
                    Расположен на Исаакиевской площади. Кафедральный собор Санкт-Петербургской епархии с 1858
                    по 1929 год. С 1928 года имеет статус музея
                </p>
            </td>
        </tr>

        <tr valign="top">
            <td>
                <img src=<?php include_once 'func.php'; echo get_path('spb3')?> width="300">
            </td>
            <td class="indent_table_chel"></td>
            <td class="table_about">
                <h1 align="center">Московский проспект</h1>
                <p class="p_indent">Моско́вский проспект — магистральная улица в Санкт-Петербурге,
                    четвёртая по протяжённости магистраль города. Соединяет Сенную площадь в центре
                    города с площадью Победы на его южной окраине. По расстоянию между центрами этих
                    площадей длина проспекта составляет 9,3 километра.
                </p>
            </td>
        </tr>

        </tbody>
    </table>
</div>
</body>