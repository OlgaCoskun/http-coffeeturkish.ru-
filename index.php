<?php
  //Установка локали и даты
  setlocale(LC_ALL, "russian");
  $day = strftime('%d');
  $mon = strftime('%B');
  $mon = iconv('windows-1251', 'utf-8', $mon);
  $year = strftime('%Y');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Турецкий кофе Mehmet Efendi из Стамбула</title>

    <meta name="keywords" content="купить кофе, кофе в зёрнах, кофе молотый, кофе турецкий, Mehmet Efendi, купить турецкий кофе">
    <meta name="description" content="Турецкий кофе в зёрнах Mehmet Efendi из Стамбула">

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/favikon.ico" type="image/x-icon">

    <link rel="apple-touch-icon" sizes="57x57" href="img/57x57.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/72x72.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/144x144.png">
    <link rel="apple-touch-icon" sizes="60x560" href="img/60x60.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/120x120.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/76x76.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/152x152.png">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="container" id="first">
        <div id="zag" class="row">
            <div id="logo" class="col-sm-2 col-md-2">
                <a href="/">
                    <img src="img/logo.png" alt="logo">
                </a>
            </div>
            <div class="col-sm-10 col-md-10">
                <h1>Закажите турецкий кофе <span>Mehmet Efendi</span></h1>
                <em><a href="tel:+74952411272" id="telefon" class="sog"><i class="fa fa-phone" aria-hidden="true"></i> +7 (495) 241-12-72</a></em>
            </div>
        </div>
        <section id="bg">
            <div class="container">
                <div class="row"></div>
            </div>
            <div class="container" id="form">
                <div class="row" id="hotite">
                    <div class="col-sm-12 col-md-12">
                        <span>Хотите кофе ?</span>
                    </div>
                </div>
                <div class="row" id="pole3">
                    <form method="post" class="form-horizontal" role="form">
                        <div class="form-group" class="pole">
                            <div class="col-xs-6 col-sm-4">
                                <input name="name" type="text" class="form-control" id="inputName" placeholder="Ваше имя" required />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-6 col-sm-4">
                                <input name="phone" type="text" class="form-control" id="Phone" placeholder="Ваш телефон" required />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-6 col-sm-4">
                                <button type="submit" class="btn btn-default" id="knopka">Хочу кофе!</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
    <div class="container" id="why">
        <div class="row" id="zag2">
            <div class="col-sm-12 col-md-12">
                <h2>Почему Вам стоит заказать у нас кофе прямо сейчас ?</h2>
            </div>
        </div>
        <div id="text" class="row">
            <div class="col-sm-4 col-md-4 col-lg-4">
                <img src="img/kofemix.png" alt="" class="ris">
                <p>Мы доставим Вам кофе из самой кофейни, где его обжаривают. Поэтому будьте уверены, что настоящий аромат кофе взбодрит Вас еще до его приготовления.
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4">
                <img src="img/air.png" alt="" class="ris">
                <p>Доставка осуществляется авиа транспортом, а значит - в самые кратчайшие сроки.
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4">
                <img src="img/kofe.png" alt="" class="ris">
                <p>Кофе марки Mehmet Efendi - это арабика!
            </div>
        </div>
    </div>
    <div class="container" id="zerno">
        <div class="row" id="pred">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <h2>Что мы предлагаем ?</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6" id="cen">
                <h3 class="text2">Кофе молотый</h3>
                <img src="img/kofe1.png" alt="" class="ris2">
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6" id="cen2">
                <h3 class="text2">Кофе в зёрнах</h3>
                <img src="img/kofe2.png" alt="" class="ris2">
            </div>
        </div>
    </div>

    <footer>
        <div class="container-fluid" id="fl">
        <div class="container" id="podval">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-5 col-lg-3" class="f">
                    <a href="price.html" class="sog">Цены</a>
                    <br>
                    <a href="pravila.html" class="sog">Правила оказания услуг и оплата</a>
                    <br>
                    <a href="politika_konfidencialnosti.html" class="sog">Политика конфиденциальности</a>
                    <br>
                    <a href="pravila_polzov_saitom.html" class="sog">Правила пользования сайтом</a>
                    <br>
                    <p class="sog">Дизайн и верстка - Olga Coşkun
                    <p class="sog">Сделано в cubmaster
                    <p class="sog">Мы в Facebook, Вконтакте
                </div>
                <div class="col-xs-12 col-sm-6 col-md-5 col-md-offset-2 col-lg-5 col-lg-offset-4" class="f">
                    <a href="about_us.html" class="sog">О нас</a>
                    <p class="sog">Наши контакты:
                    <p class="sog"><i class="fa fa-phone" aria-hidden="true"></i> +7 (495) 241-12-72
                    <p class="sog"><i class="fa fa-map-marker" aria-hidden="true"></i> 129226, г. Москва, пр-кт Мира, д. 131, оф. 3
                    <p class="sog"><i class="fa fa-envelope-o" aria-hidden="true"></i>
                    <a href="mailto:zakaz@coffeeturkish.ru" class="sog">zakaz@coffeeturkish.ru</a>
                    <p class="sog">ООО “Эксперт Юнион”
                    <p class="sog"><i class="fa fa-copyright" aria-hidden="true"></i> ES. Все права защищены. <?=$year?>

                </div>
            </div>
        </div>
        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script src="common.js"></script>
	</footer>
</body>
</html>