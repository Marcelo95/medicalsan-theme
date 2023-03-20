<?php if ($args["first_run"]) : ?>
    <link rel="stylesheet" href="<?php _e(asset(sprintf("../templates/components/%s/style.css", basename(__DIR__)))); ?>">
<?php endif; ?>
<?php

$itens = new WP_Query(array('post_type' => 'post', 'post_status' => 'publish', 'limit' => 10, 'tax_query' => array(
    array(
        'taxonomy' => 'post_tag',
        'field'    => 'name',
        'terms'    => 'novidades',
    ),
),));
$itens = (array) $itens->posts;

if (count($itens)) : ?>
    <section class="novo-estilo-de-slider products box-novidades js-scroll  fade-in scrolled">
        <h2 class="desktop">NOVIDADES</h2>

        <div class="container mobile">
            <h2>NOVIDADES</h2>
        </div>
        <div>
            <div class="linha-scroll-1">
                <div>

                    <?php

                    foreach ($itens as $key => $item) {

                        $photo = asset_image_background(get_the_post_thumbnail_url($item->ID), true);
                        $link = sprintf('href="%s"', get_permalink($item->ID));
                        $title = ucfirst($item->post_title);
                        $desc = $item->post_excerpt;
                        $cod = get_post_meta($item->ID, '_metabox_for_produtos_codigo', true);

                        echo sprintf('
                                <a %s  class="box-item-prod ">
                                    <div class="item-photo " %s ></div>
                                    <div class="all-details">
                                    <h2 class="details_2 font-2">%s <i class="material-icons">keyboard_arrow_right</i></h2>   
                                    </div>
                                </a>
                        ', $link, $photo,  $title, $desc);
                    }
                    ?>


                </div>


            </div>
            <div class="setas mobile noselect">
                <i onclick="move('left')" class="fa fa-arrow-left  seta-esquerda"></i>
                <i onclick="move('right')" class="fa fa-arrow-right seta-direita"></i>

            </div>
        </div>

    </section>

<?php endif; ?>



<script>
    var startX;
    var scrollLeft;
    var isDragging = false;
    var isClickEnable = true;
    var minhaDiv = document.querySelector(".novo-estilo-de-slider .linha-scroll-1");

    // Add event listeners to all anchor tags inside minhaDiv
    let links = minhaDiv.getElementsByTagName("a");
    for (let i = 0; i < links.length; i++) {
        links[i].addEventListener("click", function(e) {
            if (!isClickEnable) {
                e.preventDefault();
            } else {
                let newEvent = new MouseEvent('click', e);
                this.dispatchEvent(e);
            }


        });
    }

    // adiciona os listeners de eventos
    minhaDiv.addEventListener("mousedown", function(e) {
        startX = e.pageX - minhaDiv.offsetLeft;
        scrollLeft = minhaDiv.scrollLeft;
        isDragging = true;
    });

    minhaDiv.addEventListener("touchstart", function(e) {
        startX = e.touches[0].pageX - minhaDiv.offsetLeft;
        scrollLeft = minhaDiv.scrollLeft;
        isDragging = true;
    });

    minhaDiv.addEventListener("mousemove", function(e) {
        if (!isDragging) return;
        isClickEnable = false;
        e.preventDefault();
        var x = e.pageX - minhaDiv.offsetLeft;
        var walk = (x - startX) * 2; // aumenta a velocidade da rolagem
        minhaDiv.scrollLeft = scrollLeft - walk;

        var larguraContainer = minhaDiv.scrollWidth - minhaDiv.clientWidth;
        var porcentagem = (minhaDiv.scrollLeft / larguraContainer) * 100;


    });

    minhaDiv.addEventListener("touchmove", function(e) {
        if (!isDragging) return;
        isClickEnable = false;
        e.preventDefault();
        var x = e.touches[0].pageX - minhaDiv.offsetLeft;
        var walk = (x - startX) * 2; // aumenta a velocidade da rolagem
        minhaDiv.scrollLeft = scrollLeft - walk;


        var larguraContainer = minhaDiv.scrollWidth - minhaDiv.clientWidth;
        var porcentagem = (minhaDiv.scrollLeft / larguraContainer) * 100;


    });

    minhaDiv.addEventListener("mouseup", function(e) {
        isDragging = false;
        setTimeout(() => {
            isClickEnable = true;
        }, 500);
    });

    minhaDiv.addEventListener("touchend", function(e) {
        isDragging = false;
        setTimeout(() => {
            isClickEnable = true;
        }, 500);
    });

    function move(direction) {
        var andar = Math.floor((minhaDiv.querySelector("div > a").scrollWidth));
        switch (direction) {
            case "left":
                minhaDiv.scrollTo({
                    left: minhaDiv.scrollLeft - andar,
                    top: 0,
                    behavior: 'smooth'
                })
                break;
            case "right":
                minhaDiv.scrollTo({
                    left: minhaDiv.scrollLeft + andar,
                    top: 0,
                    behavior: 'smooth'
                })
                break;

            default:
                break;
        }


        var larguraContainer = minhaDiv.scrollWidth - minhaDiv.clientWidth;
        var porcentagem = (minhaDiv.scrollLeft / larguraContainer) * 100;


    }
</script>