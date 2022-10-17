<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Титр -->
    <title>80085_Games</title>

    <!-- Иконка -->
    <link rel="icon" href="img/core-img/favicon.png">

    <!-- Стили -->
    <link href="style.css" rel="stylesheet">

    <!-- Импорт меню для альтернативных разрешений -->
    <link href="css/responsive.css" rel="stylesheet">

</head>

<body>
    <!-- Загрузчик -->
    <div id="preloader">
        <div class="colorlib-load">
        </div>
    </div>

    <!-- ***** Хэдер ***** -->
    <header class="header_area animated">
        <div class="container-fluid">
            <div class="row align-items-center">
                <!-- Меню -->
                <div class="col-12 col-lg-10">
                    <div class="menu_area">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <!-- Лого -->
                            <a class="navbar-brand" href="#">
                                <a class="nav-link" href="#home">
                                    <img src="img/bg-img/logo.png" width="297" height="60" href="#" alt="">
                                </a>
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ca-navbar" aria-controls="ca-navbar" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon">
                                </span>
                            </button>
                            <!-- Ссылки -->
                            <div class="collapse navbar-collapse" id="ca-navbar">
                                <ul class="navbar-nav ml-auto" id="nav">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="#home">Home
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#about">About
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#products">Products
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#team">Team
                                        </a>
                                    </li>
                                </ul>
                                <div class="contact-us-button d-lg-none">
                                    <a href="#contact">
                                        Contact Us
                                    </a>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
                <!-- Контакты -->
                <div class="col-12 col-lg-2">
                    <div class="contact-us-button d-none d-lg-block">
                        <a href="#contact">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Хэдер ***** -->

    <!-- ***** Вступление ***** -->
    <section class="welcome_area clearfix" id="home">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 col-md">
                    <div class="welcome-heading">
                        <h2>
                            VR / AR - разработка
                        </h2>
                        <h3><img src="img/bg-img/back-img.png" height="900" width="900" alt=""></h3>
                        <p>Добро пожаловать в эру Метавселенной! Настоящее и будущее – за VR и AR. </p>
                        <p>Вы можете воплотить ваш проект с нашей командой опытных Metaverse-разработчиков.</p>
                    </div>
                    <div class="get-start-area">
                        <!-- Форма -->
                        <form action="mailing.php" method="post" class="form-inline">
                            <label>
                                <input type="email" class="form-control email" name="mailing-email" placeholder="name@company.com">
                            </label>
                            <input type="submit" class="submit" value="Sign Up">
                        </form>
                        <!-- Форма -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Красивая картиночка -->
        <div class="welcome-thumb wow fadeInDown" data-wow-delay="0.5s">
            <img src="img/bg-img/welcome-img.png" alt="">
        </div>
    </section>
    <!-- ***** Конец вступления ***** -->


    <!-- ***** О работе ***** -->
    <section class="special-area bg-white section_padding_100" id="about">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Описание -->
                    <div class="section-heading text-center">
                        <h2>Как мы работаем</h2>
                        <p>Получаем функционал сразу, и можем протестировать его на ранних стадиях работы.
                            Отбираем только лучшие варианты механик и эффективных интерфейсов!
                            Быстрое согласование с вашим Product Owner, экономия времени и денег пруф-контент</p>
                        <div class="line-shape"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Шлемы -->
                <div class="col-12 col-md-4">
                    <div class="single-about text-center wow fadeInUp" data-wow-delay="0.2s">
                        <div class="single-icon">
                            <img src="img/bg-img/allhead-img.png">
                        </div>
                        <h4>Под все шлемы, требующие комьютера</h4>
                        <p>HTC Vive Pro (eye), Oculus Rift S, Valve Index, Pimax, Varjo и многие другие. Возможно внедрение в проект поддержи дополнительных контроллеров (ноги, пояс, имитация оружия, синхронизация с физическими симуляторами, использование трекинга глаз).</p>
                    </div>
                </div>
                <!-- Проекты -->
                <div class="col-12 col-md-4">
                    <div class="single-about text-center wow fadeInUp" data-wow-delay="0.4s">
                        <div class="single-icon">
                            <img src="img/bg-img/allsys-img.png">
                        </div>
                        <h4>Мы делаем
                            AR-проекты</h4>
                        <p>Приложения для смартфонов Apple (технология ARCore) и Android (ARkit). Мы разработаем для вас как приложения так и игры с дополненной реальностью.

                            AR-приложения для Microsoft HoloLens 2, Magic Leap, Nreal, Snapchat Spectacles и дургих. От промышленных приложений до развлекательных</p>
                    </div>
                </div>
                <!-- Продукты -->
                <div class="col-12 col-md-4">
                    <div class="single-about text-center wow fadeInUp" data-wow-delay="0.6s">
                        <div class="single-icon">
                            <img src="img/bg-img/anyprdct-img.gif">
                        </div>
                        <h4>Мы разработаем для вас любой продукт</h4>
                        <p>Если же у вас есть готовое приложение, мы поможем улучшить UX (user experience – пользовательский опыт) и исправим UI (user interfaces — пользовательские интерфейсы)– проведем аудит и консультации, дадим рекомендации или же просто переделаем всё нашими силами</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Окулус -->
        <div class="special_description_area mt-150">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="special_description_img">
                            <img src="img/bg-img/special.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-5 ml-xl-auto">
                        <div class="special_description_content">
                            <h2>Разработка для Meta (Oculus) Quest 2</h2>
                            <p>Разработаем любые симуляторы, приложения и игры. Также мы можем создать приложения с дополненной реальностью под Quest 2 по технологии Pass Through.

                                Мы имеем богатый опыт по созданию приложений виртуальной реальности с использованием трекинга рук (hand tracking), т.е. без использования контроллеров-джойстиков. Вы просто взаимодействуете с VR своими руками.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Конец работы ***** -->

    <!-- ***** Проекты ***** -->
    <section class="awesome-feature-area bg-white section_padding_0_50 clearfix" id="products">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Хэдинг -->
                    <div class="section-heading text-center">
                        <h2>Наши работы</h2>
                        <div class="line-shape">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Первый проект -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-project">
                        <img src="img/bg-img/med-img.png" alt="">
                        <h5 align="center">Медицинский интерфейс для работы со снимками компьютерной томографии</h5>
                    </div>
                </div>
                <!-- Второй проект -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-project">
                        <img src="img/bg-img/touchmatch-img.png" alt="">
                        <h5 align="center">Touch-to-Match</h5>
                        <p>Вы можете прекрасно провести время, играя в нашу VR/AR-игру.</p>
                    </div>
                </div>
                <!-- Третий проект -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-project">
                        <img src="img/bg-img/train-img.png" alt="">
                        <h5 align="center">Обучающий тренажер локомотивных бригад</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Конец проектов ***** -->

    <!-- ***** Объявление ***** -->
    <section class="community-note section_padding_50 clearfix">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="community-note-desc">
                        <h2>Вступай в сообщество бета-тестеров наших проектов!</h2>
                        <p>Дружный коллектив, новый опыт, интересные открытия</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="join-button wow bounceInDown" data-wow-delay="0.5s">
                        <a href="community.php">Join!</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Конец объявления ***** -->

    <!-- ***** Команда ***** -->
    <section class="our-Team-area bg-white section_padding_100_50 clearfix" id="team">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <!-- Heading Text  -->
                    <div class="section-heading">
                        <h2>Наша команда</h2>
                        <div class="line-shape"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="single-team-member">
                        <div class="member-image">
                            <img src="img/team-img/team-1.png" alt="">
                            <div class="team-hover-effects">
                                <div class="team-social-icon">
                                    <a href="https://facebook.com" target="_blank">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a>
                                    <a href="https://twitter.com" target="_blank">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </a>
                                    <a href="https://www.google.com" target="_blank">
                                        <i class="fa fa-google-plus" aria-hidden="true"></i>
                                    </a>
                                    <a href="https://www.instagram.com/" target="_blank">
                                        <i class="fa fa-instagram" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="member-text">
                            <h4>Дарлин Роб</h4>
                            <p>Связи с общественностью</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="single-team-member">
                        <div class="member-image">
                            <img src="img/team-img/team-2.png" alt="">
                            <div class="team-hover-effects">
                                <div class="team-social-icon">
                                    <a href="https://facebook.com" target="_blank">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a>
                                    <a href="https://twitter.com" target="_blank">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </a>
                                    <a href="https://www.google.com" target="_blank">
                                        <i class="fa fa-google-plus" aria-hidden="true"></i>
                                    </a>
                                    <a href="https://www.instagram.com/" target="_blank">
                                        <i class="fa fa-instagram" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="member-text">
                            <h4>Мэт Мерфи</h4>
                            <p>Lead-Research</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="single-team-member">
                        <div class="member-image">
                            <img src="img/team-img/team-3.png" alt="">
                            <div class="team-hover-effects">
                                <div class="team-social-icon">
                                    <a href="https://facebook.com" target="_blank">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a>
                                    <a href="https://twitter.com" target="_blank">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </a>
                                    <a href="https://www.google.com" target="_blank">
                                        <i class="fa fa-google-plus" aria-hidden="true"></i>
                                    </a>
                                    <a href="https://www.instagram.com/" target="_blank">
                                        <i class="fa fa-instagram" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="member-text">
                            <h4>Коди Фишер</h4>
                            <p>CEO</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="single-team-member">
                        <div class="member-image">
                            <img src="img/team-img/team-4.png" alt="">
                            <div class="team-hover-effects">
                                <div class="team-social-icon">
                                    <a href="https://facebook.com" target="_blank">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a>
                                    <a href="https://twitter.com" target="_blank">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </a>
                                    <a href="https://www.google.com" target="_blank">
                                        <i class="fa fa-google-plus" aria-hidden="true"></i>
                                    </a>
                                    <a href="https://www.instagram.com/" target="_blank">
                                        <i class="fa fa-instagram" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="member-text">
                            <h4>Джейн Купер</h4>
                            <p>Design</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- *****  Команда ***** -->

    <!-- ***** Контакты ***** -->
    <section class="footer-contact-area section_padding_100 clearfix" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!-- Заголовок -->
                    <div class="section-heading">
                        <h2>Оставайся на связи!</h2>
                        <div class="line-shape"></div>
                    </div>
                    <div class="footer-text">
                        <p>Если вы заказчик – пишите и звоните нам, мы проконсультируем вас бесплатно. Если вы специалист и ищите работу – напишите нам, мы вам ответим. Если вы инвестор – нам есть что вам предложить, давайте общаться.</p>
                    </div>
                    <div class="address-text">
                        <p><span>Address:</span> Traditori, Pl. de las Navas, PR-1, 7, 08004 Barcelona, Spain</p>
                    </div>
                    <div class="phone-text">
                        <p><span>Phone:</span> +7 977 999 77 77</p>
                    </div>
                    <div class="email-text">
                        <p><span>Email:</span> games@80085.games</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- Форма-->
                    <div class="contact_from">
                        <form action="contact.php" method="post">
                            <!-- Сообщение -->
                            <div class="contact_input_area">
                                <div class="row">
                                    <!-- Зона ввода -->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">
                                            </label>
                                            <input type="text" class="form-control" name="contact-name" id="name" placeholder="Имя" required>
                                        </div>
                                    </div>
                                    <!-- Зона ввода -->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="email">
                                            </label>
                                            <input type="email" class="form-control" name="contact-email" id="email" placeholder="e-mail" required>
                                        </div>
                                    </div>
                                    <!-- Зона ввода -->
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="message">
                                                <textarea name="message" class="form-control" id="contact-message" cols="30" rows="4" placeholder="Сообщение" required></textarea>
                                            </label>
                                            </div>
                                    </div>
                                    <!-- Зона ввода -->
                                    <div class="col-12">
                                        <button type="submit" class="btn submit-btn">Send Now</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Конец сообщения -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Контакты ***** -->

    <!-- ***** Футер ***** -->
    <footer class="footer-social-icon text-center section_padding_70 clearfix">
        <!-- Лого -->
        <div class="footer-text">
            <img src="img/bg-img/logo.png" width="297" height="60" href="#" alt="">
        </div>
        <!-- Соц сети -->
        <div class="footer-social-icon">
            <a href="https://www.facebook.com/" target="_blank">
                <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="https://www.twitter.com/" target="_blank">
                <i class="active fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="https://www.instagram.com/" target="_blank">
                <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
            <a href="https://www.google.com/" target="_blank">
                <i class="fa fa-google-plus" aria-hidden="true"></i>
            </a>
        </div>
        <div class="footer-menu">
            <nav>
                <ul>
                    <li><a href="#about">About</a></li>
                    <li><a href="https://opensource.org/licenses/MIT">Terms &amp; Conditions</a></li>
                    <li><a href="https://opensource.org/licenses/MIT">Privacy Policy</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
        <!-- Футер -->
    </footer>

    <!-- Плагины и анимации -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/footer-reveal.min.js"></script>
    <script src="js/active.js"></script>
    <!-- Честно позаимствованы с просторов интернета -->

</body>

</html>
