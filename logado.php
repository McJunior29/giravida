<?php
include "funcional/controle/conexao.php";
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="opensource rich wysiwyg text editor jquery bootstrap execCommand html5" />
    <meta name="description" content="This tiny jQuery Bootstrap WYSIWYG plugin turns any DIV into a HTML5 rich text editor" />
    <link rel="apple-touch-icon" href="//mindmup.s3.amazonaws.com/lib/img/apple-touch-icon.png" />
    <link rel="shortcut icon" href="http://mindmup.s3.amazonaws.com/lib/img/favicon.ico" >
    <link href="external/google-code-prettify/prettify.css" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link href="http://netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
		<script src="external/jquery.hotkeys.js"></script>
    <script src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
    <script src="external/google-code-prettify/prettify.js"></script>
    <script src="bootstrap-wysiwyg.js"></script> 
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
</head>
<body >
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
                                    <li><a href="./about.php">Sobre</a></li>
                                     <li><a href="index.php/#par">Apoiadores</a></li>
                                      <?php
                                        if(!empty($_SESSION['nome_user'])){
                                            echo"<li class='active'><a href='logado.php'>Escreva uma carta</a></li>".
                                                "<li><a href='funcional/controle/sair.php'>Sair</a></li>";
                                        }else{
                                          header("Location:index.php");
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
                            	<?php
                									if (!empty($_SESSION['nome_user'])) {
                										echo '<h2 class="animated bounceInDown h2" data-animation="bounceInDown" data-delay="900ms">Seja<br>Bem-vindo '.$_SESSION['nome_user'].'</h2>';
                									}else{
                										header("Location:index.php");
                									}?>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
	    <!-- Header Area Start -->
    <!-- Header Area End -->
    <div class=" container">
<form action="insert.php" method="post">
 <div>
  <div class="hero-unit">
	<h1>Colabore com a gente<br/> <small>Escreva uma carta</small></h1>
	<hr class="hr" />
	<div id="alerts"></div>
    <div>
      <textarea required name="carta" id="editor" value="<?php if(isset($_GET['ca'])){echo $carta;}?>"></textarea>
    </div>
      <input class="env" type="submit" value="  Enviar carta  " />
  </div>
 </div>
    </form> 
</div>

<p>Cartas que você já escreveu</p>
<table class="w3-table w3-striped">
	<tr>
		<td>Número das cartas</td>
		<td>Cartas</td>
	</tr>
    <?php
    $usu_id = $_SESSION['id'] ;
$query = "SELECT * FROM cartas INNER JOIN usuario on usuario.id_usuario = cartas.usuario_id_usuario
         where cartas.usuario_id_usuario = $usu_id" ;
$sql = mysqli_query($conexao,$query);
while ($ln = mysqli_fetch_assoc($sql)){
	$id_car = $ln['id_cartas'];
	$cartas = $ln['escrita_cartas'];
echo "
	<tr>
		<td>".$id_car
		."</td>
		<td>".$cartas
		."</td>"
    ."<td><a href='dele.php?id=$id_car'><img class='imgi' src='img/bg-img/lata.png'></a></td>"
    ."<td><a href='editar.php?id=$id_car'><img class='imgi' src='img/bg-img/lapis.png'></a></td>"
		."</tr>";}
?> 
</table>
<script>
  $(function(){
    function initToolbarBootstrapBindings() {
      var fonts = ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier', 
            'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Lucida Sans', 'Tahoma', 'Times',
            'Times New Roman', 'Verdana'],
            fontTarget = $('[title=Font]').siblings('.dropdown-menu');
      $.each(fonts, function (idx, fontName) {
          fontTarget.append($('<li><a data-edit="fontName ' + fontName +'" style="font-family:\''+ fontName +'\'">'+fontName + '</a></li>'));
      });
      $('a[title]').tooltip({container:'body'});
    	$('.dropdown-menu input').click(function() {return false;})
		    .change(function () {$(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle');})
        .keydown('esc', function () {this.value='';$(this).change();});

      $('[data-role=magic-overlay]').each(function () { 
        var overlay = $(this), target = $(overlay.data('target')); 
        overlay.css('opacity', 0).css('position', 'absolute').offset(target.offset()).width(target.outerWidth()).height(target.outerHeight());
      });
      if ("onwebkitspeechchange"  in document.createElement("input")) {
        var editorOffset = $('#editor').offset();
        $('#voiceBtn').css('position','absolute').offset({top: editorOffset.top, left: editorOffset.left+$('#editor').innerWidth()-35});
      } else {
        $('#voiceBtn').hide();
      }
	};
	function showErrorAlert (reason, detail) {
		var msg='';
		if (reason==='unsupported-file-type') { msg = "Unsupported format " +detail; }
		else {
			console.log("error uploading file", reason, detail);
		}
		$('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>'+ 
		 '<strong>File upload error</strong> '+msg+' </div>').prependTo('#alerts');
	};
    initToolbarBootstrapBindings();  
	$('#editor').wysiwyg({ fileUploadError: showErrorAlert} );
    window.prettyPrint && prettyPrint();
  });
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-37452180-6', 'github.io');
  ga('send', 'pageview');
</script>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "http://connect.facebook.net/en_GB/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
 </script>

<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="http://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</body>
</html>
