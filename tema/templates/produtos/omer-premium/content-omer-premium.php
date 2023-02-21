<section class="content-text-<?php echo 'css-' . get_post_field('post_name', get_post()); ?>">
<div class="container">
    <p>

    <i class="fa fa-plus	"></i>
  
Moderno <br>
Eficaz
    </p>
    <p>
    <i class="fa fa-minus	"></i>
Doloroso  <br>
Efeitos colaterais

    </p>
</div>

</section>

<section class="content-<?php echo 'css-' . get_post_field('post_name', get_post()); ?>">
    <div class="bg-image-1">
        <img class="image-1"
            src="<?php echo asset(sprintf("../templates/produtos/%s/images/image1.svg", get_post_field('post_name', get_post()))); ?>"
            alt="">
    </div>
</section>