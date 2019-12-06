<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Spot - Bootstrap Freelance Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="<?php echo base_url('assets/img/favicon.png')?>" rel="icon">
  <link href="<?php echo base_url('assets/img/apple-touch-icon.png')?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900|Raleway:400,300,700,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?php echo base_url('assets/lib/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?php echo base_url('assets/lib/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet">

  <!-- =======================================================
    Template Name: Spot
    Template URL: https://templatemag.com/spot-bootstrap-freelance-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>

  <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url('/')?>">Educa<i class="fa fa-circle"></i>BC</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="<?php echo base_url('/')?>">HOME</a></li>
            <li><a href="<?php echo base_url('Admin/adminhomepage')?>">ADMIN</a></li>
             <!-- <li><a data-toggle="modal" data-target="#myModal" href="#myModal"><i class="fa fa-envelope-o"></i></a></li>-->
            </ul>
        </div>
        <!--/.nav-collapse -->
        </div>
    </div>

    <div id="blue">
        <div class="container">
            <div class="row centered">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class='col-sm-9 text-left'>
                        <h4>INCRIÇÔES ONLINE</h4>
                    </div>
                    <div class='col-sm-3'>
                        <img src="<?php echo base_url('assets/img/logoBC.png')?>" width='60vmin'alt="logo bc">
                    </div>
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
    <!--  bluewrap -->
  
    <?php $this->load->view($viewName);?>

    <div id="r">
        <div class="container">
            <div class="row centered">
                <div class="col-lg-8 col-lg-offset-2">
                <h4>Projeto Integrador</h4>
                <p>TSI-17</p>
                </div>
            </div>
        <!-- row -->
        </div>
        <!-- container -->
    </div>

    <!-- FOOTER -->
    <div id="f">
        <div class="container">
        <div class="row centered">
            <a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-dribbble"></i></a>
        </div>
        <!-- row -->
        </div>
        <!-- container -->
    </div>
    <!-- Footer -->

    <!-- MODAL FOR CONTACT -->
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Entrar em contato</h4>
            </div>
            <div class="modal-body">
            <div class="row centered">
                <p>Em caso de duvida nos envie um email</p>

                <form class="contact-form php-mail-form" role="form" action="<?php echo base_url('Home/contactform')?>" method="POST">

                <div class="form-group">
                    <label for="contact-name">Seu nome</label>
                    <input type="name" name="name" class="form-control" id="contact-name" placeholder="Seu nome" data-rule="minlen:4" data-msg="Por favor informe seu nome completo" required >
                    <div class="validate"></div>
                </div>
                <div class="form-group">
                    <label for="contact-email">Seu Email</label>
                    <input type="email" name="email" class="form-control" id="contact-email" placeholder="Seu Email" data-rule="email" data-msg="Por favor informe um email valido" required>
                    <div class="validate"></div>
                </div>
                <div class="form-group">
                    <label for="contact-subject">Assunto</label>
                    <input type="text" name="subject" class="form-control" id="contact-subject" placeholder="Assunto" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required>
                    <div class="validate"></div>
                </div>

                <div class="form-group">
                    <label for="contact-message">Messagem</label>
                    <textarea class="form-control" name="message" id="contact-message" placeholder="Messagem" rows="5" data-rule="required" data-msg="Please write something for us" required></textarea>
                    <div class="validate"></div>
                </div>

                <div class="loading"></div>
                <div class="error-message"></div>
                <div class="sent-message">Sua mensagem foi enviada. Obrigado!</div>

                <div class="form-send">
                    <button type="submit" class="btn btn-large">Enviar Messagem</button>
                </div>

                </form>
            </div>
            </div>
        </div>
        <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <div id="copyrights">
        <div class="container">
        <p>
            &copy; Copyrights <strong>Spot</strong>. All Rights Reserved
        </p>
        <div class="credits">
        </div>
        </div>
    </div>

    <!-- JavaScript Libraries -->
    <script src="<?php echo base_url('assets/lib/jquery/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('assets/lib/bootstrap/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/lib/php-mail-form/validate.js')?>"></script>
    <script src="<?php echo base_url('assets/lib/chart/chart.js')?>"></script>

    <!-- Template Main Javascript File -->
    <script src="<?php echo base_url('assets/js/main.js')?>"></script>
    <script src="<?php echo base_url('assets/js/MaskScript.js')?>"></script>
</body>
</html>
