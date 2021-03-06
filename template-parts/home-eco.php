<section id="ecology" class="section eco">
    <div class="content">

        <div class="text">
            <h3 data-aos="fade-right">y bajando el impacto <br />
                en la huella de <strong>CO<sup>2</sup> en un 75%</strong></h3>
            <p data-aos="fade-right">Usar acero reciclado baja el impacto en el uso de recursos naturales virgenes y en la huella de carbono hasta en un 80% en el proceso productivo.</p>
            <ul class="items">
                <li data-aos="flip-up" data-aos-delay="100" data-aos-offset="200">
                    <div class="icon"><img src="<?php bloginfo('template_directory'); ?>/img/SVG/icon-recicle.svg" alt="Icono reciclado" /></div>
                    <h4 class="white">Hasta <strong>87%</strong></h4>
                    <p>Materiales reciclados </p>
                </li>
                <li data-aos="flip-up" data-aos-delay="110" data-aos-offset="300">
                    <div class="icon"><img src="<?php bloginfo('template_directory'); ?>/img/SVG/icon-production.svg" alt="Icono produccion" /></div>
                    <h4 class="white"><strong>2x</strong></h4>
                    <p>
                        Optimización <br />
                        de producción
                    </p>
                </li>
                <li data-aos="flip-up" data-aos-delay="120" data-aos-offset="400">
                    <div class="icon"><img src="<?php bloginfo('template_directory'); ?>/img/SVG/icon-co2.svg" alt="Icono CO2" /></div>
                    <h4 class="white">Hasta <strong>8x</strong></h4>
                    <p>Baja en las emisiones<br />
                        por transporte
                    </p>
                </li>
            </ul>
            <a href="#contacto">
                <div class="white btn">Conozca más >></div>
            </a>
        </div>
        <?php if (!wp_is_mobile()) { ?>
            <div class="picts">
                <div class="square one" data-aos="fade-up"><img src="<?php bloginfo('template_directory'); ?>/img/SVG/pat-white.svg" alt="Pattern" /></div>
                <div class="square two" data-aos="fade-down"><img src="<?php bloginfo('template_directory'); ?>/img/SVG/pat-white.svg" alt="Pattern" /></div>
                <img src="<?php bloginfo('template_directory'); ?>/img/eco-min.png" alt="Ecology" class="eco1" data-aos="fade-left" data-aos-delay="200" data-aos-offset="100" />
            </div>
        <?php } ?>
    </div>
    <?php if (wp_is_mobile()) { ?>
        <div class="img-mobile">
            <img src="<?php bloginfo('template_directory'); ?>/img/eco-min.png" alt="Ecology" class="eco1" data-aos="fade-left" data-aos-delay="200" data-aos-offset="100" />
        </div>
    <?php } ?>
</section>