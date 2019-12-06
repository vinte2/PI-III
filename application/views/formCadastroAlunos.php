<script src="<?php echo base_url('assets/lib/jquery/jquery.min.js')?>"></script>
<div class="row">
    <div class="col-md-12">
        <div class="box box-solid">
            <div class="box-header ">
                  <h3 class="box-title text-center"><strong id='titleForm'> Dados do responsável </strong></h3>
            </div>
            <div class="box-body container">
                <div class="panel box box-primary"> 
                    
                    <div class="container col-md-12">
                        <div class="nav-tabs-custom">
                            <ul class="nav nav-tabs abaCadastro">
                                <li class="active" data-title="Dados do responsável"><a data-toggle="tab" href="#home">Cadastro<span class='text-success'>( Dados do responsável)</span></a></li>
                                <li data-title="Dados do aluno"><a data-toggle="tab" href="#menu1">Cadastro <span class='text-warning'>(Dados do aluno)</span> </a></li>
                            </ul><br><br>

                            <div class="tab-content container-fluid">   
                                <div id="home" class="tab-pane fade in active col-sm-12">   
                                    <form method="POST" class='form_diaria col-sm-12' action="<?php echo base_url('Home/cadastro')?>">                                        
                                        <h4 class='text-center'>Cadastro de vaga para a escola: <strong><?php echo $escola ?> </strong></h4> <br>
                                        
                                        <input type="text" value="<?php echo $idescola ?>" name="id_escola" hidden>
                                        <input type="text" value="<?php echo $turma ?>" name="turma" hidden>
                                       
                                        <div class='col-sm-6 form-group'>                                              

                                            <div class="form-group">
                                                <label for="servidor">Nome Completo: </label><br>
                                                <input type="text"  class='form-control' id='nomeresponsavel' name='nomeresponsavel'>
                                            </div>        

                                            <div class="form-group">
                                                <label for="servidor">CPF do responsável: </label><br>
                                                <input class='form-control' type="text" name="cpf_responsavel" id='cpf-responsavel' value="<?php echo isset($postinmemoria) ? $postinmemoria['cpf'] : ''?>" >
                                            </div>

                                            <div class="form-group">
                                                <label>Telefone de contato:</label>
                                                <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-phone"></i>
                                                </div>
                                                <input type="text" class="form-control" name="telefone_responsável" id='telefoneResponsavel' data-inputmask='"mask": "(99) 9 9999-9999"' data-mask  value="<?php echo isset($postinmemoria) ? $postinmemoria['telefone'] : ''?>" >
                                                </div>
                                            </div>

                                            <div class='form-group'>
                                                <label for="cidade_destino">Estado civil: </label>
                                                <select class='form-control cidade_destino' name="estado_civil" id="estado_civil"  value="<?php echo isset($postinmemoria) ? $postinmemoria['cidade_destino'] : ''?>">
                                                    <option value="">Selecione estado civil</option required>
                                                    <option value="Casado(a)">Casado(a)</option required>
                                                    <option value="Solteiro(a)">Solteiro(a)</option required>
                                                    <option value="Divorciado(a)">Divorciado(a)</option required>
                                                    <option value="Viúvo(a)">Viúvo(a)</option required>
                                                </select>
                                            </div>
                                        </div>

                                        <div class='col-sm-6 form-group'>
                                                                                  
                                            <div class="form-group no-padding">
                                                <label>Data de Nascimento:</label>
                                                <div class="input-group date">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-calendar"></i>
                                                    </div>
                                                    <input type="date" class="form-control pull-right" id="datepicker_saida" name='data_nascimento' >
                                                </div>
                                            </div>

                                            <div class='form-group'>
                                                <label for="cidade_destino">Selecione o sexo:</label>
                                                <select class='form-control cidade_destino' name="sexo" id="sexo"  value="<?php echo isset($postinmemoria) ? $postinmemoria['cidade_destino'] : ''?>">
                                                    <option value="">Selecione o sexo</option required>
                                                    <option value="Masculino">Masculino</option required>
                                                    <option value="Feminino">Feminino</option required>
                                                </select>
                                            </div>
                                               
                                            <div class="form-group">
                                                <label for="servidor">E-mail </label><br>
                                                <input class='form-control' type="email" name="email" id='email' value="<?php echo isset($postinmemoria) ? $postinmemoria['cpf'] : ''?>">
                                            </div>
                                            
                                            <div class='form-group'>
                                                <label for="cidade_destino">Parentesco o(a) aluno(a): </label>
                                                <select class='form-control cidade_destino' name="parentesco" id="parentesco"  value="<?php echo isset($postinmemoria) ? $postinmemoria['cidade_destino'] : ''?>">
                                                    <option value="">Selecione Parentesco</option required>
                                                    <option value="Pai">Pai</option required>
                                                    <option value="Mãe(a)">Mãe(a)</option required>
                                                    <option value="Tio(a)">Tio(a)</option required>
                                                    <option value="Avo(á)">Avo(á)</option required>
                                                    <option value="Irmão(a)">Irmão(a)</option required>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="menu1" class="tab-pane fade">
                                        <h4 class='text-center'>Cadastro de vaga para a escola: <strong><?php echo $escola ?> </strong></h4> <br>
                                       
                                        <div class="form-group col-sm-12 msgCampoVazio" hidden>
                                            <div class="alert alert-danger alert-dismissible col-sm-12">
                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                                                <span class='msg'></span>
                                            </div>
                                        </div>
                                       
                                        <div class='col-sm-6 form-group'>
                                            <div class="form-group">
                                                <label for="servidor">Nome Completo: </label><br>
                                                <input type="text"  class='form-control' name='nome_aluno' id='nome_aluno' required>
                                            </div>        
                                        
                                            <div class="form-group">
                                                <label for="servidor">CPF do aluno: </label><br>
                                                <input class='form-control' type="text" name="cpf_aluno" id='cpf_aluno' value="<?php echo isset($postinmemoria) ? $postinmemoria['cpf'] : ''?>" required>
                                            </div>

                                            <!-- <div class='form-group'>
                                                <label for="estado_destino">Estado a turma</label>
                                                <select class='form-control data_saida' name="turma" id="turma" value="<?php echo isset($postinmemoria) ? $postinmemoria['estado_destino'] : ''?>" required>
                                                    <option value="">Selecione a turma</option required>
                                                    <option value="Masculino">1</option required>
                                                    <option value="Feminino">2</option required>
                                                </select>
                                            </div> -->

                                            <div class="bootstrap-timepicker form-group no-padding">
                                                <div class="form-group">
                                                    <label>CEP: </label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id='cep' name="cep" required>
                                                        <div class="input-group-addon">
                                                            <button  type='button' class="glyphicon glyphicon-search btnCep"></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>      
                                            
                                            <div class="form-group">
                                                <label for="servidor">Endereço: </label><br>
                                                <input class='form-control' type="text" name="endereco" id='endereco' value="<?php echo isset($postinmemoria) ? $postinmemoria['cpf'] : ''?>" required>
                                            </div>
                                             
                                            <div class="form-group">
                                                <label for="servidor">Bairro: </label><br>
                                                <input class='form-control' type="text" name="bairro" id='bairro' value="<?php echo isset($postinmemoria) ? $postinmemoria['cpf'] : ''?>" required>
                                            </div>

                                        </div>

                                        <div class='col-sm-6 form-group'>
                                            <div class="form-group no-padding">
                                                <label>Data de Nascimento:</label>
                                                <div class="input-group date">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-calendar"></i>
                                                    </div>
                                                    <input type="date" class="form-control pull-right" id="datepicker_saida" name='nascimento_aluno' required>
                                                </div>
                                            </div>

                                            <div class='form-group'>
                                                <label for="cidade_destino">Selecione o sexo:</label>
                                                <select class='form-control cidade_destino' name="sexo_aluno" id="sexo_aluno"  value="<?php echo isset($postinmemoria) ? $postinmemoria['cidade_destino'] : ''?>" required>
                                                    <option value="">Selecione o sexo</option required>
                                                    <option value="Masculino">Masculino</option required>
                                                    <option value="Feminino">Feminino</option required>
                                                </select>
                                            </div>

                                            <div class='form-group'>
                                                <label for="cidade_destino">Selecione o turno</label>
                                                <select class='form-control cidade_destino' name="turno" id="turno"  value="<?php echo isset($postinmemoria) ? $postinmemoria['cidade_destino'] : ''?>" required>
                                                    <option value="">Selecione o turno</option required>   
                                                    <option value="Matutino">Matutino</option required>
                                                    <option value="Vespertino">Vespertino</option required>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="servidor">Numero: </label><br>
                                                <input class='form-control' type="text" name="numero_endereco" id='numero_endereco' value="<?php echo isset($postinmemoria) ? $postinmemoria['cpf'] : ''?>" required>
                                            </div>                       

                                            <div class="form-group">
                                                <label for="servidor">Complemento: </label><br>
                                                <input class='form-control' type="text" name="complemento" id='complemento' value="<?php echo isset($postinmemoria) ? $postinmemoria['cpf'] : ''?>" required>
                                            </div>

                                            <div class="alert alert-danger" hidden>
                                                <strong>Danger!</strong> Indicates a dangerous or potentially negative action.
                                            </div>
                                        </div>

                                        <!-- <div class='form-group col-sm-12'> -->
                                            <!-- <label for="cidade_destino">Selecione a escola</label>
                                            <select class='form-control cidade_destino' name="escola" id="escola"  value="<?php echo isset($postinmemoria) ? $postinmemoria['cidade_destino'] : ''?>">
                                                <?php echo $escolas ?>
                                            </select>
                                        </div> -->

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

        $('.btnCep').click(function() {
            let cep = $('#cep').val();
            $.ajax({
                url: "<?php echo base_url('Home/buscaCep')?>",
                type: 'POST',
                dataType: 'json',
                data: {cep: cep},
                success: function(data) {
                    let obj = JSON.parse(data);
                    console.log(obj);
                    $('#cep').val(obj.cep);
                    $('#bairro').val(obj.bairro);
                    $('#endereco').val(obj.logradouro);
                }
            })  
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