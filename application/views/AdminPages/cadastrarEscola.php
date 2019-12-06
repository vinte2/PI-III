<script src="<?php echo base_url('assets/lib/jquery/jquery.min.js')?>"></script>
<div class="row">
    <div class="col-md-12">
        <div class="box box-solid">
            <div class="box-header ">
                  <h3 class="box-title text-center"> <br> <strong id='titleForm'>Cadastro de nova escola </strong></h3>
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
                                    <form method="POST" class='form_diaria col-sm-12' action="<?php echo base_url('Admin/cadastrarEscola')?>">                                        

                                        <div class='col-sm-12 form-group'>                                              
                                            <div class="form-group">
                                                <label for="servidor">Nome da escola: </label><br>
                                                <input class='form-control' type="text" name="nomeescola" id='nomeescola' value="<?php echo isset($escolas) ? $escolas[0]['vagas1ano'] : ''?>" >
                                            </div>
                                        </div>

                                        <div class='col-sm-6 form-group'>                                              
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

                                        <div class='col-sm-12 form-group'>
                                            <div class="form-group">
                                                <label for="servidor">Vagas para 9° Ano: </label><br>
                                                <input class='form-control' type="text" name="vagas9ano" id='vagas9ano' value="<?php echo isset($escolas) ? $escolas[0]['vagas9ano'] : ''?>" >
                                            </div>
                                        </div>

                                        <div class="form-group col-sm-12 pull-left">
                                            <a href="#"><button class='btn btn-success' id='submit'>Enviar</button></a><br><br>
                                        </div>
                                        
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
        let titleForm = $('#titleForm');
        let AbaCadastro = $('.abaCadastro li');
        AbaCadastro.click(function() {
            titleForm.text($(this).data('title'));
        })
       
        // MASCARA PARA O CPF DO CADASTRO DO MODAL
        $('#cpf-responsavel').keyup(function() {
            $('#cpf-responsavel').inputmask({
                // mask: ["(99) 9999-9999", "(99) 99999-9999", ],
                mask: ["999.999.999-99"],
                keepStatic: true
            });
        });
     
        // MASCARA PARA O CPF DO CADASTRO DO MODAL
        $('#cpf_aluno').keyup(function() {
            $('#cpf_aluno').inputmask({
                // mask: ["(99) 9999-9999", "(99) 99999-9999", ],
                mask: ["999.999.999-99"],
                keepStatic: true
            });
        });

        // MASCARA PARA O CPF DO CADASTRO DO MODAL
        $('#telefoneResponsavel').keyup(function() {
            $('#telefoneResponsavel').inputmask({
                // mask: ["(99) 9999-9999", "(99) 99999-9999", ],
                mask: ["(99) 9 9999 - 9999"],
                keepStatic: true
            });
        });
     
        $("#submit").click(function(e) {   
            function msgAtiva(param) {
                $('.msgCampoVazio').attr('hidden', false);
                $('.msg').text(param);
            }
          
            let nomeResponsável = $('#nomeresponsavel').val();
            if(nomeResponsável == ''){
                msgAtiva('O campo informando o Nome completo: não pode ficar em branco');
                return false;
            }

            let cpfresponsavel = $('#cpf-responsavel').val();
            if(cpfresponsavel == ''){
                msgAtiva('O campo informando o CPF do responsável não pode ficar em branco');
                return false;
            }

            let telefoneResponsavel = $('#telefoneResponsavel').val();
            if(telefoneResponsavel == ''){
                msgAtiva('O campo informando o Telefone do responsável não pode ficar em branco');
                return false;
            }

            let estado_civil = $('#estado_civil').val();
            if(estado_civil == ''){
                msgAtiva('O campo informando o Estado civil não pode ficar em branco');
                return false;
            }
         
            let data_nascimento = $('#datepicker_saida').val();
            if(data_nascimento == ''){
                msgAtiva('O campo informando a Data de Nascimento não pode ficar em branco');
                return false;
            }
           
            let sexo = $('#sexo').val();
            if(sexo == ''){
                msgAtiva('O campo informando o sexo não pode ficar em branco');
                return false;
            }
          
            let parentesco = $('#parentesco').val();
            if(parentesco == ''){
                msgAtiva('O campo informando o parentesco não pode ficar em branco');
                return false;
            }
        });
    })
</script>