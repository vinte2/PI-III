  <!-- PORTFOLIO SECTION -->
<script src="<?php echo base_url('assets/lib/jquery/jquery.min.js')?>"></script>

<div id="dg">
    <div class="container">
        <div class="row centered">
            <h4>VAGAS DINPONÍVEIS</h4>
            <br><br>
            <h3 id='ano'>Vagas para o</h3>

            <div class='form-group'>
                <select class='form-control anoselecionado' name="anoselecionado" id="anoselecionado">
                    <option value="">Selecione o ano</option required>   
                    <option value="vagas1ano">1 ano</option required>
                    <option value="vagas2ano">2 ano</option required>
                    <option value="vagas3ano">3 ano</option required>
                    <option value="vagas4ano">4 ano</option required>
                    <option value="vagas5ano">5 ano</option required>
                    <option value="vagas6ano">6 ano</option required>
                    <option value="vagas7ano">7 ano</option required>
                    <option value="vagas8ano">8 ano</option required>
                    <option value="vagas9ano">9 ano</option required>
                </select>
            </div>

            <h1 class='turmaSelected'></h1>
            <div class='conteudo container w'> 
                <div class="resultado row centered">   
                </div>
            </div>
        </div>
        <!-- row -->
    </div>
        <!-- container -->
  </div>
  <!-- DG -->

<script>
    jQuery(document).ready(function( $ ) {
        var selectedAno = 'vagas1ano';
        $('.anoselecionado').change(function() {
            selectedAno = $(this).val();

            let url = "<?php echo base_url('Home/getShart')?>";
            $.post(url, {
                ano: selectedAno
            }, function(data) {
                let obj = JSON.parse(data);
                var html = '';
                Object.keys(obj).forEach(function(key) {
                    console.log(obj[key].idescola);
                    let linkCadastro;
                    if( obj[key][selectedAno] > 0) {
                        linkCadastro = '<a href="<?php echo base_url('Home/cadastrar/')?>' +`${obj[key].idescola}/${selectedAno}` + '" ><button class="btn btn-success cadastroAluno"  >Cadastro</button></a>';
                    }else{
                        linkCadastro = '<button class="btn btn-success cadastroAluno" disabled>Cadastro</button>';
                    }
                    
                    html +=                     
                    '<div class="col-lg-4 card" style="margin-top: 6vmin; padding:3vmin">'+
                        '<div class="tilt">'+
                            '<h4><b>' + obj[key].nomeescola + '</b></h4>'+
                            '<p class="card-text">Existem <strong> ' + obj[key][selectedAno] + '</strong>  vagas disponíveis nesta escola</p>'+
                            linkCadastro+
                        '</div>'+
                    '</div>'
                    ;
                });

                let turma = selectedAno.replace('vagas', '');
                turma = turma.replace('ano', '° ano');
                $('.turmaSelected').text(turma);
                $('.resultado').html(html);
            });
        })
    })
</script>


