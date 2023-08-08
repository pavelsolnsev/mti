<!DOCTYPE html>
<html lang="ru">
<?php
$ROOT = $_SERVER['DOCUMENT_ROOT'] . '/';
$BASE_HREF = '//' . $_SERVER['HTTP_HOST'] . (!empty($_SERVER['DOCUMENT_URI']) ? str_replace(substr(str_replace('index.php', '', $_SERVER['DOCUMENT_URI']), 1), '', $_SERVER['REQUEST_URI']) : '');
$URL = '//' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$version = isset($_GET['version']) ? urldecode(strtolower($_GET['version'])) : '';
$partner = isset($_GET['partner']) ? urldecode(strtolower($_GET['partner'])) : '';
$query_string = http_build_query($_GET);
include_once $ROOT . 'version.php';
?>

<head>
	<base href="<?= $BASE_HREF . ($query_string ? '?' . $query_string : '') ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<title><?= $title ?></title>

	<meta property="og:title" content="<?= $title ?>">
	<meta property="og:description" content="<?= $desc ?>">
	<meta property="og:url" content="//<?= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>">
	<meta property="og:image" content="//<?= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>img/common/share.jpg?2018-07-17">
	<link rel="image_src" href="//<?= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>img/common/share.jpg?2018-07-17">

	<link href="https://synergy.ru/img/favicon.ico" type="image/x-icon" rel="icon">
	<link href="https://synergy.ru/img/favicon.ico" type="image/x-icon" rel="shortcut icon">
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css"> -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">

	<link rel="stylesheet" href="libs/nouislider.min.css">
	<link rel="stylesheet" href="css/style.css">
	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-<?= $GTM ?>');
	</script>
	<?php if ($Facebook_ID != '') { ?>
		<!-- Facebook Pixel Code -->
		<script>
			! function(f, b, e, v, n, t, s) {
				if (f.fbq) return;
				n = f.fbq = function() {
					n.callMethod ?
						n.callMethod.apply(n, arguments) : n.queue.push(arguments)
				};
				if (!f._fbq) f._fbq = n;
				n.push = n;
				n.loaded = !0;
				n.version = '2.0';
				n.queue = [];
				t = b.createElement(e);
				t.async = !0;
				t.src = v;
				s = b.getElementsByTagName(e)[0];
				s.parentNode.insertBefore(t, s)
			}(window, document, 'script',
				'https://connect.facebook.net/en_US/fbevents.js');
			fbq('init', '<?= $Facebook_ID ?>');
			fbq('track', 'PageView');
		</script>
		<!-- End Facebook Pixel Code -->
	<?php } ?>
</head>


<body class="body-index">
	

	<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=2487426621502508&ev=PageView&noscript=1" /></noscript>
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-<?= $GTM ?>" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

	
	<div class="wrapper">
		
		<div class="topBar">
    <div class="container">
        <div class="topBar__box">
            <nav class="topBar__menu">
                <ul class="topBar__list">
                    <li class="topBar__item">
                        <a class="topBar__link" href="#">Сведения об образовательной огранизации</a>
                    </li>
                    <li class="topBar__item">
                        <a class="topBar__link" href="#">FAQ</a>
                    </li>
                </ul>
            </nav>

            <div class="topBar__user">
                <a href="#" class="topBar__icon topBar__phone">
                    <img data-src="img/topBar/phone.svg" alt="" class="lazy">
                </a>
                <a href="#" class="topBar__icon topBar__whatch">
                    <span>Версия для слабовидящих</span>
                    <img data-src="img/topBar/whatch.svg" alt="" class="lazy">
                </a>
                <div class="topBar__search">
                    <input class="topBar__search-input" type="text" placeholder="Поиск">
                    <button class="topBar__search-button" type="submit"></button>
                </div>
            </div>
        </div>
    </div>
</div>
		<header class="header">
	<div class="container">
		<div class="header__top">
			<div class="header__logo">
				<img data-src="img/header/logo.svg" alt="Московский технологический институт" class="lazy ">
			</div>
			<div class="header__contacts">
				<a class="header__contacts-item" href="">+7 (495) 225-23-35</a>
				<a class="header__contacts-item" href="">8 (800) 100-85-95</a>
				<a class="header__contacts-item" href="">Заказать звонок</a>
				<a class="header__contacts-button button-border" data-fancybox href="#bg_popup">Поступить</a>
				<a class="header__contacts-icon header__contacts-phone" href=""><img data-src="img/header/vision.svg" alt="" class="lazy "></a>
				<div class="header__contacts-icon header__contacts-hamburger" id="hamburger-menu" href=""><img data-src="img/header/hamburger.svg" alt="" class="lazy "></div>
			</div>
		</div>
		<div class="header__bottom">
			<nav class="header__menu">
				<ul class="header__list">
					<li class="header__item">
						<a class="header__link" href="">Поступающему</a>
					</li>
					<li class="header__item">
						<a class="header__link" href="">Студенту</a>
					</li>
					<li class="header__item">
						<a class="header__link" href="">Высшее образование</a>
					</li>
					<li class="header__item">
						<a class="header__link" href="">Колледж</a>
					</li>
					<li class="header__item">
						<a class="header__link" href="">Курсы</a>
					</li>
					<li class="header__item">
						<a class="header__link" href="">Каталог</a>
					</li>
					<li class="header__item">
						<a class="header__link" href="">Конструктор</a>
					</li>
					<li class="header__item">
						<a class="header__link" href="">Об институте</a>
					</li>
				</ul>
			</nav>
		</div>
	</div>
	<div class="menu-modal" id="menu-modal">
		<div class="menu-modal__close" id="menu-modal__close"><img src="img/header/close.svg" alt=""></div>
		<ul class="menu-modal__nav">
			<li class="menu-modal__item"><a class="menu-modal__link" href="">Поступающему</a></li>
			<li class="menu-modal__item"><a class="menu-modal__link" href="">Студенту</a></li>
			<li class="menu-modal__item"><a class="menu-modal__link" href="">Высшее образование</a></li>
			<li class="menu-modal__item"><a class="menu-modal__link" href="">Колледж</a></li>
			<li class="menu-modal__item"><a class="menu-modal__link" href="">Курсы</a></li>
			<li class="menu-modal__item"><a class="menu-modal__link" href="">Каталог</a></li>
			<li class="menu-modal__item"><a class="menu-modal__link" href="">Конструктор</a></li>
			<li class="menu-modal__item"><a class="menu-modal__link" href="">Об институте</a></li>
		</ul>
		<div class="menu-modal__contacts">
			<div class="menu-modal__contacts-item">Ежедневно: 09:00–19:00</div>
			<a href="" class="menu-modal__contacts-item">+7 (495) 225-23-35</a>
			<a href="" class="menu-modal__contacts-item">8 (800) 100-85-95</a>
		</div>

		<div class="menu-modal__point">
			<a class="menu-modal__point-link" href="">Сведения об образовательной огранизации</a>
			<a class="menu-modal__point-link" href="">FAQ</a>
			<a class="menu-modal__point-link" href="">Контакты</a>
			<a class="menu-modal__point-link" href="">Версия для слабовидящих</a>
		</div>
		<div class="menu-modal__wrap">
			<a class="menu-modal__lk button-red" href="">Личный кабинет</a>
		</div>
		<div class="menu-modal__search">
			<input class="menu-modal__search-input" type="text" placeholder="Поиск по сайту">
			<button class="menu-modal__search-button" type="submit"></button>
		</div>
	</div>
</header>

		<section class="intro">
    <div class="container">
        <div class="intro__breadcrumbs breadcrumbs">
            <span>Каталог</span><span>Экономика</span>
        </div>
        
        <div class="intro__box intro__box_incoming">
            <div class="intro__box-content">
                <h2 class="intro__box-title">Поступи<br class="br1"> в МТИ</h2>
                <div class="intro__box-desc intro__box-desc_incoming">Высшее образование в Московском технологическом институте — это возможность получить диплом столичного вуза, овладеть престижной специальностью и построить успешную карьеру!</div>
                <a href="#bg_popup" data-fancybox class="intro__box-button button-red">Стать студентом</a>
            </div>
            <div class="intro__box-img intro__box-img_incoming">
                <div class="animated-banner animated-banner-hide intro__box-img_incoming-banner"></div>
                <div class="animated-banner-zoom intro__box-img_incoming-banner"></div>
            </div>
            
        </div>
</section>   
		<section class="inst" id="inst">
    <div class="container">
        <h2 class="inst__title title title-margin-big">Видео инструкция</h2>
        <div class="inst__thumb">
            <iframe src="https://vk.com/video_ext.php?oid=-703069&amp;id=456239119&amp;hash=2b04efc5f8357c95&amp;hd=1" allow="autoplay; encrypted-media; fullscreen; picture-in-picture;" width="100%" height="auto" frameborder="0" allowfullscreen=""></iframe>
        </div>
    </div>
</section>
		<section class="possibility" id="possibility">
    <div class="container">
        
        <h2 class="possibility__title title-margin title">Куда поступить</h2>
        <div class="possibility__box box-tabs">
            <ul class="possibility__tabs item-tabs">
                <li data-tab="#tab_1" class="active">После 9 классов</li>
                <li data-tab="#tab_2">После 11 классов</li>
                <li data-tab="#tab_3">После колледжа</li>
                <li data-tab="#tab_4">На базе высшего</li>
                <li data-tab="#tab_5">Перевод из вуза/колледжа </li>
            </ul>
            <div class="possibility__wrapper">
                <div class="possibility__content content-tabs active" id="tab_1">
                    <div class="possibility__class-box">
                        <div class="possibility__class-content">
                            <p><b>Многие заканчивают только 9&nbsp;классов</b>, получают аттестат об&nbsp;основном общем образовании и&nbsp;выходят на&nbsp;рынок труда. Но&nbsp;реалии таковы, что для успешной работы вам понадобится профессиональное образование, подтверждающее ваши навыки. Cамым оптимальным вариантом будет поступление в&nbsp;колледж на&nbsp;программу среднего профессионального образования.<br> Для дальнейшего продвижения по&nbsp;карьерной лестнице, необходимо будет получать высшее образование после колледжа. Это долгий и&nbsp;трудоёмкий процесс. Поэтому мы&nbsp;разработали уникальную программу &laquo;Два диплома&raquo;, которая позволяет непрерывно обучаться в&nbsp;колледже и&nbsp;вузе и&nbsp;за&nbsp;короткие сроки освоить программы, получив сразу два диплома. Свяжитесь с&nbsp;нами и&nbsp;мы&nbsp;вместе подберем для вас наиболее подходящий вариант.</p>
                            <a class="button-red" href="">Получить консультацию</a>
                        </div>
                        <div class="possibility__class-block">
                            <div class="possibility__class-item">
                                <img src="img/possibility/icon-class/icon-1.png" alt="">
                                <div>Колледж МТИ</div>
                                <a href="">Подробнее</a>
                            </div>
                            <div class="possibility__class-item">
                                <img src="img/possibility/icon-class/icon-2.png" alt="">
                                <div>Непрерывное образование<br> &laquo;Два диплома&raquo;</div>
                                <a href="">Подробнее</a>
                            </div>
                        </div>
                    </div>
                    <img data-src="img/possibility/banner-class/icon-1.svg" alt="" class="lazy possibility__content-img animated-banner animated-banner">
                </div>
                <div class="possibility__content content-tabs" id="tab_2">
                    <div class="possibility__class-box possibility__class-box_three">
                        <div class="possibility__class-content">
                            <p><b>После окончания 11&nbsp;классов</b>, успешно сдав ЕГЭ и&nbsp;получив аттестат, можно сразу поступить на&nbsp;высшее образование. Если ЕГЭ не&nbsp;сдан, поступать в&nbsp;колледж. Также у&nbsp;вас есть возможность поступить на&nbsp;непрерывную программу обучения &laquo;два диплома&raquo;, которая позволит получить среднее профессиональное и&nbsp;высшее образование в&nbsp;максимально короткие сроки и&nbsp;на&nbsp;выгодных условиях без ЕГЭ.</p>
                            <a class="button-red" href="">Получить консультацию</a>
                        </div>
                        <div class="possibility__class-block">
                            <div class="possibility__class-item">
                                <img src="img/possibility/icon-class/icon-1.png" alt="">
                                <div>Колледж МТИ</div>
                                <a href="">Подробнее</a>
                            </div>
                            <div class="possibility__class-item">
                                <img src="img/possibility/icon-class/icon-2.png" alt="">
                                <div>Непрерывное образование<br> &laquo;Два диплома&raquo;</div>
                                <a href="">Подробнее</a>
                            </div>
                            <div class="possibility__class-item">
                                <img src="img/possibility/icon-class/icon-3.png" alt="">
                                <div>Высшее МТИ <span>(если есть ЕГЭ)</span></div>
                                <a href="">Подробнее</a>
                            </div>
                        </div>
                    </div>
                    <img data-src="img/possibility/banner-class/icon-1.svg" alt="" class="lazy possibility__content-img animated-banner ">
                </div>
                <div class="possibility__content content-tabs" id="tab_3">
                    <div class="possibility__class-box">
                        <div class="possibility__class-content">
                            <p><b>После окончания колледжа</b>, абитуриенты могут поступить на&nbsp;программы высшего образования, пройдя только внутренние вступительные испытания, не&nbsp;сдавая ЕГЭ. МТИ предлагает множество вариантов востребованных направлений, ориентированных на&nbsp;современный рынок. У&nbsp;абитуриентов есть возможность выбрать абсолютно любое направление подготовки, независимо от&nbsp;изучаемой специальности в&nbsp;колледже. Многие абитуриенты, окончив колледж, повторно поступают на&nbsp;программу среднего профессионального образования для получения иной профессии. Такая практика достаточно популярна в&nbsp;технических специальностях, когда требуется освоить несколько смежных профессий. Программу высшего образования в&nbsp;таком случае, обычно выбирают уже с&nbsp;перспективой карьерного роста в&nbsp;качестве управленческого звена. Свяжитесь с&nbsp;нами и&nbsp;мы&nbsp;вместе подберем для вас наиболее подходящий вариант.</p>
                            <a class="button-red" href="">Получить консультацию</a>
                        </div>
                        <div class="possibility__class-block">
                            <div class="possibility__class-item">
                                <img src="img/possibility/icon-class/icon-1.png" alt="">
                                <div>Колледж МТИ</div>
                                <a href="">Подробнее</a>
                            </div>
                            <div class="possibility__class-item">
                                <img src="img/possibility/icon-class/icon-3.png" alt="">
                                <div>Высшее МТИ <span>(если есть ЕГЭ)</span></div>
                                <a href="">Подробнее</a>
                            </div>
                        </div>
                    </div>
                    <img data-src="img/possibility/banner-class/icon-1.svg" alt="" class="lazy possibility__content-img animated-banner ">
                </div>
                <div class="possibility__content content-tabs" id="tab_4">
                    <div class="possibility__class-box">
                        <div class="possibility__class-content">
                            <p>Сегодня у&nbsp;множества людей есть <b>высшее образование</b>, которое не&nbsp;оправдало их&nbsp;ожиданий и&nbsp;не&nbsp;позволило продвинуться в&nbsp;профессии. Причины самые разнообразные: вы&nbsp;работаете в&nbsp;другой сфере, вы&nbsp;получали образование давно и&nbsp;ваши знания устарели и&nbsp;т.&nbsp;д. Да, вы&nbsp;можете подкрепить свои навыки различными курсами и&nbsp;тренингами. Такой вариант возможен при наличии времени, сил и&nbsp;определенной степени усидчивости и&nbsp;самоотдачи. Нюанс в&nbsp;том, что во&nbsp;многих случаях, работодатели обращают внимание на&nbsp;кандидатов с&nbsp;подтвержденной квалификацией, и&nbsp;в&nbsp;данном случае, чем больше регалий вы&nbsp;имеете, тем лучше. В&nbsp;МТИ&nbsp;35% выпускников возвращается за&nbsp;вторым высшем образованием. Это обусловлено и&nbsp;желанием освоить новую профессию, и&nbsp;развить в&nbsp;себе навыки успешного руководителя. Второе высшее образование это необходимый этап для любого успешного управленца. Свяжитесь с&nbsp;нами и&nbsp;мы&nbsp;вместе подберем для вас наиболее подходящий вариант.</p>
                            <a class="button-red" href="">Получить консультацию</a>
                        </div>
                        <div class="possibility__class-block">
                            <div class="possibility__class-item">
                                <img src="img/possibility/icon-class/icon-3.png" alt="">
                                <div>Высшее МТИ <span>(если есть ЕГЭ)</span></div>
                                <a href="">Подробнее</a>
                            </div>
                        </div>
                    </div>
                    <img data-src="img/possibility/banner-class/icon-1.svg" alt="" class="lazy possibility__content-img animated-banner ">
                </div>
                <div class="possibility__content content-tabs" id="tab_5">
                    <div class="possibility__class-box">
                        <div class="possibility__class-content">
                            <ul>
                                <li>Перевод в вуз/колледж МТИ осуществляется круглогодично;</li>
                                <li>Перевод возможен на любую из имеющихся специальностей/направлений;</li>
                                <li>Зачисление в Институт осуществляется без потери года обучения;</li>
                                <li>В процессе перевода возникшая академическая разница в учебных планах ликвидируется путем тестовых заданий (без поиска преподавателей);</li>
                                <li>Для студентов очного отделения, при отчислении в порядке перевода, форма обучения остается неизменной, отсрочка от армии (при необходимости) сохраняется и продлевается на время обучения;</li>
                            </ul>
                            <p>Более подробно о&nbsp;переводе студентов в&nbsp;Московский технологический институт&nbsp;Вы можете узнать оставив свою заявку на&nbsp;нашем сайте.</p>
                            <a class="button-red" href="">Получить консультацию</a>
                        </div>
                        <div class="possibility__class-block">
                            <div class="possibility__class-item">
                                <img src="img/possibility/icon-class/icon-1.png" alt="">
                                <div>Колледж МТИ</div>
                                <a href="">Подробнее</a>
                            </div>
                            <div class="possibility__class-item">
                                <img src="img/possibility/icon-class/icon-3.png" alt="">
                                <div>Высшее МТИ <span>(если есть ЕГЭ)</span></div>
                                <a href="">Подробнее</a>
                            </div>
                        </div>
                    </div>
                    <img data-src="img/possibility/banner-class/icon-1.svg" alt="" class="lazy possibility__content-img animated-banner ">
                </div>
            </div>
        </div>

        <div class="possibility__boxMob">
            <div class="possibility__boxMob-item acco">
                <h3 class="possibility__boxMob-title acco-trigger">После 9 классов</h3>
                <div class="possibility__boxMob-content acco-content">
                    <div class="possibility__class-box">
                        <div class="possibility__class-content">
                            <p><b>Многие заканчивают только 9&nbsp;классов</b>, получают аттестат об&nbsp;основном общем образовании и&nbsp;выходят на&nbsp;рынок труда. Но&nbsp;реалии таковы, что для успешной работы вам понадобится профессиональное образование, подтверждающее ваши навыки. Cамым оптимальным вариантом будет поступление в&nbsp;колледж на&nbsp;программу среднего профессионального образования. Для дальнейшего продвижения по&nbsp;карьерной лестнице, необходимо будет получать высшее образование после колледжа. Это долгий и&nbsp;трудоёмкий процесс. Поэтому мы&nbsp;разработали уникальную программу &laquo;Два диплома&raquo;, которая позволяет непрерывно обучаться в&nbsp;колледже и&nbsp;вузе и&nbsp;за&nbsp;короткие сроки освоить программы, получив сразу два диплома. Свяжитесь с&nbsp;нами и&nbsp;мы&nbsp;вместе подберем для вас наиболее подходящий вариант.</p>
                            <a class="button-red" href="">Получить консультацию</a>
                        </div>
                        <div class="possibility__class-block">
                            <div class="possibility__class-item">
                                <img src="img/possibility/icon-class/icon-1.png" alt="">
                                <div>Колледж МТИ</div>
                                <a href="">Подробнее</a>
                            </div>
                            <div class="possibility__class-item">
                                <img src="img/possibility/icon-class/icon-2.png" alt="">
                                <div>Непрерывное образование<br> &laquo;Два диплома&raquo;</div>
                                <a href="">Подробнее</a>
                            </div>
                        </div>
                    </div>
                    <!-- <img data-src="img/possibility/banner-incoming/icon-1.png" alt="" class="lazy possibility__content-img animated-banner "> -->
                </div>
            </div>
            <div class="possibility__boxMob-item acco">
                <h3 class="possibility__boxMob-title acco-trigger">После 11 классов</h3>
                <div class="possibility__boxMob-content acco-content">
                    <div class="possibility__class-box possibility__class-box_three">
                        <div class="possibility__class-content">
                            <p><b>После окончания 11&nbsp;классов</b>, успешно сдав ЕГЭ и&nbsp;получив аттестат, можно сразу поступить на&nbsp;высшее образование. Если ЕГЭ не&nbsp;сдан, поступать в&nbsp;колледж. Также у&nbsp;вас есть возможность поступить на&nbsp;непрерывную программу обучения &laquo;два диплома&raquo;, которая позволит получить среднее профессиональное и&nbsp;высшее образование в&nbsp;максимально короткие сроки и&nbsp;на&nbsp;выгодных условиях без ЕГЭ.</p>
                            <a class="button-red" href="">Получить консультацию</a>
                        </div>
                        <div class="possibility__class-block">
                            <div class="possibility__class-item">
                                <img src="img/possibility/icon-class/icon-1.png" alt="">
                                <div>Колледж МТИ</div>
                                <a href="">Подробнее</a>
                            </div>
                            <div class="possibility__class-item">
                                <img src="img/possibility/icon-class/icon-2.png" alt="">
                                <div>Непрерывное образование<br> &laquo;Два диплома&raquo;</div>
                                <a href="">Подробнее</a>
                            </div>
                            <div class="possibility__class-item">
                                <img src="img/possibility/icon-class/icon-3.png" alt="">
                                <div>Высшее МТИ <span>(если есть ЕГЭ)</span></div>
                                <a href="">Подробнее</a>
                            </div>
                        </div>
                    </div>
                    <!-- <img data-src="img/possibility/banner-incoming/icon-2.png" alt="" class="lazy possibility__content-img animated-banner "> -->
                </div>
            </div>
            <div class="possibility__boxMob-item acco">
                <h3 class="possibility__boxMob-title acco-trigger">После колледжа</h3>
                <div class="possibility__boxMob-content acco-content">
                    <div class="possibility__class-box">
                        <div class="possibility__class-content">
                            <p><b>После окончания колледжа</b>, абитуриенты могут поступить на&nbsp;программы высшего образования, пройдя только внутренние вступительные испытания, не&nbsp;сдавая ЕГЭ. МТИ предлагает множество вариантов востребованных направлений, ориентированных на&nbsp;современный рынок. У&nbsp;абитуриентов есть возможность выбрать абсолютно любое направление подготовки, независимо от&nbsp;изучаемой специальности в&nbsp;колледже. Многие абитуриенты, окончив колледж, повторно поступают на&nbsp;программу среднего профессионального образования для получения иной профессии. Такая практика достаточно популярна в&nbsp;технических специальностях, когда требуется освоить несколько смежных профессий. Программу высшего образования в&nbsp;таком случае, обычно выбирают уже с&nbsp;перспективой карьерного роста в&nbsp;качестве управленческого звена. Свяжитесь с&nbsp;нами и&nbsp;мы&nbsp;вместе подберем для вас наиболее подходящий вариант.</p>
                            <a class="button-red" href="">Получить консультацию</a>
                        </div>
                        <div class="possibility__class-block">
                            <div class="possibility__class-item">
                                <img src="img/possibility/icon-class/icon-1.png" alt="">
                                <div>Колледж МТИ</div>
                                <a href="">Подробнее</a>
                            </div>
                            <div class="possibility__class-item">
                                <img src="img/possibility/icon-class/icon-3.png" alt="">
                                <div>Высшее МТИ <span>(если есть ЕГЭ)</span></div>
                                <a href="">Подробнее</a>
                            </div>
                        </div>
                    </div>
                    <!-- <img data-src="img/possibility/banner-incoming/icon-3.png" alt="" class="lazy possibility__content-img animated-banner "> -->
                </div>
            </div>
            <div class="possibility__boxMob-item acco">
                <h3 class="possibility__boxMob-title acco-trigger">На базе высшего</h3>
                <div class="possibility__boxMob-content acco-content">
                    <div class="possibility__class-box">
                        <div class="possibility__class-content">
                            <p>Сегодня у&nbsp;множества людей есть <b>высшее образование</b>, которое не&nbsp;оправдало их&nbsp;ожиданий и&nbsp;не&nbsp;позволило продвинуться в&nbsp;профессии. Причины самые разнообразные: вы&nbsp;работаете в&nbsp;другой сфере, вы&nbsp;получали образование давно и&nbsp;ваши знания устарели и&nbsp;т.&nbsp;д. Да, вы&nbsp;можете подкрепить свои навыки различными курсами и&nbsp;тренингами. Такой вариант возможен при наличии времени, сил и&nbsp;определенной степени усидчивости и&nbsp;самоотдачи. Нюанс в&nbsp;том, что во&nbsp;многих случаях, работодатели обращают внимание на&nbsp;кандидатов с&nbsp;подтвержденной квалификацией, и&nbsp;в&nbsp;данном случае, чем больше регалий вы&nbsp;имеете, тем лучше. В&nbsp;МТИ&nbsp;35% выпускников возвращается за&nbsp;вторым высшем образованием. Это обусловлено и&nbsp;желанием освоить новую профессию, и&nbsp;развить в&nbsp;себе навыки успешного руководителя. Второе высшее образование это необходимый этап для любого успешного управленца. Свяжитесь с&nbsp;нами и&nbsp;мы&nbsp;вместе подберем для вас наиболее подходящий вариант.</p>
                            <a class="button-red" href="">Получить консультацию</a>
                        </div>
                        <div class="possibility__class-block">
                            <div class="possibility__class-item">
                                <img src="img/possibility/icon-class/icon-3.png" alt="">
                                <div>Высшее МТИ <span>(если есть ЕГЭ)</span></div>
                                <a href="">Подробнее</a>
                            </div>
                        </div>
                    </div>
                    <!-- <img data-src="img/possibility/banner-incoming/icon-4.png" alt="" class="lazy possibility__content-img animated-banner "> -->
                </div>
            </div>
            <div class="possibility__boxMob-item acco">
                <h3 class="possibility__boxMob-title acco-trigger">Перевод из вуза/колледжа </h3>
                <div class="possibility__boxMob-content acco-content">
                    <div class="possibility__class-box">
                        <div class="possibility__class-content">
                            <ul>
                                <li>Перевод в вуз/колледж МТИ осуществляется круглогодично;</li>
                                <li>Перевод возможен на любую из имеющихся специальностей/направлений;</li>
                                <li>Зачисление в Институт осуществляется без потери года обучения;</li>
                                <li>В процессе перевода возникшая академическая разница в учебных планах ликвидируется путем тестовых заданий (без поиска преподавателей);</li>
                                <li>Для студентов очного отделения, при отчислении в порядке перевода, форма обучения остается неизменной, отсрочка от армии (при необходимости) сохраняется и продлевается на время обучения;</li>
                            </ul>
                            <p>Более подробно о&nbsp;переводе студентов в&nbsp;Московский технологический институт&nbsp;Вы можете узнать оставив свою заявку на&nbsp;нашем сайте.</p>
                            <a class="button-red" href="">Получить консультацию</a>
                        </div>
                        <div class="possibility__class-block">
                            <div class="possibility__class-item">
                                <img src="img/possibility/icon-class/icon-1.png" alt="">
                                <div>Колледж МТИ</div>
                                <a href="">Подробнее</a>
                            </div>
                            <div class="possibility__class-item">
                                <img src="img/possibility/icon-class/icon-3.png" alt="">
                                <div>Высшее МТИ <span>(если есть ЕГЭ)</span></div>
                                <a href="">Подробнее</a>
                            </div>
                        </div>
                    </div>
                    <!-- <img data-src="img/possibility/banner-incoming/icon-5.png" alt="" class="lazy possibility__content-img animated-banner "> -->
                </div>
            </div>
        </div>
        

    </div>
</section>
		
    <section class="actions" id="actions">
        
        <div class="container">
            
            <h2 class="actions__title title-margin-big title">Как поступить</h2>
            
            <div class="actions__box">
                <div class="actions__item">
                    <div class="actions__item-img">
                        
                        <img data-src="img/actions/icon-1.svg" alt="" class="lazy">
                        
                    </div>
                    <div class="actions__item-wrap">
                        <h3 class="actions__item-title">Оставь заявку</h3>
                        <p class="actions__item-desc">Оставьте заявку и&nbsp;наши специалисты свяжутся с&nbsp;вами!</p>
                    </div>
                </div>
                <div class="actions__item">
                    <div class="actions__item-img">
                        
                        <img data-src="img/actions/icon-2.svg" alt="" class="lazy">
                        
                    </div>
                    <div class="actions__item-wrap">
                        <h3 class="actions__item-title">Подготовь документы</h3>
                        <p class="actions__item-desc">Соберите все нужные для поступления документы!</p>
                    </div>
                </div>
                <div class="actions__item">
                    <div class="actions__item-img">
                        
                        <img data-src="img/actions/icon-3.svg" alt="" class="lazy">
                        
                    </div>
                    <div class="actions__item-wrap">
                        <h3 class="actions__item-title">Пройди оформление</h3>
                        <p class="actions__item-desc">После проверки всех данных подпишите документ о&nbsp;зачислении!</p>
                    </div>
                </div>
                <div class="actions__item">
                    <div class="actions__item-img">
                        
                        <img data-src="img/actions/icon-4.svg" alt="" class="lazy">
                        
                    </div>
                    <div class="actions__item-wrap">
                        <h3 class="actions__item-title">Обучайся</h3>
                        <p class="actions__item-desc">Все готово! Приступайте к&nbsp;обучению и&nbsp;успехов!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
		
		<section class="profession   " id="profession">
    <div class="container">
        
        <div class="profession__box profession__box-eg">
            <div class="profession__content">
                <h2 class="profession__title profession__title-eg title"><span>ЕГЭ – не препятствие для образования</span> <span>ЕГЭ – не препят-<br>ствие для образования</span> </h2>
                <div class="profession__subtitle profession__subtitle-eg">Программа “Два диплома”</div>
                <a href="#bg_popup" data-fancybox class="profession__button profession__button-eg button-red">Стать студентом</a>
            </div>
            <div class="profession__img profession__img-eg">
                <div class="animated-banner animated-banner-hide"></div>
                <div class="animated-banner animated-banner-hide"></div>
                <div class="animated-banner-zoom animated-banner-round"></div>
                <div class="animated-banner-zoom animated-banner-square"></div>
            </div>
        </div>
        
    </div>
</section>
		

<section class="directions " id="directions">
    <div class="container">
        <h2 class="directions__title title-margin title">Подбери направление</h2>
        <div class="directions__inner box-tabs">
            <ul class="directions__choice item-tabs">
                <li data-tab="#tab_1" class="directions__choice-item active">Высшее</li>
                <li data-tab="#tab_2" class="directions__choice-item">Колледж</li>
                <!-- <li data-tab="#tab_3" class="directions__choice-item directions__choice-item--desk ">Программа “Два диплома”</li>
                <li data-tab="#tab_3" class="directions__choice-item directions__choice-item--mob ">Два диплома</li> -->
            </ul>

            <!-- higher education -->
            <div class="directions__box content-tabs active" id="tab_1">
                <div class="directions__items higher">
                
                    <div class="directions__card higher ">
                        <div class="directions__card-box higher">
                            <img class="directions__card-icon higher" src="img/directions/higher-cards/icon-01.svg" alt="directions-icon">
                            <div>
                                <div class="directions__card-info higher">2 специальности</div>
                                <div class="directions__card-price higher">от 49 000р</div>
                            </div>
                        </div>
                        <h4 class="directions__card-title higher">Управление в технических сферах</h4>
                    </div>
                
                    <div class="directions__card higher ">
                        <div class="directions__card-box higher">
                            <img class="directions__card-icon higher" src="img/directions/higher-cards/icon-02.svg" alt="directions-icon">
                            <div>
                                <div class="directions__card-info higher">3 специальности</div>
                                <div class="directions__card-price higher">от 39 000р</div>
                            </div>
                        </div>
                        <h4 class="directions__card-title higher">Электроэнергетика и электротехника</h4>
                    </div>
                
                    <div class="directions__card higher ">
                        <div class="directions__card-box higher">
                            <img class="directions__card-icon higher" src="img/directions/higher-cards/icon-03.svg" alt="directions-icon">
                            <div>
                                <div class="directions__card-info higher">2 специальности</div>
                                <div class="directions__card-price higher">от 36 000р</div>
                            </div>
                        </div>
                        <h4 class="directions__card-title higher">Теплоэнергетика и теплотехника</h4>
                    </div>
                
                    <div class="directions__card higher directions__card-hidden">
                        <div class="directions__card-box higher">
                            <img class="directions__card-icon higher" src="img/directions/higher-cards/icon-04.svg" alt="directions-icon">
                            <div>
                                <div class="directions__card-info higher">7 специальностей</div>
                                <div class="directions__card-price higher">от 46 000р</div>
                            </div>
                        </div>
                        <h4 class="directions__card-title higher">Строительство</h4>
                    </div>
                
                    <div class="directions__card higher directions__card-hidden">
                        <div class="directions__card-box higher">
                            <img class="directions__card-icon higher" src="img/directions/higher-cards/icon-05.svg" alt="directions-icon">
                            <div>
                                <div class="directions__card-info higher">3 специальности</div>
                                <div class="directions__card-price higher">от 36 000р</div>
                            </div>
                        </div>
                        <h4 class="directions__card-title higher">Техносферная безопасность</h4>
                    </div>
                
                    <div class="directions__card higher directions__card-hidden">
                        <div class="directions__card-box higher">
                            <img class="directions__card-icon higher" src="img/directions/higher-cards/icon-06.svg" alt="directions-icon">
                            <div>
                                <div class="directions__card-info higher">7 специальностей</div>
                                <div class="directions__card-price higher">от 49 000р</div>
                            </div>
                        </div>
                        <h4 class="directions__card-title higher">Экономика</h4>
                    </div>
                
                    <div class="directions__card higher directions__card-hidden">
                        <div class="directions__card-box higher">
                            <img class="directions__card-icon higher" src="img/directions/higher-cards/icon-07.svg" alt="directions-icon">
                            <div>
                                <div class="directions__card-info higher">1 специальность</div>
                                <div class="directions__card-price higher">от 40 000р</div>
                            </div>
                        </div>
                        <h4 class="directions__card-title higher">Экономическая безопасность</h4>
                    </div>
                
                    <div class="directions__card higher directions__card-hidden">
                        <div class="directions__card-box higher">
                            <img class="directions__card-icon higher" src="img/directions/higher-cards/icon-08.svg" alt="directions-icon">
                            <div>
                                <div class="directions__card-info higher">3 специальности</div>
                                <div class="directions__card-price higher">от 30 000р</div>
                            </div>
                        </div>
                        <h4 class="directions__card-title higher">Прикладная информатика</h4>
                    </div>
                
                    <div class="directions__card higher directions__card-hidden">
                        <div class="directions__card-box higher">
                            <img class="directions__card-icon higher" src="img/directions/higher-cards/icon-09.svg" alt="directions-icon">
                            <div>
                                <div class="directions__card-info higher">19 специальностей</div>
                                <div class="directions__card-price higher">от 49 000р</div>
                            </div>
                        </div>
                        <h4 class="directions__card-title higher">Менеджмент</h4>
                    </div>
                
                    <div class="directions__card higher directions__card-hidden">
                        <div class="directions__card-box higher">
                            <img class="directions__card-icon higher" src="img/directions/higher-cards/icon-10.svg" alt="directions-icon">
                            <div>
                                <div class="directions__card-info higher">1 специальности</div>
                                <div class="directions__card-price higher">от 36 000р</div>
                            </div>
                        </div>
                        <h4 class="directions__card-title higher">Педагогическое образование</h4>
                    </div>
                
                    <div class="directions__card higher directions__card-hidden">
                        <div class="directions__card-box higher">
                            <img class="directions__card-icon higher" src="img/directions/higher-cards/icon-11.svg" alt="directions-icon">
                            <div>
                                <div class="directions__card-info higher">2 специальности</div>
                                <div class="directions__card-price higher">от 36 000р</div>
                            </div>
                        </div>
                        <h4 class="directions__card-title higher">Информационные системы и технологии</h4>
                    </div>
                 
                </div>
                <a href="" class="directions__more button-border button-more">Показать больше</a>
                <a class="directions__btn" href="">Перейти к каталог</a>
            </div>

            <!-- college -->
            <div class="directions__box content-tabs" id="tab_2">
                <div class="directions__items college">
                
                    <div class="directions__card college ">
                        <div class="directions__card-box college">
                            <img class="directions__card-icon college" src="img/directions/college-cards/icon-01.svg" alt="directions-icon">
                            <h4 class="directions__card-title college">Монтаж, наладка и эксплуатация электрооборудования промышленных и гражданских сооружений</h4>
                        </div>
                        <div class="directions__card-inner">
                            <div class="directions__card-info college">За год</div>
                            <div class="directions__card-price college">от 49 000р</div>
                        </div>
                    </div>
                
                    <div class="directions__card college ">
                        <div class="directions__card-box college">
                            <img class="directions__card-icon college" src="img/directions/college-cards/icon-01.svg" alt="directions-icon">
                            <h4 class="directions__card-title college">Строительство и эксплуатация зданий и сооружений</h4>
                        </div>
                        <div class="directions__card-inner">
                            <div class="directions__card-info college">За год</div>
                            <div class="directions__card-price college">от 49 000р</div>
                        </div>
                    </div>
                
                    <div class="directions__card college ">
                        <div class="directions__card-box college">
                            <img class="directions__card-icon college" src="img/directions/college-cards/icon-01.svg" alt="directions-icon">
                            <h4 class="directions__card-title college">Экономика и бухгалтерский учет</h4>
                        </div>
                        <div class="directions__card-inner">
                            <div class="directions__card-info college">За год</div>
                            <div class="directions__card-price college">от 49 000р</div>
                        </div>
                    </div>
                
                    <div class="directions__card college directions__card-hidden">
                        <div class="directions__card-box college">
                            <img class="directions__card-icon college" src="img/directions/college-cards/icon-01.svg" alt="directions-icon">
                            <h4 class="directions__card-title college">Банковское дело</h4>
                        </div>
                        <div class="directions__card-inner">
                            <div class="directions__card-info college">За год</div>
                            <div class="directions__card-price college">от 49 000р</div>
                        </div>
                    </div>
                
                    <div class="directions__card college directions__card-hidden">
                        <div class="directions__card-box college">
                            <img class="directions__card-icon college" src="img/directions/college-cards/icon-01.svg" alt="directions-icon">
                            <h4 class="directions__card-title college">Информационные системы и программирование</h4>
                        </div>
                        <div class="directions__card-inner">
                            <div class="directions__card-info college">За год</div>
                            <div class="directions__card-price college">от 49 000р</div>
                        </div>
                    </div>
                 
                </div>
                <a href="" class="directions__more button-border button-more">Показать больше </a>
                <a class="directions__btn" href="">Перейти к каталог</a>
            </div>

            <!-- two diploma-->
            <!-- <div class="directions__box content-tabs" id="tab_3">
                <div class="directions__items diploma">
                 
                </div>
                <a class="directions__btn" href="">Перейти в конструктор</a>
            </div> -->
        </div>
    </div>
</section>
		
		
		<section class="profession profession-white  " id="profession">
    <div class="container">
        
        <div class="profession__box">
            <div class="profession__content">
                <h2 class="profession__title title">Пройди<br class="br1"> тест<br class="br2"> на проф<span class="span1">-</span><span class="span2">ориентацию</span></h2>
                <div class="profession__subtitle">Мы поможем тебе с выбором профессии</div>
                <a href="" class="profession__button profession__button-prof button-red">Пройти тест</a>
            </div>
            <div class="profession__img profession__img-prof">
                <div class="animated-banner animated-banner-hide"></div>
                <div class="animated-banner animated-banner-hide"></div>
                <div class="animated-banner-zoom animated-banner-round"></div>
                <div class="animated-banner-zoom animated-banner-square"></div>
            </div>
        </div>
        
    </div>
</section>
		
    <section class="document" id="document">
        
        <div class="container">
            <h2 class="document__title title-margin title">Необходимые документы</h2>
            <div class="document__wrapper">
                
                <div class="document__box document__slider">
                
                    <div class="document__item">
                        <div class="document__item-wrap">
                            <img data-src="img/document/icon-1.png" alt="" class="lazy document__item-img">
                            <h3 class="document__item-title">Документ, удостоверяющий личность и&nbsp;гражданство</h3>
                        </div>
                        <ul class="document__item-list">
                            <li>Паспорт гражданина РФ</li>
                            <li>Паспорт иностранного гражданина</li>
                            <li>Заграничный паспорт</li>
                            <li>Временное удостоверение личности</li>
                            <li>Удостоверение личности лица без гражданства</li>
                            <li>Вид на жительство</li>
                        </ul>
                    </div>
                    <div class="document__item">
                        <div class="document__item-wrap">
                            <img data-src="img/document/icon-2.png" alt="" class="lazy document__item-img">
                            <h3 class="document__item-title">Документ об образовании </h3>
                        </div>
                        <ul class="document__item-list">
                            <li>Аттестат о среднем общем образовании</li>
                            <li>Диплом о начальном профессиональном образовании </li>
                            <li>Диплом о среднем профессиональном образовании</li>
                            <li>Диплом бакалавра</li>
                            <li>Диплом магистра</li>
                            <li>Диплом специалиста</li>
                            <li>Документ об образовании иностранного государства</li>
                        </ul>
                    </div>
                    <div class="document__item">
                        <div class="document__item-wrap">
                            <img data-src="img/document/icon-3.png" alt="" class="lazy document__item-img">
                            <h3 class="document__item-title">3 фотографии</h3>
                        </div>
                        <ul class="document__item-list">
                            <li>Для лиц, поступающих по результатам вступительных испытаний, проводимых Институтом самостоятельно, для получения студенческого билета и зачётной книжки</li>
                        </ul>
                    </div>
                </div>
                <div class="document__navigation slider-navigation">
                    
                    <div class="document__navigation-counts"></div>
                    <div class="document__navigation-arrows slider-navigation__arrows"></div>
                    
                </div>
            </div>
        </div>
    </section>
		<section class="diplomas" id="diplomas">
    <div class="container">
        <h2 class="diplomas__title title-margin title">Образцы дипломов</h2>
        <div class="diplomas__box">
            <div class="diplomas__text"> <strong>МТИ имеет бессрочную лицензию и&nbsp;аккредитацию по&nbsp;всем программам подготовки.</strong><br>Студенты, успешно защитившие выпускную квалификационную работу по&nbsp;программам высшего образования, получают диплом с&nbsp;присвоением квалификационной степени: бакалавр или специалист. Студенты, успешно защитившие дипломную работу по&nbsp;программам среднего профессионального образование, получают диплом с&nbsp;соответствующей квалификацией.<br> МТИ входит в&nbsp;реестр аккредитованных вузов России, имеющих право выдавать Международное приложение к&nbsp;диплому на&nbsp;английском языке. Приложение позволяет продолжить обучение заграницей.</div>
            <div class="diplomas__wrapper">
                <div class="diplomas__slider">
                    <a class="diplomas__item" href="img/diplomas/diplom.jpg" data-width="" data-height="" data-fancybox="images">
                        <div class="diplomas__item-wrap">
                            <div class="diplomas__item-image"><img class="" src="img/diplomas/diplom-1.png" alt=""></div>
                        </div>
                        <div class="diplomas__item-desc"><strong>Высшее образование</strong><br>Диплом государственного образца о&nbsp;высшем образовании с&nbsp;присвоением степени бакалавра</div>
                    </a>
                    <a class="diplomas__item" href="img/diplomas/diplom-2.jpg" data-fancybox="images">
                        <div class="diplomas__item-wrap">
                            <div class="diplomas__item-image"><img class="" src="img/diplomas/diplom-2.png" alt=""></div>
                        </div>
                        <div class="diplomas__item-desc"><strong>Среднее образование</strong><br>Государственный диплом о среднем профессиональном образовании</div>
                    </a>
                    <a class="diplomas__item" href="img/diplomas/supplement.jpg" data-fancybox="images">
                        <div class="diplomas__item-wrap">
                            <div class="diplomas__item-image"><img class="" src="img/diplomas/diplom-3.png" alt=""></div>
                        </div>
                        <div class="diplomas__item-desc"><strong>Diploma Supplement</strong><br>Международное приложение к диплому Diploma Supplement на английском языке</div>
                    </a>
                </div>
                <div class="diplomas__navigation slider-navigation">
                    <div class="diplomas__navigation-counts"></div>
                    <div class="diplomas__navigation-arrows slider-navigation__arrows"></div>
                </div>
            </div>
        </div>
    </div>
</section>
		<section class="price" id="price">
    <div class="container">
        <h2 class="price__title title-margin title">Стоимость обучения</h2>
        <div class="price__box">
            <div class="price__leftBlock">
                <div class="price__filter">
                    <div class="price__filter-item">
                        <div class="price__filter-title">Выберите программу обучения:</div>
                        <ul class="price__filter-tabs js-active-parent">
                            <li class="js-active active">Бакалавриат</li>
                            <li class="js-active">Специалитет</li>
                            <li class="js-active">Колледж</li>
                        </ul>
                    </div>
                    <div class="price__filter-item">
                        <div class="price__filter-title">Выберите формат обучения:</div>
                        <ul class="price__filter-tabs js-active-parent">
                            <li class="js-active active">Дневной</li>
                            <li class="js-active">Вечерний</li>
                            <li class="js-active">Дистанционный</li>
                        </ul>
                    </div>
                    <div class="price__filter-item">
                        <div class="price__filter-title">Выберите направление обучения:</div>
                        <div class="price__filter-select select">
                            <div class="select__title"></div>
                            <ul class="select__dropdown">
                                <li>Управление в технический сферах</li>
                                <li>Электроэнергетика и электротехника</li>
                                <li>Техносферная безопасность</li>
                            </ul>
                        </div>
                    </div>
                    <div class="price__filter-item">
                        <div class="price__filter-title">Выберите профиль:</div>
                        <div class="price__filter-select select">
                            <div class="select__title"></div>
                            <ul class="select__dropdown">
                                <li>Промышленная энергетика</li>
                                <li>Электроэнергетика и электротехника</li>
                                <li>Строительство</li>
                                <li>Техносферная безопасность</li>
                                <li>Техносферная безопасность</li>
                                <li>Техносферная безопасность</li>
                                <li>Техносферная безопасность</li>
                                <li>Техносферная безопасность</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="price__rightBlock box-tabs">
                <div class="price__time">
                    <ul class="price__filter-wrap js-active-parent item-tabs">
                        <li data-tab="#tab_1" class="price__filter-group filter-group active">
                            <input type="radio" name="form" id="Семестр">
                            <label class="js-active" for="Семестр">Семестр</label>
                        </li>
                        <li data-tab="#tab_2" class="price__filter-group filter-group">
                            <input type="radio" name="form" id="Год">
                            <label class="js-active" for="Год">Год</label>
                        </li>
                        <li data-tab="#tab_3" class="price__filter-group filter-group">
                            <input type="radio" name="form" id="Год-2">
                            <label class="js-active" for="Год-2">Год <span>(Оплата в течение 7 дней)*</span></label>
                        </li>
                    </ul>
                    <p class="price__info">*Цена действительна при оплате в&nbsp;течении 7&nbsp;рабочих дней с&nbsp;момента подачи заявки</p>
                </div>
                <div class="price__rightBlockWrap content-tabs active" id="tab_1">
                    <div class="price__block">
                        <div class="price__sumSale">
                            <div>Ваша скидка:</div><span>-7 350</span><span>15%</span>
                        </div>
                    </div>
                    <div class="price__block">
                        <div class="price__sumResult">
                            <div class="price__sumResult-wrap">
                                <div>Итого:</div> <span>41 650</span>
                            </div>
                            <div class="price__sumResult-start">49 000</div>
                        </div>
                        <a class="price__sumResult-button button-red" href="">Поступить</a>
                    </div>
                </div>
                <div class="price__rightBlockWrap content-tabs" id="tab_2">
                    <div class="price__block">
                        <div class="price__sumSale">
                            <div>Ваша скидка:</div><span>-7 350</span><span>15%</span>
                        </div>
                    </div>
                    <div class="price__block">
                        <div class="price__sumResult">
                            <div class="price__sumResult-wrap">
                                <div>Итого:</div> <span>42 650</span>
                            </div>
                            <div class="price__sumResult-start">49 000</div>
                        </div>
                        <a class="price__sumResult-button button-red" href="">Поступить</a>
                    </div>
                </div>
                <div class="price__rightBlockWrap content-tabs" id="tab_3">
                    <div class="price__block">
                        <div class="price__sumSale">
                            <div>Ваша скидка:</div><span>-7 350</span><span>15%</span>
                        </div>
                    </div>
                    <div class="price__block">
                        <div class="price__sumResult">
                            <div class="price__sumResult-wrap">
                                <div>Итого:</div> <span>43 650</span>
                            </div>
                            <div class="price__sumResult-start">49 000</div>
                        </div>
                        <a class="price__sumResult-button button-red" href="">Поступить</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
		<div class="changePlaceBlockIncom">
			
			
			<section class="profession profession-white profession-black " id="profession">
    <div class="container">
        
        <div class="profession__box profession__box-program">
            <div class="profession__content">
                <h2 class="profession__title profession__title-program title">Программа лояльности</h2>
                <div class="profession__subtitle profession__subtitle-program">Плати раньше - получай больше!</div>
                <a href="#bg_popup" data-fancybox class="profession__button profession__button-program button-red">Стать участником</a>
            </div>
            <div class="profession__img profession__img-program">
                <div class="animated-banner animated-banner-hide"></div>
                <div class="animated-banner animated-banner-hide"></div>
                <div class="animated-banner-zoom"></div>
            </div>
        </div>

        
    </div>
</section>
			<section class="privileges" id="privileges">
    <div class="container">
        <h2 class="privileges__title title-margin-big title">Скидки и льготы</h2>
        <div class="privileges__box box-more">
            <ul class="privileges__line">
                <li></li>
                <li></li>
                <li></li>
            </ul>
            <div class="privileges__item">
                <div class="privileges__item-title">Лица, претендующие на льготу</div>
                <div class="privileges__item-title privileges__item-title_left">Льгота</div>
                <div class="privileges__item-title">Период действия<br> скидки</div>
                <div class="privileges__item-title">Документы-основания для предоставления льгот</div>
            </div>
            <div class="privileges__item">
                <div class="privileges__item-wrap">
                    <div class="privileges__item-title">Круглые сироты и дети</div>
                    <p class="privileges__item-text">оставшиеся без попечения родителей и не достигшие 21 года</p>
                </div>
                <span class="privileges__item-number">20%</span>
                <p class="privileges__item-text">Весь период обучения при наличии оснований</p>
                <p class="privileges__item-text">Документы-основания для предоставления льгот Справка от&nbsp;органов социального обеспечения, заявление на&nbsp;скидку</p>
            </div>
            <div class="privileges__item">
                <div class="privileges__item-wrap">
                    <div class="privileges__item-title">Инвалиды I и II групп</div>
                    <p class="privileges__item-text">не&nbsp;имеющие противопоказаний для обучения в&nbsp;ВУЗе и&nbsp;дальнейшего занятия профессиональной деятельностью</p>
                </div>
                <span class="privileges__item-number">15%</span>
                <p class="privileges__item-text">Весь период обучения при наличии оснований</p>
                <p class="privileges__item-text">Документы-основания для предоставления льгот Заключение от&nbsp;органов здравоохранения. Заключение подлежит ежегодному подтверждению</p>
            </div>
        </div>

        <div class="privileges__boxMob">
            <div class="privileges__boxMob-item acco">
                <div class="privileges__boxMob-trigger acco-trigger"><p>Круглые сироты и дети</p><span class="privileges__item-number">20%</span></div>
                <div class="privileges__boxMob-content acco-content">
                    <p class="privileges__item-text">оставшиеся без попечения родителей и не достигшие 21 года</p>
                    <div class="privileges__boxMob-list">
                        <div>
                            <h3 class="privileges__item-title">Льгота</h3>
                            <span class="privileges__item-number">20%</span>
                        </div>
                        <div>
                            <h3 class="privileges__item-title">Период действия скидки</h3>
                            <p class="privileges__item-text">Весь период обучения при наличии оснований</p>
                        </div>
                        <div>
                            <h3 class="privileges__item-title">Документы-основания для предоставления льгот</h3>
                            <p class="privileges__item-text">Документы-основания для предоставления льгот Справка от&nbsp;органов социального обеспечения, заявление на&nbsp;скидку</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="privileges__boxMob-item acco">
                <div class="privileges__boxMob-trigger acco-trigger"><p>Инвалиды I и II групп</p><span class="privileges__item-number">15%</span></div>
                <div class="privileges__boxMob-content acco-content">
                    <p class="privileges__item-text">не имеющие противопоказаний для обучения в ВУЗе и дальнейшего занятия профессиональной деятельностью</p>
                    <div class="privileges__boxMob-list">
                        <div>
                            <h3 class="privileges__item-title">Льгота</h3>
                            <span class="privileges__item-number">15%</span>
                        </div>
                        <div>
                            <h3 class="privileges__item-title">Период действия скидки</h3>
                            <p class="privileges__item-text">Весь период обучения при наличии оснований</p>
                        </div>
                        <div>
                            <h3 class="privileges__item-title">Документы-основания для предоставления льгот</h3>
                            <p class="privileges__item-text">Документы-основания для предоставления льгот Заключение от&nbsp;органов здравоохранения. Заключение подлежит ежегодному подтверждению</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="privileges__boxMob-item acco">
                <div class="privileges__boxMob-trigger acco-trigger"><p>Получившие или перенесшие лучевую болезнь и другие заболевания</p><span class="privileges__item-number">15%</span></div>
                <div class="privileges__boxMob-content acco-content">
                    <p class="privileges__item-text">связанные с лучевой болезнью, эвакуированные из зоны отчуждения и переселенцы из зон отчуждения вследствие катастрофы на Чернобыльской АЭС</p>
                    <div class="privileges__boxMob-list">
                        <div>
                            <h3 class="privileges__item-title">Льгота</h3>
                            <span class="privileges__item-number">15%</span>
                        </div>
                        <div>
                            <h3 class="privileges__item-title">Период действия скидки</h3>
                            <p class="privileges__item-text">Весь период обучения при наличии оснований</p>
                        </div>
                        <div>
                            <h3 class="privileges__item-title">Документы-основания для предоставления льгот</h3>
                            <p class="privileges__item-text">Документы-основания для предоставления льгот Заключение от&nbsp;органов здравоохранения. Заключение подлежит ежегодному подтверждению</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="privileges__boxMob-item acco">
                <div class="privileges__boxMob-trigger acco-trigger"><p>Дети из многодетных семей</p><span class="privileges__item-number">15%</span></div>
                <div class="privileges__boxMob-content acco-content">
                    <p class="privileges__item-text">находящиеся на попечении родителей и не достигшие 21 года</p>
                    <div class="privileges__boxMob-list">
                        <div>
                            <h3 class="privileges__item-title">Льгота</h3>
                            <span class="privileges__item-number">15%</span>
                        </div>
                        <div>
                            <h3 class="privileges__item-title">Период действия скидки</h3>
                            <p class="privileges__item-text">Весь период обучения при наличии оснований</p>
                        </div>
                        <div>
                            <h3 class="privileges__item-title">Документы-основания для предоставления льгот</h3>
                            <p class="privileges__item-text">Документы-основания для предоставления льгот Заключение от&nbsp;органов здравоохранения. Заключение подлежит ежегодному подтверждению</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="privileges__boxMob-item acco">
                <div class="privileges__boxMob-trigger acco-trigger"><p>Дети до 21 года, потерявшие отца или мать</p><span class="privileges__item-number">15%</span></div>
                <div class="privileges__boxMob-content acco-content">
                    <p class="privileges__item-text">при условии, что последний кормилец является пенсионером и не работает</p>
                    <div class="privileges__boxMob-list">
                        <div>
                            <h3 class="privileges__item-title">Льгота</h3>
                            <span class="privileges__item-number">15%</span>
                        </div>
                        <div>
                            <h3 class="privileges__item-title">Период действия скидки</h3>
                            <p class="privileges__item-text">Весь период обучения при наличии оснований</p>
                        </div>
                        <div>
                            <h3 class="privileges__item-title">Документы-основания для предоставления льгот</h3>
                            <p class="privileges__item-text">Документы-основания для предоставления льгот Заключение от&nbsp;органов здравоохранения. Заключение подлежит ежегодному подтверждению</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="privileges__boxMob-item acco">
                <div class="privileges__boxMob-trigger acco-trigger"><p>Участники войн и локальных военных конфликтов</p><span class="privileges__item-number">15%</span></div>
                <div class="privileges__boxMob-content acco-content">
                    <div class="privileges__boxMob-list">
                        <div>
                            <h3 class="privileges__item-title">Льгота</h3>
                            <span class="privileges__item-number">15%</span>
                        </div>
                        <div>
                            <h3 class="privileges__item-title">Период действия скидки</h3>
                            <p class="privileges__item-text">Весь период обучения при наличии оснований</p>
                        </div>
                        <div>
                            <h3 class="privileges__item-title">Документы-основания для предоставления льгот</h3>
                            <p class="privileges__item-text">Документы-основания для предоставления льгот Заключение от&nbsp;органов здравоохранения. Заключение подлежит ежегодному подтверждению</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <a class="privileges__link" href="">Все скидки и льготы</a>
    </div>
</section>
		</div>
		<section class="faq" id="faq">
    <div class="container">
        <h2 class="faq__title title title-margin">Вопрос / ответ</h2>
        <div class="faq__box">
            <div class="faq__item acco">
                <h3 class="faq__item-title acco-trigger">Ваш институт помогает в&nbsp;организации практики студентам?</h3>
                <p class="faq__item-text acco-content">Да, мы&nbsp;плодотворно сотрудничаем с&nbsp;ведущими компаниями-работодателями. Кроме того, уже несколько лет в&nbsp;нашем институте действует Центр трудоустройства. Основным направлением его работы является разработка и&nbsp;реализация целевых программ обучения, стажировок и&nbsp;трудоустройства студентов в&nbsp;крупнейшие российские и&nbsp;зарубежные компании. Специалисты центра помогают студентам и&nbsp;выпускникам ориентироваться в&nbsp;условиях изменчивого рынка труда, правильно оценивать свой профессиональный потенциал и&nbsp;находить престижную работу.</p>
            </div>
            <div class="faq__item acco">
                <h3 class="faq__item-title acco-trigger">Мне поступило сообщение из&nbsp;вашего института с&nbsp;просьбой оплатить услуги на&nbsp;карту или передать наличными деньгами менеджеру. Такое возможно?</h3>
                <p class="faq__item-text acco-content">Да, мы&nbsp;плодотворно сотрудничаем с&nbsp;ведущими компаниями-работодателями. Кроме того, уже несколько лет в&nbsp;нашем институте действует Центр трудоустройства. Основным направлением его работы является разработка и&nbsp;реализация целевых программ обучения, стажировок и&nbsp;трудоустройства студентов в&nbsp;крупнейшие российские и&nbsp;зарубежные компании. Специалисты центра помогают студентам и&nbsp;выпускникам ориентироваться в&nbsp;условиях изменчивого рынка труда, правильно оценивать свой профессиональный потенциал и&nbsp;находить престижную работу.</p>
            </div>
            <div class="faq__item acco">
                <h3 class="faq__item-title acco-trigger">Каков преподавательский состав в&nbsp;институте?</h3>
                <p class="faq__item-text acco-content">Да, мы&nbsp;плодотворно сотрудничаем с&nbsp;ведущими компаниями-работодателями. Кроме того, уже несколько лет в&nbsp;нашем институте действует Центр трудоустройства. Основным направлением его работы является разработка и&nbsp;реализация целевых программ обучения, стажировок и&nbsp;трудоустройства студентов в&nbsp;крупнейшие российские и&nbsp;зарубежные компании. Специалисты центра помогают студентам и&nbsp;выпускникам ориентироваться в&nbsp;условиях изменчивого рынка труда, правильно оценивать свой профессиональный потенциал и&nbsp;находить престижную работу.</p>
            </div>
            <div class="faq__item acco">
                <h3 class="faq__item-title acco-trigger">У&nbsp;меня уже есть высшее образование. Насколько перспективно получать второе высшее?</h3>
                <p class="faq__item-text acco-content">Да, мы&nbsp;плодотворно сотрудничаем с&nbsp;ведущими компаниями-работодателями. Кроме того, уже несколько лет в&nbsp;нашем институте действует Центр трудоустройства. Основным направлением его работы является разработка и&nbsp;реализация целевых программ обучения, стажировок и&nbsp;трудоустройства студентов в&nbsp;крупнейшие российские и&nbsp;зарубежные компании. Специалисты центра помогают студентам и&nbsp;выпускникам ориентироваться в&nbsp;условиях изменчивого рынка труда, правильно оценивать свой профессиональный потенциал и&nbsp;находить престижную работу.</p>
            </div>
            <div class="faq__item acco">
                <h3 class="faq__item-title acco-trigger">Где территориально находится ваш институт?</h3>
                <p class="faq__item-text acco-content">Да, мы&nbsp;плодотворно сотрудничаем с&nbsp;ведущими компаниями-работодателями. Кроме того, уже несколько лет в&nbsp;нашем институте действует Центр трудоустройства. Основным направлением его работы является разработка и&nbsp;реализация целевых программ обучения, стажировок и&nbsp;трудоустройства студентов в&nbsp;крупнейшие российские и&nbsp;зарубежные компании. Специалисты центра помогают студентам и&nbsp;выпускникам ориентироваться в&nbsp;условиях изменчивого рынка труда, правильно оценивать свой профессиональный потенциал и&nbsp;находить престижную работу.</p>
            </div>
            <div class="faq__item acco">
                <h3 class="faq__item-title acco-trigger">Какие документы потребуются для поступления в МТИ?</h3>
                <p class="faq__item-text acco-content">Да, мы&nbsp;плодотворно сотрудничаем с&nbsp;ведущими компаниями-работодателями. Кроме того, уже несколько лет в&nbsp;нашем институте действует Центр трудоустройства. Основным направлением его работы является разработка и&nbsp;реализация целевых программ обучения, стажировок и&nbsp;трудоустройства студентов в&nbsp;крупнейшие российские и&nbsp;зарубежные компании. Специалисты центра помогают студентам и&nbsp;выпускникам ориентироваться в&nbsp;условиях изменчивого рынка труда, правильно оценивать свой профессиональный потенциал и&nbsp;находить престижную работу.</p>
            </div>
        </div>

        <div class="faq__button">
            <a class="faq__button-question" href="">Задать вопрос</a>
            <a class="faq__button-all" href="">Все вопросы/ответы</a>
        </div>
    </div>
</section>
		<section class="form-reg ">
    <div class="container">
        
<form action="<?= $action ?>&form=reg" class="form ">
    <div class="form__wrapper">
        
        <h3 class="form__title title "><span></span>Поможем<br> в выборе!</h3>
        

        

        <div class="form__items">
            
            
<div class="form__item form__item_text ">
    
    <input name="name" type="text" placeholder="Имя" class="form__input form__name"   required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_text ">
    
    <input name="phone" type="text" placeholder="Телефон" class="form__input form__tel tel"   required value="">
    
</div><!-- form__item -->

            

            

            

            

            
            <div class="form__item form__item_button"><button class="form__button button-red" type="submit">Отправить</button></div>
        </div><!-- form__items -->
        
        <div class="form__more">
            <label class="form__footer ">
                <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                    <div class="form__footer-checkbox-icon lazy"></div>
                </div>
                <div class="form__footer-text">Отправляя данную форму, вы&nbsp;соглашаетесь с&nbsp;<a class="fancybox-privacy-link" href="https://synergy.ru/lp/_chunk/privacy.php?lang=ru">политикой обработки персональных данных</a> и&nbsp;на&nbsp;получение рассылок</div>
            </label>
        </div>
        
        
        <div class="form__fon animated-banner-zoom"></div>
        
    </div>
</form>

    </div>
</section>
		<footer class="footer">
    <div class="container">
        <div class="footer__top">

            <div class="footer__logo--mob"><img src="img/footer/logo.svg" alt="logo"></div>

            <ul class="footer__menu">
                <li class="footer__menu-item"><a class="footer__menu-link" href="">Об институте</a></li>
                <li class="footer__menu-item"><a class="footer__menu-link" href="">FAQ</a></li>
                <li class="footer__menu-item"><a class="footer__menu-link" href="">Новости</a></li>
                <li class="footer__menu-item"><a class="footer__menu-link" href="">Контакты</a></li>
                <li class="footer__menu-item"><a class="footer__menu-link" href="">Конструктор</a></li>
                <li class="footer__menu-item"><a class="footer__menu-link" href="">Каталог</a></li>
                <li class="footer__menu-item"><a class="footer__menu-link" href="">Программа “Два диплома”</a></li>
                <li class="footer__menu-item"><a class="footer__menu-link" href="">Перевод и восстановление</a></li>
            </ul>

            <div class="footer__education">
                <div class="footer__education-wrap">
                    <div class="footer__education-item footer__education-item_menu accoMob">
                        <ul class="footer__education-list footer__education-menu accoMob-content">
                            <li><a href="">Программа “Два диплома”</a></li>
                            <li><a href="">Перевод и восстановление</a></li>
                        </ul>
                    </div>
                    <div class="footer__education-item accoMob">
                        <div class="footer__education-title accoMob-trigger footer__title">Поступающему</div>
                        <ul class="footer__education-list accoMob-content">
                            <li><a href="">Направления</a></li>
                            <li><a href="">Стоимость обучения</a></li>
                            <li><a href="">Скидки и льготы</a></li>
                            <li><a href="">Документы для поступления</a></li>
                        </ul>
                    </div>
                    <div class="footer__education-item accoMob">
                        <div class="footer__education-title accoMob-trigger footer__title">Студенту</div>
                        <ul class="footer__education-list accoMob-content">
                            <li><a href="">Расписание</a></li>
                            <li><a href="">Оплата</a></li>
                            <li><a href="">Полезные ресурсы</a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer__education-wrap">
                    <div class="footer__education-item accoMob">
                        <div class="footer__education-title accoMob-trigger footer__title">Высшее образование</div>
                        <ul class="footer__education-list accoMob-content">
                            <li><a href="">Направления</a></li>
                            <li><a href="">Формы обучения</a></li>
                        </ul>
                    </div>
                    <div class="footer__education-item accoMob">
                        <div class="footer__education-title accoMob-trigger footer__title">Колледж</div>
                        <ul class="footer__education-list accoMob-content">
                            <li><a href="">Специальности</a></li>
                            <li><a href="">Формы обучения</a></li>
                        </ul>
                    </div>
                    <div class="footer__education-item accoMob">
                        <div class="footer__education-title accoMob-trigger footer__title">ДПО</div>
                        <ul class="footer__education-list accoMob-content">
                            <li><a href="">Общеразвивающие курсы</a></li>
                            <li><a href="">Повышение квалификации</a></li>
                            <li><a href="">Профессиональная подготовка</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="footer__contacts">
                <div class="footer__contacts-item">
                    <div class="footer__title footer__contacts-title">Бесплатный звонок по России</div>
                    <a class="footer__contacts-link" href="">8 800 100-85-95</a>
                </div>
                <div class="footer__contacts-item">
                    <div class="footer__title footer__contacts-title">Приемная комиссия</div>
                    <a class="footer__contacts-link" href="">8 800 100-85-95</a>
                </div>
                <div class="footer__contacts-item">
                    <div class="footer__title footer__contacts-title">Студентам</div>
                    <a class="footer__contacts-link" href="">+7 (495) 225-23-35</a>
                </div>
                <div class="footer__contacts-item">
                    <div class="footer__title footer__contacts-title">Почта</div>
                    <a class="footer__contacts-link" href="mailto:pk@moi.edu.ru">pk@moi.edu.ru</a>
                </div>
                <div class="footer__contacts-item">
                    <div class="footer__title footer__contacts-title">График работы</div>
                    Пн – Пт: с 9:00 до 19:00
                </div>
            </div>
        </div>
        <div class="footer__bottom">
            <div class="footer__bottom-items">
                <div class="footer__address">
                    <div class="footer__address-item">
                        <div class="footer__title footer__address-name">
                            <img class="footer__address-icon" src="img/footer/metro.svg" alt="metro-icon">
                            Сокол
                        </div>
                        Москва, Ленинградский пр-т, д. 80, корпус 5
                    </div>
                    <div class="footer__address-item">
                        <div class="footer__title footer__address-name">
                            <img class="footer__address-icon" src="img/footer/metro.svg" alt="metro-icon">
                            Семёновская
                        </div>
                        Москва, ул. Измайловский Вал, дом 2
                    </div>
                </div>

                <div class="footer__social">
                    <!-- <a class="footer__social-link _fb" href="" target="_blank">
                        <svg width="10" height="20" viewBox="0 0 10 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.4908 19.9999V10.8769H9.43911L9.88051 7.32157H6.4908V5.05157C6.4908 4.02223 6.76604 3.32068 8.18733 3.32068L10 3.31981V0.139943C9.68636 0.0967723 8.61042 0 7.35864 0C4.74517 0 2.95593 1.65682 2.95593 4.69964V7.32167H0V10.877H2.95584V20L6.4908 19.9999Z" fill="#C0C0C0"/>
                        </svg>    
                    </a> -->
                    <a class="footer__social-link _vk" href="" target="_blank">
                        <svg width="22" height="12" viewBox="0 0 22 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M21.4935 0.805263C21.6482 0.331579 21.4935 0 20.7713 0H18.364C17.745 0 17.4699 0.3 17.3151 0.631579C17.3151 0.631579 16.0943 3.37895 14.3576 5.14737C13.7902 5.66842 13.5495 5.82632 13.24 5.82632C13.0852 5.82632 12.8617 5.66842 12.8617 5.19474V0.805263C12.8617 0.236842 12.6897 0 12.1739 0H8.39105C8.01276 0 7.77204 0.268421 7.77204 0.505263C7.77204 1.0421 8.63178 1.16842 8.73494 2.65263V5.90526C8.73494 6.61579 8.59739 6.7421 8.28788 6.7421C7.47973 6.7421 5.48513 3.99474 4.31589 0.836843C4.07516 0.252632 3.85163 0 3.23262 0H0.825349C0.137558 0 0 0.3 0 0.631579C0 1.21579 0.808154 4.12105 3.80004 7.95789C5.79464 10.5789 8.59739 12 11.1422 12C12.6725 12 12.8617 11.6842 12.8617 11.1474V9.15789C12.8617 8.52632 12.9992 8.4 13.4979 8.4C13.859 8.4 14.4608 8.55789 15.888 9.82105C17.5215 11.3211 17.7966 12 18.7079 12H21.1152C21.803 12 22.1469 11.6842 21.9405 11.0684C21.717 10.4526 20.9432 9.55263 19.9115 8.47895C19.3441 7.86316 18.5016 7.21579 18.2608 6.88421C17.8998 6.45789 18.0029 6.26842 18.2608 5.90526C18.2608 5.88947 21.2012 2.1 21.4935 0.805263Z" fill="#C0C0C0" />
                        </svg>
                    </a>
                    <!-- <a class="footer__social-link _inst" href="" target="_blank">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.66747 10C6.66747 8.15912 8.15945 6.6664 10.0004 6.6664C11.8414 6.6664 13.3341 8.15912 13.3341 10C13.3341 11.8409 11.8414 13.3336 10.0004 13.3336C8.15945 13.3336 6.66747 11.8409 6.66747 10ZM4.86531 10C4.86531 12.836 7.16429 15.1349 10.0004 15.1349C12.8365 15.1349 15.1355 12.836 15.1355 10C15.1355 7.164 12.8365 4.86512 10.0004 4.86512C7.16429 4.86512 4.86531 7.164 4.86531 10ZM14.1387 4.66152C14.1386 4.89886 14.2089 5.13089 14.3407 5.32829C14.4725 5.52568 14.6598 5.67956 14.8791 5.77047C15.0983 5.86138 15.3396 5.88524 15.5724 5.83904C15.8052 5.79283 16.0191 5.67862 16.187 5.51087C16.3549 5.34311 16.4693 5.12934 16.5157 4.89658C16.5621 4.66382 16.5384 4.42253 16.4477 4.20322C16.3569 3.98392 16.2032 3.79644 16.0059 3.6645C15.8086 3.53257 15.5766 3.4621 15.3393 3.462H15.3388C15.0206 3.46215 14.7156 3.58856 14.4905 3.81347C14.2655 4.03837 14.139 4.34339 14.1387 4.66152ZM5.96024 18.1398C4.98524 18.0954 4.4553 17.933 4.10312 17.7958C3.63623 17.614 3.30309 17.3975 2.95284 17.0478C2.60258 16.698 2.38578 16.3652 2.20481 15.8983C2.06752 15.5463 1.90512 15.0162 1.86079 14.0413C1.81231 12.9872 1.80263 12.6706 1.80263 10.0001C1.80263 7.3296 1.81311 7.01384 1.86079 5.95888C1.9052 4.98392 2.0688 4.45488 2.20481 4.10184C2.38658 3.63496 2.60306 3.30184 2.95284 2.9516C3.30261 2.60136 3.63543 2.38456 4.10312 2.2036C4.45514 2.06632 4.98524 1.90392 5.96024 1.8596C7.01436 1.81112 7.33101 1.80144 10.0004 1.80144C12.6698 1.80144 12.9868 1.81192 14.0418 1.8596C15.0168 1.904 15.5458 2.0676 15.8989 2.2036C16.3658 2.38456 16.6989 2.60184 17.0492 2.9516C17.3994 3.30136 17.6154 3.63496 17.7972 4.10184C17.9345 4.45384 18.0969 4.98392 18.1412 5.95888C18.1897 7.01384 18.1994 7.3296 18.1994 10.0001C18.1994 12.6706 18.1897 12.9863 18.1412 14.0413C18.0968 15.0162 17.9336 15.5462 17.7972 15.8983C17.6154 16.3652 17.3989 16.6983 17.0492 17.0478C16.6994 17.3972 16.3658 17.614 15.8989 17.7958C15.5469 17.933 15.0168 18.0954 14.0418 18.1398C12.9876 18.1882 12.671 18.1979 10.0004 18.1979C7.32981 18.1979 7.01404 18.1882 5.96024 18.1398ZM5.87744 0.06056C4.81283 0.10904 4.08536 0.27784 3.45006 0.52504C2.79211 0.78032 2.23513 1.1228 1.67855 1.67848C1.12196 2.23416 0.780351 2.792 0.525061 3.44992C0.277851 4.0856 0.109044 4.81264 0.0605624 5.8772C0.0112805 6.94344 0 7.28432 0 10C0 12.7157 0.0112805 13.0566 0.0605624 14.1228C0.109044 15.1874 0.277851 15.9144 0.525061 16.5501C0.780351 17.2076 1.12205 17.7661 1.67855 18.3215C2.23505 18.877 2.79211 19.219 3.45006 19.475C4.08656 19.7222 4.81283 19.891 5.87744 19.9394C6.94428 19.9879 7.28461 20 10.0004 20C12.7162 20 13.0571 19.9887 14.1234 19.9394C15.188 19.891 15.915 19.7222 16.5507 19.475C17.2083 19.219 17.7657 18.8772 18.3223 18.3215C18.8788 17.7658 19.2197 17.2076 19.4757 16.5501C19.723 15.9144 19.8926 15.1874 19.9402 14.1228C19.9887 13.0558 20 12.7157 20 10C20 7.28432 19.9887 6.94344 19.9402 5.8772C19.8918 4.81256 19.723 4.0852 19.4757 3.44992C19.2197 2.7924 18.878 2.23504 18.3223 1.67848C17.7666 1.12192 17.2083 0.78032 16.5515 0.52504C15.915 0.27784 15.188 0.10824 14.1242 0.06056C13.0579 0.01208 12.717 0 10.0012 0C7.28541 0 6.94428 0.01128 5.87744 0.06056Z" fill="#C0C0C0"/>
                        </svg>
                    </a> -->
                    <!-- <a class="footer__social-link _tw" href="" target="_blank">
                        <svg width="24" height="20" viewBox="0 0 24 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M24 2.36308C23.1129 2.76923 22.1658 3.04 21.1708 3.16308C22.1898 2.53538 22.969 1.55077 23.3287 0.369231C22.3816 0.947692 21.3267 1.36615 20.1998 1.6C19.3007 0.615385 18.03 0 16.6034 0C13.8821 0 11.6883 2.26462 11.6883 5.04615C11.6883 5.44 11.7363 5.82154 11.8202 6.20308C7.73227 5.99385 4.11189 3.98769 1.67832 0.923077C1.25874 1.67385 1.00699 2.53538 1.00699 3.45846C1.00699 5.20615 1.87013 6.75692 3.2008 7.66769C2.3976 7.64308 1.63037 7.40923 0.971029 7.04C0.971029 7.06462 0.971029 7.07692 0.971029 7.10154C0.971029 9.55077 2.66134 11.5938 4.91509 12.0492C4.50749 12.16 4.06394 12.2215 3.62038 12.2215C3.30869 12.2215 2.997 12.1846 2.6973 12.1354C3.32068 14.1415 5.14286 15.6062 7.28871 15.6431C5.61039 16.9969 3.48851 17.8092 1.17483 17.8092C0.779221 17.8092 0.383616 17.7846 0 17.7354C2.18182 19.1631 4.75924 20 7.54046 20C16.5914 20 21.5305 12.3077 21.5305 5.63692C21.5305 5.41538 21.5305 5.20615 21.5185 4.98462C22.5015 4.25846 23.3407 3.37231 24 2.36308Z" fill="#C0C0C0"/>
                        </svg>
                    </a> -->
                    <a class="footer__social-link _tg" href="" target="_blank">
                        <svg width="19" height="16" viewBox="0 0 19 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.16486 6.96804C1.16486 6.96804 9.5681 3.45574 12.4825 2.21897C13.5997 1.72431 17.3884 0.141238 17.3884 0.141238C17.3884 0.141238 19.1371 -0.551294 18.9914 1.13064C18.9428 1.82324 18.5542 4.2472 18.1656 6.8691C17.5827 10.5793 16.9513 14.6358 16.9513 14.6358C16.9513 14.6358 16.8541 15.7736 16.0284 15.9715C15.2026 16.1694 13.8425 15.279 13.5997 15.081C13.4054 14.9327 9.95667 12.7065 8.69376 11.6182C8.35373 11.3214 7.96517 10.7278 8.7423 10.0352C10.491 8.40267 12.5796 6.37444 13.8425 5.08824C14.4255 4.49457 15.0083 3.10944 12.5796 4.79137C9.13093 7.2154 5.73078 9.49101 5.73078 9.49101C5.73078 9.49101 4.95358 9.98567 3.49639 9.54044C2.03913 9.09527 0.339054 8.5016 0.339054 8.5016C0.339054 8.5016 -0.826645 7.75957 1.16486 6.96804Z" fill="#C0C0C0" />
                        </svg>
                    </a>
                    <a class="footer__social-link _wa" href="" target="_blank">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.0861 2.90644C15.206 1.0332 12.7057 0.00105288 10.0417 0C4.55293 0 0.0856938 4.44554 0.0834972 9.90984C0.0827922 11.6565 0.541336 13.3615 1.41276 14.8644L0 20L5.27899 18.6219C6.73351 19.4114 8.37108 19.8275 10.0378 19.8282H10.0419C15.5301 19.8282 19.9978 15.3821 20 9.91773C20.0011 7.26967 18.9662 4.77968 17.0861 2.90644ZM10.0419 18.1544H10.0385C8.55329 18.1538 7.0966 17.7567 5.82581 17.0062L5.52355 16.8277L2.39092 17.6455L3.22708 14.6059L3.03023 14.2942C2.20171 12.9827 1.76413 11.4669 1.76478 9.91049C1.76657 5.36881 5.47959 1.67381 10.0451 1.67381C12.2558 1.67465 14.3339 2.53262 15.8966 4.08956C17.4593 5.6465 18.3194 7.71612 18.3186 9.91711C18.3168 14.4592 14.6039 18.1544 10.0419 18.1544ZM14.5819 11.9852C14.333 11.8612 13.1097 11.2621 12.8816 11.1795C12.6536 11.0968 12.4877 11.0555 12.3218 11.3035C12.156 11.5513 11.6791 12.1091 11.5339 12.2744C11.3888 12.4397 11.2436 12.4603 10.9948 12.3364C10.746 12.2124 9.94427 11.9509 8.99388 11.1073C8.25423 10.4508 7.75482 9.63976 7.60968 9.39182C7.46454 9.14391 7.59425 9.00993 7.7188 8.88644C7.83072 8.77551 7.96761 8.59722 8.09203 8.45263C8.21643 8.30806 8.25792 8.20471 8.34084 8.03946C8.4238 7.87419 8.38231 7.72957 8.3201 7.60562C8.25792 7.48168 7.76027 6.26282 7.55292 5.76702C7.35097 5.28415 7.14579 5.34948 6.99306 5.3419C6.84809 5.33472 6.68204 5.3332 6.51619 5.3332C6.35033 5.3332 6.08075 5.39516 5.85268 5.64308C5.62462 5.89099 4.98183 6.49008 4.98183 7.70891C4.98183 8.92775 5.8734 10.1053 5.99782 10.2705C6.12224 10.4358 7.75235 12.937 10.2484 14.0097C10.8421 14.2648 11.3055 14.4172 11.6669 14.5313C12.2629 14.7197 12.8054 14.6931 13.2341 14.6294C13.7122 14.5583 14.7062 14.0304 14.9136 13.4519C15.121 12.8735 15.121 12.3777 15.0588 12.2744C14.9966 12.1711 14.8307 12.1091 14.5819 11.9852Z" fill="#C0C0C0" />
                        </svg>
                    </a>
                </div>

                <a class="footer__lk button-red" href="">
                    <img class="footer__lk-icon" src="img/footer/user.svg" alt="user-icon">
                    Личный кабинет
                </a>
            </div>

            <div class="footer__bottom-items">
                <div class="footer__logo"><img src="img/footer/logo.svg" alt="logo"></div>

                <div class="footer__search">
                    <input class="footer__search-input" type="text" placeholder="Поиск по сайту">
                    <button class="footer__search-button" type="submit"></button>
                </div>

                <div class="footer__box">
                    <div class="footer__copy">© 2000 — 2021 ИНСТИТУТ МТИ ВСЕ ПРАВА ЗАЩИЩЕНЫ</div>
                    <a class="footer__agreement" href="">ПОЛЬЗОВАТЕЛЬСКОЕ СОГЛАШЕНИЕ</a>
                </div>
            </div>

        </div>
    </div>
</footer>
		
	</div>


	<!-- <div class="fixed">
		<a href="#popup-reg" class="fixed__button button">Отправить заявку</a>
	</div> -->

	<div>
		
		<!-- reg popup -->
<div id="bg_popup" class="bg_popup">
  <div class="popup popup-reg popup-reg-purple" id="popup-registration">
    <div class=""></div>
    <div class="popup__box">
      
<form action="<?= $action ?>&form=registration" class="form ">
    <div class="form__wrapper">
        
        <h3 class="form__title title ">Подать заявку на обучение</h3>
        

        

        <div class="form__items">
            
            
<div class="form__item form__item_text ">
    
    <input name="name" type="text" placeholder="Имя" class="form__input form__name"   required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_text ">
    
    <input name="phone" type="text" placeholder="Телефон" class="form__input form__tel tel"   required value="">
    
</div><!-- form__item -->

            

            

            

            

            
            <div class="form__more">
                <label class="form__footer ">
                    <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                        <div class="form__footer-checkbox-icon lazy"></div>
                    </div>
                    <div class="form__footer-text">Отправляя данную форму, вы&nbsp;соглашаетесь с&nbsp;<a class="fancybox-privacy-link" href="https://synergy.ru/lp/_chunk/privacy.php?lang=ru">политикой обработки персональных данных</a> и&nbsp;на&nbsp;получение рассылок</div>
                </label>
            </div>
            
            <div class="form__item form__item_button"><button class="form__button button-red" type="submit">Отправить</button></div>
        </div><!-- form__items -->
        
        
    </div>
</form>

    </div>
  </div>
</div>


<!-- code popup orange -->
<div id="" class="bg_popup">
  <div class="popup popup-auth popup-reg-auth popup-reg-orange" id="popup-code">
    <a class="popup__back" href="">проверить данные</a>
    <div class=""></div>
    <div class="popup__box">
      
<form action="<?= $action ?>&form=sms" class="form ">
    <div class="form__wrapper">
        
        <h3 class="form__title title ">Введите код из СМС</h3>
        

        

        <div class="form__items">
            

            

            

            

            

            
            <div class="form__item form__item_button"><button class="form__button button-red" type="submit">Отправить</button></div>
        </div><!-- form__items -->
        
        
    </div>
</form>

    </div>
  </div>
</div>


<!-- reg thanks popup -->
<div id="" class="bg_popup">
  <div class="popup popup-thanks popup-reg-thanks popup-reg-purple" id="popup-registration-thanks">
    <div class=""></div>
    <div class="popup__box">
      <div class="popup__title title">
        Спасибо!
      </div>
      <div class="popup__text">Ваша заявка принята. В ближайшее время наши специалисты приемной комиссии свяжутся с вами!</div>
      <img class="popup__check" src="img/popups/check-popup.svg" alt="check">
    </div>
  </div>
</div>


<!-- consultation popup -->
<div id="" class="bg_popup">
  <div class="popup popup-cons popup-reg-orange" id="popup-consultation">
    <div class=""></div>
    <div class="popup__box">
      
<form action="<?= $action ?>&form=consultation" class="form ">
    <div class="form__wrapper">
        
        <h3 class="form__title title ">Получить консультацию специалиста</h3>
        

        

        <div class="form__items">
            
            
<div class="form__item form__item_text ">
    
    <input name="name" type="text" placeholder="Имя" class="form__input form__name"   required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_text ">
    
    <input name="phone" type="text" placeholder="Телефон" class="form__input form__tel tel"   required value="">
    
</div><!-- form__item -->

            

            

            

            

            
            <div class="form__more">
                <label class="form__footer ">
                    <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                        <div class="form__footer-checkbox-icon lazy"></div>
                    </div>
                    <div class="form__footer-text">Отправляя данную форму, вы&nbsp;соглашаетесь с&nbsp;<a class="fancybox-privacy-link" href="https://synergy.ru/lp/_chunk/privacy.php?lang=ru">политикой обработки персональных данных</a> и&nbsp;на&nbsp;получение рассылок</div>
                </label>
            </div>
            
            <div class="form__item form__item_button"><button class="form__button button-red" type="submit">Отправить</button></div>
        </div><!-- form__items -->
        
        
    </div>
</form>

    </div>
  </div>
</div>

<!-- popup code purple -->
<div id="" class="bg_popup">
  <div class="popup popup-auth popup-reg-auth popup-reg-purple" id="popup-registration-auth">
    <a class="popup__back" href="">проверить данные</a>
    <div class=""></div>
    <div class="popup__box">
      
<form action="<?= $action ?>&form=sms" class="form ">
    <div class="form__wrapper">
        
        <h3 class="form__title title ">Введите код из СМС</h3>
        

        

        <div class="form__items">
            

            

            
            
<div class="form__item form__item_email ">
    
    <input name="email" type="email" placeholder="Email" class="form__input form__name"   required value="">
    
</div><!-- form__item -->

            

            

            

            
            <div class="form__item form__item_button"><button class="form__button button-red" type="submit">Отправить</button></div>
        </div><!-- form__items -->
        
        
    </div>
</form>

    </div>
  </div>
</div>


<!-- consultation thanks popup -->
<div id="" class="bg_popup">
  <div class="popup popup-thanks popup-cons-thanks popup-reg-orange" id="popup-consultation-thanks">
    <div class=""></div>
    <div class="popup__box">
      <div class="popup__title">
        Спасибо!
      </div>
      <div class="popup__text">Ваша заявка принята. В ближайшее время наши специалисты приемной комиссии свяжутся с вами!</div>
      <img class="popup__check" src="img/popups/check-popup.svg" alt="check">
    </div>
  </div>
</div>


<!-- callBack popup -->
<div id="" class="bg_popup">
  <div class="popup popup-call popup-reg-green" id="popup-call">
    <div class=""></div>
    <div class="popup__box">
      
<form action="<?= $action ?>&form=consultation" class="form ">
    <div class="form__wrapper">
        
        <h3 class="form__title title ">Заказать обратный звонок</h3>
        

        

        <div class="form__items">
            
            
<div class="form__item form__item_text ">
    
    <input name="name" type="text" placeholder="Имя" class="form__input form__name"   required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_text ">
    
    <input name="phone" type="text" placeholder="Телефон" class="form__input form__tel tel"   required value="">
    
</div><!-- form__item -->

            

            

            

            

            
            <div class="form__more">
                <label class="form__footer ">
                    <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                        <div class="form__footer-checkbox-icon lazy"></div>
                    </div>
                    <div class="form__footer-text">Отправляя данную форму, вы&nbsp;соглашаетесь с&nbsp;<a class="fancybox-privacy-link" href="https://synergy.ru/lp/_chunk/privacy.php?lang=ru">политикой обработки персональных данных</a> и&nbsp;на&nbsp;получение рассылок</div>
                </label>
            </div>
            
            <div class="form__item form__item_button"><button class="form__button button-red" type="submit">Отправить</button></div>
        </div><!-- form__items -->
        
        
    </div>
</form>

    </div>
  </div>
</div>


<!-- faq popup -->
<div class="bg_popup">
  <div class="popup popup-call popup-reg-green" id="popup-faq">
    <div class=""></div>
    <div class="popup__box">
      
<form action="<?= $action ?>&form=faq" class="form ">
    <div class="form__wrapper">
        
        <h3 class="form__title title ">Задайте свой вопрос</h3>
        

        

        <div class="form__items">
            
            
<div class="form__item form__item_text ">
    
    <input name="name" type="text" placeholder="Имя" class="form__input form__name"   required value="">
    
</div><!-- form__item -->

            

            

            
            
<div class="form__item form__item_email ">
    
    <input name="email" type="email" placeholder="Email" class="form__input form__name"   required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_textarea ">
    
    <textarea name="textarea" placeholder="Ваш вопрос" class="form__input form__input_textarea" required></textarea>
    
</div><!-- form__item -->

            

            

            
            <div class="form__more">
                <label class="form__footer ">
                    <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                        <div class="form__footer-checkbox-icon lazy"></div>
                    </div>
                    <div class="form__footer-text">Отправляя данную форму, вы&nbsp;соглашаетесь с&nbsp;<a class="fancybox-privacy-link" href="https://synergy.ru/lp/_chunk/privacy.php?lang=ru">политикой обработки персональных данных</a> и&nbsp;на&nbsp;получение рассылок</div>
                </label>
            </div>
            
            <div class="form__item form__item_button"><button class="form__button button-red" type="submit">Отправить</button></div>
        </div><!-- form__items -->
        
        
    </div>
</form>

    </div>
  </div>
</div>

<!-- codePicture popup -->
<div id="codePicture" class="bg_popup">
  <div class="popup popup-codePicture" id="popup-codePicture">
    <div class=""></div>
    <div class="popup__box">
      <form action="<?= $action ?>&form=codePicture" class="form">
        <div class="form__wrapper">
          <h3 class="form__title title">Ведите код с картинки</h3>
          <div class="form__codePicture"><img src="img/popups/codePicture.png" alt=""></div>
          <div class="form__items">
            <div class="form__item form__item_text ">
              <input name="text" type="text" placeholder="Введите код сюда" class="form__input" required value="">
            </div>
            <div class="form__item form__item_button">
              <button class="form__button form__button-update button-red">Обновить</button>
              <button class="form__button button-red" type="submit">Отправить</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
		
		<a href="http://sydi.ru" style="display: none">Synergy Digital</a>
	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" defer></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" defer="defer"></script>
	<script src="libs/jquery.inputmask.js"></script>
	<script src="js/script.js"></script>

	
	
</body>

</html>