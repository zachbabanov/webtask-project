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
                        <a class="navbar-brand" href="index.php">
                            <a class="nav-link" href="index.php#home">
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
                                    <a class="nav-link" href="index.php#home">Home
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php#about">About
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php#products">Products
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php#team">Team
                                    </a>
                                </li>
                            </ul>
                            <div class="contact-us-button d-lg-none">
                                <a href="index.php#contact">
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
                    <a href="index.php#contact">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- ***** Хэдер ***** -->

<!-- ***** Вступление ***** -->
<section class="welcome_area clearfix" id="join">
    <section class="footer-contact-area-1 section_padding_200 clearfix" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!-- Заголовок -->
                    <div class="section-heading-1">
                        <h2>Вступай в сообщество!</h2>
                        <h3><img src="img/bg-img/community-img.png" alt=""></h3>
                        <div class="line-shape"></div>
                    </div>
                    <div class="footer-text-1">
                        <p></p>
                    </div>
                    <div class="address-text-1">
                        <p><span>Address:</span> Traditori, Pl. de las Navas, PR-1, 7, 08004 Barcelona, Spain</p>
                    </div>
                    <div class="phone-text-1">
                        <p><span>Phone:</span> +7 988 999 88 88</p>
                    </div>
                    <div class="email-text-1">
                        <p><span>Email:</span> community@80085.games</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- Форма-->
                    <div class="contact_from">
                        <form action="community-contact.php" method="post">
                            <!-- Сообщение -->
                            <div class="contact_input_area">
                                <div class="row">
                                    <!-- Зона ввода -->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">
                                            </label>
                                            <input type="text" class="form-control" name="community-name" id="name" placeholder="Имя" required>
                                        </div>
                                    </div>
                                    <!-- Зона ввода -->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="email">
                                                <input type="email" class="form-control" name="email" id="community-email" placeholder="e-mail" required>
                                            </label>
                                            </div>
                                    </div>
                                    <!-- Зона ввода -->
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="message">
                                                <textarea name="message" class="form-control" id="community-message" cols="30" rows="4" placeholder="Сообщение" required></textarea>
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
</section>

<!-- ***** Конец вступления ***** -->

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
                <li><a href="index.php#about">About</a></li>
                <li><a href="https://opensource.org/licenses/MIT">Terms &amp; Conditions</a></li>
                <li><a href="https://opensource.org/licenses/MIT">Privacy Policy</a></li>
                <li><a href="index.php#contact">Contact</a></li>
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

