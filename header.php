<?php ?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 

    <link rel="shortcut icon" href="/wp-content/themes/sovservice/img/favicon.ico">  
    
    <title>Совсервис | Ремонт и обслуживание бытовой и профессиональной техники в Москве и области</title> 

    <script src="https://api-maps.yandex.ru/2.1/?apikey=68f9a0ea-6fba-4a6e-9f0a-5a716b0b30d5&lang=ru_RU" type="text/javascript">
    </script>

    <script type="text/javascript">     
        ymaps.ready(init);
        function init(){
            // Создание карты.
            var myMap = new ymaps.Map("map", {
                // Координаты центра карты. 
                center: [55.75389259173555,37.61815455963066],
                // Уровень масштабирования. Допустимые значения:
                // от 0 (весь мир) до 19.
                zoom: 9
            });

            var myPolygon = new ymaps.GeoObject({
                geometry: {
                    type: "Polygon",
                    coordinates: [
                        [[55.997739498871994,37.18832524221455],
                        [56.01430136484792,37.489434862185206],
                        [56.01199349476133,37.86846318249772],
                        [55.9141665944051,37.900048875857095],
                        [55.81377143906391,38.236505174685206],
                        [55.56864595028893,38.21865239148209],
                        [55.2655539339035,37.909661912966456],
                        [55.14460620272928,37.45372929577896],
                        [55.26869051778631,36.84536137585709],
                        [55.49032320573466,36.53681920304835],
                        [55.49032320573466,36.53681920304835],
                        [55.997739498871994,37.18832524221455]]
                                          
                    ]
                }
            });

            var myPlacemark = new ymaps.Placemark([55.75389259173555,37.61815455963066], {}, {
                preset: 'islands#redIcon'
            });

            myMap.geoObjects.add(myPolygon); 
            myMap.geoObjects.add(myPlacemark);
        }
    </script>

    <?php wp_head(); ?>
</head>

<body>
<?php ?>

    <header class="header">
        <div class="container-fluid">
            <div class="row justify-content-between align-items-center">
                <nav id="menu" class="main-menu header__menu col-xxl-4 col-lg-5 col-12">
                    <ul class="menu__list row row-cols-auto justify-content-between">
                        <li class="menu__item">
                            <a class="menu__link" href="/about">о нас</a>
                        </li>
                        <li class="menu__item item-for-sub">
                            <a class="menu__link" href="#">услуги</a>

                            <ul id="additionalmenu" class="menu__sub sub-menu">

                                <?php wp_nav_menu( array( 'theme_location' => 'additionalmenu' ) ); ?>
                           
                            </ul>
                        </li>
                        <li class="menu__item">
                            <a class="menu__link" href="/reviews/">отзывы</a>
                        </li>
                        <li class="menu__item">
                            <a class="menu__link" href="/contacts/">контакты</a>
                        </li>
                        <li class="menu__item">
                            <a class="menu__link" href="/blog/">блог</a>
                        </li>
                    </ul>
                </nav>

                <button id="burger" class="burger" aria-label="открыть меню">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

                <a href="/" class="header__logo">
                    <img class="header__img" src="/wp-content/themes/sovservice/img/Logo.svg" alt="Логотип Совсервис">
                </a> 

                <address class="row justify-content-between address header__address col-xxl-4 col-xl-5 col-lg-3 col-sm-12 col-11">
                    <a href="tel:+7<?php the_field('phone_link', 'options'); ?>" class="address__phone"><?php the_field('phone_number', 'options'); ?></a>

                    <a href="mailto:<?php the_field('mail_address', 'options'); ?>" class="address__mail"><?php the_field('mail_address', 'options'); ?></a>
                </address>
            </div>
        </div>       
    </header>

    

<?php  ?>




