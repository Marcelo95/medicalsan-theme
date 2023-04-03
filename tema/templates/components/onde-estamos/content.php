<?php if ($args["first_run"]) : ?>
    <link rel="stylesheet" href="<?php _e(asset(sprintf("../templates/components/%s/style.css", basename(__DIR__)))); ?>">

<?php endif; ?>

<?php
$relative_path = get_template_directory_uri() . str_replace(get_theme_root() . '/' . str_replace('%2F', '/', rawurlencode(get_template())), "", __DIR__);



?>

<section class="mapa-de-estados">
    <div class="chamadas">
        <h1>Onde tem assistência técnica Medical San?</h1>
        <h2>A Medical San possui ampla rede de assistência técnica pelo Brasil. </h2>

        <h3>Encontre a mais próxima de você:</h3>
    </div>

    <div class="box-mapa-e-enderecos">
        <div class="init-mapa-estados">

            <?php echo file_get_contents($relative_path . "/images/mapa.svg"); ?>
        </div>


        <div class="lista-enderecos">

            <div class="seletor-estados">
                <select id="seletor">
                    <option value="">Selecione um estado</option>
                    <option value="estado-ac">AC</option>
                    <option value="estado-al">AL</option>
                    <option value="estado-ap">AP</option>
                    <option value="estado-am">AM</option>
                    <option value="estado-ba">BA</option>
                    <option value="estado-ce">CE</option>
                    <option value="estado-df">DF</option>
                    <option value="estado-es">ES</option>
                    <option value="estado-go">GO</option>
                    <option value="estado-ma">MA</option>
                    <option value="estado-mt">MT</option>
                    <option value="estado-ms">MS</option>
                    <option value="estado-mg">MG</option>
                    <option value="estado-pa">PA</option>
                    <option value="estado-pb">PB</option>
                    <option value="estado-pr">PR</option>
                    <option value="estado-pe">PE</option>
                    <option value="estado-pi">PI</option>
                    <option value="estado-rj">RJ</option>
                    <option value="estado-rn">RN</option>
                    <option value="estado-rs">RS</option>
                    <option value="estado-ro">RO</option>
                    <option value="estado-rr">RR</option>
                    <option value="estado-sc">SC</option>
                    <option value="estado-sp">SP</option>
                    <option value="estado-se">SE</option>
                    <option value="estado-to">TO</option>
                </select>
            </div>


            <div class="list-address">
                <?php echo file_get_contents(__DIR__ . "/address.php"); ?>
            </div>


        </div>


    </div>


</section>

<script type="text/javascript">
    const selectElement = document.getElementById("seletor");

    selectElement.addEventListener("change", (event) => {
        const selectedValue = event.target.value;
        showState(selectedValue);

    });

    function showState(stateClass, elem) {
        jQuery(".estados-carregados > div").removeClass("isShow").hide();
        jQuery("." + stateClass).addClass("isShow").show();
        selectElement.value = stateClass;




        if (elem) {
            jQuery(elem).parent().find("path").removeClass("active");
            jQuery(elem).addClass("active");
        } else {
            jQuery("#mapa path").removeClass("active");



            jQuery("#mapa path." + stateClass).addClass("active");
        }
  
    }

    showState("estado-sp")
</script>