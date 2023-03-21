<?php if ($args["first_run"]) : ?>
    <link rel="stylesheet" href="<?php _e(asset(sprintf("../templates/components/%s/style.css", basename(__DIR__)))); ?>">

<?php endif;

$relative_path = get_template_directory_uri() . str_replace(get_theme_root() . '/' . str_replace('%2F', '/', rawurlencode(get_template())), "", __DIR__);


$name_show = "";
$is_theme_medicalsan = false;
if (strpos(strtolower(wp_get_theme()->get("Name")), "start")) {
    $name_show = "MedStart";
} else if (strpos(strtolower(wp_get_theme()->get("Name")), "san")) {
    $is_theme_medicalsan = true;
    $name_show = "Medical San";
}

?>

<section class="only-text text-selos-block text-center js-scroll  fade-in-bottom">
    <div class="container">
        <h2 class="title-selos">
            Nossos selos de qualidade e certificações
        </h2>
        <div class="selos selos-images">
            <div><img src="<?php echo $relative_path . "/images/ncc.png"; ?>" alt="NCC"></div>
            <div><img src="<?php echo $relative_path . "/images/iso.png"; ?>" alt="ISO-13485-2016"></div>
            <div><img src="<?php echo $relative_path . "/images/gptw.png"; ?>" alt="GPTW"></div>
            <div><img src="<?php echo $relative_path . "/images/patente.png"; ?>" alt="Patente Verde"></div>
        </div>
        <div class="text-center">
            <a href="<?php _e(home_url("contato")); ?>" class="bt3 botao-3 <?php echo $is_theme_medicalsan ? "bt2-medicalsan" : ""; ?>"> <span>Seja um distribuidor <?php _e($name_show); ?></span></a>
        </div>
    </div>
</section>