<?php

$elements = [
    [
        "title" => "Первый заголовок статьи",
        "description" => "Описание для статьи, чтобы рассказать о чем будет в статье в кратце. Здесь абсолютно комфортно вы можете генерировать тексты-«рыбы» для решения задач в области макетирования.
        <br>
        Мы будем постепенно расширять функциональность нашего сайта и ждем с нетерпением ваших отзывов.Присылайте нам ваши рыбные тексты! Мы будем рады!"
    ],
    [
        "title" => "Второй заголовок статьи",
        "description" => "Описание для статьи, чтобы рассказать о чем будет в статье в кратце. Здесь абсолютно комфортно вы можете генерировать тексты-«рыбы» для решения задач в области макетирования.
        <br>
        Мы будем постепенно расширять функциональность нашего сайта и ждем с нетерпением ваших отзывов.Присылайте нам ваши рыбные тексты! Мы будем рады!"
    ],
];

?>


<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>
            Подготовительные задания к курсу
        </title>
        <meta name="description" content="Chartist.html">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
        <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
        <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
        <link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
        <link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
    </head>
    <body class="mod-bg-1 mod-nav-link ">
        <main id="js-page-content" role="main" class="page-content">
            <div class="col-md-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="fs-lg fw-300 p-5 bg-white border-faded rounded mb-g">
                                <?php foreach($elements as $element): ?>
                                    <h3><?php echo $element['title'];?></h3>
                                    <p>
                                    <?php echo $element['description'];?>
                                    </p>
                                <?php endforeach?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        

        <script src="js/vendors.bundle.js"></script>
        <script src="js/app.bundle.js"></script>
        <script>
            // default list filter
            initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
            // custom response message
            initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
        </script>
    </body>
</html>
