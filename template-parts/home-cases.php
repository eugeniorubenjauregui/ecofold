<section id="cases" class="cases">
    <div class="content">
        <h2>Casos de éxito</h2>
        <ul>
            <?php
            query_posts(array(
                'post_type' => 'casodexito',
                'showposts' => 20
            ));
            ?>
            <?php while (have_posts()) : the_post(); ?>
                <li>
                    <?php $images = get_field('imagenes'); ?>
                    <?php
                    $field = get_field_object('pais');

                    $value = $field['value']['value'];
                    $label = $field['value']['label'];
                    ?>
                    <?php if (strtotime(get_field('fecha')) > strtotime('-30 days')) { ?>
                        <h3 class="new"><?php the_title(); ?></h3>
                    <?php } else { ?>
                        <h3><?php the_title(); ?></h3>
                    <?php } ?>

                    <div class="flag"><img src="<?php bloginfo('template_directory'); ?>/img/SVG/<?= esc_attr($value); ?>.svg" alt="<?= esc_html($label); ?>" /></div>
                    <?php foreach ($images as $image) : ?>
                        <div class="image-case">
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        </div>
                    <?php endforeach; ?>
                </li>
            <?php endwhile; ?>
        </ul>
    </div>
</section>