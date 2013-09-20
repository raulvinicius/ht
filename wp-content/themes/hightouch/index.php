<?php if ( strpos( $_SERVER[ "REQUEST_URI" ], "frontend" ) ) : ?>

    <?php $tUrl = get_bloginfo("template_url"); ?>

    <?php require( "frontend/index.php" ) ?>

<?php else : ?>

    <?php get_header(); ?>

    <section id="hightouch">

        <section id="section-case-home">
            <div id="wrap-case-home" class="container-fluid">
                <div class="row-fluid">

                    <div id="myCarousel" class="carousel slide">
                      <!-- Carousel items -->
                      <ul class="carousel-inner">
                        <li class="active item">

                            <div id="img-case">
                                <div id="mascara-azul">
                                    <div id="mascara-granulada">

                                        <div id="title-img">
                                            <h2>[ Últimos cases ]</h2>
                                            <button href="#myCarousel" data-slide="prev"><i><img src="<?php bloginfo("template_url") ?>/img/hi-icon-seta-left.png"></i></button>
                                            <button class="radius" href="#myCarousel" data-slide="next" id="btn-right"><i><img src="<?php bloginfo("template_url") ?>/img/hi-icon-seta-right.png"></i></button>
                                        </div>

                                        <div class="figcaption radius">
                                            <h2>Encontro Leonardo da Vinci 01</h2>
                                            <p>Podemos já vislumbrar o modo pelo qual o novo modelo estrutural aqui preconizado assume importantes posições no estabelecimento do.</p>
                                            <a href="#"><img src="<?php bloginfo("template_url") ?>/img/hi-icon-ver-mais-home.png"></a>
                                        </div>

                                        <span>role</span>

                                    </div>
                                </div>
                            </div>

                        </li>
                        <li class="item">

                            <div id="img-case">
                                <div id="mascara-azul">
                                    <div id="mascara-granulada">

                                        <div id="title-img">
                                            <h2>[ Últimos cases ]</h2>
                                            <button href="#myCarousel" data-slide="prev"><i><img src="<?php bloginfo("template_url") ?>/img/hi-icon-seta-left.png"></i></button>
                                            <button class="radius" href="#myCarousel" data-slide="next" id="btn-right"><i><img src="<?php bloginfo("template_url") ?>/img/hi-icon-seta-right.png"></i></button>
                                        </div>

                                        <div class="figcaption radius">
                                            <h2>Encontro Leonardo da Vinci 02</h2>
                                            <p>Podemos já vislumbrar o modo pelo qual o novo modelo estrutural aqui preconizado assume importantes posições no estabelecimento do.</p>
                                            <a href="#"><img src="<?php bloginfo("template_url") ?>/img/hi-icon-ver-mais-home.png"></a>
                                        </div>

                                        <span>role</span>

                                    </div>
                                </div>
                            </div>


                        </li>
                        <li class="item">

                            <div id="img-case">
                                <div id="mascara-azul">
                                    <div id="mascara-granulada">

                                        <div id="title-img">
                                            <h2>[ Últimos cases ]</h2>
                                            <button href="#myCarousel" data-slide="prev"><i><img src="<?php bloginfo("template_url") ?>/img/hi-icon-seta-left.png"></i></button>
                                            <button class="radius" href="#myCarousel" data-slide="next" id="btn-right"><i><img src="<?php bloginfo("template_url") ?>/img/hi-icon-seta-right.png"></i></button>
                                        </div>

                                        <div class="figcaption radius">
                                            <h2>Encontro Leonardo da Vinci 03</h2>
                                            <p>Podemos já vislumbrar o modo pelo qual o novo modelo estrutural aqui preconizado assume importantes posições no estabelecimento do.</p>
                                            <a href="#"><img src="<?php bloginfo("template_url") ?>/img/hi-icon-ver-mais-home.png"></a>
                                        </div>

                                        <span>role</span>

                                    </div>
                                </div>
                            </div>


                        </li>
                      </ul>
                      <!-- Carousel nav -->
                      <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                      <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
                    </div>

<!--                     <ul class="carousel animado-06-in-out">
                        <li>
                            <div id="img-case">
                                <div id="mascara-azul">
                                    <div id="mascara-granulada">

                                        <div id="title-img">
                                            <h2>[ Últimos cases ]</h2>
                                            <button class="carousel-anterior"><i><img src="<?php bloginfo("template_url") ?>/img/hi-icon-seta-left.png"></i></button>
                                            <button id="btn-right" class="carousel-proximo radius"><i><img src="<?php bloginfo("template_url") ?>/img/hi-icon-seta-right.png"></i></button>
                                        </div>

                                        <div class="figcaption radius">
                                            <h2>Encontro Leonardo da Vinci 01</h2>
                                            <p>Podemos já vislumbrar o modo pelo qual o novo modelo estrutural aqui preconizado assume importantes posições no estabelecimento do.</p>
                                            <a href="#"><img src="<?php bloginfo("template_url") ?>/img/hi-icon-ver-mais-home.png"></a>
                                        </div>

                                        <span>role</span>

                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="img-case">
                                <div id="mascara-azul">
                                    <div id="mascara-granulada">

                                        <div id="title-img">
                                            <h2>[ Últimos cases ]</h2>
                                            <button class="carousel-anterior"><i><img src="<?php bloginfo("template_url") ?>/img/hi-icon-seta-left.png"></i></button>
                                            <button id="btn-right" class="carousel-proximo radius"><i><img src="<?php bloginfo("template_url") ?>/img/hi-icon-seta-right.png"></i></button>
                                        </div>

                                        <div class="figcaption radius">
                                            <h2>Encontro Leonardo da Vinci 02</h2>
                                            <p>Podemos já vislumbrar o modo pelo qual o novo modelo estrutural aqui preconizado assume importantes posições no estabelecimento do.</p>
                                            <a href="#"><img src="<?php bloginfo("template_url") ?>/img/hi-icon-ver-mais-home.png"></a>
                                        </div>

                                        <span>role</span>

                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
 -->
                </div>
            </div>
        </section>


        <section>
            <div id="wrap-solucoes-home" class="container-fluid">
                <div class="row-fluid">
                    <h2 class="span12">Soluções</h2>
                </div>
                
                <div class="row-fluid">
                    <blockquote class="span12">Mesmo que a solução seja um </br>simples abraço, nós temos.</blockquote>
                </div>

                <div class="container">
                    <div class="row-fluid">

                        <div class="span4">
                            <article>
                                <figure class="animado-06-in-out"><img src="<?php bloginfo("template_url") ?>/img/hi-icon-eventos.png"></figure>
                                <h3>Eventos Corporativos</h3>
                                <p>No entanto, não podemos esquecear que a complexidade dos estudos entanto.</p>
                            </article>
                        </div>

                        <div class="span4">
                            <article>
                                <figure class="animado-06-in-out"><img src="<?php bloginfo("template_url") ?>/img/hi-icon-treinamento.png"></figure>
                                <h3>Treinamento</h3>
                                <p>No entanto e modernização de todos os recursos funcionais envolvidos.</p>
                            </article>
                        </div>

                        <div class="span4">
                            <article>
                                <figure class="animado-06-in-out"><img src="<?php bloginfo("template_url") ?>/img/hi-icon-consultoria.png"></figure>
                                <h3>Consultoria</h3>
                                <p>No entanto, não podemos esquecear que a complexidade dos estudos.</p>
                            </article>
                        </div>

                    </div>
                </div>

            </div>
        </section>


        <section>
            <div id="wrap-conheca-nos" class="container-fluid">
                <div class="container">
                    <div class="row-fluid">

                        <div class="span4">
                            <figure><img src="<?php bloginfo("template_url") ?>/img/hi-figure-branca.png"></figure>
                        </div>

                        <div class="span5 offset1">
                            <p>Acima de tudo, é fundamental ressaltar que o consenso sobre a necessidade de qualificação apresenta
                            tendências no sentido de aprovar a manutenção de alternativas às soluções ortodoxas.</p>

                            <a class="animado-06-in-out" href="#">Conheça-nos</a>
                        </div>


                    </div>
                </div>
            </div>
        </section>

    <?php get_footer(); ?>

<?php endif; ?>