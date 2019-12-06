<script src="<?php echo base_url('assets/lib/jquery/jquery.min.js')?>"></script>
<div class="row">
    <div class="col-md-12">
        <div class="box box-solid">
            <div class="box-header ">
                  <h3 class="box-title text-center"><strong id='titleForm'> Dados do cadastro e Protocolo </strong></h3>
            </div>
            <div class="box-body container">
                <div class="panel box box-primary"> 
                    
                    <div class="container col-md-12">

                        <div class="tab-content container-fluid">   
                            <div class="container">
                                    <div class="panel-group">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">Cadastro efetuado</div>
                                            <div class="panel-body text-center">
                                                <div class="col-lg-12 card" style="margin-top: 6vmin; padding:3vmin;">
                                                    <div class="col-sm-12">
                                                        <h4><b>Protocolo n° <?php echo $ProtGerado['numero']; ?></b></h4>
                                                        <p class="card-textcol-sm-12">
                                                            <strong><h3><?php echo $ProtGerado['nomeescola']; ?></h3></strong>
                                                            Data da inscrição <strong><?php echo date('d/m/Y', strtotime($ProtGerado['data'])) . ' as ' . date('H:i',  strtotime($ProtGerado['data'])) ?></strong><br>
                                                            Nome do Aluno(a) <strong><?php echo $ProtGerado['nome']; ?></strong><br>
                                                            Serie <strong><?php echo $ProtGerado['ano']; ?></strong><br>
                                                            Turno <strong><?php echo $ProtGerado['turno']; ?></strong><br>
                                                        </p>
                                                        <p class="card-text"></p>
                                                        <form action="<?php echo base_url('Home/pdfProtocolo')?>" method='post'>
                                                            <input type="text" name='id_protoclo' id='id_protoclo' value="<?php echo $id_protocolo?>" hidden>
                                                            <button class="btn btn-primary btnDonwload" hidden><i class="fa fa-download"></i> Download</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>	
                </div>
            </div>
        </div>
    </div>
</div>
