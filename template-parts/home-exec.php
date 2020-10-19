<section id="execution" class="section exec">
    <div class="content">

        <div class="text">
            <img src="<?php bloginfo('template_directory'); ?>/img/SVG/icon-clock.svg" alt="Icono tiempos" width="100" />
            <h3><strong>Ejecución LATAM <br />en tiempo récord</strong></h3>
            <p>Contamos con representantes en toda la región con el conocimiento y la tecnología para hacer cualquier ejecución con ECOFOLD en tiempo récord</p>
            <ul class="flags">
                <li data-aos="flip-up" data-aos-delay="200" data-aos-offset="200">
                    <img src="<?php bloginfo('template_directory'); ?>/img/SVG/ar.svg" alt="Argentina" />
                </li>
                <li data-aos="flip-up" data-aos-delay="220" data-aos-offset="200">
                    <img src="<?php bloginfo('template_directory'); ?>/img/SVG/br.svg" alt="Brasil" />
                </li>
                <li data-aos="flip-up" data-aos-delay="240" data-aos-offset="200">
                    <img src="<?php bloginfo('template_directory'); ?>/img/SVG/co.svg" alt="Colombia" />
                </li>
                <li data-aos="flip-up" data-aos-delay="260" data-aos-offset="200">
                    <img src="<?php bloginfo('template_directory'); ?>/img/SVG/cl.svg" alt="Chile" />
                </li>
                <li data-aos="flip-up" data-aos-delay="280" data-aos-offset="200">
                    <img src="<?php bloginfo('template_directory'); ?>/img/SVG/mx.svg" alt="México" />
                </li>
            </ul>
            <a href="#contacto">
                <div class="green btn rigth">Conozca más >></div>
            </a>
        </div>
        <?php if (!wp_is_mobile()) { ?>
            <div class="picts">
                <img src="<?php bloginfo('template_directory'); ?>/img/colgante-min.png" alt="Ecology" class="eco1" data-aos="fade-right" data-aos-delay="100" data-aos-offset="250" />
                <div class="square one" data-aos="fade-up"><img src="<?php bloginfo('template_directory'); ?>/img/SVG/pattern.svg" alt="Pattern" /></div>
            </div>
        <?php } ?>
    </div>
    <?php if (wp_is_mobile()) { ?>
        <div class="img-mobile">
            <img src="<?php bloginfo('template_directory'); ?>/img/colgante-min.png" alt="Ecology" class="eco1" data-aos="fade-right" data-aos-delay="100" data-aos-offset="250" />
        </div>
    <?php } ?>
</section>