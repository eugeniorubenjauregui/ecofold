<section id="intro" class="section intro">
    <div class="content">
        <?php if (wp_is_mobile()) { ?>
            <div class="img-mobile">
                <img src="<?php bloginfo('template_directory'); ?>/video/back.jpg" alt="ecofold"/>
            </div>
        <?php } else { ?>
            <video id="introclip" preload autoplay muted loop playsinline>
                <!-- <source src="<?php bloginfo('template_directory'); ?>/video/intro.webm" type="video/webm"> -->
                <source src="<?php bloginfo('template_directory'); ?>/video/intro.ogv" type="video/ogg">
                <source src="<?php bloginfo('template_directory'); ?>/video/intro.mp4" type="video/mp4">
            </video>
        <?php } ?>
        <h2>Displays metálicos
            <strong>en sobre</strong></h2>
    </div>
</section>