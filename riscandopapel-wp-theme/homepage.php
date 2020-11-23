<?php
/*
*
*Template Name: Home Page
*/
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<!-- HOME VITRINE -->
<section class="home-vitrine white">
    <div class="container">
        
        <!-- SUPER BANNER ROTATIVO -->
        <div class="row">
            
            <!-- SUPER BANNER ROTATIVO -->
            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-12 super-banner">
                <div id="superBanner" class="owl-carousel owl-theme">
                     <!-- PAGINA -->
                     <div class="item" style="background: url('<?php bloginfo('stylesheet_directory'); ?>/images/slide1.png') #333 no-repeat;background-size: cover;background-position: center center;">
                    </div>
                     <!-- PAGINA -->
                     <!-- PAGINA -->
                     <div class="item" style="background: url('<?php bloginfo('stylesheet_directory'); ?>/images/slide1.png') #333 no-repeat;background-size: cover;background-position: center center;">
                    </div>
                     <!-- PAGINA -->
                     <!-- PAGINA -->
                     <div class="item" style="background: url('<?php bloginfo('stylesheet_directory'); ?>/images/slide1.png') #333 no-repeat;background-size: cover;background-position: center center;">
                    </div>
                     <!-- PAGINA -->
                </div>

                <div class="controle-banner-na-homepage2">
                   <div class="owl-theme">
                       <div class="owl-controls">
                          <div class="custom-nav-banner2 owl-nav"></div>
                       </div>
                   </div>
                </div>
                <ul id="carousel-custom-dots" class="owl-dots"> 
                        <li class="owl-dot">&nbsp;</li>
                        <li class="owl-dot">&nbsp;</li>
                        <li class="owl-dot">&nbsp;</li> 
                    </ul> 
            </div>
            <!-- SUPER BANNER ROTATIVO -->

            <!-- MINI BANNER -->
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12 caixa-mini-banner">
                <div class="mini-banner">
                    
                    <h2>
                        <a href="#">
                            <small>NOME DA OFERTA PARA O MINI DESTAQUE</small>
                            30% OFF <br clear="both">
                            <span>SAIBA MAIS</span>
                        </a>
                    </h2>

                </div>
            </div>
            <!-- MINI BANNER -->

        </div>
        <!-- SUPER BANNER ROTATIVO -->


        <!-- ICONES -->
        <div class="row">
            <div class="col-12">
                <div class="mini-icones">
                    <div class="row">

                        <!-- COLUNA -->
                        <div class="col">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/icon1.svg" alt="Parcele em até 12x" />
                            <h3>
                                Parcele em até 12x
                                <small>
                                    <a href="#" title="saiba mais">
                                        saiba mais
                                    </a>
                                </small>
                            </h3>
                        </div>
                        <!-- COLUNA -->

                        <!-- COLUNA -->
                        <div class="col">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/icon2.svg" alt="Frete grátis acima de R$ 100,00" />
                            <h3>
                                Frete grátis acima de R$ 100,00
                                <small>
                                    <a href="#" title="saiba mais">
                                        saiba mais
                                    </a>
                                </small>
                            </h3>
                        </div>
                        <!-- COLUNA -->

                        <!-- COLUNA -->
                        <div class="col">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/icon3.svg" alt="Produtos das melhores marcas" />
                            <h3>
                                Produtos das melhores marcas
                                <small>
                                    <a href="#" title="saiba mais">
                                        saiba mais
                                    </a>
                                </small>
                            </h3>
                        </div>
                        <!-- COLUNA -->

                        <!-- COLUNA -->
                        <div class="col">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/icon4.svg" alt="Atendimento via WhatsApp" />
                            <h3>
                                Atendimento via WhatsApp
                                <small>
                                    <a href="#" title="saiba mais">
                                        saiba mais
                                    </a>
                                </small>
                            </h3>
                        </div>
                        <!-- COLUNA -->

                        <!-- COLUNA -->
                        <div class="col">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/icon5.svg" alt="Lista escolar completa" />
                            <h3>
                                Lista escolar completa
                                <small>
                                    <a href="#" title="saiba mais">
                                        saiba mais
                                    </a>
                                </small>
                            </h3>
                        </div>
                        <!-- COLUNA -->


                    </div>
                </div>
            </div>
        </div>
        <!-- ICONES -->

        <!-- TITULO SESSAO -->
        <div class="row">
            <div class="col-12 titulo-sessao">
                <h3>Produtos em Destaque</h3>
            </div>
        </div>
        <!-- TITULO SESSAO -->

        <!-- MINI BANNERS -->
        <div class="row">

            <!-- MINI BANNER -->
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12 caixa-mini-banner mini-banner-laterais">
                <div class="mini-banner">
                    
                    <a href="#" title="Nome do produto" class="mini-banner-foto-destaque">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/produto-faber.png" alt="Nome do produto" />
                    </a>

                    <h2>
                        <a href="#" title="Nome do produto">
                            <small>NOME DA OFERTA PARA O MINI DESTAQUE</small>
                            30% OFF <br clear="both">
                            <span>SAIBA MAIS</span>
                        </a>
                    </h2>

                </div>
            </div>
            <!-- MINI BANNER -->

            <!-- MINI BANNER -->
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12 caixa-mini-banner mini-banner-laterais">
                <div class="mini-banner">
                    
                    <a href="#" title="Nome do produto" class="mini-banner-foto-destaque">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/produto-faber.png" alt="Nome do produto" />
                    </a>

                    <h2>
                        <a href="#" title="Nome do produto">
                            <small>NOME DA OFERTA PARA O MINI DESTAQUE</small>
                            30% OFF <br clear="both">
                            <span>SAIBA MAIS</span>
                        </a>
                    </h2>

                </div>
            </div>
            <!-- MINI BANNER -->

            <!-- MINI BANNER -->
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12 caixa-mini-banner mini-banner-laterais">
                <div class="mini-banner">
                    
                    <a href="#" title="Nome do produto" class="mini-banner-foto-destaque">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/produto-faber.png" alt="Nome do produto" />
                    </a>

                    <h2>
                        <a href="#" title="Nome do produto">
                            <small>NOME DA OFERTA PARA O MINI DESTAQUE</small>
                            30% OFF <br clear="both">
                            <span>SAIBA MAIS</span>
                        </a>
                    </h2>

                </div>
            </div>
            <!-- MINI BANNER -->

            <!-- MINI BANNER -->
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12 caixa-mini-banner mini-banner-laterais">
                <div class="mini-banner">
                    
                    <a href="#" title="Nome do produto" class="mini-banner-foto-destaque">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/produto-faber.png" alt="Nome do produto" />
                    </a>

                    <h2>
                        <a href="#" title="Nome do produto">
                            <small>NOME DA OFERTA PARA O MINI DESTAQUE</small>
                            30% OFF <br clear="both">
                            <span>SAIBA MAIS</span>
                        </a>
                    </h2>

                </div>
            </div>
            <!-- MINI BANNER -->
            
        </div>
        <!-- MINI BANNERS -->

        <!-- BANNER GRANDE -->
        <div class="row">
            <div class="col-12 banner-grande">
                <a href="#" title="Título do banner">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/banner-grande.png" alt="Banner grande" />
                </a>
            </div>
        </div>
        <!-- BANNER GRANDE -->

    </div>
</section>
<!-- HOME VITRINE -->



<!-- LOOP PRODUTOS -->
<section class="loop-produtos white">
    <div class="container">
        
        <div class="row">
            
            <!-- PRODUTO -->
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                <div class="produto">
                    <div class="imagem-produto" style="background: url('<?php bloginfo('stylesheet_directory'); ?>/images/produto2.png') transparent no-repeat;background-size: 80% auto;background-position: center center;">
                        <a href="#" title="Caderno Tilibra Capa Dourada Escolar 2020, com pauta, 200 páginas">
                            &nbsp;
                        </a>
                    </div>
                    <h2>
                        <a href="#" title="Caderno Tilibra Capa Dourada Escolar 2020, com pauta, 200 páginas">
                            Caderno Tilibra Capa Dourada Escolar 2020, com pauta, 200 páginas
                        </a>
                    </h2>
                    <h3>
                        <small><strike>R$20,90</strike></small>
                        R$ 20,90
                        <small>Em até 12x de R$ 2,90</small>
                        <span>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </span>
                    </h3>
                </div>
            </div>
            <!-- PRODUTO -->


            <!-- PRODUTO -->
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                <div class="produto">
                    <div class="imagem-produto" style="background: url('<?php bloginfo('stylesheet_directory'); ?>/images/produto3.png') transparent no-repeat;background-size: 80% auto;background-position: center center;">
                        <a href="#" title="Caderno Tilibra Capa Dourada Escolar 2020, com pauta, 200 páginas">
                            &nbsp;
                        </a>
                    </div>
                    <h2>
                        <a href="#" title="Caderno Tilibra Capa Dourada Escolar 2020, com pauta, 200 páginas">
                            Caderno Tilibra Capa Dourada Escolar 2020, com pauta, 200 páginas
                        </a>
                    </h2>
                    <h3>
                        <small><strike>R$109,90</strike></small>
                        R$ 99,90
                        <small>Em até 12x de R$ 2,90</small>
                        <span>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </span>
                    </h3>
                </div>
            </div>
            <!-- PRODUTO -->


            <!-- PRODUTO -->
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                <div class="produto">
                    <div class="imagem-produto" style="background: url('<?php bloginfo('stylesheet_directory'); ?>/images/produto4.jpg') transparent no-repeat;background-size: 80% auto;background-position: center center;">
                        <a href="#" title="Caderno Tilibra Capa Dourada Escolar 2020, com pauta, 200 páginas">
                            &nbsp;
                        </a>
                    </div>
                    <h2>
                        <a href="#" title="Caderno Tilibra Capa Dourada Escolar 2020, com pauta, 200 páginas">
                            Caderno Tilibra Capa Dourada Escolar 2020, com pauta, 200 páginas
                        </a>
                    </h2>
                    <h3>
                        <small><strike>R$20,90</strike></small>
                        R$ 20,90
                        <small>Em até 12x de R$ 2,90</small>
                        <span>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </span>
                    </h3>
                </div>
            </div>
            <!-- PRODUTO -->


            <!-- PRODUTO -->
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                <div class="produto">
                    <div class="imagem-produto" style="background: url('<?php bloginfo('stylesheet_directory'); ?>/images/produto-faber.png') transparent no-repeat;background-size: 80% auto;background-position: center center;">
                        <a href="#" title="Caderno Tilibra Capa Dourada Escolar 2020, com pauta, 200 páginas">
                            &nbsp;
                        </a>
                    </div>
                    <h2>
                        <a href="#" title="Caderno Tilibra Capa Dourada Escolar 2020, com pauta, 200 páginas">
                            Caderno Tilibra Capa Dourada Escolar 2020, com pauta, 200 páginas
                        </a>
                    </h2>
                    <h3>
                        <small><strike>R$202,90</strike></small>
                        R$ 20,90
                        <small>Em até 12x de R$ 2,90</small>
                        <span>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </span>
                    </h3>
                </div>
            </div>
            <!-- PRODUTO -->


            <!-- PRODUTO -->
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                <div class="produto">
                    <div class="imagem-produto" style="background: url('<?php bloginfo('stylesheet_directory'); ?>/images/produto-faber.png') transparent no-repeat;background-size: 80% auto;background-position: center center;">
                        <a href="#" title="Caderno Tilibra Capa Dourada Escolar 2020, com pauta, 200 páginas">
                            &nbsp;
                        </a>
                    </div>
                    <h2>
                        <a href="#" title="Caderno Tilibra Capa Dourada Escolar 2020, com pauta, 200 páginas">
                            Caderno Tilibra Capa Dourada Escolar 2020, com pauta, 200 páginas
                        </a>
                    </h2>
                    <h3>
                        <small><strike>R$202,90</strike></small>
                        R$ 20,90
                        <small>Em até 12x de R$ 2,90</small>
                        <span>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </span>
                    </h3>
                </div>
            </div>
            <!-- PRODUTO -->


            <!-- PRODUTO -->
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                <div class="produto">
                    <div class="imagem-produto" style="background: url('<?php bloginfo('stylesheet_directory'); ?>/images/produto4.jpg') transparent no-repeat;background-size: 80% auto;background-position: center center;">
                        <a href="#" title="Caderno Tilibra Capa Dourada Escolar 2020, com pauta, 200 páginas">
                            &nbsp;
                        </a>
                    </div>
                    <h2>
                        <a href="#" title="Caderno Tilibra Capa Dourada Escolar 2020, com pauta, 200 páginas">
                            Caderno Tilibra Capa Dourada Escolar 2020, com pauta, 200 páginas
                        </a>
                    </h2>
                    <h3>
                        <small><strike>R$20,90</strike></small>
                        R$ 20,90
                        <small>Em até 12x de R$ 2,90</small>
                        <span>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </span>
                    </h3>
                </div>
            </div>
            <!-- PRODUTO -->


            <!-- PRODUTO -->
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                <div class="produto">
                    <div class="imagem-produto" style="background: url('<?php bloginfo('stylesheet_directory'); ?>/images/produto3.png') transparent no-repeat;background-size: 80% auto;background-position: center center;">
                        <a href="#" title="Caderno Tilibra Capa Dourada Escolar 2020, com pauta, 200 páginas">
                            &nbsp;
                        </a>
                    </div>
                    <h2>
                        <a href="#" title="Caderno Tilibra Capa Dourada Escolar 2020, com pauta, 200 páginas">
                            Caderno Tilibra Capa Dourada Escolar 2020, com pauta, 200 páginas
                        </a>
                    </h2>
                    <h3>
                        <small><strike>R$109,90</strike></small>
                        R$ 99,90
                        <small>Em até 12x de R$ 2,90</small>
                        <span>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </span>
                    </h3>
                </div>
            </div>
            <!-- PRODUTO -->

            <!-- PRODUTO -->
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                <div class="produto">
                    <div class="imagem-produto" style="background: url('<?php bloginfo('stylesheet_directory'); ?>/images/produto2.png') transparent no-repeat;background-size: 80% auto;background-position: center center;">
                        <a href="#" title="Caderno Tilibra Capa Dourada Escolar 2020, com pauta, 200 páginas">
                            &nbsp;
                        </a>
                    </div>
                    <h2>
                        <a href="#" title="Caderno Tilibra Capa Dourada Escolar 2020, com pauta, 200 páginas">
                            Caderno Tilibra Capa Dourada Escolar 2020, com pauta, 200 páginas
                        </a>
                    </h2>
                    <h3>
                        <small><strike>R$20,90</strike></small>
                        R$ 20,90
                        <small>Em até 12x de R$ 2,90</small>
                        <span>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </span>
                    </h3>
                </div>
            </div>
            <!-- PRODUTO -->


            <!-- PRODUTO -->
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                <div class="produto">
                    <div class="imagem-produto" style="background: url('<?php bloginfo('stylesheet_directory'); ?>/images/produto2.png') transparent no-repeat;background-size: 80% auto;background-position: center center;">
                        <a href="#" title="Caderno Tilibra Capa Dourada Escolar 2020, com pauta, 200 páginas">
                            &nbsp;
                        </a>
                    </div>
                    <h2>
                        <a href="#" title="Caderno Tilibra Capa Dourada Escolar 2020, com pauta, 200 páginas">
                            Caderno Tilibra Capa Dourada Escolar 2020, com pauta, 200 páginas
                        </a>
                    </h2>
                    <h3>
                        <small><strike>R$20,90</strike></small>
                        R$ 20,90
                        <small>Em até 12x de R$ 2,90</small>
                        <span>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </span>
                    </h3>
                </div>
            </div>
            <!-- PRODUTO -->


            <!-- PRODUTO -->
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                <div class="produto">
                    <div class="imagem-produto" style="background: url('<?php bloginfo('stylesheet_directory'); ?>/images/produto3.png') transparent no-repeat;background-size: 80% auto;background-position: center center;">
                        <a href="#" title="Caderno Tilibra Capa Dourada Escolar 2020, com pauta, 200 páginas">
                            &nbsp;
                        </a>
                    </div>
                    <h2>
                        <a href="#" title="Caderno Tilibra Capa Dourada Escolar 2020, com pauta, 200 páginas">
                            Caderno Tilibra Capa Dourada Escolar 2020, com pauta, 200 páginas
                        </a>
                    </h2>
                    <h3>
                        <small><strike>R$109,90</strike></small>
                        R$ 99,90
                        <small>Em até 12x de R$ 2,90</small>
                        <span>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </span>
                    </h3>
                </div>
            </div>
            <!-- PRODUTO -->


            <!-- PRODUTO -->
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                <div class="produto">
                    <div class="imagem-produto" style="background: url('<?php bloginfo('stylesheet_directory'); ?>/images/produto4.jpg') transparent no-repeat;background-size: 80% auto;background-position: center center;">
                        <a href="#" title="Caderno Tilibra Capa Dourada Escolar 2020, com pauta, 200 páginas">
                            &nbsp;
                        </a>
                    </div>
                    <h2>
                        <a href="#" title="Caderno Tilibra Capa Dourada Escolar 2020, com pauta, 200 páginas">
                            Caderno Tilibra Capa Dourada Escolar 2020, com pauta, 200 páginas
                        </a>
                    </h2>
                    <h3>
                        <small><strike>R$20,90</strike></small>
                        R$ 20,90
                        <small>Em até 12x de R$ 2,90</small>
                        <span>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </span>
                    </h3>
                </div>
            </div>
            <!-- PRODUTO -->


            <!-- PRODUTO -->
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                <div class="produto">
                    <div class="imagem-produto" style="background: url('<?php bloginfo('stylesheet_directory'); ?>/images/produto-faber.png') transparent no-repeat;background-size: 80% auto;background-position: center center;">
                        <a href="#" title="Caderno Tilibra Capa Dourada Escolar 2020, com pauta, 200 páginas">
                            &nbsp;
                        </a>
                    </div>
                    <h2>
                        <a href="#" title="Caderno Tilibra Capa Dourada Escolar 2020, com pauta, 200 páginas">
                            Caderno Tilibra Capa Dourada Escolar 2020, com pauta, 200 páginas
                        </a>
                    </h2>
                    <h3>
                        <small><strike>R$202,90</strike></small>
                        R$ 20,90
                        <small>Em até 12x de R$ 2,90</small>
                        <span>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </span>
                    </h3>
                </div>
            </div>
            <!-- PRODUTO -->



        </div>

    </div>
</section>
<!-- LOOP PRODUTOS -->


<?php endwhile; endif; ?>
<?php get_footer(); ?>