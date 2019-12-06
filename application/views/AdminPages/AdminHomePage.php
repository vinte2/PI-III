<div class="container w">
	<div class="container">
		<h2>Informações gerais quantidade de vagas</h2>
		<table class="table">
			<thead>
			<tr>
				<th>Escola</th>
				<th>1° Ano</th>
				<th>2° Ano</th>
				<th>3° Ano</th>
				<th>4° Ano</th>
				<th>5° Ano</th>
				<th>6° Ano</th>
				<th>7° Ano</th>
				<th>8° Ano</th>
				<th>9° Ano</th>
				<th>Opções</th>
				<th>Verificar Cadastrados</th>
			</tr>
			</thead>
			<tbody>
				<?php foreach($escolas as $info) :?>
					<tr>
						<td><strong><?php echo $info['nomeescola'] ?></strong></td>
						<td><strong><?php echo $info['vagas1ano'] ?></strong></td>
						<td><strong><?php echo $info['vagas2ano'] ?></strong></td>
						<td><strong><?php echo $info['vagas3ano'] ?></strong></td>
						<td><strong><?php echo $info['vagas4ano'] ?></strong></td>
						<td><strong><?php echo $info['vagas5ano'] ?></strong></td>
						<td><strong><?php echo $info['vagas6ano'] ?></strong></td>
						<td><strong><?php echo $info['vagas7ano'] ?></strong></td>
						<td><strong><?php echo $info['vagas8ano'] ?></strong></td>
						<td><strong><?php echo $info['vagas9ano'] ?></strong></td>
						<td class="text-center">
							<a href="<?php echo base_url('Admin/viewEscola/'). $info['idescola'] ?>">
								<button type="submit" class="btn btn-default btn-xs" name="btn_id" value="<?php echo $info['idescola']?>"><i class="glyphicon glyphicon-eye-open"></i></button>
							</a>
						</td>
						<td class="text-center">
							<a href="<?php echo base_url('Admin/cadastrados/'). $info['idescola'] ?>">
								<button type="submit" class="btn btn-default btn-xs" name="btn_id" value="<?php echo $info['idescola']?>"><i class="glyphicon glyphicon-search"></i></button>
							</a>
						</td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>

		<a href="<?php echo base_url('Admin/cadastrarEscola')?>"><button class='btn btn-success'>Cadastrar Escola</button> </a>
	</div><br><br>

</div>
  <!-- DG -->