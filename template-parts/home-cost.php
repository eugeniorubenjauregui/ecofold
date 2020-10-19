<section id="costs" class="section costs">
    <div class="content">
        <?php if (!wp_is_mobile()) { ?>
            <div class="picts">
                <div class="square one" data-aos="fade-up"><img src="<?php bloginfo('template_directory'); ?>/img/SVG/pattern.svg" alt="Pattern" /></div>
                <div class="square two" data-aos="fade-down"><img src="<?php bloginfo('template_directory'); ?>/img/SVG/pattern.svg" alt="Pattern" /></div>
                <img src="<?php bloginfo('template_directory'); ?>/img/costs-min.png" alt="Diseños" class="design1" data-aos="fade-right" data-aos="flip-up" data-aos-delay="100" data-aos-offset="100" />
            </div>
        <?php } ?>
        <div class="text">
            <h3>Logrando un <br />
                cambio radical en la<br />
                <span class="green bold">eficiencia de costos </span></h3>
            <p>La cadena de logistica en la industria del POP requiere de multiples proveedores hasta llegar al PDV. Reducir el volumen de traslado y aumentar la vida util del display impacta directamente en el costo de la accion.</p>
            <ul class="items">
                <li data-aos="flip-up" data-aos-delay="200" data-aos-offset="200">
                    <div class="icon"><img src="<?php bloginfo('template_directory'); ?>/img/SVG/icon-pallet.svg" alt="Icono almacenamiento" /></div>
                    <h4 class="green">10X de ahorro</h4>
                    <p>en depósitos y traslados
                    </p>
                </li>
                <li data-aos="flip-up" data-aos-delay="200" data-aos-offset="200">
                    <div class="icon"><img src="<?php bloginfo('template_directory'); ?>/img/SVG/icon-long.svg" alt="Icono durabilidad" /></div>
                    <h4 class="green">3x</h4>
                    <p>Más durable que<br />
                        cualquier display plegable
                    </p>
                </li>
            </ul>
            <a href="#contacto">
                <div class="green btn rigth">Conozca más >></div>
            </a>
        </div>
    </div>
    <?php if (wp_is_mobile()) { ?>
        <div class="img-mobile">
            <img src="<?php bloginfo('template_directory'); ?>/img/costs-min.png" alt="Diseños" class="design1" data-aos="fade-right" data-aos="flip-up" data-aos-delay="100" data-aos-offset="100" />
        </div>
    <?php } ?>
</section>