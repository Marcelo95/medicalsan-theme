<?php if ($args["first_run"]) : ?>
    <link rel="stylesheet" href="<?php _e(asset(sprintf("../templates/components/%s/style.css", basename(__DIR__)))); ?>">

<?php endif; ?>

<?php
$relative_path = get_template_directory_uri() . str_replace(get_theme_root() . '/' . str_replace('%2F', '/', rawurlencode(get_template())), "", __DIR__);

?>
<section id="nossas-marcas">

    <div class="nossas-marcas-title-and-buttons">


        <h2>Nossas Marcas</h2>

        <div class="buttons-nossas-marcas">
            <button type="button" onclick="move2('left')"> <i class="fa fa-arrow-left"></i> </button>
            <button type="button" onclick="move2('right')"> <i class="fa fa-arrow-right"></i> </button>
        </div>

    </div>


    <div class="scroll2">
        <div class="lista-nossas-marcas">
            <div>
                <div class="fundo-1" style="background-image:url(<?php _e($relative_path . "/images/medicalsan.png"); ?>);">
                    <a href="https://www.medicalsan.com.br/" class="botao-5" target="_blank">Acesse o site</a>
                    <div class="text-ocult">
                        <div class="img-mob" style="background-image: url(<?php _e($relative_path . "/images/medicalsan-mobile.png"); ?>);"></div>
                        <p>Equipamentos de excelência para as áreas da dermatologia, odontologia, estética e medicina estética.</p>
                        <a href="https://www.medicalsan.com.br/" class="botao-5" target="_blank">Acesse o site</a>
                    </div>
                </div>
            </div>
            <div>
                <div class="fundo-2" style="background-image:url(<?php _e($relative_path . "/images/medstart.png"); ?>);">
                    <a href="https://www.medstart.com.br/" class="botao-5" target="_blank">Acesse o site</a>

                    <div class="text-ocult">
                        <div class="img-mob" style="background-image: url(<?php _e($relative_path . "/images/medstart-mobile.png"); ?>);"></div>
                        <p>Posicionada nas linhas de entrada para atender profissionais que estão iniciando sua jornada empreendedora.</p>
                        <a href="https://www.medstart.com.br/" class="botao-5" target="_blank">Acesse o site</a>
                    </div>
                </div>
            </div>
            <div>
                <div class="fundo-3" style="background-image:url(<?php _e($relative_path . "/images/sanbank.png"); ?>);">
                    <a href="https://www.sanbank.com.br/" class="botao-5" target="_blank">Acesse o site</a>

                    <div class="text-ocult">
                        <div class="img-mob" style="background-image: url(<?php _e($relative_path . "/images/sanbank-mobile.png"); ?>);"></div>
                        <p>Braço financeiro do Grupo para acessibilizar o crédito e viabilizar as operações de longo prazo.</p>
                        <a href="https://www.sanbank.com.br/" class="botao-5" target="_blank">Acesse o site</a>
                    </div>
                </div>
            </div>
            <div>
                <div class="fundo-4" style="background-image:url(<?php _e($relative_path . "/images/vitoria.png"); ?>);">
                    <a href="<?php _e("/404"); ?>" class="botao-5" target="_blank">Acesse o site</a>
                    <div class="text-ocult">
                        <div class="img-mob" style="background-image: url(<?php _e($relative_path . "/images/vitoria-mobile.png"); ?>);"></div>
                        <p>Fornecimento de placas e circuitos eletrônicos para o mercado nacional.</p>
                        <a href="<?php _e("/404"); ?>" class="botao-5" target="_blank">Acesse o site</a>
                    </div>
                </div>
            </div>
            <div>
                <div class="fundo-5" style="background-image:url(<?php _e($relative_path . "/images/tech5.png"); ?>);">
                    <a href="http://www.tech5.com.br/novosite/index.aspx" class="botao-5" target="_blank">Acesse o site</a>
                    <div class="text-ocult">
                        <div class="img-mob" style="background-image: url(<?php _e($relative_path . "/images/tech5-mobile.png"); ?>);"></div>
                        <p>Soluções em tecnologia para produção em larga escala.</p>
                        <a href="http://www.tech5.com.br/novosite/index.aspx" class="botao-5" target="_blank">Acesse o site</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script>
        var _startX;
        var _scrollLeft;
        var _isDragging = false;
        var _minhaDiv = document.querySelector("section#nossas-marcas .scroll2");


        // adiciona os listeners de eventos
        _minhaDiv.addEventListener("mousedown", function(e) {
            _startX = e.pageX - _minhaDiv.offsetLeft;
            _scrollLeft = _minhaDiv.scrollLeft;
            _isDragging = true;
            if (e.target.tagName === "A") {
                e.preventDefault(); // previne a ação padrão do link
            }
        });

        _minhaDiv.addEventListener("touchstart", function(e) {
            _startX = e.touches[0].pageX - _minhaDiv.offsetLeft;
            _scrollLeft = _minhaDiv.scrollLeft;
            _isDragging = true;
            if (e.target.tagName === "A") {
                e.preventDefault(); // previne a ação padrão do link
            }
        });

        _minhaDiv.addEventListener("mousemove", function(e) {
            if (!_isDragging || e.target.tagName === "A") return;
            e.preventDefault();
            var x = e.pageX - _minhaDiv.offsetLeft;
            var walk = (x - _startX) * 2; // aumenta a velocidade da rolagem
            _minhaDiv.scrollLeft = _scrollLeft - walk;

            var larguraContainer = _minhaDiv.scrollWidth - _minhaDiv.clientWidth;
            var porcentagem = (_minhaDiv.scrollLeft / larguraContainer) * 100;


        });

        _minhaDiv.addEventListener("touchmove", function(e) {
            if (!_isDragging || e.target.tagName === "A") return;
            e.preventDefault();
            var x = e.touches[0].pageX - _minhaDiv.offsetLeft;
            var walk = (x - _startX) * 2; // aumenta a velocidade da rolagem
            _minhaDiv.scrollLeft = _scrollLeft - walk;


            var larguraContainer = _minhaDiv.scrollWidth - _minhaDiv.clientWidth;
            var porcentagem = (_minhaDiv.scrollLeft / larguraContainer) * 100;


        });

        _minhaDiv.addEventListener("mouseup", function() {
            _isDragging = false;
        });

        _minhaDiv.addEventListener("touchend", function() {
            _isDragging = false;
        });

        function move2(direction) {
            var andar = Math.floor((_minhaDiv.scrollWidth - _minhaDiv.clientWidth) * 0.2);
            console.log(andar)
            switch (direction) {
                case "left":
                    _minhaDiv.scrollTo({
                        left: _minhaDiv.scrollLeft - andar,
                        top: 0,
                        behavior: 'smooth'
                    })
                    break;
                case "right":
                    _minhaDiv.scrollTo({
                        left: _minhaDiv.scrollLeft + andar,
                        top: 0,
                        behavior: 'smooth'
                    })
                    break;

                default:
                    break;
            }


            var larguraContainer = _minhaDiv.scrollWidth - _minhaDiv.clientWidth;
            var porcentagem = (_minhaDiv.scrollLeft / larguraContainer) * 100;

        }
    </script>
