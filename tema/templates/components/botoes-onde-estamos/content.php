<?php if ($args["first_run"]) : ?>
    <link rel="stylesheet" href="<?php _e(asset(sprintf("../templates/components/%s/style.css", basename(__DIR__)))); ?>">
<?php endif; ?>


<div class="botoes-sac">
   <a href="<?php _e( home_url('pos-venda') ); ?>">

        <span>Acesse nosso <b class="maior">Pós-Venda</b></span>
        <div>
        <img class="ico" src="<?php _e(asset(sprintf("../templates/components/%s/images/%s", basename(__DIR__), "sac.png"))); ?>" >
        </div>

   </a>
</div>
