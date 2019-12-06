<script src="<?php echo base_url('assets/lib/jquery/jquery.min.js')?>"></script>
<div class="row">
    <div class="col-md-12">
        <div class="box box-solid">
            <div class="box-header ">
                  <h3 class="box-title text-center">Alterando dados da escola: <br> <strong id='titleForm'> <?php echo $escolas[0]['nomeescola'] ?>  </strong></h3>
            </div>
            <div class="box-body container">
                <div class="panel box box-primary"> 
                    
                    <div class="container col-md-12">
                        <div class="nav-tabs-custom">

                            <div class="tab-content container-fluid">   
                                <div id="home" class="tab-pane fade in active col-sm-12">   

                                    <?php if(!empty($msg)) :?>
                                    <div class="form-group col-sm-12 msgCampoVazio">
                                        <div class="alert alert-danger alert-dismissible col-sm-12">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                            <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                                            <span class='msg'><?php echo $msg?></span>
                                        </div>
                                    </div>
                                    <?php endif?>
                                    <form method="POST" class='form_diaria col-sm-12' action="<?php echo base_url('Admin/alteraVagas')?>">                                        
                                        

                                        <input type="text" value="<?php echo $escolas[0]['idescola'] ?>" name="id_escola" hidden><br>

                                        <div class='col-sm-12 form-group'>                                              
                                            <div class="form-group">
                                                <label for="servidor">Vagas para 1° Ano: </label><br>
                                                <input class='form-control' type="text" name="vagas1ano" id='vagas1ano' value="<?php echo isset($escolas) ? $escolas[0]['vagas1ano'] : ''?>" >
                                            </div>
                                        </div>

                                        <div class='col-sm-6 form-group'>
                                            <div class="form-group">
                                                <label for="servidor">Vagas para 2° Ano: </label><br>
                                                <input class='form-control' type="text" name="vagas2ano" id='vagas2ano' value="<?php echo isset($escolas) ? $escolas[0]['vagas2ano'] : ''?>" >
                                            </div>
                                        </div>
                                        
                                        <div class='col-sm-6 form-group'>
                                            <div class="form-group">
                                                <label for="servidor">Vagas para 3° Ano: </label><br>
                                                <input class='form-control' type="text" name="vagas3ano" id='vagas3ano' value="<?php echo isset($escolas) ? $escolas[0]['vagas3ano'] : ''?>" >
                                            </div>
                                        </div>

                                        <div class='col-sm-6 form-group'>
                                            <div class="form-group">
                                                <label for="servidor">Vagas para 4° Ano: </label><br>
                                                <input class='form-control' type="text" name="vagas4ano" id='vagas4ano' value="<?php echo isset($escolas) ? $escolas[0]['vagas4ano'] : ''?>" >
                                            </div>
                                        </div>

                                        <div class='col-sm-6 form-group'>
                                            <div class="form-group">
                                                <label for="servidor">Vagas para 5° Ano: </label><br>
                                                <input class='form-control' type="text" name="vagas5ano" id='vagas5ano' value="<?php echo isset($escolas) ? $escolas[0]['vagas5ano'] : ''?>" >
                                            </div>
                                        </div>

                                        <div class='col-sm-6 form-group'>
                                            <div class="form-group">
                                                <label for="servidor">Vagas para 6° Ano: </label><br>
                                                <input class='form-control' type="text" name="vagas6ano" id='vagas6ano' value="<?php echo isset($escolas) ? $escolas[0]['vagas6ano'] : ''?>" >
                                            </div>
                                        </div>

                                        <div class='col-sm-6 form-group'>
                                            <div class="form-group">
                                                <label for="servidor">Vagas para 7° Ano: </label><br>
                                                <input class='form-control' type="text" name="vagas7ano" id='vagas7ano' value="<?php echo isset($escolas) ? $escolas[0]['vagas7ano'] : ''?>" >
                                            </div>
                                        </div>

                                        <div class='col-sm-6 form-group'>
                                            <div class="form-group">
                                                <label for="servidor">Vagas para 8° Ano: </label><br>
                                                <input class='form-control' type="text" name="vagas8ano" id='vagas8ano' value="<?php echo isset($escolas) ? $escolas[0]['vagas8ano'] : ''?>" >
                                            </div>
                                        </div>

                                        <div class='col-sm-6 form-group'>
                                            <div class="form-group">
                                                <label for="servidor">Vagas para 9° Ano: </label><br>
                                                <input class='form-control' type="text" name="vagas9ano" id='vagas9ano' value="<?php echo isset($escolas) ? $escolas[0]['vagas9ano'] : ''?>" >
                                            </div>
                                        </div>

                                        <div class="form-group col-sm-12 pull-left">
                                            <a href="#"><button class='btn btn-primary' id='submit'>Alterar</button></a>
                                            <a href="<?php echo base_url('Admin/deletaEscola/').$escolas[0]['idescola'] ?>"><button class='btn btn-danger btnDelete' type='button'>Deletar Escola</button></a>
                                            <a href="<?php echo base_url('Admin/cadastrarEscola')?>"><button class='btn btn-success' type='button'>Cadastrar outra escola</button></a>
                                        </div><br><br>
                                        
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

<script>
    $(document).ready(function() {
       
        $(".btnDelete").click(function(e) {   
            var r = confirm("Deseja realmente Deletar esta escola? ");
            if (r == true) {
                return true;
            } else {
                return false;
            }
        });
    })
</script>