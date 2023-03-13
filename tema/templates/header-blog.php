<header class="header-style-1 js-scroll fade-in scrolled">

    <div class="navbar-sticky shadow-sm--disable ">

        <div class="navbar navbar-expand-lg nav-top">
            <div class="container">
                <a class="navbar-brand d-none d-sm-block flex-shrink-0" href="<?php echo home_url(); ?>">

                <img class="logo" src="<?php echo asset('images/logo-white.svg'); ?>" alt="Logo">

                </a>
                <a class="navbar-brand d-sm-none flex-shrink-0 me-2" href="<?php echo home_url(); ?>">
                    <img class="logo" src="<?php echo asset('images/logo.png'); ?>" alt="Logo">
                </a>

                <div class="menu-links desktop">
                    <!-- Primary menu-->
                    <?php menu1(); ?>

                    <button type="button" class="btn block-text desktop" data-bs-toggle="collapse" data-bs-target="#collapseFormSearch"><i class=" material-icons" style="font-size: 21px;margin-left: -11px;">search</i></button>
                    <!-- Search-->
                    <div id="collapseFormSearch" class="collapse desktop">
                        <form action="<?php echo home_url(); ?>" class="input-group my-3 ">
                            <input name="s" class="form-control rounded-start" type="text" placeholder="Pesquisar por...">
                            <button type="button" class="style-hidden-button close-right" data-bs-toggle="collapse" data-bs-target="#collapseFormSearch"><i class="material-icons position-absolute top-50 end-0 translate-middle-y text-muted fs-base me-3">close</i></button>

                            <button type="submit" class="style-hidden-button"><i class="material-icons position-absolute top-50 end-0 translate-middle-y text-muted fs-base me-3">search</i></button>

                        </form>
                    </div>
                </div>

                <div class="languages desktop">
                    <?php echo do_shortcode('[language-switcher]'); ?>

                </div>



                <div class="navbar-toolbar d-flex flex-shrink-0 align-items-center">

                    <button class="navbar-toggler toggler-mobile" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <i class="material-icons" style="font-size: 36px;margin-left: -7px;">menu</i>

                    </button>


                </div>
            </div>
        </div>
        <div class="navbar navbar-expand-lg nav-bottom mt-n2 pt-0 pb-2">
            <div class="collapse navbar-collapse navbar-stuck-menu " id="navbarCollapse">
                <div class="container">

                    <button class="navbar-toggler toggler-mobile float-end m-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-expanded="true" aria-controls="navbarCollapse">
                        <i class="material-icons" style="font-size: 36px;margin-left: -7px;">close</i>
                    </button>
                    <!-- Search-->
                    <form action="<?php echo home_url(); ?>" class="input-group d-lg-none my-3">
                        <input name="s" class="form-control rounded-start" type="text" placeholder="Pesquisar por...">
                        <button type="submit" class="style-hidden-button"><i class="material-icons position-absolute top-50 end-0 translate-middle-y text-muted fs-base me-3">search</i></button>
                    </form>

                    <div class="menu-links mobile">
                        <!-- Primary menu-->
                        <?php menu1(); ?>
                    </div>


                </div>
                <div class="languages mobile">
                    <?php echo do_shortcode('[language-switcher]'); ?>

                </div>
            </div>
        </div>
    </div>
    <?php if (get_post_type() == "produtos" && is_single()) : ?>
        <div class="container desktop">
            <?php custom_breadcrumbs(); ?>
        </div>
    <?php endif; ?>

</header>