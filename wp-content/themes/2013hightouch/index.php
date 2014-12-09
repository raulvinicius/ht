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

                        <?php 
                            $page = get_page_by_path( 'cases-home' );

                            $casesHome = get_field('cases', $page->ID);

                            foreach ($casesHome as $caseHome) :

                                $case = $caseHome['case'];
                                $chamada = $case[0]->chamada;
                                $imagem = $caseHome['imagem_destaque'];
                                $imagem = wp_get_attachment_image_src( $imagem, 'full' );

                         ?>

                            <li class="item">

                                <div id="img-case" style="background-image: url('<?php echo $imagem[0] ?>')">
                                    <div id="mascara-azul">
                                        <div id="mascara-granulada">

                                            <div id="title-img">
                                                <h2>[ Últimos cases ]</h2>
                                                <button class="animado-02-in-out" href="#myCarousel" data-slide="prev"><i><img src="<?php bloginfo("template_url") ?>/img/hi-icon-seta-left.png"></i></button>
                                                <button class="animado-02-in-out radius" href="#myCarousel" data-slide="next" id="btn-right"><i><img src="<?php bloginfo("template_url") ?>/img/hi-icon-seta-right.png"></i></button>
                                            </div>

                                            <div class="figcaption radius">
                                                <h2><?php echo get_the_title($case[0]->ID) ?></h2>
                                                <p><?php echo $chamada ?></p>
                                                <a href="<?php echo get_permalink($case[0]->ID) ?>"><img src="<?php bloginfo("template_url") ?>/img/hi-icon-ver-mais-home.png"></a>
                                            </div>

                                            <span id="lbl-role">role</span>

    <!--                                         <span class="tip" data-toggle="popover" data-content="Palestrante Mario Sergio Cortella" data-original-title="Dica" style="top: 70%; left: 60%  "></span>
     -->
                                        </div>
                                    </div>
                                </div>

                            </li>

                        <?php endforeach; ?>

                      </ul>
                      <!-- Carousel nav -->
<!--                       <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                      <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a> -->
                    </div>

                </div>
            </div>
        </section>

        <section>
            <div id="wrap-solucoes-home" class="wrap-solucoes container-fluid">
                <div class="row-fluid">
                    <h2 class="span12">Soluções</h2>
                </div>
                
                <div class="row-fluid">
                    <blockquote class="span12">Mesmo que a solução seja um </br>simples abraço, nós temos.</blockquote>
                </div>

                <div class="container">
                    <div class="row-fluid">

                        <div class="span4">
                            <article class="hided animado-02-in-out" data-wrap="wrap-solucoes">
                                <figure class="animado-06-in-out"><img src="<?php bloginfo("template_url") ?>/img/hi-icon-eventos.png"></figure>
                                <h3>Eventos Corporativos</h3>
                                <!-- <p>No entanto, não podemos esquecear que a complexidade dos estudos entanto.</p> -->
                            </article>
                        </div>

                        <div class="span4">
                            <article class="hided animado-02-in-out" data-wrap="wrap-solucoes">
                                <figure class="animado-06-in-out"><img src="<?php bloginfo("template_url") ?>/img/hi-icon-treinamento.png"></figure>
                                <h3>Treinamento</h3>
                                <!-- <p>No entanto e modernização de todos os recursos funcionais envolvidos.</p> -->
                            </article>
                        </div>

                        <div class="span4">
                            <article class="hided animado-02-in-out" data-wrap="wrap-solucoes">
                                <figure class="animado-06-in-out"><img src="<?php bloginfo("template_url") ?>/img/hi-icon-marketing.png"></figure>
                                <h3>Marketing</h3>
                                <!-- <p>No entanto e modernização de todos os recursos funcionais envolvidos.</p> -->
                            </article>
                        </div>

                    </div>
                </div>

            </div>
        </section>

        <div id="bottom-solucoes" class="entrelinha container-fluid">
        </div>

         <section>
            <div id="wrap-conheca-nos" class="container-fluid">
                <div class="container">
                    <div class="row-fluid">

                        <div class="span4">
                            <figure><img class="animado-02-in-out hided" src="<?php bloginfo("template_url") ?>/img/hi-figure-branca.png"></figure>
                        </div>

                        <div id="wrap-texto" class="hided animado-06-in-out span5 offset1">
                            <p>A [hi] é uma empresa que desafia pessoas a melhorarem a cada dia. Acreditamos em pessoas mais vivas, mais humanas, amáveis e envolvidas.</p>

                            <a class="animado-06-in-out" href="<?php bloginfo('url') ?>/hi">Desafie-se</a>
                        </div>


                    </div>
                </div>
            </div>
        </section>

        <div id="bottom-conheca-nos" class="entrelinha container-fluid">
        </div>

    <?php 
        $GLOBALS['footerHome'] = true;
        get_footer();
    ?>

<?php endif; ?>