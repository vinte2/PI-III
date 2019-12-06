<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Spot - Bootstrap Freelance Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900|Raleway:400,300,700,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Template Name: Spot
    Template URL: https://templatemag.com/spot-bootstrap-freelance-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>

    <div class="container w">
        <div class="row centered">
            <h3> <strong><?php echo 'Cadastrados na escola '. $escolaNome ?> </strong></h3>
        <br><br> 

        <div class="col-lg-4" style="margin-top: 2vmin">
            <i class="fa fa-book"></i>
            <h4>No <?php echo $vagas1ano[1]?></h4>
            <p><strong><?php echo !empty($vagas1ano[0]['tot']) ? $vagas1ano[0]['tot'] : '0' ?></strong> vagas cadastradas</p>
            <?php if(!empty($vagas1ano[0]['tot'])) : ?>
                <a href="<?php echo base_url('Admin/relatorioCadastrados/'). $id_escola . '/' . $vagas1ano[2] ?>"><button class='btn btn-success'>Exibir Relatorio</button></a>
                <a  target=”_blank” href="<?php echo base_url('Admin/pdfCadastradosGeral/'). $id_escola . '/' . $vagas1ano[2] ?>"><button class='btn btn-success'>Gerar Pdf</button></a>
            <?php else: ?>
                <a href="#"><button class='btn btn-success' disabled>Exibir Relatorio</button></a>
            <?php endif ?>        
        </div>
        <!-- col-lg-4 -->

        <div class="col-lg-4" style="margin-top: 2vmin">
            <i class="fa fa-book"></i>
            <h4>No <?php echo $vagas2ano[1]?></h4>
            <p><strong><?php echo !empty($vagas2ano[0]['tot']) ? $vagas2ano[0]['tot'] : 0?></strong> vagas cadastradas</p>
            <?php if(!empty($vagas2ano[0]['tot'])) : ?>
                <a href="<?php echo base_url('Admin/relatorioCadastrados/'). $id_escola . '/' . $vagas2ano[2] ?>"><button class='btn btn-success'>Exibir Relatorio</button></a>
                <a  target=”_blank” href="<?php echo base_url('Admin/pdfCadastradosGeral/'). $id_escola . '/' . $vagas2ano[2] ?>"><button class='btn btn-success'>Gerar Pdf</button></a>
            <?php else: ?>
                <a href="#"><button class='btn btn-success' disabled>Exibir Relatorio</button></a>
            <?php endif ?>
        </div>
        <!-- col-lg-4 -->

        <div class="col-lg-4" style="margin-top: 2vmin">
            <i class="fa fa-book"></i>
            <h4>No <?php echo $vagas3ano[1]?></h4>
            <p><strong><?php echo !empty($vagas3ano[0]['tot']) ? $vagas3ano[0]['tot'] : '0' ?></strong> vagas cadastradas</p>
            <?php if(!empty($vagas3ano[0]['tot'])) : ?>
                <a href="<?php echo base_url('Admin/relatorioCadastrados/'). $id_escola . '/' . $vagas3ano[2] ?>"><button class='btn btn-success'>Exibir Relatorio</button></a>
                <a target=”_blank” href="<?php echo base_url('Admin/pdfCadastradosGeral/'). $id_escola . '/' . $vagas3ano[2] ?>"><button class='btn btn-success'>Gerar Pdf</button></a>
            <?php else: ?>
                <a href="#"><button class='btn btn-success' disabled>Exibir Relatorio</button></a>
            <?php endif ?>
        </div>

        <div class="col-lg-4" style="margin-top: 2vmin">
            <i class="fa fa-book"></i>
            <h4>No <?php echo $vagas4ano[1]?></h4>
            <p><strong><?php echo !empty($vagas4ano[0]['tot']) ? $vagas4ano[0]['tot'] : '0' ?></strong> vagas cadastradas</p>
            <?php if(!empty($vagas4ano[0]['tot'])) : ?>
                <a href="<?php echo base_url('Admin/relatorioCadastrados/'). $id_escola . '/' . $vagas4ano[2] ?>"><button class='btn btn-success'>Exibir Relatorio</button></a>
                <a target=”_blank” href="<?php echo base_url('Admin/pdfCadastradosGeral/'). $id_escola . '/' . $vagas4ano[2] ?>"><button class='btn btn-success'>Gerar Pdf</button></a>
            <?php else: ?>
                <a href="#"><button class='btn btn-success' disabled>Exibir Relatorio</button></a>
            <?php endif ?>
        </div>

        <div class="col-lg-4" style="margin-top: 2vmin">
            <i class="fa fa-book"></i>
            <h4>No <?php echo $vagas5ano[1]?></h4>
            <p><strong><?php echo !empty($vagas5ano[0]['tot']) ? $vagas5ano[0]['tot'] : '0' ?></strong> vagas cadastradas</p>
            <?php if(!empty($vagas5ano[0]['tot'])) : ?>
                <a href="<?php echo base_url('Admin/relatorioCadastrados/'). $id_escola . '/' . $vagas5ano[2] ?>"><button class='btn btn-success'>Exibir Relatorio</button></a>
                <a target=”_blank” href="<?php echo base_url('Admin/pdfCadastradosGeral/'). $id_escola . '/' . $vagas5ano[2] ?>"><button class='btn btn-success'>Gerar Pdf</button></a>
            <?php else: ?>
                <a href="#"><button class='btn btn-success' disabled>Exibir Relatorio</button></a>
            <?php endif ?>
        </div>

        <div class="col-lg-4" style="margin-top: 2vmin">
            <i class="fa fa-book"></i>
            <h4>No <?php echo $vagas6ano[1]?></h4>
            <p><strong><?php echo !empty($vagas6ano[0]['tot']) ? $vagas6ano[0]['tot'] : '0' ?></strong> vagas cadastradas</p>
            <?php if(!empty($vagas6ano[0]['tot'])) : ?>
                <a href="<?php echo base_url('Admin/relatorioCadastrados/'). $id_escola . '/' . $vagas6ano[2] ?>"><button class='btn btn-success'>Exibir Relatorio</button></a>
                <a target=”_blank” href="<?php echo base_url('Admin/pdfCadastradosGeral/'). $id_escola . '/' . $vagas6ano[2] ?>"><button class='btn btn-success'>Gerar Pdf</button></a>
            <?php else: ?>
                <a href="#"><button class='btn btn-success' disabled>Exibir Relatorio</button></a>
            <?php endif ?>
        </div>

        <div class="col-lg-4" style="margin-top: 2vmin">
            <i class="fa fa-book"></i>
            <h4>No <?php echo $vagas7ano[1]?></h4>
            <p><strong><?php echo !empty($vagas7ano[0]['tot']) ? $vagas7ano[0]['tot'] : '0' ?></strong> vagas cadastradas</p>
            <?php if(!empty($vagas7ano[0]['tot'])) : ?>
                <a href="<?php echo base_url('Admin/relatorioCadastrados/'). $id_escola . '/' . $vagas7ano[2] ?>"><button class='btn btn-success'>Exibir Relatorio</button></a>
                <a target=”_blank” href="<?php echo base_url('Admin/pdfCadastradosGeral/'). $id_escola . '/' . $vagas7ano[2] ?>"><button class='btn btn-success'>Gerar Pdf</button></a>
            <?php else: ?>
                <a href="#"><button class='btn btn-success' disabled>Exibir Relatorio</button></a>
            <?php endif ?>
        </div>
        <div class="col-lg-4" style="margin-top: 2vmin">
            <i class="fa fa-book"></i>
            <h4>No <?php echo $vagas8ano[1]?></h4>
            <p><strong><?php echo !empty($vagas8ano[0]['tot']) ? $vagas8ano[0]['tot'] : '0' ?></strong> vagas cadastradas</p>
            <?php if(!empty($vagas8ano[0]['tot'])) : ?>
                <a href="<?php echo base_url('Admin/relatorioCadastrados/'). $id_escola . '/' . $vagas8ano[2] ?>"><button class='btn btn-success'>Exibir Relatorio</button></a>
                <a target=”_blank” href="<?php echo base_url('Admin/pdfCadastradosGeral/'). $id_escola . '/' . $vagas8ano[2] ?>"><button class='btn btn-success'>Gerar Pdf</button></a>
            <?php else: ?>
                <a href="#"><button class='btn btn-success' disabled>Exibir Relatorio</button></a>
            <?php endif ?>
        </div>

        <div class="col-lg-4" style="margin-top: 2vmin">
            <i class="fa fa-book"></i>
            <h4>No <?php echo $vagas9ano[1]?></h4>
            <p><strong><?php echo !empty($vagas9ano[0]['tot']) ? $vagas9ano[0]['tot'] : '0' ?></strong> vagas cadastradas</p>
            <?php if(!empty($vagas9ano[0]['tot'])) : ?>
                <a href="<?php echo base_url('Admin/relatorioCadastrados/'). $id_escola . '/' . $vagas9ano[2] ?>"><button class='btn btn-success'>Exibir Relatorio</button></a>
                <a target=”_blank” href="<?php echo base_url('Admin/pdfCadastradosGeral/'). $id_escola . '/' . $vagas9ano[2] ?>"><button class='btn btn-success'>Gerar Pdf</button></a>
            <?php else: ?>
                <a href="#"><button class='btn btn-success' disabled>Exibir Relatorio</button></a>
            <?php endif ?>
        </div>
        <!-- col-lg-4 -->
        </div>
        <!-- row -->
        <br>
        <br>
    </div>
  <!-- container -->

  <!-- PORTFOLIO SECTION 
  <div id="dg">
    <div class="container">
      <div class="row centered">
        <h4>LATEST WORKS</h4>
        <br>
        <div class="col-lg-4">
          <div class="tilt">
            <a href="#"><img src="img/p01.png" alt=""></a>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="tilt">
            <a href="#"><img src="img/p03.png" alt=""></a>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="tilt">
            <a href="#"><img src="img/p02.png" alt=""></a>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- DG -->
  <!-- container 
  <div id="lg">
    <div class="container">
      <div class="row centered">
        <h4>OUR AWESOME CLIENTS</h4>
        <div class="col-lg-2 col-lg-offset-1">
          <img src="img/c01.gif" alt="">
        </div>
        <div class="col-lg-2">
          <img src="img/c02.gif" alt="">
        </div>
        <div class="col-lg-2">
          <img src="img/c03.gif" alt="">
        </div>
        <div class="col-lg-2">
          <img src="img/c04.gif" alt="">
        </div>
        <div class="col-lg-2">
          <img src="img/c05.gif" alt="">
        </div>
      </div>
    </div>
  </div>
-->