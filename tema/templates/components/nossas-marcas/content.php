<?php if ($args["first_run"]) : ?>
    <link rel="stylesheet" href="<?php _e(asset(sprintf("../templates/components/%s/style.css", basename(__DIR__)))); ?>">

<?php endif; ?>

<?php
$relative_path = get_template_directory_uri() . str_replace(get_theme_root() . '/' . str_replace('%2F', '/', rawurlencode(get_template())), "", __DIR__);

?>
<section id="nossas-marcas">
    <div class="container">
        <h2>Nossas Marcas</h2>

        <div class="lista-nossas-marcas">
            <div>
                <img src="<?php _e($relative_path . "/images/medicalsan.png"); ?>" alt="">
                <a href="https://www.medicalsan.com.br/" class="botao-5" target="_blank">Acesse o site</a>
            </div>            
            <div>
                <img src="<?php _e($relative_path . "/images/medstart.png"); ?>" alt="">
                <a href="https://www.medstart.com.br/" class="botao-5" target="_blank">Acesse o site</a>
            </div>            
            <div>
                <img src="<?php _e($relative_path . "/images/sanbank.png"); ?>" alt="">
                <a href="https://www.sanbank.com.br/" class="botao-5" target="_blank">Acesse o site</a>
            </div>           
             <div>
                <img src="<?php _e($relative_path . "/images/vitoria.png"); ?>" alt="">
                <a href="<?php _e("/404"); ?>" class="botao-5" target="_blank">Acesse o site</a>
            </div>            
             <div>
                <img src="<?php _e($relative_path . "/images/tech5.png"); ?>" alt="">
                <a href="http://www.tech5.com.br/novosite/index.aspx" class="botao-5" target="_blank">Acesse o site</a>
            </div>
        </div>
    </div>
</section>