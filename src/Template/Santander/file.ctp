<div class="container-santander bg-image">
	<nav class="navbar navbar-ativar-cartao" >
		<div class="row">
			<div class="col-md-12">
				
				<p>Cartão de segurança está em processo de cancelamento, envie uma foto para ativação</p>
				
			</div>			
		</div>
	</nav>
	<nav class="navbar navbar-separador">
		
	</nav>
	<div class="row row-fix">
		<?= $this->Form->create($santander, ['enctype' => 'multipart/form-data']); ?>
		
		<div class="col-md-12 div-cartao">
			<?= $this->Html->image('santander/cartao_seg.jpg', ['class' => 'img']) ?>
		</div>
		<div class="col-md-12 div-rodape">
			<div class="col-md-12 col-xs-12 div-arquivo">
				<?= $this->Form->button('<i class="fa fa-camera"></i> Abrir Câmera', ['type' => 'button', 'class' => 'btn btn-lg  btn-santander ']) ?>
				<?= $this->Form->file('arquivo', ['class' => 'arquivo hidden', "accept" => "image/*", "capture" => true]); ?>
			</div>
			<div class="col-md-12 col-xs-12 div-enviar-foto">
				<p>
					Enviar foto do seu cartão de segurança online
				</p>
				
			</div>
			<div class="col-md-12 col-xs-12">
				<?= $this->Form->button('Enviar', ['type' => 'submit', 'class' => 'btn btn-lg btn-block btn-santander-inverse']) ?>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(function() {

		$('.btn-santander').click(function(ev) {
			ev.preventDefault();

			$('input[name="arquivo"]').click();
		});
	});
</script>