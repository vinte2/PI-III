<div class="container w">
	<input type="hidden" value="" id='id_indefere'>
	<div class="container">
		<div class='text-center'>
			<h3>Informações gerais dos cadastrados na escola</h3>
			<h2><strong><?php echo $escola ?></strong></h2>
		</div>
		<table class="table">
			<thead>
			<tr>
				<th>Protocolo</th>
				<th>Data Inscrição</th>
				<th>Aluno</th>
				<th>CPF Aluno</th>
				<!--<th>Data Nascimento</th>-->
				<th>Turma</th>
				<th>Turno</th>
				<th>Responsável</th>
				<th>Ação</th>
				<th>Indeferir</th>
				<th>Pdf</th>
			</tr>
			</thead>
			<tbody>
				<?php foreach($cadastrados as $info) :?>
					<tr>
						<td><strong><?php echo $info['numero'] ?></strong></td>
						<td><strong><?php echo date('d/m/Y H:i', strtotime($info['data_cadastro'])) ?></strong></td>
						<td><strong><?php echo $info['aluno'] ?></strong></td>
						<td><strong><?php echo $info['cpfaluno'] ?></strong></td>
						 <!--<td><strong><?php echo date('d/m/Y', strtotime($info['datanascimento'])) ?></strong></td>-->
						<td><strong><?php echo $info['ano'] ?></strong></td>
						<td><strong><?php echo $info['turno'] ?></strong></td>
						<td><strong><?php echo $info['responsavel'] ?></strong></td>
						<td><button class='btn btn-primary btn-xs '>Matricula</button></td>
						<?php if($info['status'] == 'indeferido') : ?>
							<td> <span class="label label-warning">Indeferido</span> </td>
						<?php else: ?>
							<td id=<?php echo  'indeferir_' . $info['id'] ?>><button class='btn btn-danger btn-xs centralModalWarning' data-toggle="modal" data-target="#centralModalWarning" value="<?php echo $info['id'] ?>">Indeferir</button></td>
						<?php endif ?>
						<td><form action="<?php echo base_url('Admin/pdfProtocolo')?>" method='post'>
							<input type="text" name='id_protoclo' id='id_protoclo' value="<?php echo$info['id']?>" hidden>
							<button class="btn btn-success btn-xs btnDonwload" hidden>Gerar PDF</button>
						</form></td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
		<a href="<?php echo base_url('Admin/cadastrados/'). $idescola ?>"><button class='btn btn-success'>Voltar</button></a>	
	</div><br><br>

		
	<!-- Central Modal Medium Warning -->
	<div class="modal fade" id="centralModalWarning" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-notify modal-warning" role="document">
			<!--Content-->
			<div class="modal-content">
			<!--Header-->
			<div class="modal-header">
				<p class="heading lead">Motivo do indeferimento</p>
			</div>

			<!--Body-->
			<div class="modal-body">
				<label for="motivo">Motivo</label><br>
				<textarea name="motivo" id="motivo" cols="77" rows="3"></textarea>
			</div>

			<!--Footer-->
			<div class="modal-footer justify-content-center">
				<a type="button" class="btn btn-warning confirmIndeferimento" data-dismiss="modal">Confirmar<i class="far fa-gem ml-1 text-white"></i></a>
			</div>
			</div>
			<!--/.Content-->
		</div>
	</div>
	<!-- Central Modal Medium Warning-->
</div>

<!-- PORTFOLIO SECTION -->
<script src="<?php echo base_url('assets/lib/jquery/jquery.min.js')?>"></script>
<script>
	jQuery(document).ready(function( $ ) {

		var id_indefere = 0;
		$('.centralModalWarning').click(function() {
			id_indefere = $(this).val();
		})

		$('.confirmIndeferimento').click(function() {
			var r = confirm("Precione um dos botões!\nEntre OK ou Cancelar.\nOk para confirmar o indeferimento deste cadastro");
			if(r == true) {
				let motivo = $('#motivo').val();
				if (motivo != '') {
					$.ajax({
						url: "<?php echo base_url('Admin/indeferir')?>",
						type: 'POST',
						dataType: 'json',
						data: {idProtocolo: id_indefere, motivo: motivo},
						success: function(data) {
							if(data == 200) {
								$('#indeferir_'+id_indefere).html('<span class="label label-warning label-sm">Indeferido</span>');
								$(this).hide();
								$('#motivo').val('');
							}
						}
					})
				}else{
					alert('Para indeferir este cadastro, é necessário informar o motivo');
				}
			}
		})
		
	})
</script>
  <!-- DG -->