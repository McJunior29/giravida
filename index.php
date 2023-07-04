<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

<!-- carousel -->
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>GiraVida - Plataforma Digital</title>

    <!-- Favicon -->
    <link rel="icon" href="img/bg-img/logo.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>
   <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- Preloader -->
    <!-- Header Area Start -->
    <header class="header-area">
        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between" id="alimeNav">

                        <!-- Logo -->
                        <a class="nav-brand logo" href="./index.html"><img src="img/bg-img/logo.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- Menu Close Button -->   
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul id="nav">
                                    <li class="active"><a href="#cartas">Cartas</a></li>
                                    <li><a href="./about.php">Sobre</a></li>
                                     <li><a href="#par">Apoiadores</a></li>
                                    <?php
                                        if(!empty($_SESSION['nome_user'])){
                                            echo"<li><a href='logado.php'>Escreva uma carta</a></li>".
                                                "<li><a href='funcional/controle/sair.php'>Sair</a></li>";
                                        }
                                    ?>
                                    <?php
                                        if(empty($_SESSION['nome_user'])){
                                            echo'<li><a class="nav-link" data-toggle="modal" data-target="#myModal">Login</a></li>';
                                        }
                                    ?>
                                    <li class="nav-item">
                                    <!-- <a class="nav-link" data-toggle="modal" data-target="#myModal">Login</a> -->
                                </li>
                                </ul>

                                <!-- Search Icon -->
                                <!-- <div class="search-icon" data-toggle="modal" data-target="#searchModal"><i class="ti-search"></i></div> -->
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->
    <!-- Welcome Area Start -->
    <section class="welcome-area" >
            <!-- Single Slide -->
            <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(img/bg-img/campo.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <!-- Welcome Text -->
                        <div class="col-12 col-lg-8">
                            <div class="welcome-text">
                                <h2 class="animated bounceInLeft" data-animation="bounceInDown" data-delay="900ms">Sejamos<br> eternamente<br>como um <br>girassol</h2>
                                <p class="animated bounceInRight" data-animation="bounceInDown" data-delay="500ms">De costras para o escuro, e de frente para a Luz</p>
                                <div class="hero-btn-group" data-animation="bounceInDown" data-delay="100ms">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- Welcome Area End -->
    <div class="animation-area">
        <ul class="box-area">
            <li><img src="img/bg-img/gira.png"></li>
            <li><img src="img/bg-img/gira.png"></li>
            <li><img src="img/bg-img/gira.png"></li>
            <li><img src="img/bg-img/gira.png"></li>
            <li><img src="img/bg-img/gira.png"></li>
            <li><img src="img/bg-img/gira.png"></li>
            <li><img src="img/bg-img/gira.png"></li>
            <li><img src="img/bg-img/gira.png"></li>
            <li><img src="img/bg-img/gira.png"></li>
            <li><img src="img/bg-img/gira.png"></li>
            <li><img src="img/bg-img/gira.png"></li>
        </ul>
    <!-- Gallery Area Start -->
    <div class=" alime-portfolio-area section-padding-80 clearfix" id="cartas">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Projects Menu -->
                    <div class="alime-projects-menu">
                        <div class="portfolio-menu text-center">
                            <button class="btn active" data-filter="*">Tudo</button>
                            <button class="btn" data-filter=".insta">Instagram</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row alime-portfolio">
                <!-- Single Gallery Item -->

                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item insta mb-30 wow fadeInUp" data-wow-delay="500ms">
                    <div class="single-portfolio-content">
                        <img src="img/bg-img/carta1.jpg" alt="">
                        <div class="hover-content">
                            <a href="img/bg-img/carta1.jpg" class="portfolio-img">+</a>
                        </div>
                    </div>
                </div>

                <!-- Single Gallery Item -->

                
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item outros mb-30 wow fadeInUp" data-wow-delay="300ms">
                    <div class="single-portfolio-content">
                        <img src="img/bg-img/c19.jpg" alt="">
                        <div class="hover-content">
                            <a href="img/bg-img/c19.jpg" class="portfolio-img">+</a>
                        </div>
                    </div>
                </div>
                   <div class="col-12 col-sm-6 col-lg-3 single_gallery_item insta mb-30 wow fadeInUp" data-wow-delay="500ms">
                    <div class="single-portfolio-content">
                        <img src="img/bg-img/c15.jpg" alt="">
                        <div class="hover-content">
                            <a href="img/bg-img/c15.jpg" class="portfolio-img">+</a>
                        </div>
                    </div>
                </div>
                 <div class="col-12 col-sm-6 col-lg-3 single_gallery_item  mb-30 wow fadeInUp" data-wow-delay="300ms">
                    <div class="single-portfolio-content">
                        <img src="img/bg-img/c3.jpg" alt="">
                        <div class="hover-content">
                            <a href="img/bg-img/c3.jpg" class="portfolio-img">+</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item cartao mb-30 wow fadeInUp" data-wow-delay="300ms">
                    <div class="single-portfolio-content">
                        <img src="img/bg-img/carta2.jpg" alt="">
                        <div class="hover-content">
                            <a href="img/bg-img/carta2.jpg" class="portfolio-img">+</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item insta mb-30 wow fadeInUp" data-wow-delay="500ms">
                    <div class="single-portfolio-content">
                        <img src="img/bg-img/c11.jpg" alt="">
                        <div class="hover-content">
                            <a href="img/bg-img/c11.jpg" class="portfolio-img">+</a>
                        </div>
                    </div>
                </div>
                <!-- Single Gallery Item -->
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item outros mb-30 wow fadeInUp" data-wow-delay="300ms">
                    <div class="single-portfolio-content">
                        <img src="img/bg-img/carta5.jpg" alt="">
                        <div class="hover-content">
                            <a href="img/bg-img/carta5.jpg" class="portfolio-img">+</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item insta mb-30 wow fadeInUp" data-wow-delay="300ms">
                    <div class="single-portfolio-content">
                        <img src="img/bg-img/c14.jpg" alt="">
                        <div class="hover-content">
                            <a href="img/bg-img/c14.jpg" class="portfolio-img">+</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item outros mb-30 wow fadeInUp" data-wow-delay="300ms">
                    <div class="single-portfolio-content">
                        <img src="img/bg-img/c2.jpg" alt="">
                        <div class="hover-content">
                            <a href="img/bg-img/c2.jpg" class="portfolio-img">+</a>
                        </div>
                    </div>
                </div>

                <!-- Single Gallery Item -->
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item logomarca mb-30 wow fadeInUp" data-wow-delay="300ms">
                    <div class="single-portfolio-content">
                        <img src="img/bg-img/carta7.jpg" alt="">
                        <div class="hover-content">
                            <a href="img/bg-img/carta7.jpg" class="portfolio-img">+</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item outros country mb-30 wow fadeInUp" data-wow-delay="300ms">
                    <div class="single-portfolio-content">
                        <img src="img/bg-img/carta6.jpg" alt="">
                        <div class="hover-content">
                            <a href="img/bg-img/carta6.jpg" class="portfolio-img">+</a>
                        </div>
                    </div>
                </div>

                <!-- Single Gallery Item -->

                <!-- Single Gallery Item -->
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item outros mb-30 wow fadeInUp" data-wow-delay="300ms">
                    <div class="single-portfolio-content">
                        <img src="img/bg-img/carta8.jpg" alt="">
                        <div class="hover-content">
                            <a href="img/bg-img/carta8.jpg" class="portfolio-img">+</a>
                        </div>
                    </div>
                </div>

                <!-- Single Gallery Item -->
                <div class="col-12 col-sm-6 col-lg-6 single_gallery_item outros mb-30 wow fadeInUp" data-wow-delay="300ms">
                    <div class="single-portfolio-content">
                        <img src="img/bg-img/carta9.jpg" alt="">
                        <div class="hover-content">
                            <a href="img/bg-img/carta9.jpg" class="portfolio-img">+</a>
                        </div>
                    </div>
                </div>

               <!-- Single Gallery Item -->
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item insta mb-30 wow fadeInUp" data-wow-delay="300ms">
                    <div class="single-portfolio-content">
                        <img src="img/bg-img/c24.jpg" alt="">
                        <div class="hover-content">
                            <a href="img/bg-img/c24.jpg" class="portfolio-img">+</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item logomarca mb-30 wow fadeInUp" data-wow-delay="300ms">
                    <div class="single-portfolio-content">
                        <img src="img/bg-img/c25.jpg" alt="">
                        <div class="hover-content">
                            <a href="img/bg-img/c25.jpg" class="portfolio-img">+</a>
                        </div>
                    </div>
                </div>
                <!-- Single Gallery Item -->
                <!-- Single Gallery Item -->
                
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item insta mb-30 wow fadeInUp" data-wow-delay="300ms">
                    <div class="single-portfolio-content">
                        <img src="img/bg-img/c23.jpg" alt="">
                        <div class="hover-content">
                            <a href="img/bg-img/c23.jpg" class="portfolio-img">+</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item insta mb-30 wow fadeInUp" data-wow-delay="300ms">
                    <div class="single-portfolio-content">
                        <img src="img/bg-img/c17.jpg" alt="">
                        <div class="hover-content">
                            <a href="img/bg-img/c17.jpg" class="portfolio-img">+</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item outros mb-30 wow fadeInUp" data-wow-delay="300ms">
                    <div class="single-portfolio-content">
                        <img src="img/bg-img/c21.jpg" alt="">
                        <div class="hover-content">
                            <a href="img/bg-img/c21.jpg" class="portfolio-img">+</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item outros mb-30 wow fadeInUp" data-wow-delay="300ms">
                    <div class="single-portfolio-content">
                        <img src="img/bg-img/c22.jpg" alt="">
                        <div class="hover-content">
                            <a href="img/bg-img/c22.jpg" class="portfolio-img">+</a>
                        </div>
                    </div>
                </div>
                <!-- Single Gallery Item -->
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item insta mb-30 wow fadeInUp" data-wow-delay="300ms">
                    <div class="single-portfolio-content">
                        <img src="img/bg-img/c10.jpg" alt="">
                        <div class="hover-content">
                            <a href="img/bg-img/c10.jpg" class="portfolio-img">+</a>
                        </div>
                    </div>
                </div>

                
            </div>
        </div>
    </div>
</div>
    <!-- Gallery Area End -->

                <div class="col-12"  id="par">
                    <div class="section-headin text-center">
                        <h2>Parceiros</h2>
                        <hr>
                    </div>
                </div>

            <div class="slider">
            <div class="slide-track">
                <div class="slide">
                    <img src="http://www.eeepjosevidalalves.com/images/clients/badde-cakes-1.png" height="100" width="250" alt="" />
                </div>
                <div class="slide">
                    <img src="http://www.eeepjosevidalalves.com/images/clients/sea-face-resort-1.png" height="100" width="250" alt="" />
                </div>
                 <div class="slide">
                    <img src="http://www.eeepjosevidalalves.com/images/clients/badde-cakes-1.png" height="100" width="250" alt="" />
                </div>
                <div class="slide">
                    <img src="http://www.eeepjosevidalalves.com/images/clients/sea-face-resort-1.png" height="100" width="250" alt="" />
                </div>
                 <div class="slide">
                    <img src="http://www.eeepjosevidalalves.com/images/clients/badde-cakes-1.png" height="100" width="250" alt="" />
                </div>
                <div class="slide">
                    <img src="http://www.eeepjosevidalalves.com/images/clients/sea-face-resort-1.png" height="100" width="250" alt="" />
                </div>
                 <div class="slide">
                    <img src="http://www.eeepjosevidalalves.com/images/clients/badde-cakes-1.png" height="100" width="250" alt="" />
                </div>
                <div class="slide">
                    <img src="http://www.eeepjosevidalalves.com/images/clients/sea-face-resort-1.png" height="100" width="250" alt="" />
                </div>
                 <div class="slide">
                    <img src="http://www.eeepjosevidalalves.com/images/clients/badde-cakes-1.png" height="100" width="250" alt="" />
                </div>
                <div class="slide">
                    <img src="http://www.eeepjosevidalalves.com/images/clients/sea-face-resort-1.png" height="100" width="250" alt="" />
                </div>
                 <div class="slide">
                    <img src="http://www.eeepjosevidalalves.com/images/clients/badde-cakes-1.png" height="100" width="250" alt="" />
                </div>
                <div class="slide">
                    <img src="http://www.eeepjosevidalalves.com/images/clients/sea-face-resort-1.png" height="100" width="250" alt="" />
                </div>
            </div>
        </div>

    <!-- Follow Area Start -->
    <div class="follow-area clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Instagram</h2>
                        <p>@giravida2019</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Instagram Feed Area -->
        <div class="instragram-feed-area owl-carousel">
            <!-- Single Instagram Item -->
            <div class="single-instagram-item">
                <img src="img/bg-img/c11.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                    <a href="#">
                        <i class="ti-instagram" aria-hidden="true"></i>
                        <span>giravida2019</span>
                    </a>
                </div>
            </div>
            <!-- Single Instagram Item -->
            <div class="single-instagram-item">
                <img src="img/bg-img/c17.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                    <a href="#">
                        <i class="ti-instagram" aria-hidden="true"></i>
                        <span>giravida2019</span>
                    </a>
                </div>
            </div>
            <!-- Single Instagram Item -->
            <div class="single-instagram-item">
                <img src="img/bg-img/c6.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                    <a href="#">
                        <i class="ti-instagram" aria-hidden="true"></i>
                        <span>giravida2019</span>
                    </a>
                </div>
            </div>
            <!-- Single Instagram Item -->
            <div class="single-instagram-item">
                <img src="img/bg-img/c1.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                    <a href="#">
                        <i class="ti-instagram" aria-hidden="true"></i>
                        <span>giravida2019</span>
                    </a>
                </div>
            </div>
            <!-- Single Instagram Item -->
            <div class="single-instagram-item">
                <img src="img/bg-img/c10.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                    <a href="#">
                        <i class="ti-instagram" aria-hidden="true"></i>
                        <span>giravida2019</span>
                    </a>
                </div>
            </div>
            <!-- Single Instagram Item -->
            <div class="single-instagram-item">
                <img src="img/bg-img/c15.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                    <a href="#">
                        <i class="ti-instagram" aria-hidden="true"></i>
                        <span>giravida2019</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Follow Area End -->

    <!-- Footer Area Start -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-content d-flex align-items-center justify-content-between">
                        <!-- Copywrite Text -->
                        <div class="copywrite-text">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | GiraVida2019 <i class="fa fa-heart-o" aria-hidden="true"></i> 
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                        
                        <!-- Social Info -->
                        <div class="social-info">
                            <a href="#"><i class="ti-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="ti-twitter-alt" aria-hidden="true"></i></a>
                            <a href="#"><i class="ti-linkedin" aria-hidden="true"></i></a>
                            <a href="#"><i class="ti-pinterest" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->

    <!-- Modal Login-->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">

                <div class="container login-container">
                    <div class="row">
                        <div class="col-md-12 login-form-1">
                            <h3>Vamos lá! ;)</h3>
                            <form method="POST" action="funcional/controle/verir.php">
                                <div class="form-group">
                                    <input type="text" class="form-control" required id="log_email" placeholder="Seu Usuário" name="login" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" required id="log_pass"placeholder="Sua Senha" name="senha" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btnSubmit btn-warning" id="login" value="Login" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-primary  bt_cadastrar" data-toggle="modal"
                        data-target="#Cadastro" data-dismiss="modal">Cadastre-se</button>

                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                </div>
            </div>

        </div>
    </div>
    <!-- Modal Recuperar-->
    <!-- Modal Cadastro-->
    <div id="Cadastro" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">

                <div class="container login-container">
                    <div class="row">
                        <div class="col-md-12 login-form-1">
                            <h3>Junte-se a Nós!</h3>
                            <form action="funcional/controle/cadastro.php" method="POST">
                                <div class="form-group">
                                    <input type="text" class="form-control" required id="cad_nome" placeholder="Nome:" name="nome" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" required id="cad_login" placeholder="Login:" name="login" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" required id="cad_senha" placeholder="Senha:" name="senha" value="" />
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="escola">
                                        <option>Escolha sua escola</option>
                                        <option>Escola educandário</option>
                                        <option>Jóse Vidal Alves</option>
                                        <option>Nenhuma das acimas</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="submit" id="bt_cadastro" class="btnSubmit btn-warning" value="Cadastrar"  />
                                </div>
                                <div class="form-group">
                                    <a data-toggle="modal" data-target="#myModal" data-dismiss="modal" class="ForgetPwd"
                                        class="ForgetPwd">Voltar ao Login.</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                </div>
            </div>

        </div>
    </div>
    <!-- **** All JS Files ***** -->
    <!-- jQuery 2.2.4 -->
    <script src="js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="js/popper.min.js"></script>
    <!-- All Plugins -->
    <script src="js/alime.bundle.js"></script>
    <!-- Active -->
    <script src="js/default-assets/active.js"></script>
    <!-- jquery plugins here-->
    <!-- jquery -->

    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- particles js -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>

    
    
</body>

</html>