<section class="content-10-text js-scroll fade-in-bottom">

    <div class="box-center">
        <h2>Tecnologia e pesquisa para os melhores resultados.</h2>
        <p>
            O <?php the_title(); ?> tem sua eficácia comprovada por estudo!
        </p>
        <a href="" data-bs-target="#eficacia" data-bs-toggle="modal" class="botao-7">Confira aqui</a>
    </div>
</section>


<?php

$html_popup = '
        <h2 >Veja a eficácia do tratamento com ' . get_the_title() . ' </h2>        
        <table>
            <tr>
            <td>
            <h3>Antes</h3>
            <img src="' . asset(sprintf("../templates/produtos/%s/images/antes.png", get_post_field('post_name', get_post()))) . '" alt="">
        </td>
        <td>
            <h3>Depois</h3>
            <img src="' . asset(sprintf("../templates/produtos/%s/images/depois.png", get_post_field('post_name', get_post()))) . '" alt="">
        </td>
   
        </tr>
            <tr>
            <td colspan="2">
            <span>' . ($args["name"] ?? '') . '</span>
        </td></tr>
        </table>
        <br>
        <p class="description">' . ($args["description"] ?? '') . '</p>
    ';


?>


<?php do_action("PopupComponent", ["id" => "eficacia", "body" => $html_popup]);  ?>