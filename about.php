<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>GIRAVIDA - Plataforma digital de valorização à vida</title>

    <!-- Favicon -->
    <link rel="icon" href="img/bg-img/logo.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- Preloader -->

    <!-- Top Search Form Area -->
    <div class="top-search-area">
        <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <!-- Close -->
                        <button type="button" class="btn close-btn" data-dismiss="modal"><i class="ti-close"></i></button>
                        <!-- Form -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Area Start -->
    <header class="header-area">
        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between" id="alimeNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="./index.html"><img src="img/sobre/logo.png" alt=""></a>    

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
                                    <li><a href="./index.php">Cartas</a></li>
                                    <li class="active"><a href="./about.php">Sobre</a></li>
                                    <li><a href="index.php#par">Apoiadores</a></li>
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
                                    <!-- <li><a href="./contact.html">Contact</a></li> -->
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Breadcrumb Area Start -->
    <section class="breadcrumb-area bg-img bg-overlay jarallax"
     style="background-image: url(img/bg-img/campo.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <!-- <h2 class="page-title">About Us</h2> -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="index.php"><i class="icon_house_alt"></i> Início</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Sobre</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->

    <!-- About Us Area Start -->
    <div class="about-us-area section-padding-80-0 clearfix">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="about-us-content mb-80">
                        <h3 class="wow fadeInUp" data-wow-delay="100ms">DEPRESSÃO</h3>
                        <div class="line wow fadeInUp" data-wow-delay="200ms"></div>
                        <p class="wow fadeInUp" data-wow-delay="300ms">Segundo Dr. Drauzio Varella é uma doença psiquiátrica crônica e recorrente que produz uma alteração do humor caracterizada por uma tristeza profunda, 
                            sem fim. Nos quadros de depressão, 
                            a tristeza não dá tréguas, mesmo que não haja uma causa aparente. O humor permanece deprimido praticamente o tempo todo, por dias e dias seguidos. 
                            Desaparece o interesse pelas atividades que antes davam satisfação e prazer e a pessoa não tem perspectiva de que algo possa ser feito para que seu quadro melhore.</p>
                        <!-- <p class="wow fadeInUp" data-wow-delay="400ms">a tristeza não dá tréguas, mesmo que não haja uma causa aparente. O humor permanece deprimido praticamente o tempo todo, por dias e dias seguidos. 
                            Desaparece o interesse pelas atividades que antes davam satisfação e prazer e a pessoa não tem perspectiva de que algo possa ser feito para que seu quadro melhore..</p> -->
                        
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="about-video-area mb-80 wow fadeInUp" data-wow-delay="100ms">
                        <img src="img/sobre/videoansi1.jpg" alt="">
                        <div class="video-icon">
                            <a href="https://www.youtube.com/watch?v=7jfjnRJ3dkI" class="video-play-btn"><i class="arrow_triangle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="about-us-area section-padding-80-0 clearfix">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="about-us-content mb-80">
                        <h3 class="wow fadeInUp" data-wow-delay="100ms">ANSIEDADE</h3>
                        <div class="line wow fadeInUp" data-wow-delay="200ms"></div>
                        <p class="wow fadeInUp" data-wow-delay="300ms">É considerada normal a ansiedade que se manifesta nas horas que antecedem uma entrevista de emprego, a publicação dos aprovados num concurso,
                            o nascimento de um filho. O transtorno da ansiedade generalizada (TAG), segundo o manual de classificação de doenças mentais (DSM.IV), 
                            é um distúrbio caracterizado pela “preocupação excessiva ou expectativa apreensiva”, persistente e de difícil controle, que perdura por seis meses 
                            no mínimo e vem acompanhado por três ou mais dos seguintes sintomas: inquietação, fadiga, irritabilidade, dificuldade de concentração, tensão muscular 
                            e perturbação do sono.</p>
                        <!-- <p class="wow fadeInUp" data-wow-delay="400ms">a tristeza não dá tréguas, mesmo que não haja uma causa aparente. O humor permanece deprimido praticamente o tempo todo, por dias e dias seguidos. 
                            Desaparece o interesse pelas atividades que antes davam satisfação e prazer e a pessoa não tem perspectiva de que algo possa ser feito para que seu quadro melhore..</p> -->
                        
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="about-video-area mb-80 wow fadeInUp" data-wow-delay="100ms">
                        <img src="img/sobre/videoansi.jpg" alt="">
                        <div class="video-icon">
                            <a href="https://www.youtube.com/watch?v=7jfjnRJ3dkI" class="video-play-btn"><i class="arrow_triangle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Us Area End -->

    <!-- Why Choose Us Area Start -->
    <section class="why-choose-us-area bg-gray section-padding-80-0 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                        <h2>Como se comportar em meio a cada um deles?</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Why Choose Area -->
                <div class="col-md-6 col-lg-6">
                    <div class="why-choose-us-content text-center mb-80 wow fadeInUp" data-wow-delay="100ms">
                        <div class="chosse-us-icon">
                            <img src="img/sobre/ansiedade.png" alt="PRAVIDA">
                        </div>
                        <h4>Ansiedade</h4>
                        <p>A busca por um profissional é de suma importância, mas vale ressaltar algumas dicas:<br> 
                            <strong>1.Estratégias de relaxamento </strong>como a respiração profunda, desacelerar a freqüência cardíaca e reduzir o estresse.<br>
                            <strong>2.Desvie a atenção dos sintomas</strong> - focar em uma atividade específica, como o controle da respiração. <br>  <strong>3. Use a imaginação guiada
                             </strong> - Pense em um lugar que você se sinta em paz e relaxado. <br><strong>4. Converse com alguém </strong> - Procure um amigo que te deixe bem e puxe assunto com ele
                             <br> <strong>5. Procure AJUDA MÉDICA</strong> - O mais importante, procure um psicólogo e participe das reuniões </p>
                    </div>
                </div>

                <!-- Single Why Choose Area -->
                <div class="col-md-6 col-lg-6">
                    <div class="why-choose-us-content text-center mb-80 wow fadeInUp" data-wow-delay="300ms">
                        <div class="chosse-us-icon">
                            <img src="img/sobre/depressao.png" alt="PRAVIDA">
                        </div>
                        <h4>Depressão</h4>
                        <p>A busca por ajuda médica é indispensável, mas algumas dicas também é essencial:<br><strong>1. Permanecer Saudável </strong> - Uma corrida, uma boa alimentação, exercícios
                            <br><strong>2. Manter Contato</strong> - Procure um amigo que te deixe bem e converse com ele falando do que está sentindo. <br>  <strong>3. Relaxamento</strong> - Procure Uma forma de relaxar, respiração, escutar música um esporte também pode ser praticado <br>
                            <strong>4. Busque por frases de incentivo </strong> - Tente melhorar seu dia dessa forma - Inclusive há presente nessas plataformas
                             <br> <strong>5. converse com seus pais</strong> - Fale o que está passando, aposto comos eles vão te ajudar de alguma forma.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Why Choose  us Area End -->
    <section class="why-choose-us-area bg-gray section-padding-80-0 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                        <h2>Serviços de valorização a vida</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Why Choose Area -->
                <div class="col-md-6 col-lg-3">
                    <a href="https://www.cvv.org.br/">
                        <div class="why-choose-us-content text-center mb-80 wow fadeInUp" data-wow-delay="100ms">
                            <div class="chosse-us-icon">
                                <img src="img/sobre/cvv.png" alt="logocvv">
                            </div>
                            <h4>Centro de Valorização da Vida</h4>
                            <p>O CVV – Centro de Valorização da Vida realiza apoio emocional e prevenção do
                                suicídio, atendendo voluntária e gratuitamente todas as pessoas que querem e
                                precisam conversar, 24 horas todos os
                                dias.</p>
                        </div>
                    </a>
                </div>

                <!-- Single Why Choose Area -->
                <div class="col-md-6 col-lg-3">
                    <a href="http://institutobiadote.org.br/">
                        <div class="why-choose-us-content text-center mb-80 wow fadeInUp" data-wow-delay="300ms">
                            <div class="chosse-us-icon">
                                <img src="img/sobre/biadote.png" alt="logobiadote">
                            </div>
                            <h4>Instituto Bia Dote</h4>
                            <p>É uma organização sem fins lucrativos que trabalha com a prevenção do suicídio e a
                                valorização da vida.
                                Busca-se não só conferir visibilidade, debater, desmistificar e conscientizar sobre
                                a problemática junto à
                                sociedade, mas também ser abrigo a quem precisa.</p>
                        </div>
                    </a>
                </div>

                <!-- Single Why Choose Area -->
                <div class="col-md-6 col-lg-3">
                    <a href="https://www.cvv.org.br/ligue-141/">
                        <div class="why-choose-us-content text-center mb-80 wow fadeInUp" data-wow-delay="500ms">
                            <div class="chosse-us-icon">
                                <img src="img/sobre/188.png" alt="logo 188">
                            </div>
                            <h4>Ligue 188</h4>
                            <p>Você pode conversar com um voluntário do CVV ligando para 188 de todo o território
                                nacional, 24 horas todos os dias de forma gratuita.
                                Você é atendido por um voluntário, com respeito, anonimato, que guardará estrito
                                sigilo sobre tudo que for dito e de forma gratuita.</p>
                        </div>
                    </a>
                </div>
                
                <!-- Single Why Choose Area -->
                <div class="col-md-6 col-lg-3">
                    <a href="http://www.pravida.com.br/">
                        <div class="why-choose-us-content text-center mb-80 wow fadeInUp" data-wow-delay="500ms">
                            <div class="chosse-us-icon">
                                <img src="img/sobre/pravida.png" alt="logo pravida">
                            </div>
                            <h4>PRA VIDA</h4>
                            <p>Você pode conversar com um voluntário do CVV ligando para 188 de todo o território
                                nacional, 24 horas todos os dias de forma gratuita.
                                Você é atendido por um voluntário, com respeito, anonimato, que guardará estrito
                                sigilo sobre tudo que for dito e de forma gratuita.</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>s

    <!-- Our Team Area Start -->
    <section class="our-team-area section-padding-80-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                        <h2>Equipe</h2>
                    </div>
                </div>
            </div>

            <div class="row col-md-12">
                <!-- Team Member Area -->
                <div class="col-md-6 col-xl-4">
                    <div class="team-content-area text-center mb-30 wow fadeInUp" data-wow-delay="100ms">
                        <div class="member-thumb">
                            <img src="img/bg-img/19.jpg" alt="">
                        </div>
                        <h5>Anderson Sousa</h5>
                        <span>Discente em Redes de Computadores</span>
                        <div class="member-social-info">
                            <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-twitter-alt"></i></a>
                            <a href="#"><i class="ti-linkedin"></i></a>
                            <a href="#"><i class="ti-pinterest"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Team Member Area -->
                <div class="col-md-6 col-xl-4">
                    <div class="team-content-area text-center mb-30 wow fadeInUp" data-wow-delay="700ms">
                        <div class="member-thumb">
                            <img src="img/bg-img/junior1.jpg" alt="">
                        </div>
                        <h5>Marcos Jr.</h5>
                        <span>Discente em Redes de Computadores</span>
                        <div class="member-social-info">
                            <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-twitter-alt"></i></a>
                            <a href="#"><i class="ti-linkedin"></i></a>
                            <a href="#"><i class="ti-pinterest"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Team Member Area -->
                <div class="col-md-6 col-xl-4">
                    <div class="team-content-area text-center mb-30 wow fadeInUp" data-wow-delay="500ms">
                        <div class="member-thumb">
                            <img src="img/bg-img/21.jpg" alt="">
                        </div>
                        <h5>Mayara Sabriny</h5>
                        <span>Discente em Segurança do Trabalho</span>
                        <div class="member-social-info">
                            <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-twitter-alt"></i></a>
                            <a href="#"><i class="ti-linkedin"></i></a>
                            <a href="#"><i class="ti-pinterest"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Team Member Area -->
                <br>
                <div class="col-md-6 col-xl-4">
                    <div class="team-content-area text-center mb-30 wow fadeInUp" data-wow-delay="300ms">
                        <div class="member-thumb">
                            <img src="img/bg-img/20.jpg" alt="">
                        </div>
                        <h5>Renan Eugenio</h5>
                        <span>Discente em Informática</span>
                        <div class="member-social-info">
                            <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-twitter-alt"></i></a>
                            <a href="#"><i class="ti-linkedin"></i></a>
                            <a href="#"><i class="ti-pinterest"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Team Member Area -->
                <div class="col-md-6 col-xl-4">
                    <div class="team-content-area text-center mb-30 wow fadeInUp" data-wow-delay="700ms">
                        <div class="member-thumb">
                            <img src="img/bg-img/22.jpg" alt="">
                        </div>
                        <h5>Samanta Evelyn</h5>
                        <span>Discente em Redes</span>
                        <div class="member-social-info">
                            <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-twitter-alt"></i></a>
                            <a href="#"><i class="ti-linkedin"></i></a>
                            <a href="#"><i class="ti-pinterest"></i></a>
                        </div>
                    </div>
                </div>

                 <div class="col-md-6 col-xl-4">
                    <div class="team-content-area text-center mb-30 wow fadeInUp" data-wow-delay="700ms">
                        <div class="member-thumb">
                            <img src="img/bg-img/22.jpg" alt="">
                        </div>
                        <h5>Zeneide Maria</h5>
                        <span>Doscente em Artes</span>
                        <div class="member-social-info">
                            <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-twitter-alt"></i></a>
                            <a href="#"><i class="ti-linkedin"></i></a>
                            <a href="#"><i class="ti-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Team Area End -->

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
                                    <input type="text" class="form-control" required id="log_email" placeholder="Email" name="login" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" required id="log_pass"placeholder="Sua Senha" name="senha" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btnSubmit btn-warning" id="login" value="Login" />
                                </div>
                                <div class="form-group">
                                    <a data-toggle="modal" data-target="#Recuperar" data-dismiss="modal"
                                        class="ForgetPwd">Esqueceu a senha?</a>
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
    <div id="Recuperar" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">

                <div class="container login-container">
                    <div class="row">
                        <div class="col-md-12 login-form-1">
                            <h3>Não se preocupe!</h3>
                            <!-- <form method="POST" action="funcional/controle/cadastro.php"> -->
                                <div class="form-group">
                                    <input type="text" class="form-control" id="rec_email" placeholder="Seu Email" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="button" class="btnSubmit btn-warning" id="recuperar" value="Recuperar" />
                                </div>
                                <div class="form-group">
                                    <a data-toggle="modal" data-target="#myModal" data-dismiss="modal"
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
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All Plugins -->
    <script src="js/alime.bundle.js"></script>
    <!-- Active -->
    <script src="js/default-assets/active.js"></script>
    <!-- jquery plugins here-->
    <!-- jquery -->
    <script src="js/jquery.js"></script>
    <script src="js/jquery.mask.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="js/masonry.pkgd.js"></script>
    <!-- particles js -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/owl.carousel2.thumbs.min.js"></script>
    <!-- swiper js -->
    <script src="js/slick.min.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
    

</body>

</html>