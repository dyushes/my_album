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
                <img src=<?php include_once 'func.php'; echo get_path('msk1')?> width="300">
            </td>
            <td class="indent_table_chel"></td>
            <td class="table_about">
                <h1 align="center">Москва</h1>
                <p class="p_indent">Москва – столица России, многонациональный город на Москве-реке в
                    западной части страны. В его историческом центре находится средневековая крепость
                    Кремль – резиденция российского президента. На ее территории можно посетить Оружейную
                    палату, где выставляются драгоценные предметы, принадлежавшие царской семье.
                </p>
            </td>
        </tr>

        <tr valign="top">
            <td>
                <img src=<?php include_once 'func.php'; echo get_path('msk2')?> width="300">
            </td>
            <td class="indent_table_chel"></td>
            <td class="table_about">
                <h1 align="center">Сабор Василия бложенного</h1>
                <p class="p_indent">Собо́р Покрова́ Пресвято́й Богоро́дицы, что на Рву — православный храм на Красной
                    площади в Москве, памятник русской архитектуры. Строительство собора велось с 1555 по 1561 год.
                    Собор объединяет одиннадцать церквей, часть из которых освящена в честь святых, дни памяти
                    которых пришлись на решающие бои за Казань
                </p>
            </td>
        </tr>
        </tbody>
    </table>
</div>
</body>