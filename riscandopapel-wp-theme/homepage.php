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
                     
                    <?php

                      if( have_rows('banners_rotativos') ):
                        $num_banner=0;
                          while ( have_rows('banners_rotativos') ) : the_row();

                    ?>  

                    <!-- PAGINA -->
                    <div class="item" style="background: url('<?php the_sub_field("imagem_do_banner"); ?>') #333 no-repeat;background-size: cover;background-position: center center;">
                          <a href="<?php the_sub_field("link_de_destino_ao_clicar"); ?>" title="<?php the_sub_field("nome_do_banner_seo"); ?>">
                            &nbsp;
                          </a>
                    </div>
                     <!-- PAGINA -->

                     <?php

                              $num_banner++;
                            endwhile;
                        endif;

                      ?> 
                     

                </div>

                <div class="controle-banner-na-homepage2">
                   <div class="owl-theme">
                       <div class="owl-controls">
                          <div class="custom-nav-banner2 owl-nav"></div>
                       </div>
                   </div>
                </div>

                <ul id="carousel-custom-dots" class="owl-dots"> 
                        <?php

                          if( have_rows('banners_rotativos') ):
                            $num_banner=0;
                              while ( have_rows('banners_rotativos') ) : the_row();

                        ?> 
                            <li class="owl-dot">&nbsp;</li>
                        <?php

                              $num_banner++;
                            endwhile;
                        endif;

                      ?> 
                </ul> 

            </div>
            <!-- SUPER BANNER ROTATIVO -->

            <!-- MINI BANNER -->
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12 caixa-mini-banner">
                
                <?php if(get_field("tipo_de_banner_bql")!="imagem"): ?>

                  <div class="mini-banner">
                      <h2>
                          <a href="<?php the_field("link_de_destino_bql"); ?>" title="<?php the_field("titulo_banner_bql"); ?>">
                              <small><?php the_field("titulo_banner_bql"); ?></small>
                              <?php the_field("%_desconto_bql"); ?><br clear="both">
                              <span>SAIBA MAIS</span>
                          </a>
                      </h2>
                  </div>

                <?php else: ?>

                  <div class="mini-banner" style="background: url('<?php the_field("imagem_do_banner_bql"); ?>') #f2f2f2 no-repeat;background-size: cover;background-position: center center;">
                      <a href="<?php the_field("link_de_destino_bql"); ?>" title="<?php the_field("titulo_banner_bql"); ?>" style="float: left;width: 100%;height: 100%;text-decoration: none;">
                        &nbsp;
                      </a>
                  </div>

                <?php endif; ?>

            </div>
            <!-- MINI BANNER -->

        </div>
        <!-- SUPER BANNER ROTATIVO -->


        <!-- ICONES -->
        <div class="row">
            <div class="col-12">
                <div class="mini-icones">
                    <div class="row">

                      <?php

                        if( have_rows('icones_pos_banner') ):
                          $num_banner=0;
                            while ( have_rows('icones_pos_banner') ) : the_row();

                      ?>

                        <!-- COLUNA -->
                        <div class="col">
                            <img src="<?php the_sub_field("icone"); ?>" alt="<?php the_sub_field("titulo"); ?>" />
                            <h3>
                                <?php the_sub_field("titulo"); ?>
                                <?php if(get_sub_field("link_de_destino")!=""): ?>
                                <small>
                                    <a href="<?php the_sub_field("link_de_destino"); ?>" title="saiba mais">
                                        saiba mais
                                    </a>
                                </small>
                              <?php endif; ?>
                            </h3>
                        </div>
                        <!-- COLUNA -->

                      <?php

                              $num_banner++;
                            endwhile;
                        endif;

                      ?> 
                      
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


            <?php

              if( have_rows('4_mini_banners') ):
                $num_banner=0;
                  while ( have_rows('4_mini_banners') ) : the_row();

            ?>


            <!-- MINI BANNER -->
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 caixa-mini-banner mini-banner-laterais">

                <?php if(get_field("tipo_de_banner")!="imagem"): ?>
                
                   <div class="mini-banner">
                      <a href="#" title="Nome do produto" class="mini-banner-foto-destaque">
                          <img src="<?php the_sub_field("imagem_do_banner"); ?>" alt="<?php the_sub_field("titulo_banner"); ?>" />
                      </a>
                      <h2>
                          <a href="<?php the_sub_field("link_de_destino"); ?>" title="<?php the_sub_field("titulo_banner"); ?>">
                              <small><?php the_sub_field("titulo_banner"); ?></small>
                              <?php the_sub_field("%_desconto"); ?> <br clear="both">
                              <span>SAIBA MAIS</span>
                          </a>
                      </h2>
                  </div>
                
                <?php else: ?>

                  <div class="mini-banner" style="background: url('<?php the_sub_field("imagem_do_banner"); ?>') #f2f2f2 no-repeat;background-size: cover;background-position: center center;">
                      <a href="<?php the_sub_field("link_de_destino"); ?>" title="<?php the_sub_field("titulo_banner"); ?>" style="float: left;width: 100%;height: 100%;text-decoration: none;">
                        &nbsp;
                      </a>
                  </div>
                
                <?php endif; ?>

                
            </div>
            <!-- MINI BANNER -->


            <?php

                    $num_banner++;
                  endwhile;
              endif;

            ?> 

            
        </div>
        <!-- MINI BANNERS -->

        <!-- BANNER GRANDE -->
        <div class="row">
            <div class="col-12 banner-grande">
                <a href="<?php the_field("link_de_destino_ao_clicar_bngrande"); ?>" title="<?php the_field("nome_do_banner_para_seo"); ?>">
                    <img src="<?php the_field("banner_grande_imagem"); ?>" alt="<?php the_field("nome_do_banner_para_seo"); ?>" />
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
            

            <?php 

             $categoria_destaque = get_field("categorias_de_destaque");

             

             //$id = $categoria_destaque[0];

             $args = array( 'post_type' => 'product', 
                            'showposts' => '12', 
                            'posts_per_page' => '12', 
                            'product_cat' => $categoria_destaque 
                          );

                          $loop = new WP_Query( $args );
                          $tot_imp = 0;
                          $controle_postagens = 0;

                          while ( $loop->have_posts() ) : $loop->the_post(); 
                          
                          $_product = wc_get_product( get_the_ID() );
                          global $product;
                          $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
               
            ?> 
            
            <!-- PRODUTO -->
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-12">
                <div class="produto">
                    <div class="imagem-produto" style="background: url('<?php echo $image[0]; ?>') transparent no-repeat;background-size: 80% auto;background-position: center center;">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                            &nbsp;
                        </a>
                    </div>
                    <h2>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h2>
                    <h3>
                        <?php                      

                            if(!$product->is_type( 'variable' )):

                                $cem = $product->get_regular_price();
                                $x = $product->get_sale_price();
                                $valor = $x;
                                if($x==""): $valor = $cem;  endif;
                      
                            else:

                                $cem = $product->get_variation_regular_price('min', true);
                                $x = $product->get_variation_sale_price('min', true);
                                $valor = $x;
                                if($x==""): $valor = $cem; endif;

                                if($x==$cem): $x = ""; endif;

                            endif;
                        
                        ?>
                        
                        <small>
                          <?php if($x!=""): ?>
                            <strike>R$<?php echo number_format($cem,2,",","."); ?></strike>
                          <?php endif; ?>
                        </small>

                        R$ <?php echo number_format($valor,2,",","."); ?>
                        <small>Em <?php echo parcelamentoValorParcela($cem,$valor,12); ?></small>
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

            <?php
                 
              endwhile; 
              wp_reset_query(); 

            ?>


        </div>

    </div>
</section>
<!-- LOOP PRODUTOS -->


<?php endwhile; endif; ?>
<?php get_footer(); ?>