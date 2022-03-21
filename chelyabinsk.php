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
                <img src=<?php include_once 'func.php'; echo get_path('chel_prev')?> width="300">
            </td>
            <td class="indent_table_chel"></td>
            <td class="table_about">
                <h1 align="center">Челябинск</h1>
                <p class="p_indent">Челябинск - крупный промышленный город, расположенный на южном Урале.
                    Город расположен на геологической границе Урала и Сибири,
                    в азиатской части России, на восточном склоне Уральских гор,
                    по обоим берегам Миасса. Основанный в 1736 году как крепость,
                    Челябинск к XIX веку стал одним из крупнейших торговых центров
                    Урала, а к концу века и всей России в связи с появлением в 1892
                    году железнодорожного сообщения города с Москвой .</p>
            </td>
        </tr>

        <tr valign="top">
            <td>
                <img src=<?php include_once 'func.php'; echo get_path('chel2')?> width="300">
            </td>
            <td class="indent_table_chel"></td>
            <td class="table_about">
                <h1 align="center">ЧТЗ</h1>
                <p class="p_indent">«ЧТЗ» — так челябинцы называют Тракторозаводский район, в котором находится
                    Челябинский тракторный завод. ЧТЗ расположен в восточной части города, близко к географическому
                    центру.
                </p>
                <p>
                    Помимо множества архитектурных достопримечательств (музей чтз, завод чтз, театр чтз, тц башня)
                    район славица своими неформальными точками притяжения, такими как Грибоедовская арка (на фото),
                    Ржевская арка (названная так в честь героя анекдотов - порутчика Ржевского) и гостиницы славянка.
                </p>
            </td>
        </tr>

        <tr valign="top">
            <td>
                <img src=<?php include_once 'func.php'; echo get_path('chel1')?> width="300">
            </td>
            <td class="indent_table_chel"></td>
            <td class="table_about">
                <h1 align="center">Текстильная фабрика</h1>
                <p class="p_indent">Несмотря на своё индустриальное прошлое Челябинск приображается с каждым годом.
                    Ежигодно в городе появляеются множество новых модных коворкингов и лаундж зон. Одним ис таких -
                    лекторий, расположенный на бывшей текстильной фабрике.
                </p>
            </td>
        </tr>

        </tbody>
    </table>
</div>
</body>